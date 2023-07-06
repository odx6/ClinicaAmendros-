<div class="tab-pane fade" id="rounded-pills-icon-Ex" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
    @if ($Cicatriz->isEmpty())
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
            <form class="user" method="POST" action="{{ route('index.Cicatriz', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar cicatriz quirurgica </button>
            </form>
        </div>
    @else
        @foreach ($Cicatriz as $cica)
            <form class="user" method="POST" action="{{ route('update.Cicatriz', ['id' => $cica->pk_cicatriz]) }}">
                @csrf
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">no si </th>
                                <th scope="col">no si</th>
                                <th scope="col">no si</th>

                            </tr>
                            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="switch form-switch-custom switch-inline form-switch-success">
                                        <label class="switch-label" for="form-custom-switch-success">Sitio</label>
                                        <input class="switch-input" type="checkbox" role="switch"
                                            id="form-custom-switch-success" name="Sitio" value="si"
                                            @if ($cica->sitio == 'si') checked @endif>

                                    </div>
                                </td>
                                <td>
                                    <div class="switch form-switch-custom switch-inline form-switch-success">
                                        <label class="switch-label" for="form-custom-switch-success">Queloide</label>
                                        <input class="switch-input" type="checkbox" role="switch"
                                            id="form-custom-switch-success" name="Queloide" value="si"
                                            @if ($cica->queloide == 'si') checked @endif>

                                    </div>
                                </td>
                                <td>
                                    <div class="switch form-switch-custom switch-inline form-switch-success">
                                        <label class="switch-label" for="form-custom-switch-success">Retractil</label>
                                        <input class="switch-input" type="checkbox" role="switch"
                                            id="form-custom-switch-success" name="Retractil" value="si"
                                            @if ($cica->Retractil == 'si') checked @endif>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="switch form-switch-custom switch-inline form-switch-success">
                                        <label class="switch-label" for="form-custom-switch-success">Abierta</label>
                                        <input class="switch-input" type="checkbox" role="switch"
                                            id="form-custom-switch-success" name="Abierta" value="si"
                                            @if ($cica->abierta == 'si') checked @endif>

                                    </div>
                                </td>
                                <td>
                                    <div class="switch form-switch-custom switch-inline form-switch-success">
                                        <label class="switch-label" for="form-custom-switch-success">Con
                                            Aderencia</label>
                                        <input class="switch-input" type="checkbox" role="switch"
                                            id="form-custom-switch-success" name="Con-Aderencia" value="si"
                                            @if ($cica->Con_Adherencia == 'si') checked @endif>

                                    </div>
                                </td>
                                <td>
                                    <div class="switch form-switch-custom switch-inline form-switch-success">
                                        <label class="switch-label"
                                            for="form-custom-switch-success">Hipertrófica</label>
                                        <input class="switch-input" type="checkbox" role="switch"
                                            id="form-custom-switch-success" name="Hipertrófica" value="si"
                                            @if ($cica->Hipertrofica == 'si') checked @endif>

                                    </div>
                                </td>
                            </tr>




                        </tbody>
                    </table>
                </div>

                <!--end-table-->
                <div class="modal-footer">

                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                        style="display: none;">Actualizar</button>
            </form>
            <form class="user" method="POST" action="{{ route('index.Cicatriz', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                    id="Hola" style="display: none;">Agregar Cicatriz quirurgica
                </button>
            </form>
            <form class="user" method="POST"
                action="{{ route('destroy.Cicatriz', ['id' => $cica->pk_cicatriz]) }}">
                @csrf
                <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Eliminar</button>
            </form>

</div>
</div>
@endforeach
@endif
