<?php

namespace App\Http\Requests\V2\Account\Services\Card;

use Illuminate\Foundation\Http\FormRequest;

class CardRequest extends FormRequest
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
           /*  "type" => ['required', 'string'],
            "number" => ["required","string"],
            "expiration_month" => ["required", 'string'],
            "expiration_year" => ["required", 'string'],
            "cvv" => ["required","string"],
            "last_four_digit" => ["required","string"],
            "country" => ["required","string"],
            "state" => ["required","string"],
            "postal_code" => ["required","string"],
            "city" => ["required","string"],
            "street_address" => ["required","string"],
            "lga" => ["required","string"],
            "provider" => ["required","string"],
            "provider_logo" => ["image", "mimes:jpeg,png,jpg,gif,svg", "max:2048"], */
            "allow_charge" => ["boolean"],
            "vendor" => ['required', 'string']

        ];
    }
}
