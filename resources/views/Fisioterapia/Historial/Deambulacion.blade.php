 <div class="container desactivado" id="FisioDeam">

     <!---table-->


     <div class="col-sm">
         <h2>Marcha Deambulatorio {{ $id }} </h2>
         <!---table-->
         <div class="table-responsive">
             <table class="table">
                 <thead>
                     <tr>
                         <th scope="col">si no </th>
                         <th scope="col">si no</th>

                     </tr>
                     <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td>
                             <div class="switch form-switch-custom switch-inline form-switch-success">
                                 <label class="switch-label" for="form-custom-switch-success">Libre</label>
                                 <input class="switch-input" type="checkbox" role="switch"
                                     id="form-custom-switch-success" name="Libre" value="si">

                             </div>
                         </td>
                         <td>
                             <div class="switch form-switch-custom switch-inline form-switch-success">
                                 <label class="switch-label" for="form-custom-switch-success">Espasticas</label>
                                 <input class="switch-input" type="checkbox" role="switch"
                                     id="form-custom-switch-success" name="Espasticas" value="si">

                             </div>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <div class="switch form-switch-custom switch-inline form-switch-success">
                                 <label class="switch-label" for="form-custom-switch-success">Claudicante</label>
                                 <input class="switch-input" type="checkbox" role="switch"
                                     id="form-custom-switch-success" name="Claudicante" value="si">

                             </div>
                         </td>
                         <td>
                             <div class="switch form-switch-custom switch-inline form-switch-success">
                                 <label class="switch-label" for="form-custom-switch-success">Ataxia</label>
                                 <input class="switch-input" type="checkbox" role="switch"
                                     id="form-custom-switch-success" name="Ataxica" value="si">

                             </div>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <div class="switch form-switch-custom switch-inline form-switch-success">
                                 <label class="switch-label" for="form-custom-switch-success">Con
                                     ayuda</label>
                                 <input class="switch-input" type="checkbox" role="switch"
                                     id="form-custom-switch-success" name="Con-ayuda" value="si">

                             </div>
                         </td>
                         <td>
                             <div class="switch form-switch-custom switch-inline form-switch-success">
                                 <label class="switch-label" for="form-custom-switch-success">Otros</label>
                                 <input class="switch-input" type="checkbox" role="switch"
                                     id="form-custom-switch-success" name="DeamOtros" value="si">

                             </div>
                         </td>


                     </tr>
                     <tr>
                         <td>
                             <h2>Observaciones</h2>
                             <div class="form-group mb-4">
                                
                                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Observaciones" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" required></textarea>
                             </div>
                         </td>

                     </tr>


                 </tbody>
             </table>
         </div>
         <!--end-table-->
     </div>

     <!--end-table-->

 </div>
