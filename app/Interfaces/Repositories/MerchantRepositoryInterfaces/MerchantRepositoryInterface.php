<?php

namespace App\Interfaces\Repositories\MerchantRepositoryInterfaces;

interface MerchantRepositoryInterface
{
    public function getAll();

    public function findById(string $id);

    public function findManyById(array $array);

    public function findByPublicId(string $public_id);

    public function findByMerchantId(string $merchant_id);

    public function create(array $data);

    public function update(string $id, array $data);

    public function destroyById(string $id);
}
