<?php

namespace App\Jobs\V2\Wallet;

use App\Interfaces\Repositories\V2\Account\Profile\WalletRepositoryInterface;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateWalletJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
    protected User  $user
    )
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(WalletRepositoryInterface $walletRepository): void
    {
        //
        $walletRepository->create($this->user->toArray());
    }
}
