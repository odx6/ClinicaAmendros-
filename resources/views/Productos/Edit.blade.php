@extends('layouts.main')
@section('title','Control de insumos')
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
                            <li class="breadcrumb-item"><a href="#">Usuario : {{auth()->user()->name}}
                           
                            <li class="breadcrumb-item active" aria-current="page"> Correo : {{auth()->user()->email}}</li>

                        </ol> 
                    </nav>
                </div>
                <h1 style="text-align: center;">EDITAR UN PRODUCTO</h1>
                <h3>Datos del producto </h3>
                <h4>Los datos marcados con <span class="red-asterisk">*</span>  son obligatorios</h4>
                        <form class="user needs-validation" method="POST" action="{{ route('update.Productos',['id'=>$Producto->pk_producto]) }}" novalidate>
                            @csrf

                            
                            <div class="row mb-4">
                                 <div class="col">
                                    <label for="formGroupExampleInput">Proveedor
                                    </label>

                                    <select class="form-select prove" id="exampleFormControlSelect1" name="Proveedor" required>
                    <option selected disabled value="">Seleccione un proveedor </option>
                            @php
                            $proveedores=App\Models\Provedor::all();
                            @endphp
                            @if($proveedores->isEmpty())
                            <option selected disabled value="">No hay proveedores Agregue nuevos </option>
                            
                            @else
                            @foreach($proveedores as $prove)
                            <option value="{{ $prove->pk_proveedor }}">{{ $prove->Nombre }} {{ $prove->Apellidos }}</option>
                            @endforeach
                            @endif
                             @foreach($Producto->proveedores as $prove)
                             <option value="{{ $prove->pk_proveedor }}" selected>{{ $prove->Nombre }} {{ $prove->Apellidos }}</option>
                             @endforeach
                            
                           
                            


                           
                   

                </select>
                 <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                   El campo es obligatorio
                                    </div>
                                </div>
                                 <div class="col">
                                    <label for="formGroupExampleInput">Factura
                                    </label>

                                    <select class="form-select resultado" id="resultado" name="Factura" required>
                    <option selected disabled value="">Seleccione una factura de compra </option>
                           

                           
                   

                </select>
                 <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                   El campo es obligatorio
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">

                                <div class="col">
                                    <label for="formGroupExampleInput">Nombre
                                    </label>
                                    <input type="text" class="form-control" placeholder="nombre" name="Nombre" value="{{$Producto->Nombre}}"
                                        required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" >
                                         <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                  Ingrese un nombre valido 
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Cantidad</label>
                                    <input type="numeric" class="form-control" placeholder="Precio compra" name="Cantidad"
                                        required pattern="[0-9]+" value="{{$Producto->Cantidad}}">
                                        <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                  Ingrese una cantidad valida 
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Precio compra</label>
                                    <input type="numeric" class="form-control" placeholder="Precio compra" name="Precio compra"
                                        required pattern="[0-9]+" value="{{$Producto->Precio_compra}}">
                                         <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                  Ingrese un precio de compra valido
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Precio venta</label>
                                    <input type="numeric" class="form-control" placeholder="Precio venta" name="Precio venta"
                                        required pattern="[0-9]+"  value="{{$Producto->Precio_venta}}">
                                        <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                  Ingrese un precio de venta valido
                                    </div>
                                </div>
                                </div>
                           
<button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola" >Guardar </button>
                    <!--end aPatologicos-->

                </form>

              </div>
               

@include('layouts.footer')

@endsection
@section('Scripts')
 <script src="{{ asset('MisFunciones/Clinica.js') }}"></script>

@endsection