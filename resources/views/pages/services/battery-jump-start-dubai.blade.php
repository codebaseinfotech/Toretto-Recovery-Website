@extends('layouts.main')

@section('title')
    24/7 Battery Jump Start in Dubai | Fast, Insured Vehicle Recovery Experts
@endsection

@section('meta_description')
    Stuck on the road? Our Battery Jump Start service in Dubai offers 24/7 rapid arrival, expert handling, and zero-damage
    recovery—call now for help.
@endsection

@section('meta_keywords', '24/7 Battery Jump Start in Dubai, Emergency Car Recovery Dubai, Roadside Assistance UAE')

@section('content')

    <style>
        @media (min-width: 992px) {
            .offset-lg-2 {
                : 8.666667%;
            }

            .col-lg-7 {
                flex: 0 0 auto;
                width: 58.33333333%;
            }

            .col-lg-3 {
                flex: 0 0 auto;
                width: 30%;
            }

            .offset-lg-2 {
                margin-left: 5.666667%;
            }

            .breadcrumb-menu li a {
                font-size: 16px;
            }
        }
    </style>
    <section class="site-breadcrumb contact-section" style="background: url('{{ asset('assets/images/Site-of-the-Breakdown-1024x683.webp') }}');">

        <div class="container">
            <div class="row align-items-center min-vh-75">

                <!-- LEFT TEXT (CENTERED) -->
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="contact-img text-start text-white">

                        <h1 class="breadcrumb-title wow animate__animated animate__fadeInDown">
                            <span>24/7 Battery Jump Start Service in Dubai</span> — Quick & Safe Assistance
                        </h1>

                        <ul class="breadcrumb-menu">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                                <i class="fa fa-angle-double-right"></i>
                            </li>
                            <li class="active">Battery Jump Start Dubai</li>
                        </ul>

                        <h2 class="mt-3 breadcrumb-subtitle text-white">
                            Car won’t start due to a dead battery? Toretto Recovery provides fast and reliable battery jump start services anywhere in Dubai, anytime you need.
Our trained technicians will reach your location promptly and safely jump-start your vehicle, so you can continue your journey without stress.
                        </h2>

                        <div class="hero-btn mt-4">
                            <a href="{{ route('home') }}" target="_blank" class="theme-btn">
                                Book Now <i class="fas fa-arrow-right-long"></i>
                            </a>
                            <a href="tel:+971526917666" class="theme-btn theme-btn2">
                                Call Now <i class="fas fa-arrow-right-long"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <!-- RIGHT FORM (SMALLER) -->
                <div class="col-lg-3 offset-lg-2">
                    <div class="dark-form-card small-form">

                        <h3 class="form-title">Request services</h3>

                        <form method="POST" action="{{ route('contact.submit') }}">
                            @csrf

                            <div class="form-group">
                                <input type="text" name="name" placeholder="Your name" required>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email address" required>
                            </div>

                            <input type="hidden" name="type" value="Battery Jump Start Dubai Inquiry">

                            <div class="form-group">
                                <input type="text" name="phone" placeholder="Phone number" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="subject" placeholder="Your address">
                            </div>

                            <div class="form-group">
                                <textarea rows="4" name="message" placeholder="Type a message"></textarea>
                            </div>

                            <button type="submit" class="theme-btn w-100 mt-3">
                                Send Message
                            </button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <link rel="stylesheet"
        href="{{ asset('assets/css/service.css') }}?v={{ filemtime(public_path('assets/css/service.css')) }}">
    <script>
        // Dynamic location → map interaction
        document.querySelectorAll('.tw-loc-pin').forEach(pin => {
            pin.addEventListener('click', () => {
                const lat = pin.dataset.lat;
                const lng = pin.dataset.lng;
                // Update active state
                document.querySelectorAll('.tw-loc-pin').forEach(p => p.classList.remove('tw-loc-active'));
                pin.classList.add('tw-loc-active');
                // Update iframe — red pin marker at exact coordinates
                const iframe = document.getElementById('tw-coverage-iframe');
                iframe.src =
                    `https://maps.google.com/maps?q=${lat},${lng}&t=&z=14&ie=UTF8&iwloc=B&output=embed`;
            });
        });
    </script>
@endsection
