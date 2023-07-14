 <div class="container desactivado" id="FiFrontal">

     <!---table-->

        <h2>Evaluacion Postura</h2>



            <h2>Vista Frontal</h2>


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
                            $Datos = ['Inclinación Lateral la Cabeza', 'Cabeza Rotada', 'Asimetria Maxilar', 'Clavículas Asimétricas', 'Hombre Capído', 'Hombro Elevado', 'Cubito Valgo', 'Cubito Varo', 'Rotación Interna de Cadera', 'Rotación Externa ', 'Genu Varum', 'Genu Valgum', 'Torsión Tibial Interna', 'Torsión Tibial Externa', 'Hallux Valgus', 'Dedos en Garra', 'Dedos en Martillo'];
                            
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



                    </tbody>
                </table>
            </div>


     <!--end-table-->

 </div>
