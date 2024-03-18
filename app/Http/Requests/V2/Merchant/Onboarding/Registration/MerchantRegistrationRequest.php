<?php

namespace App\Http\Requests\V2\Merchant\Onboarding\Registration;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MerchantRegistrationRequest extends FormRequest
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
            "business_name" => ['nullable', 'string', 'unique:merchants,business_name'],
            "business_type" => ['nullable', 'string', Rule::in('corporation', 'sole_proprietorship', 'partnership')],
            "business_email" => ['nullable', 'email', 'unique:merchants,business_email'],
            "business_phone_code" => ['nullable', 'string', 'exists:country,phone_code'],
            "business_phone" => ['nullable', 'string'],
            "business_registration_number" => ['nullable', 'string'],
            "acronym" => ['nullable', 'string'],
            "official_name" => ['nullable', 'string'],
            "website" => ['nullable', 'string', 'url'],
            "presence" => ['nullable', 'string', Rule::in('physical', 'virtual', 'hybrid')],
            "logo" => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            "country_id" => ['nullable', 'integer', 'exists:country,id'],
            "customization" => ['nullable', 'array'],
            "meta" => ['nullable', 'array'],
        ];
    }
}
