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
        Schema::create('factura__productos', function (Blueprint $table) {
            $table->id('pk_f_p');
            $table->unsignedBigInteger('fk_producto');
            $table->unsignedBigInteger('fk_factura');
            $table->integer('precioUnitario');
            $table->integer('Cantidad');
              $table->foreign('fk_producto')->references('pk_producto')->on('productos');
              $table->foreign('fk_factura')->references('pk_factura')->on('facturas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura__productos');
    }
};
