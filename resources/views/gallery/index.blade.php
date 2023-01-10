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
                                <?php $current_page = request()->query('page'); ?>
                                @if($page > 1)
                                    <li class="previous mb-1" ><a href="?page={{$page - 1}}">&lt;&lt; předchozí</a></li>
                                @endif
                                @for($pagination = 1; $pagination <= $total_images; $pagination++)
                                    @if ($current_page == $pagination)
                                        <li><a style="background-color: #E72463; color: white" href="?page={{$pagination}}"><b>{{$pagination}}</b></a> </li>
                                    @else
                                        <li><a href="?page={{$pagination}}">{{$pagination}}</a> </li>
                                    @endif
                                @endfor
                                @if($page < $total_images)
                                    <li class="next"><a href="?page={{$page + 1}}">další &gt;&gt;</a></li>
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
                    @foreach(range(1, count($file_images)/5) as $i)
                            <?php $path = public_path("assets/img/gallery/img-$i.webp"); $img_width = getimagesize($path); ?>
                        <div class="col-lg-2 col-md-2 col-sm-3 mb-3">
                            <a href="{{asset("assets/img/gallery/img-$i.webp")}}" data-toggle="lightbox" data-gallery="example-gallery">

                                <img class="w-100 image_resizer rounded-2" src="{{ asset("assets/img/gallery/img-$i.1.webp") }}"

                                     alt="Ukázka naší práce z galerijních fotek."

                                     srcset="{{ asset("assets/img/gallery/img-$i.2.webp") }} 540w,
                                     {{ asset("assets/img/gallery/img-$i.3.webp") }} 850w,
                                     {{ asset("assets/img/gallery/img-$i.4.webp") }} 1070w,
                                     {{ asset("assets/img/gallery/img-$i.webp") }} {{$img_width[0]}}w"

                                     sizes="(min-width: 1220px) 175px, (min-width: 1000px) 134px, (min-width: 780px) 94px, (min-width: 580px) 109px, calc(100vw - 24px)"
                                >
                            </a>
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
                                    <li class="previous mb-1" ><a href="?page={{$page - 1}}">&lt;&lt; předchozí</a></li>
                                @endif
                                    @for($pagination = 1; $pagination <= $total_images; $pagination++)
                                        @if ($current_page == $pagination)
                                            <li><a style="background-color: #E72463; color: white" href="?page={{$pagination}}"><b>{{$pagination}}</b></a> </li>
                                        @else
                                            <li><a href="?page={{$pagination}}">{{$pagination}}</a> </li>
                                        @endif
                                    @endfor
                                @if($page < $total_images)
                                    <li class="next"><a href="?page={{$page + 1}}">další &gt;&gt;</a></li>
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
