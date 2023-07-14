<div class="container desactivado" id="FisioAntecedente">

    <div class="container">
        
            <form class="user needs-validation" method="POST" action="{{ route('create.AntecedenteAH', ['id' => $id]) }}"
                novalidate>
                @csrf
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
                                    <label class="switch-label" for="form-custom-switch-success">Diabetes</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Diabetes" value="si">

                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        value="" placeholder="Especificacion para diabetes" name="EDiabetes"
                                        required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Enf.Reumaticas</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="EnfReumaticas" value="si">

                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        value="" placeholder="Enfermedades Reumaticas" name="EEnf" required
                                        pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                                </div>
                            </td>

                        </tr>
                        <tr>

                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Alergias</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Alergias" value="si">

                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        value="" placeholder="Alergias" name="EAlergias" required
                                        pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Encames</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Encames" value="si">

                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        value="" placeholder="Encames" name="EEncames" required
                                        pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                                </div>
                            </td>


                        </tr>
                        <tr>

                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">HTA</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="HTA" value="si">

                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        value="" placeholder="HTA" name="ETA" required
                                        pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Accidentes</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Accidentes" value="si">

                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        value="" placeholder="Accidentes" name="EAccidentes" required
                                        pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                                </div>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Cáncer</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Cáncer" value="si">

                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        value="" placeholder="Cáncer" name="ECancer" required
                                        pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Cardiopatías</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Cardiopatias" value="si">

                                </div>
                            </td>

                            <td>
                                <div class="form-group">

                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        value="" placeholder="Cardiopatias" name="ECardiopatias" required
                                        pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                                </div>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Transfusiones</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Transfusiones" value="si">

                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        value="" placeholder="Transfunciones" name="ETransfunciones" required
                                        pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Cirugías</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Cirugías" value="si">

                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        value="" placeholder="Cirugias" name="ECirugias" required
                                        pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                                </div>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Fracturas</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Fracturas" value="si">

                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        value="" placeholder="Fracturas" name="EFracturas" required
                                        pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                                </div>
                            </td>

                        </tr>
                    </tbody>
                </table>

                <div class="col">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <!--Espacio-->
                                <div class="container">
                                    <h3>Signos vitales</h3>
                                    <div class="row">
                                        <div class="col">
                                            <h3>T/A</h3>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">

                                                <input type="numeric" class="form-control"
                                                    id="exampleFormControlInput1" value="" placeholder="TA"
                                                    name="TA" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h3>TEMP</h3>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">

                                                <input type="numeric" class="form-control"
                                                    id="exampleFormControlInput1" value="" placeholder="Temp"
                                                    name="Temp" required>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h3>FC</h3>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">

                                                <input type="numeric" class="form-control"
                                                    id="exampleFormControlInput1" value="" placeholder="FC"
                                                    name="FC" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <h3>FR</h3>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">

                                                <input type="numeric" class="form-control"
                                                    id="exampleFormControlInput1" value="" placeholder="FR"
                                                    name="FR" required>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!--end-espacio-->
                            </div>

                            <div class="w-100"></div>
                            <div class="col"><br>
                                <h2><u>Espasmos o contratuctua muscular </u></h2>
                                <!---table-->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">si no </th>
                                                <th scope="col">Sitio/Caracteristicas</th>

                                            </tr>
                                            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="switch form-switch-custom switch-inline form-switch-success">
                                                        <label class="switch-label"
                                                            for="form-custom-switch-success">Si/no</label>
                                                        <input class="switch-input" type="checkbox" role="switch"
                                                            id="form-custom-switch-success" name="Espasmos"
                                                            value="si">

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput1" value=""
                                                            placeholder="Especificacion Espasmos" name="EEspasmos"
                                                            required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                                                    </div>
                                                </td>

                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                                <!--end-table-->





                            </div>

                        </div>
                    </div>
                </div>
       

    </div>

</div>
