<?php

namespace App\Repositories\V2\Account\Profile;
use App\Enums\User\CardChargeVendorEnum;
use App\Interfaces\Repositories\V2\Account\Profile\WalletRepositoryInterface;
use App\Models\UserCard;
use App\Models\UserTransaction;
use App\Models\Wallet;

class WalletRepository implements WalletRepositoryInterface
{

    public function findById(string $id): ?Wallet
    {
        return Wallet::find($id);
    }
    public function create(array $data)
    {
        $wallet = new Wallet();
        $wallet->public_id = uuid() ?? null;
        $wallet->owner_id = $data['id'] ?? null;
        $wallet->owner = $data["firstname"] ?? null;
        $wallet->save();
        return $wallet;
    }

    public function fundWallet(array $data)
    {
        $user = auth()->user();
        $card_exists = UserCard::where('user_id', auth()->user()->id)->whereActive(true)->first();
        if(!$card_exists){
            return respondError(404, '01', "No active card found for first payment deduction");
        }

        $transaction = new UserTransaction();
        $transaction->public_id = uuid();
        $transaction->user_id = $user->id;
        $transaction->reference = generateWalletFundReference();
        $transaction->save();
        $authorization_code = $card_exists->authorization_code;
        if($card_exists->vendor == CardChargeVendorEnum::PAYSTACK)
        {
            $chargeCard = ChargeRecurrentPaystack($data['amount'], $user->email, $authorization_code, $transaction->id, 'Wallet Funding');
        }elseif($card_exists->vendor == CardChargeVendorEnum::FLUTTERWAVE)
        {
            $chargeCard = ChargeRecurrentFlutterwave($data['amount'], $user->email, $authorization_code, $transaction->id, 'Wallet Funding');
        }

        if($chargeCard['success'] == true)
        {
          $credit_wallet = creditWallet(auth()->user()->wallet->id, $chargeCard['amount'], auth()->id());
            return respondSuccess('Wallet funded successfully');
        }else{
            return respondError(400, '01', $chargeCard['message']);
            }
        }
}

