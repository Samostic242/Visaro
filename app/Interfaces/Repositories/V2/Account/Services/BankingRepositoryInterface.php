<?php

namespace App\Interfaces\Repositories\V2\Account\Services;

interface BankingRepositoryInterface
{
    public function createBeneficiary(array $data);
    public function getBeneficiaries();

    public function createBank(array $data);

    public function getBanks();

    public function createBankAccount(array $data);

    public function getBankAccount();

    public function deleteBankAccount(string $id);

    public function findBankAccountById(string $id);
}
