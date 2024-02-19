<?php

namespace App\Repositories\V2\Account\Services;

use App\Interfaces\Repositories\V2\Account\Services\BankingRepositoryInterface;
use App\Models\Beneficiary;
use Illuminate\Support\Facades\Auth;


class BankingRepository implements BankingRepositoryInterface
{
    public function createBeneficiary(array $data)
    {
        $beneficiary = new Beneficiary();

        $beneficiary->public_id = \uuid() ?? null;
        $beneficiary->user_id = auth()->id();
        $beneficiary->account_name = $data['account_name'] ?? null;
        $beneficiary->account_number = $data['account_number'] ?? null;
        $beneficiary->bank_name = $data['bank_name'] ?? null;
        $beneficiary->save();
        return $beneficiary;
    }

    public function getBeneficiaries()
    {
        $user = auth()->user();
        return $user->beneficiaries;
    }
}
