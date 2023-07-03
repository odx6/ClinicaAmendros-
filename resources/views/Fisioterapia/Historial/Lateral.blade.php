
    <div class="container desactivado" id="FiLateral">

        <!---table-->
        
              <div class="container">
                        <h2>Evaluacion Postura</h2>
                        <div class="row">
                            <div class="col-sm">

                                <!---septimo container-->
                                <div class="container">

                                    <div class="container">
                                        <h2>Vista Lateral</h2>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Aliniacion Corporal</th>
                                                                <th scope="col">L</th>
                                                                <th class="text-center" scope="col">M</th>
                                                                <th class="text-center" scope="col">S</th>
                                                                <th class="text-center" scope="col">Observaciones</th>
                                                            </tr>
                                                            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden">
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $Datos = ['Dezplazamiento Anterior al cuerpo', 'Dezplazamiento Posterior del Cuerpo', 'Cabeza Adelantada', 'Vertebras Torácicas:Cifosis', 'Vertebras Torácicas:Pectus Excavatum', 'Pecho en Tonel', 'Pectus Carinatum', 'Columna:Lordosis', 'Espalda Cifotiva(Columna)', 'Espalda Plana(Columna)', 'Inclinacion Ant.de Pelvis y Cadera', 'Inclinacion Post.de Pelvis y Cadera', 'Genu Recurvatum', 'Rodillas Flexionadas'];
                                                                
                                                            @endphp
                                                            @foreach ($Datos as $Dat)
                                                                <tr>
                                                                    <td>
                                                                        
                                                                        <div class="form-group">
                                                          
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1"
                                                                value="{{$Dat}}"
                                                                name="Posturas[{{ $Dat }}][Nombre]"
                                                                placeholder="Observaciones">
                                                        </div>
                                                    </td>
                                                                    <td>  <select class="form-control"
                                                                        name="Posturas[{{ $Dat }}][L]">
                                                                       
                                                                        @for ($i = 0; $i <= 360; $i++)
                                                                            <option value="{{ $i }}">
                                                                                {{ $i }}°</option>
                                                                        @endfor
                                                                    </select>
                                                                    </td>
                                                                    <td>
                                                                          <select class="form-control"
                                                                        name="Posturas[{{ $Dat }}][M]">
                                                                       
                                                                        @for ($i = 0; $i <= 360; $i++)
                                                                            <option value="{{ $i }}">
                                                                                {{ $i }}°</option>
                                                                        @endfor
                                                                    </select>
                                                                    </td>
                                                                    <td>
                                                                        <select class="form-control"
                                                                        name="Posturas[{{ $Dat }}][S]">
                                                                       
                                                                        @for ($i = 0; $i <= 360; $i++)
                                                                            <option value="{{ $i }}">
                                                                                {{ $i }}°</option>
                                                                        @endfor
                                                                    </select>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                          
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1"
                                                                value=""
                                                                name="Posturas[{{ $Dat }}][Observaciones]"
                                                                placeholder="Observaciones">
                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            <tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!---table-->

                                    <!--end table -->
                                </div>

                                <!---end--septimo container-->
                            </div>
                            

                        </div>
                    </div>

            <!--end-table-->

    </div>
  

