@extends('layouts.main')
@section('title', 'ACtualizar Consulta')
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
                            <li class="breadcrumb-item active" aria-current="page">Editar consulta </li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->
                <form method="POST" action="{{ route('update.Consultas',['id'=>$consulta->pk_consulta]) }}" class="user needs-validation" novalidate>
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
                                            $id = auth()->user()->id;
                                            $doctores = App\Models\Doctor::where('fk_user', '=', $id)->get();
                                            
                                        @endphp

                                        @foreach ($doctores as $doctor)
                                            <option value="{{ $doctor->DSS }}" @if($consulta->fk_doctor==$doctor->DSS)selected @endif>
                                                {{ $doctor->Nombre . ' ' . $doctor->Apellidos . ' ' . $doctor->ESPECIALIDAD }}
                                            </option>
                                        @endforeach

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
                                    <label class="form-label">Nombre del paciente</label>
                                    <!-- <input id="event-title2" type="text" class="form-control">-->
                                    <select class="form-control" name="consultaPaciente" id="event-title2" required>

                                        <option selected disabled value="">Seleccione Paciente </option>
                                        @foreach ($doctores as $doctor)
                                            @if ($doctor->Pacientes->count() > 0)
                                                @foreach ($doctor->Pacientes as $paciente)
                                                    <option value="{{ $paciente->SS }}" @if($consulta->fk_paciente == $paciente->SS)selected @endif>{{ $paciente->Nombre }}
                                                        {{ $paciente->Apellido }} </option>
                                                @endforeach
                                            @endif
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

                                        <option selected disabled value=""> Seleccione una cita </option>
                                        @foreach ($doctores as $doctor)
                                            @if ($doctor->Citas->count() > 0)
                                                @foreach ($doctor->Citas as $citas)
                                                    <option value="{{ $citas->pk_cita }}" @if($consulta->fk_cita == $citas->pk_cita)selected @endif>{{ $citas->inicio_c }} </option>
                                                @endforeach
                                            @endif
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
                                            <option value="{{ $secretaria->pk_secretaria }}"  @if($consulta->fk_secre == $secretaria->pk_secretaria)selected @endif>
                                                {{ $secretaria->Nombre . ' ' . $secretaria->Apellidos }}</option>
                                        @endforeach

                                    </select>
                                    <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                        selección de  secretaria correcta 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 ">
                                <div class="">
                                    <label class="form-label">Monto a cobrar </label>
                                    <input  type="number" class="form-control" name="Monto" required value="{{$consulta->monto}}">
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
