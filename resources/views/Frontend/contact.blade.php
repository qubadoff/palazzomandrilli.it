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
                        {{ setting()->location }}
                    </div>

                    <div class="info-box">
                        <h4>Phone</h4>
                        <p>{{ setting()->phone }}</p>
                    </div>

                    <div class="info-box">
                        <h4>Email</h4>
                        <p><a href="{{ setting()->email }}">{{ setting()->email }}</a></p>
                    </div>
                </div>
            </div>

            <!-- form Column -->
            <div class="form-column">
                <div class="inner-column">
                    <h3>Get a Quote</h3>
                    <!-- Contact Form -->
                    <div class="contact-form">
                        <!--Contact Form-->
                        <form method="post" action="#" id="contact-form">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="username" placeholder="Name" required>
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="message" placeholder="Leave a Message..."></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button type="submit" class="theme-btn btn-style-two">Send Message</button>
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
