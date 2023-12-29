<?php

namespace App\Interfaces\Repositories\CreditorRepositoryInterfaces;

interface CreditorConditionsRepositoryInterface
{
    public function getAll();

    public function findById(string $id);

    public function findCreditorById(string $creditor_id);


    public function findManyById(array $array);

    public function create(array $data);

    public function update(string $id, array $data);

    public function destroyById(string $id);
}
