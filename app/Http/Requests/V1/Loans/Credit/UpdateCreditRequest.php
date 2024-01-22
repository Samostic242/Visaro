<?php

namespace App\Http\Requests\V1\Loans\Credit;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCreditRequest extends FormRequest
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
            "invoice_id" => ['required', 'integer', 'exists:invoices,id'],
            "amount" => ['required', 'integer', 'min:1000'],
            "charge" => ['required', 'integer', 'min:1000'],
            "number_of_installments" => ['required', 'integer', 'min:1', 'max:6'],
            "terms_and_condition" => ['required', 'boolean'],
        ];
    }
}
