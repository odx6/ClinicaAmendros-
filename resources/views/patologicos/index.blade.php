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
                            <li class="breadcrumb-item"><a href="#">Usuario : {{auth()->user()->name}}
                           
                            <li class="breadcrumb-item active" aria-current="page"> Correo : {{auth()->user()->email}}</li>

                        </ol> 
                    </nav>
                </div>
                <h1 style="text-align: center;">AGREGAR ANTECEDENTES NO PATOLOGICOS </h1>
                <h3>Datos de antecedentes</h3>
                <h4>Los datos marcados con <span class="red-asterisk"><span class="red-asterisk">*</span></span>  son obligatorios</h4>
                <!-- /BREADCRUMB -->
                <!--calendario-->
                <div class="row layout-top-spacing layout-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-md-12">


                        <!-- Fomulario -->
                        <!--- Historial-->
                        <h4> ANTECEDENTES NO PATOLOGICOS </h4>
                       
                        <!--Antecedentes patologicos-->

                        <form class="user needs-validation" method="POST" action="{{ route('Pato.create', ['id' => $id]) }}" novalidate>
                            @csrf


                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">diabetes mellitus(DM) <span class="red-asterisk">*</span> </label>
                                    <select class="form-control" name="DMN" required>
                                        <option selected disabled value="">...</option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                    <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         El campo es obligatorio
                                     </div>
                                </div>

                                <div class="col">
                                    <label for="formGroupExampleInput">Tiempo de evolución <span class="red-asterisk">*</span></label>
                                    <input type="numeric" class="form-control" placeholder="Evolucion de la diabetes  "
                                        name="DMTE" required>
                                        <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Por favor ingresa un tiempo de evolución correcto 
                                     </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Hipertensión <span class="red-asterisk">*</span></label>
                                    <select class="form-control" name="HASN" required>
                                        <option selected disabled value="">...</option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                    <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         El campo es obligatorio
                                     </div>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Tiempo de evolución </label>
                                    <input type="numeric" class="form-control" placeholder="Evolucion" name="HASTE"
                                        required> 
                                         <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Por favor ingresa un tiempo de evolución correcto 
                                     </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Insuficiencia renal <span class="red-asterisk">*</span> <br>Aguda o Cronica </label>
                                    <select class="form-control" name="IR" required>
                                        <option selected disabled value="">...</option>

                                        <option value="1">Si</option>
                                        <option value="0">No</option>

                                    </select>
                                     <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         El campo es obligatorio
                                     </div>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput"> Tiempo de <br> evolución  <span class="red-asterisk">*</span></label>
                                    <input type="numeric" class="form-control" placeholder="Evolucion" name="IrTe"
                                        required>
                                         <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Por favor ingresa un tiempo de evolución correcto 
                                     </div>

                                </div>
                            </div>

                            <div class="row mb-4">

                                <div class="col">
                                    <label for="formGroupExampleInput">Otra <span class="red-asterisk">*</span> </label>
                                    <input type="text" class="form-control" placeholder="Evolucion" name="OTRA"
                                        required>
                                         <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese otra opción valida
                                     </div>
                                </div>
                            </div>
                            
                            <!--end aPatologicos-->

                        

                    </div>
                   

                        <button type="submit"
                            class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Guardar</button>
                
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
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
  
    <!--  END CUSTOM SCRIPTS FILE  -->

@endsection
