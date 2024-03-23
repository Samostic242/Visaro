<?php

namespace App\Observers;

use App\Interfaces\Repositories\V2\Merchant\Account\MerchantSettingsInterface;
use App\Models\Merchant\Onboarding\Merchant;



class MerchantObserver
{
    function __construct(
    protected MerchantSettingsInterface $merchantSettingsRepository
    )
    {

    }

    /**
     * Handle the Merchant "created" event.
     */
    public function created(Merchant $merchant): void
    {
        $merchant->code = generateCode($merchant->business_email);
        // $merchant->qrcode = generateQrCode($merchant->code);
        $merchant->save();
        $this->merchantSettingsRepository->create($merchant->toArray());
        $this->merchantSettingsRepository->createPreference($merchant->toArray());
    }

    /**
     * Handle the Merchant "updated" event.
     */
    public function updated(Merchant $merchant): void
    {
        //
    }

    /**
     * Handle the Merchant "deleted" event.
     */
    public function deleted(Merchant $merchant): void
    {
        //
    }

    /**
     * Handle the Merchant "restored" event.
     */
    public function restored(Merchant $merchant): void
    {
        //
    }

    /**
     * Handle the Merchant "force deleted" event.
     */
    public function forceDeleted(Merchant $merchant): void
    {
        //
    }
}
