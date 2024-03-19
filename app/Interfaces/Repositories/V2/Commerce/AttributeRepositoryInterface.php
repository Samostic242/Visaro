<?php

namespace App\Interfaces\Repositories\V2\Commerce;


Interface AttributeRepositoryInterface
{
    public function create(array $data);

    public function update(string $id, array $data);

    public function createAttributeOption(array $data);

   

}
