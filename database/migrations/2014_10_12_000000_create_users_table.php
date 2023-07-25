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
        
      $this->down();
        
        
        Schema::create('users', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->nullable();
            $table->rememberToken();
            $table->timestamps();
             $table->softDeletes();
        });
        //Create area
        Schema::create('areas', function (Blueprint $table) {
            $table->id('IDAREA')->unique();
            $table->string('NOMBE_AREA');
            $table->timestamps();
             $table->softDeletes();
        });
  // create doctor 
        Schema::create('doctors', function (Blueprint $table) {
            $table->id('DSS')->unique();
            $table->unsignedBigInteger('AreaDoctor');
            $table->unsignedBigInteger('fk_user');
            $table->string('Nombre');
            $table->string('Apellidos');
            $table->string('Especialidades');
            $table->string('Cedula');
            $table->string('ESPECIALIDAD');
           
            
            $table->timestamps();
             $table->softDeletes();
            // para claves foraneas 
            $table->foreign('AreaDoctor')->references('IDAREA')->on('areas');
            $table->foreign('fk_user')->references('id')->on('users');
            
        });
        //create paciente 
        Schema::create('pacientes', function (Blueprint $table) {
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
            $table->date('FechaSalida')->nullable();
            $table->timestamps();
             $table->softDeletes();
            // para claves foraneas 
            $table->foreign('PacienteDoctor')->references('DSS')->on('doctors');
            
        });
        //create history_clinic
        Schema::create('historial__clinicos', function (Blueprint $table) {
            $table->id('idHIstorial_clinico')->unique();
            $table->unsignedBigInteger('PacienteSS');
            $table->Integer('DM');
            $table->Integer('HAS');
            $table->Integer('CA');
            //PARA EL PADRE
            $table->Integer('PDM');
            $table->Integer('PHAS');
            $table->Integer('PCA');
            $table->string('MFALLECIDA');
            $table->string('PFALLECIDA');
            $table->string('CAUSAS');
            $table->string('ALERGIAS');

            $table->string('ALIMENTOS');
            $table->string('SUSTANCIAS_Q');
            $table->string('CIRUJIAS_P');
            $table->string('TRANSFUCIONES');
            $table->string('FRACTURAS');
            $table->Integer('ALCHOLISMO');
            $table->Integer('TABASQUISMO');
            $table->Integer('DROGAS');
            $table->timestamps();
             $table->softDeletes();
            
            // para claves foraneas 
            $table->foreign('PacienteSS')->references('SS')->on('pacientes');
            
        });
        
        //Antecedentes_Ginecobstetrico
        
        Schema::create('a_ginecobstetricos', function (Blueprint $table) {
            $table->id('id_a_g')->unique();
            $table->unsignedBigInteger('fk_ag');
            $table->integer('Menarca');
            $table->integer('Ivsa');
            $table->integer('Gesta');
            $table->integer('Cesareas');
            $table->integer('Aborto');
            $table->integer('Paras');
            $table->timestamps();
             $table->softDeletes();

            // para claves foraneas 
            $table->foreign('fk_ag')->references('SS')->on('pacientes');
            
        });
         //Antecedentes_Ginecobstetrico
         Schema::create('a_patologicos', function (Blueprint $table) {
            $table->id('id_a_p')->unique();
            $table->unsignedBigInteger('fk_ap');
            $table->Integer('Dm');
            $table->String('DmTE');
            $table->Integer('Has');
            $table->String('HasTe');
            $table->Integer('Ir');
            $table->String('IrTe');
            $table->String('Otra');
            $table->timestamps();
             $table->softDeletes();
            
            // para claves foraneas 
            $table->foreign('fk_ap')->references('SS')->on('pacientes');
            
        });
         //Notas post Quirurgica 
         Schema::create('nota_p_quirurgicas', function (Blueprint $table) {
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
            $table->timestamps();
             $table->softDeletes();

            // para claves foraneas 
            $table->foreign('fk_npq')->references('SS')->on('pacientes');
            
        });
        // Notas
         Schema::create('notas', function (Blueprint $table) {
            $table->id('pk_nota')->unique();
            $table->unsignedBigInteger('fk_n');
            $table->String('Nota');
            $table->String('Tipo');
            $table->timestamps();
             $table->softDeletes();
            
            // para claves foraneas 
            $table->foreign('fk_n')->references('SS')->on('pacientes');
            
        });
          //Estudios
         Schema::create('estudios', function (Blueprint $table) {
            $table->id('pk_estudio')->unique();
            $table->unsignedBigInteger('fk_e');
            $table->String('HEMOGLOBINA');
            $table->String('HEMATOCRITO');
            $table->String('PLAQUETAS');
            $table->String('GLUCOSA');
            $table->String('UREA');
            $table->String('CREATININA');
            $table->String('RX');
            $table->String('USG');
            $table->timestamps();
             $table->softDeletes();
            
            // para claves foraneas 
            $table->foreign('fk_e')->references('SS')->on('pacientes');
            
        });
         //Estudios
         Schema::create('exploracion_fs', function (Blueprint $table) {
            $table->id('pk_Exploracion')->unique();
           
            $table->unsignedBigInteger('fk_d');
            $table->unsignedBigInteger('fk_p');
            $table->String('TA');
            $table->integer('FC');
            $table->integer('FR');
            $table->Double('TEMP');
            $table->Double('PESO');
            $table->String('Nombre_ef');
            $table->String('Cabeza_ef');
            $table->String('Cuello_ef');
            $table->String('Abdomen_ef');
            $table->String('Miembro_pelvico_ef');
            $table->String('Miembro_toraxico_ef');
            $table->Timestamps();
             $table->softDeletes();
            
            // para claves foraneas 
           
            $table->foreign('fk_d')->references('DSS')->on('doctors');
            $table->foreign('fk_p')->references('SS')->on('pacientes');
        });
          //Cita
          Schema::create('citas', function (Blueprint $table) {
            $table->id('pk_cita')->unique();
          
            $table->unsignedBigInteger('fk_dc');
            $table->unsignedBigInteger('fk_pc');
            $table->DateTime('inicio_c');
            $table->String('Estado');
            $table->timestamps();
             $table->softDeletes();
            // para claves foraneas 
            $table->foreign('fk_dc')->references('DSS')->on('doctors');
            $table->foreign('fk_pc')->references('SS')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
        Schema::dropIfExists('exploracion_fs');
        Schema::dropIfExists('estudios');
        Schema::dropIfExists('notas');
        Schema::dropIfExists('nota_p_quirurgicas');
        Schema::dropIfExists('a_patologicos');
        Schema::dropIfExists('a_ginecobstetricos');
        Schema::dropIfExists('historial__clinicos');
        Schema::dropIfExists('pacientes');
        
        Schema::dropIfExists('doctors');
        Schema::dropIfExists('areas');
        Schema::dropIfExists('users');
      

    }
};
