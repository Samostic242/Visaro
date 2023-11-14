<?php

namespace App\Http\Requests\V1\Services\Aviation;

use Illuminate\Foundation\Http\FormRequest;

class ConfirmBookingRequest extends FormRequest
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
            "booking_id" => ['required', 'integer','exists:flight_bookings,id'],
            "title" => ['required', 'string'],
            "firstname" => ['required', 'string'],
            "lastname" => ['required', 'string'],
            "phone_code" => ['required', 'string','exists:country,phone_code'],
            "phone_number" => ['required', 'string'],
            "nationality" => ['required', 'string'],
            "date_of_birth" => ['required', 'string'],
            "email" => ['required', 'email'],
        ];
    }
}
