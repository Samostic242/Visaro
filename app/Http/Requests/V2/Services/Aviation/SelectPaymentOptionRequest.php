<?php

namespace App\Http\Requests\V2\Services\Aviation;

use Illuminate\Foundation\Http\FormRequest;

class SelectPaymentOptionRequest extends FormRequest
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
            'booking_id' => ['required', 'exists:flight_bookings,id'],
            'payment_option_id' => ['required', 'exists:payment_options,code'],
        ];
    }
}
