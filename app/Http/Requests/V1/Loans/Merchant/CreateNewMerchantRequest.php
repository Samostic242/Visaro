<?php

namespace App\Http\Requests\V1\Loans\Merchant;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateNewMerchantRequest extends FormRequest
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
            "business_name" => ['required', 'string', 'unique:merchants,business_name'],
            "business_type" => ['required', 'string', Rule::in('corporation', 'sole_proprietorship', 'partnership')],
            "business_email" => ['required', 'email', 'unique:merchants,business_email'],
            "business_phone_code" => ['required', 'string', 'exists:country,phone_code'],
            "business_phone" => ['required', 'string'],
            "business_registration_number" => ['required', 'string'],
            "acronym" => ['nullable', 'string'],
            "official_name" => ['required', 'string'],
            "website" => ['required', 'string', 'url'],
            "presence" => ['nullable', 'string', Rule::in('physical', 'virtual', 'hybrid')],
            "logo" => ['nullable', 'string'],
            "country_id" => ['required', 'integer', 'exists:country,id'],
            "customization" => ['nullable', 'array'],
            "meta" => ['nullable', 'array'],
        ];
    }
}
