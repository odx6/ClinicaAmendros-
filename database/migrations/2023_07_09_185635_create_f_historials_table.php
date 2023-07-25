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
        Schema::create('f_historials', function (Blueprint $table) {
            $table->id('pk_fhistorial');
            $table->unsignedBigInteger('fk_fhistorial');
            $table->foreign('fk_fhistorial')->references('SS')->on('pacientes');
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
        Schema::dropIfExists('f_historials');
    }
};
