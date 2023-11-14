<?php

namespace App\Http\Resources\V1\Services\Aviation;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TravellerResource extends JsonResource
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
            'title' => $this->name_prefix,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'middlename' => $this->middlename,
            'session' => $this->session,
            'gender' => $this->gender_name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'birth_date' => $this->birth_date,
            'passenger_type_code' => $this->passenger_type_code,
        ];
    }
}
