<?php

namespace App\Http\Controllers;

use App\Models\Cicatriz_Q;
use Illuminate\Http\Request;
use App\Models\Paciente;

class CicatrizQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $id = request('id');
        $paciente = Paciente::find($id);
        $idDoc = $paciente->PacienteDoctor;


        return view('Fisioterapia.Cicatriz.index', compact('id', 'idDoc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();
        $paciente=$data['id'];
        $Cicatriz = new Cicatriz_Q;
        $Cicatriz->fk_cicatriz = $data['id'];
        $Cicatriz->sitio = $data['Sitio'];
        (isset($data['Abierta'])) ? $Cicatriz->abierta = $data['Abierta']: $Cicatriz->abierta = "no";
        (isset($data['Queloide'])) ? $Cicatriz->queloide = $data['Queloide']: $Cicatriz->queloide = "no";
        (isset($data['Retractil'])) ? $Cicatriz->Retractil = $data['Retractil']: $Cicatriz->Retractil = "no";
        (isset($data['Con-Aderencia'])) ? $Cicatriz->Con_Adherencia = $data['Con-Aderencia']: $Cicatriz->Con_Adherencia = "no";
        (isset($data['Hipertrófica'])) ? $Cicatriz->Hipertrofica = $data['Hipertrófica']: $Cicatriz->Hipertrofica = "no";
        $Cicatriz->save();

      //  return response()->json($data);
        return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Cicatriz agregada correctamente!');
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
     * @param  \App\Models\Cicatriz_Q  $cicatriz_Q
     * @return \Illuminate\Http\Response
     */
    public function show(Cicatriz_Q $cicatriz_Q)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cicatriz_Q  $cicatriz_Q
     * @return \Illuminate\Http\Response
     */
    public function edit(Cicatriz_Q $cicatriz_Q)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cicatriz_Q  $cicatriz_Q
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();
        
        $Cicatriz =Cicatriz_Q::find($data['id']);
          $Cicatriz->sitio = $data['Sitio'];
        (isset($data['Abierta'])) ? $Cicatriz->abierta = $data['Abierta']: $Cicatriz->abierta = "no";
        (isset($data['Queloide'])) ? $Cicatriz->queloide = $data['Queloide']: $Cicatriz->queloide = "no";
        (isset($data['Retractil'])) ? $Cicatriz->Retractil = $data['Retractil']: $Cicatriz->Retractil = "no";
        (isset($data['Con-Aderencia'])) ? $Cicatriz->Con_Adherencia = $data['Con-Aderencia']: $Cicatriz->Con_Adherencia = "no";
        (isset($data['Hipertrófica'])) ? $Cicatriz->Hipertrofica = $data['Hipertrófica']: $Cicatriz->Hipertrofica = "no";
        $Cicatriz->save();
         $paciente=$Cicatriz->fk_cicatriz;
        //return response()->json($data);
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Cicatriz quirurgica actualizada correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cicatriz_Q  $cicatriz_Q
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        
        //
        $id=request('id');
        $paciente=$id;
        $dato =Cicatriz_Q::find(request('id'));
  
        if ($dato) {
          
  
            $dato->delete();
            
        } else {
            
        }
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Cicatriz quirurgica Eliminada correctamente!');
    }
}