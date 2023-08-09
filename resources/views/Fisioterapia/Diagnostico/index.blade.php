@extends('layouts.formularios')

@section('formulario')
    <div class="col-sm">
          <h1 style="text-align: center;">AGREGAR DIAGNÓSTICO MÉDICO EN REHABILITACIÓN</h1>
                
                <h4>Los datos marcados con <span class="red-asterisk"><span class="red-asterisk">*</span></span>  son obligatorios</h4>
        <form class="user needs-validation" method="POST" action="{{ route('create.Diagnostico',['id'=>$id]) }}" novalidate>
            @csrf
            <h2>DIAGNÓSTICO MÉDICO EN REHABILITACIÓN </h2>
                
        <div class="container">
            <div class="row">
                <div class="col-sm">

                    <div class="input-group">
                        <span class="input-group-text">Reflejos <span class="red-asterisk">*</span></span>
                        <textarea class="form-control" aria-label="With textarea" name="Reflejos" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" required></textarea>
                           <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese     un diagnostico valido para reflejos
                                     </div>

                    </div>

                </div>
                <div class="col-sm">

                    <div class="input-group">
                        <span class="input-group-text">Sensibilidad <span class="red-asterisk">*</span></span>
                        <textarea class="form-control" aria-label="With textarea" name="Sensibilidad" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" required></textarea>
                        <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese  un diagnostico valido para sensibilidad
                                     </div>

                    </div>
                </div>
                <div class="col-sm">
                    <div class="input-group">
                        <span class="input-group-text">Lenguaje / Orientación <span class="red-asterisk">*</span></span>
                        <textarea class="form-control" aria-label="With textarea" name="LeOr" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" required></textarea>
                        <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un diagnostico Lenguaje / Orientación
                                     </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="input-group">
                        <span class="input-group-text">Otros <span class="red-asterisk">*</span></span>
                        <textarea class="form-control" aria-label="With textarea" name="Otros" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" required></textarea>
                          <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un diagnostico para otros
                                     </div>
                    </div>
                </div>
            </div>
           
        </div>
    <br>
    <br>
    </div>
    
    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Guardar</button>
    </form>
    
    
@endsection
