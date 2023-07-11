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
        Schema::create('consultas', function (Blueprint $table) {
            $table->id('pk_consulta');
            $table->unsignedBigInteger('fk_paciente');
            $table->unsignedBigInteger('fk_doctor');
            $table->unsignedBigInteger('fk_cita');
            $table->unsignedBigInteger('fk_secre');
            $table->integer('monto');
            $table->String('Estado');
            $table->foreign('fk_paciente')->references('SS')->on('pacientes');
            $table->foreign('fk_doctor')->references('DSS')->on('doctors');
            $table->foreign('fk_cita')->references('pk_cita')->on('citas');
            $table->foreign('fk_secre')->references('pk_secretaria')->on('secretarias');
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
        Schema::dropIfExists('consultas');
    }
};
