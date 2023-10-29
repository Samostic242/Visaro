<?php

use Illuminate\Support\Str;
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
