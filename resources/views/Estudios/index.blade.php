@extends('layouts.main')
@section('title','Agregar Estudio')
@section('linkAuth')
 <!-- BEGIN PAGE LEVEL STYLE -->
 <link href="../src/plugins/src/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />

<link href="../src/plugins/css/light/fullcalendar/custom-fullcalendar.css" rel="stylesheet" type="text/css" />
<link href="../src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css">

<link href="../src/plugins/css/dark/fullcalendar/custom-fullcalendar.css" rel="stylesheet" type="text/css" />
<link href="../src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css">
<!-- END PAGE LEVEL STYLE -->

@endsection

@section('content')
<!-- BEGIN LOADER -->
<div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
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
                    <h2>Estudios del paciente </h2>
                    <!--Antecedentes patologicos-->
                  
                        <form class="user" method="POST"
                            action="{{ route('Estudios.create',['id'=>$id]) }}">
                            @csrf


                            <div class="row mb-4">

                                
                                <div class="col">
                                    <label for="formGroupExampleInput">IDENTIFICADOR DEL PACIENTE
                                    </label>
                                    <input type="text" class="form-control"
                                        placeholder="Identificador Del Paciente" name="IDPA"
                                        value="{{ $id }}" disabled >


                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">HEMOGLOBINA
                                        </label>
                                        <input type="text" class="form-control"
                                            placeholder="HEMOGLOBINA" name="HEMOGLOBINA"
                                           >
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">HEMATOCRITO</label>
                                        <input type="text" class="form-control"
                                            placeholder="HEMATOCRITO " name="HEMATOCRITO"
                                           >
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">PLAQUETAS
                                        </label>
                                        <input type="text" class="form-control"
                                            placeholder="PLAQUETAS" name="PLAQUETAS"
                                            >
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">GLUCOSA
                                        </label>
                                        <input type="text" class="form-control"
                                            placeholder="GLUCOSA" name="GLUCOSA"
                                            >
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">UREA
                                        </label>
                                        <input type="text" class="form-control"
                                            placeholder="UREA" name="UREA"
                                            >
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">CREATININA</label>
                                        <input type="text" class="form-control"
                                            placeholder="CREATININA " name="CREATININA"
                                            >
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">RX
                                        </label>
                                        <input type="text" class="form-control"
                                            placeholder="RX" name="RX"
                                           >
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">USG
                                        </label>
                                        <input type="text" class="form-control"
                                            placeholder="USG" name="USG"
                                            >
                                    </div>
                                </div>

                                <div class="modal-footer">
                                   
                                    <button type="submit"
                                        class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                                        >Enviar Datos</button>
                                </div>
                            </div>
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
  <!-- BEGIN PAGE LEVEL SCRIPTS -->
  <script src="../src/plugins/src/fullcalendar/fullcalendar.min.js"></script>
    <script src="../src/plugins/src/uuid/uuid4.min.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="../src/plugins/src/fullcalendar/custom-fullcalendar.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->

@endsection