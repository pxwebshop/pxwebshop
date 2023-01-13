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

    @if($isShowMessenger ?? false)
        @include('_partials.messenger')
    @endif

    <div class="c-box14">
        <div class="c-box14__inner">
            <i class="fa-solid fa-arrow-up"></i>
        </div>
    </div>

    <div class="c-box15">
        <div class="c-btn2">
            <div class="c-btn2__inner">
                <div class="c-btn2__fill"></div>
                <div class="c-btn2__icon">
                    <a target="_blank" rel="noopener" href="https://api.whatsapp.com/message/FJW3P3M2S54IA1?autoload=1&amp;app_absent=0">
                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="c-btn2 c-btn2--style1">
            <div class="c-btn2__inner">
                <div class="c-btn2__fill"></div>
                <div class="c-btn2__icon">
                    <a href="tel:02028266650">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
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
