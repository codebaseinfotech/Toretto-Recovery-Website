@extends('layouts.main')

@section('title')
    24/7 Towing Service in Dubai | Fast, Insured Vehicle Recovery Experts
@endsection

@section('meta_description')
    Stuck on the road? Our emergency towing service in Dubai offers 24/7 rapid arrival, expert handling, and zero-damage
    recovery—call now for help.
@endsection

@section('meta_keywords', '24/7 Towing Service in Dubai, Emergency Car Recovery Dubai, Roadside Assistance UAE')

@section('head')
    @verbatim
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Vehicle Towing Service",
  "provider": {
    "@type": "LocalBusiness",
    "name": "Toretto Recovery"
  },
  "areaServed": {
    "@type": "AdministrativeArea",
    "name": "Dubai"
  },
  "availableChannel": {
    "@type": "ServiceChannel",
    "serviceLocation": {
      "@type": "Place",
      "name": "Dubai"
    }
  },
  "description": "Professional 24/7 towing service in Dubai for cars, luxury vehicles, sports cars, motorcycles, SUVs, and commercial vehicles. Serving highways, homes, offices, basements, and off-road locations."
}
</script>
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How much does towing cost in Dubai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Towing costs depend on distance, vehicle type, and location. We provide clear pricing before dispatch."
      }
    },
    {
      "@type": "Question",
      "name": "Can you tow luxury or sports cars safely?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We use flatbed towing and specialized equipment designed for luxury and sports vehicles."
      }
    },
    {
      "@type": "Question",
      "name": "Do you tow from basement parking?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We regularly recover vehicles from basement and low-clearance parking areas across Dubai."
      }
    },
    {
      "@type": "Question",
      "name": "Is your towing service available 24/7?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Our towing and recovery service operates 24 hours a day, 7 days a week."
      }
    }
  ]
}
</script>
    @endverbatim
@endsection

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
    <section class="site-breadcrumb contact-section" style="background: url('{{ asset('assets/images/slider-2.jpg') }}');">

        <div class="container">
            <div class="row align-items-center min-vh-75">

                <!-- LEFT TEXT (CENTERED) -->
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="contact-img text-start text-white">

                        <h1 class="breadcrumb-title wow animate__animated animate__fadeInDown">
                            <span>24/7 Towing Service in Dubai</span> — Fast, Safe & Always Available
                        </h1>

                        <ul class="breadcrumb-menu">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                                <i class="fa fa-angle-double-right"></i>
                            </li>
                            <li class="active">Towing Service Dubai</li>
                        </ul>

                        <h2 class="mt-3 breadcrumb-subtitle text-white">
                            Day or night, accident or breakdown, Toretto Recovery is here to help.
                            Our professional towing team is available 24/7 to recover your vehicle safely
                            anywhere in Dubai.
                        </h2>

                        <div class="hero-btn mt-4">
                            <a href="{{ route('book.now') }}" target="_blank" class="theme-btn">
                                Book Now <i class="fas fa-arrow-right-long"></i>
                            </a>
                            <a href="tel:+971523003423" class="theme-btn theme-btn2">
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

                            <input type="hidden" name="type" value="Towing Service in Dubai Inquiry">

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


    <section class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="about-right wow animate__animated animate__fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline"><i class="fa-solid fa-car"></i>Towing Service</span>
                            <h2 class="site-title">Fast, <span>Safe & City-Wide</span> Vehicle Recovery</h2>
                        </div>
                        <p> When your vehicle stops unexpectedly, every minute counts. Whether it's a breakdown, accident,
                            or a
                            car that won't start at home or the office, Toretto Recovery is your trusted towing partner in
                            Dubai. With 24/7 towing service across all neighborhoods, we get you and your vehicle safely to
                            your
                            preferred location—fast, professional, and stress-free.</p>

                        <a href="{{ route('book.now') }}" target="_blank" class="theme-btn mt-2">Book Now<i
                                class="fa-solid fa-arrow-right-long"></i></a>
                        <a href="tel:+971 523003423" class="theme-btn mt-2"> Call Now<i
                                class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 imagebag">
                    <div class="about-left wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/tow-truck-with-broken-car.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="recovery-cta-wrapper">
        <div class="container-fluid cta-wrapper p-0">
            <div class=" container wow fadeInUp">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cta-content" style="text-align: center;">
                            <h2 class="site-title" style="color: #ffffff !important;">Our Expertise – Professional <span>
                                    Towing </span>Solutions </h2>
                            <p class="text-gray-p mt-2">
                                At Toretto Recovery, no two towing situations are the same. From roadside breakdowns to
                                off-road emergencies, our service is designed around real driver problems.
                            </p>
                            <p class="text-gray-p">
                                We tow all vehicle types—from standard sedans to high-end sports cars, SUVs, motorcycles,
                                and light commercial vehicles—using modern flatbeds, recovery trucks, and specialized towing
                                equipment. Our operators are fully trained, certified, and insured to handle any situation
                                safely and efficiently.
                            </p>
                            <a href="{{ route('book.now') }}" target="_blank" class="theme-btn mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="core-values">
        <div class="container">
            <div class="row">

                <!-- LEFT IMAGES -->
                <div class="col-lg-6 wow fade-in-left-20">
                    <div class="core-value-images">
                        <img src="{{ asset('assets/images/nearest-towing-service-in-dubai.jpg') }}" class="main-img img"
                            style="border-radius: 10px;" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow animate__animated animate__fadeInRight" data-wow-delay=".25s">
                        <span class="service-tag">With professional Expert Recovery Team</span>
                        <div class="site-heading mb-3">
                            <h2 class="site-title">All Vehicles <span>We Tow</span> </h2>
                        </div>

                        <ul class="service-list">
                            <li>Standard sedans and hatchbacks</li>
                            <li>Luxury and sports cars (Ferrari, Lamborghini, Porsche, McLaren, Bentley)</li>
                            <li>SUVs, 4x4s, and off-road models</li>
                            <li>Electric and hybrid vehicles</li>
                            <li>Motorcycles and superbikes</li>
                            <li>Vans, pickups, and light commercial vehicles</li>
                        </ul>
                        <p>
                            Every <a href="https://torettorecovery.ae/" target="_blank" class="site-title-tagline">
                                <span>vehicle
                                    recovery services</span></a> is assessed before towing to ensure the correct method
                            is
                            used, preventing damage and guaranteeing safe transportation.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="recovery-cta-wrapper recovery-cta-wrapper-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cta-content">
                        <h1 class="site-title">Sports & Luxury Vehicles Need <span>Specialist</span>Towing
                        </h1>

                        <p class="text-gray-p">
                            High-performance vehicles require extra care due to :
                        </p>

                        <div class="recovery-list">
                            <ul>
                                <li><img src="{{ asset('assets/images/Frame (14).png') }}" alt=""> Extremely low
                                    ground clearance </li>
                                <li><img src="{{ asset('assets/images/Frame (14).png') }}" alt=""> Sensitive
                                    suspension systems
                                </li>

                            </ul>
                            <div class="divider"></div>
                            <ul>
                                <li><img src="{{ asset('assets/images/Frame (14).png') }}" alt=""> Carbon fiber
                                    or
                                    composite components
                                </li>
                                <li><img src="{{ asset('assets/images/Frame (14).png') }}" alt=""> High resale
                                    and
                                    repair value
                                </li>
                            </ul>
                        </div>
                        <p class="text-gray-p">We use flatbed towing, soft straps, and angle-controlled loading, ensuring
                            zero-contact damage. Your car
                            is transported exactly as recommended by manufacturers.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-img-recover">
                    <img src="{{ asset('assets/images/Emergency Towing Toronto - Towing.jpeg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="about-right wow animate__animated animate__fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <h2 class="site-title">Expertise Backed by <span>Safety</span></h2>
                        </div>
                        <p class="mb-3">Safety is our top priority in every towing and recovery job. From the moment we
                            assess your
                            vehicle to secure loading and final delivery, we follow strict safety procedures to protect your
                            vehicle, our operators, and everyone on the road. Using certified professionals, modern
                            equipment, and proven recovery methods, we ensure every tow is handled carefully, responsibly,
                            and without risk—because your safety always comes before speed.</p>

                    </div>
                </div>
                <div class="col-lg-6 imagebag">
                    <div class="about-left wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/recoverytowingservice.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-area">
        <div class="container">
            <div class="row align-items-center">


                <div class="col-lg-6 imagebag">
                    <div class="about-left wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/toretto-recovery-towing -service-in-dubai.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow animate__animated animate__fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <h2 class="site-title">Common Reasons <span>Drivers</span> Call Us</h2>
                        </div>
                        <p>Extreme heat, busy roads, and long highway drives in Dubai often turn minor vehicle issues into
                            stressful situations far sooner than expected. In these moments, drivers commonly face problems
                            such as:</p>
                        <ul class="service-list">
                            <li>Engine or gearbox breaking down and leaving your car stuck on the road</li>
                            <li>Battery dying suddenly or electrical parts not working properly</li>
                            <li>Flat tires or tires getting damaged from heat and rough surfaces</li>
                            <li>Engine getting too hot and stopping</li>
                            <li>Cars getting stuck in sand, desert areas, or squeezed into parking spots</li>
                            <li>Vehicles refusing to start when parked at home, work, or shopping areas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-right wow animate__animated animate__fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <h2 class="site-title">Everyday Incidents <span>We</span> Handle </h2>
                        </div>
                        <ul class="toretto-recovery-list">
                            <li><b>Vehicle accident recovery:</b> From minor fender-benders to major collisions, we safely
                                remove
                                and transport vehicles</li>
                            <li><b>Engine or gearbox failures:</b> Towed without causing further damage using modern
                                equipment.
                            </li>
                            <li><b>Battery or electrical faults:</b> Quick jump-starts or towing to garages.</li>
                            <li><b>Flat tyres &amp; fuel run-outs:</b> Immediate response with tools and fuel.</li>
                            <li><b>Overheating engines:</b> Safe recovery before further damage occurs.</li>
                            <li><b>Off-road or desert recovery:</b> Specialized equipment for sand, desert trails, or
                                inaccessible
                                areas.</li>
                            <li>Vehicles that won't start at home, office, or malls: Fast and reliable towing to your
                                preferred destination.</li>
                        </ul>
                        <p class="mb-3">Every situation is handled with care, speed, and professional expertise, keeping
                            your vehicle and
                            schedule safe.</p>
                    </div>
                </div>

                <div class="col-lg-6 imagebag">
                    <div class="about-left wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/cartowingservice.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="service-info">
        <div class="container">
            <h2 class="service-title"><span>Convenient Location-Based Towing</span></h2>

            <p>
                Your convenience is our priority. We tow vehicles anywhere in Dubai, including home, office, garage, malls,
                and hard-to-access locations. Our trained, insured operators use modern equipment to handle every vehicle
                safely.
            </p>
            <p>Request Towing at Your Location</p>
            <a href="{{ route('book.now') }}" target="_blank" class="theme-btn mt-2">Book Now<i
                    class="fa-solid fa-arrow-right-long"></i></a>
        </div>
    </section>

    <section class="dubai-coverage">
        <div class="container">

            <h3>Dubai Locations We Serve</h3>

            <div class="coverage-wrap">

                <!-- Locations -->
                <div class="coverage-list">
                    <span>Deira</span>
                    <span>Bur Dubai</span>
                    <span>Downtown Dubai</span>
                    <span>Business Bay</span>

                    <span>Dubai Marina</span>
                    <span>JLT & JBR</span>
                    <span>Palm Jumeirah</span>
                    <span>Jumeirah 1, 2 & 3</span>

                    <span>Al Barsha</span>
                    <span>Al Quoz</span>
                    <span>Dubai Silicon Oasis</span>
                    <span>International City</span>

                    <span>DIP & Jebel Ali</span>
                    <span>Dubai Hills</span>
                    <span>Arabian Ranches</span>
                    <span>Motor City</span>
                    <span>Sports City</span>
                </div>

                <!-- Map -->
                <div class="coverage-map">
                    <iframe
                        src="https://www.google.com/maps?q=Deira+Dubai|Bur+Dubai|Downtown+Dubai|Business+Bay|Dubai+Marina|JLT|JBR|Palm+Jumeirah|Jumeirah|Al+Barsha|Al+Quoz|Dubai+Silicon+Oasis|International+City|Jebel+Ali|Dubai+Hills|Arabian+Ranches|Motor+City|Sports+City&output=embed"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>
        </div>
    </section>

    <section class="towing-locations">
        <div class="container">
            <div class="towing-grid">
                <div class="towing-image">
                    <img src="{{ asset('assets/images/toretto-recovery-towing -service-in-dubai.jpg') }}"
                        alt="Special Location Towing">
                </div>
                <div class="towing-text">
                    <h2 style="color: #ffffff">Off-Road, On-Road & Special Location Towing</h2>
                    <h3>We Recover Vehicles From:</h3>

                    <ul class="towing-list">
                        <li>Highways and express roads</li>
                        <li>City streets</li>
                        <li>Desert and sand areas</li>
                        <li>Basement and underground parking</li>
                        <li>Residential villas</li>
                        <li>Office and mall parking</li>
                        <li>Garages and workshops</li>
                        <li>Accident scenes</li>
                    </ul>

                    <p class="towing-note">
                        No matter how difficult the location, our experience, advanced tools,
                        and expert operators ensure safe and damage-free recovery.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="about-right wow animate__animated animate__fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <h2 class="site-title"> <span>Our Towing</span> Process – Simple, Clear, Stress-Free </h2>
                        </div>
                        <h3 class="mb-3">Step-by-Step Assistance:</h3>
                        <ul class="toretto-recovery-list">
                            <li>Call or WhatsApp us </li>
                            <li>Share your live location</li>
                            <li>We dispatch the correct tow truck</li>
                            <li>Vehicle inspection and secure loading.</li>
                            <li>Delivery to home, garage, or desired destination.</li>
                        </ul>
                        <a href="tel:+971 523003423" class="theme-btn ">Call Now<i
                                class="fas fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class=" wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/tow-truck-near-me.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-choose-premium" style="padding-top: 10px">
        <div class="container">

            <div class="why-wrap">

                <!-- LEFT CONTENT -->
                <div class="why-left">
                    <h2>Why <span>Choose Us</span></h2>
                    <p>
                        Trust is not claimed — it is proven through consistent action,
                        precision handling, and professional responsibility on every recovery.
                    </p>
                </div>
                <div class="why-right">

                    <div class="why-line"></div>

                    <div class="why-point">
                        <span></span>
                        <p>5+ years of towing & recovery experience across Dubai</p>
                    </div>

                    <div class="why-point">
                        <span></span>
                        <p>1,000+ successful towing and recovery operations completed</p>
                    </div>

                    <div class="why-point">
                        <span></span>
                        <p>Fully insured & certified operators trained in flatbed & emergency recovery</p>
                    </div>

                    <div class="why-point">
                        <span></span>
                        <p>Modern flatbed & recovery trucks for zero-damage towing</p>
                    </div>

                    <div class="why-point">
                        <span></span>
                        <p>Fast response with real-time coordination & live updates</p>
                    </div>

                    <div class="why-point">
                        <span></span>
                        <p>Towing from any location: home, office, highway, basement, desert or accident site</p>
                    </div>

                    <div class="why-point highlight">
                        <span></span>
                        <p>Trusted by private drivers, families, commuters & businesses across Dubai</p>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="service-faq">
        <div class="container">

            <h2 class="text-center service-title">Frequently <span>Asked</span> Questions</h2>

            <div class="faq-grid">

                <div class="faq-card">
                    <h4>How much does towing cost in Dubai?</h4>
                    <p>Pricing depends on distance, vehicle type, and location. We provide clear upfront pricing before
                        dispatch.</p>
                </div>

                <div class="faq-card">
                    <h4>Can you tow sports cars safely?</h4>
                    <p>Yes. Our specialized flatbed towing ensures luxury and sports vehicles remain damage-free.</p>
                </div>

                <div class="faq-card">
                    <h4>Do you tow from basement parking?</h4>
                    <p>Absolutely. We handle low-clearance and tight-space recoveries daily.</p>
                </div>

                <div class="faq-card">
                    <h4>Are you available at night?</h4>
                    <p>Yes. 24/7 towing services operate day and night across Dubai.</p>
                </div>

                <div class="faq-card">
                    <h4>Do you offer long-distance towing?</h4>
                    <p>Yes. We can tow across Dubai and beyond, whenever required.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="emergency-cta">
        <div class="container">

            <div class="cta-box">

                <div class="cta-text">
                    <h2>Emergency? Don't Stay Stranded</h2>
                    <p class="cta-sub">
                        Fast response. Safe handling. Real support — when you need it most.
                    </p>
                </div>

                <div class="cta-actions header-actions d-flex align-items-center gap-3">
                    <a href="tel:+971523003423" class="theme-btn">
                        Call Now
                    </a>
                    <a href="{{ route('contact') }}" target="_blank" class="theme-btn theme-btn2">
                        Get Guidance
                    </a>
                </div>

            </div>

        </div>
    </section>

    <link rel="stylesheet" href="{{ asset('assets/css/service.css') }}">
@endsection
