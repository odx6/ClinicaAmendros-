 <div class="tab-pane fade" id="rounded-pills-icon-contact" role="tabpanel"
                                        aria-labelledby="rounded-pills-icon-contact-tab">
                                        @if ($Gineco->isEmpty())
                                            <div class="widget-content widget-content-area">
                                                <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4"
                                                    role="alert">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-alert-circle">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <line x1="12" y1="8" x2="12"
                                                            y2="12"></line>
                                                        <line x1="12" y1="16" x2="12"
                                                            y2="16"></line>
                                                    </svg>
                                                    <strong>Lo sentimos !</strong> No Hay registros disponibles para el
                                                    paciente.
                                                </div>
                                                <form class="user" method="POST"
                                                    action="{{ route('Gineco.Formulario', ['id' => $Paciente->SS]) }}">
                                                    @csrf
                                                    <button type="submit"
                                                        class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                                        id="Hola">Agregar Antecedente Ginecobstetrico</button>
                                                </form>

                                            </div>
                                        @else
                                            <h2> ANTECEDENTES Ginecobstrecticos </h2>
                                            @foreach ($Gineco as $Gine)
                                                <!--- Historial-->
                                                <form class="user" method="POST"
                                                    action="{{ route('Gineco.update') }}">
                                                    @csrf
                                                    <!--Antecedentes ginecologicos-->
                                                    <div class="row mb-4">

                                                        <div class="col">
                                                            <label for="formGroupExampleInput">IDENTIFICADOR DE ANALISIS
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Identificador del analisis" name="IDAG"
                                                                value="{{ $Gine->id_a_g }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">Identificador Del Paciente
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Identificador Del Paciente" name="IDPA"
                                                                value="{{ $Gine->fk_ag }}">

                                                        </div>

                                                    </div>

                                                    <div class="row mb-4">

                                                        <div class="col">
                                                            <label for="formGroupExampleInput">MENARCA </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Inicio de la menstruacion en años "
                                                                name="Menarca" value="{{ $Gine->Menarca }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">INCIO DE LA ACTIVIDAD SEXUAL
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="inicio de la vida sexual" name="IVSA"
                                                                value="{{ $Gine->Ivsa }}">

                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">NUMERO DE GESTAS </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Numero de gestas " name="gestas"
                                                                value="{{ $Gine->Gesta }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">NUMERO DE CESAREAS </label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Numero de cesareas" name="Cesareas"
                                                                value="{{ $Gine->Paras }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">NUMERO DE ABORTOS</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Numero de Abortos" name="Abortos"
                                                                value="{{ $Gine->Aborto }}">
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">NUMERO DE PARAS</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Numero de Partos" name="Partos"
                                                                value="{{ $Gine->Paras }}">
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">

                                                        <button type="submit"
                                                            class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                                                            style="display: none;">Actualizar</button>
                                                </form>
                                                <form class="user" method="POST"
                                                    action="{{ route('Gineco.Formulario', ['id' => $Paciente->SS]) }}">
                                                    @csrf
                                                    <button type="submit"
                                                        class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                                                        id="Hola">Agregar Antecedente Ginecobstetrico</button>
                                                </form>
                                                <form class="user" method="POST"
                                                    action="{{ route('Gineco.destroy', ['id' => $Gine->fk_ag]) }}">
                                                    @csrf
                                                    <button type="submit"
                                                        class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola"
                                                        id="Hola" style="display: none;">Eliminar</button>
                                                </form>
                                    </div>
                                    @endforeach
                                    <!-----end gine--->

                                    @endif

                                </div>