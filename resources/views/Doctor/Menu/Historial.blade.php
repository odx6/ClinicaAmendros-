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

                                                    <form class="user" method="POST"
                                                        action="{{ route('historial.Formulario', ['id' => $Paciente->SS]) }}">
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

                                                    <form class="user" method="POST"
                                                        action="{{ route('historial.update',['Identificador'=>$Historial->idHIstorial_clinico ,'Paciente'=>$Historial->PacienteSS ]) }}">
                                                        @csrf
                                                        <h2> ANTECEDENTES HEREDOFAMILARES</h2>
                                                       
                                                        <div class="row mb-4">
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">diabetes millitus(DM)
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
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Hirpertensión (HAS)</label>
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
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Madre fallecida</label>
                                                                <select class="form-control" name="MF" required>
                                                                    <option value="{{ $Historial->MFALLECIDA }}">
                                                                        {{ $Historial->MFALLECIDA }}</option>
                                                                    <option value="Si">Si</option>
                                                                    <option value="No">No</option>

                                                                </select>
                                                            </div>
                                                             </div>
                                                             <div class="row mb-4">
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">diabetes millitus(DM)
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
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Hirpertensión (HAS)</label>
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
                                                            </div>
                                                             </div>
                                                             <div class="row mb-4">
                                                            <div class="col">

                                                                <label for="formGroupExampleInput"> Cancer(CA)</label>
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
                                                            </div>

                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Padre fallecido</label>
                                                                <select class="form-control" name="PF" required>
                                                                    <option value="{{ $Historial->PFALLECIDA }}">
                                                                        {{ $Historial->PFALLECIDA }}</option>
                                                                    <option value="Si">Si</option>
                                                                    <option value="No">No</option>

                                                                </select>
                                                            </div>
                                                             </div>
                                                             <div class="row mb-4">
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Causas</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="CAUSAS DE LA MUERTE PADRE Y MADRE "
                                                                    name="CAM" value="{{ $Historial->CAUSAS }}" required>
                                                            </div>

                                                        </div>
                                                        <h2> ANTECEDENTES PERSONALES NO PATOLOGICOS </h2>
                                                        <div class="row mb-4">
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Alergias 
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="ALERGIAS  " name="ALERGIAS"
                                                                    value="{{ $Historial->ALERGIAS }}" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" >
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Alimentos
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="ALERGIAS POR ALIMENTOS " name="AL"
                                                                    value="{{ $Historial->ALIMENTOS }}" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2">
                                                            </div>
                                                             </div>
                                                             <div class="row mb-4">
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">
                                                                    Sustancias quimicas </label>

                                                                <input type="text" class="form-control"
                                                                    placeholder="ALERGIAS POR SUSTANCIAS QUIMICAS"
                                                                    name="ALS"
                                                                    value="{{ $Historial->SUSTANCIAS_Q }}" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" >
                                                            </div>


                                                       

                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Ciruguias
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="CIRUJIAS PREVIAS " name="CP"
                                                                    value="{{ $Historial->CIRUJIAS_P }}" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" required>
                                                            </div>
                                                             </div>
                                                             <div class="row mb-4">
                                                            <div class="col">
                                                                <label for="formGroupExampleInput"> Transfunciones </label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="TRANSFUCIONES" name="TF"
                                                                    value="{{ $Historial->TRANSFUCIONES }}" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" required>
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Fracturas
                                                                </label>

                                                                <input type="text" class="form-control"
                                                                    placeholder="ACTUALES O PREVIAS" name="FP"
                                                                    value="{{ $Historial->FRACTURAS }}" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" required >
                                                            </div>


                                                        </div>

                                                        <div class="row mb-4">

                                                            <div class="col">
                                                                <label for="formGroupExampleInput"> Alcholico </label>
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
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput"> Tabaquismo </label>
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
                                                            </div>
                                                             </div>
                                                             <div class="row mb-4">
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Drogas </label>
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