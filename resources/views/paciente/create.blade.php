@extends('layouts.main')
@section('title', 'Agregar paciente')
@section('linkAuth')
   
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
                            <li class="breadcrumb-item active" aria-current="page">Registrar Paciente</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->
                <!--calendario-->
                <div class="row layout-top-spacing layout-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <form class="user needs-validation" method="POST" action="{{ route('Pacientes.crear') }}"
                            novalidate>
                            @csrf
                            <h1>Datos del paciente </h1>
                            <div class="row mb-4">
                                <div class="col">
                                    <select class="form-control event-title-area" name="Area"  required>
                                        <option selected disabled value="">Área </option>
                                        @foreach ($Areas as $area)
                                            <option value="{{ $area->IDAREA }}">{{ $area->NOMBE_AREA }}</option>
                                        @endforeach
                                    </select>
                                    <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                         Selecciona un area valida
                                     </div>
                                </div>
                            
                                <div class="col">
                                    <select class="form-control event-title" name="Doctor"  required>
                                        <option selected disabled value="">Seleccione un medico </option>
                                    </select>
                                    <div class="valid-feedback">
                                        Selección correcta
                                     </div>
                                     <div class="invalid-feedback">
                                         Selecciona un médico
                                     </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-7">
                                    <!--<label for="formGroupExampleInput">Nombre del paciente</label>-->
                                    <input type="text" class="form-control " placeholder="Nombre del paciente "
                                        name="Nombre" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2"
                                        max="30">
                                        
                                        <div class="valid-feedback">
                                            Datos correctos
                                         </div>
                                         <div class="invalid-feedback">
                                            Ingresa un nombre valido ejemplo :"Jose luis"
                                         </div>
                                </div>
                               
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Apellido del paciente"
                                        name="Apellido" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2"
                                        max="30">
                                        <div class="valid-feedback">
                                            Datos correctos
                                         </div>
                                         <div class="invalid-feedback">
                                            Ingresa apellidos validos  :"Hernández López"
                                         </div>
                                </div>
                                </div>

                            <div class="row mb-4">
                                <div class="col">
                                    <select class="form-control" name="Edad" required>
                                        <option selected disabled value="">Edad del paciente en años</option>

                                        @for ($i = 1; $i <= 100; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                    <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                         Selecciona la edad 
                                     </div>
                                </div>
                               
                                <div class="col">
                                    <select class="form-control" name="Sexo" required>
                                        <option selected disabled value="">Sexo del paciente</option>

                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>

                                    </select>
                                    <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                         Selecciona el sexo
                                     </div>
                                </div>

                            </div>
                            <div class="row mb-4">

                                <div class="col">
                                    <select class="form-control" name="Estado_civil" required>
                                        <option selected disabled value="">Estado civil del paciente </option>
                                        @php
                                            $Estados = ['Soltero(a)', 'Casado(a)', 'Separado(a)', 'Divorciado(a)', 'Viudo(a)', 'Conviviente o pareja de hecho'];
                                        @endphp
                                        @endphp
                                        @foreach ($Estados as $Estado)
                                            <option value="{{ $Estado }}">{{ $Estado }} </option>
                                        @endforeach
                                    </select>
                                    <div class="valid-feedback">
                                        Datos correctos Estado civil
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor ingresa Estado civil del paciente valido
                                    </div>
                                </div>
                                
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Origen el paciente"
                                        name="Origen" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" required>
                                    <div class="valid-feedback">
                                        Datos de origen correctos
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor ingresa Origen valido
                                    </div>
                                </div>
                               
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Ocupacion del paciente"
                                        name="Ocupacion" required>
                                        <div class="valid-feedback">
                                            Datos Ocupación correctos
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor ingresa una ocupación valida
                                        </div>
                                </div>


                            </div>
                            <div class="row mb-4">

                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Direccion del paciente"
                                        name="Direccion" required minlength="4" pattern="[A-Za-z0-9\s\-\,\#]+">
                                        <div class="valid-feedback">
                                            Datos Dirección correctos
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor ingresa una Dirección valida
                                        </div>
                                </div>
                                
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Telefono del paciente"
                                        name="Telefono" required minlength="10" maxlength="10" pattern="[0-9]{9,15}">
                                        <div class="valid-feedback">
                                           Teléfono Correcto
                                        </div>
                                        <div class="invalid-feedback">
                                            Ingresa un teléfono de la forma 9514886716 sin letras ni espacios
                                        </div>
                                </div>
                                </div>

                            <div class="row mb-4">

                                <div class="col">
                                    <select class="form-control" name="Religion" required>
                                        <option selected disabled value="">Religión del paciente</option>
                                        @php
                                            $religiones = ['Catolicismo', 'Protestantismo', 'Testigos de Jehová', 'Mormonismo', 'Adventismo', 'Pentecostalismo', 'Judaísmo', 'Islam', 'Budismo', 'Hinduismo', 'Sikhismo', 'Jainismo', 'Espiritualismo', 'Religiones indígenas', 'Nuevos movimientos religiosos', 'Ateísmo', 'Agnosticismo'];
                                        @endphp
                                        @endphp
                                        @foreach ($religiones as $religion)
                                            <option value="{{ $religion }}">{{ $religion }} </option>
                                        @endforeach
                                    </select>
                                    <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                         Selecciona una religión 
                                     </div>
                                </div>

                               

                                <div class="col">
                                    <select class="form-control" name="Escolaridad" required>
                                        <option selected disabled value="">Escolaridad del paciente</option>
                                        @php
                                            $nivelesEducacion = ['Educación Inicial o Preescolar', 'Educación Primaria', 'Educación Secundaria', 'Educación Media o Bachillerato', 'Educación Técnica o Profesional', 'Educación Superior', 'Formación Profesional o Técnica Superior', 'Educación Continua', 'Educación a Distancia o en Línea', 'Educación para Adultos'];
                                        @endphp
                                        @endphp
                                        @foreach ($nivelesEducacion as $nivel)
                                            <option value="{{ $nivel }}">{{ $nivel }} </option>
                                        @endforeach
                                    </select>
                                    <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                         Selecciona un grado de estudio 
                                     </div>
                                </div>
                            </div>



                            <input type="submit" name="time" class="btn btn-primary">
                        </form>
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
 <script src="{{ asset('MisFunciones/Clinica.js') }}"></script>
@endsection
