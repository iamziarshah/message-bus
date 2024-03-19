<?php

namespace App\Listeners;

use App\Events\UserDataSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SaveUserDataToLog
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
     * @param  \App\Events\UserDataSaved  $event
     * @return void
     */
    public function handle(UserDataSaved $event)
    {
        $userData = $event->userData;
        Log::info('User Data Received: ' . json_encode($userData));
    }
}
