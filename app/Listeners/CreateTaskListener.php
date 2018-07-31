<?php

namespace App\Listeners;

use App\Events\CreateTask;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateTaskListener implements ShouldQueue
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
     * @param  CreateTask  $event
     * @return void
     */
    public function handle(CreateTask $event)
    {
        return "created";
    }
}
