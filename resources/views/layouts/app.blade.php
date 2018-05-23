<?php
/**
 * @Author
 * Falua Temitope Oyewole.
 * faluatemitopeo@gmail.com
 * Web Developer
 * Date: 5/22/2018
 */
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ECommerce') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    @include('inc.navbar')
    @yield('content')
    @yield('feature')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

