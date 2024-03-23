<?php

namespace App\Repositories\V2\Merchant\Onboarding\Registration;
use App\Interfaces\Repositories\V2\Merchant\Onboarding\Registration\MerchantRegistrationInterface;
use App\Mail\V2\Verification\VerificationMail;
use App\Models\Merchant\Onboarding\Merchant;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Tzsk\Otp\Facades\Otp;

class MerchantRegistrationRepository implements MerchantRegistrationInterface
{
    public function findById(string $id): ?Merchant
    {
        return Merchant::find($id);
    }

    public function create(array $data){
    $merchant = new Merchant();
    $merchant->public_id = uuid() ?? null;
    $merchant->business_name = $data['business_name'] ?? null;
    $merchant->slug = slug($data['business_name']) ?? null;
    $merchant->business_type = $data['business_type'] ?? null;
    $merchant->business_email = $data['business_email'] ?? null;
    $merchant->business_phone_code = $data['business_phone_code'] ?? '+234';
    $merchant->business_phone = $data['business_phone'] ?? null;
    $merchant->business_registration_number = $data['business_registration_number'] ?? null;
    $merchant->acronym = $data['acronym'] ?? null;
    $merchant->official_name = $data['official_name'] ?? null;
    $merchant->presence = $data['presence'] ?? null;
    $merchant->logo = upload_to_cloudinary('Merchant Logo', $data['logo']->getRealPath()) ?? null;
    $merchant->code = generateRandomNumber(7);
    $merchant->country_id = $data['country_id'] ?? 158;
    $merchant->category = $data['category'] ?? null;
    $merchant->mode = $data['mode'] ?? null;
    $merchant->meta = $data['meta'] ?? null;
    $merchant->active = $data['active'] ?? true;
    $merchant->save();

    return $merchant;

    }

    public function update(string $id, array $data)
    {
        $merchant = $this->findById($id);
        if (!$merchant) {
            return false;
        }
        $merchant->business_name = $data['business_name'] ?? $merchant->business_name;
        $merchant->business_type = $data['business_type'] ?? $merchant->business_type;
        $merchant->business_email = $data['business_email'] ?? $merchant->business_email;
        $merchant->business_phone_code = $data['business_phone_code'] ?? $merchant->business_phone_code;
        $merchant->business_phone = $data['business_phone'] ?? $merchant->business_phone;
        $merchant->business_registration_number = $data['business_registration_number'] ?? $merchant->business_registration_number;
        $merchant->acronym = $data['acronym'] ?? $merchant->acronym;
        $merchant->official_name = $data['official_name'] ?? $merchant->official_name;
        $merchant->website = $data['website'] ?? $merchant->website;
        $merchant->presence = $data['presence'] ?? $merchant->presence;
        if(array_key_exists('logo', $data)){
        $merchant->logo = upload_to_cloudinary('Merchant Logo', $data['logo']->getRealPath()) ?? $merchant->logo;
        }
        $merchant->category = $data['category'] ?? $merchant->category;
        $merchant->mode = $data['mode'] ?? $merchant->mode;
        $merchant->country_id = $data['country_id'] ?? $merchant->country_id;
        $merchant->meta = $data['meta'] ?? $merchant->meta;
        $merchant->active = $data['active'] ?? $merchant->active;
        $merchant->password = Hash::make($data['password']) ?? $merchant->password;
        $merchant->save();

        return $merchant;
    }

       public function getMerchantOtp(array $data)
    {
        $email_exists = Merchant::where('business_email', $data['business_email'])->first();
        $otp = Otp::digits(4)->expiry(15)->generate($data['business_email']);
        if ($email_exists) {
            if ($email_exists->email_verified_at == null) {
                Mail::send(new VerificationMail($data['business_email'], $otp));
                return respondSuccess('Complete the process now, An email containing your OTP has been sent to your email address again');
            }
            return respondError(400, '01', 'This email has already been taken');
        }
        $merchant = new Merchant();
        $merchant->public_id = uuid() ?? null;
        $merchant->business_email = $data['business_email'] ?? null;
        $merchant->business_phone_code = $data['business_phone_code'] ?? '+234';
        $merchant->business_phone = $data['business_phone'] ?? null;
        $merchant->password = Hash::make(12345);
        $merchant->save();
        Mail::send(new VerificationMail($data['business_email'], $otp));
        return respondSuccess('An email containing your OTP has been sent to your email address');
    }
}
