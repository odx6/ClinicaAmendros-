@extends('layouts.main')
@section('title', 'Historial-clinico-fisioterapia')
@section('linkAuth')
  
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
                            <li class="breadcrumb-item active" aria-current="page">Registrar Paciente Secretaria</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->
                <!--calendario-->
                <div class="row layout-top-spacing layout-spacing" id="cancel-row">

                    <!--Primer seccion de container--->
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h2>Datos del paciente</h2>
                                <table class="table">

                                    <tbody>
                                        <tr>

                                            <td>
                                                <h3>Nombre :</h3>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>
                                            <td>
                                                <h3>Sexo:</h3>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <h3>Domicilio :</h3>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>
                                            <td>
                                                <h3>Edad:</h3>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <h3>Telefono :</h3>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>
                                            <td>
                                                <h3>E.Civil:</h3>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <h3>Ocupacion :</h3>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>
                                            <td>
                                                <h3>Escolaridad:</h3>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>


                            </div>
                            <div class="col">
                                2 of 2
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <h2>Terapeuta</h2>
                                            <p>juan perez</p>
                                            <div class="row">
                                                <div class="col-8 col-sm-6">
                                                    <h2>Expediente #</h2>
                                                    <p>numero 1</p>
                                                </div>
                                                <div class="col-4 col-sm-6">
                                                    <h2>Fecha</h2>
                                                    <p>2023-01-2 mayo</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                1 of 3
                                <h2>Exploración Física</h2>
                                <table class="table">

                                    <tbody>
                                        <tr>

                                            <td>
                                                <h3>peso :</h3>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <h3>Estatura :</h3>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <h3>(IMC):</h3>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <h3>Etnia :</h3>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                            <div class="col">
                                2 of 3
                                <h2>Motivo de la consulta</h2>
                                <p>Datos</p>

                            </div>
                            <div class="col">
                                3 of 3
                                <h2>Tratamientos previos</h2>
                                <p>Datos</p>
                            </div>
                        </div>
                    </div>
                    <!--end seccion de primer container-->
                    <!--Segundo seccion de container--->
                    <div class="container">
                        <h2>Antecedentes Patologicos y Heredofamiliares</h2>
                        <div class="row">
                            <div class="col">

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
                                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                                    <label class="switch-label"
                                                        for="form-custom-switch-success">Diabetes</label>
                                                    <input class="switch-input" type="checkbox" role="switch"
                                                        id="form-custom-switch-success" name="Diabetes">

                                                </div>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>
                                            <td>
                                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                                    <label class="switch-label"
                                                        for="form-custom-switch-success">Enf.Reumaticas</label>
                                                    <input class="switch-input" type="checkbox" role="switch"
                                                        id="form-custom-switch-success" name="Enf.Reumaticas">

                                                </div>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                                    <label class="switch-label"
                                                        for="form-custom-switch-success">Alergias</label>
                                                    <input class="switch-input" type="checkbox" role="switch"
                                                        id="form-custom-switch-success" name="Alergias">

                                                </div>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>
                                            <td>
                                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                                    <label class="switch-label"
                                                        for="form-custom-switch-success">Encames</label>
                                                    <input class="switch-input" type="checkbox" role="switch"
                                                        id="form-custom-switch-success" name="Encames">

                                                </div>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>


                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                                    <label class="switch-label"
                                                        for="form-custom-switch-success">HTA</label>
                                                    <input class="switch-input" type="checkbox" role="switch"
                                                        id="form-custom-switch-success" name="HTA">

                                                </div>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>
                                            <td>
                                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                                    <label class="switch-label"
                                                        for="form-custom-switch-success">Accidentes</label>
                                                    <input class="switch-input" type="checkbox" role="switch"
                                                        id="form-custom-switch-success" name="Accidentes">

                                                </div>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                                    <label class="switch-label"
                                                        for="form-custom-switch-success">Cáncer</label>
                                                    <input class="switch-input" type="checkbox" role="switch"
                                                        id="form-custom-switch-success" name="Cáncer">

                                                </div>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>
                                            <td>
                                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                                    <label class="switch-label"
                                                        for="form-custom-switch-success">Cardiopatías</label>
                                                    <input class="switch-input" type="checkbox" role="switch"
                                                        id="form-custom-switch-success" name="Cardiopatias">

                                                </div>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                                    <label class="switch-label"
                                                        for="form-custom-switch-success">Transfusiones</label>
                                                    <input class="switch-input" type="checkbox" role="switch"
                                                        id="form-custom-switch-success" name="Transfusiones">

                                                </div>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>
                                            <td>
                                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                                    <label class="switch-label"
                                                        for="form-custom-switch-success">Cirugías</label>
                                                    <input class="switch-input" type="checkbox" role="switch"
                                                        id="form-custom-switch-success" name="Cirugías">

                                                </div>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                                    <label class="switch-label"
                                                        for="form-custom-switch-success">Fracturas</label>
                                                    <input class="switch-input" type="checkbox" role="switch"
                                                        id="form-custom-switch-success" name="Fracturas">

                                                </div>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
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
                                                        <h3>_____</h3>
                                                    </div>
                                                    <div class="col">
                                                        <h3>TEMP</h3>
                                                    </div>
                                                    <div class="col">
                                                        <h3>_____</h3>
                                                    </div>
                                                    <div class="col">
                                                        <h3>FC</h3>
                                                    </div>
                                                    <div class="col">
                                                        <h3>_____</h3>
                                                    </div>
                                                    <div class="col">
                                                        <h3>FR</h3>
                                                    </div>
                                                    <div class="col">
                                                        <h3>_____</h3>
                                                    </div>
                                                </div>

                                            </div>

                                            <!--end-espacio-->
                                        </div>

                                        <div class="w-100"></div>
                                        <div class="col"><br>
                                            <h1><u>Espasmos o contratuctua muscular </u></h1>
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
                                                                        name="Espasmos">

                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p>____________</p>
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
                        <div class="row">
                            <div class="col">
                                1 of 3
                                <h2>Habitos de la salud</h2>
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
                                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                                    <label class="switch-label"
                                                        for="form-custom-switch-success">Tabaquismo</label>
                                                    <input class="switch-input" type="checkbox" role="switch"
                                                        id="form-custom-switch-success" name="Tabaquismo">

                                                </div>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>
                                            <td>
                                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                                    <label class="switch-label" for="form-custom-switch-success">Actividad
                                                        física</label>
                                                    <input class="switch-input" type="checkbox" role="switch"
                                                        id="form-custom-switch-success" name="Actividad-física">

                                                </div>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                                    <label class="switch-label"
                                                        for="form-custom-switch-success">Alcholismo</label>
                                                    <input class="switch-input" type="checkbox" role="switch"
                                                        id="form-custom-switch-success" name="Alcholismo">

                                                </div>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>
                                            <td>
                                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                                    <label class="switch-label" for="form-custom-switch-success">Se
                                                        Automedica</label>
                                                    <input class="switch-input" type="checkbox" role="switch"
                                                        id="form-custom-switch-success" name="Se-Automedica">

                                                </div>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>


                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                                    <label class="switch-label"
                                                        for="form-custom-switch-success">Drogas</label>
                                                    <input class="switch-input" type="checkbox" role="switch"
                                                        id="form-custom-switch-success" name="Drogas">

                                                </div>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>
                                            <td>
                                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                                    <label class="switch-label"
                                                        for="form-custom-switch-success">Pasatiempo</label>
                                                    <input class="switch-input" type="checkbox" role="switch"
                                                        id="form-custom-switch-success" name="Pasatiempo">

                                                </div>
                                            </td>
                                            <td>
                                                <h3>__________</h3>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>


                            </div>
                            <div class="col">
                                2 of 3
                                <h2>Estado de ingravidez</h2>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Esta embrazada</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="embarazada">

                                </div>
                                <h3>Especifique</h3>
                                <h3>_____________________________</h3>

                                <h3>Cuantos hijos tiene </h3>
                                <h3>_____________________________</h3>

                            </div>

                        </div>
                    </div>
                    <!--end seccion de Segundo container-->
                    <!--end seccion de Tercer container-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <h2>Diagnóstico Médico en Reabilitacion </h2>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">
                                            <h3>Reflejos</h3>
                                        </div>
                                        <div class="col-sm">
                                            <h3>Sensibilidad</h3>
                                        </div>
                                        <div class="col-sm">
                                            <h3>Lenguaje / Orientacion</h3>
                                        </div>
                                        <div class="col-sm">
                                            <h3>Otros</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <h2>Cicatriz Quirúrgica</h2>
                                <!---table-->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">si no </th>
                                                <th scope="col">si no</th>
                                                <th scope="col">si no</th>

                                            </tr>
                                            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Sitio</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Sitio">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Queloide</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Queloide">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Retractil</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Retractil">

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Abierta</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Abierta">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label" for="form-custom-switch-success">Con
                                                            Aderencia</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Con-Aderencia">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Hipertrófica</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Hipertrófica">

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
                    <!--end seccion de Tercer container-->
                    <!--end seccion de Cuarto container-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <h2>Traslados </h2>
                                <h3>Val Inicial</h3>
                                <h3>____________</h3>
                                <h3>Val.final</h3>
                                <h3>____________</h3>

                            </div>
                            <div class="col-sm">
                                <h2>Marcha Deambulacion </h2>
                                <!---table-->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">si no </th>
                                                <th scope="col">si no</th>

                                            </tr>
                                            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Libre</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Libre">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Espasticas</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Espasticas">

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Claudicante</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Claudicante">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Ataxica</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Ataxica">

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label" for="form-custom-switch-success">Con
                                                            ayuda</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Con-ayuda">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Otros</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Otros">

                                                    </div>
                                                </td>


                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2>Observaciones</h2>
                                                </td>

                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                                <!--end-table-->
                            </div>

                        </div>
                    </div>
                    <!--end seccion deCuarto  container-->
                    <!--end seccion quinto  container-->
                    <div class="container">
                        <div class="row">
                            <h2>Escala de Dolor</h2>
                            <div class="col-sm">
                                <input type="range" min="0" max="10" step="1" value="0"
                                    id="dolorBarra">
                                <h3>Valor de Dolor: <span id="valorDolor">0</span></h3>
                            </div>

                        </div>

                    </div>
                    <!--end seccion quinto  container-->
                    <!---sexto container-->
                    <div class="container">
                        <h2>Prueba De Movilidad</h2>
                        <div class="container">
                            <div class="row">
                                <h2>Evaluacion muscular</h2>
                                <table class="table table-bordered">
                                    <thead>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Grado 5</th>

                                            <td>Fuerza muscular contra resistencia completa</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Grado 4</th>
                                            <td>La fuerza muscular está reducid pero la contracción muscular puede realizar
                                                un movimiento articular contra resistencia. </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Grado 3</th>
                                            <td>La fuerza muscular está reducida tanto que el moviemiento articular solo
                                                puede realizarse contra la gravedad sin la resistencia del
                                                examinadro.<br>Por ejemplo, la articulacion del codo puede moverse desde
                                                extension completa hasta felxión completa, comenzando con el brazo
                                                suspendido al lado del cuerpo. </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Grado 2</th>
                                            <td>Moviento activo que no puede vencer la fuerza de gravedad.Por ejemplo, el
                                                codo puede flexionarse completamente solo cuando el brazo es mantenido en un
                                                plano horizontal.</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Grado 1</th>
                                            <td>Esbozo de contracción muscular</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Grado 0'</th>
                                            <td>Ausencia de contracción muscular </td>

                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                            <div class="row">
                                <h2>Evaluacion de fuerza</h2>
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Izuierda</th>
                                            <th scope="col">Derecha</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">M.SUP</th>
                                            <td>__________</td>
                                            <td>__________</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <h2>Evaluación Goniometrica</h2>
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Izuierda</th>
                                            <th scope="col">Derecha</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">M.SUP</th>
                                            <td>__________</td>
                                            <td>__________</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">
                                            <img src="{{ asset('src/assets/img/Fisioterapia/cuerpo.png') }}"
                                                alt="" width="100%" height="100%">
                                        </div>
                                        <div class="col-sm">
                                            <h2>Nota Clinica-Valoración Inicial</h2>
                                            <p>__________________---</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!---end--sexto container-->

                    <!---sexto container-->
                    <div class="container">
                        <h2>Prueba de Arcos de moviidad de miembros superiores</h2>

                        <div class="row">
                            <div class="col-sm">

                                <img src="{{ asset('src/assets/img/Fisioterapia/img2.jpg') }}" alt="">
                            </div>
                            <div class="col-sm">
                                <h2>Movimiento</h2>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="table-responsive">
                                                <h2>Movimiento</h2>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Flexion </th>
                                                            <th scope="col">Extencion</th>

                                                        </tr>
                                                        <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                valor 1
                                                            </td>
                                                            <td>
                                                                valor 2
                                                            </td>
                                                        </tr>



                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="table-responsive">
                                                <h2>Movimiento</h2>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">ABD </th>
                                                            <th scope="col">ADD</th>

                                                        </tr>
                                                        <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                valor 1
                                                            </td>
                                                            <td>
                                                                valor 2
                                                            </td>
                                                        </tr>



                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <div class="col-sm">
                                <img src="{{ asset('src/assets/img/Fisioterapia/img3.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="input-group">
                            <span class="input-group-text">Observaciones</span>
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                    </div>

                    <!---end--sexto container-->


                    <!---sexto container-->
                    <div class="container">
                        <h2>Prueba de Arcos de moviidad de miembros inferiores</h2>

                        <div class="row">
                            <div class="col-sm">

                                <img src="{{ asset('src/assets/img/Fisioterapia/img2.jpg') }}" alt="">
                            </div>
                            <div class="col-sm">
                                <h2>Movimiento</h2>
                                <div class="container">
                                    <div class="row">

                                        <div class="table-responsive">

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Flexion </th>
                                                        <th scope="col">Extencion</th>

                                                    </tr>
                                                    <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            valor 1
                                                        </td>
                                                        <td>
                                                            valor 2
                                                        </td>
                                                    </tr>



                                                </tbody>
                                            </table>
                                        </div>



                                    </div>
                                </div>


                            </div>
                            <div class="col-sm">
                                <img src="{{ asset('src/assets/img/Fisioterapia/img3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Observaciones</span>
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                    </div>

                    <!---end--sexto container-->

                    <!---end--sexto container-->


                    <!---septimo container-->
                    <div class="container">
                        <h2>Evaluacion Postura</h2>
                        <div class="row">
                            <div class="col-sm">

                                <!---septimo container-->
                                <div class="container">

                                    <div class="container">
                                        <h2>Vista Frontal</h2>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Aliniacion Corporal</th>
                                                                <th scope="col">L</th>
                                                                <th class="text-center" scope="col">M</th>
                                                                <th class="text-center" scope="col">S</th>
                                                                <th class="text-center" scope="col">Observaciones</th>
                                                            </tr>
                                                            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden">
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $Datos = ['Inclinación Lateral la Cabeza', 'Cabeza Rotada', 'Asimetria Maxilar', 'Clavículas Asimétricas', 'Hombre Capído', 'Hombro Elevado', 'Cubito Valgo', 'Cubito Varo', 'Rotación Interna de Cadera', 'Rotación Externa ', 'Genu Varum', 'Genu Valgum', 'Torsión Tibial Interna', 'Torsión Tibial Externa', 'Hallux Valgus', 'Dedos en Garra', 'Dedos en Martillo'];
                                                                
                                                            @endphp
                                                            @foreach ($Datos as $Dat)
                                                                <tr>
                                                                    <td><label
                                                                            for="formGroupExampleInput">{{ $Dat }}</label>
                                                                    </td>
                                                                    <td><label
                                                                            for="formGroupExampleInput">___________</label>
                                                                    </td>
                                                                    <td><label
                                                                            for="formGroupExampleInput">___________</label>
                                                                    </td>
                                                                    <td><label
                                                                            for="formGroupExampleInput">___________</label>
                                                                    </td>
                                                                    <td><label
                                                                            for="formGroupExampleInput">___________</label>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            <tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!---table-->

                                    <!--end table -->
                                </div>

                                <!---end--septimo container-->
                            </div>
                            <div class="col-sm">
                                <img src="{{ asset('src/assets/img/Fisioterapia/img13.jpg') }}" alt=""
                                    width="100%" height="100%">
                            </div>

                        </div>
                    </div>

                    <!---end--septimo container-->

                    <!---octavo container-->
                    <div class="container">
                        <h2>Evaluacion Postura</h2>
                        <div class="row">
                            <div class="col-sm">

                                <!---septimo container-->
                                <div class="container">

                                    <div class="container">
                                        <h2>Vista Lateral</h2>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Aleniacion Corporal</th>
                                                                <th scope="col">L</th>
                                                                <th class="text-center" scope="col">M</th>
                                                                <th class="text-center" scope="col">S</th>
                                                                <th class="text-center" scope="col">Observaciones</th>
                                                            </tr>
                                                            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden">
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $Datos = ['Dezplazamiento Anterior al cuerpo', 'Dezplazamiento Posterior del Cuerpo', 'Cabeza Adelantada', 'Vertebras Torácicas:Cifosis', 'Vertebras Torácicas:Pectus Excavatum', 'Pecho en Tonel', 'Pectus Carinatum', 'Columna:Lordosis', 'Espalda Cifotiva(Columna)', 'Espalda Plana(Columna)', 'Inclinacion Ant.de Pelvis y Cadera', 'Inclinacion Post.de Pelvis y Cadera', 'Genu Recurvatum', 'Rodillas Flexionadas'];
                                                                
                                                            @endphp
                                                            @foreach ($Datos as $Dat)
                                                                <tr>
                                                                    <td><label
                                                                            for="formGroupExampleInput">{{ $Dat }}</label>
                                                                    </td>
                                                                    <td><label
                                                                            for="formGroupExampleInput">___________</label>
                                                                    </td>
                                                                    <td><label
                                                                            for="formGroupExampleInput">___________</label>
                                                                    </td>
                                                                    <td><label
                                                                            for="formGroupExampleInput">___________</label>
                                                                    </td>
                                                                    <td><label
                                                                            for="formGroupExampleInput">___________</label>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            <tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!---table-->

                                    <!--end table -->
                                </div>

                                <!---end--octavo container-->
                            </div>
                            <div class="col-sm">
                                <img src="{{ asset('src/assets/img/Fisioterapia/img14.jpg') }}" alt=""
                                    width="100%" height="100%">
                            </div>

                        </div>
                    </div>

                    <!---end--octavo container-->
                    <!---noveno container-->
                    <div class="container">
                        <h2>Evaluacion Postura</h2>
                        <div class="row">
                            <div class="col-sm">

                                <!---septimo container-->
                                <div class="container">

                                    <div class="container">
                                        <h2>Vista Posterior</h2>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Aleniacion Corporal</th>
                                                                <th scope="col">L</th>
                                                                <th class="text-center" scope="col">M</th>
                                                                <th class="text-center" scope="col">S</th>
                                                                <th class="text-center" scope="col">Observaciones</th>
                                                            </tr>
                                                            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden">
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $Datos = ['Cabeza inclinada', 'Cabeza rotada', 'Hombro Caido', 'Hombro Elevado', 'Espalda Plana', 'Abducción de Escapulas', 'Abduccion de escapulas', 'Escapulas Aladas', 'Curvatura Lateral de la Columna', 'Rotacion Interna  de Cadera(Tronco)', 'Rotacion Externa de Cadera', 'Inclinación  Lateral de la Pelvis', 'Rotacion Pélvica', 'Cadera Abducida', 'Pie Pronado', 'Pie Supiano', 'Pie Plano', 'Pie Cavo'];
                                                                
                                                            @endphp
                                                            @foreach ($Datos as $Dat)
                                                                <tr>
                                                                    <td><label
                                                                            for="formGroupExampleInput">{{ $Dat }}</label>
                                                                    </td>
                                                                    <td><label
                                                                            for="formGroupExampleInput">___________</label>
                                                                    </td>
                                                                    <td><label
                                                                            for="formGroupExampleInput">___________</label>
                                                                    </td>
                                                                    <td><label
                                                                            for="formGroupExampleInput">___________</label>
                                                                    </td>
                                                                    <td><label
                                                                            for="formGroupExampleInput">___________</label>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            <tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!---table-->

                                    <!--end table -->
                                </div>

                                <!---end--octavo container-->
                            </div>
                            <div class="col-sm">
                                <img src="{{ asset('src/assets/img/Fisioterapia/img15.jpg') }}" alt=""
                                    width="100%" height="100%">
                            </div>

                        </div>
                    </div>

                    <!---end--noveno container-->
                    <!---octavo container-->
                    <div class="container">
                        <h2>Evaluacion Postura</h2>
                        <div class="row">
                            <div class="col-sm">

                                <!---septimo container-->
                                <div class="container">

                                    <div class="container">
                                        <h2>Vista Lateral</h2>
                                        <div class="col-sm">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Aleniacion Corporal</th>
                                                            <th scope="col">L</th>
                                                            <th class="text-center" scope="col">M</th>
                                                            <th class="text-center" scope="col">S</th>

                                                        </tr>
                                                        <tr aria-hidden="true" class="mt-3 d-block table-row-hidden">
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $Datos = [
                                                                'DINICIO DE LA MARCHA (Inmediatamente después de
decir “camine”)',
                                                                'Duda o vacila o múltiples intentos para comenzar',
                                                                'El pie derecho no sobrepasa al izquierdo con el paso
en la fase del balanceo',
                                                                'El pie derecho no se levanta completamente del
suelo con el paso en la fase del balanceo',
                                                                'El pie izquierdo no sobrepasa el derecho con el paso
en la fase del balanceo',
                                                                'El pie izquierdo no se levanta completamente del
suelo con el paso en la fase del balanceo',
                                                                'La longitud del paso con el pie derecho e izquierdo es
diferente',
                                                                'Para o hay discontinuidad entre los pasos',
                                                                'Marcada desviación, utiliza ayuda',
                                                                'Marcado balanceo o utiliza ayuda, flexión de rodillas,
espalda o extensión hacia afuera de los brazos
',
                                                                'ARCHA
Talones separados',
                                                                'SUMA TOTAL',
                                                            ];
                                                            
                                                        @endphp
                                                        @foreach ($Datos as $Dat)
                                                            <tr>
                                                                <td><label
                                                                        for="formGroupExampleInput">{{ $Dat }}</label>
                                                                </td>
                                                                <td><label for="formGroupExampleInput">___________</label>
                                                                </td>
                                                                <td><label for="formGroupExampleInput">___________</label>
                                                                </td>
                                                                <td><label for="formGroupExampleInput">___________</label>
                                                                </td>

                                                            </tr>
                                                        @endforeach
                                                        <tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                    <!---table-->

                                    <!--end table -->
                                </div>

                                <!---end--octavo container-->
                            </div>


                        </div>
                    </div>

                    <!---end--octavo container-->




                </div>
            </div>


            @include('layouts.footer')
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
@endsection
@section('Scripts')
   
    <!--  END CUSTOM SCRIPTS FILE  -->


@endsection
