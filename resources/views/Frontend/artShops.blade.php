@extends('Frontend.layouts.app')

@section('title', 'Art Shop')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset("") }}assets/images/background/6.jpg);">
        <div class="auto-container">
            <h1>Art Shop</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route("index") }}">Home </a></li>
                <li>Art Shop</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Art Shop Section -->
    <section class="event-section event-grid card-grid-section">
        <div class="auto-container">
            <div class="row clearfix">
                @forelse($artShops as $artShop)
                    <div class="event-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="card-image">
                                <a href="{{ route("singleArtShop", ['slug' => $artShop->slug]) }}">
                                    <img src="{{ url('/') }}/storage/{{ $artShop->image }}" alt="{{ $artShop->title }}">
                                </a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="{{ route("singleArtShop", ['slug' => $artShop->slug]) }}">{{ $artShop->title }}</a></h3>
                                @if($artShop->price)
                                    <div class="price-tag">&euro;{{ number_format($artShop->price, 2) }}</div>
                                @endif
                                <div class="text">{{ Str::limit($artShop->description, 120) }}</div>
                                <a href="{{ route("singleArtShop", ['slug' => $artShop->slug]) }}" class="read-more">Keep Reading <i>&rarr;</i></a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="no-data-message">No Data !</div>
                @endforelse
            </div>

            @if($artShops->hasPages())
                <div class="pagination-wrapper">
                    {{ $artShops->links() }}
                </div>
            @endif
        </div>
    </section>
    <!-- End Art Shop Section -->
@endsection
