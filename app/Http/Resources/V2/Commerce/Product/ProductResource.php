<?php

namespace App\Http\Resources\V2\Commerce\Product;

use App\Http\Resources\V2\Commerce\Sku\SkuResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name' => $this->name,
            'link' => $this->link,
            'slug' => $this->slug,
            'sku' => SkuResource::collection($this->whenLoaded('skus')),
            'status' => $this->status,
        ];
    }
}
