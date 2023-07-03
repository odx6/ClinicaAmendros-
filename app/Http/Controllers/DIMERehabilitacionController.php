<?php

namespace App\Http\Controllers;

use App\Models\DIME_Rehabilitacion;
use Illuminate\Http\Request;
use App\Models\Paciente;


class DIMERehabilitacionController extends Controller
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
    

        return view('Fisioterapia.Diagnostico.index',compact('id','idDoc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();
        $Diagnostico =new DIME_Rehabilitacion;
        $Diagnostico->fk_dmi =$data['id'];
        $Diagnostico->Reflejos =$data['Reflejos'];
        $Diagnostico->Sensibilidad =$data['Sensibilidad'];
        $Diagnostico->LenguajeOrientacion=$data['LeOr'];
        $Diagnostico->Otros=$data['Otros'];
        $Diagnostico->save();
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
     * @param  \App\Models\DIME_Rehabilitacion  $dIME_Rehabilitacion
     * @return \Illuminate\Http\Response
     */
    public function show(DIME_Rehabilitacion $dIME_Rehabilitacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DIME_Rehabilitacion  $dIME_Rehabilitacion
     * @return \Illuminate\Http\Response
     */
    public function edit(DIME_Rehabilitacion $dIME_Rehabilitacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DIME_Rehabilitacion  $dIME_Rehabilitacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $data = $request->all();
         $Diagnostico = DIME_Rehabilitacion::find($data['id']);
        $Diagnostico->fk_dmi =$data['id'];
        $Diagnostico->Reflejos =$data['Reflejos'];
        $Diagnostico->Sensibilidad =$data['Sensibilidad'];
        $Diagnostico->LenguajeOrientacion=$data['LeOr'];
        $Diagnostico->Otros=$data['Otros'];
        $Diagnostico->save();
         return response()->json($data);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DIME_Rehabilitacion  $dIME_Rehabilitacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id=request('id');
        $dato =DIME_Rehabilitacion::find(request('id'));
  
        if ($dato) {
          
  
            $dato->delete();
            
        } else {
            
        }
       return view('Doctor.index');
        
    }
    }

