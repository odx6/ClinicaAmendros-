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
Route::post('/Medicos', [DoctorController::class, 'Medico'])->name('Medicos.medico');

//Rutas Doctores
Route::get('/Doctor', [DoctorController::class, 'index'])->name('Doctor.index');
Route::Post('/Doctor/paciente', [DoctorController::class, 'HistorialPaciente'])->name('Doctor.historial');
Route::get('/Doctor/paciente/historial', [DoctorController::class, 'HistorialPaciente2'])->name('Paciente.historial');

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

