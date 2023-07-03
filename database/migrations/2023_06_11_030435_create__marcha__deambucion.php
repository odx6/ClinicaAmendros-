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
        Schema::create('Marcha__Deambulacions', function (Blueprint $table) {
            $table->id('pk_marcha');
            $table->unsignedBigInteger('fk_marcha');
            $table->String('libre');
            $table->String('Claudicante');
            $table->String('Con_ayuda');
            $table->String('Espastica');
            $table->String('Alaxicas');
            $table->String('Otros');
            $table->String('Observaciones_marcha');
            $table->timestamps();
            $table->foreign('fk_marcha')->references('SS')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Marcha__Deambulacions');
    }
};
