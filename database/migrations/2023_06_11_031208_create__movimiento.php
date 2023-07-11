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
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id('pk_movimiento');
            $table->unsignedBigInteger('fk_movimiento');
            $table->String('NombreMovi');
            $table->integer('valor');
            $table->timestamps();
            $table->foreign('fk_movimiento')->references('pk_prueba')->on('prueba__ms');
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
