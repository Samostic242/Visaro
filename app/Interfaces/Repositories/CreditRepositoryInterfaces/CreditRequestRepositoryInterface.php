<?php

namespace App\Interfaces\Repositories\CreditRepositoryInterfaces;

interface CreditRequestRepositoryInterface
{
    public function getAll();

    public function findById(string $id);

    public function findManyById(array $array);

    public function findByUserId(array $user_id);

    public function findByCreditorId(array $creditor_id);

    public function create(array $data);

    public function update(string $id, array $data);

    public function destroyById(string $id);
}
