@extends('layouts.main')
@section('title', 'Agradar historial Completo')
@section('linkAuth')

    <link href="{{ asset('src/assets/css/light/components/modal.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('src/assets/css/dark/components/modal.css') }}" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL STYLE -->
    <!--  BEGIN CUSTOM STYLE FILE  -->

    <link href="{{ asset('src/assets/css/light/components/tabs.css') }}" rel="stylesheet" type="text/css" />


    <link href="{{ asset('src/assets/css/dark/components/tabs.css') }}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->

    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/light/forms/switches.css') }}">

    <link href="{{ asset('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/dark/forms/switches.css') }}">

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


                        <!-- Fomulario -->
                        <!--- Historial-->

                        <!-- Fomulario -->
                        <!--- Historial-->

                        <form class="user  needs-validation" method="POST"
                            action="{{ route('paciente.store', ['id' => $id]) }}" novalidate>
                            @csrf
                            <br>
                            <h2> ANTECEDENTES HEREDOFAMILARES</h2>
                            <br>
                            <h2>Madre con</h2>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">diabetes mellitus(DM) <span class="red-asterisk">*</span>
                                    </label>
                                    <select class="form-control" name="DM" required>
                                        <option selected disabled value="">diabetes </option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Hipertensión (HAS) <span class="red-asterisk">*</span></label>
                                    <select class="form-control" name="HAS" required>
                                        <option selected disabled value="">Hipertensión </option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">

                                    <label for="formGroupExampleInput">Cáncer(CA) <span class="red-asterisk">*</span></label>
                                    <select class="form-control" name="CA" required>
                                        <option selected disabled value="">Cáncer(CA)</option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>

                                <div class="col">
                                    <label for="formGroupExampleInput">Madre fallecida</label>
                                    <select class="form-control" name="MF" required>
                                        <option selected disabled value=""> madre fallecida </option>

                                        <option value="Si">Si</option>
                                        <option value="No">No</option>

                                    </select>
                                </div>
                            </div>

                            <h2>Padre con :</h2>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">diabetes mellitus(DM)
                                    </label>
                                    <select class="form-control" name="PDM" required>
                                        <option selected disabled value=""> diabetes mellitus(DM)</option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Hipertensión (HAS) <span class="red-asterisk">*</span></label>
                                    <select class="form-control" name="PHAS" required>
                                        <option selected disabled value="">Hipertensión (HAS)</option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">

                                    <label for="formGroupExampleInput"> Cáncer(CA) <span class="red-asterisk">*</span></label>
                                    <select class="form-control" name="PCA" required>
                                        <option selected disabled value="">Cáncer(CA) </option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>

                                <div class="col">
                                    <label for="formGroupExampleInput">Padre fallecido <span class="red-asterisk">*</span></label>
                                    <select class="form-control" name="PF" required>
                                        <option selected disabled value="">Padre fallecido </option>

                                        <option value="Si">Si</option>
                                        <option value="No">No</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Causas <span class="red-asterisk">*</span></label>
                                    <input type="text" class="form-control"
                                        placeholder="CAUSAS DE LA MUERTE PADRE Y MADRE " name="CAM" value="N/A"
                                        pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2"
                                        max="50" required>
                                </div>

                            </div>
                            <br>
                            <h2> ANTECEDENTES PERSONALES NO PATOLOGICOS </h2>
                            <br>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Alergias
                                    </label>
                                    <input type="text" class="form-control" placeholder="ALERGIAS" name="ALERGIAS"
                                        value="N/A" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$"
                                        minlength="2">
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">alimentos
                                    </label>
                                    <input type="text" class="form-control" placeholder="ALERGIAS POR ALIMENTOS "
                                        value="N/A" name="AL"
                                        pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2" required>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput"> Sustancias
                                        químicas </label>

                                    <input type="text" class="form-control"
                                        placeholder="ALERGIAS POR SUSTANCIAS QUIMICAS" name="ALS" value="N/A"
                                        pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2" required>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Cirugías previas
                                    </label>
                                    <input type="text" class="form-control" placeholder="CIRUJIAS PREVIAS "
                                        name="CP" value="N/A"
                                        pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" required>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput"> Transfusiones </label>
                                    <input type="text" class="form-control" placeholder="TRANSFUCIONES"
                                        value="N/A" name="TF"
                                        pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" required>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Fracturas
                                    </label>

                                    <input type="text" class="form-control" placeholder="ACTUALES O PREVIAS"
                                        name="FP" value="N/A"
                                        pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" required>
                                </div>


                            </div>

                            <div class="row mb-4">

                                <div class="col">
                                    <label for="formGroupExampleInput"> Alcohólico </label>
                                    <select class="form-control" name="ALP" required>
                                        <option selected disabled value="">Alcohólico </option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput"> Tabaquismo </label>
                                    <select class="form-control" name="TB" required>
                                        <option selected disabled value="">Tabaquismo </option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Drogas </label>
                                    <select class="form-control" name="DR" required>
                                        <option selected disabled value="">Drogas </option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                            </div>
                            <br>
                            <!--Estudios patologicos --->
                            <h2> ANTECEDENTES NO PATOLÓGICOS </h2>
                            <br>
                            <!--Antecedentes patologicos-->


                            <div class="row mb-4">




                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">diabetes mellitus(DM) </label>
                                    <select class="form-control" name="DMN" required>
                                        <option selected disabled value="">diabetes mellitus(DM) </option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>

                                <div class="col">
                                    <label for="formGroupExampleInput">Tiempo de evolución </label>
                                    <input type="numeric" class="form-control" placeholder="Evolucion de la diabetes  "
                                        value="N/A" name="DMTE" required>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Hipertensión</label>
                                    <select class="form-control" name="HASN" required>
                                        <option selected disabled value="">Hipertensión </option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Tiempo de evolución </label>
                                    <input type="numeric" class="form-control" placeholder="Evolucion" name="HASTE"
                                        value="N/A" required>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Insuficiencia renal <br>Aguda o Cronica </label>
                                    <select class="form-control" name="IR" required>
                                        <option selected disabled value="">Insuficiencia </option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput"> Tiempo de <br> evolución </label>
                                    <input type="numeric" class="form-control" placeholder="Evolucion" name="IrTe"
                                        value="N/A" required>
                                </div>
                            </div>

                            <div class="row mb-4">

                                <div class="col">
                                    <label for="formGroupExampleInput">Otra </label>
                                    <input type="text" class="form-control" placeholder="Evolucion" name="OTRA"
                                        value="N/A" required>
                                </div>
                            </div>

                            <!--radio boton-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-info2"
                                    name="checkExploracion" value="1" >
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene exploraciones fisicas el
                                    paciente?</label>
                            </div>
                            <!--end  radio -->
                            <div id="OExploraciones" class="desactivado" style="display: none;">
                                <br>
                                <!--end aPatologicos-->
                                <h1>Exploraciones físicas del del paciente</h1>
                                <br>
                                <!--Estudios patologicos --->


                                <div class="row mb-4">

                                    <div class="row mb-4">
                                        <div class="col">
                                            <label for="formGroupExampleInput">
                                                T/A </label>
                                            <input type="text" class="form-control" placeholder="T/A" name="T/A"
                                                pattern="^[0-9]+(?:\/[0-9]+)?$" required>

                                        </div>
                                        <div class="col">
                                            <label for="formGroupExampleInput">
                                                FC </label>
                                            <input type="text" class="form-control" placeholder="FC" name="FC"
                                                pattern="^\d+(\.\d+)?$" required>

                                        </div>
                                    </div>
                                    <div class="row mb-4">

                                        <div class="col">
                                            <label for="formGroupExampleInput">
                                                FR </label>
                                            <input type="text" class="form-control" placeholder="FR" name="FR"
                                                pattern="^\d+(\.\d+)?$" required>

                                        </div>
                                    </div>



                                </div>




                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Temperatura </label>
                                        <input type="text" class="form-control" placeholder="TEMPERATURA"
                                            name="TEMP" pattern="^\d+(\.\d+)?$" required>
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Peso (KG) </label>
                                        <input type="text" class="form-control" placeholder="PESO (KG)"
                                            name="PESO" pattern="^\d+(\.\d+)?$" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Nombre exploracion </label>
                                        <input type="text" class="form-control" placeholder="Exploracion Cabeza"
                                            name="NEF" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Cabeza </label>
                                        <input type="text" class="form-control" placeholder="Exploracion Cabeza"
                                            value="N/A" name="CAEF" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Cuello</label>
                                        <input type="text" class="form-control" placeholder="Exploracion cuello  "
                                            value="N/A" name="CUEF" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2"
                                            max="30">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Abdomen</label>
                                        <input type="text" class="form-control" placeholder="Exploracion abdomen "
                                            value="N/A" name="ABEF" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2"
                                            max="30">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Miembro pelvico </label>
                                        <input type="text" class="form-control" value="N/A"
                                            placeholder="Exploracion miembro pelvico" name="MP" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2"
                                            max="30">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Miembro toraxico</label>
                                        <input type="text" class="form-control" value="N/A"
                                            placeholder="Exploracion miembro toraxico" name="MT" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2"
                                            max="30">
                                    </div>

                                </div>

                            </div>
                            <div>
                                @if ($Paciente->Sexo == 'F')
                                    <br>
                                    <h2> ANTECEDENTES Ginecobstétricos </h2>
                                    <br>
                                    <!--- Historial-->

                                    <!--Antecedentes ginecologicos-->


                                    <div class="row mb-4">

                                        <div class="col">
                                            <label for="formGroupExampleInput">Menarca </label>
                                            <input type="numeric" class="form-control"
                                                placeholder="Inicio de la menstruacion en años " name="Menarca"
                                                pattern="^\d+(\.\d+)?$" required>
                                        </div>
                                        <div class="col">
                                            <label for="formGroupExampleInput">Inicio actividad sexual
                                            </label>
                                            <input type="numeric" class="form-control"
                                                placeholder="inicio de la vida sexual" name="IVSA"
                                                pattern="^\d+(\.\d+)?$" required>

                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <label for="formGroupExampleInput">Número de gestas </label>
                                            <input type="numeric" class="form-control" placeholder="Numero de gestas "
                                                name="gestas" pattern="^\d+(\.\d+)?$" required>
                                        </div>

                                        <div class="col">
                                            <label for="formGroupExampleInput">Número cesáreas </label>
                                            <input type="numeric" class="form-control" placeholder="Numero de cesareas"
                                                name="Cesareas" pattern="^\d+(\.\d+)?$" required>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <label for="formGroupExampleInput">Número de abortos</label>
                                            <input type="numeric" class="form-control" placeholder="Numero de Abortos"
                                                name="Abortos" pattern="^\d+(\.\d+)?$" required>
                                        </div>
                                        <div class="col">
                                            <label for="formGroupExampleInput">Número paras</label>
                                            <input type="numeric" class="form-control" placeholder="Numero de Partos"
                                                name="Partos" pattern="^\d+(\.\d+)?$" required>
                                        </div>
                                    </div>

                                    <!-- Estudios -->
                                @endif
                            </div>
                            <!--radio boton-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-info"
                                    name="checkEstudio" value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene Estudios el
                                    paciente?</label>
                            </div>
                            <!--end  radio -->


                            <!-- Estudios -->
                            <div id="Ocultar" class="desactivado" style="display: none;">
                                <br>
                                <h2>Estudios del paciente </h2>
                                <br>
                                <!--Antecedentes patologicos-->




                                <div class="row mb-4">

                                    <div class="col">
                                        <label for="formGroupExampleInput">Hemoglobina
                                        </label>
                                        <input type="text" class="form-control" placeholder="HEMOGLOBINA"
                                            name="HEMOGLOBINA" value="N/A" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Hematocrito</label>
                                        <input type="text" class="form-control" placeholder="HEMATOCRITO "
                                            name="HEMATOCRITO" value="N/A" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                    </div>
                                </div>
                                <div class="row mb-4">

                                    <div class="col">
                                        <label for="formGroupExampleInput">Plaquetas
                                        </label>
                                        <input type="text" class="form-control" placeholder="PLAQUETAS"
                                            name="PLAQUETAS" value="N/A" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Glucosa
                                        </label>
                                        <input type="text" class="form-control" placeholder="GLUCOSA" name="GLUCOSA"
                                            value="N/A" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Urea
                                        </label>
                                        <input type="text" class="form-control" placeholder="UREA" name="UREA"
                                            value="N/A" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Creatinina</label>
                                        <input type="text" class="form-control" placeholder="CREATININA "
                                            name="CREATININA" value="N/A" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Rx
                                        </label>
                                        <input type="text" class="form-control" placeholder="RX" name="RX"
                                            required value="N/A"
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Usg
                                        </label>
                                        <input type="text" class="form-control" placeholder="USG" name="USG"
                                            required value="N/A"
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                    </div>
                                </div>
                                <!--end estudios--->



                            </div>

                            <!--radio boton-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-info3"
                                    name="checkNotas" value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene notas el
                                    paciente?</label>
                            </div>
                            <!--end  radio -->


                            <div id="NPQuirurgicas" class="desactivado" style="display:none;">

                                <br>
                                <h1>Notas </h1>
                                <br>

                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">NOTA </label>
                                        <input type="text" class="form-control" placeholder="cuerpo de la nota"
                                            name="NOT" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">TIPO DE NOTA</label>
                                        <input type="text" class="form-control" placeholder="TIPO DE NOTA"
                                            name="TIPO" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                    </div>

                                </div>



                                <!----- end Notas--->
                                <br>
                                <h2>NOTAS POST QUIRURGICA </h2>
                                <br>
                                <!--Antecedentes patologicos-->




                                <div class="row mb-4">

                                    <div class="col">
                                        <label for="formGroupExampleInput">Ciruguia programada </label>
                                        <input type="date" class="form-control" placeholder="ciruja programada"
                                            name="PC" required>
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Ciruguia realizada</label>
                                        <input type="date" class="form-control" placeholder="CIRUJIA REALIZADA"
                                            name="EJ" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Hallazgoz </label>

                                        <input type="text" class="form-control" placeholder="Hallazgos"
                                            name="HA" value="N/A" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Complicaciones </label>
                                        <input type="text" class="form-control" placeholder="COMPLICACIONES"
                                            name="CO" value="N/A" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Nombre del cirujano </label>
                                        <input type="text" class="form-control" placeholder="Nombre del cirujano "
                                            name="NC" value="N/A" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                    </div>

                                    <div class="col">
                                        <label for="formGroupExampleInput">Nombre del ayudante </label>
                                        <input type="text" class="form-control" placeholder="Nombre del ayudante"
                                            name="NAY" value="N/A" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Nombre del instrumentista</label>
                                        <input type="text" class="form-control" placeholder="nombre instrumentista"
                                            name="NI" value="N/A" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Nombre del aniestesiologo</label>
                                        <input type="text" class="form-control"
                                            placeholder="Nombre del aniestesiologo" name="NAN" value="N/A"
                                            required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Ciculante</label>
                                        <input type="text" class="form-control" placeholder="circulante"
                                            name="CIR" value="N/A" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                    </div>
                                    <!--end notaspost-->
                                </div>
                                <br>



                                <!--end_Formulario-->


                                <!--end_Formulario-->

                            </div>

                    </div>

                </div>



                <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Enviar
                    datos</button>

                </form>

            </div>
            <!--aqui-->

        </div>



        @include('layouts.footer')
    </div>
    <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
@endsection
@section('Scripts')

    <script src="{{ asset('MisFunciones/Clinica.js') }}"></script>
    <script src="{{ asset('src/plugins/src/highlight/highlight.pack.js') }}"></script>

    <!--  END CUSTOM SCRIPTS FILE  -->

@endsection
