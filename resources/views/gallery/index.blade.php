@extends('layouts.main')

@section('title')
    Galerie
@endsection

@section('content')

    <div class="intro11-slider-wrap section-2">
        <div class="intro11-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="intro11-section swiper-slide slide-5 slide-bg-1 bg-position">
                    <!-- Intro Content Start -->
                    <div class="intro11-content-2 text-center">
                        <h1 class="different-title">Galerie</h1>
                        <h2 class="title">Ukázka naší práce</h2>
                    </div>
                    <!-- Intro Content End -->
                </div>
            </div>
        </div>
    </div>


    <div class="blog-main-area">
        <div class="container container-default custom-area">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 col-12 col-custom widget-mt">
                    <!-- Shop Wrapper Start -->
                    <div class="row">
                        <div class="col-12 col-md-6 col-custom mb-30">
                            <div class="blog-lst">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a class="d-block">
                                            <img src="{{asset('assets/img/gallery/img-1.jpg')}}" alt="Blog Image" class="w-100">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-custom mb-30">
                            <div class="blog-lst">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a class="d-block">
                                            <img src="{{asset('assets/img/gallery/img-2.jpg')}}" alt="Blog Image" class="w-100">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-custom mb-30">
                            <div class="blog-lst">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a class="d-block">
                                            <img src="{{asset('assets/img/gallery/img-3.jpg')}}" alt="Blog Image" class="w-100">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-custom mb-30">
                            <div class="blog-lst">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a class="d-block">
                                            <img src="{{asset('assets/img/gallery/img-4.jpg')}}" alt="Blog Image" class="w-100">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-custom mb-30">
                            <div class="blog-lst">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a class="d-block">
                                            <img src="{{asset('assets/img/gallery/img-5.jpg')}}" alt="Blog Image" class="w-100">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-custom mb-30">
                            <div class="blog-lst">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a class="d-block">
                                            <img src="{{asset('assets/img/gallery/img-6.jpg')}}" alt="Blog Image" class="w-100">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Wrapper End -->
                    <!-- Bottom Toolbar Start -->
                    <div class="row mb-2">
                        <div class="col-sm-12 col-custom">
                            <div class="toolbar-bottom">
                                <div class="pagination">
                                    <ul>
                                        <li class="current">1</li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="next"><a href="#">next</a></li>
                                        <li><a href="#">&gt;&gt;</a></li>
                                    </ul>
                                </div>
                                <p class="desc-content text-center text-sm-right mb-0">Showing 1 - 12 of 34 result</p>
                            </div>
                        </div>
                    </div>
                    <!-- Bottom Toolbar End -->
                </div>
                <div class="col-lg-3 col-12 col-custom">
                    <!-- Sidebar Widget Start -->
                    <aside class="sidebar_widget widget-mt">
                        <div class="widget_inner">
                            <div class="widget-list widget-mb-1">
                                <h3 class="widget-title">Categories</h3>
                                <div class="sidebar-body">
                                    <ul class="sidebar-list">
                                        <li><a href="#">All Product</a></li>
                                        <li><a href="#">Best Seller (5)</a></li>
                                        <li><a href="#">Featured (4)</a></li>
                                        <li><a href="#">New Products (6)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!-- Sidebar Widget End -->
                </div>
            </div>
        </div>
    </div>

@endsection
