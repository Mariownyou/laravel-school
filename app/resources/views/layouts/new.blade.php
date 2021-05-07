<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Школа «Шамир» @yield('title')</title>
    <link href="{{ asset('css/new/core.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>
    @include('includes.navbar.nav')
    @include('includes.navbar.nav-mob')

    <div class="margins">
        @yield('content')
    </div>

@stack('scripts')
</body>
</html>
