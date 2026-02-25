@extends('layouts.main')

@section('title', 'Car Recovery Service in Palm Jumeirah | 24/7 Emergency Assistance')

@section('meta_description')
    24/7 car recovery service in Palm Jumeirah. Fast emergency towing, breakdown help, battery boost & luxury vehicle
    transport by Toretto Recovery.
@endsection

@section('meta_keywords', 'Car Recovery Palm Jumeirah, Towing Palm Jumeirah Dubai, Emergency Recovery 24/7')

@section('head')
    @verbatim
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "AutoRepair",
          "@id": "https://torettorecovery.ae/car-recovery-service-palm-jumeirah",
          "name": "Toretto Recovery – Car Recovery Service in Palm Jumeirah",
          "url": "https://torettorecovery.ae/car-recovery-service-palm-jumeirah",
          "logo": "https://torettorecovery.ae/logo.png",
          "image": "https://torettorecovery.ae/images/car-recovery-palm-jumeirah.jpg",
          "description": "24/7 emergency car recovery and roadside assistance in Palm Jumeirah. Fast response, safe towing, battery boost, flat tyre replacement, and luxury vehicle transport.",
          "telephone": " +971 523003423",
          "priceRange": "$$",
          "areaServed": {
            "@type": "Place",
            "name": "Palm Jumeirah, Dubai, UAE"
          },
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Palm Jumeirah",
            "addressRegion": "Dubai",
            "addressCountry": "AE"
          },
          "availableChannel": {
            "@type": "ServiceChannel",
            "servicePhone": {
              "@type": "ContactPoint",
              "telephone": "+971 523003423",
              "contactType": "Emergency Roadside Assistance",
              "availableLanguage": ["English", "Arabic"]
            }
          },
          "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
              "Monday",
              "Tuesday",
              "Wednesday",
              "Thursday",
              "Friday",
              "Saturday",
              "Sunday"
            ],
            "opens": "00:00",
            "closes": "23:59"
          },
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Palm Jumeirah Vehicle Recovery Services",
            "itemListElement": [
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Emergency Car Recovery"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Accident Recovery & Flatbed Towing"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Battery Boost & Electrical Assistance"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Flat Tyre Replacement"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Fuel Delivery Assistance"
                }
              }
            ]
          }
        }
        </script>
    @endverbatim
@endsection

@section('content')

    {{-- BREADCRUMB --}}
    <section class="site-breadcrumb" style="background:url('{{ asset('assets/images/contact-bg.jpg') }}')">
        <div class="container">
            <h1 class="breadcrumb-title-areas">Car Recovery Service in Palm Jumeirah — <br /> 24/7 Emergency Vehicle
                Assistance
            </h1>
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

    {{-- ===================================
    SECTION 1 — HERO INTRO
    =================================== --}}
    <section class="pj-hero-section">
        <div class="container">
            <div class="pj-hero-grid">

                {{-- LEFT CONTENT --}}
                <div class="pj-hero-content">
                    <span class="pj-eyebrow"><i class="fas fa-map-marker-alt"></i> Palm Jumeirah, Dubai</span>
                    <h1 class="pj-hero-title">
                        Car Recovery Service in Palm Jumeirah
                        <span>— 24/7 Emergency Vehicle Assistance</span>
                    </h1>
                    <p class="pj-hero-tagline">Stranded on Palm Jumeirah? We'll get you moving — fast.</p>
                    <p class="pj-hero-desc">
                        When your car breaks down on the island, delays are not an option. <strong>Toretto Recovery</strong>
                        provides
                        <a class="text-link" href="{{ route('home') }}" target="_blank">24/7 professional car recovery</a>
                        <strong>and
                            roadside assistance
                            i n Palm Jumeirah,</strong> delivering rapid
                        response, safe vehicle transport, and expert handling — anytime, day or night.
                    </p>
                    <p class="pj-hero-desc">
                        From the iconic <strong>Crescent</strong>, through the private <strong>Fronds</strong>, to the main
                        <strong>Trunk Road connections
                            toward Dubai Marina</strong>, our recovery teams know every turn of Palm Jumeirah. We arrive
                        fully
                        equipped with modern recovery vehicles and trained specialists to handle luxury cars, SUVs,
                        sports cars, and standard vehicles with complete care.
                    </p>

                    <p class="pj-trust-label">Why drivers in Palm Jumeirah trust Toretto Recovery:</p>
                    <ul class="pj-hero-list">
                        <li><i class="fas fa-check-circle"></i> Fast arrival across the entire island</li>
                        <li><i class="fas fa-check-circle"></i> 24/7 emergency car recovery &amp; roadside support</li>
                        <li><i class="fas fa-check-circle"></i> Safe towing for luxury, electric &amp; performance vehicles
                        </li>
                        <li><i class="fas fa-check-circle"></i> Local experts familiar with Palm Jumeirah roads</li>
                    </ul>

                    <p class="pj-tagline-bottom">One call. One solution. Complete peace of mind.</p>

                    <div class="pj-hero-btns">
                        <a href="tel:+971523003423" class="theme-btn">
                            <i class="fas fa-phone"></i> Call Now
                        </a>
                        <a href="{{ route('book.now') }}" target="_blank" class="theme-btn theme-btn-outline">
                            Book Recovery <i class="fas fa-arrow-right-long"></i>
                        </a>
                    </div>
                </div>

                {{-- RIGHT IMAGE --}}
                <div class="pj-hero-img-wrap">
                    <img src="{{ asset('assets/images/0001.jpeg') }}" alt="Car recovery service in Palm Jumeirah Dubai"
                        class="pj-hero-img">
                    <div class="pj-hero-badge">
                        <div class="pj-badge-inner">
                            <i class="fas fa-clock"></i>
                            <div>
                                <strong>24/7</strong>
                                <span>Always Available</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 2 — COMMON SITUATIONS
    =================================== --}}
    <section class="pj-situations-section">
        <div class="container">

            {{-- Header --}}
            <div class="pj-sit2-header">
                <span class="pj-eyebrow light"><i class="fas fa-exclamation-triangle"></i> Know the Risks</span>
                <h2>24/7 Emergency Car Recovery in <span>Palm Jumeirah</span></h2>
                <p class="pj-sit2-intro">
                    Driving on Palm Jumeirah isn't like driving anywhere else in Dubai. The island's layout and
                    environment create specific risks that often require fast, professional vehicle assistance.
                </p>
            </div>

            {{-- Full-Width Image Banner --}}
            <div class="pj-sit2-img-wrap">
                <img src="{{ asset('assets/images/roadside-assistance-dubai.jpg') }}"
                    alt="Emergency car recovery on Palm Jumeirah Dubai" class="pj-sit2-img">
                <div class="pj-sit2-img-overlay">
                    <div class="pj-sit2-badge">
                        <i class="fas fa-clock"></i>
                        <span>Rapid Response — Across the Entire Island</span>
                    </div>
                </div>
            </div>

            {{-- Situations grid --}}
            <div class="pj-sit2-body">

                <p class="pj-sit-label">Common recovery situations on Palm Jumeirah include:</p>

                <div class="pj-sit2-cards">
                    <div class="pj-sit2-card">
                        <div class="pj-sit2-icon"><i class="fas fa-road"></i></div>
                        <div>
                            <h4>Narrow residential Frond roads with limited turning space</h4>
                        </div>
                    </div>
                    <div class="pj-sit2-card">
                        <div class="pj-sit2-icon"><i class="fas fa-parking"></i></div>
                        <div>
                            <h4>Basement and hotel parking areas with height restrictions</h4>
                        </div>
                    </div>
                    <div class="pj-sit2-card">
                        <div class="pj-sit2-icon"><i class="fas fa-car-burst"></i></div>
                        <div>
                            <h4>Heavy tourist and resort traffic causing sudden stops</h4>
                        </div>
                    </div>
                    <div class="pj-sit2-card">
                        <div class="pj-sit2-icon"><i class="fas fa-thermometer-full"></i></div>
                        <div>
                            <h4>Extreme heat leading to battery drain and engine overheating</h4>
                        </div>
                    </div>
                    <div class="pj-sit2-card">
                        <div class="pj-sit2-icon"><i class="fas fa-traffic-light"></i></div>
                        <div>
                            <h4>Congested entry and exit routes delaying self-recovery options</h4>
                        </div>
                    </div>
                </div>

                <div class="pj-sit2-closing">
                    <i class="fas fa-shield-halved"></i>
                    <p>
                        Because access points are limited, waiting too long can increase traffic pressure and safety risks.
                        Our recovery units stay positioned near main connecting routes, allowing rapid dispatch across the
                        Crescent, trunk road, and residential zones. Whether your vehicle won’t start outside a villa or
                        develops a fault near a hotel entrance, we respond quickly with the right equipment and experienced
                        operators ready to resolve the issue safely.
                    </p>
                </div>

            </div>

        </div>
    </section>

    {{-- ===================================
    SECTION 3 — SERVICES
    =================================== --}}
    <section class="pj-services-section">
        <div class="container">

            {{-- Top split: Title+Intro LEFT | Image RIGHT --}}
            <div class="pj-svc3-top">
                <div class="pj-svc3-intro">
                    <span class="pj-eyebrow"><i class="fas fa-tools"></i> What We Offer</span>
                    <h2>Our Recovery &amp; Roadside Services <span>on Palm Jumeirah</span></h2>
                    <p>
                        At Toretto Recovery, we don't just tow vehicles — we provide complete roadside and recovery
                        solutions tailored to the unique driving conditions of Palm Jumeirah. From high-end residential
                        zones to busy resort entrances and underground parking facilities, our team delivers professional,
                        safe, and efficient assistance wherever you're stranded.
                    </p>
                    <p class="pj-svc3-sub">Here's how we support drivers across the island:</p>
                </div>
                <div class="pj-svc3-img-wrap">
                    <img src="{{ asset('assets/images/luxury-car-recovery-from-illegel-parked.jpg') }}"
                        alt="Luxury car recovery service Palm Jumeirah" class="pj-svc3-img">
                    <div class="pj-svc3-img-tag">
                        <i class="fas fa-shield-halved"></i>
                        <span>Safe &amp; Damage-Free</span>
                    </div>
                </div>
            </div>

            {{-- 6 Service Items — vertical cards with full content --}}
            <div class="pj-svc3-list">

                <div class="pj-svc3-item">
                    <div class="pj-svc3-icon">
                        <i class="fas fa-car-burst"></i>
                        <span>01</span>
                    </div>
                    <div class="pj-svc3-body">
                        <h3>Emergency <a class="text-link"
                                href="{{ route('our-service.ourservice', ['slug' => 'vehicle-recovery-service-dubai']) }}"
                                target="_blank">Breakdown Assistance</a></h3>
                        <p>
                            A sudden breakdown can happen without warning — engine overheating, gearbox malfunction,
                            electrical failure, or unexpected warning lights. Instead of immediately towing, our trained
                            operators first assess the situation on-site. If a quick roadside fix is possible, we handle
                            it safely and efficiently. If the issue requires further repair, we transport your vehicle
                            securely to your preferred workshop or service center. Every step prioritizes vehicle
                            protection and road safety.
                        </p>
                    </div>
                </div>

                <div class="pj-svc3-item">
                    <div class="pj-svc3-icon">
                        <i class="fas fa-shield-halved"></i>
                        <span>02</span>
                    </div>
                    <div class="pj-svc3-body">
                        <h3>Accident Recovery &amp; <a class="text-link"
                                href="{{ route('our-service.ourservice', ['slug' => 'towing-service-dubai']) }}"
                                target="_blank">Safe Towing Service</a></h3>
                        <p>
                            Even minor collisions require careful handling to avoid further mechanical or body damage.
                            Our recovery specialists follow proper safety protocols aligned with traffic standards in
                            Dubai. We stabilize damaged vehicles, use professional securing systems, and ensure
                            controlled loading onto flatbed trucks. Whether the incident occurs on the Crescent, trunk
                            road, or a residential Frond, we clear the scene efficiently and transport your vehicle
                            with precision.
                        </p>
                    </div>
                </div>

                <div class="pj-svc3-item">
                    <div class="pj-svc3-icon">
                        <i class="fas fa-truck-moving"></i>
                        <span>03</span>
                    </div>
                    <div class="pj-svc3-body">
                        <h3><a class="text-link"
                                href="{{ route('our-service.ourservice', ['slug' => 'flatbed-recovery-dubai']) }}"
                                target="_blank">Flatbed Vehicle Transport</a></h3>
                        <p>
                            Palm Jumeirah is home to luxury sedans, performance cars, SUVs, and exotic vehicles. These
                            vehicles demand extra care. Our modern flatbed recovery trucks eliminate wheel lift stress
                            and prevent underbody scraping — especially important for low-clearance sports cars. We use
                            secure tie-down systems and controlled loading techniques to ensure damage-free transportation.
                        </p>
                    </div>
                </div>

                <div class="pj-svc3-item">
                    <div class="pj-svc3-icon">
                        <i class="fas fa-bolt"></i>
                        <span>04</span>
                    </div>
                    <div class="pj-svc3-body">
                        <h3>Battery Boost &amp; Electrical Support</h3>
                        <p>
                            Extreme heat exposure in Dubai often reduces battery lifespan and affects electrical
                            systems. If your vehicle refuses to start in a basement parking area or outside a villa,
                            our team arrives equipped with professional-grade boosting equipment. We conduct a quick
                            electrical check to identify whether the issue is battery-related or linked to another
                            system component, helping you understand the next step clearly.
                        </p>
                    </div>
                </div>

                <div class="pj-svc3-item">
                    <div class="pj-svc3-icon">
                        <i class="fas fa-circle-dot"></i>
                        <span>05</span>
                    </div>
                    <div class="pj-svc3-body">
                        <h3>Flat Tyre Replacement</h3>
                        <p>
                            Construction debris, sharp objects, and curb impacts commonly cause punctures on Palm
                            Jumeirah roads. Instead of risking unsafe driving, our team replaces your flat tyre safely
                            at your location. We ensure correct fitting, secure tightening, and proper positioning so
                            you can continue your journey with confidence.
                        </p>
                    </div>
                </div>

                <div class="pj-svc3-item">
                    <div class="pj-svc3-icon">
                        <i class="fas fa-gas-pump"></i>
                        <span>06</span>
                    </div>
                    <div class="pj-svc3-body">
                        <h3>Fuel Delivery Assistance</h3>
                        <p>
                            Running out of fuel on Crescent Road or near resort entrances can disrupt traffic and
                            create unnecessary stress. We deliver fuel directly to your location promptly, allowing
                            you to restart your vehicle and move without delay. Our quick response reduces roadside
                            waiting time and restores mobility safely.
                        </p>
                    </div>
                </div>

            </div>

            {{-- Closing note --}}
            <div class="pj-svc3-footer">
                <i class="fas fa-star"></i>
                <p>
                    Toretto Recovery combines technical expertise, local area knowledge, and professional equipment
                    to deliver dependable vehicle assistance across Palm Jumeirah — anytime you need it.
                </p>
            </div>

        </div>
    </section>

    {{-- ===================================
    SECTION 4 — COVERAGE AREAS
    =================================== --}}
    <section class="pj-coverage-section">
        <div class="container">

            {{-- Header --}}
            <div class="pj-section-header text-center">
                <span class="pj-eyebrow light"><i class="fas fa-map"></i> Full Island Coverage</span>
                <h2>Full Coverage Across <span>Palm Jumeirah</span></h2>
                <p>
                    Palm Jumeirah isn't a typical city grid — it's a carefully designed island with controlled
                    access points, residential branches, hotel zones, and structured parking areas. That's why
                    local knowledge matters. Toretto Recovery provides complete coverage across every section
                    of the island, ensuring fast access and efficient vehicle positioning wherever assistance
                    is needed.
                </p>
            </div>

            {{-- "We operate across:" label --}}
            <p class="pj-cov4-label"><i class="fas fa-location-dot"></i> We operate across:</p>

            {{-- 6 Coverage Zone Cards --}}
            <div class="pj-cov4-grid">

                <div class="pj-cov4-card">
                    <div class="pj-cov4-card-top">
                        <div class="pj-cov4-icon"><i class="fas fa-water"></i></div>
                        <span class="pj-cov4-num">01</span>
                    </div>
                    <h3>The Crescent</h3>
                    <p>
                        Including resort zones, beachfront properties, and high-traffic hotel entrances where
                        breakdowns can quickly disrupt traffic flow.
                    </p>
                </div>

                <div class="pj-cov4-card">
                    <div class="pj-cov4-card-top">
                        <div class="pj-cov4-icon"><i class="fas fa-house-chimney"></i></div>
                        <span class="pj-cov4-num">02</span>
                    </div>
                    <h3>East &amp; West Fronds</h3>
                    <p>
                        Residential villa areas with narrow access roads that require careful maneuvering of
                        recovery vehicles to avoid disruption.
                    </p>
                </div>

                <div class="pj-cov4-card">
                    <div class="pj-cov4-card-top">
                        <div class="pj-cov4-icon"><i class="fas fa-road"></i></div>
                        <span class="pj-cov4-num">03</span>
                    </div>
                    <h3>Trunk Road Connections</h3>
                    <p>
                        The main entry and exit stretch linking the island toward mainland Dubai, where congestion
                        can increase during peak hours and delays compound quickly.
                    </p>
                </div>

                <div class="pj-cov4-card">
                    <div class="pj-cov4-card-top">
                        <div class="pj-cov4-icon"><i class="fas fa-lock"></i></div>
                        <span class="pj-cov4-num">04</span>
                    </div>
                    <h3>Private Residential Villas</h3>
                    <p>
                        We handle secure community access professionally and position recovery trucks without
                        blocking internal roads or disrupting residents.
                    </p>
                </div>

                <div class="pj-cov4-card">
                    <div class="pj-cov4-card-top">
                        <div class="pj-cov4-icon"><i class="fas fa-hotel"></i></div>
                        <span class="pj-cov4-num">05</span>
                    </div>
                    <h3>Hotel &amp; Resort Parking Areas</h3>
                    <p>
                        Including valet zones and guest parking spaces that require controlled, careful loading
                        procedures to maintain safety and avoid property damage.
                    </p>
                </div>

                <div class="pj-cov4-card">
                    <div class="pj-cov4-card-top">
                        <div class="pj-cov4-icon"><i class="fas fa-square-parking"></i></div>
                        <span class="pj-cov4-num">06</span>
                    </div>
                    <h3>Underground &amp; Basement Car Parks</h3>
                    <p>
                        We manage height restrictions, tight turns, and structured parking layouts safely and
                        efficiently using specialised low-clearance recovery equipment.
                    </p>
                </div>

            </div>

            {{-- Closing insight block --}}
            <div class="pj-cov4-closing">
                <div class="pj-cov4-closing-icon">
                    <i class="fas fa-route"></i>
                </div>
                <div class="pj-cov4-closing-text">
                    <p>
                        Our drivers are familiar with Palm Jumeirah's security checkpoints, gated entrances,
                        parking configurations, and traffic patterns. This local operational experience allows us
                        to reduce response time, choose the most efficient access route, and position recovery
                        vehicles safely without causing unnecessary disruption.
                    </p>
                    <p>
                        Wherever you're located on Palm Jumeirah — roadside, private driveway, basement parking,
                        or resort entrance — Toretto Recovery ensures reliable coverage with professional handling
                        every time.
                    </p>
                </div>
            </div>

        </div>
    </section>

    {{-- ===================================
    SECTION 5 — WHY CHOOSE US
    =================================== --}}
    <section class="pj-why-section">
        <div class="container">
            <div class="pj-why-grid">

                <div class="pj-why-left">
                    <span class="pj-eyebrow light"><i class="fas fa-star"></i> Why Choose Us</span>
                    <h2>Why Palm Jumeirah Drivers <span>Trust Toretto Recovery</span></h2>
                    <p>
                        Navigating vehicle issues on Palm Jumeirah requires more than just a tow — it demands experience,
                        precision, and reliability. Drivers across the island rely on Toretto Recovery because we combine
                        local expertise with professional service to deliver fast, safe, and dependable assistance.
                    </p>
                    <p class="mt-3">By combining local knowledge, professional expertise, modern equipment, and cons
                        t ant communication,
                        Toretto Recovery has become the trusted choice for drivers who need fast, safe, and reliable vehicle
                        recovery on Palm Jumeirah.
                    </p>

                    <div class="pj-stats-row">
                        <div class="pj-stat">
                            <strong>24/7</strong>
                            <span>Always Available</span>
                        </div>
                        <div class="pj-stat">
                            <strong>100%</strong>
                            <span>Safe Towing</span>
                        </div>
                        <div class="pj-stat">
                            <strong>6+</strong>
                            <span>Recovery Trucks</span>
                        </div>
                    </div>
                </div>

                <div class="pj-why-right">
                    <div class="pj-why-point">
                        <div class="pj-why-icon"><i class="fas fa-map-marked-alt"></i></div>
                        <div>
                            <h4>Local Experience</h4>
                            <p>Our team has extensive hands-on experience operating in Dubai’s premium communities,
                                including the intricate roads, gated villas, and resort zones of Palm Jumeirah. We
                                understand the island’s access logistics, traffic patterns, and high-value vehicle handling
                                requirements, allowing us to respond efficiently and safely in every situation.
                            </p>
                        </div>
                    </div>
                    <div class="pj-why-point">
                        <div class="pj-why-icon"><i class="fas fa-user-shield"></i></div>
                        <div>
                            <h4>Trained &amp; Professional Operators</h4>
                            <p>Every recovery specialist at Toretto Recovery is trained to follow strict safety protocols.
                                From secure tie-down methods to careful vehicle loading, our operators ensure that each
                                recovery is performed with precision and care, protecting your car and minimizing any risk
                                during transport.</p>
                        </div>
                    </div>
                    <div class="pj-why-point">
                        <div class="pj-why-icon"><i class="fas fa-truck"></i></div>
                        <div>
                            <h4>Modern Equipment</h4>
                            <p>We maintain a fleet of advanced flatbed and recovery vehicles specifically designed for urban
                                and luxury environments. Our trucks are regularly serviced and equipped with the tools
                                needed to handle everything from standard sedans to high-end sports and electric vehicles
                                safely.
                            </p>
                        </div>
                    </div>
                    <div class="pj-why-point">
                        <div class="pj-why-icon"><i class="fas fa-comments"></i></div>
                        <div>
                            <h4>Transparent Communication</h4>
                            <p>From the moment you call to the final delivery of your vehicle, we keep you informed. Our
                                team provides clear updates on estimated arrival times, recovery procedures, and any on-site
                                developments so you always know exactly what’s happening.</p>
                        </div>
                    </div>
                    <div class="pj-why-point">
                        <div class="pj-why-icon"><i class="fas fa-moon"></i></div>
                        <div>
                            <h4>24/7 Immediate Availability</h4>
                            <p>Vehicle breakdowns don’t follow a schedule, and neither do we. Toretto Recovery’s dispatch
                                line operates around the clock, ensuring emergency support is available any time — day or
                                night — across all areas of Palm Jumeirah.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 6 — PROCESS STEPS
    =================================== --}}
    <section class="pj-process-section">
        <div class="container">
            <div class="pj-section-header text-center">
                <span class="pj-eyebrow"><i class="fas fa-list-ol"></i> How It Works</span>
                <h2>How Our Car Recovery <span>Process Works</span></h2>
                <p>
                    At Toretto Recovery, we've designed a streamlined, user-friendly recovery process that combines
                    expertise, modern equipment, and years of hands-on experience to get you back on the road quickly
                    and safely. Every step is focused on efficiency, safety, and a stress-free experience for Palm
                    Jumeirah drivers.
                </p>
            </div>

            {{-- 3 Steps timeline --}}
            <div class="pj-proc6-steps">

                <div class="pj-proc6-step">
                    <div class="pj-proc6-step-left">
                        <div class="pj-proc6-badge"><span>Step</span><strong>01</strong></div>
                        <div class="pj-proc6-line"></div>
                    </div>
                    <div class="pj-proc6-content">
                        <div class="pj-proc6-icon"><i class="fas fa-phone-alt"></i></div>
                        <h3><a class="text-link" href="{{ route('contact') }}" target="_blank">Contact</a> &amp; Location
                            Confirmation</h3>
                        <p>
                            Reach out via call or message and provide your exact location on Palm Jumeirah — whether
                            you're on the Crescent, a residential Frond, or a resort parking area. Our friendly team
                            confirms your details and evaluates the situation instantly, ensuring the right recovery
                            unit and equipment is assigned.
                        </p>
                    </div>
                </div>

                <div class="pj-proc6-step">
                    <div class="pj-proc6-step-left">
                        <div class="pj-proc6-badge"><span>Step</span><strong>02</strong></div>
                        <div class="pj-proc6-line"></div>
                    </div>
                    <div class="pj-proc6-content">
                        <div class="pj-proc6-icon"><i class="fas fa-truck-fast"></i></div>
                        <h3>Rapid Dispatch</h3>
                        <p>
                            Once your location is verified, we dispatch the nearest recovery vehicle. Using real-time
                            route tracking and local knowledge of the island's layout, our drivers navigate efficiently
                            through narrow roads, security checkpoints, and busy areas, minimizing response time.
                        </p>
                    </div>
                </div>

                <div class="pj-proc6-step pj-proc6-step--last">
                    <div class="pj-proc6-step-left">
                        <div class="pj-proc6-badge"><span>Step</span><strong>03</strong></div>
                    </div>
                    <div class="pj-proc6-content">
                        <div class="pj-proc6-icon"><i class="fas fa-wrench"></i></div>
                        <h3>On-Site Resolution or Secure Transport</h3>
                        <p>
                            Upon arrival, our trained specialists assess your vehicle. Minor issues like battery
                            failure, flat tyres, or small mechanical problems are often fixed on the spot, letting
                            you continue your journey immediately. If transport is necessary, we use modern flatbed
                            trucks and professional loading techniques to move your vehicle safely to your chosen
                            destination, whether it's a service center, villa, or parking area.
                        </p>
                    </div>
                </div>

            </div>

            {{-- Closing summary --}}
            <div class="pj-proc6-summary">
                <i class="fas fa-circle-check"></i>
                <p>
                    Our process combines expert handling, modern equipment, and local knowledge, ensuring that every
                    recovery is safe, efficient, and stress-free. At Toretto Recovery, our ultimate goal is simple:
                    restore your mobility with minimal disruption, keeping you moving confidently across Palm Jumeirah.
                </p>
            </div>

            {{-- VEHICLE TYPES --}}
            <div class="pj-proc6-vt-wrap">
                <div class="pj-proc6-vt-header">
                    <h3>Vehicle Types We Handle</h3>
                    <p>We provide assistance for every vehicle category. </p>
                    <p>Each receives appropriate equipment and handling
                        techniques to ensure full protection during recovery.</p>
                </div>
                <div class="pj-proc6-vt-grid">
                    <div class="pj-proc6-vt-card">
                        <div class="pj-proc6-vt-icon"><i class="fas fa-car"></i></div>
                        <h4>Sedans &amp; Hatchbacks</h4>
                    </div>
                    <div class="pj-proc6-vt-card">
                        <div class="pj-proc6-vt-icon"><i class="fas fa-truck-pickup"></i></div>
                        <h4>SUVs &amp; 4x4 Vehicles</h4>
                    </div>
                    <div class="pj-proc6-vt-card">
                        <div class="pj-proc6-vt-icon"><i class="fas fa-gauge-high"></i></div>
                        <h4>Sports &amp; Luxury Cars</h4>
                    </div>
                    <div class="pj-proc6-vt-card">
                        <div class="pj-proc6-vt-icon"><i class="fas fa-van-shuttle"></i></div>
                        <h4>Commercial Vans</h4>
                    </div>
                    <div class="pj-proc6-vt-card">
                        <div class="pj-proc6-vt-icon"><i class="fas fa-plug-circle-bolt"></i></div>
                        <h4>Hybrid &amp; Electric Vehicles</h4>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===================================
    SECTION 7 — FAQ
    =================================== --}}
    <section class="pj-faq-section">
        <div class="container">
            <div class="pj-section-header text-center">
                <span class="pj-eyebrow"><i class="fas fa-circle-question"></i> FAQ</span>
                <h2>Frequently Asked Questions — <span>Palm Jumeirah Recovery</span></h2>
                <p>Everything you need to know about our car recovery service on Palm Jumeirah.</p>
            </div>

            <div class="pj-faq-list">

                <div class="pj-faq-item active">
                    <button class="pj-faq-q" aria-expanded="true">
                        <span>How quickly can you reach Palm Jumeirah?</span>
                        <div class="pj-faq-icon"><i class="fas fa-minus"></i></div>
                    </button>
                    <div class="pj-faq-answer">
                        <p>Response time depends on traffic conditions, but we position our units strategically near
                            island access routes to ensure prompt arrival. We aim to reach you as fast as possible,
                            24 hours a day, 7 days a week.</p>
                    </div>
                </div>

                <div class="pj-faq-item">
                    <button class="pj-faq-q" aria-expanded="false">
                        <span>Do you recover vehicles from underground parking?</span>
                        <div class="pj-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="pj-faq-answer">
                        <p>Yes. Our operators manage height restrictions and controlled access areas professionally.
                            We regularly handle basement recoveries across Palm Jumeirah's hotels and residential
                            buildings using specialised low-clearance equipment.</p>
                    </div>
                </div>

                <div class="pj-faq-item">
                    <button class="pj-faq-q" aria-expanded="false">
                        <span>Can you transport luxury or sports cars safely?</span>
                        <div class="pj-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="pj-faq-answer">
                        <p>Absolutely. We use flatbed transport methods specifically designed for high-value vehicles.
                            Zero wheel-lift, secure tie-downs, and controlled loading — every time. All our flatbed
                            trucks are equipped to handle low-clearance performance and exotic vehicles.</p>
                    </div>
                </div>

                <div class="pj-faq-item">
                    <button class="pj-faq-q" aria-expanded="false">
                        <span>Are you available at night or on weekends?</span>
                        <div class="pj-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="pj-faq-answer">
                        <p>Yes. Toretto Recovery operates 24/7 throughout the year. Day or night, weekdays or
                            holidays — our dispatch line is always open and units are always on standby, ready to
                            respond across Palm Jumeirah.</p>
                    </div>
                </div>

                <div class="pj-faq-item">
                    <button class="pj-faq-q" aria-expanded="false">
                        <span>Do you assist after minor accidents?</span>
                        <div class="pj-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="pj-faq-answer">
                        <p>Yes. We provide secure accident recovery and coordinate safe vehicle relocation. Our team
                            follows proper safety protocols aligned with traffic standards in Dubai and ensures that
                            your vehicle is handled with care from the scene to its destination.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 8 — CTA
    =================================== --}}
    <section class="pj-cta-section">
        <div class="container">
            <div class="pj-cta-box">
                <div class="pj-cta-left">
                    <h2>Trusted Car Recovery Experts <span>on Palm Jumeirah</span></h2>
                    <p>
                        Toretto Recovery focuses on reliability, safety, and fast action. Our team combines local
                        knowledge with technical expertise to deliver dependable vehicle assistance anywhere on
                        Palm Jumeirah.
                    </p>
                    <p class="pj-cta-sub">If your vehicle stops unexpectedly, do not risk unsafe roadside waiting. Contact
                        Toretto Recovery now for immediate car recovery service on Palm Jumeirah — available 24 hours a day.
                    </p>
                </div>
                <div class="pj-cta-right">
                    <a href="tel:+971523003423" class="theme-btn pj-cta-btn-primary">
                        <i class="fas fa-phone"></i> +971 52 300 3423
                    </a>
                    <a href="{{ route('book.now') }}" target="_blank" class="theme-btn pj-cta-btn-secondary">
                        Book Online <i class="fas fa-arrow-right-long"></i>
                    </a>
                    <a href="{{ route('contact') }}" target="_blank" class="pj-cta-link">
                        Get Guidance <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <link rel="stylesheet" href="{{ asset('assets/css/areas.css') }}">

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const faqItems = document.querySelectorAll('.pj-faq-list .pj-faq-item');

            faqItems.forEach(function (item) {
                const btn = item.querySelector('.pj-faq-q');
                btn.addEventListener('click', function () {
                    const isActive = item.classList.contains('active');

                    // Close all
                    faqItems.forEach(function (el) {
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
