@extends('layouts.main')
@section('title', 'Agregar Área')
@section('linkAuth')

@endsection

@section('content')
    <!-- BEGIN LOADER --> 
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
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
                <h1 style="text-align: center;">AGREGAR UNA NUEVA  ÁREA </h1>
                <h3>Datos del área</h3>
                <form class="user needs-validation" method="POST" action="{{ route('store.Areas') }}" novalidate>
                    @csrf



                    <div class="row mb-4">

                        <div class="col">
                            <label for="formGroupExampleInput">Nombre <span class="red-asterisk">*</span>
                            </label>
                            <input type="text" class="form-control" placeholder="nombre" name="Nombre" required
                                pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2">
                                <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un nombre valido para el área
                                     </div>

                        </div>
                         

                    </div>


                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Guardar</button>
                    <!--end aPatologicos-->

                </form>

            </div>


            @include('layouts.footer')

        @endsection
        @section('Scripts')


        @endsection
