<?php

namespace App\Http\Requests\V2\Account\Services\Card;

use Illuminate\Foundation\Http\FormRequest;

class EditCardRequest extends FormRequest
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
            'nickname' => ['required', 'string'],
            'card_id' => ['required', 'exists:user_cards,id'],
        ];
    }
}
