<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pemograman') }} | @yield('title')</title>
    @stack('addon-before-style')
    @include('includes.style')
    @stack('addon-after-style')
</head>

<body>
    <div id="app">
        @include('includes.sidebar')
        <div id="main">
            @yield('content')
            @include('includes.footer')
        </div>
    </div>
    @stack('addon-before-script')
    @include('includes.script')
    @stack('addon-after-script')
</body>

</html>