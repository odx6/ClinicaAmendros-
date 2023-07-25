<div class="container desactivado" id="FisioExplo">

     <div class="container">
                        <form class="user needs-validation" method="POST" action="{{ route('create.FExploracionF', ['id' => $id]) }}" novalidate>
                            @csrf
                            <div class="col">

                                <h2>Exploración Física</h2>
                                <table class="table">

                                    <tbody>

                                        <tr>

                                            <td>
                                                <h3>peso :</h3>
                                            </td>
                                            <td>
                                                <div class="form-group">

                                                    <input type="numeric" class="form-control" 
                                                        placeholder="Peso(Kg)" name="Peso" required pattern="^\d+(\.\d+)?$" title="Ingresa un número entero o decimal válido" id="peso">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <h3>Estatura :</h3>
                                            </td>
                                            <td>
                                                <div class="form-group">

                                                    <input type="numeric" class="form-control" 
                                                       placeholder="Estatura" name="Estatura" pattern="^\d+(\.\d+)?$"  id="altura" required>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <h3>(IMC):</h3>
                                            </td>
                                            <td>
                                                <div class="form-group">

                                                    <input type="text" class="form-control" 
                                                        value="" placeholder="(IMC)" name="IMC" pattern="^\d+(\.\d+)?$" id="resultado" required>
                                                </div>
                                            </td>

                                        </tr>
                                        

                                    </tbody>
                                </table>

                            </div>
                            <div class="col">
                               
                                <h2>Motivo de la consulta</h2>
                                <div class="form-group">

                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        value="N/A" placeholder="Motivo" name="Motivo" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                </div>

                            </div>


                    </div>

</div>

