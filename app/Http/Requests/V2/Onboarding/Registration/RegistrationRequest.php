<?php

namespace App\Http\Requests\V2\Onboarding\Registration;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            "firstname" => ['string', 'max:20'],
            'middlename' => ['string', 'max:20'],
            'lastname' => ['string', 'max:20'],
            'username' => ['string', 'max:20', 'unique:users'],
            'phone_code' => ['nullable', 'string', 'regex:/^\+[0-9]+$/', 'max:4'],
            'phone' => ['nullable', 'regex:/[0-9]{10}$/', 'unique:users'],
            'photo' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'password' => ['nullable', 'string', 'min:8', 'regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9])[\w\W]{8,}$/'],
        ];
    }
}
