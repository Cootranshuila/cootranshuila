<!doctype html>
<html lang="es">

    <head>
        <meta charset="utf-8" />
        <title>@yield('title') | Cootranshuila LTDA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Dasboard Admin Cootranshuila LTDA" name="description" />
        <meta content="Cootranshuila LTDA" name="Cootranshuila" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- datepicker -->
        <link href="{{ asset('assets/libs/air-datepicker/css/datepicker.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- jvectormap -->
        <link href="{{ asset('assets/libs/jqvmap/jqvmap.min.css') }}" rel="stylesheet" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="colored">


        @yield('content')

        @extends('dashboard.layout.bar-right')

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

        <!-- datepicker -->
        <script src="{{ asset('assets/libs/air-datepicker/js/datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/libs/air-datepicker/js/i18n/datepicker.en.js') }}"></script>

        <!-- apexcharts -->
        <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js') }}"></script> 

        <!-- Jq vector map -->
        <script src="{{ asset('assets/libs/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('assets/libs/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

        {{-- <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script> --}}

        <script src="{{ asset('assets/js/clock.js') }}"></script>
        <script src="{{ asset('assets/js/peticiones.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>

    </body>
</html>