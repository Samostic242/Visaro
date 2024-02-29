<?php

namespace App\Interfaces\Repositories\V2\Account\Services;

interface CardRepositoryInterface
{
    public function create(array $data);

    public function update(string $id, array $data);

    public function delete(string $id);

    public function findById(string $id);

    public function getCard();
}
