<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/front/style.css')}}" rel="stylesheet">
	<script src="{{ asset('js/front/fontawesome.js')}}" crossorigin="anonymous"></script>

	<link href="{{ asset('css/front/slick/slick.css')}}" rel="stylesheet" media="all">
	<link href="{{ asset('css/front/slick/slick-theme.css')}}" rel="stylesheet" media="all">

	<link href="{{ asset('css/front/aos.css')}}" rel="stylesheet">
	<script src="{{ asset('js/front/aos.js')}}"></script>

	<link rel="stylesheet" href="{{ asset('css/front/animate.min.css')}}">
	<script src="{{ asset('js/front/wow.min.js')}}"></script>

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>

<body>

    @include('layouts.header')


    @yield('content')


    @include('layouts.footer')

    <script src="{{asset('assets/js/main.js')}}"></script>

    <script src="{{ asset('js/jquery.min.js')}} "></script>

    <script src="{{ asset('js/jquery-ui.min.js')}} "></script>

    <script src="{{ asset('js/jquery.matchHeight')}} "></script>
</body>

</html>
