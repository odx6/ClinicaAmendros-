<div class="tab-pane fade" id="rounded-pills-icon-superiores" role="tabpanel"
    aria-labelledby="rounded-pills-icon-settings-tab">
    @if ($Pruebas->isEmpty())
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
            <form class="user" method="POST" action="{{ route('index.MSuperiores', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar Evaluacion miembros superiores </button>
            </form>
        </div>
    @else
        @foreach ($Pruebas as $prueba)
            <form class="user" method="POST"
                action="{{ route('update.MSuperiores', ['id' => $prueba->pk_prueba]) }}">
                @csrf
                <div class="container">
                    <h2>Prueba de Arcos de moviidad de miembros superiores</h2>

                    <div class="row">
                        <div class="col-sm">

                            <img src="{{ asset('src/assets/img/Fisioterapia/img2.jpg') }}" alt="" width="100%"
                                height="100%">
                        </div>

                        <div class="col-sm">
                            <h2>Movimiento</h2>

                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        @if ($prueba->Movimientos->count() > 0)
                                            @foreach ($prueba->Movimientos as $movimiento)
                                                <div class="table-responsive">
                                                    <h2>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">Nombre del movimento a
                                                                evaluar</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1"
                                                                value="{{ $movimiento->NombreMovi }}"
                                                                name="movimiento[{{ $movimiento->pk_movimiento }}][Nombre]"
                                                                placeholder="Nombre del movimiento a evaluar">
                                                        </div>
                                                    </h2>
                                                    <input type="hidden" class="form-control"
                                                        id="exampleFormControlInput1"
                                                        value="{{ $movimiento->pk_movimiento }}"
                                                        name="movimiento[{{ $movimiento->pk_movimiento }}][IDM]"
                                                        placeholder="Nombre del movimiento a evaluar">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlInput1">Tipo
                                                                            evaluacion ejemplo "Externa"</label>
                                                                        <input type="text" class="form-control"
                                                                            id="exampleFormControlInput1"
                                                                            value="{{ $movimiento->titulo1 }}"
                                                                            name="movimiento[{{ $movimiento->pk_movimiento }}][Tipo]"
                                                                            placeholder="Externa">
                                                                    </div>
                                                                </th>
                                                                <th scope="col">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlInput1">Tipo
                                                                            evaluacion ejemplo "Externa"</label>
                                                                        <input type="text" class="form-control"
                                                                            id="exampleFormControlInput1"
                                                                            value="{{ $movimiento->titulo2 }}"
                                                                            name="movimiento[{{ $movimiento->pk_movimiento }}][Tipo1]"
                                                                            placeholder="Inerna">
                                                                    </div>
                                                                </th>

                                                            </tr>
                                                            <tr aria-hidden="true"
                                                                class="mt-3 d-block table-row-hidden"></tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <select class="form-control"
                                                                        name="movimiento[{{ $movimiento->pk_movimiento }}][valor1]">

                                                                        <option value="{{ $movimiento->ValorT1 }}">
                                                                            {{ $movimiento->ValorT1 }}°</option>
                                                                        @for ($i = 0; $i <= 360; $i++)
                                                                            <option value="{{ $i }}">
                                                                                {{ $i }}°</option>
                                                                        @endfor
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select class="form-control"
                                                                        name="movimiento[{{ $movimiento->pk_movimiento }}][valor2]">
                                                                        <option value="{{ $movimiento->ValorT2 }}">
                                                                            {{ $movimiento->ValorT1 }}°</option>
                                                                        @for ($i = 0; $i <= 360; $i++)
                                                                            <option value="{{ $i }}">
                                                                                {{ $i }}°</option>
                                                                        @endfor
                                                                    </select>
                                                                </td>
                                                            </tr>



                                                        </tbody>
                                                    </table>
                                                </div>
                                            @endforeach
                                        @endif

                                    </div>


                                </div>


                            </div>

                        </div>

                     
                            <div class="col-sm">
                                <img src="{{ asset('src/assets/img/Fisioterapia/img3.jpg') }}" alt=""
                                    width="100%" height="100%">
                            </div>
                        
                    </div>

                    <div class="input-group">
                        <span class="input-group-text">Observaciones</span>
                        <textarea class="form-control" aria-label="With textarea" name="observaciones">{{ $prueba->Observaciones_prue }}</textarea>
                    </div>
                    <br>
                    <br>
                </div>
                @if ($prueba->Dedos->count() > 0)
                <div class="col-sm">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Dedos</th>
                                    <th scope="col">MCF</th>
                                    <th class="text-center" scope="col">IFP</th>
                                    <th class="text-center" scope="col">IFD</th>
                                    <th class="text-center" scope="col">ABD</th>
                                </tr>
                                <tr aria-hidden="true" class="mt-3 d-block table-row-hidden">
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($prueba->Dedos as $Dedo)
                                    <tr>

                                        <td>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Nombre
                                                    del dedo a evaluar</label>
                                                <input type="text" class="form-control"
                                                    id="exampleFormControlInput1"
                                                    value="{{ $Dedo->Nombre }}"
                                                    name="Dedos[{{ $Dedo->pk_dedos }}][Nombre]"
                                                    placeholder="Nombre dedo">
                                            </div>
                                        </td>

                                        <td class="text-center">
                                            <select class="form-control form-control-sm"
                                                name="Dedos[{{ $Dedo->pk_dedos }}][MCF]">
                                                <option value="{{ $Dedo->MCF }}">
                                                    {{ $Dedo->MCF }}°
                                                </option>
                                                @for ($i = 0; $i <= 90; $i++)
                                                    <option value="{{ $i }}">
                                                        {{ $i }}°
                                                    </option>
                                                @endfor
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control form-control-sm"
                                                name="Dedos[{{ $Dedo->pk_dedos }}][IFP]">
                                                <option value="{{ $Dedo->IFP }}">
                                                    {{ $Dedo->IFP }}° </option>
                                                @for ($i = 0; $i <= 90; $i++)
                                                    <option value="{{ $i }}">
                                                        {{ $i }}°
                                                    </option>
                                                @endfor
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control form-control-sm"
                                                name="Dedos[{{ $Dedo->pk_dedos }}][IFD]">
                                                <option value="{{ $Dedo->IFD }}">
                                                    {{ $Dedo->IFD }}° </option>
                                                @for ($i = 0; $i <= 90; $i++)
                                                    <option value="{{ $i }}">
                                                        {{ $i }}°
                                                    </option>
                                                @endfor
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control form-control-sm"
                                                name="Dedos[{{ $Dedo->pk_dedos }}][ABD]">
                                                <option value="{{ $Dedo->ABD }}">
                                                    {{ $Dedo->ABD }}° </option>
                                                @for ($i = 0; $i <= 90; $i++)
                                                    <option value="{{ $i }}">
                                                        {{ $i }}°
                                                    </option>
                                                @endfor
                                            </select>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                
                                                <input type="hidden" class="form-control"
                                                    id="exampleFormControlInput1"
                                                    value="{{ $Dedo->pk_dedos }}"
                                                    name="Dedos[{{ $Dedo->pk_dedos }}][IDEDO]"
                                                    placeholder="Nombre dedo">
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
                <!--end-table-->
                <div class="modal-footer">

                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                        style="display: none;">Actualizar</button>
            </form>
            <form class="user" method="POST" action="{{ route('index.MSuperiores', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                    id="Hola" style="display: none;">Agregar Evaluacion Miembros Superiores
                </button>
            </form>
            <form class="user" method="POST"
                action="{{ route('destroy.MSuperiores', ['id' => $prueba->pk_prueba]) }}">
                @csrf
                <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Eliminar</button>
            </form>

</div>

@endforeach
@endif
</div>