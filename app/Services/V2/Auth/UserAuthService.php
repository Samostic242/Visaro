<?php

namespace App\Services\V2\Auth;

use App\Http\Resources\V2\User\Account\UserAccountResource;
use App\Interfaces\Services\V2\Auth\UserAuthServiceInterface;
use App\Mail\V2\Auth\ForgotPasswordMail;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Tzsk\Otp\Facades\Otp;

class UserAuthService implements UserAuthServiceInterface
{
    public function login(string $username, string $password): array
    {
        try {
            if (!$token = auth()->attempt(['email' => $username, 'password' => $password])) {
                return [
                    'status' => false,
                    'message' => 'Incorrect username or password',
                    'code' => 401,
                    'data' => null
                ];

            }

            if (!auth()->user()->active) {
                return [
                    'status' => false,
                    'message' => 'Your account is not active kindly reach out to our customer support to re-activate',
                    'code' => 400,
                    'data' => null
                ];
            } elseif (!auth()->user()->email_verified_at) {
                return [
                    'status' => false,
                    'message' => 'Your account has not been verified, kindly proceed to verify your account',
                    'code' => 400,
                    'data' => null
                ];

            }
          /*   elseif (!auth()->user()->phone_verified_at) {
                return [
                    'status' => false,
                    'message' => 'Your phone number has not been verified, kindly proceed to verify your account',
                    'code' => 400,
                    'data' => null
                ];

            } */
            return [
                'status' => true,
                'message' => 'User Logged in successfully',
                'code' => 200,
                'data' => [
                    'token' => $token,
                    'user' => new UserAccountResource(auth()->user())
                ]
            ];
        } catch (Exception $exception) {
            return [
                'status' => false,
                'message' => $exception->getMessage(),
                'code' => 400,
                'data' => null
            ];
        }


    }

    public function getUser()
    {
        $user = auth()->user();
        return $user;
    }

    public function forgotPassword(string $email): array
    {
        try {
            $otp = Otp::digits(4)->expiry(5)->generate($email);
            if (!Mail::send(new ForgotPasswordMail($email, $otp))) {
                return [
                    'status' => false,
                    'message' => 'Unable to send verification email, please try again',
                    'code' => 400,
                    'data' => null
                ];
            }
            return [
                'status' => true,
                'message' => 'A verification has been sent to your email',
                'code' => 200,
                'data' => null
            ];
        } catch (Exception $exception) {
            return [
                'status' => false,
                'message' => 'An error occurred, please try again',
                'code' => 400,
                'data' => null
            ];
        }

    }

    public function resetPassword(string $code, string $email, string $password): array
    {
        $user = User::where('email', $email)
            ->first();
        if (!$user) {
            return [
                'status' => false,
                'message' => "This email doesn't exist on our system",
                'code' => 404,
                'data' => null
            ];
        }
        if (!otp::digits(4)->expiry(5)->check($code, $email)) {
            return [
                'status' => false,
                'message' => "Invalid or expired token",
                'code' => 400,
                'data' => null
            ];
        }

        $user->password = Hash::make($password);
        $user->save();

        return [
            'status' => true,
            'message' => "Password updated successfully",
            'code' => 200,
            'data' => null
        ];
    }
}
