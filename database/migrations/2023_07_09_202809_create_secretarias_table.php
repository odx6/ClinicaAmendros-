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
        Schema::create('secretarias', function (Blueprint $table) {
            $table->id('pk_secretaria');
            $table->unsignedBigInteger('fk_user');
            $table->string('Nombre');
            $table->string('Apellidos');
            $table->string('telefono');
            $table->timestamps();
             $table->softDeletes();
            
            // para claves foráneas 
            $table->foreign('fk_user')->references('id')->on('users');


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('secretarias');
    }
};
