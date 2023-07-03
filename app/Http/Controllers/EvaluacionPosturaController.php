<?php

namespace App\Http\Controllers;

use App\Models\Evaluacion_postura;
use App\Models\Paciente;
use App\Models\VistaPostura;
use Illuminate\Http\Request;

class EvaluacionPosturaController extends Controller
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
    

        return view('Fisioterapia.Postura.index',compact('id','idDoc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();
        $Vista= new VistaPostura;
        $Vista->fk_vista=$data['id'];
        $Vista->Nombre="Vista ".$data['TipoM'];
        $Vista->Tipo=$data['TipoM'];
        $Vista->save();
           if($request->input('Posturas')){
foreach ($request->input('Posturas') as $PosturaData) {
            //Busca el moviemiento
            $Evaluacion = new Evaluacion_postura;

            $Evaluacion->create([
                'fk_postura' => $Vista->pk_vista,
                'Inclinacion_Corporal' => $PosturaData['Nombre'],
                'L' => $PosturaData['L'],
                'M' => $PosturaData['M'],  
                'S' => $PosturaData['S'],
                'Tipo_vista' => $PosturaData['Observaciones'],
                // Otros campos de cliente que desees actualizar
            ]);
        }        
}




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
     * @param  \App\Models\Evaluacion_postura  $evaluacion_postura
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluacion_postura $evaluacion_postura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evaluacion_postura  $evaluacion_postura
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluacion_postura $evaluacion_postura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evaluacion_postura  $evaluacion_postura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();

        $Vista=VistaPostura::find($data['id']);
        

        if($request->input('Posturas')){
            foreach ($request->input('Posturas') as $PosturaData) {
            //Busca el moviemiento
            $postura = $Vista->Posturas()->findOrFail($PosturaData['IDP']);

            $postura->update([
                'Inclinacion_Corporal' => $PosturaData['Nombre'],
                  'L' => $PosturaData['L'],
                'M' => $PosturaData['M'],  
                'S' => $PosturaData['S'],
                'Tipo_vista' => $PosturaData['Observaciones'],
                // Otros cPosturade cliente que desees actualizar
            ]);
        }
        }

          return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evaluacion_postura  $evaluacion_postura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluacion_postura $evaluacion_postura)
    {
        //
         //
        $id=request('id');
        $dato =VistaPostura::find(request('id'));
  
        if ($dato) {
             $dato->Posturas()->where('fk_postura', $dato->pk_vista)->delete();
  
            $dato->delete();
            
        } else {
            
        }
    }
}
