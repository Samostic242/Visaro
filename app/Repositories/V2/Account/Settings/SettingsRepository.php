<?php
namespace App\Repositories\V2\Account\Settings;
use App\Interfaces\Repositories\V2\Account\Settings\SettingsRepositoryInterface;
use App\Mail\V2\Contact\ContactMail;
use App\Models\Contact\Contact;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Tzsk\Otp\Facades\Otp;

class SettingsRepository implements SettingsRepositoryInterface
{
    public function changeEmail(array $data)
    {
        $user = auth()->user();
        if(!Hash::check($data['password'], $user->password)){
            return respondError(400, '01', 'The password you entered is incorrect');
        }
        $send = $this->sendOtpForChangingEmail($user->toArray());
        return $send;
    }

    public function sendOtpForChangingEmail($data)
    {
        if($data['phone_verified_at'] == null){
            return respondError(400, '01', 'Your phone number has not been verified, Kindly verify your phone number so a confirmation OTP can be sent to you');
        }
            $otp = Otp::digits(4)->expiry(5)->generate($data['phone_code'].$data['phone']);
            $number = $data['phone_code'].$data['phone'];
            $message = 'Visaro! Kindly make use of the OTP to complete your email updating request ' . $otp . ' it expires in 5 minutes.';
            $send = sendSmsMessage($number, $message);
            if(!$send){
                return respondError(400, '01', 'An error occurred while sending the OTP, Kindly try again');
            }
            return respondSuccess('An OTP has been sent to your phone number, Kindly use it to complete your request');
    }

    public function completeChangeEmail(array $data)
    {
        $user = auth()->user();
        //check if otp is correct
        $number = $user->phone_code.$user->phone;
        if (!$check = otp::digits(4)->expiry(5)->check($data['code'], $number)){
            return respondError(400, '01', 'Incorrect/expired OTP, kindly request for another one');
        }
        $user->email = $data['email'];
        $user->save();
        auth()->logout();
        return respondSuccess('Your email has been updated successfully');
    }

    public function contact(array $data)
    {
        $contact = new Contact();
        $contact->public_id = uuid();
        $contact->username = $data['username'] ?? null;
        $contact->email = $data['email'] ?? null;
        $contact->phone_code = $data['phone_code']?? null;
        $contact->phone = $data['phone'] ?? null;
        $contact->message = $data['message']?? null;
        $contact->save();
        Mail::send(new ContactMail($contact->email));
        return $contact;
    }
}
