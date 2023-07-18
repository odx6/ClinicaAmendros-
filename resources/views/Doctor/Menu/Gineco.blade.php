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
                                            <h2> ANTECEDENTES GINECOBSTÉTRICO </h2>
                                            @foreach ($Gineco as $Gine)
                                                <!--- Historial-->
                                                <form class="user needs-validation" method="POST"
                                                    action="{{ route('Gineco.update',['IDAG'=>$Gine->id_a_g, 'IDPA'=>$Gine->fk_ag]) }}" novalidate>
                                                    @csrf
                                                    <!--Antecedentes ginecologicos-->
                                                

                                                    <div class="row mb-4">

                                                        <div class="col">
                                                            <label for="formGroupExampleInput">Menarca </label>
                                                            <input type="numeric" class="form-control"
                                                                placeholder="Inicio de la menstruacion en años "
                                                                name="Menarca" value="{{ $Gine->Menarca }}"   pattern="^\d+(\.\d+)?$" required >
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">Inicio actividad sexual
                                                            </label>
                                                            <input type="numeric" class="form-control"
                                                                placeholder="inicio de la vida sexual" name="IVSA"
                                                                value="{{ $Gine->Ivsa }}"   pattern="^\d+(\.\d+)?$" required >

                                                        </div>
                                                        </div>
                                                          <div class="row mb-4">
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">Número de gestas </label>
                                                            <input type="numeric" class="form-control"
                                                                placeholder="Numero de gestas " name="gestas"
                                                                value="{{ $Gine->Gesta }}"   pattern="^\d+(\.\d+)?$" required>
                                                        </div>
                                                    
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">Número de cesáreas </label>
                                                            <input type="numeric" class="form-control"
                                                                placeholder="Numero de cesareas" name="Cesareas"
                                                                value="{{ $Gine->Paras }}"   pattern="^\d+(\.\d+)?$" required>
                                                        </div>
                                                         </div>
                                                          <div class="row mb-4">
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">Número de abortos</label>
                                                            <input type="numeric" class="form-control"
                                                                placeholder="Numero de Abortos" name="Abortos"
                                                                value="{{ $Gine->Aborto }}"   pattern="^\d+(\.\d+)?$" required>
                                                        </div>
                                                        <div class="col">
                                                            <label for="formGroupExampleInput">Número de paras</label>
                                                            <input type="numeric" class="form-control"
                                                                placeholder="Numero de Partos" name="Partos"
                                                                value="{{ $Gine->Paras }}"   pattern="^\d+(\.\d+)?$" required>
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
                                                        id="Hola" style="display: none;">Agregar Antecedente Ginecobstetrico</button>
                                                </form>s
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