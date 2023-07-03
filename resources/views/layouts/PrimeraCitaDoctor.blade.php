 <!-- Modal -->
                    <div class="modal fade" id="FormPrimeraDoctor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Agregar una nueva cita</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form class="needs-validation" novalidate >
                                <div class="modal-body">
    
                                    <div class="row">
                                         
                                            <div class="col-md-12">
                                            <div class="">
                                                <label class="form-label">Nombre del Doctor</label>
                                               <!-- <input id="event-title" type="text" class="form-control">-->
                                                <select class="form-control" name="DOCTOR" id="NombreDoctorP" required>
                                                    @php
                                                   $id=auth()->user()->id;
                                                   $doctores =App\Models\Doctor::where('fk_user', '=', $id)->get();
                                        
                                                    @endphp
                                                   @foreach($doctores as $doctor)
                                                    <option value="{{ $doctor->DSS}}">{{ $doctor->Nombre.' '.$doctor->Apellidos.' '.$doctor->ESPECIALIDAD }}</option>
                                                    @endforeach
                                                    
                                                </select>
                                                <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                        Seleciona un medico valido
                                     </div>
                                            </div>
                                        </div>
                                    
                                         <div class="col-md-12">
                                            <div class="form-control">
                                                <label class="form-label">Nombre del pacente</label>
                                               <input id="NombrePacienteP" type="text" class="form-control" name="Nombre" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2"                                         max="30">
                                                 <div class="valid-feedback">
                                        Nombres del paciente correcto
                                     </div>
                                     <div class="invalid-feedback">
                                         Ingresa un nombre valido
                                     </div>
                                            </div>
                                        </div>
                                          <div class="col-md-12">
                                            <div class="form-control">
                                                <label class="form-label">Telefono</label>
                                               <input id="TelefonoP" type="text" class="form-control" name="Telefono" required minlength="10" maxlength="10" pattern="[0-9]{9,15}">
                                               <div class="valid-feedback">
                                           Telefono Correcto
                                        </div>
                                        <div class="invalid-feedback">
                                            Ingresa un telefono de la forma 9514886716 sin letras ni espacios
                                        </div>
                                                
                                            </div>
                                        </div>
    
                                        <div class="col-md-12 ">
                                            <div class="form-control">
                                                <label class="form-label">Ingresa La fecha de inicio y la hora</label>
                                                <input id="PrimerStar" type="datetime-local" class="form-control" required>
                                                 <div class="valid-feedback">
                                            Datos correctos
                                         </div>
                                         <div class="invalid-feedback">
                                            Ingresa un fecha y hora correcta
                                         </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-success btn-update-event" data-fc-event-public-id="">Actualizar una cita</button>
                                    
                                    <button type="submit" class="btn btn-primary btn-add-event" id="btnPrimera">Agregar Cita</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  <!--end_Calendario-->

                </div>
