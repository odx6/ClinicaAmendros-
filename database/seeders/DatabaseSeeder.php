<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Area;
use App\Models\Doctor;
use App\Models\Paciente;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //Areas

        $area = new Area;
        $area->NOMBE_AREA='FISOTERAPIA';
        $area->save();

        $area = new Area;
        $area->NOMBE_AREA='TRAUMATOLOGIA';
        $area->save();

        $area = new Area;
        $area->NOMBE_AREA='BARIATRIA';
        $area->save();

        //user Admin
       $user = new User;
        $user->name ='Admin';
        $user->email='Admin@gmail.com';
        $user->password='1234';
        $user->role='admin';

        $user->save();
        //user 
        $user2 = new User;
        $user2->name ='Usertest';
        $user2->email='User@gmail.com';
        $user2->password='1234';
        $user2->role='secretaria';
        $user2->save();

         //user Admin
       $user3 = new User;
       $user3->name ='Ever';
       $user3->email='Ever@gmail.com';
       $user3->password='1234';
       $user3->role='medico';
       $user3->save();
        $user4 = new User;
       $user4->name ='Tomas';
       $user4->email='Tomas@gmail.com';
       $user4->password='1234';
       $user4->role='medico';
       $user4->save();
        //area
        $area = new Area;
        $area->NOMBE_AREA='FISOTERAPIA';
        $area->save();

        $Doctor= new  Doctor;
        $Doctor->AreaDoctor=1;
        $Doctor->fk_user=1;
        $Doctor->Nombre="KArla";
        $Doctor->Apellidos="de los santos degolladoz";
        $Doctor->Especialidades='terapeuta ortenprendista';
        $Doctor->Cedula="12345678";
        $Doctor->ESPECIALIDAD="Cirujano";
        $Doctor->save();

        $Doctor= new  Doctor;
        $Doctor->AreaDoctor=2;
        $Doctor->fk_user=3;
        $Doctor->Nombre="Tomas";
        $Doctor->Apellidos="Perez Cruz";
        $Doctor->Especialidades='reumatologo en artritis';

        $Doctor->Cedula="12345678";
        $Doctor->ESPECIALIDAD="Reumatologia";
        $Doctor->save();

        //Creacion de paciente
        $paciente = new Paciente;
        $paciente->PacienteDoctor=1;
        $paciente->Nombre="Everardo ";
        $paciente->Apellido="Agustin Cruz";
        $paciente->Edad=26;
        $paciente->Sexo="M";
        $paciente->Estado_civil="Soltero(a)";
        $paciente->Origen="Mexicano";
        $paciente->Ocupacion="Trabajador";
        $paciente->Direccion="Flores magon";
        $paciente->Telefono="951588751";
        $paciente->Religion="Catolisismo";
        $paciente->Escolaridad="Educacion Primaria";
        $date = Carbon::now();
        $paciente->FechaIngreso=$date->format('Y-m-d');
        $paciente->save();

        
    }


    }



