@extends('layouts.main')

@section('title')
    Objednávky
@endsection

@section('content')

    <div class="intro11-slider-wrap section-2">
        <div class="intro11-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="intro11-section swiper-slide slide-6 slide-bg-1 bg-position">
                    <!-- Intro Content Start -->
                    <div class="intro11-content-2 text-center">
                        <h1 class="different-title">Objednávky</h1>
                        <h2 class="title">květiny na míru podle Vašeho přání</h2>
                    </div>
                    <!-- Intro Content End -->
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12 col-custom">
                <form method="post" action="http://whizthemes.com/mail-php/reza/flosun/mail.php" id="contact-form" accept-charset="UTF-8" class="contact-form">
                    <div class="comment-box mt-5">
                        <h5 class="text-uppercase">Get in Touch</h5>
                        <div class="row mt-3">
                            <div class="col-md-6 col-custom">
                                <div class="input-item mb-4">
                                    <input class="border-0 rounded-0 w-100 input-area name gray-bg" type="text" name="con_name" id="con_name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="input-item mb-4">
                                    <input class="border-0 rounded-0 w-100 input-area email gray-bg" type="email" name="con_email" id="con_email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12 col-custom">
                                <div class="input-item mb-4">
                                    <input class="border-0 rounded-0 w-100 input-area email gray-bg" type="text" name="con_content" id="con_content" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-12 col-custom">
                                <div class="input-item mb-4">
                                    <textarea cols="30" rows="5" class="border-0 rounded-0 w-100 custom-textarea input-area gray-bg" name="con_message" id="con_message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-custom mt-40">
                                <button type="submit" id="submit" name="submit" class="btn flosun-button secondary-btn theme-color rounded-0">Send A Message</button>
                            </div>
                            <p class="col-8 col-custom form-message mb-0"></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
