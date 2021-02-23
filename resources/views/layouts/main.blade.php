<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--    <title>{{ config('app.name', 'TomiHai') }}</title>--}}

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- MDB icon -->
    <link rel="icon" href="{{asset('public/assets/logo/logo-tomihai.ico')}}" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href=" {{ asset('public/bootstrap-cdn/css/bootstrap.min.css') }} ">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/bootstrap-cdn/css/mdb.min.css') }}">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{ asset('public/bootstrap-cdn/css/style.css') }}">
    <!-- Your custom scripts (optional) -->
{{--    <script type="text/javascript" src="{{ asset('public/js/script.js') }}"></script>--}}
</head>
<body>

<!-- Start your project here-->

@include('layouts.navbar')

@yield('content')

@include('layouts.footer')
<!-- End your project here-->

<!-- jQuery -->
<script type="text/javascript" src="{{ asset('public/bootstrap-cdn/js/jquery.min.js') }}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset('public/bootstrap-cdn/js/popper.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('public/bootstrap-cdn/js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ asset('public/bootstrap-cdn/js/mdb.min.js') }}"></script>


</body>
</html>
