<div class="tab-pane fade" id="rounded-pills-icon-muscular" role="tabpanel"
    aria-labelledby="rounded-pills-icon-settings-tab">
    @if ($Evaluaciones->isEmpty())
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
            <form class="user" method="POST" action="{{ route('index.Muscular', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar Evaluación Muscular </button>
            </form>
        </div>
    @else
        
                <div class="container">
                    <h2>Prueba De Movilidad</h2>
                    <div class="container">
                        <div class="row">
                            <h2>Evaluacion muscular</h2>
                            <table class="table table-bordered">
                                <thead>

                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Grado 5</th>

                                        <td>Fuerza muscular contra resistencia completa</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Grado 4</th>
                                        <td>La fuerza muscular está reducid pero la contracción muscular puede realizar
                                            un movimiento articular contra resistencia. </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Grado 3</th>
                                        <td>La fuerza muscular está reducida tanto que el moviemiento articular solo
                                            puede realizarse contra la gravedad sin la resistencia del
                                            examinadro.<br>Por ejemplo, la articulacion del codo puede moverse desde
                                            extension completa hasta felxión completa, comenzando con el brazo
                                            suspendido al lado del cuerpo. </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Grado 2</th>
                                        <td>Moviento activo que no puede vencer la fuerza de gravedad.Por ejemplo, el
                                            codo puede flexionarse completamente solo cuando el brazo es mantenido en un
                                            plano horizontal.</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Grado 1</th>
                                        <td>Esbozo de contracción muscular</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Grado 0'</th>
                                        <td>Ausencia de contracción muscular </td>

                                    </tr>

                                </tbody>
                            </table>

                        </div>
                        
           
                        <div class="row">
                            <h2>Evaluacion de fuerza</h2>
                            @foreach ($Evaluaciones as $Evaluacion)
                            <form class="user" method="POST"
                            action="{{ route('update.Muscular', ['id' => $Evaluacion->pk_evaluacion]) }}">
                            @csrf
                            @if ($Evaluacion->Tipo == 'Muscular')
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre del miembro a evaluar</th>
                                            <th scope="col">Izuierda</th>
                                            <th scope="col">Derecha</th>
                                            <th scope="col">Tipo</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <div class="col">

                                                    <input type="text" class="form-control form-control-lg"
                                                        placeholder="Nombre del miembro a evaluar" name="Nombre" value="{{$Evaluacion->Nombre_miembro}}">
                                                </div>
                                            </th>
                                            <td>
                                                <select class="form-select form-select-lg mb-3"
                                                    aria-label=".form-select-lg example" name="izquierda">
                                                   

                                                    <option value="{{ $Evaluacion->val_iquierda }}">Grado
                                                        {{ $Evaluacion->val_iquierda }}</option>
                                                    <option value="0">Grado 0</option>
                                                    <option value="1">Grado 1</option>
                                                    <option value="2">Grado 2</option>
                                                    <option value="3">Grado 3</option>
                                                    <option value="4">Grado 4</option>
                                                    <option value="5">Grado 5</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-select form-select-lg mb-3"
                                                    aria-label=".form-select-lg example" name="Derecha">
                                                   
                                                    <option value="{{ $Evaluacion->val_derecha }}">Grado
                                                        {{ $Evaluacion->val_derecha }}</option>
                                                    <option value="0">Grado 0</option>
                                                    <option value="1">Grado 1</option>
                                                    <option value="2">Grado 2</option>
                                                    <option value="3">Grado 3</option>
                                                    <option value="4">Grado 4</option>
                                                    <option value="5">Grado 5</option>
                                                </select>
                                            </td>
                                            <td>

                                                <select class="form-select form-select-lg mb-3"
                                                    aria-label=".form-select-lg example"name="Tipo">
                                                   

                                                    <option value="{{ $Evaluacion->Tipo }}">Evaluación
                                                        {{ $Evaluacion->Tipo }}</option>
                                                    <option value="Muscular">Evaluación Muscular</option>
                                                    <option value="Goniométrica">Evaluación Goniométrica</option>

                                                </select>
                                            </td>


                                    </tbody>
                                </table>
                                <div class="modal-footer">

                                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                                        style="display: none;">Actualizar</button>
                            </form>
                            <form class="user" method="POST" action="{{ route('index.Muscular', ['id' => $Paciente->SS]) }}">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                                    style="display: none;">Agregar Evaluacion Muscular
                                </button>
                            </form>
                            <form class="user" method="POST"
                                action="{{ route('destroy.Muscular', ['id' => $Evaluacion->pk_evaluacion]) }}">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                                    style="display: none;">Eliminar</button>
                            </form>
                            @endif
                           
                        </div>
                        @endforeach
                      
                    </div>

                </div>


                <!--end-table-->
               
</form>
</div>
</div>

@endif
@if($habitos->isEmpty()) </div> @endif


