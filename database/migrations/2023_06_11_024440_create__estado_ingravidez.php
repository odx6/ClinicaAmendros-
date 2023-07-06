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
        Schema::create('estado_ingravidezs', function (Blueprint $table) {
            $table->id('pk_e_ingravidez');
            $table->unsignedBigInteger('fk_ingravidez');
            $table->String('Embarazada');
            $table->String('Especificacion');
            $table->String('Numero_hijos');
            $table->timestamps();
            $table->foreign('fk_ingravidez')->references('SS')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estado_ingravidezs');
    }
};
