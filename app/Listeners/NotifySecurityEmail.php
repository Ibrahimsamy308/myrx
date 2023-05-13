<?php

namespace App\Listeners;

use App\Events\SecurityEmail;
use App\Mail\SecurityAlert;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;


class NotifySecurityEmail
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
     * @param  SecurityEmail  $event
     * @return void
     */
    public function handle(SecurityEmail $event)
    {
        Mail::to($event->data['email'])->send(new SecurityAlert($event->data) );
    }
}
