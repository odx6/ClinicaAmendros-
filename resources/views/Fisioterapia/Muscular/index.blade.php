@extends('layouts.formularios')
@section('nombreVista', 'Agregar Evaluacion Muscular')

@section('formulario')
    <div class="container">
<h1 style="text-align: center;">AGREGAR PRUEBAS DE MOVILIDAD EVALUACIÓN MUSCULAR</h1>
               
                <h4>Los datos marcados con <span class="red-asterisk"><span class="red-asterisk">*</span></span>  son obligatorios</h4>
        <!---table-->
        <form class="user needs-validation" method="POST" action="{{ route('create.Muscular', ['id' => $id]) }}" novalidate>
            @csrf
           
                <h2>Prueba De Movilidad</h2>
               
                    <div class="row">
                        <h2>Evaluación muscular</h2>
                        <table class="table table-bordered">
                            <thead>

                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Grado 5</th>

                                    <td>Fuerza muscular <br> contra resistencia completa</td>

                                </tr>
                                <tr>
                                    <th scope="row">Grado 4</th>
                                    <td>La fuerza muscular está reducid <br>pero la contracción muscular <br>puede realizar<br>
                                        un movimiento<br> articular contra resistencia. </td>

                                </tr>
                                <tr>
                                    <th scope="row">Grado 3</th>
                                    <td>La fuerza muscular está reducida tanto<br> que el movimiento articular solo<br>
                                        puede realizarse contra la gravedad<br> sin la resistencia del
                                        examinador.<br>Por ejemplo, la articulación del <br>codo puede moverse desde
                                        extension<br> completa hasta flexión completa,<br> comenzando con el brazo<br>
                                        suspendido al lado del cuerpo. </td>

                                </tr>
                                <tr>
                                    <th scope="row">Grado 2</th>
                                    <td>Moviento activo que no puede vencer <br>la fuerza de gravedad.Por ejemplo,<br> el
                                        codo puede flexionarse<br> completamente solo cuando<br> el brazo es mantenido en un<br>
                                        plano horizontal.</td>

                                </tr>
                                <tr>
                                    <th scope="row">Grado 1</th>
                                    <td>Esbozo de contracción muscular</td>

                                </tr>
                                <tr>
                                    <th scope="row">Grado 0'</th>
                                    <td>Ausencia de contracción muscular </td>

                                </tr>

                            </tbody>
                        </table>

                    </div>
                    <div class="row">
                        <h2>Evaluacion de fuerza</h2>
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre del miembro a evaluar <span class="red-asterisk">*</span></th>
                                    

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="col">
                                            
                                            <input type="text" class="form-control form-control-lg"
                                                placeholder="Nombre *" name="Nombre" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$">
                                                 <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un nombre valido 
                                     </div>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="switch-label" for="form-custom-switch-success">Izquierda <span class="red-asterisk">*</span></label>
                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="izquierda" required>
                                            <option selected disabled value="">...
                                                        </option>
                                           
                                            <option value="0">Grado 0</option>
                                            <option value="1">Grado 1</option>
                                            <option value="2">Grado 2</option>
                                            <option value="3">Grado 3</option>
                                            <option value="4">Grado 4</option>
                                            <option value="5">Grado 5</option>
                                        </select>
                                           <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                    Campo obligatorio 
                                     </div>
                                    </td>
                                 </tr>
                                <tr>
                                    
                                    <td>
                                         <label class="switch-label" for="form-custom-switch-success">Derecha <span class="red-asterisk">*</span></label>
                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="Derecha" required>
                                            <option selected disabled value="" >...
                                                        </option>
                                            <option value="0">Grado 0</option>
                                            <option value="1">Grado 1</option>
                                            <option value="2">Grado 2</option>
                                            <option value="3">Grado 3</option>
                                            <option value="4">Grado 4</option>
                                            <option value="5">Grado 5</option>
                                        </select>
                                           <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                    Campo obligatorio 
                                     </div>
                                    </td>
                                    </tr>
                                    
                                   

                            </tbody>
                        </table>
                    </div>
                  
                   
               

            <!--end-table-->

    </div>
    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Guardar</button>
    </form>
@endsection
