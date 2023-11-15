<?php

namespace App\Http\Resources\V1\Services\Aviation;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
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
            'booked_flight_id' => $this->booked_flight_id,
            'type' => $this->type,
            'flight_number' => $this->flight_number,
            'aircraft' => $this->aircraft,
            'flight_class' => $this->flight_class,
            'operating_airline_code' => $this->operating_airline_code,
            'operating_airline_name' => $this->operating_airline_name,

            'departure_date' => $this->departure_date,
            'departure_airport_code' => $this->departure_airport_code,
            'departure_airport_fullname' => $this->departure_airport_fullname,
            'departure_terminal' => $this->departure_terminal ?? "N/A",
            'departure_gate' => $this->departure_gate ?? "N/A",

            'arrival_date' => $this->arrival_date,
            'arrival_airport_code' => $this->departure_airport_code,
            'arrival_airport_fullname' => $this->arrival_airport_fullname,
            'arrival_terminal' => $this->arrival_terminal ?? "N/A",
            'arrival_gate' => $this->arrival_gate ?? "N/A",
            'session' => $this->session,
        ];
    }
}
