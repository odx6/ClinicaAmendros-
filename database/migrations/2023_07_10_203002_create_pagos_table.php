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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('pk_pagos');
            $table->unsignedBigInteger('fk_consulta');
            $table->unsignedBigInteger('fk_secre');
            $table->integer('monto');
            $table->String('TipoPago');
            $table->foreign('fk_consulta')->references('pk_consulta')->on('consultas');
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
        Schema::dropIfExists('pagos');
    }
};
