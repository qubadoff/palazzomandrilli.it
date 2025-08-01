@extends('Frontend.layouts.app')

@section('title', 'Photos')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset("") }}assets/images/photos.jpg);">
        <div class="auto-container">
            <h1>Photos</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route("index") }}">Home </a></li>
                <li>Photos</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="auto-container">
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <div class="inner-container clearfix">
                    <div class="sec-title">
                        <span class="title">Its Our Great Flows</span>
                        <h2>From Our Photos</h2>
                    </div>
                </div>

                <div class="filter-list row clearfix">

                    @forelse(photos() as $photo)
                        @php
                            $extension = pathinfo($photo->image, PATHINFO_EXTENSION);
                        @endphp

                            <!-- Gallery Item-->
                        <div class="others col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    @if(in_array(strtolower($extension), ['mp4', 'webm', 'ogg']))
                                        <div class="video-wrapper" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                                            <video controls preload="metadata" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                                                <source src="{{ asset('storage/' . $photo->image) }}" type="video/{{ strtolower($extension) }}">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    @else
                                        <a href="{{ asset('storage/' . $photo->image) }}" data-fancybox="gallery">
                                            <img src="{{ asset('storage/' . $photo->image) }}" alt="" class="img-fluid">
                                        </a>
                                    @endif


                                    <div class="overlay-box">
                                        <div class="content">
                                            <h3><a href="#">{{ $photo->name }}</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        No Data !
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery section -->
@endsection
