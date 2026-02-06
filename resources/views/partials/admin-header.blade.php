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
                    <a class="nav-link dropdown-toggle" href="{{ route('services') }}" id="servicesDropdown"
                        role="button">
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
                                href="{{ route('our-service.ourservice', 'roadside-assistance') }}">
                                Roadside Assistance
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('our-service.ourservice', 'recovery-service') }}">
                                Recovery Service
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

                    <a class="nav-link dropdown-toggle" href="{{ route('services') }}" id="areasWeServe"
                        role="button">
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

            <div class="header-actions d-flex align-items-center gap-3">

                <!-- ACCOUNT DROPDOWN -->
                <div class="dropdown account-dropdown">
                    <a href="#" class="d-flex align-items-center gap-2 dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{ asset('assets/images/user.png') }}" alt="User" class="user-avatar">
                        <i class="fa-solid fa-chevron-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                <i class="fa-solid fa-user"></i> My Profile
                            </a>
                        </li>
                        <!-- <li>
                    <a class="dropdown-item" href="{{ route('my.booking') }}">
                    <i class="fa-solid fa-calendar-check"></i> My Bookings
                    </a>
                </li> -->
                        <li>
                            <a class="dropdown-item" href="#" id="ajaxLogout">
                                <i class="fa-solid fa-right-from-bracket"></i> <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="header-actions d-flex align-items-center gap-3">
                    <a href="{{ route('book.now') }}" class="theme-btn">Book Now</a>
                    <a href="tel:+971523003423" class="theme-btn ">Call Now</a>
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
                <a href="tel:+971523003423" class="btn btn-book theme-btn ">Call now</a>
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
                    <img src="{{ asset('assets/images/logo (1).png') }}" alt="Toretto Recovery">
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
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">CONTACT US</a></li>
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
                                href="{{ route('our-service.ourservice', 'roadside-assistance') }}">
                                Roadside Assistance
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('our-service.ourservice', 'recovery-service') }}">
                                Recovery Service
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
                            <a class="dropdown-item"
                                href="{{ route('our-service.ourservice', 'towing-service-dubai') }}">
                                Towing Service
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('our-service.ourservice', 'roadside-assistance') }}">
                                Roadside Assistance
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('our-service.ourservice', 'recovery-service') }}">
                                Recovery Service
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
                <li class="nav-item"><a class="nav-link" href="{{ route('blogs') }}">BLOGS</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">MY PROFILE</a></li>
                <li class="nav-item">
                    <a class="nav-link dropdown-item" href="#" id="ajaxLogout">
                        <i class="fa-solid fa-right-from-bracket"></i> <span class="logout-div">LOGOUT </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
