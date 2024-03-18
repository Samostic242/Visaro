<?php

namespace App\Repositories\MerchantRepositories;

use App\Interfaces\Repositories\CreditorRepositoryInterfaces\CreditorRepositoryInterface;
use App\Models\Loans\Merchants\Merchant;
use Illuminate\Database\Eloquent\Collection;

class MerchantRepository implements CreditorRepositoryInterface
{
    public function getAll(): Collection
    {
        return Merchant::all();
    }

   
public function findById(string $id): ?Merchant
    {
        return Merchant::find($id);
    }

    public function findManyById(array $array): Collection
    {
        return Merchant::find($array);
    }

    public function findByPublicId(string $public_id): ?Merchant
    {
        return Merchant::where('public_id', $public_id)->first();
    }

    public function create(array $data): Merchant
    {
        $merchant = new Merchant();
        $merchant->public_id = uuid() ?? null;
        $merchant->business_name = $data['business_name'] ?? null;
        $merchant->slug = slug($data['business_name']) ?? null;
        $merchant->business_type = $data['business_type'] ?? null;
        $merchant->business_email = $data['business_email'] ?? null;
        $merchant->business_phone_code = $data['business_phone_code'] ?? '+234';
        $merchant->business_phone = $data['business_phone'] ?? null;
        $merchant->business_registration_number = $data['business_registration_number'] ?? null;
        $merchant->acronym = $data['acronym'] ?? null;
        $merchant->official_name = $data['official_name'] ?? null;
        $merchant->presence = $data['presence'] ?? null;
        $merchant->logo = $data['logo'] ?? null;
        $merchant->code = generateRandomNumber(7);
        $merchant->country_id = $data['country_id'] ?? 158;
        $merchant->category = $data['category'] ?? null;
        $merchant->meta = $data['meta'] ?? null;
        $merchant->active = $data['active'] ?? true;
        $merchant->save();

        return $merchant;
    }

    public function update(string $id, array $data): Merchant|false
    {
        $merchant = $this->findById($id);
        if (!$merchant) {
            return false;
        }
        $merchant->name = $data['business_name'] ?? $merchant->business_name;
        $merchant->acronym = $data['acronym'] ?? $merchant->acronym;
        $merchant->official_name = $data['official_name'] ?? $merchant->official_name;
        $merchant->presence = $data['presence'] ?? $merchant->presence;
        $merchant->logo = $data['logo'] ?? $merchant->logo;
        $merchant->country_id = $data['country_id'] ?? $merchant->country_id;
        $merchant->category = $data['category'] ?? $merchant->category;
        $merchant->business_type = $data['business_type'] ?? $merchant->business_type;
        $merchant->business_email = $data['business_email'] ?? $merchant->business_email;
        $merchant->business_phone_code = $data['business_phone_code'] ?? $merchant->business_phone_code;
        $merchant->business_phone = $data['business_phone'] ?? $merchant->business_phone;
        $merchant->business_registration_number = $data['business_registration_number'] ?? $merchant->business_registration_number;
        $merchant->meta = $data['meta'] ?? $merchant->meta;
        $merchant->active = $data['active'] ?? $merchant->active;

        $merchant->save();

        return $merchant;
    }

    public function destroyById(string $id): int
    {
        return Merchant::destroy($id);
    }

}
