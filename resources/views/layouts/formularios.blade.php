@extends('layouts.main')
@section('title', 'Clinica Almendros')
@section('linkAuth')
    <!-- BEGIN PAGE LEVEL STYLE -->
   
    
    <link href="{{ asset('src/assets/css/light/components/tabs.css') }}" rel="stylesheet" type="text/css" />

    
    <link href="{{ asset('src/assets/css/dark/components/tabs.css') }}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
    
    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/light/forms/switches.css') }}">

 
    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/dark/forms/switches.css') }}">
    <style>
        input[type="range"] {
            width: 100%;
        }

        input[type="range"]::-webkit-slider-runnable-track {
            background: linear-gradient(to right, green 0%, yellow 50%, red 100%);
        }

        input[type="range"]::-moz-range-track {
            background: linear-gradient(to right, green 0%, yellow 50%, red 100%);
        }

        input[type="range"]::-ms-track {
            background: linear-gradient(to right, green 0%, yellow 50%, red 100%);
        }

        h2 {
            background-color: #c4c8c5;
            text-align: center;
        }

        label {

            font-size-adjust: initial;
            font-size: .3cm;
        }
    </style>
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
                <!-- /BREADCRUMB -->
                <!--calendario-->
                <div class="row layout-top-spacing layout-spacing" id="cancel-row">
                    <!--end seccion de primer container-->
                    @yield('formulario')


                </div>
            </div>


            @include('layouts.footer')
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
@endsection
@section('Scripts')
    

    <script src="{{ asset('MisFunciones/Clinica.js') }}"></script>
    
    

    <!--  END CUSTOM SCRIPTS FILE  -->


@endsection
