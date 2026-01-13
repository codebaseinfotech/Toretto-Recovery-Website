@extends('layouts.main')

@section('title', 'Home')

@section('content')

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
                    <div class="owl-stage" style="transform: translate3d(-3750px, 0px, 0px); transition: 0.25s; width: 7500px;">
                        <div class="owl-item" style="width: 1250px;">
                            <div class="hero-single" style="background: url('{{ asset('assets/images/slider-2.jpg') }}');">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 col-lg-7">
                                            <div class="hero-content">
                                                <h6 class="hero-sub-title wow animate__animated animate__fadeInDown" data-wow-delay="0.25s">
                                                    <i class="fa-solid fa-car"></i>Welcome To Toretto Recovery
                                                </h6>
                                                <h1 class="hero-title wow animate__animated animate__fadeInRight" data-wow-delay="0.25s">Fast &amp; Reliable  
                                                <span>Car Recovery </span>in Dubai – Available 24/7
                                                </h1>
                                                <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.25s">
                                                    Stuck on the road? Toretto Recovery delivers quick, safe, and professional vehicle recovery and towing services anywhere in Dubai
                                                </p>
                                                <div class="hero-btn wow animate__animated animate__fadeInUp" data-animation="fadeInUp" style="animation-delay: 1s;">
                                                    <a href="{{ route('book.now') }}" class="theme-btn">Book Now<i class="fas fa-arrow-right-long"></i></a>
                                                    <a href="tel:+971 52 225 5021" class="theme-btn theme-btn2">Call / WhatsApp<i class="fas fa-arrow-right-long"></i></a>
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
                                                <h6 class="hero-sub-title wow animate__animated animate__fadeInDown" data-wow-delay="0.25s">
                                                    <i class="fa-solid fa-car"></i>Welcome To Toretto Recovery
                                                </h6>
                                                <h1 class="hero-title wow animate__animated animate__fadeInRight" data-wow-delay="0.25s">Breakdown  <span>Recovery</span> In Dubai
                                                </h1>
                                                <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.25s">
                                                    From breakdowns to battery issues or accidents, we ensure safe and effective recovery support across all Dubai locations.
                                                </p>
                                                <div class="hero-btn wow animate__animated animate__fadeInUp" data-animation="fadeInUp" style="animation-delay: 1s;">
                                                    <a href="{{ route('book.now') }}" class="theme-btn">Book Now<i class="fas fa-arrow-right-long"></i></a>
                                                    <a href="tel:+971 52 225 5021" class="theme-btn theme-btn2">Call / WhatsApp<i class="fas fa-arrow-right-long"></i></a>
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
                                                <h6 class="hero-sub-title wow animate__animated animate__fadeInDown" data-wow-delay="0.25s">
                                                    <i class="fa-solid fa-car"></i>Welcome To Toretto Recovery
                                                </h6>
                                                <h1 class="hero-title wow animate__animated animate__fadeInRight" data-wow-delay="0.25s">Fast &amp; Reliable  
                                                <span>Car Recovery </span>in Dubai – Available 24/7
                                                </h1>
                                                <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.25s">
                                                    Stuck on the road? Toretto Recovery delivers quick, safe, and professional vehicle recovery and towing services anywhere in Dubai
                                                </p>
                                                <div class="hero-btn wow animate__animated animate__fadeInUp" data-animation="fadeInUp">
                                                    <a href="{{ route('book.now') }}" class="theme-btn">Book Now<i class="fas fa-arrow-right-long"></i></a>
                                                    <a href="tel:+971 52 225 5021" class="theme-btn theme-btn2">Call / WhatsApp<i class="fas fa-arrow-right-long"></i></a>
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
                                                <h6 class="hero-sub-title wow animate__animated animate__fadeInDown" data-wow-delay="0.25s">
                                                    <i class="fa-solid fa-car"></i>Welcome To Toretto Recovery
                                                </h6>
                                                <h1 class="hero-title wow animate__animated animate__fadeInRight" data-wow-delay="0.25s">Breakdown  <span>Recovery</span> In Dubai
                                                </h1>
                                                <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.25s">
                                                    From breakdowns to battery issues or accidents, we ensure safe and effective recovery support across all Dubai locations.
                                                </p>
                                                <div class="hero-btn wow animate__animated animate__fadeInUp" data-animation="fadeInUp" style="animation-delay: 1s;">
                                                    <a href="{{ route('book.now') }}" class="theme-btn">Book Now<i class="fas fa-arrow-right-long"></i></a>
                                                    <a href="tel:+971 52 225 5021" class="theme-btn theme-btn2">Call / WhatsApp<i class="fas fa-arrow-right-long"></i></a>
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
                                                <h6 class="hero-sub-title wow animate__animated animate__fadeInDown" data-wow-delay="0.25s">
                                                    <i class="fa-solid fa-car"></i>Welcome To Toretto Recovery
                                                </h6>
                                                <h1 class="hero-title wow animate__animated animate__fadeInRight" data-wow-delay="0.25s">Fast &amp; Reliable  
                                                <span>Car Recovery </span>in Dubai – Available 24/7
                                                </h1>
                                                <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.25s">
                                                    Stuck on the road? Toretto Recovery delivers quick, safe, and professional vehicle recovery and towing services anywhere in Dubai
                                                </p>
                                                <div class="hero-btn wow animate__animated animate__fadeInUp" data-animation="fadeInUp">
                                                    <a href="{{ route('book.now') }}" class="theme-btn">Book Now<i class="fas fa-arrow-right-long"></i></a>
                                                    <a href="tel:+971 52 225 5021" class="theme-btn theme-btn2">Call / WhatsApp<i class="fas fa-arrow-right-long"></i></a>
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
                                                <h6 class="hero-sub-title wow animate__animated animate__fadeInDown" data-wow-delay="0.25s">
                                                    <i class="fa-solid fa-car"></i>Welcome To Toretto Recovery
                                                </h6>
                                                <h1 class="hero-title wow animate__animated animate__fadeInRight" data-wow-delay="0.25s">Breakdown  <span>Recovery</span> In Dubai
                                                </h1>
                                                <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.25s">
                                                    From breakdowns to battery issues or accidents, we ensure safe and effective recovery support across all Dubai locations.
                                                </p>
                                                <div class="hero-btn wow animate__animated animate__fadeInUp" data-animation="fadeInUp" style="animation-delay: 1s;">
                                                    <a href="{{ route('book.now') }}" class="theme-btn">Book Now<i class="fas fa-arrow-right-long"></i></a>
                                                    <a href="tel:+971 52 225 5021" class="theme-btn theme-btn2">Call / WhatsApp<i class="fas fa-arrow-right-long"></i></a>
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
                    <div class="col-lg-6">
                        <div class="about-left wow animate__animated animate__fadeInLeft">
                            <div class="about-img">
                                <img src="{{ asset('assets/images/01.jpg') }}" alt="">
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
                    <div class="col-lg-6">
                        <div class="about-right wow animate__animated animate__fadeInRight" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline"><i class="fa-solid fa-car"></i>About Us</span>
                                <h2 class="site-title">Toretto Recovery    <span>– Dubai’s Trusted</span> Car Recovery Experts
                                </h2>
                            </div>
                            <p class="about-text text-justify">
                                Based in Dubai Investment Park 2, Toretto Recovery provides reliable vehicle towing and roadside assistance with a modern fleet of 6 advanced recovery trucks. Our team ensures safe, fast, and affordable solutions across Dubai.

                            </p>
                            <p class="about-text text-justify">
                                We handle accidents, breakdowns, flat tyres, battery failures, off-road pulls &amp; emergency rescues.
                            </p>
                            <a href="{{ route('about') }}" class="theme-btn mt-4">Read More<i class="fa-solid fa-arrow-right-long"></i></a>
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
                            <h2 class="site-title text-white">Car  <span>Recovery </span>Services</h2>
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
                        <h2 class="site-title">Why choose  <span>Toretto </span>Recovery</h2>
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
                            <img src="{{ asset('assets/images/Affordable-Transparent-Pricing.png') }}" alt="Affordable & Transparent Pricing">
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
                            <img src="{{ asset('assets/images/Professional-Certified-Team.png') }}" alt="Professional & Certified Team">
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
                            <img src="{{ asset('assets/images/Safe-Secure-Towing.png') }}" alt="Safe, Secure & Damage-Free Towing">
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
                                Dubai Investment Park (DIP) • Jebel Ali • Dubai South • Marina • Motor City • Sports City • JVC • JVT • Jumeirah Park • Discovery Gardens • Damac Hills • Dubai Islands &amp; more.
                            </p>
                            <div class="cta-btn">
                                <a href="{{ route('contact') }}" class="theme-btn">Contact Us Now<i class="fas fa-arrow-right-long"></i></a>
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
                        <p>Submit your request instantly through call or WhatsApp.</p>
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
                                From everyday cars to high-end luxury vehicles, we provide safe, reliable, and professional recovery services. Our expert team ensures damage-free transport using modern recovery equipment.
                            </p>
                            <div class="recovery-list">
                                <ul>
                                <li><img src="{{ asset('assets/images/Frame (14).png') }}" alt=""> Sedans </li>
                                <li><img src="{{ asset('assets/images/Frame (14).png') }}" alt=""> SUVs & 4x4</li>
                                <li><img src="{{ asset('assets/images/Frame (14).png') }}" alt=""> Pickup Trucks</li>
                                <li><img src="{{ asset('assets/images/Frame (14).png') }}" alt=""> Sports Cars</li>
                                </ul>
                                <div class="divider"></div>
                                <ul>
                                <li><img src="{{ asset('assets/images/Frame (14).png') }}" alt=""> Luxury Vehicles</li>
                                <li><img src="{{ asset('assets/images/Frame (14).png') }}" alt=""> Vans & Commercial Vehicles</li>
                                <li><img src="{{ asset('assets/images/Frame (14).png') }}" alt=""> Motorcycles</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-img-recover">
                        <img src="{{ asset('assets/images/recover.png') }}" alt="">
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
                        <div class="testimonial-img tm-img-2"><img src="{{ asset('assets/images/member-1.png') }}" alt=""></div>
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