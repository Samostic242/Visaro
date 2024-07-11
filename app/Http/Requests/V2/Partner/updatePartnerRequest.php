<?php

namespace App\Http\Requests\V2\Partner;

use Illuminate\Foundation\Http\FormRequest;

class updatePartnerRequest extends FormRequest
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
            'name' => ['string', 'nullable'],
            'address' => ['nullable', 'string'],
            'phone' => ['nullable', 'phone'],
            'interest_rate' => ['nullable', 'numeric'],
            'password' => ['nullable', 'string'],
        ];
    }
}
