<div class="tab-pane fade" id="rounded-pills-icon-dolor" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
    @if ($Dolor->isEmpty())
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
            <form class="user" method="POST" action="{{ route('index.Escala', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar Escala de dolor </button>
            </form>
        </div>
    @else
        @foreach ($Dolor as $dol)
        <form class="user" method="POST" action="{{ route('update.Escala',['id'=>$dol->pk_escala]) }}">
            @csrf
            <div class="row">
                <h2>Escala de Dolor</h2>
                <div class="col-sm">
                    <input type="range" min="0" max="10" step="1" value="{{$dol->Escala}}"
                        id="dolorBarra" name="Escala">
                    <h3>Valor de Dolor: <span id="valorDolor">{{$dol->Escala}}</span></h3>
                </div>
            </div>

        <!--end-table-->
        <div class="modal-footer">

            <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                style="display: none;">Actualizar</button>
    </form>
    <form class="user" method="POST" action="{{ route('index.Escala',['id' => $Paciente->SS]) }}">
        @csrf
        <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
            style="display: none;">Agregar Escala de dolor
        </button>
    </form>
    <form class="user" method="POST" action="{{ route('destroy.Escala', ['id' =>$dol->pk_escala]) }}">
        @csrf
        <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
            style="display: none;">Eliminar</button>
    </form>
    @endforeach 
    @endif
</div>

@if($Dolor->isEmpty())@else </div>@endif
