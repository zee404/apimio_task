<?php

namespace App\Listeners;

use App\Events\ProductCreated;
use App\Mail\SkuExistsNotification;
use App\Models\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

class SendSkuExistNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ProductCreated $event): void
    {
        $sku = $event->sku;

        if(Product::where('sku',$sku)->exists()){
            // Mail::to('zee@gmail.com')->send(new SkuExistsNotification($sku));
        }
    }
}
