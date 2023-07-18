@extends('layouts.main')
@section('title','Home')
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
                                <li class="breadcrumb-item active" aria-current="page">{{auth()->user()->role}}</li>
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

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Agregar una nueva cita</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
<form class="needs-validation" novalidate id="foreverisa">
                                <div class="modal-body">
    
                                    <div class="row">
                                         <div class="col-md-12">
                                            <div class="form-control">
                                                <label class="form-label">Área</label>
                                               <!-- <input id="event-title" type="text" class="form-control">-->
                                                <select class="form-control event-title-area" name="Area" id="event-title-area" required >
                                                   <option selected disabled value="">Selecciona el área </option>
                                                    @php
                                                    $Areas =App\Models\Area::all();
                                        
                                                    @endphp
                                                    @foreach($Areas as $Area)
                                                    <option value="{{ $Area->IDAREA}}">{{ $Area->NOMBE_AREA }}</option>
                                                    @endforeach
                                                    
                                                </select>
                                                <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                         Selecciona un área valida
                                     </div>
                                            </div>
                                        <div class="col-md-12">
                                            <div class="form-control">
                                                <label class="form-label">Nombre del Doctor</label>
                                               <!-- <input id="event-title" type="text" class="form-control">-->
                                                <select class="form-control event-title" name="DOCTOR" id="event-title" required>
                                                <option selected disabled value="">Selecciona el medico </option>
                                                   
                                                    
                                                    
                                                </select>
                                                 <div class="valid-feedback">
                                        Selección correcta
                                     </div>
                                     <div class="invalid-feedback">
                                         Selecciona un médico
                                     </div>
                                            </div>
                                        </div>
                                         <div class="col-md-12">
                                            <div class="form-control">
                                                <label class="form-label">Nombre del paciente</label>
                                               <!-- <input id="event-title2" type="text" class="form-control">-->
                                                <select class="form-control" name="paciente" id="event-title2" required>
                                                     <option selected disabled value="">Selecciona el paciente </option>
                                                    @php
                                                    $pacientes =App\Models\Paciente::all();
                                        
                                                    @endphp
                                                    @foreach($pacientes as $paciente)
                                                    <option value="{{ $paciente->SS}}">{{ $paciente->Nombre}} {{ $paciente->Apellido}} </option>
                                                    @endforeach
                                                    
                                                </select>
                                                <div class="valid-feedback">
                                            Datos correctos
                                         </div>
                                         <div class="invalid-feedback">
                                            selecciona  un  paciente correcto
                                         </div>
                                            </div>
                                        </div>
    
                                        <div class="col-md-12 ">
                                            <div class="form-control">
                                                <label class="form-label">Ingresa La fecha de inicio y la hora</label>
                                                <input id="event-start-date" type="datetime-local" class="form-control"   placeholder="Fecha de la cita" required >
                                                <div class="valid-feedback">
                                            Datos correctos
                                         </div>
                                         <div class="invalid-feedback">
                                            Ingresa un fecha y hora correcta
                                         </div>
                                            </div>

                                           
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-success btn-update-event" data-fc-event-public-id="">Actualizar una cita</button>
                                    
                                    <button type="submit" class="btn btn-primary btn-add-event" id="btnAgregar">Agregar Cita</button>
                                    <button type="submit" class="btn btn-primary btn-delete-event" data-fc-event-public-id="">Cancelar cita</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                  <!--end_Calendario-->

                </div>

@include('layouts.ModalConfirmacion')
@include('layouts.PrimeraCita')

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
    <script src="../src/plugins/src/fullcalendar/custom-fullcalendar.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->

@endsection