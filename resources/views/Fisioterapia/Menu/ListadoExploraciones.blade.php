<div class="tab-pane fade" id="rounded-pills-icon-profile" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">

    @if ($ExploracionesF->isEmpty())
        <div class="widget-content widget-content-area">
            <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4"
                role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-alert-circle">
                    <circle cx="12" cy="12" r="10">
                    </circle>
                    <line x1="12" y1="8" x2="12" y2="12"></line>
                    <line x1="12" y1="16" x2="12" y2="16"></line>
                </svg>
                <strong>Lo sentimos !</strong> No Hay registros disponibles para el
                paciente.

            </div>
            <form class="user" method="POST" action="{{ route('create.FExploracion', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar Exploración
                    Física</button>
            </form>
        </div>
    @else
        @foreach ($ExploracionesF as $Explora)
            <!--- Historial-->
            <!--Primer seccion de container--->
            <div class="container">
                <form class="user needs-validation" method="POST"
                    action="{{ route('update.FExploracionF', ['id' => $Explora->pk_Exploracion_ff]) }}" novalidate>
                    @csrf
                    <div class="col">

                        <h2>Exploración Física</h2>
                        <table class="table">

                            <tbody>
                                
                                <tr>

                                    <td>
                                        <h3>peso :</h3>
                                    </td>
                                    <td>
                                        <div class="form-group">

                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                value="{{ $Explora->Peso }}" name="Peso" required pattern="^\d+(\.\d+)?$">
                                        </div>
                                    </td>

                                </tr>
                                <tr>

                                    <td>
                                        <h3>Estatura :</h3>
                                    </td>
                                    <td>
                                        <div class="form-group">

                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                value="{{ $Explora->Estatura }}" name="Estatura" required pattern="^\d+(\.\d+)?$" >
                                        </div>
                                    </td>

                                </tr>
                                <tr>

                                    <td>
                                        <h3>(IMC):</h3>
                                    </td>
                                    <td>
                                        <div class="form-group">

                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                value="{{ $Explora->IMC }}" name="IMC" required pattern="^\d+(\.\d+)?$">
                                        </div>
                                    </td>

                                </tr>
                                
                            </tbody>
                        </table>

                    </div>
                    <div class="col">
                       
                        <h2>Motivo de la consulta</h2>
                        <div class="form-group">

                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                value="{{ $Explora->Motivo }}" name="Motivo" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                        </div>

                    </div>


            </div>

            <div class="modal-footer">

                <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                    style="display: none;">Actualizar</button>
                </form>
                <form class="user" method="POST"
                    action="{{ route('create.FExploracion', ['id' => $Paciente->SS]) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                        id="Hola" style="display: none;">Agregar
                        Exploración</button>
                </form>
                <form class="user" method="POST"
                    action="{{ route('destroy.FExploracionF', ['id' => $Explora->fk_Exploracion_ff]) }}">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola"
                        id="Hola" style="display: none;">Eliminar</button>
                </form>
            </div>
            <!---end--octavo container-->
        @endforeach
    @endif

</div>
