<?php

namespace App\Http\Requests\V2\Merchant\Account\BankAccount;

use Illuminate\Foundation\Http\FormRequest;

class CreateMerchantBankAccountRequest extends FormRequest
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
            'bank_name' => ['required', 'string'],
            'bank_code' => ['required', 'string'],
            'account_name' => ['required', 'string'],
            'account_number' => ['required', 'string'],
            'currency' => ['required', 'string'],
        ];
    }
}
