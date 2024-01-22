<?php

namespace App\Repositories\CreditRepositories;

use App\Interfaces\Repositories\CreditorRepositoryInterfaces\CreditorRepositoryInterface;
use App\Models\Loans\Credits\Credit;
use Illuminate\Database\Eloquent\Collection;

class CreditRepository implements CreditorRepositoryInterface
{
    public function getAll(): Collection
    {
        return Credit::all();
    }

    public function findById(string $id): ?Credit
    {
        return Credit::find($id);
    }

    public function findManyById(array $array): Collection
    {
        return Credit::find($array);
    }

    public function findByPublicId(string $public_id): ?Credit
    {
        return Credit::where('public_id', $public_id)->first();
    }

    public function findByUserId(string $user_id): ?Collection
    {
        return Credit::where('user_id', $user_id)->get();
    }

    public function findByMerchantId(string $merchant_id): ?Collection
    {
        return Credit::where('merchant_id', $merchant_id)->get();
    }

    public function findByInvoiceId(string $invoice_id): ?Collection
    {
        return Credit::where('invoice_id', $invoice_id)->get();
    }

    public function create(array $data): Credit
    {
        $credit = new Credit();
        $credit->public_id = uuid() ?? null;
        $credit->user_id = $data['user_id'] ?? null;
        $credit->creditor_id = $data['creditor_id'] ?? null;
        $credit->session = $data['session'] ?? null;
        $credit->reference = $data['reference'] ?? null;
        $credit->currency = $data['currency'] ?? 'NGN';
        $credit->balance = $data['balance'] ?? 0;
        $credit->amount = $data['amount'] ?? 0;
        $credit->fee = $data['fee'] ?? 0;
        $credit->charge = $data['charge'] ?? 0;
        $credit->status = $data['status'] ?? 'declined';
        $credit->entry = $data['entry'] ?? 'credit';
        $credit->mode = $data['mode'] ?? 'test';
        $credit->creditor_response = $data['creditor_response'] ?? null;
        $credit->meta = $data['meta'] ?? null;
        $credit->request_object = $data['request_object'] ?? null;
        $credit->response_object = $data['response_object'] ?? null;
        $credit->date = $data['date'] ?? null;
        $credit->active = $data['active'] ?? true;
        $credit->save();

        return $credit;
    }

    public function update(string $id, array $data): Credit|false
    {
        $credit = $this->findById($id);
        if (!$credit) {
            return false;
        }

        $credit->session = $data['session'] ?? $credit->session;
        $credit->reference = $data['reference'] ?? $credit->reference;
        $credit->currency = $data['currency'] ?? $credit->currency;
        $credit->balance = $data['balance'] ?? $credit->balance;
        $credit->amount = $data['amount'] ?? $credit->amount;
        $credit->fee = $data['fee'] ?? $credit->fee;
        $credit->charge = $data['charge'] ?? $credit->charge;
        $credit->status = $data['status'] ?? $credit->status;
        $credit->entry = $data['entry'] ?? $credit->entry;
        $credit->mode = $data['mode'] ?? $credit->mode;
        $credit->creditor_response = $data['creditor_response'] ?? $credit->creditor_response;
        $credit->meta = $data['meta'] ?? $credit->meta;
        $credit->request_object = $data['request_object'] ?? $credit->request_object;
        $credit->response_object = $data['response_object'] ?? $credit->response_object;
        $credit->date = $data['date'] ?? $credit->date;
        $credit->active = $data['active'] ?? $credit->active;
        $credit->save();

        return $credit;
    }

    public function destroyById(string $id): int
    {
        return Credit::destroy($id);
    }

}
