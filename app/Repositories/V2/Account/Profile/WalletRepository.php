<?php

namespace App\Repositories\V2\Account\Profile;
use App\Interfaces\Repositories\V2\Account\Profile\WalletRepositoryInterface;
use App\Models\Wallet;

class WalletRepository implements WalletRepositoryInterface
{

    public function findById(string $id): ?Wallet
    {
        return Wallet::find($id);
    }
    public function create(array $data)
    {
        $wallet = new Wallet();
        $wallet->public_id = uuid() ?? null;
        $wallet->owner_id = $data['id'] ?? null;
        $wallet->owner = $data["firstname"] ?? null;
        $wallet->save();
        return $wallet;

    }
}
