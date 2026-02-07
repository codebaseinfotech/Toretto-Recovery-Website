@extends('layouts.main')

@section('title', 'Car Recovery Service in Dubai Palm Jumeirah | 24/7 Towing')

@section('content')

    {{-- BREADCRUMB --}}
    <section class="site-breadcrumb" style="background:url('{{ asset('assets/images/contact-bg.jpg') }}')">
        <div class="container">
            <h2 class="breadcrumb-title">Dubai Palm Jumeirah</h2>
            <ul class="breadcrumb-menu">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                    <i class="fa fa-angle-double-right"></i>
                </li>
                <li>
                    <a href="{{ route('home') }}">Areas We Serve</a>
                    <i class="fa fa-angle-double-right"></i>
                </li>
                <li class="active">Palm Jumeirah</li>
            </ul>
        </div>
    </section>

    <section class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <span class="badge">Areas We Serve</span>
                        <h1>Car Recovery Service<br><span>Palm Jumeirah, Dubai</span></h1>
                        <p>
                            24/7 fast & professional car recovery service in Palm Jumeirah.
                            We handle luxury cars, sports vehicles & emergency towing with care.
                        </p>

                        <div class="hero-actions d-flex gap-3 mb-2">
                            <a href="tel:+971523003423" class="theme-btn">Call Now</a>
                            <a href="{{ route('contact') }}" class="btn-outline">
                                Get Assistance
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-left wow animate__animated ">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/001.jpeg') }}" alt="">
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

            </div>
        </div>
    </section>

    <section class="area-services-new">
        <div class="container">
            <h2 class="section-title">Our Recovery Services in Palm Jumeirah</h2>

            <div class="service-grid">
                <div class="service-card">
                    <div class="service-icon">🚗</div>
                    <h3>Emergency Car Recovery</h3>
                    <p>Breakdown or accident? We reach anywhere in Palm Jumeirah within minutes.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">🏎</div>
                    <h3>Luxury & Sports Cars</h3>
                    <p>Flatbed towing for Lamborghini, Ferrari, BMW, Mercedes & more.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">🅿</div>
                    <h3>Basement Recovery</h3>
                    <p>Special equipment for underground & tight parking recoveries.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">⏱</div>
                    <h3>24/7 Availability</h3>
                    <p>Day or night, weekends & holidays — always available.</p>
                </div>
            </div>
        </div>
    </section>


    {{-- WHY US --}}
    <section class="area-why-new">
        <div class="container">
            <div class="why-grid">
                <div class="why-left">
                    <h2>Why Choose Us in <span>Palm Jumeirah</span> ?</h2>
                    <p>
                        Palm Jumeirah has luxury vehicles, hotels and underground parking.
                        Our trained recovery team ensures damage-free towing using advanced trucks.
                    </p>

                    <ul>
                        <li>✔ Fast arrival (15–30 minutes)</li>
                        <li>✔ Professional & insured drivers</li>
                        <li>✔ Affordable pricing</li>
                        <li>✔ Trusted across Dubai</li>
                    </ul>
                </div>

                <div class="why-right">
                    <div class="stat">
                        <h3>24/7</h3>
                        <span>Service</span>
                    </div>
                    <div class="stat">
                        <h3>100%</h3>
                        <span>Safe Towing</span>
                    </div>
                    <div class="stat">
                        <h3>6+</h3>
                        <span>Recovery Trucks</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="area-cta-new">
        <div class="container">
            <h2>Need Immediate Car Recovery in Palm Jumeirah?</h2>
            <p>Call now and our recovery team will reach you quickly.</p>
            <a href="tel:+971523003423" class="btn btn-book theme-btn"> +971 52 300 3423</a>
        </div>
    </section>

    <link rel="stylesheet" href="{{ asset('assets/css/areas.css') }}">
@endsection
