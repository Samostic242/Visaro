<?php

namespace App\Http\Controllers\Api\V2\Account\Profile\Wallet;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Account\Profile\Wallet\CreditWalletRequest;
use App\Interfaces\Repositories\V2\Account\Profile\WalletRepositoryInterface;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    function __construct(
        protected WalletRepositoryInterface $walletRepository
    )
    {}
        public function creditWallet(CreditWalletRequest $request)
        {
            $validated = $request->validated();
            $creditWallet = $this->walletRepository->fundWallet($validated);
            return $creditWallet;
        }

}
