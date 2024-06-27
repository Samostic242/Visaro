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
            'compliance' =>  $this->compliance,
           /*  'pagination' => [
                'total' => $this->total(),
                'count' => $this->count(),
                'per_page' => $this->perPage(),
                'current_page' => $this->currentPage(),
                'total_pages' => $this->lastPage(),
                'links' => [
                    'next' => $this->nextPageUrl(),
                    'previous' => $this->previousPageUrl(),
                ],
            ], */
            // 'wallet_balance' => $this->wallet ? $this->wallet->balance : null,

        ];
    }
}
