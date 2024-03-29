<div class="tab-pane fade show active" id="rounded-pills-icon-home"
                                                role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">
                                                <!---Datos Paciente-->
                                                @if ($Paciente == null)
                                                    <div class="widget-content widget-content-area">
                                                        <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4"
                                                            role="alert">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-alert-circle">
                                                                <circle cx="12" cy="12" r="10">
                                                                </circle>
                                                                <line x1="12" y1="8" x2="12"
                                                                    y2="12"></line>
                                                                <line x1="12" y1="16" x2="12"
                                                                    y2="16"></line>
                                                            </svg>
                                                            <strong>Lo sentimos !</strong> No Hay registros disponibles para
                                                            el paciente.
                                                        </div>

                                                    </div>
                                                @else
                                                    <form class="user" method="POST"
                                                        action="{{ route('paciente.update') }}">

                                                        @csrf
                                                        <h1>Datos del paciente </h1>

                                                        <div class="row mb-4">
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Identificador Del
                                                                    paciente</label>
                                                                <input type="text" class="form-control bold"
                                                                    id="bold"
                                                                    placeholder="Identificador del Paciente "
                                                                    name="Identificador" value="{{ $Paciente->SS }}">
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Doctor</label>
                                                                <input type="text" class="form-control bold"
                                                                    id="bold" placeholder="Identificador del Doctor"
                                                                    name="Doctor"
                                                                    id="Doctor"value="{{ $Paciente->PacienteDoctor }}">
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Nombre del
                                                                    paciente</label>
                                                                <input type="text" class="form-control "
                                                                    placeholder="Nombre del paciente " name="Nombre"
                                                                    value="{{ $Paciente->Nombre }}">
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Apellido del
                                                                    paciente</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Apellido del paciente" name="Apellido"
                                                                    value="{{ $Paciente->Apellido }}">
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Edad del
                                                                    paciente</label>
                                                                <select class="form-control selects" name="Edad">
                                                                    <option value="{{ $Paciente->Edad }}">
                                                                        {{ $Paciente->Edad }}
                                                                    </option>
                                                                    @for ($i = 1; $i <= 100; $i++)
                                                                        <option value="{{ $i }}">
                                                                            {{ $i }}
                                                                        </option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Sexo del
                                                                    Paciente</label>
                                                                <select class="form-control selects" name="Sexo">
                                                                    <option value={{ $Paciente->Sexo }}>
                                                                        @if ($Paciente->Sexo == 'M')
                                                                            {{ 'Masculino' }}
                                                                        @endif
                                                                        @if ($Paciente->Sexo == 'F')
                                                                            {{ 'Femenino' }}
                                                                        @endif
                                                                    </option>

                                                                    <option value="M">Masculino</option>
                                                                    <option value="F">Femenino</option>

                                                                </select>
                                                            </div>

                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Estado civil del
                                                                    paciente</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Estado civil del paciente "
                                                                    name="Estado_civil"
                                                                    value="{{ $Paciente->Estado_civil }}">
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Origen del
                                                                    paciente</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Origen el paciente" name="Origen"
                                                                    value="{{ $Paciente->Origen }}">
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Ocupacion del
                                                                    paciente</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Ocupacion del paciente" name="Ocupacion"
                                                                    value="{{ $Paciente->Ocupacion }}">
                                                            </div>


                                                        </div>
                                                        <div class="row mb-4">

                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Direccón del
                                                                    paciente</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Direccion del paciente" name="Direccion"
                                                                    value="{{ $Paciente->Direccion }}">
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Telefono del
                                                                    paciente</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Telefono del paciente" name="Telefono"
                                                                    value="{{ $Paciente->Telefono }}">

                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Religión del
                                                                    paciente</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Religion del paciente" name="Religion"
                                                                    value="{{ $Paciente->Religion }}">
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Escolaridad </label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Escolaridad del paciente"
                                                                    name="Escolaridad"
                                                                    value="{{ $Paciente->Escolaridad }}">
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Fecha de Ingreso</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="FechaIngreso" name="FechaIngreso"
                                                                    value="{{ $Paciente->FechaIngreso }}">
                                                            </div>
                                                            <div class="col">
                                                                <label for="formGroupExampleInput">Fecha de Salida</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="FechaIngreso" name="FechaSalida"
                                                                    value="{{ $Paciente->FechaSalida }}">
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">

                                                            <button type="submit"
                                                                class="btn btn-success  btn-rounded mb-2 me-4  btn-add-event Hola"
                                                                id="Hola2" style="display: none;">Actualizar</button>
                                                    </form>
                                                    <form class="user" method="POST"
                                                        action="{{ route('paciente.destroy', ['id' => $Paciente->SS]) }}">
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola"
                                                            id="Hola" style="display: none;">Eliminar</button>
                                                    </form>
                                                    <form class="user" method="GET"
                                                        action="{{ route('paciente.index') }}">
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                                            id="Hola" style="display: none;">Agregar
                                                            Paciente</button>
                                                    </form>
                                            </div>
                                            <!--End-Datos-Paciente-->
                                            @endif

                                        </div>
                                        <!--end-Pacinete--->