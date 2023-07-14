<?php

namespace App\Http\Controllers;

use App\Models\Analisis_marcha;
use App\Models\Paciente;
use Illuminate\Http\Request;

class AnalisisMarchaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $id=request('id');
        $paciente=Paciente::find($id);
        $idDoc=$paciente->PacienteDoctor;
    

        return view('Fisioterapia.AnalisisMarcha.index',compact('id','idDoc'));
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
        $Marcha = new Analisis_marcha;
        $Marcha->fk_Analis_marcha=$data['id'];
        $Marcha->valor1=$data['Valor1'];
        $Marcha->valor2=$data['Valor2'];
        $Marcha->valor3=$data['Valor3'];
        $Marcha->valor4=$data['Valor4'];
        $Marcha->valor5=$data['Valor5'];
        $Marcha->valor6=$data['Valor6'];
        $Marcha->valor7=$data['Valor7'];
        $Marcha->valor8=$data['Valor8'];
        $Marcha->valor9=$data['Valor9'];
        $Marcha->valor10=$data['Valor10'];
        $Marcha->total=$data['Total'];
        $Marcha->save();
         // return response()->json($data);
        $paciente=$data['id'];
        return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Analisis de marcha agregada correctamente!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\ResponsRequest $requeste
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Analisis_marcha  $analisis_marcha
     * @return \Illuminate\Http\Response
     */
    public function show(Analisis_marcha $analisis_marcha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Analisis_marcha  $analisis_marcha
     * @return \Illuminate\Http\Response
     */
    public function edit(Analisis_marcha $analisis_marcha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Analisis_marcha  $analisis_marcha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
          $data = $request->all();
          $Marcha =Analisis_marcha::find($data['id']);
        
        $Marcha->valor1=$data['Valor1'];
        $Marcha->valor2=$data['Valor2'];
        $Marcha->valor3=$data['Valor3'];
        $Marcha->valor4=$data['Valor4'];
        $Marcha->valor5=$data['Valor5'];
        $Marcha->valor6=$data['Valor6'];
        $Marcha->valor7=$data['Valor7'];
        $Marcha->valor8=$data['Valor8'];
        $Marcha->valor9=$data['Valor9'];
        $Marcha->valor10=$data['Valor10'];
        $Marcha->total=$data['Total'];
        $Marcha->save();
         // return response()->json($data);
        $paciente=$Marcha->fk_Analis_marcha;
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Analisis de marcha actualizada correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Analisis_marcha  $analisis_marcha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Analisis_marcha $analisis_marcha)
    {
        //
         $id=request('id');
        $dato =Analisis_marcha::find(request('id'));
        $paciente=$dato->fk_Analis_marcha;
  
        if ($dato) {
             
  
            $dato->delete();
            
        } else {
            
        }
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Analisis de marcha Eliminada correctamente!');
    }
}
