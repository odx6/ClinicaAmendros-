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
       <h1 style="text-align: center;">EVALUACIÓN MUSCULAR</h1>
               
                <h4>Los datos marcados con <span class="red-asterisk">*</span> son obligatorios </h4>
        
        <table class="table table-bordered">
            <thead>

            </thead>
            <tbody>
                <tr>
                    <th scope="row">Grado 5</th>

                    <td>Fuerza muscular <br> contra resistencia completa</td>

                </tr>
                <tr>
                    <th scope="row">Grado 4</th>
                    <td>La fuerza muscular está reducid <br>pero la contracción muscular <br>puede realizar<br>
                        un movimiento<br> articular contra resistencia. </td>

                </tr>
                <tr>
                    <th scope="row">Grado 3</th>
                    <td>La fuerza muscular está reducida tanto<br> que el movimiento articular solo<br>
                        puede realizarse contra la gravedad<br> sin la resistencia del
                        examinador.<br>Por ejemplo, la articulación del <br>codo puede moverse desde
                        extensión<br> completa hasta flexión completa,<br> comenzando con el brazo<br>
                        suspendido al lado del cuerpo. </td>

                </tr>
                <tr>
                    <th scope="row">Grado 2</th>
                    <td>Movimiento activo que no puede vencer <br>la fuerza de gravedad.Por ejemplo,<br> el
                        codo puede flexionarse<br> completamente solo cuando<br> el brazo es mantenido en un<br>
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




        <div class="row">
            <h2>Evaluación de fuerza</h2>
            <h4>Los campos marcados con * son requeridos </h4>
            @foreach ($Evaluaciones as $Evaluacion)
                <form class="user needs-validation" method="POST"
                    action="{{ route('update.Muscular', ['id' => $Evaluacion->pk_evaluacion]) }}" novalidate>
                    @csrf
                    @if ($Evaluacion->Tipo == 'Muscular')
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre del miembro a evaluar <span class="red-asterisk">*</span></th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="col">

                                            <input type="text" class="form-control form-control-lg"
                                                placeholder="Nombre del miembro a evaluar" name="Nombre"
                                                value="{{ $Evaluacion->Nombre_miembro }}" required
                                                pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                                                 <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un nombre valido 
                                     </div>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example" name="izquierda" required>


                                            <option value="{{ $Evaluacion->val_iquierda }}">Grado
                                                {{ $Evaluacion->val_iquierda }}</option>
                                            <option value="0">Grado 0</option>
                                            <option value="1">Grado 1</option>
                                            <option value="2">Grado 2</option>
                                            <option value="3">Grado 3</option>
                                            <option value="4">Grado 4</option>
                                            <option value="5">Grado 5</option>
                                        </select>
                                        <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                    Campo obligatorio 
                                     </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example" name="Derecha" required>

                                            <option value="{{ $Evaluacion->val_derecha }}">Grado
                                                {{ $Evaluacion->val_derecha }}</option>
                                            <option value="0">Grado 0</option>
                                            <option value="1">Grado 1</option>
                                            <option value="2">Grado 2</option>
                                            <option value="3">Grado 3</option>
                                            <option value="4">Grado 4</option>
                                            <option value="5">Grado 5</option>
                                        </select>
                                        <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                    Campo obligatorio 
                                     </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                                style="display: none;">Actualizar</button>
                </form>
                <form class="user" method="POST" action="{{ route('index.Muscular', ['id' => $Paciente->SS]) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                        id="Hola" style="display: none;">Agregar Evaluación Muscular
                    </button>
                </form>
                <form class="user" method="POST"
                    action="{{ route('destroy.Muscular', ['id' => $Evaluacion->pk_evaluacion]) }}">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola"
                        id="Hola" style="display: none;">Eliminar</button>
                </form>
            @endif

        </div>
    @endforeach

   
</div>
@endif
</div>



