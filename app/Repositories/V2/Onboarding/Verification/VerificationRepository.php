<?php

namespace App\Repositories\V2\Onboarding\Verification;


use App\Interfaces\Repositories\V2\Onboarding\VerificationRepositoryInterface;
use App\Jobs\V2\Wallet\CreateWalletJob;
use App\Mail\V2\Verification\VerificationMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tzsk\Otp\Facades\Otp;

class VerificationRepository implements VerificationRepositoryInterface
{
    public function getOtp(array $data)
    {
        $user = User::where('email', $data['email'])->first();
        $otp = Otp::digits(4)->expiry(5)->generate($data['email']);
        Mail::send(new VerificationMail($user, $otp));
        return true;
    }

    public function verifyEmail(array $data)
    {

        $user = User::where('email', $data['email'])->first();
        if (!$check = otp::digits(4)->expiry(5)->check($data['code'], $data['email'])) {
            return respondError(400, '01', 'Incorrect/expired OTP, kindly request for another one');
        } elseif ($user->email_verified_at != NULL) {
            return respondError(400, '01', 'The email has been verified already');
        }
        $user->email_verified_at = Carbon::now();
        $user->save();
        Auth::login($user);
        $token = JWTAuth::fromUser($user);
        dispatch(new CreateWalletJob($user));
        $userdata = ['token' => $token];
        return respondSuccess('You have successfully verified your email address', $userdata);

    }

    public function getPhoneOtp(array $data)
    {
        $otp = Otp::digits(4)->expiry(5)->generate($data['phone_code'].$data['phone']);
        $number = $data['phone_code'].$data['phone'];
        $message = 'Your Visaro one time password is ' . $otp . ' it expires in 5 minutes.';
        $send = sendSmsMessage($number, $message);
        return $send;

    }

    public function verifyPhone(array $data)
    {
        $user = User::where('email', auth()->user()->email)->first();
        if (!$check = otp::digits(4)->expiry(5)->check($data['code'], $user->phone_code.$user->phone)) {
            return respondError(400, '01', 'Incorrect/expired OTP, kindly request for another one');
        } elseif ($user->phone_verified_at != NULL) {
            return respondError(400, '01', 'The phone number has been verified already');
        }
        $user->phone_verified_at = Carbon::now();
        $user->save();
        return respondSuccess('Your phone number has been verified successfully');
    }

}
