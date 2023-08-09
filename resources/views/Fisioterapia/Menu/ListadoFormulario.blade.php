<div class="tab-pane fade" id="rounded-pills-icon-formulario" role="tabpanel"
    aria-labelledby="rounded-pills-icon-settings-tab">
    @if ($Formularios->isEmpty())
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
            <form class="user" method="POST" action="{{ route('index.Formulario', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar Formulario de valoración </button>
            </form>
        </div>
    @else
     <h1 style="text-align: center;">FORMULARIO DE VALORACIÓN DE LA BATERÍA BREVE VALORACIÓN FUNCIONAL </h1>
               
                <h4>Los datos marcados con <span class="red-asterisk"><span class="red-asterisk">*</span></span> son obligatorios </h4>
                       
        @foreach ($Formularios as $form)
            <form class="user needs-validation" method="POST"
                action="{{ route('update.Formulario', ['id' => $form->pk_formulario]) }}" novalidate>
                @csrf
                <div class="container">
                    <h2>Formulario de valoración de la batería breve valoración funcional</h2>
                   
                    <div class="row">
                        <div class="col-sm">
                            <h4>Pruebas de equilibrio</h4>
                            <p>El sujeto debe de ser capaz de ponerse de pie, sin ayuda de bastones o andadores.</p>
                            <p>A.Posición con pies juntos <span class="red-asterisk">*</span></p>
                            <div class="form-group">
                                <select class="form-control formulario" name="pregunta1" required>


                                    <option value="0" @if ($form->P_pies_juntos == '0') selected @endif>Se sostuvo
                                        durante 10 segundos</option>
                                    <option value="1" @if ($form->P_pies_juntos == '1') selected @endif>No se
                                        sostuvo durante 10 segundos</option>
                                    <option value="2" @if ($form->P_pies_juntos == '2') selected @endif>Lo intento
                                        pero no fue capaz</option>
                                    <option value="3" @if ($form->P_pies_juntos == '3') selected @endif>El sujeto
                                        no pudo ponerse de pie sin ayuda</option>
                                    <option value="4" @if ($form->P_pies_juntos == '4') selected @endif>No lo
                                        intentó , usted lo notaba inseguro</option>
                                    <option value="5" @if ($form->P_pies_juntos == '5') selected @endif>No lo
                                        intentó el sujeto sentía insenguro </option>
                                    <option value="6" @if ($form->P_pies_juntos == '6') selected @endif>El sujeto
                                        no entendió las instrucciónes</option>
                                    <option value="7" @if ($form->P_pies_juntos == '7') selected @endif>Otro motivo
                                    </option>
                                    <option value="8" @if ($form->P_pies_juntos == '8') selected @endif>El sujeto
                                        rechazo la prueba</option>
                                </select>
                                <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     El campo es obligatorio
                                     </div>
                            </div>
                            <h4>En caso de obtener 0 puntos termine la prueba de equilibrio </h4>

                            <h4>B.Posición de semitándendem <span class="red-asterisk">*</span> </h4>
                            <div class="form-group">
                                <select class="form-control" name="pregunta2" required>

                                    <option value="0" @if ($form->P_semitandem == '0') selected @endif>Se sostuvo
                                        durante 10 segundos</option>
                                    <option value="1" @if ($form->P_semitandem == '1') selected @endif>No se
                                        sostuvo durante 10 segundos</option>
                                    <option value="2" @if ($form->P_semitandem == '2') selected @endif>Lo
                                        intento pero no fue capaz</option>
                                    <option value="3" @if ($form->P_semitandem == '3') selected @endif>El sujeto
                                        no pudo ponerse de pie sin ayuda</option>
                                    <option value="4" @if ($form->P_semitandem == '4') selected @endif>No lo
                                        intentó , usted lo notaba inseguro</option>
                                    <option value="5" @if ($form->P_semitandem == '5') selected @endif>No lo
                                        intentó el sujeto sentía insenguro </option>
                                    <option value="6" @if ($form->P_semitandem == '6') selected @endif>El sujeto
                                        no entendió las instrucciónes</option>
                                    <option value="7" @if ($form->P_semitandem == '7') selected @endif>Otro
                                        motivo</option>
                                    <option value="8" @if ($form->P_semitandem == '8') selected @endif>El sujeto
                                        rechazo la prueba</option>
                                    </select>
                                    <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     El campo es obligatorio
                                     </div>
                            </div>
                            <h4>Número de segundos con equilibrio si es inferior a los 10 segundos</h4>
                            <h4>C.posicion en tándem completo <span class="red-asterisk">*</span></h4>
                            <div class="form-group">
                                <select class="form-control" name="pregunta3" required>

                                    <option value="0" @if ($form->P_tandem == '0') selected @endif>Se
                                        sostuvo durante 10 segundos</option>
                                    <option value="1" @if ($form->P_tandem == '1') selected @endif>No se
                                        sostuvo durante 10 segundos</option>
                                    <option value="2" @if ($form->P_sandem == '2') selected @endif>Lo
                                        intento pero no fue capaz</option>
                                    <option value="3" @if ($form->P_tandem == '3') selected @endif>El sujeto
                                        no pudo ponerse de pie sin ayuda</option>
                                    <option value="4" @if ($form->P_tandem == '4') selected @endif>No lo
                                        intentó , usted lo notaba inseguro</option>
                                    <option value="5" @if ($form->P_tandem == '5') selected @endif>No lo
                                        intentó el sujeto sentía insenguro </option>
                                    <option value="6" @if ($form->P_tandem == '6') selected @endif>El sujeto
                                        no entendió las instrucciónes</option>
                                    <option value="7" @if ($form->P_tandem == '7') selected @endif>Otro
                                        motivo</option>
                                    <option value="8" @if ($form->P_tandem == '8') selected @endif>El sujeto
                                        rechazo la prueba</option>

                                </select>
                                <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     El campo es obligatorio
                                     </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <h4>Número de segundos con equilibrio si es inferior a 10 segundos <span class="red-asterisk">*</span></h4>
                            <div class="form-group">
                                <select class="form-control formulario" name="pregunta4" required>
                                    @for ($i = 1; $i < 10; $i++)
                                        <option
                                            value="{{ $i }}"@if ($form->Segundos == '{{ $i }}') selected @endif>
                                            {{ $i }} segundos </option>
                                    @endfor
                                </select>
                                <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     El campo es obligatorio
                                     </div>
                            </div>



                            <h2>Comentarios <span class="red-asterisk">*</span></h2>
                            <div class="form-group mb-4">

                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="NOT" required
                                    pattern="^[a-zA-Z0-9\s.,!?@#$%^&()-_=+[\]{}|:;'<>/\\]+$">{{ $form->Comentarios }}</textarea>
                                    <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un comentario valido 
                                     </div>

                            </div>

                        </div>

                    </div>
                </div>

                <!--end-table-->
                <div class="modal-footer">

                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                        style="display: none;">Actualizar</button>
            </form>
            <form class="user" method="POST" action="{{ route('index.Formulario', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar Formulario de evaluación
                </button>
            </form>
            <form class="user" method="POST"
                action="{{ route('destroy.Formulario', ['id' => $form->pk_formulario]) }}">
                @csrf
                <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Eliminar</button>
            </form>

</div>
@endforeach
@endif
</div>
