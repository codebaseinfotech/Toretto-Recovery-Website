@extends('layouts.main')

@section('title')
    24/7 Emergency Fuel Delivery in Dubai | Fast, Insured Vehicle Recovery Experts
@endsection

@section('meta_description')
    Stuck on the road? Our emergency fuel delivery service in Dubai offers 24/7 rapid arrival, expert handling, and zero-damage
    recovery—call now for help.
@endsection

@section('meta_keywords', '24/7 Emergency Fuel Delivery in Dubai, Emergency Car Recovery Dubai, Roadside Assistance UAE')

@section('content')

    <style>
        @media (min-width: 992px) {
            .offset-lg-2 { margin-left: 5.666667%; }
            .col-lg-7 { flex: 0 0 auto; width: 58.33333333%; }
            .col-lg-3 { flex: 0 0 auto; width: 30%; }
            .breadcrumb-menu li a { font-size: 16px; }
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
    <section class="site-breadcrumb contact-section" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('assets/images/Emergency-Fuel-Delivery-Dubai.webp') }}') center/cover;">

        <div class="container">
            <div class="row min-vh-75" style="padding: 40px 0;">

                <!-- LEFT TEXT (CENTERED) -->
                <div class="col-lg-7 d-flex mb-5 mb-lg-0">
                    <div class="hero-content-wrapper text-start text-white w-100">

                        <!-- Eyebrow Badge -->
                        <div class="dp-hero-eyebrow wow animate__animated animate__fadeInDown">
                            <i class="fas fa-gas-pump"></i>
                            Toretto Fuel Delivery — Dubai
                        </div>

                        <!-- Main Heading -->
                        <h1 class="dp-hero-title wow animate__animated animate__fadeInDown" data-wow-delay=".1s">
                            <span>24/7 Emergency Fuel Delivery in Dubai</span> <br>Fast, Reliable & Hassle-Free
                        </h1>

                        <ul class="breadcrumb-menu wow animate__animated animate__fadeInDown" data-wow-delay=".15s" style="margin-left: 0; padding-left: 0;">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                                <i class="fa fa-angle-double-right"></i>
                            </li>
                            <li class="active">Emergency Fuel Delivery Dubai</li>
                        </ul>

                        <!-- Subtitle -->
                        <h2 class="dp-hero-subtitle wow animate__animated animate__fadeInDown" data-wow-delay=".2s">
                            Ran out of fuel in the middle of the road? Don’t worry — Toretto Recovery is just a call away. Our emergency fuel delivery service is available 24/7 across Dubai to get you back on the road quickly and safely. Whether you’re stuck on a highway, in traffic, or far from a petrol station, our team will deliver fuel directly to your location without delay.
                        </h2>

                        <!-- CTA Section -->
                        <div class="hero-btn mt-4 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                            <a href="{{ route('home') }}" target="_blank" class="theme-btn">
                                Book Now <i class="fas fa-arrow-right-long ms-2"></i>
                            </a>
                            <a href="tel:+971526917666" class="theme-btn theme-btn2">
                                Call Now <i class="fas fa-arrow-right-long ms-2"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <!-- RIGHT FORM (SMALLER) -->
                <div class="col-lg-3 offset-lg-2">
                    <div class="dark-form-card small-form wow animate__animated animate__fadeInRight">

                        <h3 class="form-title">Request services</h3>

                        <form method="POST" action="{{ route('contact.submit') }}">
                            @csrf

                            <div class="form-group">
                                <input type="text" name="name" placeholder="Your name" required>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email address" required>
                            </div>

                            <input type="hidden" name="type" value="Emergency Fuel Delivery Dubai Inquiry">

                            <div class="form-group">
                                <input type="text" name="phone" placeholder="Phone number" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="subject" placeholder="Your address">
                            </div>

                            <div class="form-group">
                                <textarea rows="3" name="message" placeholder="Type a message"></textarea>
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

    <!-- HERO STATS ROW -->
    <section class="dp-stats-section">
        <div class="container">
            <div class="dp-stats-row">
                <div class="dp-stat-box">
                    <span class="dp-stat-num">20m</span>
                    <span class="dp-stat-label">Avg. Arrival Time</span>
                </div>
                <div class="dp-stat-divider"></div>
                <div class="dp-stat-box">
                    <span class="dp-stat-num">24/7</span>
                    <span class="dp-stat-label">Always Available</span>
                </div>
                <div class="dp-stat-divider"></div>
                <div class="dp-stat-box">
                    <span class="dp-stat-num">3</span>
                    <span class="dp-stat-label">Fuel Types (98, 95, D)</span>
                </div>
                <div class="dp-stat-divider"></div>
                <div class="dp-stat-box">
                    <span class="dp-stat-num">100%</span>
                    <span class="dp-stat-label">No App Required</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 1: QUEUES? FORGET IT. (Light/Sand Theme layout style from Desert) -->
    <section class="dp-content-section dp-risks-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Column -->
                <div class="col-lg-6">
                    <div class="dp-section-header">
                        <span class="dp-eyebrow"><i class="fas fa-clock"></i> Ultimate Convenience</span>
                        <h2 class="dp-section-title">
                            Queues? <br><span>Forget it.</span>
                        </h2>
                    </div>
                    <div class="dp-text-block">
                        <p>Want to sit in line? We certainly don't. Kick back and relax while we bring high-quality fuel to your door or current stranded location in less than 20 minutes.</p>
                        <p>Whether you're stuck on Sheikh Zayed Road during rush hour with an empty tank, or simply want to refuel your vehicle overnight without leaving your home, Toretto drops the pump directly at your location.</p>
                    </div>

                    <div class="dp-quote-box mt-4">
                        "Too good to be true? Absolutely not. Our emergency units are essentially petrol stations on wheels."
                    </div>
                </div>
                <!-- Image Column -->
                <div class="col-lg-6 mt-4 mt-lg-0" style="padding-right: 2rem; padding-left: 2rem;">
                    <div class="about-left wow animate__animated animate__fadeInRight">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/Queues-high-quality-fuel.png') }}"
                                alt="Toretto Fuel Delivery" loading="lazy" style="border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: NO APP REQUIRED (Dark Theme styling from Desert) -->
    <section class="dp-content-section dp-professional-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Column (Left) -->
                <div class="col-lg-6 order-2 order-lg-1 mt-5 mt-lg-0" style="padding-right: 2rem;">
                    <div class="about-left wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/Emergency-Fuel-Services-Dubai-Get-Our-Service-Just-on-One-Call.png') }}"
                                alt="Emergency Fuel Delivery Dubai" loading="lazy" style="border-radius: 20px;">
                        </div>
                    </div>
                </div>
                <!-- Text Column (Right) -->
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="dp-section-header dp-section-header--dark">
                        <span class="dp-eyebrow-white dp-eyebrow dp-eyebrow--dark"><i class="fas fa-mobile-alt"></i>
                            Instant Access</span>
                        <h2 class="dp-section-title">
                            No App? <br><span>No Problem.</span>
                        </h2>
                    </div>
                    <div class="dp-text-block dp-text-block--dark">
                        <p>In a rush and spot a Toretto Recovery truck? No sweat — just flag us down or give us a quick call. Our team comes fully equipped to pump on the spot and you'll be back on the move in minutes without any complicated app downloads.</p>
                        <p>We believe emergency fuel delivery should be accessible immediately. No registrations, no hidden subscription fees, just honest transparent pricing matching standard petrol station rates with a minor delivery fare.</p>
                    </div>

                    <div class="dp-methods-list mt-4">
                        <h3 class="dp-subsection-title dp-subsection-title--dark">Available Fuel Types</h3>
                        <ul class="d-flex flex-wrap gap-4 mt-3" style="list-style: none; padding-left: 0;">
                            <li class="d-flex align-items-center mb-3">
                                <span style="background: rgba(215,0,6,0.2); border: 1px solid #d70006; padding: 10px 15px; border-radius: 8px; font-weight: bold; color: #fff; margin-right: 15px;">98</span>
                                <span class="text-white">Super 98 Premium</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <span style="background: rgba(215,0,6,0.2); border: 1px solid #d70006; padding: 10px 15px; border-radius: 8px; font-weight: bold; color: #fff; margin-right: 15px;">95</span>
                                <span class="text-white">Special 95 Standard</span>
                            </li>
                            <li class="d-flex align-items-center mb-0">
                                <span style="background: rgba(255,215,0,0.1); border: 1px solid #ffd700; padding: 10px 15px; border-radius: 8px; font-weight: bold; color: #fff; margin-right: 15px;">D</span>
                                <span class="text-white">Diesel Commercial</span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: HOW TO GET STARTED (Timeline Style - No Cards) -->
    <section class="dp-content-section dp-scenarios-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-9 text-center">
                    <div class="dp-section-header">
                        <span class="dp-eyebrow">Seamless Process</span>
                        <h2 class="dp-section-title">
                            Get Started in <br><span>3 Simple Steps</span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                
                <div class="col-lg-6 mt-4 mt-lg-0 order-2 order-lg-1">
                    <img src="{{ asset('assets/images/24_7 Fuel Delivery Assistance in Bengaluru - RESCUE.png') }}" alt="Fuel Delivery Steps" class="img-fluid rounded-4 shadow-lg wow animate__animated animate__fadeInLeft" style="max-height: 500px; object-fit: cover; width: 100%;">
                </div>

                <!-- Right Column Scenarios -->
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="dp-timeline-item">
                        <div class="dp-tl-marker"></div>
                        <div class="dp-tl-content">
                            <h3>1. Contact Toretto</h3>
                            <p>Give us a call at our 24/7 hotline or drop us a WhatsApp message requesting fuel delivery.</p>
                        </div>
                    </div>

                    <div class="dp-timeline-item">
                        <div class="dp-tl-marker"></div>
                        <div class="dp-tl-content">
                            <h3>2. Share Location & Fuel Type</h3>
                            <p>Send your exact GPS pin and specify whether your vehicle requires Super 98, Special 95, or Diesel.</p>
                        </div>
                    </div>

                    <div class="dp-timeline-item">
                        <div class="dp-tl-marker"></div>
                        <div class="dp-tl-content">
                            <h3>3. Await Your Full Tank</h3>
                            <p>A specialized refueling vehicle is immediately dispatched. We arrive, pump the fuel safely, and process payment locally.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: TRUST INDICATORS (Light Theme) -->
    <section class="dp-content-section dp-trust-section">
        <div class="container">
            <div class="dp-section-header text-center mb-5">
                <span class="dp-eyebrow"><i class="fas fa-star"></i> Reputation & Reliability</span>
                <h2 class="dp-section-title">
                    The City's <br><span>Buzzing About It...</span>
                </h2>
            </div>
            
            <div class="row align-items-center">
                <!-- Text Column (Left) -->
                <div class="col-lg-6">
                    <div class="dp-trust-list mt-4">
                        <!-- Item 1 -->
                        <div class="dp-trust-item">
                            <div class="dp-trust-icon"><i class="fas fa-bolt"></i></div>
                            <div class="dp-trust-text">
                                <strong>Extremely Fast Arrival Times</strong> with units scattered strategically to hit standard 20-30 minute intervals.
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="dp-trust-item">
                            <div class="dp-trust-icon"><i class="fas fa-shield-alt"></i></div>
                            <div class="dp-trust-text">
                                <strong>Hazard Free Rescues</strong> from major highways directly to safe parking spots without forcing unneeded recovery risk.
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="dp-trust-item">
                            <div class="dp-trust-icon"><i class="fas fa-gas-pump"></i></div>
                            <div class="dp-trust-text">
                                <strong>Authentic Petrol Quality</strong> drawn directly from the best reliable UAE stations guaranteeing zero engine harm.
                            </div>
                        </div>
                        <!-- Item 4 -->
                        <div class="dp-trust-item">
                            <div class="dp-trust-icon"><i class="fas fa-receipt"></i></div>
                            <div class="dp-trust-text">
                                <strong>Transparent Petrol Fares</strong> where you pay fuel rates identical to the pump alongside modest transportation delivery tickets.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Column (Right) -->
                <div class="col-lg-6 mt-4 mt-lg-0" style="padding-right: 2rem; padding-left: 2rem;">
                    <div class="about-left wow animate__animated animate__fadeInRight">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/dubai-drivers.jpeg') }}"
                                alt="Toretto Trust" loading="lazy" style="border-radius: 20px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: FREQUENTLY ASKED QUESTIONS -->
    <section class="pj-faq-section pb-5" style="background-color: #111;">
        <div class="container">
            <div class="pj-faq-header text-center mb-5 wow animate__animated animate__fadeInUp">
                <span class="pj-faq-eyebrow">Questions? Answered.</span>
                <h2 class="pj-faq-title text-white">Emergency Fuel Delivery <span>FAQs</span></h2>
            </div>

            <div class="pj-faq-list">

                <!-- FAQ 1 -->
                <div class="pj-faq-item active">
                    <button class="pj-faq-q" aria-expanded="true">
                        <span>What types of vehicle and machines does Toretto deliver to?</span>
                        <div class="pj-faq-icon"><i class="fas fa-minus"></i></div>
                    </button>
                    <div class="pj-faq-answer">
                        <p>We deliver standard Super 98, Special 95, and Diesel to all types of light and heavy vehicles, including sedans, SUVs, luxury cars, commercial trucks, bikes, and even generators.</p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="pj-faq-item">
                    <button class="pj-faq-q" aria-expanded="false">
                        <span>How do I make changes to an active order?</span>
                        <div class="pj-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="pj-faq-answer">
                        <p>Once requested, our units are dispatched immediately for rapid response. If you want to make changes to a scheduled or active delivery, simply call our dispatch hotline to cancel it and update your details.</p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="pj-faq-item">
                    <button class="pj-faq-q" aria-expanded="false">
                        <span>Can I order a fuel delivery if I have an emergency on a highway?</span>
                        <div class="pj-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="pj-faq-answer">
                        <p>If you run out of fuel on the highway, you can order as usual using a quick phone call. Our Pilot and command center will make a safety assessment based on your location, and if we can safely help you, we'll secure the local perimeter with lighting/cones and refuel your vehicle securely.</p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="pj-faq-item">
                    <button class="pj-faq-q" aria-expanded="false">
                        <span>Can I order fuel for multiple vehicles?</span>
                        <div class="pj-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="pj-faq-answer">
                        <p>Yes, you can request fuel for multiple vehicles at the same location. Just inform our dispatcher so we can guarantee the responding unit arrives with a sufficient payload.</p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="pj-faq-item">
                    <button class="pj-faq-q" aria-expanded="false">
                        <span>How can I reschedule a missed delivery?</span>
                        <div class="pj-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="pj-faq-answer">
                        <p>Since we operate on an immediate-dispatch rescue model, missed deliveries are extremely rare. If you've resolved your issue before we arrive, give our hotline a quick call to cancel the dispatch.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="pj-cta-section pb-5" style="background-color: #111;">
        <div class="container">
            <div class="pj-cta-box wow animate__animated animate__fadeInUp">
                <div class="pj-cta-left">
                    <h2>Need Fuel <span>Fast?</span></h2>
                    <p>Don't stay stranded. Toretto Recovery brings the petrol station directly to your vehicle, 24/7.</p>
                </div>
                <div class="pj-cta-right">
                    <a href="tel:+971526917666" class="theme-btn text-center w-100" style="padding: 16px 32px; border-radius: 5px; font-weight: bold; background-color: #d70006; color: #fff; text-decoration: none;">
                        <i class="fas fa-phone-alt me-2"></i> Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>


    <link rel="stylesheet" href="{{ asset('assets/css/service.css') }}?v={{ filemtime(public_path('assets/css/service.css')) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/desert-pull-out.css') }}?v={{ filemtime(public_path('assets/css/desert-pull-out.css')) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/areas.css') }}?v={{ filemtime(public_path('assets/css/areas.css')) }}">
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // FAQ Accordion JS
            const faqItems = document.querySelectorAll('.pj-faq-list .pj-faq-item');

            faqItems.forEach(function(item) {
                const btn = item.querySelector('.pj-faq-q');
                if(!btn) return;
                
                btn.addEventListener('click', function() {
                    const isActive = item.classList.contains('active');

                    // Close all
                    faqItems.forEach(function(el) {
                        el.classList.remove('active');
                        el.querySelector('.pj-faq-q').setAttribute('aria-expanded', 'false');
                        el.querySelector('.pj-faq-icon i').className = 'fas fa-plus';
                    });

                    // Open clicked (if it wasn't already open)
                    if (!isActive) {
                        item.classList.add('active');
                        btn.setAttribute('aria-expanded', 'true');
                        item.querySelector('.pj-faq-icon i').className = 'fas fa-minus';
                    }
                });
            });
        });
    </script>
@endsection
