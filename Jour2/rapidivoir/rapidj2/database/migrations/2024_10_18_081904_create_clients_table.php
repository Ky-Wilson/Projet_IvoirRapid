<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nom_Société')->unique();
            $table->string('image');
            $table->string('Telephone')->unique()->length(10);
            $table->string('Cellulaire')->unique()->length(10);
            $table->string('Email')->nullable();
            $table->string('Compte_contribuable')->unique()->length(9);
            $table->string('RCCM')->nullable();
            $table->string('Direction_1_Nom_et_Prenoms')->unique();
            $table->string('Direction_1_Contact')->unique();
            $table->string('Direction_2_Nom_et_Prenoms')->nullable();
            $table->string('Direction_2_Contact')->nullable();
            $table->string('Direction_3_Nom_et_Prenoms')->nullable();
            $table->string('Direction_3_Contact')->nullable();
            $table->string('Adresse')->nullable();
            $table->string('Ville');
            $table->string('Commune');
            $table->string('Quartier');
            $table->string('Rue');
            $table->string('Zone');
            $table->longText('Autre')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
