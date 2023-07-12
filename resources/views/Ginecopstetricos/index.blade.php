@extends('layouts.main')
@section('title', 'Home')
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
                            <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Agregar Antecedente Ginecobstetrico</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->
                <!--calendario-->
                <div class="row layout-top-spacing layout-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-md-12">


                        <!-- Fomulario -->
                        <!--- Historial-->
                        <h2> ANTECEDENTES Ginecobstrecticos </h2>

                        <!--- Historial-->
                        <form class="user needs-validation" method="POST" action="{{ route('Gineco.create', ['id' => $id]) }}" novalidate>
                            @csrf
                            <!--Antecedentes ginecologicos-->
                           
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
                                    <label for="formGroupExampleInput">Número cesareas </label>
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



                        


                        <!-----end gine--->



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
