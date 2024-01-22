<?php

namespace App\Repositories\MerchantRepositories;

use App\Interfaces\Repositories\CreditorRepositoryInterfaces\CreditorRepositoryInterface;
use App\Models\Loans\Merchants\MerchantSetting;
use Illuminate\Database\Eloquent\Collection;

class MerchantSettingsRepository implements CreditorRepositoryInterface
{
    public function getAll(): Collection
    {
        return MerchantSetting::all();
    }

    public function findById(string $id): ?MerchantSetting
    {
        return MerchantSetting::find($id);
    }

    public function findManyById(array $array): Collection
    {
        return MerchantSetting::find($array);
    }

    public function findByPublicId(string $public_id): ?MerchantSetting
    {
        return MerchantSetting::where('public_id', $public_id)->first();
    }

    public function findByMerchantId(string $merchant_id): ?MerchantSetting
    {
        return MerchantSetting::where('merchant_id', $merchant_id)->first();
    }

    public function create(array $data): MerchantSetting
    {
        $merchant_setting = new MerchantSetting();
        $merchant_setting->public_id = uuid() ?? null;
        $merchant_setting->merchant_id = $data['merchant_id'] ?? null;
        $merchant_setting->payout_interval = $data['payout_interval'] ?? 'daily';
        $merchant_setting->payout_frequency = $data['payout_frequency'] ?? 1;
        $merchant_setting->meta = $data['meta'] ?? null;
        $merchant_setting->active = $data['active'] ?? true;
        $merchant_setting->save();

        return $merchant_setting;
    }

    public function update(string $id, array $data): MerchantSetting|false
    {
        $merchant_setting = $this->findById($id);
        if (!$merchant_setting) {
            return false;
        }
        $merchant_setting->payout_interval = $data['payout_interval'] ?? $merchant_setting->payout_interval;
        $merchant_setting->payout_frequency = $data['payout_frequency'] ?? $merchant_setting->payout_frequency;
        $merchant_setting->active = $data['active'] ?? $merchant_setting->active;
        $merchant_setting->meta = $data['meta'] ?? $merchant_setting->meta;
        $merchant_setting->save();

        return $merchant_setting;
    }

    public function destroyById(string $id): int
    {
        return MerchantSetting::destroy($id);
    }

}
