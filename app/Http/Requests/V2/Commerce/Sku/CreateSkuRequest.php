<?php

namespace App\Http\Requests\V2\Commerce\Sku;

use Illuminate\Foundation\Http\FormRequest;

class CreateSkuRequest extends FormRequest
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
            'product_id' => ['nullable', 'string', 'exists:products,id'],
            'code' => ['nullable', 'string'],
            'price' => ['nullable', 'integer'],
        ];
    }
}
