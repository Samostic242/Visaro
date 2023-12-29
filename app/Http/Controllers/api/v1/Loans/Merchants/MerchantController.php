<?php

namespace App\Http\Controllers\api\v1\Loans\Merchants;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Loans\Merchant\CreateNewMerchantRequest;
use App\Http\Requests\V1\Loans\Merchant\UpdateMerchantComplianceRequest;
use App\Http\Requests\V1\Loans\Merchant\UpdateMerchantRequest;
use App\Http\Requests\V1\Loans\Merchant\UpdateMerchantSettingsRequest;
use App\Models\Loans\Merchants\Merchant;
use App\Repositories\MerchantRepositories\MerchantComplianceRepository;
use App\Repositories\MerchantRepositories\MerchantRepository;
use App\Repositories\MerchantRepositories\MerchantSettingsRepository;
use Illuminate\Http\Request;

/**
 * @group Merchant
 * @description APIs for managing merchants
 */
class MerchantController extends Controller
{
    public function __construct(
        protected MerchantRepository           $merchantRepository,
        protected MerchantComplianceRepository $merchantComplianceRepository,
        protected MerchantSettingsRepository   $merchantSettingsRepository,
    )
    {

    }

    /**
     * Fetch all Merchants.
     */
    public function fetchMerchants(Request $request)
    {
        $merchants = $this->merchantRepository->getAll();
        return respondSuccess("Merchants fetched successfully", $merchants);
    }

    /**
     * Get a merchant.
     */
    public function fetchMerchant(int $merchant_id)
    {
        if (!$merchant = $this->merchantRepository->findById($merchant_id)) {
            return respondError(404, 'Merchant does not exist');
        }
        return respondSuccess("Merchant fetched successfully", $merchant);
    }

    /**
     * Register Merchant.
     */
    public function createMerchantRecord(CreateNewMerchantRequest $request)
    {
        $validated_data = $request->validated();
        if (!$created = $this->merchantRepository->create($validated_data)) {
            return respondError(400, 'Error creating merchant account');
        }
        $this->createDefaultSupportRecords($created);
        return respondSuccess("Merchant added successfully, kindly update compliance and settings", $created);
    }

    /**
     * Update merchant record.
     */
    public function updateMerchantRecord(UpdateMerchantRequest $request, int $merchant_id)
    {
        $validated_data = $request->validated();
        if (!$merchant = $this->merchantRepository->findById($merchant_id)) {
            return respondError(404, 'Merchant does not exist');
        }
        if (!$updated = $this->merchantRepository->update($merchant->id, $validated_data)) {
            return respondError(400, 'Error encountered updating merchant');
        }
        return respondSuccess("Merchant updated successfully", $updated);
    }

    /**
     * Delete merchant record.
     */
    public function deleteMerchant(int $merchant_id)
    {
        if (!$merchant = $this->merchantRepository->findById($merchant_id)) {
            return respondError(404, 'Merchant does not exist');
        }
        if (!$deleted = $this->merchantRepository->destroyById($merchant_id)) {
            return respondError(400, 'Error deleting merchant record');
        }
        return respondSuccess("Merchant deleted successfully");
    }


    /**
     * Fetch Merchant Compliance
     * @subgroup Compliance
     */
    public function fetchMerchantCompliance(int $merchant_id)
    {

        if (!$merchant = $this->merchantRepository->findById($merchant_id)) {
            return respondError(404, 'Merchant does not exist');
        }
        if (!$compliance = $this->merchantComplianceRepository->findByMerchantId($merchant_id)) {
            $data = [
                'merchant_id' => $merchant->id
            ];
            $compliance = $this->merchantComplianceRepository->create($data);
        }

        return respondSuccess("Compliance fetched successfully", $compliance);
    }

    /**
     * fetch Merchant Settings
     * @subgroup Settings
     */
    public function fetchMerchantSettings(int $merchant_id)
    {

        if (!$merchant = $this->merchantRepository->findById($merchant_id)) {
            return respondError(404, 'Merchant does not exist');
        }
        if (!$setting = $this->merchantSettingsRepository->findByMerchantId($merchant_id)) {
            $data = [
                'merchant_id' => $merchant->id
            ];
            $setting = $this->merchantSettingsRepository->create($data);
        }

        return respondSuccess("Settings fetched successfully", $setting);
    }

    /**
     * Update Merchant Compliance
     * @subgroup Compliance
     */
    public function updateMerchantCompliance(UpdateMerchantComplianceRequest $request, int $merchant_id)
    {
        $validated_data = $request->validated();
        if (!$merchant = $this->merchantRepository->findById($merchant_id)) {
            return respondError(404, 'Merchant does not exist');
        }
        if (!$compliance = $this->merchantComplianceRepository->findByMerchantId($merchant_id)) {
            $data = [
                'merchant_id' => $merchant->id
            ];
            $compliance = $this->merchantComplianceRepository->create($data);
        }
        if (!$updated = $this->merchantComplianceRepository->update($compliance->id, $validated_data)) {
            return respondError(400, 'Error encountered updating merchant compliance');
        }
        return respondSuccess("Compliance updated successfully", $updated);
    }


    /**
     * Update Merchant Settings
     * @subgroup Settings
     */
    public function updateMerchantSettings(UpdateMerchantSettingsRequest $request, int $merchant_id)
    {
        $validated_data = $request->validated();
        if (!$merchant = $this->merchantRepository->findById($merchant_id)) {
            return respondError(404, 'Merchant does not exist');
        }
        if (!$setting = $this->merchantSettingsRepository->findByMerchantId($merchant_id)) {
            $data = [
                'merchant_id' => $merchant->id
            ];
            $setting = $this->merchantSettingsRepository->create($data);
        }
        if (!$updated = $this->merchantComplianceRepository->update($setting->id, $validated_data)) {
            return respondError(400, 'Error encountered updating merchant settings');
        }
        return respondSuccess("Settings updated successfully", $updated);
    }


    private function createDefaultSupportRecords(Merchant $merchant): void
    {
        $data = [
            'merchant_id' => $merchant->id
        ];
        $this->merchantComplianceRepository->create($data);
        $this->merchantSettingsRepository->create($data);
    }

}
