<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tache_id')->unsigned()->nullable();
            $table->foreign('tache_id')->references('id')->on('taches')->onDelete('cascade');
            $table->integer('equipement_id')->unsigned()->nullable();
            $table->foreign('equipement_id')->references('id')->on('equipements')->onDelete('cascade');
            $table->integer('technicien_id')->unsigned()->nullable();
            $table->foreign('technicien_id')->references('id')->on('profile')->onDelete('cascade');
            $table->integer('date_debut')->nullable();
            $table->integer('date_fin')->nullable();
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
        Schema::dropIfExists('maintenances');
    }
}
