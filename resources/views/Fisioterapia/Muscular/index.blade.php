@extends('layouts.formularios')
@section('nombreVista', 'Agregar Evaluacion Muscular')

@section('formulario')
    <div class="col-sm">

        <!---table-->
        <form class="user" method="POST" action="{{ route('create.Muscular', ['id' => $id]) }}">
            @csrf
            <div class="container">
                <h2>Prueba De Movilidad</h2>
                <div class="container">
                    <div class="row">
                        <h2>Evaluacion muscular</h2>
                        <table class="table table-bordered">
                            <thead>

                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Grado 5</th>

                                    <td>Fuerza muscular contra resistencia completa</td>

                                </tr>
                                <tr>
                                    <th scope="row">Grado 4</th>
                                    <td>La fuerza muscular está reducid pero la contracción muscular puede realizar
                                        un movimiento articular contra resistencia. </td>

                                </tr>
                                <tr>
                                    <th scope="row">Grado 3</th>
                                    <td>La fuerza muscular está reducida tanto que el moviemiento articular solo
                                        puede realizarse contra la gravedad sin la resistencia del
                                        examinadro.<br>Por ejemplo, la articulacion del codo puede moverse desde
                                        extension completa hasta felxión completa, comenzando con el brazo
                                        suspendido al lado del cuerpo. </td>

                                </tr>
                                <tr>
                                    <th scope="row">Grado 2</th>
                                    <td>Moviento activo que no puede vencer la fuerza de gravedad.Por ejemplo, el
                                        codo puede flexionarse completamente solo cuando el brazo es mantenido en un
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
                                    <th scope="col">Nombre del miembro a evaluar</th>
                                    <th scope="col">Izuierda</th>
                                    <th scope="col">Derecha</th>
                                    <th scope="col">Tipo</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="col">
                                            
                                            <input type="text" class="form-control form-control-lg"
                                                placeholder="Nombre del miembro a evaluar" name="Nombre">
                                        </div>
                                    </th>
                                    <td>
                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="izquierda">
                                            <option selected>Elige el grado</option>
                                            <option value="0">Grado 0</option>
                                            <option value="1">Grado 1</option>
                                            <option value="2">Grado 2</option>
                                            <option value="3">Grado 3</option>
                                            <option value="4">Grado 4</option>
                                            <option value="5">Grado 5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="Derecha">
                                            <option selected>Elige el grado</option>
                                            <option value="0">Grado 0</option>
                                            <option value="1">Grado 1</option>
                                            <option value="2">Grado 2</option>
                                            <option value="3">Grado 3</option>
                                            <option value="4">Grado 4</option>
                                            <option value="5">Grado 5</option>
                                        </select>
                                    </td>
                                    <td>
                                        
                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"name="Tipo">
                                            <option selected>Tipo</option>
                                            <option value="Muscular">Evaluación Muscular</option>
                                            <option value="Goniométrica">Evaluación Goniométrica</option>
                                            
                                        </select>
                                    </td>
                                   

                            </tbody>
                        </table>
                    </div>
                  
                   
                </div>

            </div>
            <!--end-table-->

    </div>
    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Enviar
        Datos</button>
    </form>
@endsection
