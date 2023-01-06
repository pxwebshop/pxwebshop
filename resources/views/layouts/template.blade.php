<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{ asset('css/front/style.css')}}" rel="stylesheet">

	<link href="{{ asset('css/front/slick/slick.css')}}" rel="stylesheet" media="all">
	<link href="{{ asset('css/front/slick/slick-theme.css')}}" rel="stylesheet" media="all">

	{{-- <link href="{{ asset('css/front/aos.css')}}" rel="stylesheet"> --}}

	<link rel="stylesheet" href="{{ asset('css/front/animate.min.css')}}">

    <link href="https://fonts.gstatic.com" rel="preconnect">
    
    <link rel="stylesheet" href="{{ asset('css/front/jquery.modal.min.css')}}" />
</head>

<body>

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <div class="c-box14">
        <div class="c-box14__inner">
            <span><small>Hotline: 020 28266650</small></span>
            <a href="tel:02028266650">
                <i class="fas fa-phone-alt"></i>
            </a>
        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js')}} "></script>

    <script src="{{ asset('js/jquery-ui.min.js')}} "></script>

    <script src="{{ asset('js/front/jquery.matchHeight.js')}} "></script>

    <script src="{{ asset('js/front/slick.min.js')}} "></script>

    <script src="{{ asset('js/front/main.js') }}"></script>

	<script src="{{ asset('js/front/wow.min.js')}}"></script>
    
	<script src="{{ asset('js/front/fontawesome.js')}}" crossorigin="anonymous"></script>

	<script src="{{ asset('js/front/jquery.modal.min.js')}}"></script>

    <script> new WOW().init(); </script>

    @stack('scripts')
</body>

</html>
