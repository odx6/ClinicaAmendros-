<?php

namespace App\Http\Controllers;

use App\Models\nota_p_quirurgica;
use Illuminate\Http\Request;

class NotaPQuirurgicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Nota_p=nota_p_quirurgica::find(request('IDAG'));
         $Nota_p->fk_npq=request('IDPA');
         $Nota_p->ProgramacionC=request('PC');
         $Nota_p->Ejecucion=request('EJ');
         $Nota_p->Hallazgos=request('HA');
         $Nota_p->Complicaciones=request('CO');
         $Nota_p->Nombre_Cirujano=request('NC');
         $Nota_p->Nombre_Ayudante=request('NAY');
         $Nota_p->Nombre_Instrumentista=request('NI');
         $Nota_p->Nombre_Aniestesiologo=request('NAN');
         $Nota_p->Circulante=request('CIR');
         $Nota_p->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nota_p_quirurgica  $nota_p_quirurgica
     * @return \Illuminate\Http\Response
     */
    public function show(nota_p_quirurgica $nota_p_quirurgica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nota_p_quirurgica  $nota_p_quirurgica
     * @return \Illuminate\Http\Response
     */
    public function edit(nota_p_quirurgica $nota_p_quirurgica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nota_p_quirurgica  $nota_p_quirurgica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nota_p_quirurgica $nota_p_quirurgica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nota_p_quirurgica  $nota_p_quirurgica
     * @return \Illuminate\Http\Response
     */
    public function destroy(nota_p_quirurgica $nota_p_quirurgica)
    {
        //
    }
}
