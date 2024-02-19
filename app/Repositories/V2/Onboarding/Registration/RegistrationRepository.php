<?php

namespace App\Repositories\V2\Onboarding\Registration;

use App\Interfaces\Repositories\V2\Onboarding\RegistrationRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationRepository implements RegistrationRepositoryInterface
{
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
}
