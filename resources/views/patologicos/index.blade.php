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
                                <li class="breadcrumb-item active" aria-current="page">Registrar Antecedente Patologico</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->
                   <!--calendario-->
                   <div class="row layout-top-spacing layout-spacing" id="cancel-row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
 

                    <!-- Fomulario -->
                     <!--- Historial-->
                     <h2> ANTECEDENTES NO PATOLOGICOS </h2>
                     <!--Antecedentes patologicos-->
                    
                         <form class="user" method="POST"
                             action="{{ route('Pato.create',['id'=>$id]) }}">
                             @csrf


                             <div class="row mb-4">

                                 
                                 <div class="col">
                                     <label for="formGroupExampleInput">Identificador Del Paciente
                                     </label>
                                     <input type="text" class="form-control"
                                         placeholder="Identificador Del Paciente" name="IDPA"
                                       value="{{$id}}"  >

                                 </div>

                             </div>
                             <div class="row mb-4">
                                 <div class="col">
                                     <label for="formGroupExampleInput">DIABETES MELITUS </label>
                                     <select class="form-control" name="DMN">

                                        
                                         <option value="1">Si</option>
                                         <option value="0">No</option>

                                     </select>
                                 </div>

                                 <div class="col">
                                     <label for="formGroupExampleInput">TIEMPO DE EVOLUCION </label>
                                     <input type="text" class="form-control"
                                         placeholder="Evolucion de la diabetes  " name="DMTE"
                                        >
                                 </div>
                             </div>
                             <div class="row mb-4">
                                 <div class="col">
                                     <label for="formGroupExampleInput">HIPERTENSIÓN ARTERIAL
                                         SISTÉMICA </label>
                                     <select class="form-control" name="HASN">
                                       
                                         <option value="1">Si</option>
                                         <option value="0">No</option>

                                     </select>
                                 </div>
                                 <div class="col">
                                     <label for="formGroupExampleInput">TIEMPO DE EVOLUCION </label>
                                     <input type="text" class="form-control"
                                         placeholder="Evolucion" name="HASTE"
                                         >
                                 </div>
                             </div>
                             <div class="row mb-4">
                                 <div class="col">
                                     <label for="formGroupExampleInput">INSUFICIENCIA RENAL AGUDA O
                                         CRÓNICA </label>
                                     <select class="form-control" name="IR">
                                         
                                         <option value="1">Si</option>
                                         <option value="0">No</option>

                                     </select>
                                 </div>
                                 <div class="col">
                                     <label for="formGroupExampleInput">TIEMPO DE EVOLUCION </label>
                                     <input type="text" class="form-control"
                                         placeholder="Evolucion" name="IrTe"
                                        >
                                 </div>
                             </div>

                             <div class="row mb-4">

                                 <div class="col">
                                     <label for="formGroupExampleInput">OTRA </label>
                                     <input type="text" class="form-control"
                                         placeholder="Evolucion" name="OTRA"
                                        >
                                 </div>
                             </div>
                             <div class="modal-footer">
                                
                                 <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                                     >Enviar Datos</button>
                             </div>
                             <!--end aPatologicos-->

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