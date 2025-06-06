@extends('Frontend.layouts.app')

@section('title', 'Home')

@section('content')
    <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_two_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_two" data-version="5.4.1">
                <ul>
                    @forelse($sliders as $i => $slider)
                        <li data-description="Slide Description"
                            data-easein="default"
                            data-easeout="default"
                            data-fsmasterspeed="1500"
                            data-fsslotamount="7"
                            data-fstransition="fade"
                            data-hideafterloop="0"
                            data-hideslideonmodern="off"
                            data-index="rs-{{ 1680 + $i }}"
                            data-masterspeed="default"
                            data-param1=""
                            data-param10=""
                            data-param2=""
                            data-param3=""
                            data-param4=""
                            data-param5=""
                            data-param6=""
                            data-param7=""
                            data-param8=""
                            data-param9=""
                            data-rotate="0"
                            data-saveperformance="off"
                            data-slotamount="default"
                            data-thumb="{{ url('/') }}/storage/{{ $slider->image }}"
                            data-title="{{ $slider->name }}" data-transition="parallaxvertical">

                            <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ url('/') }}/storage/{{ $slider->image }}">

                            <div class="tp-caption"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingtop="[0,0,0,0]"
                                 data-responsive_offset="on"
                                 data-type="text"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-width="1000"
                                 data-textalign="center"
                                 data-hoffset="['0','0','0','0']"
                                 data-voffset="['-80',''-80',''-80',''-80']"
                                 data-x="['center','center','center','center']"
                                 data-y="['middle','middle','middle','middle']"
                                 data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                                <h1>{{ $slider->name }}</h1>
                            </div>

                            <div class="tp-caption"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingtop="[0,0,0,0]"
                                 data-responsive_offset="on"
                                 data-type="text"
                                 data-height="none"
                                 data-whitespace="normal"
                                 data-width="700"
                                 data-textalign="center"
                                 data-hoffset="['0','0','0','0']"
                                 data-voffset="['10','10','10','10']"
                                 data-x="['center','center','center','center']"
                                 data-y="['middle','middle','middle','middle']"
                                 data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                                <p>{{ $slider->description }}</p>
                            </div>

                            <div class="tp-caption tp-resizeme"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingtop="[0,0,0,0]"
                                 data-responsive_offset="on"
                                 data-type="text"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-width="none"
                                 data-hoffset="['0','0','0','0']"
                                 data-voffset="['85','95','95','95']"
                                 data-x="['center','center','center','center']"
                                 data-y="['middle','middle','middle','middle']"
                                 data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                                <a href="{{ route("contact") }}" class="theme-btn btn-style-one">Contact Us</a>
                            </div>
                        </li>
                    @empty
                        No Data !
                    @endforelse
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!-- Info Banner -->
    <section class="info-banner">
        <div class="auto-container">
            <div class="content-box">
                <h3>
                    <b>Palazzo Mandrilli (Guerrina)</b> in the historic town of Cassine in the northern Italy is a beautifully preserved 17th-century residence.
                    This noble Palazzo has witnessed centuries of Italian culture, art, and tradition. With its original brick walls, elegant arches, frescos, mosaics and quiet inner courtyards, Palazzo Mandrilli offers a unique atmosphere—where history lives in every detail.
                    Whether you're here to admire its architecture, attend a cultural event, or simply experience the quiet soul of the Piedmontese countryside, we welcome you to discover the spirit of Palazzo Guerrina—where every corner tells a story.
                    This Gallery is owned by <a href="https://instagram.com/sen1sen.az" target="_blank" style="color: blue;">Sen1Sen</a> ThinkThank based in Baku, Azerbaijan.
                </h3>
            </div>
        </div>
    </section>
    <!-- End Info Banner -->

    @if($events->count() > 0)
        <!-- Event Section -->
        <section class="event-section">
            <div class="auto-container">
                <div class="sec-title-two text-center">
                    <h2>Our Events</h2>
                </div>
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
                <div class="btn-box">
                    <a href="{{ route("events") }}" class="theme-btn btn-style-two">View More Event</a>
                </div>
            </div>
        </section>
        <!-- End Event Section -->
    @endif

    <!--Gallery Full Width Section-->
    <section class="gallery-full-width">
        <!--Sortable Masonry-->
        <div class="sortable-masonry">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="sec-title light">
                        <span class="title">Its Our Great Flows</span>
                        <h2>From Our Photos</h2>
                    </div>
                </div>
            </div>

            <div class="items-container clearfix">

                @forelse(photos() as $photo)
                    <!--Default Portfolio Item-->
                    <div class="gallery-item masonry-item small-column all ancient other">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ url('/') }}/storage/{{ $photo->image }}" alt="">
                                <div class="overlay-box">
                                    <div class="content">
                                        <a href="{{ url('/') }}/storage/{{ $photo->image }}" data-fancybox="gallery"><span class="icon flaticon-unlink-1"></span></a>
                                        <h3>{{ $photo->name }}</h3>
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
    </section>
    <!--End Gallery Section -->

    <!-- Subscribe Section -->
{{--    <section class="subscribe-section">--}}
{{--        <div class="auto-container">--}}
{{--            <div class="sec-title-two text-center">--}}
{{--                <h2>Subscribe</h2>--}}
{{--            </div>--}}
{{--            <div class="subscribe-form">--}}
{{--                @if(Session::has('success'))--}}
{{--                    <div class="alert alert-success">--}}
{{--                        {{ Session::get('success') }}--}}
{{--                        @php--}}
{{--                            \Illuminate\Support\Facades\Session::forget('success');--}}
{{--                        @endphp--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--                @if($errors->any())--}}
{{--                    @if ($errors->any())--}}
{{--                        <div class="alert alert-danger">--}}
{{--                            <ul>--}}
{{--                                @foreach ($errors->all() as $error)--}}
{{--                                    <li>{{ $error }}</li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                @endif--}}
{{--                <form method="post" action="{{ route("subscribe") }}">--}}
{{--                    @csrf--}}
{{--                    @method('POST')--}}
{{--                    <div class="form-group">--}}
{{--                        <input type="email" name="email" value="" placeholder="Your Email Address" required>--}}
{{--                        <button type="submit" name="submit" class="theme-btn btn-style-three">Subscribe</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Subscribe Section -->
@endsection
