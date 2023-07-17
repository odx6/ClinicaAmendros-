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
        Schema::create('provedor__productos', function (Blueprint $table) {
            $table->id('pk_pp');
            $table->unsignedBigInteger('fk_producto');
            $table->unsignedBigInteger('fk_proveedor');
            $table->integer('precio');
            $table->timestamps();
              $table->foreign('fk_producto')->references('pk_producto')->on('productos');
              $table->foreign('fk_proveedor')->references('pk_proveedor')->on('provedors');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provedor__productos');
    }
};
