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
    public function index2()
    {
        $Consultas=Consulta::all();
        
         return view('Consultas.DirectorIndex',compact('Consultas'));
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

        //return redirect()->route('Doctor.index');
       
         return redirect()->route('store.Consultas')->with('mensaje', '¡Consulta agregada  correctamente!');
    
    }
     public function create2(Request $request)
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

        //return redirect()->route('Doctor.index');
       
         return redirect()->route('index.ConsultasD')->with('mensaje', '¡Consulta agregada  correctamente!');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        return view('Consultas.store');
    }
     public function store2()
    {
        return view('Consultas.DirectorCreate');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {   
         
        $data = $request->all();
        $consulta=Consulta::Find($data['id']);
        return view('Consultas.show',compact('consulta'));


    }
    public function show2(Request $request)
    {   
         
        $data = $request->all();
        $consulta=Consulta::Find($data['id']);
        return view('Consultas.DirectorShow',compact('consulta'));


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
        $Consul=Consulta::find($data['id']);
        $Consul->fk_paciente=$data['consultaPaciente'];
        $Consul->fk_doctor=$data['ConsultaDoctor'];
        $Consul->fk_cita=$data['Consulta_cita'];
        $Consul->fk_secre=$data['consultaSecretaria'];
        $Consul->monto=$data['Monto'];
        $Consul->Estado='Pendiente';
        $Consul->save();
         return redirect()->route('store.Consultas')->with('mensaje', '¡Consulta actualizada  correctamente!');
    }
    public function update2(Request $request)
    {
        $data = $request->all();
        $Consul=Consulta::find($data['id']);
        $Consul->fk_paciente=$data['consultaPaciente'];
        $Consul->fk_doctor=$data['ConsultaDoctor'];
        $Consul->fk_cita=$data['Consulta_cita'];
        $Consul->fk_secre=$data['consultaSecretaria'];
        $Consul->monto=$data['Monto'];
        $Consul->Estado='Pendiente';
        $Consul->save();
          return redirect()->route('index.ConsultasD')->with('mensaje', '¡Consulta actualizada  correctamente!');
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
        return redirect()->route('store.Consultas')->with('mensaje', '¡Consulta eliminada correctamente!');
    }
     public function destroy2(Consulta $consulta)
    {
        $id=request('id');
        $dato =Consulta::Find($id);


        if ($dato) {
          
            $dato->delete();

        }else{}
         return redirect()->route('index.ConsultasD')->with('mensaje', '¡Consulta eliminada  correctamente!');
    }
}
