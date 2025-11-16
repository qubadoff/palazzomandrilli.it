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
    /* Dropdown Menü Stilleri - Site Temasına Uygun */
    .hidden-bar .side-menu .navigation li.dropdown {
        position: relative;
    }

    .hidden-bar .side-menu .navigation li .menu-item-wrapper {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: transparent;
        transition: all 0.3s ease;
    }

    .hidden-bar .side-menu .navigation li .menu-item-wrapper:hover {
        background: rgba(209, 175, 120, 0.08);
    }

    .hidden-bar .side-menu .navigation li .menu-item-wrapper a {
        flex: 1;
        padding: 12px 15px;
        margin: 0;
    }

    .hidden-bar .side-menu .navigation li .dropdown-toggle {
        cursor: pointer;
        padding: 12px 15px;
        color: #ffffff;
        font-size: 14px;
        transition: all 0.3s ease;
        user-select: none;
        flex-shrink: 0;
        background: transparent;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 48px;
    }

    .hidden-bar .side-menu .navigation li .dropdown-toggle:hover {
        color: #d1af78;
    }

    .hidden-bar .side-menu .navigation li.dropdown.active .dropdown-toggle {
        color: #d1af78;
        transform: rotate(180deg);
    }

    .hidden-bar .side-menu .navigation .submenu {
        display: none;
        padding: 0;
        list-style: none;
        margin: 0;
        background: rgba(0, 0, 0, 0.3);
        border-top: 1px solid rgba(209, 175, 120, 0.2);
    }

    .hidden-bar .side-menu .navigation li.dropdown.active .submenu {
        display: block;
        animation: slideDown 0.3s ease;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            max-height: 0;
        }
        to {
            opacity: 1;
            max-height: 500px;
        }
    }

    .hidden-bar .side-menu .navigation .submenu li {
        margin: 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .hidden-bar .side-menu .navigation .submenu li:last-child {
        border-bottom: none;
    }

    .hidden-bar .side-menu .navigation .submenu li a {
        font-size: 14px;
        padding: 10px 15px 10px 35px;
        display: block;
        color: rgba(255, 255, 255, 0.8);
        text-transform: capitalize;
        position: relative;
        transition: all 0.3s ease;
    }

    .hidden-bar .side-menu .navigation .submenu li a:before {
        content: "›";
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 18px;
        color: #d1af78;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .hidden-bar .side-menu .navigation .submenu li a:hover {
        padding-left: 40px;
        color: #d1af78;
        background: rgba(209, 175, 120, 0.1);
    }

    .hidden-bar .side-menu .navigation .submenu li a:hover:before {
        opacity: 1;
        left: 22px;
    }

    /* Parent link aktif olduğunda stil */
    .hidden-bar .side-menu .navigation li.dropdown.active > .menu-item-wrapper {
        background: rgba(209, 175, 120, 0.08);
        border-bottom: none;
    }

    .hidden-bar .side-menu .navigation li.dropdown.active > .menu-item-wrapper a {
        color: #d1af78;
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
