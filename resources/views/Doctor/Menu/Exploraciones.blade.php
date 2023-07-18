 <div class="tab-pane fade" id="rounded-pills-icon-Ex" role="tabpanel"
        aria-labelledby="rounded-pills-icon-settings-tab">
        @if ($Exploraciones->isEmpty())
            <div class="widget-content widget-content-area">
                <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4"
                    role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-alert-circle">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12" y2="16"></line>
                    </svg>
                    <strong>Lo sentimos !</strong> No Hay registros disponibles para el paciente.

                </div>
                <form class="user" method="POST"
                    action="{{ route('Exploracion.Formulario', ['id' => $Paciente->SS]) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                        id="Hola" style="display: none;">Agregar exploración física del paciente</button>
                </form>
            </div>
        @else
            @foreach ($Exploraciones as $Ex)
                <form class="user needs-validation" method="POST" action="{{ route('Exploracion.store',['IDAG'=>$Ex->pk_Exploracion,'IDDOC'=>$Ex->fk_e]) }}" novalidate>
                    @csrf


                                <div class="row mb-4">
                    <div class="col">
                        <label for="formGroupExampleInput">
                            T/A </label>
                        <select class="form-control" name="T/A" required>
                            <option value="{{ $Ex->TA }}">
                                @if ($Ex->TA == '1')
                                    {{ 'Si' }}
                                @endif
                                @if ($Ex->TA == '0')
                                    {{ 'No' }}
                                @endif
                            </option>
                            <option value="1">Si</option>
                            <option value="0">No</option>

                        </select>
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput">
                            FC </label>
                        <select class="form-control" name="FC" required>
                            <option value="{{ $Ex->FC }}">
                                @if ($Ex->FC == '1')
                                    {{ 'Si' }}
                                @endif
                                @if ($Ex->FC == '0')
                                    {{ 'No' }}
                                @endif
                            </option>
                            <option value="1">Si</option>
                            <option value="0">No</option>

                        </select>
                    </div>
                    </div>

                                <div class="row mb-4">
                    <div class="col">
                        <label for="formGroupExampleInput">
                            X1 </label>
                        <select class="form-control" name="X1" required>
                            <option value="{{ $Ex->X1 }}">
                                @if ($Ex->X1 == '1')
                                    {{ 'Si' }}
                                @endif
                                @if ($Ex->X1 == '0')
                                    {{ 'No' }}
                                @endif
                            </option>
                            <option value="1">Si</option>
                            <option value="0">No</option>

                        </select>
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput">
                            FR </label>
                        <select class="form-control" name="FR" required>
                            <option value="{{ $Ex->FR }}">
                                @if ($Ex->FR == '1')
                                    {{ 'Si' }}
                                @endif
                                @if ($Ex->FR == '0')
                                    {{ 'No' }}
                                @endif
                            </option>
                            <option value="1">Si</option>
                            <option value="0">No</option>

                        </select>
                    </div>
                    </div>

                                <div class="row mb-4">
                    <div class="col">
                        <label for="formGroupExampleInput">
                            X2 </label>
                        <select class="form-control" name="X2" required>
                            <option value="{{ $Ex->X2 }}">
                                @if ($Ex->X2 == '1')
                                    {{ 'Si' }}
                                @endif
                                @if ($Ex->X2 == '0')
                                    {{ 'No' }}
                                @endif
                            </option>
                            <option value="1">Si</option>
                            <option value="0">No</option>

                        </select>
                    </div>

                    
</div>

                                
                    

                    <div class="row mb-4">
                        
                        <div class="row mb-4">
                            <div class="col">
                                <label for="formGroupExampleInput">Temperatura</label>
                                <input type="numeric" class="form-control" placeholder="TEMPERATURA" name="TEMP"
                                    value="{{ $Ex->TEMP }}" pattern="^\d+(\.\d+)?$" required>
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">PESO (KG) </label>
                                <input type="numeric " class="form-control" placeholder="PESO (KG)" name="PESO"
                                    value="{{ $Ex->PESO }}" pattern="^\d+(\.\d+)?$" required>
                            </div>
                            </div>

                                <div class="row mb-4">
                            <div class="col">
                                <label for="formGroupExampleInput">Nombre de exploración </label>
                                <input type="text" class="form-control" placeholder="Exploracion Cabeza"
                                    name="NEF" value="{{ $Ex->Nombre_ef }}" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="5" required>
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">Cabeza </label>
                                <input type="text" class="form-control" placeholder="Exploracion Cabeza"
                                    name="CAEF" value="{{ $Ex->Cabeza_ef }}" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="5" required>
                            </div>
                            </div>

                                <div class="row mb-4">
                            <div class="col">
                                <label for="formGroupExampleInput">Cuello</label>
                                <input type="text" class="form-control" placeholder="Exploracion cuello  "
                                    name="CUEF" value="{{ $Ex->Cuello_ef }}"  pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="5"required>
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">Abdomen </label>
                                <input type="text" class="form-control" placeholder="Exploracion abdomen "
                                    name="ABEF" value="{{ $Ex->Abdomen_ef }}" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="5" required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label for="formGroupExampleInput">Miembro pelvico </label>
                                <input type="text" class="form-control" placeholder="Exploracion miembro pelvico"
                                    name="MP" value="{{ $Ex->Miembro_pelvico_ef }}"pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="5" required>
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">Miembro toraxico</label>
                                <input type="text" class="form-control" placeholder="Exploracion miembro toraxico"
                                    name="MT" value="{{ $Ex->Miembro_toraxico_ef }}" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="5" required>
                            </div>

                        </div>

                    </div>
                    <!----- end Notas--->
                    <!--end notaspost-->
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success btn-rounded mb-2 me-4  btn-add-event Hola"
                            style="display: none;">Actualizar</button>
                </form>
                <form class="user" method="POST"
                    action="{{ route('Exploracion.destroy', ['id' => $Ex->pk_Exploracion]) }}">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola"
                        id="Hola" style="display: none;">Eliminar</button>
                </form>
                <form class="user" method="POST"
                    action="{{ route('Exploracion.Formulario', ['id' => $Paciente->SS]) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                        id="Hola" style="display: none;">Agregar Exploracion</button>
                </form>
    </div>
    @endforeach
    </div>
    @endif
    </div>