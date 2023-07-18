@extends('layouts.formularios')

@section('formulario')

<div class="col">
    <form class="user needs-validation" method="POST"
    action="{{ route('create.AntecedenteHAB', ['id' => $id]) }}" novalidate>
    @csrf
    <h2>Habitos de la salud para el paciente {{$id}}</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">
                    <h3>si no</h3>
                </th>
                <th scope="col">
                    <h3>Especifique</h3>
                </th>
                

            </tr>
            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
        </thead>
        </thead>
        <tbody>
            <tr>

                <td>
                    <div class="switch form-switch-custom switch-inline form-switch-success">
                        <label class="switch-label"
                            for="form-custom-switch-success">Tabaquismo</label>
                        <input class="switch-input" type="checkbox" role="switch"
                            id="form-custom-switch-success" name="Tabaquismo"  value="si">

                    </div>
                </td>
                <td>
                    <div class="form-group">

                        <input type="text" class="form-control"
                            id="exampleFormControlInput1" value=""
                            placeholder="Especificaciones Tabaquismo" name="ETabaquismo" required  pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                    </div>
                </td>
            </tr>
             <tr>
                <td>
                    <div class="switch form-switch-custom switch-inline form-switch-success">
                        <label class="switch-label" for="form-custom-switch-success">Actividad
                            física</label>
                        <input class="switch-input" type="checkbox" role="switch"
                            id="form-custom-switch-success" name="Actividad-física"value="si">

                    </div>
                </td>
                <td>
                    <div class="form-group">

                        <input type="text" class="form-control"
                            id="exampleFormControlInput1" value=""
                            placeholder="Especificaciones Actividad fisica" name="EActividad-física" value="si" required  pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                    </div>
                </td>

            </tr>
             <tr>
         

                <td>
                    <div class="switch form-switch-custom switch-inline form-switch-success">
                        <label class="switch-label"
                            for="form-custom-switch-success">Alcoholismo</label>
                        <input class="switch-input" type="checkbox" role="switch"
                            id="form-custom-switch-success" name="Alcholismo" value="si">

                    </div>
                </td>
                <td>
                    <div class="form-group">

                        <input type="text" class="form-control"
                            id="exampleFormControlInput1" value=""
                            placeholder="Especificaciones Alcholismo " name="EAlcholismo" value="si" required  pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                    </div>
                </td>
                </tr>
             <tr>
                <td>
                    <div class="switch form-switch-custom switch-inline form-switch-success">
                        <label class="switch-label" for="form-custom-switch-success">Se
                            Automedica</label>
                        <input class="switch-input" type="checkbox" role="switch"
                            id="form-custom-switch-success" name="Se-Automedica" value="si">

                    </div>
                </td>
                <td>
                    <div class="form-group">

                        <input type="text" class="form-control"
                            id="exampleFormControlInput1" value=""
                            placeholder="Especificaciones Se Automedica " name="ESe-Automedica" value="si" required  pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                    </div>
                </td>


            </tr>
             <tr>

                <td>
                    <div class="switch form-switch-custom switch-inline form-switch-success">
                        <label class="switch-label"
                            for="form-custom-switch-success">Drogas</label>
                        <input class="switch-input" type="checkbox" role="switch"
                            id="form-custom-switch-success" name="Drogas" value="si">

                    </div>
                </td>
                <td>
                    <div class="form-group">

                        <input type="text" class="form-control"
                            id="exampleFormControlInput1" value=""
                            placeholder="Especificaciones Drogas " name="EDrogas" value="si" required  pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                    </div>
                </td>
                </tr>
             <tr>
                <td>
                    <div class="switch form-switch-custom switch-inline form-switch-success">
                        <label class="switch-label"
                            for="form-custom-switch-success">Pasatiempo</label>
                        <input class="switch-input" type="checkbox" role="switch"
                            id="form-custom-switch-success" name="Pasatiempo" value="si">

                    </div>
                </td>
                <td>
                    <div class="form-group">

                        <input type="text" class="form-control"
                            id="exampleFormControlInput1" value=""
                            placeholder="Especificaciones Pasatiempos " name="EPasatiempo" value="si" required  pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                    </div>
                </td>
            </tr>

        </tbody>
    </table>


</div>
<button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Enviar
    Datos</button>
</form>
@endsection