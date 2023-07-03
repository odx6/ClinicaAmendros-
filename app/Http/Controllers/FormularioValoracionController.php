<?php

namespace App\Http\Controllers;

use App\Models\Formulario_Valoracion;
use App\Models\Paciente;
use Illuminate\Http\Request;

class FormularioValoracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=request('id');
        $paciente=Paciente::find($id);
        $idDoc=$paciente->PacienteDoctor;
    

        return view('Fisioterapia.Formularios.index',compact('id','idDoc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
         $data = $request->all();
         $Formulario =new Formulario_Valoracion;
         $Formulario->fk_formulario=$data['id'];
         $Formulario->P_pies_juntos=$data['pregunta1'];
         $Formulario->P_semitandem=$data['pregunta2'];
         $Formulario->P_tandem=$data['pregunta3'];
         $Formulario->Segundos=$data['pregunta4'];
         $Formulario->Total=$data['total'];
         $Formulario->Comentarios=$data['NOT'];
         $Formulario->Save();
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
     * @param  \App\Models\Formulario_Valoracion  $formulario_Valoracion
     * @return \Illuminate\Http\Response
     */
    public function show(Formulario_Valoracion $formulario_Valoracion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formulario_Valoracion  $formulario_Valoracion
     * @return \Illuminate\Http\Response
     */
    public function edit(Formulario_Valoracion $formulario_Valoracion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formulario_Valoracion  $formulario_Valoracion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();
        $Formulario =Formulario_Valoracion::find($data['id']);
         $Formulario->P_pies_juntos=$data['pregunta1'];
         $Formulario->P_semitandem=$data['pregunta2'];
         $Formulario->P_tandem=$data['pregunta3'];
         $Formulario->Segundos=$data['pregunta4'];
         $Formulario->Total=$data['total'];
         $Formulario->Comentarios=$data['NOT'];
         $Formulario->Save();
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formulario_Valoracion  $formulario_Valoracion
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
         $id=request('id');
        $dato =Formulario_Valoracion::find(request('id'));
  
        if ($dato) {
             
  
            $dato->delete();
            
        } else {
            
        }
    }
}
