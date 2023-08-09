@extends('layouts.formularios')

@section('formulario')
    <div class="col-sm">
       <h1 style="text-align: center;">AGREGAR TRASLADO</h1>
               
                <h4>Los datos marcados con <span class="red-asterisk"><span class="red-asterisk">*</span></span>  son obligatorios</h4>
        <!---table-->
        <form class="user needs-validation" method="POST" action="{{ route('create.Traslados', ['id' => $id]) }}" novalidate>
            @csrf
             <h2>TRASLADOS</h2>
               
            <div class="col-sm">

                <h3>Val Inicial <span class="red-asterisk">*</span></h3>
                <select class="form-control" name="Inicial" required>
                    <option selected disabled value="">...</option>
                    @php
                        $traslados = ['Independiente', 'Silla de ruedas', 'con ayudas', 'camillas'];
                    @endphp
                    @endphp
                    @foreach ($traslados as $tras)
                        <option value="{{ $tras }}">{{ $tras }} </option>
                    @endforeach
                </select>
<div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una valoración inicial valida
                                     </div>
                <h3>Val.final <span class="red-asterisk">*</span></h3>
                <select class="form-control" name="Final" required>
                    <option selected disabled value="">...</option>
                    @php
                        $traslados = ['Independiente', 'Silla de ruedas', 'con ayudas', 'camillas'];
                    @endphp
                    @endphp
                    @foreach ($traslados as $tras)
                        <option value="{{ $tras }}">{{ $tras }} </option>
                    @endforeach
                </select>
                <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una valoración inicial valida
                                     </div>

                <br>
                <br>
            </div>
            <!--end-table-->

    </div>
    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Guardar</button>
    </form>
@endsection
