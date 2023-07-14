<?php

namespace App\Http\Controllers;

use App\Models\nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id=request('id');
       return view('Notas.index', compact('id'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Nota= new  nota;
        $Nota->fk_n=request('id');
        $Nota->Nota=request('NOT');
        $Nota->Tipo=request('TIPO');
        $Nota->save();
         $paciente=request('id');
     
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Nota agregada  correctamente!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Notas 
        $Nota=  nota::find(request('IDAG'));
        $Nota->fk_n=request('IDPA');
        $Nota->Nota=request('NOT');
        $Nota->Tipo=request('TIPO');
        $Nota->save();
         $paciente=$Nota->fk_n;
     
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Nota actualizada  correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show(nota $nota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function edit(nota $nota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nota $nota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id=request('id');
        $dato =nota::Find($id);
        $paciente=$dato->fk_n;

        if ($dato) {
          
            $dato->delete();

        }else{}
        
     
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Nota eliminada  correctamente!');
    }
}
