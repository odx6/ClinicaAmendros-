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
        Schema::create('Prueba__ms', function (Blueprint $table) {
            $table->id('pk_prueba');
            $table->unsignedBigInteger('fk_prueba');
            $table->String('Observaciones_prue');
            $table->String('Tipo');
            $table->timestamps();
            $table->foreign('fk_prueba')->references('SS')->on('pacientes');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Prueba__ms');
    }
};
