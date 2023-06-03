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
                                <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Agregar Antecedente Ginecobstetrico</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->
                   <!--calendario-->
                   <div class="row layout-top-spacing layout-spacing" id="cancel-row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
 

                    <!-- Fomulario -->
                     <!--- Historial-->
                     <h2> ANTECEDENTES Ginecobstrecticos </h2>
                    
                         <!--- Historial-->
                         <form class="user" method="POST"
                             action="{{ route('Gineco.create',['id'=>$id]) }}">
                             @csrf
                             <!--Antecedentes ginecologicos-->
                             <div class="row mb-4">

                                
                                 <div class="col">
                                     <label for="formGroupExampleInput">Identificador Del Paciente
                                     </label>
                                     <input type="text" class="form-control"
                                         placeholder="Identificador Del Paciente" name="IDPA"
                                         value="{{ $id}}" disabled>

                                 </div>

                             </div>

                             <div class="row mb-4">

                                 <div class="col">
                                     <label for="formGroupExampleInput">MENARCA </label>
                                     <input type="text" class="form-control"
                                         placeholder="Inicio de la menstruacion en años "
                                         name="Menarca" >
                                 </div>
                                 <div class="col">
                                     <label for="formGroupExampleInput">INCIO DE LA ACTIVIDAD SEXUAL
                                     </label>
                                     <input type="text" class="form-control"
                                         placeholder="inicio de la vida sexual" name="IVSA"
                                         >

                                 </div>
                                 <div class="col">
                                     <label for="formGroupExampleInput">NUMERO DE GESTAS </label>
                                     <input type="text" class="form-control"
                                         placeholder="Numero de gestas " name="gestas"
                                         >
                                 </div>
                             </div>
                             <div class="row mb-4">
                                 <div class="col">
                                     <label for="formGroupExampleInput">NUMERO DE CESAREAS </label>
                                     <input type="text" class="form-control"
                                         placeholder="Numero de cesareas" name="Cesareas"
                                         >
                                 </div>
                                 <div class="col">
                                     <label for="formGroupExampleInput">NUMERO DE ABORTOS</label>
                                     <input type="text" class="form-control"
                                         placeholder="Numero de Abortos" name="Abortos"
                                         >
                                 </div>
                                 <div class="col">
                                     <label for="formGroupExampleInput">NUMERO DE PARAS</label>
                                     <input type="text" class="form-control"
                                         placeholder="Numero de Partos" name="Partos"
                                         >
                                 </div>
                             </div>

                             <div class="modal-footer">
                                 
                                 <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                                     >Enviar Datos</button> 
                             </div>



                         </form>
                        
                     
                     <!-----end gine--->
                     
                     

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