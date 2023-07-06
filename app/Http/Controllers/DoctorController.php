<?php

namespace App\Http\Controllers;

use App\Models\Doctor;


use App\Models\Historial_Clinico;
use App\Models\a_ginecobstetrico;
use App\Models\a_patologico;
use App\Models\estudio;
use App\Models\nota_p_quirurgica;
use App\Models\nota;
use App\Models\exploracion_f;
use App\Models\Area;
use App\Models\F_ExploracionFisica;
use App\Models\Tratamientos_p;
use App\Models\Antecedentes_Ph;
use App\Models\Signos_Vitales;
use App\Models\Habitos_salud;
use App\Models\Estado_ingravidez;
use App\Models\DIME_Rehabilitacion;
use App\Models\Cicatriz_Q;
use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Traslados;
use App\Models\Marcha_Deambulacion;
use App\Models\Escala_dolor;
use App\Models\Evaluacion;
use App\Models\Movimiento;
use App\Models\Prueba_Ms;
use App\Models\VistaPostura;
use Carbon\Carbon;
use App\Models\Formulario_Valoracion;
use App\Models\Plan_Analitico;
use App\Models\Analisis_marcha;
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
        if (isset($valorSeleccionado)) {
            // Sacar su Historial del paciente 
            $Historiales = Historial_Clinico::where('PacienteSS', '=', $valorSeleccionado)->get();
            $Gineco = a_ginecobstetrico::where('fk_ag', '=', $valorSeleccionado)->get();
            $Patologicos = a_patologico::where('fk_ap', '=', $valorSeleccionado)->get();
            $Estudios = estudio::where('fk_e', '=', $valorSeleccionado)->get();
            $Notas_p = nota_p_quirurgica::where('fk_npq', '=', $valorSeleccionado)->get();
            $Notas = nota::where('fk_n', '=', $valorSeleccionado)->get();
            $Exploraciones = exploracion_f::where('fk_d', '=', $valorSeleccionado)->get();
            

            $Paciente = Paciente::Find($valorSeleccionado);
            $idDoctor=$Paciente->PacienteDoctor;
            $Doctor=Doctor::find($idDoctor);
            $idArea=$Doctor->AreaDoctor;
            $Area=Area::find($idArea);
            //Fisioterapia

            $ExploracionesF=F_ExploracionFisica::where('fk_Exploracion_ff', '=', $valorSeleccionado)->get();
            $Tratamiento=Tratamientos_p::where('fk_tratamientos_p', '=', $valorSeleccionado)->get();
            $Antecedentes=Antecedentes_Ph::where('fk_Antecedentes_ph', '=', $valorSeleccionado)->get();
            $signos=Signos_Vitales::where('fk_Signos', '=', $valorSeleccionado)->get();
            $habitos=Habitos_salud::where('fk_Habitos', '=', $valorSeleccionado)->get();
            $Ingravidez=Estado_ingravidez::where('fk_ingravidez', '=', $valorSeleccionado)->get();
            $DIME=DIME_Rehabilitacion::where('fk_dmi', '=', $valorSeleccionado)->get();
            $Cicatriz=Cicatriz_Q::where('fk_cicatriz', '=', $valorSeleccionado)->get();
            $Traslados=Traslados::where('fk_traslados', '=', $valorSeleccionado)->get();
            $MarchasDeam=Marcha_Deambulacion::where('fk_marcha', '=', $valorSeleccionado)->get();
            $Dolor=Escala_dolor::where('fk_escala', '=', $valorSeleccionado)->get();
            $Evaluaciones=Evaluacion::where('fk_evaluacion', '=', $valorSeleccionado)->get();
            $Superiores=Movimiento::where('fk_movimiento', '=', $valorSeleccionado)->get();
            $Pruebas=Prueba_Ms::where('fk_prueba', '=', $valorSeleccionado)->where('Tipo', '=','Superior')->get();
            $PruebasInferiores=Prueba_Ms::where('fk_prueba', '=', $valorSeleccionado)->where('Tipo', '=','Inferior')->get();
             $PosturaFrontal=VistaPostura::where('fk_vista', '=', $valorSeleccionado)->get();
             $Formularios=Formulario_Valoracion::where('fk_formulario', '=', $valorSeleccionado)->get();
             $Planes=Plan_Analitico::where('fk_plan', '=', $valorSeleccionado)->get();
             $Marchas=Analisis_marcha::where('fk_Analis_marcha', '=', $valorSeleccionado)->get();

            
             if($Area->NOMBE_AREA=="FISOTERAPIA"){
               return view('Fisioterapia.create', compact('valorSeleccionado', 'Paciente', 'ExploracionesF', 'Tratamiento', 'Antecedentes', 'Estudios', 'DIME', 'Ingravidez', 'habitos','signos', 'Cicatriz', 'Traslados','MarchasDeam','Dolor', 'Evaluaciones','Notas', 'Superiores','Pruebas','PruebasInferiores','PosturaFrontal','Formularios', 'Planes','Marchas'));
             }

            return view('Doctor.Paciente', compact('valorSeleccionado', 'Paciente', 'Historiales', 'Gineco', 'Patologicos', 'Estudios', 'Notas_p', 'Notas', 'Exploraciones'));
        } else {
            return redirect()->back();
        }



    }

      public function HistorialPacienteFisioterapia()
    {
        return view('Fisioterapia.index');

    }

    public function HistorialPacientePDF()
    {

        $valorSeleccionado = request('id');
        // Sacar su Historial del paciente 
        $Historiales = Historial_Clinico::where('PacienteSS', '=', $valorSeleccionado)->get();
        $Gineco = a_ginecobstetrico::where('fk_ag', '=', $valorSeleccionado)->get();
        $Patologicos = a_patologico::where('fk_ap', '=', $valorSeleccionado)->get();
        $Estudios = estudio::where('fk_e', '=', $valorSeleccionado)->get();
        $Notas_p = nota_p_quirurgica::where('fk_npq', '=', $valorSeleccionado)->get();
        $Notas = nota::where('fk_n', '=', $valorSeleccionado)->get();
        $Exploraciones = exploracion_f::where('fk_d', '=', $valorSeleccionado)->get();

        $Paciente = Paciente::Find($valorSeleccionado);
        Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $data = []; // Agrega aquí los datos que deseas pasar a la vista

        $pdf = PDF::loadView('pdf.Historial', compact('valorSeleccionado', 'Paciente', 'Historiales', 'Gineco', 'Patologicos', 'Estudios', 'Notas_p', 'Notas', 'Exploraciones'))->setPaper('a4', 'letter');
        // Agrega la cabecera al PDF


        return $pdf->stream('login.pdf');

        // return view('pdf.Historial',compact('valorSeleccionado','Paciente', 'Historiales','Gineco','Patologicos','Estudios','Notas_p','Notas','Exploraciones'));

    }
    public function ConsentimientoPDF(Request $request)
    {
        $Fecha = $fechaActual = Carbon::now();
        $valorSeleccionado = request('id');
        $NombreResponsable = request('Nombre');
        $DomicilioResponsable = request('Domicilio');
        $EdadResponsable = request('Edad');
        $CalidadPaciente = request('Calidad');
        $Tratamiento = request('Tratamiento');
        $Revocar = 0;
        $NoAcepta = 0;
        if ($request->has('Revocar')) {
            $Revocar = 1;
        } else {
            $Revocar = 0;
        }
        if ($request->has('NoAcepta')) {
            $NoAcepta = 1;
        } else {
            $NoAcepta = 0;
        }

        // Sacar su Historial del paciente 

        $Paciente = Paciente::Find($valorSeleccionado);
        $Doctor = Doctor::Find($Paciente->SS);
        Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $data = []; // Agrega aquí los datos que deseas pasar a la vista

        $pdf = PDF::loadView('pdf.Consentimeinto', compact('valorSeleccionado', 'Paciente', 'Fecha', 'NombreResponsable', 'DomicilioResponsable', 'EdadResponsable', 'CalidadPaciente', 'Tratamiento', 'Revocar', 'NoAcepta', 'Doctor'))->setPaper('a4', 'letter');
        // Agrega la cabecera al PDF


        return $pdf->stream('login.pdf');


    }

    public function RecetaPDF(Request $request)
    {
        $Fecha = $fechaActual = Carbon::now();
        $valorSeleccionado = request('id');
        $Receta = request('Receta');

        $Paciente = Paciente::Find($valorSeleccionado);
        $pdf = PDF::loadView('pdf.Receta', compact('valorSeleccionado', 'Paciente', 'Fecha', 'Receta'))->setPaper('a4', 'letter');


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
    public function Historialcompleto(Request $request)
    {
        $id = Request('id');
        $Paciente = Paciente::find($id);
        $idDoctor=$Paciente->PacienteDoctor;
            $Doctor=Doctor::find($idDoctor);
            $idArea=$Doctor->AreaDoctor;
            $Area=Area::find($idArea);
             if($Area->NOMBE_AREA=="FISOTERAPIA"){
                 return view('Fisioterapia.Historial', compact('id', 'Paciente'));

             }else{
        return view('Doctor.create', compact('id', 'Paciente'));
    }
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
    public function Medico(Request $request)
    {
        $id = Request('area');
        $Medicos = Doctor::where('AreaDoctor', '=', $id)->get();
        $MedicosJson = json_encode($Medicos);
        //return $MedicosJson;
        //Para mostrar los datos con javaScript

        return response()->json($Medicos);
    }
}