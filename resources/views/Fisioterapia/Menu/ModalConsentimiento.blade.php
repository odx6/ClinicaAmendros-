<div id="rotateleftModal" class="modal animated rotateInDownLeft custo-rotateInDownLeft" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h1 style="text-align: center;">TRATAMIENTOS</h1>
               
                <h4>Los datos marcados con <span class="red-asterisk"><span class="red-asterisk">*</span></span> son obligatorios </h4>
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="row mb-4">
                    <form action="{{ route('Consentimeinto.pdf', ['id' => $Paciente->SS]) }}" method="POST" >
                        @csrf
                        <div class="col">
                            <label for="formGroupExampleInput">Nombre del representante legal, familiar o
                                allegado <span class="red-asterisk">*</span>:</label>
                            <input type="text" class="form-control" placeholder="Nombre del representante legal:"
                                name="Nombre">
                                <div class="valid-feedback">
                                            Datos correctos
                                         </div>
                                         <div class="invalid-feedback">
                                            Ingrese un nombre valido 
                                         </div>
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput">Domicilio del representante legal <span class="red-asterisk">*</span></label>
                            <input type="text" class="form-control" placeholder="Domicilio del representante"
                                name="Domicilio">
                                 <div class="valid-feedback">
                                            Datos correctos
                                         </div>
                                         <div class="invalid-feedback">
                                            Ingrese un domicilio valido 
                                         </div>

                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput">Edad del representante familiar o allegado <span class="red-asterisk">*</span>:</label>
                            <select class="form-control selects" name="Edad">
                                @for ($i = 1; $i <= 100; $i++)
                                    <option value="{{ $i }}">{{ $i }}
                                    </option>
                                @endfor
                            </select>
                            <div class="valid-feedback">
                                            Datos correctos
                                         </div>
                                         <div class="invalid-feedback">
                                            El campo es obligatorio
                                         </div>
                        </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <label for="formGroupExampleInput">Calidad en la que llega el paciente <span class="red-asterisk">*</span></label>
                        <input type="text" class="form-control" placeholder="Calidad en la que llega el paciente"
                            name="Calidad">
                            <div class="valid-feedback">
                                            Datos correctos
                                         </div>
                                         <div class="invalid-feedback">
                                            Ingrese  en calidad en que llega el paciente 
                                         </div>
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput">Tratamiento o procedimiento <span class="red-asterisk">*</span></label>
                        <input type="text" class="form-control" placeholder="Tratamiento o procedimiento"
                            name="Tratamiento">
                            <div class="valid-feedback">
                                            Datos correctos
                                         </div>
                                         <div class="invalid-feedback">
                                            Ingrese  un tratamiento valido para el paciente
                                         </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <div class="col-sm-10 offset-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1" value="1"
                                    name="Revocar">
                                <label class="form-check-label" for="gridCheck1">
                                    formato con revocacionde concentimiento
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col-sm-10 offset-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1" value="1"
                                    name="NoAcepta">
                                <label class="form-check-label" for="gridCheck1">
                                    El paciente se niega a recibir el tratamiento
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer md-button">
                    <button class="btn" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i>
                        cancelar</button>
                    <button type="submit" class="btn btn-primary">Generar</button>
                </div>
            </div>
            </form>
        </div>
    </div>


  



</div>
