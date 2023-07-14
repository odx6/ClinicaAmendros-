<?php

namespace App\Http\Controllers;

use App\Models\Evaluacion;
use App\Models\Paciente;
use Illuminate\Http\Request;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id=request('id');
        $paciente=Paciente::find($id);
        $idDoc=$paciente->PacienteDoctor;
    

        return view('Fisioterapia.Muscular.index',compact('id','idDoc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $data = $request->all();
         $Evalauciaon= new Evaluacion;
         $Evalauciaon->fk_evaluacion=$data['id'];
         $Evalauciaon->Nombre_miembro=$data['Nombre'];
         $Evalauciaon->Tipo="Muscular";
         $Evalauciaon->Val_iquierda=$data['izquierda'];
         $Evalauciaon->Val_derecha=$data['Derecha'];
         $Evalauciaon->save();


         return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluacion $evaluacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluacion $evaluacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();
        $Evalauciaon= Evaluacion::find($data['id']);
         $Evalauciaon->Nombre_miembro=$data['Nombre'];
         $Evalauciaon->Tipo="Muscular";
         $Evalauciaon->Val_iquierda=$data['izquierda'];
         $Evalauciaon->Val_derecha=$data['Derecha'];
         $Evalauciaon->save();
         return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $id=request('id');
      $dato =Evaluacion::find(request('id'));

      if ($dato) {
          $dato->delete();
          
      } else {
          
      }

    }
}
