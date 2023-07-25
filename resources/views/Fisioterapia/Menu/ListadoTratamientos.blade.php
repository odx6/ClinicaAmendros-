<div class="tab-pane fade" id="rounded-pills-icon-contact" role="tabpanel" aria-labelledby="rounded-pills-icon-contact-tab">
    @if ($Tratamiento->isEmpty())
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
            <form class="user" method="POST" action="{{ route('index.TratamientoF', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                    id="Hola" style="display: none;">Agregar Tratamiento</button>
            </form>

        </div>
    @else
        <h2> TRATAMEINTOS PREVIOS DEL PACIENTE </h2>
        @foreach ($Tratamiento as $trata)
            <!--- Historial-->
            <form class="user needs-validation" method="POST"
                action="{{ route('update.TratamientoF', ['id' => $trata->pk_tratamientos_p]) }}" novalidate>
                @csrf
                <!--Antecedentes ginecologicos-->
               

                <div class="row mb-4">

                    <div class="col">
                        <label for="formGroupExampleInput">Tratamientos Previos
                        </label>
                       

                               <textarea type="text" class="form-control" id="exampleFormControlInput1"
                                                        value="" name="Tratamiento" placeholder="Tratamientos" required minlength="3" pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">{{ $trata->des_tratamiento }}</textarea>
                    </div>

                </div>

                <div class="modal-footer">

                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                        style="display: none;">Actualizar</button>
            </form>
            <form class="user" method="POST" action="{{ route('index.TratamientoF', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar
                    Tratamiento</button>
            </form>
            <form class="user" method="POST"
                action="{{ route('destroy.TratameintoF', ['id' => $trata->pk_tratamientos_p]) }}">
                @csrf
                <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Eliminar</button>
            </form>
</div>
@endforeach
<!-----end gine--->
@endif
</div>
