@extends('Frontend.layouts.app')

@section('title', $artShop->title)

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ url('/') }}/storage/{{ $artShop->image }});">
        <div class="auto-container">
            <h1>{{ $artShop->title }}</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route("index") }}">Home </a></li>
                <li><a href="{{ route("artShops") }}">Art Shop </a></li>
                <li>{{ $artShop->title }}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="event-detail detail-page-content">
                        <div class="event-block-two">
                            <div class="inner-box">
                                <div class="lower-content">
                                    <h3>{{ $artShop->description }}</h3>
                                    @if($artShop->price)
                                        <div class="price-tag">&euro;{{ number_format($artShop->price, 2) }}</div>
                                    @endif
                                    <p>{!! $artShop->body !!}</p>
                                </div>
                            </div>
                        </div>

                        @if($artShop->images->count() > 0)
                            <!-- Gallery Carousel -->
                            <div class="art-shop-gallery">
                                <h3 class="gallery-title">Gallery</h3>
                                <div class="art-shop-carousel owl-carousel owl-theme">
                                    @foreach($artShop->images as $img)
                                        <div class="gallery-slide">
                                            <a href="{{ url('/') }}/storage/{{ $img->image }}" data-fancybox="art-shop-gallery">
                                                <img src="{{ url('/') }}/storage/{{ $img->image }}" alt="{{ $artShop->title }}">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->

    @if($artShop->images->count() > 0)
        <style>
            .art-shop-gallery {
                margin-top: 40px;
                padding-top: 30px;
                border-top: 1px solid #eee;
            }

            .art-shop-gallery .gallery-title {
                font-size: 26px;
                color: #222;
                margin-bottom: 25px;
                text-align: center;
            }

            .art-shop-carousel .gallery-slide {
                overflow: hidden;
                border-radius: 6px;
            }

            .art-shop-carousel .gallery-slide img {
                width: 100%;
                height: 350px;
                object-fit: cover;
                transition: transform 0.4s ease;
                border-radius: 6px;
            }

            .art-shop-carousel .gallery-slide:hover img {
                transform: scale(1.03);
            }

            .art-shop-carousel .owl-nav {
                margin-top: 15px;
                text-align: center;
            }

            .art-shop-carousel .owl-nav button.owl-prev,
            .art-shop-carousel .owl-nav button.owl-next {
                width: 40px;
                height: 40px;
                background: #d1af78 !important;
                color: #fff !important;
                border-radius: 50%;
                font-size: 18px;
                line-height: 40px;
                margin: 0 5px;
                transition: all 0.3s ease;
            }

            .art-shop-carousel .owl-nav button.owl-prev:hover,
            .art-shop-carousel .owl-nav button.owl-next:hover {
                background: #b8944d !important;
            }

            .art-shop-carousel .owl-dots {
                margin-top: 15px;
                text-align: center;
            }

            .art-shop-carousel .owl-dots .owl-dot span {
                width: 10px;
                height: 10px;
                background: #ccc;
                border-radius: 50%;
                transition: all 0.3s ease;
            }

            .art-shop-carousel .owl-dots .owl-dot.active span {
                background: #d1af78;
                width: 25px;
                border-radius: 5px;
            }

            @media (max-width: 991px) {
                .art-shop-carousel .gallery-slide img {
                    height: 280px;
                }
            }

            @media (max-width: 767px) {
                .art-shop-gallery .gallery-title {
                    font-size: 22px;
                    margin-bottom: 20px;
                }

                .art-shop-carousel .gallery-slide img {
                    height: 220px;
                }
            }

            @media (max-width: 479px) {
                .art-shop-gallery .gallery-title {
                    font-size: 18px;
                }

                .art-shop-carousel .gallery-slide img {
                    height: 180px;
                }

                .art-shop-carousel .owl-nav button.owl-prev,
                .art-shop-carousel .owl-nav button.owl-next {
                    width: 34px;
                    height: 34px;
                    font-size: 14px;
                    line-height: 34px;
                }
            }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                if (typeof jQuery !== 'undefined' && jQuery.fn.owlCarousel) {
                    jQuery('.art-shop-carousel').owlCarousel({
                        loop: true,
                        nav: true,
                        dots: true,
                        autoplay: true,
                        autoplayTimeout: 4000,
                        autoplayHoverPause: true,
                        smartSpeed: 600,
                        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                        responsive: {
                            0: { items: 1, margin: 10 },
                            576: { items: 2, margin: 15 },
                            992: { items: 3, margin: 20 }
                        }
                    });
                }
            });
        </script>
    @endif
@endsection
