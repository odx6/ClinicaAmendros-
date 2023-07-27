@extends('layouts.main')
@section('title', 'Agregar Consulta')
@section('linkAuth')
    <!-- BEGIN PAGE LEVEL STYLE -->

    <link href="../src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css">

    <link href="../src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL STYLE -->

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
                            <li class="breadcrumb-item active" aria-current="page">Agregar consulta </li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->
                <form method="POST" action="{{ route('create.ConsultasD') }}" class="user needs-validation" novalidate>
                    @csrf

                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="">
                                    <label class="form-label">Nombre del Médico</label>
                                    <!-- <input id="event-title" type="text" class="form-control">-->
                                    <select class="form-control" name="ConsultaDoctor" id="event-title" required>

                                        <option selected disabled value="">Seleccione un doctor </option>
                                         @php
                                            
                                            $Doctores = App\Models\Doctor::all();
                                            
                                        @endphp

                                        @foreach ($Doctores as $doctor)
                                            <option value="{{ $doctor->DSS }}"  >
                                                {{ $doctor->Nombre . ' ' . $doctor->Apellidos }}</option>
                                        @endforeach
                                    </select>
                                    <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                        selecion del médico correcta
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="">
                                    <label class="form-label">Nombre del pacente</label>
                                    <!-- <input id="event-title2" type="text" class="form-control">-->
                                    <select class="form-control" name="consultaPaciente" id="event-title2" required>

                                        <option selected disabled value="">Selecione Paciente </option>
                                        @php
                                            
                                            $Pacientes = App\Models\Paciente::all();
                                            
                                        @endphp

                                        @foreach ($Pacientes as $paciente)
                                            <option value="{{ $paciente->SS }}"  >
                                                {{ $paciente->Nombre . ' ' . $paciente->Apellido }}</option>
                                        @endforeach
                                    </select>
                                    <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                        selecion del paciente correcta
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="">
                                    <label class="form-label">Cita </label>
                                    <!-- <input id="event-title2" type="text" class="form-control">-->
                                    <select class="form-control" name="Consulta cita" id="event-title2" required>

                                        <option selected disabled value=""> Selecione una cita </option>
                                       
                                            @php
                                            
                                            $Citas = App\Models\Cita::all();
                                            
                                        @endphp

                                        @foreach ($Citas as $cita)
                                            <option value="{{ $cita->pk_cita }}"  >
                                                {{ $cita->inicio_c }}</option>
                                        @endforeach
                                    </select>
                                    <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                       Seleccione una cita 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="">
                                    <label class="form-label">Seleccione la secretaria</label>
                                    <!-- <input id="event-title" type="text" class="form-control">-->
                                    <select class="form-control" name="consultaSecretaria" id="event-title" required>

                                        <option selected disabled value=""> Selecione Secretaria </option>
                                        @php
                                            
                                            $secretarias = App\Models\Secretaria::all();
                                            
                                        @endphp

                                        @foreach ($secretarias as $secretaria)
                                            <option value="{{ $secretaria->pk_secretaria }}"  >
                                                {{ $secretaria->Nombre . ' ' . $secretaria->Apellidos }}</option>
                                        @endforeach

                                    </select>
                                    <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                        selecion una secretaria correcta 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 ">
                                <div class="">
                                    <label class="form-label">Monto a cobrar </label>
                                    <input  type="number" class="form-control" name="Monto" required value="">
                                    <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                        Ingresa un monto correcto
                                    </div>
                                </div>
                            </div>
                            



                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary mr-2" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Enviar datos
                                    </button>
                </form>
                    <!--end.Brad-->


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


@endsection
