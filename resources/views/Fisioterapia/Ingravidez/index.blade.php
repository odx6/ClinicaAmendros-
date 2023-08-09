@extends('layouts.formularios')

@section('formulario')
    <div class="col">
<h1 style="text-align: center;">AGREGAR ESTADO DE INGRAVIDEZ EN MUJERES</h1>
               
                <h4>Los datos marcados con <span class="red-asterisk"><span class="red-asterisk">*</span></span>  son obligatorios</h4>
      
        <h2>Estado de ingravidez para el paciente {{ $id }}</h2>
        <form class="user needs-validation" method="POST" action="{{ route('create.Ingravidez', ['id' => $id]) }}" novalidate>
            @csrf
            <div class="switch form-switch-custom switch-inline form-switch-success">
                <label class="switch-label" for="form-custom-switch-success">Esta embrazada</label>
                <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-success" name="embarazada" value="si">

            </div>
            <h3>Especifique <span class="red-asterisk">*</span></h3>
            <div class="form-group">

                <input type="text" class="form-control" id="exampleFormControlInput1" value="N/A"
                    name="Especificacion" placeholder="Especifique" value="N/A" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                    <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una especificacion valida
                                     </div>
            </div>

            <h3>Cuantos hijos tiene <span class="red-asterisk">*</span> </h3>
            <div class="form-group mb-4">

                <select class="form-select" id="exampleFormControlSelect1" name="hijos" required>
                    <option selected disabled value="">Hijos </option>
                    @for ($i = 0; $i <= 10; $i++)
                        @if ($i < 2)
                            <option value="{{ $i }}">{{ $i }} hijo(a)
                            @else
                            <option value="{{ $i }}">{{ $i }} hijo(a)s
                        @endif
                        </option>
                    @endfor

                </select>
                <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     El campo es obligatorio
                                     </div>

            </div>

    </div>

    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Guardar</button>
    </form>
@endsection
