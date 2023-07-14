@extends('layouts.formularios')

@section('formulario')
    <div class="container">
        
        <!---table-->
        <form class="user needs-validation" method="POST" action="{{ route('create.Marcha', ['id' => $id]) }}" novalidate>
            @csrf
            
                <h2>Marcha Deambulacion {{ $id }} </h2>
                <!---table-->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">si no </th>
                                <th scope="col">si no</th>

                            </tr>
                            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div
                                        class="switch form-switch-custom switch-inline form-switch-success">
                                        <label class="switch-label"
                                            for="form-custom-switch-success">Libre</label>
                                        <input class="switch-input" type="checkbox" role="switch"
                                            id="form-custom-switch-success" name="Libre" value="si">

                                    </div>
                                </td>
                                <td>
                                    <div
                                        class="switch form-switch-custom switch-inline form-switch-success">
                                        <label class="switch-label"
                                            for="form-custom-switch-success">Espasticas</label>
                                        <input class="switch-input" type="checkbox" role="switch"
                                            id="form-custom-switch-success" name="Espasticas" value="si">

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div
                                        class="switch form-switch-custom switch-inline form-switch-success">
                                        <label class="switch-label"
                                            for="form-custom-switch-success">Claudicante</label>
                                        <input class="switch-input" type="checkbox" role="switch"
                                            id="form-custom-switch-success" name="Claudicante" value="si">

                                    </div>
                                </td>
                                <td>
                                    <div
                                        class="switch form-switch-custom switch-inline form-switch-success">
                                        <label class="switch-label"
                                            for="form-custom-switch-success">Ataxica</label>
                                        <input class="switch-input" type="checkbox" role="switch"
                                            id="form-custom-switch-success" name="Ataxica" value="si">

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div
                                        class="switch form-switch-custom switch-inline form-switch-success">
                                        <label class="switch-label" for="form-custom-switch-success">Con
                                            ayuda</label>
                                        <input class="switch-input" type="checkbox" role="switch"
                                            id="form-custom-switch-success" name="Con-ayuda" value="si">

                                    </div>
                                </td>
                                <td>
                                    <div
                                        class="switch form-switch-custom switch-inline form-switch-success">
                                        <label class="switch-label"
                                            for="form-custom-switch-success">Otros</label>
                                        <input class="switch-input" type="checkbox" role="switch"
                                            id="form-custom-switch-success" name="Otros" value="si">

                                    </div>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <h2>Observaciones</h2>
                                    <div class="form-group mb-4">
                                      
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Observaciones" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+"></textarea>
                                    </div>
                                </td>

                            </tr>


                        </tbody>
                    </table>
                </div>
                <!--end-table-->
          
           
            <!--end-table-->

    </div>
    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Enviar
        Datos</button>
    </form>
@endsection
