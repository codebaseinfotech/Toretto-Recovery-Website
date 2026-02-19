@extends('layouts.main')

@section('title')
    Professional Luxury & Sports Car Handling Specialist in Dubai | Toretto Recovery
@endsection

@section('meta_description')
    With 15 years of experience, Toretto Recovery provides expert luxury & sports car handling in Dubai—safe transport,
    precision care & specialist recovery you can trust.
@endsection

@section('meta_keywords', 'With 15 years of experience, Toretto Recovery provides expert luxury & sports car handling in
    Dubai—safe transport, precision care & specialist recovery you can trust.')

@section('schema')
    @verbatim
        <script type="application/ld+json">
        {
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Will you come to my location even if it is far from the city?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Our coverage spans the full emirate — from Jebel Ali Industrial Area to Al Qudra, from Hatta Road to the Palm’s outer crescent. Remote locations may take longer to reach but are fully within our operational range. Desert and off-road sites are handled by appropriately equipped recovery units."
      }
    },
    {
      "@type": "Question",
      "name": "My car is very low — will a standard flatbed work?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Vehicles with ground clearance below 100mm require a hydraulic lowering flatbed that drops to near-ground level for safe loading. We confirm vehicle specifications during dispatch to ensure the correct equipment is sent before arrival."
      }
    },
    {
      "@type": "Question",
      "name": "Can you handle electric and hybrid exotic cars safely?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Electric and hybrid exotic vehicles require specific high-voltage safety protocols, correct jump-start procedures, and awareness of battery integrity after faults or collisions. Our technicians are trained in EV and hybrid handling, including battery isolation procedures when required."
      }
    },
    {
      "@type": "Question",
      "name": "Will my insurance company accept Toretto Recovery documentation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Toretto Recovery is RTA-licensed, and our service documentation meets the requirements of major UAE insurance providers. We provide detailed service records, photographic evidence, and operator certification details suitable for insurance claims and submissions."
      }
    },
    {
      "@type": "Question",
      "name": "How quickly can you actually reach me?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our typical response time ranges from 10 to 45 minutes depending on location and traffic conditions. Dispatch provides a real-time ETA based on the nearest available unit’s live GPS position, not an estimated or optimistic timeframe."
      }
    },
    {
      "@type": "Question",
      "name": "What if I am not sure what is wrong with my car?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Describe any warning lights, sounds, behaviour changes, or events that occurred before the issue. This information allows our dispatcher and operator to bring the appropriate equipment. Transporting a vehicle with an unclear fault is safer than driving and risking further damage."
      }
    },
    {
      "@type": "Question",
      "name": "Can you take my car directly to a specific dealership or independent specialist?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We transport vehicles to authorised dealership service centres, independent marque specialists, insurance-approved bodyshops, or private garages. We are familiar with major specialist locations across the metropolitan area and can confirm destination acceptance when required."
      }
    },
    {
      "@type": "Question",
      "name": "Do you handle classic and vintage cars differently?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Classic and vintage vehicles often have unique suspension designs, floor structures, and tyre profiles. We use enclosed flatbed transport with custom wheel chocking and manual tie-down positioning, allowing additional assessment and loading time to ensure safe handling."
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
        style="background: url('{{ asset('assets/images/luxury-car-handling-dubai.jpg') }}');">

        <div class="container">
            <div class="row align-items-center min-vh-75">

                <!-- LEFT CONTENT -->
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="hero-content-wrapper text-white">

                        <!-- Main Heading -->
                        <h1 class="hero-main-title mb-3">
                            Luxury & Sports Car Handling Dubai
                        </h1>


                        <ul class="breadcrumb-menu">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                                <i class="fa fa-angle-double-right"></i>
                            </li>
                            <li class="active">Luxury & Sports Car Handling Dubai</li>
                        </ul>

                        <!-- Subtitle -->
                        <p class="mt-3 mb-3">
                            Certified Recovery Specialists for High-Performance & Exotic Automobiles
                        </p>

                        <!-- USP Highlights -->
                        <div class="usp-highlights mb-4">
                            <div class="usp-item">
                                <i class="fa-solid fa-shield-halved"></i>
                                <span>RTA-Licensed</span>
                            </div>
                            <div class="usp-item">
                                <i class="fa-solid fa-truck-ramp-box"></i>
                                <span>Enclosed Flatbed Transport</span>
                            </div>
                            <div class="usp-item">
                                <i class="fa-solid fa-hand-holding-heart"></i>
                                <span>24/7 Immediate Dispatch</span>
                            </div>
                        </div>

                        <!-- Checkmark Stats -->
                        <div class="check-stats mb-4">
                            <div class="check-item">
                                <i class="fa-solid fa-circle-check"></i>
                                <span>Fully Insured</span>
                            </div>
                            <div class="check-item">
                                <i class="fa-solid fa-circle-check"></i>
                                <span>RTA-Licensed Operators</span>
                            </div>
                            <div class="check-item">
                                <i class="fa-solid fa-circle-check"></i>
                                <span>Modern Specialist Fleet</span>
                            </div>
                            <div class="check-item">
                                <i class="fa-solid fa-circle-check"></i>
                                <span>10-45 Minute Response Time</span>
                            </div>
                        </div>

                        <p class="mt-3 mb-3">
                            Every assignment handled by certified technicians trained specifically in high-value automobile
                            protocols. No apprentices on your supercar.
                        </p>

                        <!-- CTA Section -->
                        <div class="hero-btn mt-4">
                            <a href="{{ route('book.now') }}" class="theme-btn">
                                Book Now <i class="fas fa-arrow-right-long"></i>
                            </a>
                            <a href="tel:+971523003423" class="theme-btn theme-btn2">
                                Call / WhatsApp <i class="fas fa-arrow-right-long"></i>
                            </a>
                        </div>
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


    <section class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 imagebag">
                    <div class="about-left wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/luxury-car-recovery-from-illegel-parked.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow animate__animated animate__fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline"><i class="fa-solid fa-car"></i>Welcome to Toretto
                                Recovery</span>
                            <h2 class="site-title">When the Machine That Defines You Needs <span>Expert Hands</span></h2>
                        </div>
                        <p class="mb-1">You didn't choose a Ferrari, Lamborghini, Porsche, McLaren, or Rolls-Royce by
                            accident. These machines represent engineering at its absolute peak — and an investment that
                            demands nothing less than elite-level care when things go wrong on the road.
                        </p>
                        <p class="mb-1">Yet the reality of driving high-performance automobiles in a city like Dubai is
                            that
                            emergencies happen. A sudden mechanical failure on Sheikh Zayed Road. A collision in the valet
                            area at a five-star hotel. A dead battery in the basement parking of a tower. A flat tyre on the
                            way to a business meeting. Each scenario carries the same urgent question: who do you trust with
                            a vehicle that cannot afford careless handling?
                        </p>
                        <p class="mb-1">At Toretto Recovery, we have built our entire operational framework around one
                            non-negotiable principle — your vehicle leaves our care in the same condition it arrived, or
                            better. We operate across every district, highway, and terrain type the emirate offers, with the
                            specialist equipment and certified expertise that exotic automobiles demand.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPREHENSIVE SAFETY & PROFESSIONAL SERVICES SECTION -->
    <section class="safety-professional-services py-120">
        <div class="container">
            <!-- Essential Motorist Safety Guidelines -->
            <div class="safety-subsection mb-5">
                <div class="subsection-header text-center mb-5">
                    <h2 class="site-title">The Real Risks of <span>Standard Recovery</span> for High-Value Automobiles</h2>
                    <p style="max-width: 900px; margin: 20px auto 0; color: #666; font-size: 17px;">
                        Following these protocols protects personal safety and legal standing
                    </p>
                </div>
                <div class="step-content">
                    <ul>
                        <li>Most standard tow trucks are built for everyday saloons and SUVs — not for supercars
                            engineered
                            millimetres from the ground. Attempting to pull a low-clearance luxury vehicle onto a
                            conventional wheel-lift can cause <span style="font-weight: 700; color: #000;">severe and
                                irreversible damage</span> to front splitters, underbody aerodynamics, exposed carbon fibre
                            panels, and performance exhaust systems. Even incorrect tie-down points can scratch bespoke
                            paintwork or crack aero kits worth <span style="font-weight: 700; color: #000;">tens of
                                thousands of dirhams</span>.
                        </li>
                        <li>While many operators advertise a general <span style="font-weight: 700; color: #000;">towing
                                service across Dubai</span>, few are equipped or trained to handle exotic and
                            high-performance vehicles correctly. The risk doesn’t stop at physical damage.There’s also a
                            critical <span style="font-weight: 700; color: #000;">insurance
                                and compliance factor</span>. Insurers covering luxury and sports cars often require
                            documented proof that recovery was carried out by an <span
                                style="font-weight: 700; color: #000;">authorised, licensed operator</span>. Using an
                            unapproved service — even once — can delay, complicate, or completely invalidate an
                            insurance
                            claim.
                        </li>
                        <li>We have witnessed the aftermath of improper handling too many times — damaged underbodies,
                            disputed claims, and unnecessary financial loss. That is precisely why <span
                                style="font-weight: 700; color: #000;">specialist luxury car recovery is not an upgrade we
                                offer — it is
                                the foundation of how we operate</span>, delivering a truly professional <a
                                class="text-link"
                                href="{{ route('our-service.ourservice', ['slug' => 'towing-service-dubai']) }}">towing
                                service across Dubai</a> for high-value vehicles.
                        </li>
                    </ul>
                </div>

                <div class="text-center mt-5">
                    <div class="alert alert-info"
                        style="background: #d70006; color: #fff; border: none; padding: 20px; border-radius: 10px; max-width: 900px; margin: 0 auto;">
                        <strong> Important * : <span style="font-weight: 900; text-transform: uppercase;">Insurance
                                Compliance</span>
                        </strong>
                        <p>All Toretto Recovery operations comply with RTA licensing requirements and documentation
                            standards accepted by major UAE insurance providers. Our service records are formatted for
                            seamless submission to your insurer.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR SPECIALIST SERVICES SECTION -->
    <section class="specialist-services-section py-120">
        <div class="container">

            <!-- Section Header -->
            <div class="specialist-section-header mb-5">
                <div class="specialist-header-grid">
                    <!-- Left: Text Content -->
                    <div class="specialist-header-text">
                        <span class="specialist-eyebrow">Precision. Protection. Performance.</span>
                        <h2 class="site-title mt-3">Our Specialist Services for <span>Luxury &amp; Sports Car Owners</span>
                        </h2>
                        <p class="specialist-intro-text">
                            Every service we provide is engineered around the specific demands of high-performance and
                            exotic automobiles — not adapted from generic procedures.
                        </p>
                    </div>
                    <!-- Right: Image -->
                    <div class="specialist-header-image-wrap">
                        <div class="specialist-header-img-inner">
                            <img src="{{ asset('assets/images/low-tow-truck-towing-sports-car.jpg') }}"
                                alt="Specialist luxury car flatbed transport Dubai" class="specialist-header-img"
                                loading="lazy">
                        </div>
                    </div>
                </div>
            </div>


            <!-- PART 1: Precision Accident Recovery -->
            <div class="specialist-service-block">
                <div class="specialist-block-header">
                    <div class="specialist-block-icon">
                        <i class="fa-solid fa-car-burst"></i>
                    </div>
                    <div>
                        <h3 class="specialist-h3">Precision <a class="text-link"
                                href="{{ route('our-service.ourservice', ['slug' => 'accidental-car-recovery']) }}">Accident
                                Recovery </a> &amp; Post-Collision Transport
                        </h3>
                        <p class="specialist-block-intro">Collisions involving exotic automobiles require a fundamentally
                            different approach from the first moment of contact. Our technicians arrive equipped and trained
                            to assess structural integrity before anything else — deployed airbags, compromised chassis
                            geometry, leaking fluids, and damaged suspension components all change the safe loading
                            methodology.
                        </p>
                    </div>
                </div>

                <div class="specialist-cards-grid">
                    <!-- Enclosed Flatbed -->
                    <div class="specialist-card specialist-card--dark">
                        <div class="specialist-card-icon-wrap">
                            <i class="fa-solid fa-truck-ramp-box"></i>
                        </div>
                        <h4 class="specialist-h4"><a class="text-link"
                                href="{{ route('our-service.ourservice', ['slug' => 'luxury-sports-car-handling-dubai']) }}">Enclosed
                                Flatbed Transport</a> - The Gold Standard</h4>
                        <p>Our enclosed flatbed platforms are the correct and only appropriate solution for vehicles with
                            extreme low ground clearance, wide-body configurations, or bespoke aerodynamic packages. The
                            hydraulic loading system brings the platform to ground level, allowing the vehicle to roll on
                            under its own weight or be guided manually - zero dragging, zero scraping, zero
                            compromise.
                        </p>
                        <p class="mt-3">Interior padding, wheel chocks, and non-abrasive soft tie-down systems secure the
                            vehicle without touching painted surfaces or carbon components. Climate consideration during
                            summer months means we also account for excessive heat on interior materials and exterior
                            finishes during open-air transit.
                        </p>
                    </div>

                    <!-- Open Flatbed -->
                    <div class="specialist-card specialist-card--light">
                        <div class="specialist-card-icon-wrap specialist-card-icon-wrap--red">
                            <i class="fa-solid fa-truck"></i>
                        </div>
                        <h4 class="specialist-h4">Open Flatbed Recovery</h4>
                        <p>For sports cars and performance vehicles that do not require full enclosure, our open flatbed
                            fleet provides the same precision loading process and securing methodology. These units serve as
                            the ideal solution for rapid response situations where the priority is <strong>safe, immediate
                                extraction</strong> from a hazardous or high-visibility location.</p>
                    </div>

                    <!-- Wheel-Lift -->
                    <div class="specialist-card specialist-card--light">
                        <div class="specialist-card-icon-wrap specialist-card-icon-wrap--red">
                            <i class="fa-solid fa-car-side"></i>
                        </div>
                        <h4 class="specialist-h4">Wheel-Lift for Rear-Drive Sports Cars</h4>
                        <p>When structural damage is confined to the front end and rear wheels retain full integrity, our
                            specialist wheel-lift deployment allows efficient recovery that protects the drivetrain. Our
                            operators understand the specific <strong>weight distributions and tyre profiles</strong> of
                            rear-wheel-drive performance cars - this is not a generic procedure applied universally.</p>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <div class="specialist-divider"></div>

            <!-- PART 2: Roadside Assistance -->
            <div class="specialist-service-block">
                <div class="specialist-block-header">
                    <div class="specialist-block-icon specialist-block-icon--red">
                        <i class="fa-solid fa-road-circle-check"></i>
                    </div>
                    <div>
                        <h3 class="specialist-h3">Complete <a class="text-link"
                                href="{{ route('our-service.ourservice', ['slug' => 'roadside-assistance-dubai']) }}">Roadside
                                Assistance</a> - Beyond Recovery</h3>
                        <p class="specialist-block-intro">Not every emergency requires transport. Our full roadside
                            assistance capability means your first call to Toretto Recovery can resolve many situations on
                            the spot, keeping you on schedule without the complexity of a full recovery operation.</p>
                    </div>
                </div>

                <div class="specialist-roadside-grid">

                    <!-- Battery Jump Start -->
                    <div class="specialist-roadside-card">
                        <div class="specialist-roadside-number">01</div>
                        <div class="specialist-roadside-content">
                            <div class="specialist-roadside-icon">
                                <i class="fa-solid fa-bolt"></i>
                            </div>
                            <h4 class="specialist-h4">Battery Jump Start for Exotic &amp; Performance Vehicles</h4>
                            <p>Modern supercars and luxury automobiles carry sophisticated battery management systems,
                                stop-start technology, and multiple ECU units that are extraordinarily sensitive to voltage
                                spikes. Standard jump-start procedures used on ordinary vehicles can permanently damage
                                these systems, triggering costly electronic failures days after the jump.</p>
                            <p class="mt-2">Our technicians use <strong>professional-grade smart chargers and jump
                                    packs</strong> calibrated for high-end automotive electronics. We follow
                                manufacturer-specific procedures for each marque — the correct protocol for a Lamborghini
                                HuracÃ¡n differs from that of a Bentley Bentayga. This knowledge is not incidental; it is
                                part of our specialist training.</p>
                        </div>
                    </div>

                    <!-- Emergency Fuel Delivery -->
                    <div class="specialist-roadside-card">
                        <div class="specialist-roadside-number">02</div>
                        <div class="specialist-roadside-content">
                            <div class="specialist-roadside-icon">
                                <i class="fa-solid fa-gas-pump"></i>
                            </div>
                            <h4 class="specialist-h4">Emergency Fuel Delivery</h4>
                            <p>Fuel gauges on performance cars sometimes behave unpredictably under hard acceleration or on
                                steep terrain. Running low in the middle of a desert road towards Hatta, or on the approach
                                to Al Maktoum International, is not an uncommon scenario for drivers pushing their vehicles.
                            </p>
                            <p class="mt-2">We deliver fuel directly to your location — whether you are on a central
                                urban
                                boulevard, a remote highway, or a private development. <strong>Multiple fuel grades are
                                    available</strong>, including the high-octane options that high-compression performance
                                engines require. We never deliver incorrect fuel grades; confirmation is always obtained
                                before dispatch.</p>
                        </div>
                    </div>

                    <!-- Tyre Change -->
                    <div class="specialist-roadside-card">
                        <div class="specialist-roadside-number">03</div>
                        <div class="specialist-roadside-content">
                            <div class="specialist-roadside-icon">
                                <i class="fa-solid fa-circle-dot"></i>
                            </div>
                            <h4 class="specialist-h4">Tyre Change Assistance</h4>
                            <p>Performance tyres — particularly run-flats, staggered setups, and bespoke wide-profile
                                tyres
                                — require handling knowledge beyond standard tyre changing. We carry equipment suited for
                                <strong>low-profile tyres</strong> and understand the torque specifications that prevent
                                wheel damage on lightweight alloys and carbon-ceramic brake-equipped vehicles.
                            </p>
                        </div>
                    </div>

                    <!-- Lockout Assistance -->
                    <div class="specialist-roadside-card">
                        <div class="specialist-roadside-number">04</div>
                        <div class="specialist-roadside-content">
                            <div class="specialist-roadside-icon">
                                <i class="fa-solid fa-unlock-keyhole"></i>
                            </div>
                            <h4 class="specialist-h4">Lockout Assistance</h4>
                            <p>Electronic key fobs, proximity sensors, and keyless entry systems on luxury automobiles
                                occasionally fail unexpectedly. Our operators are trained in <strong>non-destructive lockout
                                    procedures</strong> that gain access without triggering alarm escalation or damaging the
                                door seals and frame — a consideration genuinely important for vehicles with bespoke
                                interior finishing.</p>
                        </div>
                    </div>

                    <!-- Mechanical First Assessment -->
                    <div class="specialist-roadside-card specialist-roadside-card--wide">
                        <div class="specialist-roadside-number">05</div>
                        <div class="specialist-roadside-content">
                            <div class="specialist-roadside-icon">
                                <i class="fa-solid fa-magnifying-glass-chart"></i>
                            </div>
                            <h4 class="specialist-h4">On-Road Mechanical First Assessment</h4>
                            <p>When your vehicle displays a warning light or behaves unusually, our technicians provide an
                                initial on-road assessment. We cannot replace a full diagnostic, but identifying whether a
                                situation is safe to drive or requires immediate transport <strong>prevents drivers from
                                    unknowingly causing greater mechanical damage</strong> by continuing to operate a
                                compromised vehicle.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- LOCAL EXPERTISE SECTION -->
    <section class="le-section py-120">
        <div class="container">

            <!-- Section Header -->
            <div class="text-center mb-5">
                <span class="specialist-eyebrow">Dubai. Every Road. Every District.</span>
                <h2 class="site-title mt-3">Local Expertise Across Every Environment <span>Dubai Presents</span></h2>
                <p class="specialist-intro-text">
                    Responding effectively to an emergency involving a high-value automobile requires more than technical
                    skill — it requires deep familiarity with the city's geography, traffic behaviour, access
                    restrictions,
                    and terrain variations. Our operators have worked these roads for years. This is their professional
                    home.
                </p>
            </div>

            <!-- ===== PART 1: Urban Districts — Image + Accordion List ===== -->
            <div class="le-urban-wrap mb-5">
                <div class="le-urban-label">
                    <i class="fa-solid fa-city"></i>
                    <span>Urban Districts &amp; High-Profile Locations</span>
                </div>
                <div class="le-urban-inner">
                    <!-- Left: sticky image -->
                    <div class="le-urban-img-col">
                        <div class="le-urban-img-frame">
                            <img src="{{ asset('assets/images/luxury-car-towing-by-flatbed-cover.jpg') }}"
                                alt="Recovery service Downtown Dubai" class="le-urban-img" loading="lazy">
                        </div>
                    </div>
                    <!-- Right: accordion list -->
                    <div class="le-urban-list">

                        <div class="le-accordion-item">
                            <div class="le-accordion-head">
                                <div class="le-acc-icon"><i class="fa-solid fa-building"></i></div>
                                <h4 class="le-acc-title">Downtown &amp; Business Bay</h4>
                                <i class="fa-solid fa-chevron-down le-acc-arrow"></i>
                            </div>
                            <div class="le-accordion-body">
                                <p>The towers of Downtown and Business Bay present multi-level basement parking scenarios
                                    that challenge standard equipment. We know the entry heights, turning radii, and loading
                                    bay configurations of major developments in these districts. Coordination with building
                                    security is handled professionally and efficiently, minimising the visibility of the
                                    situation for owners who value discretion.</p>
                                <p class="mt-2">Valet areas outside hotels on Financial Centre Road and Sheikh Mohammed
                                    Bin
                                    Rashid Boulevard require precise positioning to avoid blocking hotel operations. Our
                                    compact specialist units navigate these environments without creating secondary
                                    disruption.</p>
                            </div>
                        </div>

                        <div class="le-accordion-item">
                            <div class="le-accordion-head">
                                <div class="le-acc-icon"><i class="fa-solid fa-water"></i></div>
                                <h4 class="le-acc-title">Dubai Marina &amp; Palm Jumeirah</h4>
                                <i class="fa-solid fa-chevron-down le-acc-arrow"></i>
                            </div>
                            <div class="le-accordion-body">
                                <p>The residential promenades and basement car parks of Marina and the Palm present access
                                    challenges for oversized equipment. Our fleet includes appropriately sized units for
                                    these environments. Night recoveries in these areas require additional care around
                                    pedestrian activity and the high density of parked vehicles in tight marina-side bays.
                                </p>
                            </div>
                        </div>

                        <div class="le-accordion-item">
                            <div class="le-accordion-head">
                                <div class="le-acc-icon"><i class="fa-solid fa-house"></i></div>
                                <h4 class="le-acc-title">Jumeirah &amp; Al Wasl Road Corridor</h4>
                                <i class="fa-solid fa-chevron-down le-acc-arrow"></i>
                            </div>
                            <div class="le-accordion-body">
                                <p>Villa districts along Jumeirah Beach Road and Al Wasl Road feature wide driveways and
                                    generous access, but the roads themselves experience significant residential traffic. We
                                    position carefully, use minimal visual disruption, and complete operations efficiently.
                                    Many clients in these neighbourhoods own multiple high-end vehicles — they remember
                                    how
                                    we handle the first one.</p>
                            </div>
                        </div>

                        <div class="le-accordion-item">
                            <div class="le-accordion-head">
                                <div class="le-acc-icon"><i class="fa-solid fa-briefcase"></i></div>
                                <h4 class="le-acc-title">DIFC &amp; Trade Centre Area</h4>
                                <i class="fa-solid fa-chevron-down le-acc-arrow"></i>
                            </div>
                            <div class="le-accordion-body">
                                <p>Business urgency runs high in the financial district. Executives cannot afford prolonged
                                    delays when a vehicle issue arises mid-meeting or before a flight. Our rapid response
                                    capability to DIFC and the Trade Centre corridor is a <strong>priority deployment
                                        zone</strong> — we understand the stakes involved in these situations.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- ===== PART 2: Highways — Dark Timeline Strip ===== -->
            <div class="le-highway-strip mb-5">
                <div class="le-highway-strip-header">
                    <i class="fa-solid fa-road"></i>
                    <h3>Major Highway &amp; Expressway Operations</h3>
                </div>
                <div class="le-highway-timeline">

                    <div class="le-hwy-item">
                        <div class="le-hwy-code">E11</div>
                        <div class="le-hwy-connector"></div>
                        <div class="le-hwy-content">
                            <h4>Sheikh Zayed Road — E11</h4>
                            <p>The emirate's primary artery is also one of its most unforgiving environments for a stranded
                                exotic car. High-speed traffic, multi-lane complexity, and limited hard shoulder in certain
                                sections mean our E11 response protocols include immediate police coordination, advanced
                                warning equipment deployment, and rapid safe-lane extraction.</p>
                            <p class="mt-2">We know every gantry, every interchange, every safe-stopping zone from Jebel
                                Ali
                                to the Dubai Creek end. This familiarity directly reduces risk during high-stress highway
                                recoveries.</p>
                        </div>
                    </div>

                    <div class="le-hwy-item">
                        <div class="le-hwy-code">E611</div>
                        <div class="le-hwy-connector"></div>
                        <div class="le-hwy-content">
                            <h4>Emirates Road — E611 &amp; Al Khail Road</h4>
                            <p>Inter-emirate routes and the outer ring roads see increasing traffic volumes from exotic car
                                owners travelling between communities and destinations. Long-distance recovery from these
                                corridors requires our satellite-positioned resources to respond without excessive delay. We
                                maintain <strong>dedicated coverage along these routes</strong> specifically.</p>
                        </div>
                    </div>

                    <div class="le-hwy-item">
                        <div class="le-hwy-code">MID</div>
                        <div class="le-hwy-connector"></div>
                        <div class="le-hwy-content">
                            <h4>Hessa Street, Umm Suqeim Road &amp; Internal Connectors</h4>
                            <p>The mid-city connector roads frequently experience congestion that complicates access. Our
                                operators use <strong>live traffic intelligence</strong> to select approach routes that
                                minimise arrival time without creating a secondary traffic incident in the process.</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ===== PART 3: Terrain — Full-width Stacked Panels ===== -->
            <div class="le-terrain-wrap">
                <div class="le-terrain-header">
                    <div class="le-terrain-header-icon">
                        <i class="fa-solid fa-hill-rockslide"></i>
                    </div>
                    <div>
                        <h3 class="specialist-h3">Challenging Terrain — Off-Road &amp; Desert Environments</h3>
                        <p class="le-terrain-subtitle">Beyond the tarmac, our capability extends to every surface Dubai
                            presents.</p>
                    </div>
                </div>

                <div class="le-terrain-panels">

                    <div class="le-terrain-panel">
                        <div class="le-terrain-panel-left">
                            <div class="le-terrain-panel-icon">
                                <i class="fa-solid fa-sun"></i>
                            </div>
                        </div>
                        <div class="le-terrain-panel-right">
                            <h4 class="le-terrain-panel-title">Desert Roads &amp; Safari Routes</h4>
                            <p>Owners of capable exotic SUVs — Lamborghini Urus, Ferrari Purosangue, Bentley Bentayga,
                                Porsche Cayenne Turbo GT — frequently venture beyond the tarmac into desert environments
                                around Al Qudra, Lahbab, and the routes approaching Hatta. Sand entrapment, overheating in
                                soft terrain, and mechanical failures under off-road stress are real scenarios.</p>
                            <p class="mt-2">Our desert-capable recovery units carry heavy-duty winching equipment rated
                                for
                                full-size luxury SUVs, sand tracks for platform stability, and the operational experience to
                                extract vehicles from soft terrain without chassis damage. We understand sand physics —
                                the
                                angle, tension, and timing of a proper extraction prevents the vehicle from digging deeper
                                during the process.</p>
                        </div>
                    </div>

                    <div class="le-terrain-panel">
                        <div class="le-terrain-panel-left">
                            <div class="le-terrain-panel-icon">
                                <i class="fa-solid fa-helmet-safety"></i>
                            </div>
                        </div>
                        <div class="le-terrain-panel-right">
                            <h4 class="le-terrain-panel-title">Construction Zones &amp; Developing Districts</h4>
                            <p>Dubai's pace of development means active construction surrounds many areas at any given time.
                                Meydan, Mohammed Bin Rashid City, Dubai South, and emerging communities along the outer
                                reaches all present access complications. We maintain <strong>current knowledge of active
                                    sites</strong>, restricted access routes, and safe approach corridors in these dynamic
                                environments.</p>
                        </div>
                    </div>

                    <div class="le-terrain-panel">
                        <div class="le-terrain-panel-left">
                            <div class="le-terrain-panel-icon">
                                <i class="fa-solid fa-bridge"></i>
                            </div>
                        </div>
                        <div class="le-terrain-panel-right">
                            <h4 class="le-terrain-panel-title">Bridges, Tunnels &amp; Special Structures</h4>
                            <p>The infrastructure network across the Creek, around the Burj Khalifa district, and along the
                                coastal interchange structures requires clearance awareness, traffic authority coordination,
                                and experience with the specific constraints of enclosed or elevated recovery scenarios. Our
                                operators have navigated <strong>every major tunnel and bridge crossing</strong> in the
                                metropolitan area.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- CREDENTIALS, EQUIPMENT & COMMITMENT SECTION -->
    <section class="cred-section py-120">
        <div class="container">

            <!-- Section Header -->
            <div class="text-center mb-2">
                <span class="specialist-eyebrow">Licensed. Equipped. Committed.</span>
                <h2 class="site-title mt-3">Our Credentials, Equipment &amp; <br /> <span>Commitment to Excellence</span>
                </h2>
            </div>

            <!-- PART 1: RTA Licensing — Split Image + Text -->
            <div class="container">
                <div class="row align-items-center">
                    <!-- Image side -->
                    <div class="col-lg-6 imagebag">
                        <div class="about-left-images wow animate__animated animate__fadeInLeft">
                            <div class="about-img">
                                <img src="{{ asset('assets/images/loading-luxury-car-dubai.jpg') }}"
                                    alt="RTA Licensed Recovery Service Dubai">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cred-rta-content">
                            <h2 class="section-title">RTA Licensing &amp; Legal Authorisation</h2>
                            <p class="cred-rta-lead">Toretto Recovery operates as a fully licensed and RTA-approved
                                breakdown
                                and <a class="text-link"
                                    href="{{ route('our-service.ourservice', ['slug' => 'towing-service-dubai']) }}">recovery
                                    service</a> provider company. This authorisation is not
                                merely a compliance
                                checkbox —
                                it is the foundation that guarantees our operators, equipment, and procedures meet the
                                regulatory standards that the emirate's road authority enforces.
                            </p>
                            <p class="cred-rta-body">For owners of exotic automobiles, this matters in three specific ways.
                                First, your insurance claim is protected — reputable UAE insurers require licensed
                                operators.
                                Second, any police-case documentation we provide is officially recognised. Third,
                                manufacturer
                                warranties are not jeopardised by unauthorised recovery handling.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- PART 2: Equipment Fleet — Two-Column Table -->
                <div class="cred-equip-block mb-5">
                    <div class="cred-equip-header">
                        <div class="cred-equip-header-icon">
                            <i class="fa-solid fa-truck-monster"></i>
                        </div>
                        <div>
                            <h3 class="specialist-h3">Our Specialist Equipment Fleet</h3>
                            <p class="cred-equip-subtitle">The quality of a recovery operation is directly determined by
                                the
                                quality of the equipment deployed. We have invested in a modern, purpose-built fleet for
                                high-value automobile operations specifically — not adapted standard equipment.</p>
                        </div>
                    </div>
                    <div class="cred-equip-table-wrap">
                        <div class="cred-equip-col">
                            <div class="cred-equip-col-header">
                                <i class="fa-solid fa-truck-ramp-box"></i>
                                Recovery Equipment
                            </div>
                            <ul class="cred-equip-list">
                                <li><i class="fa-solid fa-check"></i> Enclosed flatbed transport units</li>
                                <li><i class="fa-solid fa-check"></i> Open hydraulic lowered flatbeds</li>
                                <li><i class="fa-solid fa-check"></i> Specialist wheel-lift with soft cradle</li>
                                <li><i class="fa-solid fa-check"></i> Heavy-duty winching systems</li>
                                <li><i class="fa-solid fa-check"></i> Desert &amp; all-terrain recovery units</li>
                                <li><i class="fa-solid fa-check"></i> Compact units for parking structures</li>
                            </ul>
                        </div>
                        <div class="cred-equip-divider"></div>
                        <div class="cred-equip-col">
                            <div class="cred-equip-col-header">
                                <i class="fa-solid fa-toolbox"></i>
                                Handling &amp; Safety Tools
                            </div>
                            <ul class="cred-equip-list">
                                <li><i class="fa-solid fa-check"></i> Non-abrasive soft tie-down rigging</li>
                                <li><i class="fa-solid fa-check"></i> Wheel chocks for all tyre widths</li>
                                <li><i class="fa-solid fa-check"></i> Professional-grade smart jump systems</li>
                                <li><i class="fa-solid fa-check"></i> Multi-grade fuel delivery vehicles</li>
                                <li><i class="fa-solid fa-check"></i> LED safety barrier &amp; warning arrays</li>
                                <li><i class="fa-solid fa-check"></i> GPS real-time fleet tracking</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- PART 3 & 4: Training + 24/7 — Side by Side -->
                <div class="cred-bottom-grid">

                    <div class="cred-info-panel">
                        <div class="cred-info-icon">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <h3 class="cred-info-title">Certified Operator Training</h3>
                        <p>Every Toretto Recovery technician completes a structured training programme that covers exotic
                            and
                            luxury vehicle-specific recovery protocols, defensive driving, customer interaction standards,
                            and
                            insurance documentation requirements.</p>
                        <p class="mt-3">We supplement foundational training with brand-specific knowledge — understanding
                            the
                            ground clearance specifications of different model generations, the correct jacking points for
                            carbon-fibre monocoque structures, and the safety procedures unique to high-voltage hybrid and
                            electric exotic vehicles.</p>
                        <p class="mt-3">Our customer service standard acknowledges that the person whose Ferrari just
                            broke
                            down
                            on the way to a meeting is experiencing real stress. Our operators are trained to be
                            <strong>calm,
                                efficient communicators</strong> — not just mechanics with tow trucks.
                        </p>
                    </div>

                    <div class="cred-info-panel cred-info-panel--dark">
                        <div class="cred-info-icon cred-info-icon--red">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <h3 class="cred-info-title cred-info-title--light">24/7 Human Response — No Automated Systems</h3>
                        <p class="cred-info-text--light">When you call Toretto Recovery at 3 AM on a desert highway, a
                            trained
                            human answers. Not a voicemail. Not an automated menu that routes you through three departments
                            before someone picks up. Our emergency line connects you immediately to a dispatcher with the
                            authority and knowledge to deploy resources without delay.</p>
                        <div class="cred-response-stats">
                            <div class="cred-stat">
                                <span class="cred-stat-value">2 min</span>
                                <span class="cred-stat-label">Accurate ETA provided</span>
                            </div>
                            <div class="cred-stat">
                                <span class="cred-stat-value">24/7</span>
                                <span class="cred-stat-label">Human-answered line</span>
                            </div>
                            <div class="cred-stat">
                                <span class="cred-stat-value">GPS</span>
                                <span class="cred-stat-label">Real-time fleet tracking</span>
                            </div>
                        </div>
                        <p class="cred-info-text--light mt-3">Real-time GPS tracking on our entire fleet means our
                            dispatcher
                            always knows the nearest available unit with appropriate equipment for your specific situation.
                            You
                            receive an accurate ETA, your operator's name, and a direct contact number — all within the
                            first
                            two minutes of your call.</p>
                    </div>

                </div>

            </div>
    </section>

    <!-- PROCESS SECTION -->
    <section class="process-section py-120">
        <div class="container">

            <!-- Section Header -->
            <div class="text-center mb-2">
                <span class="specialist-eyebrow">Structured. Transparent. Precise.</span>
                <h2 class="site-title mt-3">From Emergency Call to <br /> <span>Safe Delivery: Our Process</span></h2>
            </div>

            <!-- Hero Image Banner -->
            <div class="process-hero-img-wrap mb-5 wow animate__animated animate__fadeInLeft">
                <img src="{{ asset('assets/images/luxury-sports-car-towing.jpg') }}"
                    alt="Luxury sports car transport on enclosed flatbed Dubai" class="about-img process-hero-img"
                    loading="lazy">
            </div>

            <!-- Steps Timeline -->
            <div class="process-timeline">

                <!-- Step 1 -->
                <div class="process-step">
                    <div class="process-step-left">
                        <div class="process-step-num">01</div>
                        <div class="process-step-line"></div>
                    </div>
                    <div class="process-step-content">
                        <div class="process-step-icon">
                            <i class="fa-solid fa-phone-volume"></i>
                        </div>
                        <div class="process-step-body">
                            <h3 class="process-step-title">Immediate Contact &amp; Situation Assessment</h3>
                            <p>Your first call receives a human response around the clock. Our dispatcher collects location
                                details (landmarks, road names, GPS coordinates from your phone), vehicle information,
                                visible damage or symptoms, and any immediate safety concerns.</p>
                            <div class="process-step-note">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                If you are in an unsafe location — on a live lane, in extreme heat — our first priority is
                                your personal safety before vehicle logistics.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="process-step">
                    <div class="process-step-left">
                        <div class="process-step-num">02</div>
                        <div class="process-step-line"></div>
                    </div>
                    <div class="process-step-content">
                        <div class="process-step-icon">
                            <i class="fa-solid fa-truck-fast"></i>
                        </div>
                        <div class="process-step-body">
                            <h3 class="process-step-title">Specialist Unit Dispatch</h3>
                            <p>The nearest appropriately-equipped unit for your specific vehicle type is immediately
                                assigned. For a low-clearance supercar, this means an enclosed or specialist flatbed — not
                                the nearest available standard truck. This decision is made by the dispatcher at the point
                                of call, not after arrival on scene.</p>
                            <div class="process-step-pills">
                                <span><i class="fa-solid fa-check"></i> Operator's name</span>
                                <span><i class="fa-solid fa-check"></i> Real-time ETA</span>
                                <span><i class="fa-solid fa-check"></i> Direct contact number</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="process-step">
                    <div class="process-step-left">
                        <div class="process-step-num">03</div>
                        <div class="process-step-line"></div>
                    </div>
                    <div class="process-step-content">
                        <div class="process-step-icon">
                            <i class="fa-solid fa-magnifying-glass-location"></i>
                        </div>
                        <div class="process-step-body">
                            <h3 class="process-step-title">On-Scene Assessment &amp; Safety Management</h3>
                            <p>Our operator's arrival begins with perimeter safety — high-visibility LED warning equipment
                                is deployed before any vehicle assessment occurs. We work to protect you, passing motorists,
                                and our team throughout the operation.</p>
                            <p class="mt-2">Vehicle assessment follows: structural integrity check, fluid leak
                                identification, airbag deployment status, tyre and wheel condition. Comprehensive
                                photographic documentation is taken from multiple angles — this protects you during
                                insurance and repair processes.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="process-step">
                    <div class="process-step-left">
                        <div class="process-step-num">04</div>
                        <div class="process-step-line"></div>
                    </div>
                    <div class="process-step-content">
                        <div class="process-step-icon">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <div class="process-step-body">
                            <h3 class="process-step-title">Precision Loading &amp; Securing</h3>
                            <p>Loading follows the assessment conclusions without compromise. Hydraulic lowering brings the
                                platform to ground level. Wheel chocks are positioned before tie-downs are applied — never
                                in reverse order. Soft rigging contacts only the appropriate structural anchor points, never
                                painted surfaces, glass, or trim elements.</p>
                            <div class="process-step-note process-step-note--dark">
                                <i class="fa-solid fa-circle-check"></i>
                                A final verification walk-around confirms every securing point before departure. We do not
                                move until this is complete, regardless of traffic pressure or time sensitivity.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="process-step process-step--last">
                    <div class="process-step-left">
                        <div class="process-step-num process-step-num--final">05</div>
                    </div>
                    <div class="process-step-content">
                        <div class="process-step-icon process-step-icon--gold">
                            <i class="fa-solid fa-flag-checkered"></i>
                        </div>
                        <div class="process-step-body">
                            <h3 class="process-step-title">Transport &amp; Delivery</h3>
                            <p>Your vehicle travels to the destination you specify — authorised dealership service centre,
                                independent specialist workshop, insurance assessment facility, or your residence. We
                                communicate departure confirmation and estimated delivery time.</p>
                            <p class="mt-2">Unloading follows the same careful methodology as loading. Delivery paperwork
                                includes our service record, photographic documentation from pre-loading, and all operator
                                and licensing information required for insurance submissions.</p>
                            <div class="process-step-destinations">
                                <div class="process-dest"><i class="fa-solid fa-building"></i> Dealership</div>
                                <div class="process-dest"><i class="fa-solid fa-wrench"></i> Workshop</div>
                                <div class="process-dest"><i class="fa-solid fa-file-contract"></i> Insurance Assessor
                                </div>
                                <div class="process-dest"><i class="fa-solid fa-house"></i> Residence</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Real World Scenarios -->
    <section class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="about-right wow animate__animated animate__fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="specialist-eyebrow">Proven in the Field</span>
                            <h2 class="site-title mt-3">Real-World Scenarios: <span>How We Respond</span></h2>
                        </div>
                        <h4 class="mb-3">Scenario: <a class="text-link" href="{{ route('book.now') }}">Supercar
                                Breakdown
                            </a> on a Major Expressway</h4>
                        <p class="mb-3">A Porsche 911 GT3 RS develops a catastrophic tyre failure at high speed on E11
                            during evening rush hour. The driver safely reaches the hard shoulder but is now in a hazardous
                            position with fast-moving traffic metres away.
                        </p>
                        <p class="mb-3">Our response: Nearest enclosed flatbed dispatched immediately. Operator arrives
                            within range, deploys full safety perimeter, coordinates with traffic authority for temporary
                            lane guidance. Vehicle documented, loaded onto enclosed platform using zero-contact hydraulic
                            system, transported to the owner's preferred dealer workshop. Total operation: under 40 minutes
                            from call to departure.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 imagebag">
                    <div class="about-left wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/suv-car-crush-recovery-from-high-way-toretto-recovery.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="scenario-grid mt-4">
                <!-- Scenario 2 -->
                <div class="scenario-card">
                    <div class="scenario-card-top">
                        <div class="scenario-card-num">02</div>
                        <span class="scenario-card-tag scenario-card-tag--blue">
                            <i class="fa-solid fa-bolt"></i> Hybrid / EV
                        </span>
                    </div>
                    <div class="scenario-card-vehicle">
                        <i class="fa-solid fa-car-side"></i> McLaren Artura
                    </div>
                    <h3 class="scenario-card-title">Battery Failure on a Hybrid Supercar</h3>
                    <p class="scenario-card-situation">A McLaren Artura — a high-performance hybrid — experiences a
                        complete
                        electrical shutdown in the basement parking of a Dubai Marina development. Standard jump-start
                        equipment would risk permanent damage to the hybrid battery management system.</p>
                    <div class="scenario-card-response">
                        <div class="scenario-card-response-label"><i class="fa-solid fa-bolt"></i> Our Response</div>
                        <p>Operator arrives with manufacturer-protocol smart charging equipment. Correct voltage parameters
                            applied for the hybrid system. Battery revived safely, full system check completed, vehicle
                            driven out under its own power. Owner briefed on monitoring indicators. Zero damage. Zero drama.
                        </p>
                    </div>
                </div>

                <!-- Scenario 3 -->
                <div class="scenario-card">
                    <div class="scenario-card-top">
                        <div class="scenario-card-num">03</div>
                        <span class="scenario-card-tag scenario-card-tag--sand">
                            <i class="fa-solid fa-sun"></i> Desert
                        </span>
                    </div>
                    <div class="scenario-card-vehicle">
                        <i class="fa-solid fa-car-side"></i> Lamborghini Urus
                    </div>
                    <h3 class="scenario-card-title">Luxury SUV Stuck in Desert Sand</h3>
                    <p class="scenario-card-situation">A Lamborghini Urus becomes heavily embedded in soft sand near Al
                        Qudra during a weekend desert drive. Standard recovery cables and angles would risk differential and
                        suspension damage during extraction.</p>
                    <div class="scenario-card-response">
                        <div class="scenario-card-response-label"><i class="fa-solid fa-bolt"></i> Our Response</div>
                        <p>Compact specialist flatbed positioned without blocking hotel forecourt flow. Professional,
                            low-profile operation coordinated with hotel security. Comprehensive documentation completed
                            quietly. Vehicle transported directly to authorised body shop. Owner provided full records for
                            insurer. Entire operation conducted with the discretion the situation demanded.</p>
                    </div>
                </div>

                <!-- Scenario 4 -->
                <div class="scenario-card">
                    <div class="scenario-card-top">
                        <div class="scenario-card-num">04</div>
                        <span class="scenario-card-tag scenario-card-tag--gold">
                            <i class="fa-solid fa-star"></i> VIP / Discreet
                        </span>
                    </div>
                    <div class="scenario-card-vehicle">
                        <i class="fa-solid fa-car-side"></i> Rolls-Royce Phantom
                    </div>
                    <h3 class="scenario-card-title">Collision at Hotel Valet — Discretion Required </h3>
                    <p class="scenario-card-situation">A Rolls-Royce Phantom sustains rear-quarter damage in a hotel
                        entrance during peak evening arrival hours. The owner requires immediate, discreet handling that
                        does not create a scene in a high-profile social environment.
                    </p>
                    <div class="scenario-card-response">
                        <div class="scenario-card-response-label"><i class="fa-solid fa-bolt"></i> Our Response</div>
                        <p>Compact specialist flatbed positioned without blocking hotel forecourt flow. Professional,
                            low-profile operation coordinated with hotel security. Comprehensive documentation completed
                            quietly. Vehicle transported directly to authorised body shop. Owner provided full records for
                            insurer. Entire operation conducted with the discretion the situation demanded.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- AUTOMOBILES WE SPECIALISE IN -->
    <section class="marques-section py-120">
        <div class="container">

            <!-- Section Header -->
            <div class="text-center mb-5">
                <span class="specialist-eyebrow">Calibrated. Not Generic.</span>
                <h2 class="site-title mt-3">Automobiles We <span>Specialise In Handling</span></h2>
                <p class="marques-intro">Our protocols and equipment are calibrated for the specific physical and
                    mechanical
                    characteristics of each category below. We do not apply a universal approach — every marque and model
                    receives handling methodology matched to its requirements.</p>
            </div>

            <!-- Two-column marque table -->
            <div class="marques-table-wrap">
                <div class="marques-col">
                    <div class="marques-col-header">
                        <i class="fa-solid fa-trophy"></i>
                        Exotic &amp; Supercar Marques
                    </div>
                    <ul class="marques-list">
                        <li><i class="fa-solid fa-diamond"></i> Ferrari <span>(all models &amp; generations)</span></li>
                        <li><i class="fa-solid fa-diamond"></i> Lamborghini <span>(including Urus SUV)</span></li>
                        <li><i class="fa-solid fa-diamond"></i> McLaren <span>(including hybrid models)</span></li>
                        <li><i class="fa-solid fa-diamond"></i> Porsche <span>(911, Taycan, Panamera, Cayenne)</span></li>
                        <li><i class="fa-solid fa-diamond"></i> Rolls-Royce <span>(all current models)</span></li>
                        <li><i class="fa-solid fa-diamond"></i> Bentley <span>(Continental, Bentayga, Flying Spur)</span>
                        </li>
                        <li><i class="fa-solid fa-diamond"></i> Aston Martin <span>(DB12, Vantage, DBX)</span></li>
                        <li><i class="fa-solid fa-diamond"></i> Bugatti <span>&amp; ultra-rare hypercars</span></li>
                    </ul>
                </div>
                <div class="marques-col-divider"></div>
                <div class="marques-col">
                    <div class="marques-col-header marques-col-header--dark">
                        <i class="fa-solid fa-star"></i>
                        Luxury Performance &amp; SUV Marques
                    </div>
                    <ul class="marques-list">
                        <li><i class="fa-solid fa-diamond"></i> Mercedes-Benz AMG <span>(GT, S63, G63)</span></li>
                        <li><i class="fa-solid fa-diamond"></i> BMW M-Series <span>&amp; Alpina</span></li>
                        <li><i class="fa-solid fa-diamond"></i> Audi RS <span>&amp; R8 range</span></li>
                        <li><i class="fa-solid fa-diamond"></i> Maserati <span>(GranTurismo, Levante Trofeo)</span></li>
                        <li><i class="fa-solid fa-diamond"></i> Cadillac Escalade <span>&amp; Lincoln Navigator</span></li>
                        <li><i class="fa-solid fa-diamond"></i> Range Rover <span>SVR &amp; Autobiography</span></li>
                        <li><i class="fa-solid fa-diamond"></i> Lexus LC <span>&amp; LX high-spec variants</span></li>
                        <li><i class="fa-solid fa-diamond"></i> Classic <span>&amp; vintage high-value automobiles</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="lsc-faq-section py-120">
        <div class="container">

            <div class="lsc-faq-inner">
                <!-- Left: Header -->
                <div class="lsc-faq-header">
                    <span class="specialist-eyebrow">Direct Answers</span>
                    <h2 class="site-title mt-3">Frequently Asked <span>Questions</span></h2>
                    <p class="lsc-faq-subtext">The questions below reflect what experienced exotic car owners ask us most
                        often. Accurate, direct answers — no filler.</p>
                    <div class="lsc-faq-cta">
                        <i class="fa-solid fa-phone"></i>
                        <div>
                            <span class="lsc-faq-cta-label">Still have questions?</span>
                            <a href="{{ route('book.now') }}" class="lsc-faq-cta-link">Call us 24/7 →</a>
                        </div>
                    </div>
                </div>

                <!-- Right: FAQ items -->
                <div class="lsc-faq-list">

                    <div class="lsc-faq-item">
                        <button class="lsc-faq-question">
                            <span>Will you come to my location even if it is far from the city?</span>
                            <i class="fa-solid fa-chevron-down lsc-faq-arrow"></i>
                        </button>
                        <div class="lsc-faq-answer">
                            <p>Yes. Our coverage spans the full emirate — from Jebel Ali Industrial Area to Al Qudra, from
                                Hatta Road to the Palm's outer crescent. Remote locations take longer to reach but are
                                absolutely within our operational range. Desert and off-road sites are handled by
                                appropriately equipped units.</p>
                        </div>
                    </div>

                    <div class="lsc-faq-item">
                        <button class="lsc-faq-question">
                            <span>My car is very low — will a standard flatbed work?</span>
                            <i class="fa-solid fa-chevron-down lsc-faq-arrow"></i>
                        </button>
                        <div class="lsc-faq-answer">
                            <p>No, and we would never attempt it. Vehicles with ground clearance below 100mm require our
                                hydraulic lowering flatbed that drops to near-ground level for entry. We confirm your
                                vehicle specifications during the dispatch call to ensure the correct unit is sent — not
                                after arrival.</p>
                        </div>
                    </div>

                    <div class="lsc-faq-item">
                        <button class="lsc-faq-question">
                            <span>Can you handle electric and hybrid exotic cars safely?</span>
                            <i class="fa-solid fa-chevron-down lsc-faq-arrow"></i>
                        </button>
                        <div class="lsc-faq-answer">
                            <p>Yes. High-voltage battery systems in electric and hybrid exotic automobiles require specific
                                jump-start protocols, safe handling during transport, and awareness of post-collision
                                battery integrity. Our technicians are trained in EV/hybrid safety procedures including
                                isolation protocols for compromised battery packs.</p>
                        </div>
                    </div>

                    <div class="lsc-faq-item">
                        <button class="lsc-faq-question">
                            <span>Will my insurance company accept Toretto Recovery documentation?</span>
                            <i class="fa-solid fa-chevron-down lsc-faq-arrow"></i>
                        </button>
                        <div class="lsc-faq-answer">
                            <p>Toretto Recovery is RTA-licensed, and our service documentation meets the requirements of
                                major UAE insurance providers. We provide detailed records, photographic evidence, and
                                operator certification information formatted for insurance submission. We also offer direct
                                coordination with your insurer upon request.</p>
                        </div>
                    </div>

                    <div class="lsc-faq-item">
                        <button class="lsc-faq-question">
                            <span>How quickly can you actually reach me?</span>
                            <i class="fa-solid fa-chevron-down lsc-faq-arrow"></i>
                        </button>
                        <div class="lsc-faq-answer">
                            <p>Our target response window is 10–45 minutes depending on your location and current traffic
                                conditions. Our dispatcher will provide an honest real-time ETA at the point of call based
                                on the nearest available unit's GPS position — not an optimistic estimate. We believe
                                accurate information serves you better than comforting but unrealistic promises.</p>
                        </div>
                    </div>

                    <div class="lsc-faq-item">
                        <button class="lsc-faq-question">
                            <span>What if I am not sure what is wrong with my car?</span>
                            <i class="fa-solid fa-chevron-down lsc-faq-arrow"></i>
                        </button>
                        <div class="lsc-faq-answer">
                            <p>Describe what you observed — warning lights, sounds, behaviour changes, or what happened
                                immediately before the problem. Our dispatcher and attending operator work with this
                                information to bring appropriate equipment. It is always safer to transport a vehicle with
                                an unclear fault than to drive and risk compounding a mechanical issue.</p>
                        </div>
                    </div>

                    <div class="lsc-faq-item">
                        <button class="lsc-faq-question">
                            <span>Can you take my car directly to a specific dealership or independent specialist?</span>
                            <i class="fa-solid fa-chevron-down lsc-faq-arrow"></i>
                        </button>
                        <div class="lsc-faq-answer">
                            <p>Absolutely. We transport to any destination you specify — authorised dealership service
                                centres, independent marque specialists, insurance-approved bodyshops, or your private
                                garage. We are familiar with the locations of major dealerships and specialist workshops
                                throughout the metropolitan area and can confirm acceptance before transport if needed.</p>
                        </div>
                    </div>

                    <div class="lsc-faq-item">
                        <button class="lsc-faq-question">
                            <span>Do you handle classic and vintage cars differently?</span>
                            <i class="fa-solid fa-chevron-down lsc-faq-arrow"></i>
                        </button>
                        <div class="lsc-faq-answer">
                            <p>Yes. Classic automobiles often have suspension geometries, floor pan structures, and tyre
                                profiles that differ significantly from modern vehicles. Our enclosed flatbed transport with
                                custom wheel chocking and manual tie-down positioning is the appropriate solution. We take
                                additional time during assessment and loading — these vehicles cannot simply be processed on
                                a standard timeline.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- SAFETY STANDARDS & LEGAL COMPLIANCE -->
    <section class="safety-legal-section py-120">
        <div class="container">

            <!-- Section Header -->
            <div class="text-center mb-5">
                <span class="specialist-eyebrow">Compliant. Documented. Protected.</span>
                <h2 class="site-title mt-3">Safety Standards &amp; <span>Legal Compliance</span></h2>
            </div>

            <div class="safety-legal-grid">

                <!-- Card 1: Accident Scene Protocol -->
                <div class="safety-card safety-card--accent">
                    <div class="safety-card-icon">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <h3 class="safety-card-title">Accident Scene Protocol — Your Legal Obligations</h3>
                    <p>Following any collision in the emirate, you are legally required to notify police before moving any
                        vehicle — unless officers specifically authorise relocation due to traffic obstruction. This applies
                        regardless of accident severity. Our operators are trained in proper accident scene conduct and
                        coordinate respectfully with responding authorities.</p>
                    <p class="mt-3">Never attempt to move a severely damaged exotic car without professional guidance.
                        Structural compromises invisible from the exterior can cause collapse under movement, creating both
                        safety risks and additional mechanical damage that complicates insurance assessment.</p>
                    <div class="safety-card-badge">
                        <i class="fa-solid fa-shield-halved"></i> RTA-Compliant Protocol
                    </div>
                </div>

                <!-- Card 2: Documentation Standards -->
                <div class="safety-card">
                    <div class="safety-card-icon">
                        <i class="fa-solid fa-file-lines"></i>
                    </div>
                    <h3 class="safety-card-title">Documentation Standards</h3>
                    <p>Every Toretto Recovery operation generates a complete service record: operator identification,
                        licensing reference, timestamp, photographic documentation from multiple angles, vehicle condition
                        notes, and destination delivery confirmation.</p>
                    <p class="mt-3">This documentation protects you throughout the insurance and repair process and
                        provides
                        proof of professional handling for warranty considerations.</p>
                    <ul class="safety-doc-list">
                        <li><i class="fa-solid fa-check"></i> Operator ID &amp; licensing reference</li>
                        <li><i class="fa-solid fa-check"></i> Timestamped service record</li>
                        <li><i class="fa-solid fa-check"></i> Multi-angle photographic evidence</li>
                        <li><i class="fa-solid fa-check"></i> Vehicle condition notes</li>
                        <li><i class="fa-solid fa-check"></i> Delivery confirmation</li>
                    </ul>
                </div>

                <!-- Card 3: Insurance Coordination -->
                <div class="safety-card safety-card--dark">
                    <div class="safety-card-icon safety-card-icon--red">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <h3 class="safety-card-title safety-card-title--light">Insurance Coordination</h3>
                    <p class="text-white">Our partnerships with major UAE insurance providers allow direct
                        billing in many cases, eliminating upfront payment stress during an already difficult situation. We
                        can initiate insurance contact on your behalf during transport if authorised.</p>
                    <p class="text-white mt-3">Service records are formatted to meet insurer requirements,
                        reducing the administrative burden on you.</p>
                    <div class="safety-insurance-stats">
                        <div class="safety-stat">
                            <i class="fa-solid fa-building-columns"></i>
                            <span>Direct billing with major UAE insurers</span>
                        </div>
                        <div class="safety-stat">
                            <i class="fa-solid fa-file-invoice"></i>
                            <span>Insurer-formatted documentation</span>
                        </div>
                        <div class="safety-stat">
                            <i class="fa-solid fa-phone"></i>
                            <span>Insurance contact initiated on your behalf</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- WHY EXOTIC CAR OWNERS TRUST TORETTO -->
    <section class="trust-section py-120">
        <div class="container">

            <!-- Section Header -->
            <div class="text-center mb-5">
                <span class="specialist-eyebrow">Earned. Not Claimed.</span>
                <h2 class="site-title mt-3">Why Exotic Car Owners in Dubai <span>Trust Toretto Recovery</span></h2>
            </div>

            <div class="trust-grid">

                <div class="trust-card">
                    <div class="trust-card-num">01</div>
                    <div class="trust-card-icon">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <h3 class="trust-card-title">Experience Built on Real Operations, Not Theory</h3>
                    <p>Our knowledge of this city comes from years of operational experience, not a training manual. Every
                        street, every compound, every underground car park, every desert route — we have worked in these
                        environments. When you describe your location, we know exactly where you are and the most efficient
                        path to reach you.</p>
                </div>

                <div class="trust-card">
                    <div class="trust-card-num">02</div>
                    <div class="trust-card-icon">
                        <i class="fa-solid fa-truck-ramp-box"></i>
                    </div>
                    <h3 class="trust-card-title">Specialist Equipment Matched to Specialist Vehicles</h3>
                    <p>We have invested specifically in the equipment that high-value automobiles require. Enclosed
                        flatbeds, hydraulic lowering platforms, soft rigging systems, specialist jump equipment — these are
                        not afterthoughts or add-ons to a standard service fleet. They are our primary operational tools.
                    </p>
                </div>

                <div class="trust-card">
                    <div class="trust-card-num">03</div>
                    <div class="trust-card-icon">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h3 class="trust-card-title">Human Response Every Hour of Every Day</h3>
                    <p>Our emergency line is answered by trained humans 24 hours a day, seven days a week, including public
                        holidays. The person who answers knows what to ask, knows how to dispatch, and knows your situation
                        carries urgency. You will never wait through an automated system when your car is stranded.</p>
                </div>

                <div class="trust-card">
                    <div class="trust-card-num">04</div>
                    <div class="trust-card-icon">
                        <i class="fa-solid fa-eye-slash"></i>
                    </div>
                    <h3 class="trust-card-title">Discretion as Standard Practice</h3>
                    <p>Owners of exceptional automobiles often prefer their recovery to be handled quietly and
                        professionally. We arrive cleanly presented, work efficiently, communicate directly with you rather
                        than creating unnecessary public attention, and complete operations without drama. Discretion is not
                        an add-on service — it is how we operate.</p>
                </div>

                <div class="trust-card trust-card--wide">
                    <div class="trust-card-num">05</div>
                    <div class="trust-card-icon">
                        <i class="fa-solid fa-tag"></i>
                    </div>
                    <h3 class="trust-card-title">Transparent Pricing</h3>
                    <p>Emergency situations should not be accompanied by pricing surprises. Before dispatching, our team
                        will provide a clear cost indication based on your location, vehicle type, and service required. Our
                        fees reflect specialist equipment and expertise — we do not compete with general towing rates
                        because we do not provide a general towing service.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- SAVE OUR NUMBER — CTA CLOSING SECTION -->
    <section class="save-number-section">
        <div class="container">
            <div class="save-number-inner">

                <!-- Left: Main CTA -->
                <div class="save-number-left">
                    <div class="save-number-eyebrow">
                        <i class="fa-solid fa-bookmark"></i> Save Before You Need It
                    </div>
                    <h2 class="save-number-title">Save Our Number <span>Before You Need It</span></h2>
                    <p class="save-number-body">The worst moment to search for a specialist recovery service is after an
                        accident or breakdown. Experienced exotic car owners keep our number saved — because when something
                        goes wrong with a vehicle of this calibre, the quality of the first call determines everything that
                        follows.</p>

                    <div class="save-number-badges">
                        <span><i class="fa-solid fa-clock"></i> Available 24/7</span>
                        <span><i class="fa-solid fa-certificate"></i> RTA-Licensed</span>
                        <span><i class="fa-solid fa-shield-halved"></i> Fully Insured</span>
                        <span><i class="fa-solid fa-gauge-high"></i> 10–45 Min Response</span>
                    </div>

                    <div class="save-number-contact">
                        <a href="{{ route('book.now') }}" class="save-number-btn">
                            <i class="fa-solid fa-phone"></i> Book Now / Call 24/7
                        </a>
                        <a href="https://www.torettorecovery.ae" class="save-number-link" target="_blank">
                            www.torettorecovery.ae
                        </a>
                    </div>

                    <p class="save-number-note">For routine enquiries, service pre-registration, corporate fleet
                        agreements,
                        or insurance pre-approval setup, <a class="text-link underline"
                            href="{{ route('contact') }}">contact us</a>
                        through
                        torettorecovery.ae. Registering your vehicle
                        details in advance allows even faster dispatch in an emergency — we already know your car before we
                        arrive.
                    </p>
                </div>

                <!-- Right: What every client receives -->
                <div class="save-number-right">
                    <div class="save-checklist-header">
                        <i class="fa-solid fa-list-check"></i>
                        What every Toretto Recovery client receives:
                    </div>
                    <ul class="save-checklist">
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>RTA-licensed operator assigned to your case</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Specialist equipment matched to your vehicle's specifications</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Complete photographic and service documentation</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Insurance-compliant records for claim processing</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Direct communication from dispatch to delivery — no handoff confusion</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Discretion, professionalism, and genuine expertise at every step</span>
                        </li>
                    </ul>
                    <div class="save-brand-tag">
                        <i class="fa-solid fa-car-side"></i>
                        Toretto Recovery — Specialist Luxury &amp; Sports Car Handling, Dubai
                    </div>
                </div>

            </div>
        </div>
    </section>

    <link rel="stylesheet" href="{{ asset('assets/css/luxury-sports-car.css') }}">


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
    </script>
@endsection
