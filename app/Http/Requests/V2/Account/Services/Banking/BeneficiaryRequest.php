<?php

namespace App\Http\Requests\V2\Account\Services\Banking;

use Illuminate\Foundation\Http\FormRequest;

class BeneficiaryRequest extends FormRequest
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
            'account_name' => ['string', 'required'],
            'account_number' => ['string', 'required'],
            'bank_name' => ['string', 'required']
        ];
    }
}
