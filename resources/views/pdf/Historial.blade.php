<html>

<head>
    <style>
        @page {

            margin: 0cm;
            margin-left: 40px;
            margin-right: 40px;
            margin-top: 20px;

        }

        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            text-align: center;
            line-height: 35px;
        }

        .historial-container {

            margin-top: 2cm;
        }

        .historial-header {
            text-align: left;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
            margin-top: 20px;
            background-color: rgb(255, 0, 234);
        }

        .historial-item {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .historial-item label {
            font-weight: bold;
            margin-right: 10px;

        }

        .historial-item .checkbox-container {
            display: inline-block;
            vertical-align: middle;
            position: relative;
            padding-left: 25px;
            cursor: pointer;
        }

        .historial-item .checkbox-container input[type="checkbox"] {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .historial-item .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 18px;
            width: 18px;
            background-color: #ece7e7;
            border-radius: 3px;
            border: 1px solid black;

        }

        .historial-item .checkbox-container:hover input[type="checkbox"]~.checkmark {
            background-color: #ccc;
        }

        .historial-item .checkbox-container input[type="checkbox"]:checked~.checkmark {
            background-color: #3be706;
        }

        .historial-item .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .historial-item .checkbox-container input[type="checkbox"]:checked~.checkmark:after {
            display: block;
        }

        .historial-item .checkbox-container .checkmark:after {
            left: 6px;
            top: 2px;
            width: 4px;
            height: 8px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .historial-item .input-container {
            display: inline-block;
            vertical-align: middle;
            margin-left: 10px;
        }

        .historial-item .input-container input[type="text"] {
            width: 100%;
            padding: 5px;
        }

        .historial-item .textarea-container {
            margin-top: 10px;
        }

        .historial-item .textarea-container textarea {
            width: 100%;
            height: 100px;
            padding: 5px;
        }

        th,
        td {

            padding-right: 4px;
        }

        .page-break {
            page-break-after: always;
        }

        .img {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <header>

        <img src="./src/assets/img/clinica.jpeg" class="navbar-logo" alt="logo" height="80" style="float:left;"
            class="img">
        <h4>Clínica Almendros <br>Unidad Médico Quirúrgica</h4>

    </header>
    <br>
    <main>
        <div class="historial-container">

            <h1 class="historial-header">HISTORIA CLINICA </h1>
            @foreach ($Historiales as $Historial)
                <table>
                    <tr>
                        <th>No.Expediente:</th>
                        <td>{{ $Historial->idHIstorial_clinico }}</td>



                    </tr>
                </table>
            @endforeach
            <h1 class="historial-header">FICHA DE IDENTIFICACION:
            </h1>
            <table>

                <tr>
                    <th align="left">Apellidos:</th>
                    <td align="left">{{ $Paciente->SS }}</td>
                    <th align="left">Nombre:</th>
                    <td align="left">{{ $Paciente->Nombre }}</td>
                </tr>
                <tr>
                    <th align="left">Edad:</th>
                    <td align="left">{{ $Paciente->Edad }}</td>
                    <th align="left">Sexo:</th>
                    <td align="left">{{ $Paciente->Sexo }}</td>
                    <th align="left">Edo.civil:</th>
                    <td align="left">{{ $Paciente->Estado_civil }}</td>
                    <th align="left">Religión:</th>
                    <td align="left">{{ $Paciente->Religion }}</td>


                </tr>
                <tr>
                    <th align="left">Lugar de origen:</th>
                    <td align="left">{{ $Paciente->Origen }}</td>
                    <th align="left">Ocupación:</th>
                    <td align="left">{{ $Paciente->Ocuacion }}</td>
                </tr>
                <tr>

                    <th align="left">Domicilio:</th>
                    <td align="left">{{ $Paciente->Direccion }}</td>
                    <th align="left">Teléfono:</th>
                    <td align="left">{{ $Paciente->Telefono }}</td>
                </tr>
            </table>
            @foreach ($Historiales as $Historial)
                <h1 class="historial-header">ANTECEDENTES HEREDOFAMILIARES:
                </h1>

                <div class="historial-item">
                    <label>Madre con :</label>

                    <div class="checkbox-container">
                        <label for="enfermedades-actuales">DM </label>
                        @if ($Historial->DM == '1')
                            <input type="checkbox" id="enfermedades-actuales" checked>
                        @else
                            <input type="checkbox" id="enfermedades-actuales">
                        @endif
                        <span class="checkmark"></span>
                    </div>


                    <div class="checkbox-container">
                        <label for="enfermedades-actuales">HAS </label>
                        @if ($Historial->HAS == '1')
                            <input type="checkbox" id="enfermedades-actuales" checked>
                        @else
                            <input type="checkbox" id="enfermedades-actuales">
                        @endif
                        <span class="checkmark"></span>
                    </div>

                    <div class="checkbox-container">
                        <label for="enfermedades-actuales">CA </label>

                        @if ($Historial->CA == '1')
                            <input type="checkbox" id="enfermedades-actuales" checked>
                        @else
                            <input type="checkbox" id="enfermedades-actuales">
                        @endif
                        <span class="checkmark"></span>
                    </div>
                    <div class="checkbox-container">
                        <label for="enfermedades-actuales">FALLECIDA </label>
                        @if ($Historial->MFALLECIDA == 'Si')
                            <input type="checkbox" id="enfermedades-actuales" checked>
                        @else
                            <input type="checkbox" id="enfermedades-actuales">
                        @endif
                        <span class="checkmark"></span>
                    </div>
                    <div class="checkbox-container">
                        <label for="enfermedades-actuales">CAUSAS : {{ $Historial->CAUSAS }}</label>

                    </div>

                </div>
                <div class="historial-item">
                    <label>Padre con :</label>

                    <div class="checkbox-container">
                        <label for="enfermedades-actuales">DM </label>
                        <input type="checkbox" id="enfermedades-actuales" checked>
                        <span class="checkmark"></span>
                    </div>


                    <div class="checkbox-container">
                        <label for="enfermedades-actuales">HAS </label>
                        <input type="checkbox" id="enfermedades-actuales" checked>
                        <span class="checkmark"></span>
                    </div>

                    <div class="checkbox-container">
                        <label for="enfermedades-actuales">CA </label>
                        <input type="checkbox" id="enfermedades-actuales" checked>
                        <span class="checkmark"></span>
                    </div>
                    <div class="checkbox-container">
                        <label for="enfermedades-actuales">FALLECIDO </label>
                        <input type="checkbox" id="enfermedades-actuales" checked>
                        <span class="checkmark"></span>
                    </div>
                    <div class="checkbox-container">
                        <label for="enfermedades-actuales">CAUSAS : </label>
                    </div>

                </div>
            @endforeach
            <h2 class="historial-header">ANTECEDENTES PERSONALES NO PATOLOGICOS:

            </h2>
            <!---No patologicos -->
            <div class="historial-item">
                <table>
                    <tr>
                        <th align="left">
                            <div class="historial-item">
                                <label for="enfermedades-actuales">Alergias : </label>

                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">Alimentos: </label>

                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">Sustancias químicas : </label>
                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">Cirujias previas : </label>
                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">Transfunciones : </label>
                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">Fracturas y/o actuales : </label>
                            </div>
                            <div class="historial-item">

                                <label>Taxonomia :</label>
                        </th>
                        <th align="left">
                            <div class="historial-item">
                                <label for="enfermedades-actuales">Datos : </label>

                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">{{ $Historial->ALIMENTOS }}</label>

                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">{{ $Historial->SUSTANCIAS_Q }} </label>
                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">{{ $Historial->CIRUJIAS_P }}</label>
                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">{{ $Historial->TRANSFUCIONES }} </label>
                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">{{ $Historial->FRACTURAS }} </label>
                            </div>
                            <div class="historial-item">
                                <div class="checkbox-container">
                                    <label for="enfermedades-actuales">Alcoholismo </label>
                                    @if ($Historial->ALCHOLISMO == '1')
                                        <input type="checkbox" id="enfermedades-actuales" checked>
                                    @else
                                        <input type="checkbox" id="enfermedades-actuales">
                                    @endif
                                    <span class="checkmark"></span>
                                </div>


                                <div class="checkbox-container">
                                    <label for="enfermedades-actuales">Tabaquismo </label>
                                    @if ($Historial->TABASQUISMO == '1')
                                        <input type="checkbox" id="enfermedades-actuales" checked>
                                    @else
                                        <input type="checkbox" id="enfermedades-actuales">
                                    @endif
                                    <span class="checkmark"></span>
                                </div>

                                <div class="checkbox-container">
                                    <label for="enfermedades-actuales">Drogas</label>
                                    @if ($Historial->DROGAS == '1')
                                        <input type="checkbox" id="enfermedades-actuales" checked>
                                    @else
                                        <input type="checkbox" id="enfermedades-actuales">
                                    @endif
                                    <span class="checkmark"></span>
                                </div>
                        </th>
                    </tr>

                </table>





            </div>
            <!---end-->
            @foreach ($Patologicos as $Patologico)
                <h2 class="historial-header">ANTECEDENTES PERSONALES PATÓLOGICOS:

                </h2>

                <div class="historial-item">


                    <div class="checkbox-container">
                        <label for="enfermedades-actuales">DM </label>
                        @if ($Patologico->Dm == '1')
                            <input type="checkbox" id="enfermedades-actuales" checked>
                        @else
                            <input type="checkbox" id="enfermedades-actuales">
                        @endif
                        <span class="checkmark"></span>


                    </div>
                    <div class="historial-item">
                        <label for="enfermedades-actuales">Tiempo de evolución :{{ $Patologico->DmTE }} </label>
                    </div>


                    <div class="checkbox-container">
                        <label for="enfermedades-actuales">HAS </label>
                        @if ($Patologico->Has == '1')
                            <input type="checkbox" id="enfermedades-actuales" checked>
                        @else
                            <input type="checkbox" id="enfermedades-actuales">
                        @endif
                        <span class="checkmark"></span>
                    </div>
                    <div class="historial-item">
                        <label for="enfermedades-actuales">Tiempo de evolución :{{ $Patologico->HasTe }} </label>
                    </div>


                    <div class="checkbox-container">
                        <label for="enfermedades-actuales">IR(A Ó C ) </label>
                        @if ($Patologico->Ir == '1')
                            <input type="checkbox" id="enfermedades-actuales" checked>
                        @else
                            <input type="checkbox" id="enfermedades-actuales">
                        @endif
                        <span class="checkmark"></span>
                    </div>
                    <div class="historial-item">
                        <label for="enfermedades-actuales">Tiempo de evolución : </label>
                    </div>

                    <div class="historial-item">
                        <label for="enfermedades-actuales">Otra :{{ $Patologico->Otra }} </label>
                    </div>


                </div>
            @endforeach
            <div class="page-break"></div>
            @foreach ($Exploraciones as $Exploracion)
                <div class="historial-container">

                    <div class="historial-item">
                        <h2 class="historial-header">EXPLORACIÓN FISICA:

                        </h2>
                        <label>SIGNOS VITALES :</label>
                        <div class="checkbox-container">
                            <label for="enfermedades-actuales">T/A </label>
                            <input type="checkbox" id="enfermedades-actuales" checked>
                            <span class="checkmark"></span>


                        </div>


                        <div class="checkbox-container">
                            <label for="enfermedades-actuales">FC </label>
                            <input type="checkbox" id="enfermedades-actuales" checked>
                            <span class="checkmark"></span>
                        </div>
                        <div class="checkbox-container">
                            <label for="enfermedades-actuales">FR</label>
                            <input type="checkbox" id="enfermedades-actuales" checked>
                            <span class="checkmark"></span>
                        </div>

                        <div class="checkbox-container">
                            <label for="enfermedades-actuales">X1 </label>
                            <input type="checkbox" id="enfermedades-actuales" checked>
                            <span class="checkmark"></span>
                        </div>
                        <div class="checkbox-container">
                            <label for="enfermedades-actuales">FR</label>
                            <input type="checkbox" id="enfermedades-actuales" checked>
                            <span class="checkmark"></span>
                        </div>
                        <div class="checkbox-container">
                            <label for="enfermedades-actuales">X1 </label>
                            <input type="checkbox" id="enfermedades-actuales" checked>
                            <span class="checkmark"></span>
                        </div>
                        <table>
                            <tr align="left">
                                <th align="left">
                                    <div class="historial-item">
                                        <label for="enfermedades-actuales">TEMP : </label>
                                    </div>
                                    <div class="historial-item">
                                        <label for="enfermedades-actuales">PESO : </label>
                                    </div>

                                    <div class="historial-item">
                                        <label for="enfermedades-actuales">CABEZA: </label>
                                    </div>
                                    <div class="historial-item">
                                        <label for="enfermedades-actuales">CUELLO: </label>
                                    </div>
                                    <div class="historial-item">
                                        <label for="enfermedades-actuales">ABDOMEN: </label>
                                    </div>
                                    <div class="historial-item">
                                        <label for="enfermedades-actuales">MIEMBRIOS PELVICOS: </label>
                                    </div>
                                    <div class="historial-item">
                                        <label for="enfermedades-actuales">MIEMBRIOS TORÁXICOS: </label>
                                    </div>
                                </th>
                                <th align="left">
                                    <div class="historial-item">
                                        <label for="enfermedades-actuales">TEMP : </label>
                                    </div>
                                    <div class="historial-item">
                                        <label for="enfermedades-actuales">Datos : </label>
                                    </div>

                                    <div class="historial-item">
                                        <label for="enfermedades-actuales">{{ $Exploracion->Cabeza_ef }} </label>
                                    </div>
                                    <div class="historial-item">
                                        <label for="enfermedades-actuales">{{ $Exploracion->Cuello_ef }} </label>
                                    </div>
                                    <div class="historial-item">
                                        <label for="enfermedades-actuales">{{ $Exploracion->Abdomen_ef }} </label>
                                    </div>
                                    <div class="historial-item">
                                        <label
                                            for="enfermedades-actuales">{{ $Exploracion->Miembro_pelvico_ef }}</label>
                                    </div>
                                    <div class="historial-item">
                                        <label
                                            for="enfermedades-actuales">{{ $Exploracion->Miembro_toraxico_ef }}</label>
                                    </div>
                                </th>
                            </tr>

                        </table>




                    </div>
            @endforeach
            @if($Gineco->isEmpty())
            @else
            

            @foreach ($Gineco as $Gine)
                <h2 class="historial-header">ANTECEDENTES GINECOBSTÉTRICO:


                </h2>
                <div class="historial-item">
                    <table>

                        <tr align="left">
                            <td align="left">
                                <div class="historial-item">
                                    <label for="enfermedades-actuales"> MENARCA : </label>
                                </div>
                                <div class="historial-item">
                                    <label for="enfermedades-actuales">IVSA: </label>
                                </div>

                                <div class="historial-item">
                                    <label for="enfermedades-actuales">GESTA: </label>
                                </div>
                            </td>
                            <td align="left">
                                <div class="historial-item">
                                    <label for="enfermedades-actuales"> {{ $Gine->Menarca }} Años</label>
                                </div>
                                <div class="historial-item">
                                    <label for="enfermedades-actuales">{{ $Gine->Ivsa }} Años</label>
                                </div>

                                <div class="historial-item">
                                    <label for="enfermedades-actuales">{{ $Gine->Gesta }} Años</label>
                                </div>
                            </td>

                            <td align="left">
                                <div class="historial-item">
                                    <label for="enfermedades-actuales">CESÁREAS: </label>
                                </div>
                                <div class="historial-item">
                                    <label for="enfermedades-actuales">ABORTOS: </label>
                                </div>
                                <div class="historial-item">
                                    <label for="enfermedades-actuales">PARAS: </label>
                                </div>
                            </td>



                            <td align="left">
                                <div class="historial-item">
                                    <label for="enfermedades-actuales">CESÁREAS: </label>
                                </div>
                                <div class="historial-item">
                                    <label for="enfermedades-actuales">{{ $Gine->Aborto }} </label>
                                </div>
                                <div class="historial-item">
                                    <label for="enfermedades-actuales">{{ $Gine->Paras }} </label>
                                </div>
                            </td>
                        </tr>

                    </table>






                </div>
            @endforeach
            @endif
            @foreach ($Estudios as $Estudio)
                <h2 class="historial-header">RESULTADOS DE LABORATORIO:


                </h2>

                <div class="historial-item">

                    <table>
                        <tr>
                            <th align="left"> <label>BH :</label></th>
                            <th align="left">
                                <div class="historial-item">
                                    <label for="enfermedades-actuales"> HEMOGLOBINA: </label>
                                </div>
                                <div class="historial-item">
                                    <label for="enfermedades-actuales">HEMATOCRITO: </label>
                                </div>

                                <div class="historial-item">
                                    <label for="enfermedades-actuales">PLAQUETAS: </label>
                                </div>
                            </th>
                            <th align="left">
                                <div class="historial-item">
                                    <label for="enfermedades-actuales"> {{ $Estudio->Nombre_e }}</label>
                                </div>
                                <div class="historial-item">
                                    <label for="enfermedades-actuales">{{ $Estudio->Tipo_e }} </label>
                                </div>

                                <div class="historial-item">
                                    <label for="enfermedades-actuales">{{ $Estudio->Descripcion_e }}</label>
                                </div>
                            </th>
                        </tr>
                        <tr align="left">
                            <td align="left"> <label>QS :</label></td>
                            <td align="left">
                                <div class="historial-item">
                                    <label for="enfermedades-actuales">GLUCOSA: </label>
                                </div>
                                <div class="historial-item">
                                    <label for="enfermedades-actuales">UREA: </label>
                                </div>
                                <div class="historial-item">
                                    <label for="enfermedades-actuales">CREATININA: </label>
                                </div>
                                <div class="historial-item">
                                    <label for="enfermedades-actuales">RX: </label>
                                </div>
                                <div class="historial-item">
                                    <label for="enfermedades-actuales">USG: </label>
                                </div>
                            </td>
                            <td align="left">
                                <div class="historial-item">
                                    <label for="enfermedades-actuales">GLUCOSA: </label>
                                </div>
                                <div class="historial-item">
                                    <label for="enfermedades-actuales">UREA: </label>
                                </div>
                                <div class="historial-item">
                                    <label for="enfermedades-actuales">CREATININA: </label>
                                </div>
                                <div class="historial-item">
                                    <label for="enfermedades-actuales">RX: </label>
                                </div>
                                <div class="historial-item">
                                    <label for="enfermedades-actuales">USG: </label>
                                </div>
                            </td>
                        </tr>

                    </table>










                </div>

        </div>
        @endforeach
        @foreach ($Notas_p as $Nota)
            <div class="page-break"></div>


            <div class="historial-container">
                <h2 class="historial-header">NOTA POST-QUIRÙRGICA:


                </h2>

                <table>
                    <tr align="left">
                        <th align="left">
                            <div class="historial-item">
                                <label for="enfermedades-actuales"> CIRUJIA PROGRAMADA </label>
                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">CIRUJIA REALIZADA: </label>
                            </div>

                            <div class="historial-item">
                                <label for="enfermedades-actuales">HALLAZGOS: </label>
                            </div>


                            <div class="historial-item">
                                <label for="enfermedades-actuales">COMPLICACIONES: </label>
                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">CIRUJANO: </label>
                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">AYUDANTE: </label>
                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">INTRUMENTISTA: </label>
                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">ANIESTESIOLOGO: </label>
                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">CIRCULANTE: </label>
                            </div>

                        </th>
                        <th align="left">
                            <div class="historial-item">
                                <label for="enfermedades-actuales"> {{ $Nota->ProgramacionC }} </label>
                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">{{ $Nota->Ejecucion }}: </label>
                            </div>

                            <div class="historial-item">
                                <label for="enfermedades-actuales">{{ $Nota->Hallazgos }} </label>
                            </div>


                            <div class="historial-item">
                                <label for="enfermedades-actuales">{{ $Nota->Complicaciones }} </label>
                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">{{ $Nota->Nombre_Cirujano }} </label>
                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">{{ $Nota->Nombre_Ayudante }} </label>
                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">{{ $Nota->Nombre_Instrumentista }} </label>
                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">{{ $Nota->Nombre_Aniestesiologo }}</label>
                            </div>
                            <div class="historial-item">
                                <label for="enfermedades-actuales">{{ $Nota->Circulante }} </label>
                            </div>

                        </th>
                    </tr>

                </table>

            </div>
        @endforeach
        @foreach ($Notas as $Nota)
            <div class="historial-item textarea-container">
                <label for="observaciones">NOTA DE EVALUACIÓN POSTOPERATORIA:</label>
                <textarea id="observaciones">{{ $Nota->Nota }}</textarea>
            </div>
            <div class="historial-item textarea-container">
                <label for="observaciones">NOTA MEDICA:</label>
                <textarea id="observaciones">EJEMOLO NOTA</textarea>
            </div>
            <div class="historial-item textarea-container">
                <label for="observaciones">NOTA de ALTA:</label>
                <textarea id="observaciones">EJEMPLO NOTA </textarea>
            </div>


            <div class="historial-item textarea-container">
                <label for="recomendaciones">Recomendaciones:</label>
                <textarea id="recomendaciones">EJEMPLO NOTA </textarea>
            </div>
            </div>



            </div>
        @endforeach

    </main>

    <footer>
        <p>Almendro 210, Colonia Reforma. CP. 68050</p>
    </footer>

</body>

</html>
