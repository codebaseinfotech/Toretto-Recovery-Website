@extends('layouts.main')

@section('title', 'Toretto Recovery Mirdif – 24/7 Vehicle & Accidental Car Recovery Dubai')

@section('meta_description')
    Toretto Recovery Mirdif provides fast, reliable vehicle recovery, flatbed towing, breakdown assistance, and accidental car recovery across Mirdif, Dubai. 24/7 roadside support, GPS-tracked dispatch, EV & hybrid vehicle specialists, basement & off-road recovery. Call now for immediate assistance!
@endsection

@section('meta_keywords', 'Vehicle Recovery Mirdif, Breakdown Recovery Mirdif, Accidental Car Recovery Mirdif, Flatbed Recovery Mirdif, Off-Road Vehicle Recovery, EV & Hybrid Vehicle Recovery')

@section('head')
    @verbatim
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "LocalBusiness",
          "name": "Toretto Recovery",
          "image": "https://torettorecovery.ae/logo.png",
          "@id": "https://torettorecovery.ae/mirdif",
          "url": "https://torettorecovery.ae/mirdif",
          "telephone": "+971 526917666",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Mirdif Road, Mirdif",
            "addressLocality": "Dubai",
            "addressRegion": "Dubai",
            "postalCode": "00000",
            "addressCountry": "AE"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": "25.2310",
            "longitude": "55.3720"
          },
          "priceRange": "AED",
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
          "sameAs": [
            "https://www.facebook.com/torettorecovery",
            "https://www.instagram.com/torettorecovery",
            "https://twitter.com/torettorecovery"
          ],
          "description": "Toretto Recovery Mirdif offers 24/7 vehicle recovery, flatbed towing, breakdown assistance, and accidental car recovery across Mirdif, Dubai. We provide GPS-tracked dispatch, EV & hybrid vehicle specialists, basement & off-road recovery services for safe and reliable transport.",
          "servesCuisine": "",
          "serviceType": [
            "Vehicle Recovery Mirdif",
            "Breakdown Recovery Mirdif",
            "Accidental Car Recovery Mirdif",
            "Flatbed Recovery Mirdif",
            "Off-Road Vehicle Recovery",
            "EV & Hybrid Vehicle Recovery"
          ]
        }
        </script>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How quickly can you reach a broken-down car in Mirdif?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Most requests are handled within 20–30 minutes, depending on traffic and location."
              }
            },
            {
              "@type": "Question",
              "name": "Do you recover vehicles from restricted or residential areas?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes — including basements, narrow lanes, private complexes, and malls."
              }
            },
            {
              "@type": "Question",
              "name": "Can you handle hybrid and electric vehicles?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely — our team is trained and equipped for EV and hybrid vehicle recovery."
              }
            },
            {
              "@type": "Question",
              "name": "Do you provide minor repairs at the roadside?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes — including tyre replacement, battery jump-start, fuel delivery, and minor mechanical fixes."
              }
            }
          ]
        }
        </script>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "BreadcrumbList",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.torettorecovery.ae" },
            { "@type": "ListItem", "position": 2, "name": "Areas We Serve", "item": "https://www.torettorecovery.ae/areas" },
            { "@type": "ListItem", "position": 3, "name": "Mirdif Vehicle Recovery", "item": "https://torettorecovery.ae/mirdif" }
          ]
        }
        </script>
    @endverbatim
@endsection

@section('content')

     {{-- BREADCRUMB --}}
    <section class="site-breadcrumb" style="background:url('{{ asset('assets/images/contact-bg.jpg') }}')">
        <div class="container">
            <h1 class="breadcrumb-title-areas">Mirdif</h1>
            <ul class="breadcrumb-menu">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                    <i class="fa fa-angle-double-right"></i>
                </li>
                <li>
                    <a href="{{ route('home') }}">Areas We Serve</a>
                    <i class="fa fa-angle-double-right"></i>
                </li>
                <li class="active">Mirdif</li>
            </ul>
        </div>
    </section>

    {{-- ===== ABOUT / INTRO SECTION ===== --}}
    <section class="mirdif-intro-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mirdif-intro-content wow animate__animated animate__fadeInRight" data-wow-delay=".25s">
                        <h1 class="mirdif-intro-h1">Mirdif Vehicle Recovery &amp; Roadside Assistance</h1>
                        <h2 class="mirdif-intro-h2">Trusted Flatbed Recovery | Accidental Car Recovery | 24/7 Emergency Support in Mirdif, Dubai</h2>
                        
                        <div class="mirdif-intro-highlight">
                            <h3>Stranded in Mirdif? Toretto Recovery Is Minutes Away</h3>
                            <p>Driving in Mirdif, Dubai, whether near Mirdif City Centre, along Al Nahda Road, or through Mirdif Hills and Terrace, should always be smooth. But unexpected breakdowns, flat tyres, dead batteries, or accidents can leave you stranded in the busiest areas or tight residential lanes.</p>
                            <p>At Toretto Recovery, we offer professional vehicle recovery, flatbed transport, accidental car recovery, roadside assistance, and minor on-site repairs, tailored specifically for the unique traffic and residential patterns of Mirdif. Our local expertise and strategically positioned teams ensure that help is fast, safe, and reliable, wherever you are.</p>
                        </div>
                        
                        <div class="mirdif-intro-actions">
                            <a href="{{ route('contact') }}" class="theme-btn mt-2">Book Now<i
                                class="fa-solid fa-arrow-right-long"></i></a>
                            <a href="tel:+971526917666" class="theme-btn mt-2"> Call Now<i
                                class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mirdif-intro-image-wrapper wow animate__animated animate__fadeInLeft">
                        <img src="{{ asset('assets/images/flatbed-tow-truck-loading-suv-on-tidy-mirdif-street-by-mirdif-city-centre-palmlined-sidewalks-villas.jpeg') }}" alt="Mirdif Vehicle Recovery Team" class="mirdif-intro-img">
                        <div class="mirdif-intro-badge">
                            <div class="badge-icon"><i class="bi bi-clock-history"></i></div>
                            <div class="badge-text">
                                <strong>Fast Arrival</strong>
                                <span>20&ndash;30 Mins in Mirdif</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== WHAT MAKES MIRDIF UNIQUE ===== --}}
    <section class="mirdif-unique-section">
        <div class="container">
            <div class="row align-items-center">
                {{-- Left: Image --}}
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="mirdif-unique-img wow animate__animated animate__fadeInLeft">
                        <img src="{{ asset('assets/images/tow-truck-recovery-of-suv-on-modern-urban-road-near-mirdif-city-centre-palm-trees-and-villas.jpeg') }}" alt="Why Drivers Choose Toretto Recovery in Mirdif">
                    </div>
                </div>
                {{-- Right: Content --}}
                <div class="col-lg-7">
                    <div class="mirdif-unique-content wow animate__animated animate__fadeInRight" data-wow-delay=".2s">
                        <span class="mirdif-section-tag">Trusted Experts</span>
                        <h2 class="mirdif-unique-title">Why Drivers in Mirdif <span>Trust Toretto Recovery</span></h2>
                        <p class="mirdif-unique-intro">We’ve built a reputation as the most reliable and trusted vehicle recovery partner in Mirdif. Here’s why locals and commuters call us first:</p>

                        <div class="mirdif-trust-grid">
                            <div class="mirdif-trust-item">
                                <div class="mirdif-trust-icon-box"><i class="bi bi-geo-alt-fill"></i></div>
                                <div>
                                    <h4>Fast Response & GPS Tracking</h4>
                                    <p>Mirdif-based units arrive within 20–30 minutes, guided by GPS.</p>
                                </div>
                            </div>
                            <div class="mirdif-trust-item">
                                <div class="mirdif-trust-icon-box"><i class="bi bi-tools"></i></div>
                                <div>
                                    <h4>Comprehensive Recovery</h4>
                                    <p>From minor roadside assistance to full accidental car recovery.</p>
                                </div>
                            </div>
                            <div class="mirdif-trust-item">
                                <div class="mirdif-trust-icon-box"><i class="bi bi-truck-front-fill"></i></div>
                                <div>
                                    <h4>Flatbed & Modern Trucks</h4>
                                    <p>Safe transport for all vehicles, including luxury and sports.</p>
                                </div>
                            </div>
                            <div class="mirdif-trust-item">
                                <div class="mirdif-trust-icon-box"><i class="bi bi-patch-check-fill"></i></div>
                                <div>
                                    <h4>Licensed Technicians</h4>
                                    <p>Certified professionals trained to handle every situation safely.</p>
                                </div>
                            </div>
                            <div class="mirdif-trust-item">
                                <div class="mirdif-trust-icon-box"><i class="bi bi-clock-history"></i></div>
                                <div>
                                    <h4>24/7 Availability</h4>
                                    <p>Day or night, we are always ready to deploy our experts.</p>
                                </div>
                            </div>
                            <div class="mirdif-trust-item">
                                <div class="mirdif-trust-icon-box"><i class="bi bi-gem"></i></div>
                                <div>
                                    <h4>Extra Value Services</h4>
                                    <p>Free safety inspections, insurance assist, and EV specialists.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== CORE SERVICES (TEXT FOCUS) ===== --}}
    <section class="mirdif-services-section">
        <div class="container">
            <div class="mirdif-services-header">
                <h2>Our Core Vehicle Recovery Services in Mirdif</h2>
                <p>We offer a diverse range of services to cater to any roadside breakdown, big or small, handled by trained professionals with purpose-built equipment.</p>
            </div>

            <div class="row">
                {{-- Service 1 --}}
                <div class="col-md-6 mb-4">
                    <div class="mirdif-svc-text-card">
                        <div class="svc-text-header">
                            <div class="svc-text-icon"><i class="bi bi-tools"></i></div>
                            <h3>1. Breakdown Recovery</h3>
                        </div>
                        <div class="svc-text-body">
                            <p class="svc-intro">Breakdowns happen without warning. Engine stalls, clutch problems, or electrical failures can leave you stuck.</p>
                            
                            <div class="svc-list-block">
                                <strong>Our solutions:</strong>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> On-site diagnostics and minor repairs</li>
                                    <li><i class="bi bi-check2-all"></i> Battery jump-starts or replacements</li>
                                    <li><i class="bi bi-check2-all"></i> Fuel delivery to get you moving immediately</li>
                                    <li><i class="bi bi-check2-all"></i> Safe towing to your preferred garage</li>
                                </ul>
                            </div>
                            
                            <div class="svc-highlight-box">
                                <strong><i class="bi bi-geo-alt-fill text-d70006"></i> Areas we frequently serve in Mirdif:</strong>
                                <ul class="simple-list">
                                    <li>Roundabouts near Mirdif City Centre</li>
                                    <li>Residential streets in Mirdif Hills &amp; Mirdif Terrace</li>
                                    <li>Entrances/exits to schools, offices, and malls</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 2 --}}
                <div class="col-md-6 mb-4">
                    <div class="mirdif-svc-text-card">
                        <div class="svc-text-header">
                            <div class="svc-text-icon"><i class="bi bi-truck-front-fill"></i></div>
                            <h3>2. Flatbed Recovery</h3>
                        </div>
                        <div class="svc-text-body">
                            <p class="svc-intro">Some vehicles cannot be safely towed using standard hooks. Our flatbed recovery ensures damage-free transport.</p>
                            
                            <div class="svc-list-block">
                                <strong>Our flatbed recovery ensures:</strong>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Zero wear on tyres or suspension</li>
                                    <li><i class="bi bi-check2-all"></i> Damage-free transport for luxury, hybrid, and EV</li>
                                    <li><i class="bi bi-check2-all"></i> Efficient handling in narrow or complex parking areas</li>
                                </ul>
                            </div>
                            
                            <div class="svc-highlight-box theme-light">
                                <strong><i class="bi bi-star-fill text-warning"></i> Ideal for:</strong>
                                <p class="mb-0 mt-1">luxury cars, sports vehicles, modified cars, and off-road vehicles.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 3 --}}
                <div class="col-md-6 mb-4">
                    <div class="mirdif-svc-text-card">
                        <div class="svc-text-header">
                            <div class="svc-text-icon"><i class="bi bi-shield-fill-exclamation"></i></div>
                            <h3>3. Accidental Car Recovery</h3>
                        </div>
                        <div class="svc-text-body">
                            <p class="svc-intro">Even minor accidents require careful handling to avoid further damage.</p>
                            
                            <div class="svc-list-block">
                                <strong>Our accidental recovery services include:</strong>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Safe extraction from roadblocks or collisions</li>
                                    <li><i class="bi bi-check2-all"></i> Damage-free transport to your service center</li>
                                    <li><i class="bi bi-check2-all"></i> Road clearance to reduce traffic disruption</li>
                                </ul>
                            </div>
                            
                            <div class="svc-highlight-box">
                                <strong><i class="bi bi-geo-alt-fill text-d70006"></i> Frequently covered Mirdif zones:</strong>
                                <ul class="simple-list">
                                    <li>Entrances/exits of Mirdif City Centre</li>
                                    <li>Roundabouts along Mirdif Street</li>
                                    <li>Residential areas including Green Community</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 4 --}}
                <div class="col-md-6 mb-4">
                    <div class="mirdif-svc-text-card">
                        <div class="svc-text-header">
                            <div class="svc-text-icon"><i class="bi bi-wrench-adjustable-circle"></i></div>
                            <h3>4. Roadside Assistance &amp; Minor Repairs</h3>
                        </div>
                        <div class="svc-text-body">
                            <p class="svc-intro">Not every problem needs a full tow. We provide safe, on-the-spot solutions.</p>
                            
                            <div class="svc-list-block">
                                <strong>We provide:</strong>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Tyre changes and puncture repairs</li>
                                    <li><i class="bi bi-check2-all"></i> Battery jump-starts and replacements</li>
                                    <li><i class="bi bi-check2-all"></i> Fuel top-up services</li>
                                    <li><i class="bi bi-check2-all"></i> Key lockout assistance</li>
                                    <li><i class="bi bi-check2-all"></i> Coolant top-ups and simple mechanical checks</li>
                                </ul>
                            </div>
                            
                            <div class="svc-highlight-box theme-light mt-auto">
                                <strong><i class="bi bi-info-circle-fill text-primary"></i> Perfect for:</strong>
                                <p class="mb-0 mt-1">Safe, on-the-spot solutions to get you back on the road quickly.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 5 --}}
                <div class="col-lg-12 mb-4">
                    <div class="mirdif-svc-text-card premium-card">
                        <div class="svc-text-header">
                            <div class="svc-text-icon"><i class="bi bi-gem"></i></div>
                            <h3>5. Specialized &amp; Value-Added Services</h3>
                        </div>
                        <div class="svc-text-body">
                            <p class="svc-intro text-center">Toretto Recovery goes beyond standard recovery. These specialized services differentiate us from other providers, making Toretto Recovery the most reliable choice for Mirdif drivers.</p>
                            
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="svc-list-block">
                                        <ul>
                                            <li><i class="bi bi-check2-all"></i> <strong>Basement &amp; Restricted Area Pull-Outs</strong> <br><span>Extract vehicles from underground parking or tight lanes.</span></li>
                                            <li><i class="bi bi-check2-all"></i> <strong>Desert &amp; Off-Road Recovery</strong> <br><span>For SUVs and 4x4 vehicles stuck in sand or off-road conditions.</span></li>
                                            <li><i class="bi bi-check2-all"></i> <strong>Hybrid &amp; EV Recovery Specialists</strong> <br><span>Safe handling of electric and hybrid vehicles.</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="svc-list-block">
                                        <ul>
                                            <li><i class="bi bi-check2-all"></i> <strong>Free On-Site Safety Inspection</strong> <br><span>Ensures your car is safe before transport.</span></li>
                                            <li><i class="bi bi-check2-all"></i> <strong>Insurance Documentation Support</strong> <br><span>Guidance and assistance for accident reports and paperwork.</span></li>
                                            <li><i class="bi bi-check2-all"></i> <strong>GPS-Tracked Fleet &amp; Fast Dispatch</strong> <br><span>Rapid arrival at any location in Mirdif or nearby roads.</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== REAL STORIES & MIRDIF BENEFITS ===== --}}
    <section class="mirdif-scenarios-section">
        <div class="container">
            <div class="mirdif-scenarios-header">
                <span class="mirdif-section-tag">Case Studies</span>
                <h2>Real-Life Recovery Examples – “We’ve Already Helped”</h2>
                <p>Below are genuine examples of recoveries we consistently conduct in and around Mirdif, illustrating not just what we do, but how we prioritize your safety.</p>
            </div>

            <div class="row justify-content-center">
                {{-- Scenario 1 --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="mirdif-scenario-card">
                        <div class="mirdif-scenario-img">
                            <img src="{{ asset('assets/images/minor-accident-recovery-in-mirdif-dubai-roundabout-damaged-sedan.jpeg') }}" alt="Engine Failure Mirdif City Centre">
                            <span class="mirdif-scenario-badge">Mirdif City Centre</span>
                        </div>
                        <div class="mirdif-scenario-body">
                            <h4>1. Engine Failure at Mirdif City Centre</h4>
                            <p>A family’s SUV stalled near the City Centre exit. Our team provided:</p>
                            <ul class="mirdif-simple-bullet-list">
                                <li>On-site diagnostics</li>
                                <li>Flatbed recovery to the nearest garage</li>
                                <li>Ensured safety throughout</li>
                            </ul>
                            <div class="mirdif-scenario-outcome mt-auto">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Vehicle transported safely; client highly satisfied.</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Scenario 2 --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="mirdif-scenario-card">
                        <div class="mirdif-scenario-img">
                            <img src="{{ asset('assets/images/accident-recovery-in-mirdif-dubai-roundabout-crushed-sedan-on-tow-bed.jpeg') }}" alt="Accidental Recovery Mirdif Hills">
                            <span class="mirdif-scenario-badge">Mirdif Hills</span>
                        </div>
                        <div class="mirdif-scenario-body">
                            <h4>2. Accidental Car Recovery at Mirdif Hills Roundabout</h4>
                            <p>A sedan involved in a minor collision blocked the roundabout. Within 20 minutes:</p>
                            <ul class="mirdif-simple-bullet-list">
                                <li>Accidental car recovery completed</li>
                                <li>Vehicle safely moved</li>
                                <li>Road cleared to avoid traffic congestion</li>
                            </ul>
                            <div class="mirdif-scenario-outcome mt-auto border-0 pt-0 align-items-start">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Scenario 3 --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="mirdif-scenario-card">
                        <div class="mirdif-scenario-img">
                            <img src="{{ asset('assets/images/minor-accident-recovery-in-mirdif-dubai-roundabout-damaged-sedan-loaded-onto-tow-truck.jpeg') }}" alt="Luxury Flatbed Recovery Green Community">
                            <span class="mirdif-scenario-badge">Green Community</span>
                        </div>
                        <div class="mirdif-scenario-body">
                            <h4>3. Luxury Car Flatbed Recovery in Green Community</h4>
                            <p>A high-end sports car experienced electrical failure. Traditional towing was unsafe.</p>
                            <ul class="mirdif-simple-bullet-list">
                                <li>Flatbed team arrived promptly</li>
                                <li>Vehicle secured without damage</li>
                                <li>Transported to client’s chosen service center</li>
                            </ul>
                            <div class="mirdif-scenario-outcome mt-auto border-0 pt-0 align-items-start">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-4">
                {{-- Why Often Needed --}}
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <h2 class="mirdif-extra-title">Why Vehicle Recovery is Often Needed <span>in Mirdif</span></h2>
                    
                    <ul class="mirdif-check-list mb-4 mt-4">
                        <li><i class="bi bi-cone-striped text-warning"></i> Busy roundabouts near malls and offices</li>
                        <li><i class="bi bi-cone-striped text-warning"></i> Narrow residential lanes in Mirdif Hills &amp; Terrace</li>
                        <li><i class="bi bi-cone-striped text-warning"></i> Short daily trips leading to minor mechanical issues</li>
                        <li><i class="bi bi-cone-striped text-warning"></i> High traffic during peak hours, increasing likelihood of minor accidents</li>
                    </ul>

                    <div class="p-3 rounded text-dark" style="background:#f8fafc; border-left:4px solid #d70006;">
                        <p class="mb-0" style="font-size:15px; font-weight:500;">Toretto Recovery positions teams strategically in Mirdif to reach you faster than competitors, offering peace of mind when every minute counts.</p>
                    </div>
                </div>

                {{-- Benefits of Choosing Us --}}
                <div class="col-lg-7">
                    <div class="mirdif-benefits-box">
                        <h2 class="mirdif-extra-title text-white mb-4">Benefits of Choosing Toretto Recovery in Mirdif</h2>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="benefit-item">
                                    <i class="bi bi-speedometer2"></i>
                                    <div>
                                        <strong>Rapid Local Response</strong>
                                        <span>Strategic Mirdif fleet ensures fastest help.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="benefit-item">
                                    <i class="bi bi-currency-dollar"></i>
                                    <div>
                                        <strong>Transparent Pricing</strong>
                                        <span>Know costs upfront; no hidden charges.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="benefit-item">
                                    <i class="bi bi-car-front-fill"></i>
                                    <div>
                                        <strong>All Vehicle Types Covered</strong>
                                        <span>Hatchbacks, sedans, SUVs, hybrids, EVs.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="benefit-item">
                                    <i class="bi bi-truck-front-fill"></i>
                                    <div>
                                        <strong>State-of-the-Art Equipment</strong>
                                        <span>Flatbeds, winches, hydraulic lifts.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="benefit-item">
                                    <i class="bi bi-clock-history"></i>
                                    <div>
                                        <strong>24/7 Availability</strong>
                                        <span>Anytime, day or night.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="benefit-item">
                                    <i class="bi bi-gem"></i>
                                    <div>
                                        <strong>Extra Value Services</strong>
                                        <span>Fuel delivery, basement pull-outs, off-road recovery.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    {{-- ===== FAQ SECTION ===== --}}
    <section class="mirdif-faq-section">
        <div class="container">
            <div class="mirdif-faq-header">
                <span class="mirdif-section-tag">Help Center</span>
                <h2>Frequently Asked Questions</h2>
            </div>

            <div class="mirdif-faq-wrap">
                <div class="mirdif-faq-item">
                    <button class="mirdif-faq-question">
                        How quickly can you reach a broken-down car in Mirdif?
                        <span class="mirdif-faq-toggle">+</span>
                    </button>
                    <div class="mirdif-faq-answer">
                        <p>Most requests are handled within 20–30 minutes, depending on traffic and location.</p>
                    </div>
                </div>

                <div class="mirdif-faq-item">
                    <button class="mirdif-faq-question">
                        Do you recover vehicles from restricted or residential areas?
                        <span class="mirdif-faq-toggle">+</span>
                    </button>
                    <div class="mirdif-faq-answer">
                        <p>Yes — including basements, narrow lanes, private complexes, and malls.</p>
                    </div>
                </div>

                <div class="mirdif-faq-item">
                    <button class="mirdif-faq-question">
                        Can you handle hybrid and electric vehicles?
                        <span class="mirdif-faq-toggle">+</span>
                    </button>
                    <div class="mirdif-faq-answer">
                        <p>Absolutely — our team is trained and equipped for EV and hybrid vehicle recovery.</p>
                    </div>
                </div>

                <div class="mirdif-faq-item">
                    <button class="mirdif-faq-question">
                        Do you provide minor repairs at the roadside?
                        <span class="mirdif-faq-toggle">+</span>
                    </button>
                    <div class="mirdif-faq-answer">
                        <p>Yes — including tyre replacement, battery jump-start, fuel delivery, and minor mechanical fixes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== FAQ TOGGLE SCRIPT ===== --}}
    <script>
        document.querySelectorAll(".mirdif-faq-question").forEach(function(btn) {
            btn.addEventListener("click", function() {
                var item = this.closest(".mirdif-faq-item");
                var isActive = item.classList.contains("active");

                document.querySelectorAll(".mirdif-faq-item").forEach(function(el) {
                    el.classList.remove("active");
                });

                if (!isActive) {
                    item.classList.add("active");
                }
            });
        });
    </script>

    <link rel="stylesheet" href="{{ asset('assets/css/mirdif.css') }}?v={{ filemtime(public_path('assets/css/mirdif.css')) }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection
