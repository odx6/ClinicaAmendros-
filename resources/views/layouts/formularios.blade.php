@extends('layouts.main')
@section('title', 'Historial-clinico-fisioterapia')
@section('linkAuth')
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link href="../src/plugins/src/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />

    <link href="../src/plugins/css/light/fullcalendar/custom-fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css">

    <link href="../src/plugins/css/dark/fullcalendar/custom-fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL STYLE -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/assets/css/light/components/tabs.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/assets/css/dark/components/tabs.css') }}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
    <link href="{{ asset('src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('src/assets/css/light/forms/switches.css') }}">

    <link href="{{ asset('src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
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
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('nombreVista') </li>
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
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../src/plugins/src/fullcalendar/fullcalendar.min.js"></script>
    <script src="../src/plugins/src/uuid/uuid4.min.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="../src/plugins/src/fullcalendar/custom-fullcalendar.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->

    <script src="{{ asset('MisFunciones/Clinica.js') }}"></script>
    
    <script src="{{ asset('src/plugins/src/highlight/highlight.pack.js') }}"></script>

    <!--  END CUSTOM SCRIPTS FILE  -->


@endsection
