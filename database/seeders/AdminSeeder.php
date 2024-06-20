<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
                'public_id' => uuid(),
                'email'=> 'superadmin@visaro.ng',
                'username' => 'Visaro Admin',
                'password' => Hash::make('visaroadmin%%%'),
                'role' => 'superadmin',
        ];
        Admin::create($data);
    }
}
