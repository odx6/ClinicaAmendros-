@extends('layouts.main')
@section('title', 'Historial-clínico-fisioterapia')
@section('linkAuth')
    <!-- BEGIN PAGE LEVEL STYLE -->


    <link href="../src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL STYLE -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('src/assets/css/light/components/tabs.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('src/assets/css/dark/components/tabs.css') }}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/light/forms/switches.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/dark/forms/switches.css') }}">
   s
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
                        <h2>Antecedentes Patológicos y Heredofamiliares</h2>
                        <div class="row">
                            <div class="col">
                                <form class="user needs-validation" method="POST"
                                    action="{{ route('create.AntecedenteAH', ['id' => $id]) }}" novalidate>
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
                                                            id="exampleFormControlInput1" value="N/A"
                                                            placeholder="Especificacion para diabetes" name="EDiabetes"
                                                            required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Enf.Reumáticas</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="EnfReumaticas"
                                                            value="si">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput1" value="N/A"
                                                            placeholder="Enfermedades Reumaticas" name="EEnf" required
                                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
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
                                                            id="form-custom-switch-success" name="Alergias" value="si">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput1" value="N/A"
                                                            placeholder="Alergias" name="EAlergias" required
                                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
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
                                                            id="exampleFormControlInput1" value="N/A"
                                                            placeholder="Encames" name="EEncames" required
                                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
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
                                                            id="exampleFormControlInput1" value="N/A"
                                                            placeholder="HTA" name="ETA" required
                                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                                    </div>
                                                </td>
                                                </tr>
                                            <tr>
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
                                                            id="exampleFormControlInput1" value="N/A"
                                                            placeholder="Accidentes" name="EAccidentes" required
                                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
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
                                                            id="exampleFormControlInput1" value="N/A"
                                                            placeholder="Cáncer" name="ECancer" required
                                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                                    </div>
                                                </td>
                                                  </tr>
                                            <tr>
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
                                                            id="exampleFormControlInput1" value="N/A"
                                                            placeholder="Cardiopatias" name="ECardiopatias" required
                                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
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
                                                            id="exampleFormControlInput1" value="N/A"
                                                            placeholder="Transfunciones" name="ETransfunciones" required
                                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                                    </div>
                                                </td>
                                                </tr>
                                            <tr>
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
                                                            id="exampleFormControlInput1" value="N/A"
                                                            placeholder="Cirugias" name="ECirugias" required
                                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
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
                                                            id="exampleFormControlInput1" value="N/A"
                                                            placeholder="Fracturas" name="EFracturas" required
                                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                                    </div>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="col">
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

                                                                    <input type="numeric" class="form-control"
                                                                        id="exampleFormControlInput1" value="" 
                                                                        placeholder="TA" name="TA" pattern="^[0-9]+(?:\/[0-9]+)?$" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <h3>TEMP</h3>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">

                                                                    <input type="number" class="form-control"
                                                                        id="exampleFormControlInput1" value="" pattern="^\d+(\.\d+)?$"
                                                                        placeholder="Temp" name="Temp" required>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <h3>FC</h3>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">

                                                                    <input type="number" class="form-control"
                                                                        id="exampleFormControlInput1" value="" pattern="^\d+(\.\d+)?$"
                                                                        placeholder="FC" name="FC" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">

                                                                <h3>FR</h3>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">

                                                                    <input type="numeric" class="form-control"
                                                                        id="exampleFormControlInput1" value=""  pattern="^\d+(\.\d+)?$"
                                                                        placeholder="FR" name="FR" required>
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
                                                                <tr aria-hidden="true"
                                                                    class="mt-3 d-block table-row-hidden"></tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div
                                                                            class="switch form-switch-custom switch-inline form-switch-success">
                                                                            <label class="switch-label"
                                                                                for="form-custom-switch-success">Si/no</label>
                                                                            <input class="switch-input" type="checkbox"
                                                                                role="switch"
                                                                                id="form-custom-switch-success"
                                                                                name="Espasmos" value="si">

                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">

                                                                            <input type="text" class="form-control"
                                                                                id="exampleFormControlInput1"
                                                                                value="N/A"
                                                                                placeholder="Especificacion Espasmos"
                                                                                name="EEspasmos" required
                                                                                pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
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

    <!--  END CUSTOM SCRIPTS FILE  -->
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->

    <script src="{{ asset('MisFunciones/Clinica.js') }}"></script>
    <script src="{{ asset('src/plugins/src/highlight/highlight.pack.js') }}"></script>

    <!--  END CUSTOM SCRIPTS FILE  -->


@endsection
