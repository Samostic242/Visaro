<?php

namespace App\Observers;

use App\Models\Loans\Merchants\Merchant;


class MerchantObserver
{
    /**
     * Handle the Merchant "created" event.
     */
    public function created(Merchant $merchant): void
    {
        if ($merchant->name) {
            $merchant->code = generateCode($merchant->name);
            $merchant->qrcode = generateQrCode($merchant->code);
        }
        $merchant->public_id = $invoice->public_id ?? uuid();
        $merchant->save();
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
