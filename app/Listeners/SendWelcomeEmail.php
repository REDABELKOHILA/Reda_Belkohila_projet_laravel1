<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Mail\WelcomeEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Mail\Mailer;

class SendWelcomeEmail implements ShouldQueue
{
    use InteractsWithQueue;

    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function handle(UserCreated $event)
    {
        $user = $event->user;

        $this->mailer->to($user->email)->send(new WelcomeEmail($user));
    }
}
