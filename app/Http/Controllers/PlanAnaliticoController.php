<?php

namespace App\Http\Controllers;

use App\Models\Plan_Analitico;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PlanAnaliticoController extends Controller
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
    

        return view('Fisioterapia.Formularios.Plan',compact('id','idDoc'));
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
        $Plan = new Plan_Analitico;
        $Plan->fk_plan=$data['id'];
        $Plan->Objetivos=$data['Ob'];
        $Plan->Hipotesis=$data['Hipostesis'];
        $Plan->Estrucutura_corp=$data['Estructura'];
        $Plan->Funcion_Corporal=$data['Funcion'];
        $Plan->Actividad=$data['Actividad'];
        $Plan->Participacion=$data['Participacion'];
        $Plan->Diagnostico=$data['Diagnostico'];
        $Plan->plan=$data['Plan'];
        $Plan->save();
        // return response()->json($data);
         $paciente=$Plan->fk_plan;
     
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Plan analitico  agregado  correctamente!');
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
        //
         $data = $request->all();
         $Plan =Plan_Analitico::find($data['id']);
        
        $Plan->Objetivos=$data['Ob'];
        $Plan->Hipotesis=$data['Hipostesis'];
        $Plan->Estrucutura_corp=$data['Estructura'];
        $Plan->Funcion_Corporal=$data['Funcion'];
        $Plan->Actividad=$data['Actividad'];
        $Plan->Participacion=$data['Participacion'];
        $Plan->Diagnostico=$data['Diagnostico'];
        $Plan->plan=$data['Plan'];
        $Plan->save();

         //return response()->json($data);
       $paciente=$Plan->fk_plan;
     
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Plan analitico  actualizado  correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan_Analitico  $plan_Analitico
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
         $id=request('id');
        $dato =Plan_Analitico::find(request('id'));
          $paciente=$dato->fk_plan;
        if ($dato) {
             
  
            $dato->delete();
            
        } else {
            
        }

     
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Plan analitico  eliminado  correctamente!');
    }
}
