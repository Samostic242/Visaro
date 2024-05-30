<?php

namespace App\Repositories\V2\Account\Services;
use App\Http\Integrations\Paystack\PaystackConnection;
use App\Http\Integrations\Paystack\Requests\ChargeCardRequest;
use App\Interfaces\Repositories\V2\Account\Services\CardRepositoryInterface;
use App\Models\Card;
use App\Models\UserCard;
use Carbon\Carbon;
use Saloon\Http\Response;

class CardRepository implements CardRepositoryInterface
{
    public function findById(string $id)
    {
        return Card::find($id);
    }
    public function create(array $data)
    {
        $user = auth()->user();
        $card = new UserCard();
        $card->public_id = uuid() ?? null;
        $card->user_id = auth()->user()->id;
        $card->save();
        $paystack = new PaystackConnection();
        $charge_card = $paystack->send(new ChargeCardRequest($amount = 5000, $user->email));
        $charge_card->onError(function (Response $resp) {
            Log::info('Card Charge Request', [$resp]);
            return respondError(400, "An error occurred", $resp);
        });
        $data = $charge_card->json();
        $card->transaction_reference = $data['data']['reference'];
        $card->save();
        return $data;




        // return $card ;

    }

    public function update(string $id, array $data)
    {
        $card = $this->findById($id);
        if(!$card)
        {
            return false;
        }
        $card->owner = $data['owner'] ?? $card->owner ;
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
        $card->allow_charge = $data['allow_charge'] ?? $card->allow_charge ;
        $card->active = $data['active'] ?? true ;
        $card->status = $data['status'] ?? $card->status ;
        $card->save();
        return $card ;
    }

    public function getCard()
    {
        $user = auth()->user();
        return $card = UserCard::where('user_id', $user->id)->whereNotNull('metadata')->first();
        // return  $user->card;
    }

    public function updateCardStatus($data){
        $card = UserCard::where('transaction_reference', $data['data']['reference'])
        ->where('status', 'active')->first();
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
            $card->save();
            return respondSuccess('Transaction handled');
        }
    }

    public function delete(string $id)
    {
        return Card::destroy($id);
    }

}
