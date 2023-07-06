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
        Schema::create('f__exploracion_fisicas', function (Blueprint $table) {
            $table->id('pk_Exploracion_ff');
            $table->unsignedBigInteger('fk_Exploracion_ff');
            $table->Double('Peso');
            $table->Double('Estatura');
            $table->Double('IMC');
            $table->String('Etnia');
            $table->String('Motivo');
            $table->timestamps();
            $table->foreign('fk_Exploracion_ff')->references('SS')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('f__exploracion_fisicas');
    }
};
