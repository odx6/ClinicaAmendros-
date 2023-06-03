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
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Vista Doctores</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->
                   <!--calendario-->
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
                                    <h5 class="modal-title" id="exampleModalLabel">Agregar una nueva cita</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="{{ route('Doctor.historial') }}">
                                    @csrf
                                
                                <div class="modal-body">
    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="">
                                                <label class="form-label">Nombre del Doctor</label>
                                               <!-- <input id="event-title" type="text" class="form-control">-->
                                                <select class="form-control" name="DOCTOR" id="event-title">
                                                    @php
                                                   $id=auth()->user()->id;
                                                   $doctores =App\Models\Doctor::where('fk_user', '=', $id)->get();
                                        
                                                    @endphp
                                                    @foreach($doctores as $doctor)
                                                    <option value="{{ $doctor->DSS}}">{{ $doctor->ESPECIALIDAD }}</option>
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                        </div>
                                         <div class="col-md-12">
                                            <div class="">
                                                <label class="form-label">Nombre del pacente</label>
                                               <!-- <input id="event-title2" type="text" class="form-control">-->
                                                <select class="form-control" name="paciente" id="event-title2" >
                                                    @php
                                                    $pacientes =App\Models\Paciente::all();
                                        
                                                    @endphp
                                                    @foreach($pacientes as $paciente)
                                                    <option value="{{ $paciente->SS}}">{{ $paciente->Nombre}} {{ $paciente->Apellido}} </option>
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                        </div>
    
                                        <div class="col-md-12 ">
                                            <div class="">
                                                <label class="form-label">Ingresa La fecha de inicio y la hora</label>
                                                <input id="event-start-date" type="datetime-local" class="">
                                            </div>
                                        </div>
    
                                        <div class="col-md-12 ">
                                            <div class="">
                                                <label class="form-label">Ingresa la fecha que concluye la cita </label>
                                                <input id="event-end-date" type="datetime-local" class="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
    
                                            <div class="d-flex mt-4">
                                                <div class="n-chk">
                                                    <div class="form-check form-check-primary form-check-inline">
                                                        <input class="form-check-input" type="radio" name="event-level" value="Work" id="rwork">
                                                        <label class="form-check-label" for="rwork">Work</label>
                                                    </div>
                                                </div>
                                                <div class="n-chk">
                                                    <div class="form-check form-check-warning form-check-inline">
                                                        <input class="form-check-input" type="radio" name="event-level" value="Travel" id="rtravel">
                                                        <label class="form-check-label" for="rtravel">Travel</label>
                                                    </div>
                                                </div>
                                                <div class="n-chk">
                                                    <div class="form-check form-check-success form-check-inline">
                                                        <input class="form-check-input" type="radio" name="event-level" value="Personal" id="rPersonal">
                                                        <label class="form-check-label" for="rPersonal">Personal</label>
                                                    </div>
                                                </div>
                                                <div class="n-chk">
                                                    <div class="form-check form-check-danger form-check-inline">
                                                        <input class="form-check-input" type="radio" name="event-level" value="Importante" id="rImportant">
                                                        <label class="form-check-label" for="rImportant">Important</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn" data-bs-dismiss="modal">Cerrar</button>
                                    
                                    
                                    @if($pacientes->isEmpty() ||  $doctores->isEmpty() )
                                    
                                        
                                    @else
                                    <button type="button" class="btn btn-success btn-update-event" data-fc-event-public-id="">Actualizar una cita</button>
                                    <button type="button" class="btn btn-primary btn-add-event">Agregar Cita</button>
                                    <button type="submit" class="btn btn-primary btn-add-event" id="idConsulta">Consulta</button>
                                    @endif
                                </div>
                                
                            </form>
                            </div>
                        </div>
                    </div>
                  <!--end_Calendario-->

                </div>

            </div>

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