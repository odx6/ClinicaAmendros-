<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HistorialClinicoController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Historial_Clinico;
use App\Models\a_ginecobstetrico;
use App\Models\a_patologico;
use App\Models\estudio;
use App\Models\exploracion_f;
use App\Models\nota_p_quirurgica;
use App\Models\nota;
use App\Models\Area;
use Carbon\Carbon;


class PacienteController extends Controller
{

  public function index()
  {
     $Areas=Area::all();
    return view('paciente.index',compact('Areas'));
  }

   public function index2()
  {
     $Pacientes=Paciente::all();
    return view('paciente.index2',compact('Pacientes'));
  }
  public function create(Request $request)
  {


    $paciente = new Paciente;
    $paciente->PacienteDoctor =request('Doctor');;
    $paciente->Nombre = request('Nombre');
    $paciente->Apellido = request('Apellido');
    $paciente->Edad = request('Edad');
    $paciente->Sexo = request('Sexo');
    $paciente->Estado_civil = request('Estado_civil');
    $paciente->Origen = request('Origen');
    $paciente->Ocupacion = request('Ocupacion');
    $paciente->Direccion = request('Direccion');
    $paciente->Telefono = request('Telefono');
    $paciente->Religion = request('Religion');
    $paciente->Escolaridad = request('Escolaridad');
    $date = Carbon::now();
    $paciente->FechaIngreso = $date->format('Y-m-d');

    $paciente->save();
    return view('Doctor.index');


  }
  public function show(Request $request)
  {
     $Paciente=Paciente::find(request('id'));
     return view('paciente.edit',compact('Paciente'));
  }

   public function create2(Request $request)
  {


    $paciente = new Paciente;
    $paciente->PacienteDoctor =request('Doctor');;
    $paciente->Nombre = request('Nombre');
    $paciente->Apellido = request('Apellido');
    $paciente->Edad = request('Edad');
    $paciente->Sexo = request('Sexo');
    $paciente->Estado_civil = request('Estado_civil');
    $paciente->Origen = request('Origen');
    $paciente->Ocupacion = request('Ocupacion');
    $paciente->Direccion = request('Direccion');
    $paciente->Telefono = request('Telefono');
    $paciente->Religion = request('Religion');
    $paciente->Escolaridad = request('Escolaridad');
    $date = Carbon::now();
    $paciente->FechaIngreso = $date->format('Y-m-d');

    $paciente->save();
     return redirect()->route('Pacientes.listar')->with('mensaje', '¡Paciente agregado  correctamente!');


  }
  public function store(Request $request)
  {
    $idPaciente = Request('id');
    $Paciente = Paciente::find($idPaciente);

    if($Paciente->Sexo=="F"){

      $gineco = new a_ginecobstetrico;
      $gineco->fk_ag=$Paciente->SS;
      $gineco->Menarca=request('Menarca');
      $gineco->Ivsa=request('IVSA');
      $gineco->Gesta=request('gestas');
      $gineco->Cesareas=request('Cesareas');

      $gineco->Aborto=request('Abortos');
      $gineco->Paras=request('Partos');
      $gineco->save();
    }
    $Historial = new Historial_Clinico;
    $Historial->PacienteSS = $Paciente->SS;
    $Historial->DM = request('DM');
    $Historial->HAS = request('HAS');
    $Historial->CA = request('CA');
    $Historial->PDM = request('PDM');
    $Historial->PHAS = request('PHAS');
    $Historial->PCA = request('PCA');
    $Historial->MFALLECIDA = request('MF');
    $Historial->PFALLECIDA = request('PF');
    $Historial->CAUSAS = request('CAM');
    $Historial->ALERGIAS = request('ALERGIAS');
    $Historial->ALIMENTOS = request('AL');
    $Historial->SUSTANCIAS_Q = request('ALS');
    $Historial->CIRUJIAS_P = request('CP');
    $Historial->TRANSFUCIONES = request('TF');
    $Historial->FRACTURAS = request('FP');
    $Historial->ALCHOLISMO = request('ALP');
    $Historial->TABASQUISMO = request('TB');
    $Historial->DROGAS = request('DR');
    $Historial->save();

    $patologico = new a_patologico;
    $patologico->fk_ap = $Paciente->SS;
    $patologico->Dm = request('DMN');
    $patologico->DmTE = request('DMTE');
    $patologico->Has = request('HASN');
    $patologico->HasTe = request('HASTE');
    $patologico->Ir = request('IR');
    $patologico->IrTe = request('IrTe');
    $patologico->Otra = request('OTRA');
    $patologico->save();
    if (request('checkExploracion') == "1") {
      $Exploracion = new exploracion_f;
     

      $Exploracion->fk_d = $Paciente->PacienteDoctor;
      $Exploracion->fk_p = $Paciente->SS;
      $Exploracion->TA = request('T/A');
      $Exploracion->FC = request('FC');
      $Exploracion->FR = request('FR');
      $Exploracion->TEMP = request('TEMP');
      $Exploracion->PESO = request('PESO');
      $Exploracion->Nombre_ef = request('NEF');
      $Exploracion->Cabeza_ef = request('CAEF');
      $Exploracion->Cuello_ef = request('CUEF');
      $Exploracion->Abdomen_ef = request('ABEF');
      $Exploracion->Miembro_Pelvico_ef = request('MP');
      $Exploracion->Miembro_toraxico_ef = request('MT');
      $Exploracion->save();
    }
    if (request('checkEstudio') == "1") {

      $Estudio = new estudio;
      $Estudio->fk_e =  $Paciente->SS;
      $Estudio->HEMOGLOBINA = request('HEMOGLOBINA');
      $Estudio->HEMATOCRITO = request('HEMATOCRITO');
      $Estudio->PLAQUETAS = request('PLAQUETAS');
      $Estudio->GLUCOSA = request('GLUCOSA');
      $Estudio->UREA = request('UREA');
      $Estudio->CREATININA = request('CREATININA');
      $Estudio->RX = request('RX');
      $Estudio->USG = request('USG');
      $Estudio->save();
    }
    if(request('checkNotas')=="1"){
      $Nota_p= new nota_p_quirurgica;
      $Nota_p->fk_npq=$Paciente->SS;
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
    if(request('NOT')!==null){
      $Nota= new  nota;
        $Nota->fk_n=$Paciente->SS;
        $Nota->Nota=request('NOT');
        $Nota->Tipo=request('TIPO');
        $Nota->save();
          }
    }

    return view('Doctor.index');
  }
  public function edit(){
    $Areas=Area::all();
    return view('paciente.create',compact('Areas'));

  }
  //Update del paciente 
  public function Update(Request $request)
  {

    $paciente = Paciente::find(request('Identificador'));
    $paciente->PacienteDoctor = request('Doctor');
    $paciente->Nombre = request('Nombre');
    $paciente->Apellido = request('Apellido');
    $paciente->Edad = request('Edad');
    $paciente->Sexo = request('Sexo');
    $paciente->Estado_civil = request('Estado_civil');
    $paciente->Origen = request('Origen');
    $paciente->Ocupacion = request('Ocupacion');
    $paciente->Direccion = request('Direccion');
    $paciente->Telefono = request('Telefono');
    $paciente->Religion = request('Religion');
    $paciente->Escolaridad = request('Escolaridad');
    $paciente->FechaIngreso = request('FechaIngreso');
    $paciente->FechaSalida = request('FechaSalida');
    $paciente->save();


  }
  public function Update2(Request $request)
  {

    $paciente = Paciente::find(request('Identificador'));
    $paciente->PacienteDoctor = request('Doctor');
    $paciente->Nombre = request('Nombre');
    $paciente->Apellido = request('Apellido');
    $paciente->Edad = request('Edad');
    $paciente->Sexo = request('Sexo');
    $paciente->Estado_civil = request('Estado_civil');
    $paciente->Origen = request('Origen');
    $paciente->Ocupacion = request('Ocupacion');
    $paciente->Direccion = request('Direccion');
    $paciente->Telefono = request('Telefono');
    $paciente->Religion = request('Religion');
    $paciente->Escolaridad = request('Escolaridad');
    $paciente->FechaIngreso = request('FechaIngreso');
    $paciente->FechaSalida = request('FechaSalida');
    $paciente->save();
    return redirect()->route('Pacientes.listar')->with('mensaje', '¡Paciente actualizado  correctamente!');


  }
  public function destroy(Request $request)
  {
    $id = request('id');
    $dato = Paciente::find(request('id'));

    if ($dato) {
      $dato->historiales()->where('PacienteSS', $dato->SS)->delete();
      $dato->Ginecobstetricos()->where('fk_ag', $dato->SS)->delete();
      $dato->Patologicos()->where('fk_ap', $dato->SS)->delete();
      $dato->notasPost()->where('fk_npq', $dato->SS)->delete();
      $dato->notas()->where('fk_n', $dato->SS)->delete();
      $dato->Estudios()->where('fk_e', $dato->SS)->delete();
      $dato->EsploracionFisica()->where('fk_p', $dato->SS)->delete();
      $dato->citas()->where('fk_pc', $dato->SS)->delete();


      $dato->delete();

    } else {

    }
    return view('Doctor.index');
  }
 public function destroy2()
  {
    $id = request('id');
    $dato = Paciente::find(request('id'));

    if ($dato) {
      $dato->historiales()->where('PacienteSS', $dato->SS)->delete();
      $dato->Ginecobstetricos()->where('fk_ag', $dato->SS)->delete();
      $dato->Patologicos()->where('fk_ap', $dato->SS)->delete();
      $dato->notasPost()->where('fk_npq', $dato->SS)->delete();
      $dato->notas()->where('fk_n', $dato->SS)->delete();
      $dato->Estudios()->where('fk_e', $dato->SS)->delete();
      $dato->EsploracionFisica()->where('fk_p', $dato->SS)->delete();
      $dato->citas()->where('fk_pc', $dato->SS)->delete();


      $dato->delete();

    } else {

    }
    return redirect()->route('Pacientes.listar')->with('mensaje', '¡Paciente eliminado  correctamente!');
  }

}