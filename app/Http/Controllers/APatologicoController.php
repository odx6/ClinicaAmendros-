<?php

namespace App\Http\Controllers;

use App\Models\a_patologico;
use Illuminate\Http\Request;

class APatologicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id=request('id');

        return view('patologicos.index',compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $patologico= new a_patologico;
        $patologico->fk_ap =request('id');
        $patologico->Dm=request('DMN');
        $patologico->DmTE=request('DMTE');
        $patologico->Has=request('HASN');
        $patologico->HasTe=request('HASTE');
        $patologico->Ir=request('IR');
        $patologico->IrTe=request('IrTe');
        $patologico->Otra=request('OTRA');
        $patologico->save();
        $paciente=$patologico->fk_ap;
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Antecedentes Patologicos Agregados  correctamente!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // antecedentes Patologicos 
         $patologico=a_patologico::find(request('IDAG'));
         $patologico->fk_ap =request('IDPA');
         $patologico->Dm=request('DMN');
         $patologico->DmTE=request('DMTE');
         $patologico->Has=request('HASN');
         $patologico->HasTe=request('HASTE');
         $patologico->Ir=request('IR');
         $patologico->IrTe=request('IrTe');
         $patologico->Otra=request('OTRA');
         $patologico->save();
          $paciente=$patologico->fk_ap;
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Antecedentes Patologicos Agregados  correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\a_patologico  $a_patologico
     * @return \Illuminate\Http\Response
     */
    public function show(a_patologico $a_patologico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\a_patologico  $a_patologico
     * @return \Illuminate\Http\Response
     */
    public function edit(a_patologico $a_patologico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\a_patologico  $a_patologico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, a_patologico $a_patologico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\a_patologico  $a_patologico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id=request('id');
      $dato =a_patologico::find(request('id'));
      $paciente=$dato->fk_ap;

      if ($dato) {
          $dato->delete();
          
      } else {
          
      }
      
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Antecedentes Patologicos Eliminados  correctamente!');
    }
}
