<?php

namespace App\Listeners;

use App\Events\ProfileUpdated;
use App\Events\UserRegistered;
use App\Mail\UserRegisteredMailable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProfileUpdatedListener
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


    public function handle(ProfileUpdated $event)
    {
        $event->user->profile_percentage = $event->user->profile_percentage + 10;
        $event->user->update();
    }

}
