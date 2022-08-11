<?php

namespace App\Listeners;

use App\Event\CustomerCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmail
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
     * @param  \App\Event\CustomerCreated  $event
     * @return void
     */
    public function handle(CustomerCreated $event)
    {
        //
    }
}
