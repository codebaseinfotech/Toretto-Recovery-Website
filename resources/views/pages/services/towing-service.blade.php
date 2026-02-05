@extends('layouts.main')

@section('title', 'Towing Service | 24/7 Car Recovery Dubai')

@section('content')

    {{-- BREADCRUMB --}}
    <section class="site-breadcrumb" style="background: url('{{ asset('assets/images/contact-bg.jpg') }}');">
        <div class="container">
            <h2 class="breadcrumb-title">Towing Service</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </li>
                <li class="active">Towing Service</li>
            </ul>
        </div>
    </section>

    <section class="service-detail">
        <div class="container">
            <div class="service-row">

                <!-- LEFT CONTENT -->
                <div class="service-left">
                    <span class="service-tag">24/7 TOWING SERVICE</span>

                    <h1 class="service-title">
                        Professional Car <span>Towing</span> in Dubai
                    </h1>

                    <p>
                        Our towing service in Dubai is designed to provide fast, secure,
                        and damage-free vehicle transportation. Whether your car has
                        broken down, met with an accident, or needs relocation, our
                        expert team is available 24/7.
                    </p>

                    <ul class="service-list">
                        <li>Flatbed towing for all vehicle types</li>
                        <li>Luxury & sports car towing</li>
                        <li>Accident & emergency recovery</li>
                        <li>Basement & underground parking recovery</li>
                        <li>24/7 rapid response across Dubai</li>
                    </ul>
                    <a href="tel:+971 523003423" class="theme-btn">Call Now for Towing</a>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="service-right">
                    <img src="{{ asset('assets/images/towing-service.jpeg') }}" alt="Professional Towing Service Dubai">
                </div>

            </div>
        </div>
    </section>
    <section class="service-info">
        <div class="container">
            <h2 class="service-title"><span>Why Choose Our Towing Service?</span></h2>

            <p>
                We understand how stressful vehicle breakdowns can be.
                Our trained towing professionals ensure safe loading,
                secure transportation and timely delivery of your vehicle.
            </p>

            <p>
                Whether it’s a luxury car, sports vehicle, SUV or bike,
                we use modern flatbed and recovery equipment to guarantee
                damage-free towing every time.
            </p>
        </div>
    </section>
    <section class="service-detail">
        <div class="container">
            <div class="service-row">

                <!-- LEFT IMAGE -->
                <div class="service-left">
                    <img src="{{ asset('assets/images/towing-service-2.jpeg') }}" alt="Professional Towing Service Dubai">

                    <!-- NEW DIGITAL INFO -->
                    <div class="service-stats">
                        <div class="stat-box">
                            <h3>24/7</h3>
                            <span>Availability</span>
                        </div>
                        <div class="stat-box">
                            <h3>15min</h3>
                            <span>Avg Arrival</span>
                        </div>
                        <div class="stat-box">
                            <h3>100%</h3>
                            <span>Safe Towing</span>
                        </div>
                    </div>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="service-right">
                    <span class="service-tag">24/7 TOWING SERVICE</span>

                    <h1 class="service-title">
                        Professional Car <span>Towing</span> in Dubai
                    </h1>

                    <p>
                        Our towing service in Dubai provides fast, secure and
                        damage-free vehicle transportation for all car types.
                    </p>

                    <ul class="service-list">
                        <li>Flatbed towing for all vehicles</li>
                        <li>Luxury & sports car handling</li>
                        <li>Accident & emergency recovery</li>
                        <li>Basement & underground recovery</li>
                        <li>24/7 rapid response across Dubai</li>
                    </ul>

                    <a href="tel:+971523003423" style="display:inline-block; position:relative; z-index:10;" class="theme-btn ">
                        Call Now for Towing
                    </a>
                </div>

            </div>
        </div>
    </section>
    <section class="service-faq">
        <div class="container">

            <h2 class="text-center service-title">Frequently <span>Asked</span> Questions</h2>

            <div class="faq-grid">

                <div class="faq-card">
                    <h4>Is your towing service available 24/7?</h4>
                    <p>Yes, we operate 24/7 across all areas of Dubai.</p>
                </div>

                <div class="faq-card">
                    <h4>Do you tow luxury & sports cars?</h4>
                    <p>Absolutely! We specialize in luxury and low-clearance vehicles.</p>
                </div>

                <div class="faq-card">
                    <h4>How fast is your response time?</h4>
                    <p>Usually within 30 minutes depending on your location.</p>
                </div>

                <div class="faq-card">
                    <h4>Is basement recovery possible?</h4>
                    <p>Yes, we have equipment suitable for underground parking recovery.</p>
                </div>

            </div>
        </div>
    </section>
    <link rel="stylesheet" href="{{ asset('assets/css/service.css') }}">
@endsection
