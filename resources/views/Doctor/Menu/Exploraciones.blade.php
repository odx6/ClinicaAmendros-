 <div class="tab-pane fade" id="rounded-pills-icon-Ex" role="tabpanel"
        aria-labelledby="rounded-pills-icon-settings-tab">
        @if ($Exploraciones->isEmpty())
            <div class="widget-content widget-content-area">
                <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4"
                    role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-alert-circle">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12" y2="16"></line> 
                    </svg>
                    <strong>Lo sentimos !</strong> No Hay registros disponibles para el paciente.

                </div>
                <form class="user" method="POST"
                    action="{{ route('Exploracion.Formulario', ['id' => $Paciente->SS]) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                        id="Hola" style="display: none;">Agregar exploración física del paciente</button>
                </form>
            </div>
        @else
            @foreach ($Exploraciones as $Ex)
                <form class="user needs-validation" method="POST" action="{{ route('Exploracion.store',['IDAG'=>$Ex->pk_Exploracion,'IDDOC'=>$Ex->fk_d ,'IDPA'=> $Ex->fk_p]) }}" novalidate>
                    @csrf
                     <h1 style="text-align: center;">EXPLORACIÓN FÍSICA</h1>
                   
                    <h4>Los campos marcados con <span class="red-asterisk">*</span> son obligatorios </h4>
                                <div class="row mb-4">
                   
                                     <div class="row mb-4">
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        T/A <span class="red-asterisk">*</span></label>
                                        <input type="text" class="form-control"  value="{{ $Ex->TA }}" placeholder="T/A"
                                            name="T/A" pattern="^[0-9]+(?:\/[0-9]+)?$" required>
                                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un valor numérico por ejemplo 80/100
                                     </div>
                                
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        FC <span class="red-asterisk">*</span> </label>
                                        <input type="number" class="form-control" placeholder="FC"
                                            name="FC" value="{{ $Ex->FC }}" pattern="^\d+(\.\d+)?$" required>
                                            <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un valor numérico valido
                                     </div>
                                    
                                </div>
                            </div>
                            <div class="row mb-4">
                              
                                <div class="col">
                                    <label for="formGroupExampleInput">
                                        FR <span class="red-asterisk">*</span></label>
                                         <input type="number" class="form-control" placeholder="FR"
                                            name="FR" value="{{ $Ex->FR}}" pattern="^\d+(\.\d+)?$" required>
                                             <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un valor numérico valido
                                     </div>
                                  
                                </div>
                            </div>
                                

                    
</div>

                                
                    

                    <div class="row mb-4">
                        
                        <div class="row mb-4">
                            <div class="col">
                                <label for="formGroupExampleInput">Temperatura <span class="red-asterisk">*</span></label>
                                <input type="number" class="form-control" placeholder="TEMPERATURA" name="TEMP"
                                    value="{{ $Ex->TEMP }}" pattern="^\d+(\.\d+)?$" required>
                                     <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un valor numérico valido
                                     </div>
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">Peso (KG) <span class="red-asterisk">*</span></label>
                                <input type="number" class="form-control" placeholder="PESO (KG)" name="PESO"
                                    value="{{ $Ex->PESO }}" pattern="^\d+(\.\d+)?$" required>
                                     <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un valor numérico para el peso 
                                     </div>
                            </div>
                            </div>

                                <div class="row mb-4">
                            <div class="col">
                                <label for="formGroupExampleInput">Nombre de exploración <span class="red-asterisk">*</span></label>
                                <input type="text" class="form-control" placeholder="Exploracion Cabeza"
                                    name="NEF" value="{{ $Ex->Nombre_ef }}" pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="5" required>
                                     <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un nombre valido
                                     </div>
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">Cabeza <span class="red-asterisk">*</span> </label>
                                <input type="text" class="form-control" placeholder="Exploracion Cabeza"
                                    name="CAEF" value="{{ $Ex->Cabeza_ef }}" pattern="^[a-zA-Z0-9\s.,!?@#$%^&()-_=+[\]{}|:;'<>/\\]+$" minlength="2" required value="N/A">
                                     <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una exploración valida para la cabeza
                                     </div>
                            </div>
                            </div>

                                <div class="row mb-4">
                            <div class="col">
                                <label for="formGroupExampleInput">Cuello <span class="red-asterisk">*</span></label>
                                <input type="text" class="form-control" placeholder="Exploracion cuello  "
                                    name="CUEF" value="{{ $Ex->Cuello_ef }}"  pattern="^[a-zA-Z0-9\s.,!?@#$%^&()-_=+[\]{}|:;'<>/\\]+$" minlength="2"required value="N/A">
                                      <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una exploración valida para la cuello
                                     </div>
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">Abdomen  <span class="red-asterisk">*</span></label>
                                <input type="text" class="form-control" placeholder="Exploracion abdomen "
                                    name="ABEF" value="{{ $Ex->Abdomen_ef }}" pattern="^[a-zA-Z0-9\s.,!?@#$%^&()-_=+[\]{}|:;'<>/\\]+$" minlength="2" required value="N/A">
                                      <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una exploración valida para la abdomen
                                     </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label for="formGroupExampleInput">Miembro pelvico <span class="red-asterisk">*</span></label>
                                <input type="text" class="form-control" placeholder="Exploracion miembro pelvico"
                                    name="MP" value="{{ $Ex->Miembro_pelvico_ef }}"pattern="^[a-zA-Z0-9\s.,!?@#$%^&()-_=+[\]{}|:;'<>/\\]+$" minlength="2" required value="N/A">
                                      <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una exploración valida para el miembro pelvico
                                     </div>
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput">Miembro toraxico <span class="red-asterisk">*</span></label>
                                <input type="text" class="form-control" placeholder="Exploracion miembro toraxico"
                                    name="MT" value="{{ $Ex->Miembro_toraxico_ef }}" pattern="^[a-zA-Z0-9\s.,!?@#$%^&()-_=+[\]{}|:;'<>/\\]+$" minlength="2" required value="N/A">
                                      <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una exploración valida para el miembro toraxico
                                     </div>
                            </div>

                        </div>

                    </div>
                    <!----- end Notas--->
                    <!--end notaspost-->
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success btn-rounded mb-2 me-4  btn-add-event Hola"
                            style="display: none;">Actualizar</button>
                </form>
                <form class="user" method="POST"
                    action="{{ route('Exploracion.destroy', ['id' => $Ex->pk_Exploracion]) }}">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola"
                        id="Hola" style="display: none;">Eliminar</button>
                </form>
                <form class="user" method="POST"
                    action="{{ route('Exploracion.Formulario', ['id' => $Paciente->SS]) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                        id="Hola" style="display: none;">Agregar Exploracion</button>
                </form>
    </div>
    @endforeach
    </div>
    @endif
    </div>