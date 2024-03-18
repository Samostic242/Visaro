<?php

namespace App\Http\Requests\V2\Merchant\Account\Compliance;

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
            "cac_number" => ['nullable', 'string', 'unique:merchant_compliances'],
            "cac_document" => ['nullable', 'file', 'mimes:jpg,jpeg,png'],
            "proof_of_address" => ['nullable', 'file', 'mimes:jpg,jpeg,png'],
            "country_id" => ['nullable', 'integer', 'exists:country,id'],
            "state" => ['nullable', 'string'],
            "local_government" => ['nullable', 'string'],
            "city" => ['nullable', 'string'],
            "street_address" => ['nullable', 'string'],
            "land_mark" => ['nullable', 'string'],
            "meta" => ['nullable', 'string'],
        ];
    }
}
