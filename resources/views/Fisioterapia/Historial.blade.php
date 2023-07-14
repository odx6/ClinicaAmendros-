@extends('layouts.main')
@section('title', 'Agragar historial Completo')
@section('linkAuth')
    <!-- BEGIN PAGE LEVEL STYLE -->

    <link href="{{ asset('src/assets/css/dark/components/modal.css') }}" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL STYLE -->

    <link href="{{ asset('src/assets/css/light/components/tabs.css') }}" rel="stylesheet" type="text/css" />


    <link href="{{ asset('src/assets/css/dark/components/tabs.css') }}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->

    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/light/forms/switches.css') }}">


    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/dark/forms/switches.css') }}">
    <style>
        input[type="range"] {
            width: 100%;
        }

        input[type="range"]::-webkit-slider-runnable-track {
            background: linear-gradient(to right, green 0%, yellow 50%, red 100%);
        }

        input[type="range"]::-moz-range-track {
            background: linear-gradient(to right, green 0%, yellow 50%, red 100%);
        }

        input[type="range"]::-ms-track {
            background: linear-gradient(to right, green 0%, yellow 50%, red 100%);
        }

        h2 {
            background-color: #c4c8c5;
            text-align: center;
        }

        label {

            font-size-adjust: initial;
            font-size: .3cm;
        }
    </style>
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
                            <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Agregar Historial </li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->
                <!--calendario-->
                <div class="row layout-top-spacing layout-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-md-12">

                        <form class="user needs-validation" method="POST"
                            action="{{ route('create.FHistorial', ['id' => $id]) }}" novalidate>
                            @csrf
                            <!--radio boton-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="FisioExploraciones"
                                    name="FisioExploraciones" value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene Exploraiones el
                                    paciente?</label>
                                <br>
                            </div>
                            <!--end  radio -->

                            <!--Exploraciones-->
                            @include('Fisioterapia.Historial.Exploraciones')
                            <!--End-Exploraciones-->
                            <!--radio boton-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="FisioTrata" name="FisioTrata"
                                    value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene Tratamientos el
                                    paciente?</label>
                            </div>
                            <!--end  radio -->
                            <!--tratamientos-->
                            @include('Fisioterapia.Historial.Tratamientos')
                            <!--End-Tratamientos-->
                            <!--radio boton-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="FisioAnte" name="FisioAnte"
                                    value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene Antecedentes el
                                    paciente?</label>
                            </div>
                            <!--end  radio -->
                            <!--tratamientos-->
                            @include('Fisioterapia.Historial.Antecedentes')
                            <!--End-Tratamientos-->
                            <!--radio boton-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="FisioHabitos"
                                    name="FisioHabitos" value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene Habitos de salud el
                                    paciente?</label>
                            </div>
                            <!--end  radio -->
                            <!--Habitos-->
                            @include('Fisioterapia.Historial.Habitos')
                            <!--End-Habitos-->
                            <!--radio boton-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="FisioIngra" name="FisioIngra"
                                    value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Esta en estado de Ingravidez el
                                    paciente?</label>
                            </div>
                            <!--end  radio -->
                            <!--Ingravidez-->
                            @include('Fisioterapia.Historial.Ingravidez')
                            <!--End-Ingravidez-->
                            <!--radio boton-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="FisioDiagnostico"
                                    name="FisioDiagnostico" value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene Diagnóstico Médico en
                                    Rehabilitación el paciente?</label>
                            </div>
                            <!--end  radoDiagnostico-->
                            <!--Diagnostico-->
                            @include('Fisioterapia.Historial.Dime')
                            <!--End-Diagnostico-->
                            <!--radio boton-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="FisioCica" name="FisioCica"
                                    value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene Cicatríz Quirúrgica el
                                    paciente?</label>
                            </div>
                            <!--end  radio -->
                            <!--Cicatriz-->
                            @include('Fisioterapia.Historial.Cicatriz')
                            <!--End-Cicatriz-->
                            <!--radio boton-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="FisioTraslados"
                                    name="FisioTraslados" value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene Traslados el
                                    paciente?</label>
                            </div>
                            <!--Cicatriz-->
                            @include('Fisioterapia.Historial.Traslados')
                            <!--End-Cicatriz-->
                            <!--radio boton-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="FisioDeambu"
                                    name="FisioDeam" value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene analisis
                                    Marcha/Deambulación el paciente?</label>
                            </div>
                            <!--Cicatriz-->
                            @include('Fisioterapia.Historial.Deambulacion')
                            <!--End-Cicatriz-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="FisioDolor"
                                    name="FisioDolor" value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene Escala de dolor el
                                    paciente?</label>
                            </div>
                            <!--Dolor-->
                            @include('Fisioterapia.Historial.Dolor')
                            <!--End-Dolor-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="FisioMuscular"
                                    name="FisioMuscular" value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene Evaluacion Muscular el
                                    paciente?</label>
                            </div>
                            <!--Muscular-->
                            @include('Fisioterapia.Historial.Muscular')
                            <!--End-Muscular-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="FisioNota"
                                    name="FisioNota" value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene Nota de Valoracion
                                    inicial el paciente?</label>
                            </div>
                            <!--Muscular-->
                            @include('Fisioterapia.Historial.Nota')
                            <!--End-Muscular-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="FisioSuperiores"
                                    name="FisioSuperiores" value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene Prueba de miembros el
                                    paciente?</label>
                            </div>
                            <!--MuscSuperiores-->
                            @include('Fisioterapia.Historial.Superiores')


                            <!--End-MuscMiembroSolo-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="FisioFrontal"
                                    name="FisioFrontal" value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene Evaluación de postura
                                    frontal el paciente?</label>
                            </div>

                            <!--MuscMiembroSolo-->
                            @include('Fisioterapia.Historial.Frontal')
                            <!--End-MuscMiembroSolo-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="FisioInLateral"
                                    name="FisioInLateral" value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene Evaluacion en la postura
                                    lateral el paciente?</label>
                            </div>

                            <!--MuscMiembroSolo-->
                            @include('Fisioterapia.Historial.Lateral')
                            <!--End-MuscMiembroSolo-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="FisioPosterior"
                                    name="FisioPosterior" value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene Evaluacion en la
                                    posturPosterior el paciente?</label>
                            </div>
                            <!--MuscMiembroSolo-->
                            @include('Fisioterapia.Historial.Posterior')
                            <!--End-MuscMiembroSolo-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="FisioFormulario"
                                    name="FisioFormulario" value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene Formulario de valoración
                                    de la batería breve valoración funcional ?</label>
                            </div>
                            <!--MuscMiembroSolo-->
                            @include('Fisioterapia.Historial.Formulario')
                            <!--End-MuscMiembroSolo-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="FisioPlan"
                                    name="FisioPlan" value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene Plan Analítico el
                                    paciente?</label>
                            </div>
                            <!--MuscMiembroSolo-->
                            @include('Fisioterapia.Historial.Plan')
                            <!--End-MuscMiembroSolo-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="FisioAnalisis"
                                    name="FisioAnalisis" value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene Analisis de marcha el
                                    paciente?</label>
                            </div>
                            <!--MuscMiembroSolo-->
                            @include('Fisioterapia.Historial.Analisis')
                            <!--End-MuscMiembroSolo-->








                    </div>
                    
                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Enviar
                        datos</button>
                </div>
               
                </form>
                @include('layouts.footer')
            </div>
            <!--  END CONTENT AREA  -->

        </div>
        <!-- END MAIN CONTAINER -->
    @endsection
    @section('Scripts')
        <!-- BEGIN PAGE LEVEL SCRIPTS -->


        <!--  BEGIN CUSTOM SCRIPTS FILE  -->

        <script src="{{ asset('MisFunciones/Clinica.js') }}"></script>


        <!--  END CUSTOM SCRIPTS FILE  -->

    @endsection
