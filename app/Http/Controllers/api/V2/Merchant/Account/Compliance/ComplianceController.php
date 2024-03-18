<?php

namespace App\Http\Controllers\api\V2\Merchant\Account\Compliance;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Loans\Merchant\UpdateMerchantSettingsRequest;
use App\Http\Requests\V2\Merchant\Account\Compliance\CreateMerchantComplianceRequest;
use App\Interfaces\Repositories\V2\Merchant\Account\MerchantComplianceInterface;
use Illuminate\Http\Request;

/**
 * @group Merchant Compliance
 * @subgroup
 * @description APIs for Merchants Compliance
 */
class ComplianceController extends Controller
{
    //
    function __construct(
    protected MerchantComplianceInterface $merchantComplianceRepository
    )
    {

    }

    /**
     * Create a compliance for a merchant
     */
    public function create(CreateMerchantComplianceRequest $request)
    {
        $validated_data = $request->validated();
        if(!$compliance = $this->merchantComplianceRepository->create($validated_data))
        {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('Compliance updated successfully', $compliance);
    }

      /**
     * Update the compliance for a merchant
     */
    public function update(UpdateMerchantSettingsRequest $request)
    {

        $validated_data = $request->validated();
        if(!$compliance = $this->merchantComplianceRepository->update(auth()->id(), $validated_data))
        {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('Compliance updated successfully', $compliance);
    }
}
