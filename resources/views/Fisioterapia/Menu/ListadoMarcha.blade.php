<div class="tab-pane fade" id="rounded-pills-icon-marcha" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
    @if ($MarchasDeam->isEmpty())
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
            <form class="user" method="POST" action="{{ route('index.Marcha', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar Marcha/Deambulacion </button>
            </form>
        </div>
    @else
        @foreach ($MarchasDeam as $mar)
        <form class="user" method="POST" action="{{ route('update.Marcha',['id'=>$mar->pk_marcha]) }}">
            @csrf
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">si no </th>
                            <th scope="col">si no</th>

                        </tr>
                        <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div
                                    class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label"
                                        for="form-custom-switch-success">Libre</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Libre" value="si"  @if($mar->libre=="si") checked @endif>

                                </div>
                            </td>
                            <td>
                                <div
                                    class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label"
                                        for="form-custom-switch-success">Espasticas</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Espasticas" value="si" @if($mar->Espastica=="si") checked @endif>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div
                                    class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label"
                                        for="form-custom-switch-success">Claudicante</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Claudicante" value="si" @if($mar->Claudicante=="si") checked @endif>

                                </div>
                            </td>
                            <td>
                                <div
                                    class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label"
                                        for="form-custom-switch-success">Ataxica</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Ataxica" value="si" @if($mar->Alaxicas=="si") checked @endif>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div
                                    class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Con
                                        ayuda</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Con-ayuda" value="si" @if($mar->Con_ayuda=="si") checked @endif>

                                </div>
                            </td>
                            <td>
                                <div
                                    class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label"
                                        for="form-custom-switch-success">Otros</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Otros" value="si" @if($mar->Otros=="si") checked @endif>

                                </div>
                            </td>


                        </tr>
                        <tr>
                            <td>
                                <h2>Observaciones</h2>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Observaciones">{{$mar->Observaciones_marcha}}</textarea>
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
    <form class="user" method="POST" action="{{ route('index.Marcha',['id' => $Paciente->SS]) }}">
        @csrf
        <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
            style="display: none;">Agregar Cicatriz quirurgica
        </button>
    </form>
    <form class="user" method="POST" action="{{ route('destroy.Marcha', ['id' =>$mar->pk_marcha]) }}">
        @csrf
        <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
            style="display: none;">Eliminar</button>
    </form>
      @endforeach
      @endif
</div>
@if($MarchasDeam->isEmpty())@else </div> @endif




