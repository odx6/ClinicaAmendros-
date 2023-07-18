<?php

namespace App\Http\Controllers;

use App\Models\Historial_Clinico;
use Illuminate\Http\Request;

class HistorialClinicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id=request('id');
       return view('Historiales.create', compact('id'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $Historial= new Historial_Clinico;
        $Historial->PacienteSS=request('Paciente');
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
         $paciente=request('Paciente');
     
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Historial clínico  agregado  correctamente!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Historial= new Historial_Clinico;
        $Historial->PacienteSS=2;
        $Historial->DM=1;
        $Historial->HAS=2;
        $Historial->CA=3;
        $Historial->MFALLECIDA='si';
        $Historial->PFALLECIDA='no';
        $Historial->CAUSAS='se cayo por las escaleras';
        $Historial->ALIMENTOS='uvas y leche';
        $Historial->SUSTANCIAS_Q='paracetamol';
        $Historial->CIRUJIAS_P='true';
        $Historial->TRANSFUCIONES='no';
        $Historial->FRACTURAS=1;
        $Historial->ALCHOLISMO=1;
        $Historial->TABASQUISMO=1;
        $Historial->DROGAS=1;
        $nombre=request('Nombre');
          return view('Doctor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Historial_Clinico  $historial_Clinico
     * @return \Illuminate\Http\Response
     */
    public function show(Historial_Clinico $historial_Clinico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Historial_Clinico  $historial_Clinico
     * @return \Illuminate\Http\Response
     */
    public function edit(Historial_Clinico $historial_Clinico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Historial_Clinico  $historial_Clinico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         //  Historial_clinico::store($request->all());
         $Historial= Historial_Clinico::find(request('Identificador'));
         $Historial->PacienteSS=request('Paciente');
         $Historial->DM=request('DM');
         $Historial->HAS=request('HAS');
         $Historial->CA=request('CA');
         $Historial->PDM=request('PDM');
         $Historial->PHAS=request('PHAS');
         $Historial->PCA=request('PCA');
         $Historial->MFALLECIDA=request('MF');
         $Historial->PFALLECIDA=request('PF');
         $Historial->CAUSAS=request('CAM');
         $Historial->ALIMENTOS=request('AL');
         $Historial->SUSTANCIAS_Q=request('ALS');
         $Historial->CIRUJIAS_P=request('CP');
         $Historial->TRANSFUCIONES=request('TF');
         $Historial->FRACTURAS=request('FP');
         $Historial->ALCHOLISMO=request('ALP');
         $Historial->TABASQUISMO=request('TB');
         $Historial->DROGAS=request('DR');
         $Historial->save();
          $paciente= $Historial->PacienteSS;
     
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Historial clínico actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Historial_Clinico  $historial_Clinico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id=request('id');
        $dato =Historial_clinico::Find($id);
          $paciente= $dato->PacienteSS;

        if ($dato) {
            $dato->Exploraciones()->where('fk_e', $dato->idHIstorial_clinico)->delete();
            $dato->delete();

        }else{}
          return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Historial clínico eliminado correctamente!');
    }
}
