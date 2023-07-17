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
                                <li class="breadcrumb-item active" aria-current="page">Actualizar Productos</li>
                            </ol>
                        </nav>
                    </div>
                        <h1>Datos del producto</h1>
                        <form class="user needs-validation" method="POST" action="{{ route('update.Productos',['id'=>$Producto->pk_producto]) }}" novalidate>
                            @csrf

                            
                            <div class="row mb-4">
                                 <div class="col">
                                    <label for="formGroupExampleInput">Proveedor
                                    </label>

                                    <select class="form-select" id="exampleFormControlSelect1" name="Proveedor" required>
                    <option selected disabled value="">Selecione un provedor </option>
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
                                </div>
                                 <div class="col">
                                    <label for="formGroupExampleInput">Factura
                                    </label>

                                    <select class="form-select" id="exampleFormControlSelect1" name="Factura" required>
                    <option selected disabled value="">Selecione una factura de compra </option>
                            @php
                            $Facturas=App\Models\Factura::all();
                            @endphp
                            @if($Facturas->isEmpty())
                            <option selected disabled value="">No hay facturas Agregue nuevas </option>

                            @else
                            @foreach($Facturas as $factu)
                            <option value="{{ $factu->pk_factura}}">{{ $factu->Nombre }} </option>
                            @endforeach
                            @endif
                             @foreach($Producto->facturas as $factu)
                            <option value="{{ $factu->pk_factura}}" selected>{{ $factu->Nombre }} </option>
                            @endforeach


                           
                   

                </select>
                                </div>
                            </div>
                            <div class="row mb-4">

                                <div class="col">
                                    <label for="formGroupExampleInput">Nombre
                                    </label>
                                    <input type="text" class="form-control" placeholder="nombre" name="Nombre" value="{{$Producto->Nombre}}"
                                        required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" >
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Cantidad</label>
                                    <input type="numeric" class="form-control" placeholder="Precio compra" name="Cantidad"
                                        required pattern="[0-9]+" value="{{$Producto->Cantidad}}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Precio compra</label>
                                    <input type="numeric" class="form-control" placeholder="Precio compra" name="Precio compra"
                                        required pattern="[0-9]+" value="{{$Producto->Precio_compra}}">
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Precio venta</label>
                                    <input type="numeric" class="form-control" placeholder="Precio venta" name="Precio venta"
                                        required pattern="[0-9]+"  value="{{$Producto->Precio_venta}}">
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