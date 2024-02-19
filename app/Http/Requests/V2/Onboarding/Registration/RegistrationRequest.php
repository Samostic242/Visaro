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
            "firstname" => ['required', 'string', 'max:20'],
            'middlename' => ['required', 'string', 'max:20'],
            'lastname' => ['required', 'string', 'max:20'],
            'phone_code' => ['nullable', 'string', 'regex:/^\+[0-9]+$/', 'max:4'],
            'phone' => ['nullable', 'regex:/[0-9]{11}$/', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'photo' => ['sometimes', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'password' => ['required', 'string'],
        ];
    }
}
