@extends('layouts.main')

@section('title')
    Kontakt
@endsection

@section('content')

    <div class="intro11-slider-wrap section-2">
    <div class="intro11-slider swiper-container">
        <div class="swiper-wrapper">
            <div class="intro11-section swiper-slide slide-4 slide-bg-1 bg-position">
                <!-- Intro Content Start -->
                <div class="intro11-content-2 text-center">
                    <h1 class="different-title">Kontakt</h1>
                    <h2 class="title">Můžete nám napsat nebo se kdykoliv stavit na prodejně</h2>
                </div>
                <!-- Intro Content End -->
            </div>
        </div>
    </div>
    </div>


    <!-- Contact Us Area Start Here -->
    <div class="contact-us-area mt-no-text">
        <div class="container custom-area">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-custom">
                    <div class="contact-info-item">
                        <div class="con-info-icon">
                            <i class="lnr lnr-map-marker"></i>
                        </div>
                        <div class="con-info-txt">
                            <h4>Pobočka</h4>
                            <p>Bryksova 781/57, 198 00 Praha 14-Černý Most</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-custom">
                    <div class="contact-info-item">
                        <div class="con-info-icon">
                            <i class="lnr lnr-smartphone"></i>
                        </div>
                        <div class="con-info-txt">
                            <h4>Zavolejte nám</h4>
                            <p>+420 777 353 536</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-custom text-align-center">
                    <div class="contact-info-item">
                        <div class="con-info-icon">
                            <i class="lnr lnr-envelope"></i>
                        </div>
                        <div class="con-info-txt">
                            <h4>Napište nám</h4>
                            <p>info@almastflowers.cz</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
                    <div class="iframe-responsive">
                        <iframe class="mb-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2558.8447706825036!2d14.575575615886878!3d50.107912419867645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470bed5b842aee21%3A0x26586d6805b16263!2sBryksova%20781%2C%20198%2000%20Praha%2014-%C4%8Cern%C3%BD%20Most!5e0!3m2!1sen!2scz!4v1670444838356!5m2!1sen!2scz" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
                    <p class="p1">
                        Květinářství <a class="text-decoration-underline" href="{{route('homepage.index')}}">Almast Flowers</a> se nachází na krásně viditelném místě, na rohu budovy, kde se kříží ulice Bryksova a Mansfeldova.
                        Při cestě z metra půjdete stále rovně, ani ne po 100 metrech nás uvidíte a budete jen pár kroků od našeho obchodu.
                        V případě cesty z obchodního centra stačí jít směrem zpět k metru a po cca 200 metrech po levé straně se nachází naše prodejna.
                        <br />
                        <br />
                        Adresa obchodu je
                        <a class="text-decoration-underline" href="https://www.google.cz/maps/place/Bryksova+781,+198+00+Praha+14-%C4%8Cern%C3%BD+Most/@50.1079124,14.5755756,17z/data=!3m1!4b1!4m5!3m4!1s0x470bed5b842aee21:0x26586d6805b16263!8m2!3d50.107909!4d14.5777643" target="_blank">Bryksova 781/57, Černý Most, Praha 9, 198 00.</a>
                        Autobusem a metrem je dostupnost bez problému, zastávka Černý Most.
                        Při cestě autem zaprkujete v blízkém okolí bez problému. Po celé ulici Bryksova jsou bezplatná parkovací místa.
                    </p>
                </div>
            </div>


        </div>
    </div>
    <!-- Contact Us Area End Here -->


@endsection
