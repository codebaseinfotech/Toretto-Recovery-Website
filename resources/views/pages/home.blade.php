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
                                <button type="button" class="theme-btn" id="calculatePriceBtn">
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
                            <div class="price-calculation-section mb-3"
                                style="background: #f8f9fa; border-radius: 8px; padding: 15px; border: 1px solid #eee;">
                                <div class="d-flex justify-content-between mb-2">
                                    <span style="font-size: 14px; color: #333;">Total Price:</span>
                                    <span id="totalPriceDisplay"
                                        style="font-size: 14px; font-weight: 700; color: #000;">0.00 AED</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2 d-none" id="discountRow">
                                    <span style="font-size: 14px; color: #333;">Discounted Price:</span>
                                    <span id="discountAmountDisplay"
                                        style="font-size: 14px; font-weight: 700; color: #dc3545;">0.00 AED</span>
                                </div>
                                <hr style="margin: 8px 0; border-color: #ddd;">
                                <div class="d-flex justify-content-between">
                                    <span style="font-size: 15px; font-weight: 700; color: #000;">Grand Total:</span>
                                    <span id="grandTotalDisplay"
                                        style="font-size: 15px; font-weight: 700; color: #000;">0.00 AED</span>
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
                                                <a href="{{ route('book.now') }}" class="theme-btn">Book Now<i
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
                                                <a href="{{ route('book.now') }}" class="theme-btn">Book Now<i
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
                                                <a href="{{ route('book.now') }}" class="theme-btn">Book Now<i
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
                                                <a href="{{ route('book.now') }}" class="theme-btn">Book Now<i
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
                                                <a href="{{ route('book.now') }}" class="theme-btn">Book Now<i
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
                                                <a href="{{ route('book.now') }}" class="theme-btn">Book Now<i
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


        let pickupLat = null;
        let pickupLng = null;
        let dropLat = null;
        let dropLng = null;
        let mapReady = false;

        function checkLocationPermission() {
            if ('permissions' in navigator) {
                navigator.permissions.query({
                    name: 'geolocation'
                }).then(function(result) {
                    if (result.state === 'granted') {
                        locationPermissionGranted = true;
                    } else if (result.state === 'prompt') {
                        // show modal
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
                    // if denied, do nothing
                });
            } else {
                // permissions API not supported, assume granted to keep old behavior
                locationPermissionGranted = true;
            }
        }

        function loadGoogleMapsScript() {
            // Check if Google Maps API is already loaded
            if (window.google && window.google.maps) {
                // Maps API already loaded, initialize directly
                initMapAndAutocomplete();
                return;
            }

            const script = document.createElement('script');
            // Modified callback to handle map initialization after API loads
            script.src =
                `https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.key') }}&libraries=places,directions,distance_matrix&callback=initMapAndAutocomplete`;
            script.async = true;
            script.defer = true;
            document.head.appendChild(script);
        }

        let pickupAutocomplete, dropAutocomplete;
        let map, pickupMarker, dropMarker, directionsRenderer;
        let directionsService;

        function initMapAndAutocomplete() {
            initMap();
            initAutocomplete();

            if (locationPermissionGranted) {
                setTimeout(getUserLiveLocation, 500);
            }

            // Enable the "Use Current Location" button after map is ready
            setTimeout(() => {
                const useCurrentLocationBtn = document.getElementById('useCurrentLocationBtn');
                if (useCurrentLocationBtn) {
                    useCurrentLocationBtn.style.opacity = '1';
                    useCurrentLocationBtn.style.pointerEvents = 'auto';
                    console.log('Use Current Location button enabled');
                }
            }, 1000);
        }

        function initMap() {
            // Initialize the Google map
            const uaeCenter = {
                lat: 24.4539,
                lng: 54.3773
            }; // UAE center
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 6,
                center: uaeCenter,
                restriction: {
                    latLngBounds: {
                        north: 26.0555,
                        south: 22.4969,
                        west: 51.5795,
                        east: 56.3967
                    },
                    strictBounds: true
                }
            });

            // Initialize directions service and renderer
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

        }

        function initAutocomplete() {
            // 🇦🇪 UAE Boundaries
            const uaeBounds = new google.maps.LatLngBounds(
                new google.maps.LatLng(22.4969, 51.5795),
                new google.maps.LatLng(26.0555, 56.3967)
            );

            const autocompleteOptions = {
                types: ['establishment'],
                bounds: uaeBounds,
                strictBounds: true,
                componentRestrictions: {
                    country: ['AE'] // 🇦🇪 UAE only
                }
            };

            // Safely initialize autocompletes with checks
            const pickupElement = document.getElementById('pickup_location');
            const dropElement = document.getElementById('drop_location');

            if (pickupElement) {
                pickupAutocomplete = new google.maps.places.Autocomplete(
                    pickupElement,
                    autocompleteOptions
                );

                // Add listener with error handling
                pickupAutocomplete.addListener('place_changed', function() {
                    try {
                        onPickupChanged();
                    } catch (error) {
                        // Fallback: ensure input value is set properly
                        const element = document.getElementById('pickup_location');
                        if (element && pickupAutocomplete) {
                            const place = pickupAutocomplete.getPlace();
                            if (place && place.name) {
                                element.value = place.name;
                            }
                        }
                    }
                });
            }

            if (dropElement) {
                dropAutocomplete = new google.maps.places.Autocomplete(
                    dropElement,
                    autocompleteOptions
                );

                // Add listener with error handling
                dropAutocomplete.addListener('place_changed', function() {
                    try {
                        onDropChanged();
                    } catch (error) {
                        // Fallback: ensure input value is set properly
                        const element = document.getElementById('drop_location');
                        if (element && dropAutocomplete) {
                            const place = dropAutocomplete.getPlace();
                            if (place && place.name) {
                                element.value = place.name;
                            }
                        }
                    }
                });
            }

        }

        function onPickupChanged() {
            const place = pickupAutocomplete.getPlace();

            if (!place.geometry) {
                showToast('Please select a valid location within the UAE.', 'error');
                const pickupElement = document.getElementById('pickup_location');
                if (pickupElement) pickupElement.value = '';
                return;
            }

            const lat = place.geometry.location.lat();
            const lng = place.geometry.location.lng();
            pickupLat = lat;
            pickupLng = lng;

            if (!isLocationInUAE(lat, lng)) {
                showToast('Please select a valid location within the UAE.', 'error');
                const pickupElement = document.getElementById('pickup_location');
                if (pickupElement) pickupElement.value = '';
                return;
            }

            // Remove existing pickup marker if present
            if (pickupMarker) {
                pickupMarker.setMap(null);
            }

            // Create new pickup marker
            pickupMarker = new google.maps.Marker({
                position: {
                    lat: lat,
                    lng: lng
                },
                map: map,
                title: 'Pickup: ' + place.name,
                icon: {
                    url: "{{ asset('assets/images/pin.png') }}", // Using a pin icon for pickup
                    scaledSize: new google.maps.Size(30, 30)
                }
            });

            // Add info window to the marker
            const pickupInfoWindow = new google.maps.InfoWindow({
                // content: 'Pickup: ' + place.name
                content: `
                    <div style="max-width:200px; font-size:13px; line-height:1.4;">
                        <strong>Pickup:</strong><br>
                        ${place.name.split('|')[0]}
                    </div>
                `

            });
            pickupInfoWindow.open(map, pickupMarker);

            // Safely update the input field value
            const pickupElement = document.getElementById('pickup_location');
            // if (pickupElement && place.name) {
            //     pickupElement.value = place.name;
            // }
            if (place.formatted_address) {
                pickupElement.value = place.formatted_address;
            } else {
                pickupElement.value = place.name.split('|')[0].split(',')[0];
            }


            // Pan to the marker location
            map.panTo({
                lat: lat,
                lng: lng
            });
            map.setZoom(15);

            // Draw route with a small delay to ensure everything is ready
            if (dropMarker) {
                setTimeout(drawRoute, 300);
            }
        }

        function onDropChanged() {
            const place = dropAutocomplete.getPlace();

            if (!place.geometry) {
                showToast('Please select a valid location within the UAE.', 'error');
                const dropElement = document.getElementById('drop_location');
                if (dropElement) dropElement.value = '';
                return;
            }

            const lat = place.geometry.location.lat();
            const lng = place.geometry.location.lng();
            dropLat = lat;
            dropLng = lng;

            // Remove existing drop marker if present
            if (dropMarker) {
                dropMarker.setMap(null);
            }

            // Create new drop marker
            dropMarker = new google.maps.Marker({
                position: {
                    lat: lat,
                    lng: lng
                },
                map: map,
                title: 'Drop: ' + place.name,
                icon: {
                    url: "{{ asset('assets/images/pin.png') }}", // Using a pin icon for drop
                    scaledSize: new google.maps.Size(30, 30)
                }
            });

            // Add info window to the marker
            const dropInfoWindow = new google.maps.InfoWindow({
                // content: 'Drop: ' + place.name
                content: `
                    <div style="max-width:200px; font-size:13px; line-height:1.4;">
                        <strong>Drop:</strong><br>
                        ${place.name.split('|')[0]}
                    </div>
                `
            });
            dropInfoWindow.open(map, dropMarker);

            // Safely update the input field value
            const dropElement = document.getElementById('drop_location');
            // if (dropElement && place.name) {
            //     dropElement.value = place.name;
            // }
            if (place.formatted_address) {
                dropElement.value = place.formatted_address;
            } else {
                dropElement.value = place.name.split('|')[0].split(',')[0];
            }

            // Pan to the marker location
            map.panTo({
                lat: lat,
                lng: lng
            });
            map.setZoom(15);

            // Draw route with a small delay to ensure everything is ready
            if (pickupMarker) {
                setTimeout(drawRoute, 300);
            }
        }

        function getAuthToken() {
            const localStorageToken = localStorage.getItem('auth_token');
            if (localStorageToken && localStorageToken !== '') {
                return localStorageToken;
            }

            if (API_BEARER_TOKEN && API_BEARER_TOKEN !== '') {
                return API_BEARER_TOKEN;
            }

            const tokenMeta = document.querySelector('meta[name="api-token"]');
            if (tokenMeta) {
                return tokenMeta.getAttribute('content');
            }

            if (typeof window.userApiToken !== 'undefined') {
                return window.userApiToken;
            }

            return '';
        }

        async function fetchPriceFromAPI(latitude, longitude, km) {
            console.log('fetchPriceFromAPI called with lat: ' + latitude + ', lng: ' + longitude + ', km: ' + km);
            try {
                const origin = pickupLat + "," + pickupLng;
                const destination = dropLat + "," + dropLng;

                const responsea = await window.ApiUtils.fetch(
                    `${PRICE_API_BASE_URL}/v1/customer/distance?origin=${origin}&destination=${destination}&traffic_model=best_guess`, {
                        method: "GET",
                        headers: {
                            'Authorization': `Bearer ${token}`,
                            'Accept': 'application/json'
                        }
                    }
                );

                const datas = await responsea.json();

                console.log("Distance API Response:", datas);

                const priceEl = document.getElementById('price');
                const totalPriceEl = document.getElementById('totalPriceDisplay');
                const grandTotalEl = document.getElementById('grandTotalDisplay');

                // Reset displays
                if (priceEl) priceEl.innerText = '0.00';
                if (totalPriceEl) totalPriceEl.innerText = '0.00';
                if (grandTotalEl) grandTotalEl.innerText = '0.00';

                const result = datas.rows[0].elements[0];
                const km = result.distance.text;
                const minutes = result.duration_in_traffic.text;

                document.getElementById("distance").innerText = km;
                document.getElementById("minutes").innerText = minutes;
                let kmText = result.distance.text; // "120.39 km"
                let kms = kmText.replace(' km', '');

                console.log("KMS:", kms);
                console.log("minutes:", minutes);


                const token = getAuthToken();
                const response = await window.ApiUtils.fetch(`${PRICE_API_BASE_URL}/v1/customer/price/calculate`, {
                    method: 'POST',
                    headers: {
                        'Authorization': 'Bearer ' + token
                    },
                    body: JSON.stringify({
                        km: kms,
                        latitude: pickupLat,
                        longitude: pickupLng,
                        drop_latitude: dropLat,
                        drop_longitude: dropLng,
                        minutes: minutes,
                    })
                });

                if (!response.ok) {
                    throw new Error(`API responded with status ${response.status}`);
                }

                const data = await response.json();
                const price =
                    (data && data.data && data.data.price) ??
                    data?.price ??
                    data?.data?.amount ??
                    data?.amount ??
                    data?.data?.total ??
                    data?.total;
                console.log('Price from API:', price);

                if (price !== null && price !== undefined && !isNaN(parseFloat(price))) {

                    const priceValue = parseFloat(price);
                    currentOriginalPrice = priceValue; // Store original price

                    // Update all price displays
                    if (priceEl) priceEl.innerText = priceValue.toFixed(2) + ' AED';
                    updateGrandTotal(); // This will update all displays
                } else {
                    if (priceEl) priceEl.innerText = '0.00 AED';
                    currentOriginalPrice = 0;
                    updateGrandTotal();

                }
            } catch (error) {

                const priceEl = document.getElementById('price');
                const fallbackPrice = (50 + km * 12);
                console.log('used this is not used', fallbackPrice);

                currentOriginalPrice = fallbackPrice;

                if (priceEl) priceEl.innerText = fallbackPrice.toFixed(2) + ' AED';
                updateGrandTotal();
            }
        }

        // Helper function to calculate and display price calculation
        function updateGrandTotal() {
            const totalPriceEl = document.getElementById('totalPriceDisplay');
            const grandTotalEl = document.getElementById('grandTotalDisplay');
            const discountRow = document.getElementById('discountRow');
            const discountAmountEl = document.getElementById('discountAmountDisplay');

            if (!grandTotalEl) return;

            // Update total price display
            if (totalPriceEl) {
                totalPriceEl.innerText = currentOriginalPrice.toFixed(2) + ' AED';
            }

            let finalPrice = currentOriginalPrice;
            let discountAmount = 0;

            // Apply discount if available
            if (currentPromotionData && currentDiscountValue > 0) {
                // Check if discount is percentage or fixed amount
                if (currentPromotionData.discount_type === 'percentage') {
                    discountAmount = (currentOriginalPrice * currentDiscountValue) / 100;
                } else {
                    // Fixed amount discount
                    discountAmount = currentDiscountValue;
                }

                finalPrice = currentOriginalPrice - discountAmount;

                // Ensure price doesn't go below zero
                if (finalPrice < 0) finalPrice = 0;

                // Show discount row
                if (discountRow) {
                    discountRow.classList.remove('d-none');
                }

                // Update discount display
                if (discountAmountEl) {
                    discountAmountEl.innerText = discountAmount.toFixed(2) + ' AED';
                }
            } else {
                // Hide discount section if no discount
                if (discountRow) {
                    discountRow.classList.add('d-none');
                }
            }

            // Update grand total display
            grandTotalEl.innerText = finalPrice.toFixed(2) + ' AED';
        }

        function showToast(message, type = 'success') {
            // Special handling for booking success message
            if (message.includes('Thank you for choosing Toretto Recovery Services')) {
                showBookingSuccessPopup();
                return;
            }

            let swalIcon = type === 'error' ? 'error' : type === 'warning' ? 'warning' : type === 'info' ? 'info' :
                'success';

            let background = '#FFFFFF';
            let color;
            switch (type) {
                case 'error':
                    color = '#dc3545';
                    break;
                case 'warning':
                    color = '#ffc107';
                    break;
                case 'info':
                    color = '#17a2b8'; // Blue for info
                    break;
                default: // success
                    color = '#28a745'; // Green for success
            }

            // Customize title based on the page and action
            let toastTitle = message.toLowerCase().includes('booking') || message.toLowerCase().includes('book') ?
                'Booking Status' :
                message.toLowerCase().includes('promo') || message.toLowerCase().includes('code') ? 'Promo Code' :
                message.toLowerCase().includes('success') ? 'Booking Success' :
                type === 'error' ? 'Booking Error' :
                type === 'warning' ? 'Attention Required' :
                type === 'info' ? 'Information' : 'Service Status';

            //  msg.includes('session')
            if (type === 'error' && toastTitle === 'Unauthenticated' || toastTitle === 'Unauthorized') {
                autoLogout();
            }

            Swal.fire({
                toast: true,
                icon: swalIcon,
                title: toastTitle,
                text: message,
                animation: true,
                position: 'top-end',
                background: background,
                color: color,
                timer: 5000,
                timerProgressBar: true,
                showConfirmButton: false,
                width: '400px',
                padding: '20px',
                customClass: {
                    popup: 'custom-toast-popup',
                    title: 'custom-toast-title',
                    icon: 'custom-toast-icon',
                },
                didOpen: () => {
                    const progressBar = Swal.getTimerProgressBar();
                    if (progressBar) {
                        // Set progress bar color based on type
                        switch (type) {
                            case 'error':
                                progressBar.style.backgroundColor = '#dc3545'; // Red for error
                                break;
                            case 'warning':
                                progressBar.style.backgroundColor = '#ffc107'; // Yellow for warning
                                break;
                            case 'info':
                                progressBar.style.backgroundColor = '#17a2b8'; // Blue for info
                                break;
                            default: // success
                                progressBar.style.backgroundColor = '#28a745'; // Green for success
                        }
                    }
                }
            });
        }

        function autoLogout() {
            window.ApiUtils.fetch('{{ route('logout.ajax') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute('content')
                    },
                    body: JSON.stringify({
                        _token: document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute('content')
                    })
                })
                .then(res => res.json())
                .then(data => {
                    localStorage.removeItem('auth_token');
                    localStorage.removeItem('user_data');

                    // optional delay so user toast joi sake
                    setTimeout(() => {
                        window.location.reload();
                    }, 1500);
                })
                .catch(err => {
                    console.error('Logout error:', err);
                    window.location.href = '{{ route('logout') }}';
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

                    <div style="margin-top: 25px;">
                        <button id="openAppBtn" style="
                            background-color: #dc3545;
                            color: white;
                            border: none;
                            padding: 12px 30px;
                            border-radius: 6px;
                            cursor: pointer;
                            font-size: 16px;
                            font-family: 'Avenir', sans-serif;
                            font-weight: bold;
                            transition: background-color 0.3s;
                            box-shadow: 0 2px 6px rgba(220,53,69,0.3);
                        " onmouseover="this.style.backgroundColor='#c82333'; this.style.boxShadow='0 4px 12px rgba(220,53,69,0.4)';"
                        onmouseout="this.style.backgroundColor='#dc3545'; this.style.boxShadow='0 2px 6px rgba(220,53,69,0.3)';">
                            Go to Home Screen
                        </button>
                    </div>
                </div>
        `,
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

                        // Clear promo code input
                        const promoInput = document.getElementById('promo_code');
                        if (promoInput) {
                            promoInput.value = '';
                        }
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

                    // Clear directions
                    if (directionsRenderer) {
                        directionsRenderer.setDirections({
                            routes: []
                        });
                    }

                    // Reset price calculation variables
                    latestDistanceKm = 0;
                    currentOriginalPrice = 0;
                    currentDiscountValue = 0;
                    currentPromotionData = null;
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

        // We're removing the driver functionality since it was causing conflicts
        // Adding the missing drawRoute function

        function drawRoute() {
            if (!pickupMarker || !dropMarker || !map || !directionsService || !directionsRenderer) {
                console.log("Missing required elements for route drawing:", {
                    pickupMarker: !!pickupMarker,
                    dropMarker: !!dropMarker,
                    map: !!map,
                    directionsService: !!directionsService,
                    directionsRenderer: !!directionsRenderer
                });
                return;
            }

            // Get positions of markers
            const pickupPos = pickupMarker.getPosition();
            const dropPos = dropMarker.getPosition();

            // Clear any existing route
            directionsRenderer.setDirections({
                routes: []
            });

            // Request directions
            directionsService.route({
                    origin: pickupPos,
                    destination: dropPos,
                    travelMode: google.maps.TravelMode.DRIVING
                },
                (response, status) => {
                    if (status === google.maps.DirectionsStatus.OK && response.routes.length > 0) {
                        // Display the route on the map
                        directionsRenderer.setDirections(response);

                        // // Calculate distance from the route
                        // let totalDistance = 0;
                        // for (let i = 0; i < response.routes[0].legs.length; i++) {
                        //     totalDistance += response.routes[0].legs[i].distance.value;
                        // }

                        // // Convert to km and update global variable
                        // latestDistanceKm = totalDistance / 1000;

                        // // Update distance display
                        // const distanceEl = document.getElementById("distance");
                        // console.log(distanceEl, 'distanceEl');

                        // if (distanceEl) {
                        //     distanceEl.innerText = latestDistanceKm.toFixed(2) + " km";
                        // }
                        directionsRenderer.setDirections(response);

                        const pickupPos = pickupMarker.getPosition();
                        const dropPos = dropMarker.getPosition();

                        const origin = pickupPos.lat() + "," + pickupPos.lng();
                        const destination = dropPos.lat() + "," + dropPos.lng();
                        console.log('Origin:', origin, 'Destination:', destination);

                        map.fitBounds(response.routes[0].bounds);
                        callDistanceApi(origin, destination);
                    } else {
                        // Handle error
                        showToast(
                            "Unable to calculate route between selected locations. Please try different locations.",
                            "error");

                        // Show straight line as fallback
                        const lineCoordinates = [
                            pickupPos,
                            dropPos
                        ];

                        const straightLine = new google.maps.Polyline({
                            path: lineCoordinates,
                            geodesic: true,
                            strokeColor: '#FF0000',
                            strokeOpacity: 1.0,
                            strokeWeight: 3
                        });

                        straightLine.setMap(map);
                        map.fitBounds(new google.maps.LatLngBounds(pickupPos, dropPos));
                    }
                }
            );
        }


        document.addEventListener('DOMContentLoaded', function() {
            checkLocationPermission();
            loadGoogleMapsScript();

            // Check for pending booking data after a slight delay to ensure map is ready
            setTimeout(checkPendingBookingData, 1000);

            const bookingBtn = document.getElementById('bookingSubmitBtn');
            const bookingBtnText = bookingBtn ? bookingBtn.querySelector('.btn-text') : null;
            const bookingBtnLoader = bookingBtn ? bookingBtn.querySelector('.btn-loader') : null;

            // Promo code apply button functionality
            const applyPromoBtn = document.getElementById('applyPromoBtn');
            const promoInput = document.getElementById('promo_code');
            const promoMessage = document.getElementById('promoMessage');
            const promoBtnText = applyPromoBtn ? applyPromoBtn.querySelector('.btn-text') : null;
            const promoBtnLoader = applyPromoBtn ? applyPromoBtn.querySelector('.btn-loader-promo') : null;

            if (applyPromoBtn) {
                applyPromoBtn.addEventListener('click', async function() {
                    const isApplied = applyPromoBtn.dataset.applied === 'true';
                    const promoCode = promoInput.value.trim();

                    if (isApplied) {
                        removePromoCode();
                        return;
                    }

                    if (!promoCode) {
                        showPromoMessage('Please enter a promo code.', 'error');
                        return;
                    }

                    if (promoBtnText && promoBtnLoader) {
                        promoBtnText.classList.add('d-none');
                        promoBtnLoader.classList.remove('d-none');
                        applyPromoBtn.disabled = true;
                    }

                    const token = getAuthToken();
                    if (!token) {
                        showPromoMessage('Please log in to apply promo codes.', 'error');
                        resetPromoButton();
                        return;
                    }

                    try {
                        const promoResp = await window.ApiUtils.fetch(
                            `${PRICE_API_BASE_URL}/v1/customer/promocodes/verify`, {
                                method: 'POST',
                                headers: {
                                    'Authorization': 'Bearer ' + token
                                },
                                body: JSON.stringify({
                                    code: promoCode
                                })
                            });

                        const promoData = await promoResp.json();

                        if (!promoResp.ok || promoData.status !== true) {
                            showPromoMessage(promoData.message || 'Invalid promo code.', 'error');
                        } else {
                            showPromoMessage('Promo code applied successfully!', 'success');

                            // Store promotion data
                            if (promoData.data) {
                                currentPromotionData = promoData.data;
                                // Extract discount value from the API response
                                currentDiscountValue = promoData.data.discount_value || 0;

                                // Store the promotion ID for use in booking
                                if (promoData.data.id) {
                                    document.getElementById('promo_code').dataset.promotionId =
                                        promoData.data.id;
                                }

                                // Update grand total with discount
                                updateGrandTotal();
                            }

                            // Change button to Remove state
                            setPromoButtonState(true);
                        }
                    } catch (err) {
                        showPromoMessage('Failed to verify promo code. Please try again.', 'error');
                    } finally {
                        resetPromoButton();
                    }
                });
            }

            function showPromoMessage(message, type) {
                showToast(message, type);
            }

            function resetPromoButton() {
                if (promoBtnText && promoBtnLoader) {
                    promoBtnText.classList.remove('d-none');
                    promoBtnLoader.classList.add('d-none');
                    applyPromoBtn.disabled = false;
                }
            }

            function setPromoButtonState(applied) {
                if (applyPromoBtn && promoBtnText) {
                    applyPromoBtn.dataset.applied = applied.toString();
                    if (applied) {
                        promoBtnText.textContent = 'Remove';
                    } else {
                        promoBtnText.textContent = 'Apply';
                        // Clear the promo input
                        if (promoInput) {
                            promoInput.value = '';
                        }
                    }
                }
            }

            function removePromoCode() {
                // Remove the promotion ID
                const promoInputElement = document.getElementById('promo_code');
                if (promoInputElement) {
                    delete promoInputElement.dataset.promotionId;
                }

                // Reset promotion data
                currentPromotionData = null;
                currentDiscountValue = 0;

                // Update grand total (without discount)
                updateGrandTotal();

                // Show success message
                showPromoMessage('Promo code removed successfully!', 'success');

                // Change button back to Apply state
                setPromoButtonState(false);
            }

            // Calculate Price button functionality
            const calculatePriceBtn = document.getElementById('calculatePriceBtn');
            const calculatePriceBtnText = calculatePriceBtn ? calculatePriceBtn.querySelector('.btn-text') : null;
            const calculatePriceBtnLoader = calculatePriceBtn ? calculatePriceBtn.querySelector(
                '.btn-loader-price') : null;
            if (calculatePriceBtn) {
                calculatePriceBtn.addEventListener('click', async function(e) {

                    e.preventDefault();

                    const pickupElement = document.getElementById('pickup_location');
                    const dropElement = document.getElementById('drop_location');

                    if (!pickupElement.value || !dropElement.value) {
                        showToast('Please enter both pickup and drop locations', 'error');
                        return;
                    }

                    const token = getAuthToken();

                    if (!pickupLat || !pickupLng || !dropLat || !dropLng) {
                        showToast('Please select pickup and drop locations from the map autocomplete suggestions before calculating price.', 'error');
                        return;
                    }

                    const origin = pickupLat + "," + pickupLng;
                    const destination = dropLat + "," + dropLng;

                    try {
                        // //  1. Distance API (NO TOKEN)
                        const responseDistance = await fetch(
                            `${PRICE_API_BASE_URL}/v1/customer/distance?origin=${origin}&destination=${destination}&traffic_model=best_guess`
                        );

                        const distanceData = await responseDistance.json();

                        if (!distanceData || !Array.isArray(distanceData.rows) || distanceData.rows.length === 0 ||
                            !Array.isArray(distanceData.rows[0].elements) || distanceData.rows[0].elements.length === 0) {
                            throw new Error('Distance API returned unexpected format');
                        }

                        const result = distanceData.rows[0].elements[0];

                        if (!result || !result.distance || !result.duration_in_traffic) {
                            throw new Error('Distance API missing distance/duration data');
                        }

                        const kmText = result.distance.text;
                        const minutes = result.duration_in_traffic.text;
                        const kms = kmText.replace(/[^\d.]/g, "");

                        document.getElementById("distance").innerText = kmText;
                        document.getElementById("minutes").innerText = minutes;

                        // ❌ 2. If NOT LOGIN → Save & Redirect
                        if (!token) {

                            localStorage.setItem('pending_booking', JSON.stringify({
                                pickup_location: pickupElement.value,
                                drop_location: dropElement.value,
                                pickup_lat: pickupLat,
                                pickup_lng: pickupLng,
                                drop_lat: dropLat,
                                drop_lng: dropLng,
                                km: kms,
                                timestamp: Date.now()
                            }));

                            window.location.href = "{{ route('login') }}";
                            return;
                        }

                        //  3. If LOGIN → Calculate Price
                        await calculateFinalPrice(kms, token, minutes);

                    } catch (error) {
                        console.error('Calculate Price error:', error);
                        showToast(`Something went wrong: ${error.message || 'Please check console for details.'}`, 'error');
                    }
                });


            }


            // Use Current Location button functionality
            const useCurrentLocationBtn = document.getElementById('useCurrentLocationBtn');
            if (useCurrentLocationBtn) {
                useCurrentLocationBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    console.log('Use Current Location button clicked');

                    // Check if map is ready
                    if (!map) {
                        console.log('Map not ready yet, showing loading message');
                        showToast('Map is still loading. Please wait a moment and try again.', 'info');
                        return;
                    }

                    getUserLiveLocation();
                });
            } else {
                console.error('Use Current Location button not found');
            }

            // Booking form submission functionality
            document.getElementById('bookingForm').addEventListener('submit', async function(e) {
                e.preventDefault();

                const pickupElement = document.getElementById('pickup_location');
                const dropElement = document.getElementById('drop_location');
                const promoElement = document.getElementById('promo_code');
                console.log('Booking form submitted with values:', {
                    pickup: pickupElement ? pickupElement.value : null,
                    drop: dropElement ? dropElement.value : null,
                    promo: promoElement ? promoElement.value : null
                });
                if (!pickupElement || !dropElement) {
                    showToast('Pickup or drop location elements not found', 'error');
                    return;
                }

                const pickupLocation = pickupElement.value;
                const dropLocation = dropElement.value;
                const promoCode = promoElement ? promoElement.value : '';

                if (!pickupLocation || !dropLocation) {
                    showToast('Please enter both pickup and drop locations', 'error');
                    return;
                }

                if (!pickupMarker || !dropMarker) {
                    showToast('Please select valid pickup and drop locations on the map.', 'error');
                    return;
                }

                const distanceElement = document.getElementById('distance');
                const distanceValue = distanceElement ? parseFloat(distanceElement.value) : 0;

                if (distanceValue <= 0) {
                    showToast(
                        'Distance could not be calculated. Please ensure both locations are valid.',
                        'error');
                    return;
                }

                if (bookingBtn && bookingBtnText && bookingBtnLoader) {
                    bookingBtn.disabled = true;
                    bookingBtnText.classList.add('d-none');
                    bookingBtnLoader.classList.remove('d-none');
                }

                const token = getAuthToken();

                if (!token) {
                    const bookingData = {
                        pickup_location: pickupLocation,
                        drop_location: dropLocation,
                        pickup_coords: pickupMarker ? {
                            lat: pickupMarker.getPosition().lat(),
                            lng: pickupMarker.getPosition().lng()
                        } : null,
                        drop_coords: dropMarker ? {
                            lat: dropMarker.getPosition().lat(),
                            lng: dropMarker.getPosition().lng()
                        } : null,
                        distance: document.getElementById('distance') ? document.getElementById(
                            'distance').value : 0,
                        timestamp: Date.now()
                    };

                    localStorage.setItem('pending_booking', JSON.stringify(bookingData));

                    window.location.href = '{{ route('login') }}';
                    return;
                }

                const pickupLatLng = pickupMarker.getPosition();
                const dropLatLng = dropMarker.getPosition();

                let promotionId = null;

                const promoInputElement = document.getElementById('promo_code');
                if (promoInputElement && promoInputElement.dataset.promotionId) {
                    promotionId = promoInputElement.dataset.promotionId;
                } else if (promoCode) {
                    try {
                        const promoResp = await window.ApiUtils.fetch(
                            `${PRICE_API_BASE_URL}/v1/customer/promocodes/verify`, {
                                method: 'POST',
                                headers: {
                                    'Authorization': 'Bearer ' + token
                                },
                                body: JSON.stringify({
                                    code: promoCode
                                })
                            });

                        const promoData = await promoResp.json();

                        if (!promoResp.ok || promoData.status !== true) {
                            showToast(promoData.message || 'Invalid promo code.', 'error');
                            if (bookingBtn && bookingBtnText && bookingBtnLoader) {
                                bookingBtn.disabled = false;
                                bookingBtnText.classList.remove('d-none');
                                bookingBtnLoader.classList.add('d-none');
                            }
                            return;
                        }

                        if (promoData.data && promoData.data.id) {
                            promotionId = promoData.data.id;
                            // Also store discount data for display
                            currentPromotionData = promoData.data;
                            currentDiscountValue = promoData.data.discount_value || 0;
                            updateGrandTotal();
                        }
                    } catch (err) {
                        showToast('Please try again.', 'error');
                        if (bookingBtn && bookingBtnText && bookingBtnLoader) {
                            bookingBtn.disabled = false;
                            bookingBtnText.classList.remove('d-none');
                            bookingBtnLoader.classList.add('d-none');
                        }
                        return;
                    }
                }

                // Build booking payload
                const bookingPayload = {
                    service_type_id: 1,
                    pickup_address: pickupLocation,
                    pickup_lat: pickupLatLng.lat(),
                    pickup_lng: pickupLatLng.lng(),
                    dropoff_address: dropLocation,
                    dropoff_lat: dropLatLng.lat(),
                    dropoff_lng: dropLatLng.lng(),
                    distance_km: document.getElementById('distance') ? parseFloat(document
                        .getElementById('distance').value) : 0,
                };

                if (promotionId) {
                    bookingPayload.promotion_id = promotionId;
                }

                try {
                    const bookingResp = await window.ApiUtils.fetch(
                        `${PRICE_API_BASE_URL}/v1/customer/bookings`, {
                            method: 'POST',
                            headers: {
                                'Authorization': 'Bearer ' + token
                            },
                            body: JSON.stringify(bookingPayload)
                        });

                    const bookingData = await bookingResp.json();

                    if (!bookingResp.ok || bookingData.status !== true) {
                        showToast(bookingData.message || 'Please try again.', 'error');
                        if (bookingBtn && bookingBtnText && bookingBtnLoader) {
                            bookingBtn.disabled = false;
                            bookingBtnText.classList.remove('d-none');
                            bookingBtnLoader.classList.add('d-none');
                        }
                        return;
                    }

                    const successMessage = `Thank you for choosing Toretto Recovery Services.

            Your nearest recovery driver is currently being assigned.

            To receive real-time updates, driver contact details, and live tracking, please continue using our mobile application.

            Track your recovery vehicle in real time

            [Open App / Download App]

            Note: Service updates and driver communication are available only in the mobile app.`;
                    showToast(successMessage, 'success');

                    if (bookingBtn && bookingBtnText && bookingBtnLoader) {
                        bookingBtn.disabled = false;
                        bookingBtnText.classList.remove('d-none');
                        bookingBtnLoader.classList.add('d-none');
                    }
                } catch (err) {
                    showToast('Please try again.', 'error');
                    if (bookingBtn && bookingBtnText && bookingBtnLoader) {
                        bookingBtn.disabled = false;
                        bookingBtnText.classList.remove('d-none');
                        bookingBtnLoader.classList.add('d-none');
                    }
                }

                if (bookingBtn && bookingBtnText && bookingBtnLoader) {
                    bookingBtn.disabled = false;
                    bookingBtnText.classList.remove('d-none');
                    bookingBtnLoader.classList.add('d-none');
                }
            });
        });

        function checkPendingBookingData() {
            const pendingBooking = localStorage.getItem('pending_booking');

            if (pendingBooking) {
                try {
                    const bookingData = JSON.parse(pendingBooking);

                    const oneHour = 60 * 60 * 1000;
                    if (Date.now() - bookingData.timestamp > oneHour) {
                        localStorage.removeItem('pending_booking');
                        return;
                    }

                    if (bookingData.pickup_location) {
                        const pickupElement = document.getElementById('pickup_location');
                        if (pickupElement) {
                            setAutocompleteValue(pickupElement, pickupAutocomplete, bookingData.pickup_location);
                        }
                    }

                    if (bookingData.drop_location) {
                        const dropElement = document.getElementById('drop_location');
                        if (dropElement) {
                            setAutocompleteValue(dropElement, dropAutocomplete, bookingData.drop_location);
                        }
                    }

                    if (bookingData.pickup_coords && map) {
                        if (pickupMarker) {
                            pickupMarker.setMap(null);
                        }

                        pickupMarker = new google.maps.Marker({
                            position: {
                                lat: bookingData.pickup_coords.lat,
                                lng: bookingData.pickup_coords.lng
                            },
                            map: map,
                            title: 'Pickup Location: ' + bookingData.pickup_location,
                            icon: {
                                url: "{{ asset('assets/images/pin.png') }}",
                                scaledSize: new google.maps.Size(30, 30)
                            }
                        });

                        const pickupInfoWindow = new google.maps.InfoWindow({
                            content: 'Pickup Location: ' + bookingData.pickup_location
                        });
                        pickupInfoWindow.open(map, pickupMarker);

                        map.panTo({
                            lat: bookingData.pickup_coords.lat,
                            lng: bookingData.pickup_coords.lng
                        });
                        map.setZoom(15);
                    }

                    if (bookingData.drop_coords && map) {
                        if (dropMarker) {
                            dropMarker.setMap(null);
                        }

                        dropMarker = new google.maps.Marker({
                            position: {
                                lat: bookingData.drop_coords.lat,
                                lng: bookingData.drop_coords.lng
                            },
                            map: map,
                            title: 'Drop Location: ' + bookingData.drop_location,
                            icon: {
                                url: "{{ asset('assets/images/pin.png') }}",
                                scaledSize: new google.maps.Size(30, 30)
                            }
                        });

                        const dropInfoWindow = new google.maps.InfoWindow({
                            content: 'Drop Location: ' + bookingData.drop_location
                        });
                        dropInfoWindow.open(map, dropMarker);
                    }

                    if (bookingData.distance) {
                        const distanceElement = document.getElementById('distance');
                        if (distanceElement) {
                            latestDistanceKm = bookingData.distance;
                            distanceElement.innerText = bookingData.distance.toFixed(2) + " km";
                        }
                    }

                    if (pickupMarker && dropMarker) {
                        drawRoute();

                        setTimeout(async () => {
                            if (latestDistanceKm > 0) {
                                const pickupLatLng = pickupMarker.getPosition();
                                await fetchPriceFromAPI(pickupLatLng.lat(), pickupLatLng.lng(),
                                    latestDistanceKm);
                            } else {
                                const pickupElement = document.getElementById('pickup_location');
                                const dropElement = document.getElementById('drop_location');

                                if (pickupElement && dropElement && pickupElement.value && dropElement.value) {
                                    calculateDistanceByLatLng();

                                    setTimeout(async () => {
                                        if (latestDistanceKm > 0) {
                                            const pickupLatLng = pickupMarker.getPosition();
                                            await fetchPriceFromAPI(pickupLatLng.lat(), pickupLatLng
                                                .lng(), latestDistanceKm);
                                        }
                                    }, 1000);
                                }
                            }
                        }, 500);
                    } else {
                        setTimeout(() => {
                            showToast('Your booking data has been restored!', 'success');
                        }, 1000);
                    }

                    localStorage.removeItem('pending_booking');

                } catch (error) {

                    localStorage.removeItem('pending_booking');
                }
            }
        }

        function setAutocompleteValue(inputElement, autocompleteInstance, value) {
            if (!inputElement || !autocompleteInstance) return;

            inputElement.value = value;

            inputElement.dispatchEvent(new Event('input', {
                bubbles: true
            }));
            inputElement.dispatchEvent(new Event('change', {
                bubbles: true
            }));
        }

        function isLocationInUAE(lat, lng) {
            // UAE coordinates boundaries
            const uaeMinLat = 22.4969;
            const uaeMaxLat = 26.0555;
            const uaeMinLng = 51.5795;
            const uaeMaxLng = 56.3967;

            return (lat >= uaeMinLat && lat <= uaeMaxLat &&
                lng >= uaeMinLng && lng <= uaeMaxLng);
        }

        function getUserLiveLocation() {
            console.log('getUserLiveLocation called');

            if (!navigator.geolocation) {
                console.error('Geolocation is not supported by this browser');
                showToast("Geolocation is not supported by your browser. Please enter pickup location manually.", "error");
                return;
            }

            console.log('Requesting geolocation...');

            navigator.geolocation.getCurrentPosition(
                (position) => {
                    console.log('Geolocation success:', position);
                    const lat = position.coords.latitude;
                    const lng = position.coords.longitude;

                    if (!lat || !lng) {
                        console.error('Invalid coordinates received');
                        showToast(
                            "Unable to determine your location. Please enter pickup location manually.",
                            "info"
                        );
                        return;
                    }

                    console.log('Coordinates:', lat, lng);

                    // Check if map is initialized
                    if (!map) {
                        console.error('Map not initialized yet');
                        showToast("Map is still loading. Please try again in a moment.", "warning");
                        return;
                    }

                    if (!isLocationInUAE(lat, lng)) {
                        console.log('Location is outside UAE');
                        const pickupElement = document.getElementById('pickup_location');
                        const dropElement = document.getElementById('drop_location');
                        if (pickupElement && dropElement && pickupElement.value.trim() === '' && dropElement.value
                            .trim() === '') {
                            showToast(
                                "Your current location is outside UAE. Please select pickup location manually.",
                                "warning"
                            );
                        }
                        return;
                    }

                    console.log('Setting pickup location from coordinates');
                    setPickupFromLatLng(lat, lng);
                },
                (error) => {
                    console.error('Geolocation error:', error);
                    let errorMessage = "Unable to fetch your location. Please enter pickup location manually.";

                    switch (error.code) {
                        case error.PERMISSION_DENIED:
                            errorMessage =
                                "Location access denied. Please enable location services to use this feature.";
                            break;
                        case error.POSITION_UNAVAILABLE:
                            errorMessage = "Location information is unavailable. Please try again later.";
                            break;
                        case error.TIMEOUT:
                            errorMessage = "The request to get your location timed out. Please try again.";
                            break;
                        case error.UNKNOWN_ERROR:
                        default:
                            errorMessage = "An unknown error occurred while getting your location.";
                            break;
                    }

                    showToast(errorMessage, "error");
                }, {
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
                        lat: lat,
                        lng: lng
                    }
                },
                (results, status) => {
                    if (status === "OK" && results && results.length > 0) {
                        const address = results[0].formatted_address;

                        const pickupInput = document.getElementById("pickup_location");
                        if (pickupInput) {
                            pickupInput.value = address;
                        }

                        if (pickupMarker) {
                            pickupMarker.setMap(null);
                        }

                        pickupMarker = new google.maps.Marker({
                            position: {
                                lat: lat,
                                lng: lng
                            },
                            map: map,
                            title: "Your Current Location",
                            icon: {
                                url: "{{ asset('assets/images/pin.png') }}",
                                scaledSize: new google.maps.Size(30, 30)
                            }
                        });

                        const pickupInfoWindow = new google.maps.InfoWindow({
                            content: "Your Current Location"
                        });
                        pickupInfoWindow.open(map, pickupMarker);

                        map.panTo({
                            lat: lat,
                            lng: lng
                        });
                        map.setZoom(15);

                        showToast("Pickup location set to your current location", "success");

                        if (dropMarker && pickupMarker) {
                            setTimeout(drawRoute, 500);
                        }
                    } else {
                        showToast(
                            "Unable to detect address from your location",
                            "error"
                        );
                    }
                }
            );
        }

        async function calculateFinalPrice(kms, token, minutes) {
            const responsePrice = await fetch(
                `${PRICE_API_BASE_URL}/v1/customer/price/calculate`, {
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
                }
            );

            if (!responsePrice.ok) {
                let errorMessage = `Price API returned ${responsePrice.status}`;
                try {
                    const errJson = await responsePrice.json();
                    if (errJson?.message) {
                        errorMessage += `: ${errJson.message}`;
                    }
                } catch (_){/* ignore */}
                throw new Error(errorMessage);
            }

            const priceData = await responsePrice.json();
            const price = priceData?.data?.price ?? priceData?.data?.amount ?? priceData?.price ?? 0;

            document.getElementById('totalPriceDisplay').innerText =
                parseFloat(price).toFixed(2) + ' AED';
            document.getElementById('grandTotalDisplay').innerText =
                parseFloat(price).toFixed(2) + ' AED';
            document.getElementById('price').innerText =
                parseFloat(price).toFixed(2) + ' AED';
        }

        document.addEventListener("DOMContentLoaded", async function() {

            const token = getAuthToken();
            const pendingBooking = localStorage.getItem('pending_booking');

            if (!token || !pendingBooking) return;

            const data = JSON.parse(pendingBooking);

            // 1️⃣ Set input values
            document.getElementById('pickup_location').value = data.pickup_location;
            document.getElementById('drop_location').value = data.drop_location;

            // 2️⃣ Restore coordinates
            pickupLat = data.pickup_lat;
            pickupLng = data.pickup_lng;
            dropLat = data.drop_lat;
            dropLng = data.drop_lng;

            // 3️⃣ Recalculate distance + price automatically
            try {

                const origin = pickupLat + "," + pickupLng;
                const destination = dropLat + "," + dropLng;
                callDistanceApi(origin, destination);
                localStorage.removeItem('pending_booking');

            } catch (error) {
                console.error(error);
            }
        });

        function restorePendingBooking() {

            const token = getAuthToken();
            const pendingBooking = localStorage.getItem('pending_booking');

            if (!token || !pendingBooking) return;

            const data = JSON.parse(pendingBooking);

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
            }, 500);

            localStorage.removeItem('pending_booking');
        }

        function setDropManually(lat, lng, address) {

            dropLat = lat;
            dropLng = lng;

            if (dropMarker) {
                dropMarker.setMap(null);
            }

            const position = new google.maps.LatLng(lat, lng);

            dropMarker = new google.maps.Marker({
                position: position,
                map: map,
                title: 'Drop',
                icon: {
                    url: "{{ asset('assets/images/pin.png') }}",
                    scaledSize: new google.maps.Size(30, 30)
                }
            });

            //  Info Window Add
            const dropInfoWindow = new google.maps.InfoWindow({
                content: `
            <div style="max-width:200px; font-size:13px; line-height:1.4;">
                <strong>Drop:</strong><br>
                ${address}
            </div>
        `
            });

            dropInfoWindow.open(map, dropMarker);

            document.getElementById('drop_location').value = address;

            //  If pickup also exists → fit both markers
            if (pickupMarker) {

                const bounds = new google.maps.LatLngBounds();
                bounds.extend(pickupMarker.getPosition());
                bounds.extend(position);

                map.fitBounds(bounds);

                setTimeout(() => {
                    drawRoute();
                }, 400);

            } else {

                map.panTo(position);
                map.setZoom(15);
            }
        }


        function setPickupManually(lat, lng, address) {

            pickupLat = lat;
            pickupLng = lng;

            if (pickupMarker) {
                pickupMarker.setMap(null);
            }

            const position = new google.maps.LatLng(lat, lng);

            pickupMarker = new google.maps.Marker({
                position: position,
                map: map,
                title: 'Pickup',
                icon: {
                    url: "{{ asset('assets/images/pin.png') }}",
                    scaledSize: new google.maps.Size(30, 30)
                }
            });

            const pickupInfoWindow = new google.maps.InfoWindow({
                content: `
            <div style="max-width:200px; font-size:13px; line-height:1.4;">
                <strong>Pickup:</strong><br>
                ${address}
            </div>
        `
            });

            pickupInfoWindow.open(map, pickupMarker);

            document.getElementById('pickup_location').value = address;

            map.panTo(position);
            map.setZoom(15);
        }
        async function callDistanceApi(origin, destination) {

            try {
                const token = localStorage.getItem('auth_token'); //  define

                const responseDistance = await fetch(
                    `${PRICE_API_BASE_URL}/v1/customer/distance?origin=${encodeURIComponent(origin)}&destination=${encodeURIComponent(destination)}&traffic_model=best_guess`, {
                        method: 'GET',
                        headers: {
                            'Accept': 'application/json',
                            ...(token ? {
                                'Authorization': 'Bearer ' + token
                            } : {})
                        }
                    }
                );

                const data = await responseDistance.json(); //  ONLY ONCE
                console.log("Distance API Response:", data);

                if (!responseDistance.ok) {
                    console.log("Distance API HTTP error:", responseDistance.status, data);
                    return;
                }

                const result = data?.rows?.[0]?.elements?.[0];

                //  status check (Google returns "OK" / "ZERO_RESULTS")
                if (!result || result.status !== 'OK') {
                    console.log("Distance API element error:", result);
                    return;
                }

                const kmText = result.distance?.text || ''; // e.g. "149 km"
                const minutes = result.duration_in_traffic?.text || result.duration?.text || '';

                //  best: use meters if available
                let kmsNumber = null;
                if (typeof result.distance?.value === 'number') {
                    kmsNumber = result.distance.value / 1000; // meters -> km
                } else {
                    // fallback: parse from text
                    kmsNumber = parseFloat(kmText.replace(/[^\d.]/g, ""));
                }

                // UI update
                const distanceEl = document.getElementById("distance");
                const minutesEl = document.getElementById("minutes");
                if (distanceEl) distanceEl.innerText = kmText || (kmsNumber?.toFixed(2) + " km");
                if (minutesEl) minutesEl.innerText = minutes;

                //  price calculation
                if (kmsNumber !== null && !Number.isNaN(kmsNumber)) {
                    const token = getAuthToken();
                    if (!token) {

                        localStorage.setItem('pending_booking', JSON.stringify({
                            pickup_location: pickupElement.value,
                            drop_location: dropElement.value,
                            pickup_lat: pickupLat,
                            pickup_lng: pickupLng,
                            drop_lat: dropLat,
                            drop_lng: dropLng,
                            km: kms,
                            timestamp: Date.now()
                        }));

                        window.location.href = "{{ route('login') }}";
                        return;
                    }
                    await calculateFinalPrice(kmsNumber, token, minutes);
                    localStorage.removeItem('pending_booking'); //  clear after success
                } else {
                    console.log("Could not parse distance:", kmText, result.distance);
                }

            } catch (e) {
                console.error("Distance API call failed:", e);
            }
        }
    </script>
@endpush
