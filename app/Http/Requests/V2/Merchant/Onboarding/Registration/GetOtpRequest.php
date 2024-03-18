<?php

namespace App\Http\Requests\V2\Merchant\Onboarding\Registration;

use Illuminate\Foundation\Http\FormRequest;

class GetOtpRequest extends FormRequest
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
            'business_email' => ['required', 'email'],
            'business_phone_code' => ['required', 'string', 'regex:/^\+[0-9]+$/', 'max:4'],
            'business_phone' => ['required', 'regex:/[0-9]{10}$/'],
        ];
    }
}
