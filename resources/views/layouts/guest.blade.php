<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Template CSS -->
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('vendor/stisla-2.2.0/assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/stisla-2.2.0/assets/modules/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('vendor/stisla-2.2.0/assets/modules/bootstrap-social/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/stisla-2.2.0/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/stisla-2.2.0/assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('vendor/stisla-2.2.0/assets/modules/jquery.min.js') }}" defer></script>
    <script src="{{ asset('vendor/stisla-2.2.0/assets/modules/popper.js') }}" defer></script>
    <script src="{{ asset('vendor/stisla-2.2.0/assets/modules/tooltip.js') }}" defer></script>
    <script src="{{ asset('vendor/stisla-2.2.0/assets/modules/bootstrap/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('vendor/stisla-2.2.0/assets/modules/nicescroll/jquery.nicescroll.min.js') }}" defer></script>
    <script src="{{ asset('vendor/stisla-2.2.0/assets/modules/moment.min.js') }}" defer></script>
    <script src="{{ asset('vendor/stisla-2.2.0/assets/js/stisla.js') }}" defer></script>
    @livewireScripts
</head>

<body class="layout-3">
    <div id="app">
        {{ $slot }}
    </div>
    <script src="{{ asset('vendor/stisla-2.2.0/assets/js/scripts.js') }}" defer></script>
</body>

</html>
