<?php

namespace App\Interfaces\Repositories\InvoiceRepositoryInterfaces;

interface InvoiceRepositoryInterface
{
    public function getAll();

    public function findById(int $id);

    public function findManyById(array $array);

    public function findByPublicId(string $public_id);

    public function findByUserId(int $user_id);

    public function findByMerchantId(int $merchant_id);
    
    public function create(array $data);

    public function update(int $id, array $data);

    public function destroyById(int $id);
}
