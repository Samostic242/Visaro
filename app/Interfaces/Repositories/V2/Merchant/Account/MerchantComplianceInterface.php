<?php
namespace App\Interfaces\Repositories\V2\Merchant\Account;

Interface MerchantComplianceInterface
{
    public function create(array $data);

    public function update(string $id, array $data);
}
