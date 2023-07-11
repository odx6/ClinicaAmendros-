<div class="container desactivado" id="FiForm">

    <!---table-->
    <form class="user" method="POST" action="{{ route('create.Formulario', ['id' => $id]) }}">
        @csrf
        <div class="container">
            <h2>Formulario de valoración de la batería breve valoración funcional</h2>
            <div class="row">
                <div class="col-sm">
                    <h4>Pruebas de equilibrio</h4>
                    <p>El sujeto debe de ser capaz de ponerse de pie, sin ayuda de bastones o andadores.</p>
                    <p>A.Posición con pies juntos</p>
                    <div class="form-group">
                        <select class="form-control formulario" name="pregunta1">
                            <option value="1">(1)Se sostuvo durante 10 segundos</option>
                            <option value="0">(0)No se sostuvo durante 10 segundos o No lo intento</option>
                        </select>
                    </div>
                    <h4>En caso de obtener 0 puntos termine la prueba de equilibrio</h4>

                    <h4>B.Posición de semitándendem </h4>
                    <div class="form-group">
                        <select class="form-control" name="pregunta2">
                            <option value="1">(1)Se sostuvo durante 10 segundos</option>
                            <option value="0">(0)No se sostuvo durante 10 segundos o No lo intento</option>
                        </select>
                    </div>
                    <h4>Número de segundos con equilibrio si es inferior a los 10 segundos</h4>
                    <h4>C.posicion en tándem completo</h4>
                    <div class="form-group">
                        <select class="form-control formulario" name="pregunta3">
                            <option value="2">(2)Se sostuvo durante 10 segundos</option>
                            <option value="1">(1)No se sostuvo durante 3 a 9 segundos</option>
                            <option value="1">(0)No se sostuvo durante al menos 3 seg o no lo intento</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm">
                    <h4>Número de segundos con equilibrio si es inferior a 10 segundos </h4>
                    <div class="form-group">
                        <select class="form-control formulario" name="pregunta4">
                            @for ($i = 1; $i < 10; $i++)
                                <option value="{{ $i }}">
                                    {{ $i }} segundos </option>
                            @endfor
                        </select>
                    </div>
                    <h4>D.Puntuación total de equilibrio(Suma de puntos ) </h4>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleFormControlInput1" value=""
                            name="total" placeholder="puntuacion">
                    </div>


                    <h2>Comentarios</h2>
                    <div class="form-group mb-4">

                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="NOT"></textarea>
                    </div>

                </div>

            </div>
        </div>

</div>
