<?php

namespace App\Http\Resources\V2\User\Account;

use App\Http\Resources\V2\User\Wallet\WalletResource;
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
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'phone_number' => $this->phone_code . $this->phone,
            'email' => $this->email,
            'username' => $this->username,
            'address' => $this->address,
            'qrcode' => $this->qrcode,
            'code' => $this->code,
            'photo' => $this->photo,
            'status' => $this->status,
            'wallet' => new WalletResource($this->whenLoaded('wallet')),
            'compliance' =>  $this->compliance
            // 'wallet_balance' => $this->wallet ? $this->wallet->balance : null,

        ];
    }
}
