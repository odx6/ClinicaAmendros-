    <div class="tab-pane fade" id="rounded-pills-icon-settings" role="tabpanel"
                                    aria-labelledby="rounded-pills-icon-settings-tab">
                                    @if ($Patologicos->isEmpty())
                                        <div class="widget-content widget-content-area">
                                            <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4"
                                                role="alert">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-alert-circle">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="12" y1="8" x2="12" y2="12">
                                                    </line>
                                                    <line x1="12" y1="16" x2="12" y2="16">
                                                    </line>
                                                </svg>
                                                <strong>Lo sentimos !</strong> No Hay registros disponibles para el
                                                paciente.

                                            </div>
                                            <form class="user" method="POST"
                                                action="{{ route('Pato.Formulario', ['id' => $Paciente->SS]) }}">
                                                @csrf
                                                <button type="submit"
                                                    class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                                    id="Hola" style="display: none;">Agregar antecedente
                                                    patologico</button>
                                            </form>
                                        </div>
                                    @else
                                        <h2> ANTECEDENTES NO PATOLOGICOS </h2>
                                        <!--Antecedentes patologicos-->
                                        @foreach ($Patologicos as $patologico)
                                            <form class="user" method="POST"
                                                action="{{ route('APatologicos.store') }}">
                                                @csrf


                                                <div class="row mb-4">

                                                    <div class="col">
                                                        <label for="formGroupExampleInput">IDENTIFICADOR DE ANALISIS
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Identificador del analisis" name="IDAG"
                                                            value="{{ $patologico->id_a_p }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Identificador Del Paciente
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Identificador Del Paciente" name="IDPA"
                                                            value="{{ $patologico->fk_ap }}">

                                                    </div>

                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">DIABETES MELITUS </label>
                                                        <select class="form-control" name="DMN">

                                                            <option value="{{ $patologico->Dm }}">
                                                                @if ($patologico->Dm == '1')
                                                                    {{ 'Si' }}
                                                                @endif
                                                                @if ($patologico->Dm == '0')
                                                                    {{ 'No' }}
                                                                @endif
                                                            </option>
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>

                                                        </select>
                                                    </div>

                                                    <div class="col">
                                                        <label for="formGroupExampleInput">TIEMPO DE EVOLUCION </label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Evolucion de la diabetes  " name="DMTE"
                                                            value="{{ $patologico->DmTE }}">
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">HIPERTENSIÓN ARTERIAL
                                                            SISTÉMICA </label>
                                                        <select class="form-control" name="HASN">
                                                            <option value="{{ $patologico->Has }}">
                                                                @if ($patologico->Has == '1')
                                                                    {{ 'Si' }}
                                                                @endif
                                                                @if ($patologico->Has == '0')
                                                                    {{ 'No' }}
                                                                @endif
                                                            </option>
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>

                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">TIEMPO DE EVOLUCION </label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Evolucion" name="HASTE"
                                                            value="{{ $patologico->HasTe }}">
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">INSUFICIENCIA RENAL AGUDA O
                                                            CRÓNICA </label>
                                                        <select class="form-control" name="IR">
                                                            <option value="{{ $patologico->Ir }}">
                                                                @if ($patologico->Ir == '1')
                                                                    {{ 'Si' }}
                                                                @endif
                                                                @if ($patologico->Ir == '0')
                                                                    {{ 'No' }}
                                                                @endif
                                                            </option>
                                                            <option value="1">Si</option>
                                                            <option value="0">No</option>

                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">TIEMPO DE EVOLUCION </label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Evolucion" name="IrTe"
                                                            value="{{ $patologico->IrTe }}">
                                                    </div>
                                                </div>

                                                <div class="row mb-4">

                                                    <div class="col">
                                                        <label for="formGroupExampleInput">OTRA </label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Evolucion" name="OTRA"
                                                            value="{{ $patologico->Otra }}">
                                                    </div>
                                                </div>

                                                <div class="modal-footer">

                                                    <button type="submit"
                                                        class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                                                        style="display: none;">Actualizar</button>
                                            </form>
                                            <form class="user" method="POST"
                                                action="{{ route('Pato.Formulario', ['id' => $Paciente->SS]) }}">
                                                @csrf
                                                <button type="submit"
                                                    class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                                    id="Hola" style="display: none;">Agregar antecedente
                                                    patologico</button>
                                            </form>

                                            <form class="user" method="POST"
                                                action="{{ route('Pato.destroy', ['id' => $patologico->id_a_p]) }}">
                                                @csrf
                                                <button type="submit"
                                                    class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola"
                                                    id="Hola" style="display: none;">Eliminar</button>
                                            </form>
                                </div>
                                <!--end aPatologicos-->
                                @endforeach
                                @endif
                            </div>