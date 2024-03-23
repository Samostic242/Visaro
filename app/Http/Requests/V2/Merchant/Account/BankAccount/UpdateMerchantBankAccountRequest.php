<?php

namespace App\Http\Requests\V2\Merchant\Account\BankAccount;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMerchantBankAccountRequest extends FormRequest
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
            'bank_name' => ['nullable', 'string'],
            'bank_code' => ['nullable', 'string'],
            'account_name' => ['nullable', 'string'],
            'account_number' => ['nullable', 'string'],
            'currency' => ['nullable', 'string'],
            'active' => ['boolean', 'nullable'],
            'status' => ['nullable', 'string'],
        ];
    }
}
