<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SignosVitalesController extends Controller
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
    public function create(Request $request)
    {
        
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
     * @param  \App\Models\Escala_dolor  $escala_dolor
     * @return \Illuminate\Http\Response
     */
    public function show(Escala_dolor $escala_dolor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Escala_dolor  $escala_dolor
     * @return \Illuminate\Http\Response
     */
    public function edit(Escala_dolor $escala_dolor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Escala_dolor  $escala_dolor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Escala_dolor $escala_dolor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Escala_dolor  $escala_dolor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Escala_dolor $escala_dolor)
    {
        //
    }

    public function Agregar($id,$TA,$TEMP,$FC,$FR)
    {
        $SignosVitales= new Signos_Vitales;
        $SignosVitales->fk_Signos=$id;
        $SignosVitales->TA=$TA;
        $SignosVitales->Temp=$Temp;
        $SignosVitales->FC=$FC;
        $SignosVitales->FR=$FR;
        $SignosVitales->save();
       
    }
}
