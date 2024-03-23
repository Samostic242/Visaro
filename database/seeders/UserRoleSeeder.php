<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_roles = [
            [
                'user_id' => User::where('email', 'maxwell@gmail.com')->first()->id,
                'role_id' => Role::first()->id,
                'description' => 'Admin User'
            ],
            [
                'user_id' => User::where('email', 'esekelvin24@gmail.com')->first()->id,
                'role_id' => Role::first()->id,
                'description' => 'User'
            ]
        ];
        foreach ($user_roles as $user_role) {
            UserRole::create($user_role);
        }


    }
}
