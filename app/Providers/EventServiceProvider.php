<?php

namespace App\Providers;

use App\Events\MsgEvent;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Events\UserCreated;
use App\Listeners\SendWelcomeEmail;
use App\Events\UserRegistered;
use App\Listeners\Msglestner;
use App\Listeners\SendRegistrationNotification;
use App\Listeners\AutreNsgListner;

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
        MsgEvent::class =>[
            Msglestner::class,
            AutreNsgListner::class,
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
