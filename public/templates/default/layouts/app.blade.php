<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>网站前台</title>
    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <!-- Fonts -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('heads')
    @yield('styles')
</head>
<body>
    <div id="app">
        @include('layouts._header')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
@yield('scripts')
</body>
</html>
