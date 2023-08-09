@extends('layouts.main')
@section('title','Editar Medico')
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
                <h1 style="text-align: center;">EDITAR  MÉDICO</h1>
                <h3>Datos del médico </h3>
                <h4>Los datos marcados con <span class="red-asterisk">*</span>  son obligatorios</h4>
                        <form class="user needs-validation" method="POST" action="{{ route('update.Medico',['id'=>$Doctor->DSS]) }}" novalidate>
                            @csrf
 
                            
                            <div class="row mb-4">
                                 <div class="col">
                                    <label for="formGroupExampleInput">Área <span class="red-asterisk">*</span>
                                    </label>

                                    <select class="form-select" id="exampleFormControlSelect1" name="Area" required>
                    <option selected disabled value="">Seleccione un área </option>
                            @php
                            $Areas=App\Models\Area::all();
                            @endphp
                            @if($Areas->isEmpty())
                            <option selected disabled value="">No hay áreas Agregue nuevas </option>
                            
                            @else
                            @foreach($Areas as $area)
                            <option value="{{ $area->IDAREA }}" @if($Doctor->AreaDoctor==$area->IDAREA) selected @endif>{{$area->NOMBE_AREA}}</option>
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
                                 <div class="col">
                                    <label for="formGroupExampleInput">Usuario <span class="red-asterisk">*</span>
                                    </label>

                                    <select class="form-select" id="exampleFormControlSelect1" name="User" required>
                    <option selected disabled value="">Selecione un usuario  </option>
                            @php
                            $Users=App\Models\User::all();
                            @endphp
                            @if($Users->isEmpty())
                            <option selected disabled value="">No hay usuarios Agregue nuevos </option>

                            @else
                            @foreach($Users as $user)
                            <option value="{{ $user->id}}"@if($Doctor->fk_user==$user->id) selected @endif>{{ $user->email}} 
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
                                    <label for="formGroupExampleInput">Nombre(s) <span class="red-asterisk">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="nombre" name="Nombre" value="{{$Doctor->Nombre}}" 
                                        required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2"> 
                                           <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                    Ingrese nombre(s) validos 
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Apellidos <span class="red-asterisk">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="nombre" name="Apellidos" value="{{$Doctor->Apellidos}}"
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
                                    <label for="formGroupExampleInput">Especialidades <span class="red-asterisk">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Especialidades" name="Especialidades" value="{{$Doctor->Especialidades}}"
                                        required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2">
                                         <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                    Ingrese especialidades validas
                                    </div>
                                </div>


                                <div class="col">
                                    <label for="formGroupExampleInput">Cedula <span class="red-asterisk">*</span></label>
                                    <input type="number" class="form-control" placeholder="Cedula" name="Cedula" value="{{$Doctor->Cedula}}"
                                        required pattern="[0-9]+">
                                         <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                    Ingrese una cedula valida 
                                    </div>
                                </div>
                                </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Especialidad <span class="red-asterisk">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="nombre" name="Especialidad" value="{{$Doctor->ESPECIALIDAD}}"
                                        required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2">
                                         <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                    Ingrese una especialidad valida
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