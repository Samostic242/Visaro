<?php
namespace App\Interfaces\Repositories\V2\Merchant\Account;

Interface MerchantSettingsInterface
{
    public function create(array $data);

    public function update(string $id, array $data);

    public function createPreference(array $data);

    public function updatePreference(string $id, array $data);

    public function createBankAccount(array $data);
    public function updateBankAccount(string $id, array $data);
}
