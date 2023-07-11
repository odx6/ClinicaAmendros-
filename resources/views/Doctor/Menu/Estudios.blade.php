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
                <form class="user" method="POST"
                    action="{{ route('Estudios.Formulario', ['id' => $Paciente->SS]) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                        id="Hola" style="display: none;">Agregar estudio del
                        paciente</button>
                </form>
            </div>
        @else
            <h2>Estudios del paciente </h2>
            <!--Antecedentes patologicos-->
            @foreach ($Estudios as $estudio)
                <form class="user" method="POST" action="{{ route('Estudios.store') }}">
                    @csrf


                    <div class="row mb-4">

                        <div class="col">
                            <label for="formGroupExampleInput">IDENTIFICADOR DE ESTUDIO
                            </label>
                            <input type="text" class="form-control" placeholder="Identificador del analisis"
                                name="IDAG" value="{{ $estudio->pk_estudio }}" required>
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput">IDENTIFICADOR DEL PACIENTE
                            </label>
                            <input type="text" class="form-control" placeholder="Identificador Del Paciente"
                                name="IDPA" value="{{ $estudio->fk_e }}" required>


                        </div>

                        <div class="row mb-4">
                            <div class="col">
                                <label for="formGroupExampleInput">HEMOGLOBINA
                                </label>
                                <input type="text" class="form-control" placeholder="HEMOGLOBINA" name="HEMOGLOBINA"
                                    value="{{ $estudio->HEMOGLOBINA }}" required>
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">HEMATOCRITO</label>
                                <input type="text" class="form-control" placeholder="HEMATOCRITO " name="HEMATOCRITO"
                                    value="{{ $estudio->HEMATOCRITO }}" required>
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">PLAQUETAS
                                </label>
                                <input type="text" class="form-control" placeholder="PLAQUETAS" name="PLAQUETAS"
                                    value="{{ $estudio->PLAQUETAS }}" required>
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">GLUCOSA
                                </label>
                                <input type="text" class="form-control" placeholder="GLUCOSA" name="GLUCOSA"
                                    value="{{ $estudio->GLUCOSA }}" required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label for="formGroupExampleInput">UREA
                                </label>
                                <input type="text" class="form-control" placeholder="UREA" name="UREA"
                                    value="{{ $estudio->UREA }}" required>
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">CREATININA</label>
                                <input type="text" class="form-control" placeholder="CREATININA " name="CREATININA"
                                    value="{{ $estudio->CREATININA }}" required>
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">RX
                                </label>
                                <input type="text" class="form-control" placeholder="RX" name="RX"
                                    value="{{ $estudio->RX }}" required>
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">USG
                                </label>
                                <input type="text" class="form-control" placeholder="USG" name="USG"
                                    value="{{ $estudio->USG }}" required>
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
</div>
