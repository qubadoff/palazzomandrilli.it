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
                            $isVideo = in_array(strtolower($extension), ['mp4', 'webm', 'ogg', 'mov']);
                        @endphp

                        <div class="others col-md-4 col-sm-6 col-xs-12 mb-4">
                            <div class="inner-box" style="height: 320px;">
                                <div class="image-box" style="width: 100%; height: 75%; overflow: hidden; border-radius: 10px;">
                                    @if($isVideo)
                                        <div style="width: 100%; height: 100%; position: relative;">
                                            <video
                                                controls
                                                preload="metadata"
                                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; border-radius: 10px;"
                                            >
                                                <source src="{{ asset('storage/' . $photo->image) }}" type="video/{{ strtolower($extension) }}">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    @else
                                        <a href="{{ asset('storage/' . $photo->image) }}" data-fancybox="gallery">
                                            <img
                                                src="{{ asset('storage/' . $photo->image) }}"
                                                alt="{{ $photo->name }}"
                                                class="img-fluid"
                                                style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;"
                                            >
                                        </a>
                                    @endif
                                </div>

                                <div class="overlay-box mt-2 text-center" style="height: 25%;">
                                    <div class="content d-flex align-items-center justify-content-center h-100">
                                        <h3 style="font-size: 16px; margin: 0;">{{ $photo->name }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No Data!</p>
                    @endforelse


                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery section -->
@endsection
