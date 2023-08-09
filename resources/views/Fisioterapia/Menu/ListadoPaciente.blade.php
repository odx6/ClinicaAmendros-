<div class="tab-pane fade show active" id="rounded-pills-icon-home"
                                                role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">
                                                <!---Datos Paciente-->
                                                @if ($Paciente == null)
                                                    <div class="widget-content widget-content-area">
                                                        <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4"
                                                            role="alert">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-alert-circle">
                                                                <circle cx="12" cy="12" r="10">
                                                                </circle>
                                                                <line x1="12" y1="8" x2="12"
                                                                    y2="12"></line>
                                                                <line x1="12" y1="16" x2="12"
                                                                    y2="16"></line>
                                                            </svg>
                                                            <strong>Lo sentimos !</strong> No Hay registros disponibles para
                                                            el paciente.
                                                        </div>

                                                    </div>
                                                @else
                                                     <form class="user needs-validation" method="POST"
              action="{{ route('paciente.update', ['Identificador' => $Paciente->SS, 'Doctor' => $Paciente->PacienteDoctor]) }}"
              novalidate>

              @csrf
               <h1 style="text-align: center;">DATOS DEL PACIENTE</h1>
               
                <h4>Los datos marcados con <span class="red-asterisk"><span class="red-asterisk">*</span></span>  son obligatorios</h4>



              <div class="row mb-4">
                  <div class="col">
                      <label for="formGroupExampleInput">Nombre <span class="red-asterisk">*</span></label>
                      <input type="text" class="form-control " placeholder="Nombre del paciente " name="Nombre"
                          value="{{ $Paciente->Nombre }}" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+${3,30}" required>

                            <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                         Selecciona un Nombre que contega solo letras
                                     </div>
                  </div>
                  <div class="col">
                      <label for="formGroupExampleInput">Apellidos <span class="red-asterisk">*</span></label>
                      <input type="text" class="form-control" placeholder="Apellido del paciente" name="Apellido"
                          value="{{ $Paciente->Apellido }}" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+${3,30}" required>
                           <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                         Selecciona Apellidos  que contega solo letras
                                     </div>
                  </div>
              </div>
              <div class="row mb-4">
                  <div class="col">
                      <label for="formGroupExampleInput">Edad <span class="red-asterisk">*</span></label>
                      <select class="form-control selects" name="Edad" required>
                          <option value="{{ $Paciente->Edad }}">
                              {{ $Paciente->Edad }}
                          </option>
                          @for ($i = 1; $i <= 100; $i++)
                              <option value="{{ $i }}">
                                  {{ $i }}
                              </option>
                          @endfor
                      </select>
                       <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                         Seleccione una edad correcta
                                     </div>
                  </div>
                  <div class="col">
                      <label for="formGroupExampleInput">Sexo <span class="red-asterisk">*</span></label>
                      <select class="form-control selects" name="Sexo" required>
                    

                          <option value="M" @if ($Paciente->Sexo == 'M')
                                 selected
                              @endif>Masculino</option>
                          <option value="F" @if ($Paciente->Sexo == 'F')
                                 selected
                              @endif>Femenino</option>

                      </select>
                       <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                        el campo sexo es obligatorio 
                                     </div>
                  </div>

              </div>
              <div class="row mb-4">
                  <div class="col">
                      <label for="formGroupExampleInput">Estado civil <span class="red-asterisk">*</span></label>
                      <input type="text" class="form-control" placeholder="Estado civil del paciente "
                          name="Estado_civil" value="{{ $Paciente->Estado_civil }}" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+${3,30}"
                          required>
                           <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                        Ingresa un estado civil valido
                                     </div>
                  </div>
                  <div class="col">
                      <label for="formGroupExampleInput">Origen <span class="red-asterisk">*</span> </label>
                      <input type="text" class="form-control" placeholder="Origen el paciente" name="Origen"
                          value="{{ $Paciente->Origen }}" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+${3,30}" required>
                          <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                        Ingresa un origen civil valido
                                     </div>
                  </div>
              </div>
              <div class="row mb-4">
                  <div class="col">
                      <label for="formGroupExampleInput">Ocupación <span class="red-asterisk">*</span></label>
                      <input type="text" class="form-control" placeholder="Ocupacion del paciente" name="Ocupacion"
                          value="{{ $Paciente->Ocupacion }}" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+${3,30}" required>
                          <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                        Ingresa una  ocupación valida
                                     </div>
                  </div>


              </div>
              <div class="row mb-4">

                  <div class="col">
                      <label for="formGroupExampleInput">Dirección <span class="red-asterisk">*</span> </label>
                      <input type="text" class="form-control" placeholder="Direccion del paciente" name="Direccion"
                          value="{{ $Paciente->Direccion }}" required pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñ0-9.#\s]+$">
                           <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                        Ingresa una  dirección valida valida
                                     </div>
                  </div>
                  <div class="col">
                      <label for="formGroupExampleInput">Teléfono <span class="red-asterisk">*</span> </label>
                      <input type="numeric" class="form-control" placeholder="Telefono del paciente" name="Telefono"
                          value="{{ $Paciente->Telefono }}" required>
                          <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                       Ingresa un teléfono valido 
                                     </div>

                  </div>
              </div>
              <div class="row mb-4">
                  <div class="col">
                      <label for="formGroupExampleInput">Religión <span class="red-asterisk">*</span></label>
                      <input type="text" class="form-control" placeholder="Religion del paciente" name="Religion"
                          value="{{ $Paciente->Religion }}" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+${3,30}" required>

                            <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                       Ingresa una religión valida 
                                     </div>
                  </div>
              </div>
              <div class="row mb-4">

                  <div class="col">
                      <label for="formGroupExampleInput">Escolaridad </label>
                      <input type="text" class="form-control" placeholder="Escolaridad del paciente"
                          name="Escolaridad" value="{{ $Paciente->Escolaridad }}" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+${3,30}"> <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                       Ingresa  un grado de estudios valido 
                                     </div>
                  </div>
                  <div class="col">
                      <label for="formGroupExampleInput">Fecha de Ingreso <span class="red-asterisk">*</span></label>
                      <input type="date" class="form-control" placeholder="FechaIngreso" name="FechaIngreso"
                          value="{{ $Paciente->FechaIngreso }}">
                          <div class="valid-feedback">
                                            Dato  correcto
                                        </div>
                                        <div class="invalid-feedback">
                                            el campo es requerido 
                                        </div>
                  </div>
              </div>
              <div class="row mb-4">
                  <div class="col">
                      <label for="formGroupExampleInput">Fecha de Salida</label>
                      <input type="date" class="form-control" placeholder="FechaIngreso" name="FechaSalida"
                          value="{{ $Paciente->FechaSalida }}">
                          <div class="valid-feedback">
                                            Dato  correcto
                                        </div>
                                        <div class="invalid-feedback">
                                            el campo es requerido 
                                        </div>
                  </div>
              </div>
             <div class="modal-footer">

                  <button type="submit" class="btn btn-success  btn-rounded mb-2 me-4  btn-add-event Hola"
                      id="Hola2" style="display: none;">Actualizar</button>
          </form>
          <form class="user" method="POST" action="{{ route('paciente.destroy', ['id' => $Paciente->SS]) }}">
              @csrf
              <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                  style="display: none;">Eliminar</button>
          </form>
          <form class="user" method="GET" action="{{ route('paciente.index') }}">
              @csrf
              <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                  style="display: none;">Agregar
                  Paciente</button>
          </form>

  </div>
                                            <!--End-Datos-Paciente-->
                                            @endif

                                        </div>
                                        <!--end-Pacinete--->