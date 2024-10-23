<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCustomFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('abreviation');
            $table->string('Telephone')->unique()->length(10);
            $table->string('Cellulaire')->unique()->length(10);
            $table->string('Compte_contribuable')->unique()->length(9);
            $table->string('RCCM')->nullable();
            $table->string('Direction_1_Nom_et_Prenoms')->unique();
            $table->string('Direction_1_Contact')->unique();
            $table->string('Direction_2_Nom_et_Prenoms')->nullable();
            $table->string('Direction_2_Contact')->nullable();
            $table->string('Direction_3_Nom_et_Prenoms')->nullable();
            $table->string('Direction_3_Contact')->nullable();
            $table->string('Adresse')->nullable();
            $table->string('Commune');
            $table->string('Quartier');
            $table->string('Rue');
            $table->string('Zone');
            $table->longText('Autre')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'abreviation', 'Telephone', 'Cellulaire', 'Compte_contribuable', 
                'RCCM', 'Direction_1_Nom_et_Prenoms', 'Direction_1_Contact', 'Direction_2_Nom_et_Prenoms', 
                'Direction_2_Contact', 'Direction_3_Nom_et_Prenoms', 'Direction_3_Contact', 
                'Adresse','Commune', 'Quartier', 'Rue', 'Zone', 'Autre'
            ]);
        });
    }
}
