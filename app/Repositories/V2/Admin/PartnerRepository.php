<?php

namespace App\Repositories\V2\Admin;

use App\Interfaces\Repositories\V2\Admin\PartnerRepositoryInterface;
use App\Mail\V2\Partner\PartnerMail;
use App\Models\Partner;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class PartnerRepository implements PartnerRepositoryInterface
{
    public function create(array $data)
    {

        $partner = new Partner();
        $partner->public_id = uuid();
        $partner->email = $data['email'] ?? null;
        $partner->name = $data['name'] ?? null;
        $partner->save();

        $password = generateRandomPassword(8);
        $partner->password = Hash::make($password);
        $partner->save();

        // Send email
        $sendmail = Mail::send(new PartnerMail($partner->email, $partner->name, $password));
        return $partner;

    }

    public function login(array $data)
    {
        try {
            auth()->shouldUse('partner');
            if (!$token = Auth::guard('partner')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
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
                    'message' => 'Your account is not active kindly reach out to our super admin to re-activate',
                    'code' => 400,
                    'data' => null
                ];
            }
            return [
                'status' => true,
                'message' => 'Partner Logged in successfully',
                'code' => 200,
                'data' => [
                    'token' => $token,
                    'user' => auth()->user()
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
}
