<?php

namespace App\Repositories\CreditRepositories;

use App\Interfaces\Repositories\CreditorRepositoryInterfaces\CreditorRepositoryInterface;
use App\Models\Loans\Credits\CreditInstallment;
use Illuminate\Database\Eloquent\Collection;

class CreditInstallmentsRepository implements CreditorRepositoryInterface
{
    public function getAll(): Collection
    {
        return CreditInstallment::all();
    }

    public function findById(string $id): ?CreditInstallment
    {
        return CreditInstallment::find($id);
    }

    public function findManyById(array $array): Collection
    {
        return CreditInstallment::find($array);
    }

    public function findByPublicId(string $public_id): ?CreditInstallment
    {
        return CreditInstallment::where('public_id', $public_id)->first();
    }

    public function findByUserId(string $user_id): ?Collection
    {
        return CreditInstallment::where('user_id', $user_id)->get();
    }

    public function findByCreditId(string $credit_id): ?Collection
    {
        return CreditInstallment::where('credit_id', $credit_id)->get();
    }

    public function create(array $data): CreditInstallment
    {
        $credit_installment = new CreditInstallment();
        $credit_installment->public_id = uuid() ?? null;
        $credit_installment->user_id = $data['user_id'] ?? null;
        $credit_installment->credit_id = $data['credit_id'] ?? null;
        $credit_installment->amount = $data['amount'] ?? 0;
        $credit_installment->installment_number = $data['installment_number'] ?? 1;
        $credit_installment->payable_at = $data['payable_at'] ?? null;
        $credit_installment->paid_at = $data['paid_at'] ?? null;
        $credit_installment->session = $data['session'] ?? 0;
        $credit_installment->reference = $data['reference'] ?? 0;
        $credit_installment->fee = $data['fee'] ?? 0;
        $credit_installment->charge = $data['charge'] ?? 0;
        $credit_installment->status = $data['status'] ?? 'unpaid';
        $credit_installment->mode = $data['mode'] ?? 'test';
        $credit_installment->meta = $data['meta'] ?? null;
        $credit_installment->creditor_response = $data['creditor_response'] ?? null;
        $credit_installment->request_object = $data['request_object'] ?? null;
        $credit_installment->response_object = $data['response_object'] ?? null;
        $credit_installment->date = $data['date'] ?? null;
        $credit_installment->active = $data['active'] ?? true;
        $credit_installment->save();

        return $credit_installment;
    }

    public function update(string $id, array $data): CreditInstallment|false
    {
        $credit_installment = $this->findById($id);
        if (!$credit_installment) {
            return false;
        }
        $credit_installment->session = $data['session'] ?? $credit_installment->session;
        $credit_installment->reference = $data['reference'] ?? $credit_installment->reference;
        $credit_installment->amount = $data['amount'] ?? $credit_installment->amount;
        $credit_installment->fee = $data['fee'] ?? $credit_installment->fee;
        $credit_installment->charge = $data['charge'] ?? $credit_installment->charge;
        $credit_installment->status = $data['status'] ?? $credit_installment->status;
        $credit_installment->installment_number = $data['creditor_response'] ?? $credit_installment->installment_number;
        $credit_installment->creditor_response = $data['creditor_response'] ?? $credit_installment->creditor_response;
        $credit_installment->meta = $data['meta'] ?? $credit_installment->meta;
        $credit_installment->request_object = $data['request_object'] ?? $credit_installment->request_object;
        $credit_installment->response_object = $data['response_object'] ?? $credit_installment->response_object;
        $credit_installment->date = $data['date'] ?? $credit_installment->date;
        $credit_installment->active = $data['active'] ?? $credit_installment->active;
        $credit_installment->payable_at = $data['payable_at'] ?? $credit_installment->payable_at;
        $credit_installment->paid_at = $data['payable_at'] ?? $credit_installment->paid_at;
        $credit_installment->meta = $data['meta'] ?? $credit_installment->meta;

        $credit_installment->save();


        return $credit_installment;
    }

    public function destroyById(string $id): int
    {
        return CreditInstallment::destroy($id);
    }

}
