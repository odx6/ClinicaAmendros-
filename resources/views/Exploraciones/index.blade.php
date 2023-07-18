@extends('layouts.main')
@section('title', 'Agregar Exploración física')
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
                            <li class="breadcrumb-item active" aria-current="page">Registrar Paciente Secretaria</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->
                <!--calendario-->
                <div class="row layout-top-spacing layout-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-md-12">


                        <!-- Estudios -->


                        <form class="user needs-validation" method="POST"
                            action="{{ route('Exploracion.create', ['id' => $id, 'idDoc' => $idDoc]) }}" novalidate>
                            @csrf

                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        T/A </label>
                                    <select class="form-control" name="T/A" required>
                                        <option selected disabled value="">T/a </option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        FC </label>
                                    <select class="form-control" name="FC" required>
                                        <option selected disabled value="">FC </option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        X1 </label>
                                    <select class="form-control" name="X1" required>
                                        <option selected disabled value="">X1 </option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        FR </label>
                                    <select class="form-control" name="FR" required>
                                        <option selected disabled value="">FR </option>

                                        < <option value="1">Si</option>
                                            <option value="0">No</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        X2 </label>
                                    <select class="form-control" name="X2" required>
                                        <option selected disabled value="">X2 </option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
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
                                        <label for="formGroupExampleInput">Nombre exploración </label>
                                        <input type="text" class="form-control" placeholder="Exploracion Cabeza"
                                            name="NEF" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Cabeza </label>
                                        <input type="text" class="form-control" placeholder="Exploracion Cabeza"
                                            name="CAEF" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Cuello</label>
                                        <input type="text" class="form-control" placeholder="Exploracion cuello  "
                                            name="CUEF" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2"
                                            max="30">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Abdomen</label>
                                        <input type="text" class="form-control" placeholder="Exploracion abdomen "
                                            name="ABEF" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2"
                                            max="30">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Miembro pelvico </label>
                                        <input type="text" class="form-control"
                                            placeholder="Exploracion miembro pelvico" name="MP" required
                                            pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" max="30">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Miembro toraxico</label>
                                        <input type="text" class="form-control"
                                            placeholder="Exploracion miembro toraxico" name="MT" required
                                            pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" max="30">
                                    </div>

                                </div>

                            </div>
                            <!----- end Notas--->
                            <!--end notaspost-->
                            


                        <!--end_Estudios-->

                    </div>

                        <button type="submit"
                            class="btn btn-success btn-rounded mb-2 me-4  btn-add-event Hola">Enviar Datos</button>
                </form>
                </div>


                @include('layouts.footer')
            </div>
            <!--  END CONTENT AREA  -->

        </div>
        <!-- END MAIN CONTAINER -->
    @endsection
    @section('Scripts')
        

    @endsection
