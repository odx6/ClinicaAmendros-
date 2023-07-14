<div class="container desactivado" id="Fitraslados">
    <div class="col">
    
        <h2>Traslado para el paciente {{ $id }}</h2>
        
            @csrf
            <div class="col-sm">

                <h3>Val Inicial</h3>
                <select class="form-control" name="Inicial" required>
                    <option selected disabled value="">Traslado Inicial <br> del paciente</option>
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
                    <option selected disabled value="">Traslado Final<br>  del paciente</option>
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

    </div>
    </div>
   