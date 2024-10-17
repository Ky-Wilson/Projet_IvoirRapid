<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coursier', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Zone');
            $table->string('Code')->unique();
            $table->string('Nom et prenoms')->unique();
            $table->string('Contact')->unique();
            $table->date('Date de naissance');
            $table->date('Date de debut');
            $table->date('Date de fin');
            $table->string('Numero de CNI');
            $table->date('Date de peremption CNI');
            $table->string('Numero permis');
            $table->date('Date de peremption CMU');
            $table->string('Categorie');
            $table->string('Numero CMU');
            $table->date('Date de peremption');
            $table->string('Groupe sanguin');
            $table->string('Habitat');
            $table->string('Nom cas urgence');
            $table->string('Contact Urgence');
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
        Schema::dropIfExists('coursier');
    }
}
