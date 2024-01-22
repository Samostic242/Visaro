<?php

namespace App\Repositories\CreditorRepositories;

use App\Interfaces\Repositories\CreditorRepositoryInterfaces\CreditorRepositoryInterface;
use App\Models\Loans\Creditor\CreditorCondition;
use Illuminate\Database\Eloquent\Collection;

class CreditorConditionsRepository implements CreditorRepositoryInterface
{
    public function __construct(
        protected CreditorRepository $creditorRepository,
    )
    {
    }

    public function getAll(): Collection
    {
        return CreditorCondition::all();
    }

    public function findById(string $id): ?CreditorCondition
    {
        return CreditorCondition::find($id);
    }

    public function findManyById(array $array): Collection
    {
        return CreditorCondition::find($array);
    }

    public function findByPublicId(string $public_id): ?CreditorCondition
    {
        return CreditorCondition::where('public_id', $public_id)->first();
    }

    public function findByCreditorId(string $creditor_id): CreditorCondition|false
    {
        if ($creditor = $this->creditorRepository->findById($creditor_id)) {
            return CreditorCondition::whereBelongsTo($creditor)->first();
        }
        return false;
    }

    public function create(array $data): CreditorCondition
    {
        $creditor_conditions = new CreditorCondition();
        $creditor_conditions->public_id = uuid() ?? null;
        $creditor_conditions->creditor_id = $data['creditor_id'] ?? null;
        $creditor_conditions->tier = $data['tier'] ?? 3;
        $creditor_conditions->base_url = $data['base_url'] ?? null;
        $creditor_conditions->callback_url = $data['callback_url'] ?? null;
        $creditor_conditions->connection_type = $data['connection_type'] ?? 'full';
        $creditor_conditions->payment_mode = $data['payment_mode'] ?? 'indirect';
        $creditor_conditions->recovery_mode = $data['recovery_mode'] ?? 'direct';
        $creditor_conditions->recovery_channel = $data['recovery_channel'] ?? null;
        $creditor_conditions->maximum_credit_installments = $data['maximum_credit_installments'] ?? 3;
        $creditor_conditions->minimum_credit_installments = $data['minimum_credit_installments'] ?? 1;
        $creditor_conditions->operating_account_number = $data['operating_account_number'] ?? null;
        $creditor_conditions->operating_account_id = $data['operating_account_id'] ?? null;
        $creditor_conditions->conflict_resolution_email = $data['conflict_resolution_email'] ?? null;
        $creditor_conditions->terms_and_conditions = $data['terms_and_conditions'] ?? null;
        $creditor_conditions->meta = $data['meta'] ?? null;
        $creditor_conditions->active = $data['active'] ?? true;
        $creditor_conditions->save();

        return $creditor_conditions;
    }

    public function update(string $id, array $data): CreditorCondition|false
    {
        $creditor_conditions = $this->findById($id);
        if (!$creditor_conditions) {
            return false;
        }

        $creditor_conditions->tier = $data['tier'] ?? $creditor_conditions->tier;
        $creditor_conditions->base_url = $data['base_url'] ?? $creditor_conditions->base_url;
        $creditor_conditions->callback_url = $data['callback_url'] ?? $creditor_conditions->callback_url;
        $creditor_conditions->connection_type = $data['connection_type'] ?? $creditor_conditions->connection_type;
        $creditor_conditions->payment_mode = $data['payment_mode'] ?? $creditor_conditions->payment_mode;
        $creditor_conditions->recovery_mode = $data['recovery_mode'] ?? $creditor_conditions->recovery_mode;
        $creditor_conditions->recovery_channel = $data['recovery_channel'] ?? $creditor_conditions->recovery_channel;
        $creditor_conditions->maximum_credit_installments = $data['maximum_credit_installments'] ?? $creditor_conditions->maximum_credit_installments;
        $creditor_conditions->minimum_credit_installments = $data['minimum_credit_installments'] ?? $creditor_conditions->minimum_credit_installments;
        $creditor_conditions->operating_account_number = $data['operating_account_number'] ?? $creditor_conditions->operating_account_number;
        $creditor_conditions->operating_account_id = $data['operating_account_id'] ?? $creditor_conditions->operating_account_id;
        $creditor_conditions->conflict_resolution_email = $data['conflict_resolution_email'] ?? $creditor_conditions->conflict_resolution_email;
        $creditor_conditions->terms_and_conditions = $data['terms_and_conditions'] ?? $creditor_conditions->terms_and_conditions;
        $creditor_conditions->meta = $data['meta'] ?? $creditor_conditions->meta;
        $creditor_conditions->active = $data['active'] ?? $creditor_conditions->active;
        $creditor_conditions->save();

        return $creditor_conditions;
    }

    public function destroyById(string $id): int
    {
        return CreditorCondition::destroy($id);
    }

}
