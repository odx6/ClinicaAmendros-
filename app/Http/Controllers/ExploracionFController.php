<?php

namespace App\Http\Controllers;

use App\Models\exploracion_f;
use App\Models\Paciente;
use Illuminate\Http\Request;

class ExploracionFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id=request('id');
        $paciente=Paciente::find($id);
        $idDoc=$paciente->PacienteDoctor;
    

        return view('Exploraciones.index',compact('id','idDoc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $Exploracion= new exploracion_f;
        $Exploracion->fk_e=1;
       /* $Exploracion->fk_d=request('Doctor');
        $Exploracion->fk_p=request('Paciente');*/
        $Exploracion->fk_d=request('idDoc');
        $Exploracion->fk_p=request('id');
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Exploracion= exploracion_f::find(request('IDAG'));
        $Exploracion->fk_e=request('IDDOC');
       /* $Exploracion->fk_d=request('Doctor');
        $Exploracion->fk_p=request('Paciente');*/
        $Exploracion->fk_d=1;
        $Exploracion->fk_p=request('IDPA');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\exploracion_f  $exploracion_f
     * @return \Illuminate\Http\Response
     */
    public function show(exploracion_f $exploracion_f)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\exploracion_f  $exploracion_f
     * @return \Illuminate\Http\Response
     */
    public function edit(exploracion_f $exploracion_f)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\exploracion_f  $exploracion_f
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, exploracion_f $exploracion_f)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\exploracion_f  $exploracion_f
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $id=request('id');
      $dato =exploracion_f::find(request('id'));

      if ($dato) {
        

          $dato->delete();
          
      } else {
          
      }
     return view('Doctor.index');
    }
}
