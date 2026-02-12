<nav class="navbar main-header desktop-header">
    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/logo (1).png') }}" alt="Toretto Recovery">
        </a>

        <!-- MENU -->
        <div class="menu-wrapper collapse navbar-collapse show justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">ABOUT US</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button">
                        OUR SERVICES
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item"
                                href="{{ route('our-service.ourservice', 'towing-service-dubai') }}">
                                Towing Service
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('our-service.ourservice', 'roadside-assistance-dubai') }}">
                                Roadside Assistance
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('our-service.ourservice', 'vehicle-recovery-service-dubai') }}">
                               Vehicle Recovery Service
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('our-service.ourservice', 'flatbed-recovery') }}">
                                Flatbed Recovery
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('our-service.ourservice', 'accidental-car-recovery') }}">
                                Accidental Car Recovery
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('our-service.ourservice', 'luxury-sports-car-handling') }}">
                                Luxury &amp; Sports Car Handling
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('our-service.ourservice', 'bike-motorcycle-recovery') }}">
                                Bike / Motorcycle Recovery
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('our-service.ourservice', 'desert-pull-out-service') }}">
                                Desert Pull Out Service
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="areasWeServe" role="button">
                        AREAS WE SERVE
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'dubai-palm-jumeirah') }}">
                                Car Recovery Service in Dubai Palm Jumeira
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'dubai-marina') }}">
                                Car Recovery Service in Dubai Marina
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'dubai-jebel-ali') }}">
                                Car Recovery Service in Dubai Jebel Ali
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'dubai-deira') }}">
                                Car Recovery Service in Dubai Deira
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'bur-dubai') }}">
                                Car Recovery Service in Dubai Bur Dubai
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'dubai-investments-park') }}">
                                Car Recovery Service in Dubai Investments Park
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'dip') }}">
                                Car Recovery Service in DIP
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'al-warqa') }}">
                                Car Recovery Service in Dubai Al Warqa
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'mirdif') }}">
                                Car Recovery Service in Dubai Mirdif
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'al-qusais') }}">
                                Car Recovery Service in Dubai Al Qusais
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'muhaisnah') }}">
                                Car Recovery Service in Dubai Muhaisnah
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('blogs') }}">BLOGS</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">CONTACT US</a></li>
            </ul>

            <!-- ACTION BUTTONS -->
            <div class="header-actions d-flex gap-3">
                <a href="{{ route('book.now') }}" class="theme-btn">Book Now</a>
                <a href="tel:+971523003423" class="theme-btn">Call Now</a>
            </div>
        </div>

    </div>
</nav>

<!-- MOBILE HEADER -->
<nav class="navbar main-header mobile-header">
    <div class="container d-flex justify-content-between align-items-center">

        <!-- LOGO -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/logo (1).png') }}" alt="Toretto Recovery">
        </a>

        <!-- RIGHT SIDE -->
        <div class="d-flex align-items-center gap-2">

            <!-- BOOK NOW (optional on mobile) -->
            <div class="mobile-header-actions header-actions d-flex gap-3">
                <a href="{{ route('book.now') }}" class="btn btn-book theme-btn">BOOK NOW</a>
                <a href="tel:+971523003423" class="btn btn-book theme-btn">Call now</a>
            </div>

            <!-- TOGGLER -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobile_nav">
                <i class="fa-solid fa-bars"></i>
            </button>

        </div>
    </div>

    <!-- MOBILE MENU -->
    <div class="collapse mobile-slide-menu d-lg-none" id="mobile_nav">
        <div class="mobile-menu-inner">

            <div class="mobile-menu-header d-flex justify-content-between align-items-center">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="./assets/images/logo (1).png" alt="Toretto Recovery">
                </a>

                <!-- CLOSE TOGGLER -->
                <button class="btn close-menu" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mobile_nav">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <ul class="navbar-nav text-start">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">ABOUT US</a></li>
                <li class="nav-item has-dropdown">
                    <a class="nav-link service-toggle" href="javascript:void(0)">
                        OUR SERVICES
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item"
                                href="{{ route('our-service.ourservice', 'towing-service-dubai') }}">
                                Towing Service
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('our-service.ourservice', 'roadside-assistance-dubai') }}">
                                Roadside Assistance
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('our-service.ourservice', 'vehicle-recovery-service-dubai') }}">
                                Vehicle Recovery Service
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('our-service.ourservice', 'flatbed-recovery') }}">
                                Flatbed Recovery
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('our-service.ourservice', 'accidental-car-recovery') }}">
                                Accidental Car Recovery
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('our-service.ourservice', 'luxury-sports-car-handling') }}">
                                Luxury &amp; Sports Car Handling
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('our-service.ourservice', 'bike-motorcycle-recovery') }}">
                                Bike / Motorcycle Recovery
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('our-service.ourservice', 'desert-pull-out-service') }}">
                                Desert Pull Out Service
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-dropdown">
                    <a class="nav-link service-toggle" href="javascript:void(0)">
                        AREAS WE SERVE
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'dubai-palm-jumeirah') }}">
                                Car Recovery Service in Dubai Palm Jumeira
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'dubai-marina') }}">
                                Car Recovery Service in Dubai Marina
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'dubai-jebel-ali') }}">
                                Car Recovery Service in Dubai Jebel Ali
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'dubai-deira') }}">
                                Car Recovery Service in Dubai Deira
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'bur-dubai') }}">
                                Car Recovery Service in Dubai Bur Dubai
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'dubai-investments-park') }}">
                                Car Recovery Service in Dubai Investments Park
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'dip') }}">
                                Car Recovery Service in DIP
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'al-warqa') }}">
                                Car Recovery Service in Dubai Al Warqa
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'mirdif') }}">
                                Car Recovery Service in Dubai Mirdif
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'al-qusais') }}">
                                Car Recovery Service in Dubai Al Qusais
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('areas.show', 'muhaisnah') }}">
                                Car Recovery Service in Dubai Muhaisnah
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('blogs') }}">BLOGS</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">CONTACT US</a></li>
            </ul>
        </div>
    </div>
</nav>
<style>
    .navbar .dropdown-menu {
        max-height: 320px;
        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: #e63946 transparent;
    }

    .navbar .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        min-width: 210px;
        padding: 6px 0;
        border-radius: 8px;
        background: #ffffff;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        border: none;
    }

    .navbar .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-menu .dropdown-item {
        padding: 10px 20px;
        font-size: 14px;
        font-weight: 500;
        color: #333;
        transition: all 0.25s ease;
        position: relative;
    }

    .dropdown-menu .dropdown-item:hover {
        background: #df0006;
        color: #ffffff;
    }

    .dropdown-menu .dropdown-item::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 0;
        background: #9b0218;
        transition: width .25s ease;
    }

    .dropdown-menu .dropdown-item:hover::before {
        width: 4px;
    }

    .dropdown-toggle::after {
        margin-left: 5px;
    }

    @media (max-width: 991px) {

        .navbar .dropdown-menu {
            display: none;
            position: static;
            width: 100%;
            background: #111;
            padding: 10px 0;
            border: none;
            box-shadow: none;

            max-height: 260px;
            overflow-y: auto;
        }

        .navbar .dropdown-menu.show {
            display: block;
        }

        .navbar .dropdown-item {
            color: #fff;
            padding: 12px 20px;
            font-size: 14px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            white-space: normal;
        }

        .navbar .dropdown-item:hover {
            background: #df0006;
            color: #fff;
        }

        /* scrollbar clean */
        .navbar .dropdown-menu::-webkit-scrollbar {
            width: 5px;
        }

        .navbar .dropdown-menu::-webkit-scrollbar-thumb {
            background: #df0006;
            border-radius: 10px;
        }
    }

    .navbar .dropdown-menu::-webkit-scrollbar {
        width: 6px;
    }

    .navbar .dropdown-menu::-webkit-scrollbar-track {
        background: transparent;
    }

    .navbar .dropdown-menu::-webkit-scrollbar-thumb {
        background-color: #e63946;
        border-radius: 10px;
    }

    @media (max-width: 991px) {
        .navbar .dropdown-menu {
            max-height: 250px;
            overflow-y: auto;
            position: static;
            width: 100%;
            background: #111;
            padding: 10px 0;
        }

        .navbar .dropdown-item {
            color: #fff;
            font-size: 14px;
            line-height: 1.5;
            white-space: normal;
            /* long text wrap */
        }
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        const toggles = document.querySelectorAll(".service-toggle");

        toggles.forEach(toggle => {
            toggle.addEventListener("click", function(e) {
                e.preventDefault();

                const parent = this.closest(".has-dropdown");
                const menu = parent.querySelector(".dropdown-menu");

                // close other open dropdowns
                document.querySelectorAll(".dropdown-menu.show").forEach(openMenu => {
                    if (openMenu !== menu) {
                        openMenu.classList.remove("show");
                    }
                });

                menu.classList.toggle("show");
            });
        });

    });
</script>
