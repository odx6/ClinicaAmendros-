@extends('layouts.formularios')
@section('nombreVista', 'Plan Analítico de Atención Integral de Terapia Física')

@section('formulario')
    <div class="col-sm">
        <h2> Plan Analítico de Atención Integral de Terapia Física</h2>
        <!---table-->
        <form class="user needs-validation" method="POST" action="{{ route('create.Plan', ['id' => $id]) }}" novalidate>
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>Objetivos</h2>

                        <div class="form-group mb-4">

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Ob" required></textarea>
                        </div>
                    </div>
                    <div class="col">
                        <h2>Hipostesis</h2>

                        <div class="form-group mb-4">

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Hipostesis" required  pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" ></textarea>
                        </div>
                    </div>
                    <div class="col">
                        <h2>Estructura Corp</h2>

                        <div class="form-group mb-4">

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Estructura" required  pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+"></textarea>
                        </div>
                    </div>
                    <div class="col">
                        <h2>Función Corporal </h2>
                        <div class="form-group mb-4">

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Funcion" required  pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+"></textarea>
                        </div>
                    </div>
                    <div class="col">
                        <h2>Actividad</h2>
                        <div class="form-group mb-4">

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Actividad" required  pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+"></textarea>
                        </div>
                    </div>
                    <div class="col">
                        <h2>Participacion </h2>
                        <div class="form-group mb-4">

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Participacion" required  pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2>Diagnóstico</h2>
                        <div class="form-group mb-4">

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="Diagnostico" required  pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+"></textarea>
                        </div>
                    </div>
                    <div class="col">
                        <h2>Plan</h2>
                        <div class="form-group mb-4">

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="Plan" required  pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+"></textarea>
                        </div>
                    </div>

                </div>
            </div>



    </div>
    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Enviar
        Datos</button>
    </form>


@endsection
