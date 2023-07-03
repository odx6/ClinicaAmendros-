<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voids
     */
    public function up()
    {
        Schema::create('Movimientos', function (Blueprint $table) {
            $table->id('pk_movimiento');
            $table->unsignedBigInteger('fk_movimiento');
            $table->String('titulo1');
            $table->integer('ValorT1');
            $table->String('titulo2');
            $table->integer('ValorT2');
            $table->String('NombreMovi');

            $table->timestamps();
         $table->foreign('fk_movimiento')->references('pk_prueba')->on('Prueba__Ms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos');
    }
};
