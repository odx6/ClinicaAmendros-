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
                            <li class="breadcrumb-item"><a href="#">Usuario : {{auth()->user()->name}}
                           
                            <li class="breadcrumb-item active" aria-current="page"> Correo : {{auth()->user()->email}}</li>

                        </ol> 
                    </nav>
                </div>
                <h1 style="text-align: center;">AGREGAR HISTORIAL</h1>
               
                <h4>Los datos marcados con <span class="red-asterisk">*</span>  son obligatorios</h4>
                <!-- /BREADCRUMB -->
                <!--calendario-->
                <div class="row layout-top-spacing layout-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-md-12">


                        <!-- Fomulario -->
                        <!--- Historial-->

                        <form class="user needs-validation" method="POST" action="{{ route('historial.create', ['Paciente' => $id]) }}" novalidate>
                            @csrf

                            <h4> ANTECEDENTES HEREDOFAMILARES</h4>
                            <br>
                            <h4>Madre con</h4>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">diabetes mellitus(DM) <span class="red-asterisk">*</span>
                                    </label>
                                    <select class="form-control" name="DM" required>
                                        <option selected disabled value="">... </option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                     <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Hipertensión (HAS) <span class="red-asterisk">*</span></label>
                                    <select class="form-control" name="HAS" required>
                                        <option selected disabled value="">... </option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                    <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">

                                    <label for="formGroupExampleInput">Cáncer(CA) <span class="red-asterisk">*</span></label>
                                    <select class="form-control" name="CA" required>
                                        <option selected disabled value="">...</option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                     <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                </div>

                                <div class="col">
                                    <label for="formGroupExampleInput">Madre fallecida <span class="red-asterisk">*</span></label>
                                    <select class="form-control" name="MF" required>
                                        <option selected disabled value="">... </option>

                                        <option value="Si">Si</option>
                                        <option value="No">No</option>

                                    </select>
                                     <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                </div>
                            </div>

                            <h4>Padre con :</h4>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">diabetes mellitus(DM) <span class="red-asterisk">*</span>
                                    </label>
                                    <select class="form-control" name="PDM" required>
                                        <option selected disabled value="">...</option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                     <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Hipertensión (HAS) <span class="red-asterisk">*</span></label>
                                    <select class="form-control" name="PHAS" required>
                                        <option selected disabled value="">..</option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                     <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">

                                    <label for="formGroupExampleInput"> Cáncer(CA) <span class="red-asterisk">*</span></label>
                                    <select class="form-control" name="PCA" required>
                                        <option selected disabled value="">...</option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                     <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                </div>

                                <div class="col">
                                    <label for="formGroupExampleInput">Padre fallecido <span class="red-asterisk">*</span></label>
                                    <select class="form-control" name="PF" required>
                                        <option selected disabled value="">...</option>

                                        <option value="Si">Si</option>
                                        <option value="No">No</option>

                                    </select>
                                     <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Causas <span class="red-asterisk">*</span></label>
                                    <input type="text" class="form-control"
                                        placeholder="CAUSAS DE LA MUERTE PADRE Y MADRE " name="CAM" value="N/A"
                                        pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2" max="50" required>
                                </div>

                            </div>
                            <br>
                            <h4> ANTECEDENTES PERSONALES NO PATOLOGICOS </h4>
                            <br>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Alergias <span class="red-asterisk">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="ALERGIAS" name="ALERGIAS"
                                        required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2" value="N/A">
                                         <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         ingrese una alergia valida
                                     </div>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">alimentos <span class="red-asterisk">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="ALERGIAS POR ALIMENTOS "
                                        name="AL" pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2" value="N/A" required >
                                         <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         ingrese una alergia para alimentos valida
                                     </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput"> Sustancias
                                        químicas <span class="red-asterisk">*</span> </label>

                                    <input type="text" class="form-control"
                                        placeholder="ALERGIAS POR SUSTANCIAS QUIMICAS" name="ALS" value="N/A"
                                        pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="2" required>
                                         <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         ingrese una alergia para sustancias químicas valida
                                     </div>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Cirugías previas <span class="red-asterisk">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="CIRUJIAS PREVIAS " value="N/A"
                                        name="CP" pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" required>
                                         <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         ingrese una cirugía previa valida
                                     </div>

                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput"> Transfusiones <span class="red-asterisk">*</span></label>
                                    <input type="text" class="form-control" placeholder="TRANSFUCIONES"
                                        name="TF" value="N/A" pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" required>
                                          <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         ingrese una transfusión  valida
                                     </div>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Fracturas <span class="red-asterisk">*</span>
                                    </label>

                                    <input type="text" class="form-control" placeholder="ACTUALES O PREVIAS"
                                        name="FP" value="N/A" pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" required>
                                         <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         ingrese una fractura valida
                                     </div>
                                </div>


                            </div>

                            <div class="row mb-4">

                                <div class="col">
                                    <label for="formGroupExampleInput"> Alcohólico <span class="red-asterisk">*</span></label>
                                    <select class="form-control" name="ALP" required>
                                        <option selected disabled value="">...</option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                     <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput"> Tabaquismo <span class="red-asterisk">*</span></label>
                                    <select class="form-control" name="TB" required>
                                        <option selected disabled value="">...</option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                     <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Drogas <span class="red-asterisk">*</span></label>
                                    <select class="form-control" name="DR" required>
                                        <option selected disabled value="">...</option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                     <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                </div>
                            </div>
                            <br>



                    </div>


                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Guardar</button>
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
