@extends('layouts.main')
@section('title', 'Historial')
@section('linkAuth')
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link href="../src/plugins/src/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />

    <link href="../src/plugins/css/light/fullcalendar/custom-fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css">

    <link href="../src/plugins/css/dark/fullcalendar/custom-fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL STYLE -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="../src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/light/components/tabs.css" rel="stylesheet" type="text/css" />

    <link href="../src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
    <link href="../src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../src/assets/css/light/forms/switches.css">

    <link href="../src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../src/assets/css/dark/forms/switches.css">
    .bold {
    font-weight: bold;
    }
@endsection

@section('content')
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
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
                            <li class="breadcrumb-item active" aria-current="page">Historial del paciente</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->
                <!--calendario-->
                <div class="row layout-top-spacing layout-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-md-12">

                        <p>{{ $valorSeleccionado }}</p>
                        <div id="tabsWithIcons" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Historial clinico {{ $valorSeleccionado }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area rounded-pills-icon">

                                    <ul class="nav nav-pills mb-4 mt-3  justify-content-center" id="rounded-pills-icon-tab"
                                        role="tablist">
                                        <li class="nav-item ml-2 mr-2">
                                            <a class="nav-link mb-2 active text-center" id="rounded-pills-icon-home-tab"
                                                data-bs-toggle="pill" href="#rounded-pills-icon-home" role="tab"
                                                aria-controls="rounded-pills-icon-home" aria-selected="true"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-user">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg>Datos del Paciente</a>
                                        </li>
                                        <li class="nav-item ml-2 mr-2">
                                            <a class="nav-link mb-2 text-center" id="rounded-pills-icon-profile-tab"
                                                data-bs-toggle="pill" href="#rounded-pills-icon-profile" role="tab"
                                                aria-controls="rounded-pills-icon-profile" aria-selected="false"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-inbox">
                                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                                    <path
                                                        d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                                    </path>
                                                </svg>Historial Clinico </a>
                                        </li>

                                        <li class="nav-item ml-2 mr-2">
                                            <a class="nav-link mb-2 text-center" id="rounded-pills-icon-contact-tab"
                                                data-bs-toggle="pill" href="#rounded-pills-icon-contact" role="tab"
                                                aria-controls="rounded-pills-icon-contact" aria-selected="false"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-file-text">
                                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                    </path>
                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                    <line x1="16" y1="13" x2="8" y2="13">
                                                    </line>
                                                    <line x1="16" y1="17" x2="8" y2="17">
                                                    </line>
                                                    <polyline points="10 9 9 9 8 9"></polyline>
                                                </svg> Antecedentes Ginecobstrecticos</a>
                                        </li>

                                        <li class="nav-item ml-2 mr-2">
                                            <a class="nav-link mb-2 text-center" id="rounded-pills-icon-settings-tab"
                                                data-bs-toggle="pill" href="#rounded-pills-icon-settings" role="tab"
                                                aria-controls="rounded-pills-icon-settings" aria-selected="false"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-file-text">
                                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                    </path>
                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                    <line x1="16" y1="13" x2="8" y2="13">
                                                    </line>
                                                    <line x1="16" y1="17" x2="8" y2="17">
                                                    </line>
                                                    <polyline points="10 9 9 9 8 9"></polyline>
                                                </svg> Antecedentes Patologicos</a>
                                        </li>
                                        <li class="nav-item ml-2 mr-2">
                                            <a class="nav-link mb-2 text-center" id="rounded-pills-icon-settings-tab"
                                                data-bs-toggle="pill" href="#rounded-pills-icon-Estudios" role="tab"
                                                aria-controls="rounded-pills-icon-settings" aria-selected="false"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-droplet">
                                                    <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                                                </svg>Estudios Del paciente</a>
                                        </li>
                                        <li class="nav-item ml-2 mr-2">
                                            <a class="nav-link mb-2 text-center" id="rounded-pills-icon-settings-tab"
                                                data-bs-toggle="pill" href="#rounded-pills-icon-Nota" role="tab"
                                                aria-controls="rounded-pills-icon-settings" aria-selected="false"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-file-plus">
                                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                    </path>
                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                    <line x1="12" y1="18" x2="12" y2="12">
                                                    </line>
                                                    <line x1="9" y1="15" x2="15" y2="15">
                                                    </line>
                                                </svg>Notas post quirurgica</a>
                                        </li>
                                        <li class="nav-item ml-2 mr-2">
                                            <a class="nav-link mb-2 text-center" id="rounded-pills-icon-settings-tab"
                                                data-bs-toggle="pill" href="#rounded-pills-icon-Notas" role="tab"
                                                aria-controls="rounded-pills-icon-settings" aria-selected="false"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-file-plus">
                                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                    </path>
                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                    <line x1="12" y1="18" x2="12" y2="12">
                                                    </line>
                                                    <line x1="9" y1="15" x2="15" y2="15">
                                                    </line>
                                                </svg>Notas</a>
                                        </li>
                                        <li class="nav-item ml-2 mr-2">
                                            <a class="nav-link mb-2 text-center" id="rounded-pills-icon-settings-tab"
                                                data-bs-toggle="pill" href="#rounded-pills-icon-Ex" role="tab"
                                                aria-controls="rounded-pills-icon-settings" aria-selected="false"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-users">
                                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="9" cy="7" r="4"></circle>
                                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                </svg>Exploraciones Fisicas</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="rounded-pills-icon-tabContent">
                                        <!--Boton para activar Edicion --->
                                        <div class="switch form-switch-custom switch-inline form-switch-success">
                                            <input class="switch-input" type="checkbox" role="switch"
                                                id="form-custom-switch-success">
                                            <label class="switch-label" for="form-custom-switch-success">Editar Datos
                                            </label>
                                        </div>
                                        <!---Boton-end-->
                                        <div class="tab-pane fade show active" id="rounded-pills-icon-home"
                                            role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">
                                            <!---Datos Paciente-->
                                            @if($Paciente==null)
                                            <div class="widget-content widget-content-area">
                                                <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4" role="alert">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                                                    <strong>Lo sentimos !</strong> No Hay registros disponibles para el paciente.
                                                </div>
                                                
                                            </div>
                                            @else
                                            <form class="user" method="POST" action="{{ route('paciente.update') }}">

                                                @csrf
                                                <h1>Datos del paciente </h1>

                                                <div class="row mb-4">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Identificador Del
                                                            paciente</label>
                                                        <input type="text" class="form-control bold" id="bold"
                                                            placeholder="Identificador del Paciente " name="Identificador"
                                                            value="{{ $Paciente->SS }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Doctor</label>
                                                        <input type="text" class="form-control bold" id="bold"
                                                            placeholder="Identificador del Doctor" name="Doctor"
                                                            id="Doctor"value="{{ $Paciente->PacienteDoctor }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Nombre del paciente</label>
                                                        <input type="text" class="form-control "
                                                            placeholder="Nombre del paciente " name="Nombre"
                                                            value="{{ $Paciente->Nombre }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Apellido del paciente</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Apellido del paciente" name="Apellido"
                                                            value="{{ $Paciente->Apellido }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Edad del paciente</label>
                                                        <select class="form-control selects" name="Edad">
                                                            <option value="{{ $Paciente->Edad }}">{{ $Paciente->Edad }}
                                                            </option>
                                                            @for ($i = 1; $i <= 100; $i++)
                                                                <option value="{{ $i }}">{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Sexo del Paciente</label>
                                                        <select class="form-control selects" name="Sexo">
                                                            <option value={{ $Paciente->Sexo }}>
                                                                @if ($Paciente->Sexo == 'M')
                                                                    {{ 'Masculino' }}
                                                                @endif
                                                                @if ($Paciente->Sexo == 'F')
                                                                    {{ 'Femenino' }}
                                                                @endif
                                                            </option>

                                                            <option value="M">Masculino</option>
                                                            <option value="F">Femenino</option>

                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Estado civil del
                                                            paciente</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Estado civil del paciente " name="Estado_civil"
                                                            value="{{ $Paciente->Estado_civil }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Origen del paciente</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Origen el paciente" name="Origen"
                                                            value="{{ $Paciente->Origen }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Ocupacion del paciente</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Ocupacion del paciente" name="Ocupacion"
                                                            value="{{ $Paciente->Ocupacion }}">
                                                    </div>


                                                </div>
                                                <div class="row mb-4">

                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Direccón del paciente</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Direccion del paciente" name="Direccion"
                                                            value="{{ $Paciente->Direccion }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Telefono del paciente</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Telefono del paciente" name="Telefono"
                                                            value="{{ $Paciente->Telefono }}">

                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Religión del paciente</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Religion del paciente" name="Religion"
                                                            value="{{ $Paciente->Religion }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Escolaridad </label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Escolaridad del paciente" name="Escolaridad"
                                                            value="{{ $Paciente->Escolaridad }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Fecha de Ingreso</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="FechaIngreso" name="FechaIngreso"
                                                            value="{{ $Paciente->FechaIngreso }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Fecha de Salida</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="FechaIngreso" name="FechaSalida"
                                                            value="{{ $Paciente->FechaSalida }}">
                                                    </div>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                        
                                                    <button type="submit" class="btn btn-success  btn-rounded mb-2 me-4  btn-add-event Hola"
                                                        id="Hola2" style="display: none;">Actualizar</button>
                                                    </form>
                                                        <form class="user" method="POST" action="{{ route('paciente.destroy', ['id'=>$Paciente->SS])}}">
                                                        @csrf
                                                    <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola"
                                                        id="Hola" style="display: none;">Eliminar</button>
                                                    </form>
                                                    <form class="user" method="GET" action="{{ route('paciente.index')}}">
                                                        @csrf
                                                    <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                                        id="Hola" style="display: none;">Agregar Paciente</button>
                                                    </form>
                                                </div>
                                            <!--End-Datos-Paciente-->
                                            @endif

                                        </div>

                                        <div class="tab-pane fade" id="rounded-pills-icon-profile" role="tabpanel"
                                            aria-labelledby="rounded-pills-icon-profile-tab">
                                            @if($Historiales->isEmpty())

                                            <div class="widget-content widget-content-area">
                                                <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4" role="alert">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                                                    <strong>Lo sentimos !</strong> No Hay registros disponibles para el paciente.
                                                </div>

                                                <form class="user" method="POST" action="{{ route('historial.Formulario', ['id'=>$Paciente->SS])}}">
                                                    @csrf
                                                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                                    id="Hola" style="display: none;">Agregar Historial</button>
                                                </form>
                                            </div>
                                           
                                                
                                            @else
                                                
                                        
                                            @foreach ($Historiales as $Historial)
                                                <!--- Historial-->

                                                <form class="user" method="POST"
                                                    action="{{ route('historial.update') }}">
                                                    @csrf
                                                    <h2> ANTECEDENTES HEREDOFAMILARES</h2>
                                                    <div class="row mb-4">

                                                        <div class="col">
                                                            <label for="formGroupExampleInput"> HISTORIAL </label>
                                                            <input type="text" class="form-control bold "
                                                                placeholder="Identificador " name="Identificador"
                                                                value="{{ $Historial->idHIstorial_clinico }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">PACIENTE </label>

                                                            <input type="text" class="form-control bold"
                                                                placeholder="Numero de paciente" name="Paciente"
                                                                value="{{ $Historial->PacienteSS }}">
                                                        </div>


                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">DIABETES MELLITUS
                                                                (DM)
                                                            </label>
                                                            <select class="form-control" name="DM">
                                                                <option value="{{ $Historial->DM }}">
                                                                    @if ($Historial->DM == '1')
                                                                        Si
                                                                        @endif @if ($Historial->DM == '0')
                                                                            No
                                                                        @endif
                                                                </option>
                                                                <option value="1">Si</option>
                                                                <option value="0">No</option>

                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">HIPERTENSIÓN ARTERIAL
                                                                SISTÉMICA (HAS)</label>
                                                            <select class="form-control" name="HAS">
                                                                <option value="{{ $Historial->HAS }}">
                                                                    @if ($Historial->HAS == '1')
                                                                        Si
                                                                        @endif @if ($Historial->HAS == '0')
                                                                            No
                                                                        @endif
                                                                </option>
                                                                <option value="1">Si</option>
                                                                <option value="0">No</option>

                                                            </select>
                                                        </div>
                                                        <div class="col">

                                                            <label for="formGroupExampleInput"> CANCER (CA)</label>
                                                            <select class="form-control" name="CA">
                                                                <option value="{{ $Historial->CA }}">
                                                                    @if ($Historial->CA == '1')
                                                                        Si
                                                                        @endif @if ($Historial->CA == '0')
                                                                            No
                                                                        @endif
                                                                </option>
                                                                <option value="1">Si</option>
                                                                <option value="0">No</option>

                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">MADRE FALLECIDA</label>
                                                            <select class="form-control" name="MF">
                                                                <option value="{{ $Historial->MFALLECIDA }}">
                                                                    {{ $Historial->MFALLECIDA }}</option>
                                                                <option value="Si">Si</option>
                                                                <option value="No">No</option>

                                                            </select>
                                                        </div>
                                                         <div class="col">
                                                            <label for="formGroupExampleInput">DIABETES MELLITUS
                                                                (DM)
                                                            </label>
                                                            <select class="form-control" name="PDM">
                                                                <option value="{{ $Historial->PDM }}">
                                                                    @if ($Historial->PDM == '1')
                                                                        Si
                                                                        @endif @if ($Historial->PDM == '0')
                                                                            No
                                                                        @endif
                                                                </option>
                                                                <option value="1">Si</option>
                                                                <option value="0">No</option>

                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">HIPERTENSIÓN ARTERIAL
                                                                SISTÉMICA (HAS)</label>
                                                            <select class="form-control" name="PHAS">
                                                                <option value="{{ $Historial->PHAS }}">
                                                                    @if ($Historial->PHAS == '1')
                                                                        Si
                                                                        @endif @if ($Historial->PHAS == '0')
                                                                            No
                                                                        @endif
                                                                </option>
                                                                <option value="1">Si</option>
                                                                <option value="0">No</option>

                                                            </select>
                                                        </div>
                                                        <div class="col">

                                                            <label for="formGroupExampleInput"> CANCER (CA)</label>
                                                            <select class="form-control" name="PCA">
                                                                <option value="{{ $Historial->PCA }}">
                                                                    @if ($Historial->PCA == '1')
                                                                        Si
                                                                        @endif @if ($Historial->PCA == '0')
                                                                            No
                                                                        @endif
                                                                </option>
                                                                <option value="1">Si</option>
                                                                <option value="0">No</option>

                                                            </select>
                                                        </div>
                                                       
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">PADRE FALLECIDO</label>
                                                            <select class="form-control" name="PF">
                                                                <option value="{{ $Historial->PFALLECIDA }}">
                                                                    {{ $Historial->PFALLECIDA }}</option>
                                                                <option value="Si">Si</option>
                                                                <option value="No">No</option>

                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">CAUSAS</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="CAUSAS DE LA MUERTE PADRE Y MADRE "
                                                                name="CAM" value="{{ $Historial->CAUSAS }}">
                                                        </div>

                                                    </div>
                                                    <h2> ANTECEDENTES PERSONALES NO PATOLOGICOS </h2>
                                                    <div class="row mb-4">
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">ALERGIAS 
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="ALERGIAS  " name="ALERGIAS"
                                                                value="{{ $Historial->ALERGIAS }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">ALERGIAS POR ALIMENTOS
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="ALERGIAS POR ALIMENTOS " name="AL"
                                                                value="{{ $Historial->ALIMENTOS }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">ALERGIAS POR SUSTANCIAS
                                                                QUIMICAS </label>

                                                            <input type="text" class="form-control"
                                                                placeholder="ALERGIAS POR SUSTANCIAS QUIMICAS"
                                                                name="ALS" value="{{ $Historial->SUSTANCIAS_Q }}">
                                                        </div>


                                                    </div>
                                                    <div class="row mb-4">

                                                        <div class="col">
                                                            <label for="formGroupExampleInput">TIENE CIRUJIAS PREVIAS
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="CIRUJIAS PREVIAS " name="CP"
                                                                value="{{ $Historial->CIRUJIAS_P }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput"> TRANSFUCIONES </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="TRANSFUCIONES" name="TF"
                                                                value="{{ $Historial->TRANSFUCIONES }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">FRACTURAS ACTUALES O PREVIAS
                                                            </label>

                                                            <input type="text" class="form-control"
                                                                placeholder="ACTUALES O PREVIAS" name="FP"
                                                                value="{{ $Historial->FRACTURAS }}">
                                                        </div>


                                                    </div>

                                                    <div class="row mb-4">

                                                        <div class="col">
                                                            <label for="formGroupExampleInput"> ALCHOLICO </label>
                                                            <select class="form-control" name="ALP">
                                                                <option value="{{ $Historial->ALCHOLISMO }}">
                                                                    @if ($Historial->ALCHOLISMO == '1')
                                                                        Si
                                                                        @endif @if ($Historial->ALCHOLISMO == '0')
                                                                            No
                                                                        @endif
                                                                </option>
                                                                <option value="1">Si</option>
                                                                <option value="0">No</option>

                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput"> TABAQUISMO </label>
                                                            <select class="form-control" name="TB">
                                                                <option value="{{ $Historial->TABASQUISMO }}">
                                                                    @if ($Historial->TABASQUISMO == '1')
                                                                        Si
                                                                        @endif @if ($Historial->TABASQUISMO == '0')
                                                                            No
                                                                        @endif
                                                                </option>
                                                                <option value="1">Si</option>
                                                                <option value="0">No</option>

                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">DROGAS </label>
                                                            <select class="form-control" name="DR">
                                                                <option value="{{ $Historial->DROGAS }}">
                                                                    @if ($Historial->DROGAS == '1')
                                                                        Si
                                                                        @endif @if ($Historial->DROGAS == '0')
                                                                            No
                                                                        @endif
                                                                </option>
                                                                <option value="1">Si</option>
                                                                <option value="0">No</option>

                                                            </select>
                                                        </div>
                                                    </form>
                                                    
                                                       
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                            
                                                        <button type="submit"
                                                            class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                                                            style="display: none;">Actualizar</button>
                                                            <form class="user" method="POST" action="{{ route('Historial.destroy', ['id'=>$Historial->idHIstorial_clinico])}}">
                                                                @csrf
                                                            <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola"
                                                                id="Hola" style="display: none;">Eliminar</button>
                                                            </form>
                                                            <form class="user" method="POST" action="{{ route('historial.Formulario', ['id'=>$Paciente->SS])}}">
                                                                @csrf
                                                            <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                                                id="Hola" style="display: none;">Agregar Historial</button>
                                                            </form>

                                                    </div>

                                               
                                            @endforeach
                                            @endif
                                            <!---End-Historial-->
                                        </div>
                                        <div class="tab-pane fade" id="rounded-pills-icon-contact" role="tabpanel"
                                            aria-labelledby="rounded-pills-icon-contact-tab">
                                            @if($Gineco->isEmpty())
                                            <div class="widget-content widget-content-area">
                                                <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4" role="alert">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                                                    <strong>Lo sentimos !</strong> No Hay registros disponibles para el paciente.
                                                </div>
                                                <form class="user" method="POST" action="{{ route('Gineco.Formulario',['id'=>$Paciente->SS])}}">
                                                    @csrf
                                                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                                    id="Hola" >Agregar Antecedente Ginecobstetrico</button>
                                                </form>
                                            
                                            </div>
                                            @else
                                            <h2> ANTECEDENTES Ginecobstrecticos </h2>
                                            @foreach ($Gineco as $Gine)
                                                <!--- Historial-->
                                                <form class="user" method="POST"
                                                    action="{{ route('Gineco.update') }}">
                                                    @csrf
                                                    <!--Antecedentes ginecologicos-->
                                                    <div class="row mb-4">

                                                        <div class="col">
                                                            <label for="formGroupExampleInput">IDENTIFICADOR DE ANALISIS
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Identificador del analisis" name="IDAG"
                                                                value="{{ $Gine->id_a_g }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">Identificador Del Paciente
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Identificador Del Paciente" name="IDPA"
                                                                value="{{ $Gine->fk_ag }}">

                                                        </div>

                                                    </div>

                                                    <div class="row mb-4">

                                                        <div class="col">
                                                            <label for="formGroupExampleInput">MENARCA </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Inicio de la menstruacion en años "
                                                                name="Menarca" value="{{ $Gine->Menarca }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">INCIO DE LA ACTIVIDAD SEXUAL
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="inicio de la vida sexual" name="IVSA"
                                                                value="{{ $Gine->Ivsa }}">

                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">NUMERO DE GESTAS </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Numero de gestas " name="gestas"
                                                                value="{{ $Gine->Gesta }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">NUMERO DE CESAREAS </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Numero de cesareas" name="Cesareas"
                                                                value="{{ $Gine->Paras }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">NUMERO DE ABORTOS</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Numero de Abortos" name="Abortos"
                                                                value="{{ $Gine->Aborto }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">NUMERO DE PARAS</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Numero de Partos" name="Partos"
                                                                value="{{ $Gine->Paras }}">
                                                        </div>
                                                    </div>
                                                </form>
                                                    <div class="modal-footer">
                                                        <form class="user" method="POST" action="{{ route('Gineco.destroy', ['id'=>$Gine->fk_ag])}}">
                                                            @csrf
                                                        <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola"
                                                            id="Hola" style="display: none;">Eliminar</button>
                                                        </form>
                                                        <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                                                            style="display: none;">Actualizar</button> 
                                                            <form class="user" method="POST" action="{{ route('Gineco.Formulario',['id'=>$Paciente->SS])}}">
                                                    @csrf
                                                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                                    id="Hola" >Agregar Antecedente Ginecobstetrico</button>
                                                </form>
                                                    </div>



                                                
                                               
                                            @endforeach
                                            <!-----end gine--->
                                            
                                            @endif

                                        </div>
                                        
                                        <div class="tab-pane fade" id="rounded-pills-icon-settings" role="tabpanel"
                                            aria-labelledby="rounded-pills-icon-settings-tab">
                                            @if($Patologicos->isEmpty())
                                            <div class="widget-content widget-content-area">
                                                <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4" role="alert">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                                                    <strong>Lo sentimos !</strong> No Hay registros disponibles para el paciente.
                                                
                                                </div>
                                                <form class="user" method="POST" action="{{ route('Pato.Formulario',['id'=>$Paciente->SS])}}">
                                                    @csrf
                                                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                                    id="Hola" style="display: none;">Agregar antecedente patologico</button>
                                                </form>
                                            </div>
                                            @else
                                            <h2> ANTECEDENTES NO PATOLOGICOS </h2>
                                            <!--Antecedentes patologicos-->
                                            @foreach ($Patologicos as $patologico)
                                                <form class="user" method="POST"
                                                    action="{{ route('APatologicos.store') }}">
                                                    @csrf


                                                    <div class="row mb-4">

                                                        <div class="col">
                                                            <label for="formGroupExampleInput">IDENTIFICADOR DE ANALISIS
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Identificador del analisis" name="IDAG"
                                                                value="{{ $patologico->id_a_p }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">Identificador Del Paciente
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Identificador Del Paciente" name="IDPA"
                                                                value="{{ $patologico->fk_ap }}">

                                                        </div>

                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">DIABETES MELITUS </label>
                                                            <select class="form-control" name="DMN">

                                                                <option value="{{ $patologico->Dm }}">
                                                                    @if ($patologico->Dm == '1')
                                                                        {{ 'Si' }}
                                                                    @endif
                                                                    @if ($patologico->Dm == '0')
                                                                        {{ 'No' }}
                                                                    @endif
                                                                </option>
                                                                <option value="1">Si</option>
                                                                <option value="0">No</option>

                                                            </select>
                                                        </div>

                                                        <div class="col">
                                                            <label for="formGroupExampleInput">TIEMPO DE EVOLUCION </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Evolucion de la diabetes  " name="DMTE"
                                                                value="{{ $patologico->DmTE }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">HIPERTENSIÓN ARTERIAL
                                                                SISTÉMICA </label>
                                                            <select class="form-control" name="HASN">
                                                                <option value="{{ $patologico->Has }}">
                                                                    @if ($patologico->Has == '1')
                                                                        {{ 'Si' }}
                                                                    @endif
                                                                    @if ($patologico->Has == '0')
                                                                        {{ 'No' }}
                                                                    @endif
                                                                </option>
                                                                <option value="1">Si</option>
                                                                <option value="0">No</option>

                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">TIEMPO DE EVOLUCION </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Evolucion" name="HASTE"
                                                                value="{{ $patologico->HasTe }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">INSUFICIENCIA RENAL AGUDA O
                                                                CRÓNICA </label>
                                                            <select class="form-control" name="IR">
                                                                <option value="{{ $patologico->Ir }}">
                                                                    @if ($patologico->Ir == '1')
                                                                        {{ 'Si' }}
                                                                    @endif
                                                                    @if ($patologico->Ir == '0')
                                                                        {{ 'No' }}
                                                                    @endif
                                                                </option>
                                                                <option value="1">Si</option>
                                                                <option value="0">No</option>

                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">TIEMPO DE EVOLUCION </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Evolucion" name="IrTe"
                                                                value="{{ $patologico->IrTe }}">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">

                                                        <div class="col">
                                                            <label for="formGroupExampleInput">OTRA </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Evolucion" name="OTRA"
                                                                value="{{ $patologico->Otra }}">
                                                        </div>
                                                    </div>
                                                     </form>
                                                    <div class="modal-footer">
                                                        
                                                        <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                                                            style="display: none;">Actualizar</button>
                                                            <form class="user" method="POST" action="{{ route('Pato.Formulario',['id'=>$Paciente->SS])}}">
                                                                @csrf
                                                            <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                                                id="Hola" style="display: none;">Agregar antecedente patologico</button>
                                                            </form>

                                                            <form class="user" method="POST" action="{{ route('Pato.destroy', ['id'=>$patologico->id_a_p])}}">
                                                                @csrf
                                                            <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola"
                                                                id="Hola" style="display: none;">Eliminar</button>
                                                            </form>
                                                        </div>
                                                    <!--end aPatologicos-->

                                               
                                            @endforeach
                                            @endif
                                        </div>
                                        <div class="tab-pane fade" id="rounded-pills-icon-Estudios" role="tabpanel"
                                            aria-labelledby="rounded-pills-icon-settings-tab">
                                            @if($Estudios->isEmpty())
                                            <div class="widget-content widget-content-area">
                                                <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4" role="alert">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                                                    <strong>Lo sentimos !</strong> No Hay registros disponibles para el paciente.
                                                
                                                </div>
                                                <form class="user" method="POST" action="{{ route('Estudios.Formulario',['id'=>$Paciente->SS])}}">
                                                    @csrf
                                                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                                    id="Hola" style="display: none;">Agregar estudio del paciente</button>
                                                </form>
                                            </div>
                                            @else
                                            <h2>Estudios del paciente </h2>
                                            <!--Antecedentes patologicos-->
                                            @foreach ($Estudios as $estudio)
                                                <form class="user" method="POST"
                                                    action="{{ route('Estudios.store') }}">
                                                    @csrf


                                                    <div class="row mb-4">

                                                        <div class="col">
                                                            <label for="formGroupExampleInput">IDENTIFICADOR DE ESTUDIO
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Identificador del analisis" name="IDAG"
                                                                value="{{ $estudio->pk_estudio }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">IDENTIFICADOR DEL PACIENTE
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Identificador Del Paciente" name="IDPA"
                                                                value="{{ $estudio->fk_e }}">


                                                        </div>

                                                        <div class="row mb-4">
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">HEMOGLOBINA
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="HEMOGLOBINA" name="HEMOGLOBINA"
                                                                    value="{{ $estudio->HEMOGLOBINA }}">
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">HEMATOCRITO</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="HEMATOCRITO " name="HEMATOCRITO"
                                                                    value="{{ $estudio->HEMATOCRITO  }}">
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">PLAQUETAS
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="PLAQUETAS" name="PLAQUETAS"
                                                                    value="{{ $estudio->PLAQUETAS }}">
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">GLUCOSA
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="GLUCOSA" name="GLUCOSA"
                                                                    value="{{ $estudio->GLUCOSA }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">UREA
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="UREA" name="UREA"
                                                                    value="{{ $estudio->UREA }}">
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">CREATININA</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="CREATININA " name="CREATININA"
                                                                    value="{{ $estudio->CREATININA  }}">
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">RX
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="RX" name="RX"
                                                                    value="{{ $estudio->RX }}">
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">USG
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="USG" name="USG"
                                                                    value="{{ $estudio->USG }}">
                                                            </div>
                                                        </div>
                                                    </form>
                                                        <div class="modal-footer">
                                                            
                                                            <button type="submit"
                                                                class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                                                                style="display: none;">Actualizar</button>
                                                                <form class="user" method="POST" action="{{ route('Estudios.Formulario',['id'=>$Paciente->SS])}}">
                                                                    @csrf
                                                                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                                                    id="Hola" style="display: none;">Agregar estudio del paciente</button>
                                                                </form>
                                                                <form class="user" method="POST" action="{{ route('Estudios.destroy', ['id'=>$estudio->pk_estudio])}}">
                                                                    @csrf
                                                                <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola"
                                                                    id="Hola" style="display: none;">Eliminar</button>
                                                                </form>
                                                        </div>
                                                    </div>
                                                        <!--end aPatologicos-->

                                                
                                            @endforeach
                                            @endif
                                        </div>


                                  
                                    <div class="tab-pane fade" id="rounded-pills-icon-Nota" role="tabpanel"
                                        aria-labelledby="rounded-pills-icon-settings-tab">
                                        @if($Notas_p->isEmpty())
                                        <div class="widget-content widget-content-area">
                                                <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4" role="alert">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                                                    <strong>Lo sentimos !</strong> No Hay registros disponibles para el paciente.
                                                
                                                </div>
                                                <form class="user" method="POST" action="{{ route('NotasPost.Formulario',['id'=>$Paciente->SS])}}">
                                                    @csrf
                                                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                                    id="Hola" style="display: none;">Agregar nota-post quirurgica</button>
                                                </form>                       
                                            </div>
                                        @else
                                        <h2>NOTAS POST QUIRURGICA </h2>
                                        <!--Antecedentes patologicos-->
                                        @foreach ($Notas_p as $np)
                                            <form class="user" method="POST" action="{{ route('NotasPost.store') }}">
                                                @csrf


                                                <div class="row mb-4">

                                                    <div class="col">
                                                        <label for="formGroupExampleInput">IDENTIFICADOR DE NOTAS
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Identificador del analisis" name="IDAG"
                                                            value="{{ $np->idNotaP }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">IDENTIFICADOR DEL PACIENTE
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Identificador Del Paciente" name="IDPA"
                                                            value="{{ $np->fk_npq }}">
                                                    </div>

                                                    <div class="row mb-4">
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">CIRUJIA PROGRAMADA </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="ciruja programada" name="PC"
                                                                value="{{ $np->ProgramacionC }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">CIRUJIA REALIZADA</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="CIRUJIA REALIZADA"
                                                                name="EJ"value="{{ $np->Ejecucion }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">HALLAZGOS </label>

                                                            <input type="text" class="form-control"
                                                                placeholder="Hallazgos"
                                                                name="HA"value="{{ $np->Hallazgos }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">COMPLICACIONES </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="COMPLICACIONES"
                                                                name="CO"value="{{ $np->Complicaciones }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">NOMBRE DEL CIRUJANO </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Nombre del cirujano "
                                                                name="NC"value="{{ $np->Nombre_Cirujano }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">NOMBRE DEL AYUDANTE </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Nombre del ayudante"
                                                                name="NAY"value="{{ $np->Nombre_Ayudante }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">NOMBRE DEL
                                                                INSTRUMENTISTA</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="nombre instrumentista"
                                                                name="NI"value="{{ $np->Nombre_Instrumentista }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">NOMBRE DEL
                                                                ANIESTESIOLOGO</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Nombre del aniestesiologo"
                                                                name="NAN"value="{{ $np->Nombre_Aniestesiologo }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">CIRCULANTE</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="circulante"
                                                                name="CIR"value="{{ $np->Circulante }}">
                                                        </div>
                                                        <!--end notaspost-->
                                                    
                                                        <div class="modal-footer">
                                                            
                                                            <button type="submit"
                                                                class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                                                                style="display: none;">Actualizar</button>
                                                            </form>
                                                            <form class="user" method="POST" action="{{ route('NotasPost.destroy', ['id'=>$np->fk_npq])}}">
                                                                @csrf
                                                            <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola"
                                                                id="Hola" style="display: none;">Eliminar</button>
                                                            </form>
                                                                <form class="user" method="POST" action="{{ route('NotasPost.Formulario',['id'=>$Paciente->SS])}}">
                                                                    @csrf
                                                                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                                                    id="Hola" style="display: none;">Agregar nota-post quirurgica</button>
                                                                </form>                       
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                            @endforeach
                                            @endif
                                            
                                    </div>
                                   
                                   


                               
                                

                       
                        <!--end--nota post quirurgica-->

                        <div class="tab-pane fade" id="rounded-pills-icon-Notas" role="tabpanel"
                        aria-labelledby="rounded-pills-icon-settings-tab">
                        @if($Notas->isEmpty())
                        <div class="widget-content widget-content-area">
                                                <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4" role="alert">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                                                    <strong>Lo sentimos !</strong> No Hay registros disponibles para el paciente.
                                                
                                                </div>
                                                  <form class="user" method="POST" action="{{ route('Notas.Formulario',['id'=>$Paciente->SS])}}">
                                                                    @csrf
                                                                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                                                    id="Hola" style="display: none;">Agregar nota-post quirurgica</button>
                                                                </form>    
                                            </div>
                        @else
                        <h2>NOTAS </h2>
                        <!--Antecedentes patologicos-->
                        @foreach ($Notas as $np)
                            <form class="user" method="POST" action="{{ route('Nota.store') }}">
                                @csrf


                                <div class="col">
                                    <label for="formGroupExampleInput">IDENTIFICADOR DE NOTAS
                                    </label>
                                    <input type="text" class="form-control"
                                        placeholder="Identificador del analisis" name="IDAG"
                                        value="{{ $np->pk_nota }}">
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">IDENTIFICADOR DEL PACIENTE
                                    </label>
                                    <input type="text" class="form-control"
                                        placeholder="Identificador Del Paciente" name="IDPA"
                                        value="{{ $np->fk_n }}">
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">NOTA </label>
                                        <input type="text" class="form-control"
                                            placeholder="cuerpo de la nota" name="NOT"
                                            value="{{ $np->Nota }}">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">TIPO DE NOTA</label>
                                        <input type="text" class="form-control"
                                            placeholder="TIPO DE NOTA" name="TIPO"
                                            value="{{ $np->Tipo }}">
                                    </div>

                                </div>
                                <!----- end Notas--->
                                <!--end notaspost-->
                                <div class="modal-footer">
                                      
                                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                                        style="display: none;">Actualizar</button>
                                         </form>
                                        <form class="user" method="POST" action="{{ route('Notas.Formulario',['id'=>$Paciente->SS])}}">
                                            @csrf
                                        <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                            id="Hola" style="display: none;">Agregar nota-post quirurgica</button>
                                        </form> 
                                         <form class="user" method="POST" action="{{ route('Notas.destroy', ['id'=>$np->fk_n ])}}">
                                                                @csrf
                                                            <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola"
                                                                id="Hola" style="display: none;">Eliminar</button>
                                                            </form>
                                </div>
                           
                        @endforeach
                        </div>
                        @endif
                    </div>
                   

                    <div class="tab-pane fade" id="rounded-pills-icon-Ex" role="tabpanel"
                    aria-labelledby="rounded-pills-icon-settings-tab">
                    @if($Exploraciones->isEmpty())
                   <div class="widget-content widget-content-area">
                                                <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4" role="alert">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                                                    <strong>Lo sentimos !</strong> No Hay registros disponibles para el paciente.
                                                
                                                </div>
                                                <form class="user" method="POST" action="{{ route('Exploracion.Formulario',['id'=>$Paciente->SS])}}">
                                                    @csrf
                                                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                                    id="Hola" style="display: none;">Agregar exploracion fisica del paciente</button>
                                                </form>   
                                            </div>
                    @else
                    @foreach ($Exploraciones as $Ex)
                            <form class="user" method="POST" action="{{ route('Exploracion.store') }}">
                                @csrf

                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        T/A </label>
                                    <select class="form-control" name="T/A">
                                        <option value="{{ $patologico->TA }}">
                                            @if ($patologico->TA== '1')
                                                {{ 'Si' }}
                                            @endif
                                            @if ($patologico->TA == '0')
                                                {{ 'No' }}
                                            @endif
                                        </option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        FC </label>
                                    <select class="form-control" name="FC">
                                        <option value="{{ $patologico->FC }}">
                                            @if ($patologico->FC== '1')
                                                {{ 'Si' }}
                                            @endif
                                            @if ($patologico->FC == '0')
                                                {{ 'No' }}
                                            @endif
                                        </option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        X1 </label>
                                    <select class="form-control" name="X1">
                                        <option value="{{ $patologico->X1 }}">
                                            @if ($patologico->X1== '1')
                                                {{ 'Si' }}
                                            @endif
                                            @if ($patologico->X1 == '0')
                                                {{ 'No' }}
                                            @endif
                                        </option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        FR </label>
                                    <select class="form-control" name="FR">
                                        <option value="{{ $patologico->FR }}">
                                            @if ($patologico->FR== '1')
                                                {{ 'Si' }}
                                            @endif
                                            @if ($patologico->FR == '0')
                                                {{ 'No' }}
                                            @endif
                                        </option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        X2 </label>
                                    <select class="form-control" name="X2">
                                        <option value="{{ $patologico->X2 }}">
                                            @if ($patologico->X2== '1')
                                                {{ 'Si' }}
                                            @endif
                                            @if ($patologico->X2 == '0')
                                                {{ 'No' }}
                                            @endif
                                        </option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                
                                <div class="col">
                                    <label for="formGroupExampleInput">IDENTIFICADOR DE Exploracion Fisica
                                    </label>
                                    <input type="text" class="form-control"
                                        placeholder="Identificador del Exploracion" name="IDAG"
                                        value="{{ $Ex->pk_Exploracion }}">
                                </div>

                                <div class="col">
                                    <label for="formGroupExampleInput">IDENTIFICADOR DEL DOCTOR
                                    </label>
                                    <input type="text" class="form-control"
                                        placeholder="Identificador Del Doctort" name="IDDOC"
                                        value="{{ $Ex->fk_e}}">
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">IDENTIFICADOR DEL PACIENTE </label>
                                        <input type="text" class="form-control"
                                            placeholder="Identificador del paciente" name="IDPA"
                                            value="{{ $Ex->fk_p }}">
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <label for="formGroupExampleInput">TEMPERATURA </label>
                                            <input type="text" class="form-control" placeholder="TEMPERATURA" name="TEMP" value="{{$Ex->TEMP}}">
                                        </div>
                                        <div class="col">
                                            <label for="formGroupExampleInput">PESO (KG) </label>
                                            <input type="text" class="form-control" placeholder="PESO (KG)" name="PESO" value="{{$Ex->PESO}}">
                                        </div>
                                        <div class="col">
                                            <label for="formGroupExampleInput">NOMBRE EXPLORACION </label>
                                            <input type="text" class="form-control" placeholder="Exploracion Cabeza" name="NEF" value="{{$Ex->Nombre_ef}}">
                                        </div>
                                         <div class="col">
                                             <label for="formGroupExampleInput">CABEZA </label>
                                             <input type="text" class="form-control" placeholder="Exploracion Cabeza" name="CAEF" value="{{$Ex->Cabeza_ef}}">
                                         </div>
                                         <div class="col">
                                             <label for="formGroupExampleInput">CUELLO</label>
                                             <input type="text" class="form-control" placeholder="Exploracion cuello  " name="CUEF" value="{{$Ex->Cuello_ef}}">
                                         </div>
                                         <div class="col">
                                             <label for="formGroupExampleInput">ABDOMEN </label>
                                             <input type="text" class="form-control" placeholder="Exploracion abdomen " name="ABEF" value="{{$Ex->Abdomen_ef}}">
                                         </div>
                                     </div>
                                     <div class="row mb-4">
                                        <div class="col">
                                            <label for="formGroupExampleInput">MIEMBRO PELVICO </label>
                                            <input type="text" class="form-control" placeholder="Exploracion miembro pelvico" name="MP" value="{{$Ex->Miembro_pelvico_ef}}">
                                        </div>
                                         <div class="col">
                                             <label for="formGroupExampleInput">MIEMBRO TORAXICO</label>
                                             <input type="text" class="form-control" placeholder="Exploracion miembro toraxico" name="MT" value="{{$Ex->Miembro_toraxico_ef}}">
                                         </div>
                                       
                                     </div>

                                </div>
                                <!----- end Notas--->
                                <!--end notaspost-->
                                <div class="modal-footer">
                                    
                                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4  btn-add-event Hola"
                                        style="display: none;">Actualizar</button>
                                    </form>
                                    <form class="user" method="POST" action="{{ route('Exploracion.destroy', ['id'=>$Ex->pk_Exploracion])}}">
                                        @csrf
                                    <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola"
                                        id="Hola" style="display: none;">Eliminar</button>
                                    </form>
                                        <form class="user" method="POST" action="{{ route('Exploracion.Formulario',['id'=>$Paciente->SS])}}">
                                            @csrf
                                        <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                            id="Hola" style="display: none;">Agregar Exploracion</button>
                                        </form>   
                                </div>
                            
                        @endforeach
                    </div>
                    @endif
            </div>

                    </div>
                </div>

            </div>
            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Indicaciones Medicas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                  <svg> ... </svg>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Receta.pdf', ['id' => $Paciente->SS]) }}" method="POST">
                    @csrf
                <div class="col">
                    <label for="formGroupExampleInput">Indicaciones Medicas </label>
                   
                        <span class="input-group-text">Indicaciones</span>
                        <textarea class="form-control"  name="Receta"></textarea>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i>Cancelar</button>
                <button type="submit" class="btn btn-primary">Generar</button>
            </div>
        </div>
    </div>
</form>
</div>
             <!--- end Modal receta--->

            
            <!---Modal consentimiento  -->
            <div id="rotateleftModal" class="modal animated rotateInDownLeft custo-rotateInDownLeft" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Datos Carta consentimiento</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                              <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-4">
                                <form action="{{ route('Consentimeinto.pdf', ['id' => $Paciente->SS]) }}" method="POST">
                                    @csrf
                                <div class="col">
                                    <label for="formGroupExampleInput">Nombre del representante legal, familiar o allegado:</label>
                                    <input type="text" class="form-control"
                                        placeholder="Nombre del representante legal:" name="Nombre">
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Domicilio del representante legal</label>
                                    <input type="text" class="form-control"
                                        placeholder="Domicilio del representante" name="Domicilio"
                                        >

                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Edad del representante familiar o allegado:</label>
                                    <select class="form-control selects" name="Edad">
                                        @for ($i = 1; $i <= 100; $i++)
                                            <option value="{{ $i }}">{{ $i }}
                                            </option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                                <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Calidad en la que llega el paciente</label>
                                    <input type="text" class="form-control"
                                        placeholder="Calidad en la que llega el paciente" name="Calidad"
                                        >
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Tratamiento  o procedimiento</label>
                                    <input type="text" class="form-control"
                                        placeholder="Tratamiento o procedimiento" name="Tratamiento"
                                        >
                                </div>
                            </div>

                                <div class="row mb-4">
                                <div class="col">
                                    <div class="col-sm-10 offset-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1" value="1" name="Revocar">
                                        <label class="form-check-label" for="gridCheck1">
                                          formato con revocacionde concentimiento
                                        </label>
                                    </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col-sm-10 offset-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1" value="1" name="NoAcepta">
                                        <label class="form-check-label" for="gridCheck1">
                                        El paciente se niega  arecibir el tratamiento
                                        </label>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer md-button">
                            <button class="btn" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i> cancelar</button>
                            <button type="submit" class="btn btn-primary">Generar</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        

            <!---end modal concentimiento-->
            <!---Modal receta--->


            
        </div>
        
        <form action="{{ route('Historial.pdf', ['id' => $Paciente->SS]) }}" method="POST">
            @csrf
            <!-- Resto de los campos del formulario -->
            <button  type="submit"class="btn btn-danger mb-2 me-4">Generar Historial PDF</button>
        </form>
        <div class="col-lg-6">
            
            <!-- Rotate in right modal -->
            <button type="button" class="btn btn-info mb-2 mr-2" data-bs-toggle="modal" data-bs-target="#rotateleftModal">Generar carta consentimiento</button>
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-primary mr-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Generar Receta
            </button>
        </div>
        <!--end tags--->
    </div>
    </div>

    <!-- Modal -->

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
    <script src="../src/plugins/src/highlight/highlight.pack.js"></script>

@endsection
