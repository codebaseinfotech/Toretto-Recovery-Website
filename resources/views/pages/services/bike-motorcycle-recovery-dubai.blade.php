@extends('layouts.main')

@section('title', 'Emergency Motorcycle Recovery Dubai | Highways, Desert, City — 24/7')

@section('meta_description')
    Professional motorcycle transport and emergency rescue across Dubai — sports bikes, cruisers, scooters, electric bikes,
    and delivery fleets. One call resolves everything, any hour.
@endsection

@section('meta_keywords', 'Emergency Motorcycle Recovery Dubai | Highways, Desert, City — 24/7')
@section('schema')
    @verbatim
        <script type="application/ld+json">
                                                                                                        {
                                                                                                          "@context": "https://schema.org",
                                                                                                          "@type": "FAQPage",
                                                                                                          "mainEntity": [
                                                                                                            {
                                                                                                              "@type": "Question",
                                                                                                              "name": "Do you handle motorcycle recovery differently from car recovery?",
                                                                                                              "acceptedAnswer": {
                                                                                                                "@type": "Answer",
                                                                                                                "text": "Yes. Toretto Recovery uses purpose-built motorcycle transport equipment — hydraulic tilt-decks, adjustable wheel chocks, padded frame-contact cam-straps, and manufacturer-verified loading protocols. Car recovery tools cause bodywork damage and frame stress on two-wheel vehicles. Every bike we transport is handled by specialist-trained technicians using motorcycle-specific rigs."
                                                                                                              }
                                                                                                            },
                                                                                                            {
                                                                                                              "@type": "Question",
                                                                                                              "name": "What information should I have ready when calling Toretto Recovery in Dubai?",
                                                                                                              "acceptedAnswer": {
                                                                                                                "@type": "Answer",
                                                                                                                "text": "Share your WhatsApp Live Location for fastest dispatch. Have your motorcycle make and model, the nature of the breakdown, whether injuries are involved, and your preferred delivery destination ready. Emirates ID and vehicle registration will be needed for documentation on arrival."
                                                                                                              }
                                                                                                            },
                                                                                                            {
                                                                                                              "@type": "Question",
                                                                                                              "name": "Is my motorcycle insured during recovery transport in Dubai?",
                                                                                                              "acceptedAnswer": {
                                                                                                                "@type": "Answer",
                                                                                                                "text": "Yes. Every motorcycle transported by Toretto Recovery is covered by our in-transit all-risks insurance policy from the moment our technician makes physical contact with your vehicle until signed delivery at the destination. A certificate of coverage can be emailed to you or your insurer before the job begins."
                                                                                                              }
                                                                                                            },
                                                                                                            {
                                                                                                              "@type": "Question",
                                                                                                              "name": "Can Toretto Recovery rescue a motorcycle from the Dubai desert or off-road trails?",
                                                                                                              "acceptedAnswer": {
                                                                                                                "@type": "Answer",
                                                                                                                "text": "Yes. We operate 4x4-equipped desert recovery units covering Al Qudra, Seih Al Salam, Hatta foothills, and private estate access roads. Desert response time is 45-70 minutes depending on location. Call us with your GPS coordinates for the fastest routing."
                                                                                                              }
                                                                                                            },
                                                                                                            {
                                                                                                              "@type": "Question",
                                                                                                              "name": "What happens during an accident recovery from a Dubai road or highway?",
                                                                                                              "acceptedAnswer": {
                                                                                                                "@type": "Answer",
                                                                                                                "text": "Toretto Recovery remains at the accident scene with you until Dubai Police complete the report and issue a case reference number. We document the scene, manage traffic safety, coordinate with your insurer, and only move the motorcycle after legal clearance is confirmed. We work with all major UAE insurers and submit documentation directly on your behalf."
                                                                                                              }
                                                                                                            },
                                                                                                            {
                                                                                                              "@type": "Question",
                                                                                                              "name": "Do you offer fleet motorcycle recovery contracts for delivery companies in Dubai?",
                                                                                                              "acceptedAnswer": {
                                                                                                                "@type": "Answer",
                                                                                                                "text": "Yes. Toretto Recovery holds commercial fleet contracts with delivery operators across Dubai. Fleet accounts receive priority dispatch, consolidated monthly invoicing, dedicated account management, and guaranteed maximum response times in a written service agreement."
                                                                                                              }
                                                                                                            },
                                                                                                            {
                                                                                                              "@type": "Question",
                                                                                                              "name": "Can you transport a newly purchased motorcycle I cannot legally ride in Dubai?",
                                                                                                              "acceptedAnswer": {
                                                                                                                "@type": "Answer",
                                                                                                                "text": "Yes. Unregistered or newly purchased motorcycles cannot be ridden on UAE public roads. Toretto Recovery collects from dealerships, private sellers, and auctions across all seven emirates and delivers with pre- and post-transport condition reports protecting both buyer and seller."
                                                                                                              }
                                                                                                            },
                                                                                                            {
                                                                                                              "@type": "Question",
                                                                                                              "name": "What is Toretto Recovery's cancellation policy?",
                                                                                                              "acceptedAnswer": {
                                                                                                                "@type": "Answer",
                                                                                                                "text": "If you cancel before our unit departs the base, no charge applies. If our team is already en route, a nominal call-out fee may apply to cover fuel and crew time. We never apply penalty charges for genuine self-resolution of a roadside problem."
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

            .site-breadcrumb .breadcrumb-title {
                font-size: 55px;
            }

            .breadcrumb-menu li a {
                font-size: 16px;
            }

            .fastone {
                font-size: 20px;
            }
        }
    </style>

    <!-- CONTACT BANNER -->
    <section class="site-breadcrumb contact-section"
        style="background: url('{{ asset('assets/images/motorcycle-towing-dubai.jpg') }}');">

        <div class="container">
            <div class="row align-items-center min-vh-75">

                <!-- LEFT CONTENT -->
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="hero-content-wrapper text-start text-white">

                        <!-- Eyebrow Badge -->
                        <div class="bm-hero-eyebrow">
                            <i class="fas fa-motorcycle"></i>
                            Toretto Recovery — Dubai's #1 Bike Rescue Authority
                        </div>

                        <!-- Main Heading -->
                        <h1 class="bm-hero-title wow animate__animated animate__fadeInDown">
                            Professional Motorcycle Recovery
                            <span>Anywhere in Dubai</span> — 24 Hours, 7 Days
                        </h1>

                        <ul class="breadcrumb-menu">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                                <i class="fa fa-angle-double-right"></i>
                            </li>
                            <li class="active">Professional Motorcycle Recovery</li>
                        </ul>

                        <!-- Subtitle -->
                        <h2 class="bm-hero-subtitle text-white">
                            Dubai's Dedicated Motorcycle Recovery Specialist — Available Every Hour, Every Road, Every
                            Situation
                        </h2>

                        <!-- CTA Section -->
                        <div class="hero-btn mt-4">
                            <a href="{{ route('book.now') }}" class="theme-btn">
                                Book Now <i class="fas fa-arrow-right-long"></i>
                            </a>
                            <a href="tel:+971523003423" class="theme-btn theme-btn2">
                                Call / WhatsApp <i class="fas fa-arrow-right-long"></i>
                            </a>
                        </div>

                        <!-- Description -->
                        <p class="bm-hero-desc">
                            From Sheikh Zayed Road to Jumeirah Beach, from Al Qudra desert trails to Business Bay towers —
                            Toretto Recovery reaches your stranded motorcycle faster than any competitor, with specialised
                            rigs built exclusively for two-wheelers.
                        </p>

                    </div>
                </div>

                <!-- RIGHT FORM CARD -->
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

                            <input type="hidden" name="type" value="Roadside Assistance in Dubai Inquiry">

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

    <!-- EMERGENCY RESCUE LINE / STATS BAR -->
    <section class="bm-rescue-bar">
        <div class="container">

            <!-- Title Block -->
            <div class="bm-rescue-title-block">
                <div class="bm-rescue-title-left">
                    <span class="bm-rescue-label"><i class="fas fa-phone-volume"></i> 24/7 Active</span>
                    <h2 class="bm-rescue-main-title">Emergency Rescue Line</h2>
                </div>
                <div class="bm-rescue-badge">
                    <i class="fas fa-bolt"></i>
                    <span>Explore Our Services</span>
                </div>
            </div>

            <!-- Divider -->
            <div class="bm-rescue-divider"></div>

            <!-- Badges Row -->
            <div class="bm-rescue-badges">
                <div class="bm-rescue-badge">
                    <i class="fas fa-bolt"></i>
                    <span>Avg. 20-Min Response</span>
                </div>
                <div class="bm-rescue-badge">
                    <i class="fas fa-shield-halved"></i>
                    <span>Fully Insured Every Job</span>
                </div>
                <div class="bm-rescue-badge">
                    <i class="fas fa-circle-dot"></i>
                    <span>Zero-Contact Wheel Lift Tech</span>
                </div>
                <div class="bm-rescue-badge">
                    <i class="fas fa-map-location-dot"></i>
                    <span>All 7 Emirates Covered</span>
                </div>
                <div class="bm-rescue-badge">
                    <i class="fas fa-certificate"></i>
                    <span>RTA Compliant Operations</span>
                </div>
            </div>

        </div>
    </section>

    <!-- HERO STATS ROW -->
    <section class="bm-stats-section">
        <div class="container">
            <div class="bm-stats-row">
                <div class="bm-stat-box">
                    <span class="bm-stat-num">24/7</span>
                    <span class="bm-stat-label">Always Available</span>
                </div>
                <div class="bm-stat-divider"></div>
                <div class="bm-stat-box">
                    <span class="bm-stat-num">15+</span>
                    <span class="bm-stat-label">Years in UAE Roads</span>
                </div>
                <div class="bm-stat-divider"></div>
                <div class="bm-stat-box">
                    <span class="bm-stat-num">12K+</span>
                    <span class="bm-stat-label">Bikes Recovered Safely</span>
                </div>
                <div class="bm-stat-divider"></div>
                <div class="bm-stat-box">
                    <span class="bm-stat-num">100%</span>
                    <span class="bm-stat-label">Insurance Documented</span>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY MOTORCYCLE RECOVERY IS A DIFFERENT SCIENCE -->
    <section class="bm-science-section" id="services-section">
        <div class="container">

            <!-- Section Header -->
            <div class="bm-science-header">
                <span class="bm-eyebrow">
                    <i class="fas fa-motorcycle"></i>
                    Specialist Discipline
                </span>
                <h2 class="bm-science-title">
                    Why Motorcycle Recovery Is an
                    Entirely Different Science from <a class="text-link"
                        href="{{ route('our-service.ourservice', ['slug' => 'towing-service-dubai']) }}">Car
                        Towing</a>
                </h2>
            </div>

            <section class="about-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 imagebag">
                            <div class="about-left wow animate__animated animate__fadeInLeft">
                                <div class="about-img">
                                    <img src="{{ asset('assets/images/bike-towing-dubai.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-right wow animate__animated animate__fadeInRight" data-wow-delay=".25s">
                                <p class="mb-1">Every year, thousands of bike owners in Dubai make the costly mistake of
                                    calling a standard vehicle recovery operator when their motorcycle breaks down. Car tow
                                    trucks are engineered for four-point chassis loading — dragging a two-wheeler onto a
                                    <a class="text-link"
                                        href="{{ route('our-service.ourservice', ['slug' => 'flatbed-recovery']) }}">flatbed
                                        cover</a> without proper restraints can collapse the suspension, strip the
                                    fairings,
                                    scratch custom paintwork, and in serious cases write off a machine worth hundreds of
                                    thousands of dirhams.
                                </p>
                                <p class="mb-1">Motorcycles and scooters balance on two contact points. Their frames flex
                                    under lateral load. Fuel tanks, exhausts, and footpegs protrude in ways that flatbed
                                    ramps simply cannot accommodate without specialised cradles. Electronic ride systems —
                                    cornering ABS, traction control, lean-angle sensors — can be corrupted when the bike is
                                    incorrectly positioned during transport.
                                </p>
                                <p class="mb-1">Toretto Recovery operates dedicated motorcycle recovery vehicles —
                                    purpose-fitted transporters with hydraulic tilt decks, adjustable wheel chocks, nylon
                                    cam-strap systems rated to specific torque values, and padded frame slings that never
                                    contact plastic or chrome surfaces. Our technicians hold manufacturer-endorsed training
                                    in two-wheel load security. That knowledge gap is why we exist — and why your bike
                                    deserves a specialist.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Car Recovery vs Motorcycle Recovery — Comparison Points -->
            <div class="bm-diff-wrap">

                <!-- Card 1: Car Recovery Problem -->
                <div class="bm-diff-card bm-diff-card--dark">
                    <div class="bm-diff-card-top">
                        <div class="bm-diff-icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <div>
                            <h3 class="bm-diff-title">Car Recovery vs Motorcycle Recovery</h3>
                            <span class="bm-diff-tag bm-diff-tag--danger"><i class="fas fa-triangle-exclamation"></i> Risk
                                to Your Bike</span>
                        </div>
                    </div>
                    <p class="bm-diff-desc">Four-wheel operators use hooks, chains, and axle dollies that physically cannot
                        interface with a motorbike's frame. Applying these tools risks bent handlebars, cracked footrests,
                        and alignment damage — often invisible until the next ride.</p>
                    <ul class="bm-diff-points">
                        <li><span class="bm-diff-num">01</span><span>Hooks, chains &amp; axle dollies — incompatible with
                                bike frames</span></li>
                        <li><span class="bm-diff-num">02</span><span>Bent handlebars, cracked footrests, alignment
                                damage</span></li>
                        <li><span class="bm-diff-num">03</span><span>Damage often invisible until the next ride</span></li>
                        <li><span class="bm-diff-num">04</span><span>No torque-rated strapping — bike shifts in
                                transit</span></li>
                        <li><span class="bm-diff-num">05</span><span>Electronic systems corrupted by incorrect
                                positioning</span></li>
                    </ul>
                </div>

                <!-- Card 2: Our Difference -->
                <div class="bm-diff-card bm-diff-card--red">
                    <div class="bm-diff-card-top">
                        <div class="bm-diff-icon bm-diff-icon--light">
                            <i class="fas fa-motorcycle"></i>
                        </div>
                        <div>
                            <h3 class="bm-diff-title">Our Difference</h3>
                            <span class="bm-diff-tag bm-diff-tag--success"><i class="fas fa-shield-halved"></i> The Safe
                                Choice</span>
                        </div>
                    </div>
                    <p class="bm-diff-desc">We arrive with motorcycle-specific transport decks, variable-angle ramps,
                        colour-coded cam-strap sets, tank protectors, handlebar cradles, and a digital load-security
                        checklist. Every departure is photographed and logged before the bike moves one centimetre.</p>
                    <ul class="bm-diff-points bm-diff-points--light">
                        <li><span class="bm-diff-num bm-diff-num--light">01</span><span>Motorcycle-specific transport decks
                                &amp; variable-angle ramps</span></li>
                        <li><span class="bm-diff-num bm-diff-num--light">02</span><span>Colour-coded cam-strap sets with
                                torque verification</span></li>
                        <li><span class="bm-diff-num bm-diff-num--light">03</span><span>Tank protectors, handlebar cradles
                                &amp; frame slings</span></li>
                        <li><span class="bm-diff-num bm-diff-num--light">04</span><span>Digital load-security checklist
                                before every departure</span></li>
                        <li><span class="bm-diff-num bm-diff-num--light">05</span><span>Every departure photographed &amp;
                                logged — full documentation</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- VEHICLE COVERAGE SECTION -->
    <section class="bm-coverage-section">
        <div class="container">


            <!-- Section Header -->
            <div class="bm-coverage-header">
                <span class="bm-eyebrow">
                    <i class="fas fa-layer-group"></i>
                    Vehicle Coverage
                </span>
                <h2 class="bm-coverage-title">
                    Every Category of Bike and Motorcycle<br>
                    <span>Handled with Precision</span>
                </h2>
                <p class="bm-coverage-lead">Dubai's roads host one of the most diverse two-wheel populations in the
                    Middle East — from delivery e-bikes to six-figure supercars on two wheels. Each category demands a
                    different loading protocol, tie-down configuration, and safety clearance check. Toretto Recovery is
                    equipped and certified for all of them.</p>
            </div>


            <div class="row align-items-center">
                <!-- Image side -->

                <div class="col-lg-6">
                    <div class="cred-rta-content">
                        <div class="bm-coverage-card">
                            <div class="bm-coverage-card-icon">
                                <i class="fas fa-gauge-high"></i>
                            </div>
                            <h3>Sports & Supersport Motorcycles</h3>
                            <p>Yamaha R1, Kawasaki Ninja, Suzuki GSX-R, Honda CBR, BMW S1000RR, Ducati Panigale. Low ground
                                clearance, aggressive geometry, and carbon-fibre bodywork require zero-contact frame slings
                                and a
                                tilting ramp incline under 8°.</p>
                        </div>
                        <div class="bm-coverage-card">
                            <div class="bm-coverage-card-icon">
                                <i class="fas fa-road"></i>
                            </div>
                            <h3>Touring & Long-Distance Cruisers</h3>
                            <p>Harley-Davidson, Indian Motorcycle, Honda Gold Wing, Yamaha FJR. Heavyweight machines
                                (250–500 kg)
                                need reinforced chock systems and extended width decks. Full panniers and top boxes are
                                carried
                                intact.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 imagebag">
                    <div class="about-left-images wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/accident-bike-recovery-dubai.jpg') }}"
                                alt="RTA Licensed Recovery Service Dubai">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vehicle Category Grid -->
            <div class="bm-coverage-grid">
                <!-- 3. Adventure & Dual-Sport (with image) -->
                <div class="bm-coverage-card bm-coverage-card--featured">
                    <div class="bm-coverage-card-img">
                        <img src="{{ asset('assets/images/boat-car-trailer-road-way.jpg') }}"
                            alt="Adventure bike flatbed recovery service" loading="lazy">
                    </div>
                    <div class="bm-coverage-card-body">
                        <div class="bm-coverage-card-icon">
                            <i class="fas fa-mountain-sun"></i>
                        </div>
                        <h3>Adventure & Dual-Sport Bikes</h3>
                        <p>BMW GS Series, KTM Adventure, Royal Enfield Himalayan. High suspension travel and knobby tyres
                            require wide-throat wheel cradles. Popular for Hatta and Al Qudra trips where off-road
                            breakdowns occur.</p>
                    </div>
                </div>

                <!-- 4. Naked & Street Bikes -->
                <div class="bm-coverage-card">
                    <div class="bm-coverage-card-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Naked & Street Bikes</h3>
                    <p>Triumph Street Triple, Kawasaki Z-Series, Yamaha MT. Exposed frames and minimal bodywork still
                        require padded contact points; handlebars and exhaust headers are catalogued before loading.</p>
                </div>

                <!-- 5. Scooters & Mopeds -->
                <div class="bm-coverage-card">
                    <div class="bm-coverage-card-icon">
                        <i class="fas fa-motorcycle"></i>
                    </div>
                    <h3>Scooters & Mopeds</h3>
                    <p>Honda PCX, Yamaha Aerox, Vespa GTS, Burgman. Step-through frames need under-body support cradles.
                        Extremely common in delivery circuits across Deira, Al Barsha, and Bur Dubai.</p>
                </div>

                <!-- 6. Electric Motorcycles -->
                <div class="bm-coverage-card">
                    <div class="bm-coverage-card-icon">
                        <i class="fas fa-charging-station"></i>
                    </div>
                    <h3>Electric Motorcycles & E-Scooters</h3>
                    <p>Zero SR/F, Energica, Sur Ron, Segway e-bikes. Battery recovery protocols mandate no spark tools,
                        insulated gloves, and lithium-pack isolation checks before transport. Charging assessment on
                        arrival.</p>
                </div>

                <!-- 7. Classic & Vintage -->
                <div class="bm-coverage-card">
                    <div class="bm-coverage-card-icon">
                        <i class="fas fa-clock-rotate-left"></i>
                    </div>
                    <h3>Classic & Vintage Motorcycles</h3>
                    <p>Pre-1990 machines with fragile chrome and period-correct parts. White-glove handling, museum-grade
                        blanket wrapping, and a pre-transport photographic condition report are standard.</p>
                </div>

                <!-- 8. Delivery & Fleet -->
                <div class="bm-coverage-card">
                    <div class="bm-coverage-card-icon">
                        <i class="fas fa-boxes-stacked"></i>
                    </div>
                    <h3>Delivery Motorcycles & Fleet Bikes</h3>
                    <p>High-rotation delivery fleets from Talabat, Deliveroo, and similar operators. Fleet contracts
                        available with priority dispatch and billing consolidation for multiple units recovered per shift.
                    </p>
                </div>

                <!-- 9. Luxury & Exotic -->
                <div class="bm-coverage-card">
                    <div class="bm-coverage-card-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3>Luxury & Exotic Bikes</h3>
                    <p>Ducati Superleggera, MV Agusta, Brough Superior, Arch Motorcycle. Extreme-value machines receive
                        enclosed transport, GPS tracking during transit, and direct handover to authorised workshops.</p>
                </div>

            </div><!-- /bm-coverage-grid -->

        </div>
    </section>

    <!-- REAL DUBAI SITUATIONS — HERO -->
    <section class="bm-situations-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left: Content -->
                <div class="col-lg-6 imagebag">
                    <div class="about-left-images wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/bike-recovery-dubai.jpg') }}"
                                alt="Motorcycle accident recovery scene in Dubai" loading="lazy">
                        </div>
                    </div>

                </div>
                <!-- Right: Image -->
                <div class="col-lg-6">
                    <div class="about-right bm-situations-content">
                        <span class="bm-eyebrow">
                            <i class="fas fa-map-marker-alt"></i>
                            Real Dubai Situations
                        </span>
                        <h2 class="bm-situations-title">
                            Why Dubai Riders Call for Motorcycle Recovery —
                            <span>The Root Causes</span>
                        </h2>
                        <p class="bm-situations-lead">Understanding why recovery becomes necessary helps riders
                            prepare — and helps our dispatchers send the right response team. These are the most frequent
                            triggers our crews encounter across the emirate.</p>
                        <div class="bm-situations-stats">
                            <div class="bm-situations-stat">
                                <strong>10+</strong>
                                <span>Recovery Scenarios</span>
                            </div>
                            <div class="bm-situations-stat">
                                <strong>24/7</strong>
                                <span>Dispatch Ready</span>
                            </div>
                            <div class="bm-situations-stat">
                                <strong>15 min</strong>
                                <span>Avg. Metro Response</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RECOVERY CAUSES — DETAILED CARDS -->
    <section class="bm-causes-section">
        <div class="container">

            <!-- Sub-Group 1: Mechanical & Technical -->
            <div class="bm-causes-group">
                <div class="bm-causes-group-head">
                    <div class="bm-causes-group-icon">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <div>
                        <h3 class="bm-causes-group-title">Mechanical & Technical Failures</h3>
                        <p class="bm-causes-group-sub">Hardware breakdowns and system failures that strand riders</p>
                    </div>
                </div>

                <div class="bm-causes-grid">
                    <div class="bm-cause-card">
                        <div class="bm-cause-icon"><i class="fas fa-burst"></i></div>
                        <h4>Flat Tyre on High-Speed Roads</h4>
                        <p>Dubai's summer asphalt reaches 70°C+ surface temperatures, accelerating tyre compound
                            degradation. A blowout at speed on E11 or E311 is a genuine safety emergency requiring
                            immediate roadside extraction.</p>
                    </div>
                    <div class="bm-cause-card">
                        <div class="bm-cause-icon"><i class="fas fa-battery-empty"></i></div>
                        <h4>Battery Drain & Electrical Faults</h4>
                        <p>Short urban commutes in extreme heat don't allow charging cycles to complete. Capacitor drain,
                            damaged alternators, and heat-degraded wiring looms strand bikes in car parks and residential
                            areas daily.</p>
                    </div>
                    <div class="bm-cause-card">
                        <div class="bm-cause-icon"><i class="fas fa-temperature-high"></i></div>
                        <h4>Engine Overheating</h4>
                        <p>Air-cooled engines in Dubai's 48°C ambient temperatures reach thermal shutdown thresholds —
                            especially in slow traffic on Al Ittihad Road or during approach to border crossings. Oil loss,
                            coolant failure, and radiator blockage are subsidiary causes.</p>
                    </div>
                    <div class="bm-cause-card">
                        <div class="bm-cause-icon"><i class="fas fa-gas-pump"></i></div>
                        <h4>Fuel Starvation & Delivery Failure</h4>
                        <p>Fuel pump failure, clogged injectors, vapour lock in the fuel line — common after a bike sits in
                            direct sun for extended periods. Fuelling is provided on-site before transport where safe to do
                            so.</p>
                    </div>
                    <div class="bm-cause-card">
                        <div class="bm-cause-icon"><i class="fas fa-gears"></i></div>
                        <h4>Gearbox & Clutch Seizure</h4>
                        <p>Aggressive riding on track days at Dubai Autodrome or Yas Marina — followed by insufficient
                            cool-down — can seize gearboxes that then cannot be ridden to a workshop under any
                            circumstances.</p>
                    </div>
                </div>
            </div>

            <!-- Sub-Group 2: Situational & Administrative -->
            <div class="bm-causes-group">
                <div class="bm-causes-group-head">
                    <div class="bm-causes-group-icon bm-causes-group-icon--alt">
                        <i class="fas fa-file-shield"></i>
                    </div>
                    <div>
                        <h3 class="bm-causes-group-title">Situational & Administrative Causes</h3>
                        <p class="bm-causes-group-sub">External events and legal scenarios requiring professional
                            recovery</p>
                    </div>
                </div>

                <div class="bm-causes-grid">
                    <div class="bm-cause-card">
                        <div class="bm-cause-icon bm-cause-icon--alt"><i class="fas fa-car-burst"></i></div>
                        <h4>Road Traffic Accidents</h4>
                        <p>Even low-speed collisions render motorcycles unrideable and legally require the vehicle to leave
                            the scene only after a police report is filed. Toretto coordinates with RTA and Dubai Police at
                            the incident site.</p>
                    </div>
                    <div class="bm-cause-card">
                        <div class="bm-cause-icon bm-cause-icon--alt"><i class="fas fa-ban"></i></div>
                        <h4>Illegal Parking Impoundment</h4>
                        <p>Bikes left in no-parking zones near Jumeirah Beach, The Dubai Mall, and business districts face
                            municipality towing. We assist in recovering impounded motorcycles from designated RTA
                            compounds.</p>
                    </div>
                    <div class="bm-cause-card">
                        <div class="bm-cause-icon bm-cause-icon--alt"><i class="fas fa-truck-ramp-box"></i></div>
                        <h4>New Purchase Collection & Delivery</h4>
                        <p>Unregistered or newly purchased bikes cannot be ridden on public roads. Toretto's enclosed
                            transport handles collection from dealerships, private sellers, and auctions — fully documented
                            and insured.</p>
                    </div>
                    <div class="bm-cause-card">
                        <div class="bm-cause-icon bm-cause-icon--alt"><i class="fas fa-user-lock"></i></div>
                        <h4>Theft Damage & Vandalism</h4>
                        <p>Recovered stolen motorcycles often have ignition damage, slashed tyres, or missing mirrors. These
                            machines cannot be started safely and require fully-enclosed recovery to certified repair
                            centres.</p>
                    </div>
                    <div class="bm-cause-card">
                        <div class="bm-cause-icon bm-cause-icon--alt"><i class="fas fa-key"></i></div>
                        <h4>Lost Keys & Remote Lockout</h4>
                        <p>Smart key system failures on modern motorcycles leave the immobiliser permanently engaged.
                            Without a working key, the bike cannot move under its own power and must be transported to an
                            authorised service centre.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Hyper-Local Coverage -->
    <section class="about-area bm-causes-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 imagebag">
                    <div class="about-left wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/quad-bike-loaded-recovery-dubai.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow animate__animated animate__fadeInRight" data-wow-delay=".25s">
                        <span class="bm-eyebrow">
                            <i class="fas fa-map-marker-alt"></i>
                            Hyper-Local Coverage
                        </span>
                        <h2 class="bm-situations-title">
                            Every Dubai District, Road, and Zone — Covered Without Exception
                        </h2>
                        <p class="mb-1">Dubai's infrastructure spans coast-to-coast motorways, dense urban clusters,
                            industrial perimeters, and vast desert corridors. Our dispatch system operates zone-by-zone,
                            ensuring the closest available unit reaches any location within the emirate.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- District Cards Grid -->
        <div class="container">
            <div class="bm-districts-grid">

                <div class="bm-district-card">
                    <div class="bm-district-icon"><i class="fas fa-building"></i></div>
                    <h4>Downtown Dubai & Business Bay</h4>
                    <p>High-density tower corridors, basement car parks, and restricted loading zones require
                        small-footprint<a class="text-link" href="{{ route('home') }}"> recovery vehicles</a>. Our
                        compact
                        motorcycle-specific units navigate underground
                        spaces standard trucks cannot access.</p>
                </div>

                <div class="bm-district-card">
                    <div class="bm-district-icon"><i class="fas fa-umbrella-beach"></i></div>
                    <h4>Jumeirah & JBR Beachfront</h4>
                    <p>Tourist and leisure zones with strict noise bylaws and valet congestion. Our crew handles bikes
                        alongside premium vehicles without disrupting the surrounding environment — silent winch systems
                        available.</p>
                </div>

                <div class="bm-district-card">
                    <div class="bm-district-icon"><i class="fas fa-road"></i></div>
                    <h4>Sheikh Zayed Road (E11) Corridor</h4>
                    <p>Dubai's busiest arterial highway demands RTA-compliant roadside presence with high-visibility
                        barriers. Emergency breakdown attendance on live lanes follows full traffic-management protocols.
                    </p>
                </div>

                <div class="bm-district-card">
                    <div class="bm-district-icon"><i class="fas fa-industry"></i></div>
                    <h4>Dubai Industrial City & Al Quoz</h4>
                    <p>Workshop delivery and collection across industrial clusters. Fleet recovery contracts with courier
                        companies and logistics operators requiring rapid dispatch and documented handover.</p>
                </div>

                <div class="bm-district-card">
                    <div class="bm-district-icon"><i class="fas fa-mosque"></i></div>
                    <h4>Deira & Bur Dubai Heritage Districts</h4>
                    <p>Narrow heritage lanes and souk-adjacent alleys require recovery professionals skilled in
                        manoeuvring out of congested, low-clearance environments without blocking pedestrian
                        thoroughfares.</p>
                </div>

                <div class="bm-district-card">
                    <div class="bm-district-icon"><i class="fas fa-house-chimney"></i></div>
                    <h4>Arabian Ranches, Mirdif & Residential</h4>
                    <p>Gated community protocols, barrier access management, and noise-sensitive residential recovery at
                        any hour. We coordinate with community security before entering.</p>
                </div>

                <div class="bm-district-card">
                    <div class="bm-district-icon"><i class="fas fa-plane-departure"></i></div>
                    <h4>Dubai International Airport Zone</h4>
                    <p>Airport perimeter roads and cargo access routes. Documentation-heavy environments where vehicle
                        identification, driver credentials, and cargo manifests must be presented on demand — we carry
                        them all.</p>
                </div>

                <div class="bm-district-card">
                    <div class="bm-district-icon"><i class="fas fa-mountain"></i></div>
                    <h4>Hatta Mountain Road (E44)</h4>
                    <p>Winding mountain approaches through the Hajar range attract adventure riders — and the same
                        elevation and corners that make E44 exhilarating also make mechanical failure particularly
                        hazardous. We cover the full corridor.</p>
                </div>

                <div class="bm-district-card">
                    <div class="bm-district-icon"><i class="fas fa-sun"></i></div>
                    <h4>Desert Safari Zones & Al Qudra Tracks</h4>
                    <p>Off-road and desert incidents require 4x4-supported recovery teams. Bikes ridden on Al Qudra
                        Cycle Track, the Enduro trails near Seih Al Salam, and private desert estates all fall within
                        our operational reach.</p>
                </div>

            </div>

            <!-- We Also Serve -->
            <div class="bm-serve-strip">
                <h4 class="bm-serve-title"><i class="fas fa-map-pin"></i> We Also Serve These Specific Locations:</h4>
                <div class="bm-serve-tags">
                    <span>Dubai Marina</span>
                    <span>Palm Jumeirah</span>
                    <span>Jumeirah Lakes Towers</span>
                    <span>Dubai Silicon Oasis</span>
                    <span>Dubai Investment Park</span>
                    <span>Al Barsha</span>
                    <span>Motor City</span>
                    <span>Sports City</span>
                    <span>Dubai Healthcare City</span>
                    <span>Port Rashid</span>
                    <span>Jebel Ali</span>
                    <span>Dubai World Central</span>
                    <span>Sheikh Mohammed Bin Zayed Road</span>
                    <span>Al Khail Road</span>
                    <span>Emirates Road (E611)</span>
                    <span>Al Ain Road (E66)</span>
                    <span>Nad Al Sheba</span>
                    <span>Dubai Creek Harbour</span>
                    <span>Bluewaters Island</span>
                    <span>Town Square</span>
                </div>
            </div>
        </div>
    </section>

    <!-- RAPID RESPONSE PROTOCOL -->
    <section class="bm-rapid-section">
        <div class="container">
            <!-- Hero: Image + Content -->
            <div class="row align-items-center bm-rapid-hero">
                <div class="col-lg-6 imagebag">
                    <div class="about-left-images wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/young-handsome-man-motorcycle-travelling.jpg') }}"
                                alt="Rider calling Toretto Recovery for motorcycle assistance" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bm-rapid-content">
                        <span class="bm-eyebrow">
                            <i class="fas fa-bolt"></i>
                            Rapid Response Protocol
                        </span>
                        <h2 class="bm-rapid-title">
                            Emergency Motorcycle Recovery —
                            <span>Every Failure Scenario, One Number to Call</span>
                        </h2>
                        <p class="bm-rapid-lead">Whether it's a highway blowout, a dead battery in a parking garage, or
                            a post-accident scene — Toretto dispatches the right crew with the right equipment within
                            minutes.</p>
                    </div>
                </div>
            </div>


            <!-- Emergency Alert Banner -->
            <div class="bm-rapid-alert">
                <div class="bm-rapid-alert-icon">
                    <i class="fas fa-triangle-exclamation"></i>
                </div>
                <div class="bm-rapid-alert-text">
                    <strong>If you are on a live traffic lane:</strong> Do not try to push your bike. Move yourself to
                    safety behind the barriers and call Toretto Recovery immediately. Our dispatch immediately activates
                    an RTA-protocol response with traffic management equipment and high-visibility personnel.
                </div>
            </div>

            <!-- Recovery Scenario Cards -->
            <div class="bm-rapid-grid">

                <div class="bm-rapid-card">
                    <div class="bm-rapid-card-head">
                        <div class="bm-rapid-card-icon"><i class="fas fa-car-burst"></i></div>
                        <div class="bm-rapid-card-urgency bm-rapid-card-urgency--critical">Critical</div>
                    </div>
                    <h4>Road Traffic Accident Recovery</h4>
                    <p>Time-sensitive coordination with Dubai Police, insurance assessors, and nearby trauma facilities.
                        Our crew secures the scene, photographs all points of contact, and ensures the motorcycle leaves
                        only after the official report number is issued.</p>
                    <div class="bm-rapid-card-meta">
                        <i class="fas fa-clock"></i> 15 min metro · 35 min highways
                    </div>
                </div>

                <div class="bm-rapid-card">
                    <div class="bm-rapid-card-head">
                        <div class="bm-rapid-card-icon"><i class="fas fa-battery-empty"></i></div>
                        <div class="bm-rapid-card-urgency">Standard</div>
                    </div>
                    <h4>Dead Battery & Total Electrical Failure</h4>
                    <p>Jump-start attempted on-site with motorcycle-specific compact chargers. If the charging system
                        itself has failed, the bike boards the transporter within minutes. Smart key and immobiliser
                        re-pairing supported at partnered workshops within the hour.</p>
                    <div class="bm-rapid-card-meta">
                        <i class="fas fa-stethoscope"></i> On-site diagnosis: free with every call-out
                    </div>
                </div>

                <div class="bm-rapid-card">
                    <div class="bm-rapid-card-head">
                        <div class="bm-rapid-card-icon"><i class="fas fa-temperature-high"></i></div>
                        <div class="bm-rapid-card-urgency bm-rapid-card-urgency--warning">Seasonal</div>
                    </div>
                    <h4>Engine Overheating Shutdown</h4>
                    <p>Do not attempt to restart. Our technician performs a thermal assessment on arrival — coolant
                        check, oil pressure verification, and intake inspection. If the engine is seized or the head
                        gasket compromised, we transport directly to a certified repair facility.</p>
                    <div class="bm-rapid-card-meta">
                        <i class="fas fa-calendar"></i> Critical: June–September when ambient &gt; 45°C
                    </div>
                </div>

                <div class="bm-rapid-card">
                    <div class="bm-rapid-card-head">
                        <div class="bm-rapid-card-icon"><i class="fas fa-burst"></i></div>
                        <div class="bm-rapid-card-urgency bm-rapid-card-urgency--critical">Priority</div>
                    </div>
                    <h4>Flat Tyre & Tyre Blowout</h4>
                    <p>Roadside tyre change carried for standard tube-and-tubeless sizes. For run-flat failures,
                        low-profile sport tyres, or bikes where the tyre change risks wheel damage, transport to tyre
                        specialists is arranged immediately. Highway blowouts receive priority dispatch.</p>
                    <div class="bm-rapid-card-meta">
                        <i class="fas fa-toolbox"></i> Tyre inflation kit available for temporary field repair
                    </div>
                </div>

                <div class="bm-rapid-card">
                    <div class="bm-rapid-card-head">
                        <div class="bm-rapid-card-icon"><i class="fas fa-gas-pump"></i></div>
                        <div class="bm-rapid-card-urgency">Standard</div>
                    </div>
                    <h4>Fuel Starvation & Vapour Lock</h4>
                    <p>Emergency fuel delivery available for simple run-out scenarios. For fuel pump failure, injector
                        blockage, or carburettor failure, our technician assesses before transport is confirmed — saving
                        unnecessary journey costs.</p>
                    <div class="bm-rapid-card-meta">
                        <i class="fas fa-gas-pump"></i> Fuel sourced from nearest ENOC or ADNOC station
                    </div>
                </div>

                <div class="bm-rapid-card">
                    <div class="bm-rapid-card-head">
                        <div class="bm-rapid-card-icon"><i class="fas fa-microchip"></i></div>
                        <div class="bm-rapid-card-urgency">Diagnostic</div>
                    </div>
                    <h4>Electrical Faults & ECU Errors</h4>
                    <p>Blown fuses, shorted wiring, faulty sensors triggering limp-mode or complete shutdown. Our
                        technician uses an OBD interface compatible with major motorcycle ECU systems to read fault codes
                        on-site and determine whether a field repair or workshop transfer is appropriate.</p>
                    <div class="bm-rapid-card-meta">
                        <i class="fas fa-plug"></i> Diagnostic scanner covers 40+ motorcycle brands
                    </div>
                </div>

            </div>

            <!-- Rider Safety Checklist -->
            <div class="bm-safety-checklist">
                <div class="bm-safety-checklist-head">
                    <i class="fas fa-shield-halved"></i>
                    <h4>Before Our Crew Arrives — Rider Safety Checklist</h4>
                </div>
                <div class="bm-safety-checklist-steps">
                    <div class="bm-safety-step">
                        <span class="bm-safety-step-num">1</span>
                        <span>Turn off the ignition</span>
                    </div>
                    <div class="bm-safety-step">
                        <span class="bm-safety-step-num">2</span>
                        <span>Activate hazard lights if fitted</span>
                    </div>
                    <div class="bm-safety-step">
                        <span class="bm-safety-step-num">3</span>
                        <span>Move yourself at least 5 metres from the motorcycle and traffic lane</span>
                    </div>
                    <div class="bm-safety-step">
                        <span class="bm-safety-step-num">4</span>
                        <span>Set up the emergency triangle from your toolkit</span>
                    </div>
                    <div class="bm-safety-step">
                        <span class="bm-safety-step-num">5</span>
                        <span>Stay on the phone with our dispatcher — we guide you until our team arrives</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ACCIDENT RESPONSE EXCELLENCE -->
    <section class="bm-accident-section">
        <div class="container">

            <!-- Section Intro — Dark Hero Block -->
            <div class="bm-coverage-header">
                <span class="bm-eyebrow">
                    <i class="fas fa-file-medical"></i>
                    Accident Response Excellence
                </span>
                <h2 class="bm-coverage-title">
                    Accident Scene Recovery — <br>Speed, Documentation, and Legal Precision
                </h2>
                <p class="bm-coverage-lead">An accident involving a motorcycle in Dubai triggers a legally
                    defined sequence of events. The vehicle cannot leave until a Dubai Police officer issues the
                    incident report. The workshop must be chosen by the rider or their insurer. The recovery operator
                    must document the condition of the motorcycle before touching it. Toretto Recovery operates
                    within every one of these requirements — trained, prepared, and embedded with Dubai's legal
                    framework.</p>
            </div>

            <!-- Recovery Sequence — Vertical Timeline -->
            <div class="bm-timeline-wrap">
                <h3 class="bm-timeline-heading">
                    <i class="fas fa-list-check"></i>
                    Our Accident Recovery Sequence
                </h3>

                <div class="bm-timeline">

                    <div class="bm-timeline-item">
                        <div class="bm-timeline-marker">
                            <span>01</span>
                        </div>
                        <div class="bm-timeline-body">
                            <h4>Immediate Dispatch Activation</h4>
                            <p>Upon receiving an accident call, we classify it as Priority One and activate the nearest
                                fully-equipped unit. Dispatch notifies Dubai Police and RTA simultaneously on your behalf
                                if you confirm the incident is active.</p>
                        </div>
                    </div>

                    <div class="bm-timeline-item">
                        <div class="bm-timeline-marker">
                            <span>02</span>
                        </div>
                        <div class="bm-timeline-body">
                            <h4>Scene Arrival & Hazard Management</h4>
                            <p>Our technician sets high-visibility warning triangles, deploys LED safety markers, and
                                establishes a clearance zone around the motorcycle before any assessment begins. No
                                movement of the bike occurs before police clearance.</p>
                        </div>
                    </div>

                    <div class="bm-timeline-item">
                        <div class="bm-timeline-marker">
                            <span>03</span>
                        </div>
                        <div class="bm-timeline-body">
                            <h4>360° Photographic Damage Assessment</h4>
                            <p>Every surface, panel, tyre, and frame joint is photographed with timestamped, GPS-tagged
                                images. This log is forwarded to your insurance company within one hour of scene
                                clearance and protects against subsequent damage claims during transit.</p>
                        </div>
                    </div>

                    <div class="bm-timeline-item">
                        <div class="bm-timeline-marker">
                            <span>04</span>
                        </div>
                        <div class="bm-timeline-body">
                            <h4>Fluid Leak Containment</h4>
                            <p>Fuel, oil, and coolant spills at accident scenes are environmental hazards. Our crew
                                carries absorbent containment granules and completes a spill report — required by Dubai
                                Municipality regulation before any vehicle departs.</p>
                        </div>
                    </div>

                    <div class="bm-timeline-item">
                        <div class="bm-timeline-marker">
                            <span>05</span>
                        </div>
                        <div class="bm-timeline-body">
                            <h4>Confirmed Workshop Delivery</h4>
                            <p>Transport to your preferred service centre, your insurer's approved facility, or the
                                nearest authorised dealership. Written handover receipt provided at destination —
                                including mileage, condition notes, and all photographic documentation.</p>
                        </div>
                    </div>

                    <div class="bm-timeline-item">
                        <div class="bm-timeline-marker">
                            <span>06</span>
                        </div>
                        <div class="bm-timeline-body">
                            <h4>Insurance Coordination at the Scene</h4>
                            <p>Toretto Recovery works with all major UAE insurers including RSA, Oman Insurance, Noor
                                Takaful, Orient Insurance, and Dubai Islamic Insurance. Our operations manager can speak
                                directly with your claims handler while you receive first aid or arrange alternate
                                transport.</p>
                            <p class="mt-3">We supply the incident reference number, damage photographs, our own crew's
                                attendance
                                certificate, and a third-party validation letter that most insurers accept without
                                additional site inspection.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Split Panels: Insurance + Total Loss -->
            <div class="bm-accident-panels">
                <div class="bm-accident-panel bm-accident-panel--total-loss">
                    <div class="bm-accident-panel-icon">
                        <i class="fas fa-triangle-exclamation"></i>
                    </div>
                    <h4>When the Motorcycle Is a Total Loss</h4>
                    <p class="bm-accident-panel-desc">Severely damaged machines require transport to a salvage
                        assessment yard before any repair estimate can be issued. We handle this transfer under a
                        separate custody document, ensuring chain-of-title is maintained for both insurance and resale
                        purposes.</p>
                    <p class="mt-3 bm-accident-panel-desc">Dismantling, parts retention, and export paperwork for
                        repatriation to the rider's home
                        country can
                        be arranged through our logistics partners.
                    </p>
                    <div class="bm-accident-panel-extras">
                        <span><i class="fas fa-tools"></i> Dismantling coordination</span>
                        <span><i class="fas fa-box-archive"></i> Parts retention & storage</span>
                        <span><i class="fas fa-plane"></i> Export & repatriation paperwork</span>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- HIGH-SPEED ROAD EXPERTISE -->
    <section class="bm-highway-section">
        <div class="container">

            <div class="bm-coverage-header">
                <span class="bm-eyebrow">
                    <i class="fas fa-gauge-high"></i>
                    High-Speed Road Expertise
                </span>
                <h2 class="bm-coverage-title">
                    Highway Motorcycle Recovery — <br /><span>The Highest-Stakes Call We Answer</span>
                </h2>
                <p class="bm-coverage-lead">Breaking down on an active Dubai motorway — E11, E311, E66, E44, or E611
                    — places a rider in genuine danger. Speed limits of 120–140 km/h, minimal hard shoulders, and
                    limited lighting after dark create a lethal combination if the scene is not managed correctly.
                    Toretto Recovery maintains dedicated highway response units that carry full traffic-control
                    equipment as standard.</p>
            </div>

            <!-- Horizontal Feature Blocks -->
            <div class="bm-highway-features">

                <div class="bm-highway-feature">
                    <div class="bm-highway-feature-left">
                        <div class="bm-highway-feature-num">01</div>
                        <div class="bm-highway-feature-line"></div>
                    </div>
                    <div class="bm-highway-feature-body">
                        <div class="bm-highway-feature-icon"><i class="fas fa-users"></i></div>
                        <div>
                            <h4>Traffic Management on Live Lanes</h4>
                            <p>Two-person crew minimum for all highway call-outs. Crew Member 1 manages traffic warning
                                and signage; Crew Member 2 secures the motorcycle. We operate under RTA's Code of
                                Practice for Recovery Operators on Controlled Roads.</p>
                        </div>
                    </div>
                </div>

                <div class="bm-highway-feature">
                    <div class="bm-highway-feature-left">
                        <div class="bm-highway-feature-num">02</div>
                        <div class="bm-highway-feature-line"></div>
                    </div>
                    <div class="bm-highway-feature-body">
                        <div class="bm-highway-feature-icon"><i class="fas fa-vest"></i></div>
                        <div>
                            <h4>High-Visibility Equipment</h4>
                            <p>LED directional arrow boards, retroreflective traffic cones, and class-3 hi-vis suits
                                are deployed at every highway scene. Our recovery vehicles carry amber LED lightbar
                                systems approved for use on UAE federal roads.</p>
                        </div>
                    </div>
                </div>

                <div class="bm-highway-feature">
                    <div class="bm-highway-feature-left">
                        <div class="bm-highway-feature-num">03</div>
                        <div class="bm-highway-feature-line"></div>
                    </div>
                    <div class="bm-highway-feature-body">
                        <div class="bm-highway-feature-icon"><i class="fas fa-phone-volume"></i></div>
                        <div>
                            <h4>RTA & Dubai Police Coordination</h4>
                            <p>For incidents on Sheikh Zayed Road, we notify the RTA Traffic Operations Centre
                                proactively. A traffic lane management request is filed to slow approaching vehicles
                                before our crew enters the road shoulder.</p>
                        </div>
                    </div>
                </div>

                <div class="bm-highway-feature">
                    <div class="bm-highway-feature-left">
                        <div class="bm-highway-feature-num">04</div>
                    </div>
                    <div class="bm-highway-feature-body">
                        <div class="bm-highway-feature-icon"><i class="fas fa-moon"></i></div>
                        <div>
                            <h4>Night and Low-Visibility Response</h4>
                            <p>Nighttime highway incidents receive additional lighting deployment — portable LED
                                worklight towers illuminate a 10-metre safety zone around the stranded motorcycle.
                                Rider visibility vests are offered at no charge.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Highway Coverage Strip -->
            <div class="bm-highway-coverage">
                <div class="bm-highway-coverage-head">
                    <i class="fas fa-road"></i>
                    <strong>Highway Coverage:</strong>
                </div>
                <div class="bm-highway-coverage-tags">
                    <span>E11</span>
                    <span>E311</span>
                    <span>E44</span>
                    <span>E66</span>
                    <span>E611</span>
                    <span>D89</span>
                    <span>Sheikh Mohammed Bin Zayed Road</span>
                </div>
                <p class="bm-highway-coverage-note">All Dubai motorways, interchange ramps, and service roads are
                    within our operational scope. No additional call-out charge applies for motorway incidents — one
                    flat rate, clear pricing.</p>
            </div>

        </div>
    </section>

    <!-- HIGH-VALUE ASSET PROTECTION -->
    <section class="bm-asset-section">
        <div class="container">

            <div class="bm-coverage-header">
                <span class="bm-eyebrow">
                    <i class="fas fa-gem"></i>
                    High-Value Asset Protection
                </span>
                <h2 class="bm-coverage-title">
                    Sports Motorcycle & Superbike <br />Recovery — <span>Where Precision Is Non-Negotiable</span>
                </h2>
                <p class="bm-coverage-lead">A Ducati Panigale V4R or a BMW M1000RR is a rolling precision instrument
                    — carbon fibre, titanium hardware, bespoke paint codes worth their own insurance policies. Standard
                    tie-down straps can crack fairings. An incorrectly angled ramp will bottom out the undertray.
                    Toretto Recovery has invested in the specific equipment and technique that high-value sports bikes
                    demand.</p>
            </div>

            <!-- Protocol Steps — Left-border numbered list -->
            <div class="bm-protocol-wrap">
                <h3 class="bm-protocol-heading">Our Sports Bike Recovery Protocols</h3>

                <div class="bm-protocol-list">

                    <div class="bm-protocol-item">
                        <div class="bm-protocol-num">01</div>
                        <div class="bm-protocol-content">
                            <h4>Non-contact bodywork policy</h4>
                            <p>All strap anchor points use padded frame-contact points identified in the manufacturer's
                                service manual. No strap ever touches plastic, carbon, or painted aluminium.</p>
                        </div>
                    </div>

                    <div class="bm-protocol-item">
                        <div class="bm-protocol-num">02</div>
                        <div class="bm-protocol-content">
                            <h4>Tilt-deck ramp calibration</h4>
                            <p>Our hydraulic ramp angle is adjusted to the bike's specific ground-clearance specification
                                before loading — preventing undertray or exhaust contact during boarding.</p>
                        </div>
                    </div>

                    <div class="bm-protocol-item">
                        <div class="bm-protocol-num">03</div>
                        <div class="bm-protocol-content">
                            <h4>Front-wheel chock precision</h4>
                            <p>Adjustable chock width is set to the exact tyre section width, locking the front wheel
                                without lateral flex that could loosen steering-head bearings.</p>
                        </div>
                    </div>

                    <div class="bm-protocol-item">
                        <div class="bm-protocol-num">04</div>
                        <div class="bm-protocol-content">
                            <h4>Electronic system standby</h4>
                            <p>For bikes with active suspension or cornering ABS, the ignition is cycled to accessory
                                mode only — preventing inadvertent system resets triggered by transport vibration.</p>
                        </div>
                    </div>

                    <div class="bm-protocol-item">
                        <div class="bm-protocol-num">05</div>
                        <div class="bm-protocol-content">
                            <h4>Post-transport inspection</h4>
                            <p>On delivery, every fastener, mirror, and panel is re-inspected against the pre-transport
                                condition report. Any discrepancy is logged before the rider signs the receipt.</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Special Callout Boxes -->
            <div class="bm-asset-callouts">

                <div class="bm-asset-callout bm-asset-callout--track">
                    <div class="bm-asset-callout-badge">
                        <i class="fas fa-flag-checkered"></i>
                    </div>
                    <h4>Track-Day Recovery from Dubai Autodrome & Yas Marina</h4>
                    <p>Mechanical failures during track sessions require rapid clearance to keep other sessions running.
                        Our crew holds circuit access permits for both facilities and can be on-site within 25 minutes —
                        transporting the bike to pit-lane or to the rider's preferred specialist.</p>
                </div>

                <div class="bm-asset-callout bm-asset-callout--enclosed">
                    <div class="bm-asset-callout-badge">
                        <i class="fas fa-truck-loading"></i>
                    </div>
                    <h4>Enclosed Transport for Exotic Motorcycles</h4>
                    <p>Enclosed trailers with interior climate management (preventing temperature shock to carbon
                        components) and camera-monitored interiors during transit are available on request for machines
                        valued over AED 150,000. GPS real-time tracking link shared with the owner.</p>
                </div>

            </div>

        </div>
    </section>

    <!-- UAE-WIDE & CROSS-BORDER TRANSPORT -->
    <section class="bm-transport-section">
        <div class="container">

            <div class="bm-coverage-header">
                <span class="bm-eyebrow">
                    <i class="fas fa-globe-asia"></i>
                    UAE-Wide & Cross-Border Transport
                </span>
                <h2 class="bm-coverage-title">
                    Long-Distance Motorcycle Transport — <br><span>Dubai to Abu Dhabi, Sharjah, and Beyond</span>
                </h2>
                <p class="bm-coverage-lead">Whether relocating to Abu Dhabi, shipping to Muscat, or transporting a
                    newly purchased motorcycle from a seller in Sharjah, Toretto Recovery's long-distance transport
                    service ensures your bike arrives as it left — secured, documented, and delivered to the exact
                    address you specify.</p>
            </div>

            <!-- Route Service Blocks -->
            <div class="bm-route-grid">

                <div class="bm-route-block">
                    <div class="bm-route-block-top">
                        <div class="bm-route-block-icon"><i class="fas fa-arrows-left-right"></i></div>
                        <div class="bm-route-block-arrow">
                            <span>Dubai</span>
                            <i class="fas fa-arrow-right-long"></i>
                            <span>All Emirates</span>
                        </div>
                    </div>
                    <h4>Inter-Emirate Transport</h4>
                    <p>Dubai ↔ Abu Dhabi, Sharjah, Ajman, Umm Al Quwain, Ras Al Khaimah, Fujairah. All routes covered
                        with the same specialist motorcycle transport equipment used on city routes. No subcontracting —
                        your bike stays on our truck.</p>
                </div>

                <div class="bm-route-block">
                    <div class="bm-route-block-top">
                        <div class="bm-route-block-icon"><i class="fas fa-passport"></i></div>
                        <div class="bm-route-block-arrow">
                            <span>UAE</span>
                            <i class="fas fa-arrow-right-long"></i>
                            <span>GCC</span>
                        </div>
                    </div>
                    <h4>GCC Cross-Border Delivery</h4>
                    <p>Motorcycle transport to Oman, Saudi Arabia, Bahrain, Kuwait, and Qatar via official border
                        crossings. Customs documentation, Carnet de Passage preparation, and third-party insurance
                        certificates arranged on your behalf.</p>
                </div>

                <div class="bm-route-block">
                    <div class="bm-route-block-top">
                        <div class="bm-route-block-icon"><i class="fas fa-ship"></i></div>
                        <div class="bm-route-block-arrow">
                            <span>Port</span>
                            <i class="fas fa-arrow-right-long"></i>
                            <span>Your Door</span>
                        </div>
                    </div>
                    <h4>Port & Freight Collection</h4>
                    <p>Newly imported motorcycles arriving at Jebel Ali Port or Dubai International Airport cargo
                        terminals are collected with the correct customs clearance documentation and delivered directly
                        to your home, workshop, or storage facility.</p>
                </div>

                <div class="bm-route-block">
                    <div class="bm-route-block-top">
                        <div class="bm-route-block-icon"><i class="fas fa-handshake"></i></div>
                        <div class="bm-route-block-arrow">
                            <span>Seller</span>
                            <i class="fas fa-arrow-right-long"></i>
                            <span>Buyer</span>
                        </div>
                    </div>
                    <h4>Dealership & Auction Transfer</h4>
                    <p>Collection from authorised dealerships, BidURVehicles, Emirates Auction, and private buyers.
                        Pre-delivery inspection photographs provided before the bike is loaded, protecting both buyer
                        and seller in private-sale transactions.</p>
                </div>

            </div>

            <!-- Documents Strip -->
            <div class="bm-transport-docs">
                <div class="bm-transport-docs-head">
                    <i class="fas fa-folder-open"></i>
                    <h4>Documents We Carry for Every Long-Distance Job</h4>
                </div>
                <div class="bm-transport-docs-tags">
                    <span><i class="fas fa-file-lines"></i> Vehicle movement permit</span>
                    <span><i class="fas fa-id-card"></i> Toretto Recovery trade plate</span>
                    <span><i class="fas fa-shield-halved"></i> Insurance certificate</span>
                    <span><i class="fas fa-address-card"></i> Driver licence copies</span>
                    <span><i class="fas fa-clipboard-check"></i> Load security checklist</span>
                    <span><i class="fas fa-envelope-open-text"></i> Rider's authorisation letter</span>
                </div>
                <p class="bm-transport-docs-note">All border crossings and police checkpoints are handled by our
                    experienced logistics team — zero hassle for the owner.</p>
            </div>

        </div>
    </section>

    <!-- HOW IT WORKS -->
    <section class="bm-howitworks-section">
        <div class="container">

            <div class="bm-coverage-header">
                <span class="bm-eyebrow">
                    <i class="fas fa-list-ol"></i>
                    How It Works
                </span>
                <h2 class="bm-coverage-title">
                    From Your First Call to Your Motorcycle's <br><span>Safe Delivery — Step by Step</span>
                </h2>
            </div>

            <!-- 6-Step Process -->
            <div class="bm-steps-track">

                <div class="bm-step-row bm-step-row--left">
                    <div class="bm-step-number"><span>1</span></div>
                    <div class="bm-step-connector"></div>
                    <div class="bm-step-card">
                        <div class="bm-step-card-icon"><i class="fas fa-phone-flip"></i></div>
                        <h4>Call or WhatsApp Our 24/7 Dispatch</h4>
                        <p>A trained dispatcher answers immediately — not a call centre script, but a live specialist
                            who asks the right questions: bike type, location, nature of the breakdown, and whether you
                            need accident or emergency services alongside recovery.</p>
                    </div>
                </div>

                <div class="bm-step-row bm-step-row--right">
                    <div class="bm-step-card">
                        <div class="bm-step-card-icon"><i class="fas fa-location-crosshairs"></i></div>
                        <h4>Live GPS Tracking to Your Location</h4>
                        <p>You receive a real-time tracking link to the nearest available recovery unit. Watch our
                            technician navigate to you from the moment dispatch confirms. Average acknowledgement time:
                            60 seconds.</p>
                    </div>
                    <div class="bm-step-connector"></div>
                    <div class="bm-step-number"><span>2</span></div>
                </div>

                <div class="bm-step-row bm-step-row--left">
                    <div class="bm-step-number"><span>3</span></div>
                    <div class="bm-step-connector"></div>
                    <div class="bm-step-card">
                        <div class="bm-step-card-icon"><i class="fas fa-shield-halved"></i></div>
                        <h4>On-Site Assessment & Safety Setup</h4>
                        <p>On arrival, our technician establishes a safety perimeter, performs a condition assessment,
                            and explores field-repair options before committing the bike to the transporter. You keep
                            control of the decision at every stage.</p>
                    </div>
                </div>

                <div class="bm-step-row bm-step-row--right">
                    <div class="bm-step-card">
                        <div class="bm-step-card-icon"><i class="fas fa-camera"></i></div>
                        <h4>Pre-Load Documentation</h4>
                        <p>360° timestamped photography, fuel level record, odometer reading, and any pre-existing
                            damage notes are shared with you digitally before the bike is moved. Your acceptance is
                            confirmed via WhatsApp message.</p>
                    </div>
                    <div class="bm-step-connector"></div>
                    <div class="bm-step-number"><span>4</span></div>
                </div>

                <div class="bm-step-row bm-step-row--left">
                    <div class="bm-step-number"><span>5</span></div>
                    <div class="bm-step-connector"></div>
                    <div class="bm-step-card">
                        <div class="bm-step-card-icon"><i class="fas fa-truck-ramp-box"></i></div>
                        <h4>Secure Loading to Specialist Transporter</h4>
                        <p>Hydraulic tilt-deck lowers to ground level. Wheel chocks are positioned. Frame-contact straps
                            are tensioned to manufacturer-specified torque values with a calibrated ratchet tool. No
                            improvisation.</p>
                    </div>
                </div>

                <div class="bm-step-row bm-step-row--right">
                    <div class="bm-step-card">
                        <div class="bm-step-card-icon"><i class="fas fa-clipboard-check"></i></div>
                        <h4>Transit Monitoring & Destination Delivery</h4>
                        <p>For longer journeys, the strap tension is re-checked every 30 minutes. On delivery, the bike
                            is unloaded with equal care, photographed again, and released only on your confirmed
                            sign-off.</p>
                    </div>
                    <div class="bm-step-connector"></div>
                    <div class="bm-step-number"><span>6</span></div>
                </div>

            </div>

            <!-- Before & After Checklists -->
            <div class="bm-checklist-duo">

                <div class="bm-checklist-panel bm-checklist-panel--before">
                    <div class="bm-checklist-panel-head">
                        <div class="bm-checklist-panel-badge"><i class="fas fa-clock"></i></div>
                        <h4>Before the Recovery Team Arrives</h4>
                    </div>
                    <ul>
                        <li><i class="fas fa-circle-check"></i> Turn ignition off and remove the key</li>
                        <li><i class="fas fa-circle-check"></i> Place yourself in a safe position away from traffic</li>
                        <li><i class="fas fa-circle-check"></i> Have your Emirates ID, vehicle registration, and
                            insurance card accessible</li>
                        <li><i class="fas fa-circle-check"></i> If an accident: do not move the bike until police arrive
                        </li>
                        <li><i class="fas fa-circle-check"></i> Note your exact GPS location (share via WhatsApp Live
                            Location)</li>
                        <li><i class="fas fa-circle-check"></i> Photograph the scene and any damage yourself as
                            additional documentation</li>
                    </ul>
                </div>

                <div class="bm-checklist-panel bm-checklist-panel--after">
                    <div class="bm-checklist-panel-head">
                        <div class="bm-checklist-panel-badge"><i class="fas fa-flag-checkered"></i></div>
                        <h4>After the Motorcycle Is Recovered</h4>
                    </div>
                    <ul>
                        <li><i class="fas fa-circle-check"></i> Request the condition report and all recovery
                            photographs</li>
                        <li><i class="fas fa-circle-check"></i> Confirm the workshop address and expected arrival time
                        </li>
                        <li><i class="fas fa-circle-check"></i> Notify your insurer and provide the Toretto Recovery
                            certificate</li>
                        <li><i class="fas fa-circle-check"></i> Request a diagnostic report from the workshop within 48
                            hours</li>
                        <li><i class="fas fa-circle-check"></i> Review the recovery invoice for insurance reimbursement
                            submission</li>
                        <li><i class="fas fa-circle-check"></i> Provide feedback to Toretto — our quality team reviews
                            every job</li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

    <!-- MODERN RECOVERY TECHNOLOGY -->
    <section class="bm-tech-section">
        <div class="container">

            <div class="bm-coverage-header">
                <span class="bm-eyebrow">
                    <i class="fas fa-microchip"></i>
                    Modern Recovery Technology
                </span>
                <h2 class="bm-coverage-title">
                    Purpose-Built Equipment That Protects <br><span>What Standard Operators Cannot</span>
                </h2>
                <p class="bm-coverage-lead">Our fleet investment reflects a single conviction: the right tool
                    eliminates the risk. Every piece of equipment in the Toretto Recovery inventory was selected
                    specifically for motorcycle transport — not adapted from automotive recovery stock.</p>
            </div>

            <!-- Tech Showcase Grid -->
            <div class="bm-tech-grid">

                <div class="bm-tech-item bm-tech-item--wide">
                    <div class="bm-tech-item-num">01</div>
                    <div class="bm-tech-item-icon"><i class="fas fa-truck-monster"></i></div>
                    <h4>Hydraulic Tilt-Deck Transporters</h4>
                    <p>Fully-hydraulic decks lower to near-ground level, eliminating ramp angle issues. The deck surface
                        is rubberised for grip and features a central channel to accommodate all wheelbase widths from
                        50cc scooters to 1800cc cruisers.</p>
                </div>

                <div class="bm-tech-item">
                    <div class="bm-tech-item-num">02</div>
                    <div class="bm-tech-item-icon"><i class="fas fa-link"></i></div>
                    <h4>Calibrated Nylon Cam-Strap Systems</h4>
                    <p>Colour-coded straps rated at specific break strengths for each bike category. Tensioning is
                        measured with a digital torque indicator — not guesswork. Strap placement follows a documented
                        point-location guide for over 200 motorcycle models.</p>
                </div>

                <div class="bm-tech-item">
                    <div class="bm-tech-item-num">03</div>
                    <div class="bm-tech-item-icon"><i class="fas fa-lock"></i></div>
                    <h4>Adjustable Wheel Chock Array</h4>
                    <p>Width-adjustable front and rear wheel chocks clamp the tyre without lateral pressure on the rim.
                        Position is locked with a mechanical pin after hydraulic adjustment. Zero rim contact from metal
                        components.</p>
                </div>

                <div class="bm-tech-item bm-tech-item--wide">
                    <div class="bm-tech-item-num">04</div>
                    <div class="bm-tech-item-icon"><i class="fas fa-satellite-dish"></i></div>
                    <h4>Real-Time GPS Fleet Tracking</h4>
                    <p>Every recovery vehicle broadcasts live position. Owners receive a tracking link via SMS on
                        dispatch confirmation. Our operations centre monitors all active units, re-routing around traffic
                        or accidents automatically.</p>
                </div>

                <div class="bm-tech-item">
                    <div class="bm-tech-item-num">05</div>
                    <div class="bm-tech-item-icon"><i class="fas fa-laptop-medical"></i></div>
                    <h4>Portable Motorcycle Diagnostic Scanner</h4>
                    <p>OBD-II and proprietary motorcycle bus interfaces allow our technician to read fault codes from
                        major ECU platforms on-site. Real data replaces guesswork — and often saves an unnecessary
                        transport when a field reset resolves the fault.</p>
                </div>

                <div class="bm-tech-item">
                    <div class="bm-tech-item-num">06</div>
                    <div class="bm-tech-item-icon"><i class="fas fa-file-signature"></i></div>
                    <h4>Timestamped Documentation System</h4>
                    <p>Our crew uses a dedicated condition-reporting app that GPS-stamps, time-stamps, and
                        auto-compresses 360° photographs into a shareable PDF within two minutes of on-site arrival.
                        Legal-grade evidence for insurance claims.</p>
                </div>

                <div class="bm-tech-item">
                    <div class="bm-tech-item-num">07</div>
                    <div class="bm-tech-item-icon"><i class="fas fa-toolbox"></i></div>
                    <h4>On-Site Repair Toolkit</h4>
                    <p>Each unit carries a curated toolkit for common roadside resolutions: jump-start pack, tyre
                        inflation kit, basic tool set, chain lube, emergency fuel container, fuse box, and electrical
                        tape. Minor faults resolved without a transport call-out where safe.</p>
                </div>

                <div class="bm-tech-item">
                    <div class="bm-tech-item-num">08</div>
                    <div class="bm-tech-item-icon"><i class="fas fa-lightbulb"></i></div>
                    <h4>Portable LED Work Lighting</h4>
                    <p>360° portable LED towers deploy at night scenes, illuminating the full recovery work area.
                        Essential on unlit desert roads and the darker sections of E44 and E66 where ambient lighting is
                        absent.</p>
                </div>

            </div>

        </div>
    </section>

    <!-- PROTECTION & COMPLIANCE -->
    <section class="bm-compliance-section">
        <div class="container">

            <div class="bm-coverage-header">
                <span class="bm-eyebrow">
                    <i class="fas fa-shield-halved"></i>
                    Protection & Compliance
                </span>
                <h2 class="bm-coverage-title">
                    Insurance Coverage, RTA Compliance, <br><span>and Your Legal Protections</span>
                </h2>
            </div>

            <!-- Insurance Framework -->
            <div class="bm-insurance-wrap">
                <div class="bm-insurance-header">
                    <i class="fas fa-umbrella"></i>
                    <div>
                        <h3>Our Insurance Framework</h3>
                        <p>Toretto Recovery maintains a comprehensive insurance structure that protects your motorcycle
                            from the moment our technician makes physical contact with it until delivery is signed and
                            sealed. This is not an optional add-on — it is baked into every job we accept.</p>
                    </div>
                </div>

                <div class="bm-insurance-list">

                    <div class="bm-insurance-item">
                        <div class="bm-insurance-item-marker"><i class="fas fa-shield-halved"></i></div>
                        <div class="bm-insurance-item-body">
                            <h4>In-Transit All-Risks Cover</h4>
                            <p>Your motorcycle's declared value is covered against <a class="text-link"
                                    href="{{ route('our-service.ourservice', ['slug' => 'accidental-car-recovery']) }}">accidental
                                    damage</a> during loading,
                                transport, and unloading. Our insurer provides a certificate of coverage on request
                                before the job begins.</p>
                        </div>
                    </div>

                    <div class="bm-insurance-item">
                        <div class="bm-insurance-item-marker"><i class="fas fa-shield-halved"></i></div>
                        <div class="bm-insurance-item-body">
                            <h4>Public Liability Insurance</h4>
                            <p>Third-party property and personal injury cover is maintained at AED 5 million per
                                incident — protecting you, us, and other road users.</p>
                        </div>
                    </div>

                    <div class="bm-insurance-item">
                        <div class="bm-insurance-item-marker"><i class="fas fa-shield-halved"></i></div>
                        <div class="bm-insurance-item-body">
                            <h4>Operator Indemnity</h4>
                            <p>If our equipment or process causes damage to your motorcycle, we accept full financial
                                liability. You will not be directed to file your own insurance claim for our error.</p>
                        </div>
                    </div>

                    <div class="bm-insurance-item">
                        <div class="bm-insurance-item-marker"><i class="fas fa-shield-halved"></i></div>
                        <div class="bm-insurance-item-body">
                            <h4>Rider Emergency Assistance Cover</h4>
                            <p>For riders whose own insurance includes recovery benefits, Toretto acts as the nominated
                                provider for many major UAE policies. We can verify coverage directly with your insurer
                                before invoicing.</p>
                        </div>
                    </div>

                    <div class="bm-insurance-item">
                        <div class="bm-insurance-item-marker"><i class="fas fa-shield-halved"></i></div>
                        <div class="bm-insurance-item-body">
                            <h4>Documentation Supplied to Insurers</h4>
                            <p>We supply, on request, the on-site condition report, GPS-stamped photographs, load
                                security checklist, driver credentials, and our company insurance certificate —
                                everything a UAE insurer requires to process a claim without delay.</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Regulatory Compliance -->
            <div class="bm-regulatory-wrap">
                <h3 class="bm-regulatory-heading">Regulatory Compliance</h3>

                <div class="bm-regulatory-blocks">

                    <div class="bm-regulatory-block">
                        <div class="bm-regulatory-block-badge">
                            <i class="fas fa-id-badge"></i>
                            <span>RTA</span>
                        </div>
                        <h4>RTA Registered Recovery Operator</h4>
                        <p>Toretto Recovery holds a valid Roads and Transport Authority (RTA) recovery operator licence,
                            renewed annually. Our vehicles carry the required RTA plates, and our drivers hold the
                            applicable UAE commercial driving categories.</p>
                    </div>

                    <div class="bm-regulatory-block">
                        <div class="bm-regulatory-block-badge">
                            <i class="fas fa-building-shield"></i>
                            <span>Police</span>
                        </div>
                        <h4>Dubai Police Protocol Compliance</h4>
                        <p>For accident scenes, our crew follows the Dubai Police Accident Recovery Code of Practice — no
                            bike moves before the case reference number is confirmed, and our documentation is formatted
                            for direct submission to the police e-services portal.</p>
                    </div>

                    <div class="bm-regulatory-block">
                        <div class="bm-regulatory-block-badge">
                            <i class="fas fa-leaf"></i>
                            <span>DM</span>
                        </div>
                        <h4>Dubai Municipality Environmental Compliance</h4>
                        <p>Fluid spill containment at incident scenes follows Dubai Municipality environmental protection
                            guidelines. Our spill kit and absorbent materials are certified for use on UAE public roads.
                            Spill disposal is documented and filed with the relevant authority.</p>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- INFORMED DECISION-MAKING -->
    <section class="bm-decision-section">
        <div class="container">

            <div class="bm-coverage-header">
                <span class="bm-eyebrow">
                    <i class="fas fa-scale-balanced"></i>
                    Informed Decision-Making
                </span>
                <h2 class="bm-coverage-title">
                    When Recovery Is Essential — <br><span>And Honest Alternatives When It Is Not</span>
                </h2>
                <p class="bm-coverage-lead">Our goal is to give Dubai's riders accurate information — not to call out
                    a transporter when a simpler solution serves you better. Here is an honest assessment of when
                    professional motorcycle recovery is genuinely necessary, and when alternatives might apply.</p>
            </div>

            <!-- Decision Table -->
            <div class="bm-decision-table-wrap">
                <table class="bm-decision-table">
                    <thead>
                        <tr>
                            <th>Situation</th>
                            <th>Recovery Needed?</th>
                            <th>Best Action</th>
                            <th>Alternative (if any)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Situation">Dead battery, charging system intact</td>
                            <td data-label="Recovery Needed?"><span class="bm-badge bm-badge--maybe">Maybe</span></td>
                            <td data-label="Best Action">Toretto roadside jump-start</td>
                            <td data-label="Alternative">Call a friend with a jump pack</td>
                        </tr>
                        <tr>
                            <td data-label="Situation">Flat tyre, spare available</td>
                            <td data-label="Recovery Needed?"><span class="bm-badge bm-badge--maybe">Possibly</span>
                            </td>
                            <td data-label="Best Action">Roadside tyre change by Toretto</td>
                            <td data-label="Alternative">Self-change with correct tools</td>
                        </tr>
                        <tr>
                            <td data-label="Situation">Run out of fuel</td>
                            <td data-label="Recovery Needed?"><span class="bm-badge bm-badge--unlikely">Unlikely</span>
                            </td>
                            <td data-label="Best Action">Toretto emergency fuel delivery</td>
                            <td data-label="Alternative">Nearest ENOC station is walkable</td>
                        </tr>
                        <tr>
                            <td data-label="Situation">Road traffic accident</td>
                            <td data-label="Recovery Needed?"><span class="bm-badge bm-badge--yes">✅ Yes</span></td>
                            <td data-label="Best Action">Toretto accident recovery</td>
                            <td data-label="Alternative">None — legally required</td>
                        </tr>
                        <tr>
                            <td data-label="Situation">Engine failure / seized gearbox</td>
                            <td data-label="Recovery Needed?"><span class="bm-badge bm-badge--yes">✅ Yes</span></td>
                            <td data-label="Best Action">Toretto specialist transport</td>
                            <td data-label="Alternative">None — cannot be ridden</td>
                        </tr>
                        <tr>
                            <td data-label="Situation">ECU fault / limp mode</td>
                            <td data-label="Recovery Needed?"><span class="bm-badge bm-badge--likely">Likely
                                    Yes</span></td>
                            <td data-label="Best Action">Toretto on-site diagnostic + transport</td>
                            <td data-label="Alternative">Manufacturer roadside assist</td>
                        </tr>
                        <tr>
                            <td data-label="Situation">Illegal parking impound</td>
                            <td data-label="Recovery Needed?"><span class="bm-badge bm-badge--yes">✅ Yes</span></td>
                            <td data-label="Best Action">Toretto compound recovery coordination</td>
                            <td data-label="Alternative">Attend compound in person</td>
                        </tr>
                        <tr>
                            <td data-label="Situation">Lost / failed key</td>
                            <td data-label="Recovery Needed?"><span class="bm-badge bm-badge--yes">✅ Yes</span></td>
                            <td data-label="Best Action">Toretto transport to dealership</td>
                            <td data-label="Alternative">None — immobiliser prevents riding</td>
                        </tr>
                        <tr>
                            <td data-label="Situation">New purchase, unregistered</td>
                            <td data-label="Recovery Needed?"><span class="bm-badge bm-badge--yes">✅ Yes</span></td>
                            <td data-label="Best Action">Toretto enclosed transport</td>
                            <td data-label="Alternative">None — illegal to ride without plates</td>
                        </tr>
                        <tr>
                            <td data-label="Situation">Long-distance move between emirates</td>
                            <td data-label="Recovery Needed?"><span
                                    class="bm-badge bm-badge--recommended">Recommended</span></td>
                            <td data-label="Best Action">Toretto long-distance transport</td>
                            <td data-label="Alternative">Riding — if mechanically sound</td>
                        </tr>
                        <tr>
                            <td data-label="Situation">Overheating (coolant level low only)</td>
                            <td data-label="Recovery Needed?"><span class="bm-badge bm-badge--maybe">Maybe</span></td>
                            <td data-label="Best Action">Toretto on-site coolant top-up</td>
                            <td data-label="Alternative">Self top-up if coolant available nearby</td>
                        </tr>
                        <tr>
                            <td data-label="Situation">Desert off-road stuck / fallen bike</td>
                            <td data-label="Recovery Needed?"><span class="bm-badge bm-badge--yes">✅ Yes</span></td>
                            <td data-label="Best Action">Toretto desert-capable 4x4 recovery team</td>
                            <td data-label="Alternative">Organised group recovery attempt</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

    <!-- BALANCED PERSPECTIVE -->
    <section class="bm-perspective-section">
        <div class="container">

            <div class="bm-coverage-header">
                <span class="bm-eyebrow">
                    <i class="fas fa-arrows-left-right"></i>
                    Balanced Perspective
                </span>
                <h2 class="bm-coverage-title">
                    Professional Motorcycle Recovery — <br><span>Full Transparency on Benefits and Limitations</span>
                </h2>
            </div>

            <div class="bm-perspective-duo">

                <!-- Advantages -->
                <div class="bm-perspective-panel bm-perspective-panel--pros">
                    <div class="bm-perspective-panel-head">
                        <div class="bm-perspective-panel-badge"><i class="fas fa-circle-check"></i></div>
                        <h3>Advantages of <a class="text-link" href="{{ route('home') }}">Professional Recovery</a></h3>
                    </div>
                    <ul>
                        <li><i class="fas fa-check"></i> Your motorcycle's structural integrity and paintwork are
                            protected by specialist equipment — no damage during transport</li>
                        <li><i class="fas fa-check"></i> Legal and insurance documentation is generated at the scene,
                            simplifying claims and removing dispute risk</li>
                        <li><i class="fas fa-check"></i> 24/7 availability means you are never stranded regardless of
                            time, location, or weather</li>
                        <li><i class="fas fa-check"></i> Full accident coordination with Dubai Police, RTA, and your
                            insurance company — one call resolves multiple agencies</li>
                        <li><i class="fas fa-check"></i> Remote desert and off-road recovery capability that no private
                            vehicle can replicate</li>
                        <li><i class="fas fa-check"></i> Trained technicians diagnose faults before transport — often
                            resolving the issue on-site and avoiding a workshop visit entirely</li>
                        <li><i class="fas fa-check"></i> Covered by in-transit insurance from the moment the bike is
                            loaded — zero additional liability to the owner</li>
                        <li><i class="fas fa-check"></i> Compliance with all UAE road regulations, preventing secondary
                            fines for incorrect vehicle movement after an accident</li>
                        <li><i class="fas fa-check"></i> Peace of mind for high-value or exotic motorcycles that cannot
                            afford any risk of secondary damage</li>
                        <li><i class="fas fa-check"></i> Nationwide reach across all seven emirates and GCC cross-border
                            capability when required</li>
                    </ul>
                </div>

                <!-- Limitations -->
                <div class="bm-perspective-panel bm-perspective-panel--cons">
                    <div class="bm-perspective-panel-head">
                        <div class="bm-perspective-panel-badge"><i class="fas fa-triangle-exclamation"></i></div>
                        <h3>Limitations to Be Aware Of</h3>
                    </div>
                    <ul>
                        <li><i class="fas fa-info-circle"></i> Professional recovery carries a service cost — for a
                            simple issue like an empty fuel tank, a call-out fee applies regardless of the resolution
                            method</li>
                        <li><i class="fas fa-info-circle"></i> During peak demand periods (major accidents on E11,
                            severe weather, holiday weekends), response times can extend beyond the standard 20-minute
                            commitment in outer zones</li>
                        <li><i class="fas fa-info-circle"></i> Desert recovery in extreme sand conditions may require a
                            second specialist 4x4 support vehicle, which takes longer to deploy than a standard metro
                            response</li>
                        <li><i class="fas fa-info-circle"></i> Cross-border transport requires documentation preparation
                            time of 24–48 hours for some GCC countries — not a same-day service for Oman or Saudi
                            Arabia</li>
                        <li><i class="fas fa-info-circle"></i> Some insurance policies have recovery claim limits that
                            may not cover the full service invoice — the rider remains responsible for any shortfall</li>
                        <li><i class="fas fa-info-circle"></i> For truly minor issues, a 20-minute wait for recovery may
                            be slower than a neighbour or friend with a jump-start cable arriving first</li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

    <!-- VERIFIED EXPERTISE -->
    <section class="bm-expertise-section">
        <div class="container">

            <div class="bm-coverage-header">
                <span class="bm-eyebrow">
                    <i class="fas fa-award"></i>
                    Verified Expertise
                </span>
                <h2 class="bm-coverage-title">
                    Toretto Recovery — Who We Are and <br><span>Why Our Experience Matters to Your Bike</span>
                </h2>
            </div>

            <!-- Story Block -->
            <div class="bm-expertise-story">
                <div class="bm-expertise-story-bar"></div>
                <div class="bm-expertise-story-body">
                    <p>Toretto Recovery was established in Dubai to answer a gap that every motorcycle owner in the UAE
                        knows exists: the absence of a truly specialist two-wheel recovery service. For years, Dubai's
                        growing rider community — now numbering in the tens of thousands — was served by generic
                        operators whose car-centric equipment caused preventable damage to some of the city's finest
                        machines.</p>
                    <p>Our founding team includes certified motorcycle mechanics, former track-safety marshals,
                        RTA-licensed transport operators, and insurance logistics professionals. Every Toretto technician
                        completes a minimum 120-hour motorcycle-specific recovery training programme before attending a
                        solo call-out, covering load security, hazard management, electronic system protocols, and
                        customer communication under stress.</p>
                    <p>We hold active membership in the UAE Recovery Operators Association and work directly with Dubai
                        Police's traffic department on highway incident management protocols. Our operational procedures
                        are reviewed annually against the RTA Code of Practice and updated to reflect new motorcycle
                        technology — electric drivetrains, advanced rider assistance systems, and integrated telematics.
                    </p>
                    <p>The Dubai motorcycle community trusts Toretto Recovery not because of marketing — but because
                        experienced riders who know their machines found that we handle them the same way they would.
                        That reputation, built on thousands of successful recoveries, is the most accurate measure of our
                        expertise we can offer.</p>
                </div>
            </div>

            <!-- Certifications -->
            <div class="bm-certs-wrap">
                <h3 class="bm-certs-heading"><i class="fas fa-certificate"></i> Our Certifications & Affiliations</h3>
                <div class="bm-certs-grid">
                    <div class="bm-cert-tag"><i class="fas fa-id-badge"></i> RTA Dubai — Licensed Recovery Operator
                    </div>
                    <div class="bm-cert-tag"><i class="fas fa-users"></i> UAE Recovery Operators Association — Active
                        Member</div>
                    <div class="bm-cert-tag"><i class="fas fa-building-shield"></i> Dubai Police — Registered Accident
                        Scene Operator</div>
                    <div class="bm-cert-tag"><i class="fas fa-leaf"></i> Dubai Municipality — Environmental Compliance
                        Certificate</div>
                    <div class="bm-cert-tag"><i class="fas fa-graduation-cap"></i> IIRSM — Staff Certified</div>
                    <div class="bm-cert-tag"><i class="fas fa-motorcycle"></i> Manufacturer-endorsed: BMW Motorrad,
                        Ducati, KTM, Yamaha, Honda UAE</div>
                </div>
            </div>

            <!-- Commitment Block -->
            <div class="bm-commitment-block">
                <div class="bm-commitment-icon"><i class="fas fa-chart-line"></i></div>
                <div>
                    <h4>Our Commitment to Continuous Improvement</h4>
                    <p>Every recovery job is reviewed by our quality team within 24 hours. Customer feedback scores are
                        published internally each month. Equipment maintenance schedules exceed manufacturer
                        requirements. We train for scenarios that have never happened yet — because Dubai's roads never
                        stop surprising experienced riders.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- SAFETY FIRST -->
    <section class="bm-safety-section">
        <div class="container">

            <div class="bm-coverage-header">
                <span class="bm-eyebrow">
                    <i class="fas fa-hard-hat"></i>
                    Safety First
                </span>
                <h2 class="bm-coverage-title">
                    Safety Features and Precautions — <br><span>Protecting You, Your Bike, and Other Road Users</span>
                </h2>
            </div>

            <!-- Safety Features Grid -->
            <div class="bm-safety-grid">

                <div class="bm-safety-feature">
                    <div class="bm-safety-feature-hex">
                        <i class="fa-solid fa-ranking-star"></i>
                    </div>
                    <h4>Scene Safety Management</h4>
                    <p>Retroreflective cones, arrow boards, and safety barriers established within 30 seconds of
                        arrival. Our crew's first duty is hazard containment — not the motorcycle.</p>
                </div>

                <div class="bm-safety-feature">
                    <div class="bm-safety-feature-hex">
                        <i class="fas fa-check-double"></i>
                    </div>
                    <h4>Load Security Verification</h4>
                    <p>A five-point load check is completed verbally between both crew members before departure. Strap
                        tension is re-confirmed at every stop during transport.</p>
                </div>

                <div class="bm-safety-feature">
                    <div class="bm-safety-feature-hex">
                        <i class="fas fa-droplet"></i>
                    </div>
                    <h4>Fluid Containment</h4>
                    <p>Fuel, coolant, and oil spill containment at every incident. Absorbent granules, disposal bags,
                        and regulatory spill report filed before vehicle departure from the scene.</p>
                </div>

                <div class="bm-safety-feature">
                    <div class="bm-safety-feature-hex">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h4>Electric Vehicle Protocols</h4>
                    <p>All electric motorcycle handling follows high-voltage safety procedures — insulated tools, battery
                        isolation checks, and no spark tools within 2 metres of the battery pack.</p>
                </div>

                <div class="bm-safety-feature">
                    <div class="bm-safety-feature-hex">
                        <i class="fas fa-temperature-high"></i>
                    </div>
                    <h4>Heat Management in Summer Operations</h4>
                    <p>Crew vehicles are equipped with cooling stations for summer deployments. Rider welfare check —
                        water, shade, and cooling towels — is part of every call-out standard procedure from June to
                        September.</p>
                </div>

                <div class="bm-safety-feature">
                    <div class="bm-safety-feature-hex">
                        <i class="fas fa-kit-medical"></i>
                    </div>
                    <h4>First-Aid Certified Technicians</h4>
                    <p>Every field technician holds a current Emergency First Response certificate. Medical first-aid
                        bags are carried on all units. For injury accidents, ambulance services are contacted
                        simultaneously with police dispatch.</p>
                </div>

            </div>

        </div>
    </section>

    <!-- RESPONSE COMMITMENT -->
    <section class="bm-response-section">
        <div class="container">

            <div class="bm-coverage-header">
                <span class="bm-eyebrow">
                    <i class="fas fa-gauge-high"></i>
                    Response Commitment
                </span>
                <h2 class="bm-coverage-title">
                    Toretto Recovery Response Times — <br><span>What to Expect, Where You Are</span>
                </h2>
                <p class="bm-coverage-lead">Response time is not a marketing promise at Toretto Recovery — it is a
                    contractual commitment logged by our dispatch system for every call-out. Our fleet is pre-positioned
                    across Dubai's key zones to minimise travel time in the situations that matter most.</p>
            </div>

            <!-- Response Table -->
            <div class="bm-response-table-wrap">
                <table class="bm-decision-table">
                    <thead>
                        <tr>
                            <th>Coverage Zone</th>
                            <th>Examples</th>
                            <th>Standard Response</th>
                            <th>Priority (Accident/Highway)</th>
                            <th>Availability</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Central Metro</strong></td>
                            <td>Downtown, Business Bay, DIFC, Marina</td>
                            <td>12–18 min</td>
                            <td>8–12 min</td>
                            <td><span class="bm-badge bm-badge--yes">24/7</span></td>
                        </tr>
                        <tr>
                            <td><strong>Inner Suburbs</strong></td>
                            <td>Jumeirah, Al Barsha, Deira, Bur Dubai</td>
                            <td>15–22 min</td>
                            <td>10–15 min</td>
                            <td><span class="bm-badge bm-badge--yes">24/7</span></td>
                        </tr>
                        <tr>
                            <td><strong>Outer Residential</strong></td>
                            <td>Arabian Ranches, Mirdif, Town Square</td>
                            <td>20–30 min</td>
                            <td>15–22 min</td>
                            <td><span class="bm-badge bm-badge--yes">24/7</span></td>
                        </tr>
                        <tr>
                            <td><strong>Industrial & Free Zones</strong></td>
                            <td>Jebel Ali, DIP, DIC, Al Quoz</td>
                            <td>20–28 min</td>
                            <td>15–20 min</td>
                            <td><span class="bm-badge bm-badge--yes">24/7</span></td>
                        </tr>
                        <tr>
                            <td><strong>Highways</strong></td>
                            <td>E11, E311, E66, E44, E611</td>
                            <td>20–35 min</td>
                            <td>15–25 min</td>
                            <td><span class="bm-badge bm-badge--yes">24/7</span></td>
                        </tr>
                        <tr>
                            <td><strong>Mountain Roads</strong></td>
                            <td>Hatta, E44 Hajar sections</td>
                            <td>35–55 min</td>
                            <td>30–45 min</td>
                            <td><span class="bm-badge bm-badge--yes">24/7</span></td>
                        </tr>
                        <tr>
                            <td><strong>Desert Zones</strong></td>
                            <td>Al Qudra, Seih Al Salam, Private Estates</td>
                            <td>45–70 min</td>
                            <td>40–60 min</td>
                            <td><span class="bm-badge bm-badge--maybe">24/7 (conditions)</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Real-Time ETA Callout -->
            <div class="bm-eta-callout">
                <div class="bm-eta-callout-icon"><i class="fas fa-location-arrow"></i></div>
                <div>
                    <h4>Real-Time ETA Shared Immediately on Dispatch Confirmation</h4>
                    <p>You receive the technician's live GPS tracking link and an ETA via WhatsApp within 60 seconds of
                        confirming your call-out. No waiting in uncertainty — you watch us come to you in real time.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- COMMON QUESTIONS -->
    <section class="bm-faq-section">
        <div class="container">

            <div class="bm-coverage-header">
                <span class="bm-eyebrow">
                    <i class="fas fa-circle-question"></i>
                    Common Questions
                </span>
                <h2 class="bm-coverage-title">
                    Frequently Asked Questions <br><span>by Dubai Riders</span>
                </h2>
            </div>

            <div class="bm-faq-list">

                <div class="bm-faq-item">
                    <button class="bm-faq-trigger" type="button">
                        <span class="bm-faq-num">01</span>
                        <span class="bm-faq-q">Do you handle motorcycle recovery differently from how you would recover a
                            car?</span>
                        <i class="fas fa-chevron-down bm-faq-arrow"></i>
                    </button>
                    <div class="bm-faq-answer">
                        <p>Absolutely — and the difference is significant. Every piece of equipment and every technique our
                            crew uses is specific to two-wheel vehicles. We do not adapt car recovery tools for motorcycle
                            jobs. Our hydraulic tilt-decks, wheel chocks, frame-contact strap systems, and loading protocols
                            are all engineered for motorcycles and verified against manufacturer specifications for the
                            specific bike models we transport. Applying car recovery equipment to a motorcycle causes frame
                            stress, bodywork damage, and tyre deformation that may not be immediately visible but shortens
                            the motorcycle's safe service life.</p>
                    </div>
                </div>

                <div class="bm-faq-item">
                    <button class="bm-faq-trigger" type="button">
                        <span class="bm-faq-num">02</span>
                        <span class="bm-faq-q">What information should I have ready when I call Toretto Recovery?</span>
                        <i class="fas fa-chevron-down bm-faq-arrow"></i>
                    </button>
                    <div class="bm-faq-answer">
                        <p>To dispatch the right unit as quickly as possible, our dispatcher will ask for: your precise
                            location (share your WhatsApp Live Location for fastest results), the make and model of your
                            motorcycle, the nature of the breakdown (accident, mechanical fault, flat tyre, etc.), whether
                            there are any injuries requiring simultaneous emergency service notification, and your preferred
                            delivery destination. Having your Emirates ID and vehicle registration available speeds up the
                            documentation process on arrival.</p>
                    </div>
                </div>

                <div class="bm-faq-item">
                    <button class="bm-faq-trigger" type="button">
                        <span class="bm-faq-num">03</span>
                        <span class="bm-faq-q">Is my motorcycle insured during transport with Toretto Recovery?</span>
                        <i class="fas fa-chevron-down bm-faq-arrow"></i>
                    </button>
                    <div class="bm-faq-answer">
                        <p>Yes. Every motorcycle transported by Toretto Recovery is covered by our in-transit all-risks
                            insurance policy from the moment our technician makes physical contact with the vehicle until
                            signed delivery at the destination. If you require a certificate of insurance coverage before
                            the job begins, our operations centre can email this to you or your insurer within minutes of
                            dispatch confirmation. We work with all major UAE insurers and can submit documentation directly
                            on your behalf.</p>
                    </div>
                </div>

                <div class="bm-faq-item">
                    <button class="bm-faq-trigger" type="button">
                        <span class="bm-faq-num">04</span>
                        <span class="bm-faq-q">Can you recover a motorcycle from a Dubai desert safari or off-road
                            trail?</span>
                        <i class="fas fa-chevron-down bm-faq-arrow"></i>
                    </button>
                    <div class="bm-faq-answer">
                        <p>Yes. We maintain 4x4-equipped recovery units specifically for off-road and desert recovery
                            scenarios. Our desert-capable teams operate across Al Qudra, Seih Al Salam, Hatta foothills, and
                            private estate access roads. Response time to off-road locations is naturally longer than metro
                            zones — between 45 and 70 minutes in most cases — but we can reach locations that standard
                            recovery operators physically cannot access. Call us with GPS coordinates for the fastest
                            dispatch routing.</p>
                    </div>
                </div>

                <div class="bm-faq-item">
                    <button class="bm-faq-trigger" type="button">
                        <span class="bm-faq-num">05</span>
                        <span class="bm-faq-q">What happens if my motorcycle is involved in an accident and I need to wait
                            for Dubai Police?</span>
                        <i class="fas fa-chevron-down bm-faq-arrow"></i>
                    </button>
                    <div class="bm-faq-answer">
                        <p>Our technician remains at the scene with you until the police report is completed and a case
                            reference number is issued. We do not move the motorcycle before legal clearance — doing so
                            creates complications for insurance claims and may result in regulatory issues. While waiting,
                            our crew documents the scene, manages traffic safely, coordinates with your insurer, and keeps
                            you informed throughout. Once the police clear the scene, we begin the recovery process
                            immediately.</p>
                    </div>
                </div>

                <div class="bm-faq-item">
                    <button class="bm-faq-trigger" type="button">
                        <span class="bm-faq-num">06</span>
                        <span class="bm-faq-q">Do you provide motorcycle recovery for delivery and courier fleet
                            operators?</span>
                        <i class="fas fa-chevron-down bm-faq-arrow"></i>
                    </button>
                    <div class="bm-faq-answer">
                        <p>Yes — we hold commercial fleet contracts with several major delivery operators in Dubai. Fleet
                            accounts receive priority dispatch, consolidated monthly invoicing, dedicated account
                            management, and a guaranteed maximum response time written into the service agreement. If you
                            operate a delivery fleet and experience frequent motorcycle breakdowns, <a class="text-link"
                                href="{{ route('contact') }}">contact</a> our business
                            development team to discuss a tailored fleet recovery package that reduces your downtime cost.
                        </p>
                    </div>
                </div>

                <div class="bm-faq-item">
                    <button class="bm-faq-trigger" type="button">
                        <span class="bm-faq-num">07</span>
                        <span class="bm-faq-q">Can Toretto Recovery transport my newly purchased motorcycle from a private
                            seller?</span>
                        <i class="fas fa-chevron-down bm-faq-arrow"></i>
                    </button>
                    <div class="bm-faq-answer">
                        <p>Absolutely — this is one of our most common service requests. Unregistered or newly purchased
                            motorcycles cannot legally be ridden on public roads, making transport the only compliant
                            option. We collect from private addresses, dealerships, and auction facilities across all seven
                            emirates, and deliver with full documentation including a pre- and post-transport condition
                            report that protects both the buyer and seller. Payment terms can be arranged to settle on
                            successful delivery confirmation.</p>
                    </div>
                </div>

                <div class="bm-faq-item">
                    <button class="bm-faq-trigger" type="button">
                        <span class="bm-faq-num">08</span>
                        <span class="bm-faq-q">What is your cancellation policy if I manage to resolve the issue before you
                            arrive?</span>
                        <i class="fas fa-chevron-down bm-faq-arrow"></i>
                    </button>
                    <div class="bm-faq-answer">
                        <p>We understand that sometimes a breakdown resolves itself — a stuck key that finally turns, or a
                            delivery fleet rider who managed to push the bike to safety. If you cancel before our unit has
                            departed the base, no charge applies. If our team is already en route, a nominal call-out fee
                            may apply to cover fuel and crew time — this will be confirmed transparently when you cancel the
                            job. We never apply penalty charges for genuine self-resolution of a <a class="text-link"
                                href="{{ route('our-service.ourservice', ['slug' => 'roadside-assistance-dubai']) }}">roadside
                                problem.</a></p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- CTA — STRANDED BIKE -->
    <section class="bm-cta-section">
        <div class="container">
            <div class="bm-cta-inner">
                <div class="bm-cta-badge"><i class="fas fa-motorcycle"></i> 24/7 Emergency Recovery</div>
                <h2>Your Bike Is Stranded.<br>We Are <span>20 Minutes</span> Away.</h2>
                <p>Dubai's only dedicated motorcycle recovery service — on every road, at every hour, for every type of
                    bike.</p>
                <div class="bm-cta-actions">
                    <a href="tel:+971523003423" class="theme-btn">
                        <i class="fas fa-phone"></i> Call Now — +971 52 300 3423
                    </a>
                    <a href="https://wa.me/971523003423" target="_blank" class="theme-btn theme-btn2">
                        <i class="fab fa-whatsapp"></i> WhatsApp Live Location
                    </a>
                </div>
            </div>
        </div>
    </section>

    <link rel="stylesheet" href="{{ asset('assets/css/bike-motocycle.css') }}">

    <script>
        // Urban Districts Accordion
        const leAccordionItems = document.querySelectorAll('.le-accordion-item');
        leAccordionItems.forEach((item, index) => {
            // Open first item by default
            if (index === 0) item.classList.add('le-open');
            item.querySelector('.le-accordion-head').addEventListener('click', () => {
                const isOpen = item.classList.contains('le-open');
                leAccordionItems.forEach(i => i.classList.remove('le-open'));
                if (!isOpen) item.classList.add('le-open');
            });
        });

        // Original FAQ functionality (if exists)

        document.querySelectorAll('.faq-question').forEach(btn => {
            btn.addEventListener('click', () => {
                const item = btn.parentElement;
                item.classList.toggle('active');
            });
        });

        // New FAQ Section functionality
        document.querySelectorAll('.faq-question-new').forEach(btn => {
            btn.addEventListener('click', () => {
                const item = btn.parentElement;

                // Close all other items
                document.querySelectorAll('.faq-item').forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });

                // Toggle current item
                item.classList.toggle('active');
            });
        });

        // LSC FAQ Section accordion
        document.querySelectorAll('.lsc-faq-question').forEach(btn => {
            btn.addEventListener('click', () => {
                const item = btn.parentElement;
                const isOpen = item.classList.contains('lsc-open');
                // Close all
                document.querySelectorAll('.lsc-faq-item').forEach(i => i.classList.remove('lsc-open'));
                // Toggle current
                if (!isOpen) item.classList.add('lsc-open');
            });
        });
        // Bike & Motorcycle FAQ accordion
        document.querySelectorAll('.bm-faq-trigger').forEach(btn => {
            btn.addEventListener('click', () => {
                const item = btn.parentElement;
                const isOpen = item.classList.contains('bm-faq-active');
                document.querySelectorAll('.bm-faq-item').forEach(i => i.classList.remove('bm-faq-active'));
                if (!isOpen) item.classList.add('bm-faq-active');
            });
        });
    </script>
@endsection
