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
        Schema::create('antecedentes__phs', function (Blueprint $table) {
            $table->id('pk_Antecedentes_ph');
            $table->unsignedBigInteger('fk_Antecedentes_ph');
            $table->String('Nombre_Antecedente');
            $table->String('valor');
            $table->String('Especificacion');
            $table->timestamps();
            $table->foreign('fk_Antecedentes_ph')->references('SS')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antecedentes__phs');
    }
};
