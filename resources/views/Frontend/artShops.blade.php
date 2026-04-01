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
    <section class="event-section event-grid">
        <div class="auto-container">
            <div class="row clearfix">
                @forelse($artShops as $artShop)
                    <!-- Art Shop Block -->
                    <div class="event-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box"><a href="{{ route("singleArtShop", ['slug' => $artShop->slug]) }}"><img src="{{ url('/') }}/storage/{{ $artShop->image }}" alt=""></a></div>
                            <div class="lower-content">
                                <h3><a href="{{ route("singleArtShop", ['slug' => $artShop->slug]) }}">{{ $artShop->title }}</a></h3>
                                @if($artShop->price)
                                    <div class="price" style="font-size: 18px; font-weight: 700; color: #d1af78; margin-bottom: 8px;">&euro;{{ number_format($artShop->price, 2) }}</div>
                                @endif
                                <div class="text">{{ Str::limit($artShop->description, 120) }}</div>
                                <a href="{{ route("singleArtShop", ['slug' => $artShop->slug]) }}" class="read-more">Keep Reading <i>&rarr;</i></a>
                            </div>
                        </div>
                    </div>
                @empty
                    No Data !
                @endforelse
            </div>

            @if($artShops->hasPages())
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="styled-pagination">
                            {{ $artShops->links() }}
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!-- End Art Shop Section -->
@endsection
