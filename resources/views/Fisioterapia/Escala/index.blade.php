@extends('layouts.formularios')
@section('nombreVista', 'Agregar Escala de dolor')

@section('formulario')
    <div class="col-sm">
        
        <!---table-->
        <form class="user" method="POST" action="{{ route('create.Escala', ['id' => $id]) }}">
            @csrf
            <div class="col-sm">
                <h2>Escala de dolor paciente {{ $id }} </h2>
                <!---table-->
                 <div class="col-sm">
                                <input type="range" min="0" max="10" step="1" value="0"
                                    id="dolorBarra" name="Escala">
                                <h3>Valor de Dolor: <span id="valorDolor">0</span></h3>
                            </div>
                <!--end-table-->
            </div>
           
            <!--end-table-->

    </div>
    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Enviar
        Datos</button>
    </form>
@endsection