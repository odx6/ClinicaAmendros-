@extends('layouts.formularios')

@section('formulario')
    <div class="container">
        <h1 style="text-align: center;">AGREGAR MARCHA DEAMBULACION</h1>
               
                <h4>Los datos marcados con <span class="red-asterisk"><span class="red-asterisk">*</span></span>  son obligatorios</h4>
       
        <!---table-->
        <form class="user needs-validation" method="POST" action="{{ route('create.Marcha', ['id' => $id]) }}" novalidate>
            @csrf
            
                <h2>MARCHA DEAMBULACION</h2>
            
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
                                            for="form-custom-switch-success">Ataxia</label>
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
                                    <h2>Observaciones <span class="red-asterisk">*</span></h2>
                                    <div class="form-group mb-4">
                                      
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Observaciones" required pattern="^[a-zA-Z0-9\s.,!?@#$%^&*()-_=+[\]{}|:;'<>/\\]+$"></textarea>
                                        <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese una observación valida
                                     </div>
                                    </div>
                                </td>

                            </tr>


                        </tbody>
                    </table>
                </div>
                <!--end-table-->
          
           
            <!--end-table-->

    </div>
    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Guardar</button>
    </form>
@endsection
