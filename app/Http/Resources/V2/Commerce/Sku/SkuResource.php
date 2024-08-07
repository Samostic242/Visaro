<?php

namespace App\Http\Resources\V2\Commerce\Sku;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SkuResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'public_id' => $this->public_id,
            'product_id' => $this->product_id,
            'attribute' => $this->attribute_id,
            'code' => $this->code,
            'price' => $this->price
        ];
    }
}
