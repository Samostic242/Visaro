<?php

namespace App\Interfaces\Repositories\V2\Account\Services;

interface CardRepositoryInterface
{
    public function create(array $data);

    public function update(array $data);

    public function delete(string $id);

    public function findById(string $id);

    public function updateCardStatus(array $data);

    public function updateCardStatusFlutterwave(array $data);

    public function verifyTransaction(int $id);


    public function getCard();
}
