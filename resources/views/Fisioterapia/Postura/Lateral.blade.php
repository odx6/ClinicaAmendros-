<div class="conteiner">

    <!---table-->
    <form class="user needs-validation" method="POST"
        action="{{ route('create.Postura', ['id' => $id, 'TipoM' => 'Lateral']) }}" novalidate>
        @csrf
        
              <h2>EVALUACIÓN DE POSTURA</h2>
               <h4>Los campos marcados con * son obligatorios </h4>
            
                
                    <!---septimo container-->
                    

                       
                            <h2>Vista Lateral</h2>
                            
                               
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Alineación Corporal</th>
                                                    <th scope="col">GRADOS L M S</th>


                                                </tr>
                                                <tr aria-hidden="true" class="mt-3 d-block table-row-hidden">
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $Datos = ['Desplazamiento Anterior al cuerpo', 'Desplazamiento Posterior del Cuerpo', 'Cabeza Adelantada', 'Vertebras Torácicas:Cifosis', 'Vertebras Torácicas:Pectus Excavatum', 'Pecho en Tonel', 'Pectus Carinatum', 'Columna:Lordosis', 'Espalda Cifotiva(Columna)', 'Espalda Plana(Columna)', 'Inclinación Ant.de Pelvis y Cadera', 'Inclinación Post.de Pelvis y Cadera', 'Genu Recurvatum', 'Rodillas Flexionadas'];
                                                    
                                                @endphp
                                                @foreach ($Datos as $Dat)
                                                    <tr>
                                                        <td>

                                                            <div class="form-group">

                                                                <textarea type="text" class="form-control" id="exampleFormControlInput1" name="Posturas[{{ $Dat }}][Nombre]"
                                                                    placeholder="Observaciones" rows="3" required>{{ $Dat }}</textarea>
                                                                      <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un nombre valido 
                                     </div>
                                                            </div>
                                                        </td>

                                                        <td> <select class="form-control"
                                                                name="Posturas[{{ $Dat }}][L]" required>
                                                                <option selected disabled value="">Grado
                                                                </option>
                                                                <option value="L">Leve</option>
                                                                <option value="M">Moderado</option>
                                                                <option value="S">Severo</option>
                                                            </select>
                                                            <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     El campo es obligatorio
                                     </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group">
                                                                 <span class="input-group-text">Observaciones <span class="red-asterisk">*</span></span>
                                                                <input type="text" class="form-control"
                                                                    id="exampleFormControlInput1" value="N/A"
                                                                    name="Posturas[{{ $Dat }}][Observaciones]"
                                                                    placeholder="Observaciones" required
                                                                    pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" minlength="3">
                                                                    <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una observación valida
                                     </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr>


                                            </tbody>
                                        </table>
                                    </div>
                                

                          
                        
                        <!---table-->

                        <!--end table -->
                   

                    <!---end--septimo container-->
               


            
       

        <!--end-table-->

</div>
<button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Guardar</button>
</form>
