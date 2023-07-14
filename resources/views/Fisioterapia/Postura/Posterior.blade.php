<div class="container">

    <!---table-->
    <form class="user needs-validation" method="POST"
        action="{{ route('create.Postura', ['id' => $id, 'TipoM' => 'Posterior']) }}" novalidate>
        @csrf

        <h2>Evaluacion Postura</h2>

        <h2>Vista Posterior</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Aliniacion Corporal</th>
                        <th scope="col">GRADOS L M S</th>


                    </tr>
                    <tr aria-hidden="true" class="mt-3 d-block table-row-hidden">
                    </tr>
                </thead>
                <tbody>
                    @php
                        $Datos = ['Cabeza inclinada', 'Cabeza rotada', 'Hombro Caido', 'Hombro Elevado', 'Espalda Plana', 'Abducción de Escapulas', 'Abduccion de escapulas', 'Escapulas Aladas', 'Curvatura Lateral de la Columna', 'Rotacion Interna  de Cadera(Tronco)', 'Rotacion Externa de Cadera', 'Inclinación  Lateral de la Pelvis', 'Rotacion Pélvica', 'Cadera Abducida', 'Pie Pronado', 'Pie Supiano', 'Pie Plano', 'Pie Cavo'];
                        
                    @endphp
                    @foreach ($Datos as $Dat)
                        <tr>
                            <td>

                                <div class="form-group">

                                    <textarea type="text" class="form-control" id="exampleFormControlInput1" name="Posturas[{{ $Dat }}][Nombre]"
                                        placeholder="Observaciones" rows="3" required>{{ $Dat }}</textarea>
                                </div>
                            </td>

                            <td> <select class="form-control" name="Posturas[{{ $Dat }}][L]" required>
                                    <option selected disabled value="">Grado
                                    </option>
                                    <option value="L">Leve</option>
                                    <option value="M">Moderado</option>
                                    <option value="S">Severo</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">

                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        value="" name="Posturas[{{ $Dat }}][Observaciones]"
                                        placeholder="Observaciones" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+"
                                        minlength="3">
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <tr>


                </tbody>
            </table>
        </div>



</div>
<button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Enviar
    Datos</button>
</form>
