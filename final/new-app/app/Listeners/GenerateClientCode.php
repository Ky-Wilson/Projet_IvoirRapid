<?php
namespace App\Listeners;

use App\Events\ClientCreated;
use Illuminate\Support\Str;

class GenerateClientCode
{
    public function handle(ClientCreated $event)
    {
        $client = $event->client;

        // Générer le code unique
        $client->code_unique = $client->Nom_Société . '-' . now()->year . '-' . now()->month . '-' . rand(100000, 999999);

        // Sauvegarder le client avec le code unique
        $client->save();
    }
}
