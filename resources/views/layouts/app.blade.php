<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Vaishnavi Clinic') }}</title>
        
        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'css/theme/app.css', 'resources/js/app.js']) --}}

        <!-- Bootstrap Css -->
        <link href="{{ asset('css/theme/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('css/theme/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('css/theme/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    @yield('styles')
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
           
        </div>
        @yield('content')
        <!-- JAVASCRIPT -->
        <script src="{{ asset('js/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('js/libs/bootstrap/js/bootstrap.bundle.min.j') }}s"></script>
        <script src="{{ asset('js/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('js/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('js/libs/node-waves/waves.min.js') }}"></script>
        
        <!-- App js -->
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')
    </body>
</html>
