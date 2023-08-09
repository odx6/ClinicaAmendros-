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
                <h1 style="text-align: center;">EDITAR SALIDA</h1>
                <h3>Datos de la salida </h3>
                <h4>Los datos marcados con <span class="red-asterisk">*</span>  son obligatorios</h4>
                        <form class="user needs-validation" method="POST" action="{{ route('update.Salidas',['id'=>$Salida->pk_salidas]) }}" novalidate>
                            @csrf

                            
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Área  <span class="red-asterisk">*</span>
                                    </label>
                                    <select class="form-control event-title-area" name="Area"  required>
                                        <option selected disabled value="">Área </option>
                                        @foreach ($Areas as $area)
                                            <option value="{{ $area->IDAREA }}" @if($Salida->fk_area==$area->IDAREA)selected  @endif>{{ $area->NOMBE_AREA }}</option>
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
                                    <label for="formGroupExampleInput">Médico  <span class="red-asterisk">*</span>
                                    <select class="form-control event-title" name="Doctor"  required>
                                        <option disabled value="">Selecione un medico </option>
                                        <option value="{{$Doctor->DSS}}" selected>{{$Doctor->Nombre}} {{$Doctor->Apellidos}} </option>

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
                                    <label for="formGroupExampleInput">Producto <span class="red-asterisk">*</span>
                                    </label>
                                    <select class="form-control Stock" name="producto"  required>
                                        <option selected disabled value="">Seleccione un producto </option>
                                        @if($Productos->isEmpty())
                                        <option selected disabled value="">No hay productos disponibles </option>
                                        @else
                                        @foreach ($Productos as $producto)
                                            <option value="{{ $producto->pk_producto }}" @if($Salida->fk_producto==$producto->pk_producto)selected  @endif>{{ $producto->Nombre }}</option>
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
                                    <label for="formGroupExampleInput">Existencia</label>
                                    <input type="numeric" class="form-control " placeholder="Existencia" name="Stock" id="StockSalida" value="{{$Stock}}"
                                        required pattern="[0-9]+" readonly>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Cantidad de salida <span class="red-asterisk">*</span></label>
                                    <input type="number" class="form-control" placeholder="Cantidad" name="cantidad"  id="cantidad" value="{{$Salida->cantidad}}" 
                                        required pattern="[0-9]+">
                                         <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                        ingresa un valor  menor a la existencias
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