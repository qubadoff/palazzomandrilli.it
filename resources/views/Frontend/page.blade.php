@extends('Frontend.layouts.app')

@section('title', $page->title)

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ url('/') }}/storage/{{ $page->image }});">
        <div class="auto-container">
            <h1>{{ $page->title }}</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route("index") }}">Home </a></li>
                <li>{{ $page->title }}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Feture Section -->
    <section class="feature-section style-two" style="background-image: url({{ asset("") }}assets/images/background/5.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="text-column col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="text">
                            {!! $page->body !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feture Section -->
@endsection
