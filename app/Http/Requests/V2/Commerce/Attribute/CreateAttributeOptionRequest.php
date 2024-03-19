<?php

namespace App\Http\Requests\V2\Commerce\Attribute;

use Illuminate\Foundation\Http\FormRequest;

class CreateAttributeOptionRequest extends FormRequest
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
            //
            'attribute_id' => ['required', 'exists:attributes,id'],
            'value' => ['required', 'string'],
        ];
    }
}
