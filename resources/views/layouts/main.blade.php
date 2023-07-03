<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('title') </title>

    <link rel="icon" type="image/x-icon" href="../src/assets/img/clinica.jpeg"/>
    <script src="{{ asset('layouts/vertical-light-menu/css/light/loader.css') }}"></script>
    <script src="{{ asset('layouts/vertical-light-menu/css/dark/loader.css') }}"></script>
    <script src="{{ asset('layouts/vertical-light-menu/loader.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('src/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('layouts/vertical-light-menu/css/light/plugins.css')}}" rel="stylesheet" type="text/css" />
    @yield('linkAuth')
   <!-- <link href="../src/assets/css/light/authentication/auth-cover.css" rel="stylesheet" type="text/css" />-->
    <link href="{{asset('src/assets/css/light/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    
    
    <link href="{{asset('layouts/vertical-light-menu/css/dark/plugins.css')}}" rel="stylesheet" type="text/css" />
    @yield('linkAuth2')
   <!--  <link href="../src/assets/css/dark/authentication/auth-cover.css" rel="stylesheet" type="text/css" />-->
    <link href="{{asset('src/assets/css/dark/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

     
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{asset('src/assets/css/light/elements/alert.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('src/assets/css/dark/elements/alert.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('src/plugins/src/flatpickr/flatpickr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('src/plugins/src/noUiSlider/nouislider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('src/plugins/css/light/flatpickr/custom-flatpickr.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('src/plugins/css/dark/flatpickr/custom-flatpickr.css')}}">
    <!--  END CUSTOM STYLE FILE  -->


    <style>
        body.dark .layout-px-spacing, .layout-px-spacing {
            min-height: calc(100vh - 155px) !important;
        }
    </style>

    
</head>
<body class="alt-menu layout-boxed" page="starter-pack">
    
 @yield('content')
 <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->

 <script src="{{ asset('src/plugins/src/global/vendors.min.js') }}"></script>
 <script src="{{ asset('src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
 <script src="{{ asset('src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
 <script src="{{ asset('layouts/vertical-light-menu/app.js') }}"></script>
  <script src="{{ asset('src/plugins/src/highlight/highlight.pack.js') }}"></script>

 <script src="{{ asset('src/assets/js/custom.js') }}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
     <!-- BEGIN PAGE LEVEL SCRIPTS -->
 <script src="{{ asset('src/assets/js/scrollspyNav.js') }}"></script>
<!-- END PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('src/assets/js/forms/bootstrap_validation/bs_validation_script.js')}}"></script>
<script src="{{ asset('MisFunciones/ValidacionFomularioPaciente.js') }}"></script>
<script src="{{ asset('src/plugins/src/flatpickr/flatpickr.js') }}"></script>
<script src="{{ asset('src/plugins/src/flatpickr/custom-flatpickr.js') }}"></script>

@yield('Scripts')
</body>
</html>
