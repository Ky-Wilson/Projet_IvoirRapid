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
            $table->string('Nom')->unique();
            $table->string('Telephone')->unique();
            $table->string('Contact')->unique();
            $table->string('Email')->unique()->nullable();
            $table->string('Compte C')->unique();
            $table->string('RCCM')->unique();
            $table->string('Direction 1 nom et prenoms');
            $table->string('Direction 2 nom et prenoms')->nullable();
            $table->string('Direction 3 nom et prenoms')->nullable();
            $table->string('Direction 1 Contact');
            $table->string('Direction 2 Contact')->nullable();
            $table->string('Direction 3 Contact')->nullable();
            $table->string('Adresse');
            $table->string('Ville');
            $table->string('Commune');
            $table->string('Quartier');
            $table->string('Rue');
            $table->string('Zone');
            $table->longText('Autre')->nullable();
            $table->timestamps();
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
