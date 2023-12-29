<?php

namespace App\Observers;

use App\Models\Loans\Invoice\Invoice;

class InvoiceObserver
{
    /**
     * Handle the Invoice "created" event.
     */
    public function created(Invoice $invoice): void
    {
        if ($invoice->title) {
            $invoice->code = generateCode($invoice->title);
            $invoice->number = generateRandomNumber(10);
            $invoice->session = $invoice->session ?? generateRandomNumber(15);
            $invoice->reference = generateReference(19);
            $invoice->qrcode = generateQrCode($invoice->code);
        }
        $invoice->public_id = $invoice->public_id ?? uuid();
        $invoice->save();
    }

    /**
     * Handle the Invoice "updated" event.
     */
    public function updated(Invoice $invoice): void
    {
        //
    }

    /**
     * Handle the Invoice "deleted" event.
     */
    public function deleted(Invoice $invoice): void
    {
        //
    }

    /**
     * Handle the Invoice "restored" event.
     */
    public function restored(Invoice $invoice): void
    {
        //
    }

    /**
     * Handle the Invoice "force deleted" event.
     */
    public function forceDeleted(Invoice $invoice): void
    {
        //
    }
}
