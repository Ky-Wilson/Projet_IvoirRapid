<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    public function run()
    {
        // Créer des clients fictifs
        Client::create([
            'Nom_Société' => 'Société A',
            'image' => 'default_image.png', // Remplace par une image par défaut si nécessaire
            'Telephone' => '0123456789',
            'Cellulaire' => '0987654321',
            'Email' => 'contact@societea.com',
            'Compte_contribuable' => '1234567-A',
            'RCCM' => 'RCCM-A',
            'Direction_1_Nom_et_Prenoms' => 'John Doe',
            'Direction_1_Contact' => '0123456789',
            'Direction_2_Nom_et_Prenoms' => 'Jane Smith',
            'Direction_2_Contact' => '0987654321',
            'Direction_3_Nom_et_Prenoms' => 'Jim Brown',
            'Direction_3_Contact' => '0765432189',
            'Adresse' => '123 Rue Principale',
            'Ville' => 'Abidjan',
            'Commune' => 'Cocody',
            'Quartier' => 'Akwaba',
            'Rue' => 'Rue de l\'Eglise',
            'Zone' => 'Zone 1',
            'Autre' => 'Information supplémentaire',
        ]);

        // Tu peux ajouter d'autres clients en répétant le bloc ci-dessus avec des données différentes
        Client::create([
            'Nom_Société' => 'Société B',
            'image' => 'default_image.png',
            'Telephone' => '0223456789',
            'Cellulaire' => '0987654322',
            'Email' => 'contact@societeb.com',
            'Compte_contribuable' => '1234567-B',
            'RCCM' => 'RCCM-B',
            'Direction_1_Nom_et_Prenoms' => 'Alice Green',
            'Direction_1_Contact' => '0223456789',
            'Direction_2_Nom_et_Prenoms' => 'Bob White',
            'Direction_2_Contact' => '0987654323',
            'Direction_3_Nom_et_Prenoms' => 'Charlie Black',
            'Direction_3_Contact' => '0765432190',
            'Adresse' => '456 Rue Secondaire',
            'Ville' => 'Yamoussoukro',
            'Commune' => 'Yamoussoukro',
            'Quartier' => 'Quartier A',
            'Rue' => 'Rue du Commerce',
            'Zone' => 'Zone 2',
            'Autre' => 'Information supplémentaire B',
        ]);
    }
}
