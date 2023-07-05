@extends('layouts.main')
@section('title', 'Historial-clinico-fisioterapia')
@section('linkAuth')
    
    <link href="../src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL STYLE -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    
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
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Registrar Paciente Secretaria</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->
                <!--calendario-->
                <div class="row layout-top-spacing layout-spacing" id="cancel-row">

                    <!--Primer seccion de container--->
                    <div class="container">
           <form class="user" method="POST" action="{{ route('create.FExploracionF', ['id' => $id]) }}">
              @csrf
                            <div class="col">
                                
                                <h2>Exploración Física</h2>
                                <table class="table">

                                    <tbody>
                                         <tr>

                                            <td>
                                                <h3>Identificador del paciente :</h3>
                                            </td>
                                            <td>
                                                <div class="form-group">
   
    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$id}}" name="Peso">
</div> 
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <h3>peso :</h3>
                                            </td>
                                            <td>
                                                <div class="form-group">
   
    <input type="text" class="form-control" id="exampleFormControlInput1" value="Peso en kg" name="Peso">
</div> 
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <h3>Estatura :</h3>
                                            </td>
                                            <td>
                                                <div class="form-group">
   
    <input type="text" class="form-control" id="exampleFormControlInput1" value="Estatura en m" name="Estatura">
</div> 
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <h3>(IMC):</h3>
                                            </td>
                                            <td>
                                                <div class="form-group">
   
    <input type="text" class="form-control" id="exampleFormControlInput1" value="(IMC)" name="IMC">
</div> 
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <h3>Etnia :</h3>
                                            </td>
                                            <td>
                                               <div class="form-group">
   
    <input type="text" class="form-control" id="exampleFormControlInput1" value="Etnia" name="Etnia">
</div> 
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                            <div class="col">
                                2 of 3
                                <h2>Motivo de la consulta</h2>
                                <div class="form-group">
   
    <input type="text" class="form-control" id="exampleFormControlInput1" value="Motivo de la  consulta" name="Motivo">
</div> 

                            </div>

                          
                        </div>

                    </div>
                    <input type="submit" name="time" class="btn btn-primary">
                  
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
   

    <script src="{{ asset('MisFunciones/Clinica.js') }}"></script>
    <script src="{{ asset('src/plugins/src/highlight/highlight.pack.js') }}"></script>

    <!--  END CUSTOM SCRIPTS FILE  -->


@endsection
