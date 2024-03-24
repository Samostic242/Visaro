<?php

namespace App\Http\Controllers\Api\V2\Merchant\Account\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Merchant\Account\BankAccount\CreateMerchantBankAccountRequest;
use App\Http\Requests\V2\Merchant\Account\BankAccount\UpdateMerchantBankAccountRequest;
use App\Http\Requests\V2\Merchant\Account\Preference\CreateMerchantPreferenceRequest;
use App\Http\Requests\V2\Merchant\Account\Preference\UpdateMerchantPreferenceRequest;
use App\Http\Requests\V2\Merchant\Account\Settings\CreateMerchantSettingRequest;
use App\Http\Requests\V2\Merchant\Account\Settings\UpdateMerchantSettingRequest;
use App\Interfaces\Repositories\V2\Merchant\Account\MerchantSettingsInterface;

/**
 * @group Merchant
 * @subgroup Merchant Settings
 * @description APIs for Merchants Settings
 */
class SettingsController extends Controller
{
    function __construct(
        protected MerchantSettingsInterface $merchantSettingRepository
    )
    {

    }

    /**
     * Create Merchant Settings
     */
    public function create(CreateMerchantSettingRequest $request)
    {
        $validated_data = $request->validated();
        if (!$created = $this->merchantSettingRepository->create($validated_data)) {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('Setting updated successfully', $created);
    }

    /**
     * Update Merchant Settings
     */
    public function update(UpdateMerchantSettingRequest $request)
    {
        $validated_data = $request->validated();
        if (!$updated = $this->merchantSettingRepository->update(auth()->id(), $validated_data)) {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('Setting updated successfully', $updated);
    }

    /**
     * Create Merchant Preference
     */
    public function createPreference(CreateMerchantPreferenceRequest $request)
    {
        $validated_data = $request->validated();
        if (!$created = $this->merchantSettingRepository->createPreference($validated_data)) {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('Preference created successfully', $created);
    }

    /**
     * Update Merchant Preference
     */
    public function updatePreference(UpdateMerchantPreferenceRequest $request)
    {
        $validated_data = $request->validated();
        if (!$created = $this->merchantSettingRepository->updatePreference(auth()->id(), $validated_data)) {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('Preference updated successfully', $created);
    }

    /**
     * Add Merchant BankAccount
     */
    public function createBankAccount(CreateMerchantBankAccountRequest $request)
    {
        $validated_data = $request->validated();
        if (!$created = $this->merchantSettingRepository->createBankAccount($validated_data)) {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('BankAccount created successfully', $created);
    }

    /**
     * Update Merchant BankAccount
     */
    public function updateBankAccount(UpdateMerchantBankAccountRequest $request)
    {
        $validated_data = $request->validated();
        if (!$updated = $this->merchantSettingRepository->updateBankAccount(auth()->id(), $validated_data)) {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('BankAccount updated successfully', $updated);
    }

}
