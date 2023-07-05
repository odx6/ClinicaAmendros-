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
        Schema::create('d_i_m_e__rehabilitacions', function (Blueprint $table) {
            $table->id('pk_dmi');
            $table->unsignedBigInteger('fk_dmi');
            $table->String('Reflejos');
            $table->String('Sensibilidad');
            $table->String('LenguajeOrientacion');
            $table->String('Otros');
            $table->timestamps();
            $table->foreign('fk_dmi')->references('SS')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('d_i_m_e__rehabilitacions');
    }
};
