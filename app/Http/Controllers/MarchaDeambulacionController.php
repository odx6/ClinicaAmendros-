<?php

namespace App\Http\Controllers;

use App\Models\Marcha_Deambulacion;
use App\Models\Paciente;
use Illuminate\Http\Request;

class MarchaDeambulacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //
        $id = request('id');
        $paciente = Paciente::find($id);
        $idDoc = $paciente->PacienteDoctor;


        return view('Fisioterapia.Marcha.index', compact('id', 'idDoc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();
        $Marcha = new Marcha_Deambulacion;
        $Marcha->fk_marcha=$data['id'];
        (isset($data['Libre'])) ? $Marcha->libre = $data['Libre']: $Marcha->libre = "no";
        (isset($data['Claudicante'])) ? $Marcha->Claudicante = $data['Claudicante']: $Marcha->Claudicante= "no";
        (isset($data['Con-ayuda'])) ? $Marcha->Con_ayuda = $data['Con-ayuda']: $Marcha->Con_ayuda= "no";
        (isset($data['Espasticas'])) ? $Marcha->Espastica = $data['Espasticas']: $Marcha->Espastica= "no";
        (isset($data['Ataxica'])) ? $Marcha->Alaxicas    = $data['Ataxica']: $Marcha->Alaxicas  = "no";
        (isset($data['Otros'])) ? $Marcha->Otros    = $data['Otros']: $Marcha->Otros  = "no";
        (isset($data['Observaciones'])) ? $Marcha->Observaciones_marcha    = $data['Observaciones']: $Marcha->Observaciones_marcha  = "no";

        $Marcha->save();

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
     * @param  \App\Models\Marcha_Deambulacion  $marcha_Deambulacion
     * @return \Illuminate\Http\Response
     */
    public function show(Marcha_Deambulacion $marcha_Deambulacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marcha_Deambulacion  $marcha_Deambulacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Marcha_Deambulacion $marcha_Deambulacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marcha_Deambulacion  $marcha_Deambulacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $data = $request->all();
         $Marcha = Marcha_Deambulacion::find($data['id']);
       
        (isset($data['Libre'])) ? $Marcha->libre = $data['Libre']: $Marcha->libre = "no";
        (isset($data['Claudicante'])) ? $Marcha->Claudicante = $data['Claudicante']: $Marcha->Claudicante= "no";
        (isset($data['Con-ayuda'])) ? $Marcha->Con_ayuda = $data['Con-ayuda']: $Marcha->Con_ayuda= "no";
        (isset($data['Espasticas'])) ? $Marcha->Espastica = $data['Espasticas']: $Marcha->Espastica= "no";
        (isset($data['Ataxica'])) ? $Marcha->Alaxicas    = $data['Ataxica']: $Marcha->Alaxicas  = "no";
        (isset($data['Otros'])) ? $Marcha->Otros    = $data['Otros']: $Marcha->Otros  = "no";
        (isset($data['Observaciones'])) ? $Marcha->Observaciones_marcha    = $data['Observaciones']: $Marcha->Observaciones_marcha  = "no";

        $Marcha->save();
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marcha_Deambulacion  $marcha_Deambulacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marcha_Deambulacion $marcha_Deambulacion)
    {
         //
        $id=request('id');
        $dato =Marcha_Deambulacion::find(request('id'));
  
        if ($dato) {
          
  
            $dato->delete();
            
        } else {
            
        }
    }
}
