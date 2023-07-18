@extends('layouts.main')
@section('title','Crear Usuario')
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
                                <li class="breadcrumb-item active" aria-current="page">Agregar Usuarios</li>
                            </ol>
                        </nav>
                    </div>
                        <h1>Datos del usuario </h1>
                        <form class="user needs-validation" method="POST" action="{{ route('register.store') }}" novalidate>
                            @csrf

                            
                           
                            <div class="row mb-4">

                                <div class="col">
                                    <label for="formGroupExampleInput">Nombre
                                    </label>
                                    <input type="text" class="form-control" placeholder="nombre" name="name"
                                        required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2">
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">Email</label>
                                    <input type="email" class="form-control" placeholder="Precio compra" name="email"
                                        required  pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">Contraseña</label>
                                    <input type="password" class="form-control" placeholder="Precio compra" name="password"
                                        required >
                                </div>
                                

                                <div class="col">
                                    <label for="formGroupExampleInput">Rol
                                    </label>

                                    <select class="form-select" id="exampleFormControlSelect1" name="role" required>
                                    <option selected disabled value="">Selecione un rol </option>
                                    <option  value="director">director </option>
                                    <option  value="secretaria">secretaria</option>
                                    <option  value="medico">medico</option>
                    
                   

                </select>
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