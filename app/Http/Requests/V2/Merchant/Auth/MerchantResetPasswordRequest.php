<?php

namespace App\Http\Requests\V2\Merchant\Auth;

use Illuminate\Foundation\Http\FormRequest;

class MerchantResetPasswordRequest extends FormRequest
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
                'business_email' => ['required', 'email', 'exists:merchants,business_email'],
                'code' => ['required', 'required', 'regex:/[0-9]{4}/'],
                'password' => ['required', 'string']
            ];

    }
}
