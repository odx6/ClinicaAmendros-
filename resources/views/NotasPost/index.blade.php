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
                            <li class="breadcrumb-item"><a href="#">Usuario : {{auth()->user()->name}}
                           
                            <li class="breadcrumb-item active" aria-current="page"> Correo : {{auth()->user()->email}}</li>

                        </ol> 
                    </nav>
                </div>
                <h1 style="text-align: center;"> AGREGAR NOTA POSTQUIRURGICA</h1>
               
                <h4>Los datos marcados con <span class="red-asterisk">*</span>  son obligatorios</h4>
                <!-- /BREADCRUMB -->
                <!--calendario-->
                <div class="row layout-top-spacing layout-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-md-12">


                        <!-- Estudios -->
                        <h4>NOTAS POST QUIRÚRGICA </h4>
          

                        <!--Antecedentes patologicos-->

                        <form class="user needs-validation" method="POST" action="{{ route('NotasPost.create', ['id' => $id]) }}" novalidate>
                            @csrf

                            <div class="row mb-4">

                                <div class="col">
                                    <label for="formGroupExampleInput">Cirugía programada <span class="red-asterisk">*</span> </label>
                                    <input type="date" class="form-control" placeholder="ciruja programada"
                                        name="PC" required>
                                        <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una fecha valida
                                     </div>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Cirugía realizada <span class="red-asterisk">*</span></label>
                                    <input type="date" class="form-control" placeholder="CIRUJIA REALIZADA"
                                        name="EJ" required>
                                        <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una fecha valida
                                     </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Hallazgo <span class="red-asterisk">*</span> </label>

                                    <input type="text" class="form-control" placeholder="Hallazgos" name="HA"
                                        required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" value="N/A">
                                         <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un hallazgo valido
                                     </div>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Complicaciones <span class="red-asterisk">*</span></label>
                                    <input type="text" class="form-control" placeholder="COMPLICACIONES" name="CO"
                                        required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" value="N/A">
                                        <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una complicación valida
                                     </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Nombre del cirujano <span class="red-asterisk">*</span></label>
                                    <input type="text" class="form-control" placeholder="Nombre del cirujano "
                                        name="NC" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+"> <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un nombre valido 
                                     </div>
                                </div>

                                <div class="col">
                                    <label for="formGroupExampleInput">Nombre del ayudante <span class="red-asterisk">*</span></label>
                                    <input type="text" class="form-control" placeholder="Nombre del ayudante"
                                        name="NAY" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+"> <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un nombre valido 
                                     </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Nombre del instrumentista <span class="red-asterisk">*</span></label>
                                    <input type="text" class="form-control" placeholder="nombre instrumentista"
                                        name="NI" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+"> <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un nombre valido 
                                     </div>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Nombre del anestesiólogo <span class="red-asterisk">*</span></label>
                                    <input type="text" class="form-control" placeholder="Nombre del aniestesiologo"
                                        name="NAN" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+"> <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un nombre valido 
                                     </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Circulante <span class="red-asterisk">*</span></label>
                                    <input type="text" class="form-control" placeholder="circulante" name="CIR"
                                        required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+"> <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un nombre valido 
                                     </div>
                                </div>
                                <!--end notaspost-->
                            </div>
                            <br>



                            <!--end_Formulario-->


                            <!--end_Formulario-->

                            <!--end notaspost-->



                    </div>


                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Guardar</button>
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
