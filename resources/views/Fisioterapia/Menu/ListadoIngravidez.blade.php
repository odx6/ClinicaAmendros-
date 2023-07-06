<div class="tab-pane fade" id="rounded-pills-icon-Nota" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
    @if ($Ingravidez->isEmpty())
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
            <form class="user" method="POST" action="{{ route('index.Ingravidez', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar estado de Ingravidez</button>
            </form>
        </div>
    @else
        <h2>Estado de ingravidez</h2>
        <!--Antecedentes patologicos-->
        @foreach ($Ingravidez as $in)
            <form class="user" method="POST" action="{{ route('update.Ingravidez', ['id' => $in->pk_e_ingravidez]) }}">
                @csrf
                @if ($in->Embarazada == 'si')
                    <div class="switch form-switch-custom switch-inline form-switch-success">
                        <label class="switch-label" for="form-custom-switch-success">Esta embrazada</label>
                        <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-success"
                            name="embarazada" value="si" checked>

                    </div>
                @else
                    <div class="switch form-switch-custom switch-inline form-switch-success">
                        <label class="switch-label" for="form-custom-switch-success">Esta embrazada</label>
                        <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-success"
                            name="embarazada" value="si">

                    </div>
                @endif
                <h3>Especifique</h3>
                <div class="form-group">

                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        value="{{ $in->Especificacion }}" name="Especificacion" placeholder="Especifique">
                </div>

                <h3>Cuantos hijos tiene </h3>
                <div class="form-group mb-4">

                    <select class="form-select" id="exampleFormControlSelect1" name="hijos">
                        <option value="{{ $in->Numero_hijos }}">{{ $in->Numero_hijos }} Hijos</option>

                        @for ($i = 0; $i <= 30; $i++)
                            @if ($i < 2)
                                <option value="{{ $i }}">{{ $i }} hijo(a)
                                @else
                                <option value="{{ $i }}">{{ $i }} hijo(a)s
                            @endif
                            </option>
                        @endfor

                    </select>
                </div>



                <div class="modal-footer">

                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                        style="display: none;">Actualizar</button>
            </form>
            <form class="user" method="POST"
                action="{{ route('destroy.Ingravidez', ['id' => $in->pk_e_ingravidez]) }}">
                @csrf
                <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Eliminar</button>
            </form>
            <form class="user" method="POST" action="{{ route('index.Ingravidez', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar Estado de ingravidez</button>
            </form>
</div>

@endforeach
@endif
</div>

