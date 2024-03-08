<?php

namespace App\Http\Controllers\api\V2\Onboarding\Verification;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Onboarding\Verification\VerificationRequest;
use App\Interfaces\Repositories\V2\Onboarding\VerificationRepositoryInterface;
use Illuminate\Http\Request;

/**
 * @group Verifying Users
 * @description APIs for managing User Verification
 */
class VerificationController extends Controller
{
    //

    function __construct(
    protected VerificationRepositoryInterface $verificationRepository)
    {

    }

    /**
     * Resends One time password to the user
     */
    public function resendtOtp(Request $request)
    {
        if(!$resend = $this->verificationRepository->getOtp($request->toArray()))
        {
            return respondError(400, 'An error occured');
        }
        return respondSuccess('An otp has been sent to you, kindly check your mail');
    }

    /**
     * Verifies the user One time password
     */
    public function verifyOtp(VerificationRequest $request)
    {
        $validated_data = $request->validated();
        $verify = $this->verificationRepository->verifyEmail($validated_data);
        return $verify;
    }

}
