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
        Schema::create('formulario__valoracions', function (Blueprint $table) {
            $table->id('pk_formulario');
            $table->unsignedBigInteger('fk_formulario');
            $table->integer('P_pies_juntos');
            $table->integer('P_semitandem');
            $table->integer('P_tandem');
            $table->integer('Segundos');
           
            $table->String('Comentarios');
            $table->timestamps();
             $table->softDeletes();
            
            $table->foreign('fk_formulario')->references('SS')->on('pacientes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulario__valoracions');
    }
};
