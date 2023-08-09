@extends('layouts.main')
@section('title','Agregar Secretaria')
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
                <h1 style="text-align: center;">AGREGAR UNA SECRETARIA</h1>
                <h3>Datos del  la secretaria </h3>
                <h4>Los datos marcados con <span class="red-asterisk">*</span>  son obligatorios</h4>
                        <form class="user needs-validation" method="POST" action="{{ route('store.Secrearia') }}" novalidate>
                            @csrf
 
                            
                            
                            <div class="row mb-4">

                                 <div class="col">
                                    <label for="formGroupExampleInput">Usuario   <span class="red-asterisk">*</span>
                                    </label>

                                    <select class="form-select" id="exampleFormControlSelect1" name="User" required>
                    <option selected disabled value="">Seleccione un usuario  </option>
                            @php
                            $Users=App\Models\User::all();
                            @endphp
                            @if($Users->isEmpty())
                            <option selected disabled value="">No hay usuarios Agregue nuevos </option>

                            @else
                            @foreach($Users as $user)
                            <option value="{{ $user->id}}">{{ $user->email}} 
                            @endforeach
                            @endif
                           
                   

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
                                    <label for="formGroupExampleInput">Nombre(s)  <span class="red-asterisk">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="nombre" name="Nombre"
                                        required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2">
                                         <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                    Ingrese un nombre(s) valido 
                                    </div>
                                </div>
                               
                                <div class="col">
                                    <label for="formGroupExampleInput">Apellidos  <span class="red-asterisk">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="nombre" name="Apellidos"
                                        required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2">
                                         <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                    Ingrese apellidos validos
                                    </div>
                                </div>

                                
                                </div>
                            <div class="row mb-4">

                               


                                <div class="col">
                                    <label for="formGroupExampleInput">Teléfono  <span class="red-asterisk">*</span></label>
                                    <input type="number" class="form-control" placeholder="telefono" name="Telefono"
                                        required pattern="[0-9]+" minlength="10" maxlength="10">
                                         <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                   Ingrese un teléfono de 10 dígitos sin espacios 
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
 

@endsection