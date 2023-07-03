<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers;
use  App\Http\Controllers\RegisterController;
use  App\Http\Controllers\SessionController;
use  App\Http\Controllers\AdminController;
use  App\Http\Controllers\PacienteController;
use  App\Http\Controllers\HistorialClinicoController;
use  App\Http\Controllers\CitaController;
use  App\Http\Controllers\DoctorController;
use  App\Http\Controllers\APatologicoController;
use  App\Http\Controllers\EstudioController;
use  App\Http\Controllers\PDFController;
use  App\Http\Controllers\AGinecobstetricoController;
use  App\Http\Controllers\NotaPQuirurgicaController;
use  App\Http\Controllers\NotaController;
use  App\Http\Controllers\ExploracionFController;
use  App\Http\Controllers\FExploracionFisicaController;
use  App\Http\Controllers\TratamientosPController;
use  App\Http\Controllers\AntecedentesPhController;
use  App\Http\Controllers\HabitosSaludController;
use  App\Http\Controllers\Estado_ingravidezController;
use  App\Http\Controllers\DIMERehabilitacionController;
use  App\Http\Controllers\CicatrizQController;
use  App\Http\Controllers\TrasladosController;
use  App\Http\Controllers\MarchaDeambulacionController;
use  App\Http\Controllers\EscalaDolorController;
use  App\Http\Controllers\EvaluacionController;
use  App\Http\Controllers\MovimientoController;
use  App\Http\Controllers\EvaluacionPosturaController;
use  App\Http\Controllers\FormularioValoracionController;
use  App\Http\Controllers\PlanAnaliticoController;
use  App\Http\Controllers\AnalisisMarchaController;
use Barryvdh\DomPDF\Facade\Pdf;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home');
})->middleware('auth')->name('Home');
#Routes module register
Route::get('/register',[RegisterController::class,'create'])->middleware('guest')->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
#Routes  module login
Route::get('/login',[SessionController::class,'create'])->middleware('guest')->name('login.index');
Route::post('/login', [SessionController::class, 'store'])->name('login.store');
Route::get('/logout', [SessionController::class, 'destroy'])->middleware('auth')->name('login.logout');
#Routes Admin 

Route::get('/Admin',[AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');

//prueba 
Route::get('/pacientes', [PacienteController::class, 'index'])->middleware('auth')->name('paciente.index');
Route::post('/pacientes', [PacienteController::class, 'store'])->middleware('auth')->name('paciente.store');
Route::post('/pacientes/Actualizar', [PacienteController::class, 'Update'])->middleware('auth')->name('paciente.update');
Route::post('/pacientes/Eliminar', [PacienteController::class, 'destroy'])->middleware('auth')->name('paciente.destroy');


//historial 
Route::get('/historial', [HistorialClinicoController::class, 'store'])->name('historial.store');
Route::post('/historial/FormularioAgregar', [HistorialClinicoController::class, 'index'])->name('historial.Formulario');
Route::post('/historial/Actualizar', [HistorialClinicoController::class, 'update'])->name('historial.update');
Route::post('/historial/Agregar', [HistorialClinicoController::class, 'create'])->name('historial.create');
Route::post('/historial/Eliminar', [HistorialClinicoController::class, 'destroy'])->name('Historial.destroy');
//Ginecobstetricos

Route::post('/Ginecologia/index', [AGinecobstetricoController::class, 'index'])->name('Gineco.Formulario');
Route::post('/Ginecologia/Agregar', [AGinecobstetricoController::class, 'create'])->name('Gineco.create');
Route::post('/Ginecologia/Eliminar', [AGinecobstetricoController::class, 'destroy'])->name('Gineco.destroy');
//Patologicos
Route::post('/Patologicos/index', [APatologicoController::class, 'index'])->name('Pato.Formulario');
Route::post('/Patologicos/Agregar', [APatologicoController::class, 'create'])->name('Pato.create');
Route::post('/Patologicos/Eliminar', [APatologicoController::class, 'destroy'])->name('Pato.destroy');
//Estudios
Route::post('/Estudios/index', [EstudioController::class, 'index'])->name('Estudios.Formulario');
Route::post('/Estudios/Agregar', [EstudioController::class, 'create'])->name('Estudios.create');
Route::post('/Estudios/Eliminar', [EstudioController::class, 'destroy'])->name('Estudios.destroy');
//NotasPost
Route::post('/NotasPost/index', [NotaPQuirurgicaController::class, 'index'])->name('NotasPost.Formulario');
Route::post('/NotasPost/Agregar', [NotaPQuirurgicaController::class, 'create'])->name('NotasPost.create');
Route::post('/NotasPost/Eliminar', [NotaPQuirurgicaController::class, 'destroy'])->name('NotasPost.destroy');
//Notas
Route::post('/Notas/index', [NotaController::class, 'index'])->name('Notas.Formulario');
Route::post('/Notas/Agregar', [NotaController::class, 'create'])->name('Notas.create');
Route::post('/Notas/Eliminar', [NotaController::class, 'destroy'])->name('Notas.destroy');
//Exploracion
Route::post('/Exploracion/index', [ExploracionFController::class, 'index'])->name('Exploracion.Formulario');
Route::post('/Exploracion/Agregar', [ExploracionFController::class, 'create'])->name('Exploracion.create');
Route::post('/Exploracion/Eliminar', [ExploracionFController::class, 'destroy'])->name('Exploracion.destroy');
//Rutas Citas
Route::get('/calendario', [CitaController::class, 'calendar'])->name('cita.calendar');
Route::post('/Doctores', [CitaController::class, 'CitasDoctores'])->name('Doctor.calendar');
Route::post('/ActualizarCita', [CitaController::class, 'update'])->name('cita.update');
Route::post('/eventos', [CitaController::class, 'store'])->name('cita.store');
Route::post('/PrimeraCita', [CitaController::class, 'PrimeraCita'])->name('cita.Primera');
Route::post('/Medicos', [DoctorController::class, 'Medico'])->name('Medicos.medico');
Route::post('/EliminarCita', [CitaController::class, 'destroy'])->name('destroy.cita');

//Rutas Doctores
Route::get('/Doctor', [DoctorController::class, 'index'])->name('Doctor.index');
Route::Post('/Doctor/paciente', [DoctorController::class, 'HistorialPaciente'])->name('Doctor.historial');
Route::get('/Doctor/paciente-fisioterapia', [DoctorController::class, 'HistorialPacienteFisioterapia'])->name('Doctor.historialFisioterapia');
Route::get('/Doctor/paciente/historial', [DoctorController::class, 'HistorialPaciente2'])->name('Paciente.historial');
Route::post('/Doctor/paciente/historial-completo', [DoctorController::class, 'Historialcompleto'])->name('Paciente.historial-completo');

//Rutas antecedentes Ginecopstrecticos 
Route::post('/pacientes/Actualizar/ginecobstretico', [AGinecobstetricoController::class, 'update'])->middleware('auth')->name('Gineco.update');

//Rutas antecedentes patologicos 
Route::post('/pacientes/Actualizar/patologicos', [APatologicoController::class, 'store'])->middleware('auth')->name('APatologicos.store');

//Rutas Estudios
Route::post('/pacientes/Actualizar/estudios', [EstudioController::class, 'store'])->middleware('auth')->name('Estudios.store');


//Rutas Notas post
Route::post('/pacientes/Actualizar/Notaspost', [NotaPQuirurgicaController::class, 'store'])->middleware('auth')->name('NotasPost.store');

//Notas 
Route::post('/pacientes/Actualizar/Notas', [NotaController::class, 'store'])->middleware('auth')->name('Nota.store');


//Exploracion fisicas 
Route::post('/pacientes/Actualizar/Exploracion', [ExploracionFController::class, 'store'])->middleware('auth')->name('Exploracion.store');


//Pdfs
Route::get('/imprimir-pdf', [PDFController::class, 'imprimirPDF']);
Route::post('/Historial-pdf', [DoctorController::class, 'HistorialPacientePDF'])->name('Historial.pdf');
Route::post('/Consentimeinto-pdf', [DoctorController::class, 'ConsentimientoPDF'])->name('Consentimeinto.pdf');
Route::post('/Receta-pdf', [DoctorController::class, 'RecetaPDF'])->name('Receta.pdf');


//Pacientes
Route::post('/Paciente/AgregarPaciente', [PacienteController::class, 'create'])->name('create.paciente');
//Rutas Fisioterapia
//Exploraciones fisicas

Route::post('/Paciente/AgregarEF', [FExploracionFisicaController::class, 'index'])->name('create.FExploracion');
Route::post('/Paciente/AgregarEF/fisioterapia', [FExploracionFisicaController::class, 'create'])->name('create.FExploracionF');
Route::post('/Paciente/AgregarEF/fisioterapia/Actualizar', [FExploracionFisicaController::class, 'update'])->name('update.FExploracionF');
Route::post('/Paciente/AgregarEF/fisioterapia/Eliminar', [FExploracionFisicaController::class, 'destory'])->name('destroy.FExploracionF');
//Tratamientos

Route::post('/Paciente/AgregarTF', [TratamientosPController::class, 'index'])->name('index.TratamientoF');
Route::post('/Paciente/AgregarTF/fisioterapia', [TratamientosPController::class, 'create'])->name('create.TratamientoF');
Route::post('/Paciente/AgregarTF/fisioterapia/Actualizar', [TratamientosPController::class, 'update'])->name('update.TratamientoF');
Route::post('/Paciente/AgregarTF/fisioterapia/Eliminar', [TratamientosPController::class, 'destroy'])->name('destroy.TratameintoF');

//Antecedentes Patologicos y heredofamiliares 

Route::post('/Paciente/AgregarAH', [AntecedentesPhController::class, 'index'])->name('index.AntecedenteAH');
Route::post('/Paciente/AgregarAH/fisioterapia', [AntecedentesPhController::class, 'create'])->name('create.AntecedenteAH');
Route::post('/Paciente/AgregarAH/fisioterapia/Actualizar', [AntecedentesPhController::class, 'update'])->name('update.AntecedenteAH');
Route::post('/Paciente/AgregarAH/fisioterapia/Eliminar', [AntecedentesPhController::class, 'destroy'])->name('destroy.AntecedenteAH');

//HAbitos de saludHAB
Route::post('/Paciente/AgregarHAB', [HabitosSaludController::class, 'index'])->name('index.AntecedenteHAB');
Route::post('/Paciente/AgregarHAB/fisioterapia', [HabitosSaludController::class, 'create'])->name('create.AntecedenteHAB');
Route::post('/Paciente/AgregarHAB/fisioterapia/Actualizar', [HabitosSaludController::class, 'update'])->name('update.AntecedenteHAB');
Route::post('/Paciente/AgregarHAB/fisioterapia/Eliminar', [HabitosSaludController::class, 'destroy'])->name('destroy.AntecedenteHAB');

//Estado de ingravidez
Route::post('/Paciente/AgregarIngravidez', [Estado_ingravidezController::class, 'index'])->name('index.Ingravidez');
Route::post('/Paciente/AgregarIngravidez/fisioterapia', [Estado_ingravidezController::class, 'create'])->name('create.Ingravidez');
Route::post('/Paciente/AgregarIngravidez/fisioterapia/Actualizar', [Estado_ingravidezController::class, 'update'])->name('update.Ingravidez');
Route::post('/Paciente/AgregarIngravidez/fisioterapia/Eliminar', [Estado_ingravidezController::class, 'destroy'])->name('destroy.Ingravidez');
//Estado de ingravidez
Route::post('/Paciente/AgregaDiagnostico', [DIMERehabilitacionController::class, 'index'])->name('index.Diagnostico');
Route::post('/Paciente/AgregaDiagnostico/fisioterapia', [DIMERehabilitacionController::class, 'create'])->name('create.Diagnostico');
Route::post('/Paciente/AgregaDiagnostico/fisioterapia/Actualizar', [DIMERehabilitacionController::class, 'update'])->name('update.Diagnostico');
Route::post('/Paciente/AgregaDiagnostico/fisioterapia/Eliminar', [DIMERehabilitacionController::class, 'destroy'])->name('destroy.Diagnostico');
//Cicatriz
Route::post('/Paciente/AgregaCicatriz', [CicatrizQController::class, 'index'])->name('index.Cicatriz');
Route::post('/Paciente/AgregaCicatriz/fisioterapia', [CicatrizQController::class, 'create'])->name('create.Cicatriz');
Route::post('/Paciente/AgregaCicatriz/fisioterapia/Actualizar', [CicatrizQController::class, 'update'])->name('update.Cicatriz');
Route::post('/Paciente/AgregaCicatriz/fisioterapia/Eliminar', [CicatrizQController::class, 'destroy'])->name('destroy.Cicatriz');

//Traslados
Route::post('/Paciente/AgregaTraslados', [TrasladosController::class, 'index'])->name('index.Traslados');
Route::post('/Paciente/AgregaTraslados/fisioterapia', [TrasladosController::class, 'create'])->name('create.Traslados');
Route::post('/Paciente/AgregaTraslados/fisioterapia/Actualizar', [TrasladosController::class, 'update'])->name('update.Traslados');
Route::post('/Paciente/AgregaTraslados/fisioterapia/Eliminar', [TrasladosController::class, 'destroy'])->name('destroy.Traslados');

//Marcha
Route::post('/Paciente/AgregMarcha', [MarchaDeambulacionController::class, 'index'])->name('index.Marcha');
Route::post('/Paciente/AgregMarcha/fisioterapia', [MarchaDeambulacionController::class, 'create'])->name('create.Marcha');
Route::post('/Paciente/AgregMarcha/fisioterapia/Actualizar', [MarchaDeambulacionController::class, 'update'])->name('update.Marcha');
Route::post('/Paciente/AgregMarcha/fisioterapia/Eliminar', [MarchaDeambulacionController::class, 'destroy'])->name('destroy.Marcha');
//Dolor
Route::post('/Paciente/AgregEscala',[EscalaDolorController::class, 'index'])->name('index.Escala');
Route::post('/Paciente/AgregEscala/fisioterapia',[ EscalaDolorController::class, 'create'])->name('create.Escala');
Route::post('/Paciente/AgregEscala/fisioterapia/Actualizar', [EscalaDolorController::class, 'update'])->name('update.Escala');
Route::post('/Paciente/AgregEscala/fisioterapia/Eliminar', [EscalaDolorController::class, 'destroy'])->name('destroy.Escala');
//Evalaucion Muscular
Route::post('/Paciente/AgregMuscular',[EvaluacionController::class, 'index'])->name('index.Muscular');
Route::post('/Paciente/AgregMuscular/fisioterapia',[ EvaluacionController::class, 'create'])->name('create.Muscular');
Route::post('/Paciente/AgregMuscular/fisioterapia/Actualizar', [EvaluacionController::class, 'update'])->name('update.Muscular');
Route::post('/Paciente/AgregMuscular/fisioterapia/Eliminar', [EvaluacionController::class, 'destroy'])->name('destroy.Muscular');

//Evalaucion miembros superiores
Route::post('/Paciente/AgregMSuperiores',[MovimientoController::class, 'index'])->name('index.MSuperiores');
Route::post('/Paciente/AgregMSuperiores/fisioterapia',[ MovimientoController::class, 'create'])->name('create.MSuperiores');
Route::post('/Paciente/AgregMSuperiores/fisioterapia/Actualizar', [MovimientoController::class, 'update'])->name('update.MSuperiores');
Route::post('/Paciente/AgregMSuperiores/fisioterapia/Eliminar', [MovimientoController::class, 'destroy'])->name('destroy.MSuperiores');
 //Dedos
 Route::post('/Paciente/AgregMSuperioresDedos/fisioterapia',[ MovimientoController::class, 'Dedos'])->name('create.MSuperioresDedos');
Route::post('/Paciente/AgregMSuperioresDedos/fisioterapia/Actualizar', [MovimientoController::class, 'Dedosupdate'])->name('update.MSuperioresDedos');
//inferiores
Route::post('/Paciente/AgregMInferiores',[MovimientoController::class, 'index2'])->name('index.MInferiores');

//Evalaucion miembros superiores
Route::post('/Paciente/AgregarPostura',[EvaluacionPosturaController::class, 'index'])->name('index.Postura');
Route::post('/Paciente/AgregarPostura/fisioterapia',[ EvaluacionPosturaController::class, 'create'])->name('create.Postura');
Route::post('/Paciente/AgregarPostura/fisioterapia/Actualizar', [EvaluacionPosturaController::class, 'update'])->name('update.Postura');
Route::post('/Paciente/AgregarPostura/fisioterapia/Eliminar', [EvaluacionPosturaController::class, 'destroy'])->name('destroy.Postura');
//Formularios
Route::post('/Paciente/AgregarFormulario',[FormularioValoracionController::class, 'index'])->name('index.Formulario');
Route::post('/Paciente/AgregarFormulario/fisioterapia',[ FormularioValoracionController::class, 'create'])->name('create.Formulario');
Route::post('/Paciente/AgregarFormulario/fisioterapia/Actualizar', [FormularioValoracionController::class, 'update'])->name('update.Formulario');
Route::post('/Paciente/AgregarFormulario/fisioterapia/Eliminar', [FormularioValoracionController::class, 'destroy'])->name('destroy.Formulario');

//Plan
Route::post('/Paciente/AgregarPlan',[PlanAnaliticoController::class, 'index'])->name('index.Plan');
Route::post('/Paciente/AgregarPlan/fisioterapia',[ PlanAnaliticoController::class, 'create'])->name('create.Plan');
Route::post('/Paciente/AgregarPlan/fisioterapia/Actualizar', [PlanAnaliticoController::class, 'update'])->name('update.Formulario');
Route::post('/Paciente/AgregarPlan/fisioterapia/Eliminar', [PlanAnaliticoController::class, 'destroy'])->name('destroy.Plan');

//Analisis Marcha
Route::post('/Paciente/AgregarAnalisisMarcha',[AnalisisMarchaController::class, 'index'])->name('index.AnalisisMarcha');
Route::post('/Paciente/AgregarAnalisisMarcha/fisioterapia',[ AnalisisMarchaController::class, 'create'])->name('create.AnalisisMarcha');
Route::post('/Paciente/AgregarAnalisisMarcha/fisioterapia/Actualizar', [AnalisisMarchaController::class, 'update'])->name('update.AnalisisMarcha');
Route::post('/Paciente/AgregarAnalisisMarcha/fisioterapia/Eliminar', [AnalisisMarchaController::class, 'destroy'])->name('destroy.AnalisisMarcha');


//end rutas Fisioterapia
