<?php

namespace App\Models;

use App\Models\Client;
use App\Events\ClientCreated;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Client extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    protected static function booted()
    {
        static::created(function ($client) {
            event(new ClientCreated($client));
        });
    }

    protected $table = 'clients';

    protected $fillable = [
        'Nom_Société',
        'abreviation',
        'Telephone',
        'Cellulaire',
        'Email',
        'Compte_contribuable',
        'RCCM',
        'Direction_1_Nom_et_Prenoms',
        'Direction_1_Contact',
        'Direction_2_Nom_et_Prenoms',
        'Direction_2_Contact',
        'Direction_3_Nom_et_Prenoms',
        'Direction_3_Contact',
        'Adresse',
        'Commune',
        'Quartier',
        'Rue',
        'Zone',
        'Autre',
    ];

    // Vous pouvez personnaliser les méthodes d'authentification ici
    public function getAuthIdentifierName()
    {
        return 'Email'; // Champ utilisé pour l'authentification
    }

    public function getAuthPassword()
    {
        return $this->Cellulaire; // Champ utilisé comme mot de passe
    }

    use App\Models\Client;

public function create()
{
    $clients = Client::all();
    return view('admin.create-client', compact('clients'));
}

}
