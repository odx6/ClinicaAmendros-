<?php

namespace App\Http\Controllers;

use App\Models\Secretaria;
use Illuminate\Http\Request;

class SecretariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Secretarias=Secretaria::all();

        return view('Secretaria.index',compact('Secretarias'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Secretaria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Secretaria= new Secretaria;
        $Secretaria->fk_user=request('User');
        $Secretaria->Nombre=request('Nombre');
        $Secretaria->Apellidos=request('Apellidos');
        $Secretaria->telefono=request('Telefono');
        $Secretaria->save();


        return redirect()->route('index.Secrearia')->with('mensaje', '¡Secretaria Agregada correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $Secretaria=Secretaria::find(request('id'));

        return view('Secretaria.edit',compact('Secretaria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function edit(Secretaria $secretaria)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $Secretaria=Secretaria::find(request('id'));
        $Secretaria->fk_user=request('User');
        $Secretaria->Nombre=request('Nombre');
        $Secretaria->Apellidos=request('Apellidos');
        $Secretaria->telefono=request('Telefono');
        $Secretaria->save();


        return redirect()->route('index.Secrearia')->with('mensaje', '¡Secretaria Actualizada correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $id=request('id');
        $dato =Secretaria::Find($id);

        if ($dato) {
            $dato->delete();

        }else{}
        
     
        return redirect()->route('index.Secrearia')->with('mensaje', '¡Secretaria eliminada correctamente!');
        
    }
     public function Consultas()
    {
        
    }
}
