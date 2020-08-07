<?php

namespace App\Listeners;

use App\Mail\NewPostsMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NewsLinkSentListener 
{

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Mail::to($event->Emails)->send(new NewPostsMail());

    }
}
