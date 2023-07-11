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
        Schema::create('analisis_marchas', function (Blueprint $table) {
            $table->id('pk_Analis_marcha');
            $table->unsignedBigInteger('fk_Analis_marcha');
            $table->integer('valor1');
            $table->integer('valor2');
            $table->integer('valor3');
            $table->integer('valor4');
            $table->integer('valor5');
            $table->integer('valor6');
            $table->integer('valor7');
            $table->integer('valor8');
            $table->integer('valor9');
            $table->integer('valor10');
            $table->integer('total');
          
            $table->timestamps();
            $table->foreign('fk_Analis_marcha')->references('SS')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('analisis_marchas');
    }
};
