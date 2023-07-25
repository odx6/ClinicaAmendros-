<div class="tab-pane fade" id="rounded-pills-icon-plan" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
    @if ($Planes->isEmpty())
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
            <form class="user" method="POST" action="{{ route('index.Plan', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar Plan Analítico </button>
            </form>
        </div>
    @else
        @foreach ($Planes as $plan)
            <form class="user needs-validation" method="POST" action="{{ route('update.FormularioPlan', ['id' => $plan->pk_plan]) }}" novalidate>
                @csrf
                <div class="container" >
                    <div class="row">
                        <div class="col">
                            <h2>Objetivos</h2>

                            <div class="form-group mb-4">

                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Ob" required
                                    pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">{{ $plan->Objetivos }}</textarea>
                            </div>
                        </div>
                        <div class="col">
                            <h2>Hipostesis</h2>

                            <div class="form-group mb-4">

                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Hipostesis" required
                                    pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">{{ $plan->Hipotesis }}</textarea>
                            </div>
                        </div>
                        <div class="col">
                            <h2>Estructura Corp</h2>

                            <div class="form-group mb-4">

                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Estructura" required
                                    pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">{{ $plan->Estrucutura_corp }}</textarea>
                            </div>
                        </div>
                        <div class="col">
                            <h2>Función Corporal </h2>
                            <div class="form-group mb-4">

                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Funcion" required
                                    pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">{{ $plan->Funcion_Corporal }}</textarea>
                            </div>
                        </div>
                        <div class="col">
                            <h2>Actividad</h2>
                            <div class="form-group mb-4">

                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Actividad" required
                                    pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">{{ $plan->Actividad }}</textarea>
                            </div>
                        </div>
                        <div class="col">
                            <h2>Participación </h2>
                            <div class="form-group mb-4">

                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Participacion" required
                                    pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">{{ $plan->Participacion }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h2>Diagnóstico</h2>
                            <div class="form-group mb-4">

                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="Diagnostico" required
                                    pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">{{ $plan->Diagnostico }}</textarea>
                            </div>
                        </div>
                        <div class="col">
                            <h2>Plan</h2>
                            <div class="form-group mb-4">

                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="Plan" required
                                    pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">{{ $plan->plan }}</textarea>
                            </div>
                        </div>

                    </div>
                </div>


                <!--end-table-->
                <div class="modal-footer">

                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                        style="display: none;">Actualizar</button>
            </form>
            <form class="user" method="POST" action="{{ route('index.Plan', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                    id="Hola" style="display: none;">Agregar Formulario de evaluación
                </button>
            </form>
            <form class="user" method="POST" action="{{ route('destroy.Plan', ['id' => $plan->pk_plan]) }}">
                @csrf
                <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Eliminar</button>
            </form>

</div>
@endforeach
@endif
</div>
