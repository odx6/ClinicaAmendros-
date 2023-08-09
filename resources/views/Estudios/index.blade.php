@extends('layouts.main')
@section('title', 'Agregar Estudio')
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

               <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Usuario : {{auth()->user()->name}}
                           
                            <li class="breadcrumb-item active" aria-current="page"> Correo : {{auth()->user()->email}}</li>

                        </ol> 
                    </nav>
                </div>
                <h1 style="text-align: center;">AGREGAR ESTUDIOS </h1>
                <h3>Datos del paciente </h3>
                <h4>Los datos marcados con <span class="red-asterisk">*</span>  son obligatorios</h4>
                <!-- /BREADCRUMB -->
                <!--calendario-->
                <div class="row layout-top-spacing layout-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-md-12">


                        <!-- Estudios -->
                        <h2>Estudios del paciente </h2>
                        

                        <form class="user needs-validation" method="POST" action="{{ route('Estudios.create', ['id' => $id]) }}" novalidate>
                            @csrf

                            
                            <div class="row mb-4">

                                <div class="col">
                                    <label for="formGroupExampleInput">Hemoglobina <span class="red-asterisk">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="HEMOGLOBINA" name="HEMOGLOBINA"
                                        required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2" value="N/A">
                                        <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un estudio valido para Hemoglobina
                                     </div>
                                         
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Hematocrito <span class="red-asterisk">*</span></label>
                                    <input type="text" class="form-control" placeholder="HEMATOCRITO " name="HEMATOCRITO"
                                        required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" value="N/A"> 
                                         <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un estudio valido para Hematocrito
                                     </div>
                                        
                                </div>
                            </div>
                            <div class="row mb-4">

                                <div class="col">
                                    <label for="formGroupExampleInput">Plaquetas <span class="red-asterisk">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="PLAQUETAS" name="PLAQUETAS" value="N/A"
                                        required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                         <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un estudio valido para plaquetas
                                     </div>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Glucosa <span class="red-asterisk">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="GLUCOSA" name="GLUCOSA"  value="N/A" required
                                        pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" >
                                        <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un estudio valido para Glucosa
                                     </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Urea <span class="red-asterisk">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="UREA" name="UREA" required value="N/A"
                                        pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                        <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un estudio valido para Urea
                                     </div>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Creatinina <span class="red-asterisk">*</span></label>
                                    <input type="text" class="form-control" placeholder="CREATININA " name="CREATININA" value="N/A"
                                        required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                        <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un estudio valido para creatinina
                                     </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Rx <span class="red-asterisk">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="RX" name="RX" required value="N/A"
                                        pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                          <div class="valid-feedback">
                                       Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un estudio valido para rx
                                     </div>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Usg <span class="red-asterisk">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="USG" name="USG" required value="N/A"
                                        pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                       <div class="valid-feedback">
                                       Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un estudio valido para usg
                                     </div>
                                </div>
                            </div>

                            <!--end estudios--->
                           


                    </div>

                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Guardar</button>
                    <!--end aPatologicos-->

                </form>

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
