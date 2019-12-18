<?php

namespace App\Listeners;

use App\Events\UserWasCreated;
use App\Mail\LoginCredentials;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendLoginCredentials
{

    public function handle(UserWasCreated $event)
    {
        // dd($event->user->toArray(), $event->password);
        Mail::to($event->user)->queue(
        // new LoginCredentials($event->user->toArray(), $event->password);
        new LoginCredentials($event->user, $event->password)
        );
    }
}
