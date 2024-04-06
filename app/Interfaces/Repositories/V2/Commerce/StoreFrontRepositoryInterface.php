<?php
namespace App\Interfaces\Repositories\V2\Commerce;

Interface StoreFrontRepositoryInterface
{
    public function create(array  $data);

    public function update(string $id, array $data);

    public function get(string $id);

    public function getStoreFrontById(string $id);

    public function addProductToStoreFronts(string $storefrontId, string $productId);

    public function getStoreFrontProducts(string $StoreFrontId);

    // public function getStoreFrontProductsById(string $id);
    public function getStorefrontsOrder(string $storeFrontId);




}
