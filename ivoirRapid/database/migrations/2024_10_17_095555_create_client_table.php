<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nom Sociéte')->unique();
            $table->string('Telephone')->unique();
            $table->string('Cellulaire')->unique();
            $table->string('Email')->nullable();
            $table->string('Compte Contribuable')->unique()->default('0000000-X');
            $table->string('RCCM')->nullable();
            $table->string('Direction 1 Nom et prenoms')->unique();
            $table->string('Direction 2 Nom et prenoms')->unique()->nullable();
            $table->string('Direction 3 Nom et prenoms')->unique()->nullable();
            $table->string('Direction 1 contact')->unique();
            $table->string('Direction 2 contact')->unique()->nullable();
            $table->string('Direction 3 contact')->unique();
            $table->string('Adresse');
            $table->string('Ville');
            $table->string('Commune');
            $table->string('Quartier');
            $table->string('Rue')->nullable();
            $table->string('Zone');
            $table->longText('Autre(Preciser votre position geographique')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
