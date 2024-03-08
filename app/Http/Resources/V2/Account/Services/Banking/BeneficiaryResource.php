<?php

namespace App\Http\Resources\V2\Account\Services\Banking;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BeneficiaryResource extends JsonResource
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
            'name' => $this->account_name,
            'account_number' => $this->account_number,
            'bank_name' => $this->bank_name,
        ];
    }
}
