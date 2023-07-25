<div class="container desactivado" id="Figra">
    <div class="col">
        <h2>Estado de ingravidez para el paciente {{ $id }}</h2>

        <div class="switch form-switch-custom switch-inline form-switch-success">
                <label class="switch-label" for="form-custom-switch-success">Esta embrazada</label>
                <input class="switch-input" type="checkbox" role="switch" id="form-custom-switch-success" name="embarazada" value="si">

            </div>
            <h3>Especifique</h3>
            <div class="form-group">

                <input type="text" class="form-control" id="exampleFormControlInput1" value=""
                    name="Especificacion" placeholder="Especifique" value="N/A"  required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
            </div>

            <h3>Cuantos hijos tiene </h3>
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
            </div>

    </div>
</div>
