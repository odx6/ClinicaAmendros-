 <div class="container desactivado" id="Fidiagnostico">
     <div class="col">
         <h2>Diagnóstico Médico en Rehabilitación para el paciente {{ $id }} </h2>

          <div class="container">
            <div class="row">
                <div class="col-sm">

                    <div class="input-group">
                        <span class="input-group-text ">Reflejos</span>
                        <textarea class="form-control dime" aria-label="With textarea" name="Reflejos" pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$"  required></textarea>
                    </div>

                </div>
                <div class="col-sm">

                    <div class="input-group">
                        <span class="input-group-text ">Sensibilidad</span>
                        <textarea class="form-control dime" aria-label="With textarea" name="Sensibilidad" pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" required></textarea>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="input-group">
                        <span class="input-group-text">Lenguaje / Orientación</span>
                        <textarea class="form-control dime" aria-label="With textarea" name="LeOr" pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" required></textarea>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="input-group">
                        <span class="input-group-text">Otros</span>
                        <textarea class="form-control dime" aria-label="With textarea" name="Otros" pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$" required></textarea>
                    </div>
                </div>
            </div>
           
        </div>
         <br>
         <br>
     </div>
 </div>
