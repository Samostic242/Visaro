<?php

namespace App\Repositories\InvoiceRepositories;

use App\Interfaces\Repositories\InvoiceRepositoryInterfaces\InvoiceRepositoryInterface;
use App\Models\Loans\Invoice\Invoice;
use Illuminate\Database\Eloquent\Collection;

class InvoiceRepository implements InvoiceRepositoryInterface
{
    public function getAll(): Collection
    {
        return Invoice::all();
    }

    public function findById(int $id): ?Invoice
    {
        return Invoice::find($id);
    }

    public function findManyById(array $array): Collection
    {
        return Invoice::find($array);
    }

    public function findByPublicId(string $public_id): ?Invoice
    {
        return Invoice::where('public_id', $public_id)->first();
    }

    public function findByNumber(string $number): ?Invoice
    {
        return Invoice::where('number', $number)->first();
    }

    public function findByCode(string $code): ?Invoice
    {
        return Invoice::where('code', $code)->first();
    }

    public function findByUserId(int $user_id): ?Collection
    {
        return Invoice::where('user_id', $user_id)->get();
    }

    public function findByMerchantId(int $merchant_id): ?Collection
    {
        return Invoice::where('merchant_id', $merchant_id)->get();
    }

    public function create(array $data): Invoice
    {
        $invoice = new Invoice();
        $invoice->public_id = uuid() ?? null;
        $invoice->user_id = $data['user_id'] ?? null;
        $invoice->merchant_id = $data['merchant_id'] ?? null;
        $invoice->title = $data['title'] ?? null;
        $invoice->slug = slug($data['title']) ?? null;
        $invoice->number = $data['number'] ?? null;
        $invoice->session = generateRandomNumber(15);
        $invoice->reference = generateReference(15);
        $invoice->qrcode = $data['qrcode'] ?? null;
        $invoice->link = $data['link'] ?? null;
        $invoice->currency = $data['currency'] ?? 'NGN';
        $invoice->amount = nairaToKobo($data['amount']) ?? 0;
        $invoice->vat = nairaToKobo($data['vat']) ?? 0;
        $invoice->tax = nairaToKobo($data['tax']) ?? 0;
        $invoice->total_amount = $data['total_amount'] ?? 0;
        $invoice->terms_and_conditions = $data['terms_and_conditions'] ?? null;
        $invoice->items = $data['items'] ?? [];
        $invoice->mode = $data['mode'] ?? 'test';
        $invoice->meta = $data['meta'] ?? null;
        $invoice->date = $data['date'] ?? null;
        $invoice->status = $data['status'] ?? null;
        $invoice->active = $data['active'] ?? true;
        $invoice->save();

        return $invoice;
    }

    public function update(int $id, array $data): Invoice|false
    {
        $invoice = $this->findById($id);
        if (!$invoice) {
            return false;
        }
        $invoice->user_id = $data['user_id'] ?? $invoice->user_id;
        $invoice->merchant_id = $data['merchant_id'] ?? $invoice->merchant_id;
        $invoice->title = $data['title'] ?? $invoice->title;
        $invoice->number = $data['number'] ?? $invoice->number;
        $invoice->session = $data['session'] ?? $invoice->session;
        $invoice->reference = $data['reference'] ?? $invoice->reference;
        $invoice->qrcode = $data['qrcode'] ?? $invoice->qrcode;
        $invoice->link = $data['link'] ?? $invoice->link;
        $invoice->currency = $data['currency'] ?? $invoice->currency;
        $invoice->amount = $data['amount'] ?? $invoice->amount;
        $invoice->vat = $data['vat'] ?? $invoice->vat;
        $invoice->tax = $data['tax'] ?? $invoice->tax;
        $invoice->total_amount = $data['total_amount'] ?? $invoice->total_amount;
        $invoice->terms_and_conditions = $data['terms_and_conditions'] ?? $invoice->terms_and_conditions;
        $invoice->items = $data['items'] ?? $invoice->items;
        $invoice->mode = $data['mode'] ?? $invoice->mode;
        $invoice->meta = $data['meta'] ?? $invoice->meta;
        $invoice->date = $data['date'] ?? $invoice->date;
        $invoice->status = $data['status'] ?? $invoice->status;
        $invoice->active = $data['active'] ?? $invoice->active;
        $invoice->save();
        return $invoice;
    }

    public function destroyById(int $id): int
    {
        return Invoice::destroy($id);
    }

}
