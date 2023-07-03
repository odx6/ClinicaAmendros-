@extends('layouts.main')
@section('title', 'Historial-clinico-fisioterapia')
@section('linkAuth')
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link href="../src/plugins/src/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />

    <link href="../src/plugins/css/light/fullcalendar/custom-fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css">

    <link href="../src/plugins/css/dark/fullcalendar/custom-fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL STYLE -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/assets/css/light/components/tabs.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/assets/css/dark/components/tabs.css') }}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
    <link href="{{ asset('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/light/forms/switches.css') }}">

    <link href="{{ asset('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
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
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Registrar Antecedentes Patológicos y
                                Heredofamiliares </li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->
                <!--calendario-->
                <div class="row layout-top-spacing layout-spacing" id="cancel-row">
                    <!--end seccion de primer container-->
                    <!--Segundo seccion de container--->
                    <div class="container">
                        <h2>Antecedentes Patologicos y Heredofamiliares</h2>
                        <div class="row">
                            <div class="col">
                                <form class="user" method="POST"
                                    action="{{ route('create.AntecedenteAH', ['id' => $id]) }}">
                                    @csrf
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <h3>si no</h3>
                                                </th>
                                                <th scope="col">
                                                    <h3>Especifique</h3>
                                                </th>
                                                <th scope="col">
                                                    <h3>si no</h3>
                                                </th>
                                                <th scope="col">
                                                    <h3>Especifique</h3>
                                                </th>

                                            </tr>
                                            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                                        </thead>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Diabetes</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Diabetes" value="si">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput1" value=""
                                                            placeholder="Especificacion para diabetes" name="EDiabetes">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Enf.Reumaticas</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="EnfReumaticas"
                                                            value="si">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput1" value=""
                                                            placeholder="Enfermedades Reumaticas" name="EEnf">
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>

                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Alergias</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Alergias"
                                                            value="si">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput1" value=""
                                                            placeholder="Alergias" name="EAlergias">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Encames</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Encames"
                                                            value="si">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput1" value=""
                                                            placeholder="Encames" name="EEncames">
                                                    </div>
                                                </td>


                                            </tr>
                                            <tr>

                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">HTA</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="HTA"
                                                            value="si">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput1" value=""
                                                            placeholder="HTA" name="ETA">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Accidentes</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Accidentes"
                                                            value="si">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput1" value=""
                                                            placeholder="Accidentes" name="EAccidentes">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Cáncer</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Cáncer"
                                                            value="si">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput1" value=""
                                                            placeholder="Cáncer" name="ECancer">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Cardiopatías</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Cardiopatias"
                                                            value="si">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput1" value=""
                                                            placeholder="Cardiopatias" name="ECardiopatias">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Transfusiones</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Transfusiones"
                                                            value="si">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput1" value=""
                                                            placeholder="Transfunciones" name="ETransfunciones">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Cirugías</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Cirugías"
                                                            value="si">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput1" value=""
                                                            placeholder="Cirugias" name="ECirugias">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Fracturas</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Fracturas"
                                                            value="si">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput1" value=""
                                                            placeholder="Fracturas" name="EFracturas">
                                                    </div>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>


                            </div>
                            <div class="col">
                                2 of 2
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <!--Espacio-->
                                            <div class="container">
                                                <h3>Signos vitales</h3>
                                                <div class="row">
                                                    <div class="col">
                                                        <h3>T/A</h3>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">

                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" value=""
                                                                placeholder="TA" name="TA">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <h3>TEMP</h3>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">

                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" value=""
                                                                placeholder="Temp" name="Temp">
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <h3>FC</h3>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">

                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" value=""
                                                                placeholder="FC" name="FC">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">

                                                        <h3>FR</h3>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">

                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" value=""
                                                                placeholder="FR" name="FR">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <!--end-espacio-->
                                        </div>

                                        <div class="w-100"></div>
                                        <div class="col"><br>
                                            <h2><u>Espasmos o contratuctua muscular </u></h2>
                                            <!---table-->
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">si no </th>
                                                            <th scope="col">Sitio/Caracteristicas</th>

                                                        </tr>
                                                        <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div
                                                                    class="switch form-switch-custom switch-inline form-switch-success">
                                                                    <label class="switch-label"
                                                                        for="form-custom-switch-success">Si/no</label>
                                                                    <input class="switch-input" type="checkbox"
                                                                        role="switch" id="form-custom-switch-success"
                                                                        name="Espasmos" value="si">

                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group">

                                                                    <input type="text" class="form-control"
                                                                        id="exampleFormControlInput1" value=""
                                                                        placeholder="Especificacion Espasmos"
                                                                        name="EEspasmos">
                                                                </div>
                                                            </td>

                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end-table-->





                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Enviar
                        Datos</button>
                    </form>
                    </form>
                    <!--end seccion de Segundo container-->
                    <!--end seccion de Tercer container-->




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
    <script src="../src/plugins/src/fullcalendar/custom-fullcalendar.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->

    <script src="{{ asset('MisFunciones/Clinica.js') }}"></script>
    <script src="{{ asset('src/plugins/src/highlight/highlight.pack.js') }}"></script>

    <!--  END CUSTOM SCRIPTS FILE  -->


@endsection
