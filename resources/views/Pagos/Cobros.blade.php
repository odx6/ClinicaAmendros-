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
                   



  <form class="user needs-validation" method="POST" action="{{ route('create.Pagos', ['id' => $Consulta->pk_consulta]) }}" novalidate>
    @csrf

                <form class="row g-3">
   
    <div class="col-12">
        <label for="inputAddress" class="form-label">Consulta : {{$Consulta->pk_consulta}} <br></label>
       
    </div>
     <div class="col-12">
      
        <label for="inputAddress" class="form-label">Monto de la consulta : {{$Consulta->monto}} $pesos<br></label>
    
       
    </div>
    <div class="col-12">
      
    
        <label for="inputAddress" class="form-label">Nombre del doctor : {{$Doctor->Nombre}} {{$Doctor->Apellidos }}<br></label>
       
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Nombre del paciente : {{$Paciente->Nombre}} {{$Paciente->Apellido }}<br></label>
       
    </div>

     <div class="form-group">
        <label for="inputAddress" class="form-label">Secretaria </label>
                            <select class="form-control formulario" name="secretaria" required>
                                 <option selected disabled value="">Secretaria </option>
                                @foreach($secretarias as $secre)
                                    <option value="{{ $secre->pk_secretaria}}">
                                        {{ $secre->Nombre }}  {{ $secre->Apellidos }} </option>
                                @endforeach
                            </select>
    </div>
                            
     <div class="form-group">
        <label for="inputAddress" class="form-label">Monto a pagar </label>

        <input type="numeric" class="form-control"
                            id="exampleFormControlInput1" value="{{$Consulta->monto}}"
                            placeholder="Especificaciones Tabaquismo" name="Monto" pattern="^\d+(?:\.\d{1,2})?$" required >
                        </div>
                          <div class="form-group">
                       <label for="inputAddress" class="form-label">Tipo de pago </label>
                            <select class="form-control formulario" name="TipoPago"   required>
                                 <option selected disabled value="">Tipo de pago</option>
                                 <option  value="Efectivo">Efectivo</option>
                                 <option  value="Efectivo">Tarjeta</option>
                              
                            </select>
                            <br>
    </div>
                        </div>
                       




      <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Enviar
        Datos</button>
</form>
    </div>
   


@endsection
