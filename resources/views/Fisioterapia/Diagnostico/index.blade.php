@extends('layouts.formularios')

@section('formulario')
    <div class="col-sm">
        <h2>Diagnóstico Médico en Reabilitacion para el paciente {{ $id }} </h2>
        <form class="user" method="POST" action="{{ route('create.Diagnostico',['id'=>$id]) }}">
            @csrf
        <div class="container">
            <div class="row">
                <div class="col-sm">

                    <div class="input-group">
                        <span class="input-group-text">Reflejos</span>
                        <textarea class="form-control" aria-label="With textarea" name="Reflejos"></textarea>
                    </div>

                </div>
                <div class="col-sm">

                    <div class="input-group">
                        <span class="input-group-text">Sensibilidad</span>
                        <textarea class="form-control" aria-label="With textarea" name="Sensibilidad"></textarea>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="input-group">
                        <span class="input-group-text">Lenguaje / Orientacion</span>
                        <textarea class="form-control" aria-label="With textarea" name="LeOr"></textarea>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="input-group">
                        <span class="input-group-text">Otros</span>
                        <textarea class="form-control" aria-label="With textarea" name="Otros"></textarea>
                    </div>
                </div>
            </div>
           
        </div>
    <br>
    <br>
    </div>
    
    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Enviar
        Datos</button>
    </form>
    
    
@endsection
