@extends('layouts.main')
@section('title', 'Consultas')
@section('linkAuth')
    <!-- BEGIN PAGE LEVEL STYLE -->

    <link href="../src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css">

    <link href="../src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL STYLE -->

@endsection

@section('content')
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
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
                            <li class="breadcrumb-item active" aria-current="page">Consultas</li>
                        </ol>
                    </nav>
                </div>
                    @if(session('mensaje'))
 <div class="alert alert-icon-left alert-light-success alert-dismissible fade show mb-4" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" data-bs-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12" y2="17"></line></svg>
                                        <strong> <strong>Exito!</strong> {{ session('mensaje') }}.
                                    </div>
@endif

                @php
                                                   $id=auth()->user()->id;
                                                   $doctores =App\Models\Doctor::where('fk_user', '=', $id)->get();
                                        
                                                    @endphp
                   @foreach($doctores as $doctor)
                                                    
                                                   



        <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Monto</th>
                <th class="text-center" scope="col">Estado</th>
                <th class="text-left" scope="col">fecha</th>
                <th class="text-center" scope="col"></th>
            </tr>
            <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
        </thead>
        <tbody>
               @if ($doctor->Consultas->count() > 0)
               @foreach ($doctor->Consultas as $consulta)
            <tr>
                <td>
                    <div class="media">
                      {{$consulta->monto}}
                    </div>
                </td>
                
                <td class="text-center">
                    <span @if($consulta->Estado=="pendiente")class="badge badge-light-danger" @else class="badge badge-light-danger" @endif> {{$consulta->Estado}}</span>
                </td>
                <td>
                    <div class="media">
                      {{$consulta->created_at}}
                    </div>
                </td>
                <td class="text-center">
                    <div class="action-btns">
                       
                        <a href="{{route('show.Consultas',['id'=>$consulta->pk_consulta])}}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Editar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                        </a>
                        <a href="{{route('destroy.Consultas',['id'=>$consulta->pk_consulta])}}" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="Elimnar">
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

            @include('layouts.ModalConfirmacion')
            @include('layouts.PrimeraCita')

        </div>

        @include('layouts.footer')
    </div>
    <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
@endsection
@section('Scripts')


@endsection
