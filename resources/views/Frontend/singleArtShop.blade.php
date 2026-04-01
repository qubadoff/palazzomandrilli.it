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
                    <div class="event-detail">
                        <!-- Art Shop Detail -->
                        <div class="event-block-two">
                            <div class="inner-box">
                                <div class="lower-content">
                                    <h3>
                                        {{ $artShop->description }}
                                    </h3>
                                    <p>
                                        {!! $artShop->body !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->
@endsection
