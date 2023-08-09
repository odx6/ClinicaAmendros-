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
                            <li class="breadcrumb-item"><a href="#">Usuario : {{auth()->user()->name}}
                           
                            <li class="breadcrumb-item active" aria-current="page"> Correo : {{auth()->user()->email}}</li>

                        </ol> 
                    </nav>
                </div>
                <h1 style="text-align: center;">AGREGAR EXPLORACIONES FÍSICA </h1>
                <h3>Datos de las exploraciones físicas</h3>
                <h4>Los datos marcados con <span class="red-asterisk">*</span>  son obligatorios</h4>
                <!-- /BREADCRUMB -->
                <!--calendario-->
                <div class="row layout-top-spacing layout-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-md-12">


                        <!-- Estudios -->


                        <form class="user needs-validation" method="POST"
                            action="{{ route('Exploracion.create', ['id' => $id, 'idDoc' => $idDoc]) }}" novalidate>
                            @csrf
                             <h4>EXPLORACIÓN FÍSICA</h4>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        T/A <span class="red-asterisk">*</span> </label>
                                        <input type="text" class="form-control" placeholder="T/A"
                                            name="T/A" pattern="^[0-9]+(?:\/[0-9]+)?$" required>
                                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un valor numérico por ejemplo 80/100
                                     </div>
                                
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        FC <span class="red-asterisk">*</span> </label>
                                        <input type="number" class="form-control" placeholder="FC"
                                            name="FC" pattern="^\d+(\.\d+)?$" required>
                                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un valor numérico valido
                                     </div>
                                    
                                </div>
                            </div>
                            <div class="row mb-4">
                              
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        FR <span class="red-asterisk">*</span></label>
                                         <input type="number" class="form-control" placeholder="FR"
                                            name="FR" pattern="^\d+(\.\d+)?$" required>
                                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un valor numérico valido
                                     </div>
                                  
                                </div>
                            </div>
                            <div class="row mb-4">
                                
                                </div>




                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Temperatura <span class="red-asterisk">*</span></label>
                                        <input type="numeric" class="form-control" placeholder="TEMPERATURA"
                                            name="TEMP" pattern="^\d+(\.\d+)?$" required>
                                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un valor numérico valido
                                     </div>
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Peso (KG) <span class="red-asterisk">*</span></label>
                                        <input type="numberic" class="form-control" placeholder="PESO (KG)"
                                            name="PESO" pattern="^\d+(\.\d+)?$" required>
                                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un valor numérico valido
                                     </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Nombre exploración <span class="red-asterisk">*</span></label>
                                        <input type="text" class="form-control" placeholder="Exploracion Cabeza" value="N/A"
                                            name="NEF" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2">
                                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un  nombre valido para la exploración 
                                     </div>

                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Cabeza <span class="red-asterisk">*</span></label>
                                        <input type="text" class="form-control" placeholder="Exploracion Cabeza" value="N/A"
                                            name="CAEF" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2">
                                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una exploración valida para la cabeza
                                     </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Cuello <span class="red-asterisk">*</span></label>
                                        <input type="text" class="form-control" placeholder="Exploracion cuello  " value="N/A"
                                            name="CUEF" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2"
                                            max="30">
                                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una exploración valida para la cuello
                                     </div>
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Abdomen <span class="red-asterisk">*</span></label>
                                        <input type="text" class="form-control" placeholder="Exploracion abdomen " value="N/A"
                                            name="ABEF" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2"
                                            max="30">
                                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una exploración valida para la abdomen
                                     </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Miembro pelvico <span class="red-asterisk">*</span> </label>
                                        <input type="text" class="form-control"
                                            placeholder="Exploracion miembro pelvico" name="MP" value="N/A"  required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2" max="30">
                                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una exploración valida para el miembro pelvico
                                     </div>
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">Miembro toraxico <span class="red-asterisk">*</span></label>
                                        <input type="text" class="form-control" value="N/A"
                                            placeholder="Exploracion miembro toraxico" name="MT" required
                                            pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2" max="30">
                                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una exploración valida para el miembro toraxico
                                     </div>
                                    </div>

                                </div>

                            </div>
                            <!----- end Notas--->
                            <!--end notaspost-->
                            
                             <button type="submit"
                            class="btn btn-success btn-rounded mb-2 me-4  btn-add-event Hola">Guardar</button>

                        <!--end_Estudios-->

                    </div>

                       
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
