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
                    </div>
                </div>
            </div>

        <div class="container custom-area">
            <div class="row mb-30">
                <div class="col-md-6 col-custom">
                    <div class="collection-content">
                        <div class="section-title text-left">
                            <span class="section-title-1">řezané a hrnkové květiny</span>
                            <h3 class="section-title-3 pb-0">květiny</h3>
                        </div>
                        <div class="desc-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-custom">
                    <!--Single Banner Area Start-->
                    <div class="single-banner hover-style">
                        <div class="banner-img">
                            <a href="#">
                                <img src="{{asset('assets/img/img-1.jpg')}}" style="object-fit: contain" height="450" alt="">
                                <div class="overlay-1"></div>
                            </a>
                        </div>
                    </div>
                    <!--Single Banner Area End-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-custom order-2 order-md-1">
                    <!--Single Banner Area Start-->
                    <div class="single-banner hover-style">
                        <div class="banner-img">
                            <a href="#">
                                <img src="{{asset('assets/img/img-2.jpg')}}" style="object-fit: contain" height="450" alt="">
                                <div class="overlay-1"></div>
                            </a>
                        </div>
                    </div>
                    <!--Single Banner Area End-->
                </div>
                <div class="col-md-6 col-custom order-1 order-md-2">
                    <div class="collection-content">
                        <div class="section-title text-left">
                            <span class="section-title-1">balónky</span>
                            <h3 class="section-title-3 pb-0">na oslavu</h3>
                        </div>
                        <div class="desc-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-30">
                <div class="col-md-6 col-custom">
                    <div class="collection-content">
                        <div class="section-title text-left">
                            <span class="section-title-1">Balónky pro</span>
                            <h3 class="section-title-3 pb-0">narozeninové oslavy</h3>
                        </div>
                        <div class="desc-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-custom">
                    <!--Single Banner Area Start-->
                    <div class="single-banner hover-style">
                        <div class="banner-img">
                            <a href="#">
                                <img src="{{asset('assets/img/img-1.jpg')}}" style="object-fit: contain" height="450" alt="">
                                <div class="overlay-1"></div>
                            </a>
                        </div>
                    </div>
                    <!--Single Banner Area End-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-custom order-2 order-md-1">
                    <!--Single Banner Area Start-->
                    <div class="single-banner hover-style">
                        <div class="banner-img">
                            <a href="#">
                                <img src="{{asset('assets/img/img-2.jpg')}}" style="object-fit: contain" height="450" alt="">
                                <div class="overlay-1"></div>
                            </a>
                        </div>
                    </div>
                    <!--Single Banner Area End-->
                </div>
                <div class="col-md-6 col-custom order-1 order-md-2">
                    <div class="collection-content">
                        <div class="section-title text-left">
                            <span class="section-title-1">Velké kytice pro</span>
                            <h3 class="section-title-3 pb-0">svatební akce</h3>
                        </div>
                        <div class="desc-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-30">
                <div class="col-md-6 col-custom">
                    <div class="collection-content">
                        <div class="section-title text-left">
                            <span class="section-title-1">Balónky pro</span>
                            <h3 class="section-title-3 pb-0">narozeninové oslavy</h3>
                        </div>
                        <div class="desc-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-custom">
                    <!--Single Banner Area Start-->
                    <div class="single-banner hover-style">
                        <div class="banner-img">
                            <a href="#">
                                <img src="{{asset('assets/img/img-1.jpg')}}" style="object-fit: contain" height="450" alt="">
                                <div class="overlay-1"></div>
                            </a>
                        </div>
                    </div>
                    <!--Single Banner Area End-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-custom order-2 order-md-1">
                    <!--Single Banner Area Start-->
                    <div class="single-banner hover-style">
                        <div class="banner-img">
                            <a href="#">
                                <img src="{{asset('assets/img/img-2.jpg')}}" style="object-fit: contain" height="450" alt="">
                                <div class="overlay-1"></div>
                            </a>
                        </div>
                    </div>
                    <!--Single Banner Area End-->
                </div>
                <div class="col-md-6 col-custom order-1 order-md-2">
                    <div class="collection-content">
                        <div class="section-title text-left">
                            <span class="section-title-1">Velké kytice pro</span>
                            <h3 class="section-title-3 pb-0">svatební akce</h3>
                        </div>
                        <div class="desc-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
            </div>
























        </div>
    </div>
    <!-- Shop Collection End Here -->


@endsection
