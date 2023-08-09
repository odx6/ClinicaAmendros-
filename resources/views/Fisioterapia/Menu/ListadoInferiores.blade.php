<div class="tab-pane fade" id="rounded-pills-icon-inferiores" role="tabpanel"
    aria-labelledby="rounded-pills-icon-settings-tab">
    @if ($PruebasInferiores->isEmpty())
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
            <form class="user" method="POST" action="{{ route('index.MInferiores', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar Evaluación miembros inferiores </button>
            </form>
        </div>
    @else
     <h1 style="text-align: center;">PRUEBA DE MOVILIDAD DE MIEMBROS</h1>
               
                <h4>Los datos marcados con <span class="red-asterisk">*</span> son obligatorios </h4>
        @foreach ($PruebasInferiores as $prueba)
            <form class="user needs-validation" method="POST"
                action="{{ route('update.MSuperiores', ['id' => $prueba->pk_prueba]) }}" novalidate>
                @csrf
                 <div class="container">
                    <h2>Prueba de Arcos de movilidad de miembros inferiores</h2>

                    <div class="row">

                        <div class="col-sm">
                             <h2>Miembro</h2>
                          
                            <input type="text" class="form-control form-control-lg"
                                placeholder="Nombre del miembro a evaluar" name="NombreMiembro"
                                placeholder="Nombre del miembro a evaluar" value="{{ $prueba->NombrePrueba }}" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="3">
                                 <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un nombre valido
                                     </div>
                            <div class="container">
                                <div class="table-responsive">
                                    <table class="table" id="tablamiembroS">
                                        <thead>
                                            <tr>
                                                <th scope="col">Movimiento <span class="red-asterisk">*</span></th>
                                                <th scope="col">Grados <span class="red-asterisk">*</span></th>


                                            </tr>
                                            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                                        </thead>
                                        <tbody>
                                            <div id="elementoOriginal">
                                                @if ($prueba->Movimientos->count() > 0)
                                                    @foreach ($prueba->Movimientos as $movi)
                                                        <tr>

                                                            <td>
                                                                <input type="text"
                                                                    class="form-control form-control-lg"
                                                                    placeholder="Nombre del movimiento"
                                                                    name="Movimientos[{{$movi->pk_movimiento}}][Nombre]"
                                                                    value="{{ $movi->NombreMovi }}" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="3">
                                                                      <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un nombre valido
                                     </div>
                                                            </td>
                                                            <td>
                                                                <select class="form-control"
                                                                    name="Movimientos[{{$movi->pk_movimiento}}][Valor]" required>
                                                                    <option selected disabled value="">Selecciona
                                                                        el grado
                                                                    </option>

                                                                    @for ($i = 0; $i <= 360; $i++)
                                                                        <option value="{{ $i }}"
                                                                            @if ($movi->valor == $i) selected @endif>
                                                                            {{ $i }}°
                                                                        </option>
                                                                    @endfor
                                                                </select>
                                                                <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     El campo es obligatorio
                                     </div>

                                                            </td>

                                                            <td>
                                                                <input type="hidden"
                                                                    class="form-control form-control-lg"
                                                                    placeholder="Nombre del movimiento"
                                                                    name="Movimientos[{{$movi->pk_movimiento}}][idMovi]"
                                                                    value="{{ $movi->pk_movimiento }}">

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif


                                        </tbody>
                                    </table>
                                </div>


                            </div>

                        </div>



                    </div>

                    <div class="input-group">
                        <span class="input-group-text">Observaciones <span class="red-asterisk">*</span></span>
                        <textarea class="form-control" aria-label="With textarea" name="observaciones" required>{{ $prueba->Observaciones_prue }}</textarea>
                         <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una observacion valida
                                     </div>
                    </div>
                    <br>
                    <br>
                </div>
                <!--end-table-->
                <div class="modal-footer">

                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                        style="display: none;">Actualizar</button>
            </form>
            <form class="user" method="POST" action="{{ route('index.MInferiores', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                    id="Hola" style="display: none;">Agregar Evaluación Miembros Inferiores
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
