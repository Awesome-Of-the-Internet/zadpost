<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;


class NewNewsHasCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $Emails;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($Emails)
    {
        $this->Emails = $Emails;
    }

}
