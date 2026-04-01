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
        <div class="logo-box"><a href="{{ route("index") }}"><img src="{{ url('/') }}/storage/{{ setting()->logo_header }}" alt="" class="nav-logo"></a></div>

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
                <li><a href="{{ route("artShops") }}">Art Shop</a></li>
                <li><a href="{{ route("exhibitionHalls") }}">Exhibition Halls</a></li>
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
    /* ===== Navigation Logo ===== */
    .nav-logo {
        width: 150px;
        height: 150px;
        object-fit: contain;
    }

    @media (max-width: 767px) {
        .nav-logo {
            width: 100px;
            height: 100px;
        }
    }

    /* ===== Dropdown Menu Styles ===== */
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
        padding: 12px 10px 12px 15px;
        margin: 0;
    }

    .hidden-bar .side-menu .navigation li .dropdown-toggle {
        cursor: pointer;
        padding: 12px 20px;
        color: #ffffff;
        font-size: 18px;
        transition: all 0.3s ease;
        user-select: none;
        flex-shrink: 0;
        background: rgba(209, 175, 120, 0.15);
        border: none;
        border-left: 1px solid rgba(209, 175, 120, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 60px;
        margin-left: -5px;
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
        content: "\203A";
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

    .hidden-bar .side-menu .navigation li.dropdown.active > .menu-item-wrapper {
        background: rgba(209, 175, 120, 0.08);
        border-bottom: none;
    }

    .hidden-bar .side-menu .navigation li.dropdown.active > .menu-item-wrapper a {
        color: #d1af78;
    }

    /* ===== Hidden Bar Responsive ===== */
    @media (max-width: 767px) {
        .hidden-bar .side-menu .navigation li .menu-item-wrapper a {
            padding: 10px 8px 10px 12px;
            font-size: 14px;
        }

        .hidden-bar .side-menu .navigation li .dropdown-toggle {
            padding: 10px 15px;
            min-width: 50px;
            font-size: 16px;
        }

        .hidden-bar .side-menu .navigation .submenu li a {
            font-size: 13px;
            padding: 8px 12px 8px 30px;
        }

        .hidden-bar .social-links {
            padding: 15px 0;
        }

        .hidden-bar .social-links li a {
            width: 36px;
            height: 36px;
            line-height: 36px;
            font-size: 14px;
        }
    }

    @media (max-width: 479px) {
        .hidden-bar .side-menu .navigation li .menu-item-wrapper a {
            padding: 8px 6px 8px 10px;
            font-size: 13px;
        }

        .hidden-bar .side-menu .navigation li .dropdown-toggle {
            padding: 8px 12px;
            min-width: 44px;
            font-size: 14px;
        }
    }

    /* ===== Card Grid Responsive ===== */
    .card-grid-section .inner-box {
        margin-bottom: 30px;
        background: #fff;
        box-shadow: 0 2px 15px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
    }

    .card-grid-section .inner-box:hover {
        box-shadow: 0 5px 25px rgba(0,0,0,0.15);
        transform: translateY(-3px);
    }

    .card-grid-section .card-image {
        position: relative;
        width: 100%;
        height: 280px;
        overflow: hidden;
    }

    .card-grid-section .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .card-grid-section .inner-box:hover .card-image img {
        transform: scale(1.05);
    }

    .card-grid-section .lower-content {
        padding: 20px;
    }

    .card-grid-section .lower-content h3 {
        font-size: 20px;
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .card-grid-section .lower-content h3 a {
        color: #222;
        transition: color 0.3s ease;
    }

    .card-grid-section .lower-content h3 a:hover {
        color: #d1af78;
    }

    .card-grid-section .lower-content .text {
        color: #666;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 12px;
    }

    .card-grid-section .lower-content .price-tag {
        font-size: 18px;
        font-weight: 700;
        color: #d1af78;
        margin-bottom: 10px;
    }

    .card-grid-section .lower-content .read-more {
        font-size: 14px;
        color: #d1af78;
        font-weight: 600;
        transition: color 0.3s ease;
    }

    .card-grid-section .lower-content .read-more:hover {
        color: #b8944d;
    }

    @media (max-width: 1199px) {
        .card-grid-section .card-image {
            height: 240px;
        }
    }

    @media (max-width: 991px) {
        .card-grid-section .card-image {
            height: 220px;
        }

        .card-grid-section .lower-content h3 {
            font-size: 18px;
        }
    }

    @media (max-width: 767px) {
        .card-grid-section .card-image {
            height: 250px;
        }

        .card-grid-section .lower-content {
            padding: 18px 15px;
        }

        .card-grid-section .lower-content h3 {
            font-size: 17px;
        }
    }

    @media (max-width: 479px) {
        .card-grid-section .card-image {
            height: 200px;
        }

        .card-grid-section .lower-content h3 {
            font-size: 16px;
        }

        .card-grid-section .lower-content .text {
            font-size: 13px;
        }

        .card-grid-section .lower-content .price-tag {
            font-size: 16px;
        }
    }

    /* ===== Detail Page Responsive ===== */
    .detail-page-content .lower-content h3 {
        font-size: 24px;
        line-height: 1.4;
        margin-bottom: 15px;
        color: #222;
    }

    .detail-page-content .lower-content .price-tag {
        font-size: 22px;
        font-weight: 700;
        color: #d1af78;
        margin: 15px 0;
    }

    .detail-page-content .lower-content p {
        font-size: 16px;
        line-height: 1.8;
        color: #555;
    }

    .detail-page-content .lower-content p img {
        max-width: 100%;
        height: auto;
    }

    @media (max-width: 767px) {
        .detail-page-content .lower-content h3 {
            font-size: 20px;
        }

        .detail-page-content .lower-content .price-tag {
            font-size: 18px;
        }

        .detail-page-content .lower-content p {
            font-size: 14px;
            line-height: 1.7;
        }

        .sidebar-page-container {
            padding: 40px 0 30px;
        }
    }

    @media (max-width: 479px) {
        .detail-page-content .lower-content h3 {
            font-size: 18px;
        }

        .detail-page-content .lower-content .price-tag {
            font-size: 16px;
        }

        .detail-page-content .lower-content p {
            font-size: 13px;
        }
    }

    /* ===== Pagination Responsive ===== */
    .pagination-wrapper {
        padding: 30px 0 50px;
        text-align: center;
    }

    .pagination-wrapper .pagination {
        display: inline-flex;
        flex-wrap: wrap;
        gap: 5px;
        justify-content: center;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .pagination-wrapper .pagination li {
        margin: 0;
    }

    .pagination-wrapper .pagination li a,
    .pagination-wrapper .pagination li span {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 40px;
        height: 40px;
        padding: 5px 12px;
        font-size: 14px;
        color: #333;
        background: #fff;
        border: 1px solid #ddd;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .pagination-wrapper .pagination li a:hover {
        background: #d1af78;
        border-color: #d1af78;
        color: #fff;
    }

    .pagination-wrapper .pagination li.active span,
    .pagination-wrapper .pagination li span[aria-current="page"] {
        background: #d1af78;
        border-color: #d1af78;
        color: #fff;
    }

    .pagination-wrapper .pagination li.disabled span {
        color: #ccc;
        cursor: not-allowed;
    }

    @media (max-width: 479px) {
        .pagination-wrapper .pagination li a,
        .pagination-wrapper .pagination li span {
            min-width: 34px;
            height: 34px;
            padding: 4px 8px;
            font-size: 12px;
        }
    }

    /* ===== Page Title Responsive ===== */
    .page-title {
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }

    @media (max-width: 767px) {
        .page-title {
            padding: 60px 0;
        }

        .page-title h1 {
            font-size: 28px;
            line-height: 1.3;
        }

        .page-title .bread-crumb li {
            font-size: 14px;
        }
    }

    @media (max-width: 479px) {
        .page-title {
            padding: 45px 0;
        }

        .page-title h1 {
            font-size: 22px;
        }

        .page-title .bread-crumb li {
            font-size: 12px;
        }
    }

    /* ===== Footer Responsive ===== */
    @media (max-width: 767px) {
        .main-footer .widgets-section {
            padding: 50px 0 20px;
        }

        .main-footer .footer-column {
            margin-bottom: 30px;
        }

        .main-footer .about-widget .text {
            font-size: 13px;
            line-height: 1.6;
        }

        .main-footer .footer-logo img {
            width: 100px !important;
            height: 100px !important;
        }
    }

    @media (max-width: 479px) {
        .main-footer .widgets-section {
            padding: 40px 0 10px;
        }

        .main-footer .widget-title {
            font-size: 16px !important;
        }
    }

    /* ===== Contact Page Responsive ===== */
    @media (max-width: 767px) {
        .contact-page-section .info-column,
        .contact-page-section .form-column {
            width: 100%;
            float: none;
        }

        .contact-page-section .info-column {
            padding: 40px 15px 20px;
        }

        .contact-page-section .form-column .inner-column {
            padding: 40px 15px;
        }

        .contact-page-section .map-column {
            height: 300px;
        }

        .contact-page-section .map-column iframe {
            width: 100% !important;
            height: 100% !important;
        }
    }

    /* ===== Event Section on Homepage Responsive ===== */
    @media (max-width: 767px) {
        .event-section .event-block {
            margin-bottom: 25px;
        }

        .event-section .btn-box {
            margin-top: 10px;
        }
    }

    /* ===== Info Banner Responsive ===== */
    @media (max-width: 767px) {
        .info-banner .content-box {
            padding: 30px 15px;
        }

        .info-banner .content-box h3 {
            font-size: 16px;
            line-height: 1.5;
        }
    }

    @media (max-width: 479px) {
        .info-banner .content-box h3 {
            font-size: 14px;
        }
    }

    /* ===== General Image Responsive ===== */
    img {
        max-width: 100%;
        height: auto;
    }

    /* ===== No Data State ===== */
    .no-data-message {
        text-align: center;
        padding: 60px 20px;
        font-size: 18px;
        color: #999;
        width: 100%;
    }

    @media (max-width: 479px) {
        .no-data-message {
            padding: 40px 15px;
            font-size: 15px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropdownToggles = document.querySelectorAll('.navigation .dropdown-toggle');

        dropdownToggles.forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const parentLi = this.closest('li.dropdown');
                parentLi.classList.toggle('active');
            });
        });
    });
</script>
