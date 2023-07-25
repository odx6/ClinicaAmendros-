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
        Schema::create('escala_dolors', function (Blueprint $table) {
            $table->id('pk_escala');
            $table->unsignedBigInteger('fk_escala');
            $table->integer('Escala');
            $table->timestamps();
             $table->softDeletes();
            
             $table->foreign('fk_escala')->references('SS')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escala_dolors');
    }
};
