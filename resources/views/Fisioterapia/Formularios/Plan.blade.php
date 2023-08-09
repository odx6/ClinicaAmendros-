@extends('layouts.formularios')
@section('nombreVista', 'Plan Analítico de Atención Integral de Terapia Física')

@section('formulario')
    <div class="col-sm">
        <h1 style="text-align: center;">AGREGAR PLAN ANALÍTICO</h1>
               
                <h4>Los datos marcados con <span class="red-asterisk"><span class="red-asterisk">*</span></span>  son obligatorios</h4>
        <h2> Plan Analítico de Atención Integral de Terapia Física</h2>
        <!---table-->
        <form class="user needs-validation" method="POST" action="{{ route('create.Plan', ['id' => $id]) }}" novalidate>
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>Objetivos <span class="red-asterisk">*</span></h2>

                        <div class="form-group mb-4">

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Ob" required></textarea>
                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un objetivo valido
                                     </div>
                        </div>
                    </div>
                    <div class="col">
                        <h2>Hipótesis <span class="red-asterisk">*</span></h2>

                        <div class="form-group mb-4">

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Hipostesis" required  pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" ></textarea>
                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una hipótesis valida
                                     </div>
                        </div>
                    </div>
                    <div class="col">
                        <h2>Estructura Corp <span class="red-asterisk">*</span></h2>

                        <div class="form-group mb-4">

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Estructura" required  pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$"></textarea>
                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una estructura corporal valida
                                     </div>
                        </div>
                    </div>
                    <div class="col">
                        <h2>Función Corporal  <span class="red-asterisk">*</span></h2>
                        <div class="form-group mb-4">

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Funcion" required  pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$"></textarea>
                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una función corpora valida
                                     </div>
                        </div>
                    </div>
                    <div class="col">
                        <h2>Actividad <span class="red-asterisk">*</span></h2>
                        <div class="form-group mb-4">

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Actividad" required  pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$"></textarea>
                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una actividad valida
                                     </div>
                        </div>
                    </div>
                    <div class="col">
                        <h2>Participación <span class="red-asterisk">*</span> </h2>
                        <div class="form-group mb-4">

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Participacion" required  pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$"></textarea>
                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una participación valida
                                     </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2>Diagnóstico <span class="red-asterisk">*</span></h2>
                        <div class="form-group mb-4">

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="Diagnostico" required  pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$"></textarea>
                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un diagnostico valido 
                                     </div>
                        </div>
                    </div>
                    <div class="col">
                        <h2>Plan <span class="red-asterisk">*</span></h2>
                        <div class="form-group mb-4">

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="Plan" required  pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$"></textarea>
                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una plan valido
                                     </div>
                        </div>
                    </div>

                </div>
            </div>



    </div>
    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Guardar</button>
    </form>


@endsection
