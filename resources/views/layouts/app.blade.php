<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tracer Study - Dashboard</title>

    @stack('addon-before-style')
    @include('includes.style')
    @stack('addon-after-style')

</head>

<body>
    <div id="app">
        <div id="main">
            @include('includes.sidebar')
            @yield('content')
            @include('includes.footer')
        </div>
    </div>

    @stack('addon-before-script')
    @include('includes.script')
    @stack('addon-after-script')

</body>

</html>