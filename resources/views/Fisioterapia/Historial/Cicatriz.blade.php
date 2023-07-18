<div class="container desactivado" id="FisioCicatriz">
    <div class="col">
        <h2>Cicatriz Quirúrgica para el paciente {{ $id }}</h2>


        <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">si no </th>
                            <th scope="col">si no</th>
                            <th scope="col">si no</th>

                        </tr>
                        <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Sitio</label>
                                    <input class="form-control" type="text" 
                                       name="Sitio" value="" required  pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">

                                </div>
                            </td>
                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Queloide</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Queloide" value="si">

                                </div>
                            </td>
                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Retráctil</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Retractil" value="si">

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Abierta</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Abierta" value="si">

                                </div>
                            </td>
                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Con
                                        Aderencia</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Con-Aderencia" value="si">

                                </div>
                            </td>
                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Hipertrófica</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Hipertrófica" value="si">

                                </div>
                            </td>
                        </tr>




                    </tbody>
                </table>
            </div>
        <!--end-table-->

    </div>
</div>
