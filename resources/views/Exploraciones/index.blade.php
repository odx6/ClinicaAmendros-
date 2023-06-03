@extends('layouts.main')
@section('title','Agregar Exploracion fisica')
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
                
                   
                    <form class="user" method="POST" action="{{ route('Exploracion.create',['id'=>$id,'idDoc'=>$idDoc]) }}">
                        @csrf

                        <div class="col">
                            <label for="formGroupExampleInput">
                                T/A </label>
                            <select class="form-control" name="T/A">
                                
                                <option value="1">Si</option>
                                <option value="0">No</option>

                            </select>
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput">
                                FC </label>
                            <select class="form-control" name="FC">
                               
                                <option value="1">Si</option>
                                <option value="0">No</option>

                            </select>
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput">
                                X1 </label>
                            <select class="form-control" name="X1">
                                
                                <option value="1">Si</option>
                                <option value="0">No</option>

                            </select>
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput">
                                FR </label>
                            <select class="form-control" name="FR">
                                <
                                <option value="1">Si</option>
                                <option value="0">No</option>

                            </select>
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput">
                                X2 </label>
                            <select class="form-control" name="X2">
                                
                                <option value="1">Si</option>
                                <option value="0">No</option>

                            </select>
                        </div>
                        
                        

                        <div class="col">
                            <label for="formGroupExampleInput">IDENTIFICADOR DEL DOCTOR
                            </label>
                            <input type="text" class="form-control"
                                placeholder="Identificador Del Doctort" name="IDDOC"
                                value="{{ $idDoc}}">
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                                <label for="formGroupExampleInput">IDENTIFICADOR DEL PACIENTE </label>
                                <input type="text" class="form-control"
                                    placeholder="Identificador del paciente" name="IDPA"
                                    value="{{ $id }}" @disabled(true)>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">TEMPERATURA </label>
                                    <input type="text" class="form-control" placeholder="TEMPERATURA" name="TEMP" >
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">PESO (KG) </label>
                                    <input type="text" class="form-control" placeholder="PESO (KG)" name="PESO" >
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">NOMBRE EXPLORACION </label>
                                    <input type="text" class="form-control" placeholder="Exploracion Cabeza" name="NEF" >
                                </div>
                                 <div class="col">
                                     <label for="formGroupExampleInput">CABEZA </label>
                                     <input type="text" class="form-control" placeholder="Exploracion Cabeza" name="CAEF" >
                                 </div>
                                 <div class="col">
                                     <label for="formGroupExampleInput">CUELLO</label>
                                     <input type="text" class="form-control" placeholder="Exploracion cuello  " name="CUEF" >
                                 </div>
                                 <div class="col">
                                     <label for="formGroupExampleInput">ABDOMEN </label>
                                     <input type="text" class="form-control" placeholder="Exploracion abdomen " name="ABEF">
                                 </div>
                             </div>
                             <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">MIEMBRO PELVICO </label>
                                    <input type="text" class="form-control" placeholder="Exploracion miembro pelvico" name="MP" >
                                </div>
                                 <div class="col">
                                     <label for="formGroupExampleInput">MIEMBRO TORAXICO</label>
                                     <input type="text" class="form-control" placeholder="Exploracion miembro toraxico" name="MT" >
                                 </div>
                               
                             </div>

                        </div>
                        <!----- end Notas--->
                        <!--end notaspost-->
                        <div class="modal-footer">
                            
                            <button type="submit" class="btn btn-success btn-rounded mb-2 me-4  btn-add-event Hola"
                               >Enviar Datos</button>
                        </div>
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