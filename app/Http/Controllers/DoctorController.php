<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Paciente;
use App\Models\Historial_Clinico;
use App\Models\a_ginecobstetrico;
use  App\Models\a_patologico;
use  App\Models\estudio;
use  App\Models\nota_p_quirurgica;
use  App\Models\nota;
use  App\Models\exploracion_f;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PDF;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Doctor.index');
    }
    public function HistorialPaciente(Request $request)
    {
        $valorSeleccionado = $request->input('paciente');
        // Sacar su Historial del paciente 
        $Historiales = Historial_Clinico::where('PacienteSS', '=', $valorSeleccionado)->get();
         $Gineco=a_ginecobstetrico::where('fk_ag', '=', $valorSeleccionado) ->get();
        $Patologicos=a_patologico::where('fk_ap', '=', $valorSeleccionado) ->get();
        $Estudios=estudio::where('fk_e', '=', $valorSeleccionado) ->get();
        $Notas_p=nota_p_quirurgica::where('fk_npq', '=', $valorSeleccionado) ->get();
        $Notas=nota::where('fk_n', '=', $valorSeleccionado) ->get();
        $Exploraciones=exploracion_f::where('fk_d', '=', $valorSeleccionado) ->get();

      $Paciente =Paciente::Find($valorSeleccionado);
       
        return view('Doctor.Paciente',compact('valorSeleccionado','Paciente', 'Historiales','Gineco','Patologicos','Estudios','Notas_p','Notas','Exploraciones'));
    }

    public function HistorialPacientePDF()
    {

        $valorSeleccionado = request('id');
        // Sacar su Historial del paciente 
        $Historiales = Historial_Clinico::where('PacienteSS', '=', $valorSeleccionado)->get();
        $Gineco=a_ginecobstetrico::where('fk_ag', '=', $valorSeleccionado) ->get();
        $Patologicos=a_patologico::where('fk_ap', '=', $valorSeleccionado) ->get();
        $Estudios=estudio::where('fk_e', '=', $valorSeleccionado) ->get();
        $Notas_p=nota_p_quirurgica::where('fk_npq', '=', $valorSeleccionado) ->get();
        $Notas=nota::where('fk_n', '=', $valorSeleccionado) ->get();
        $Exploraciones=exploracion_f::where('fk_d', '=', $valorSeleccionado) ->get();

      $Paciente =Paciente::Find($valorSeleccionado);
      Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
      $data = []; // Agrega aquí los datos que deseas pasar a la vista

      $pdf = PDF::loadView('pdf.Historial',compact('valorSeleccionado','Paciente', 'Historiales','Gineco','Patologicos','Estudios','Notas_p','Notas','Exploraciones'))->setPaper('a4', 'letter');
      // Agrega la cabecera al PDF
  
      
      return $pdf->stream('login.pdf');
       
      // return view('pdf.Historial',compact('valorSeleccionado','Paciente', 'Historiales','Gineco','Patologicos','Estudios','Notas_p','Notas','Exploraciones'));
        
    }
    public function ConsentimientoPDF(Request $request)
    {
        $Fecha=$fechaActual = Carbon::now();
        $valorSeleccionado = request('id');
        $NombreResponsable=request('Nombre');
        $DomicilioResponsable=request('Domicilio');
        $EdadResponsable=request('Edad');
        $CalidadPaciente=request('Calidad');
        $Tratamiento=request('Tratamiento');
        $Revocar=0;
        $NoAcepta=0;
        if ($request->has('Revocar')) {
            $Revocar=1;
        } else {
            $Revocar=0;
        }
        if ($request->has('NoAcepta')) {
            $NoAcepta=1;
        } else {
            $NoAcepta=0;
        }

        // Sacar su Historial del paciente 
        
      $Paciente =Paciente::Find($valorSeleccionado);
      $Doctor =Doctor::Find($Paciente->SS);
      Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
      $data = []; // Agrega aquí los datos que deseas pasar a la vista

      $pdf = PDF::loadView('pdf.Consentimeinto',compact('valorSeleccionado','Paciente','Fecha','NombreResponsable','DomicilioResponsable','EdadResponsable','CalidadPaciente','Tratamiento','Revocar','NoAcepta','Doctor'))->setPaper('a4', 'letter');
      // Agrega la cabecera al PDF
  
      
      return $pdf->stream('login.pdf');
       
      $valorSeleccionado = request('id');
        
    }
   
    public function RecetaPDF(Request $request)
    {
        $Fecha=$fechaActual = Carbon::now();
        $valorSeleccionado = request('id');
        $Receta=request('Receta');

        $Paciente =Paciente::Find($valorSeleccionado);
         $pdf = PDF::loadView('pdf.Receta',compact('valorSeleccionado','Paciente','Fecha','Receta'))->setPaper('a4', 'letter');

       
         return $pdf->stream('Receta.pdf');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
