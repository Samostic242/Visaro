<?php

namespace App\Http\Requests\V2\Account\Services\Banking;

use Illuminate\Foundation\Http\FormRequest;

class BankAccountRequest extends FormRequest
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
            'account_name' => ['required', 'string'],
            'account_number' => ['required', 'string'],
            'bank_name' => ['required', 'string'],
            'bank_code' => ['required', 'string'],
        ];
    }
}
