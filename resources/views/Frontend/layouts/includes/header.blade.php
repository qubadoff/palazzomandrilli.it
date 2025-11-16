
<style>
    .sub-menu {
        display: none;
        margin-left: 15px;
    }
    .sub-menu.open {
        display: block;
    }
    .dropdown-btn {
        cursor: pointer;
        margin-left: 8px;
    }
    .dropdown-btn.active i {
        transform: rotate(180deg);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.dropdown-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                const submenu = this.nextElementSibling;
                submenu.classList.toggle('open');
                this.classList.toggle('active');
            });
        });
    });
</script>

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

        <!-- Logo -->
        <div class="logo-box">
            <a href="{{ route('index') }}">
                <img src="{{ url('/') }}/storage/{{ setting()->logo_header }}"
                     style="width:150px; height:150px;" alt="">
            </a>
        </div>

        <!-- Side Menu -->
        <div class="side-menu">
            <ul class="navigation clearfix">

                <li><a href="{{ route('index') }}">Home</a></li>

                @foreach (pages() as $page)
                    <li class="menu-item-has-children">

                        <!-- Parent Link -->
                        <a href="{{ route('page', $page->slug) }}">
                            {{ $page->title }}
                        </a>

                        <!-- Eğer child varsa dropdown ikonu -->
                        @if($page->children->count() > 0)
                            <span class="dropdown-btn">
                            <i class="fa fa-angle-down"></i>
                        </span>

                            <!-- Child Menu -->
                            <ul class="sub-menu">
                                @foreach ($page->children as $child)
                                    <li>
                                        <a href="{{ route('page', $child->slug) }}">
                                            {{ $child->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach

                <li><a href="{{ route('events') }}">Our Events</a></li>
                <li><a href="{{ route('photos') }}">Photos</a></li>
                <li><a href="{{ route('contact') }}">Contact us</a></li>
            </ul>
        </div>
    </div>


    <!--Social Links-->
    <ul class="social-links clearfix">
{{--        <li><a href="{{ setting()->facebook }}" target="_blank"><span class="fa fa-facebook-f"></span></a></li>--}}
        <li><a href="{{ setting()->linkedin }}" target="_blank"><span class="fa fa-linkedin"></span></a></li>
        <li><a href="{{ setting()->instagram }}" target="_blank"><span class="fa fa-instagram"></span></a></li>
{{--        <li><a href="{{ setting()->x }}" target="_blank"><span class="fa fa-twitter"></span></a></li>--}}
    </ul>

    <!-- Search Box -->
{{--    <div class="search-box">--}}
{{--        <form method="post" action="#">--}}
{{--            <div class="form-group">--}}
{{--                <input type="search" name="search-field" value="" placeholder="Search" required="">--}}
{{--                <button type="submit"><span class="fa fa-search"></span></button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}

</section>
<!-- End / Hidden Bar -->
