<?php

namespace App\Http\Resources\V1\Services\Aviation;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FlightBillingAddressResource extends JsonResource
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
            'flight_booking_id' => $this->flight_booking_id,
            'contact_name' => $this->contact_name,
            'contact_email' => $this->contact_email,
            'contact_mobile_number' => $this->contact_mobile_number,
            'address_line1' => $this->address_line1,
            'session' => $this->session,
            'city' => $this->city,
            'country_code' => strtoupper($this->country_code),
//            'user' => SubGroupResource::collection($this->subgroups),
        ];
    }
}
