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
        Schema::create('evaluacions', function (Blueprint $table) {
            $table->id('pk_evaluacion');
            $table->unsignedBigInteger('fk_evaluacion');
            $table->String('Nombre_miembro');
            $table->String('Tipo');
            $table->integer('val_iquierda');
            $table->integer('val_derecha');
            $table->timestamps();
             $table->softDeletes();
            
            $table->foreign('fk_evaluacion')->references('SS')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluacions');
    }
};
