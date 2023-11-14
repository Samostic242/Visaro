<?php

namespace App\Http\Requests\V1\Users\Profile\Phone;

use Illuminate\Foundation\Http\FormRequest;

class InitiatePhoneNumberVerificationRequest extends FormRequest
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
            "phone_code" => ['required', 'string', 'exists:country,phone_code'],
            "phone_number" => ['required', 'string'],
        ];
    }
}
