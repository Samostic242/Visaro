<?php

namespace App\Repositories\V2\Onboarding\Verification;


use App\Interfaces\Repositories\V2\Onboarding\VerificationRepositoryInterface;
use App\Jobs\V2\Wallet\CreateWalletJob;
use App\Mail\V2\Verification\VerificationMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
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
        if(!$check = otp::digits(4)->expiry(5)->check($data['code'], $data['email']))
        {
            return \respondError(400, 'Incorrect/expired OTP, kindly request for another one');
        }elseif($user->email_verified_at != NULL){
            return \respondError(400, 'The email has been verfied already');
        }
        $user->email_verified_at = Carbon::now();
        $user->save();
        $token = $user->createToken('token')->accessToken;
        dispatch(new CreateWalletJob($user));
        $userdata = ['token' => $token];
        return \respondSuccess('You have successfully verified your email address', $userdata);
    }

    public function getPhoneOtp(array $data)
    {
        $otp = Otp::digits(4)->expiry(5)->generate($data['phone']);
        $number = $data['phone_code']. $data['phone'];
        $message = 'Your Visaro one time password is' .$otp . ' it expires in 5 minutes.';
        if(!$send = sendSmsMessage($number, $message)){
            return false;
        }
        return true;
    }

    public function verifyPhone(array $data)
    {
        $user = User::where('email', auth()->user()->email)->first();
        if(!$check = otp::digits(4)->expiry(5)->check($data['code'], $data['phone']))
        {
            return \respondError(400, 'Incorrect/expired OTP, kindly request for another one');
        }elseif($user->phone_verified_at != NULL){
            return \respondError(400, 'The phone number has been verfied already');
        }
        $user->phone_verified_at =  Carbon::now();
        $user->save();
        return \respondSuccess('Phone Verified');
    }

}
