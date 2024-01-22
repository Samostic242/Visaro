<?php

namespace App\Http\Requests\V1\Loans\Merchant;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMerchantComplianceRequest extends FormRequest
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
            "business_name" => ['required', 'string'],
            "business_registration_number" => ['nullable', 'string', 'unique:merchant_compliances'],
            "business_registration_document" => ['nullable', 'file', 'mimes:jpg,jpeg,png'],
            "business_license_document" => ['nullable', 'file', 'mimes:jpg,jpeg,png'],
            "business_tax_document" => ['nullable', 'file', 'mimes:jpg,jpeg,png'],
            "business_certificate_of_incorporation_document" => ['nullable', 'file', 'mimes:jpg,jpeg,png'],
            "business_proof_of_address_document" => ['nullable', 'file', 'mimes:jpg,jpeg,png'],
            "identity_number_of_director" => ['nullable', 'string', 'unique:merchant_compliances'],
            "identity_document_of_director" => ['required', 'file', 'mimes:jpg,jpeg,png'],
            "bvn" => ['nullable', 'string'],
            "account_name" => ['nullable', 'string'],
            "account_number" => ['nullable', 'string'],
            "bank_name" => ['nullable', 'string'],
            "bank_code" => ['nullable', 'string'],
            "website" => ['nullable', 'string'],
            "logo" => ['nullable', 'file', 'mimes:jpg,jpeg,png,svg'],
            "country_id" => ['required', 'integer', 'exists:country,id'],
            "state" => ['nullable', 'string'],
            "lga" => ['nullable', 'string'],
            "address1" => ['nullable', 'string'],
            "address2" => ['nullable', 'string'],
            "description" => ['nullable', 'string'],
            "email" => ['unique:merchant_compliances', 'email'],
            "phone_code" => ['required', 'string', 'exists:country,phone_code'],
            "phone" => ['required', 'string'],
            "conflict_resolution_email" => ['nullable', 'email'],
            "conflict_resolution_phone_code" => ['nullable', 'string', 'exists:country,phone_code'],
            "conflict_resolution_phone" => ['nullable', 'string'],
            "meta" => ['nullable', 'array'],
        ];
    }
}
