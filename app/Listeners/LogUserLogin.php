<?php

namespace App\Listeners;

use App\Events\UserLogin;
use App\Models\UserActivity;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogUserLogin
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
     * @param  UserLogin  $event
     * @return void
     */
    public function handle(UserLogin $event)
    {
        UserActivity::query()
            ->create([
                'user_uuid' => $event->user->uuid,
                'date_recorded' => now(),
                'action_taken' => 'Logged in.',
            ]);
    }
}
