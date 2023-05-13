<?php

namespace App\Listeners;

use App\Events\DocumentUploaded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Patient;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyRxRegistration;

class NotifyDocumentUploaded
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
     * @param  DocumentUploaded  $event
     * @return void
     */
    public function handle(DocumentUploaded $event)
    {
        // Access the post using $event->post...
        // $patients = Patient::all();

        // foreach($patients as $patient) {
           Mail::to($event->data['email'])->send(new MyRxRegistration($event->data) );
        // }
        // echo $event->docs." listener also";
    }
}
