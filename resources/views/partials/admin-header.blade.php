{{-- HEADER --}}
<nav class="navbar navbar-expand-lg main-header">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/logo (1).png') }}" alt="Toretto Recovery">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
            <i class="fa-solid fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="main_nav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">ABOUT US</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">CONTACT US</a></li>
            </ul>
        </div>

        <div class="header-actions d-flex align-items-center gap-3">

            <!-- ACCOUNT DROPDOWN -->
            <div class="dropdown account-dropdown">
                <a href="#" class="d-flex align-items-center gap-2 dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('assets/images/Ellipse 1.png') }}" alt="User" class="user-avatar">
                <i class="fa-solid fa-chevron-down"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-end">
                <!-- <li>
                    <a class="dropdown-item" href="{{ route('my.booking') }}">
                    <i class="fa-solid fa-calendar-check"></i> My Bookings
                    </a>
                </li> -->
                <li>
                    <a class="dropdown-item" href="#" id="ajaxLogout">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                    </a>
                </li>
                </ul>
            </div>


        <div class="header-actions d-flex align-items-center gap-3">
            <a href="{{ route('login') }}" class="btn btn-signup theme-btn signin-button">SIGN IN</a>
            <a href="{{ route('book.now') }}" class="btn btn-book theme-btn theme-btn2">BOOK NOW</a>
        </div>

    </div>
</nav>