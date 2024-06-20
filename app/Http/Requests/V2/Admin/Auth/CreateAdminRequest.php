<?php

namespace App\Http\Requests\V2\Admin\Auth;

use Illuminate\Foundation\Http\FormRequest;

class CreateAdminRequest extends FormRequest
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
            'email' => ['required', 'email', 'unique:admins,email'],
            'username' => ['required', 'string'],
            'role' => ['required', 'string'],
            'password' => ['required', 'string'],
        ];
    }
}
