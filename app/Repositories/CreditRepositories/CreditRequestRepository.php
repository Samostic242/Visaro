<?php

namespace App\Repositories\CreditRepositories;

use App\Interfaces\Repositories\CreditorRepositoryInterfaces\CreditorRepositoryInterface;
use App\Models\Loans\Credits\CreditRequest;
use Illuminate\Database\Eloquent\Collection;

class CreditRequestRepository implements CreditorRepositoryInterface
{
    public function getAll(): Collection
    {
        return CreditRequest::all();
    }

    public function findById(string $id): ?CreditRequest
    {
        return CreditRequest::find($id);
    }

    public function findManyById(array $array): Collection
    {
        return CreditRequest::find($array);
    }

    public function findByPublicId(string $public_id): ?CreditRequest
    {
        return CreditRequest::where('public_id', $public_id)->first();
    }

    public function findByUserId(string $user_id): ?Collection
    {
        return CreditRequest::where('user_id', $user_id)->get();
    }

    public function findByMerchantId(string $merchant_id): ?Collection
    {
        return CreditRequest::where('merchant_id', $merchant_id)->get();
    }

    public function findByInvoiceId(string $invoice_id): ?Collection
    {
        return CreditRequest::where('invoice_id', $invoice_id)->get();
    }

    public function create(array $data): CreditRequest
    {
        $credit_request = new CreditRequest();
        $credit_request->public_id = uuid() ?? null;
        $credit_request->user_id = $data['user_id'] ?? null;
        $credit_request->invoice_id = $data['invoice_id'] ?? null;
        $credit_request->creditor_id = $data['creditor_id'] ?? null;
        $credit_request->session = $data['session'] ?? null;
        $credit_request->reference = $data['reference'] ?? null;
        $credit_request->currency = $data['currency'] ?? 'NGN';
        $credit_request->amount = $data['amount'] ?? 0;
        $credit_request->fee = $data['fee'] ?? 0;
        $credit_request->charge = $data['charge'] ?? 0;
        $credit_request->status = $data['status'] ?? 'request';
        $credit_request->creditor_response = $data['creditor_response'] ?? "Checking Eligibility";
        $credit_request->mode = $data['mode'] ?? null;
        $credit_request->meta = $data['meta'] ?? null;
        $credit_request->request_object = $data['request_object'] ?? null;
        $credit_request->response_object = $data['response_object'] ?? null;
        $credit_request->date = $data['date'] ?? null;
        $credit_request->active = $data['active'] ?? true;
        $credit_request->save();

        return $credit_request;
    }

    public function update(string $id, array $data): CreditRequest|false
    {
        $credit_request = $this->findById($id);
        if (!$credit_request) {
            return false;
        }
        $credit_request->session = $data['session'] ?? $credit_request->session;
        $credit_request->reference = $data['reference'] ?? $credit_request->reference;
        $credit_request->currency = $data['currency'] ?? $credit_request->currency;
        $credit_request->amount = $data['amount'] ?? $credit_request->amount;
        $credit_request->fee = $data['fee'] ?? $credit_request->fee;
        $credit_request->charge = $data['charge'] ?? $credit_request->charge;
        $credit_request->status = $data['status'] ?? $credit_request->status;
        $credit_request->creditor_response = $data['creditor_response'] ?? $credit_request->creditor_response ?? "Checking Eligibility";
        $credit_request->meta = $data['meta'] ?? $credit_request->meta;
        $credit_request->request_object = $data['request_object'] ?? $credit_request->request_object;
        $credit_request->response_object = $data['response_object'] ?? $credit_request->response_object;
        $credit_request->date = $data['date'] ?? $credit_request->date;
        $credit_request->active = $data['active'] ?? $credit_request->active;
        $credit_request->save();

        return $credit_request;
    }

    public function destroyById(string $id): int
    {
        return CreditRequest::destroy($id);
    }

}
