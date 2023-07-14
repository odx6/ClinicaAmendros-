<div class="tab-pane fade" id="rounded-pills-icon-AnalisisMarcha" role="tabpanel"
    aria-labelledby="rounded-pills-icon-settings-tab">
    @if ($Marchas->isEmpty())
        <div class="widget-content widget-content-area">
            <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4"
                role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-alert-circle">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="8" x2="12" y2="12"></line>
                    <line x1="12" y1="16" x2="12" y2="16"></line>
                </svg>
                <strong>Lo sentimos !</strong> No Hay registros disponibles para el paciente.

            </div>
            <form class="user" method="POST" action="{{ route('index.AnalisisMarcha', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2AnalisisMarcha me-4 btn-add-event Hola"
                    id="Hola" style="display: none;">Agregar Plan Analisis marcha </button>
            </form>
        </div>
    @else
        @foreach ($Marchas as $marcha)
            <form class="user needs-validation" method="POST"
                action="{{ route('update.AnalisisMarcha', ['id' => $marcha->pk_Analis_marcha]) }}" novalidate>
                @csrf

                <h2>Analisis de la marcha</h2>

                <h2>Marcha </h2>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">INICIO DE LA MARCHA <br>(Inmediatamente después<br> de decir
                                    “camine”) </th>
                                <th scope="col"> si = 0 no =1 Moderado=2</th>
                            </tr>
                            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden">
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Duda o <br> vacila o <br> múltiples
                                            <br> intentos <br> para comenzar
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">

                                        <select class="form-control Marcha" name="Valor1" required>

                                            <option value="0" @if ($marcha->valor1 == 0) selected @endif>
                                                (0)
                                                si</option>
                                            <option value="1" @if ($marcha->valor1 == 1) selected @endif>
                                                (1)No </option>

                                        </select>
                                    </div>
                                </td>




                            </tr>

                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">
                                            LONGITUD Y <br> ALTURA DEL PASO
                                        </label>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        label for="formGroupExampleInput">El pie derecho <br> no sobrepasa <br> al
                                        izquierdo con el paso <br>en la fase del<br> bal anceo
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">

                                        <select class="form-control Marcha" name="Valor2" required>

                                            <option value="0" @if ($marcha->valor2 == 0) selected @endif>
                                                (0)si</option>
                                            <option value="1" @if ($marcha->valor2 == 1) selected @endif>
                                                (1)No </option>

                                        </select>
                                    </div>
                                </td>




                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">El pie derecho <br> no se levanta
                                            <br>completamente del suelo <br> con el paso <br>en la fase del balanceo
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">

                                        <select class="form-control Marcha" name="Valor3" required>
                                            <option value="0" @if ($marcha->valor3 == 0) selected @endif>
                                                (0)si</option>
                                            <option value="1" @if ($marcha->valor3 == 1) selected @endif>
                                                (1)No </option>

                                        </select>
                                    </div>
                                </td>




                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">El pie izquierdo<br> no sobrepasa el
                                            derecho<br> con el paso<br> en la fase del balanceo
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">

                                        <select class="form-control Marcha" name="Valor4" required>
                                            <option value="0" @if ($marcha->valor4 == 0) selected @endif>
                                                (0)si</option>
                                            <option value="1" @if ($marcha->valor4 == 1) selected @endif>
                                                (1)No </option>

                                        </select>
                                    </div>
                                </td>




                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">El pie izquierdo<br> no se levanta
                                            completamente<br> del suelo <br>con el paso en<br> la fase del balanceo
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">

                                        <select class="form-control Marcha" name="Valor5" required>
                                            <option value="0" @if ($marcha->valor5 == 0) selected @endif>
                                                (0)si</option>
                                            <option value="1" @if ($marcha->valor5 == 1) selected @endif>
                                                (1)No </option>

                                        </select>
                                    </div>
                                </td>




                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">
                                            SIMETRIA DEL PASO
                                        </label>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">La longitud del<br> paso con el pie
                                            derecho<br> e izquierdo es diferente
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">

                                        <select class="form-control Marcha" name="Valor6">
                                            <option value="0" @if ($marcha->valor6 == 0) selected @endif>
                                                (0)si</option>
                                            <option value="1" @if ($marcha->valor6 == 1) selected @endif>
                                                (1)No </option>

                                        </select>
                                    </div>
                                </td>




                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">
                                            CONTINUIDAD DE LOS PASOS
                                        </label>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Para<br> o hay discontinuidad <br>entre los
                                            pasos
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">

                                        <select class="form-control Marcha" name="Valor7" required>
                                            <option value="0" @if ($marcha->valor7 == 0) selected @endif>
                                                (0)si</option>
                                            <option value="1" @if ($marcha->valor7 == 1) selected @endif>
                                                (1)No </option>

                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">
                                            TRAYECTORIA <br>(Estimada en relación a las <br>baldosas del suelo de 30
                                            cm;<br> se observa<br> la desviación de un pie <br>en 3 mts de distancia)
                                        </label>
                                    </div>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Marcada desviación,<br> utiliza ayuda
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">

                                        <select class="form-control Marcha" name="Valor8" required>
                                            <option value="0" @if ($marcha->valor8 == 0) selected @endif>
                                                (0)si</option>
                                            <option value="1" @if ($marcha->valor8 == 1) selected @endif>
                                                (1)No </option>
                                            <option value="2" @if ($marcha->valor8 == 2) selected @endif>
                                                (2)Moderado </option>

                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">
                                            TRONCO
                                        </label>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Marcado balanceo<br> o utiliza ayuda,<br>
                                            flexión de rodillas,<br> espalda <br>o extensión hacia afuera<br> de los
                                            brazos
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">

                                        <select class="form-control Marcha" name="Valor9">
                                            <option value="0" @if ($marcha->valor9 == 0) selected @endif>
                                                (0)si</option>
                                            <option value="1" @if ($marcha->valor9 == 1) selected @endif>
                                                (1)No </option>
                                            <option value="2" @if ($marcha->valor9 == 2) selected @endif>
                                                (2)Moderado </option>

                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">
                                            POSTURA EN LA MARCHA
                                        </label>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput"> Talones <br>separados
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">

                                        <select class="form-control Marcha" name="Valor10">
                                            <option value="0" @if ($marcha->valor10 == 0) selected @endif>
                                                (0)si</option>
                                            <option value="1" @if ($marcha->valor10 == 1) selected @endif>
                                                (1)No </option>


                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput"> Suma Total
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Suma total"
                                            name="Total" id="Resultado" value="{{ $marcha->total }}">
                                    </div>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>

                <div class="modal-footer">

                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                        style="display: none;">Actualizar</button>
            </form>
            <form class="user" method="POST" action="{{ route('index.Plan', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                    id="Hola" style="display: none;">Agregar Analisis Marcha
                </button>
            </form>
            <form class="user" method="POST"
                action="{{ route('destroy.AnalisisMarcha', ['id' => $marcha->pk_Analis_marcha]) }}">
                @csrf
                <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Eliminar</button>
            </form>

</div>
@endforeach
@endif
</div>
