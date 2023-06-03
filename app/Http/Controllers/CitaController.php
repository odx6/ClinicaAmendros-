<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Carbon\Carbon;
class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date =Carbon::parse('2023-04-12 10:30:00');
        $cita= new Cita;
        $cita->fk_dc=request('id');
        $cita->fk_pc=request('paciente');
        $cita->inicio_c=request('inicio');
        $cita->fin_cita=request('fin');
        $cita->Duracion=$date->setTime(01,0,0);
        $cita->Estado='Reservado';
        $cita->save();
         //$citas = Cita::all()->toArray();
        // $citas_json = json_encode($citas);
        //return $citas_json;
        $citas = CitaController::all();
        $events=[];
        foreach($citas as $citax){
            $events[]=[
                'id'=>$citax->pk_cita,
                'title'=>$citax->fk_dc,
                'start'=>$citax->inicio_c,
                'end'=>$citax->fin_cita,
               
            ];
            }


            //return $events;
            return $everts;
      
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $date =Carbon::parse('2023-04-12 10:30:00');
         $cita= Cita::find(request('idCita'));
         $cita->fk_dc=request('idDoctor');
         $cita->fk_pc=request('paciente');
         $cita->inicio_c=request('inicio');
         $cita->fin_cita=request('fin');
         $cita->Duracion=$date->setTime(01,0,0);
         $cita->Estado='Reservado';
         $cita->save();

        /* $nombre=$cita->inicio_c;
         $datos = $request->all();
         $datos=json_encode($datos);
         return $datos;*/
         return "Actualizados";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        //
    }
     public function Calendar()
    {
        $all_events=Cita::all();
        $events=[];
   
        foreach($all_events as $event){
           $paciente= Paciente::findOrFail($event->fk_pc);
            $nombre=$paciente->Nombre.' '.$paciente->Apellido;
           $events[]=[
               'id'=>$event->pk_cita,
               'title'=>$nombre,
               'start'=>$event->inicio_c,
               'end'=>$event->fin_cita,
               'extendedProps'=>['calendar'=>'Fisoterapia','Idpaciente'=>$event->fk_pc,'IdDoctor'=>$event->fk_dc,],
           ];
    }
    $datosJson = json_encode($events);
  //  return "Hola como calendario";
  return response()->json($events);
}
public function CitasDoctores(Request $request)
    {
        $valor=request('id');
        $all_events = Cita::where('fk_dc', '=', $valor)
        ->get();

       // $all_events=Cita::findOrFail(1);


        $events=[];
   
        foreach($all_events as $event){
           $paciente= Paciente::findOrFail($event->fk_pc);
            $nombre=$paciente->Nombre.' '.$paciente->Apellido;
           $events[]=[
               'id'=>$event->pk_cita,
               'title'=>$nombre,
               'start'=>$event->inicio_c,
               'end'=>$event->fin_cita,
               'extendedProps'=>['calendar'=>'Importante','Idpaciente'=>$event->fk_pc,'IdDoctor'=>$event->fk_dc,],
           ];
    }
    $datosJson = json_encode($events);
   
return response()->json($events);
}
    
}
