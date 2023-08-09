@extends('layouts.formularios')

@section('formulario')

<div class="col">
    <h1 style="text-align: center;">AGREGAR HABITOS DE LA SALUD</h1>
               
                <h4>Los datos marcados con <span class="red-asterisk"><span class="red-asterisk">*</span></span>  son obligatorios</h4>
        <h2> Plan Analítico de Atención Integral de Terapia Física</h2>
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
                            for="form-custom-switch-success">Tabaquismo <span class="red-asterisk">*</span></label>
                        <input class="switch-input" type="checkbox" role="switch"
                            id="form-custom-switch-success" name="Tabaquismo"  value="si">

                    </div>
                </td>
                <td>
                    <div class="form-group">

                        <input type="text" class="form-control"
                            id="exampleFormControlInput1" value="N/A"
                            placeholder="Especificaciones Tabaquismo" name="ETabaquismo" required  pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                            <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una especificación tabaquismo
                                     </div>
                    </div>
                </td>
            </tr>
             <tr>
                <td>
                    <div class="switch form-switch-custom switch-inline form-switch-success">
                        <label class="switch-label" for="form-custom-switch-success">Actividad 
                            física <span class="red-asterisk">*</span></label>
                        <input class="switch-input" type="checkbox" role="switch"
                            id="form-custom-switch-success" name="Actividad-física"value="si">

                    </div>
                </td>
                <td>
                    <div class="form-group">

                        <input type="text" class="form-control"
                            id="exampleFormControlInput1" value="N/A"
                            placeholder="Especificaciones Actividad fisica" name="EActividad-física" value="si" required  pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una especificación para actividad física
                                     </div>
                    </div>
                </td>

            </tr>
             <tr>
         

                <td>
                    <div class="switch form-switch-custom switch-inline form-switch-success">
                        <label class="switch-label"
                            for="form-custom-switch-success">Alcoholismo <span class="red-asterisk">*</span></label>
                        <input class="switch-input" type="checkbox" role="switch"
                            id="form-custom-switch-success" name="Alcholismo" value="si">

                    </div>
                </td>
                <td>
                    <div class="form-group">

                        <input type="text" class="form-control"
                            id="exampleFormControlInput1" value="N/A"
                            placeholder="Especificaciones Alcholismo " name="EAlcholismo" value="si" required  pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una especificación para alcoholismo
                                     </div>
                    </div>
                </td>
                </tr>
             <tr>
                <td>
                    <div class="switch form-switch-custom switch-inline form-switch-success">
                        <label class="switch-label" for="form-custom-switch-success">Se
                            Automedica <span class="red-asterisk">*</span></label>
                        <input class="switch-input" type="checkbox" role="switch"
                            id="form-custom-switch-success" name="Se-Automedica" value="si">

                    </div>
                </td>
                <td>
                    <div class="form-group">

                        <input type="text" class="form-control"
                            id="exampleFormControlInput1" value="N/A"
                            placeholder="Especificaciones Se Automedica " name="ESe-Automedica" value="si" required  pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una especificación si se automedica
                                     </div>
                    </div>
                </td>


            </tr>
             <tr>

                <td>
                    <div class="switch form-switch-custom switch-inline form-switch-success">
                        <label class="switch-label"
                            for="form-custom-switch-success">Drogas <span class="red-asterisk">*</span></label>
                        <input class="switch-input" type="checkbox" role="switch"
                            id="form-custom-switch-success" name="Drogas" value="si">

                    </div>
                </td>
                <td>
                    <div class="form-group">

                        <input type="text" class="form-control"
                            id="exampleFormControlInput1" value="N/A"
                            placeholder="Especificaciones Drogas " name="EDrogas" value="si" required  pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una especificación para drogas
                                     </div>
                    </div>
                </td>
                </tr>
             <tr>
                <td>
                    <div class="switch form-switch-custom switch-inline form-switch-success">
                        <label class="switch-label"
                            for="form-custom-switch-success">Pasatiempo <span class="red-asterisk">*</span></label>
                        <input class="switch-input" type="checkbox" role="switch"
                            id="form-custom-switch-success" name="Pasatiempo" value="si">

                    </div>
                </td>
                <td>
                    <div class="form-group">

                        <input type="text" class="form-control"
                            id="exampleFormControlInput1" value="N/A"
                            placeholder="Especificaciones Pasatiempos " name="EPasatiempo" value="si" required  pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una especificación para pasatiempo
                                     </div>
                    </div>
                </td>
            </tr>

        </tbody>
    </table>


</div>
<button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Guardar</button>
</form>
@endsection