<?php

namespace App\Interfaces\Repositories\V2\Commerce;


Interface ProductRepositoryInterface
{
    public function create(array $data);

    public function getProducts(string $id);

    public function update(string $id, array $data);

    public function getProductById(string $id);
    
    public function getStoreFrontByProductId(string $id);





}
