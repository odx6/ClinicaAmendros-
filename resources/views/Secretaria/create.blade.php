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
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Agregar Secretaria</li>
                            </ol>
                        </nav>
                    </div>
                        <h1>Datos de  la secretaria</h1>
                        <form class="user needs-validation" method="POST" action="{{ route('store.Secrearia') }}" novalidate>
                            @csrf
 
                            
                            
                            <div class="row mb-4">

                                 <div class="col">
                                    <label for="formGroupExampleInput">Usuario
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
                            <option value="{{ $user->id}}">{{ $user->email}} 
                            @endforeach
                            @endif
                           
                   

                </select>
                                </div>
                            </div>
                            <div class="row mb-4">

                                <div class="col">
                                    <label for="formGroupExampleInput">Nombre(s)
                                    </label>
                                    <input type="text" class="form-control" placeholder="nombre" name="Nombre"
                                        required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2">
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Apellido(s)
                                    </label>
                                    <input type="text" class="form-control" placeholder="nombre" name="Apellidos"
                                        required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2">
                                </div>
                                </div>
                            <div class="row mb-4">

                               


                                <div class="col">
                                    <label for="formGroupExampleInput">Telefono</label>
                                    <input type="number" class="form-control" placeholder="telefono" name="Telefono"
                                        required pattern="[0-9]+" minlength="10" maxlength="10">
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