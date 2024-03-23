<?php

namespace App\Http\Controllers\api\V2\Merchant\Onboarding\Registration;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Merchant\Onboarding\Registration\GetOtpRequest;
use App\Http\Requests\V2\Merchant\Onboarding\Registration\MerchantRegistrationRequest;
use App\Http\Requests\V2\Merchant\Onboarding\Registration\RegistrationRequest;
use App\Interfaces\Repositories\V2\Merchant\Onboarding\Registration\MerchantRegistrationInterface;

/**
 * @group Merchant
 * @subgroup Onboarding
 * @description APIs for Onboarding Merchants
 */
class MerchantRegistrationController extends Controller
{
    function __construct(
        protected MerchantRegistrationInterface $merchantRegistrationRepository
    )
    {

    }

    /**
     * Sends an Otp to the merchant's Mail
     */
    public function getMerchantOtp(GetOtpRequest $request)
    {
        $validated_data = $request->validated();
        return $this->merchantRegistrationRepository->getMerchantOtp($validated_data);
    }

    /**
     * Update the merchant data
     */
    public function update(MerchantRegistrationRequest $request)
    {
        $validated_data = $request->validated();
        if (!$updated = $this->merchantRegistrationRepository->update(auth()->id(), $validated_data)) {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('Merchant details updated successfully');
    }
}
