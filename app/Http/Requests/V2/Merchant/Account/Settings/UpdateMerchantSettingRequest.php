<?php

namespace App\Http\Requests\V2\Merchant\Account\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMerchantSettingRequest extends FormRequest
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
            "dispute_email" => ['nullable', 'email'],
            "support_email" => ['nullable', 'email'],
            "general_email" => ['nullable', 'email'],
            "meta" => ['nullable', 'string'],
            "active" => ['boolean', 'nullable'],
            "status" => ['nullable', 'string']
        ];
    }
}
