<?php

namespace App\Http\Resources\V2\Account\Services\Installment;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InstallmentResource extends JsonResource
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
            'service' => $this->target_service,
            'service_name'=> ($this->flightbooking->flights->first())->marketing_airline_name ?? null,
            'total_amount' => $this->total_amount_payable,
            'number_of_installments' => $this->number_of_installments,
            'single_installment_amount' => $this->single_installment_amount,
            'current_installment' => $this->current_installment,
            'next_payment_date' => $this->next_payment_date,
            'due_payment_date' => $this->due_payment_date,
            'active' => $this->active,
        ];
    }
}
