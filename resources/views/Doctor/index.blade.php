@extends('layouts.main')
@section('title','Doctor')
@section('linkAuth')
 <!-- BEGIN PAGE LEVEL STYLE -->
 <link href="../src/plugins/src/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />

<link href="../src/plugins/css/light/fullcalendar/custom-fullcalendar.css" rel="stylesheet" type="text/css" />
<link href="../src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css">

<link href="../src/plugins/css/dark/fullcalendar/custom-fullcalendar.css" rel="stylesheet" type="text/css" />
<link href="../src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css">
<!-- END PAGE LEVEL STYLE -->

@endsection

@section('content')
<!-- BEGIN LOADER -->
<div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->
@include('layouts.navbar')
@include('layouts.sidevar')
<div id="content" class="main-content">
<div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <!-- BREADCRUMB -->
                     <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Usuario : {{auth()->user()->name}}
                           
                            <li class="breadcrumb-item active" aria-current="page"> Correo : {{auth()->user()->email}}</li>

                        </ol>
                    </nav>
                </div>
                
                    </div>
                    <!-- /BREADCRUMB -->
                   <!--calendario-->
                     <h1 style="text-align: center;">AGENDA </h1>
                   <div class="row layout-top-spacing layout-spacing" id="cancel-row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="calendar-container">
                                <div class="calendar"></div>
                            </div>
                        </div>
                    </div>
                    <!--Carta Consentimiento -->
                    
                    <!--end Consentimiento-->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">AGREGAR UNA NUEVA CITA</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="{{ route('Doctor.historial') }}" class="needs-validation" novalidate>
                                    @csrf
                                
                                <div class="modal-body">
    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="">
                                                <label class="form-label">Nombre del Médico <span class="red-asterisk">*</span></label>
                                               <!-- <input id="event-title" type="text" class="form-control">-->
                                                <select class="form-control" name="DOCTOR" id="event-title" required>
                                                      

                                                    @php
                                                   $id=auth()->user()->id;
                                                   $doctores =App\Models\Doctor::where('fk_user', '=', $id)->get();
                                        
                                                    @endphp
                                                    @if($doctores->isEmpty())
                                                    <option selected disabled value="">no hay pacientes asignados a este medico </option>
                                                    @else
                                                    
                                                   
                                                    @foreach($doctores as $doctor)
                                                    <option value="{{ $doctor->DSS}}">{{ $doctor->Nombre.' '.$doctor->Apellidos.' '.$doctor->ESPECIALIDAD }}</option>
                                                    @endforeach
                                                    @endif
                                                    
                                                </select>
                                                <div class="valid-feedback">
                                            Datos correctos
                                         </div>
                                         <div class="invalid-feedback">
                                            selección del médico correcta
                                         </div>
                                            </div>
                                        </div>
                                         <div class="col-md-12">
                                            <div class="">
                                                <label class="form-label">Nombre del paciente </label>
                                               <!-- <input id="event-title2" type="text" class="form-control">-->
                                                <select class="form-control" name="paciente" id="event-title2" required >

                                                   
                                                     @foreach($doctores as $doctor)
                                                    @if ($doctor->Pacientes->count() > 0)
                                                    @foreach($doctor->Pacientes as $paciente)
                                                    <option value="{{ $paciente->SS}}">{{ $paciente->Nombre}} {{ $paciente->Apellido}} </option>
                                                    @endforeach
                                                    @else
                                                    <option selected disabled value="">no hay pacientes asignados a este medico </option>
                                                    @endif
                                                    @endforeach
                                                    
                                                </select>
<div class="valid-feedback">
                                            Datos correctos
                                         </div>
                                         <div class="invalid-feedback">
                                            selección del paciente correcta
                                         </div>
                                            </div>
                                        </div>
    
                                        <div class="col-md-12 ">
                                            <div class="">
                                                <label class="form-label">Ingresa La fecha de inicio y la hora</label>
                                                <input id="event-start-date" type="datetime-local" class="form-control" required>
                                                   <div class="valid-feedback">
                                            Datos correctos
                                         </div>
                                         <div class="invalid-feedback">
                                            Ingresa una fecha y hora correcta
                                         </div>
                                            </div>
                                        </div>
    
                                        
                                        
                                        
                                    </div>
                                    
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-rounded mb-2 me-4" data-bs-dismiss="modal">Cerrar</button>
                                    
                                 
                                    <button type="submit" class="btn btn-success  btn-rounded mb-2 me-4 btn-update-event" data-fc-event-public-id="">Actualizar una cita</button>
                                    <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4  btn-add-event">Agregar Cita</button>
                                    <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4  btn-add-event" id="idConsulta">Consulta</button>
                                     <button type="submit" class="btn btn-primary  btn-rounded mb-2 me-4 btn-delete-event" data-fc-event-public-id="">Cancelar cita</button>
                                   
                                </div>
                                
                            </form>
                            </div>
                        </div>
                    </div>
                  <!--end_Calendario-->

                </div>

            </div>
@include('layouts.ModalConfirmacion')
@include('layouts.PrimeraCitaDoctor')
@include('layouts.Alerta')
@include('layouts.footer')
</div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
@endsection
@section('Scripts')
  <!-- BEGIN PAGE LEVEL SCRIPTS -->
  <script src="../src/plugins/src/fullcalendar/fullcalendar.min.js"></script>
    <script src="../src/plugins/src/uuid/uuid4.min.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="../src/plugins/src/fullcalendar/Calendario-Doctor.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->

@endsection