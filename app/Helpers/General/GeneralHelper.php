<?php

use App\Models\User;
use App\Models\Country;
use Illuminate\Support\Str;
use Okolaa\TermiiPHP\Termii;
use Illuminate\Support\Facades\Log;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Actions\Services\Notifications\NotificationService;

if (!function_exists('uuid')) {
    function uuid()
    {
        return Str::uuid()->toString();
    }
}
if (!function_exists('slug')) {
    function slug($string): String
    {
        return Str::slug($string, '-');
    }
}
if (!function_exists('generateReference')) {
    function generateReference($length = 57, $type = 'mixed')
    {
        srand((float) microtime() * 10000000000);
        $rand = mt_rand(113167114121212511111, 999992121212129999099999978);
        $characters = $type == 'mixed'
            ? str_replace('-', '', uuid()) . "ABCDEFGHIJKLMOPQRSTUVWXYZ012345678998765432100ZYXWVUTSRQPOMLKJIHGFEDCBA011223344556677889900998ABCDEFGHIJKLMOPQRSTUVWXYZ877665544332211{$rand}"
            : "012345678998765432100011223344556677889900998877665544332211{$rand}";
        return substr(
            str_shuffle($characters),
            0,
            $length
        );
    }
}
if (!function_exists('generateCode')) {
    function generateCode($string = null, $length = 6)
    {
        srand((float) microtime() * 10000000000);
        $rand = mt_rand(12, 12);
        $characters =  "{$string}012345678998765432100011223344556677889900998877665544332211{$rand}";
        return substr(
            str_shuffle($characters),
            0,
            $length
        );
    }
}
if (!function_exists('generateQrCode')) {
    function generateQrCode(String $key, String $owner = 'user')
    {
        // $tm  =  now()->toString();
        // $location  =  "../storage/qrcode/{$key}{$tm}.svg";
        // return QrCode::format('svg')->size(512)->style('round')->backgroundColor(255,  255,  255,  0)->color(0,  0,  0,  90)->margin(5)->generate($key, $location)
        //     ? $link  =  cloudinary()->upload($location,  [
        //         'folder'  =>  "{$owner}-qrcodes",
        //         'public_id'  =>  Str::uuid()->toString(),
        //     ])->getPublicId() : false;
    }
}

if (!function_exists('generateRandomNumber')) {
    function generateRandomNumber($length = 6)
    {
        if ($length <= 0) {
            return null; // Handle invalid input
        }

        $min = pow(10, ($length - 1)); // Minimum value based on length
        $max = pow(10, $length) - 1;    // Maximum value based on length

        return mt_rand($min, $max); // Generate a random number within the specified range
    }
}

if (!function_exists('sendEmailVerificationMail')) {
    function sendEmailVerificationMail($user, $token)
    {
        // $notification = new NotificationService($user);
        // $notification->setSubject('Verify Your Email')
        //     ->setData([
        //         'token' => $token,
        //         'firstname' => $user->firstname
        //     ])
        //     ->setView('email.school.onboarding.verify-email')
        //     ->sendEmail();
        // return $notification;
    }
}

if (!function_exists('sendSmsMessage')) {
    function sendSmsMessage(String $phone_number, String $message, String $purpose = 'transaction')
    {
        $termii = new Termii('TERMII_SENDER_ID', 'TERMII_API_KEY');
        try {
            $termii->sendMessage(
                [
                    "phone_number" => $phone_number,
                    "message" => $message
                ]
            );
            return true;
        } catch (\Throwable $e) {
            Log::error("Failed to send sms message {$e->getMessage()}");
            return false;
        }
        return true;
    }
}
if (!function_exists('sendSmsToken')) {
    function sendSmsToken(String $phone_number, String $purpose = 'transaction')
    {
        try {
            $termii = new Termii(config('services.messaging.sms.termii.sender_id', config('services.messaging.sms.termii.api_key')));
            $termii
                ->setPinTimeToLive(10)
                ->SetPinLength(4)
                ->setPinType("NUMERIC")
                ->setMaxAttempts(5)
                ->sendToken(
                    [
                        "phone_number" => $phone_number,
                        "message" => "Your VISARO pin is < _pin_ >"
                    ]
                );
            return true;
        } catch (\Throwable $e) {
            Log::error("Failed to verify sms token {$e->getMessage()}", [$e]);
            return false;
        }
    }
}
if (!function_exists('verifySmsToken')) {
    function verifySmsToken(User $user, String $token, String $token_id)
    {
        try {
            $termii = new Termii(config('services.messaging.sms.termii.sender_id', config('services.messaging.sms.termii.api_key')));
            $termii->verifyToken(
                [
                    "pin_id" => $token_id,
                    "pin" => $token,
                ]
            );
            return true;
        } catch (\Throwable $e) {
            Log::error("Failed to send sms token {$e->getMessage()}", [$e]);
            return false;
        }
    }
}
if (!function_exists('getCountry')) {
    function getCountry(String $code): Object|null
    {
        return Country::where('code', $code)->first();
    }
}
