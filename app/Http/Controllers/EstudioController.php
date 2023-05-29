<?php

namespace App\Http\Controllers;

use App\Models\estudio;
use Illuminate\Http\Request;

class EstudioController extends Controller
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
        $Estudio= estudio::find(request('IDAG'));
        $Estudio->HEMOGLOBINA=request('HEMOGLOBINA');
       $Estudio->HEMATOCRITO=request('HEMATOCRITO');
       $Estudio->PLAQUETAS=request('PLAQUETAS');
       $Estudio->GLUCOSA=request('GLUCOSA');
       $Estudio->UREA=request('UREA');
       $Estudio->CREATININA=request('CREATININA');
       $Estudio->RX=request('RX');
       $Estudio->USG=request('USG');
        $Estudio->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function show(estudio $estudio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function edit(estudio $estudio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, estudio $estudio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\estudio  $estudio
     * @return \Illuminate\Http\Response
     */
    public function destroy(estudio $estudio)
    {
        //
    }
}
