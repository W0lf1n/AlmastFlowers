@extends('layouts.main')

@section('title')
    Úvod
@endsection

@section('content')


    <!-- Slider/Intro Section Start -->
    <x-slider />
    <!-- Slider/Intro Section End -->



    <!-- Shop Collection Start Here -->
    <div class="shop-collection-area gray-bg pt-no-text pb-no-text">
            <div class="container-fluid mb-5">
                <div class="row">
                    <div class="col-lg-8 ms-auto me-auto text-center" style="font-size: large">
                        <p>
                            Spěcháte na narozeniny? Zapomněli jste ženě koupit něco k výročí? Nebo chcete udělat radost sami sobě?
                        </p><p>
                            U nás najdete vše co potřebujete! Květiny řezané i hrnkové, balónky či dárek, v podobě dekorace, svíčky nebo například vína. Vše na jednom místě právě u nás v Almast Flowers.
                        </p><p>
                            My vám zvládneme zařídit oslavu či překvapení na klíč a vy nemusíte běhat po několika různých obchodech a ztrácet čas.
                        </p>
                        <a href="{{route('order.send')}}">send order</a>
                    </div>
                </div>
            </div>

        <div class="container custom-area">
            <div class="row mb-30">
                <div class="col-md-6 col-custom">
                    <div class="collection-content">
                        <div class="section-title text-left">
                            <span class="section-title-1">Pro každou příležitost</span>
                            <h3 class="section-title-3">řezané květiny</h3>
                        </div>
                        <div class="desc-content">
                            <p>Najdete u nás široký výběr čerstvých květin, a to sezóních i mimosezóních! Uvážeme Vám jakoukoliv kytici dle vašich přání a požadavků.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-custom">
                    <!--Single Banner Area Start-->
                    <div class="single-banner hover-style">
                        <div class="banner-img">
                            <img src="{{asset('assets/img/homepage/img3.jpg')}}" style="object-fit: contain" height="450" alt="">
                            <div class="overlay-1"></div>
                        </div>
                    </div>
                    <!--Single Banner Area End-->
                </div>
            </div>
            <div class="row mb-30">
                <div class="col-md-6 col-custom order-2 order-md-1">
                    <!--Single Banner Area Start-->
                    <div class="single-banner hover-style">
                        <div class="banner-img">
                            <img src="{{asset('assets/img/homepage/img2.heic')}}" style="object-fit: contain" height="450" alt="">
                            <div class="overlay-1"></div>
                        </div>
                    </div>
                    <!--Single Banner Area End-->
                </div>
                <div class="col-md-6 col-custom order-1 order-md-2">
                    <div class="collection-content">
                        <div class="section-title text-left">
                            <span class="section-title-1">Na oslavy a večírky</span>
                            <h3 class="section-title-3">balónky</h3>
                        </div>
                        <div class="desc-content">
                            <p>Menší, větší či opravdu velký balónkový puget nebo girlanda na narozeniny, výročí či narození miminka? Žádný problém!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-30">
                <div class="col-md-6 col-custom">
                    <div class="collection-content">
                        <div class="section-title text-left">
                            <span class="section-title-1">Pro každou příležitost</span>
                            <h3 class="section-title-3">hrnkové květiny</h3>
                        </div>
                        <div class="desc-content">
                            <p>Máme velkou škálu i pokojivých rostlin. Od malinkých kaktusů až po velké exotické palmy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-custom">
                    <!--Single Banner Area Start-->
                    <div class="single-banner hover-style">
                        <div class="banner-img">
                            <img src="{{asset('assets/img/homepage/img6.heic')}}" style="object-fit: contain" height="450" alt="">
                            <div class="overlay-1"></div>
                        </div>
                    </div>
                    <!--Single Banner Area End-->
                </div>
            </div>
            <div class="row mb-30">
                <div class="col-md-6 col-custom order-2 order-md-1">
                    <!--Single Banner Area Start-->
                    <div class="single-banner hover-style">
                        <div class="banner-img">
                            <img src="{{asset('assets/img/homepage/img5.jpeg')}}" style="object-fit: contain" height="450" alt="">
                            <div class="overlay-1"></div>
                        </div>
                    </div>
                    <!--Single Banner Area End-->
                </div>
                <div class="col-md-6 col-custom order-1 order-md-2">
                    <div class="collection-content">
                        <div class="section-title text-left">
                            <span class="section-title-1">Lepší bydlení</span>
                            <h3 class="section-title-3">dárky & dekorace</h3>
                        </div>
                        <div class="desc-content">
                            <p>Andílci, nespočet svíček nebo dárkové sady… a mnoho dalšího co udělá radost vám či vašim blízkým.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-30">
                <div class="col-md-6 col-custom">
                    <div class="collection-content">
                        <div class="section-title text-left">
                            <span class="section-title-1">Všechny druhy oslav</span>
                            <h3 class="section-title-3">vína & prosseca</h3>
                        </div>
                        <div class="desc-content">
                            <p>V nabídce máme také převážně Italská vína a prosseca, která běžně neseženete. Od levnějších až po opravdu kvalitní drahé lahve.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-custom">
                    <!--Single Banner Area Start-->
                    <div class="single-banner hover-style">
                        <div class="banner-img">
                            <img src="{{asset('assets/img/homepage/img7.jpeg')}}" style="object-fit: contain" height="450" alt="">
                            <div class="overlay-1"></div>
                        </div>
                    </div>
                    <!--Single Banner Area End-->
                </div>
            </div>


        </div>
    </div>
    <!-- Shop Collection End Here -->


@endsection
