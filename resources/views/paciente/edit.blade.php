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
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Actualizar Paciente</li>
                            </ol>
                        </nav>
                    </div>
 <form class="user needs-validation" method="POST"
              action="{{ route('paciente.update2', ['Identificador' => $Paciente->SS, 'Doctor' => $Paciente->PacienteDoctor]) }}"
              novalidate>

              @csrf
              <h1>Datos del paciente </h1>


              <div class="row mb-4">
                  <div class="col">
                      <label for="formGroupExampleInput">Nombre </label>
                      <input type="text" class="form-control " placeholder="Nombre del paciente " name="Nombre"
                          value="{{ $Paciente->Nombre }}" pattern="^[A-Za-z\s]+${3,30}" required>
                  </div>
                  <div class="col">
                      <label for="formGroupExampleInput">Apellidos</label>
                      <input type="text" class="form-control" placeholder="Apellido del paciente" name="Apellido"
                          value="{{ $Paciente->Apellido }}" pattern="^[A-Za-z\s]+${3,30}" required>
                  </div>
              </div>
              <div class="row mb-4">
                  <div class="col">
                      <label for="formGroupExampleInput">Edad </label>
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
                  </div>
                  <div class="col">
                      <label for="formGroupExampleInput">Sexo </label>
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
                  </div>

              </div>
              <div class="row mb-4">
                  <div class="col">
                      <label for="formGroupExampleInput">Estado civil </label>
                      <input type="text" class="form-control" placeholder="Estado civil del paciente "
                          name="Estado_civil" value="{{ $Paciente->Estado_civil }}" pattern="^[A-Za-z\s]+${3,30}"
                          required>
                  </div>
                  <div class="col">
                      <label for="formGroupExampleInput">Origen </label>
                      <input type="text" class="form-control" placeholder="Origen el paciente" name="Origen"
                          value="{{ $Paciente->Origen }}" pattern="^[A-Za-z\s]+${3,30}" required>
                  </div>
              </div>
              <div class="row mb-4">
                  <div class="col">
                      <label for="formGroupExampleInput">Ocupación </label>
                      <input type="text" class="form-control" placeholder="Ocupacion del paciente" name="Ocupacion"
                          value="{{ $Paciente->Ocupacion }}" pattern="^[A-Za-z\s]+${3,30}" required>
                  </div>


              </div>
              <div class="row mb-4">

                  <div class="col">
                      <label for="formGroupExampleInput">Dirección </label>
                      <input type="text" class="form-control" placeholder="Direccion del paciente" name="Direccion"
                          value="{{ $Paciente->Direccion }}" required>
                  </div>
                  <div class="col">
                      <label for="formGroupExampleInput">Teléfono </label>
                      <input type="numeric" class="form-control" placeholder="Telefono del paciente" name="Telefono"
                          value="{{ $Paciente->Telefono }}" required>

                  </div>
              </div>
              <div class="row mb-4">
                  <div class="col">
                      <label for="formGroupExampleInput">Religión</label>
                      <input type="text" class="form-control" placeholder="Religion del paciente" name="Religion"
                          value="{{ $Paciente->Religion }}" pattern="^[A-Za-z\s]+${3,30}" required>
                  </div>
              </div>
              <div class="row mb-4">

                  <div class="col">
                      <label for="formGroupExampleInput">Escolaridad </label>
                      <input type="text" class="form-control" placeholder="Escolaridad del paciente"
                          name="Escolaridad" value="{{ $Paciente->Escolaridad }}" pattern="^[A-Za-z\s]+${3,30}">
                  </div>
                  <div class="col">
                      <label for="formGroupExampleInput">Fecha de Ingreso</label>
                      <input type="date" class="form-control" placeholder="FechaIngreso" name="FechaIngreso"
                          value="{{ $Paciente->FechaIngreso }}">
                  </div>
              </div>
              <div class="row mb-4">
                  <div class="col">
                      <label for="formGroupExampleInput">Fecha de Salida</label>
                      <input type="date" class="form-control" placeholder="FechaIngreso" name="FechaSalida"
                          value="{{ $Paciente->FechaSalida }}">
                  </div>
              </div>
              <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola" >Enviar
                        Datos</button>
                    <!--end aPatologicos-->

                </form>

                @include('layouts.footer')

@endsection
@section('Scripts')
 

@endsection