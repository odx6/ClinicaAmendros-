<?php

namespace App\Http\Controllers;

use App\Models\Escala_dolor;
use App\Models\Paciente;
use Illuminate\Http\Request;

class EscalaDolorController extends Controller
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
    

        return view('Fisioterapia.Escala.index',compact('id','idDoc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
         $data = $request->all();
         $Escala= new Escala_dolor;
         $Escala->fk_escala=$data['id'];
         $Escala->Escala=$data['Escala'];
         $Escala->save();

         //return response()->json($data);
         $paciente=$data['id'];
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Antecedente agregado correctamente!');
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
    public function update(Request $request)
    {
        //
        $data = $request->all();
         $Escala=Escala_dolor::find($data['id']);
      
         $Escala->Escala=$data['Escala'];
         $Escala->save();
        // return response()->json($data);
          $paciente=$Escala->fk_escala;
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Antecedente actuaizado  correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Escala_dolor  $escala_dolor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Escala_dolor $escala_dolor)
    {
         $id=request('id');
        $dato =Escala_dolor::find(request('id'));
        $paciente=$dato->fk_escala;
        if ($dato) {
          
  
            $dato->delete();
            
        } else {
            
        }

         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Antecedente Eliminado correctamente!');
    }
}
