<?php

namespace App\Http\Requests\V2\Account\Settings;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email' => ['required', 'email'],
            'username' => ['string', 'max:20', 'exists:users,username'],
            'phone_code' => ['nullable', 'string', 'regex:/^\+[0-9]+$/', 'max:4'],
            'phone' => ['nullable', 'regex:/[0-9]{10}$/', 'unique:users'],
            'message' => ['nullable', 'string', 'max:255'],
        ];
    }
}