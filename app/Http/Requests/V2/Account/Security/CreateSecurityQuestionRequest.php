<?php

namespace App\Http\Requests\V2\Account\Security;

use Illuminate\Foundation\Http\FormRequest;

class CreateSecurityQuestionRequest extends FormRequest
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
            'security_question' => ['required', 'string'],
            'security_answer' => ['required', 'string']
        ];
    }
}
