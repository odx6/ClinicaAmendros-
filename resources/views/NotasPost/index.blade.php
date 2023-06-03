@extends('layouts.main')
@section('title','Notas Quirurgicas')
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
                                <li class="breadcrumb-item active" aria-current="page">Registrar Nota quirurgica</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->
                   <!--calendario-->
                   <div class="row layout-top-spacing layout-spacing" id="cancel-row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
         

                    <!-- Estudios -->
                    <h2>NOTAS POST QUIRURGICA </h2>
                    <!--Antecedentes patologicos-->
                    
                        <form class="user" method="POST" action="{{ route('NotasPost.create',['id'=>$id]) }}">
                            @csrf


                            <div class="row mb-4">

                               
                                <div class="col">
                                    <label for="formGroupExampleInput">IDENTIFICADOR DEL PACIENTE
                                    </label>
                                    <input type="text" class="form-control"
                                        placeholder="Identificador Del Paciente" name="IDPA"
                                        value="{{ $id}}" disabled>
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">CIRUJIA PROGRAMADA </label>
                                        <input type="text" class="form-control"
                                            placeholder="ciruja programada" name="PC"
                                        >
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">CIRUJIA REALIZADA</label>
                                        <input type="text" class="form-control"
                                            placeholder="CIRUJIA REALIZADA"
                                            name="EJ">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">HALLAZGOS </label>

                                        <input type="text" class="form-control"
                                            placeholder="Hallazgos"
                                            name="HA">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">COMPLICACIONES </label>
                                        <input type="text" class="form-control"
                                            placeholder="COMPLICACIONES"
                                            name="CO">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">NOMBRE DEL CIRUJANO </label>
                                        <input type="text" class="form-control"
                                            placeholder="Nombre del cirujano "
                                            name="NC">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">NOMBRE DEL AYUDANTE </label>
                                        <input type="text" class="form-control"
                                            placeholder="Nombre del ayudante"
                                            name="NAY">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">NOMBRE DEL
                                            INSTRUMENTISTA</label>
                                        <input type="text" class="form-control"
                                            placeholder="nombre instrumentista"
                                            name="NI">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">NOMBRE DEL
                                            ANIESTESIOLOGO</label>
                                        <input type="text" class="form-control"
                                            placeholder="Nombre del aniestesiologo"
                                            name="NAN">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">CIRCULANTE</label>
                                        <input type="text" class="form-control"
                                            placeholder="circulante"
                                            name="CIR">
                                    </div>
                                    <!--end notaspost-->
                                
                                    <div class="modal-footer">
                                        
                                        <button type="submit"
                                            class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                                            >Enviar datos</button>
                                        </form>
                                                            
                                        </div>
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
  <!-- BEGIN PAGE LEVEL SCRIPTS -->
  <script src="../src/plugins/src/fullcalendar/fullcalendar.min.js"></script>
    <script src="../src/plugins/src/uuid/uuid4.min.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="../src/plugins/src/fullcalendar/custom-fullcalendar.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->

@endsection