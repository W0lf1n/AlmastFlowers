<!-- Main Header Area Start -->
<section class="main-header header-transparent header-sticky">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-2 col-xl-2 col-md-6 col-6 col-custom">
                <figure class="header-logo d-flex align-items-center">
                    <a href="{{route('homepage.index')}}">
                        <img src="{{asset('assets/img/icon/icon1.webp')}}" alt="logo"/>
                    </a>
                </figure>
            </div>
            <div class="col-lg-8 d-none d-lg-flex justify-content-center col-custom">
                <nav class="main-nav d-none d-lg-flex mb-5">
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
                            <a href="{{route('gallery.index')}}">
                                <span class="menu-text">galerie</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('contact.index')}}">
                                <span class="menu-text">kontakt</span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="text-muted">objednávky</span>
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
                <section class="header-right-area main-nav mb-5">
                    <time class="text-start">
                        {{$day}}
                        <br />
                        Svátek má
                        <b style="color: #C40041">{{$name}}</b>
                    </time>
                    <ul class="nav mt-3">
                        <li class="account-menu-wrap d-none d-lg-flex">
                            <a class="off-canvas-menu-btn mb-5">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                        <li class="mobile-menu-btn d-lg-none">
                            <a class="off-canvas-btn">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- Main Header Area End -->
<!-- off-canvas menu start -->
<section class="off-canvas-wrapper" id="mobileMenu">
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
                        <li>
                            <a href="{{route('homepage.index')}}">Úvod</a>
                        </li>
                        <li>
                            <a href="{{route('about_us.index')}}">O nás</a>
                        </li>
                        <li>
                            <a href="{{route('gallery.index')}}">Galerie</a>
                        </li>
                        <li>
                            <a href="{{route('contact.index')}}">Kontakt</a>
                        </li>
                        <li>
                            <a class="text-muted">Objednávky</a>
                        </li>
                        <li>
                            <a class="text-muted">E-Shop</a>
                        </li>
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
                            <p>
                                <a href="tel:+420777353536">+420 777 353 536</a>
                            </p>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <p>
                                <a href="mailto:info@almastflowers.cz">info@almastflowers.cz</a>
                            </p>
                        </li>
                    </ul>
                    <section class="widget-social">
                        <a title="Facebook" href="https://www.facebook.com/profile.php?id=100085530743756" target="_blank"><i class="fa fa-facebook-f"></i></a>
                        <a title="Twitter" href="https://www.instagram.com/almastflowers/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a title="Linkedin" href="https://www.tiktok.com/@almastflowers" target="_blank"><i class="fab fa-tiktok"></i></a>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- off-canvas menu end -->
<!-- off-canvas menu start -->
<section class="off-canvas-menu-wrapper" id="sideMenu">
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-inner-content">
        <div class="off-canvas-inner">
            <div class="btn-close-off-canvas">
                <i class="fa fa-times"></i>
            </div>
            <!-- offcanvas widget area start -->
            <article class="offcanvas-widget-area">
                <ul class="menu-top-menu">
                    <li><a>O webu</a></li>
                </ul>
                <p class="desc-content">
                    Na stránkách se neunávně pracuje. Prosíme, mějte trpělivost a my Vám za oplátku přineseme funkce, které hledáte
                    🌸
                </p>
                <p class="desc-content">
                    Pokud máte nějaký technický problém se stránkou, obraťte se prosím na email
                    <b>
                        <a href="mailto:support@almastflowers.cz">support@almastflowers.cz</a>
                    </b>
                </p>
                <div class="top-info-wrap text-left text-black">
                    <h3 class="mb-3">
                        <span style="color: grey;">Almast</span>
                        <span class="fw-bold" style="color: deeppink;">Flowers</span>
                    </h3>
                    <ul class="address-info">
                        <li>
                            <p>
                            <i class="fa fa-phone"></i>
                                <a href="tel:+420777353536">
                                    +420 777 353 536
                                </a>
                            </p>
                        </li>
                        <li>
                            <p>
                            <i class="fa fa-envelope"></i>
                                <a href="mailto:info@almastflowers.cz">
                                    info@almastflowers.cz
                                </a>
                            </p>
                        </li>
                    </ul>
                    <section class="widget-social">
                        <a title="Facebook" href="https://www.facebook.com/profile.php?id=100085530743756" target="_blank"><i class="fa fa-facebook-f"></i></a>
                        <a title="Twitter" href="https://www.instagram.com/almastflowers/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a title="Linkedin" href="https://www.tiktok.com/@almastflowers" target="_blank"><i class="fab fa-tiktok"></i></a>
                    </section>
                </div>
            </article>
            <!-- offcanvas widget area end -->
        </div>
    </div>
</section>
<!-- off-canvas menu end -->
