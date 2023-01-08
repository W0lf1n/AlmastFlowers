<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description"
          content="Květinářství AlmastFlowers na Černém mostě přímo naproti výlezu z metra B.
          Naleznete zde velikou nabídku květin pro různé životní údálosti.
          Možnost objednávek je samozřejmostí. Můžete se i kouknout do naší galerie na ukázku květin."
          lang="cz" />
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="#f3d8e1" />
    <link rel="apple-touch-icon" href="{{asset('assets/img/icon/icon2.jpeg')}}" />
    <title>@yield('title') | {{ config('app.name') }}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/icon/icon1.webp')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/fonts/font.awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/icons/linearicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{'assets/css/style.css'}}">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8ab82cd9bd.js" crossorigin="anonymous"></script>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="{{ config('app.name') }}">
</head>
<body>
<div id="nav-filler" class=""></div>
<header class="main-header-area">
    <x-header :name="$name" :day="$day"/>
</header>

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
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.2/dist/index.bundle.min.js"></script>
</body>
</html>
