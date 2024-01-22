<?php

namespace App\Http\Requests\V1\Loans\Creditor;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateNewCreditorRequest extends FormRequest
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
            "name" => ['required', 'string'],
            "acronym" => ['nullable', 'string'],
            "official_name" => ['required', 'string'],
            "website" => ['nullable', 'string'],
            "logo" => ['nullable', 'string'],
            "country_id" => ['required', 'integer', 'exists:country,id'],
            "phone_code" => ['required', 'string', 'exists:country,phone_code'],
            "phone" => ['required', 'string'],
            "category" => ['required', 'string'],
            "email" => ['required', 'email', 'unique:creditors,email'],
            "conflict_resolution_email" => ['required', 'email'],
            "conflict_resolution_phone_code" => ['required', 'string', 'exists:country,phone_code'],
            "conflict_resolution_phone" => ['required', 'string'],
            "entity" => ['required', 'string', Rule::in(['individual', 'institution'])],
            "entity_category" => ['required', 'string', Rule::in(['private', 'government', 'individual'])],
            "customization" => ['nullable', 'array'],
            "meta" => ['nullable', 'array'],
        ];
    }
}
