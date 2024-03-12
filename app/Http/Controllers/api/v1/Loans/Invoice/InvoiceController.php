<?php

namespace App\Http\Controllers\api\v1\Loans\Invoice;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Loans\Invoice\CreateNewInvoiceRequest;
use App\Http\Requests\V1\Loans\Invoice\UpdateInvoiceRequest;
use App\Models\User;
use App\Repositories\CreditRepositories\CreditRepository;
use App\Repositories\CreditRepositories\CreditRequestRepository;
use App\Repositories\InvoiceRepositories\InvoiceRepository;
use App\Repositories\MerchantRepositories\MerchantRepository;
use Illuminate\Http\Request;

/**
 * @group Invoices
 * @description APIs for managing invoices
 */
class InvoiceController extends Controller
{
    public function __construct(
        protected MerchantRepository      $merchantRepository,
        protected CreditRepository        $creditRepository,
        protected CreditRequestRepository $creditRequestRepository,
        protected InvoiceRepository       $invoiceRepository,
    )
    {

    }

    /**
     * Fetch all invoices.
     */
    public function fetchAllInvoices(Request $request)
    {
        $invoices = $this->invoiceRepository->getAll();
        return respondSuccess("Invoices fetched successfully", $invoices);
    }

    /**
     * Fetch user active invoices.
     */
    public function fetchUserActiveInvoices(Request $request)
    {
        $invoices = $this->invoiceRepository->findByUserId(auth()->user()->id);
        return respondSuccess("Invoices fetched successfully", $invoices);
    }

    /**
     * Get an invoice record.
     */
    public function fetchInvoice(int $invoice_id)
    {
        if (!$invoice = $this->invoiceRepository->findById($invoice_id)) {
            return respondError(404, '01', 'Invoice does not exist');
        }
        return respondSuccess("Invoice fetched successfully", $invoice);
    }

    /**
     * Fetch invoice by code.
     */
    public function fetchInvoiceByCode(string $code)
    {
        if (!$invoice = $this->invoiceRepository->findByCode($code)) {
            return respondError(404, '01', 'Invoice does not exist');
        }
        return respondSuccess("Invoice fetched successfully", $invoice);
    }

    /**
     * Fetch invoice by number.
     */
    public function fetchInvoiceByNumber(string $number)
    {
        if (!$invoice = $this->invoiceRepository->findByNumber($number)) {
            return respondError(404, '01', 'Invoice does not exist');
        }
        return respondSuccess("Invoice fetched successfully", $invoice);
    }

    /**
     * Create new invoice.
     */
    public function createNewInvoice(CreateNewInvoiceRequest $request)
    {
        $validated_data = $request->validated();
        if (!$merchant = $this->merchantRepository->findById($validated_data['merchant_id'])) {
            return respondError(404, '01', 'Merchant does not exist');
        }
        $validated_data['merchant_id'] = $merchant->id;
        if (isset($validated_data['code'])) {
            if (!$owner = User::where('code', $validated_data['code'])->first()) {
                return respondError(400, '01', 'User code is invalid');
            }
            $validated_data['user_id'] = $owner->id;
        }


        if (!$created = $this->invoiceRepository->create($validated_data)) {
            return respondError(400, '01', 'Error creating invoice');
        }
        return respondSuccess("Invoice created successfully, kindly share code or link to customer", $created);
    }

    /**
     * Update an invoice.
     */
    public function updateInvoice(UpdateInvoiceRequest $request, int $invoice_id)
    {
        $validated_data = $request->validated();
        if (!$merchant = $this->merchantRepository->findById($validated_data['merchant_id'])) {
            return respondError(404, '01', 'Merchant does not exist');
        }
        if (!$invoice = $this->invoiceRepository->findById($invoice_id)) {
            return respondError(404, '01', 'Invoice does not exist');
        }
        if (!$updated = $this->merchantRepository->update($invoice->id, $validated_data)) {
            return respondError(400, '01', 'Error updating Invoice');
        }
        return respondSuccess("Invoice updated successfully", $updated);
    }

    /**
     * Delete invoice.
     */
    public function deleteInvoice(int $invoice_id)
    {
        if (!$invoice = $this->invoiceRepository->findById($invoice_id)) {
            return respondError(404, '01', 'Invoice does not exist');
        }
        if (!$deleted = $this->invoiceRepository->destroyById($invoice_id)) {
            return respondError(400, '01', 'Error deleting invoice record');
        }
        return respondSuccess("Invoice deleted successfully");
    }

}
