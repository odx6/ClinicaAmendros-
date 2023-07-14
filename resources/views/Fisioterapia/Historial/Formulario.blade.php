<div class="container desactivado" id="FiForm">

    <!---table-->
    
      <div class="container">
                <h2>Formulario de valoración de la batería breve valoración funcional</h2>
                <div class="row">
                    <div class="col-sm">
                        <h4>Pruebas de equilibrio</h4>
                        <p>El sujeto debe de ser capaz de ponerse de pie, sin ayuda de bastones o andadores.</p>
                        <p>A.Posición con pies juntos</p>
                        <div class="form-group">
                            <select class="form-control formulario" name="pregunta1" required>
                                 <option selected disabled value="">Respuesta </option>
                                 <option value="0">Se sostuvo durante 10 segundos</option>
                                <option value="1">No se sostuvo durante 10 segundos</option>
                                <option value="2">Lo intento pero no fue capaz</option>
                                <option value="3">El sujeto no pudo ponerse de pie sin ayuda</option>
                                <option value="4">No lo intentó , usted lo notaba inseguro</option>
                                <option value="5">No lo intentó el sujeto sentía insenguro </option>
                                <option value="6">El sujeto no entendió las instrucciónes</option>
                                <option value="7">Otro motivo</option>
                                <option value="7">El sujeto rechazo la prueba</option>
                            </select>
                        </div>
                        <h4>En caso de obtener 0 puntos termine la prueba de equilibrio</h4>

                        <h4>B.Posición de semitándendem </h4>
                        <div class="form-group">
                            <select class="form-control" name="pregunta2" required>
                                 <option selected disabled value="">Respuesta </option>
                                <option value="0">Se sostuvo durante 10 segundos</option>
                                <option value="1">No se sostuvo durante 10 segundos</option>
                                <option value="2">Lo intento pero no fue capaz</option>
                                <option value="3">El sujeto no pudo ponerse de pie sin ayuda</option>
                                <option value="4">No lo intentó , usted lo notaba inseguro</option>
                                <option value="5">No lo intentó el sujeto sentía insenguro </option>
                                <option value="6">El sujeto no entendió las instrucciónes</option>
                                <option value="7">Otro motivo</option>
                                <option value="7">El sujeto rechazo la prueba</option>
                            </select>
                        </div>
                        <h4>Número de segundos con equilibrio si es inferior a los 10 segundos</h4>
                        <h4>C.posicion en tándem completo</h4>
                        <div class="form-group">
                            <select class="form-control formulario" name="pregunta3" required>
                                 <option selected disabled value="">Respuesta </option>
                                 <option value="0">Se sostuvo durante 10 segundos</option>
                                <option value="1">No se sostuvo durante 10 segundos</option>
                                <option value="2">Lo intento pero no fue capaz</option>
                                <option value="3">El sujeto no pudo ponerse de pie sin ayuda</option>
                                <option value="4">No lo intentó , usted lo notaba inseguro</option>
                                <option value="5">No lo intentó el sujeto sentía insenguro </option>
                                <option value="6">El sujeto no entendió las instrucciónes</option>
                                <option value="7">Otro motivo</option>
                                <option value="7">El sujeto rechazo la prueba</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm">
                        <h4>Número de segundos con equilibrio si es inferior a 10 segundos </h4>
                        <div class="form-group">
                            <select class="form-control formulario" name="pregunta4" required>
                                 <option selected disabled value="">Segundos </option>
                                @for ($i = 1; $i < 10; $i++)
                                    <option value="{{ $i }}">
                                        {{ $i }} segundos </option>
                                @endfor
                            </select>
                        </div>
                       


                        <h2>Comentarios</h2>
                        <div class="form-group mb-4">

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="NOT" required  pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+"></textarea>
                        </div>

                    </div>

                </div>
            </div>
</div>
