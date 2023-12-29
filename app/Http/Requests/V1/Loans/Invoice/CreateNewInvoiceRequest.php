<?php

namespace App\Http\Requests\V1\Loans\Invoice;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateNewInvoiceRequest extends FormRequest
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
            "merchant_id" => ['required', 'integer', 'exists:merchants,id'],
            "code" => ['nullable', 'string', 'min:6', 'max:6'],
            "title" => ['required', 'string'],
            "currency" => ['required', 'string', Rule::in(['NGN', 'USD'])],
            "amount" => ['required', 'numeric'],
            "vat" => ['required', 'numeric'],
            "tax" => ['required', 'numeric'],
            "items" => ['nullable', 'array'],
            "terms_and_conditions" => ['nullable', 'string'],
            "meta" => ['nullable', 'array'],
        ];
    }
}
