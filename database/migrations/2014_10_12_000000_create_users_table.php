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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        //Create area
        Schema::create('area', function (Blueprint $table) {
            $table->id('IDAREA')->unique();
            $table->string('NOMBE_AREA');
            $table->timestamps();
        });
  // create doctor 
        Schema::create('doctor', function (Blueprint $table) {
            $table->id('DSS')->unique();
            $table->unsignedBigInteger('AreaDoctor');
            $table->string('ESPECIALIDAD');
            
            $table->timestamps();
            // para claves foraneas 
            $table->foreign('AreaDoctor')->references('IDAREA')->on('area');
            
        });
        //create paciente 
        Schema::create('paciente', function (Blueprint $table) {
            $table->id('SS')->unique();
            $table->unsignedBigInteger('PacienteDoctor');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->integer('Edad');
            $table->char('Sexo');
            $table->string('Estado_civil');
            $table->string('Origen');
            $table->string('Ocupacion');
            $table->string('Direccion');
            $table->string('Telefono');
            $table->string('Religion');
            $table->string('Escolaridad');
            $table->date('FechaIngreso');
            $table->date('FechaSalida');
            // para claves foraneas 
            $table->foreign('PacienteDoctor')->references('DSS')->on('doctor');
            
        });
        //create history_clinic
        Schema::create('historial_clinico', function (Blueprint $table) {
            $table->id('idHIstorial_clinico')->unique();
            $table->unsignedBigInteger('PacienteSS');
            $table->Boolean('DM');
            $table->Boolean('HAS');
            $table->Boolean('CA');

            $table->string('MFALLECIDA');
            $table->string('PFALLECIDA');
            $table->string('CAUSAS');
            $table->string('ALIMENTOS');
            $table->string('SUSTANCIAS_Q');
            $table->string('CIRUJIAS_P');
            $table->string('TRANSFUCIONES');
            $table->string('FRACTURAS');
            $table->boolean('ALCHOLISMO');
            $table->boolean('TABASQUISMO');
            $table->boolean('DROGAS');
            
            // para claves foraneas 
            $table->foreign('PacienteSS')->references('SS')->on('paciente');
            
        });
        
        //Antecedentes_Ginecobstetrico
        
        Schema::create('a_ginecobstetrico', function (Blueprint $table) {
            $table->id('id_a_g')->unique();
            $table->unsignedBigInteger('fk_ag');
            $table->integer('Menarca');
            $table->integer('Ivsa');
            $table->integer('Gesta');
            $table->integer('Aborto');
            $table->integer('Paras');
            // para claves foraneas 
            $table->foreign('fk_ag')->references('idHIstorial_clinico')->on('historial_clinico');
            
        });
         //Antecedentes_Ginecobstetrico
         Schema::create('a_patologicos', function (Blueprint $table) {
            $table->id('id_a_p')->unique();
            $table->unsignedBigInteger('fk_ap');
            $table->Boolean('Dm');
            $table->Boolean('DmTE');
            $table->Boolean('Has');
            $table->Boolean('HasTe');
            $table->Boolean('Ir');
            $table->String('Otra');
            
            // para claves foraneas 
            $table->foreign('fk_ap')->references('idHIstorial_clinico')->on('historial_clinico');
            
        });
         //Antecedentes_Ginecobstetrico
         Schema::create('nota_p_quirurgica', function (Blueprint $table) {
            $table->id('idNotaP')->unique();
            $table->unsignedBigInteger('fk_npq');
            $table->Date('ProgramacionC');
            $table->Date('Ejecucion');
            $table->String('Hallazgos');
            $table->String('Complicaciones');
            $table->String('Nombre_Cirujano');
            $table->String('Nombre_Ayudante');
            $table->String('Nombre_Instrumentista');
            $table->String('Nombre_Aniestesiologo');
            $table->String('Circulante');
            // para claves foraneas 
            $table->foreign('fk_npq')->references('idHIstorial_clinico')->on('historial_clinico');
            
        });
        // Notas
         Schema::create('nota', function (Blueprint $table) {
            $table->id('pk_nota')->unique();
            $table->unsignedBigInteger('fk_n');
            $table->String('Nota');
            $table->String('Tipo');
            
            // para claves foraneas 
            $table->foreign('fk_n')->references('idHIstorial_clinico')->on('historial_clinico');
            
        });
          //Estudios
         Schema::create('estudio', function (Blueprint $table) {
            $table->id('pk_estudio')->unique();
            $table->unsignedBigInteger('fk_e');
            $table->String('Nombre_e');
            $table->String('Tipo_e');
            $table->String('Descripcion_e');
            
            // para claves foraneas 
            $table->foreign('fk_e')->references('idHIstorial_clinico')->on('historial_clinico');
            
        });
         //Estudios
         Schema::create('exploracion_f', function (Blueprint $table) {
            $table->id('pk_Exploracion')->unique();
            $table->unsignedBigInteger('fk_e');
            $table->unsignedBigInteger('fk_d');
            $table->unsignedBigInteger('fk_p');
            $table->String('Nombre_ef');
            $table->String('Cabeza_ef');
            $table->String('Cuello_ef');
            $table->String('Abdomen_ef');
            $table->String('Miembro_pelvico_ef');
            $table->String('Miembro_toraxico_ef');
            $table->Timestamp('x');
            
            // para claves foraneas 
            $table->foreign('fk_e')->references('idHIstorial_clinico')->on('historial_clinico');
            $table->foreign('fk_d')->references('DSS')->on('doctor');
            $table->foreign('fk_p')->references('SS')->on('paciente');
        });
          //Cita
          Schema::create('cita', function (Blueprint $table) {
            $table->id('pk_cita')->unique();
          
            $table->unsignedBigInteger('fk_dc');
            $table->unsignedBigInteger('fk_pc');
           
            $table->Timestamp('inicio_c');
            
            $table->Time('Duracion');
            $table->String('Estado');
            
            // para claves foraneas 
            $table->foreign('fk_dc')->references('DSS')->on('doctor');
            $table->foreign('fk_pc')->references('SS')->on('paciente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('area');
        Schema::dropIfExists('doctor');
        Schema::dropIfExists('paciente');
        Schema::dropIfExists('historial_clinico');
        Schema::dropIfExists('a_ginecobstetrico');
        Schema::dropIfExists('a_patologicos');
        Schema::dropIfExists('nota_p_quirurgica');
        Schema::dropIfExists('nota');
        Schema::dropIfExists('estudio');
        Schema::dropIfExists('exploracion_f');
        Schema::dropIfExists('cita');

    }
};
