@extends('layouts.main')

@section('title')
    O nás
@endsection

@section('content')

    <div class="intro11-slider-wrap section-2">
        <div class="intro11-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="intro11-section swiper-slide slide-3 slide-bg-1 bg-position">
                    <!-- Intro Content Start -->
                    <div class="intro11-content-2 text-center">
                        <h1 class="different-title">O nás</h1>
                        <h2 class="title">Podívejte se s námi na historii našeho květinářství</h2>
                    </div>
                    <!-- Intro Content End -->
                </div>
            </div>
        </div>
    </div>

    <!-- History Area Start Here -->
    <div class="our-history-area gray-bg pt-5 mt-text-3">
        <div class="our-history-area">
            <div class="container custom-area">
                <div class="row">
                    <!--Section Title Start-->
                    <div class="col-12 col-custom">
                        <div class="section-title text-center mb-30">
                            <span class="section-title-1">kousek našeho příběhu</span>
                            <h2 class="section-title-large display-6" style="font-family: 'Roboto', sans-serif;">Proč název Almast<span style="color: #eb4a7e">Flowers</span>?</h2>
                        </div>
                    </div>
                    <!--Section Title End-->
                </div>
                <div class="row">
                    <div class="col-lg-8 ms-auto me-auto">
                        <div class="history-area-content text-center border-0">
                            <p>Slovo <b>Almast</b> není jen tak nějaký výmysl! Pochází z Arménštiny, a vyjma toho, že je to název vzácného kamene, je to také křestní jméno babičky, která pracovala s květinami celý svůj život a stala se tak inspirací pro naše pokračování v práci s květinami. My jsme se ovšem rozhodli koncept klasického květinářství lehce oživit…
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature History Area End Here -->
    <!-- Team Member Area Start Here
    <div class="team-member-wrapper mt-text-3">
        <div class="container custom-area">
            <div class="row">
                <div class="col-lg-12 col-custom">
                    <div class="section-title text-center">
                        <span class="section-title-1">Pracovníci na které se můžete obrátit</span>
                        <h2 class="section-title-2">náš zkušený tým</h2>
                    </div>
                </div>
            </div>
            <div class="row ht-team-member-style-two pt-40">
                <div class="col-lg-4 col-md-4 col-custom">
                    <div class="grid-item">
                        <div class="ht-team-member">
                            <div class="team-image">
                                <img class="img-fluid" src="{{asset('assets/img/avatar/avatar1.png')}}" alt="">
                            </div>
                            <div class="team-info text-center">
                                <h5 class="name">Jméno Příjmení</h5>
                                <div class="position">Pozice</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-custom">
                    <div class="grid-item">
                        <div class="ht-team-member">
                            <div class="team-image">
                                <img class="img-fluid" src="{{asset('assets/img/avatar/avatar2.png')}}" alt="">
                            </div>
                            <div class="team-info text-center">
                                <h5 class="name">Jméno Přijmení</h5>
                                <div class="position">Pozice</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-custom">
                    <div class="grid-item">
                        <div class="ht-team-member">
                            <div class="team-image">
                                <img class="img-fluid" src="{{asset('assets/img/avatar/avatar3.png')}}" alt="">
                            </div>
                            <div class="team-info text-center">
                                <h5 class="name">Jméno Přijmení</h5>
                                <div class="position">Pozice</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     Team Member Area End Here -->


@endsection
