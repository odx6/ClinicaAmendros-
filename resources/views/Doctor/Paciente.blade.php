@extends('layouts.main')
@section('title', 'Historial')
@section('linkAuth')

    <link href="../src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css">


    <link href="../src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL STYLE -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="../src/assets/css/light/components/tabs.css" rel="stylesheet" type="text/css" />

    <link href="../src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="../src/assets/css/light/forms/switches.css">

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
                            <li class="breadcrumb-item"><a href="#">Usuario : {{auth()->user()->name}}
                           
                            <li class="breadcrumb-item active" aria-current="page"> Correo : {{auth()->user()->email}}</li>

                        </ol>
                    </nav>
                </div>
                <h1 style="text-align: center;">HISTORIA CLINICA DEL PACIENTE </h1>
                               <!-- /BREADCRUMB -->
                <!--calendario-->
                <div class="row layout-top-spacing layout-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-md-12">


                        <div id="tabsWithIcons" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Historial clínico {{ $valorSeleccionado }}</h4>
                                            <div class="tab-content" id="rounded-pills-icon-tabContent">
                                                <!--Boton para activar Edicion --->
                                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                                  <!--  <form class="user" method="POST"
                                                        action="{{ route('Paciente.historial-completo', ['id' => $valorSeleccionado]) }}">
                                                        @csrf
                                                        <button
                                                            class="btn btn-outline-secondary btn-rounded mb-2 me-4">Agregar
                                                            Historial Completo al paciente</button>
                                                    </form>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area rounded-pills-icon">
                                        @if(session('mensaje'))
 <div class="alert alert-icon-left alert-light-success alert-dismissible fade show mb-4" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" data-bs-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                        <strong> <strong>Exito!</strong> {{ session('mensaje') }}.
                                    </div>
@endif

                                        @include('Doctor.Menu.Header')


                                        <div class="tab-content" id="rounded-pills-icon-tabContent">
                                            <!--Boton para activar Edicion --->
                                            <div class="switch form-switch-custom switch-inline form-switch-success">
                                                <input class="switch-input" type="checkbox" role="switch"
                                                    id="form-custom-switch-success">
                                                <label class="switch-label" for="form-custom-switch-success">Editar Datos
                                                </label>
                                            </div>
                                            <!---Boton-end-->

                                            @include('Doctor.Menu.Paciente')
                                            @include('Doctor.Menu.Historial')
                                            @include('Doctor.Menu.Gineco')
                                            @include('Doctor.Menu.Patologicos')
                                            @include('Doctor.Menu.Estudios')
                                            @include('Doctor.Menu.NotasPos')
                                            @include('Doctor.Menu.Notas')
                                            @include('Doctor.Menu.Exploraciones')
                                        </div>
                                    </div>

                                </div>
                                <!-- Modal -->
                                @include('Doctor.Menu.Modal')
                                @include('Doctor.Menu.Modal2')

                            </div>




                            

                        </div>

                    </div>
                    <div class="modal-footer">
                    <!-- Rotate in right modal -->
                    <button type="button" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola" data-bs-toggle="modal"
                    data-bs-target="#rotateleftModal">Generar carta consentimiento</button>
                <form action="{{ route('Historial.pdf', ['id' => $Paciente->SS]) }}" method="POST">
                    @csrf
                    <!-- Resto de los campos del formulario -->
                    <button type="submit"class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Generar Historial
                        PDF</button>
                </form>

                <button type="button" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Generar Receta
                </button>
                <form action="{{ route('index.Consultas', ['pacientes' => $Paciente]) }}" method="GET">
                    @csrf
                    <!-- Resto de los campos del formulario -->
                    <button type="submit"class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola">Terminar Consulta</button>
                </form>


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

        <script src="../MisFunciones/Desactivar.js"></script>
        <!--  END CUSTOM SCRIPTS FILE  -->
        <script src="../src/plugins/src/highlight/highlight.pack.js"></script>

    @endsection
