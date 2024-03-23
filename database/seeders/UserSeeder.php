<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            [
                'firstname' => 'Maxwell',
                'lastname' => 'Agu',
                'email' => 'maxwell@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make("password"),
                'remember_token' => Str::random(10),
                'public_id' => uuid(),
                'code' => $code = generateCode(),
                'qrcode' => generateQrCode($code),
                'phone_verified_at' => now(),
            ],
            [
                'firstname' => 'Ese',
                'lastname' => 'Kelvin',
                'email' => 'esekelvin24@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make("password"),
                'remember_token' => Str::random(10),
                'public_id' => uuid(),
                'code' => $code = generateCode(),
                'qrcode' => generateQrCode($code),
                'phone_verified_at' => now(),
            ],
            [
                'firstname' => 'Samson',
                'lastname' => 'Asset',
                'email' => 'samson@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make("password"),
                'remember_token' => Str::random(10),
                'public_id' => uuid(),
                'code' => $code = generateCode(),
                'qrcode' => generateQrCode($code),
                'phone_verified_at' => now(),
            ]
        ];
        foreach ($users as $user) {
            User::create($user);
        }
        //User::factory(2)->create();
    }
}
