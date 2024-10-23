<?php

namespace App\Events;

use App\Models\Client;
use Illuminate\Queue\SerializesModels;

class ClientCreated
{
    use SerializesModels;

    public $client;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}
