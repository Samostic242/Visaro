<?php

namespace App\Http\Controllers\api\V2\Merchant\Onboarding\Verification;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Merchant\Onboarding\Verification\VerificationRequest;
use App\Interfaces\Repositories\V2\Merchant\Onboarding\Verification\MerchantVerificationInterface;
use Illuminate\Http\Request;

/**
 * @group Merchant Verification
 * @subgroup Verification
 * @description APIs for Onboarding
 */
class MerchantVerificationController extends Controller
{
    //
    function __construct(
        protected MerchantVerificationInterface $merchantVerificationRepository
    )
    {

    }

    /**
     * Verifies Merchant Otp
     */
    public function verifyMerchantOtp(VerificationRequest $request)
    {
        $validated_data = $request->validated();
        return $this->merchantVerificationRepository->verifyEmail($validated_data);
    }
}
