<div class="tab-pane fade" id="rounded-pills-icon-traslados" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
    @if ($Traslados->isEmpty())
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
            <form class="user" method="POST" action="{{ route('index.Traslados', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar traslado </button>
            </form>
        </div>
    @else
        @foreach ($Traslados as $trase)
        <form class="user needs-validation" method="POST" action="{{ route('update.Traslados',['id'=>$trase->pk_traslados]) }}" novalidate>
            @csrf
            <div class="col-sm">

                <h3>Val Inicial</h3>
                <select class="form-control" name="Inicial" required>
                    <option value="{{$trase->Val_inicial}}">{{$trase->Val_inicial}}</option>
                    @php
                        $traslados = ['Independiente', 'Silla de ruedas', 'con ayudas', 'camillas'];
                    @endphp
                    @endphp
                    @foreach ($traslados as $tras)
                        <option value="{{ $tras }}">{{ $tras }} </option>
                    @endforeach
                </select>
                <h3>Val.final</h3>
                <select class="form-control" name="Final" required>
                    <option value="{{$trase->Val_final}}">{{$trase->Val_final}}</option>
                    @php
                        $traslados = ['Independiente', 'Silla de ruedas', 'con ayudas', 'camillas'];
                    @endphp
                    @endphp
                    @foreach ($traslados as $tras)
                        <option value="{{ $tras }}">{{ $tras }} </option>
                    @endforeach
                </select>
                <br>
                <br>
            </div>
        
        <!--end-table-->
        <div class="modal-footer">

            <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                style="display: none;">Actualizar</button>
    </form>
    <form class="user" method="POST" action="{{ route('index.Cicatriz',['id' => $Paciente->SS]) }}">
        @csrf
        <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
            style="display: none;">Agregar traslado
        </button>
    </form>
    <form class="user" method="POST" action="{{ route('destroy.Traslados', ['id' =>$trase->pk_traslados]) }}">
        @csrf
        <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
            style="display: none;">Eliminar</button>
    </form>
        
</div>
@endforeach
@endif
</div>

