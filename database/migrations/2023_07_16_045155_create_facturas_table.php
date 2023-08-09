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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id('pk_factura');
            $table->unsignedBigInteger('fk_proveedor');

            $table->String('Nombre');
            $table->String('url');
            $table->timestamps();
             $table->softDeletes();
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
        Schema::dropIfExists('facturas');
    }
};
