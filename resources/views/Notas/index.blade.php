@extends('layouts.main')
@section('title','Agregar Nota')
@section('linkAuth')
 <!-- BEGIN PAGE LEVEL STYLE -->



<link href="../src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css">


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
                            <li class="breadcrumb-item"><a href="#">Usuario : {{auth()->user()->name}}
                           
                            <li class="breadcrumb-item active" aria-current="page"> Correo : {{auth()->user()->email}}</li>

                        </ol> 
                    </nav>
                </div>
                <h1 style="text-align: center;"> AGREGAR NOTA</h1>
               
                <h4>Los datos marcados con <span class="red-asterisk">*</span>  son obligatorios</h4>
                    <!-- /BREADCRUMB -->
                   <!--calendario-->
                   <div class="row layout-top-spacing layout-spacing" id="cancel-row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
         

                    <!-- Estudios -->
                    
                            <form class="user needs-validation" method="POST" action="{{ route('Notas.create',['id'=>$id]) }}" novalidate>
                                @csrf


                                <h4>NOTAS </h4>
       

                                <br>

                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Nota <span class="red-asterisk">*</span> </label>
                                        <input type="text" class="form-control" placeholder="cuerpo de la nota"
                                            name="NOT" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese datos validos para la nota 
                                     </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="formGroupExampleInput">Tipo  de nota <span class="red-asterisk">*</span> </label>
                                        <input type="text" class="form-control" placeholder="TIPO DE NOTA"
                                            name="TIPO" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                            <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un tipo valido para la nota
                                     </div>
                                    </div>

                                </div>
                                <!--end notaspost-->
                                
                        
                        </div>
                      
                                    
                                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                                        >Guardar</button>
                                
                            </form>
                        
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


@endsection