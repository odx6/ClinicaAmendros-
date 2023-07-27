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
                                <li class="breadcrumb-item active" aria-current="page">Agregar Salida de Productos</li>
                            </ol>
                        </nav>
                    </div>
                        <h1>Datos de la salida de productos</h1>
                        <form class="user needs-validation" method="POST" action="{{ route('store.Salidas') }}" novalidate>
                            @csrf

                            
                            <div class="row mb-4">
                                <div class="col">
                                    <select class="form-control event-title-area" name="Area"  required>
                                        <option selected disabled value="">Área </option>
                                        @foreach ($Areas as $area)
                                            <option value="{{ $area->IDAREA }}">{{ $area->NOMBE_AREA }}</option>
                                        @endforeach
                                    </select>
                                    <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                         Selecciona un área valida
                                     </div>
                                </div>
                            
                                <div class="col">
                                    <select class="form-control event-title" name="Doctor"  required>
                                        <option selected disabled value="">Selecione un medico </option>
                                        
                                    </select>
                                    <div class="valid-feedback">
                                        Selección correcta
                                     </div>
                                     <div class="invalid-feedback">
                                         Selecciona un médico
                                     </div>
                                </div>
                            </div>
                            <div class="row mb-4">

                                  <div class="col">
                                    <label for="formGroupExampleInput">Producto
                                    </label>
                                    <select class="form-control Stock" name="producto"  required>
                                        <option selected disabled value="">Seleccione un producto </option>
                                        @if($Productos->isEmpty())
                                        <option selected disabled value="">No hay productos disponibles </option>
                                        @else
                                        @foreach ($Productos as $producto)
                                            <option value="{{ $producto->pk_producto }}">{{ $producto->Nombre }}</option>
                                        @endforeach
                                        @endif

                                       
                                    </select>
                                    <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                         Selecciona un un producto valido 
                                     </div>
                                </div>

                                
                                <div class="col">
                                    <label for="formGroupExampleInput">Stock</label>
                                    <input type="numeric" class="form-control " placeholder="Stock" name="Stock" id="StockSalida"
                                        required pattern="[0-9]+" readonly>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Cantidad de salida</label>
                                    <input type="number" class="form-control" placeholder="Cantidad" name="cantidad"  id="cantidad"
                                        required pattern="[0-9]+">
                                         <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                        ingresa un valor minimo al stock
                                     </div>
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
 <script src="{{ asset('MisFunciones/Clinica.js') }}"></script>
 

@endsection