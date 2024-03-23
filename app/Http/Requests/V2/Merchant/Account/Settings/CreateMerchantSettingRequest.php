<?php

namespace App\Http\Requests\V2\Merchant\Account\Settings;

use Illuminate\Foundation\Http\FormRequest;

class CreateMerchantSettingRequest extends FormRequest
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
            "dispute_email" => ['nullable', 'string'],
            "support_email" => ['nullable', 'string'],
            "general_mail" => ['nullable', 'string'],
            "meta" => ['nullable', 'string'],

        ];
    }
}
