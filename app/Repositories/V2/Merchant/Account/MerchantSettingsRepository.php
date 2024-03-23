<?php

namespace App\Repositories\V2\Merchant\Account;

use App\Interfaces\Repositories\V2\Merchant\Account\MerchantSettingsInterface;
use App\Models\Merchant\Account\MerchantBankAccount;
use App\Models\Merchant\Account\MerchantPreference;
use App\Models\Merchant\Account\MerchantSetting;



class MerchantSettingsRepository implements MerchantSettingsInterface
{
    public function findByMerchantId(string $id)
    {
        return MerchantSetting::where('merchant_id', $id)->first();
    }

    public function findMerchantPreferenceById(string $id)
    {
        return MerchantPreference::where('merchant_id', $id)->first();
    }

    public function findMerchantBankAccount(string $id)
    {
        return MerchantBankAccount::where('merchant_id', $id)->first();
    }

    public function create(array $data)
    {
        $merchantSettings = new MerchantSetting();
        $merchantSettings->public_id = uuid();
        $merchantSettings->merchant_id = $data['id'];
     /*    $merchantSettings->dispute_email = $data['dispute_email'] ?? null ;
        $merchantSettings->support_email = $data['support_email'] ?? null ;
        $merchantSettings->general_email = $data['general_email'] ?? null ; */
        $merchantSettings->save();
    }

    public function update(string $id, array $data)
    {
        $merchantSettings = $this->findByMerchantId($id);
        if(!$merchantSettings){
            return false;
        }
        $merchantSettings->dispute_email = $data['dispute_email'] ?? $merchantSettings->dispute_email ;
        $merchantSettings->support_email = $data['support_email'] ?? $merchantSettings->support_email ;
        $merchantSettings->general_email = $data['general_email'] ?? $merchantSettings->general_email ;
        $merchantSettings->save();
        return $merchantSettings;
    }

    public function createPreference(array $data)
    {
        $merchantPreference = new MerchantPreference();
        $merchantPreference->public_id = uuid();
        $merchantPreference->merchant_id = $data['id'];
      /*   $merchantPreference->default_currency = $data['default_currency'] ?? null;
        $merchantPreference->bank = $data['bank'] ?? null;
        $merchantPreference->ussd = $data['ussd'] ?? null;
        $merchantPreference->transfer = $data['transfer'] ?? null;
        $merchantPreference->qr = $data['qr'] ?? null;
        $merchantPreference->installment = $data['installment'] ?? null; */
        $merchantPreference->save();
        return $merchantPreference;
    }

    public function updatePreference(string $id, array $data)
    {
        $merchantPreference = $this->findMerchantPreferenceById($id);
        if(!$merchantPreference)
        {
            return false;
        }
        $merchantPreference->default_currency = $data['default_currency'] ?? $merchantPreference->default_currency;
        $merchantPreference->bank = $data['bank'] ?? $merchantPreference->bank;
        $merchantPreference->ussd = $data['ussd'] ?? $merchantPreference->ussd;
        $merchantPreference->card = $data['card'] ?? $merchantPreference->card;
        $merchantPreference->transfer = $data['transfer'] ?? $merchantPreference->transfer;
        $merchantPreference->qr = $data['qr'] ?? $merchantPreference->qr;
        $merchantPreference->installment = $data['installment'] ?? $merchantPreference->installment;
        $merchantPreference->save();

        return $merchantPreference;
    }
    public function createBankAccount(array $data)
    {
        $merchantBankAccount = new MerchantBankAccount();
        $merchantBankAccount->public_id = uuid();
        $merchantBankAccount->merchant_id = auth()->id();
        $merchantBankAccount->account_name = $data['account_name'] ?? null;
        $merchantBankAccount->account_number = $data['account_number'] ?? null;
        $merchantBankAccount->bank_name = $data['bank_name'] ?? null;
        $merchantBankAccount->bank_code = $data['bank_code'] ?? null;
        $merchantBankAccount->currency = $data['currency'] ?? null;
        $merchantBankAccount->save();
        return $merchantBankAccount;

    }

    public function updateBankAccount(string $id, array $data)
    {
        $merchantBankAccount = $this->findMerchantBankAccount($id);
        if(!$merchantBankAccount)
        {
            return false;
        }
        $merchantBankAccount->account_name = $data['account_name'] ?? $merchantBankAccount->account_name;
        $merchantBankAccount->account_number = $data['account_number'] ?? $merchantBankAccount->account_number;
        $merchantBankAccount->bank_name = $data['bank_name'] ?? $merchantBankAccount->bank_name;
        $merchantBankAccount->bank_code = $data['bank_code'] ?? $merchantBankAccount->bank_code;
        $merchantBankAccount->currency = $data['currency'] ?? $merchantBankAccount->currency;
        $merchantBankAccount->save();
        return $merchantBankAccount;
    }
}
