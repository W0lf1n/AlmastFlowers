<!-- Main Header Area Start -->
<div class="main-header header-transparent header-sticky">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-2 col-xl-2 col-md-6 col-6 col-custom">
                <div class="header-logo d-flex align-items-center">
                    <a href="{{route('homepage.index')}}">
                        <img src="{{asset('assets/img/icon/icon1.png')}}"  alt="logo"/>
                    </a>
                </div>
            </div>
            <div class="col-lg-8 d-none d-lg-flex justify-content-center col-custom">
                <nav class="main-nav d-none d-lg-flex">
                    <ul class="nav">
                        <li>
                            <a href="{{route('homepage.index')}}">
                                <span class="menu-text">Úvod</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('about_us.index')}}">
                                <span class="menu-text">o nás</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('contact.index')}}">
                                <span class="menu-text">kontakt</span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="text-muted">e-shop</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-2 col-md-6 col-6 col-custom">

                <p class="mt-2 ms-5 text-end">
                    {{$day}} a svátek má
                    <b style="color: #e72463">{{$name}}</b>
                </p>
                <div class="header-right-area main-nav">
                    <ul class="nav">
                        <li class="account-menu-wrap d-none d-lg-flex">
                            <a href="#" class="off-canvas-menu-btn">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                        <li class="mobile-menu-btn d-lg-none">
                            <a class="off-canvas-btn" href="#">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Header Area End -->
<!-- off-canvas menu start -->
<aside class="off-canvas-wrapper" id="mobileMenu">
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-inner-content">
        <div class="btn-close-off-canvas">
            <i class="fa fa-times"></i>
        </div>
        <div class="off-canvas-inner">
            <!-- mobile menu start -->
            <div class="mobile-navigation">
                <!-- mobile menu navigation start -->
                <nav>
                    <ul class="mobile-menu">
                        <li><a href="#" disabled="disabled">e-shop</a>
                        </li>
                        <li><a href="#">o nás</a></li>
                        <li><a href="#">kontaktuje nás</a></li>
                    </ul>
                </nav>
                <!-- mobile menu navigation end -->
            </div>
            <!-- mobile menu end -->
            <div class="offcanvas-widget-area">
                <div class="top-info-wrap text-left text-black">
                    <ul class="address-info">
                        <li>
                            <i class="fa fa-phone"></i>
                            <p>+420 777 353 536</p>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <p>almastflowers@gmail.com</p>
                        </li>
                    </ul>
                    <div class="widget-social">
                        <a title="Facebook" href="https://www.facebook.com/profile.php?id=100085530743756" target="_blank"><i class="fa fa-facebook-f"></i></a>
                        <a title="Twitter" href="https://www.instagram.com/almastflowers/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a title="Linkedin" href="https://www.tiktok.com/@almastflowers" target="_blank"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- off-canvas menu end -->
<!-- off-canvas menu start -->
<aside class="off-canvas-menu-wrapper" id="sideMenu">
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-inner-content">
        <div class="off-canvas-inner">
            <div class="btn-close-off-canvas">
                <i class="fa fa-times"></i>
            </div>
            <!-- offcanvas widget area start -->
            <div class="offcanvas-widget-area">
                <ul class="menu-top-menu">
                    <li><a href="#">O webu</a></li>
                </ul>
                <p class="desc-content">
                    Ná stránkách se neunávně pracuje. Prosíme, mějte trpělivost a my Vám za oplátku přineseme funkce, které hledáte
                    🌸
                </p>
                <div class="top-info-wrap text-left text-black">
                    <ul class="address-info">
                        <li>
                            <p>
                            <i class="fa fa-phone"></i>
                            +420 777 353 536
                            </p>
                        </li>
                        <li>
                            <p>
                            <i class="fa fa-envelope"></i>
                            almastflowers@gmail.com
                            </p>
                        </li>
                    </ul>
                    <div class="widget-social">
                        <a title="Facebook" href="https://www.facebook.com/profile.php?id=100085530743756" target="_blank"><i class="fa fa-facebook-f"></i></a>
                        <a title="Twitter" href="https://www.instagram.com/almastflowers/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a title="Linkedin" href="https://www.tiktok.com/@almastflowers" target="_blank"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
            <!-- offcanvas widget area end -->
        </div>
    </div>
</aside>
<!-- off-canvas menu end -->
