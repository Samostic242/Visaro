<?php

namespace App\Http\Requests\V1\Services\Aviation;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class NewFlightBookingRequest extends FormRequest
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
            "widget_data" => ['required', 'array'],
            "origin" => ['required', 'string', Rule::in(['mobile', 'web'])],
        ];
    }
}
