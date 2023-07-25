@extends('layouts.main')
@section('title', 'Notas Quirúrgicas')
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
                            <li class="breadcrumb-item active" aria-current="page">Registrar Nota quirúrgica</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->
                <!--calendario-->
                <div class="row layout-top-spacing layout-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-md-12">


                        <!-- Estudios -->
                        <h2>NOTAS POST QUIRÚRGICA </h2>
                        <!--Antecedentes patologicos-->

                        <form class="user needs-validation" method="POST" action="{{ route('NotasPost.create', ['id' => $id]) }}" novalidate>
                            @csrf

                            <div class="row mb-4">

                                <div class="col">
                                    <label for="formGroupExampleInput">Cirugía programada </label>
                                    <input type="date" class="form-control" placeholder="ciruja programada"
                                        name="PC" required>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Cirugía realizada</label>
                                    <input type="date" class="form-control" placeholder="CIRUJIA REALIZADA"
                                        name="EJ" required>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Hallazgo </label>

                                    <input type="text" class="form-control" placeholder="Hallazgos" name="HA"
                                        required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" value="N/A">
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Complicaciones </label>
                                    <input type="text" class="form-control" placeholder="COMPLICACIONES" name="CO"
                                        required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" value="N/A">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Nombre del cirujano </label>
                                    <input type="text" class="form-control" placeholder="Nombre del cirujano "
                                        name="NC" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                                </div>

                                <div class="col">
                                    <label for="formGroupExampleInput">Nombre del ayudante </label>
                                    <input type="text" class="form-control" placeholder="Nombre del ayudante"
                                        name="NAY" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Nombre del instrumentista</label>
                                    <input type="text" class="form-control" placeholder="nombre instrumentista"
                                        name="NI" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Nombre del anestesiólogo</label>
                                    <input type="text" class="form-control" placeholder="Nombre del aniestesiologo"
                                        name="NAN" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Circulante</label>
                                    <input type="text" class="form-control" placeholder="circulante" name="CIR"
                                        required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                                </div>
                                <!--end notaspost-->
                            </div>
                            <br>



                            <!--end_Formulario-->


                            <!--end_Formulario-->

                            <!--end notaspost-->



                    </div>


                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Enviar
                        datos</button>
                    </form>
                </div>
            </div>
        </div>




        <!--end_Estudios-->

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
