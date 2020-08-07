<?php

namespace App\Listeners;

use App\Events\ProductPurchasedhased;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class D0otherthing
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProductPurchasedhased  $event
     * @return void
     */
    public function handle(ProductPurchasedhased $event)
    {
        var_dump('do other thing');
    }
}
