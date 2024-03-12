<?php

namespace App\Http\Controllers\api\v1\Loans\Credits;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Loans\Credit\ConfirmCreditRequest;
use App\Http\Requests\V1\Loans\Credit\CreateNewCreditRequest;
use App\Repositories\CreditorRepositories\CreditorRepository;
use App\Repositories\CreditRepositories\CreditRepository;
use App\Repositories\CreditRepositories\CreditRequestRepository;
use App\Repositories\InvoiceRepositories\InvoiceRepository;
use App\Repositories\MerchantRepositories\MerchantRepository;
use Carbon\CarbonImmutable;
use Illuminate\Http\Request;

/**
 * @group Credits
 * @description APIs for managing credits
 */
class CreditController extends Controller
{
    public function __construct(
        protected MerchantRepository      $merchantRepository,
        protected CreditRepository        $creditRepository,
        protected CreditRequestRepository $creditRequestRepository,
        protected InvoiceRepository       $invoiceRepository,
        protected CreditorRepository      $creditorRepository,
    )
    {

    }

    /**
     * Fetch all Credits.
     */
    public function fetchAllCredits(Request $request)
    {
        $credits = $this->creditRepository->getAll();
        return respondSuccess("Credits fetched successfully", $credits);
    }

    /**
     * Fetch user active Credits.
     */
    public function fetchUserActiveCredits(Request $request)
    {
        $credits = $this->creditRepository->findByUserId(auth()->user()->id);
        return respondSuccess("Credits fetched successfully", $credits);
    }

    /**
     * Get a credit record.
     */
    public function fetchCredit(int $credit_id)
    {
        if (!$credit = $this->creditRepository->findById($credit_id)) {
            return respondError(404, '01', 'Credit does not exist');
        }
        return respondSuccess("Credit fetched successfully", $credit);
    }

    /**
     * Initiate Credit request.
     */
    public function initiateCreditRequest(CreateNewCreditRequest $request)
    {
        $validated_data = $request->validated();

        if (!$invoice = $this->invoiceRepository->findById($validated_data['invoice_id'])) {
            return respondError(404, '01', 'Invoice does not exist');
        }
        if (!$creditor = $this->creditorRepository->findById($validated_data['creditor_id'])) {
            return respondError(404, '01', 'Creditor does not exist');
        }

        if ($validated_data['number_of_installments'] > $creditor->conditions->maximum_credit_installments) {
            return respondError(400, '01', "Sorry, number of installment must not be greater than {$creditor->conditions->maximum_credit_installments}");
        }
        $total = $invoice->amount + config('services.loan.charge');
        $data = [
            "user_id" => auth()->user()->id,
            "creditor_id" => $creditor->id,
            "invoice_id" => $invoice->id,
            "session" => $invoice->session,
            "reference" => $invoice->reference,
            "currency" => $invoice->currency,
            "amount" => $total,
            "fee" => config('services.loan.charge'),
            "charge" => config('services.loan.charge'),
            "amount_payable" => $total,
            "number_of_installments" => $validated_data['number_of_installments'],
            "terms_and_condition" => $creditor->conditions->terms_and_conditions,
        ];
        if (!$created = $this->creditRequestRepository->create($data)) {
            return respondError(400, '01', 'Error initiating credit request');
        }


        $request_data = [
            "request_id" => $created->id,
            "creditor_id" => $creditor->id,
            "creditor_name" => $creditor->official_name,
            "invoice_number" => $invoice->number,
            "invoice_id" => $invoice->id,
            "amount" => koboToNaira($invoice->amount),
            "charge" => koboToNaira(config('services.loan.charge')),
            "total_payable" => koboToNaira($total),
            "number_of_installments" => $validated_data['number_of_installments'],
            "terms_and_condition" => $creditor->conditions->terms_and_conditions,
            "installments" => $this->constructInstallments($total, $validated_data['number_of_installments']),
            "formatted" => [
                "amount" => formatMoney(koboToNaira($invoice->amount)),
                "charge" => formatMoney(koboToNaira(config('services.loan.charge'))),
                "total_payable" => formatMoney(koboToNaira($total)),
            ],
        ];

        return respondSuccess("Request initiated successfully, kindly confirm request details to proceed", $request_data);
    }

    /**
     * Complete Credit request.
     */
    public function completeCreditRequest(ConfirmCreditRequest $request)
    {
        $validated_data = $request->validated();

        if (!$credit_request = $this->creditRequestRepository->findById($validated_data['credit_request_id'])) {
            return respondError(404, '01', 'Credit request does not exist');
        }
        if (!$updated_credit_request = $this->creditRequestRepository->update(
            $credit_request->id, ['status' => 'processing'])
        ) {
            return respondError(400, '01', 'Error confirming credit request, please try again');
        }
        return respondSuccess("Request is processing, you should get a feedback shortly ");
    }


    /**
     * Get Credit request status.
     */
    public function getCreditRequestStatus(Request $request, int $credit_request_id)
    {
        if (!$credit_request = $this->creditRequestRepository->findById($credit_request_id)) {
            return respondError(404, '01', 'Credit request does not exist');
        }

        return respondSuccess("Credit request status fetched successfully", [
            'status' => $credit_request->status,
            'creditor_status' => $credit_request->creditor_response,
        ]);
    }

    private function constructInstallments(int $amount, int $number_of_installment = 1)
    {

        $each_amount = $amount / $number_of_installment;
        $installments = [];
        $today = CarbonImmutable::now();
        for ($each = 1; $each <= $number_of_installment; $each++) {
            $installments["installment {$each}"] = [
                'amount' => koboToNaira($each_amount),
                'processing_fee' => koboToNaira(10000),
                'total_amount_payable' => koboToNaira($each_amount + 10000),
                'due' => $today->addMonths($each - 1),
                'formatted' => [
                    'amount' => formatMoney(koboToNaira($each_amount)),
                    'processing_fee' => formatMoney(koboToNaira(10000)),
                    'total_amount_payable' => formatMoney(koboToNaira($each_amount + 10000)),
                    'due' => $today->addMonths($each)->toFormattedDateString()
                ]
            ];
        }
        return $installments;
    }
}
