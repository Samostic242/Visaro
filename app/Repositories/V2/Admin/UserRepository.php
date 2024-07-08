<?php

namespace App\Repositories\V2\Admin;
use App\Http\Resources\V2\User\Account\UserAccountResource;
use App\Interfaces\Repositories\V2\Admin\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function fetchUserOverview()
    {
        $verifiedUsers = User::where('kyc_verified', true)->get()->count();
        $activeUsers = User::whereActive(true)->get()->count();
        $dailyUsers = User::where('created_at', '>=', now()->subDay())->get()->count();
        $users = User::paginate(5);
        $formattedUsers = UserAccountResource::collection($users);


        $data = [
            'VerifiedUsers' => $verifiedUsers,
            'ActiveUsers' => $activeUsers,
            'DailyUsers' => $dailyUsers,
            // 'users' => $formattedUsers,
            'users' => $users,

        ];

        return $data;


    }

    public function getAll()
    {
        return null;
    }

    public function getSingleUser(string $id)
    {
        $user = User::whereId($id)->with('transactions')->get();
        return $user;
    }

}

