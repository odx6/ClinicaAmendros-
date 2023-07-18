@extends('layouts.main')

@section('title','Register')
@section('linkAuth')
<link href="../src/assets/css/light/authentication/auth-cover.css" rel="stylesheet" type="text/css" />

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
    
                            <h2 class="mt-5 text-white font-weight-bolder px-2">Clínica Almendros</h2>
                            <p class="text-white px-2">Historia de la clínica</p>
                        </div>
                        
                    </div>

                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center ms-lg-auto me-lg-0 mx-auto">
                    <div class="card">
                    <form class="user" method="POST" action="">
                       @csrf
                        <div class="card-body">
    
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    
                                    <h2>Registrarse ¿</h2>
                                    <p>Ingresa tu correo electrónico</p>
                                    
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Nombre</label>
                                        <input type="text" class="form-control add-billing-address-input" name="name" id="name">
                                    </div>
                                </div>
                                <!-- alerta-->
                                @error('name')
                                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Error!</strong> {{$message}} </div>
                                @enderror
                                <!--endAlerta-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">correo electrónico</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                  <!-- alerta-->
                                  @error('email')
                                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Error!</strong> {{$message}} </div>
                                @enderror
                                <!--endAlerta-->
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Contraseña</label>
                                        <input type="text" class="form-control"name="password" >
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Contraseña</label>
                                        <input type="text" class="form-control"name="PasswordC" >
                                    </div>
                                </div>
                                  <!-- alerta-->
                                  @error('password')
                                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Error!</strong> {{$message}} </div>
                                @enderror
                                <!--endAlerta-->
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                                            <label class="form-check-label" for="form-check-default">
                                                  Yo acepto los <a href="javascript:void(0);" class="text-primary">Términos y condiciones </a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="mb-4">
                                        <button class="btn btn-secondary w-100">Inicio de sesión</button>
                                    </div>
                                </div>
                                <!--
                                <div class="col-12 mb-4">
                                    <div class="">
                                        <div class="seperator">
                                            <hr>
                                            <div class="seperator-text"> <span>Or continue with</span></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-4 col-12">
                                    <div class="mb-4">
                                        <button class="btn  btn-social-login w-100 ">
                                            <img src="../src/assets/img/google-gmail.svg" alt="" class="img-fluid">
                                            <span class="btn-text-inner">Google</span>
                                        </button>
                                    </div>
                                </div>
    
                                <div class="col-sm-4 col-12">
                                    <div class="mb-4">
                                        <button class="btn  btn-social-login w-100">
                                            <img src="../src/assets/img/github-icon.svg" alt="" class="img-fluid">
                                            <span class="btn-text-inner">Github</span>
                                        </button>
                                    </div>
                                </div>
    
                                <div class="col-sm-4 col-12">
                                    <div class="mb-4">
                                        <button class="btn  btn-social-login w-100">
                                            <img src="../src/assets/img/twitter.svg" alt="" class="img-fluid">
                                            <span class="btn-text-inner">Twitter</span>
                                        </button>
                                    </div>
                                </div>
-->
                                <div class="col-12">
                                    <div class="text-center">
                                        <p class="mb-0">Already have an account ? <a href="{{route('login.index')}}" class="text-warning">Sign in</a></p>
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