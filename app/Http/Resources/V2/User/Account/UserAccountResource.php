<?php

namespace App\Http\Resources\V2\User\Account;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserAccountResource extends JsonResource
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
            'firstname' => $this->account_number,
            'lastname' => $this->bank_name,
            'phone_number' => $this->phone_code . $this->phone,
            'email' => $this->email,
            'qrcode' => $this->qrcode,
            'code' => $this->code,
            'photo' => $this->photo,
            'status' => $this->status,
        ];
    }
}
