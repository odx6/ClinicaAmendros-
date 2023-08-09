 @extends('layouts.main')
@section('title','Editar Paciente')
@section('linkAuth')

@endsection

@section('content')
<!-- BEGIN LOADER -->
<div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->
@include('layouts.navbar')
@include('layouts.sidevar')
<div id="content" class="main-content">
<div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <!-- BREADCRUMB -->
                  <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Usuario : {{auth()->user()->name}}
                           
                            <li class="breadcrumb-item active" aria-current="page"> Correo : {{auth()->user()->email}}</li>

                        </ol>
                    </nav>
                </div>
                <h1 style="text-align: center;">EDITAR UN PACIENTE </h1>
 <form class="user needs-validation" method="POST"
              action="{{ route('paciente.update2', ['Identificador' => $Paciente->SS, 'Doctor' => $Paciente->PacienteDoctor]) }}"
              novalidate>

              @csrf
              <h3>Datos del paciente </h3>


              <div class="row mb-4">
                  <div class="col">
                      <label for="formGroupExampleInput">Nombre <span class="red-asterisk">*</span> </label>
                      <input type="text" class="form-control " placeholder="Nombre del paciente " name="Nombre"
                          value="{{ $Paciente->Nombre }}" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+${3,30}" required>
                           <div class="valid-feedback">
                                            Datos correctos
                                         </div>
                                         <div class="invalid-feedback">
                                            Ingresa un nombre valido ejemplo :"Jose luis"
                                         </div>
                  </div>
                  <div class="col">
                      <label for="formGroupExampleInput">Apellidos <span class="red-asterisk">*</span></label>
                      <input type="text" class="form-control" placeholder="Apellido del paciente" name="Apellido"
                          value="{{ $Paciente->Apellido }}" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+${3,30}" required>
                           <div class="valid-feedback">
                                            Datos correctos
                                         </div>
                                         <div class="invalid-feedback">
                                            Ingresa apellidos validos  :"Hernández López"
                                         </div>
                  </div>
              </div>
              <div class="row mb-4">
                  <div class="col">
                      <label for="formGroupExampleInput">Edad <span class="red-asterisk">*</span> </label>
                      <select class="form-control selects" name="Edad" required>
                          <option value="{{ $Paciente->Edad }}">
                              {{ $Paciente->Edad }}
                          </option>
                          @for ($i = 1; $i <= 100; $i++)
                              <option value="{{ $i }}">
                                  {{ $i }}
                              </option>
                          @endfor
                      </select>
                        <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                         Selecciona la edad 
                                     </div>
                  </div>
                  <div class="col">
                      <label for="formGroupExampleInput">Sexo <span class="red-asterisk">*</span></label>
                      <select class="form-control selects" name="Sexo" required>
                          <option value={{ $Paciente->Sexo }}>
                              @if ($Paciente->Sexo == 'M')
                                  {{ 'Masculino' }}
                              @endif
                              @if ($Paciente->Sexo == 'F')
                                  {{ 'Femenino' }}
                              @endif
                          </option>

                          <option value="M">Masculino</option>
                          <option value="F">Femenino</option>

                      </select>
                      <div class="valid-feedback">
                                        Datos correctos
                                     </div>
                                     <div class="invalid-feedback">
                                         Selecciona el sexo
                                     </div>
                  </div>

              </div>
              <div class="row mb-4">
                  <div class="col">
                      <label for="formGroupExampleInput">Estado civil <span class="red-asterisk">*</span></label>
                      <input type="text" class="form-control" placeholder="Estado civil del paciente "
                          name="Estado_civil" value="{{ $Paciente->Estado_civil }}" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+${3,30}"
                          required>
                           <div class="valid-feedback">
                                        Datos correctos Estado civil
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor ingresa Estado civil del paciente valido
                                    </div>
                  </div>
                  <div class="col">
                      <label for="formGroupExampleInput">Origen <span class="red-asterisk">*</span></label>
                      <input type="text" class="form-control" placeholder="Origen el paciente" name="Origen"
                          value="{{ $Paciente->Origen }}" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+${3,30}" required>
                           <div class="valid-feedback">
                                        Datos de origen correctos
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor ingresa origen valido
                                    </div>
                  </div>
              </div>
              <div class="row mb-4">
                  <div class="col">
                      <label for="formGroupExampleInput">Ocupación <span class="red-asterisk">*</span> </label>
                      <input type="text" class="form-control" placeholder="Ocupacion del paciente" name="Ocupacion"
                          value="{{ $Paciente->Ocupacion }}" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+${3,30}" required>

                          <div class="valid-feedback">
                                            Datos Ocupación correctos
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor ingresa una ocupación valida
                                        </div>
                  </div>


              </div>
              <div class="row mb-4">

                  <div class="col">
                      <label for="formGroupExampleInput">Dirección <span class="red-asterisk">*</span> </label>
                      <input type="text" class="form-control" placeholder="Direccion del paciente" name="Direccion"
                          value="{{ $Paciente->Direccion }}" pattern="^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ.,\s-]{1,100}$" required>
                        <div class="valid-feedback">
                                            Datos Dirección correctos
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor ingresa una Dirección valida
                                        </div>
                  </div>
                  <div class="col">
                      <label for="formGroupExampleInput">Teléfono <span class="red-asterisk">*</span></label>
                      <input type="numeric" class="form-control" placeholder="Telefono del paciente" name="Telefono"
                          value="{{ $Paciente->Telefono }}" required>
                          <div class="valid-feedback">
                                            Dato  correcto
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor ingresa una telefono valido 
                                        </div>

                  </div>
              </div>
              <div class="row mb-4">
                  <div class="col">
                      <label for="formGroupExampleInput">Religión <span class="red-asterisk">*</span></label>
                      <input type="text" class="form-control" placeholder="Religion del paciente" name="Religion"
                          value="{{ $Paciente->Religion }}" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+${3,30}" required>
                              <div class="valid-feedback">
                                            Dato  correcto
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor ingresa una religión valida
                                        </div>
                  </div>
              </div>
              <div class="row mb-4">

                  <div class="col">
                      <label for="formGroupExampleInput">Escolaridad <span class="red-asterisk">*</span> </label>
                      <input type="text" class="form-control" placeholder="Escolaridad del paciente"
                          name="Escolaridad" value="{{ $Paciente->Escolaridad }}" pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+${3,30}">
                          <div class="valid-feedback">
                                            Dato  correcto
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor ingresa un grado de estudios  valido
                                        </div>
                  </div>
                  <div class="col">
                      <label for="formGroupExampleInput">Fecha de ingreso <span class="red-asterisk">*</span></label>
                      <input type="date" class="form-control" placeholder="FechaIngreso" name="FechaIngreso"
                          value="{{ $Paciente->FechaIngreso }}">
                            <div class="valid-feedback">
                                            Dato  correcto
                                        </div>
                                        <div class="invalid-feedback">
                                            el campo es requerido 
                                        </div>
                  </div>
              </div>
              <div class="row mb-4">
                  <div class="col">
                      <label for="formGroupExampleInput">Fecha de Salida <span class="red-asterisk">*</span></label>
                      <input type="date" class="form-control" placeholder="FechaIngreso" name="FechaSalida"
                          value="{{ $Paciente->FechaSalida }}" > <div class="valid-feedback">
                                            Dato  correcto
                                        </div>
                                        <div class="invalid-feedback">
                                            el campo es requerido 
                                        </div>
                  </div>
              </div>
              <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola" >Guardar </button>
                    <!--end aPatologicos-->

                </form>

                @include('layouts.footer')

@endsection
@section('Scripts')
 

@endsection