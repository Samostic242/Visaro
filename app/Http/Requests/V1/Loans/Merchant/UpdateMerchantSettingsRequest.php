<?php

namespace App\Http\Requests\V1\Loans\Merchant;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateMerchantSettingsRequest extends FormRequest
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
            "payout_interval" => ['required', 'string', Rule::in('daily', 'weekly', 'monthly')],
            "payout_frequency" => ['required', 'integer'],
            "meta" => ['nullable', 'array'],
        ];
    }
}
