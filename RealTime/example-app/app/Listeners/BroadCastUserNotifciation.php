<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\userSessionChange;
use Illuminate\Auth\Events\Login;

class BroadCastUserNotifciation
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
     * @param  object  $event
     * @return void
     */
    public function handle(Login $event)
    {
      broadcast(new UserSessionChange("{$event->user->name} is online",'success'));
    }
}
