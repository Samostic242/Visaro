<?php

namespace App\Repositories\V2\Merchant\Auth;
use App\Interfaces\Repositories\V2\Merchant\Auth\MerchantAuthenticationInterface;
use App\Mail\V2\Auth\ForgotPasswordMail;
use App\Models\Merchant\Onboarding\Merchant;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Tzsk\Otp\Facades\Otp;

class MerchantAuthenticationRepository implements MerchantAuthenticationInterface
{
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
        $merchant = Merchant::where('business_email', $email)
            ->first();
        if (!$merchant) {
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

        $merchant->password = Hash::make($password);
        $merchant->save();

        return [
            'status' => true,
            'message' => "Password updated successfully",
            'code' => 200,
            'data' => null
        ];
    }

    public function getMerchant(): Merchant|null
    {
        return auth()->user();
    }

    public function login()
}

