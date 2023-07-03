<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use App\Models\Tratamientos_p;
use Illuminate\Http\Request;

class TratamientosPController extends Controller
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
    

        return view('Fisioterapia.Tratamientos.index',compact('id','idDoc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create(Request $request)
    {
        $id=request('id');
        $paciente=Paciente::find($id);
        $idDoc=$paciente->PacienteDoctor;
        $Tratamiento= new Tratamientos_p;
        $Tratamiento->fk_tratamientos_p= $id;
        $Tratamiento->des_tratamiento= request('Tratamiento');
        $Tratamiento->Save();

        return $id;
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
     * @param  \App\Models\Tratamientos_p  $tratamientos_p
     * @return \Illuminate\Http\Response
     */
    public function show(Tratamientos_p $tratamientos_p)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tratamientos_p  $tratamientos_p
     * @return \Illuminate\Http\Response
     */
    public function edit(Tratamientos_p $tratamientos_p)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tratamientos_p  $tratamientos_p
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=request('id');
        
        $Tratamiento=Tratamientos_p::find($id);
       
        $Tratamiento->des_tratamiento= request('Tratamiento');
        $Tratamiento->Save();

        return $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tratamientos_p  $tratamientos_p
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tratamientos_p $tratamientos_p)
    {
         $id=request('id');
        $dato =Tratamientos_p::find(request('id'));
  
        if ($dato) {
          
  
            $dato->delete();
            
        } else {
            
        }
       return view('Doctor.index');
        
    }
    }

