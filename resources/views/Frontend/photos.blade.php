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
                                        <a href="{{ url("/") }}/storage/{{ $photo->image }}" data-fancybox="gallery">
                                            <video width="100%" controls>
                                                <source src="{{ url("/") }}/storage/{{ $photo->image }}" type="video/{{ strtolower($extension) }}">
                                                Sorry ! Your browser does not support embedded videos !
                                            </video>
                                        </a>
                                    @else
                                        <a href="{{ url("/") }}/storage/{{ $photo->image }}" data-fancybox="gallery">
                                            <img src="{{ url("/") }}/storage/{{ $photo->image }}" alt="">
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
