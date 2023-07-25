     <!-- Modal -->
     <div class="modal fade" id="FormPrimera" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Agregar una nueva cita</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <form class="needs-validation" novalidate>
                     <div class="modal-body">

                         <div class="row">
                             <div class="col-md-12">
                                 <div class="">
                                     <label class="form-label">Área</label>
                                     <!-- <input id="event-title" type="text" class="form-control">-->
                                     <select class="form-control event-title-area" name="" id="event-title-area"
                                         required>
                                         <option selected disabled value="">Selecciona el area </option>
                                         @php
                                             $Areas = App\Models\Area::all();
                                             
                                         @endphp
                                         @foreach ($Areas as $Area)
                                             <option value="{{ $Area->IDAREA }}">{{ $Area->NOMBE_AREA }}</option>
                                         @endforeach

                                     </select>
                                     <div class="valid-feedback">
                                         Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                         Selecciona un area valida
                                     </div>
                                 </div>
                                 <div class="col-md-12">
                                     <div class="">
                                         <label class="form-label">Nombre del Médico</label>
                                         <!-- <input id="event-title" type="text" class="form-control">-->
                                         <select class="form-control event-title" name="DOCTOR" id="NombreDoctorP"
                                             required>

                                             <option selected disabled value="">Selecciona el medico </option>


                                         </select>
                                         <div class="valid-feedback">
                                             Selección correcta
                                         </div>
                                         <div class="invalid-feedback">
                                             Selecciona un médico
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-md-12">
                                     <div class="">
                                         <label class="form-label">Nombres del paciente</label>
                                         <input id="NombrePacienteP" type="text" class="form-control" name="Nombre"
                                             required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2" max="30">
                                         <div class="valid-feedback">
                                             Nombres del paciente correcto
                                         </div>
                                         <div class="invalid-feedback">
                                             Ingresa un nombre valido
                                         </div>
                                     </div>

                                 </div>
                                 <div class="col-md-12">
                                     <div class="">
                                         <label class="form-label">Apellidos del paciente</label>
                                         <input id="NombreApellidosP" type="text" class="form-control"
                                             name="Apellidos" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="2"
                                             max="30">
                                         <div class="valid-feedback">
                                             Apellidos del paciente correcto
                                         </div>
                                         <div class="invalid-feedback">
                                             Ingresa Apellidos validos para el paciente
                                         </div>
                                     </div>

                                 </div>
                                 <div class="col-md-12">
                                     <div class="">
                                         <label class="form-label">Teléfono</label>
                                         <input id="TelefonoP" type="text" class="form-control" name="Telefono"
                                             required minlength="10" maxlength="10" pattern="[0-9]{9,15}">
                                         <div class="valid-feedback">
                                             Telefono Correcto
                                         </div>
                                         <div class="invalid-feedback">
                                             Ingresa un teléfono de la forma 9514886716 sin letras ni espacios
                                         </div>
                                     </div>

                                 </div>

                                 <div class="col-md-12 ">
                                     <div class="">
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
                             <button type="button" class="btn btn-rounded mb-2 me-4" data-bs-dismiss="modal">Cerrar</button>
                             <button type="submit" class="btn btn-success btn-rounded mb-2 me-4  btn-update-event"
                                 data-fc-event-public-id="">Actualizar una cita</button>

                             <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event" id="btnPrimera">Agregar
                                 Cita</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
         <!--end_Calendario-->

     </div>
