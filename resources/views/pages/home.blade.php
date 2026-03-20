@extends('layouts.main')

@section('title', 'Car Recovery Dubai | 24/7 Towing & Roadside Assistance UAE')

@section('meta_description',
    'Reliable 24/7 car recovery, vehicle towing, and emergency roadside assistance across Dubai
    and the UAE. Fast response, safe transport, affordable rates — call now!')

@section('content')
    {{-- <div class="seo-content-wrapper" style="position: absolute; left: -9999px; top: -9999px; width: 1px; height: 1px; overflow: hidden;">
    <h1>24/7 Car Recovery Service in Dubai Marina</h1>

    <h2>Trusted Car Recovery Service in Dubai</h2>
    <p>
        We provide fast and reliable car recovery services across Dubai including
        DIP, Jebel Ali, Dubai Marina, JLT, JVC, Downtown Dubai, and Sheikh Zayed Road.
        Our professional team ensures safe vehicle towing and emergency assistance
        anytime, day or night.
    </p>

    <h2>24/7 Emergency Towing & Roadside Assistance</h2>
    <p>
        Whether your car breaks down on Sheikh Zayed Road, inside residential areas,
        or parking basements, our 24/7 towing and roadside assistance team is ready
        to help. We handle accident recovery, flat tires, battery boost, and
        vehicle breakdown recovery.
    </p>

    <h2>Why Drivers Choose Toretto Recovery in Dubai</h2>
    <ul>
        <li>24/7 emergency car recovery service</li>
        <li>Fast response time across Dubai Marina & nearby areas</li>
        <li>Affordable and transparent pricing</li>
        <li>Professional and experienced recovery team</li>
        <li>Modern towing trucks for all vehicle types</li>
    </ul>
</div>  --}}



    {{-- ROUTE SECTION --}}
    <section class="route-section-home" data-aos="fade-up" data-aos-duration="500">
        <div class="container-fluid">
            <div class="row">
                <!-- Left Panel: Form -->
                <div class="col-lg-4 col-md-5 mb-4 mb-md-0" style="z-index: 10;">
                    <div class="route-card-ui"
                        style="background: #fff; padding: 24px; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                        <div class="container">
                            <div class="row">
                                <div class="section-heading text-center" data-aos="fade-up" data-aos-duration="500">
                                    <h2 class="section-title">Book Vehicle<span> Pickup & Drop</span></h2>
                                    <p>Fast, safe, and reliable vehicle recovery service at your location</p>
                                </div>
                            </div>
                        </div>

                        <!-- Inputs -->
                        <form class="route-form" id="bookingForm">
                            <div class="form-group">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <label>Pickup Location</label>
                                    <a href="#"
                                        style="color: #dc3545; margin-bottom: 12px; text-decoration: underline; opacity: 0.6; pointer-events: none;"
                                        id="useCurrentLocationBtn">Use Current Location</a>
                                </div>
                                <div class="input-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <input type="text" id="pickup_location" name="pickup_location"
                                        placeholder="Enter start location" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Drop-off Location</label>
                                <div class="input-icon">
                                    <i class="fa-solid fa-location-crosshairs"></i>
                                    <input type="text" id="drop_location" name="drop_location"
                                        placeholder="Enter destination" required>
                                </div>
                            </div>
                            <!-- Calculate Price Button -->
                            <div class="calculate-price-section mb-4 text-center">
                                <button type="button" class="apply-btn" id="calculatePriceBtn">
                                    <span class="btn-text">Calculate Price</span>
                                    <span class="btn-loader-price d-none">
                                        <div class="beat-loader">
                                            <div class="beat"></div>
                                            <div class="beat"></div>
                                            <div class="beat"></div>
                                        </div>
                                    </span>
                                </button>
                            </div>

                            <!-- Distance and Price Display -->
                            <div class="distance-price-display mb-3">
                                <div class="row g-2">
                                    <div class="col-4">
                                        <div class="p-2 rounded text-center"
                                            style="background: #f8f9fa; border: 1px solid #eee;">
                                            <small style="font-size: 11px; color: #666; display: block;">Distance</small>
                                            <span id="distance"
                                                style="font-size: 13px; font-weight: 700; color: #000;">0.00 km</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="p-2 rounded text-center"
                                            style="background: #f8f9fa; border: 1px solid #eee;">
                                            <small style="font-size: 11px; color: #666; display: block;">ETA</small>
                                            <span id="minutes"
                                                style="font-size: 13px; font-weight: 700; color: #000;">0.00 min</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="p-2 rounded text-center"
                                            style="background: #f8f9fa; border: 1px solid #eee;">
                                            <small style="font-size: 11px; color: #666; display: block;">Price</small>
                                            <span id="price"
                                                style="font-size: 13px; font-weight: 700; color: #000;">0.00 AED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Promo Code Section -->
                            <div class="promo-section mb-3">
                                <div class="row g-2 align-items-end">
                                    <div class="col-md-8 col-12">
                                        <div class="form-group mb-0">
                                            <label for="promo_code" class="form-label mb-1">Promo Code</label>
                                            <div class="input-icon position-relative">
                                                <i class="fa-solid fa-tag position-absolute"
                                                    style="left: 12px; top: 50%; transform: translateY(-50%); color: #6c757d;"></i>
                                                <input type="text" name="promo_code" id="promo_code" class="form-control"
                                                    placeholder="Enter promo code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <button type="button" class="theme-btn w-100" id="applyPromoBtn"
                                            data-applied="false">
                                            <span class="btn-text">Apply</span>
                                            <span class="btn-loader-promo d-none">
                                                <div class="beat-loader">
                                                    <div class="beat"></div>
                                                    <div class="beat"></div>
                                                    <div class="beat"></div>
                                                </div>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Price Calculation Section -->
                            <div class="price-calculation-section mb-4 mt-3 p-3 bg-light rounded">
                                <h5 class="mb-3">Price Calculation</h5>

                                <div class="price-item mb-2">
                                    <span class="fw-bold">Total Price:</span>
                                    <span id="totalPriceDisplay" class="float-end">0.00 AED</span>
                                </div>
                                @if (!empty($settings['show_platform_fee']) && $settings['show_platform_fee'])
                                    <div class="price-item mb-2">
                                        <span class="fw-bold">Platform Fee:</span>
                                        <span id="platform_fee_amount" class="float-end">
                                            {{ $settings['platform_fee_amount'] }} AED
                                        </span>
                                    </div>
                                @endif

                                @if (!empty($settings['show_tax']) && $settings['show_tax'])
                                    <div class="price-item mb-2">
                                        <span class="fw-bold">Government tax:</span>
                                        <span id="tax_amount" class="float-end">
                                            {{ $settings['tax_amount'] }} AED
                                        </span>
                                    </div>
                                @endif

                                <div class="price-item mb-2 d-none" id="discountRow">
                                    <span class="fw-bold">Discounted Price:</span>
                                    <span id="discountAmountDisplay" class="float-end text-danger">0.00 AED</span>
                                </div>

                                <hr class="my-3">

                                <div class="price-item">
                                    <span class="fw-bold">Grand Total:</span>
                                    <span id="grandTotalDisplay" class="float-end fw-bold">0.00 AED</span>
                                </div>
                            </div>

                            <div class="payment-method-section mb-4"
                                style="background: #f8f9fa; border-radius: 8px; padding: 15px; border: 1px solid #eee;">
                                <div class="form-check m-0 d-flex align-items-center gap-2">
                                    <input class="form-check-input mt-0" type="radio" name="payment_method"
                                        id="payment_cod" value="cod" required checked style="cursor: pointer;">
                                    <label class="form-check-label" for="payment_cod"
                                        style="font-size: 14px; font-weight: 500; color: #000; cursor: pointer; margin-top:2px;">
                                        Cash on Delivery (COD)
                                    </label>
                                </div>
                            </div>

                            <!-- SUBMIT -->
                            <div class="form-button">
                                <button type="submit" class="btn-booknow theme-btn" id="bookingSubmitBtn">
                                    <span class="btn-text">BOOK NOW</span>
                                    <span class="btn-loader d-none">
                                        <div class="beat-loader">
                                            <div class="beat"></div>
                                            <div class="beat"></div>
                                            <div class="beat"></div>
                                            <div class="beat"></div>
                                            <div class="beat"></div>
                                            <div class="beat"></div>
                                        </div>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Right Map -->
                <div class="col-lg-8 col-md-7" style="position: relative; min-height: 500px;">
                    <div id="map"
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- HERO SECTION --}}
    <section class="hero-section">
        <div class="hero-shape">
            <div class="hero-shape-1"></div>
            <div class="hero-shape-2"></div>
            <div class="hero-shape-3"></div>
            <div class="hero-shape-4"></div>
            <div class="hero-shape-5"></div>
            <div class="hero-shape-6"></div>
        </div>

        <div class="hero-slider owl-carousel owl-theme owl-loaded owl-drag">

            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="transform: translate3d(-3750px, 0px, 0px); transition: 0.25s; width: 7500px;">
                    <div class="owl-item" style="width: 1250px;">
                        <div class="hero-single" style="background: url('{{ asset('assets/images/slider-2.jpg') }}');">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-12 col-lg-7">
                                        <div class="hero-content">
                                            <h6 class="hero-sub-title wow animate__animated animate__fadeInDown"
                                                data-wow-delay="0.25s">
                                                <i class="fa-solid fa-car"></i>Welcome To Toretto Recovery
                                            </h6>
                                            <h1 class="hero-title wow animate__animated animate__fadeInRight"
                                                data-wow-delay="0.25s">Fast &amp; Reliable
                                                <span>Car Recovery </span>in Dubai – Available 24/7
                                            </h1>
                                            <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.25s">
                                                Stuck on the road? Toretto Recovery delivers quick, safe, and professional
                                                vehicle recovery and towing services anywhere in Dubai
                                            </p>
                                            <div class="hero-btn wow animate__animated animate__fadeInUp"
                                                data-animation="fadeInUp" style="animation-delay: 1s;">
                                                <a href="{{ route('home') }}" class="theme-btn">Book Now<i
                                                        class="fas fa-arrow-right-long"></i></a>
                                                <a href="tel:+971 523003423" class="theme-btn theme-btn2">Call /
                                                    WhatsApp<i class="fas fa-arrow-right-long"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 1250px;">
                        <div class="hero-single" style="background: url('{{ asset('assets/images/slider-3.jpg') }}');">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-12 col-lg-7">
                                        <div class="hero-content">
                                            <h6 class="hero-sub-title wow animate__animated animate__fadeInDown"
                                                data-wow-delay="0.25s">
                                                <i class="fa-solid fa-car"></i>Welcome To Toretto Recovery
                                            </h6>
                                            <h1 class="hero-title wow animate__animated animate__fadeInRight"
                                                data-wow-delay="0.25s">Breakdown <span>Recovery</span> In Dubai
                                            </h1>
                                            <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.25s">
                                                From breakdowns to battery issues or accidents, we ensure safe and effective
                                                recovery support across all Dubai locations.
                                            </p>
                                            <div class="hero-btn wow animate__animated animate__fadeInUp"
                                                data-animation="fadeInUp" style="animation-delay: 1s;">
                                                <a href="{{ route('home') }}" class="theme-btn">Book Now<i
                                                        class="fas fa-arrow-right-long"></i></a>
                                                <a href="tel:+971 523003423" class="theme-btn theme-btn2">Call /
                                                    WhatsApp<i class="fas fa-arrow-right-long"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 1250px;">
                        <div class="hero-single" style="background: url('{{ asset('assets/images/slider-2.jpg') }}');">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-12 col-lg-7">
                                        <div class="hero-content">
                                            <h6 class="hero-sub-title wow animate__animated animate__fadeInDown"
                                                data-wow-delay="0.25s">
                                                <i class="fa-solid fa-car"></i>Welcome To Toretto Recovery
                                            </h6>
                                            <h1 class="hero-title wow animate__animated animate__fadeInRight"
                                                data-wow-delay="0.25s">Fast &amp; Reliable
                                                <span>Car Recovery </span>in Dubai – Available 24/7
                                            </h1>
                                            <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.25s">
                                                Stuck on the road? Toretto Recovery delivers quick, safe, and professional
                                                vehicle recovery and towing services anywhere in Dubai
                                            </p>
                                            <div class="hero-btn wow animate__animated animate__fadeInUp"
                                                data-animation="fadeInUp">
                                                <a href="{{ route('home') }}" class="theme-btn">Book Now<i
                                                        class="fas fa-arrow-right-long"></i></a>
                                                <a href="tel:+971 523003423" class="theme-btn theme-btn2">Call /
                                                    WhatsApp<i class="fas fa-arrow-right-long"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 1250px;">
                        <div class="hero-single" style="background: url('{{ asset('assets/images/slider-3.jpg') }}');">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-12 col-lg-7">
                                        <div class="hero-content">
                                            <h6 class="hero-sub-title wow animate__animated animate__fadeInDown"
                                                data-wow-delay="0.25s">
                                                <i class="fa-solid fa-car"></i>Welcome To Toretto Recovery
                                            </h6>
                                            <h1 class="hero-title wow animate__animated animate__fadeInRight"
                                                data-wow-delay="0.25s">Breakdown <span>Recovery</span> In Dubai
                                            </h1>
                                            <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.25s">
                                                From breakdowns to battery issues or accidents, we ensure safe and effective
                                                recovery support across all Dubai locations.
                                            </p>
                                            <div class="hero-btn wow animate__animated animate__fadeInUp"
                                                data-animation="fadeInUp" style="animation-delay: 1s;">
                                                <a href="{{ route('home') }}" class="theme-btn">Book Now<i
                                                        class="fas fa-arrow-right-long"></i></a>
                                                <a href="tel:+971 523003423" class="theme-btn theme-btn2">Call /
                                                    WhatsApp<i class="fas fa-arrow-right-long"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 1250px;">
                        <div class="hero-single" style="background: url('{{ asset('assets/images/slider-2.jpg') }}');">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-12 col-lg-7">
                                        <div class="hero-content">
                                            <h6 class="hero-sub-title wow animate__animated animate__fadeInDown"
                                                data-wow-delay="0.25s">
                                                <i class="fa-solid fa-car"></i>Welcome To Toretto Recovery
                                            </h6>
                                            <h1 class="hero-title wow animate__animated animate__fadeInRight"
                                                data-wow-delay="0.25s">Fast &amp; Reliable
                                                <span>Car Recovery </span>in Dubai – Available 24/7
                                            </h1>
                                            <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.25s">
                                                Stuck on the road? Toretto Recovery delivers quick, safe, and professional
                                                vehicle recovery and towing services anywhere in Dubai
                                            </p>
                                            <div class="hero-btn wow animate__animated animate__fadeInUp"
                                                data-animation="fadeInUp">
                                                <a href="{{ route('home') }}" class="theme-btn">Book Now<i
                                                        class="fas fa-arrow-right-long"></i></a>
                                                <a href="tel:+971 523003423" class="theme-btn theme-btn2">Call /
                                                    WhatsApp<i class="fas fa-arrow-right-long"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 1250px;">
                        <div class="hero-single" style="background: url('{{ asset('assets/images/slider-3.jpg') }}');">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-12 col-lg-7">
                                        <div class="hero-content">
                                            <h6 class="hero-sub-title wow animate__animated animate__fadeInDown"
                                                data-wow-delay="0.25s">
                                                <i class="fa-solid fa-car"></i>Welcome To Toretto Recovery
                                            </h6>
                                            <h1 class="hero-title wow animate__animated animate__fadeInRight"
                                                data-wow-delay="0.25s">Breakdown <span>Recovery</span> In Dubai
                                            </h1>
                                            <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.25s">
                                                From breakdowns to battery issues or accidents, we ensure safe and effective
                                                recovery support across all Dubai locations.
                                            </p>
                                            <div class="hero-btn wow animate__animated animate__fadeInUp"
                                                data-animation="fadeInUp" style="animation-delay: 1s;">
                                                <a href="{{ route('home') }}" class="theme-btn">Book Now<i
                                                        class="fas fa-arrow-right-long"></i></a>
                                                <a href="tel:+971 523003423" class="theme-btn theme-btn2">Call /
                                                    WhatsApp<i class="fas fa-arrow-right-long"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev">
                    <i class="fa-solid fa-long-arrow-left"></i>
                </button>
                <button type="button" role="presentation" class="owl-next">
                    <i class="fa-solid fa-long-arrow-right"></i>
                </button>
            </div>
            <div class="owl-dots disabled"></div>
        </div>
    </section>

    {{-- FEATURE SECTION --}}
    <section class="feature-area ft-bg1" id="Feature">
        <div class="container">

            <div class="feature-wrapper">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-item wow fadeInUp" data-wow-once="true">
                            <span class="count">01</span>
                            <div class="feature-icon">
                                <img src="{{ asset('assets/images/1.png') }}" alt="">
                            </div>
                            <h4 class="feature-title">Towing Services</h4>
                            <p>Safe and efficient towing for all types of vehicles, including sports cars.</p>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-item wow fadeInDown">
                            <span class="count">02</span>
                            <div class="feature-icon">
                                <img src="{{ asset('assets/images/2.png') }}" alt="">
                            </div>
                            <h4 class="feature-title">Recovery Services</h4>
                            <p>Expert recovery solutions for vehicles stuck in deserts, basements</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-item wow fadeInUp">
                            <span class="count">03</span>
                            <div class="feature-icon">
                                <img src="{{ asset('assets/images/3.png') }}" alt="">
                            </div>
                            <h4 class="feature-title">Lockout Assistance</h4>
                            <p>Quick and reliable lockout services to get you back on the road without delay.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- ABOUT SECTION --}}
    <section class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 imagebag">
                    <div class="about-left wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/01.png') }}" alt="">
                        </div>
                        <div class="about-experience">
                            <div class="about-experience-icon">
                                <i class="fa-solid fa-car"></i>
                            </div>
                            <b class="text-start">10+ Years Of
                                <br>
                                Quality Service</b>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="about-right wow animate__animated animate__fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline"><i class="fa-solid fa-car"></i>About Us</span>
                            <h2 class="site-title">Toretto Recovery <span>– Dubai’s Trusted</span> Car Recovery Experts
                            </h2>
                        </div>
                        <p class="about-text text-justify">
                            Based in Dubai Investment Park 2, Toretto Recovery provides reliable vehicle towing and roadside
                            assistance with a modern fleet of 6 advanced recovery trucks. Our team ensures safe, fast, and
                            affordable solutions across Dubai.

                        </p>
                        <p class="about-text text-justify">
                            We handle accidents, breakdowns, flat tyres, battery failures, off-road pulls &amp; emergency
                            rescues.
                        </p>
                        <a href="{{ route('about') }}" class="theme-btn mt-4">Read More<i
                                class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SERVICES --}}
    <section class="feature-area ft-bg1 bg-services-new py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading text-center">
                        <h2 class="site-title text-white">Car <span>Recovery </span>Services</h2>
                    </div>
                </div>
            </div>
            <div class="feature-wrapper">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="text-center service-item wow fadeInUp">
                            <div class="service-img">
                                <img src="{{ asset('assets/images/1.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Car Recovery &amp; Towing
                                </h3>
                                <p class="service-text">
                                    Round-the-clock towing support across Dubai. Fast, safe, and damage-free.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="text-center service-item wow fadeInDown">
                            <div class="service-img">
                                <img src="{{ asset('assets/images/3.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Sports / Luxury Car Recovery

                                </h3>
                                <p class="service-text">
                                    Expert flatbed towing designed for low-clearance, high-value vehicles.

                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="text-center service-item wow fadeInUp">
                            <div class="service-img">
                                <img src="{{ asset('assets/images/2.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Battery Boost / Jump Start</h3>
                                <p class="service-text">
                                    Dead battery? Our technicians arrive quickly to get your vehicle running.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="text-center service-item wow fadeInUp">
                            <div class="service-img">
                                <img src="{{ asset('assets/images/4.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Flat Tyre Assistance

                                </h3>
                                <p class="service-text">
                                    On-site tyre replacement or towing to the nearest workshop.

                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="text-center service-item wow fadeInDown">
                            <div class="service-img">
                                <img src="{{ asset('assets/images/5.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Off-Road Recovery

                                </h3>
                                <p class="service-text">
                                    Stuck in sand or off-road terrain? Our desert recovery team is ready 24/7.

                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="text-center service-item wow fadeInUp">
                            <div class="service-img">
                                <img src="{{ asset('assets/images/6.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Accident / Breakdown Recovery

                                </h3>
                                <p class="service-text">
                                    Safe and secure transport from accident sites to your preferred garage.

                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- WHY CHOOSE --}}
    <section class="service-area2 bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading text-center">
                        <h2 class="site-title">Why choose <span>Toretto </span>Recovery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="service-item wow fade-in-up-20">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/Emergency-Support.png') }}" alt="24/7 Emergency Support">
                        </div>
                        <div class="service-content new-content">
                            <h3 class="service-title">24/7 Emergency Support</h3>
                            <p> Always available—day or night. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item wow fade-in-down-20">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/Fast-Response-Time.png') }}" alt="Fast Response Time">
                        </div>
                        <div class="service-content new-content">
                            <h3 class="service-title">Fast Response Time</h3>
                            <p> With our 6-truck fleet, our team arrives quickly anywhere in Dubai. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item wow fade-in-up-20">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/Affordable-Transparent-Pricing.png') }}"
                                alt="Affordable & Transparent Pricing">
                        </div>
                        <div class="service-content new-content">
                            <h3 class="service-title">Affordable & Transparent Pricing </h3>
                            <p> Clear rates. No hidden fees. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item wow fade-in-down-20">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/Professional-Certified-Team.png') }}"
                                alt="Professional & Certified Team">
                        </div>
                        <div class="service-content new-content">
                            <h3 class="service-title">Professional & Certified Team </h3>
                            <p> Highly skilled operators & recovery specialists. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item wow fade-in-up-20">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/Safe-Secure-Towing.png') }}"
                                alt="Safe, Secure & Damage-Free Towing">
                        </div>
                        <div class="service-content new-content">
                            <h3 class="service-title">Safe, Secure & Damage-Free Towing </h3>
                            <p> Modern flatbeds designed for all vehicle types. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item wow fade-in-down-20">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/Trusted-by.png') }}" alt="Trusted by Thousands in Dubai">
                        </div>
                        <div class="service-content new-content">
                            <h3 class="service-title">Trusted by Thousands in Dubai </h3>
                            <p> Years of successful recoveries with excellent customer feedback. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="cta-area cta-home-section pt-100">
        <div class="container-fluid cta-wrapper p-0">
            <div class=" container wow fadeInUp">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cta-content">
                            <h1 class="site-title">Service Coverage <span>Areas</span>
                            </h1>
                            <p class="text-white-p">We provide full Dubai-wide coverage, including</p>
                            <p class="text-gray-p">
                                Dubai Investment Park (DIP) • Jebel Ali • Dubai South • Marina • Motor City • Sports City •
                                JVC • JVT • Jumeirah Park • Discovery Gardens • Damac Hills • Dubai Islands &amp; more.
                            </p>
                            <div class="cta-btn">
                                <a href="{{ route('contact') }}" class="theme-btn">Contact Us Now<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- PROCESS --}}
    <section class="process-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline"><i class="fas fa-car"></i>How It Works</span>
                        <h2 class="site-title">Our Working <span>Process</span> </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-3 col-md-6 text-center mb-30">
                    <div class="process-single">
                        <div class="icon">
                            <span>01</span>
                            <img src="{{ asset('assets/images/Book-Service-Online.png') }}" alt="">
                        </div>
                        <h4>Book Service Online</h4>
                        <p>Submit your service request instantly through our website or phone call.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-30">
                    <div class="process-single">
                        <div class="icon">
                            <span>02</span>
                            <img src="{{ asset('assets/images/Service-confirmation.png') }}" alt="">
                        </div>
                        <h4>Service Confirmation </h4>
                        <p>We confirm your location and dispatch the nearest recovery truck.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-30">
                    <div class="process-single">
                        <div class="icon">
                            <span>03</span>
                            <img src="{{ asset('assets/images/Estimate-Details.png') }}" alt="">
                        </div>
                        <h4>Estimate Details
                        </h4>
                        <p>Clear, transparent pricing before service.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-30">
                    <div class="process-single last-child">
                        <div class="icon">
                            <span>04</span>
                            <img src="{{ asset('assets/images/Complete-Your-Works.png') }}" alt="">
                        </div>
                        <h4>Complete Your Works</h4>
                        <p>Your vehicle is safely towed or recovered.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- RECOVERY --}}
    <section class="recovery-cta-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cta-content">
                        <h1 class="site-title">We Recover All <span>Vehicle Types</span>
                        </h1>
                        <p class="text-gray-p">
                            From everyday cars to high-end luxury vehicles, we provide safe, reliable, and professional
                            recovery services. Our expert team ensures damage-free transport using modern recovery
                            equipment.
                        </p>
                        <div class="recovery-list">
                            <ul>
                                <li><img src="{{ asset('assets/images/Frame (14).png') }}" alt=""> Sedans </li>
                                <li><img src="{{ asset('assets/images/Frame (14).png') }}" alt=""> SUVs & 4x4
                                </li>
                                <li><img src="{{ asset('assets/images/Frame (14).png') }}" alt=""> Pickup Trucks
                                </li>
                                <li><img src="{{ asset('assets/images/Frame (14).png') }}" alt=""> Sports Cars
                                </li>
                            </ul>
                            <div class="divider"></div>
                            <ul>
                                <li><img src="{{ asset('assets/images/Frame (14).png') }}" alt=""> Luxury
                                    Vehicles</li>
                                <li><img src="{{ asset('assets/images/Frame (14).png') }}" alt=""> Vans &
                                    Commercial Vehicles</li>
                                <li><img src="{{ asset('assets/images/Frame (14).png') }}" alt=""> Motorcycles
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-img-recover">
                    <img src="{{ asset('assets/images/service-image.png') }}" alt=""
                        style="border-radius: 10px;">
                </div>
            </div>
        </div>
    </section>

    {{-- TESTIMONIAL --}}
    <section class="testimonial-section" id="testimonials">
        <div class="site-heading text-center">
            <h2 class="site-title">What Our <span>Customers</span> Say
            </h2>
        </div>
        <div class="container">
            <div class="testimonial-shell">
                <div class="testimonial-wrapper grid-col-3 owl-carousel owl-theme">
                    <div class="item testimonial-items">
                        <div class="testimonial-img tm-img-2"><img src="{{ asset('assets/images/member-1.png') }}"
                                alt=""></div>
                        <h3 class="testimonial-title">Ahmed K.</h3>
                        <h6>Owner</h6>
                        <img class="star-testimonial" src="{{ asset('assets/images/Frame (15).png') }}" alt="">

                        <p class="testimonial-text">
                            “Fast, reliable, and super professional. They reached me in 15 minutes in Jebel Ali!”
                        </p>
                    </div>
                    <div class="item testimonial-items">
                        <div class="testimonial-img tm-img-2"><img src="{{ asset('assets/images/member-2.png') }}"></div>
                        <h3 class="testimonial-title">Rohan M.</h3>
                        <h6>Owner</h6>
                        <img class="star-testimonial" src="{{ asset('assets/images/Frame (15).png') }}" alt="">
                        <p class="testimonial-text">
                            “Excellent flatbed towing for my sports car. Highly recommended.”
                        </p>
                    </div>
                    <div class="item testimonial-items">
                        <div class="testimonial-img tm-img-2"><img src="{{ asset('assets/images/member-3.png') }}"></div>
                        <h3 class="testimonial-title">Fatima S.</h3>
                        <h6>Owner</h6>
                        <img class="star-testimonial" src="{{ asset('assets/images/Frame (15).png') }}" alt="">
                        <p class="testimonial-text">
                            “Affordable and trustworthy. Saved me late at night near Marina.”
                        </p>
                    </div>
                    <div class="item testimonial-items">
                        <div class="testimonial-img tm-img-2"><img src="{{ asset('assets/images/member-1.png') }}"></div>
                        <h3 class="testimonial-title">Ahmed K.</h3>
                        <h6>Owner</h6>
                        <img class="star-testimonial" src="{{ asset('assets/images/Frame (15).png') }}" alt="">
                        <p class="testimonial-text">
                            “Fast, reliable, and super professional. They reached me in 15 minutes in Jebel Ali!”
                        </p>
                    </div>
                    <div class="item testimonial-items">
                        <div class="testimonial-img tm-img-2"><img src="{{ asset('assets/images/member-2.png') }}"></div>
                        <h3 class="testimonial-title">Rohan M.</h3>
                        <h6>Owner</h6>
                        <img class="star-testimonial" src="{{ asset('assets/images/Frame (15).png') }}" alt="">
                        <p class="testimonial-text">
                            “Excellent flatbed towing for my sports car. Highly recommended.”
                        </p>
                    </div>
                    <div class="item testimonial-items">
                        <div class="testimonial-img tm-img-2"><img src="{{ asset('assets/images/member-3.png') }}"></div>
                        <h3 class="testimonial-title">Fatima S.</h3>
                        <h6>Owner</h6>
                        <img class="star-testimonial" src="{{ asset('assets/images/Frame (15).png') }}" alt="">
                        <p class="testimonial-text">
                            “Affordable and trustworthy. Saved me late at night near Marina.”
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@push('styles')
    <style>
        /* Remove button maintains same styling as apply button */
        #applyPromoBtn[data-applied="true"] {
            /* Same styling as theme-btn, just different text */
        }

        /* Ensure loaders are properly centered */
        .btn-loader-price,
        .btn-loader-promo {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .promo-section {
            margin-bottom: 1rem;
        }

        .promo-section .form-group {
            margin-bottom: 0;
        }

        .promo-section .input-icon {
            position: relative;
        }

        .promo-section input[type="text"] {
            padding-left: 2.5rem;
        }

        @media (max-width: 767.98px) {
            .promo-section .row {
                gap: 0.75rem;
            }

            .promo-section .col-md-8 {
                flex: 0 0 100%;
                max-width: 100%;
                margin-bottom: 0.5rem;
            }

            .promo-section .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .promo-section .theme-btn {
                width: 100% !important;
                min-height: 45px;
            }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .promo-section .col-md-8 {
                flex: 0 0 65%;
                max-width: 65%;
            }

            .promo-section .col-md-4 {
                flex: 0 0 35%;
                max-width: 35%;
                padding-left: 0.75rem;
            }
        }

        /* Simple price calculation styling */
        .price-calculation-section {
            border: 1px solid #dee2e6;
        }

        .price-calculation-section h5 {
            color: #495057;
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 10px;
        }

        .price-item {
            font-size: 16px;
        }

        .price-item .fw-bold {
            color: #333;
        }

        .price-item .float-end {
            color: #007bff;
        }

        .price-item .float-end.fw-bold {
            color: #28a745;
            font-size: 18px;
        }

        .price-item .text-danger {
            color: #dc3545 !important;
        }

        /* Use Current Location button styling */
        #useCurrentLocationBtn {
            transition: opacity 0.3s ease;
        }

        #useCurrentLocationBtn:not([style*="opacity: 1"]) {
            cursor: not-allowed;
        }
    </style>
    <style>
        .dash-car-wrap {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: #fff;
            border: 3px solid #35c759;
            /* online default */
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 3px 10px rgba(0, 0, 0, .25);
            overflow: hidden;
        }

        .dash-car-wrap.busy {
            border-color: #ff3b30;
        }

        .dash-car-wrap.offline {
            border-color: #8e8e93;
        }

        .dash-car-wrap img {
            width: 65px;
            height: 65px;
            object-fit: contain;
            display: block;
        }
    </style>
@endpush

@push('map-script')
    <script>
        const PRICE_API_BASE_URL = "{{ config('services.api.base_url') }}";
        const API_BEARER_TOKEN = localStorage.getItem('auth_token') || '';
        const DRIVER_ICON_URL = "{{ asset('assets/images/driver-truck.png') }}";
        let latestDistanceKm = 0;
        let currentOriginalPrice = 0;
        let currentDiscountValue = 0;
        let currentPromotionData = null;

        let locationPermissionGranted = false;

        let pickupLat = null,
            pickupLng = null;
        let dropLat = null,
            dropLng = null;
        let mapReady = false;

        let pickupAutocomplete, dropAutocomplete;
        let map, pickupMarker, dropMarker, directionsRenderer, directionsService;
        let routePolyline = null;
        let latestRoutePolyline = null;
        /* ------------------ Helpers ------------------ */
        function getAuthToken() {
            const localStorageToken = localStorage.getItem('auth_token');
            if (localStorageToken && localStorageToken !== '') return localStorageToken;
            if (API_BEARER_TOKEN && API_BEARER_TOKEN !== '') return API_BEARER_TOKEN;

            const tokenMeta = document.querySelector('meta[name="api-token"]');
            if (tokenMeta) return tokenMeta.getAttribute('content');

            if (typeof window.userApiToken !== 'undefined') return window.userApiToken;
            return '';
        }

        function parseAedAmount(value) {
            if (value === null || value === undefined) return 0;
            const cleaned = String(value)
                .replace(/AED/gi, '')
                .replace(/,/g, '')
                .trim();
            const amount = parseFloat(cleaned);
            return Number.isFinite(amount) ? amount : 0;
        }

        function isLocationInUAE(lat, lng) {
            const uaeMinLat = 22.4969,
                uaeMaxLat = 26.0555;
            const uaeMinLng = 51.5795,
                uaeMaxLng = 56.3967;
            return (lat >= uaeMinLat && lat <= uaeMaxLat && lng >= uaeMinLng && lng <= uaeMaxLng);
        }

        function showToast(message, type = 'success') {
            if (message.includes('Thank you for choosing Toretto Recovery Services') || message.includes(
                    'Booking created successfully!')) {
                showBookingSuccessPopup();
                return;
            }
            let swalIcon = type === 'error' ? 'error' : type === 'warning' ? 'warning' : type === 'info' ? 'info' :
                'success';
            let color = type === 'error' ? '#dc3545' : type === 'warning' ? '#ffc107' : type === 'info' ? '#17a2b8' :
                '#28a745';

            Swal.fire({
                toast: true,
                icon: swalIcon,
                title: type === 'error' ? 'Booking Error' : 'Status',
                text: message,
                position: 'top-end',
                timer: 5000,
                timerProgressBar: true,
                showConfirmButton: false,
                background: '#fff',
                color: color,
                width: '400px',
                padding: '20px',
            });
        }

        function parseKmFromDistanceText(text) {
            // "46.8 km" -> 46.8
            if (!text) return 0;
            const num = parseFloat(String(text).replace(/[^\d.]/g, ''));
            return Number.isFinite(num) ? num : 0;
        }

        /* ------------------ Google Maps Loader ------------------ */
        function checkLocationPermission() {
            if ('permissions' in navigator) {
                navigator.permissions.query({
                    name: 'geolocation'
                }).then(function(result) {
                    if (result.state === 'granted') {
                        locationPermissionGranted = true;
                    } else if (result.state === 'prompt') {
                        const modalElement = document.getElementById('locationPermissionModal');
                        if (modalElement) {
                            const modal = new bootstrap.Modal(modalElement);
                            modal.show();
                            document.getElementById('allowLocationBtn').addEventListener('click', function() {
                                modal.hide();
                                getUserLiveLocation();
                            });
                        }
                    }
                });
            } else {
                locationPermissionGranted = true;
            }
        }

        function loadGoogleMapsScript() {
            if (window.google && window.google.maps) {
                initMapAndAutocomplete();
                return;
            }

            const script = document.createElement('script');
            script.src =
                `https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.key') }}&libraries=places,directions,distance_matrix&callback=initMapAndAutocomplete`;
            script.async = true;
            script.defer = true;
            document.head.appendChild(script);
        }

        window.initMapAndAutocomplete = function() {
            initMap();
            initAutocomplete();

            if (locationPermissionGranted) {
                setTimeout(getUserLiveLocation, 500);
            }

            setTimeout(() => {
                const btn = document.getElementById('useCurrentLocationBtn');
                if (btn) {
                    btn.style.opacity = '1';
                    btn.style.pointerEvents = 'auto';
                }
            }, 800);
        }

        function initMap() {
            const defaultLat = 25.2048; // Dubai
            const defaultLng = 55.2708; // Dubai

            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: defaultLat,
                    lng: defaultLng
                },
                zoom: 11,
                mapId: "DEMO_MAP_ID",
                mapTypeControl: true,
                streetViewControl: false,
                fullscreenControl: true,
                styles: [{
                    featureType: "poi",
                    elementType: "labels",
                    stylers: [{
                        visibility: "off"
                    }]
                }]
            });

            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer({
                map: map,
                suppressMarkers: true,
                polylineOptions: {
                    strokeColor: 'black',
                    strokeWeight: 4
                }
            });

            mapReady = true;

            restorePendingBooking();
            startDashAutoDrivers();
        }

        function initAutocomplete() {
            const uaeBounds = new google.maps.LatLngBounds(
                new google.maps.LatLng(22.4969, 51.5795),
                new google.maps.LatLng(26.0555, 56.3967)
            );

            const autocompleteOptions = {
                // IMPORTANT: establishments strict sometimes blocks. Better:
                types: ['establishment'],
                bounds: uaeBounds,
                strictBounds: true,
                componentRestrictions: {
                    country: ['AE']
                }
            };

            const pickupElement = document.getElementById('pickup_location');
            const dropElement = document.getElementById('drop_location');

            if (pickupElement) {
                pickupAutocomplete = new google.maps.places.Autocomplete(pickupElement, autocompleteOptions);
                pickupAutocomplete.addListener('place_changed', onPickupChanged);
            }

            if (dropElement) {
                dropAutocomplete = new google.maps.places.Autocomplete(dropElement, autocompleteOptions);
                dropAutocomplete.addListener('place_changed', onDropChanged);
            }
        }

        function onPickupChanged() {
            const place = pickupAutocomplete.getPlace();
            if (!place.geometry) {
                showToast('Please select a valid location within the UAE.', 'error');
                document.getElementById('pickup_location').value = '';
                pickupLat = pickupLng = null;
                if (pickupMarker) {
                    pickupMarker.setMap(null);
                    pickupMarker = null;
                }
                return;
            }

            const lat = place.geometry.location.lat();
            const lng = place.geometry.location.lng();

            if (!isLocationInUAE(lat, lng)) {
                showToast('Please select a valid location within the UAE.', 'error');
                document.getElementById('pickup_location').value = '';
                return;
            }

            pickupLat = lat;
            pickupLng = lng;

            if (pickupMarker) pickupMarker.setMap(null);
            pickupMarker = new google.maps.Marker({
                position: {
                    lat,
                    lng
                },
                map,
                title: 'Pickup',
                icon: {
                    url: "{{ asset('assets/images/pin.png') }}",
                    scaledSize: new google.maps.Size(30, 30)
                }
            });

            const pickupElement = document.getElementById('pickup_location');
            pickupElement.value = place.formatted_address || place.name || '';

            new google.maps.InfoWindow({
                content: `<div style="max-width:200px;font-size:13px;"><strong>Pickup:</strong><br>${pickupElement.value}</div>`
            }).open(map, pickupMarker);

            map.panTo({
                lat,
                lng
            });
            map.setZoom(15);

            if (dropMarker) setTimeout(drawRoute, 200);
        }

        function onDropChanged() {
            const place = dropAutocomplete.getPlace();
            if (!place.geometry) {
                showToast('Please select a valid location within the UAE.', 'error');
                document.getElementById('drop_location').value = '';
                dropLat = dropLng = null;
                if (dropMarker) {
                    dropMarker.setMap(null);
                    dropMarker = null;
                }
                return;
            }

            const lat = place.geometry.location.lat();
            const lng = place.geometry.location.lng();

            if (!isLocationInUAE(lat, lng)) {
                showToast('Please select a valid location within the UAE.', 'error');
                document.getElementById('drop_location').value = '';
                return;
            }

            dropLat = lat;
            dropLng = lng;

            if (dropMarker) dropMarker.setMap(null);
            dropMarker = new google.maps.Marker({
                position: {
                    lat,
                    lng
                },
                map,
                title: 'Drop',
                icon: {
                    url: "{{ asset('assets/images/pin.png') }}",
                    scaledSize: new google.maps.Size(30, 30)
                }
            });

            const dropElement = document.getElementById('drop_location');
            dropElement.value = place.formatted_address || place.name || '';

            new google.maps.InfoWindow({
                content: `<div style="max-width:200px;font-size:13px;"><strong>Drop:</strong><br>${dropElement.value}</div>`
            }).open(map, dropMarker);

            map.panTo({
                lat,
                lng
            });
            map.setZoom(15);

            if (pickupMarker) setTimeout(drawRoute, 200);
        }

        /* ------------------ Route + Distance + Price ------------------ */
        function drawRoute() {
            console.log("called");

            if (!pickupMarker || !dropMarker || !map) {
                console.log("stopped: pickupMarker/dropMarker/map missing", {
                    pickupMarker,
                    dropMarker,
                    map
                });
                return;
            }

            const pickupPos = pickupMarker.getPosition();
            const dropPos = dropMarker.getPosition();

            if (!pickupPos || !dropPos) {
                console.log("stopped: pickupPos/dropPos missing", {
                    pickupPos,
                    dropPos
                });
                return;
            }

            const origin = pickupPos.lat() + "," + pickupPos.lng();
            const destination = dropPos.lat() + "," + dropPos.lng();

            console.log("origin:", origin);
            console.log("destination:", destination);

            callDistanceApi(origin, destination);
        }

        async function calculateFinalPrice(kms, token, minutes) {
            try {

                const responsePrice = await fetch(`${PRICE_API_BASE_URL}/v1/customer/price/calculate`, {
                    method: 'POST',
                    headers: {
                        'Authorization': 'Bearer ' + token,
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        km: kms,
                        latitude: pickupLat,
                        longitude: pickupLng,
                        drop_latitude: dropLat,
                        drop_longitude: dropLng,
                        minutes: minutes
                    })
                });

                const priceData = await responsePrice.json();

                const price = priceData?.data?.price ?? 0;

                currentOriginalPrice = price || 0;
                updateGrandTotal();

                document.getElementById('totalPriceDisplay').innerText = currentOriginalPrice + ' AED';
                document.getElementById('price').innerText = currentOriginalPrice + ' AED';
                console.log(currentOriginalPrice, 'price');
                const platform_fee_amount = document.getElementById("platform_fee_amount");
                const tax_amount = document.getElementById("tax_amount");

                const platformFee = parseAedAmount(platform_fee_amount?.innerText || platform_fee_amount?.textContent || '');
                const taxAmount = parseAedAmount(tax_amount?.innerText || tax_amount?.textContent || '');
                const TotalAmount = platformFee + taxAmount + currentOriginalPrice;

                const grandTotalDisplay = document.getElementById('grandTotalDisplay');
                if (grandTotalDisplay) {
                    grandTotalDisplay.innerText = TotalAmount + ' AED';
                }

                // Keep promo behavior intact if already applied.
                if (currentPromotionData) {
                    updateGrandTotal();
                }

            } catch (error) {
                console.error("failed:", error);
            }
        }

        async function callDistanceApi(origin, destination) {
            try {
                const token = getAuthToken();

                const responseDistance = await fetch(
                    `${PRICE_API_BASE_URL}/v1/customer/distance?origin=${encodeURIComponent(origin)}&destination=${encodeURIComponent(destination)}&traffic_model=best_guess`
                );

                const data = await responseDistance.json();
                console.log('Distance API full response:', data);

                if (!responseDistance.ok) {
                    showToast(data?.message || "Distance API request failed.", "error");
                    return;
                }

                const result = data?.data;

                if (!data?.status || !result || !result.distance?.text) {
                    console.log('Invalid result:', result);
                    showToast("Unable to calculate route. Try different locations.", "error");
                    return;
                }

                latestRoutePolyline = result.polyline || null;

                const kmText = result.distance?.text || '';
                const minutes = result.duration_in_traffic?.text || result.duration?.text || '';

                let kmsNumber = null;

                if (kmText) {
                    if (kmText.toLowerCase().includes('km')) {
                        kmsNumber = parseFloat(
                            kmText.toLowerCase().replace('km', '').replace(/,/g, '').trim()
                        );
                    } else if (kmText.toLowerCase().includes('m')) {
                        kmsNumber = parseFloat(
                            kmText.toLowerCase().replace('m', '').replace(/,/g, '').trim()
                        ) / 1000;
                    }
                }

                latestDistanceKm = Number.isFinite(kmsNumber) ? kmsNumber : 0;

                console.log('kmText:', kmText);
                console.log('latestDistanceKm:', latestDistanceKm);

                if (latestDistanceKm <= 0) {
                    showToast("Unable to calculate route. Distance not found.", "error");
                    return;
                }

                document.getElementById("distance").innerText = kmText || 'N/A';
                document.getElementById("minutes").innerText = minutes || 'N/A';

                if (routePolyline) {
                    routePolyline.setMap(null);
                    routePolyline = null;
                }

                if (result.polyline && map && google?.maps?.geometry?.encoding) {
                    const path = google.maps.geometry.encoding.decodePath(result.polyline);

                    routePolyline = new google.maps.Polyline({
                        path: path,
                        geodesic: true,
                        strokeColor: "#000000",
                        strokeOpacity: 1,
                        strokeWeight: 4,
                        map: map
                    });

                    const bounds = new google.maps.LatLngBounds();
                    path.forEach(point => bounds.extend(point));
                    map.fitBounds(bounds);
                } else {
                    console.log("Polyline not drawn", {
                        hasPolyline: !!result.polyline,
                        hasMap: !!map,
                        hasGeometry: !!google?.maps?.geometry?.encoding
                    });
                }

                if (token) {
                    await calculateFinalPrice(latestDistanceKm, token, minutes);
                } else {
                    console.log("Skipping price calculation: token missing");
                }

            } catch (e) {
                console.error("Distance API call failed:", e);
                showToast("Something went wrong while calculating route.", "error");
            }
        }

        /* ------------------ Pending Booking Restore (LOGIN FLOW) ------------------ */
        function restorePendingBooking() {

            const token = getAuthToken();
            const pendingBooking = localStorage.getItem('pending_booking');
            if (!token || !pendingBooking || !mapReady) {
                return;
            }

            const data = JSON.parse(pendingBooking);

            if (!data.pickup_lat || !data.pickup_lng || !data.drop_lat || !data.drop_lng) {
                localStorage.removeItem('pending_booking');
                return;
            }

            setPickupManually(
                parseFloat(data.pickup_lat),
                parseFloat(data.pickup_lng),
                data.pickup_location
            );

            setDropManually(
                parseFloat(data.drop_lat),
                parseFloat(data.drop_lng),
                data.drop_location
            );

            setTimeout(() => {
                drawRoute();
            }, 400);

            localStorage.removeItem('pending_booking');
        }

        function setPickupManually(lat, lng, address) {
            pickupLat = lat;
            pickupLng = lng;

            if (pickupMarker) pickupMarker.setMap(null);

            const position = new google.maps.LatLng(lat, lng);
            pickupMarker = new google.maps.Marker({
                position,
                map,
                title: 'Pickup',
                icon: {
                    url: "{{ asset('assets/images/pin.png') }}",
                    scaledSize: new google.maps.Size(30, 30)
                }
            });

            new google.maps.InfoWindow({
                content: `<div style="max-width:200px;font-size:13px;"><strong>Pickup:</strong><br>${address}</div>`
            }).open(map, pickupMarker);

            document.getElementById('pickup_location').value = address || '';

            map.panTo(position);
            map.setZoom(15);
        }

        function setDropManually(lat, lng, address) {
            dropLat = lat;
            dropLng = lng;

            if (dropMarker) dropMarker.setMap(null);

            const position = new google.maps.LatLng(lat, lng);
            dropMarker = new google.maps.Marker({
                position,
                map,
                title: 'Drop',
                icon: {
                    url: "{{ asset('assets/images/pin.png') }}",
                    scaledSize: new google.maps.Size(30, 30)
                }
            });

            new google.maps.InfoWindow({
                content: `<div style="max-width:200px;font-size:13px;"><strong>Drop:</strong><br>${address}</div>`
            }).open(map, dropMarker);

            document.getElementById('drop_location').value = address || '';

            if (pickupMarker) {
                const bounds = new google.maps.LatLngBounds();
                bounds.extend(pickupMarker.getPosition());
                bounds.extend(position);
                map.fitBounds(bounds);
            } else {
                map.panTo(position);
                map.setZoom(15);
            }
        }

        /* ------------------ Current Location ------------------ */
        function getUserLiveLocation() {
            if (!navigator.geolocation) {
                showToast("Geolocation not supported.", "error");
                return;
            }

            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const lat = position.coords.latitude;
                    const lng = position.coords.longitude;

                    if (!map) {
                        showToast("Map is loading. Try again.", "info");
                        return;
                    }

                    if (!isLocationInUAE(lat, lng)) {
                        showToast("Your current location is outside UAE.", "warning");
                        return;
                    }

                    setPickupFromLatLng(lat, lng);
                },
                () => showToast("Unable to fetch location.", "error"), {
                    enableHighAccuracy: true,
                    timeout: 15000,
                    maximumAge: 60000
                }
            );
        }

        function setPickupFromLatLng(lat, lng) {
            const geocoder = new google.maps.Geocoder();
            geocoder.geocode({
                location: {
                    lat,
                    lng
                }
            }, (results, status) => {
                if (status === "OK" && results && results.length > 0) {
                    const address = results[0].formatted_address;
                    setPickupManually(lat, lng, address);
                    showToast("Pickup set to current location", "success");
                    if (dropMarker) setTimeout(drawRoute, 300);
                } else {
                    showToast("Unable to detect address.", "error");
                }
            });
        }

        function showBookingSuccessPopup() {
            Swal.fire({
                title: '<strong style="font-size: 24px;">Thank You!</strong>',
                html: `
                <style>
                    .finding-wrap{
                        display:flex;
                        justify-content:center;
                        margin: 8px 0 18px 0;
                    }
                    .finding{
                        width: 120px;
                        height: 120px;
                        position: relative;
                    }
                    /* Pulsing ring */
                    .pulse-ring{
                        position:absolute;
                        inset: 18px;
                        border-radius: 50%;
                        border: 2px solid rgba(220,53,69,.35);
                        animation: ringPulse 1.4s ease-out infinite;
                    }
                    .pulse-ring:nth-child(2){
                        inset: 28px;
                        animation-delay: .3s;
                        opacity:.8;
                    }
                    @keyframes ringPulse{
                        0%{ transform: scale(.75); opacity:.8; }
                        70%{ transform: scale(1.15); opacity:.15; }
                        100%{ transform: scale(1.2); opacity:0; }
                    }

                    /* Center pin */
                    .pin{
                        position:absolute;
                        left:50%;
                        top:50%;
                        transform: translate(-50%,-58%);
                        width: 26px;
                        height: 26px;
                        background:#dc3545;
                        border-radius: 50% 50% 50% 0;
                        transform: translate(-50%,-58%) rotate(-45deg);
                        box-shadow: 0 10px 20px rgba(220,53,69,.25);
                    }
                    .pin::after{
                        content:'';
                        position:absolute;
                        width:10px;height:10px;
                        background:#fff;
                        border-radius:50%;
                        left:50%;top:50%;
                        transform: translate(-50%,-50%);
                    }

                    /* Orbit path + moving car */
                    .orbit{
                        position:absolute;
                        inset: 6px;
                        border-radius: 50%;
                        border: 2px dashed rgba(0,0,0,.10);
                    }
                    .car-orbit{
                        position:absolute;
                        inset: 6px;
                        border-radius:50%;
                        animation: spin 1.2s linear infinite;
                    }
                    @keyframes spin{
                        from { transform: rotate(0deg); }
                        to { transform: rotate(360deg); }
                    }

                    .car{
                        position:absolute;
                        top: -6px;
                        left: 50%;
                        transform: translateX(-50%);
                        width: 34px;
                        height: 20px;
                        filter: drop-shadow(0 4px 10px rgba(0,0,0,.12));
                    }
                    /* small “signal” dots */
                    .signal{
                        position:absolute;
                        left:50%;
                        top:14px;
                        transform: translateX(-50%);
                        display:flex;
                        gap:6px;
                        opacity:.75;
                    }
                    .signal span{
                        width:6px;height:6px;border-radius:50%;
                        background: rgba(220,53,69,.55);
                        animation: blink 1s ease-in-out infinite;
                    }
                    .signal span:nth-child(2){ animation-delay: .15s; }
                    .signal span:nth-child(3){ animation-delay: .3s; }
                    @keyframes blink{
                        0%, 100%{ transform: translateY(0); opacity:.25; }
                        50%{ transform: translateY(-4px); opacity:1; }
                    }

                    .finding-text{
                        margin-top: 6px;
                        font-size: 16px;
                        color:#666;
                        font-family:'Avenir', sans-serif;
                    }
                </style>

                <div style="text-align: center; max-width: 500px; margin: 0 auto; font-family: 'Avenir', sans-serif;">

                    <!--  Finding Driver Loader -->
                    <div class="finding-wrap">
                        <div class="finding">
                            <div class="pulse-ring"></div>
                            <div class="pulse-ring"></div>

                            <div class="orbit"></div>

                            <div class="car-orbit">
                                <!-- simple SVG car -->
                                <svg class="car" viewBox="0 0 64 36" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 22L20 10C21 8 23 7 25 7H43C45 7 47 8 48 10L54 22" fill="#111"/>
                                    <path d="M10 22H58C60 22 62 24 62 26V30C62 32 60 34 58 34H56" fill="#111"/>
                                    <path d="M8 30V26C8 24 10 22 12 22H14" fill="#111"/>
                                    <path d="M24 10H40" stroke="#fff" stroke-width="2" stroke-linecap="round" opacity=".85"/>
                                    <circle cx="20" cy="34" r="4" fill="#dc3545"/>
                                    <circle cx="50" cy="34" r="4" fill="#dc3545"/>
                                </svg>
                            </div>

                            <div class="pin"></div>

                            <div class="signal">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                    </div>
                    <div class="finding-text"><b>Finding nearest driver…<b></div>

                    <p style="font-size: 16px; margin-bottom: 15px;">
                        Thank you for choosing Toretto Recovery Services.
                    </p>
                    <p style="font-size: 16px; margin-bottom: 15px;">
                        Your nearest recovery driver is currently being assigned.
                    </p>
                    <p style="font-size: 16px; margin-bottom: 15px;">
                        To receive real-time updates, driver contact details, and live tracking, please continue using our mobile application.
                    </p>

                    <p style="font-size: 16px; margin-bottom: 20px; font-weight: bold;">
                        Track your recovery vehicle in real time
                    </p>

                    <div style="margin-bottom: 25px;">
                        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                            <a href="#" target="_blank" style="display: inline-block;">
                                <img src="{{ asset('assets/images/google-play.png') }}" alt="Google Play" style="height: 50px; width: auto;">
                            </a>
                            <a href="#" target="_blank" style="display: inline-block;">
                                <img src="{{ asset('assets/images/app-store.png') }}" alt="App Store" style="height: 50px; width: auto;">
                            </a>
                        </div>
                    </div>

                    <p style="font-size: 14px; margin-top: 20px; color: #666; text-align: center;">
                        <em>Note: Service updates and driver communication are available only in the mobile app.</em>
                    </p>
                </div>`,
                showConfirmButton: false,
                showCloseButton: true,
                width: '600px',
                padding: '30px',
                willClose: () => {
                    // Clear the form instead of reloading the page
                    document.getElementById('bookingForm').reset();

                    // Reset all displays
                    document.getElementById('distance').innerText = '0.00 km';
                    document.getElementById('price').innerText = '0.00 AED';
                    document.getElementById('minutes').innerText = '0.00 mins';
                    document.getElementById('totalPriceDisplay').innerText = '0.00 AED';
                    document.getElementById('grandTotalDisplay').innerText = '0.00 AED';

                    // Hide discount section
                    const discountRow = document.getElementById('discountRow');
                    if (discountRow) {
                        discountRow.classList.add('d-none');
                    }

                    // Reset promo code button
                    const applyPromoBtn = document.getElementById('applyPromoBtn');
                    if (applyPromoBtn) {
                        applyPromoBtn.dataset.applied = 'false';

                        const promoBtnText = applyPromoBtn.querySelector('.btn-text');
                        if (promoBtnText) {
                            promoBtnText.textContent = 'Apply';
                        }
                    }

                    // Clear promo code input
                    const promoInput = document.getElementById('promo_code');
                    if (promoInput) {
                        promoInput.value = '';
                        delete promoInput.dataset.promotionId;
                    }

                    // Clear map markers
                    if (pickupMarker) {
                        pickupMarker.setMap(null);
                        pickupMarker = null;
                    }

                    if (dropMarker) {
                        dropMarker.setMap(null);
                        dropMarker = null;
                    }

                    // Clear custom route polyline
                    if (routePolyline) {
                        routePolyline.setMap(null);
                        routePolyline = null;
                    }

                    // Clear directions
                    if (directionsRenderer) {
                        directionsRenderer.setDirections({
                            routes: []
                        });
                    }

                    // Reset lat lng values
                    pickupLat = null;
                    pickupLng = null;
                    dropLat = null;
                    dropLng = null;

                    // Reset route values
                    latestDistanceKm = 0;
                    latestRoutePolyline = null;
                    currentOriginalPrice = 0;
                    currentDiscountValue = 0;
                    currentPromotionData = null;

                    // Reset map position
                    if (map) {
                        map.setCenter({
                            lat: 25.2048,
                            lng: 55.2708
                        });
                        map.setZoom(11);
                    }
                },
                customClass: {
                    popup: 'booking-success-popup',
                    title: 'booking-success-title',
                    content: 'booking-success-content'
                },
                willOpen: () => {
                    setTimeout(() => {
                        const openAppBtn = document.getElementById('openAppBtn');

                        if (openAppBtn) {
                            openAppBtn.addEventListener('click', () => {
                                window.location.href = "{{ route('home') }}";
                                Swal.close();
                            });
                        }
                    }, 100);
                }
            });
        }
        /* ------------------ DOM Ready ------------------ */
        document.addEventListener('DOMContentLoaded', function() {
            checkLocationPermission();
            loadGoogleMapsScript();

            // Use current location
            const useCurrentLocationBtn = document.getElementById('useCurrentLocationBtn');
            if (useCurrentLocationBtn) {
                useCurrentLocationBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    if (!map) return showToast('Map is still loading...', 'info');
                    getUserLiveLocation();
                });
            }

            // Calculate Price button
            const calculatePriceBtn = document.getElementById('calculatePriceBtn');
            if (calculatePriceBtn) {
                calculatePriceBtn.addEventListener('click', async function(e) {
                    e.preventDefault();

                    const pickupElement = document.getElementById('pickup_location');
                    const dropElement = document.getElementById('drop_location');

                    if (!pickupElement.value || !dropElement.value) {
                        showToast('Please enter both pickup and drop locations', 'error');
                        return;
                    }

                    if (!pickupMarker || !dropMarker) {
                        showToast('Please select pickup and drop from suggestions.', 'error');
                        return;
                    }

                    const origin = pickupMarker.getPosition().lat() + "," + pickupMarker.getPosition()
                        .lng();
                    const destination = dropMarker.getPosition().lat() + "," + dropMarker.getPosition()
                        .lng();

                    await callDistanceApi(origin, destination);

                    const token = getAuthToken();
                    if (!token) {
                        localStorage.setItem('pending_booking', JSON.stringify({
                            pickup_location: pickupElement.value,
                            drop_location: dropElement.value,
                            pickup_lat: pickupMarker.getPosition().lat(),
                            pickup_lng: pickupMarker.getPosition().lng(),
                            drop_lat: dropMarker.getPosition().lat(),
                            drop_lng: dropMarker.getPosition().lng(),
                            timestamp: Date.now()
                        }));

                        window.location.href = "{{ route('login') }}?x=1";
                        return;
                    }
                });
            }

            // Booking Submit
            document.getElementById('bookingForm').addEventListener('submit', async function(e) {
                e.preventDefault();

                const pickupElement = document.getElementById('pickup_location');
                const dropElement = document.getElementById('drop_location');
                const promoElement = document.getElementById('promo_code');

                if (!pickupElement.value || !dropElement.value) {
                    showToast('Please enter both pickup and drop locations', 'error');
                    return;
                }

                if (!pickupMarker || !dropMarker) {
                    showToast('Please select valid pickup and drop locations on the map.', 'error');
                    return;
                }

                const distanceText = document.getElementById('distance')?.innerText || '';
                const distanceValue = parseKmFromDistanceText(distanceText);
                if (distanceValue <= 0) {
                    showToast('Distance could not be calculated. Please click Calculate Price first.',
                        'error');
                    return;
                }

                const token = getAuthToken();
                if (!token) {
                    localStorage.setItem('pending_booking', JSON.stringify({
                        pickup_location: pickupElement.value,
                        drop_location: dropElement.value,
                        pickup_lat: pickupMarker.getPosition().lat(),
                        pickup_lng: pickupMarker.getPosition().lng(),
                        drop_lat: dropMarker.getPosition().lat(),
                        drop_lng: dropMarker.getPosition().lng(),
                        timestamp: Date.now()
                    }));
                    window.location.href = "{{ route('login') }}";
                    return;
                }

                const pickupLatLng = pickupMarker.getPosition();
                const dropLatLng = dropMarker.getPosition();

                let promotionId = null;
                if (promoElement && promoElement.dataset.promotionId) {
                    promotionId = promoElement.dataset.promotionId;
                }

                // DOM values
                const totalPrice = document.getElementById("grandTotalDisplay")?.innerText || "";
                const etaMinutes = document.getElementById("minutes")?.innerText || "";
                const basePrice = document.getElementById("price")?.innerText || "";
                const discountAmountDisplay = document.getElementById("discountAmountDisplay")
                    ?.innerText || "";
                const platform_fee_amount = document.getElementById("platform_fee_amount");
                const tax_amount = document.getElementById("tax_amount");

                // remove text like "AED" or "mins"
                const cleanTotalPrice = parseAedAmount(totalPrice);
                const cleanBasePrice = parseAedAmount(basePrice);
                const discountPrice = parseAedAmount(discountAmountDisplay);
                const cleanMinutes = convertToMinutes(etaMinutes);
                const platformFee = parseAedAmount(platform_fee_amount?.innerText || platform_fee_amount?.textContent || '');
                const taxAmount = parseAedAmount(tax_amount?.innerText || tax_amount?.textContent || '');

                const bookingPayload = {
                    service_type_id: 1,
                    pickup_address: pickupElement.value,
                    pickup_lat: pickupLatLng.lat(),
                    pickup_lng: pickupLatLng.lng(),
                    dropoff_address: dropElement.value,
                    dropoff_lat: dropLatLng.lat(),
                    dropoff_lng: dropLatLng.lng(),
                    distance_km: distanceValue,
                    platform_fee: platformFee,
                    tax: taxAmount,
                    // extra values
                    total_price: cleanTotalPrice,
                    price: cleanBasePrice,
                    eta_minutes: cleanMinutes,
                    discountPrice: discountPrice,
                    polyline: latestRoutePolyline
                };

                console.log("Booking Payload:", bookingPayload);

                if (promotionId) bookingPayload.promotion_id = promotionId;

                try {
                    const resp = await window.ApiUtils.fetch(
                        `${PRICE_API_BASE_URL}/v1/customer/bookings`, {
                            method: 'POST',
                            headers: {
                                'Authorization': 'Bearer ' + token
                            },
                            body: JSON.stringify(bookingPayload)
                        });

                    const resData = await resp.json();
                    if (!resp.ok || resData.status !== true) {
                        showToast(resData.message || 'Please try again.', 'error');
                        return;
                    }

                    showToast('Booking created successfully!', 'success');
                    showBookingSuccessPopup();
                    return;
                } catch (err) {
                    showToast('Please try again.', 'error');
                }
            });
        });

        function convertToMinutes(timeText) {
            if (!timeText) return 0;

            let hours = 0;
            let minutes = 0;

            const hourMatch = timeText.match(/(\d+)\s*h/i);
            const minMatch = timeText.match(/(\d+)\s*m/i);

            if (hourMatch) {
                hours = parseInt(hourMatch[1]);
            }

            if (minMatch) {
                minutes = parseInt(minMatch[1]);
            }

            return (hours * 60) + minutes;
        }

        function setPromoButtonUI(isApplied) {
            const btn = document.getElementById('applyPromoBtn');
            const promoInput = document.getElementById('promo_code');
            if (!btn) return;

            btn.dataset.applied = isApplied ? 'true' : 'false';

            const txt = btn.querySelector('.btn-text');
            if (txt) txt.textContent = isApplied ? 'Remove' : 'Apply';

            if (!isApplied && promoInput) {
                promoInput.value = '';
                delete promoInput.dataset.promotionId;
            }
        }

        // Globals (ensure these exist)
        function setPromoButtonUI(isApplied) {
            const btn = document.getElementById('applyPromoBtn');
            const promoInput = document.getElementById('promo_code');
            if (!btn) return;

            btn.dataset.applied = isApplied ? 'true' : 'false';

            const txt = btn.querySelector('.btn-text');
            if (txt) txt.textContent = isApplied ? 'Remove' : 'Apply';

            if (!isApplied && promoInput) {
                promoInput.value = '';
                delete promoInput.dataset.promotionId;
            }
        }

        function setPromoLoading(isLoading) {
            const btn = document.getElementById('applyPromoBtn');
            if (!btn) return;

            const txt = btn.querySelector('.btn-text');
            const loader = btn.querySelector('.btn-loader-promo');

            if (isLoading) {
                if (txt) txt.classList.add('d-none');
                if (loader) loader.classList.remove('d-none');
                btn.disabled = true;
            } else {
                if (txt) txt.classList.remove('d-none');
                if (loader) loader.classList.add('d-none');
                btn.disabled = false;
            }
        }

        function removePromoCode() {
            const promoInput = document.getElementById('promo_code');
            if (promoInput) delete promoInput.dataset.promotionId;

            currentPromotionData = null;
            currentDiscountValue = 0;

            if (typeof updateGrandTotal === 'function') updateGrandTotal();

            setPromoButtonUI(false);
            showToast('Promo code removed successfully!', 'success');
        }

        async function applyPromoCode(promoCode) {
            const token = getAuthToken();
            if (!token) {
                showToast('Please log in to apply promo codes.', 'error');
                return;
            }

            setPromoLoading(true);

            try {
                const promoResp = await window.fetch(`${PRICE_API_BASE_URL}/v1/customer/promocodes/verify`, {
                    method: 'POST',
                    headers: {
                        'Authorization': 'Bearer ' + token,
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        code: promoCode,
                    })
                });

                const raw = await promoResp.text();
                let promoData = {};
                try {
                    promoData = JSON.parse(raw);
                } catch (e) {
                    promoData = {
                        raw
                    };
                }

                console.log('promoResp status:', promoResp.status);
                console.log('promoResp raw:', raw);

                if (!promoResp.ok) {
                    showToast(promoData.message || `Promo API error (${promoResp.status})`, 'error');
                    return;
                }

                if (promoData.status !== true) {
                    showToast(promoData.message || 'Invalid promo code.', 'error');
                    return;
                }

                // Save promo info
                currentPromotionData = promoData.data || null;
                currentDiscountValue = promoData?.data?.discount_value || 0;

                const promoInput = document.getElementById('promo_code');
                if (promoInput && promoData?.data?.id) {
                    promoInput.dataset.promotionId = promoData.data.id;
                }

                if (typeof updateGrandTotal === 'function') updateGrandTotal();

                setPromoButtonUI(true);
                showToast('Promo code applied successfully!', 'success');

            } catch (err) {
                console.error('Promo verify error:', err);
                showToast(err?.message || 'Network error while verifying promo code.', 'error');
            } finally {
                setPromoLoading(false);
            }
        }

        // Click handler (event delegation) — always works
        document.addEventListener('click', function(e) {
            const btn = e.target.closest('#applyPromoBtn');
            if (!btn) return;

            e.preventDefault();
            e.stopPropagation();

            const promoInput = document.getElementById('promo_code');
            const promoCode = (promoInput?.value || '').trim();
            const isApplied = btn.dataset.applied === 'true';

            if (isApplied) {
                removePromoCode();
                return;
            }

            if (!promoCode) {
                showToast('Please enter a promo code.', 'error');
                return;
            }

            applyPromoCode(promoCode);
        }, true);

        function updateGrandTotal() {
            const totalPriceEl = document.getElementById('totalPriceDisplay');
            const grandTotalEl = document.getElementById('grandTotalDisplay');
            const discountRow = document.getElementById('discountRow');
            const discountAmountEl = document.getElementById('discountAmountDisplay');
            const platform_fee_amount = document.getElementById("platform_fee_amount");
            const tax_amount = document.getElementById("tax_amount");

            if (!grandTotalEl) return;

            // Total (original)
            const original = currentOriginalPrice || 0;

            if (totalPriceEl) totalPriceEl.innerText = original + ' AED';

            let finalPrice = original;
            let discountAmount = 0;

            // Promo present?
            if (currentPromotionData) {
                // detect discount type from different keys
                const dtypeRaw =
                    currentPromotionData.discount_type ??
                    currentPromotionData.type ??
                    currentPromotionData.discountType ??
                    '';

                const dtype = String(dtypeRaw).toLowerCase();

                // discount value parse
                const dval = parseAedAmount(currentDiscountValue ?? currentPromotionData.discount_value ?? currentPromotionData
                    .value ?? 0);

                if (dval > 0) {
                    if (dtype === 'percentage' || dtype === 'percent') {
                        discountAmount = (original * dval) / 100;
                    } else {
                        discountAmount = dval; // fixed
                    }

                    // discount cap (optional)
                    if (discountAmount > original) discountAmount = original;

                    finalPrice = original - discountAmount;
                    if (finalPrice < 0) finalPrice = 0;

                    if (discountRow) discountRow.classList.remove('d-none');

                    if (discountAmountEl) discountAmountEl.innerText = discountAmount + ' AED';
                } else {
                    if (discountRow) discountRow.classList.add('d-none');
                    if (discountAmountEl) discountAmountEl.innerText = '0 AED';
                }
            } else {
                if (discountRow) discountRow.classList.add('d-none');
                if (discountAmountEl) discountAmountEl.innerText = '0 AED';
            }
            const platformFee = parseAedAmount(platform_fee_amount?.innerText || platform_fee_amount?.textContent || '');
            const taxAmount = parseAedAmount(tax_amount?.innerText || tax_amount?.textContent || '');

            //  TOTAL after discount
            const TotalAmount = finalPrice + platformFee + taxAmount;
            grandTotalEl.innerText = TotalAmount + ' AED';
        }
        const DASH_MAP_DATA_PATH = "/v1/common/dashboard/map-data";
        const DASH_MAP_DATA_URL = `${PRICE_API_BASE_URL}${DASH_MAP_DATA_PATH}`;
        const DASH_CAR_ICON_URL = `{{ asset('assets/images/ic_truck1.png') }}`;
        const DASH_SOCKET_IO_CDN = "https://cdn.socket.io/4.7.5/socket.io.min.js";
        const DASH_DEBUG_PREFIX = "[Home Drivers Map]";

        const dashMapState = window.__homeDriversMapState || (window.__homeDriversMapState = {
            markers: {},
            driversById: {},
            socket: null,
            socketStarted: false,
        });

        let dashMarkers = dashMapState.markers; // shared marker store
        let dashDriversById = dashMapState.driversById; // shared drivers store
        let dashInfoWindow = null;
        let dashTimer = null;
        let dashStarted = false;
        let dashSocket = dashMapState.socket;
        let DashAdvancedMarkerElement = null;

        function logDashDebug(message, meta) {
            if (meta === undefined) {
                console.log(`${DASH_DEBUG_PREFIX} ${message}`);
                return;
            }
            console.log(`${DASH_DEBUG_PREFIX} ${message}`, meta);
        }

        function normalizeText(value) {
            if (value === null || value === undefined) return "";
            return String(value).trim();
        }

        function normalizeDriverId(driverLike) {
            const rawId = driverLike?.id ?? driverLike?.driver_id ?? driverLike?.driverId ?? driverLike?.user_id;
            if (rawId === null || rawId === undefined) return null;
            const idText = String(rawId).trim();
            return idText === "" ? null : idText;
        }

        function parseDriverLatLng(driverLike) {
            const rawLat = driverLike?.current_lat ?? driverLike?.lat ?? driverLike?.latitude;
            const rawLng = driverLike?.current_lng ?? driverLike?.lng ?? driverLike?.longitude;
            const lat = parseFloat(rawLat);
            const lng = parseFloat(rawLng);
            if (!Number.isFinite(lat) || !Number.isFinite(lng)) return null;
            return {
                lat,
                lng
            };
        }

        function parseOptionalBoolean(value) {
            if (value === null || value === undefined || value === "") return null;
            if (typeof value === "boolean") return value;
            if (typeof value === "number") return value === 1;

            const normalized = String(value).trim().toLowerCase();
            if (["1", "true", "yes", "online", "busy"].includes(normalized)) return true;
            if (["0", "false", "no", "offline", "idle"].includes(normalized)) return false;
            return null;
        }

        function preferIncomingOrExisting(existingValue, incomingValue, fallbackValue = "") {
            const incoming = normalizeText(incomingValue);
            if (incoming) return incoming;

            const existing = normalizeText(existingValue);
            if (existing) return existing;

            return fallbackValue;
        }

        function isFallbackDriverName(name) {
            const normalized = normalizeText(name);
            if (!normalized) return true;
            return /^driver(\s*#\s*[\w-]+)?$/i.test(normalized);
        }

        function preferDriverName(existingName, incomingName, driverId) {
            const incoming = normalizeText(incomingName);
            const existing = normalizeText(existingName);

            if (incoming) {
                const incomingFallback = isFallbackDriverName(incoming);
                const existingFallback = isFallbackDriverName(existing);

                if (!incomingFallback || !existing || existingFallback) {
                    return incoming;
                }
            }

            if (existing) return existing;
            return `Driver #${driverId}`;
        }

        function deriveSocketBaseUrl(apiBaseUrl) {
            const raw = normalizeText(apiBaseUrl);
            if (!raw) return "";

            try {
                const url = new URL(raw);
                const strippedPath = (url.pathname || "").replace(/\/api\/?$/i, "/");
                return `${url.protocol}//${url.host}${strippedPath}`.replace(/\/+$/, "");
            } catch (e) {
                return raw.replace(/\/api\/?$/i, "").replace(/\/+$/, "");
            }
        }

        function resolveDashSocketConfig() {
            const winCfg = window.DRIVERS_SOCKET_CONFIG || window.TORETTO_SOCKET_CONFIG || {};
            const metaSocketUrl = normalizeText(document.querySelector('meta[name="socket-url"]')?.getAttribute("content"));
            const metaForcePolling = normalizeText(document.querySelector('meta[name="socket-force-polling"]')?.getAttribute(
                "content"));

            const socketUrl = normalizeText(winCfg.url || winCfg.socket_url || winCfg.host || metaSocketUrl) ||
                deriveSocketBaseUrl(PRICE_API_BASE_URL);

            const socketPath = normalizeText(winCfg.path || winCfg.socket_path) || "/socket.io";
            const namespace = normalizeText(winCfg.namespace || winCfg.nsp);
            const room = normalizeText(winCfg.room || winCfg.room_name || winCfg.join_room || winCfg.channel);
            const joinEvent = normalizeText(winCfg.join_event || winCfg.joinEvent);
            const forcePollingRaw = winCfg.force_polling ?? winCfg.socket_force_polling ?? metaForcePolling;
            const forcePollingParsed = parseOptionalBoolean(forcePollingRaw);

            return {
                socketUrl: socketUrl.replace(/\/+$/, ""),
                socketPath,
                namespace,
                room,
                joinEvent,
                // Default true to avoid repeated websocket failures in environments
                // where the socket endpoint does not support wss upgrades.
                forcePolling: forcePollingParsed !== false
            };
        }

        function loadSocketScriptOnce(src) {
            return new Promise((resolve, reject) => {
                if (!src) {
                    reject(new Error("Socket client script URL is empty."));
                    return;
                }

                const existing = document.querySelector(`script[data-socket-src="${src}"]`);
                if (existing) {
                    if (window.io) {
                        resolve();
                        return;
                    }
                    existing.addEventListener("load", resolve, {
                        once: true
                    });
                    existing.addEventListener("error", reject, {
                        once: true
                    });
                    return;
                }

                const script = document.createElement("script");
                script.src = src;
                script.async = true;
                script.defer = true;
                script.dataset.socketSrc = src;
                script.onload = () => resolve();
                script.onerror = () => reject(new Error(`Failed to load script: ${src}`));
                document.head.appendChild(script);
            });
        }

        async function ensureSocketIoClient(socketBaseUrl) {
            if (typeof window.io === "function") return true;

            const sources = [];
            const normalizedBase = normalizeText(socketBaseUrl);
            if (normalizedBase) {
                sources.push(`${normalizedBase}/socket.io/socket.io.js`);
            }
            sources.push(DASH_SOCKET_IO_CDN);

            for (const src of sources) {
                try {
                    await loadSocketScriptOnce(src);
                    if (typeof window.io === "function") return true;
                } catch (err) {
                    console.warn(`${DASH_DEBUG_PREFIX} socket script load failed`, {
                        src,
                        error: err
                    });
                }
            }

            return false;
        }

        async function initDashMarkerLibrary() {
            try {
                if (!window.google || !google.maps || !google.maps.importLibrary) return false;
                const lib = await google.maps.importLibrary("marker");
                DashAdvancedMarkerElement = lib.AdvancedMarkerElement;
                return true;
            } catch (e) {
                console.error("initDashMarkerLibrary error:", e);
                return false;
            }
        }

        function normalizeSocketDriverPayload(payload) {
            if (!payload || typeof payload !== "object") return null;

            const dataNode = payload.data && typeof payload.data === "object" ? payload.data : null;
            const driverNode = payload.driver && typeof payload.driver === "object" ? payload.driver : null;
            const nestedDriver = dataNode?.driver && typeof dataNode.driver === "object" ? dataNode.driver : null;
            const base = {
                ...(dataNode || {}),
                ...(driverNode || {}),
                ...(nestedDriver || {}),
                ...payload,
            };

            return {
                id: base.id ?? base.driver_id ?? base.driverId ?? base.user_id,
                driver_id: base.driver_id ?? base.id ?? base.driverId ?? base.user_id,
                current_lat: base.current_lat ?? base.lat ?? base.latitude,
                current_lng: base.current_lng ?? base.lng ?? base.longitude,
                full_name: base.full_name ?? base.name,
                vehicle_number: base.vehicle_number,
                vehicle_type: base.vehicle_type,
                mobile: base.mobile ?? base.phone,
                is_online: base.is_online,
                has_active_job: base.has_active_job
            };
        }

        function applyIncomingDriverData(targetDriver, incomingDriver, driverId) {
            const latLng = parseDriverLatLng(incomingDriver);
            if (latLng) {
                targetDriver.current_lat = latLng.lat;
                targetDriver.current_lng = latLng.lng;
            }

            targetDriver.id = incomingDriver?.id ?? targetDriver.id ?? driverId;
            targetDriver.driver_id = incomingDriver?.driver_id ?? targetDriver.driver_id ?? driverId;

            targetDriver.full_name = preferDriverName(targetDriver.full_name, incomingDriver?.full_name, driverId);
            targetDriver.vehicle_number = preferIncomingOrExisting(targetDriver.vehicle_number, incomingDriver?.vehicle_number,
                "N/A");
            targetDriver.vehicle_type = preferIncomingOrExisting(targetDriver.vehicle_type, incomingDriver?.vehicle_type,
                "Truck");
            targetDriver.mobile = preferIncomingOrExisting(targetDriver.mobile, incomingDriver?.mobile, "N/A");

            const isOnline = parseOptionalBoolean(incomingDriver?.is_online);
            if (isOnline !== null) {
                targetDriver.is_online = isOnline;
            } else if (typeof targetDriver.is_online === "undefined") {
                targetDriver.is_online = false;
            }

            const hasActiveJob = parseOptionalBoolean(incomingDriver?.has_active_job);
            if (hasActiveJob !== null) {
                targetDriver.has_active_job = hasActiveJob;
            } else if (typeof targetDriver.has_active_job === "undefined") {
                targetDriver.has_active_job = false;
            }
        }

        function upsertDriverState(rawDriver, sourceTag = "api") {
            const driverId = normalizeDriverId(rawDriver);
            if (!driverId) return null;

            const latLng = parseDriverLatLng(rawDriver);
            if (!latLng) return null;

            let existingDriver = dashDriversById[driverId];
            if (existingDriver) {
                if (sourceTag === "socket") {
                    logDashDebug("existing driver found", {
                        driver_id: driverId
                    });
                }
                applyIncomingDriverData(existingDriver, rawDriver, driverId);
                return existingDriver;
            }

            existingDriver = {
                id: rawDriver.id ?? rawDriver.driver_id ?? driverId,
                driver_id: rawDriver.driver_id ?? rawDriver.id ?? driverId,
                current_lat: latLng.lat,
                current_lng: latLng.lng,
                full_name: "",
                vehicle_number: "",
                vehicle_type: "",
                mobile: "",
                is_online: false,
                has_active_job: false,
            };
            applyIncomingDriverData(existingDriver, rawDriver, driverId);
            dashDriversById[driverId] = existingDriver;

            if (sourceTag === "socket") {
                logDashDebug("fallback driver created", {
                    driver_id: driverId
                });
            }

            return existingDriver;
        }

        function isAdvancedMarkerInstance(marker) {
            return Boolean(marker && typeof marker.setPosition !== "function" && "position" in marker && "content" in marker);
        }

        function removeMarkerFromMap(marker) {
            if (!marker) return;
            if (typeof marker.setMap === "function") {
                marker.setMap(null);
                return;
            }
            if ("map" in marker) {
                marker.map = null;
            }
        }

        function setMarkerPositionSafely(marker, position) {
            if (!marker || !position) return;

            if (typeof marker.setPosition === "function") {
                marker.setPosition(position);
                return;
            }

            if ("position" in marker) {
                marker.position = position;
            }
        }

        function buildDriverInfoHtml(driver) {
            const title = driver?.full_name || "Driver";
            const vehicleText = `${driver?.vehicle_type || "Truck"} - ${driver?.vehicle_number || "N/A"}`;
            const mobile = driver?.mobile || "N/A";

            return `
                <div style="min-width:210px">
                    <div style="font-weight:800;margin-bottom:4px">${escapeHtml(title)}</div>
                    <div style="font-size:12px;color:#666">${escapeHtml(vehicleText)}</div>
                    <div style="font-size:12px;color:#666;margin-top:6px">Phone: ${escapeHtml(mobile)}</div>
                </div>
            `;
        }

        function openDriverInfoWindow(driverId, marker) {
            if (!dashInfoWindow || !map) return;
            const driver = dashDriversById[driverId];
            if (!driver) return;

            dashInfoWindow.setContent(buildDriverInfoHtml(driver));

            try {
                dashInfoWindow.open({
                    map,
                    anchor: marker
                });
            } catch (e) {
                dashInfoWindow.open(map, marker);
            }
        }

        function bindDriverMarkerClick(marker, driverId) {
            if (!marker || typeof marker.addListener !== "function") return;
            marker.addListener("click", () => openDriverInfoWindow(driverId, marker));
        }

        function buildAdvancedMarkerContent(driver) {
            const status = getDriverStatus(driver);
            const wrap = document.createElement("div");
            wrap.className = "dash-car-wrap";
            wrap.style.width = "34px";
            wrap.style.height = "34px";
            wrap.style.borderWidth = "3px";
            if (status === "busy") wrap.classList.add("busy");
            if (status === "offline") wrap.classList.add("offline");

            const img = document.createElement("img");
            img.src = DASH_CAR_ICON_URL;
            img.alt = driver.full_name || "Driver";
            img.style.width = "65px";
            img.style.height = "65px";
            wrap.appendChild(img);

            return wrap;
        }

        function updateDriverMarker(driver, sourceTag = "api") {
            if (!map || !window.google || !google.maps) return;

            const driverId = normalizeDriverId(driver);
            if (!driverId) return;

            const position = parseDriverLatLng(driver);
            if (!position) return;

            const markerTitle = driver.full_name || `Driver #${driverId}`;
            const status = getDriverStatus(driver);
            const existingMarker = dashMarkers[driverId];

            if (existingMarker) {
                setMarkerPositionSafely(existingMarker, position);

                if (typeof existingMarker.setIcon === "function") {
                    const iconUrl = buildCarCardSvg(status, DASH_CAR_ICON_URL);
                    existingMarker.setIcon({
                        url: iconUrl,
                        scaledSize: new google.maps.Size(30, 30),
                        anchor: new google.maps.Point(15, 15),
                    });
                }

                if (isAdvancedMarkerInstance(existingMarker) && existingMarker.content) {
                    existingMarker.content.className = "dash-car-wrap";
                    if (status === "busy") existingMarker.content.classList.add("busy");
                    if (status === "offline") existingMarker.content.classList.add("offline");
                }

                if ("title" in existingMarker) {
                    existingMarker.title = markerTitle;
                }

                logDashDebug("marker updated", {
                    driver_id: driverId,
                    source: sourceTag
                });
                logDashDebug("duplicate prevented", {
                    driver_id: driverId
                });
                return;
            }

            let marker;
            if (DashAdvancedMarkerElement) {
                marker = new DashAdvancedMarkerElement({
                    map,
                    position,
                    title: markerTitle,
                    content: buildAdvancedMarkerContent(driver)
                });
            } else {
                const iconUrl = buildCarCardSvg(status, DASH_CAR_ICON_URL);
                marker = new google.maps.Marker({
                    map: map,
                    position,
                    title: markerTitle,
                    icon: {
                        url: iconUrl,
                        scaledSize: new google.maps.Size(30, 30),
                        anchor: new google.maps.Point(15, 15)
                    }
                });
            }

            bindDriverMarkerClick(marker, driverId);
            dashMarkers[driverId] = marker;

            logDashDebug("marker created", {
                driver_id: driverId,
                source: sourceTag
            });
        }

        async function startDashSocketDrivers() {
            if (dashMapState.socketStarted) return;
            dashMapState.socketStarted = true;

            try {
                const socketConfig = resolveDashSocketConfig();
                const hasClient = await ensureSocketIoClient(socketConfig.socketUrl);
                if (!hasClient || typeof window.io !== "function") {
                    dashMapState.socketStarted = false;
                    return;
                }

                const socketTarget = socketConfig.namespace ?
                    `${socketConfig.socketUrl}${socketConfig.namespace}` :
                    socketConfig.socketUrl;

                const socketTransports = socketConfig.forcePolling ? ["polling"] : ["polling", "websocket"];

                dashSocket = window.io(socketTarget, {
                    path: socketConfig.socketPath,
                    transports: socketTransports,
                    upgrade: !socketConfig.forcePolling,
                    reconnection: true,
                    autoConnect: true
                });

                dashMapState.socket = dashSocket;
                logDashDebug("socket transport mode", {
                    transports: socketTransports,
                    force_polling: socketConfig.forcePolling
                });

                dashSocket.on("connect", () => {
                    logDashDebug("socket connected", {
                        socket_id: dashSocket.id
                    });

                    if (socketConfig.room && socketConfig.joinEvent) {
                        dashSocket.emit(socketConfig.joinEvent, socketConfig.room);
                        logDashDebug("socket room joined", {
                            room: socketConfig.room,
                            event: socketConfig.joinEvent
                        });
                    }
                });

                dashSocket.on("driver_location_updated", (payload) => {
                    logDashDebug("driver_location_updated received", payload);

                    const socketDriver = normalizeSocketDriverPayload(payload);
                    const upsertedDriver = upsertDriverState(socketDriver, "socket");
                    if (!upsertedDriver) return;

                    updateDriverMarker(upsertedDriver, "socket");
                });

                dashSocket.on("disconnect", (reason) => {
                    logDashDebug("socket disconnected", {
                        reason
                    });
                });

                dashSocket.on("connect_error", (error) => {
                    console.warn(`${DASH_DEBUG_PREFIX} socket connect error`, error);
                });
            } catch (error) {
                dashMapState.socketStarted = false;
                console.warn(`${DASH_DEBUG_PREFIX} socket init failed`, error);
            }
        }

        function startDashAutoDrivers() {
            try {
                if (dashStarted) return;
                dashStarted = true;

                if (!map || !window.google || !google.maps) {
                    dashStarted = false;
                    setTimeout(startDashAutoDrivers, 500);
                    return;
                }

                if (!dashInfoWindow) dashInfoWindow = new google.maps.InfoWindow();

                initDashMarkerLibrary();
                startDashSocketDrivers();

                refreshDrivers();
                dashTimer = setInterval(refreshDrivers, 5000);
            } catch (e) {
                dashStarted = false;
                console.error("startDashAutoDrivers error:", e);
            }
        }

        function stopDashAutoDrivers() {
            try {
                if (dashTimer) {
                    clearInterval(dashTimer);
                    dashTimer = null;
                }

                if (dashSocket && typeof dashSocket.disconnect === "function") {
                    dashSocket.disconnect();
                    dashSocket = null;
                    dashMapState.socket = null;
                    dashMapState.socketStarted = false;
                }

                dashStarted = false;
            } catch (e) {
                console.error("stopDashAutoDrivers error:", e);
            }
        }

        async function refreshDrivers() {
            try {
                if (!map) return;
                const resp = await fetch(DASH_MAP_DATA_URL, {
                    method: "GET",
                    headers: {
                        "Accept": "application/json"
                    }
                });

                console.log(" map-data status:", resp.status);
                if (!resp.ok) return;

                const json = await resp.json();
                const drivers = Array.isArray(json) ? json : (json.data || json.drivers || []);
                if (!Array.isArray(drivers)) return;

                updateDriverCarMarkers(drivers);
            } catch (e) {
                console.error("refreshDrivers error:", e);
            }
        }

        function buildCarCardSvg(status, carImageUrl) {

            const ring = status === "busy" ? "#ff3b30" : (status === "offline" ? "#8e8e93" : "#35c759");

            const safeImg = String(carImageUrl || "")
                .replace(/&/g, "&amp;")
                .replace(/"/g, "&quot;");

            const svg = `
<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">

  <defs>
    <filter id="shadow" x="-20%" y="-20%" width="140%" height="140%">
      <feDropShadow dx="0" dy="3" stdDeviation="3" flood-color="#000" flood-opacity="0.25"/>
    </filter>
  </defs>

  <circle cx="22" cy="22" r="16"
      fill="#ffffff"
      stroke="${ring}"
      stroke-width="3"
      filter="url(#shadow)"/>

  <circle cx="22" cy="22" r="13.5" fill="#ffffff"/>

  <image
      x="16"
      y="16"
      width="12"
      height="12"
      xlink:href="${safeImg}"
      href="${safeImg}"
      preserveAspectRatio="xMidYMid meet"
  />

</svg>`;

            const encoded = encodeURIComponent(svg.trim())
                .replace(/'/g, "%27")
                .replace(/"/g, "%22");

            return `data:image/svg+xml;charset=UTF-8,${encoded}`;
        }

        function getDriverStatus(d) {
            if (d && d.has_active_job) return "busy";
            if (d && d.is_online) return "online";
            return "offline";
        }

        function getRingColor(status) {
            if (status === "busy") return "#ff3b30";
            if (status === "offline") return "#8e8e93";
            return "#35c759";
        }

        function updateDriverCarMarkers(drivers) {
            try {
                if (!map || !window.google || !google.maps) return;

                const activeIds = new Set();

                drivers.forEach((rawDriver) => {
                    const upsertedDriver = upsertDriverState(rawDriver, "api");
                    if (!upsertedDriver) return;

                    const driverId = normalizeDriverId(upsertedDriver);
                    if (!driverId) return;

                    activeIds.add(driverId);
                    updateDriverMarker(upsertedDriver, "api");
                });

                Object.keys(dashDriversById).forEach((driverId) => {
                    if (activeIds.has(driverId)) return;

                    removeMarkerFromMap(dashMarkers[driverId]);
                    delete dashMarkers[driverId];
                    delete dashDriversById[driverId];
                });
            } catch (e) {
                console.error("updateDriverCarMarkers error:", e);
            }
        }

        function escapeHtml(str) {
            return String(str ?? "")
                .replaceAll("&", "&amp;")
                .replaceAll("<", "&lt;")
                .replaceAll(">", "&gt;")
                .replaceAll('"', "&quot;")
                .replaceAll("'", "&#039;");
        }

        (function bootAutoDrivers() {
            const tryStart = () => {
                if (mapReady && map) {
                    startDashAutoDrivers();
                    return;
                }
                setTimeout(tryStart, 500);
            };
            tryStart();
        })();

        window.addEventListener("beforeunload", stopDashAutoDrivers);
    </script>
@endpush
