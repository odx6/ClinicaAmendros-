<div class="tab-pane fade" id="rounded-pills-icon-postura" role="tabpanel"
    aria-labelledby="rounded-pills-icon-settings-tab">
    @if ($PosturaFrontal->isEmpty())
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
            <form class="user" method="POST" action="{{ route('index.Postura', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar Evaluacion Evaluación postura</button>
            </form>
        </div>
    @else
        @foreach ($PosturaFrontal as $postura)
            <form class="user needs-validation" method="POST"
                action="{{ route('update.Postura', ['id' => $postura->pk_vista]) }}" novalidate>
                @csrf

                <h2>Evaluacion Postura</h2>

                <h2>{{ $postura->Nombre }}</h2>


                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Aliniacion Corporal</th>
                                <th scope="col">GRADOS L M S</th>

                                <th class="text-center" scope="col">Observaciones</th>
                            </tr>
                            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden">
                            </tr>
                        </thead>
                        <tbody>
                            @if ($postura->Posturas->count() > 0)
                                @foreach ($postura->Posturas as $pos)
                                    <tr>
                                        <td>

                                            <div class="form-group">

                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    value="{{ $pos->Inclinacion_Corporal }}"
                                                    name="Posturas[{{ $pos->pk_postura }}][Nombre]"
                                                    placeholder="Observaciones" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="3" required>
                                            </div>
                                        </td>
                                        <td> <select class="form-control" name="Posturas[{{ $pos->pk_postura }}][L]" required>

                                                <option value="L"
                                                    @if ($pos->valor == 'L') selected @endif>
                                                    Leve</option>
                                                <option value="M"
                                                    @if ($pos->valor == 'M') selected @endif>
                                                    Moderado</option>
                                                <option value="S"
                                                    @if ($pos->valor == 'S') selected @endif>
                                                    S</option>
                                            </select>

                                        <td>
                                            <div class="form-group">

                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    value="{{ $pos->Observaciones }}"
                                                    name="Posturas[{{ $pos->pk_postura }}][Observaciones]"
                                                    placeholder="Observaciones" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="3" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">

                                                <input type="hidden" class="form-control" id="exampleFormControlInput1"
                                                    value="{{ $pos->pk_postura }}"
                                                    name="Posturas[{{ $pos->pk_postura }}][IDP]"
                                                    placeholder="Observaciones">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>

                <div class="modal-footer">

                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                        style="display: none;">Actualizar</button>
            </form>
            <form class="user" method="POST" action="{{ route('index.Postura', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar Evaluacion Postura
                </button>
            </form>
            <form class="user" method="POST" action="{{ route('destroy.Postura', ['id' => $postura->pk_vista]) }}">
                @csrf
                <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Eliminar</button>
            </form>

</div>
@endforeach
@endif
</div>
