<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    public function run()
    {
        DB::table('client')->insert([
            [
                'Nom Sociéte' => 'Entreprise Alpha',
                'Telephone' => '0123456789',
                'Cellulaire' => '0987654321',
                'Email' => 'contact@entreprisealpha.com',
                'Compte Contribuable' => '123456789X',
                'RCCM' => 'CI-ABJ-2023-B-12345',
                'Direction 1 Nom et prenoms' => 'Jean Dupont',
                'Direction 2 Nom et prenoms' => 'Marie Martin',
                'Direction 3 Nom et prenoms' => 'Paul Durand',
                'Direction 1 contact' => '0123456789',
                'Direction 2 contact' => '0123456790',
                'Direction 3 contact' => '0123456791',
                'Adresse' => '123 Rue des Entrepreneurs',
                'Ville' => 'Abidjan',
                'Commune' => 'Cocody',
                'Quartier' => 'Angré',
                'Rue' => 'Rue 12',
                'Zone' => 'Zone 4',
                'Autre(Preciser votre position geographique' => 'Près de la pharmacie des Grâces',
            ],
            
            // Vous pouvez ajouter d'autres clients ici
        ]);
    }
}
