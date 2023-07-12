@extends('layouts.main')
@section('title', 'Home')
@section('linkAuth')


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
                            <li class="breadcrumb-item active" aria-current="page">Registrar Hitoria clinica</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->
                <!--calendario-->
                <div class="row layout-top-spacing layout-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-md-12">


                        <!-- Fomulario -->
                        <!--- Historial-->

                        <form class="user" method="POST" action="{{ route('historial.create', ['Paciente' => $id]) }}">
                            @csrf

                            <h2> ANTECEDENTES HEREDOFAMILARES</h2>
                            <br>
                            <h2>Madre con</h2>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">diabetes millitus(DM)
                                    </label>
                                    <select class="form-control" name="DM" required>
                                        <option selected disabled value="">diabetes </option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Hirpertensión (HAS)</label>
                                    <select class="form-control" name="HAS" required>
                                        <option selected disabled value="">Hirpertensión </option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">

                                    <label for="formGroupExampleInput">Cancer(CA)</label>
                                    <select class="form-control" name="CA" required>
                                        <option selected disabled value="">Cancer(CA)</option>

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
                                    <label for="formGroupExampleInput">diabetes millitus(DM)
                                    </label>
                                    <select class="form-control" name="PDM" required>
                                        <option selected disabled value=""> diabetes millitus(DM)</option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Hirpertensión (HAS)</label>
                                    <select class="form-control" name="PHAS" required>
                                        <option selected disabled value="">Hirpertensión (HAS)</option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">

                                    <label for="formGroupExampleInput"> Cancer(CA)</label>
                                    <select class="form-control" name="PCA" required>
                                        <option selected disabled value="">Cancer(CA) </option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>

                                <div class="col">
                                    <label for="formGroupExampleInput">Padre fallecido</label>
                                    <select class="form-control" name="PF" required>
                                        <option selected disabled value="">Padre fallecido </option>

                                        <option value="Si">Si</option>
                                        <option value="No">No</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Causas</label>
                                    <input type="text" class="form-control"
                                        placeholder="CAUSAS DE LA MUERTE PADRE Y MADRE " name="CAM"
                                        pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" max="50" required>
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
                                        required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2">
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">alimentos
                                    </label>
                                    <input type="text" class="form-control" placeholder="ALERGIAS POR ALIMENTOS "
                                        name="AL" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" required>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput"> Sustancias
                                        quimicas </label>

                                    <input type="text" class="form-control"
                                        placeholder="ALERGIAS POR SUSTANCIAS QUIMICAS" name="ALS"
                                        pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" required>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Ciruguias previas
                                    </label>
                                    <input type="text" class="form-control" placeholder="CIRUJIAS PREVIAS "
                                        name="CP" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" required>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput"> Transfuciones </label>
                                    <input type="text" class="form-control" placeholder="TRANSFUCIONES"
                                        name="TF" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" required>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Fraccturas
                                    </label>

                                    <input type="text" class="form-control" placeholder="ACTUALES O PREVIAS"
                                        name="FP" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" required>
                                </div>


                            </div>

                            <div class="row mb-4">

                                <div class="col">
                                    <label for="formGroupExampleInput"> Alcholico </label>
                                    <select class="form-control" name="ALP" required>
                                        <option selected disabled value="">Alcholico </option>

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



                    </div>


                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Enviar
                        Datos</button>
                    </form>
                    <!--end_Formulario-->

                </div>

            </div>

            @include('layouts.footer')
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
@endsection
@section('Scripts')


@endsection
