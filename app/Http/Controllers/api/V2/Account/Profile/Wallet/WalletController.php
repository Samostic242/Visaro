<?php

namespace App\Http\Controllers\api\V2\Account\Profile\Wallet;

use App\Http\Controllers\Controller;
use App\Interfaces\Repositories\V2\Account\Profile\WalletRepositoryInterface;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    function __construct(
    protected WalletRepositoryInterface $walletRepository
    )
    {

    }
}
