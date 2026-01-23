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
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">CONTACT US</a></li>
      </ul>

        <div class="header-actions d-flex align-items-center gap-3">

            <!-- ACCOUNT DROPDOWN -->
            <div class="dropdown account-dropdown">
                <a href="#" class="d-flex align-items-center gap-2 dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('assets/images/user.png') }}" alt="User" class="user-avatar">
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
                    <i class="fa-solid fa-right-from-bracket"></i> <span>Logout</span>
                    </a>
                </li>
                </ul>
            </div>


        <div class="header-actions d-flex align-items-center gap-3">
            <a href="{{ route('book.now') }}" class="btn btn-book theme-btn theme-btn2">BOOK NOW</a>
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
        <a href="#" class="btn btn-book theme-btn theme-btn2">BOOK NOW</a>
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
        <button class="btn close-menu" type="button" data-bs-toggle="collapse" data-bs-target="#mobile_nav">
          <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

    <ul class="navbar-nav text-start">
      <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">HOME</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">ABOUT US</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">CONTACT US</a></li>
      <li class="nav-item">
        <a class="nav-link dropdown-item" href="#" id="ajaxLogout">
            <i class="fa-solid fa-right-from-bracket"></i> <span class="logout-div">LOGOUT </span> 
        </a>
      </li>
    </ul>
  </div>
</div>
</nav>