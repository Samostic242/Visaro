<?php

namespace App\Repositories\V2\Auth;

use App\Http\Resources\V2\User\Account\UserAccountResource;
use App\Interfaces\Repositories\V2\Auth\AuthenticationRepositoryInterface;
use App\Mail\V2\Auth\ForgotPasswordMail;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Tzsk\Otp\Facades\Otp;


class AuthenticationRepository implements AuthenticationRepositoryInterface
{
    public function login(array $data): JsonResponse
    {
        if (auth()->attempt($data)) {
            if (!auth()->user()->active) {
                return respondError(400, '01', 'Your account is not active kindly reach out to our customer support to re-activate');
            } elseif (auth()->user()->email_verified_at == NULL) {
                return respondError(400, '01', 'Your account has not been verified, kindly proceed to verify your account');
            } elseif (auth()->user()->phone_verified_at !== NULL) {
                return respondError(400, '01', 'Your phone number has not been verified, kindly proceed to verify your account');
            }
            $token = auth()->user()->createToken('token')->accessToken;
            $userdata = ['token' => $token];
            return respondSuccess('User Logged in successfully', $userdata);
        }
        return respondError(401, '01', 'Incorrect username or password');

    }

    public function getUser()
    {
        return new UserAccountResource(auth()->user());
    }

    public function forgotPassword(array $data)
    {
        $otp = Otp::digits(4)->expiry(5)->generate($data['email']);
        if (!$sendmail = Mail::send(new ForgotPasswordMail($data['email'], $otp))) {
            return respondError(400, '01', 'An error occurred, please try again');
        }
        return respondSuccess('An email containing your OTP has been sent');
    }

    public function resetPassword(array $data)
    {
        if (!$check = otp::digits(4)->expiry(5)->check($data['code'], $data['email'])) {
            return false;
        }
        $user = User::where('email', $data['email'])->first();
        $user->password = Hash::make($data['password']);
        $user->save();
        return true;
    }
}
