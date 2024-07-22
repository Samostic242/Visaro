<?php

namespace App\Interfaces\Repositories\V2\Account\Profile;

interface WalletRepositoryInterface
{
    public function create(array $data);

    public function fundWallet(array $data);

}

