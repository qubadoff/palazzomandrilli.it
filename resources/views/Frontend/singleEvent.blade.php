@extends('Frontend.layouts.app')

@section('title', $event->name)

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ url('/') }}/storage/{{ $event->image }});">
        <div class="auto-container">
            <h1>{{ $event->name }}</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route("index") }}">Home </a></li>
                <li>{{ $event->name }}</li>
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
                        <!-- Event Detail -->
                        <div class="event-block-two">
                            <div class="inner-box">
                                <div class="lower-content">
                                    <h3>
                                        {{ $event->description }}
                                    </h3>
                                    <p>
                                        {!! $event->body !!}
                                    </p>
                                </div>
                            </div>

                            <div class="two-column">
                                <div class="row clearfix">
                                    <div class="detail-column col-md-5 col-sm-5 col-xs-12">
                                        <h3>Details</h3>
                                        <ul>
                                            <li>DATE : <span>{{ $event->event_date }}</span></li>
                                            <li>TIME : <span>{{ $event->event_time }}</span></li>
                                            <li>COST : <span>{{ $event->event_cost }} $</span></li>
                                        </ul>
                                    </div>
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
