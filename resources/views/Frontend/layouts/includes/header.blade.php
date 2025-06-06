<!-- Hidden Navigation Bar -->
<section class="hidden-bar left-align">
    <!-- Hidden Nav Toggler -->
    <div class="nav-toggler">
        <button class="hidden-bar-opener"><span class="icon flaticon-menu-options"></span></button>
    </div>
    <!-- / Hidden Nav Toggler -->

    <div class="hidden-bar-closer">
        <button><span class="flaticon-cancel"></span></button>
    </div>

    <!-- Hidden Bar Wrapper -->
    <div class="hidden-bar-wrapper">
        <!--Logo-->
        <div class="logo-box"><a href="{{ route("index") }}"><img src="{{ url('/') }}/storage/{{ setting()->logo_header }}" alt=""></a></div>

        <!-- .Side-menu -->
        <div class="side-menu">
            <!--navigation-->
            <ul class="navigation clearfix">
                <li class="dropdown"><a href="{{ route("index") }}">Home</a></li>
                @if (pages()->count() > 0)
                    @foreach (pages() as $page)
                        <li class="dropdown"><a href="{{ route("page", $page->slug) }}">{{ $page->title }}</a></li>
                    @endforeach
                @endif
                <li class="dropdown"><a href="{{ route("photos") }}">Photos</a></li>
                <li><a href="{{ route("contact") }}">Contact us</a></li>
            </ul>
        </div>
        <!-- /.Side-menu -->

    </div><!-- / Hidden Bar Wrapper -->

    <!--Social Links-->
    <ul class="social-links clearfix">
{{--        <li><a href="{{ setting()->facebook }}" target="_blank"><span class="fa fa-facebook-f"></span></a></li>--}}
        <li><a href="{{ setting()->linkedin }}" target="_blank"><span class="fa fa-linkedin"></span></a></li>
        <li><a href="{{ setting()->instagram }}" target="_blank"><span class="fa fa-instagram"></span></a></li>
{{--        <li><a href="{{ setting()->x }}" target="_blank"><span class="fa fa-twitter"></span></a></li>--}}
    </ul>

    <!-- Search Box -->
    <div class="search-box">
        <form method="post" action="#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search" required="">
                <button type="submit"><span class="fa fa-search"></span></button>
            </div>
        </form>
    </div>

</section>
<!-- End / Hidden Bar -->
