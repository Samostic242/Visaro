<?php

namespace App\Interfaces\Repositories\V2\Account\Services;

interface BankingRepositoryInterface
{
    public function createBeneficiary(array $data);
    public function getBeneficiaries();
}
