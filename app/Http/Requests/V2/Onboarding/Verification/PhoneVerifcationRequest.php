<?php

namespace App\Http\Requests\V2\Onboarding\Verification;

use Illuminate\Foundation\Http\FormRequest;

class PhoneVerifcationRequest extends FormRequest
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
            //
            'phone_code' => ['nullable', 'string', 'regex:/^\+[0-9]+$/', 'max:4'],
            'phone' => ['nullable', 'regex:/[0-9]{11}$/', 'unique:users'],
        ];
    }
}
