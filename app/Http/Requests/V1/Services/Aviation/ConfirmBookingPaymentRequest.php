<?php

namespace App\Http\Requests\V1\Services\Aviation;

use Illuminate\Foundation\Http\FormRequest;

class ConfirmBookingPaymentRequest extends FormRequest
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
            "booking_id" => ['required', 'integer', 'exists:flight_bookings,id'],
            "payment_option_id" => ['required', 'int', 'exists:payment_options,id'],
            "amount" => ['required', 'int'],
            "payment_installment_id" => ['required', 'int', 'exists:payment_installments,id']

        ];
    }
}
//$table->id();
//$table->uuid('public_id')->nullable();
//$table->foreignUuid('user_id');
//$table->foreignUuid('flight_booking_id');
//$table->foreignUuid('instalment_id');
//$table->bigInteger('amount')->default(0);
//$table->bigInteger('amount_payable')->default(0);
//$table->bigInteger('balance')->default(0);
//$table->string('payment_option')->default('pay_now');
//$table->string('session')->nullable();
//$table->json('payment_option_copy')->nullable();
//$table->json('copy')->nullable();
//$table->json('meta')->nullable();
