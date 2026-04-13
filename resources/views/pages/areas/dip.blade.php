@extends('layouts.main')

@section('title', 'Industrial & Fleet Recovery in Dubai Investment Park | Toretto Recovery')

@section('meta_description')
    Toretto Recovery — DIP's trusted 24/7 industrial & fleet recovery specialist. Heavy truck towing, basement pull-out,
    battery jumpstart & accident recovery across DIP 1 & DIP 2. Call now.
@endsection

@section('meta_keywords', 'Car Recovery DIP, Towing Dubai Investment Park, Heavy Recovery DIP, Fleet Recovery Dubai, 24/7 Emergency Towing DIP')

@section('head')
    <link rel="stylesheet"
        href="{{ asset('assets/css/investments-park.css') }}?v={{ filemtime(public_path('assets/css/investments-park.css')) }}">
    <link rel="canonical" href="https://torettorecovery.ae/areas-we-serve/dip">
    @verbatim
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "AutoRepairShop",
          "name": "Toretto Recovery",
          "url": "https://www.torettorecovery.ae",
          "logo": "https://www.torettorecovery.ae/images/toretto-recovery-logo.png",
          "image": "https://www.torettorecovery.ae/images/toretto-recovery-dip-fleet-towing.jpg",
          "description": "Toretto Recovery is Dubai Investment Park's specialist in 24/7 industrial and fleet vehicle recovery.",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "2, 74 Street, Dubai Investments Park 2",
            "addressLocality": "Dubai",
            "addressRegion": "Dubai",
            "addressCountry": "AE",
            "postalCode": "00000"
          },
          "geo": { "@type": "GeoCoordinates", "latitude": "24.9964", "longitude": "55.1597" },
          "telephone": "+971526917666",
          "email": "customercare@toretto.ae",
          "openingHoursSpecification": [{
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "00:00", "closes": "23:59"
          }],
          "priceRange": "AED 150 – AED 1500+",
          "areaServed": ["Dubai Investment Park 1","Dubai Investment Park 2","Dubai South","Jebel Ali","Expo City Dubai","Al Quoz","Discovery Gardens","Jumeirah Village Circle","Dubai"],
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Vehicle Recovery Services",
            "itemListElement": [
              {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Heavy Truck & Fleet Towing Dubai Investment Park"}},
              {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Basement & Underground Car Recovery DIP"}},
              {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "24/7 Battery Jumpstart Service Dubai"}},
              {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Accident Recovery & Insurance Towing Dubai"}},
              {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Mobile Flat Tyre Replacement DIP"}},
              {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Forklift & Machinery Transport Dubai"}},
              {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Fleet Contract Roadside Assistance DIP"}},
              {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Motorcycle & Scooter Recovery Dubai"}},
              {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Long Distance Vehicle Transport UAE"}}
            ]
          },
          "aggregateRating": { "@type": "AggregateRating", "ratingValue": "4.9", "reviewCount": "87", "bestRating": "5" },
          "sameAs": [
            "https://www.facebook.com/p/Toretto-AUTO-Services-LLC-100090817512858/",
            "https://www.instagram.com/torettoautoservices/"
          ]
        }
        </script>

        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            {"@type":"Question","name":"How fast can Toretto Recovery reach DIP 1 or DIP 2?","acceptedAnswer":{"@type":"Answer","text":"Toretto Recovery typically reaches any location within Dubai Investment Park 1 or DIP 2 in 20 to 30 minutes. Our drivers know the internal road network and warehouse clusters by name, so there's no GPS confusion or wrong-turn delays that add 20 extra minutes to your wait."}},
            {"@type":"Question","name":"Do you offer 24/7 vehicle recovery in Dubai Investment Park?","acceptedAnswer":{"@type":"Answer","text":"Yes. Toretto Recovery operates a full team around the clock — not a single on-call driver after midnight. DIP runs 24-hour logistics operations, and our night coverage reflects that. Call or WhatsApp any hour."}},
            {"@type":"Question","name":"Can you recover a car stuck in underground or basement parking in DIP?","acceptedAnswer":{"@type":"Answer","text":"Yes. We carry specialist low-clearance recovery vehicles specifically for underground parking and tight service lane recoveries. Standard tow trucks can't access these spaces. Ours can. It's one of our most requested services in DIP's commercial buildings."}},
            {"@type":"Question","name":"Do you handle heavy truck and fleet vehicle recovery?","acceptedAnswer":{"@type":"Answer","text":"Heavy vehicle towing is a core service. We recover lorries, trailers, delivery trucks, staff buses, and commercial vehicles using purpose-built heavy-duty recovery rigs. Fleet contracts with priority dispatch are also available for logistics companies based in DIP."}},
            {"@type":"Question","name":"Can you safely tow a Ferrari, Lamborghini, or luxury car?","acceptedAnswer":{"@type":"Answer","text":"Yes. We use flatbed tow trucks and soft straps only for low-clearance and high-value vehicles. No wheel-lift, no dragging. Luxury and sports car recovery is handled with the same equipment and care as any high-ticket asset."}},
            {"@type":"Question","name":"What does car recovery cost in Dubai Investment Park?","acceptedAnswer":{"@type":"Answer","text":"Light vehicle recovery within DIP starts from approximately AED 150–250. Heavy vehicle towing, basement pull-out, and specialist recoveries are priced on request. We provide transparent upfront pricing before dispatch — no hidden fees."}},
            {"@type":"Question","name":"What to do if my car breaks down in Dubai Investment Park?","acceptedAnswer":{"@type":"Answer","text":"Stay with your vehicle in a safe position away from traffic. Turn on hazard lights. Call or WhatsApp Toretto Recovery on +971526917666. Share your location pin or nearest warehouse/road name. Our nearest truck will be dispatched immediately."}}
          ]
        }
        </script>

        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "BreadcrumbList",
          "itemListElement": [
            {"@type":"ListItem","position":1,"name":"Home","item":"https://www.torettorecovery.ae/"},
            {"@type":"ListItem","position":2,"name":"Recovery Services Dubai","item":"https://www.torettorecovery.ae/car-recovery-dubai"},
            {"@type":"ListItem","position":3,"name":"Industrial & Fleet Recovery Dubai Investment Park","item":"https://www.torettorecovery.ae/industrial-fleet-recovery-dubai-investment-park"}
          ]
        }
        </script>
    @endverbatim
@endsection

@section('content')

    {{-- BREADCRUMB --}}
    <section class="site-breadcrumb" style="background:url('{{ asset('assets/images/contact-bg.jpg') }}')">
        <div class="container">
            <h1 class="breadcrumb-title-areas">Dubai Investment Park</h1>
            <ul class="breadcrumb-menu">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                    <i class="fa fa-angle-double-right"></i>
                </li>
                <li>
                    <a href="{{ route('home') }}">Areas We Serve</a>
                    <i class="fa fa-angle-double-right"></i>
                </li>
                <li class="active">Dubai Investment Park</li>
            </ul>
        </div>
    </section>

    {{-- ===================================
    SECTION 1 — HERO INTRO
    =================================== --}}
    <section class="dip-hero-new">
        <div class="container">
            <div class="dip-hero-inner dip-hero-flex">

                <div class="dip-hero-text">
                    {{-- Eyebrow --}}
                    <span class="dip-hero-eyebrow">
                        <i class="fas fa-map-marker-alt"></i> Dubai Investment Park, Dubai
                    </span>

                    {{-- H1 --}}
                    <h1 class="dip-hero-h1">
                        Industrial & Fleet Recovery Specialist in Dubai Investment Park
                        <span>— 24/7 Emergency Response</span>
                    </h1>

                    {{-- Subheading --}}
                    <p class="dip-hero-sub">
                        Dubai Investment Park runs around the clock — and so do we. Toretto Recovery is DIP's dedicated
                        heavy vehicle and fleet recovery team. Breakdowns, accidents, flat batteries, tyre bursts,
                        basement pull-outs — we show up fast with the right equipment. Licensed UAE operators. Six recovery
                        trucks on the road. <strong>20 to 30 minutes</strong> to your location.
                    </p>

                    {{-- 3 CTA Buttons --}}
                    <div class="dip-hero-cta-row">
                        <a href="tel:+971526917666" class="dip-cta-call">
                            <i class="fas fa-phone-alt"></i> Call Now — +971 526917666
                        </a>
                        <a href="https://wa.me/971526917666" target="_blank" class="dip-cta-whatsapp">
                            <i class="fab fa-whatsapp"></i> WhatsApp Recovery
                        </a>
                        <a href="{{ route('book.now') }}" target="_blank" class="dip-cta-help">
                            <i class="fas fa-bolt"></i> Get Help Now
                        </a>
                    </div>

                    {{-- Trust Badges Row --}}
                    <div class="dip-hero-badges">
                        <div class="dip-badge-pill"><i class="fas fa-check-circle"></i> 24/7 Emergency Service</div>
                        <div class="dip-badge-pill"><i class="fas fa-check-circle"></i> Licensed UAE Recovery Operators</div>
                        <div class="dip-badge-pill"><i class="fas fa-check-circle"></i> 6-Truck Fleet — Flatbed & Heavy-Duty</div>
                        <div class="dip-badge-pill"><i class="fas fa-check-circle"></i> Fully Insured Recovery</div>
                        <div class="dip-badge-pill"><i class="fas fa-check-circle"></i> 10+ Years Experience</div>
                    </div>
                </div>

                <div class="dip-hero-img">
                    <img src="{{ asset('assets/images/towing -car-dubai-investment-park.jpg') }}" alt="Flatbed car recovery on Dubai Investment Park highway" loading="eager">
                    <div class="dip-hero-img-badge">
                        <i class="fas fa-shield-halved"></i>
                        <span>Based in DIP 2</span>
                    </div>
                </div>

            </div>
        </div>

        {{-- Stats Bar --}}
        <div class="dip-stats-bar">
            <div class="container">
                <div class="dip-stats-grid">
                    <div class="dip-stat-item">
                        <strong>10+</strong>
                        <span>Years</span>
                        <p>UAE Recovery Experience</p>
                    </div>
                    <div class="dip-stat-item">
                        <strong>20–30</strong>
                        <span>Min</span>
                        <p>Avg. Response in DIP</p>
                    </div>
                    <div class="dip-stat-item">
                        <strong>1,000+</strong>
                        <span></span>
                        <p>Vehicles Recovered</p>
                    </div>
                    <div class="dip-stat-item">
                        <strong>6</strong>
                        <span>Trucks</span>
                        <p>Active Fleet</p>
                    </div>
                    <div class="dip-stat-item">
                        <strong>24/7</strong>
                        <span></span>
                        <p>Day & Night Coverage</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    {{-- ===================================
    SECTION 2 — WHY DIP CREATES MORE BREAKDOWNS
    =================================== --}}
    <section class="dip-s2-section">
        <div class="container">`

            {{-- H2 Header Block --}}
            <div class="dip-s2-header">
                <span class="dip-hero-eyebrow" style="color: #d70006">
                    <i class="fas fa-exclamation-triangle"></i> Ground Truth
                </span>
                <h2>Dubai Investment Park Has a Breakdown Problem Most Recovery Companies
                    <span>Aren't Prepared For</span></h2>
            </div>

            {{-- Intro paragraphs --}}
            <div class="dip-s2-intro">
                <p>
                    Dubai Investment Park is one of the UAE's busiest logistics zones, with constant truck and fleet
                    movement across 120 km of roads. With extreme heat, long idle times, and heavy loads, breakdowns
                    here happen daily — from overheating engines and dead batteries to tyre bursts and accidents near
                    E311 and Expo Road.
                </p>
                <p>
                    Most recovery companies aren't prepared for DIP. They lack the right equipment, struggle with
                    navigation, and reduce service at night.
                </p>
                <p class="dip-s2-highlight">
                    <i class="fas fa-shield-halved"></i>
                    Toretto Recovery is built for this environment — based in DIP 2, fully equipped, and available
                    24/7 with a team that knows every road, ensuring fast and reliable support anytime.
                </p>
            </div>

            {{-- Visual Image --}}
            <div class="dip-s2-visual dip-s2-visual-flex">
                <img src="{{ asset('assets/images/Industrial-and-fleet-recovery-specialist-in-dubai-Investment-Park.jpg') }}" alt="Night recovery operation in Dubai Investment Park" loading="lazy">
                <div class="dip-s2-visual-caption">
                    <i class="fas fa-camera"></i> Basement recovery in action — DIP urban area, night operations
                </div>
            </div>

            {{-- H3 Subheading --}}
            <h3 class="dip-s2-sub-title">
                <i class="fas fa-bolt"></i>
                Why DIP Creates More Breakdowns Than Anywhere Else in Dubai
            </h3>

            {{-- 4 Breakdown Reason Cards --}}
            <div class="dip-s2-grid">

                <div class="dip-s2-card">
                    <div class="dip-s2-card-num">01</div>
                    <div class="dip-s2-card-icon"><i class="fas fa-temperature-high"></i></div>
                    <h4>Heat and Long Idle — The Hidden Daily Problem</h4>
                    <p>
                        Vehicles queuing at loading bays for two or three hours, AC running flat out — it drains
                        batteries fast and spikes coolant temperatures. Battery failure and engine overheating are
                        the two highest-volume calls we receive across DIP every single week, especially from June
                        through September.
                    </p>
                </div>

                <div class="dip-s2-card">
                    <div class="dip-s2-card-num">02</div>
                    <div class="dip-s2-card-icon"><i class="fas fa-road"></i></div>
                    <h4>120 KM of Internal Roads With No Clear Landmarks</h4>
                    <p>
                        DIP is enormous. DIP 1 covers industrial units and a residential cluster. DIP 2 is heavier
                        industrial with labor camps and warehouse blocks that look nearly identical from the road.
                        Wrong navigation means delayed response — and in logistics, every hour of standstill has a
                        direct financial cost.
                    </p>
                </div>

                <div class="dip-s2-card">
                    <div class="dip-s2-card-num">03</div>
                    <div class="dip-s2-card-icon"><i class="fas fa-square-parking"></i></div>
                    <h4>Basement and Underground Parking — A Niche Nobody Fills</h4>
                    <p>
                        Many commercial buildings and warehouses in DIP have underground parking with low clearance,
                        tight columns, and narrow service ramps. Standard tow trucks can't enter. We carry specialist
                        low-clearance recovery vehicles specifically for this. It's a service gap most competitors
                        haven't filled — we have.
                    </p>
                </div>

                <div class="dip-s2-card">
                    <div class="dip-s2-card-num">04</div>
                    <div class="dip-s2-card-icon"><i class="fas fa-moon"></i></div>
                    <h4>24-Hour Night Operations — Most Competitors Go Quiet</h4>
                    <p>
                        DIP doesn't sleep. Night logistics, late shift changes, inter-emirate deliveries that arrive
                        at 2 AM — this is real and routine here. Most recovery companies run a skeleton service after
                        midnight. We don't. Full crew, full fleet, any hour.
                    </p>
                </div>

            </div>

        </div>
    </section>

    {{-- ===================================
    SECTION 3 — REAL SCENARIOS FROM DIP
    =================================== --}}
    <section class="dip-s3-section">
        <div class="container">

            {{-- Header --}}
            <div class="dip-s3-header">
                <span class="dip-hero-eyebrow" style="color: #d70006">
                    <i class="fas fa-clipboard-list"></i> Ground Truth — What We Actually Handle
                </span>
                <h2>Real Scenarios from <span>Dubai Investment Park</span></h2>
                <p>
                    These aren't hypothetical. These are the calls we receive every week across DIP 1, DIP 2,
                    and the surrounding corridors.
                </p>
            </div>

            {{-- Feature Image --}}
            <div class="dip-s3-feature-img">
                <img src="{{ asset('assets/images/tyre-replacement-at-dip.jpg') }}" alt="Emergency tyre replacement at Dubai Investment Park" loading="lazy">
            </div>

            {{-- 6 Scenario Cards --}}
            <div class="dip-s3-grid">

                {{-- Card 1 --}}
                <div class="dip-s3-card">
                    <div class="dip-s3-card-top">
                        <div class="dip-s3-card-icon"><i class="fas fa-car-battery"></i></div>
                        <span class="dip-s3-card-num">01</span>
                    </div>
                    <h3>Warehouse Battery Drain</h3>
                    <p>
                        Driver finishes a three-hour loading shift. Engine cranks, nothing starts. Battery drained
                        from continuous AC and prolonged idle in the loading dock. This happens multiple times a week
                        across DIP warehouses. Quick jumpstart or on-site battery replacement — job done in 20 minutes.
                    </p>
                    <div class="dip-s3-card-tag">
                        <i class="fas fa-clock"></i> ~20 min resolution
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="dip-s3-card">
                    <div class="dip-s3-card-top">
                        <div class="dip-s3-card-icon"><i class="fas fa-circle-dot"></i></div>
                        <span class="dip-s3-card-num">02</span>
                    </div>
                    <h3>Overloaded Truck Tyre Burst on Internal Road</h3>
                    <p>
                        Heavy truck, max load, hits a construction nail on an internal DIP road. Tyre explodes.
                        Truck blocks a key logistics corridor. Standard roadside vans don't carry heavy commercial
                        tyres. Our mobile heavy tyre unit does.
                    </p>
                    <div class="dip-s3-card-tag">
                        <i class="fas fa-truck"></i> Heavy tyre unit deployed
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="dip-s3-card">
                    <div class="dip-s3-card-top">
                        <div class="dip-s3-card-icon"><i class="fas fa-square-parking"></i></div>
                        <span class="dip-s3-card-num">03</span>
                    </div>
                    <h3>Car Stuck in DIP Basement Parking</h3>
                    <p>
                        Car dead in underground parking, 1.9m clearance height, tight columns. Three recovery companies
                        say they can't help. We deploy our low-clearance specialist vehicle. Car out safely, driver on
                        their way.
                    </p>
                    <div class="dip-s3-card-tag">
                        <i class="fas fa-down-long"></i> Low-clearance specialist
                    </div>
                </div>

                {{-- Card 4 --}}
                <div class="dip-s3-card">
                    <div class="dip-s3-card-top">
                        <div class="dip-s3-card-icon"><i class="fas fa-car-burst"></i></div>
                        <span class="dip-s3-card-num">04</span>
                    </div>
                    <h3>Accident on the E311 Expo Road Exit</h3>
                    <p>
                        Minor rear-end collision. Vehicle can't move. Mixed traffic — trucks, buses, private cars —
                        building behind. We arrive, coordinate with police and insurance, tow the vehicle to the
                        approved garage, and clear the scene fast.
                    </p>
                    <div class="dip-s3-card-tag">
                        <i class="fas fa-shield-halved"></i> Police & insurance coordinated
                    </div>
                </div>

                {{-- Card 5 --}}
                <div class="dip-s3-card dip-s3-card--highlight">
                    <div class="dip-s3-card-top">
                        <div class="dip-s3-card-icon"><i class="fas fa-moon"></i></div>
                        <span class="dip-s3-card-num">05</span>
                    </div>
                    <h3>2 AM Logistics Breakdown</h3>
                    <span class="dip-s3-badge-critical">Most Profitable, Most Critical</span>
                    <p>
                        Night delivery vehicle stops dead in DIP 2 at 2 AM. Cargo at risk. Dispatch team panicking.
                        Most competitors send one driver in a basic van. We send the right truck. Full team. Full
                        equipment. Night surcharge is standard — but so is the service level.
                    </p>
                    <div class="dip-s3-card-tag">
                        <i class="fas fa-bolt"></i> Full crew, any hour
                    </div>
                </div>

                {{-- Card 6 --}}
                <div class="dip-s3-card">
                    <div class="dip-s3-card-top">
                        <div class="dip-s3-card-icon"><i class="fas fa-gears"></i></div>
                        <span class="dip-s3-card-num">06</span>
                    </div>
                    <h3>Forklift Recovery at a Warehouse Site</h3>
                    <p>
                        Industrial forklift breaks down inside a loading bay, blocking dock operations. Our heavy plant
                        recovery vehicle handles the lift, the tow, and the repositioning. Specialist job — specialist
                        equipment.
                    </p>
                    <div class="dip-s3-card-tag">
                        <i class="fas fa-industry"></i> Heavy plant specialist
                    </div>
                </div>

            </div>

        </div>
    </section>

    {{-- ===================================
    SECTION 4 — OUR RECOVERY SERVICES
    =================================== --}}
    <section class="dip-s4-section">
        <div class="container">

            {{-- Header --}}
            <div class="dip-s4-header">
                <span class="dip-hero-eyebrow" style="color: #d70006">
                    <i class="fas fa-tools"></i> What We Do
                </span>
                <h2>Our Recovery Services in <span>Dubai Investment Park</span></h2>
                <p>
                    Every service listed below runs 24 hours a day, seven days a week. No hidden dispatch fees.
                    No reduced crew at night. Pricing is transparent and confirmed before we move.
                </p>
            </div>

            {{-- Feature Image --}}
            <div class="dip-s4-feature-img">
                <img src="{{ asset('assets/images/experienced-towing-expert-dip.jpg') }}" alt="Experienced towing expert loading vehicle in DIP" loading="lazy">
            </div>

            {{-- 12 Service Cards --}}
            <div class="dip-s4-grid">

                <div class="dip-s4-card">
                    <div class="dip-s4-card-left">
                        <div class="dip-s4-icon"><i class="fas fa-car-burst"></i></div>
                        <span class="dip-s4-num">01</span>
                    </div>
                    <div class="dip-s4-card-body">
                        <h3>Emergency Vehicle Recovery — DIP 1 &amp; DIP 2</h3>
                        <p>Any vehicle, any breakdown, any point inside Dubai Investment Park. We dispatch from our
                            DIP 2 base and know every internal road. 20 to 30 minutes is our average arrival window.</p>
                    </div>
                </div>

                <div class="dip-s4-card">
                    <div class="dip-s4-card-left">
                        <div class="dip-s4-icon"><i class="fas fa-truck-moving"></i></div>
                        <span class="dip-s4-num">02</span>
                    </div>
                    <div class="dip-s4-card-body">
                        <h3>Car Towing — <a class="text-link"
                                href="{{ route('our-service.ourservice', ['slug' => 'flatbed-recovery-dubai']) }}"
                                target="_blank">Flatbed, Damage-Free</a></h3>
                        <p>All car types loaded onto flatbed trucks with soft straps. Sedans, SUVs, luxury cars,
                            sports cars — no wheel-lift dragging, no contact damage. Your car arrives exactly as it left.</p>
                    </div>
                </div>

                <div class="dip-s4-card">
                    <div class="dip-s4-card-left">
                        <div class="dip-s4-icon"><i class="fas fa-shield-halved"></i></div>
                        <span class="dip-s4-num">03</span>
                    </div>
                    <div class="dip-s4-card-body">
                        <h3>Accident Recovery &amp; Insurance Coordination</h3>
                        <p>We tow from accident scenes, coordinate with Dubai Police and insurance companies, and
                            transport to your approved workshop. Fast scene clearance, full documentation support.</p>
                    </div>
                </div>

                <div class="dip-s4-card">
                    <div class="dip-s4-card-left">
                        <div class="dip-s4-icon"><i class="fas fa-bolt"></i></div>
                        <span class="dip-s4-num">04</span>
                    </div>
                    <div class="dip-s4-card-body">
                        <h3>Battery Jumpstart &amp; On-Site Replacement</h3>
                        <p>On-site jumpstart using professional equipment. If the battery is beyond recovery, we carry
                            replacement units. Most battery calls resolved in under 20 minutes without a tow.</p>
                    </div>
                </div>

                <div class="dip-s4-card">
                    <div class="dip-s4-card-left">
                        <div class="dip-s4-icon"><i class="fas fa-circle-dot"></i></div>
                        <span class="dip-s4-num">05</span>
                    </div>
                    <div class="dip-s4-card-body">
                        <h3>Mobile Flat Tyre &amp; Emergency Tyre Replacement</h3>
                        <p>Emergency tyre change for cars and motorcycles. Heavy commercial tyre replacement for trucks
                            and vans. TPMS sensor reset. Fleet tyre maintenance contracts available.</p>
                    </div>
                </div>

                <div class="dip-s4-card">
                    <div class="dip-s4-card-left">
                        <div class="dip-s4-icon"><i class="fas fa-truck"></i></div>
                        <span class="dip-s4-num">06</span>
                    </div>
                    <div class="dip-s4-card-body">
                        <h3>Heavy Truck Towing &amp; Commercial Vehicle Recovery</h3>
                        <p>Lorry breakdown, trailer recovery, commercial van towing — all handled with purpose-built
                            heavy-duty recovery rigs. This is not a service we outsource.</p>
                    </div>
                </div>

                <div class="dip-s4-card">
                    <div class="dip-s4-card-left">
                        <div class="dip-s4-icon"><i class="fas fa-square-parking"></i></div>
                        <span class="dip-s4-num">07</span>
                    </div>
                    <div class="dip-s4-card-body">
                        <h3>Basement &amp; Underground Pull-Out</h3>
                        <p>Low-clearance specialist recovery vehicle for underground parking, narrow ramps, and tight
                            service lanes. If a standard tow truck says it can't get in, call us.</p>
                    </div>
                </div>

                <div class="dip-s4-card">
                    <div class="dip-s4-card-left">
                        <div class="dip-s4-icon"><i class="fas fa-bus"></i></div>
                        <span class="dip-s4-num">08</span>
                    </div>
                    <div class="dip-s4-card-body">
                        <h3>Fleet &amp; Staff Bus Recovery</h3>
                        <p>Monthly contracts with logistics companies, warehouses, and fleet operators. Priority dispatch.
                            Fixed pricing. Dedicated contact. Bus breakdown recovery and company vehicle towing across
                            DIP and Dubai South.</p>
                    </div>
                </div>

                <div class="dip-s4-card">
                    <div class="dip-s4-card-left">
                        <div class="dip-s4-icon"><i class="fas fa-motorcycle"></i></div>
                        <span class="dip-s4-num">09</span>
                    </div>
                    <div class="dip-s4-card-body">
                        <h3>Motorcycle &amp; Scooter Recovery</h3>
                        <p>Dedicated bike carriers for motorcycles and scooters. Safe strapping, no frame damage.
                            Emergency bike recovery Dubai and motorcycle towing DIP available 24/7.</p>
                    </div>
                </div>

                <div class="dip-s4-card">
                    <div class="dip-s4-card-left">
                        <div class="dip-s4-icon"><i class="fas fa-compass"></i></div>
                        <span class="dip-s4-num">10</span>
                    </div>
                    <div class="dip-s4-card-body">
                        <h3>Desert &amp; Off-Road Recovery</h3>
                        <p>Vehicle stuck in sand near Dubai South or Jebel Ali? Winch recovery, extraction, and transport
                            back to the road. Specialist off-road recovery team.</p>
                    </div>
                </div>

                <div class="dip-s4-card">
                    <div class="dip-s4-card-left">
                        <div class="dip-s4-icon"><i class="fas fa-gears"></i></div>
                        <span class="dip-s4-num">11</span>
                    </div>
                    <div class="dip-s4-card-body">
                        <h3>Forklift, Machinery &amp; Generator Transport</h3>
                        <p>Heavy plant specialists. Forklift recovery Dubai, construction vehicle towing, generator
                            transport — purpose-built heavy transport equipment.</p>
                    </div>
                </div>

                <div class="dip-s4-card">
                    <div class="dip-s4-card-left">
                        <div class="dip-s4-icon"><i class="fas fa-route"></i></div>
                        <span class="dip-s4-num">12</span>
                    </div>
                    <div class="dip-s4-card-body">
                        <h3>Long Distance Vehicle Transport</h3>
                        <p>Inter-emirate vehicle transport to Abu Dhabi, Sharjah, Al Ain, and beyond. Full GPS tracking,
                            professional tie-down, competitive rates.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    {{-- ===================================
    SECTION 5 — VEHICLES WE RECOVER
    =================================== --}}
    <section class="dip-s5-section">
        <div class="container">
            <div class="dip-s5-header">
                <span class="dip-hero-eyebrow" style="color: #d70006;"><i class="fas fa-truck-pickup"></i> Every Vehicle Type</span>
                <h2>Vehicles We Recover Across <span>DIP</span></h2>
                <p>If it moves and it's stuck, we recover it. Here's the complete vehicle range we handle across Dubai Investment Park and the wider Dubai area:</p>
            </div>

            <div class="dip-s5-grid">
                {{-- Category 1 --}}
                <div class="dip-s5-card">
                    <div class="dip-s5-icon"><i class="fas fa-car-side"></i></div>
                    <h3>Light Vehicles</h3>
                    <p>Sedan cars, Hatchbacks, SUVs, 4x4 vehicles, Luxury cars, Sports cars, Ferrari recovery Dubai, Lamborghini towing service Dubai, Low-clearance sports cars</p>
                </div>
                {{-- Category 2 --}}
                <div class="dip-s5-card">
                    <div class="dip-s5-icon"><i class="fas fa-motorcycle"></i></div>
                    <h3>Two-Wheelers</h3>
                    <p>Motorcycles, Scooters, Delivery bikes, Emergency bike recovery Dubai</p>
                </div>
                {{-- Category 3 --}}
                <div class="dip-s5-card">
                    <div class="dip-s5-icon"><i class="fas fa-van-shuttle"></i></div>
                    <h3>Vans &amp; Commercial</h3>
                    <p>Delivery vans, Cargo vans, Light commercial vehicles, Commercial van breakdown Dubai</p>
                </div>
                {{-- Category 4 --}}
                <div class="dip-s5-card">
                    <div class="dip-s5-icon"><i class="fas fa-truck-moving"></i></div>
                    <h3>Heavy Vehicles</h3>
                    <p>Trucks, Lorries, Trailers, Heavy vehicle towing DIP, Lorry breakdown recovery Dubai, Trailer recovery service Dubai</p>
                </div>
                {{-- Category 5 --}}
                <div class="dip-s5-card">
                    <div class="dip-s5-icon"><i class="fas fa-bus"></i></div>
                    <h3>Fleet &amp; Passenger</h3>
                    <p>Staff buses, Fleet vehicles, Company vehicles, Fleet vehicle recovery service Dubai</p>
                </div>
                {{-- Category 6 --}}
                <div class="dip-s5-card">
                    <div class="dip-s5-icon"><i class="fas fa-gears"></i></div>
                    <h3>Special &amp; Industrial</h3>
                    <p>Forklifts, Construction vehicles, Generators, Machinery, Heavy plant</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 6 — WHY TORETTO RECOVERY
    =================================== --}}
    <section class="dip-s6-section">
        <div class="container">
            <div class="dip-s6-header text-center">
                <span class="dip-hero-eyebrow" style="color: #d70006;"><i class="fas fa-medal"></i> Why Toretto Recovery</span>
                <h2>Why DIP Supply Chains <span>Rely on Us</span></h2>
                <p>We are not your average recovery service. We are deeply integrated into the Dubai Investment Park logistics hub, giving us a genuine operational advantage over outside competitors.</p>
            </div>

            <div class="dip-s6-bento">
                <div class="dip-s6-card wide">
                    <div class="dip-s6-card-icon"><i class="fas fa-map-marked-alt"></i></div>
                    <h3>We Know the DIP Roads</h3>
                    <p>We don't need location pins explained three times. We know exactly where the roundabout near DIP 1 Choithrams is, and we know the loading bays behind the Green Community. Fast navigation means faster recovery.</p>
                </div>
                
                <div class="dip-s6-card">
                    <div class="dip-s6-card-icon"><i class="fas fa-file-contract"></i></div>
                    <h3>Fully Licensed &amp; Insured</h3>
                    <p>Every operator is RTA-certified and approved. Our comprehensive towing insurance covers your vehicle from hook-up to drop-off.</p>
                </div>
                
                <div class="dip-s6-card">
                    <div class="dip-s6-card-icon"><i class="fas fa-truck-loading"></i></div>
                    <h3>The Right Equipment</h3>
                    <p>We don't send a standard flatbed for a basement extraction, and we don't send a heavy rig for a sedan battery jump. We dispatch accurately based on your exact situation.</p>
                </div>
                
                <div class="dip-s6-card">
                    <div class="dip-s6-card-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>10+ Years, Zero Damage</h3>
                    <p>Sports cars, low-clearance hypercars, and heavy trucks. We use soft straps and proper winch angles to guarantee zero contact damage.</p>
                </div>

                <div class="dip-s6-card">
                    <div class="dip-s6-card-icon"><i class="fas fa-clock"></i></div>
                    <h3>Real 24/7 Team</h3>
                    <p>We actually run shifts. Many companies just turn their phones on at night. We have active drivers holding on standby in DIP 2 at all hours.</p>
                </div>

                <div class="dip-s6-card wide">
                    <div class="dip-s6-card-icon"><i class="fas fa-handshake"></i></div>
                    <h3>Fleet Contract Support</h3>
                    <p>We offer priority SLA agreements for logistics companies operating inside DIP. Enjoy fixed monthly pricing, guaranteed rapid response times, and dedicated account management.</p>
                </div>

                <div class="dip-s6-card full">
                    <div class="dip-s6-card-icon"><i class="fas fa-tags"></i></div>
                    <div class="dip-s6-card-text">
                        <h3>Transparent Pricing</h3>
                        <p>No hidden hook-up fees. No surprise "night rates" added at the scene. You know exactly what you will pay before we ever dispatch a vehicle to your location.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 7 — TESTIMONIALS
    =================================== --}}
    <section class="dip-s7-section">
        <div class="container">
            <div class="dip-s7-header">
                <span class="dip-hero-eyebrow" style="color: #d70006;"><i class="fas fa-quote-left"></i> Testimonials</span>
                <h2>What Fleet Operators and Drivers <span>Say About Us</span></h2>
            </div>

            <div class="dip-s7-grid">
                <div class="dip-s7-card">
                    <div class="dip-s7-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p>"Our delivery truck broke down inside DIP 2 at 3 AM. Toretto had someone there in 25 minutes with the right equipment. The rest of our fleet was operational before morning shift started. That's why we moved to a monthly contract with them."</p>
                    <div class="dip-s7-author">
                        <strong>— Operations Manager</strong>
                        <span>Logistics Company, DIP 2</span>
                    </div>
                </div>

                <div class="dip-s7-card">
                    <div class="dip-s7-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p>"Car wouldn't start in underground parking. I called three other companies — both said they couldn't access the basement. Toretto arrived with the right vehicle and had me out in under 40 minutes. First time I've seen a recovery company actually prepared for this specific problem."</p>
                    <div class="dip-s7-author">
                        <strong>— Warehouse Supervisor</strong>
                        <span>DIP 1</span>
                    </div>
                </div>

                <div class="dip-s7-card">
                    <div class="dip-s7-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p>"We run 30 fleet vehicles out of Dubai Investment Park. Before Toretto, breakdown days were expensive and chaotic — wrong trucks, long waits, one vehicle with minor contact damage. Now we have a fleet contract, a direct number, and a team that knows exactly where our sites are. Night or day."</p>
                    <div class="dip-s7-author">
                        <strong>— Fleet Manager</strong>
                        <span>Industrial Group, DIP / Dubai South</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 8 — AREAS COVERED
    =================================== --}}
    <section class="dip-s9-section">
        <div class="container">
            <div class="dip-s9-header text-center">
                <span class="dip-hero-eyebrow" style="color: #d70006;"><i class="fas fa-map-location-dot"></i> Areas Covered</span>
                <h2>Areas We Cover in and Around <span>DIP</span></h2>
                <p>Our primary recovery zone covers all of Dubai Investment Park — every road in DIP 1 and DIP 2, every warehouse cluster, every building with a basement parking level. We also cover the wider logistics corridor and Dubai at large:</p>
            </div>

            <div class="dip-s9-grid">
                <div class="dip-s9-card">
                    <div class="dip-s9-icon"><i class="fas fa-location-crosshairs"></i></div>
                    <h3>DIP &amp; Immediate Zone</h3>
                    <p>DIP 1 — All Zones, DIP 2 — Industrial &amp; Labor Camp Areas, Expo City Dubai, Expo Road Corridor, E311 — Sheikh Mohammed Bin Zayed Road, Dubai South, Jebel Ali, Al Maktoum International Airport Zone, JAFZA</p>
                </div>
                <div class="dip-s9-card">
                    <div class="dip-s9-icon"><i class="fas fa-city"></i></div>
                    <h3>Wider Dubai</h3>
                    <p>Al Quoz Industrial Area, Discovery Gardens, Jumeirah Village Circle (JVC), Jumeirah Village Triangle (JVT), Ibn Battuta Area, Dubai Marina, Motor City, Sports City, Jumeirah Park, Damac Hills</p>
                </div>
                <div class="dip-s9-card">
                    <div class="dip-s9-icon"><i class="fas fa-route"></i></div>
                    <h3>Long Distance</h3>
                    <p>Abu Dhabi, Sharjah, Al Ain — inter-emirate vehicle transport with full GPS tracking. Call to confirm availability and pricing for jobs outside our primary coverage zone.</p>
                </div>
            </div>

            {{-- Feature Image --}}
            <div class="dip-s9-feature-img">
                <img src="{{ asset('assets/images/flat-tyre-replacement-dubai.jpg') }}" alt="Flat tyre assistance in Dubai desert area near DIP" loading="lazy">
            </div>

            <div class="dip-s9-landmarks">
                <div class="dip-s9-landmarks-left">
                    <h3>Local Landmark Recovery Points</h3>
                    <p>We recover vehicles near these key DIP locations and intersections:</p>
                </div>
                <ul class="dip-s9-landmarks-list">
                    <li><i class="fas fa-map-pin"></i> Every numbered warehouse block in DIP 1 and DIP 2</li>
                    <li><i class="fas fa-map-pin"></i> DIP bus terminals and labor camp entry points</li>
                    <li><i class="fas fa-map-pin"></i> Loading docks along the main DIP spine road</li>
                    <li><i class="fas fa-map-pin"></i> DIP Pavilion area</li>
                    <li><i class="fas fa-map-pin"></i> Underground parking in DIP mixed-use towers</li>
                    <li><i class="fas fa-map-pin"></i> E311 access ramp from DIP</li>
                    <li><i class="fas fa-map-pin"></i> Expo Road southbound junction near DIP exit</li>
                    <li><i class="fas fa-map-pin"></i> Dubai South/Expo City approach roads near DIP boundary</li>
                </ul>
            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 9 — EMERGENCY CTA
    =================================== --}}
    <section class="dip-s10-cta">
        <div class="container">
            <div class="dip-s10-cta-box">
                <div class="dip-s10-cta-content">
                    <div class="dip-s10-alert">
                        <span class="dip-s10-pulse"></span>
                        <strong>EMERGENCY 24/7</strong>
                    </div>
                    <h2>If your vehicle is stuck right now, don't wait.</h2>
                    <p>Call or WhatsApp. A real person answers. A truck moves immediately.<br>24/7 Emergency Recovery — Day, Night, Weekend, Public Holiday.</p>
                    <div class="dip-s10-tags">
                        <span><i class="fas fa-map-marker-alt"></i> Based in DIP 2</span>
                        <span><i class="fab fa-whatsapp"></i> WhatsApp 24/7</span>
                    </div>
                </div>
                <div class="dip-s10-cta-btns">
                    <a href="tel:+971526917666" class="dip-s10-btn dip-s10-btn-primary">
                        <i class="fas fa-phone-alt"></i>
                        <div class="dip-btn-text">
                            <span class="dip-btn-title">Call Now</span>
                            <span class="dip-btn-sub">+971 56 324 0477</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 10 — FAQ
    =================================== --}}
    <section class="dip-faq-section">
        <div class="container">
            <div class="dip-section-header text-center">
                <span class="dip-eyebrow"><i class="fas fa-circle-question"></i> FAQ</span>
                <h2>Frequently Asked Questions — <span>Recovery in DIP</span></h2>
                <p>Everything you need to know about our recovery service in Dubai Investment Park.</p>
            </div>

            <div class="dip-faq-list">

                <div class="dip-faq-item active">
                    <button class="dip-faq-q" aria-expanded="true">
                        <span>How fast can Toretto Recovery reach me in DIP 1 or DIP 2?</span>
                        <div class="dip-faq-icon"><i class="fas fa-minus"></i></div>
                    </button>
                    <div class="dip-faq-answer">
                        <p>Typically 20 to 30 minutes, depending on your exact location and current traffic. Because our team knows the internal road network — every warehouse cluster, every numbered block — we don't lose time with wrong turns. That local knowledge is what gives us a genuine response-time advantage.</p>
                    </div>
                </div>

                <div class="dip-faq-item">
                    <button class="dip-faq-q" aria-expanded="false">
                        <span>Do you offer 24/7 car recovery in Dubai Investment Park?</span>
                        <div class="dip-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="dip-faq-answer">
                        <p>Yes. Our recovery team operates every hour of every day. No skeleton night crew, no single on-call driver after midnight. DIP runs logistics operations around the clock, and our service does too.</p>
                    </div>
                </div>

                <div class="dip-faq-item">
                    <button class="dip-faq-q" aria-expanded="false">
                        <span>Can you recover a car from underground or basement parking in DIP?</span>
                        <div class="dip-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="dip-faq-answer">
                        <p>Yes — and it's one of our most common requests. We carry low-clearance specialist recovery vehicles for exactly this. Standard tow trucks can't access underground parking with 1.8m–2.0m clearance. Ours can. Call us and describe the basement layout — we'll confirm equipment before dispatch.</p>
                    </div>
                </div>

                <div class="dip-faq-item">
                    <button class="dip-faq-q" aria-expanded="false">
                        <span>Do you handle heavy truck, lorry, and fleet vehicle recovery?</span>
                        <div class="dip-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="dip-faq-answer">
                        <p>Heavy vehicle towing is a core part of our operation, not an occasional add-on. We recover lorries, trailers, commercial vans, staff buses, and fleet vehicles with purpose-built heavy-duty rigs. Monthly fleet contracts with priority dispatch are available for logistics operators in DIP.</p>
                    </div>
                </div>

                <div class="dip-faq-item">
                    <button class="dip-faq-q" aria-expanded="false">
                        <span>Can you safely tow a Ferrari, Lamborghini, or other luxury sports car?</span>
                        <div class="dip-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="dip-faq-answer">
                        <p>Yes. We use flatbed trucks and soft straps only for luxury and low-clearance vehicles. No wheel-lift, no dragging underneath. Your car is loaded, transported, and delivered without contact damage. That's standard procedure for us on every high-value vehicle.</p>
                    </div>
                </div>

                <div class="dip-faq-item">
                    <button class="dip-faq-q" aria-expanded="false">
                        <span>What does car recovery cost in Dubai Investment Park?</span>
                        <div class="dip-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="dip-faq-answer">
                        <p>Light vehicle towing within DIP starts from approximately AED 150–250. Heavy vehicle recovery, basement pull-out, and long-distance transport are priced by job. We always confirm the price before we dispatch — no surprises on the invoice.</p>
                    </div>
                </div>

                <div class="dip-faq-item">
                    <button class="dip-faq-q" aria-expanded="false">
                        <span>What should I do if my car breaks down in Dubai Investment Park?</span>
                        <div class="dip-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="dip-faq-answer">
                        <p>Move to a safe position if possible. Turn on hazard lights. Stay with the vehicle. Call or WhatsApp Toretto Recovery on +971 56 324 0477. Drop your Google Maps pin or tell us your warehouse number or nearest road name. We dispatch immediately.</p>
                    </div>
                </div>

                <div class="dip-faq-item">
                    <button class="dip-faq-q" aria-expanded="false">
                        <span>Who provides vehicle recovery near Expo Road and E311 in DIP?</span>
                        <div class="dip-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="dip-faq-answer">
                        <p>Toretto Recovery covers the E311 corridor, all Expo Road junctions near DIP, and Dubai South approach roads. These are high-accident zones and part of our regular patrol and response area.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- FAQ JS --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.dip-faq-list .dip-faq-item');

            faqItems.forEach(function(item) {
                const btn = item.querySelector('.dip-faq-q');
                btn.addEventListener('click', function() {
                    const isActive = item.classList.contains('active');

                    faqItems.forEach(function(el) {
                        el.classList.remove('active');
                        el.querySelector('.dip-faq-q').setAttribute('aria-expanded', 'false');
                        el.querySelector('.dip-faq-icon i').className = 'fas fa-plus';
                    });

                    if (!isActive) {
                        item.classList.add('active');
                        btn.setAttribute('aria-expanded', 'true');
                        item.querySelector('.dip-faq-icon i').className = 'fas fa-minus';
                    }
                });
            });
        });
    </script>

    {{-- Slider JS --}}
    <script>
        (function() {
            const section = document.getElementById("dipSection");
            const scroller = document.getElementById("dipScroll");
            if (!section || !scroller) return;

            const slides = Array.from(scroller.querySelectorAll(".dip-slide"));
            const total = slides.length;
            let currentIndex = 0;
            let autoTimer;

            const bgMap = {
                1: section.dataset.bg1,
                2: section.dataset.bg2,
                3: section.dataset.bg3,
                4: section.dataset.bg4,
            };

            function setBg(idx) {
                const url = bgMap[idx];
                if (!url) return;
                section.style.setProperty("--dip-bg", `url('${url}')`);
            }

            function goToSlide(index) {
                const slideWidth = slides[0].getBoundingClientRect().width + 18;
                scroller.scrollTo({ left: index * slideWidth, behavior: "smooth" });
                const bgIndex = slides[index].getAttribute("data-bg");
                setBg(bgIndex);
                currentIndex = index;
            }

            function nextSlide() {
                currentIndex++;
                if (currentIndex >= total) currentIndex = 0;
                goToSlide(currentIndex);
            }

            function startAuto() { autoTimer = setInterval(nextSlide, 2000); }
            function resetAuto() { clearInterval(autoTimer); startAuto(); }

            const io = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        currentIndex = slides.indexOf(entry.target);
                        const idx = entry.target.getAttribute("data-bg");
                        setBg(idx);
                    }
                });
            }, { root: scroller, threshold: 0.6 });

            slides.forEach(slide => io.observe(slide));

            scroller.addEventListener("wheel", (e) => {
                if (Math.abs(e.deltaY) <= Math.abs(e.deltaX)) return;
                e.preventDefault();
                if (e.deltaY > 0) nextSlide();
                else {
                    currentIndex--;
                    if (currentIndex < 0) currentIndex = total - 1;
                    goToSlide(currentIndex);
                }
                resetAuto();
            }, { passive: false });

            scroller.addEventListener("scroll", resetAuto);
            setBg(1);
            startAuto();
        })();
    </script>
@endsection
