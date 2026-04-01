@extends('Frontend.layouts.app')

@section('title', 'Exhibition Halls')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset("") }}assets/images/background/6.jpg);">
        <div class="auto-container">
            <h1>Exhibition Halls</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route("index") }}">Home </a></li>
                <li>Exhibition Halls</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Exhibition Halls Section -->
    <section class="event-section event-grid card-grid-section">
        <div class="auto-container">
            <div class="row clearfix">
                @forelse($exhibitionHalls as $hall)
                    <div class="event-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="card-image">
                                <a href="{{ route("singleExhibitionHall", ['slug' => $hall->slug]) }}">
                                    <img src="{{ url('/') }}/storage/{{ $hall->image }}" alt="{{ $hall->title }}">
                                </a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="{{ route("singleExhibitionHall", ['slug' => $hall->slug]) }}">{{ $hall->title }}</a></h3>
                                <div class="text">{{ Str::limit($hall->description, 120) }}</div>
                                <a href="{{ route("singleExhibitionHall", ['slug' => $hall->slug]) }}" class="read-more">Keep Reading <i>&rarr;</i></a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="no-data-message">No Data !</div>
                @endforelse
            </div>

            @if($exhibitionHalls->hasPages())
                <div class="pagination-wrapper">
                    {{ $exhibitionHalls->links() }}
                </div>
            @endif
        </div>
    </section>
    <!-- End Exhibition Halls Section -->
@endsection
