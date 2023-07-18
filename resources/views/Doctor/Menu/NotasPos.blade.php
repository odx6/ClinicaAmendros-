  <div class="tab-pane fade" id="rounded-pills-icon-Nota" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
      @if ($Notas_p->isEmpty())
          <div class="widget-content widget-content-area">
              <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4"
                  role="alert">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-alert-circle">
                      <circle cx="12" cy="12" r="10"></circle>
                      <line x1="12" y1="8" x2="12" y2="12"></line>
                      <line x1="12" y1="16" x2="12" y2="16"></line>
                  </svg>
                  <strong>Lo sentimos !</strong> No Hay registros disponibles para el paciente.

              </div>
              <form class="user" method="POST" action="{{ route('NotasPost.Formulario', ['id' => $Paciente->SS]) }}">
                  @csrf
                  <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                      style="display: none;">Agregar nota-post quirurgica</button>
              </form>
          </div>
      @else
          <h2>NOTAS POST QUIRURGICA </h2>
          <!--Antecedentes patologicos-->
          @foreach ($Notas_p as $np)
              <form class="user needs-validation" method="POST"
                  action="{{ route('NotasPost.store', ['IDAG' => $np->idNotaP, 'IDPA' => $np->fk_npq]) }}">
                  @csrf


                  <div class="row mb-4">
                      <div class="col">
                          <label for="formGroupExampleInput">Cirugía programada </label>
                          <input type="date" class="form-control" placeholder="ciruja programada" name="PC"
                              value="{{ $np->ProgramacionC }}" required>
                      </div>
                      <div class="col">
                          <label for="formGroupExampleInput">Ciruguia realizada</label>
                          <input type="date" class="form-control" placeholder="CIRUJIA REALIZADA"
                              name="EJ"value="{{ $np->Ejecucion }}" required>
                      </div>
                  </div>
                  <div class="row mb-4">
                      <div class="col">
                          <label for="formGroupExampleInput">Hallazgos </label>

                          <input type="text" class="form-control" placeholder="Hallazgos"
                              name="HA"value="{{ $np->Hallazgos }}" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                      </div>
                      <div class="col">
                          <label for="formGroupExampleInput">Complicaciones </label>
                          <input type="text" class="form-control" placeholder="COMPLICACIONES"
                              name="CO"value="{{ $np->Complicaciones }}" required
                              pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                      </div>
                  </div>
                  <div class="row mb-4">
                      <div class="col">
                          <label for="formGroupExampleInput">Nombre del cirujano</label>
                          <input type="text" class="form-control" placeholder="Nombre del cirujano "
                              name="NC"value="{{ $np->Nombre_Cirujano }}" required
                              pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                      </div>

                      <div class="col">
                          <label for="formGroupExampleInput">Nombre del ayudante </label>
                          <input type="text" class="form-control" placeholder="Nombre del ayudante"
                              name="NAY"value="{{ $np->Nombre_Ayudante }}" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+"
                              required>
                      </div>
                  </div>
                  <div class="row mb-4">

                      <div class="col">
                          <label for="formGroupExampleInput">Nombre del instrumentista</label>
                          <input type="text" class="form-control" placeholder="nombre instrumentista"
                              name="NI"value="{{ $np->Nombre_Instrumentista }}" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+"
                              required>
                      </div>

                      <div class="col">
                          <label for="formGroupExampleInput">Nombre del anestesiólogo</label>
                          <input type="text" class="form-control" placeholder="Nombre del aniestesiologo"
                              name="NAN"value="{{ $np->Nombre_Aniestesiologo }}"
                              pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" required>
                      </div>
                  </div>
                  <div class="row mb-4">

                      <div class="col">
                          <label for="formGroupExampleInput">Circulante</label>
                          <input type="text" class="form-control" placeholder="circulante"
                              name="CIR"value="{{ $np->Circulante }}" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+"
                              required>
                      </div>
                  </div>
                  <!--end notaspost-->

                  <div class="modal-footer">

                      <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                          style="display: none;">Actualizar</button>
              </form>
              <form class="user" method="POST" action="{{ route('NotasPost.destroy', ['id' => $np->idNotaP]) }}">
                  @csrf
                  <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola"
                      id="Hola" style="display: none;">Eliminar</button>
              </form>
              <form class="user" method="POST"
                  action="{{ route('NotasPost.Formulario', ['id' => $Paciente->SS]) }}">
                  @csrf
                  <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                      id="Hola" style="display: none;">Agregar nota-post quirúrgica</button>
              </form>
  </div>
  @endforeach
  @endif
  </div>
