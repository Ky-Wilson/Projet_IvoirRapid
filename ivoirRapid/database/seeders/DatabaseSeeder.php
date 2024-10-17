<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Ajoutez cette ligne pour appeler le ClientSeeder
        $this->call(ClientSeeder::class);
    }
}

