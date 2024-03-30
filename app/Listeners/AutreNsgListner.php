<?php

namespace App\Listeners;

use App\Events\MsgEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AutreNsgListner
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
     * @param  \App\Events\MsgEvent  $event
     * @return void
     */
    public function handle(MsgEvent $event)
    {
        dd('come');
        // return false;
    }
}
