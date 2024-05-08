<?php

namespace App\Repositories\V2\Account\Security;
use App\Interfaces\Repositories\V2\Account\Security\UserSecurityRepositoryInterface;
use App\Models\UserSecurity;
use Illuminate\Support\Facades\Hash;

class UserSecurityRepository implements UserSecurityRepositoryInterface
{
    public function createPin(array $data)
    {
        $user = auth()->user();
        $pin_exist = UserSecurity::where('user_id', $user->id)->first();
        if($pin_exist){
            return respondError(400, '01', 'You have already created a pin, kindly delete the existing one first before creating a new one.');
        }
        $new_user_pin = new UserSecurity();
        $new_user_pin->public_id = uuid();
        $new_user_pin->user_id = $user->id;
        $new_user_pin->pin = Hash::make($data['pin']) ?? null;
        $new_user_pin->set_pin = true;
        $new_user_pin->active = true;
        $new_user_pin->save();
        return respondSuccess('Pin created successfully', $new_user_pin);
    }

    public function createSecurityQuestion(array $data)
    {
        $user = auth()->user();
        $pin_exist = UserSecurity::where('user_id', $user->id)->first();
        if($pin_exist ->set_security_question){
            return respondError(400, '01', 'You have already created a security question already, kindly delete the existing one first before creating a new one.');
        }
        $user_security = UserSecurity::where('user_id', $user->id)->first();
        $user_security->security_question = $data['security_question'] ?? null;
        $user_security->security_answer = strtoupper($data['security_answer']) ?? null;
        $user_security->set_security_question == true ?? null;
        $user_security->save();
        return respondSuccess('Security question created successfully', $user_security);

    }
}
