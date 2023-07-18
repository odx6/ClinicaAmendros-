<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Areas=Area::all();
        return view('Areas.index',compact('Areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Area= new Area;
        $Area->NOMBE_AREA=request('Nombre');
        $Area->Save();

        return redirect()->route('index.Areas')->with('mensaje', '¡Area  Agregada  correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $Area=Area::find(request('id'));
        return view('Areas.Edit',compact('Area'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $area)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $Area=Area::find(request('id'));
        $Area->NOMBE_AREA=request('Nombre');
        $Area->Save();
        return redirect()->route('index.Areas')->with('mensaje', '¡Area  Actualizada  correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
          $id=request('id');
      $dato =Area::find(request('id'));
      

      if ($dato) {
          $dato->delete();
          
      } else {
          
      }
      
        return redirect()->route('index.Areas')->with('mensaje', '¡Area  Eliminada  correctamente!');
    }
    }

