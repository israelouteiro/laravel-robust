<?php

namespace Modules\User\Listeners;

use Illuminate\Auth\Events\Registered;

class RequestAccountVerification
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
     * @param \Illuminate\Auth\Events\Registered $event
     * @return void
     * @todo Notify About Register And Account Verification
     */
    public function handle(Registered $event)
    {
        //
    }
}
