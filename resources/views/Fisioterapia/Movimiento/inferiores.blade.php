@extends('layouts.formularios')
@section('nombreVista', 'Agregar Prueba de movilidad para miembros inferiores')

@section('formulario')
    <div class="col-sm">

        <!---table-->
        <form class="user needs-validation" method="POST" action="{{ route('create.MSuperiores', ['id' => $id, 'TipoM'=>'Inferior']) }}" novalidate>
            @csrf
            <div class="container">
                <h2>Prueba de Arcos de movilidad de miembros inferiores</h2>

                <div class="row">
                   
                    <div class="col-sm">
                        <h2>Miembro</h2>
                          <input type="text" class="form-control form-control-lg"
                                                        placeholder="Nombre del miembro a evaluar" name="NombreMiembro" placeholder="Nombre del miembro a evaluar"  required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="3">
                        <div class="container">
                            <br>
                            <div class="table-responsive"> 
    <table class="table" id="tablamiembroS">
        <thead>
            <tr>
                <th scope="col">Movimiento</th>
                <th scope="col">Grados</th>
                
                <th class="text-center" scope="col">Acción</th>
            </tr>
            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
        </thead>
        <tbody>
            <div id="elementoOriginal">
            <tr>
                <td>
                    <input type="text" class="form-control form-control-lg"
                                                        placeholder="Nombre del movimiento" name="Movimientos[movimento][Nombre]" value="" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="3">
                </td>
                <td>
                     <select class="form-control" name="Movimientos[movimento][Valor]" required>
                                        <option selected disabled value="">Selecciona el grado </option>

                                        @for ($i = 0; $i <= 360; $i++)
                                            <option value="{{ $i }}">{{ $i }}°</option>
                                        @endfor
                                    </select>
                   
                </td>
               
                <td class="text-center">
                <div class="action-btns">
                  <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="Delete" id="Enlace">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                        </a>
                        <a href="#" class="action-btn btn-delete bs-tooltip Eliminar" data-toggle="tooltip" data-placement="top" title="Delete" > <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> </a>
                        
                    </div>
                </td>
            
           
            
        </tbody>
    </table>
</div>
                         

                        </div>

                    </div>
                  


                </div>

                <div class="input-group">
                    <span class="input-group-text">Observaciones</span>
                    <textarea class="form-control" aria-label="With textarea" name="observaciones" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" ></textarea>
                </div>
                <br>
                <br>
            </div>
            <!--end-table-->

    </div>
    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Enviar
        Datos</button>
    </form>
    
@endsection
