<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Evaluacion_posturas', function (Blueprint $table) {
            $table->id('pk_postura');
            $table->unsignedBigInteger('fk_postura');
            $table->String('Inclinacion_Corporal');
            $table->integer('L');
            $table->integer('M');
            $table->integer('S');
            $table->String('Tipo_vista');
            $table->timestamps();
            $table->foreign('fk_postura')->references('pk_vista')->on('vista_posturas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Evaluacion_posturas');
    }
};
