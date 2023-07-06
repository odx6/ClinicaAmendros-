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
        Schema::create('cicatriz__q_s', function (Blueprint $table) {
            $table->id('pk_cicatriz');
            $table->unsignedBigInteger('fk_cicatriz');
            $table->String('sitio');
            $table->String('abierta');
            $table->String('queloide');
            $table->String('Retractil');
            $table->String('Con_Adherencia');
            $table->String('Hipertrofica');
            $table->timestamps();
            $table->foreign('fk_cicatriz')->references('SS')->on('pacientes');
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cicatriz__q_s');
    }
};
