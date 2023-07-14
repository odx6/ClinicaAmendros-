<?php

namespace App\Http\Controllers;

use App\Models\Traslados;
use Illuminate\Http\Request;
use App\Models\Paciente;


class TrasladosController extends Controller
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
    

        return view('Fisioterapia.Traslados.index',compact('id','idDoc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $data = $request->all();
         $Traslado= new traslados;
         $Traslado->fk_traslados=$data['id'];
         $Traslado->Val_inicial=$data['Inicial'];
         $Traslado->Val_final=$data['Final'];
         $Traslado->save();

         // return response()->json($data);
          $paciente=$data['id'];
     
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Traslado agregado  correctamente!');

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
     * @param  \App\Models\Traslados  $traslados
     * @return \Illuminate\Http\Response
     */
    public function show(Traslados $traslados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Traslados  $traslados
     * @return \Illuminate\Http\Response
     */
    public function edit(Traslados $traslados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Traslados  $traslados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();
         $Traslado= traslados::find($data['id']);
         
         $Traslado->Val_inicial=$data['Inicial'];
         $Traslado->Val_final=$data['Final'];
         $Traslado->save();

          //return response()->json($data);
          $paciente=$Traslado->fk_traslados;
     
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Traslado atualizado  correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Traslados  $traslados
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
         $id=request('id');
        $dato =traslados::find(request('id'));
         $paciente=$dato->fk_traslados;
  
        if ($dato) {
          
  
            $dato->delete();
            
        } else {
            
        }

     
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Traslado eliminado  correctamente!');
    }
}
