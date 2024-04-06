<?php

namespace App\Http\Requests\V2\Commerce\Order;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'invoice_id' => ['string', 'nullable', 'exists:invoices,id'],
            'merchant_id' => ['string', 'nullable', 'exists:merchants,id'],
            'transaction_id' => ['string', 'nullable', 'exists:transactions,id'],
            'user_id' => ['string', 'nullable', 'exists:users,id'],
            'store_front_id' => ['string', 'nullable', 'exists:store_fronts,id'],
            // 'status' => ['string', 'nullable', 'in:created,processing,completed,cancelled'],
        ];
    }
}
