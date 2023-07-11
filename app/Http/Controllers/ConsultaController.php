<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         return view('Consultas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();
        $Consul= new Consulta;
        $Consul->fk_paciente=$data['consultaPaciente'];
        $Consul->fk_doctor=$data['ConsultaDoctor'];
        $Consul->fk_cita=$data['Consulta_cita'];
        $Consul->fk_secre=$data['consultaSecretaria'];
        $Consul->monto=$data['Monto'];
        $Consul->Estado='Pendiente';
        $Consul->save();

        return redirect()->route('Doctor.index');
    
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
     * @param  \App\Models\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function show(Consulta $consulta)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function edit(Consulta $consulta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();
        $Consul=Consulta::finc($data['id']);
        $Consul->fk_paciente=$data['consultaPaciente'];
        $Consul->fk_doctor=$data['ConsultaDoctor'];
        $Consul->fk_cita=$data['Consulta_cita'];
        $Consul->fk_secre=$data['consultaSecretaria'];
        $Consul->monto=$data['Monto'];
        $Consul->Estado='Pendiente';
        $Consul->save();
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consulta $consulta)
    {
        $id=request('id');
        $dato =Consulta::Find($id);


        if ($dato) {
          
            $dato->delete();

        }else{}
        return view('Doctor.index');
    }
}
