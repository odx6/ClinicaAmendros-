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
        Schema::create('habitos_saluds', function (Blueprint $table) {
            $table->id('pk_Habitos');
            $table->unsignedBigInteger('fk_Habitos');
            $table->String('Nombre');
            $table->String('Valor');
            $table->String('Especificacion');
            $table->timestamps();
             $table->softDeletes();
            
             $table->foreign('fk_Habitos')->references('SS')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitos_saluds');
    }
};
