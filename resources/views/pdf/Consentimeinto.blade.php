<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARTA DE CONSENTIMIENTO BAJO INFORMACION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        header {
            height: 2cm;
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            text-align: center;
            line-height: 30px;
        }

        footer {
            height: 2cm;
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            text-align: center;
            line-height: 35px;
        }

        .container {
            padding: 20px;
            margin-top: 40px;
        }

        h2, h3, h4 {
            text-align: center;
        }

        .justi {
            text-align: justify;
        }

        .Firmas {
            text-align: right;
        }

        .fecha {
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <h4>Clínica Almendros <br>Unidad Médico Quirúrgica</h4>
</header>
<br>
<main>
    <div class="container">
        <h3 class="fecha">CARTA DE CONSENTIMIENTO BAJO INFORMACION</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="image-container">
                    <img src="./src/assets/img/clinica.jpeg" class="navbar-logo" alt="logo" height="80">
                    <p>Ulises Pérez Montesinos <br>Traumatólogo Ortopedista</p>
                    <p>Una corta estancia<br>con calidez y calidad</p>
                </div>
            </div>
            <div class="col-md-6">
                <h2>Información del paciente:</h2>
                <p>Nombre completo: <strong>{{$Paciente->Nombre}} {{$Paciente->Apellido}}</strong></p>
                <p>Edad: <strong>{{$Paciente->Edad}} Años</strong></p>
                <p>Domicilio: <strong>{{$Paciente->Direccion}}</strong></p>
                <p>Nombre del representante legal, familiar o allegado: <strong>{{$NombreResponsable}}</strong></p>
                <p>Domicilio del representante legal: <strong>{{$DomicilioResponsable}}</strong></p>
                <p>Edad del representante legal: <strong>{{$EdadResponsable}}</strong></p>
                <p>En calidad de: <strong>{{ $CalidadPaciente}}</strong></p>
            </div>
        </div>
        <h4>DECLARO</h4>
        <p class="justi">
            Que el (la) Dr(a). {{$Doctor->ESPECIALIDAD}} me ha explicado que es conveniente proceder a {{ $Tratamiento }}
            y que, todo acto médico, diagnóstico o terapéutico, sea quirúrgico o no quirúrgico, lleva implícito una serie
            de complicaciones mayores o menores a veces potencialmente serias, incluyen cierto riesgo de mortalidad y que
            pueden requerir tratamientos complementarios, médicos o quirúrgicos que aumentan su estancia hospitalaria,
            dichas complicaciones unas veces son derivadas directamente de las propias técnicas, pero otras dependen del
            procedimiento, del estado previo del paciente y de los tratamientos que están recibiendo o de las posibles
            anomalías anatómicas y/o de la utilización de los equipos médicos. Entre las complicaciones que pueden surgir
            en: {{ $Tratamiento }}
        </p>
        <p class="justi">
            se encuentra {{ $CalidadPaciente }}
        </p>
        <p class="justi">
            Por lo que he comprendido las explicaciones que se me han facilitado en un lenguaje claro y sencillo y que el
            médico que me ha atendido me realizó todas las observaciones y aclaró todas las dudas que le he planteado.
            También comprendo que en cualquier momento y sin dar ninguna explicación, puedo revocar el consentimiento
            que ahora presto, por ello manifiesto que estoy satisfecho(a) con la información recibida y comprendo el
            alcance de los riesgos del tratamiento y procedimiento. Del mismo modo designo a {{$NombreResponsable}},
            para que exclusivamente el (ella) reciba información sobre mi estado de salud, diagnóstico, tratamiento
            y/o pronóstico y en tales condiciones.
        </p>
        <h4>CONSIENTO</h4>
        <p class="justi">
            En que se me realicen los procedimientos de diagnóstico y tratamientos que me fueron explicados y que me doy
            por enterado en mi declaración. Así como, me reservo expresamente el derecho de revocar mi consentimiento en
            cualquier momento antes de que el y/o los procedimientos, objeto de este documento sean una realidad.
        </p>
        @if($Revocar=="1")
        <p>
            Revoco el consentimiento presentado en fecha: Oaxaca, Oax, a {{$Fecha->day}} de {{$Fecha->format('M')}}
            de {{$Fecha->year}} y no deseo proseguir el tratamiento que doy con esta fecha por finalizado, eximiendo de
            toda responsabilidad al médico tratante, una vez que me ha explicado los alcances clínicos de la suspensión
            del acto mencionado.
        </p>
        @endif
        @if($NoAcepta=="1")
        <p>
            Niego la autorización a que me realicen los procedimientos de diagnóstico y tratamiento que me fueron
            explicados y que doy por enterado en mi declaración.
        </p>
        @endif
        <div class="row">
            <div class="col-md-6">
                <br>
                <p>_____________________________<br>{{$Doctor->ESPECIALIDAD}}</p>
                <br>
                <br>
                <p>______________________________<br>{{$NombreResponsable}}</p>
            </div>
            <div class="col-md-6">
                <br>
                <p class="Firmas">__________________________<br>{{$Paciente->Nombre}} {{$Paciente->Apellido}}</p>
</div>
</div>
</div>
</main>
<footer>
    <p class="fecha" id="fecha-actual">Oaxaca, Oax., a {{$Fecha->day}} de  {{$Fecha->format('M')}} de {{$Fecha->year}}   Almendro 210, Colonia Reforma. CP. 68050 </p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>