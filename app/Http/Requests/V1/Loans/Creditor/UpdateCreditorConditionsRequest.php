<?php

namespace App\Http\Requests\V1\Loans\Creditor;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCreditorConditionsRequest extends FormRequest
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
            "creditor_id" => ['required', 'integer', 'exists:creditors,id'],
            "tier" => ['required', 'integer'],
            "base_url" => ['nullable', 'string'],
            "callback_url" => ['nullable', 'string'],
            "connection_type" => ['nullable', 'string'],
            "payment_mode" => ['nullable', 'string'],
            "recovery_mode" => ['nullable', 'string'],
            "recovery_channel" => ['nullable', 'string'],
            "maximum_credit_installments" => ['nullable', 'integer'],
            "minimum_credit_installments" => ['nullable', 'integer'],
            "operating_account_number" => ['nullable', 'string'],
            "operating_account_id" => ['nullable', 'string'],
            "conflict_resolution_email" => ['nullable', 'email'],
            "terms_and_conditions" => ['nullable', 'string'],
            "meta" => ['nullable', 'array'],
            "active" => ['required', 'boolean'],
        ];
    }
}
