@extends('Frontend.layouts.app')

@section('title', 'Contact us')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset("") }}assets/images/background/13.jpg);">
        <div class="auto-container">
            <h1>Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route("index") }}">Home </a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="inner-container clearfix">

            <!-- Info Column -->
            <div class="info-column">
                <div class="inner-column">
                    <div class="info-box">
                        <h4>Location</h4>
                        <b>{{ setting()->location }}</b>
                    </div>

                    <div class="info-box">
                        <h4>Phone</h4>
                        <a href="tel:{{ setting()->phone }}"><p>{{ setting()->phone }}</p></a>
                    </div>

                    <div class="info-box">
                        <h4>Email</h4>
                        <p><a href="mailto:{{ setting()->email }}">{{ setting()->email }}</a></p>
                    </div>
                </div>
            </div>

            <!-- form Column -->
            <div class="form-column">
                <div class="inner-column">
                    <h3>Get a Quote</h3>
                    <!-- Contact Form -->
                    <div class="contact-form">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                    \Illuminate\Support\Facades\Session::forget('success');
                                @endphp
                            </div>
                        @endif
                        @if($errors->any())
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        @endif
                        <!--Contact Form-->
                        <form method="post" action="{{ route("sendMessage") }}" id="contact-form">
                            @csrf
                            @method('POST')
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="message" placeholder="Leave a Message..."></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button type="submit" name="submit" class="theme-btn btn-style-two">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div><!--End Contact Form -->
                </div>
            </div>

            <!-- Map column -->
            <div class="map-column">
                <div class="map-outer">
                    {!! setting()->google_map_code !!}
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Page Section -->
@endsection
