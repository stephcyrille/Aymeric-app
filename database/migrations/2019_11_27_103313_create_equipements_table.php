<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('flag_technique_ou_geographique')->nullable();
            $table->string('code_geographique_parent')->nullable();
            $table->string('code_parent')->nullable();
            $table->string('code_equipement')->nullable();
            $table->string('description_equipement')->nullable();
            $table->string('code_famille')->nullable();
            $table->string('description_famille')->nullable();
            $table->string('code_zone')->nullable();
            $table->string('description_zone')->nullable();
            $table->string('code_fonction')->nullable();
            $table->string('description_fonction')->nullable();
            $table->string('centre_de_charge')->nullable();
            $table->string('description_centre_de_charge')->nullable();
            $table->string('entite')->nullable();
            $table->string('description_entite')->nullable();
            $table->datetime('date_de_mise_en_service')->nullable();
            $table->string('code_constructeur')->nullable();
            $table->string('reference_fabricant')->nullable();
            $table->string('numero_serie_reparable')->nullable();
            $table->integer('activite')->nullable();
            $table->string('code_oaci')->nullable();
            $table->string('mainteneur')->nullable();
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
        Schema::dropIfExists('equipements');
    }
}
