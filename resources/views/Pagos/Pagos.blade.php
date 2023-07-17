@extends('layouts.formularios')
@section('nombreVista', 'Pagos realizados')

@section('formulario')
    <div class="container">

        
  @if(session('mensaje'))
 <div class="alert alert-icon-left alert-light-success alert-dismissible fade show mb-4" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" data-bs-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12" y2="17"></line></svg>
                                        <strong> <strong>Exito!</strong> {{ session('mensaje') }}.
                                    </div>
@endif

                @php
                                                   $id=auth()->user()->id;
                                                   $secretarias =App\Models\Secretaria::where('fk_user', '=', $id)->get();
                                        
                                                    @endphp
                   @foreach($secretarias as $secre)
                                                    
                                                   



        <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">clave del pago</th>
                <th scope="col">clave de consulta</th>
                <th scope="col">Monto</th>
                <th class="text-center" scope="col">Tipo de  pago</th>
                <th class="text-left" scope="col">fecha</th>
                <th class="text-center" scope="col"></th>
            </tr>
            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
        </thead>
        <tbody>
               @if ($secre->Pagos->count() > 0)
               @foreach ($secre->Pagos as $pago)
            <tr>
                <td>
                    <div class="media">
                      {{$pago->pk_pagos}} 
                    </div>
                </td>
                <td>
                    <div class="media">
                      {{$pago->fk_consulta}} 
                    </div>
                </td>
                <td>
                    <div class="media">
                      {{$pago->monto}} $ pesos
                    </div>
                </td>
                
                <td class="text-center">
                    <div class="media">
                      {{$pago->TipoPago}}
                    </div>
                </td>
                <td>
                    <div class="media">
                      {{$pago->created_at}}
                    </div>
                </td>
                <td class="text-center">
                    <div class="action-btns">
                         <a href="{{route('show.Pagos',['id'=>$pago->pk_pagos])}}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Editar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                        </a>
                        <a href="{{route('destroy.Pagos' ,['id'=>$pago->pk_pagos])}}" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="Elimnar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                        </a>
                      
                        
                    </div>
                </td>
            </tr>
            @endforeach
            @else
             <tr><td>No hay consultas registradas aún</td></tr>
            @endif
        </tbody>
    </table>
</div>               
              
 @endforeach
    </div>
   


@endsection
