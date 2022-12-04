<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/icon/icon1.png')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/fonts/font.awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/icons/linearicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{'assets/css/style.css'}}">
    <script src="https://kit.fontawesome.com/8ab82cd9bd.js" crossorigin="anonymous"></script>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="{{ config('app.name') }}">
</head>
<body>

<header class="main-header-area">
    <x-header :name="$name" :day="$day"/>
</header>

<!-- Slider/Intro Section Start -->
    <x-slider />
<!-- Slider/Intro Section End -->

    <main>
        @yield('content')
    </main>

<!--Footer Area Start-->
<footer class="footer-area">
    <x-footer />
</footer>
<!--Footer Area End-->
    <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery/jquery-migrate-3.3.2.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/plugins/modernizr-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets/plugins/nice-select.min.js')}}"></script>
    <script src="{{asset('assets/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
