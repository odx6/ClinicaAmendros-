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
                            <li class="breadcrumb-item active" aria-current="page">Agregar Exploración Física</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->
                <!--calendario-->
                <div class="row layout-top-spacing layout-spacing" id="cancel-row">

                    <!--Primer seccion de container--->
                    <div class="container">
                        <form class="user needs-validation" method="POST" action="{{ route('create.FExploracionF', ['id' => $id]) }}" novalidate>
                            @csrf
                            <div class="col">

                                <h2>Exploración Física</h2>
                                <table class="table">

                                    <tbody>

                                        <tr>

                                            <td>
                                                <h3>peso :</h3>
                                            </td>
                                            <td>
                                                <div class="form-group">

                                                    <input type="numeric" class="form-control" id="peso"
                                                        placeholder="Peso(Kg)" name="Peso" required pattern="^\d+(\.\d+)?$" title="Ingresa un número entero o decimal válido">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <h3>Estatura :</h3>
                                            </td>
                                            <td>
                                                <div class="form-group">

                                                    <input type="numeric" class="form-control"  
                                                       placeholder="Estatura" name="Estatura" id="altura" pattern="^\d+(\.\d+)?$" required>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <h3>(IMC):</h3>
                                            </td>
                                            <td>
                                                <div class="form-group">

                                                    <input type="text" class="form-control" id="resultado"
                                                        value="" placeholder="(IMC)" name="IMC" pattern="^\d+(\.\d+)?$" required>
                                                </div>
                                            </td>

                                        </tr>
                                       
                                    </tbody>
                                </table>

                            </div>
                            <div class="col">
                               
                                <h2>Motivo de la consulta</h2>
                                <div class="form-group">

                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        value="N/A" placeholder="Motivo" name="Motivo" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                </div>

                            </div>


                    </div>

                </div>
              
            </div>
            

        </div>
        <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Enviar
            Datos</button>
        </form>

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
<script type="text/javascript">
    

$('#altura').change(function() {
      // alert("Funciona");
       calcularIMC();
      });
function calcularIMC() {
            var peso = parseFloat(document.getElementById("peso").value);
            var altura = parseFloat(document.getElementById("altura").value);

            if (isNaN(peso) || isNaN(altura) || altura <= 0) {
                alert("Por favor, ingresa valores válidos para peso y altura.");
                return;
            }

            var imc = peso / (altura * altura);

        
            document.getElementById("resultado").value = imc.toFixed(2);
        }

</script>

    <script src="{{ asset('MisFunciones/Clinica.js') }}"></script>
    <script src="{{ asset('src/plugins/src/highlight/highlight.pack.js') }}"></script>

    <!--  END CUSTOM SCRIPTS FILE  -->


@endsection
