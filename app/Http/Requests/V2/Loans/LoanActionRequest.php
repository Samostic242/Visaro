<?php

namespace App\Http\Requests\V2\Loans;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LoanActionRequest extends FormRequest
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
            'loan_id' => ['required', 'exists:quick_loans,id'],
            'reason' => ['nullable', 'string', 'max:255'],
            'action' => ['required', Rule::in(['approved', 'declined'])],
        ];
    }
}
