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
                'Nom' => 'Entreprise ggamas',
                'Telephone' => '0123444788',
                'Contact' => '0987650019',
                'Email' => 'contact@bentrekksealpha.com',
                'Compte C' => '2234709-g',
                'RCCM' => 'CI-ABJ-2000-B-10005',
                'Direction 1 nom et prenoms' => 'Jea Duip',
                'Direction 2 nom et prenoms' => 'Maeette Coll',
                'Direction 3 nom et prenoms' => 'Pau pull',
                'Direction 1 contact' => '0123456000',
                'Direction 2 contact' => '0123456555',
                'Direction 3 contact' => '0123456333',
                'Adresse' => '123 Rue des Entrepreneur',
                'Ville' => 'Abidjan',
                'Commune' => 'Cocody',
                'Quartier' => 'Angré',
                'Rue' => 'Rue 12',
                'Zone' => 'Zone 4',
                'Autre' => 'Près de la pharmacie des Grâces',
            ],

            
            // Vous pouvez ajouter d'autres clients ici
        ]);
    }
}