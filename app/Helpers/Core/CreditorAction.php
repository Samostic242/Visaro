<?php

namespace App\Helpers\Core;

use App\Enums\Core\Transaction\TransactionStatusEnum;
use App\Models\BankAccount;
use App\Models\Loans\Creditor\Creditor;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CreditorAction
{
    public static function checkCreditScore(User $user, Creditor $creditor = null): int
    {
        return DB::transaction(function () use ($user, $creditor) {

            return 100;
        });
    }

    public static function checkEligibility(User $user, Creditor $creditor, int $amount): array|bool
    {
        return DB::transaction(function () use ($user, $creditor, $amount) {
            // Speak to creditor
            return [
                'status' => true,
                'message' => 'You are eligible for the requested facility',
                'amount_requested' => $amount,
                'amount_eligible' => $amount,
            ];
//        return false;
        });
    }

    public static function credit(\App\Models\VirtualAccount $virtual_account, int $amount, string $reference, string $session, string $narration, ?string $transaction_id = null): object|bool
    {
        return DB::transaction(function () use ($virtual_account, $amount, $reference, $narration) {
            $origin_virtual_account_id = config('v1_custom.transactions.accounts.accounts.debits.id');
            $credited = transferToVirtualAccount($origin_virtual_account_id, $virtual_account->id, $amount, $narration, $reference);
            if (!$credited) {
                return (object)[
                    'status' => false,
                    'state' => 'failed',
                    'credit_record' => null,
                    'virtual_account' => $virtual_account,
                ];
            } elseif (!$credited['status']) {
                return (object)[
                    'status' => false,
                    'state' => $credited['data']['status'],
                    'credit_record' => $credited['data'],
                    'virtual_account' => $virtual_account,
                ];
            } elseif ($credited['data']['status'] == TransactionStatusEnum::FAILED->value) {

                return (object)[
                    'status' => false,
                    'state' => $credited['data']['status'],
                    'credit_record' => $credited['data'],
                    'virtual_account' => $virtual_account,
                ];
            } elseif ($credited['data']['status'] == TransactionStatusEnum::SUCCESSFUL->value) {
                $virtual_account->update(['balance' => $virtual_account->balance + $amount]);

                return (object)[
                    'status' => true,
                    'state' => $credited['data']['status'],
                    'credit_record' => $credited['data'],
                    'virtual_account' => $virtual_account,
                ];
            }

            return (object)[
                'status' => $credited['status'],
                'state' => $credited['data']['status'],
                'debit_record' => $credited['data'],
                'virtual_account' => $virtual_account,
            ];
        });
    }

    public static function sendMoney(\App\Models\VirtualAccount $origin_virtual_account, \App\Models\VirtualAccount $destination_virtual_account, int $amount, string $reference, string $session, string $narration): object|false
    {
        if ($origin_virtual_account->balance <= $amount) {
            return false;
        }

        return DB::transaction(function () use ($origin_virtual_account, $destination_virtual_account, $amount, $reference, $narration) {

            $origin_virtual_account->update(['balance' => $origin_virtual_account->balance - $amount]);

            $transferred = transferToVirtualAccount($origin_virtual_account->id, $destination_virtual_account, $amount, $narration, $reference);
            if (!$transferred) {
                $origin_virtual_account->update(['balance' => $origin_virtual_account->balance + $amount]);

                return (object)[
                    'status' => false,
                    'state' => 'failed',
                    'debit_record' => null,
                    'virtual_account' => $origin_virtual_account,
                ];
            } elseif (!$transferred['status']) {
                $origin_virtual_account->update(['balance' => $origin_virtual_account->balance + $amount]);

                return (object)[
                    'status' => false,
                    'state' => $transferred['data']['status'],
                    'debit_record' => $transferred['data'],
                    'virtual_account' => $origin_virtual_account,
                ];
            } elseif ($transferred['data']['status'] == TransactionStatusEnum::FAILED->value) {
                $origin_virtual_account->update(['balance' => $origin_virtual_account->balance + $amount]);

                return (object)[
                    'status' => false,
                    'state' => $transferred['data']['status'],
                    'debit_record' => $transferred['data'],
                    'virtual_account' => $origin_virtual_account,
                ];
            } elseif ($transferred['data']['status'] == TransactionStatusEnum::SUCCESSFUL->value) {
                return (object)[
                    'status' => true,
                    'state' => $transferred['data']['status'],
                    'debit_record' => $transferred['data'],
                    'virtual_account' => $origin_virtual_account,
                ];
            }

            return (object)[
                'status' => $transferred['status'],
                'state' => $transferred['data']['status'],
                'debit_record' => $transferred['data'],
                'virtual_account' => $origin_virtual_account,
            ];
        });
    }

    public static function transferMoney(\App\Models\VirtualAccount $origin_virtual_account, BankAccount $destination_bank_account, int $amount, string $reference, string $session, string $narration, array $meta = []): object|false
    {
        if ($origin_virtual_account->balance < $amount) {
            return false;
        }

        return DB::transaction(function () use ($origin_virtual_account, $destination_bank_account, $amount, $reference, $narration, $meta) {

            $origin_virtual_account->update(['balance' => $origin_virtual_account->balance - $amount]);

            $transferred = transferToBankAccount($origin_virtual_account->id, $amount, $narration, $reference, $destination_bank_account->account_number, $destination_bank_account->bank_code, $meta);
            if (!$transferred) {
                $origin_virtual_account->update(['balance' => $origin_virtual_account->balance + $amount]);

                return (object)[
                    'status' => false,
                    'state' => 'failed',
                    'debit_record' => null,
                    'virtual_account' => $origin_virtual_account,
                ];
            } elseif (!$transferred['status']) {
                $origin_virtual_account->update(['balance' => $origin_virtual_account->balance + $amount]);

                return (object)[
                    'status' => false,
                    'state' => $transferred['data']['status'],
                    'debit_record' => $transferred['data'],
                    'virtual_account' => $origin_virtual_account,
                ];
            } elseif ($transferred['data']['status'] == TransactionStatusEnum::FAILED->value) {
                $origin_virtual_account->update(['balance' => $origin_virtual_account->balance + $amount]);

                return (object)[
                    'status' => false,
                    'state' => $transferred['data']['status'],
                    'debit_record' => $transferred['data'],
                    'virtual_account' => $origin_virtual_account,
                ];
            } elseif ($transferred['data']['status'] == TransactionStatusEnum::SUCCESSFUL->value) {
                return (object)[
                    'status' => true,
                    'state' => $transferred['data']['status'],
                    'debit_record' => $transferred['data'],
                    'virtual_account' => $origin_virtual_account,
                ];
            }

            return (object)[
                'status' => $transferred['status'],
                'state' => $transferred['data']['status'],
                'debit_record' => $transferred['data'],
                'virtual_account' => $origin_virtual_account,
            ];
        });
    }
}
