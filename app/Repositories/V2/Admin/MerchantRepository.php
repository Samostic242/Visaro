<?php

namespace App\Repositories\V2\Admin;

use App\Interfaces\Repositories\V2\Admin\MerchantRepositoryInterface;
use App\Models\Merchant\Onboarding\Merchant;


class MerchantRepository implements MerchantRepositoryInterface
{
    public function getMerchants()
    {
        return Merchant::paginate(15);
    }

    public function getMerchantsSearchResults($needle)
    {
        return Merchant::where("name", 'ilike', '$' . $needle . '%')->get();
    }

    public function createMerchant(array $data)
    {
    }

    public function getMerchant(string $id)
    {
        return Merchant::findOrFail($id);
    }

    public function getMerchantHistory(string $id)
    {
        return Merchant::findOrFail($id)->orders();
    }

    public function activateMerchant(string $id)
    {
        $merchant = Merchant::findOrFail($id);

        $merchant->active = true;
        $merchant->save();
        return true;
    }

    public function deactivateMerchant(string $id)
    {
        $merchant = Merchant::findOrFail($id);

        $merchant->active = false;
        $merchant->save();
        return true;
    }
}
