<div class="tab-pane fade" id="rounded-pills-icon-Notas" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
    @if ($DIME->isEmpty())
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
            <form class="user" method="POST" action="{{ route('index.Diagnostico', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar Diagnóstico médico en rehabilitacion </button>
            </form>
        </div>
    @else
        <!--Antecedentes patologicos-->
        @foreach ($DIME as $dime)
            <form class="user needs-validation" method="POST" action="{{ route('update.Diagnostico', ['id' => $dime->fk_dmi]) }}" novalidate>
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-sm">

                            <div class="input-group">
                                <span class="input-group-text">Reflejos</span>
                                <textarea class="form-control" aria-label="With textarea" name="Reflejos" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" required>{{ $dime->Reflejos }}</textarea>
                            </div>

                        </div>
                        <div class="col-sm">

                            <div class="input-group">
                                <span class="input-group-text">Sensibilidad</span>
                                <textarea class="form-control" aria-label="With textarea" name="Sensibilidad" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" required>{{ $dime->Sensibilidad }}</textarea>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="input-group">
                                <span class="input-group-text">Lenguaje / Orientacion</span>
                                <textarea class="form-control" aria-label="With textarea" name="LeOr" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" required>{{ $dime->LenguajeOrientacion }}</textarea>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="input-group">
                                <span class="input-group-text">Otros</span>
                                <textarea class="form-control" aria-label="With textarea" name="Otros" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" required>{{ $dime->Otros }}</textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <br>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                        style="display: none;">Actualizar</button>
            </form>
            <form class="user" method="POST" action="{{ route('index.Diagnostico', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar Diagnóstico médico en rehabilitacion
                </button>
            </form>
            <form class="user" method="POST" action="{{ route('destroy.Diagnostico', ['id' => $dime->pk_dmi]) }}">
                @csrf
                <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Eliminar</button>
            </form>
            <br>
            <br>
</div>
@endforeach

<!--Segundo seccion de container--->
@endif

</div>