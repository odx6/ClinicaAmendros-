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
        Schema::create('signos__vitales', function (Blueprint $table) {
            $table->id('Pk_Signos_vitales');
            $table->unsignedBigInteger('fk_Signos');
            $table->integer('TA');
            $table->Double('Temp');
            $table->String('FC');
            $table->String('FR');
            $table->timestamps();
             $table->foreign('fk_Signos')->references('SS')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('signos__vitales');
    }
};
