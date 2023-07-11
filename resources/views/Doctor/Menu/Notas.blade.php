<div class="tab-pane fade" id="rounded-pills-icon-Notas" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
    @if ($Notas->isEmpty())
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
            <form class="user" method="POST" action="{{ route('Notas.Formulario', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar nota-post quirurgica</button>
            </form>
        </div>
    @else
        <h2>NOTAS </h2>
        <!--Antecedentes patologicos-->
        @foreach ($Notas as $np)
            <form class="user" method="POST" action="{{ route('Nota.store') }}">
                @csrf


                <div class="col">
                    <label for="formGroupExampleInput">IDENTIFICADOR DE NOTAS
                    </label>
                    <input type="text" class="form-control" placeholder="Identificador del analisis" name="IDAG"
                        value="{{ $np->pk_nota }}">
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">IDENTIFICADOR DEL PACIENTE
                    </label>
                    <input type="text" class="form-control" placeholder="Identificador Del Paciente" name="IDPA"
                        value="{{ $np->fk_n }}">
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <label for="formGroupExampleInput">NOTA </label>
                        <input type="text" class="form-control" placeholder="cuerpo de la nota" name="NOT"
                            value="{{ $np->Nota }}">
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput">TIPO DE NOTA</label>
                        <input type="text" class="form-control" placeholder="TIPO DE NOTA" name="TIPO"
                            value="{{ $np->Tipo }}">
                    </div>

                </div>
                <!----- end Notas--->
                <!--end notaspost-->
                <div class="modal-footer">

                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                        style="display: none;">Actualizar</button>
            </form>
            <form class="user" method="POST" action="{{ route('Notas.Formulario', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar nota-post quirurgica</button>
            </form>
            <form class="user" method="POST" action="{{ route('Notas.destroy', ['id' => $np->pk_n]) }}">
                @csrf
                <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Eliminar</button>
            </form>
</div>
@endforeach
@endif
</div>


