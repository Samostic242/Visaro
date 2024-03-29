<?php

namespace App\Http\Controllers\Api\V1\Services\Aviation;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Services\Aviation\ConfirmBookingPaymentRequest;
use App\Http\Resources\V1\Payment\PaymentOptionResource;
use App\Http\Resources\V1\Services\Aviation\TicketResource;
use App\Models\FlightBooking;
use App\Models\PaymentInstallment;
use App\Models\PaymentOption;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FlightPaymentController extends Controller
{

    public function fetchPaymentOptions(): object|string|array
    {
        $options = PaymentOption::where('active', true)
            ->get();
        return respondSuccess("Payment options fetched successfully", PaymentOptionResource::collection($options));
    }

    public function selectPaymentOption(Request $request, $id, $option_id): object
    {
        $booking = FlightBooking::where('user_id', auth()->user()->id)
            ->where('id', $id)
            ->first();
        if (!$booking) {
            return respondError('01', "Booking not found", status_code: 404);
        }
        try {
            $option = PaymentOption::where('id', $option_id)->first();
            $amount = $booking->price;
            $data = [
                'option' => new PaymentOptionResource($option),
                'option_data' => $this->buildOptionActionResponse($option->id),
                'payment_data' => $this->buildOptionPaymentResponse($amount, $option->id, $booking)
            ];

            return respondSuccess('Option fetched successfully', $data);
        } catch (\Throwable $th) {
            Log::error("Error fetching Payment Option - {$th->getMessage()}");
            return respondError('01', "Error fetching payment option - {$th->getMessage()}");
        }
    }

    public function confirmBookingPaymentTerms(ConfirmBookingPaymentRequest $request, $id): object|array
    {
        $validated = (object)$request->validated();

        try {
            $booking = FlightBooking::where('user_id', auth()->user()->id)
                ->where('id', $id)
                ->where('id', $validated->booking_id)
                ->first();
            if (!$booking) {
                return respondError('01', "Booking not found", status_code: 404);
            }
            $instalment = PaymentInstallment::where('user_id', auth()->user()->id)
                ->where('id', $validated->payment_installment_id)
                ->where('active', true)
                ->whereNot('status', 'completed')
                ->first();
            if (!$instalment) {
                return respondError('01', "Invalid installment entered", status_code: 404);
            }
            if (!$update_installment = $this->confirmPaymentInstallment($instalment->id)) {
                return respondError('01', "Installment failed to update", status_code: 400);
            }
            if (!$book_flight = bookFlightOnTrips($booking, auth()->user()->id)) {
                return respondError('01', "Unable to confirm booking", status_code: 400);
            }
            $update_booking = $this->updateBookingToBooked($booking);
            return respondSuccess('Option fetched successfully', TicketResource::collection($book_flight->tickets));
        } catch (\Throwable $th) {
            Log::error("Error fetching Payment Option - {$th->getMessage()}");
            return respondError('01', "Error fetching payment option - {$th->getMessage()}");
        }
    }

    private function createPaymentInstallment(array $data, object $service): PaymentInstallment|false
    {
        try {
            $user = auth()->user();
            $installment = PaymentInstallment::where('user_id', $user->id)
                ->where('target_service', 'aviation')
                ->where('target_service_id', $service->id)
                ->where('payment_option_id', $data['option_id'])
                ->first();
            if (!$installment) {
                $installment = new PaymentInstallment();
                $installment->user_id = $user->id;
                $installment->public_id = uuid();
                $installment->target_service = 'aviation';
                $installment->target_service_id = $service->id;
                $installment->payment_option_id = $data['option_id'];
            }
            $installment->total_amount_payable = $data['total_amount_payable'];
            $installment->installments = $data['instalments'];
            $installment->number_of_installments = $data['number_of_instalments'];
            $installment->single_installment_amount = $data['single_installment_amount'];
            $installment->current_installment = 1;
            $installment->first_payment_date = now();
            $installment->next_payment_date = $data['instalments'][1]['due'];
            $installment->due_payment_date = end($data['instalments'])['due'];
            $installment->processing_fee_applied = (int)$data['processing_fee'];
            $installment->status = 'initiated';
            $installment->payment_source = 'wallet';
            $installment->session = $service->session;
            $installment->copy = $data;
            $installment->save();
            return $installment;
        } catch (\Throwable $th) {
            Log::error("Error creating payment Installment - {$th->getMessage()}", [$data]);
            return false;
        }
    }

    private function confirmPaymentInstallment(int $installment_id): PaymentInstallment|false
    {
        try {
            $user = auth()->user();
            $installment = PaymentInstallment::where('user_id', $user->id)
                ->where('id', $installment_id)
                ->first();
            if (!$installment) {
                return false;
            }
            $installment->status = 'confirmed';
            $installment->save();
            return $installment;
        } catch (\Throwable $th) {
            Log::error("Error updating payment Installment - {$th->getMessage()}");
            return false;
        }
    }

    private function buildOptionActionResponse($option_id = 1): array
    {
        if ($option_id == 1) {
            $data = [
                'tag' => 'pay_now',
                'account_number' => '1234567890',
                'account_name' => 'Ciroma Chukwuma Adekunle',
                'bank_name' => 'VFD Bank',
                'bank_code' => '000023',
            ];
        } elseif ($option_id == 2) {
            $data = [
                'tag' => 'pay_later',
                "options" => [
                    'name' => 'Pay in 3',
                    'description' => 'You’re pre-approved for 3 interest-free payments. No late fees',
                ]
            ];
        }
        return $data;
    }

    private function buildOptionPaymentResponse($amount, $option_id, $booking): array
    {
        $today = Carbon::now();
        if ($option_id == 1) {
            $fee = config('services.sectors.aviation.payment.fee');
            $data = [

                'amount' => $amount,
                'processing_fee' => $fee,
                'total_amount_payable' => $amount + $fee,
                'number_of_instalments' => 1,
                'instalments' => null,
                'option_id' => $option_id,
                'formatted' => [
                    'amount' => formatMoney(koboToNaira($amount)),
                    'processing_fee' => formatMoney(koboToNaira($fee)),
                    'total_amount_payable' => formatMoney(koboToNaira($amount + $fee)),
                ]
            ];
        } elseif ($option_id == 2) {
            $fee = config('services.sectors.aviation.payment.fee');
            $per_instalment_amount = ($amount + $fee) / 3;
            $data = [
                'amount' => $amount,
                'processing_fee' => $fee,
                'total_amount_payable' => $amount + $fee,
                'number_of_instalments' => 3,
                'single_installment_amount' => $per_instalment_amount,
                'instalments' => [
                    [
                        'amount' => $per_instalment_amount,
                        'processing_fee' => $fee,
                        'total_amount_payable' => $per_instalment_amount,
                        'due' => 'today',
                        'formatted' => [
                            'amount' => formatMoney(koboToNaira($per_instalment_amount)),
                            'processing_fee' => formatMoney(koboToNaira($fee)),
                            'total_amount_payable' => formatMoney(koboToNaira($per_instalment_amount)),
                        ]
                    ],
                    [
                        'amount' => $per_instalment_amount,
                        'processing_fee' => $fee,
                        'total_amount_payable' => $per_instalment_amount,
                        'due' => $today->addMonth(),
                        'formatted' => [
                            'amount' => formatMoney(koboToNaira($per_instalment_amount)),
                            'processing_fee' => formatMoney(koboToNaira($fee)),
                            'total_amount_payable' => formatMoney(koboToNaira($per_instalment_amount)),
                        ]
                    ],
                    [
                        'amount' => $per_instalment_amount,
                        'processing_fee' => $fee,
                        'total_amount_payable' => $per_instalment_amount,
                        'due' => $today->addMonths(2),
                        'formatted' => [
                            'amount' => formatMoney(koboToNaira($per_instalment_amount)),
                            'processing_fee' => formatMoney(koboToNaira($fee)),
                            'total_amount_payable' => formatMoney(koboToNaira($per_instalment_amount)),
                        ]
                    ],
                ],
                'option_id' => $option_id,
                'formatted' => [
                    'amount' => formatMoney(koboToNaira($amount)),
                    'processing_fee' => formatMoney(koboToNaira($fee)),
                    'single_installment_amount' => formatMoney(koboToNaira($per_instalment_amount)),
                    'total_amount_payable' => formatMoney(koboToNaira($amount + $fee)),
                ]

            ];
            if ($create_new_installment_record = $this->createPaymentInstallment($data, $booking)) {
                $data['payment_installment_id'] = $create_new_installment_record->id;
            }
        }
        return $data;
    }

    private function updateBookingToBooked(FlightBooking $booking): FlightBooking|false
    {
        try {
            $booking->status = 'booked';
            $booking->save();
            return $booking;
        } catch (\Throwable $th) {
            Log::error("Error updating Booking to  booked - {$th->getMessage()}");
            return false;
        }
    }
}
