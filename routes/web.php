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


//historial 
Route::get('/historial', [HistorialClinicoController::class, 'store'])->name('historial.store');
Route::post('/historial/Actualizar', [HistorialClinicoController::class, 'update'])->name('historial.update');

//Rutas Citas
Route::get('/calendario', [CitaController::class, 'calendar'])->name('cita.calendar');
Route::get('/Doctores', [CitaController::class, 'CitasDoctores'])->name('Doctor.calendar');
Route::post('/ActualizarCita', [CitaController::class, 'update'])->name('cita.update');
Route::post('/eventos', [CitaController::class, 'store'])->name('cita.store');

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

//Generar pdfs 
Route::get('/pdf',function () {
   $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML('<!DOCTYPE html>
    <html>
    <head>
      <title>Historial Clínico</title>
      <style>
        body {
          font-family: Arial, sans-serif;
        }
        h1 {
          text-align: center;
        }
        table {
          width: 90%;
          border-collapse: collapse;
        }
        th, td {
          padding: 5px;
          text-align: left;
          border-bottom: 1px solid #ddd;
        }
        h4{

          text-align: center;
        
        }
        .checkbox-container {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.checkbox-container input[type="checkbox"] {
  margin-right: 10px;
}

.checkbox-label {
  font-weight: bold;
}

.checkbox-label span {
  color: #888;
  font-weight: normal;
}

.checkbox-container input[type="checkbox"]:checked + .checkbox-label {
  color: #2196F3;
}

.checkbox-container input[type="checkbox"]:checked + .checkbox-label span {
  color: #555;
  text-decoration: line-through;
}

      </style>
    </head>
    <body>
      <h4>Clínica Almendros
     </h4>
     <h4>Unidad Médico Quirúrgica</h4>
      <h1>Historia Clínica</h1>
      <table>
        <tr>
        <th>No.Expediente:</th>
        <td>1</td>

        </tr>
      </table>
      
      <h2>Datos del Paciente</h2>
      <table>
        
        <tr>
        <th>Apellidos:</th>
        <td>John Doe</td>
        <th>Nombre:</th>
        <td>01/01/1990</td>
        </tr>
        <tr>
         <th>Edad:</th>
         <td>Masculino</td>
         <th>Sexo:</th>
         <td>Masculino</td>
         <th>Edo.civil:</th>
         <td>Soltero</td>
         <th>Religion:</th>
         <td>Cristiano</td>


        </tr>
        <tr>
          <th>Lugar de origen:</th>
          <td>Oaxaca</td>
          <th>Ocupación:</th>
          <td>Mecanico</td>
        </tr>
        <tr>
        
          <th>Domicilio:</th>
          <td>john@example.com</td>
          <th>Teléfono:</th>
          <td>1234567890</td>
        </tr>
      </table>
      
      <h2>ANTECEDENTES HEREDOFAMILIARES:										
      </h2>
      <table>
        <tr>
          <th>Madre con :</th>
          <th>
          
          <input type="checkbox" id="miCheckbox" name="miCheckbox" value="valor_del_checkbox" checked>
          <label for="miCheckbox">Dm</label>
          <input type="checkbox" id="miCheckbox" name="miCheckbox" value="valor_del_checkbox" checked>
          <label for="miCheckbox">HAS</label>
          <input type="checkbox" id="miCheckbox" name="miCheckbox" value="valor_del_checkbox" checked>
          <label for="miCheckbox">CA</label>
          <input type="checkbox" id="miCheckbox" name="miCheckbox" value="valor_del_checkbox" checked>
          <label for="miCheckbox">MADRE FALLECIDA</label>
          <input type="checkbox" id="miCheckbox" name="miCheckbox" value="valor_del_checkbox" checked>
          <label for="miCheckbox">SI</label>
          <input type="checkbox" id="miCheckbox" name="miCheckbox" value="valor_del_checkbox" >
          <label for="miCheckbox">NO</label>
          <th>Causas :</th>
          <td>paro resperiratorio</td>
          </th>
        </tr>
        <tr>
            <th>Padre con :</th>
            <th>
            
            <input type="checkbox" id="miCheckbox" name="miCheckbox" value="valor_del_checkbox" checked>
            <label for="miCheckbox">Dm</label>
            <input type="checkbox" id="miCheckbox" name="miCheckbox" value="valor_del_checkbox" checked>
            <label for="miCheckbox">HAS</label>
            <input type="checkbox" id="miCheckbox" name="miCheckbox" value="valor_del_checkbox" checked>
            <label for="miCheckbox">CA</label>
            <input type="checkbox" id="miCheckbox" name="miCheckbox" value="valor_del_checkbox" checked>
            <label for="miCheckbox">MADRE FALLECIDA</label>
            <input type="checkbox" id="miCheckbox" name="miCheckbox" value="valor_del_checkbox" checked>
            <label for="miCheckbox">SI</label>
            <input type="checkbox" id="miCheckbox" name="miCheckbox" value="valor_del_checkbox" >
            <label for="miCheckbox">NO</label>
            <th>Causas :</th>
            <td>paro resperiratorio</td>
            </th>
          </tr>
        <tr>
          <td>01/01/2022</td>
          <td>Consulta inicial</td>
          <td>Gripe</td>
          <td>Reposo y medicación</td>
        </tr>
        <tr>
          <td>15/02/2022</td>
          <td>Control de seguimiento</td>
          <td>Recuperado de la gripe</td>
          <td>Ninguno</td>
        </tr>
        <!-- Agrega más filas según sea necesario -->
      </table>
    </body>
    </html>');
   /* $pdf2->loadHTML('<!DOCTYPE html>
    <html>
    <head>
      <title>Nota Médica</title>
      <style>
        body {
          font-family: Arial, sans-serif;
        }
        h1 {
          text-align: center;
        }
        .patient-info {
          margin-bottom: 20px;
        }
        .section-title {
          font-size: 18px;
          font-weight: bold;
          margin-bottom: 10px;
        }
        .section-content {
          margin-bottom: 20px;
        }
        .section-content p {
          margin: 0;
        }
      </style>
    </head>
    <body>
      <h1>Nota Médica</h1>
      
      <div class="patient-info">
        <h2>Datos del Paciente</h2>
        <div class="section-content">
          <p><strong>Nombre:</strong> John Doe</p>
          <p><strong>Fecha de nacimiento:</strong> 01/01/1990</p>
          <p><strong>Género:</strong> Masculino</p>
          <p><strong>Teléfono:</strong> 1234567890</p>
          <p><strong>Email:</strong> john@example.com</p>
        </div>
      </div>
      
      <div class="medical-note">
        <h2>Nota Médica</h2>
        <div class="section-content">
          <div class="section-title">Motivo de la consulta:</div>
          <p>El paciente se presenta con síntomas de fiebre y dolor de garganta.</p>
          
          <div class="section-title">Examen físico:</div>
          <p>Se observa inflamación en la garganta y fiebre de 38.5°C.</p>
          
          <div class="section-title">Diagnóstico:</div>
          <p>Amigdalitis aguda.</p>
          
          <div class="section-title">Tratamiento recomendado:</div>
          <ul>
            <li>Antibiótico: Amoxicilina 500mg, 3 veces al día durante 10 días.</li>
            <li>Analgesia: Paracetamol 500mg, cada 6 horas según necesidad para el dolor y la fiebre.</li>
            <li>Reposo en cama y aumento de la ingesta de líquidos.</li>
          </ul>
        </div>
      </div>
    </body>
    </html>
    ');*/
    return $pdf->stream();
});
//Pdfs
Route::get('/imprimir-pdf', [PDFController::class, 'imprimirPDF']);
Route::post('/Historial-pdf', [DoctorController::class, 'HistorialPacientePDF'])->name('Historial.pdf');
Route::post('/Consentimeinto-pdf', [DoctorController::class, 'ConsentimientoPDF'])->name('Consentimeinto.pdf');
Route::post('/Receta-pdf', [DoctorController::class, 'RecetaPDF'])->name('Receta.pdf');

