<?php

namespace App\Listeners;

use App\Events\ResetEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyRxRegistration;
class NotifyResetEmail
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
     * @param  ResetEmail  $event
     * @return void
     */
    public function handle(ResetEmail $event)
    {
        Mail::to($event->data['email'])->send(new MyRxRegistration($event->data) );
    }
}
