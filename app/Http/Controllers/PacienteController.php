<?php

namespace App\Http\Controllers;
use App\Http\Controllers\HistorialClinicoController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use  App\Models\Paciente;
use  App\Models\Historial_Clinico;
 use  App\Models\a_ginecobstetrico;
 use  App\Models\a_patologico;
 use  App\Models\estudio;
 use  App\Models\exploracion_f;
 use  App\Models\nota_p_quirurgica;
 use  App\Models\nota;


use Carbon\Carbon;


class PacienteController extends Controller
{
    
    public function index(){

        return view('paciente.index');
    }
    public function prueba(Request $request){

        $datos=request()->all();
        $datos2=request('id');
        $paciente = new PacienteController;
        $paciente->PacienteDDoctor=reques('idDocotor');
        $paciente->Nombre=reques('Nombre');
        $paciente->Apellido=reques('Apellido');
        $paciente->Edad=reques('Edad');
        $paciente->Sexo=reques('Sexo');
        $paciente->Estado_civil=reques('Estado_civil');
        $paciente->Origen=reques('Origen');
        $paciente->Ocupacion=reques('Ocupacion');
        $paciente->Direccion=reques('Direccion');
        $paciente->Telefono=reques('Telefono');
        $paciente->Religion=reques('Religion');
        $paciente->Escolaridad=reques('Escolaridad');
        $paciente->FechaIngreso=reques('FechaIngreso');
        $paciente->FechaSalida=reques('FechaSalida');
        $paciente->save();
       // return "hola controler prueba"

    
       return $datos2;
     }
     public function store(Request $request){

       
        $paciente = new Paciente;
        //$paciente->PacienteDoctor=request('idDocotor');
        $paciente->PacienteDoctor=1;
        $paciente->Nombre=request('Nombre');
        $paciente->Apellido=request('Apellido');
        $paciente->Edad=request('Edad');
        $paciente->Sexo=request('Sexo');
        $paciente->Estado_civil=request('Estado_civil');
        $paciente->Origen=request('Origen');
        $paciente->Ocupacion=request('Ocupacion');
        $paciente->Direccion=request('Direccion');
        $paciente->Telefono=request('Telefono');
        $paciente->Religion=request('Religion');
        $paciente->Escolaridad=request('Escolaridad');
        $date = Carbon::now();
        $paciente->FechaIngreso=$date->format('Y-m-d');
        $paciente->FechaSalida=$date->format('Y-m-d');
        $paciente->save();
        $clavePaciente=$paciente->SS;
      //  Historial_clinico::store($request->all());
        $Historial= new Historial_Clinico;
        $Historial->PacienteSS=1;
        $Historial->DM=request('DM');
        $Historial->HAS=request('HAS');
        $Historial->CA=request('CA');
        $Historial->PDM=request('PDM');
        $Historial->PHAS=request('PHAS');
        $Historial->PCA=request('PCA');
        $Historial->MFALLECIDA=request('MF');
        $Historial->PFALLECIDA=request('PF');
        $Historial->CAUSAS=request('CAM');
        $Historial->ALERGIAS=request('ALERGIAS');

        $Historial->ALIMENTOS=request('AL');
        $Historial->SUSTANCIAS_Q=request('ALS');
        $Historial->CIRUJIAS_P=request('CP');
        $Historial->TRANSFUCIONES=request('TF');
        $Historial->FRACTURAS=request('FP');
        $Historial->ALCHOLISMO=request('ALP');
        $Historial->TABASQUISMO=request('TB');
        $Historial->DROGAS=request('DR');
        $Historial->save();

        //a.Genopstrecticos 
        $gineco = new a_ginecobstetrico;
        $gineco->fk_ag=$Historial->idHIstorial_clinico;
        $gineco->Menarca=request('Menarca');
        $gineco->Ivsa=request('IVSA');
        $gineco->Gesta=request('gestas');
        $gineco->Cesareas=request('Cesareas');

        $gineco->Aborto=request('Abortos');
        $gineco->Paras=request('Partos');
        $gineco->save();
        // antecedentes Patologicos 
        $patologico = new a_patologico;
        $patologico->fk_ap =$Historial->idHIstorial_clinico;
        $patologico->Dm=request('DMN');
        $patologico->DmTE=request('DMTE');
        $patologico->Has=request('HASN');
        $patologico->HasTe=request('HASTE');
        $patologico->Ir=request('IR');
        $patologico->IrTe=request('IrTe');
        $patologico->Otra=request('OTRA');
        $patologico->save();
        //estudio 
        $Estudio= new estudio;
        $Estudio->fk_e=$Historial->idHIstorial_clinico;
       $Estudio->HEMOGLOBINA=request('HEMOGLOBINA');
       $Estudio->HEMATOCRITO=request('HEMATOCRITO');
       $Estudio->PLAQUETAS=request('PLAQUETAS');
       $Estudio->GLUCOSA=request('GLUCOSA');
       $Estudio->UREA=request('UREA');
       $Estudio->CREATININA=request('CREATININA');
       $Estudio->RX=request('RX');
       $Estudio->USG=request('USG');
        $Estudio->save();
        //Exploracio Fisica

        $Exploracion= new exploracion_f;
        $Exploracion->fk_e=$Historial->idHIstorial_clinico;
       /* $Exploracion->fk_d=request('Doctor');
        $Exploracion->fk_p=request('Paciente');*/
        $Exploracion->fk_d=1;
        $Exploracion->fk_p=$paciente->SS;
        $Exploracion->TA=request('T/A');
        $Exploracion->FC=request('FC');
        $Exploracion->X1=request('X1');
        $Exploracion->FR=request('FR');
        $Exploracion->X2=request('X2');
        $Exploracion->TEMP=request('TEMP');
        $Exploracion->PESO=request('PESO');
        $Exploracion->Nombre_ef=request('NEF');
        $Exploracion->Cabeza_ef=request('CAEF');
        $Exploracion->Cuello_ef=request('CUEF');
        $Exploracion->Abdomen_ef=request('ABEF');
        $Exploracion->Miembro_Pelvico_ef=request('MP');
        $Exploracion->Miembro_toraxico_ef=request('MT');
        $Exploracion->save();

         //Nota P_Quierurgia 
         $Nota_p= new nota_p_quirurgica;
         $Nota_p->fk_npq=$Historial->idHIstorial_clinico;
         $Nota_p->ProgramacionC=request('PC');
         $Nota_p->Ejecucion=request('EJ');
         $Nota_p->Hallazgos=request('HA');
         $Nota_p->Complicaciones=request('CO');
         $Nota_p->Nombre_Cirujano=request('NC');
         $Nota_p->Nombre_Ayudante=request('NAY');
         $Nota_p->Nombre_Instrumentista=request('NI');
         $Nota_p->Nombre_Aniestesiologo=request('NAN');
         $Nota_p->Circulante=request('CIR');
         $Nota_p->save();

         //Notas 
          $Nota= new nota;
          $Nota->fk_n=$Historial->idHIstorial_clinico;
          $Nota->Nota=request('NOT');
          $Nota->Tipo=request('TIPO');
          $Nota->save();

        //return redirect()->action([HistorialClinicoController::class, 'store'])->withInput($request);
        //return redirect()->route('historial.store')->with($request->all());
        return "hola controler prueba";
    
      // return $datos2;
     }
     //Update del paciente 
     public function Update(Request $request){
     
      $paciente= Paciente::find(request('Identificador'));
      $paciente->PacienteDoctor=request('Doctor');
      $paciente->Nombre=request('Nombre');
      $paciente->Apellido=request('Apellido');
      $paciente->Edad=request('Edad');
      $paciente->Sexo=request('Sexo');
      $paciente->Estado_civil=request('Estado_civil');
      $paciente->Origen=request('Origen');
      $paciente->Ocupacion=request('Ocupacion');
      $paciente->Direccion=request('Direccion');
      $paciente->Telefono=request('Telefono');
      $paciente->Religion=request('Religion');
      $paciente->Escolaridad=request('Escolaridad');
      $paciente->FechaIngreso=request('FechaIngreso');
      $paciente->FechaSalida=request('FechaSalida');
      $paciente->save();
    
      
  }
    

}
