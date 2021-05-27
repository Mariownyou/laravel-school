<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--  Styles  --}}
    <link rel="stylesheet" href="{{ asset('css/core.css') }}">
    @stack('css')

    <title>School “Shamir” — @yield('title')</title>
</head>
<body class="page">
    <div class="page-wrapper">
        @include('includes.navbar', ['row', @$row])

        <main class="content">
            @yield('page-info')
            @yield('content')
        </main>

        @include('includes.footer')
    </div>
    @stack('js')
</body>
</html>
