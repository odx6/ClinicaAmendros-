<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Estado_ingravidez;

class Estado_ingravidezController extends Controller
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
    

        return view('Fisioterapia.Ingravidez.index',compact('id','idDoc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();
        $Estado= new Estado_ingravidez;
        $Estado->fk_ingravidez=$data['id'];
        
        $Estado->Embarazada=(isset($data['embarazada'])) ? $data['embarazada']:  "no";
        $Estado->Especificacion=$data['Especificacion'];
        $Estado->Numero_hijos=$data['hijos'];
        $Estado->save();
       // return response()->json($data);
        $paciente=$data['id'];
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Estado de ingravidez agregado correctamente!');
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
     * @param  \App\Models\Plan_Analitico  $plan_Analitico
     * @return \Illuminate\Http\Response
     */
    public function show(Plan_Analitico $plan_Analitico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan_Analitico  $plan_Analitico
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan_Analitico $plan_Analitico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plan_Analitico  $plan_Analitico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();
        $Estado=Estado_ingravidez::find($data['id']);
        
        $Estado->Embarazada=(isset($data['embarazada'])) ? $data['embarazada']:  "no";
        $Estado->Especificacion=$data['Especificacion'];
        $Estado->Numero_hijos=$data['hijos'];
        $Estado->save();
       // return response()->json($data);
                $paciente=$Estado->fk_ingravidez;
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Estado de ingravidez actulizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan_Analitico  $plan_Analitico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id=request('id');
        $dato =Estado_ingravidez::find(request('id'));
        $paciente=$dato->fk_ingravidez;
        if ($dato) {
         
            $dato->delete();
            
        } else {
            
        }

         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Estado de ingravidez eliminado correctamente!');
    }
}
