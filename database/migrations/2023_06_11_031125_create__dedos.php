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
        Schema::create('Dedos', function (Blueprint $table) {
            $table->id('pk_dedos');
            $table->unsignedBigInteger('fk_dedos');
            $table->String('Nombre');
            $table->integer('MCF');
            $table->integer('IFP');
            $table->integer('IFD');
            $table->integer('ABD');
            $table->timestamps();
            $table->foreign('fk_dedos')->references('pk_prueba')->on('Prueba__ms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dedos');
    }
};
