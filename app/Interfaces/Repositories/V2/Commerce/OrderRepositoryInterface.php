<?php

namespace App\Interfaces\Repositories\V2\Commerce;

Interface OrderRepositoryInterface
{
    public function create(array $data);

    public function get(string $id);

    // public function fulfilledOrder(string $id);

    public function getOrderById(string $id);

    public function update(string $id, array $data);

}
