<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        DB::table('users')->insert(
            [
                'firstname' => 'Ese', 'lastname' => 'Kelvin', 'email' => 'esekelvin24@gmail.com', 'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
                'otp_login_verif' => 1,
                'otp_phone_verif' => 1,
            ]
        );
        $code = generateCode();
        DB::table('users')->insert(
            [
                'firstname' => 'Maxwell', 'lastname' => 'Agu', 'email' => 'maxwell@gmail.com', 'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
                'public_id' => uuid(),
                'code' => $code,
                'qrcode' => generateQrCode($code),
                'otp_login_verif' => 1,
                'otp_type' => 1,
                'otp_phone_verif' => 1,
            ],
        );
        //User::factory(2)->create();
    }
}
