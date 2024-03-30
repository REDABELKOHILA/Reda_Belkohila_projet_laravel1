<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Notifications\Notification;

class SendRegistrationNotification implements ShouldQueue
{
    use InteractsWithQueue;

    public function __construct()
    {
        //
    }

    public function handle(UserRegistered $event)
    {
        $user = $event->user;

        // Choose the notification method (e.g., email, database notification)
        // Here, we'll assume email notification is desired.

        // 1. Option 1: Using a custom WelcomeNotification class (recommended)

        // Create a WelcomeNotification class (e.g., app/Notifications/WelcomeNotification.php)
        // and implement the Notification interface. Define the notification delivery channels
        // (e.g., email) and content there.

        // $user->notify(new WelcomeNotification());

        // 2. Option 2: Using a pre-defined notification class (if applicable)

        // If you have a pre-defined notification class relevant for registration, use it:
        // $user->notify(new YourNotificationClass());

        // 3. Option 3: Manual email sending (less recommended)

        // If you prefer manual email sending, uncomment and modify the following:
        // You'll need to configure your Laravel mail settings in .env

        // $mailer = app(Mailer::class);
        // $mailer->to($user->email)->send(new WelcomeEmail($user));
    }
}
