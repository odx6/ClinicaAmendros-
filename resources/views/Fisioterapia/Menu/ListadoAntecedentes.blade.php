<div class="tab-pane fade" id="rounded-pills-icon-settings" role="tabpanel"
    aria-labelledby="rounded-pills-icon-settings-tab">
    @if ($Antecedentes->isEmpty())
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
            <form class="user" method="POST" action="{{ route('index.AntecedenteAH', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Antecedentes Patológicos y
                    Heredofamiliares</button>
            </form>
        </div>
    @else
        <h2>Antecedentes Patológicos y Heredofamiliares</h2>
        @php
            $ids = [];
            
        @endphp

        <div class="row">
            <div class="col">
                <form class="user needs-validation" method="POST" action="{{ route('update.AntecedenteAH') }}" novalidate >
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            @php
                                $count = 0;
                                $total = count($Antecedentes);
                            @endphp
                            @foreach ($Antecedentes as $An => $item)
                                @if ($count % 2 == 0)
                                    <div class="switch form-switch-custom switch-inline form-switch-success">
                                        <label class="switch-label"
                                            for="form-custom-switch-success">{{ $item->Nombre_Antecedente }}</label>
                                        @if ($item->valor == 'si')
                                            <input class="switch-input" type="checkbox" role="switch"
                                                id="form-custom-switch-success" name="{{ $item->Nombre_Antecedente }}"
                                                value="si" checked>
                                        @else
                                            <input class="switch-input" type="checkbox" role="switch"
                                                id="form-custom-switch-success" name="{{ $item->Nombre_Antecedente }}"
                                                value="si">
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{ $item->Especificacion }}"
                                            placeholder="Especificacion para diabetes"
                                            name="E{{ $item->Nombre_Antecedente }}" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" ><br>
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <input type="hidden" class="form-control" id="exampleFormControlInput1"
                                            value="{{ $item->pk_Antecedentes_ph }}"
                                            placeholder="Especificacion para diabetes"
                                            name="ID{{ $item->Nombre_Antecedente }}"><br>
                                        @php
                                            $ids[] = $item->pk_Antecedentes_ph;
                                            
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
                            @foreach ($Antecedentes as $An => $item)
                                @if ($count % 2 != 0)
                                    <div class="switch form-switch-custom switch-inline form-switch-success">
                                        <label class="switch-label"
                                            for="form-custom-switch-success">{{ $item->Nombre_Antecedente }}</label>
                                        @if ($item->valor == 'si')
                                            <input class="switch-input" type="checkbox" role="switch"
                                                id="form-custom-switch-success" name="{{ $item->Nombre_Antecedente }}"
                                                value="si" checked>
                                        @else
                                            <input class="switch-input" type="checkbox" role="switch"
                                                id="form-custom-switch-success" name="{{ $item->Nombre_Antecedente }}"
                                                value="si">
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            value="{{ $item->Especificacion }}"
                                            placeholder="Especificacion para diabetes"
                                            name="E{{ $item->Nombre_Antecedente }}" pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" required>
                                        <br>
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <input type="hidden" class="form-control" id="exampleFormControlInput1"
                                            value="{{ $item->pk_Antecedentes_ph }}"
                                            placeholder="Especificacion para diabetes"
                                            name="ID{{ $item->Nombre_Antecedente }}"><br>
                                        @php
                                            $ids[] = $item->pk_Antecedentes_ph;
                                            
                                        @endphp
                                    </div>
                                @endif
                                @php
                                    $count++;
                                @endphp
                            @endforeach
                        </div>

                    </div>

                     <div class="col">
                @php
                    $signosx = [];
                    
                @endphp
                @if ($signos->isEmpty())
                    <p>No hay fatos</p>
                @else
                    @foreach ($signos as $signo)
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <!--Espacio-->
                                    <div class="container">
                                        <h3>Signos vitales</h3>
                                        <div class="row">
                                            <div class="col">
                                                <h3>T/A</h3>
                                            </div>
                                            <div class="col">
                                                @php
                                                    $signosx[] = $signo->Pk_Signos_vitales;
                                                    
                                                @endphp
                                                <div class="form-group">

                                                    <input type="hidden" class="form-control"
                                                        id="exampleFormControlInput1"
                                                        value="{{ $signo->Pk_Signos_vitales }}" placeholder=""
                                                        name="IDSignos">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">

                                                    <input type="numeric" class="form-control"
                                                        id="exampleFormControlInput1" value="{{ $signo->TA }}"
                                                        placeholder="TA" name="TA" required pattern="^[0-9]+(?:\/[0-9]+)?$" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h3>TEMP</h3>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">

                                                    <input type="text" class="form-control"
                                                        id="exampleFormControlInput1" value="{{ $signo->Temp }}"
                                                        placeholder="Temp" name="Temp" pattern="[0-9]+(\.[0-9]+)?" required>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h3>FC</h3>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">

                                                    <input type="text" class="form-control"
                                                        id="exampleFormControlInput1" value="{{ $signo->FC }}"
                                                        placeholder="FC" name="FC" pattern="[0-9]+(\.[0-9]+)?" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">

                                                <h3>FR</h3>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">

                                                    <input type="text" class="form-control"
                                                        id="exampleFormControlInput1" value="{{ $signo->FR }}"
                                                        placeholder="FR" name="FR" pattern="[0-9]+(\.[0-9]+)?" required>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>




                            </div>
                        </div>
            </div>
                  @endforeach
                   @endif



            </div>
           
    <div class="modal-footer">

        <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
            style="display: none;">Actualizar</button>
        </form>
        <form class="user" method="POST" action="{{ route('index.AntecedenteAH', ['id' => $Paciente->SS]) }}">
            @csrf
            <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                style="display: none;">Agregar
                Antecedentes </button>
        </form>
        <form class="user" method="POST"
            action="{{ route('destroy.AntecedenteAH', ['id' => $ids, 'signos' => $signosx]) }}">
            @csrf
            <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                style="display: none;">Eliminar</button>
        </form>
    </div>
    @endif
 </div>
 @if($Antecedentes->isEmpty()) @else </div> @endif