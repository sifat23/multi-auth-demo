<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
        <script src="{{ asset('js/admin.js') }}" defer></script>

        <!-- Custom fonts for this template-->
        
        <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
        <link href="{{ asset('css/my-sweet-css.css') }}" rel="stylesheet">
        
        <!-- Styles -->
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    </head>
    <body id="page-top">
        <div id="wrapper">
            
            @include('layouts.admin-sidebar')
            
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    @include('layouts.admin-nav')
                    @yield('content')
                </div>
            </div>
        </div>

         <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}" defer></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}" defer></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('js/sb-admin-2.min.js') }}" defer></script>
        <script src="{{ asset('js/my-sweet-js.js') }}" defer></script>
    </body>
</html>
