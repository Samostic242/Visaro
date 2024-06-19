<?php

namespace App\Repositories\V2\Admin;

use App\Interfaces\Repositories\V2\Admin\AuthRepositoryInterface;
use App\Models\Admin;
use App\Models\Merchant\Onboarding\Merchant;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthRepositoryInterface
{
    public function create(array $data){
        $admin = new Admin();
        $admin->public_id = uuid() ?? null;
        $admin->email = $data['email'];
        $admin->username = $data['username'];
        $admin->password = $data['password'];
        $admin->role = $data['role'];
        $admin->save();
        return $admin;
    }

    public function login(array $data){
        try {
            auth()->shouldUse('admin');
            if (!$token = Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
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
                'message' => 'User Logged in successfully',
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

    public function fetchOverview(){
        $onboardedUsers = User::get()->count();
        $onboardeMerchants = Merchant::get()->count();
        $activeUsers = User::whereActive(true)->get()->count();
        $activeMerchants = Merchant::whereActive(true)->get()->count();


        $data = [
            'OnboardedUser' => $onboardedUsers,
            'OnboardedUserMerchants' => $onboardeMerchants,
            'DisbursementPartners' => 0,
            'ActiveUsers' => $activeUsers,
            'ActiveMerchants' => $activeMerchants,
            'TotalActiveDisbursementPartners' => 0,
            'TotalRevenueGenerated' => 0,
            'UnpaidLoans' => 0,
            'TotalIndustryInterest' => 0,
            'TotalFundRequests' => 0,
            'TotalApprovedRequest' => 0,
            'TotalDeclinedRequest' => 0,
        ];
        return $data;
    }
}

