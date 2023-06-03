@extends('layouts.main')
@section('title','Home')
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
 

                    <!-- Fomulario -->
                     <!--- Historial-->

                     <form class="user" method="POST"
                     action="{{ route('historial.create', ['Paciente'=>$id]) }}">
                     @csrf
                     <h2> ANTECEDENTES HEREDOFAMILARES</h2>
                     <div class="row mb-4">

                         
                         <div class="col">
                             <label for="formGroupExampleInput">PACIENTE </label>

                             <input type="text" class="form-control bold"
                                 placeholder="Numero de paciente" name="Paciente"
                                 value="{{$id }}" disabled>
                         </div>


                     </div>
                     <div class="row mb-4">
                         <div class="col">
                             <label for="formGroupExampleInput">DIABETES MELLITUS
                                 (DM)
                             </label>
                             <select class="form-control" name="DM">
                               
                                 <option value="1">Si</option>
                                 <option value="0">No</option>

                             </select>
                         </div>
                         <div class="col">
                             <label for="formGroupExampleInput">HIPERTENSIÓN ARTERIAL
                                 SISTÉMICA (HAS)</label>
                             <select class="form-control" name="HAS">
                                 
                                 <option value="1">Si</option>
                                 <option value="0">No</option>

                             </select>
                         </div>
                         <div class="col">

                             <label for="formGroupExampleInput"> CANCER (CA)</label>
                             <select class="form-control" name="CA">
                                 
                                 <option value="1">Si</option>
                                 <option value="0">No</option>

                             </select>
                         </div>
                     </div>
                     <div class="row mb-4">
                         <div class="col">
                             <label for="formGroupExampleInput">MADRE FALLECIDA</label>
                             <select class="form-control" name="MF">
                                 
                                 <option value="Si">Si</option>
                                 <option value="No">No</option>

                             </select>
                         </div>
                          <div class="col">
                             <label for="formGroupExampleInput">DIABETES MELLITUS
                                 (DM)
                             </label>
                             <select class="form-control" name="PDM">
                              
                                 <option value="1">Si</option>
                                 <option value="0">No</option>

                             </select>
                         </div>
                         <div class="col">
                             <label for="formGroupExampleInput">HIPERTENSIÓN ARTERIAL
                                 SISTÉMICA (HAS)</label>
                             <select class="form-control" name="PHAS">
                                 
                                 <option value="1">Si</option>
                                 <option value="0">No</option>

                             </select>
                         </div>
                     </div>
                     <div class="row mb-4">
                         <div class="col">

                             <label for="formGroupExampleInput"> CANCER (CA)</label>
                             <select class="form-control" name="PCA">
                                 
                                 <option value="1">Si</option>
                                 <option value="0">No</option>

                             </select>
                         </div>
                        
                         <div class="col">
                             <label for="formGroupExampleInput">PADRE FALLECIDO</label>
                             <select class="form-control" name="PF">
                                 <option value="Si">Si</option>
                                 <option value="No">No</option>

                             </select>
                         </div>
                         <div class="col">
                             <label for="formGroupExampleInput">CAUSAS</label>
                             <input type="text" class="form-control"
                                 placeholder="CAUSAS DE LA MUERTE PADRE Y MADRE "
                                 name="CAM" >
                         </div>

                     </div>
                     <h2> ANTECEDENTES PERSONALES NO PATOLOGICOS </h2>
                     <div class="row mb-4">
                         <div class="col">
                             <label for="formGroupExampleInput">ALERGIAS 
                             </label>
                             <input type="text" class="form-control"
                                 placeholder="ALERGIAS  " name="ALERGIAS"
                                 >
                         </div>
                         <div class="col">
                             <label for="formGroupExampleInput">ALERGIAS POR ALIMENTOS
                             </label>
                             <input type="text" class="form-control"
                                 placeholder="ALERGIAS POR ALIMENTOS " name="AL"
                                 >
                         </div>
                         <div class="col">
                             <label for="formGroupExampleInput">ALERGIAS POR SUSTANCIAS
                                 QUIMICAS </label>

                             <input type="text" class="form-control"
                                 placeholder="ALERGIAS POR SUSTANCIAS QUIMICAS"
                                 name="ALS" >
                         </div>


                     </div>
                     <div class="row mb-4">

                         <div class="col">
                             <label for="formGroupExampleInput">TIENE CIRUJIAS PREVIAS
                             </label>
                             <input type="text" class="form-control"
                                 placeholder="CIRUJIAS PREVIAS " name="CP"
                                >
                         </div>
                         <div class="col">
                             <label for="formGroupExampleInput"> TRANSFUCIONES </label>
                             <input type="text" class="form-control"
                                 placeholder="TRANSFUCIONES" name="TF"
                                 >
                         </div>
                         <div class="col">
                             <label for="formGroupExampleInput">FRACTURAS ACTUALES O PREVIAS
                             </label>

                             <input type="text" class="form-control"
                                 placeholder="ACTUALES O PREVIAS" name="FP"
                                 >
                         </div>


                     </div>

                     <div class="row mb-4">

                         <div class="col">
                             <label for="formGroupExampleInput"> ALCHOLICO </label>
                             <select class="form-control" name="ALP">
                                
                                 <option value="1">Si</option>
                                 <option value="0">No</option>

                             </select>
                         </div>
                         <div class="col">
                             <label for="formGroupExampleInput"> TABAQUISMO </label>
                             <select class="form-control" name="TB">
                                 <option value="1">Si</option>
                                 <option value="0">No</option>

                             </select>
                         </div>
                         <div class="col">
                             <label for="formGroupExampleInput">DROGAS </label>
                             <select class="form-control" name="DR">
                                 
                                 <option value="1">Si</option>
                                 <option value="0">No</option>

                             </select>
                         </div>
                          
                         <div class="modal-footer">
                             
                             <button type="submit"
                                 class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                                 >Enviar Datos</button>
                             </form>

                         </div>
                    
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
  <script src="../src/plugins/src/fullcalendar/fullcalendar.min.js"></script>
    <script src="../src/plugins/src/uuid/uuid4.min.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="../src/plugins/src/fullcalendar/custom-fullcalendar.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->

@endsection