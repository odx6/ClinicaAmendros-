@extends('layouts.main')
@section('title', 'Admin')
@section('linkAuth')
    <!-- BEGIN PAGE LEVEL STYLE -->

    <link href="../src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css">

    <link href="../src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL STYLE -->

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
                            <li class="breadcrumb-item active" aria-current="page">{{ $Doctor }}</li>
                        </ol>
                    </nav>
                </div>
                <h3>Hola bienvenido</h3>
            </div>

        </div>

        @include('layouts.footer')
    </div>
    <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
@endsection
@section('Scripts')
    

@endsection
