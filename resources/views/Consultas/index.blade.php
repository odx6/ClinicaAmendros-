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
                            <li class="breadcrumb-item"><a href="#">Usuario : {{auth()->user()->name}}
                           
                            <li class="breadcrumb-item active" aria-current="page"> Correo : {{auth()->user()->email}}</li>

                        </ol>
                    </nav>
                </div>
                <h1 style="text-align: center;">AGREGAR UNA NUEVA CONSULTA </h1>
                <h3>Datos de la consulta</h3>
                <h4>Los datos marcados con <span class="red-asterisk">*</span>  son obligatorios</h4>
                <!-- /BREADCRUMB -->
                <form method="POST" action="{{ route('create.Consultas') }}" class="user needs-validation" novalidate>
                    @csrf

                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="">
                                    <label class="form-label">Nombre del Médico <span class="red-asterisk">*</span></label>
                                    <!-- <input id="event-title" type="text" class="form-control">-->
                                    <select class="form-control" name="ConsultaDoctor" id="event-title" required>

                                       
                                        @php
                                            $id = auth()->user()->id;
                                            $doctores = App\Models\Doctor::where('fk_user', '=', $id)->get();

                                        $fechaactual=\Carbon\Carbon::now();
                                        $fechaactual->subHour();
                                        @endphp

                                        @foreach ($doctores as $doctor)
                                            <option value="{{ $doctor->DSS }}">
                                                {{ $doctor->Nombre . ' ' . $doctor->Apellidos . ' ' . $doctor->ESPECIALIDAD }}
                                            </option>
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
                                    <label class="form-label">Nombre del pacente <span class="red-asterisk">*</span></label>
                                    <!-- <input id="event-title2" type="text" class="form-control">-->
                                    <select class="form-control" name="consultaPaciente" id="event-title2" required>

                                        <option selected disabled value="">Selecione Paciente </option>
                                        @foreach ($doctores as $doctor)
                                            @if ($doctor->Pacientes->count() > 0)
                                                @foreach ($doctor->Pacientes as $paciente)
                                                    <option value="{{ $paciente->SS }}">{{ $paciente->Nombre }}
                                                        {{ $paciente->Apellido }} </option>
                                                @endforeach
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
                            <div class="col-md-12">
                                <div class="">
                                    <label class="form-label">Cita <span class="red-asterisk">*</span> </label>
                                    <!-- <input id="event-title2" type="text" class="form-control">-->
                                    <select class="form-control" name="Consulta cita" id="event-title2" required>

                                        <option selected disabled value=""> Selecione una cita </option>
                                        @foreach ($doctores as $doctor)
                                            @if ($doctor->Citas->count() > 0)
                                                @foreach ($doctor->Citas as $citas)
                                                    @if($fechaactual->isSameDay($citas->inicio_c) && $fechaactual->gt($citas->inicio_c) )
                                                    <option value="{{ $citas->pk_cita }}">{{ $citas->inicio_c }} </option>
                                                    @endif
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
                                    <label class="form-label">Seleccione la secretaria <span class="red-asterisk">*</span></label>
                                    <!-- <input id="event-title" type="text" class="form-control">-->
                                    <select class="form-control" name="consultaSecretaria" id="event-title" required>

                                        <option selected disabled value=""> Selecione Secretaria </option>
                                        @php
                                            
                                            $secretarias = App\Models\Secretaria::all();
                                            
                                        @endphp

                                        @foreach ($secretarias as $secretaria)
                                            <option value="{{ $secretaria->pk_secretaria }}">
                                                {{ $secretaria->Nombre . ' ' . $secretaria->Apellidos }}</option>
                                        @endforeach

                                    </select>
                                    <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                        seleccione una secretaria correcta 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 ">
                                <div class="">
                                    <label class="form-label">Monto a cobrar <span class="red-asterisk">*</span> </label>
                                    <input  type="number" class="form-control"name="Monto" required>
                                    <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                        Ingresa un monto correcto
                                    </div>
                                </div>
                            </div>
                            



                        </div>
                         <button type="submit"
                            class="btn btn-success btn-rounded mb-2 me-4  btn-add-event Hola" >Guardar</button>
                                      </form>

                    </div>
                   
              
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
