@extends('layouts.formularios')

@section('formulario')
    <div class="col-sm">
       <h1 style="text-align: center;">AGREGAR CICATRIZ QUIRÚRGIA</h1>
               
                <h4>Los datos marcados con <span class="red-asterisk">*</span>  son obligatorios</h4>
        <!---table-->
        <form class="user needs-validation" method="POST" action="{{ route('create.Cicatriz', ['id' => $id]) }}" novalidate>
            @csrf
            <h2>CICATRIZ QUIRÚRGIA</h2>
              
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
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Sitio <span class="red-asterisk">*</span></label>
                                    <input class="form-control" type="text" 
                                       name="Sitio" value="" required  pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+">
                                         <div class="valid-feedback">
                                        Dato correcto
                                     </div>
                                     <div class="invalid-feedback">
                                     Ingrese un sitio valido 
                                     </div>

                                </div>
                            </td>
                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Queloide</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Queloide" value="si">

                                </div>
                            </td>
                             </tr>
                            <tr>
                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Retractil</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Retractil" value="si">

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Abierta</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Abierta" value="si">

                                </div>
                            </td>
                             </tr>
                            <tr>
                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Con
                                        Aderencia</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Con-Aderencia" value="si">

                                </div>
                            </td>
                            <td>
                                <div class="switch form-switch-custom switch-inline form-switch-success">
                                    <label class="switch-label" for="form-custom-switch-success">Hipertrófica</label>
                                    <input class="switch-input" type="checkbox" role="switch"
                                        id="form-custom-switch-success" name="Hipertrófica" value="si">

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
