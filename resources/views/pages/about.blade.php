@extends('layouts.main')

@section('title', 'About Us | Car Recovery Dubai | 24/7 Towing & Roadside Assistance UAE')

@section('content')

{{-- SITE BREADCRUMB SECTION --}}
<section class="site-breadcrumb" style="background: url('{{ asset('assets/images/contact-bg.jpg') }}');">
        <div class="container">
            <h2 class="breadcrumb-title">About Us</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </li>
                <li class="active">About Us</li>
            </ul>
        </div>
</section>

{{-- WHO WE ARE --}}
<section class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 imagebag">
                    <div class="about-left wow fade-in-left-20">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/01.jpg') }}" alt="">
                        </div>
                        <div class="about-experience">
                            <div class="about-experience-icon">
                                <i class="fa fa-car"></i>
                            </div>
                            <b class="text-start">10+ Years Of
                                <br>
                                Quality Service</b>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow fade-in-right-20">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline"><i class="fa fa-car"></i>About Us Toretto Recovery</span>
                            <h2 class="site-title">Who  <span>We Are</span> </h2>
                        </div>
                        <p class="about-text text-justify">
                            At Toretto Recovery, we specialize in providing fast, secure, and damage-free vehicle recovery services for all types of cars—from sedans and SUVs to luxury and high-performance vehicles.
                        Based in Dubai, our fleet includes 6 fully equipped recovery trucks, enabling us to offer immediate assistance anywhere in Dubai.
                        </p>
                        <p class="about-text text-justify">
                            With professional drivers, trained recovery technicians, and a commitment to top-quality service, we make sure your vehicle is handled with utmost care and precision.
                        Whether your car is stuck in sand, a basement parking, on a busy highway, or after an accident—our team is always ready to help.
                        </p>
                    </div>
                </div>
            </div>
        </div>
</section>

{{-- OUR VISION --}}
<section class="our-vision">
        <div class="container">
            <div class="row">

                <!-- LEFT CONTENT -->
                <div class="col-lg-6 wow fade-in-left-20">
                    <div class="vision-text">
                        <h2 class="site-title">Our <span>Vision</span></h2>
                        <p>
                            To become Dubai’s most trusted and customer-focused vehicle recovery service by delivering safe, fast, and transparent assistance at all times. We aim to provide reliable solutions through skilled professionals, modern equipment, and a strong commitment to customer satisfaction, ensuring every vehicle is handled with care, efficiency, and complete peace of mind anytime, anywhere across Dubai.
                        </p>

                        <ul class="vision-list">
                            <li>Provide fast and reliable vehicle recovery across Dubai</li>
                            <li>Ensure maximum safety and damage-free vehicle handling</li>
                            <li>Deliver transparent pricing with no hidden charges</li>
                            <li>Build long-term trust through professional service</li>
                            <li>Continuously improve with modern technology and equipment</li>
                        </ul>
                    </div>
                </div>

                <!-- RIGHT IMAGES -->
                <div class="col-lg-6 wow fade-in-right-20">
                    <div class="vision-images">
                        <img src="{{ asset('assets/images/vision.png') }}" class="main-img" alt="">
                    </div>
                </div>

            </div>
        </div>
</section>

{{-- OUR COMMITMENT --}}
<section class="service-area2 bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading text-center">
                        <h2 class="site-title">Our <span>Commitment</span> </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="service-item wow fade-in-up-20">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/bulb.png') }}" alt="">
                        </div>
                        <div class="service-content new-content">
                            <h3 class="service-title">Fast Arrival Guarantee </h3>
                            <p> We respond quickly—no matter where you are in Dubai. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item wow fade-in-down-20">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/bulb.png') }}" alt="">
                        </div>
                        <div class="service-content new-content">
                            <h3 class="service-title">Dedicated Support </h3>
                            <p> Our trained professionals handle all vehicle types, including luxury & sports cars. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item wow fade-in-up-20">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/bulb.png') }}" alt="">
                        </div>
                        <div class="service-content new-content">
                            <h3 class="service-title">Safety First</h3>
                            <p> We use modern flatbed towing systems to ensure completely damage-free recovery. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item wow fade-in-down-20">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/bulb.png') }}" alt="">
                        </div>
                        <div class="service-content new-content">
                            <h3 class="service-title">Affordable Rates </h3>
                            <p> Transparent pricing with no hidden charges—fair and honest service every time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

{{-- TORETTO RECOVERY --}}
<section class="toretto-recovery">
        <div class="container">
            <div class="row">

                <!-- LEFT IMAGES -->
                <div class="col-lg-6 wow fade-in-left-20">
                    <div class="toretto-recovery-images">
                        <img src="{{ asset('assets/images/recovery.png') }}" class="main-img" alt="">
                    </div>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-lg-6 wow fade-in-right-20">
                    <div class="toretto-recovery-text">
                        <div class="site-heading">
                            <span class="sub-title">TORETTO RECOVERY</span>
                            <h2 class="site-title">Why Customers <span> Trust Us</span> </h2>
                        </div>

                        <ul class="toretto-recovery-list">
                            <li>24/7 service availability</li>
                            <li>Licensed & experienced recovery specialists</li>
                            <li>Expert handling for luxury, sports, and low-clearance vehicles</li>
                            <li>Professional off-road & sand recovery</li>
                            <li>Rapid response across all Dubai locations</li>
                            <li>Modern fleet of 6 advanced recovery trucks</li>
                            <li>Customer-focused, safe, and reliable service</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
</section>

{{-- OUR FLEET --}}
<section class="recovery-cta-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                        <div class="cta-content">
                            <h1 class="site-title">Our <span> Fleet</span>
                            </h1>
                            <p class="text-gray-p">
                                With a modern fleet of 6 advanced flatbed and wheel-lift recovery trucks, we can handle:
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
                            <p class="text-gray-p">
                                Each truck is equipped with safety tools and advanced systems for secure towing.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-img-recover">
                        <img src="{{ asset('assets/images/fleet.png') }}" alt="">
                    </div>
            </div>
        </div>
</section>

{{-- CORE VALUES --}}
<section class="core-values">
        <div class="container">
            <div class="row">

                <!-- LEFT IMAGES -->
                <div class="col-lg-6 wow fade-in-left-20">
                    <div class="core-value-images">
                        <img src="{{ asset('assets/images/core.png') }}" class="main-img" alt="">
                    </div>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-lg-6 wow fade-in-right-20 right-content">
                    <div class="core-values-text">
                        <div class="site-heading">
                            <h2 class="site-title">Our Core <span> Values</span> </h2>
                        </div>

                        <div class="core-values-list">
                            <!-- Item -->
                            <div class="core-value-item d-flex align-items-start gap-3">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/Reliability.png') }}" alt="">
                                </div>
                                <div class="content">
                                    <h5>Reliability</h5>
                                    <p>Always available, always ready</p>
                                </div>
                            </div>
                            <hr>

                            <!-- Item -->
                            <div class="core-value-item d-flex align-items-start gap-3">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/Safety.png') }}" alt="">
                                </div>
                                <div class="content">
                                    <h5>Safety</h5>
                                    <p>Vehicle-friendly, damage-free handling</p>
                                </div>
                            </div>
                            <hr>

                            <!-- Item -->
                            <div class="core-value-item d-flex align-items-start gap-3">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/Transparency.png') }}" alt="">
                                </div>
                                <div class="content">
                                    <h5>Transparency</h5>
                                    <p>Honest pricing & clear communication</p>
                                </div>
                            </div>
                            <hr>

                            <!-- Item -->
                            <div class="core-value-item d-flex align-items-start gap-3">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/Professionalism.png') }}" alt="">
                                </div>
                                <div class="content">
                                    <h5>Professionalism</h5>
                                    <p>Certified drivers and recovery specialists</p>
                                </div>
                            </div>
                            <hr>

                            <!-- Item -->
                            <div class="core-value-item d-flex align-items-start gap-3">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/CustomerCare.png') }}" alt="">
                                </div>
                                <div class="content">
                                    <h5>Customer Care</h5>
                                    <p>Your safety and convenience come first</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>

{{-- SERVING DUBAI --}}
<section class="serving-dubai cta-area">
        <div class="container-fluid cta-wrapper p-0">
            <div class=" container wow fadeInUp">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cta-content">
                            <h1 class="site-title">Serving All of <span>Dubai</span> </h1>
                            <p class="text-gray-p">
                                We provide complete coverage, including: Dubai Investment Park (DIP) • Jebel Ali • Dubai South • Marina • JVC • JVT • Damac Hills • Motor City • Sports City • Discovery Gardens • Production City • Dubai Islands • and every other Dubai area.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection
