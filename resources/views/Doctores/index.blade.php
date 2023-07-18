@extends('layouts.main')
@section('title','Medicos')
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
                                <li class="breadcrumb-item active" aria-current="page">Medicos</li>
                            </ol>
                        </nav>
                    </div>
                    @if(session('mensaje'))
 <div class="alert alert-icon-left alert-light-success alert-dismissible fade show mb-4" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" data-bs-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12" y2="17"></line></svg>
                                        <strong> <strong>Éxito!</strong> {{ session('mensaje') }}.
                                    </div>
@endif
                    <div class="action-btns">
                         <br><label>Agregar Medico </label>
                       
                        <a href="{{route('create.Medico')}}" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Agregar">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder-plus"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path><line x1="12" y1="11" x2="12" y2="17"></line><line x1="9" y1="14" x2="15" y2="14"></line></svg>
                        </a>
                       <br>
                    </div>
         

                <!----Table-Products-->
                <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Clave de medico</th>
                <th scope="col">Clave de Área</th>
                <th scope="col">clave de usuario</th>
                <th  scope="col">Nombre</th>
                <th  scope="col">Especialidades</th>
                <th  scope="col">Cedula</th>
                <th  scope="col">Especialidad</th>
                <th  scope="col">Acción</th>
            </tr>
            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
        </thead>
        <tbody>
            @if($Doctores->isEmpty())
            <tr>
                <td> No hay médicos Agregados </td>
                <td> Agregue nuevos médicos </td>
            </tr>
            @else
            @foreach($Doctores as $doctor)
            <tr>
                <td>
                    <div class="media">
                       {{$doctor->DSS}}
                    </div>
                </td>
                <td>
                    <div class="media">
                      {{$doctor->AreaDoctor}}
                    </div>
                    
                </td>
                <td>
                    <div class="media">
                      {{$doctor->fk_user}}
                    </div>
                    
                </td>
                <td class="text-center">
                    <div class="media">
                       {{$doctor->Nombre}}
                       {{$doctor->Apellidos}}
                    </div>
                </td>
                <td class="text-center">
                    <div class="media">
                       {{$doctor->Especialidades}}
                    </div>
                </td>
                <td class="text-center">
                     <div class="media">
                       {{$doctor->Cedula}}
                       
                    </div>
                </td>
                 <td class="text-center">
                     <div class="media">
                       {{$doctor->ESPECIALIDAD}}
                      
                    </div>
                </td>
                <td class="text-center">
                    <div class="action-btns">
                       
                        <a href="{{route('show.Medico',['id'=>$doctor->DSS])}}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                        </a>
                        <a href="{{route('destroy.Medico',['id'=>$doctor->DSS])}}" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                        </a>
                    </div>
                </td>
            </tr>

           @endforeach
           @endif
            
        </tbody>
    </table>
</div>
                <!--endTable --->


              </div>

@include('layouts.footer')

@endsection
@section('Scripts')
 

@endsection