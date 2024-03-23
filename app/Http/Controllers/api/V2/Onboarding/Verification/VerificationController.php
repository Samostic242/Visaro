<?php

namespace App\Http\Controllers\api\V2\Onboarding\Verification;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Onboarding\Verification\VerificationRequest;
use App\Interfaces\Repositories\V2\Onboarding\VerificationRepositoryInterface;
use Illuminate\Http\Request;

/**
 * @group User Onboarding
 * @subgroup Verification
 * @description APIs for managing User Verification
 */
class VerificationController extends Controller
{

    function __construct(
        protected VerificationRepositoryInterface $verificationRepository)
    {

    }

    /**
     * Resends One time password to the user
     */
    public function resendOtp(Request $request)
    {
        if (!$resend = $this->verificationRepository->getOtp($request->toArray())) {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('An otp has been sent to you, kindly check your mail');
    }

    /**
     * Verify onboarding email OTP
     */
    public function verifyOtp(VerificationRequest $request)
    {
        $validated_data = $request->validated();
        $verify = $this->verificationRepository->verifyEmail($validated_data);
        return $verify;
    }

}
