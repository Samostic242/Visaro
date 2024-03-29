<?php

namespace App\Http\Resources\V2\Commerce\StoreFront;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreFrontResource extends JsonResource
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
            'user_id' => $this->user_id,
            'qrcode' => $this->qrcode,
            'code' => $this->code,
            'status' => $this->status,
        ];
    }
}
