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
            $table->string('nom')->nullable();
            // $table->integer('category_id')->unsigned()->nullable();
            // $table->foreign('category_id')->references('id')->on('category_equpements')->onDelete('cascade');
            $table->string('fabriquant')->nullable();
            $table->string('emplacement')->nullable();
            $table->string('numero_model')->nullable();
            $table->string('numero_serie')->nullable();
            $table->string('frequence_maitenance')->nullable();
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
