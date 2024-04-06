<?php
namespace App\Repositories\V2\Commerce;
use App\Interfaces\Repositories\V2\Commerce\StoreFrontRepositoryInterface;
use App\Models\Commerce\Product;
use App\Models\Commerce\StoreFront;

class StoreFrontRepository implements StoreFrontRepositoryInterface
{

    public function findByMerchantId($id)
    {
        $store_fronts = StoreFront::where('merchant_id', $id)->get();
        return $store_fronts;
    }

    public function findProductById($id): Product
    {
        $product = Product::find($id);
        return $product;
    }

    public function findById($id)
    {
        $store_front = StoreFront::find($id);
        return $store_front;
    }

    public function create(array $data)
    {
        $storefront = new StoreFront();
        $storefront->public_id = uuid();
        $storefront->merchant_id = $data['merchant_id'] ?? null;
        $storefront->name = $data['name'] ?? null;
        if(array_key_exists('logo', $data)){
            $uploaded_file_url = upload_to_cloudinary('StoreFront Logo', $data['logo']->getRealPath());
        $storefront->logo = $uploaded_file_url ?? null;
        }
        if(array_key_exists('cover_image', $data)){
            $uploaded_file_url = upload_to_cloudinary('StoreFront Cover Image', $data['cover_image']->getRealPath());
        $storefront->cover_image = $uploaded_file_url ?? null;
        }
        $storefront->save();
        return $storefront;
    }

    public function get(string $id)
    {
        $storefronts = $this->findByMerchantId($id);
        return $storefronts;
    }

    public function getStoreFrontById(string $id)
    {
        $storefront = $this->findById($id);
        if(!$storefront)
        {
            return false;
        }
        return $storefront;
    }

    public function update(string $id, array $data)
    {
        $storefront = $this->findById($id);
        if(!$storefront)
        {
            return false;
        }

        $storefront->name = $data['name'] ?? $storefront->name;
        if(array_key_exists('logo', $data)){
            $uploaded_file_url = upload_to_cloudinary('StoreFront Logo', $data['logo']->getRealPath());
        $storefront->logo = $uploaded_file_url ?? $storefront->logo;
        }
        if(array_key_exists('cover_image', $data)){
            $uploaded_file_url = upload_to_cloudinary('StoreFront Cover Image', $data['cover_image']->getRealPath());
        $storefront->cover_image = $uploaded_file_url ?? $storefront->cover_image;
        }
        $storefront->status = $data['status'] ?? $storefront->status;
        $storefront->active = $data['active'] ?? $storefront->active;
        $storefront->save();
        return $storefront;
    }

    public function addProductToStoreFronts(string $storefrontId, string $productId)
    {
        $product = $this->findProductById($productId);
        $storefront = $this->findById($storefrontId);


        if($product && $storefront)
        {
            $storefront->products()->attach($product);
            return true;
        }
        return false;

    }

    public function getStoreFrontProducts(string $storeFrontId)
    {

        $storefront = $this->findById($storeFrontId);
        $data = $storefront->products()->get();
        return $data;
    }

    public function getStorefrontsOrder(string $storeFrontId)
    {
        $storefront = $this->findById($storeFrontId);
        $data = $storefront->orders()->get();
        return $data;
    }

}
