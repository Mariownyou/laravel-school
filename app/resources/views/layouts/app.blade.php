<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="http://school-shamir.ru/libs/bootstrap/bootstrap.min.css?1459192800" />
    <link rel="stylesheet" href="http://school-shamir.ru/libs/fancybox/jquery.fancybox.min.css?1594047041" />
    <link rel="stylesheet" href="http://school-shamir.ru/libs/font-awesome/font-awesome.min.css?1459192831" />
    <link rel="stylesheet" href="http://school-shamir.ru/libs/owl-carousel/owl.carousel.css?1459192846" />
    <link rel="stylesheet" href="http://school-shamir.ru/libs/owl-carousel/owl.theme.css?1459192847" />
    <link rel="stylesheet" href="http://school-shamir.ru/libs/owl-carousel/owl.transitions.css?1459192847" />

    <!-- Styles -->
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @stack('css')
</head>
<body>
    @include('includes.navbar')

    <main class="py-4">
        @yield('content')
    </main>

    <!-- Sсripts -->
    <script type="text/javascript" src="http://school-shamir.ru/libs/jquery/jquery-1.11.1.min.js?1617405485"></script>
    <script type="text/javascript" src="http://school-shamir.ru/libs/fancybox/jquery.fancybox.min.js?1617405485"></script>
    <script type="text/javascript" src="http://school-shamir.ru/libs/owl-carousel/owl.carousel.min.js?1617405485"></script>
    <script type="text/javascript" src="http://school-shamir.ru/js/common.js?1617405485"></script>
</body>
</html>
