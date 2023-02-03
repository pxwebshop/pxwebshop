<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link href="{{ asset('css/front/style.css')}}" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

	<link href="{{ asset('css/front/slick/slick.css')}}" rel="stylesheet" media="all">
	<link href="{{ asset('css/front/slick/slick-theme.css')}}" rel="stylesheet" media="all">

	<link rel="stylesheet" href="{{ asset('css/front/animate.min.css')}}">

    <link href="https://fonts.gstatic.com" rel="preconnect">
    
    <link rel="stylesheet" href="{{ asset('css/front/jquery.modal.min.css')}}" />
    
    @stack('css')
</head>

<body>

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <div class="c-box14">
        <div class="c-box14__inner">
            <i class="fa-solid fa-arrow-up"></i>
        </div>
    </div>

    <div class="c-list12">
        <div class="is-content">
            <ul class="c-list12__content">
                <li class="c-list12__data">
                    <a target="_blank" rel="noopener" href="https://api.whatsapp.com/message/FJW3P3M2S54IA1?autoload=1&amp;app_absent=0">
                        <div class="c-list12__icon">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                        </div>
                        <p>Whatsapp</p>
                    </a>
                </li>
                <li class="c-list12__data">
                    <a href="tel:02028266650">
                        <div class="c-list12__icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <p>Callback request</p>
                    </a>
                </li>
                <li class="c-list12__data">
                    <a target="_blank" rel="noopener" href="https://m.me/117009914627010">
                        <div class="c-list12__icon">
                            <i class="fab fa-facebook-messenger" aria-hidden="true"></i>
                        </div>
                        <p>Messenger</p>
                    </a>
                </li>
            </ul>
        </div>
        <ul class="c-list12__inner">
            <li class="c-list12__item">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
            </li>
            <li class="c-list12__item">
                <i class="fa fa-phone" aria-hidden="true"></i>
            </li>
            <li class="c-list12__item">
                <div class="c-list12__item__svg">
                    <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Canvas" transform="translate(-825 -308)"><g id="Vector"><use xlink:href="#path0_fill0123" transform="translate(825 308)" fill="currentColor"></use></g></g><defs><path id="path0_fill0123" d="M 19 4L 17 4L 17 13L 4 13L 4 15C 4 15.55 4.45 16 5 16L 16 16L 20 20L 20 5C 20 4.45 19.55 4 19 4ZM 15 10L 15 1C 15 0.45 14.55 0 14 0L 1 0C 0.45 0 0 0.45 0 1L 0 15L 4 11L 14 11C 14.55 11 15 10.55 15 10Z"></path></defs></svg>
                    <p>ຕິດ​ຕໍ່​ພວກ​ເຮົາ</p>
                </div>
            </li>
        </ul>
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
