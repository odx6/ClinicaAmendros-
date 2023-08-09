@extends('layouts.formularios')
@section('nombreVista', 'Agregar pago')

@section('formulario')
    <div class="container">
 <h1 style="text-align: center;">AGREGAR PAGO </h1>
        
  @if(session('mensaje'))
 <div class="alert alert-icon-left alert-light-success alert-dismissible fade show mb-4" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" data-bs-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
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
        <label for="inputAddress" class="form-label">Secretaria  <span class="red-asterisk">*</span></label>
                            <select class="form-control formulario" name="secretaria" required>
                                 <option selected disabled value="">Secretaria </option>
                                @foreach($secretarias as $secre)
                                    <option value="{{ $secre->pk_secretaria}}">
                                        {{ $secre->Nombre }}  {{ $secre->Apellidos }} </option>
                                @endforeach
                            </select>
                              <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                        El campo es obligatorio
                                    </div>
    </div>
                            
     <div class="form-group">
        <label for="inputAddress" class="form-label">Monto a pagar <span class="red-asterisk">*</span></label>

        <input type="numeric" class="form-control"
                            id="exampleFormControlInput1" value="{{$Consulta->monto}}"
                            placeholder="Especificaciones Tabaquismo" name="Monto" pattern="^\d+(?:\.\d{1,2})?$" required > 
                              <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                        Ingrese un monto valido
                                    </div>
                        </div>
                          <div class="form-group">
                       <label for="inputAddress" class="form-label">Tipo de pago <span class="red-asterisk">*</span></label>
                            <select class="form-control formulario" name="TipoPago"   required>
                                 <option selected disabled value="">Tipo de pago</option>
                                 <option  value="Efectivo">Efectivo</option>
                                 <option  value="Efectivo">Tarjeta</option>
                              
                            </select>
  <div class="valid-feedback">
                                        Datos correctos
                                    </div>
                                    <div class="invalid-feedback">
                                        El campo es obligatorio
                                    </div>
                            <br>
    </div>
                        </div>
                       




      <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Guardar</button>
</form>
    </div>
   


@endsection
