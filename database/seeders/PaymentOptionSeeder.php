<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\PaymentOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentOption::truncate();
        $options = [
            [
                "name" => "Pay Now (One time)",
                "code" => "001",
                "description" => "Make an instant one-time payment for this booking",
                "active" => true
            ],
            [
                "name" => "Pay Later (Instalments)",
                "code" => "002",
                "description" => "Make payment for this booking in 3 installments",
                "active" => true
            ]
        ];
        foreach ($options as $option) {
            $option['public_id']  = uuid();
            PaymentOption::create($option);
        }
    }
}

