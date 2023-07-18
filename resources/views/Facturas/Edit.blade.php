@extends('layouts.main')
@section('title','Inventario')
@section('linkAuth')

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
                                <li class="breadcrumb-item active" aria-current="page">Editar Factura</li>
                            </ol>
                        </nav>
                    </div>
                        <h1>Datos de la factura </h1>
                        <form class="user needs-validation" method="POST" action="{{ route('update.Facctura',['id'=>$Factura->pk_factura]) }}"  enctype="multipart/form-data"  novalidate>
                            @csrf

                            
                           
                        
                            <div class="row mb-4">

                                <div class="col">
                                    <label for="formGroupExampleInput">Nombre Factura
                                    </label>
                                    <input type="text" class="form-control" placeholder="nombre" name="Nombre"
                                        required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" value="{{$Factura->Nombre}}">
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Selecciona un archivo pdf </label>
                                    <input type="file" class="form-control" placeholder="Archivo" name="archivo"
                                        required >
                                </div>
                            </div>
                            
                           
<button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola" >Enviar
                        Datos</button>
                    <!--end aPatologicos-->

                </form>

              </div>
               

@include('layouts.footer')

@endsection
@section('Scripts')
 

@endsection