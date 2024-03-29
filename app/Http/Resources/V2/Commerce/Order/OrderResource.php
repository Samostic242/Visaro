<?php

namespace App\Http\Resources\V2\Commerce\Order;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'transaction_id' => $this->transaction_id,
            'user_id' => $this->user_id,
            'qrcode' => $this->qrcode,
            'code' => $this->code,
            'status' => $this->status,
        ];
    }
}
