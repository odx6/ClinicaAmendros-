@extends('layouts.main')

@section('title','Inicio de sesión')
@section('linkAuth')
<!--<link href="../src/assets/css/light/authentication/auth-cover.css" rel="stylesheet" type="text/css" />-->
<link href="{{asset('src/assets/css/light/authentication/auth-cover.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('content')


    <div class="auth-container d-flex">

        <div class="container mx-auto align-self-center">
    
            <div class="row">
    
                <div class="col-6 d-lg-flex d-none h-100 my-auto top-0 start-0 text-center justify-content-center flex-column">
                    <div class="auth-cover-bg-image"></div>
                    <div class="auth-overlay"></div>
                        
                    <div class="auth-cover">
    
                        <div class="position-relative">
    
                            <img src="../src/assets/img/ClinicaAlmendros.svg" alt="auth-img">
    
                            <h2 class="mt-5 text-white font-weight-bolder px-2">Clínica  Almendros</h2>
                            <p class="text-white px-2">Historia de la Clínica @if(DB::connection()->getPdo())
    <p>Conexión exitosa a la base de datos.</p>
@else
    <p>Error al conectar a la base de datos.</p>
@endif </p>
                        </div>
                        
                    </div>

                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center ms-lg-auto me-lg-0 mx-auto">
                    <div class="card">
                        <div class="card-body">
    
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    
                                    <h2>Inicio de sesión</h2>
                                    <p>Ingresa tu correo y tu contraseña </p>
                                    <form class="user" method="POST" action="">
                                    @csrf   
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Correo Electrónico</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-4">
                                        <label class="form-label">Contraseña</label>
                                        <input type="password" class="form-control"  name="password">
                                    </div>
                                </div>
                               
                            
                           
                            <!--Alarta-->
                            @error('message')
                            <div class="alert custom-alert-1 alert-dismissible fade show mb-4" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" data-bs-dismiss="alert" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                        <div class="media">
                                            <div class="alert-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12" y2="17"></line></svg>
                                            </div>
                                            <div class="media-body">
                                                <div class="alert-text">
                                                    <strong>Error ! </strong><span> {{ $message }}</span> 
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    @enderror

      <!--Alarta end -->
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                                            <label class="form-check-label" for="form-check-default">
                                               Recordar contraseña
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="mb-4">
                                        <button class="btn btn-secondary w-100">Iniciar Sesión</button>
                                    </div>
                                </div>
                                
                              

                                <div class="col-12">
                                    <div class="text-center">
                                        <p class="mb-0">No tienes Cuenta <a href="#" class="text-warning">Registrarse</a></p>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>

    </div>

@endsection