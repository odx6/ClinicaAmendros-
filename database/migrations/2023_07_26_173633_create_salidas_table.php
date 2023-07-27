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
        Schema::create('salidas', function (Blueprint $table) {
            $table->id('pk_salidas');
            $table->unsignedBigInteger('fk_area');
            $table->unsignedBigInteger('fk_doctor');
            $table->unsignedBigInteger('fk_producto');
            $table->integer('cantidad');
            $table->foreign('fk_producto')->references('pk_producto')->on('productos');
            $table->foreign('fk_area')->references('IDAREA')->on('areas');
            $table->foreign('fk_doctor')->references('DSS')->on('doctors');



            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salidas');
    }
};
