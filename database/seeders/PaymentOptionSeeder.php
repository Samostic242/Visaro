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
           /*  [
                "name" => "Pay Now (One time) Wallet Deduction",
                "code" => "001",
                "description" => "Make an instant one-time payment for this booking, while paying with your Visaro wallet balance",
                "active" => true
            ], */
            [
                "name" => "Pay Later (Installments)",
                "code" => "002",
                "description" => "Make payment for this booking in 3 installments",
                "active" => true
            ],
            [
                "name" => "Pay Now (One time) Charge From Linked Card",
                "code" => "003",
                "description" => "Make an instant one-time payment for this booking, While charging from your linked card",
                "active" => true
            ],
           /*  [
                "name" => "Pay Now (One time) Charge From New Card",
                "code" => "004",
                "description" => "Make an instant one-time payment for this booking, While charging from your a new card",
                "active" => true
            ], */
        ];
        foreach ($options as $option) {
            $option['public_id']  = uuid();
            PaymentOption::create($option);
        }
    }
}

