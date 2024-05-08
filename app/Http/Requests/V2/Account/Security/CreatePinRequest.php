<?php

namespace App\Http\Requests\V2\Account\Security;

use Illuminate\Foundation\Http\FormRequest;

class CreatePinRequest extends FormRequest
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
            'pin' => ['required', 'regex:/[0-9]{4}/', 'max:4'],
        ];
    }
}
