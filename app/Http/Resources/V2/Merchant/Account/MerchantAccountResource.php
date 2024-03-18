<?php

namespace App\Http\Resources\V2\Merchant\Account;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MerchantAccountResource extends JsonResource
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
            'name' => $this->business_name,
            'type' => $this->business_type,
            'phone_number' => $this->phone_code . $this->phone,
            'email' => $this->business_email,
            'qrcode' => $this->qrcode,
            'code' => $this->code,
            'logo' => $this->logo,
            'status' => $this->status,
        ];
    }
}
