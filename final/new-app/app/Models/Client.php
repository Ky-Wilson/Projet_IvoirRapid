<?php

namespace App\Models;

use App\Events\ClientCreated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{

    use HasFactory;
    
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
}
