<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PostPublished implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $post;

    public function __construct($post) {
        $this->post = $post;
    }


    public function broadcastOn() {
        return new Channel('my-channel');
    }

    public function broadcastWith() {
        return [
            'title' => $this->post->title,
        ];
    }

    public function broadcastAs()
    {
        return 'my-event';
    }
}
