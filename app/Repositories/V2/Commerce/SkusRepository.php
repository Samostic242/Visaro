<?php

namespace App\Repositories\V2\Commerce;

use App\Interfaces\Repositories\V2\Commerce\SkusRepositoryInterface;
use App\Models\Commerce\Sku;

class SkusRepository implements SkusRepositoryInterface
{

    public function findSkuById(string $id)
    {
        return Sku::find($id);
    }
    public function create(array $data)
    {
        $skus = Sku();
        $skus->public_id = uuid();
        $skus->product_id = $data['product_id'] ?? null;
        $skus->code = $data['code'] ?? null;
        $skus->price = $data['price'] ?? null;
        $skus->save();
        return $skus;
    }

    public function update(string $id, array $data)
    {
        $skus = $this->findSkuById($id);
        $skus->code = $data['code'] ?? $skus->code;
        $skus->price = $data['price'] ?? $skus->price;
        $skus->save();
        return $skus;
    }

}
