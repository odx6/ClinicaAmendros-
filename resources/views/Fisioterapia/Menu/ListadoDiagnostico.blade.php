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
                    style="display: none;">Agregar Diagnóstico médico en rehabilitación </button>
            </form>
        </div>
    @else
        <!--Antecedentes patologicos-->
        @foreach ($DIME as $dime)
            <form class="user needs-validation" method="POST"
                action="{{ route('update.Diagnostico', ['id' => $dime->fk_dmi]) }}" novalidate>
                @csrf
              <h1 style="text-align: center;">DIAGNÓSTICO MÉDICO EN REHABILITACIÓN </h1>
               
                <h4>Los datos marcados con <span class="red-asterisk">*</span> son obligatorios </h4>
                <div class="container">

                    <div class="col-sm">

                        <div class="input-group">
                            <span class="input-group-text">Reflejos <span class="red-asterisk">*</span></span>
                            <textarea class="form-control" aria-label="With textarea" name="Reflejos"
                                pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" required>{{ $dime->Reflejos }}</textarea>
                                   <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese     un diagnostico valido para reflejos
                                     </div>

                        </div>

                    </div>
                    <div class="col-sm">

                        <div class="input-group">
                            <span class="input-group-text">Sensibilidad <span class="red-asterisk">*</span></span>
                            <textarea class="form-control" aria-label="With textarea" name="Sensibilidad"
                                pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" required>{{ $dime->Sensibilidad }}</textarea>
                                 <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese     un diagnostico valido para sensibilidad
                                     </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <span class="input-group-text">Lenguaje / Orientación <span class="red-asterisk">*</span></span>
                            <textarea class="form-control" aria-label="With textarea" name="LeOr"
                                pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" required>{{ $dime->LenguajeOrientacion }}</textarea>
                                 <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un diagnostico Lenguaje / Orientación
                                     </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="input-group">
                            <span class="input-group-text">Otros <span class="red-asterisk">*</span></span>
                            <textarea class="form-control" aria-label="With textarea" name="Otros"
                                pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" required>{{ $dime->Otros }}</textarea>
                                <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un diagnostico para otros
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
