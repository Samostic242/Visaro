<?php

namespace App\Interfaces\Repositories\V2\Admin;


interface MerchantRepositoryInterface
{
    /**
     * Get all merchants
     * 
     */
    public function getMerchants();
    public function getMerchantsSearchResults($needle);
    public function createMerchant(array $data);
    public function getMerchant(string $id);
    public function getMerchantHistory(string $id);
    public function activateMerchant(string $id);
    public function deactivateMerchant(string $id);
}
