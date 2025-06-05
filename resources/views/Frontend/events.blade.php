@extends('Frontend.layouts.app')

@section('title', 'Our Events')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset("") }}assets/images/background/6.jpg);">
        <div class="auto-container">
            <h1>Our Events</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route("index") }}">Home </a></li>
                <li>Our Events</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Event Section -->
    <section class="event-section event-grid">
        <div class="auto-container">
            <div class="row clearfix">
                @forelse($events as $event)
                    <!-- Even Block -->
                    <div class="event-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box"><a href="{{ route("singleEvent", ['slug' => $event->slug]) }}"><img src="{{ url('/') }}/storage/{{ $event->image }}" alt=""></a></div>
                            <div class="lower-content">
                                <h3><a href="{{ route("singleEvent", ['slug' => $event->slug]) }}">{{ $event->name }}</a></h3>
                                <a href="{{ route("singleEvent", ['slug' => $event->slug]) }}" class="read-more">Keep Reading <i>&rarr;</i></a>
                            </div>
                        </div>
                    </div>
                @empty
                    No Data !
                @endforelse
            </div>
        </div>
    </section>
    <!-- End Event Section -->
@endsection
