<?php

namespace App\Observers;

use App\Models\StoreFront;

class StoreFrontObserver
{
    /**
     * Handle the StoreFront "created" event.
     */
    public function created(StoreFront $storeFront): void
    {
        //
    }

    /**
     * Handle the StoreFront "updated" event.
     */
    public function updated(StoreFront $storeFront): void
    {
        //
    }

    /**
     * Handle the StoreFront "deleted" event.
     */
    public function deleted(StoreFront $storeFront): void
    {
        //
    }

    /**
     * Handle the StoreFront "restored" event.
     */
    public function restored(StoreFront $storeFront): void
    {
        //
    }

    /**
     * Handle the StoreFront "force deleted" event.
     */
    public function forceDeleted(StoreFront $storeFront): void
    {
        //
    }
}
