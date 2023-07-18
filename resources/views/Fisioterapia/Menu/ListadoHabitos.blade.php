<div class="tab-pane fade" id="rounded-pills-icon-Estudios" role="tabpanel"
    aria-labelledby="rounded-pills-icon-settings-tab">
    @if ($habitos->isEmpty())
        <div class="widget-content widget-content-area">
            <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4"
                role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-alert-circle">
                    <circle cx="12" cy="12" r="10">
                    </circle>
                    <line x1="12" y1="8" x2="12" y2="12">
                    </line>
                    <line x1="12" y1="16" x2="12" y2="16">
                    </line>
                </svg>
                <strong>Lo sentimos !</strong> No Hay registros disponibles para el
                paciente.

            </div>
            <form class="user" method="POST" action="{{ route('index.AntecedenteHAB', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar Hábitos de la salud
                </button>
            </form>
        </div>
    @else
        <h2>Hábitos de la salud</h2>
        @php
            $ids = [];
            
        @endphp

        <div class="row">
            <div class="col">
                <form class="user needs-validation" method="POST" action="{{ route('update.AntecedenteHAB') }}" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            @php
                                $count = 0;
                                $total = count($habitos);
                            @endphp
                            @foreach ($habitos as $An => $item)
                                @if ($count % 2 == 0)
                                    <div class="switch form-switch-custom switch-inline form-switch-success">
                                        <label class="switch-label"
                                            for="form-custom-switch-success">{{ $item->Nombre }}</label>
                                        @if ($item->Valor == 'si')
                                            <input class="switch-input" type="checkbox" role="switch"
                                                id="form-custom-switch-success" name="{{ $item->Nombre }}"
                                                value="si" checked>
                                        @else
                                            <input class="switch-input" type="checkbox" role="switch"
                                                id="form-custom-switch-success" name="{{ $item->Nombre }}"
                                                value="si">
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{ $item->Especificacion }}"
                                            placeholder="Especificacion para diabetes" name="E{{ $item->Nombre }}" required  pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+"><br>
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <input type="hidden" class="form-control" id="exampleFormControlInput1"
                                            value="{{ $item->pk_Habitos }}" placeholder="Especificacion para diabetes"
                                            name="ID{{ $item->Nombre }}"><br>
                                        @php
                                            $ids[] = $item->pk_Habitos;
                                            
                                        @endphp
                                    </div>
                                @endif
                                @php
                                    $count++;
                                @endphp
                            @endforeach
                        </div>
                      
                        <div class="col-md-6">
                            @php
                                $count = 0;
                            @endphp
                            @foreach ($habitos as $An => $item)
                                @if ($count % 2 != 0)
                                    <div class="switch form-switch-custom switch-inline form-switch-success">
                                        <label class="switch-label"
                                            for="form-custom-switch-success">{{ $item->Nombre }}</label>
                                        @if ($item->Valor == 'si')
                                            <input class="switch-input" type="checkbox" role="switch"
                                                id="form-custom-switch-success" name="{{ $item->Nombre }}"
                                                value="si" checked>
                                        @else
                                            <input class="switch-input" type="checkbox" role="switch"
                                                id="form-custom-switch-success" name="{{ $item->Nombre }}"
                                                value="si">
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{ $item->Especificacion }}"
                                            placeholder="Especificacion para diabetes" name="E{{ $item->Nombre }}" required  pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                                        <br>
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <input type="hidden" class="form-control" id="exampleFormControlInput1"
                                            value="{{ $item->pk_Habitos }}" placeholder="Especificacion para diabetes"
                                            name="ID{{ $item->Nombre }}"><br>
                                        @php
                                            $ids[] = $item->pk_Habitos;
                                            
                                        @endphp
                                    </div>
                                    
                                @endif
                                @php
                                    $count++;
                                @endphp
                            @endforeach
                        </div>

                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                            style="display: none;">Actualizar</button>
                </form>
                <form class="user" method="POST" action="{{ route('destroy.AntecedenteHAB', ['id' => $ids]) }}">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola"
                        id="Hola" style="display: none;">Eliminar</button>
                </form>
                <form class="user" method="POST"
                    action="{{ route('index.AntecedenteHAB', ['id' => $Paciente->SS]) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                        id="Hola" style="display: none;">Agregar Hábitos de salud</button>
                </form>
            </div>
        </div>

    @endif
</div>
@if($habitos->isEmpty()) @else </div> @endif


