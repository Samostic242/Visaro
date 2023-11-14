<?php

namespace App\Http\Resources\V1\Services\Aviation;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FlightBookingResource extends JsonResource
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
            'user_id' => $this->user_id,
            'origin' => $this->origin,
            'mode' => $this->mode,
            'price' => $this->price,
            'confirmation_code' => $this->confirmation_code,
            'type' => $this->type,
            'session' => $this->session,
            'status' => $this->status,
            'billing_address' => new FlightBillingAddressResource($this->billingAddress),
            'travellers' =>  TravellerResource::collection($this->travellers),
        ];
    }
}
