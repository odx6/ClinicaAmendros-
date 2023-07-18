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
                                <li class="breadcrumb-item active" aria-current="page">Editar Proveedores</li>
                            </ol>
                        </nav>
                    </div>
                        <h1>Datos del proveedor</h1>
                        <form class="user needs-validation" method="POST" action="{{ route('update.Preveedor',['id'=>$Provedor->pk_proveedor]) }}" novalidate>
                            @csrf

                            
                           
                            <div class="row mb-4">

                                <div class="col">
                                    <label for="formGroupExampleInput">Nombre
                                    </label>
                                    <input type="text" class="form-control" placeholder="nombre" name="Nombre"
                                        required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" value="{{$Provedor->Nombre}}">
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Apellidos
                                    </label>
                                    <input type="text" class="form-control" placeholder="Apellidos" name="Apellidos"
                                        required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" value="{{$Provedor->Apellidos}}">
                                </div>
                                </div>
                            <div class="row mb-4">

                                 <div class="col">
                                    <label for="formGroupExampleInput">Telefono
                                    </label>
                                    <input type="number" class="form-control" placeholder="Telefono" name="Telefono"
                                        required pattern="[0-9]+" minlength="10" maxlength="10" value="{{$Provedor->Telefono}}">
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Dirección
                                    </label>
                                    <input type="text" class="form-control" placeholder="Direccion" name="Direccion"
                                        required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" value="{{$Provedor->Direccion}}">
                                </div>
                                </div>





                               
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Correo</label>
                                    <input type="email" class="form-control" placeholder="Correo" name="Correo"
                                        value="{{$Provedor->Correo }}" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" >
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Empresa</label>
                                    <input type="numeric" class="form-control" placeholder="Empresa" name="Empresa"
                                        required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" value="{{$Provedor->Empresa}}">
                                </div>
                                </div>
                           
<button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola" >Guardar
                        Datos</button>
                    <!--end aPatologicos-->

                </form>

              </div>
               

@include('layouts.footer')

@endsection
@section('Scripts')
 

@endsection