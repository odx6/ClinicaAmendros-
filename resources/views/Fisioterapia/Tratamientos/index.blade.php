@extends('layouts.main')
@section('title', 'Historial-clinico-fisioterapia')
@section('linkAuth')
    <!-- BEGIN PAGE LEVEL STYLE -->


    <!-- END PAGE LEVEL STYLE -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('src/assets/css/light/components/tabs.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('src/assets/css/dark/components/tabs.css') }}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/light/forms/switches.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/dark/forms/switches.css') }}">

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
                <h1 style="text-align: center;">AGREGAR TRATAMIENTOS</h1>
               
                <h4>Los datos marcados con <span class="red-asterisk">*</span>  son obligatorios</h4>
                <!-- /BREADCRUMB -->
                <!--calendario-->
                <div class="row layout-top-spacing layout-spacing" id="cancel-row">

                    <!--Primer seccion de container--->
                    <div class="container">
                        <form class="user needs-validation" method="POST" action="{{ route('create.TratamientoF', ['id' => $id]) }}" novalidate>
                            @csrf
                            <div class="col">

                                <h2>TRATAMIENTOS</h2>
                               
                                <table class="table">

                                    <tbody>
                                       
                                        <tr>

                                            <td>
                                                <h3>tratamientos <br> previos <span class="red-asterisk">*</span> :</h3>
                                            </td>
                                            <td>
                                                <div class="form-group">

                                                    <textarea type="text" class="form-control" id="exampleFormControlInput1"
                                                        value="" name="Tratamiento" placeholder="Tratamientos" required minlength="3" pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$"></textarea>
                                                        <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un tratamiento valido 
                                     </div>
                                                </div>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>

                            </div>


                    </div>

                </div>
               <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Guardar</button>

            </div>
            </form>

        </div>

    </div>

    <!---end--octavo container-->




    </div>
    </div>


    @include('layouts.footer')
    </div>
    <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
@endsection
@section('Scripts')


    <!--  END CUSTOM SCRIPTS FILE  -->


@endsection
