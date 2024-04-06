<?php

namespace App\Http\Requests\V2\Commerce\StoreFront;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStoreFrontRequest extends FormRequest
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
            'merchant_id' => ['nullable', 'string', 'exists:merchants,id'],
            'name' => ['nullable', 'string'],
            'logo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'cover_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'status' => ['string', 'nullable'],
            'active' => ['boolean', 'nullable']
        ];
    }
}
