<?php

namespace App\Repositories\CreditorRepositories;

use App\Interfaces\Repositories\CreditorRepositoryInterfaces\CreditorRepositoryInterface;
use App\Models\Loans\Creditor\Creditor;
use Illuminate\Database\Eloquent\Collection;

class CreditorRepository implements CreditorRepositoryInterface
{
    public function getAll(): Collection
    {
        return Creditor::all();
    }

    public function findById(string $id): ?Creditor
    {
        return Creditor::find($id);
    }

    public function findManyById(array $array): Collection
    {
        return Creditor::find($array);
    }

    public function findByPublicId(string $public_id): ?Creditor
    {
        return Creditor::where('public_id', $public_id)->first();
    }

    public function create(array $data): Creditor
    {
        $creditor = new Creditor();
        $creditor->public_id = uuid() ?? null;
        $creditor->name = $data['name'] ?? null;
        $creditor->acronym = $data['acronym'] ?? null;
        $creditor->official_name = $data['official_name'] ?? null;
        $creditor->website = $data['website'] ?? null;
        $creditor->logo = $data['logo'] ?? null;
        $creditor->code = generateRandomNumber(7);
        $creditor->country_id = $data['country_id'] ?? null;
        $creditor->category = $data['category'] ?? null;
        $creditor->email = $data['email'] ?? null;
        $creditor->phone_code = $data['phone_code'] ?? '+234';
        $creditor->phone = $data['phone'] ?? null;
        $creditor->conflict_resolution_email = $data['conflict_resolution_email'] ?? null;
        $creditor->conflict_resolution_phone_code = $data['conflict_resolution_phone_code'] ?? '+234';
        $creditor->conflict_resolution_phone = $data['conflict_resolution_phone'] ?? null;
        $creditor->entity = $data['entity'] ?? 'institution';
        $creditor->entity_category = $data['entity_category'] ?? 'private';
        $creditor->customization = $data['customization'] ?? null;
        $creditor->meta = $data['meta'] ?? null;
        $creditor->active = $data['active'] ?? true;
        $creditor->save();

        return $creditor;
    }

    public function update(string $id, array $data): Creditor|false
    {
        $creditor = $this->findById($id);
        if (!$creditor) {
            return false;
        }
        $creditor->name = $data['name'] ?? $creditor->name;
        $creditor->acronym = $data['acronym'] ?? $creditor->acronym;
        $creditor->official_name = $data['official_name'] ?? $creditor->official_name;
        $creditor->website = $data['website'] ?? $creditor->website;
        $creditor->logo = $data['logo'] ?? $creditor->logo;
        $creditor->country_id = $data['country_id'] ?? $creditor->country_id;
        $creditor->category = $data['category'] ?? $creditor->category;
        $creditor->email = $data['email'] ?? $creditor->email;
        $creditor->phone_code = $data['phone_code'] ?? $creditor->phone_code;
        $creditor->phone = $data['phone'] ?? $creditor->phone;
        $creditor->conflict_resolution_email = $data['conflict_resolution_email'] ?? $creditor->conflict_resolution_email;
        $creditor->conflict_resolution_phone_code = $data['conflict_resolution_phone_code'] ?? $creditor->conflict_resolution_phone_code;
        $creditor->conflict_resolution_phone = $data['conflict_resolution_phone'] ?? $creditor->conflict_resolution_phone;
        $creditor->entity = $data['entity'] ?? $creditor->entity;
        $creditor->entity_category = $data['entity_category'] ?? $creditor->entity_category;
        $creditor->customization = $data['customization'] ?? $creditor->customization;
        $creditor->meta = $data['meta'] ?? $creditor->meta;
        $creditor->active = $data['active'] ?? $creditor->active;
        $creditor->save();

        return $creditor;
    }

    public function destroyById(string $id): int
    {
        return Creditor::destroy($id);
    }

}
