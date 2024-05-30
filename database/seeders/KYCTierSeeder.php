<?php

namespace Database\Seeders;

use App\Models\KYCTier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KYCTierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $KycTiers = [
            [
                'tier_name' => 'Tier1',
                'tier_description'=> 'Full Name, Gender, Date_of_birth, Address, Mobile Number',
                'level' => 1,
                'transaction_limit' => '50000.00',
                'credit_limit' => null,
                'public_id' => uuid(),
            ],
            [
                'tier_name' => 'Tier2',
                'tier_description'=> 'BVN, NIN, Full Name, Gender, Date_of_birth, Address, Mobile Number, Employment Information, Full Face Recognition',
                'level' => 2,
                'transaction_limit' => '200000.00',
                'credit_limit' => '100000.00',
                'public_id' => uuid(),
            ],
            [
                'tier_name' => 'Tier3',
                'tier_description'=> 'BVN, NIN, Full Name, Gender, Date_of_birth, Address,
                 Mobile Number, Employment Information, Full Face Recognition, Any Regulatory ID Card,(International Passport, Voter\'s Card,
                 National ID Card, Address Verification, Live Image of the street, Full Face Recognition, Bank Account and Card Details',
                'level' => 3,
                'transaction_limit' => '5000000.00',
                'credit_limit' => '500000.00',
                'public_id' => uuid(),
            ]

        ];
        foreach($KycTiers as $data){
            // print_r($data);
            KYCTier::create($data);
        }
    }
}
