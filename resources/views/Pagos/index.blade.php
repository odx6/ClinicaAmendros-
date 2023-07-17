@extends('layouts.formularios')
@section('nombreVista', 'Agregar pago')

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
                <th scope="col">clave de consulta</th>
                <th scope="col">Monto</th>
                <th class="text-center" scope="col">Estado</th>
                <th class="text-left" scope="col">fecha</th>
                <th class="text-center" scope="col"></th>
            </tr>
            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
        </thead>
        <tbody>
               @if ($secre->Consultas->count() > 0)
               @foreach ($secre->Consultas as $consulta)
            <tr>
                <td>
                    <div class="media">
                      {{$consulta->pk_consulta}} 
                    </div>
                </td>
                
                <td>
                    <div class="media">
                      {{$consulta->monto}} $ pesos
                    </div>
                </td>
                
                <td class="text-center">
                    <span @if($consulta->Estado=="Pendiente")class="badge badge-light-danger" @else class="badge badge-light-success" @endif> {{$consulta->Estado}}</span>
                </td>
                <td>
                    <div class="media">
                      {{$consulta->created_at}}
                    </div>
                </td>
                <td class="text-center">
                    <div class="action-btns">
                       
                        <a href="{{route('Cobro.Pagos',['id'=>$consulta->pk_consulta])}}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Cobrar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
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
