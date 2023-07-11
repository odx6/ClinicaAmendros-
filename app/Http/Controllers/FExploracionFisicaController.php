<?php

namespace App\Http\Controllers;

use App\Models\F_ExploracionFisica;
use App\Models\Paciente;
use Illuminate\Http\Request;


class FExploracionFisicaController extends Controller
{
    //Fisioterapia

     public function index(Request $request)
    {
        $id=request('id');
        $paciente=Paciente::find($id);
        $idDoc=$paciente->PacienteDoctor;
    

        return view('Fisioterapia.ExploracionF.create',compact('id','idDoc'));
    }

    public function create(Request $request)
    {
        $id=request('id');
        $paciente=Paciente::find($id);
        $idDoc=$paciente->PacienteDoctor;
        $Exploracion= new F_ExploracionFisica;
        $Exploracion->fk_Exploracion_ff= $id;
        $Exploracion->Peso= request('Peso');
        $Exploracion->Estatura= request('Estatura');
        $Exploracion->IMC= request('IMC');
        $Exploracion->Etnia= request('Etnia');
        $Exploracion->Motivo= request('Motivo');
        $Exploracion->Save();

     return $id;


        
    }
       public function update(Request $request)
    {
       $id=request('id');
        $Exploracion=  F_ExploracionFisica::find(request('id'));
        $Exploracion->Peso= request('Peso');
        $Exploracion->Estatura= request('Estatura');
        $Exploracion->IMC= request('IMC');
        $Exploracion->Etnia= request('Etnia');
        $Exploracion->Motivo= request('Motivo');
        $Exploracion->Save();

         return $id;
    }
       public function destory(Request $request)
    {
       $id=request('id');
        $Exploracion=  F_ExploracionFisica::find(request('id'));
        
     
        
  
        if ($Exploracion) {
          
  
            $Exploracion->delete();
            
        } else {
            
        }
     return $id;
        
    }
}

