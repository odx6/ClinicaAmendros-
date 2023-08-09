    <div class="tab-pane fade" id="rounded-pills-icon-Estudios" role="tabpanel"
        aria-labelledby="rounded-pills-icon-settings-tab">
        @if ($Estudios->isEmpty())
            <div class="widget-content widget-content-area">
                <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4"
                    role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-alert-circle">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12">
                        </line>
                        <line x1="12" y1="16" x2="12" y2="16">
                        </line>
                    </svg>
                    <strong>Lo sentimos !</strong> No Hay registros disponibles para el paciente.

                </div>
                <form class="user needs-validation" method="POST"
                    action="{{ route('Estudios.Formulario', ['id' => $Paciente->SS]) }}" novalidate>
                    @csrf
                    <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                        id="Hola" style="display: none;">Agregar estudio del
                        paciente</button>
                </form>
            </div>
        @else
         <h1 style="text-align: center;">ESTUDIOS DEL PACIENTE</h1>
            
            <h4>Los campos marcados con <span class="red-asterisk">*</span> son obligatorios</h4>
            <!--Antecedentes patologicos-->
            @foreach ($Estudios as $estudio)
                <form class="user needs-validation" method="POST"
                    action="{{ route('Estudios.store', ['id' => $estudio->pk_estudio]) }}" novalidate>
                    @csrf
                    <div class="row mb-4">
                        <div class="col">
                            <label for="formGroupExampleInput">Hemoglobina <span class="red-asterisk">*</span>
                            </label>
                            <input type="text" class="form-control" placeholder="HEMOGLOBINA" name="HEMOGLOBINA"
                                value="{{ $estudio->HEMOGLOBINA }}" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2"
                                required>
                                <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un estudio valido para Hemoglobina
                                     </div>
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput">Hematocrito <span class="red-asterisk">*</span></label>
                            <input type="text" class="form-control" placeholder="HEMATOCRITO " name="HEMATOCRITO"
                                value="{{ $estudio->HEMATOCRITO }}" attern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2"
                                required>
                                 <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un estudio valido para Hematocrito
                                     </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                            <label for="formGroupExampleInput">plaquetas <span class="red-asterisk">*</span>
                            </label>
                            <input type="text" class="form-control" placeholder="PLAQUETAS" name="PLAQUETAS"
                                value="{{ $estudio->PLAQUETAS }}" attern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2"
                                required>
                                 <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un estudio valido para plaquetas
                                     </div>
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput">Glucosa <span class="red-asterisk">*</span>
                            </label> 
                            <input type="text" class="form-control" placeholder="GLUCOSA" name="GLUCOSA"
                                value="{{ $estudio->GLUCOSA }}" attern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2"
                                required>
                                <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un estudio valido para Glucosa
                                     </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <label for="formGroupExampleInput">Urea <span class="red-asterisk">*</span>
                            </label>
                            <input type="text" class="form-control" placeholder="UREA" name="UREA"
                                value="{{ $estudio->UREA }}" attern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" required>
                                 <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un estudio valido para Urea
                                     </div>

                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput">Creatinina <span class="red-asterisk">*</span></label>
                            <input type="text" class="form-control" placeholder="CREATININA " name="CREATININA"
                                value="{{ $estudio->CREATININA }}" attern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2"
                                required>
                                <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un estudio valido para creatinina
                                     </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                            <label for="formGroupExampleInput">Rx <span class="red-asterisk">*</span>
                            </label>
                            <input type="text" class="form-control" placeholder="RX" name="RX"
                                value="{{ $estudio->RX }}" attern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" required>
                                 <div class="valid-feedback">
                                       Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un estudio valido para rx
                                     </div>
 
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput">Usg <span class="red-asterisk">*</span>
                            </label>
                            <input type="text" class="form-control" placeholder="USG" name="USG"
                                value="{{ $estudio->USG }}" attern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" required>
                                  <div class="valid-feedback">
                                       Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un estudio valido para usg
                                     </div>
                        </div>
                    </div>

                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                            style="display: none;">Actualizar</button>
                </form>
                <form class="user" method="POST"
                    action="{{ route('Estudios.Formulario', ['id' => $Paciente->SS]) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                        id="Hola" style="display: none;">Agregar estudio del
                        paciente</button>
                </form>
                <form class="user" method="POST"
                    action="{{ route('Estudios.destroy', ['id' => $estudio->pk_estudio]) }}">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola"
                        id="Hola" style="display: none;">Eliminar</button>
                </form>

    </div>
    @endforeach
    @endif
    </div>
