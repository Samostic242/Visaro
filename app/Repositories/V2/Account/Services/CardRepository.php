<?php

namespace App\Repositories\V2\Account\Services;
use App\Enums\User\CardChargeVendorEnum;
use App\Http\Integrations\Flutterwave\FlutterwaveConnection;
use App\Http\Integrations\Flutterwave\Requests\VerifyTransactionRequest;
use App\Http\Integrations\Paystack\PaystackConnection;
use App\Http\Integrations\Paystack\Requests\ChargeCardRequest;
use App\Http\Integrations\Flutterwave\Requests\ChargeCardRequest as FlutterWaveCharge;
use App\Interfaces\Repositories\V2\Account\Services\CardRepositoryInterface;
use App\Models\Card;
use App\Models\UserCard;
use App\Models\UserCompliance;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Saloon\Http\Response;

class CardRepository implements CardRepositoryInterface
{
    public function findById(string $id)
    {
        return UserCard::find($id);
    }
    public function create(array $data)
    {
        $check_if_card_exists = UserCard::where('user_id', auth()->user()->id)->whereActive(true)->first();
        if ($check_if_card_exists) {
            return respondError(400, '01', 'A Card Already Exist for this user, Kindly delete before adding a new card');
        }
        $user = auth()->user();
        $card = new UserCard();
        $card->public_id = uuid() ?? null;
        $card->user_id = auth()->user()->id;
        $card->vendor = $data['vendor'];
        $card->save();
        if($card->vendor == CardChargeVendorEnum::PAYSTACK){
            $paystack = new PaystackConnection();
            $charge_card = $paystack->send(new ChargeCardRequest($amount = 5000, $user->email));
            $charge_card->onError(function (Response $resp) {
                Log::info('Card Charge Request', [$resp]);
                return respondError(400, "An error occurred", $resp);
            });
            $data = $charge_card->json();
            if(isset($data['status']) && $data['status'] == false){
                return respondError(400, '01', 'An error while adding a new card');
            }
            $card->transaction_reference = $data['data']['reference'];
            $card->save();
            return respondSuccess('Add Card Transaction Initiated Successfully', $data);
        }
        $transaction_ref = generateChargeCardReference();
        $flutterwave = new FlutterwaveConnection();
        $charge_card = $flutterwave->send(new FlutterWaveCharge($amount = 50, $user->email,  $transaction_ref));
        $charge_card->onError(function (Response $resp) {
            Log::info('Card Charge Request', [$resp]);
            return respondError(400, "An error occurred", $resp);
        });

        $data = $charge_card->json();
        if(isset($data['status']) && $data['status'] != 'success'){
            return respondError(400, '01', 'An error while adding a new card');
        }
        $card->transaction_reference = $transaction_ref;
        $card->save();
        $resp = [
                'status' => true,
                'message' => 'Authorization URL created',
                'data' => [
                    'authorization_url' => $data['data']['link'],
                ],
        ];
        return respondSuccess('Add Card Transaction Initiated Successfully', $resp);
    }

    public function update(array $data)
    {
        $card = $this->findById($data['card_id']);
        if(!$card)
        {
            return false;
        }
  /*       $card->owner = $data['owner'] ?? $card->owner ;
        $card->type = $data['type'] ?? $card->type ;
        $card->number = $data['number'] ?? $card->number ;
        $card->expiration_month = $data['expiration_month'] ?? $card->expiration_month ;
        $card->expiration_year = $data['expiration_year'] ?? $card->expiration_year ;
        $card->cvv = $data['cvv'] ?? $card->cvv ;
        $card->last_four_digit = $data['last_four_digit'] ?? $card->last_four_digit ;
        $card->country = $data['country'] ?? $card->country ;
        $card->state = $data['state'] ?? $card->state ;
        $card->postal_code = $data['postal_code'] ?? $card->postal_code ;
        $card->city = $data['city'] ?? $card->city ;
        $card->street_address = $data['street_address'] ?? $card->street_address ;
        $card->lga = $data['lga'] ?? $card->lga ;
        $card->provider = $data['provider'] ?? $card->provider ;
        $card->provider_logo = upload_to_cloudinary('ProviderLogo', $data['provider_logo']->getRealPath()) ?? null ;
        $card->allow_charge = $data['allow_charge'] ?? $card->allow_charge ; */
        $card->nickname = $data['nickname'] ?? $card->nickname ;
        $card->save();
        return $card ;
    }

    public function getCard()
    {
        $user = auth()->user();
        return $card = UserCard::where('user_id', $user->id)->whereActive(true)->first();

    }

    public function updateCardStatus($data){
        $card = UserCard::where('transaction_reference', $data['data']['reference'])
        ->whereActive(false)->first();
        $compliance = UserCompliance::where('user_id', $card->user_id)->first();
        if($card->metadata !== NULL){
            return respondSuccess('Transaction exists and has been handled');
        }
        if($card){
            $card->last_four_digit = $data['data']['authorization']['last4'] ?? null;
            $card->last_charged = Carbon::parse($data['data']['paid_at']) ?? null;
            $card->value = ($data['data']['amount']) / 100 ?? null;
            $card->authorization_code = $data['data']['authorization']['authorization_code'];
            $card->card_type = $data['data']['authorization']['card_type'];
            $card->exp_month = $data['data']['authorization']['exp_month'];
            $card->exp_year = $data['data']['authorization']['exp_year'];
            $card->signature = $data['data']['authorization']['signature'];
            $card->metadata = $data;
            $card->active = true;
            $card->status = 'active';
            $card->save();
            $compliance->verified_card_details = true;
            $compliance->save();
            return respondSuccess('Transaction handled');
        }
    }


    public function delete(string $id)
    {
        try{
        UserCard::destroy($id);
        return true;
        }
        catch(\Exception $e){
            return false;
        }
    }

    public function verifyTransaction(int $id)
    {
        $flutterwave = new FlutterwaveConnection();
        $transaction = $flutterwave->send(new VerifyTransactionRequest($id));
        $transaction->onError(function (Response $resp) {
            Log::info('Verify Transaction Error', [$resp]);
            return respondError(400, "01", "An error occurred");
        });

       return  $data = $transaction->json();
        if($data['status'] != 'success'){
            return respondError(400, "01", "An error occurred");
        }
        return $this->updateCardStatusFlutterwave($data);
    }


    public function updateCardStatusFlutterwave(array $data)
    {
        $card = UserCard::where('transaction_reference', $data['data']['tx_ref'])
        ->whereActive(false)->first();
        if(!$card){
            return respondSuccess('InvalidTransaction Reference');
        }
        $compliance = UserCompliance::where('user_id', $card->user_id)->first();
        if($card->metadata !== NULL){
            return respondSuccess('Transaction exists and has been handled');
        }
        if($card){
            $expiry = $data['data']['card']['expiry'];
            list($month, $year) = explode('/', $expiry);
            $card->last_four_digit = $data['data']['card']['last_4digits'] ?? null;
            $card->last_charged = Carbon::parse($data['data']['created_at']) ?? null;
            $card->value = ($data['data']['charged_amount']) ?? null;
            $card->authorization_code = $data['data']['card']['token'];
            $card->card_type = $data['data']['card']['type'];
            $card->exp_month = $month;
            $card->exp_year = $year;
            $card->signature = $data['data']['ip'];
            $card->metadata = $data;
            $card->status = 'active';
            $card->active = true;
            $card->save();
            $compliance->verified_card_details = true;
            $compliance->save();
            return respondSuccess('Transaction handled');
        }
    }



}
