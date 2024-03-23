<?php


namespace App\Repositories\V2\Commerce;
use App\Interfaces\Repositories\V2\Commerce\ProductRepositoryInterface;
use App\Models\Commerce\Product;


class ProductRepository implements ProductRepositoryInterface
{

    public function findProductById(string $id)
    {
        return Product::find($id);
    }

    public function create(array $data)
    {
        $product = new Product();
        $product->public_id = uuid();
        $product->name = $data['name'] ?? null;
        $product->slug = $data['slug'] ?? null;
        $product->link = $data['link'] ?? null;
        $product->save();
        return $product;
    }

    public function update(string $id, array $data)
    {
        $product = $this->findProductById($id);
        if(!$product)
        {
            return false;
        }
        $product->name = $data['name'] ?? $product->name;
        $product->slug = $data['slug'] ?? $product->slug;
        $product->link = $data['link'] ?? $product->link;
        $product->save();
        return $product;
    }
}
