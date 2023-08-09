   <div class="tab-pane fade" id="rounded-pills-icon-profile" role="tabpanel"
                                            aria-labelledby="rounded-pills-icon-profile-tab">
                                            @if ($Historiales->isEmpty())

                                                <div class="widget-content widget-content-area">
                                                    <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4"
                                                        role="alert">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-alert-circle">
                                                            <circle cx="12" cy="12" r="10">
                                                            </circle>
                                                            <line x1="12" y1="8" x2="12"
                                                                y2="12"></line>
                                                            <line x1="12" y1="16" x2="12"
                                                                y2="16"></line>
                                                        </svg>
                                                        <strong>Lo sentimos !</strong> No Hay registros disponibles para el
                                                        paciente.
                                                    </div>

                                                    <form class="user needs-validation" method="POST"
                                                        action="{{ route('historial.Formulario', ['id' => $Paciente->SS]) }}" novalidate>
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                                            id="Hola" style="display: none;">Agregar
                                                            Historial</button>
                                                    </form>
                                                </div>
                                            @else
                                                @foreach ($Historiales as $Historial)
                                                    <!--- Historial-->
                                                       <h1 style="text-align: center;">HISTORIAL DEL PACIENTE</h1>
                                                    <form class="user needs-validation" method="POST"
                                                        action="{{ route('historial.update',['Identificador'=>$Historial->idHIstorial_clinico ,'Paciente'=>$Historial->PacienteSS ]) }}" novalidate>
                                                        @csrf
                                                        <h2> ANTECEDENTES HEREDOFAMILARES</h2>
                                                       
                                                        <div class="row mb-4">
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">diabetes millitus(DM) <span class="red-asterisk">*</span>
                                                                </label>
                                                                <select class="form-control" name="DM" required>
                                                                    <option value="{{ $Historial->DM }}">
                                                                        @if ($Historial->DM == '1')
                                                                            Si
                                                                            @endif @if ($Historial->DM == '0')
                                                                                No
                                                                            @endif
                                                                    </option>
                                                                    <option value="1">Si</option>
                                                                    <option value="0">No</option>

                                                                </select>
                                                                <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Hirpertensión (HAS) <span class="red-asterisk">*</span></label>
                                                                <select class="form-control" name="HAS" required>
                                                                    <option value="{{ $Historial->HAS }}">
                                                                        @if ($Historial->HAS == '1')
                                                                            Si
                                                                            @endif @if ($Historial->HAS == '0')
                                                                                No
                                                                            @endif
                                                                    </option>
                                                                    <option value="1">Si</option>
                                                                    <option value="0">No</option>

                                                                </select>
                                                                <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                                            </div>
                                                            </div>
                                                             <div class="row mb-4">
                                                            <div class="col">

                                                                <label for="formGroupExampleInput">Cancer(CA)</label>
                                                                <select class="form-control" name="CA" required>
                                                                    <option value="{{ $Historial->CA }}">
                                                                        @if ($Historial->CA == '1')
                                                                            Si
                                                                            @endif @if ($Historial->CA == '0')
                                                                                No
                                                                            @endif
                                                                    </option>
                                                                    <option value="1">Si</option>
                                                                    <option value="0">No</option>

                                                                </select>
                                                                <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Madre fallecida <span class="red-asterisk">*</span></label>
                                                                <select class="form-control" name="MF" required>
                                                                    <option value="{{ $Historial->MFALLECIDA }}">
                                                                        {{ $Historial->MFALLECIDA }}</option>
                                                                    <option value="Si">Si</option>
                                                                    <option value="No">No</option>

                                                                </select>
                                                                <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                                            </div>
                                                             </div>
                                                             <div class="row mb-4">
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">diabetes millitus(DM) <span class="red-asterisk">*</span>
                                                                </label>
                                                                <select class="form-control" name="PDM" required>
                                                                    <option value="{{ $Historial->PDM }}">
                                                                        @if ($Historial->PDM == '1')
                                                                            Si
                                                                            @endif @if ($Historial->PDM == '0')
                                                                                No
                                                                            @endif
                                                                    </option>
                                                                    <option value="1">Si</option>
                                                                    <option value="0">No</option>

                                                                </select>
                                                                <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Hirpertensión (HAS) <span class="red-asterisk">*</span></label>
                                                                <select class="form-control" name="PHAS" required>
                                                                    <option value="{{ $Historial->PHAS }}">
                                                                        @if ($Historial->PHAS == '1')
                                                                            Si
                                                                            @endif @if ($Historial->PHAS == '0')
                                                                                No
                                                                            @endif
                                                                    </option>
                                                                    <option value="1">Si</option>
                                                                    <option value="0">No</option>

                                                                </select>
                                                                <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                                            </div>
                                                             </div>
                                                             <div class="row mb-4">
                                                            <div class="col">

                                                                <label for="formGroupExampleInput"> Cáncer(CA) <span class="red-asterisk">*</span></label>
                                                                <select class="form-control" name="PCA" required>
                                                                    <option value="{{ $Historial->PCA }}">
                                                                        @if ($Historial->PCA == '1')
                                                                            Si
                                                                            @endif @if ($Historial->PCA == '0')
                                                                                No
                                                                            @endif
                                                                    </option>
                                                                    <option value="1">Si</option>
                                                                    <option value="0">No</option>

                                                                </select>
                                                                <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                                            </div>

                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Padre fallecido <span class="red-asterisk">*</span></label>
                                                                <select class="form-control" name="PF" required>
                                                                    <option value="{{ $Historial->PFALLECIDA }}">
                                                                        {{ $Historial->PFALLECIDA }}</option>
                                                                    <option value="Si">Si</option>
                                                                    <option value="No">No</option>

                                                                </select>
                                                                <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                                            </div>
                                                             </div>
                                                             <div class="row mb-4">
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Causas <span class="red-asterisk">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="CAUSAS DE LA MUERTE PADRE Y MADRE " value="N/A" 
                                                                    name="CAM" value="{{ $Historial->CAUSAS }}" required>
                                                                    <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         ingrese una casusa valida
                                     </div>
                                                            </div>

                                                        </div>
                                                        <h2> ANTECEDENTES PERSONALES NO PATOLOGICOS </h2>
                                                        <div class="row mb-4">
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Alergias  <span class="red-asterisk">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="ALERGIAS  " name="ALERGIAS"
                                                                    value="{{ $Historial->ALERGIAS }}" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&()-_=+[\]{}|:;'<>/\\]+$" minlength="2"   >
                                                                    <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         ingrese alergias validas
                                     </div>
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Alimentos <span class="red-asterisk">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="ALERGIAS POR ALIMENTOS " name="AL"
                                                                    value="{{ $Historial->ALIMENTOS }}" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&()-_=+[\]{}|:;'<>/\\]+$" minlength="2">
                                                                    <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         ingrese una alergia de alimentos valida
                                     </div>
                                                            </div>
                                                             </div>
                                                             <div class="row mb-4">
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">
                                                                    Sustancias químicas </label>

                                                                <input type="text" class="form-control"
                                                                    placeholder="ALERGIAS POR SUSTANCIAS QUíMICAS"
                                                                    name="ALS"
                                                                    value="{{ $Historial->SUSTANCIAS_Q }}" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&()-_=+[\]{}|:;'<>/\\]+$" minlength="2"  >
                                                                    <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         ingrese una alergia de sustancias químicas valida
                                     </div>
                                                            </div>


                                                       

                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Cirugías <span class="red-asterisk">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="CIRUJIAS PREVIAS " name="CP"
                                                                    value="{{ $Historial->CIRUJIAS_P }}" pattern="^[a-zA-Z0-9\s.,!?@#$%^&()-_=+[\]{}|:;'<>/\\]+$" minlength="2" required >
                                                                    <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         ingrese una cirugía valida 
                                     </div>
                                                            </div>
                                                             </div>
                                                             <div class="row mb-4">
                                                            <div class="col">
                                                                <label for="formGroupExampleInput"> Transfusiones </label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="TRANSFUCIONES" name="TF"
                                                                    value="{{ $Historial->TRANSFUCIONES }}" pattern="^[a-zA-Z0-9\s.,!?@#$%^&()-_=+[\]{}|:;'<>/\\]+$" minlength="2" required >
                                                                     <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         ingrese una transfusión valida
                                     </div>
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Fracturas <span class="red-asterisk">*</span>
                                                                </label>

                                                                <input type="text" class="form-control"
                                                                    placeholder="ACTUALES O PREVIAS" name="FP"
                                                                    value="{{ $Historial->FRACTURAS }}" pattern="^[a-zA-Z0-9\s.,!?@#$%^&()-_=+[\]{}|:;'<>/\\]+$" minlength="2" required  >
                                                                     <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         ingrese una fractura  valida
                                     </div>
                                                            </div>


                                                        </div>

                                                        <div class="row mb-4">

                                                            <div class="col">
                                                                <label for="formGroupExampleInput"> Alcohólico <span class="red-asterisk">*</span></label>
                                                                <select class="form-control" name="ALP" required>
                                                                    <option value="{{ $Historial->ALCHOLISMO }}">
                                                                        @if ($Historial->ALCHOLISMO == '1')
                                                                            Si
                                                                            @endif @if ($Historial->ALCHOLISMO == '0')
                                                                                No
                                                                            @endif
                                                                    </option>
                                                                    <option value="1">Si</option>
                                                                    <option value="0">No</option>

                                                                </select>
                                                                <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput"> Tabaquismo <span class="red-asterisk">*</span> </label>
                                                                <select class="form-control" name="TB" required>
                                                                    <option value="{{ $Historial->TABASQUISMO }}">
                                                                        @if ($Historial->TABASQUISMO == '1')
                                                                            Si
                                                                            @endif @if ($Historial->TABASQUISMO == '0')
                                                                                No
                                                                            @endif
                                                                    </option>
                                                                    <option value="1">Si</option>
                                                                    <option value="0">No</option>

                                                                </select>
                                                                 <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                                            </div>
                                                             </div>
                                                             <div class="row mb-4">
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Drogas <span class="red-asterisk">*</span></label>
                                                                <select class="form-control" name="DR" required>
                                                                    <option value="{{ $Historial->DROGAS }}" >
                                                                        @if ($Historial->DROGAS == '1')
                                                                            Si
                                                                            @endif @if ($Historial->DROGAS == '0')
                                                                                No
                                                                            @endif
                                                                    </option>
                                                                    <option value="1">Si</option>
                                                                    <option value="0">No</option>

                                                                </select>
                                                                 <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         el campo es requerido
                                     </div>
                                                            </div>




                                                        </div>
                                                        <div class="modal-footer">

                                                            <button type="submit"
                                                                class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                                                                style="display: none;">Actualizar</button>
                                                    </form>
                                                    <form class="user" method="POST"
                                                        action="{{ route('Historial.destroy', ['id' => $Historial->idHIstorial_clinico]) }}">
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola"
                                                            id="Hola" style="display: none;">Eliminar</button>
                                                    </form>
                                                    <form class="user" method="POST"
                                                        action="{{ route('historial.Formulario', ['id' => $Paciente->SS]) }}">
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                                            id="Hola" style="display: none;">Agregar
                                                            Historial</button>
                                                    </form>

                                        </div>
                                        @endforeach
                                        @endif
                                        <!---End-Historial-->
                                    </div>