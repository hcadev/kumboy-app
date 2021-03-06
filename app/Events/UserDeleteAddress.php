<?php

namespace App\Events;

use App\Models\UserAddressBook;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserDeleteAddress
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $address;

    /**
     * Create a new event instance.
     *
     * @param UserAddressBook $address
     * @return void
     */
    public function __construct(UserAddressBook $address)
    {
        $this->address = $address;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
