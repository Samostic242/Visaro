<?php
namespace App\Repositories\V2\Merchant\Onboarding\Verification;
use App\Interfaces\Repositories\V2\Merchant\Onboarding\Verification\MerchantVerificationInterface;
use App\Models\Merchant\Onboarding\Merchant;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tzsk\Otp\Facades\Otp;


class MerchantVerificationRepository implements MerchantVerificationInterface
{
    public function verifyEmail(array $data)
    {
        $merchant = Merchant::where('business_email', $data['business_email'])->first();
        if (!$check = Otp::digits(4)->expiry(15)->check($data['code'], $data['business_email'])) {
            return respondError(400, '01', 'Incorrect/expired OTP, kindly request for another one');
        } elseif ($merchant->email_verified_at != NULL) {
            return respondError(400, '01', 'The email has been verified already');
        }
        // auth()->shouldUse('merchant');
        Auth::guard('merchant')->login($merchant);
        $token = JWTAuth::setRequest(request())->fromUser($merchant);
        $merchant->email_verified_at = Carbon::now();
        $merchant->save();
        $merchantdata = ['token' => $token];
        return respondSuccess('You have successfully verified your email address', $merchantdata);
    }
}

