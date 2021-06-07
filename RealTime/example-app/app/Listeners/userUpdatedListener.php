<?php

namespace App\Listeners;

use App\Events\userUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\Log;

class userUpdatedListener
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
     * @param  userUpdated  $event
     * @return void
     */
    public function handle(userUpdated $event)
    {
        
        broadcast(new userUpdated("{$event->user->name}","UPDATED"));
    }
}
