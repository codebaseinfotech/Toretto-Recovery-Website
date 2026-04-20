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
        @media (min-width: 992px) {
            .offset-lg-2 { margin-left: 5.666667%; }
            .col-lg-7 { flex: 0 0 auto; width: 58.33333333%; }
            .col-lg-3 { flex: 0 0 auto; width: 30%; }
            .breadcrumb-menu li a { font-size: 16px; }
            .dp-hero-title { font-size: 60px !important; line-height: 1.25 !important; }
            .dp-hero-subtitle { font-size: 17px !important; }
        }
        @media (max-width: 991px) {
            .dp-hero-title { font-size: 32px !important; line-height: 1.3 !important; }
            .dp-hero-subtitle { font-size: 15px !important; }
        }
        .dp-hero-eyebrow {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(215,0,6,0.2); border: 1px solid rgba(215,0,6,0.4);
            padding: 6px 14px; border-radius: 30px; font-size: 13px; font-weight: 700;
            color: #fff; margin-bottom: 20px; letter-spacing: 1px; text-transform: uppercase;
        }
        .dp-hero-eyebrow i { color: #d70006; }
        .dp-hero-title { color: #fff; font-weight: 800; margin-bottom: 15px; }
        .dp-hero-title span { color: #d70006; }
        .dp-hero-subtitle { color: rgba(255,255,255,0.85); font-weight: 500; line-height: 1.7; margin-top: 15px; margin-bottom: 30px; max-width: 90%; }
    </style>
    <section class="site-breadcrumb contact-section" style="background: url('{{ asset('assets/images/Site-of-the-Breakdown-1024x683.webp') }}');">

        <div class="container">
            <div class="row align-items-center min-vh-75">

                <!-- LEFT TEXT (CENTERED) -->
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="hero-content-wrapper text-start text-white w-100">

                       <div class="dp-hero-eyebrow wow animate__animated animate__fadeInDown">
                            <i class="fas fa-battery-half"></i>
                            Toretto Battery Jump Start — Dubai
                        </div>
                        <h1 class="dp-hero-title wow animate__animated animate__fadeInDown" data-wow-delay=".1s">
                            <span>24/7 Battery Jump Start Service in Dubai</span> — Quick & Safe Assistance
                        </h1>

                        <ul class="breadcrumb-menu wow animate__animated animate__fadeInDown" data-wow-delay=".15s" style="margin-left: 0; padding-left: 0;">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                                <i class="fa fa-angle-double-right"></i>
                            </li>
                            <li class="active">Battery Jump Start Dubai</li>
                        </ul>

                        <h2 class="dp-hero-subtitle wow animate__animated animate__fadeInDown" data-wow-delay=".2s">
                            Car won’t start due to a dead battery? Toretto Recovery provides fast and reliable battery jump start services anywhere in Dubai, anytime you need.
                            Our trained technicians will reach your location promptly and safely jump-start your vehicle, so you can continue your journey without stress.
                        </h2>

                        <div class="hero-btn mt-4 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
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

    {{-- ===== INTRO SECTION ===== --}}
    <section class="battery-intro-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0 wow animate__animated animate__fadeInLeft">
                    <img src="{{ asset('assets/images/car-recovery-on-road-qusais.jpg') }}" alt="Battery Jump Start Service in Dubai" class="battery-intro-img">
                </div>
                <div class="col-lg-6 wow animate__animated animate__fadeInRight">
                    <h2 class="battery-section-title">Local. Reliable. <span>Always Ready</span></h2>
                    <p class="battery-text">Looking for fast and professional battery boost services in Dubai? At Toretto Recovery, we provide quick, reliable, and courteous roadside solutions to get your car started without stress or delays. From Downtown Dubai to Jebel Ali, our team is ready to assist you 24/7.</p>
                    <p class="battery-text">Since day one, we’ve proudly served Dubai with clean, well-equipped service vehicles and a skilled team that treats every customer with care. Whether your car battery has died in a parking lot, on Sheikh Zayed Road, or in the desert, we’re here to provide safe, efficient, and professional assistance.</p>
                    <p class="battery-text">Our mission is simple: to be your go-to choice for battery jump-start and roadside support in Dubai, day or night. Whether it’s 2 p.m. in Business Bay or 2 a.m. in Deira, you can count on us for prompt, secure, and affordable service.</p>
                    <a href="tel:+971526917666" class="theme-btn mt-3">Call Us Now <i class="fas fa-arrow-right-long ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== EXPERTISE GRID ===== --}}
    <section class="expertise-section">
        <div class="container">
            <div class="text-center mb-5 wow animate__animated animate__fadeInUp">
                <span class="service-tag">Why Trust Us</span>
                <h2 class="battery-section-title">Our <span>Expertise</span></h2>
                <p class="battery-text mx-auto" style="max-width: 750px;">Toretto Recovery understands that when it comes to battery boost services, reliability, professionalism, and peace of mind are essential. Here’s why drivers across Dubai trust us:</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <div class="expertise-card">
                        <div class="expertise-icon"><i class="fas fa-clock"></i></div>
                        <h4>24/7 Battery Boost Services</h4>
                        <p>Car won’t start? No matter the time—day, night, weekends, or holidays—our team is available around the clock to give your battery the boost it needs. You’ll never be left stranded.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <div class="expertise-card">
                        <div class="expertise-icon"><i class="fas fa-bolt"></i></div>
                        <h4>Safe & Quick Jump-Starts</h4>
                        <p>We use the right equipment and techniques to jump-start your car safely without risking damage to your electrical system. Fast, secure, and hassle-free every time.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <div class="expertise-card">
                        <div class="expertise-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <h4>On-Site Assistance</h4>
                        <p>Whether you’re stuck at home, in a parking lot, or on the roadside, our technicians reach you quickly anywhere in Dubai with everything needed to get your vehicle running again.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                    <div class="expertise-card">
                        <div class="expertise-icon"><i class="fas fa-car-battery"></i></div>
                        <h4>Beyond Just a Boost</h4>
                        <p>If your battery is beyond saving, we’ll guide you with replacement options and can arrange transport to a nearby workshop, ensuring you’re never left without a solution.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                    <div class="expertise-card">
                        <div class="expertise-icon"><i class="fas fa-car-side"></i></div>
                        <h4>Support for All Vehicle Types</h4>
                        <p>Need fast, reliable car towing? We’re here 24/7 to get you moving again day or night. We safely boost sedans, SUVs, luxury cars, and heavy-duty vehicles.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".6s">
                    <div class="expertise-card">
                        <div class="expertise-icon"><i class="fas fa-truck"></i></div>
                        <h4>Fleet Battery Support</h4>
                        <p>For businesses, we provide reliable battery boost and roadside solutions for company vehicles, keeping your operations running smoothly with minimal downtime.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== TRUST BANNER ===== --}}
    <section class="trust-banner wow animate__animated animate__fadeIn" style="background: linear-gradient(rgba(0,0,0,0.85), rgba(0,0,0,0.85)), url('{{ asset('assets/images/Site-of-the-Breakdown-1024x683.webp') }}') center/cover;">
        <div class="container">
            <h3 class="text-white">Setting the Standard for Battery Boost in Dubai</h3>
            <p>At Toretto Recovery, we take pride in providing reliable, safe, and professional battery boost services across Dubai. We know how stressful it can be when your car refuses to start, which is why we respond quickly and handle every vehicle with the same care as if it were our own.</p>
            <p>Our roadside team uses well-maintained equipment and the safest techniques to jump-start your vehicle without risking damage to its electronics. Every technician is courteous, trained, and focused on getting you back on the road as smoothly as possible.</p>
            <p class="mb-0 mt-4 h5 font-weight-bold" style="color: #d70006;">We believe in clear communication—explaining each step of the process so you feel confident and supported.</p>
        </div>
    </section>

    {{-- ===== COST FACTORS ===== --}}
    <section class="pricing-factors-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0 wow animate__animated animate__fadeInLeft">
                    <div class="pe-lg-4">
                        <span class="service-tag">Transparent Pricing</span>
                        <h2 class="battery-section-title">Affordable <span>Battery Boost</span> Services</h2>
                        <p class="battery-text mb-4">At Toretto Recovery, we believe a dead car battery shouldn’t drain your wallet. That’s why we provide transparent, competitive pricing for our battery boost and jump start services in Dubai—no hidden fees, just honest rates you can trust.</p>
                        <p class="battery-text">The cost of a car battery boost depends on several key factors. Here is a quick breakdown to help you understand our pricing logic:</p>
                    </div>
                </div>
                <div class="col-lg-7 wow animate__animated animate__fadeInRight">
                    <ul class="factor-list">
                        <li class="factor-item">
                            <i class="fas fa-calendar-alt factor-icon"></i>
                            <div class="factor-content">
                                <h5>Time of Day and Week</h5>
                                <p>Emergency requests during late nights, weekends, or public holidays may come with slightly higher charges. Regular business hours are usually more affordable.</p>
                            </div>
                        </li>
                        <li class="factor-item">
                            <i class="fas fa-car-battery factor-icon"></i>
                            <div class="factor-content">
                                <h5>Battery Condition & Service Needed</h5>
                                <p>Sometimes a simple jump-start is enough, while in other cases the battery may be completely dead and require a replacement on the spot.</p>
                            </div>
                        </li>
                        <li class="factor-item">
                            <i class="fas fa-map-marked-alt factor-icon"></i>
                            <div class="factor-content">
                                <h5>Location in Dubai</h5>
                                <p>Your location plays an important role. Areas like Downtown Dubai, Marina, Jebel Ali, or far-off neighborhoods may affect service time differently than short-distance roadside spots.</p>
                            </div>
                        </li>
                        <li class="factor-item">
                            <i class="fas fa-tags factor-icon"></i>
                            <div class="factor-content">
                                <h5>Service Provider Rates</h5>
                                <p>Prices vary depending on professionalism and equipment. At Toretto Recovery, we keep our charges transparent and competitive, so you know exactly what you’re paying for.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== FAQ SECTION ===== --}}
    <section class="battery-faq-section">
        <div class="container">
            <div class="text-center mb-5 wow animate__animated animate__fadeInUp">
                <span class="service-tag">Common Questions</span>
                <h2 class="battery-section-title">Most Popular <span>Questions</span></h2>
                <p class="battery-text mx-auto" style="max-width: 600px;">Got questions? We’ve got you covered. Here are the answers to the most frequently asked questions about our car battery boost and jump start services in Dubai.</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <div class="accordion" id="batteryFaqAccordion">
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Q1. How quickly can you arrive for a battery boost in Dubai?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#batteryFaqAccordion">
                                <div class="accordion-body">
                                    We usually arrive within 20–30 minutes, depending on your location and traffic. Our goal is to get you back on the road as quickly as possible.
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Q2. Are your battery boost services available 24/7?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#batteryFaqAccordion">
                                <div class="accordion-body">
                                    Yes! We provide 24/7 car battery boost and jump start services in Dubai, including weekends and public holidays.
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Q3. What areas in Dubai do you cover?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#batteryFaqAccordion">
                                <div class="accordion-body">
                                    We cover all major areas of Dubai, such as Jebel Ali, Dubai Marina, Downtown, Deira, Al Barsha, Business Bay, and surrounding neighborhoods.
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Q4. How much does a car battery boost cost in Dubai?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#batteryFaqAccordion">
                                <div class="accordion-body">
                                    The cost depends on factors like location, vehicle type, and whether a replacement battery is needed. We offer transparent and affordable pricing with no hidden fees.
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Q5. Can you replace my car battery if boosting doesn’t work?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#batteryFaqAccordion">
                                <div class="accordion-body">
                                    Absolutely! If your battery cannot hold a charge, we provide on-the-spot car battery replacement in Dubai with high-quality batteries suitable for all car models.
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Q6. Do you offer roadside assistance apart from battery boosts?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#batteryFaqAccordion">
                                <div class="accordion-body">
                                    Yes. Along with jump starts, we also provide tire changes, fuel delivery, towing services, and lockout assistance to get you moving again without delays.
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 7 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Q7. What should I do while waiting for your team?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#batteryFaqAccordion">
                                <div class="accordion-body">
                                    Stay safe by keeping your hazard lights on, parking in a secure spot, and sharing your exact location with our support team for a faster response.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== FINAL CTA ===== --}}
    <section class="battery-cta wow animate__animated animate__fadeIn">
        <div class="container">
            <h2>Need a Battery Boost in Dubai?</h2>
            <p>If your car refuses to start due to a dead battery, don’t panic. Toretto Recovery is just one call away. Our skilled roadside team is available 24/7 across Dubai to provide a fast, safe, and reliable car battery boost or jump start service right where you are.</p>
            
            <div class="cta-btn-group mt-4">
                <a href="tel:+971526917666" class="theme-btn"><i class="fas fa-phone-alt"></i> Call +971 526917666</a>
                <a href="https://wa.me/971526917666" target="_blank" class="theme-btn theme-btn2"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
            </div>
            <p class="mt-4 text-white" style="font-size: 14px; opacity: 0.7;">No automated menus, just real help when you need it most.</p>
        </div>
    </section>

    <link rel="stylesheet"
        href="{{ asset('assets/css/service.css') }}?v={{ filemtime(public_path('assets/css/service.css')) }}">
    <link rel="stylesheet"
        href="{{ asset('assets/css/battery-service.css') }}?v={{ filemtime(public_path('assets/css/battery-service.css')) }}">
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
