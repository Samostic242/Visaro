<?php


namespace App\Repositories\V2\Commerce;
use App\Interfaces\Repositories\V2\Commerce\ProductRepositoryInterface;
use App\Models\Commerce\Product;


class ProductRepository implements ProductRepositoryInterface
{

    public function findProductById(string $id)
    {
        return Product::with('skus')->find($id);
    }

    public function getProductsByMerchantId($merchantId)
    {
        return Product::where('merchant_id', $merchantId)->with('skus')->get();
    }

    public function create(array $data)
    {
        $product = new Product();
        $product->public_id = uuid();
        $product->merchant_id = auth()->id();
        $product->name = $data['name'] ?? null;
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
        $product->save();
        return $product;
    }

    public function getProducts(string $id)
    {
        $products = $this->getProductsByMerchantId($id);
        return $products;
    }

    public function getProductById(string $id)
    {
        $product = $this->findProductById($id);
        return $product;
    }

    public function getStoreFrontByProductId(string $id)
    {
        $products = $this->findProductById($id);
        if(!$products)
        {
            return false;
        }
        $storefronts = $products->storefronts()->get();
        return $storefronts;
    }
}
