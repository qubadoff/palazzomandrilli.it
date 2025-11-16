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
        <div class="logo-box"><a href="{{ route("index") }}"><img src="{{ url('/') }}/storage/{{ setting()->logo_header }}" style="width: 150px; height: 150px;" alt=""></a></div>

        <!-- .Side-menu -->
        <div class="side-menu">
            <!--navigation-->
            <ul class="navigation clearfix">
                <li><a href="{{ route("index") }}">Home</a></li>
                @if (pages()->count() > 0)
                    @foreach (pages() as $page)
                        <li class="{{ $page->children->count() > 0 ? 'dropdown' : '' }}">
                            <div class="menu-item-wrapper">
                                <a href="{{ route("page", $page->slug) }}">{{ $page->title }}</a>
                                @if ($page->children->count() > 0)
                                    <span class="dropdown-toggle"><i class="fa fa-angle-down"></i></span>
                                @endif
                            </div>
                            @if ($page->children->count() > 0)
                                <ul class="submenu">
                                    @foreach ($page->children as $child)
                                        <li><a href="{{ route("page", $child->slug) }}">{{ $child->title }}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                @endif
                <li><a href="{{ route("events") }}">Our Events</a></li>
                <li><a href="{{ route("photos") }}">Photos</a></li>
                <li><a href="{{ route("contact") }}">Contact us</a></li>
            </ul>
        </div>
        <!-- /.Side-menu -->

    </div><!-- / Hidden Bar Wrapper -->

    <!--Social Links-->
    <ul class="social-links clearfix">
        <li><a href="{{ setting()->linkedin }}" target="_blank"><span class="fa fa-linkedin"></span></a></li>
        <li><a href="{{ setting()->instagram }}" target="_blank"><span class="fa fa-instagram"></span></a></li>
    </ul>

</section>
<!-- End / Hidden Bar -->

<style>
    /* Dropdown Menü Stilleri */
    .navigation li.dropdown {
        position: relative;
    }

    .navigation li .menu-item-wrapper {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .navigation li .menu-item-wrapper a {
        flex: 1;
    }

    .navigation li .dropdown-toggle {
        cursor: pointer;
        padding: 10px 15px;
        margin-left: 10px;
        transition: transform 0.3s ease;
        user-select: none;
        flex-shrink: 0;
    }

    .navigation li.dropdown.active .dropdown-toggle {
        transform: rotate(180deg);
    }

    .navigation .submenu {
        display: none;
        padding-left: 20px;
        list-style: none;
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .navigation li.dropdown.active .submenu {
        display: block;
    }

    .navigation .submenu li {
        margin: 8px 0;
    }

    .navigation .submenu li a {
        font-size: 14px;
        padding: 5px 0;
        display: block;
    }

    .navigation .submenu li a:hover {
        padding-left: 5px;
        transition: padding-left 0.3s ease;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Tüm dropdown toggle butonlarını seç
        const dropdownToggles = document.querySelectorAll('.navigation .dropdown-toggle');

        dropdownToggles.forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                // Parent li elementini bul
                const parentLi = this.closest('li.dropdown');

                // Toggle active class
                parentLi.classList.toggle('active');
            });
        });
    });
</script>
