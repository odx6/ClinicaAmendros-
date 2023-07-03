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
        Schema::create('Tratamientos_ps', function (Blueprint $table) {
            $table->id('pk_tratamientos_p');
            $table->unsignedBigInteger('fk_tratamientos_p');
            $table->String('des_tratamiento');
            $table->timestamps();
            $table->foreign('fk_tratamientos_p')->references('SS')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tratamientos_ps');
    }
};
