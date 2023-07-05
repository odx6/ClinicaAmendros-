@extends('layouts.main')
@section('title', 'Agragar historial Completo')
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

                        <form class="user" method="POST" action="{{ route('paciente.store', ['id' => $id]) }}">
                            @csrf
                            <br>
                            <h2> ANTECEDENTES HEREDOFAMILARES</h2>
                            <br>
                            <div class="row mb-4">


                                <div class="col">
                                    <label for="formGroupExampleInput">PACIENTE </label>

                                    <input type="text" class="form-control bold" placeholder="Numero de paciente"
                                        name="Paciente" value="{{ $id }}" disabled>
                                </div>



                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">DIABETES MELLITUS
                                        (DM)
                                    </label>
                                    <select class="form-control" name="DM">

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">HIPERTENSIÓN ARTERIAL
                                        SISTÉMICA (HAS)</label>
                                    <select class="form-control" name="HAS">

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">

                                    <label for="formGroupExampleInput"> CANCER (CA)</label>
                                    <select class="form-control" name="CA">

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">MADRE FALLECIDA</label>
                                    <select class="form-control" name="MF">

                                        <option value="Si">Si</option>
                                        <option value="No">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">DIABETES MELLITUS
                                        (DM)
                                    </label>
                                    <select class="form-control" name="PDM">

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">HIPERTENSIÓN ARTERIAL
                                        SISTÉMICA (HAS)</label>
                                    <select class="form-control" name="PHAS">

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">

                                    <label for="formGroupExampleInput"> CANCER (CA)</label>
                                    <select class="form-control" name="PCA">

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>

                                <div class="col">
                                    <label for="formGroupExampleInput">PADRE FALLECIDO</label>
                                    <select class="form-control" name="PF">
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">CAUSAS</label>
                                    <input type="text" class="form-control"
                                        placeholder="CAUSAS DE LA MUERTE PADRE Y MADRE " name="CAM">
                                </div>

                            </div>
                            <br>
                            <h2> ANTECEDENTES PERSONALES NO PATOLOGICOS </h2>
                            <br>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">ALERGIAS
                                    </label>
                                    <input type="text" class="form-control" placeholder="ALERGIAS  " name="ALERGIAS">
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">ALERGIAS POR ALIMENTOS
                                    </label>
                                    <input type="text" class="form-control" placeholder="ALERGIAS POR ALIMENTOS "
                                        name="AL">
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">ALERGIAS POR SUSTANCIAS
                                        QUIMICAS </label>

                                    <input type="text" class="form-control"
                                        placeholder="ALERGIAS POR SUSTANCIAS QUIMICAS" name="ALS">
                                </div>


                            </div>
                            <div class="row mb-4">

                                <div class="col">
                                    <label for="formGroupExampleInput">TIENE CIRUJIAS PREVIAS
                                    </label>
                                    <input type="text" class="form-control" placeholder="CIRUJIAS PREVIAS "
                                        name="CP">
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput"> TRANSFUCIONES </label>
                                    <input type="text" class="form-control" placeholder="TRANSFUCIONES"
                                        name="TF">
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">FRACTURAS ACTUALES O PREVIAS
                                    </label>

                                    <input type="text" class="form-control" placeholder="ACTUALES O PREVIAS"
                                        name="FP">
                                </div>


                            </div>

                            <div class="row mb-4">

                                <div class="col">
                                    <label for="formGroupExampleInput"> ALCHOLICO </label>
                                    <select class="form-control" name="ALP">

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput"> TABAQUISMO </label>
                                    <select class="form-control" name="TB">
                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">DROGAS </label>
                                    <select class="form-control" name="DR">

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                            </div>
                            <br>
                            <!--Estudios patologicos --->
                            <h2> ANTECEDENTES NO PATOLOGICOS </h2>
                            <br>
                            <!--Antecedentes patologicos-->


                            <div class="row mb-4">




                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">DIABETES MELITUS </label>
                                    <select class="form-control" name="DMN">


                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>

                                <div class="col">
                                    <label for="formGroupExampleInput">TIEMPO DE EVOLUCION </label>
                                    <input type="text" class="form-control" placeholder="Evolucion de la diabetes  "
                                        name="DMTE">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">HIPERTENSIÓN ARTERIAL
                                        SISTÉMICA </label>
                                    <select class="form-control" name="HASN">

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">TIEMPO DE EVOLUCION </label>
                                    <input type="text" class="form-control" placeholder="Evolucion" name="HASTE">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">INSUFICIENCIA RENAL AGUDA O
                                        CRÓNICA </label>
                                    <select class="form-control" name="IR">

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">TIEMPO DE EVOLUCION </label>
                                    <input type="text" class="form-control" placeholder="Evolucion" name="IrTe">
                                </div>
                            </div>

                            <div class="row mb-4">

                                <div class="col">
                                    <label for="formGroupExampleInput">OTRA </label>
                                    <input type="text" class="form-control" placeholder="Evolucion" name="OTRA">
                                </div>
                            </div>

                            <!--radio boton-->
                            <div class="switch form-switch-custom switch-inline form-switch-info">
                                <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-info2"
                                    name="checkExploracion" value="1">
                                <label class="switch-label" for="form-custom-switch-info">¿Tiene exploraciones fisicas el
                                    paciente?</label>
                            </div>
                            <!--end  radio -->
                            <div id="OExploraciones" class="desactivado">
                                <br>
                                <!--end aPatologicos-->
                                <h1>Exploraciones fisicas del del paciente</h1>
                                <br>
                                <!--Estudios patologicos --->
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        T/A </label>
                                    <select class="form-control" name="T/A">

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        FC </label>
                                    <select class="form-control" name="FC">

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        X1 </label>
                                    <select class="form-control" name="X1">

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        FR </label>
                                    <select class="form-control" name="FR">
                                        < <option value="1">Si</option>
                                            <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        X2 </label>
                                    <select class="form-control" name="X2">

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>




                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">TEMPERATURA </label>
                                        <input type="text" class="form-control" placeholder="TEMPERATURA"
                                            name="TEMP">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">PESO (KG) </label>
                                        <input type="text" class="form-control" placeholder="PESO (KG)"
                                            name="PESO">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">NOMBRE EXPLORACION </label>
                                        <input type="text" class="form-control" placeholder="Exploracion Cabeza"
                                            name="NEF">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">CABEZA </label>
                                        <input type="text" class="form-control" placeholder="Exploracion Cabeza"
                                            name="CAEF">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">CUELLO</label>
                                        <input type="text" class="form-control" placeholder="Exploracion cuello  "
                                            name="CUEF">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">ABDOMEN </label>
                                        <input type="text" class="form-control" placeholder="Exploracion abdomen "
                                            name="ABEF">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">MIEMBRO PELVICO </label>
                                        <input type="text" class="form-control"
                                            placeholder="Exploracion miembro pelvico" name="MP">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">MIEMBRO TORAXICO</label>
                                        <input type="text" class="form-control"
                                            placeholder="Exploracion miembro toraxico" name="MT">
                                    </div>

                                </div>

                            </div>

                    </div>

                </div>


                @if ($Paciente->Sexo == 'F')
                    <br>
                    <h2> ANTECEDENTES Ginecobstrecticos </h2>
                    <br>
                    <!--- Historial-->

                    <!--Antecedentes ginecologicos-->


                    <div class="row mb-4">

                        <div class="col">
                            <label for="formGroupExampleInput">MENARCA </label>
                            <input type="text" class="form-control" placeholder="Inicio de la menstruacion en años "
                                name="Menarca">
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput">INCIO DE LA ACTIVIDAD SEXUAL
                            </label>
                            <input type="text" class="form-control" placeholder="inicio de la vida sexual"
                                name="IVSA">

                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput">NUMERO DE GESTAS </label>
                            <input type="text" class="form-control" placeholder="Numero de gestas " name="gestas">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <label for="formGroupExampleInput">NUMERO DE CESAREAS </label>
                            <input type="text" class="form-control" placeholder="Numero de cesareas" name="Cesareas">
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput">NUMERO DE ABORTOS</label>
                            <input type="text" class="form-control" placeholder="Numero de Abortos" name="Abortos">
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput">NUMERO DE PARAS</label>
                            <input type="text" class="form-control" placeholder="Numero de Partos" name="Partos">
                        </div>
                    </div>

                    <!-- Estudios -->
                @else
                @endif

                <!--radio boton-->
                <div class="switch form-switch-custom switch-inline form-switch-info">
                    <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-info"
                        name="checkEstudio" value="1">
                    <label class="switch-label" for="form-custom-switch-info">¿Tiene Estudios el paciente?</label>
                </div>
                <!--end  radio -->


                <!-- Estudios -->
                <div id="Ocultar" class="desactivado">
                    <br>
                    <h2>Estudios del paciente </h2>
                    <br>
                    <!--Antecedentes patologicos-->




                    <div class="row mb-4">




                        <div class="row mb-4">
                            <div class="col">
                                <label for="formGroupExampleInput">HEMOGLOBINA
                                </label>
                                <input type="text" class="form-control" placeholder="HEMOGLOBINA" name="HEMOGLOBINA">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">HEMATOCRITO</label>
                                <input type="text" class="form-control" placeholder="HEMATOCRITO "
                                    name="HEMATOCRITO">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">PLAQUETAS
                                </label>
                                <input type="text" class="form-control" placeholder="PLAQUETAS" name="PLAQUETAS">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">GLUCOSA
                                </label>
                                <input type="text" class="form-control" placeholder="GLUCOSA" name="GLUCOSA">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label for="formGroupExampleInput">UREA
                                </label>
                                <input type="text" class="form-control" placeholder="UREA" name="UREA">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">CREATININA</label>
                                <input type="text" class="form-control" placeholder="CREATININA " name="CREATININA">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">RX
                                </label>
                                <input type="text" class="form-control" placeholder="RX" name="RX">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">USG
                                </label>
                                <input type="text" class="form-control" placeholder="USG" name="USG">
                            </div>
                        </div>
                        <!--end estudios--->



                    </div>
                </div>
                <!--radio boton-->
                <div class="switch form-switch-custom switch-inline form-switch-info">
                    <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-info3"
                        name="checkNotas" value="1">
                    <label class="switch-label" for="form-custom-switch-info">¿Tiene notas el paciente?</label>
                </div>
                <!--end  radio -->


                <div id="NPQuirurgicas" class="desactivado">

                    <br>
                    <h1>Notas </h1>
                    <br>

                    <div class="row mb-4">
                        <div class="col">
                            <label for="formGroupExampleInput">NOTA </label>
                            <input type="text" class="form-control" placeholder="cuerpo de la nota" name="NOT">
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput">TIPO DE NOTA</label>
                            <input type="text" class="form-control" placeholder="TIPO DE NOTA" name="TIPO">
                        </div>

                    </div>



                    <!----- end Notas--->
                    <br>
                    <h2>NOTAS POST QUIRURGICA </h2>
                    <br>
                    <!--Antecedentes patologicos-->




                    <div class="row mb-4">



                        <div class="row mb-4">
                            <div class="col">
                                <label for="formGroupExampleInput">CIRUJIA PROGRAMADA </label>
                                <input type="text" class="form-control" placeholder="ciruja programada"
                                    name="PC">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">CIRUJIA REALIZADA</label>
                                <input type="text" class="form-control" placeholder="CIRUJIA REALIZADA"
                                    name="EJ">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">HALLAZGOS </label>

                                <input type="text" class="form-control" placeholder="Hallazgos" name="HA">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">COMPLICACIONES </label>
                                <input type="text" class="form-control" placeholder="COMPLICACIONES" name="CO">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">NOMBRE DEL CIRUJANO </label>
                                <input type="text" class="form-control" placeholder="Nombre del cirujano "
                                    name="NC">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label for="formGroupExampleInput">NOMBRE DEL AYUDANTE </label>
                                <input type="text" class="form-control" placeholder="Nombre del ayudante"
                                    name="NAY">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">NOMBRE DEL
                                    INSTRUMENTISTA</label>
                                <input type="text" class="form-control" placeholder="nombre instrumentista"
                                    name="NI">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">NOMBRE DEL
                                    ANIESTESIOLOGO</label>
                                <input type="text" class="form-control" placeholder="Nombre del aniestesiologo"
                                    name="NAN">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">CIRCULANTE</label>
                                <input type="text" class="form-control" placeholder="circulante" name="CIR">
                            </div>
                            <!--end notaspost-->
                        </div>
                        <br>



                        <!--end_Formulario-->


                        <!--end_Formulario-->

                    </div>

                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                        >Enviar datos</button>
                </div>
                </form>
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
