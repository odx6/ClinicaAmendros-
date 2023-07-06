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
        Schema::create('plan__analiticos', function (Blueprint $table) {
            $table->id('pk_plan');
            $table->unsignedBigInteger('fk_plan');
            $table->String('Objetivos');
            $table->String('Hipotesis');
            $table->String('Estrucutura_corp');
            $table->String('Funcion_Corporal');
            $table->String('Actividad');
            $table->String('Participacion');
            $table->String('Diagnostico');
            $table->String('plan');
            $table->timestamps();
            $table->foreign('fk_plan')->references('SS')->on('pacientes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan__analiticos');
    }
};
