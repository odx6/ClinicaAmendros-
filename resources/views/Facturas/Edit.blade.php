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
                <h1 style="text-align: center;">EDITAR FACTURA</h1>
                <h3>Datos de la factura   </h3>
                <h4>Los datos marcados con <span class="red-asterisk"><span class="red-asterisk"><span class="red-asterisk">*</span></span></span>
                        <form id="myForm" class="user needs-validation" method="POST" action="{{ route('update.Facctura',['id'=>$Factura->pk_factura]) }}"  enctype="multipart/form-data"  novalidate>
                            @csrf

                               <div class="row mb-4">
                                 <div class="col">
                                    <label for="formGroupExampleInput">Proveedor <span class="red-asterisk">*</span>
                                    </label>

                                    <select class="form-select" id="exampleFormControlSelect1" name="Proveedor" required>
                    <option selected disabled value="">Seleccione un proveedor </option>
                            @php
                            $proveedores=App\Models\Provedor::all();
                            @endphp
                            @if($proveedores->isEmpty())
                            <option selected disabled value="">No hay proveedores Agregue nuevos </option>
                            
                            @else
                            @foreach($proveedores as $prove)
                            <option value="{{ $prove->pk_proveedor }}" @if($Factura->fk_proveedor== $prove->pk_proveedor) selected @endif>{{ $prove->Nombre }} {{ $prove->Apellidos }}
                            @endforeach 
                            @endif
                           
                   

                </select>
                <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                         Selecciona un proveedor 
                                     </div>
                                </div>

                            </div>
                           
                        
                            <div class="row mb-4">

                                <div class="col">
                                    <label for="formGroupExampleInput">Nombre Factura <span class="red-asterisk">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="nombre" name="Nombre"
                                        required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" value="{{$Factura->Nombre}}">
                                         <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un nombre valido
                                     </div>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Selecciona un archivo pdf <span class="red-asterisk">*</span> </label>
                                    <input type="file" id="archivo" class="form-control" placeholder="Archivo" name="archivo"
                                        required >
                                        <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un archivo valido
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