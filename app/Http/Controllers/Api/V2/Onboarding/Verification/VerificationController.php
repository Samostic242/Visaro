<?php

namespace App\Http\Controllers\Api\V2\Onboarding\Verification;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Onboarding\Verification\VerificationRequest;
use App\Http\Requests\V2\Onboarding\Verification\VerifyBvnRequest;
use App\Http\Requests\V2\Onboarding\Verification\VerifyPhoneRequest;
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
     * Verify email OTP
     */
    public function verifyOtp(VerificationRequest $request)
    {
        $validated_data = $request->validated();
        $verify = $this->verificationRepository->verifyEmail($validated_data);
        return $verify;
    }

    /**
     * Get Phone Number Verification OTP
     */
    public function getPhoneOtp()
    {
        $user = auth()->user();
        if($user->phone_verified_at != null)
        {
            return respondError(400, '01', 'Phone Number Has been verified Already');
        }elseif($user->phone == null || $user->phone_code == null)
        {
            return respondError(400, '01', 'You are yet to add a phone number');
        }else{
            $get_otp = $this->verificationRepository->getPhoneOtp($user->toArray());
            if(!$get_otp){
                return respondError(400, '01', 'An Error Occurred, Pls try again ');
            }
            return respondSuccess('A One Time Password Has Been sent to your registered phone number');
        }
    }

    /**
     * Verify Phone Number OTP
     */
    public function verifyPhone(VerifyPhoneRequest $request)
    {
        $validated_data = $request->validated();
        $verify = $this->verificationRepository->verifyPhone($validated_data);
        return $verify;
    }

    public function kycwebhook(Request $request)
    {
        $webhook_authenticity = $this->verifyWebhookSignature();
        if(!$webhook_authenticity){
            return respondError(400, '01', 'Invalid Credentials and Origin');
        }
        $data = $request->all();
    }

    public function verifyBvn(VerifyBvnRequest $request)
    {
        $validated_data = $request->validated();
        $verify = $this->verificationRepository->verifyBvn($validated_data);
        return $verify;
    }

   /*  public function verifyBank(VerifyBankRequest $request)
    {
        $validated_data = $request->validated();
        $verify = $this->verificationRepository->verifyBank($validated_data);
        return $verify;
    } */

    public function verifyWebhookSignature(){
        return true;
        // $signature = $_SERVER['HTTP_X_KYC_SIGNATURE'];
        // $payload = file_get_contents('php://input');
    }

    public function fetchKYCTiers(){

        $kyc_tiers = $this->verificationRepository->fetchKYCTiers();
        return $kyc_tiers;
    }

}
