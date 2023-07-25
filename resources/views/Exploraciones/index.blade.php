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
                                        <input type="text" class="form-control" placeholder="T/A"
                                            name="T/A" pattern="^[0-9]+(?:\/[0-9]+)?$" required>
                                
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        FC </label>
                                        <input type="number" class="form-control" placeholder="FC"
                                            name="FC" pattern="^\d+(\.\d+)?$" required>
                                    
                                </div>
                            </div>
                            <div class="row mb-4">
                              
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        FR </label>
                                         <input type="number" class="form-control" placeholder="FR"
                                            name="FR" pattern="^\d+(\.\d+)?$" required>
                                  
                                </div>
                            </div>
                            <div class="row mb-4">
                                
                                </div>




                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Temperatura </label>
                                        <input type="numeric" class="form-control" placeholder="TEMPERATURA"
                                            name="TEMP" pattern="^\d+(\.\d+)?$" required>
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Peso (KG) </label>
                                        <input type="numberic" class="form-control" placeholder="PESO (KG)"
                                            name="PESO" pattern="^\d+(\.\d+)?$" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Nombre exploración </label>
                                        <input type="text" class="form-control" placeholder="Exploracion Cabeza" value="N/A"
                                            name="NEF" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Cabeza </label>
                                        <input type="text" class="form-control" placeholder="Exploracion Cabeza" value="N/A"
                                            name="CAEF" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Cuello</label>
                                        <input type="text" class="form-control" placeholder="Exploracion cuello  " value="N/A"
                                            name="CUEF" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2"
                                            max="30">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Abdomen</label>
                                        <input type="text" class="form-control" placeholder="Exploracion abdomen " value="N/A"
                                            name="ABEF" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2"
                                            max="30">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Miembro pelvico </label>
                                        <input type="text" class="form-control"
                                            placeholder="Exploracion miembro pelvico" name="MP" value="N/A"  required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2" max="30">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Miembro toraxico</label>
                                        <input type="text" class="form-control" value="N/A"
                                            placeholder="Exploracion miembro toraxico" name="MT" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2" max="30">
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
