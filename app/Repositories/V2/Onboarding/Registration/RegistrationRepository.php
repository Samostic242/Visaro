<?php

namespace App\Repositories\V2\Onboarding\Registration;

use App\Interfaces\Repositories\V2\Onboarding\RegistrationRepositoryInterface;
use App\Mail\V2\Verification\VerificationMail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Tzsk\Otp\Facades\Otp;

class RegistrationRepository implements RegistrationRepositoryInterface
{
    public function findbyId(string $id): ?User
    {
        return User::find($id);
    }
    public function create(array $data): User
    {
        $user = new User();
        $user->firstname = $data['firstname'] ?? null;
        $user->lastname = $data['lastname'] ?? null;
        $user->middlename = $data['middlename'] ?? null;
        $user->email = $data['email'] ?? null;
        $user->phone = $data['phone'] ?? null;
        $user->phone_code = $data['phone_code'] ?? '+234';
        $user->photo = upload_to_cloudinary('Profile Pictures', $data['photo']->getRealPath()) ?? null;
        $user->password = Hash::make($data['password']) ?? null;
        $user->save();
        return $user;

    }

    public function getCode(array $data)
    {
        $email_exists = User::whereEmail($data['email'])->first();
        $otp = Otp::digits(4)->expiry(5)->generate($data['email']);
        if($email_exists)
        {
            if($email_exists->email_verified_at == null)
            {
                Mail::send(new VerificationMail($data['email'], $otp));
                return \respondSuccess('Complete the process now, An email containing your OTP has been sent to your email address againi');
            }
            return \respondError(400, 'This email has already been taken');
        }
        $user =  new User();
        $user->email = $data['email'] ?? null;
        $user->save();
        Mail::send(new VerificationMail($data['email'], $otp));
        return \respondSuccess('An email containing your OTP has been sent to your email address');
    }

    public function updateUser(string $id, array $data)
    {
        $user = $this->findbyId($id);
        if(!$user){
            return false;
        }

        $user->firstname = $data['firstname'] ?? $user->firstname;
        $user->lastname = $data['lastname'] ?? $user->lastname;
        $user->middlename = $data['middlename'] ?? $user->middlename;
        $user->phone = $data['phone'] ?? $user->phone;
        $user->phone_code = $data['phone_code'] ?? '+234';
        $user->photo = upload_to_cloudinary('Profile Pictures', $data['photo']->getRealPath()) ?? $user->photo;
        $user->password = Hash::make($data['password']) ?? $user->password;
        $user->save();
        return $user;
    }
}
