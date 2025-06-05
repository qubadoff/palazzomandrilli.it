
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        @yield('title')
    </title>

    <!-- Stylesheets -->
    <link href="{{ asset("") }}assets/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset("") }}assets/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{ asset("") }}assets/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
    <link href="{{ asset("") }}assets/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
    <link href="{{ asset("") }}assets/css/style.css" rel="stylesheet">
    <link href="{{ asset("") }}assets/css/responsive.css" rel="stylesheet">



    <link rel="shortcut icon" href="{{ asset("") }}assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="{{ asset("") }}assets/images/favicon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{ asset("") }}assets/js/respond.js"></script><![endif]-->
</head>

<body class="has-side-nav">

<div class="page-wrapper">


    @include('Frontend.layouts.includes.header')

    @yield('content')

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="auto-container">

            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    <!--Big Column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                                <div class="footer-widget about-widget">
                                    <div class="footer-logo">
                                        <figure>
                                            <a href="{{ route("index") }}"><img src="{{ url('/') }}/storage/{{ setting()->logo_footer }}" alt=""></a>
                                        </figure>
                                    </div>
                                    <div class="widget-content">
                                        <div class="text">
                                            Palazzo Mandrilli (Guerrina) in the historic town of Cassine in the northern Italy is a beautifully preserved 17th-century residence. This noble Palazzo has witnessed centuries of Italian culture, art, and tradition.
                                        </div>
                                        <ul class="social-icon-two">
                                            <li><a href="{{ setting()->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="{{ setting()->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="{{ setting()->linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="{{ setting()->x }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Quick Link</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            @if (pages()->count() > 0)
                                                @foreach (pages() as $page)
                                                    <li><a href="{{ route("page", $page->slug) }}">{{ $page->title }}</a></li>
                                                @endforeach
                                            @endif
                                            <li><a href="{{ route("photos") }}">Photos</a></li>
                                            <li><a href="{{ route("contact") }}">Contacts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Contact Us</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            {{ setting()->phone }} <br/>
                                            {{ setting()->email }} <br/>
                                            {{ setting()->location }} <br/>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Open Hours</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li>
                                                {{ setting()->opening_hours }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright-text clearfix">
                    <p>Developed by <a href="https://burncode.org" target="_blank">Burncode LLC</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<script src="{{ asset("") }}assets/js/jquery.js"></script>
<script src="{{ asset("") }}assets/js/bootstrap.min.js"></script>
<!--Revolution Slider-->
<script src="{{ asset("") }}assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{ asset("") }}assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ asset("") }}assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{ asset("") }}assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{ asset("") }}assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{ asset("") }}assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{ asset("") }}assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{ asset("") }}assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{ asset("") }}assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{ asset("") }}assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{ asset("") }}assets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="{{ asset("") }}assets/js/main-slider-script.js"></script>
<!--End Revolution Slider-->
<script src="{{ asset("") }}assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{ asset("") }}assets/js/jquery.fancybox.js"></script>
<script src="{{ asset("") }}assets/js/owl.js"></script>
<script src="{{ asset("") }}assets/js/wow.js"></script>
<script src="{{ asset("") }}assets/js/appear.js"></script>
<script src="{{ asset("") }}assets/js/isotope.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>

<script src="{{ asset("") }}assets/js/js/jquery.fancybox.js"></script>
<script src="{{ asset("") }}assets/js/js/validate.js"></script>
<script src="{{ asset("") }}assets/js/js/appear.js"></script>
<script src="{{ asset("") }}assets/js/js/mixitup.js"></script>
<script src="{{ asset("") }}assets/js/js/script.js"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="{{ asset("") }}assets/js/js/map-script.js"></script>

</body>
</html>
