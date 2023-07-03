<div class="tab-pane fade" id="rounded-pills-icon-notas" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
    @if ($Notas->isEmpty())
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
            <form class="user" method="POST" action="{{ route('Notas.Formulario', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar Nota clinica para el paciente </button>
            </form>
        </div>
    @else
        @foreach ($Notas as $nota)
        <form class="user" method="POST" action="{{ route('Nota.store',['IDAG'=>$nota->pk_nota,'IDPA'=>$nota->fk_n,'TIPO'=>$nota->Tipo]) }}">
            @csrf
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <img src="{{ asset('src/assets/img/Fisioterapia/cuerpo.png') }}"
                                alt="" width="100%" height="100%">
                        </div>
                        <div class="col-sm">
                            <h2>Nota Clinica-Valoración Inicial</h2>
                            <div class="form-group mb-4">
                                <label for="exampleFormControlTextarea1">{{$nota->Tipo}}</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="NOT">{{$nota->Nota}}</textarea>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--end-table-->
        <div class="modal-footer">

            <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                style="display: none;">Actualizar</button>
    </form>
    <form class="user" method="POST" action="{{ route('index.Cicatriz',['id' => $Paciente->SS]) }}">
        @csrf
        <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
            style="display: none;">Agregar Nota Clínica-Valoración Inicial
        </button>
    </form>
    <form class="user" method="POST" action="{{ route('Notas.destroy', ['id' =>$nota->pk_nota]) }}">
        @csrf
        <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
            style="display: none;">Eliminar</button>
    </form>
        
</div>

@endforeach
@endif
</div>
