<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use JeroenNoten\Laraveladminlte\Events\DarkModeWasToggled;
use JeroenNoten\Laraveladminlte\Events\ReadingDarkModePreference;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        // Register listener for ReadingDarkModePreference event. We use this
        // event to setup dark mode initial status for adminlte package.
        ReadingDarkModePreference::class => [
            ['App\Listeners\adminlteEventSubscriber','handleReadingDarkModeEvt']
        ],
        // Register listener for DarkModeWasToggled adminlte event.
        DarkModeWasToggled::class => [
            ['App\Listeners\adminlteEventSubscriber','handleDarkModeWasToggledEvt']
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
