<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\CreateTask' => [
            'App\Listeners\CreateTaskListener',
        ],
    ];

    /**
     * Register any task created for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
