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


    <div class="blog-main-area mt-30">
        <div class="container container-default custom-area">
            <!-- Top Toolbar Start -->
            <div class="row mb-2">
                <div class="col-sm-12 col-custom">
                    <div class="toolbar-bottom">
                        <div class="pagination">
                            <ul>
                                @if($page > 1)
                                    <li class="previous" ><a href="?page={{$page - 1}}">&lt;&lt; předchozí</a></li>
                                @endif
                                @for($pagination = 1; $pagination <= $total_images; $pagination++)
                                        <li><a href="?page={{$pagination}}">{{$pagination}}</a> </li>
                                    @endfor
                                @if($page < $total_images)
                                    <li class="next ms-2"><a href="?page={{$page + 1}}">další &gt;&gt;</a></li>
                                @endif
                            </ul>
                        </div>
                        <p class="desc-content text-center text-sm-right mb-0">Stránka {{$page}} - {{$total_images}}</p>
                    </div>
                </div>
            </div>
            <!-- Top Toolbar End -->
                    <!-- Shop Wrapper Start -->
                    <div class="row">
                        @foreach($images as $img)
                        <div class="col-12 col-md-6 col-custom mb-30">
                            <div class="blog-lst">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a class="d-block">
                                            <img src="{{asset("assets/img/gallery/$img")}}" alt="gallery image" class="w-100">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Shop Wrapper End -->
            <!-- Bottom Toolbar Start -->
            <div class="row mb-2">
                <div class="col-sm-12 col-custom">
                    <div class="toolbar-bottom">
                        <div class="pagination">
                            <ul>
                                @if($page > 1)
                                    <li class="previous" ><a href="?page={{$page - 1}}">&lt;&lt; předchozí</a></li>
                                @endif
                                @for($pagination = 1; $pagination <= $total_images; $pagination++)
                                    <li><a href="?page={{$pagination}}">{{$pagination}}</a> </li>
                                @endfor
                                @if($page < $total_images)
                                    <li class="next ms-2"><a href="?page={{$page + 1}}">další &gt;&gt;</a></li>
                                @endif
                            </ul>
                        </div>
                        <p class="desc-content text-center text-sm-right mb-0">Stránka {{$page}} - {{$total_images}}</p>
                    </div>
                </div>
            </div>
            <!-- Bottom Toolbar End -->
        </div>
    </div>

@endsection
