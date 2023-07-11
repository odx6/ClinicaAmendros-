  <div class="tab-pane fade" id="rounded-pills-icon-Nota" role="tabpanel"
                    aria-labelledby="rounded-pills-icon-settings-tab">
                    @if ($Notas_p->isEmpty())
                        <div class="widget-content widget-content-area">
                            <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4"
                                role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                    <line x1="12" y1="16" x2="12" y2="16"></line>
                                </svg>
                                <strong>Lo sentimos !</strong> No Hay registros disponibles para el paciente.

                            </div>
                            <form class="user" method="POST"
                                action="{{ route('NotasPost.Formulario', ['id' => $Paciente->SS]) }}">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                    id="Hola" style="display: none;">Agregar nota-post quirurgica</button>
                            </form>
                        </div>
                    @else
                        <h2>NOTAS POST QUIRURGICA </h2>
                        <!--Antecedentes patologicos-->
                        @foreach ($Notas_p as $np)
                            <form class="user" method="POST" action="{{ route('NotasPost.store') }}">
                                @csrf


                                <div class="row mb-4">

                                    <div class="col">
                                        <label for="formGroupExampleInput">IDENTIFICADOR DE NOTAS
                                        </label>
                                        <input type="text" class="form-control"
                                            placeholder="Identificador del analisis" name="IDAG"
                                            value="{{ $np->idNotaP }}">
                                    </div>
                                    <div class="col">
                                        <label for="formGroupExampleInput">IDENTIFICADOR DEL PACIENTE
                                        </label>
                                        <input type="text" class="form-control"
                                            placeholder="Identificador Del Paciente" name="IDPA"
                                            value="{{ $np->fk_npq }}">
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col">
                                            <label for="formGroupExampleInput">CIRUJIA PROGRAMADA </label>
                                            <input type="text" class="form-control" placeholder="ciruja programada"
                                                name="PC" value="{{ $np->ProgramacionC }}">
                                        </div>
                                        <div class="col">
                                            <label for="formGroupExampleInput">CIRUJIA REALIZADA</label>
                                            <input type="text" class="form-control" placeholder="CIRUJIA REALIZADA"
                                                name="EJ"value="{{ $np->Ejecucion }}">
                                        </div>
                                        <div class="col">
                                            <label for="formGroupExampleInput">HALLAZGOS </label>

                                            <input type="text" class="form-control" placeholder="Hallazgos"
                                                name="HA"value="{{ $np->Hallazgos }}">
                                        </div>
                                        <div class="col">
                                            <label for="formGroupExampleInput">COMPLICACIONES </label>
                                            <input type="text" class="form-control" placeholder="COMPLICACIONES"
                                                name="CO"value="{{ $np->Complicaciones }}">
                                        </div>
                                        <div class="col">
                                            <label for="formGroupExampleInput">NOMBRE DEL CIRUJANO </label>
                                            <input type="text" class="form-control" placeholder="Nombre del cirujano "
                                                name="NC"value="{{ $np->Nombre_Cirujano }}">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <label for="formGroupExampleInput">NOMBRE DEL AYUDANTE </label>
                                            <input type="text" class="form-control" placeholder="Nombre del ayudante"
                                                name="NAY"value="{{ $np->Nombre_Ayudante }}">
                                        </div>
                                        <div class="col">
                                            <label for="formGroupExampleInput">NOMBRE DEL
                                                INSTRUMENTISTA</label>
                                            <input type="text" class="form-control"
                                                placeholder="nombre instrumentista"
                                                name="NI"value="{{ $np->Nombre_Instrumentista }}">
                                        </div>
                                        <div class="col">
                                            <label for="formGroupExampleInput">NOMBRE DEL
                                                ANIESTESIOLOGO</label>
                                            <input type="text" class="form-control"
                                                placeholder="Nombre del aniestesiologo"
                                                name="NAN"value="{{ $np->Nombre_Aniestesiologo }}">
                                        </div>
                                        <div class="col">
                                            <label for="formGroupExampleInput">CIRCULANTE</label>
                                            <input type="text" class="form-control" placeholder="circulante"
                                                name="CIR"value="{{ $np->Circulante }}">
                                        </div>
                                        <!--end notaspost-->

                                        <div class="modal-footer">

                                            <button type="submit"
                                                class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                                                style="display: none;">Actualizar</button>
                            </form>
                            <form class="user" method="POST"
                                action="{{ route('NotasPost.destroy', ['id' => $np->idNotaP]) }}">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola"
                                    id="Hola" style="display: none;">Eliminar</button>
                            </form>
                            <form class="user" method="POST"
                                action="{{ route('NotasPost.Formulario', ['id' => $Paciente->SS]) }}">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                    id="Hola" style="display: none;">Agregar nota-post quirurgica</button>
                            </form>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>