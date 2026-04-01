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
    <section class="event-section event-grid card-grid-section">
        <div class="auto-container">
            <div class="row clearfix">
                @forelse($events as $event)
                    <div class="event-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="card-image">
                                <a href="{{ route("singleEvent", ['slug' => $event->slug]) }}">
                                    <img src="{{ url('/') }}/storage/{{ $event->image }}" alt="{{ $event->name }}">
                                </a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="{{ route("singleEvent", ['slug' => $event->slug]) }}">{{ $event->name }}</a></h3>
                                <a href="{{ route("singleEvent", ['slug' => $event->slug]) }}" class="read-more">Keep Reading <i>&rarr;</i></a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="no-data-message">No Data !</div>
                @endforelse
            </div>

            @if($events->hasPages())
                <div class="pagination-wrapper">
                    {{ $events->links() }}
                </div>
            @endif
        </div>
    </section>
    <!-- End Event Section -->
@endsection
