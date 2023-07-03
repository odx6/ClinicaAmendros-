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
        Schema::create('vista_posturas', function (Blueprint $table) {
             $table->id('pk_vista');
            $table->unsignedBigInteger('fk_vista');
            $table->String('Nombre');
            $table->String('Tipo');
          
            $table->timestamps();
            $table->foreign('fk_vista')->references('SS')->on('pacientes');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vista_posturas');
    }
};
