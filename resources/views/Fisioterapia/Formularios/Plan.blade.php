@extends('layouts.formularios')
@section('nombreVista', 'Agregar Formulario de valoracion de la bateria')

@section('formulario')
    <div class="col-sm">
<h2> Plan Analítico de Atención Integral de Terapia Física</h2>
        <!---table-->
        <form class="user" method="POST" action="{{ route('create.Plan', ['id' => $id]) }}">
            @csrf
            <div class="container"  style="border: 1px solid black;">
  <div class="row"  >
    <div class="col" >
     <h2>Objetivos</h2>
     
     <div class="form-group mb-4">
                               
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Ob"></textarea>
                            </div>
    </div>
    <div class="col">
     <h2>Hipostesis</h2>

      <div class="form-group mb-4">
                               
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Hipostesis"></textarea>
                            </div>
    </div>
     <div class="col">
     <h2>Estructura Corp</h2>

      <div class="form-group mb-4">
                               
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Estructura"></textarea>
                            </div>
    </div>
     <div class="col">
     <h2>Función Corporal </h2>
      <div class="form-group mb-4">
                               
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Funcion"></textarea>
                            </div>
    </div>
     <div class="col">
     <h2>Actividad</h2>
      <div class="form-group mb-4">
                               
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Actividad"></textarea>
                            </div>
    </div>
     <div class="col">
     <h2>Participacion </h2>
      <div class="form-group mb-4">
                               
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Participacion"></textarea>
                            </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
     <h2>Diagnóstico</h2>
      <div class="form-group mb-4">
                               
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="Diagnostico"></textarea>
                            </div>
    </div>
    <div class="col">
     <h2>Plan</h2>
      <div class="form-group mb-4">
                               
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="Plan"></textarea>
                            </div>
    </div>
    
  </div>
</div>

    </div>
    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Enviar
        Datos</button>
    </form>

   
@endsection
