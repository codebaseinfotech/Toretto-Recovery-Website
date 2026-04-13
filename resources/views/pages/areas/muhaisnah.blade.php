@extends('layouts.main')

@section('title', '24/7 Car Recovery in Muhaisnah Dubai | Fast Towing & Roadside Assistance')

@section('meta_description')
    Need car recovery in Muhaisnah Dubai? Get 24/7 fast towing, battery jump-start, tire repair & roadside assistance. Reach in 30–45 minutes. Call now!
@endsection

@section('meta_keywords', 'Car Recovery Muhaisnah, Towing Service Muhaisnah, Roadside Assistance Muhaisnah Dubai, Emergency Fuel Delivery, Battery Jump Start Muhaisnah, Flat Tire Repair Muhaisnah')

@section('head')
    <link rel="stylesheet" href="{{ asset('assets/css/muhaisnah.css') }}">
    
    @verbatim
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LocalBusiness",
      "@id": "https://torettorecovery.ae/#business",
      "name": "Toretto Recovery",
      "image": "https://torettorecovery.ae/logo.png",
      "url": "https://torettorecovery.ae/",
      "telephone": "+971526917666",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Muhaisnah",
        "addressRegion": "Dubai",
        "addressCountry": "AE"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "25.276987",
        "longitude": "55.296249"
      },
      "areaServed": [
        { "@type": "Place", "name": "Muhaisnah 1" },
        { "@type": "Place", "name": "Muhaisnah 2" },
        { "@type": "Place", "name": "Muhaisnah 3" },
        { "@type": "Place", "name": "Muhaisnah 4" },
        { "@type": "Place", "name": "Al Khawaneej" },
        { "@type": "Place", "name": "Al Warqaa" },
        { "@type": "Place", "name": "Al Qusais" }
      ],
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      },
      "sameAs": [
        "https://www.facebook.com/torettorecovery",
        "https://www.instagram.com/torettorecovery"
      ]
    },
    {
      "@type": "Service",
      "@id": "https://torettorecovery.ae/#service",
      "serviceType": "Vehicle Recovery & Roadside Assistance",
      "provider": {
        "@id": "https://torettorecovery.ae/#business"
      },
      "areaServed": {
        "@type": "Place",
        "name": "Muhaisnah, Dubai"
      },
      "availableChannel": {
        "@type": "ServiceChannel",
        "serviceLocation": {
          "@type": "Place",
          "name": "Muhaisnah Dubai"
        },
        "availableLanguage": ["English", "Arabic"]
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Vehicle Recovery Services",
        "itemListElement": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Car Recovery & Towing" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Battery Jump Start & Replacement" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Flat Tire Repair & Replacement" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Emergency Fuel Delivery" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Car Lockout Assistance" } }
        ]
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://torettorecovery.ae/#faq",
      "mainEntity": [
         {
          "@type": "Question",
          "name": "How fast can Toretto Recovery reach Muhaisnah?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Toretto Recovery typically arrives within 30–45 minutes across Muhaisnah and nearby Dubai areas."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide 24/7 car recovery in Muhaisnah Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide 24/7 emergency vehicle recovery and roadside assistance services, including weekends and holidays."
          }
        },
        {
          "@type": "Question",
          "name": "What types of vehicles do you recover?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We recover cars, SUVs, vans, motorcycles, buses, heavy vehicles, and electric vehicles."
          }
        },
        {
          "@type": "Question",
          "name": "How much does car recovery cost in Muhaisnah?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Prices start from AED XXX, depending on service required, distance, and vehicle type."
          }
        },
        {
          "@type": "Question",
          "name": "Do you offer roadside assistance without towing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide battery jump-start, tire repair, fuel delivery, and minor mechanical repairs on-site without towing."
          }
        },
        {
          "@type": "Question",
          "name": "Can you recover vehicles from basements or tight parking spaces?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we specialize in basement and restricted area vehicle recovery using advanced equipment."
          }
        }
      ]
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
        { "@type": "ListItem", "position": 2, "name": "Areas We Serve", "item": "https://www.torettorecovery.ae/areas-we-serve" },
        { "@type": "ListItem", "position": 3, "name": "Muhaisnah Car Recovery", "item": "https://torettorecovery.ae/areas-we-serve/muhaisnah" }
      ]
    }
    </script>
    @endverbatim
@endsection

@section('content')

     {{-- BREADCRUMB --}}
    <section class="site-breadcrumb" style="background:url('{{ asset('assets/images/contact-bg.jpg') }}')">
        <div class="container">
            <h1 class="breadcrumb-title-areas">Muhaisnah</h1>
            <ul class="breadcrumb-menu">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                    <i class="fa fa-angle-double-right"></i>
                </li>
                <li>
                    <a href="#">Areas We Serve</a>
                    <i class="fa fa-angle-double-right"></i>
                </li>
                <li class="active">Muhaisnah</li>
            </ul>
        </div>
    </section>

    {{-- ===== ABOUT / INTRO SECTION ===== --}}
    <section class="muhaisnah-intro-section">
        <div class="container">
            <div class="row align-items-center">
                {{-- Left Side: Image (Moved to Left Side) --}}
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="muhaisnah-intro-image-wrapper wow animate__animated animate__fadeInLeft">
                        <img src="{{ asset('assets/images/car-recovery-scene-in-muhaisnah-dubai-flatbed-tow-truck.jpeg') }}" alt="Fast Towing & Roadside Assistance Muhaisnah" class="muhaisnah-intro-img">
                        <div class="muhaisnah-intro-badge">
                            <div class="badge-icon"><i class="bi bi-shield-check"></i></div>
                            <div class="badge-text">
                                <strong>Fast Response</strong>
                                <span>30-45 Mins Average Arrival</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right Side: Content --}}
                <div class="col-lg-6">
                    <div class="muhaisnah-intro-content wow animate__animated animate__fadeInRight" data-wow-delay=".25s">
                        <h1 class="muhaisnah-intro-h1">24/7 Car Recovery in Muhaisnah Dubai</h1>
                        <h2 class="muhaisnah-intro-h2">Fast Towing & Roadside Assistance</h2>
                        
                        <div class="muhaisnah-intro-highlight">
                            <p>When your vehicle breaks down unexpectedly, every second matters. Whether you're stuck on a busy road in Muhaisnah or stranded in a parking basement, you need <strong>fast, reliable, and professional car recovery in Muhaisnah Dubai—</strong> and that’s exactly what Toretto Recovery delivers.</p>
                            <p>With over <strong>7+ years of experience</strong>, advanced recovery equipment, and a highly trained team, we provide <strong>24/7 emergency towing, roadside assistance, and vehicle recovery services</strong> across Muhaisnah and nearby Dubai areas.</strong></p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Average arrival time: 30–45 minutes</li>
                                <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Available 24/7 – Even on weekends & holidays</li>
                                <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Serving all vehicle types – cars, SUVs, vans, buses & heavy vehicles</li>
                            </ul>
                        </div>
                        
                        <div class="muhaisnah-intro-actions mt-4">
                            <a href="{{ route('contact') }}" class="theme-btn mt-2">Book Now<i
                                class="fa-solid fa-arrow-right-long"></i></a>
                            <a href="tel:+971526917666" class="theme-btn mt-2"> Call Now<i
                                class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== STRANDED IN MUHAISNAH FOCUS SECTION ===== --}}
    <section class="muhaisnah-safety-section">
        <div class="container">
            <div class="muhaisnah-safety-box wow animate__animated animate__pulse">
                <h3>Stranded in Muhaisnah? Get Help in Minutes</h3>
                <p>Breakdowns can happen anytime. That’s why our Muhaisnah recovery team is always on standby, ready to reach your location quickly and safely:</p>
                <div class="muhaisnah-safety-pills mt-2 mb-4">
                    <span class="muhaisnah-safety-pill"><i class="fas fa-road"></i> On your way to work</span>
                    <span class="muhaisnah-safety-pill"><i class="fas fa-moon"></i> Late at night</span>
                    <span class="muhaisnah-safety-pill"><i class="fas fa-sun"></i> In extreme heat</span>
                    <span class="muhaisnah-safety-pill"><i class="fas fa-traffic-light"></i> In traffic or remote areas</span>
                </div>
                <div class="mt-4">
                    <a href="tel:+971526917666" class="theme-btn ja-cta-btn-primary">
                        <i class="fas fa-phone-alt text-white"></i> <span class="text-white">Call Now for Immediate Assistance – Fast Response Guaranteed</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== CORE SERVICES (TEXT FOCUS) ===== --}}
    <section class="muhaisnah-services-section">
        <div class="container">
            <div class="muhaisnah-services-header">
                <h2>Our 24/7 Vehicle Recovery & Roadside Assistance Services</h2>
                <p>We offer complete roadside solutions designed to get you moving again without stress.</p>
            </div>

            <div class="row">
                {{-- Service 1 --}}
                <div class="col-md-6 mb-4">
                    <div class="muhaisnah-svc-text-card h-100 overflow-hidden d-flex flex-column p-0">
                        <img src="{{ asset('assets/images/flatbed-tow-truck-loading-a-luxury-car-in-muhaisnah.jpeg') }}" class="img-fluid w-100" style="object-fit:cover; height: 220px;" alt="Emergency Towing Muhaisnah">
                        <div class="p-4 flex-grow-1">
                            <div class="svc-text-header">
                                <div class="svc-text-icon"><i class="fas fa-truck-loading"></i></div>
                                <h3>1. Emergency Towing & Car Recovery</h3>
                            </div>
                            <div class="svc-text-body">
                                <p class="svc-intro">If your vehicle cannot be fixed on the spot, we provide safe and secure towing services.</p>
                                <div class="svc-list-block">
                                    <ul>
                                        <li><i class="bi bi-check2-all"></i> Flatbed towing for maximum vehicle safety</li>
                                        <li><i class="bi bi-check2-all"></i> Accident recovery & damaged vehicle transport</li>
                                        <li><i class="bi bi-check2-all"></i> Breakdown towing to garage or home</li>
                                        <li><i class="bi bi-check2-all"></i> Recovery from highways, streets & parking areas</li>
                                    </ul>
                                </div>
                                <div class="svc-highlight-box theme-light mt-3">
                                    <strong>Ideal for:</strong> Engine failure, Accident vehicles, Non-starting cars
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 2 --}}
                <div class="col-md-6 mb-4">
                    <div class="muhaisnah-svc-text-card h-100">
                        <div class="svc-text-header">
                            <div class="svc-text-icon"><i class="fas fa-battery-full"></i></div>
                            <h3>2. Battery Jump Start & Replacement</h3>
                        </div>
                        <div class="svc-text-body">
                            <p class="svc-intro">Dead battery? No problem. Avoid long waits—get your car running in minutes.</p>
                            <div class="svc-list-block">
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Instant jump-start service</li>
                                    <li><i class="bi bi-check2-all"></i> On-site battery replacement</li>
                                    <li><i class="bi bi-check2-all"></i> Support for hybrid & electric vehicles</li>
                                    <li><i class="bi bi-check2-all"></i> Fast diagnosis to avoid repeat issues</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Service 3 --}}
                <div class="col-md-6 mb-4">
                    <div class="muhaisnah-svc-text-card h-100 overflow-hidden d-flex flex-column p-0">
                        <img src="{{ asset('assets/images/technician changing flat tire on sedan-dubai-muhaisnah.jpg') }}" class="img-fluid w-100" style="object-fit:cover; height: 220px;" alt="Flat Tire Repair Muhaisnah">
                        <div class="p-4 flex-grow-1">
                            <div class="svc-text-header">
                                <div class="svc-text-icon"><i class="fas fa-car-crash"></i></div>
                                <h3>3. Flat Tire Repair & Replacement</h3>
                            </div>
                            <div class="svc-text-body">
                                <p class="svc-intro">A puncture or blown tire can stop your journey instantly. We come to you—no need to tow your car unnecessarily.</p>
                                <div class="svc-list-block">
                                    <ul>
                                        <li><i class="bi bi-check2-all"></i> On-site tire change</li>
                                        <li><i class="bi bi-check2-all"></i> Puncture repair service</li>
                                        <li><i class="bi bi-check2-all"></i> Wheel replacement assistance</li>
                                        <li><i class="bi bi-check2-all"></i> Emergency roadside tire support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 4 --}}
                <div class="col-md-6 mb-4">
                    <div class="muhaisnah-svc-text-card h-100">
                        <div class="svc-text-header">
                            <div class="svc-text-icon"><i class="fas fa-gas-pump"></i></div>
                            <h3>4. Emergency Fuel Delivery</h3>
                        </div>
                        <div class="svc-text-body">
                            <p class="svc-intro">Ran out of fuel in Muhaisnah? Stay safe—we’ll bring fuel to your location.</p>
                            <div class="svc-list-block">
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Quick petrol or diesel delivery</li>
                                    <li><i class="bi bi-check2-all"></i> Enough fuel to reach nearest station</li>
                                    <li><i class="bi bi-check2-all"></i> Available anywhere in Muhaisnah</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 5 --}}
                <div class="col-md-6 mb-4">
                    <div class="muhaisnah-svc-text-card h-100">
                        <div class="svc-text-header">
                            <div class="svc-text-icon"><i class="fas fa-key"></i></div>
                            <h3>5. Car Lockout & Key Assistance</h3>
                        </div>
                        <div class="svc-text-body">
                            <p class="svc-intro">Locked your keys inside? Get back into your car without hassle.</p>
                            <div class="svc-list-block">
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Quick car unlocking service</li>
                                    <li><i class="bi bi-check2-all"></i> Damage-free access</li>
                                    <li><i class="bi bi-check2-all"></i> Key assistance & minor repairs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 6 --}}
                <div class="col-md-6 mb-4">
                    <div class="muhaisnah-svc-text-card h-100">
                        <div class="svc-text-header">
                            <div class="svc-text-icon"><i class="fas fa-wrench"></i></div>
                            <h3>6. Minor Mechanical Repairs On-Site</h3>
                        </div>
                        <div class="svc-text-body">
                            <p class="svc-intro">Not every issue needs towing. Save time and money with instant repairs.</p>
                            <div class="svc-list-block">
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Small mechanical fixes</li>
                                    <li><i class="bi bi-check2-all"></i> Quick troubleshooting</li>
                                    <li><i class="bi bi-check2-all"></i> Cost-saving solutions</li>
                                    <li><i class="bi bi-check2-all"></i> Immediate roadside support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 7 Premium Card --}}
                <div class="col-lg-12 mb-4">
                    <div class="muhaisnah-svc-text-card premium-card h-100 p-0 overflow-hidden">
                        <div class="row g-0 h-100">
                            <!-- Image Section -->
                            <div class="col-md-5 d-none d-md-block h-100">
                                <img src="{{ asset('assets/images/stuck car at the desert.jpg') }}" class="img-fluid w-100 h-100" style="object-fit:cover; min-height: 450px;" alt="Vehicle stuck in sand recovery Muhaisnah">
                            </div>
                            <!-- Mobile Image -->
                            <div class="col-12 d-block d-md-none">
                                <img src="{{ asset('assets/images/stuck car at the desert.jpg') }}" class="img-fluid w-100" style="object-fit:cover; height: 250px;" alt="Vehicle stuck in sand recovery Muhaisnah">
                            </div>

                            <!-- Content Section -->
                            <div class="col-md-7 d-flex flex-column justify-content-center p-4 p-lg-5">
                                <div class="svc-text-header mb-3">
                                    <div class="svc-text-icon"><i class="fas fa-truck-monster"></i></div>
                                    <h3>7. Specialized Vehicle Recovery Solutions</h3>
                                </div>
                                <div class="svc-text-body">
                                    <p class="svc-intro">We handle complex recovery situations. No matter where your vehicle is stuck—we can recover it.</p>
                                    
                                    <div class="row mt-4">
                                        <div class="col-sm-6">
                                            <div class="svc-list-block">
                                                <ul>
                                                    <li><i class="bi bi-check2-all"></i> <strong>Hard Access Towing</strong> <br><span>Off-road recovery (sand, desert, gravel) and Basement & tight parking recovery.</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="svc-list-block">
                                                <ul>
                                                    <li><i class="bi bi-check2-all"></i> <strong>Heavy Duty Support</strong> <br><span>Heavy-duty recovery (buses, trucks) and accident scene recovery.</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Vehicles We Recover Highlight -->
                                    <div class="svc-highlight-box theme-light mt-4">
                                        <strong><i class="fas fa-car text-danger"></i> Vehicles We Recover:</strong>
                                        <p class="mb-0 mt-1">Equipped with the right tools for every vehicle type: Cars & sedans, SUVs & 4x4 vehicles, Vans & commercial vehicles, Luxury & sports cars, Motorcycles, Electric vehicles (EVs), Buses & heavy trucks.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== WHY CHOOSE US SECTION (POINT-WISE) ===== --}}
    <section class="muhaisnah-why-section">
        <div class="container">
            <div class="muhaisnah-why-header wow animate__animated animate__fadeInUp">
                <h2>Why Choose us in <span>Muhaisnah</span></h2>
                <p>We’re not just another towing company—we’re your trusted roadside partner.</p>
            </div>
            <div class="row justify-content-center">
                {{-- Item 1 --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="muhaisnah-why-card no-image h-100 align-items-start wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <div class="w-100">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="muhaisnah-why-icon m-0"><i class="fas fa-medal"></i></div>
                                <h4 class="m-0" style="font-size: 17px; font-weight: 700; color: #111827;">Proven Experience & Reliability</h4>
                            </div>
                            <ul class="text-muted mb-0 ps-3" style="font-size: 14.5px; line-height: 1.6;">
                                <li class="mb-1">7+ years in Dubai vehicle recovery industry</li>
                                <li class="mb-1">Thousands of successful recovery cases</li>
                                <li class="mb-0">Trusted by daily commuters and businesses</li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Item 2 --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="muhaisnah-why-card no-image h-100 align-items-start wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <div class="w-100">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="muhaisnah-why-icon m-0"><i class="fas fa-stopwatch"></i></div>
                                <h4 class="m-0" style="font-size: 17px; font-weight: 700; color: #111827;">Fast Response Time</h4>
                            </div>
                            <ul class="text-muted mb-0 ps-3" style="font-size: 14.5px; line-height: 1.6;">
                                <li class="mb-1">Arrival within 30–45 minutes</li>
                                <li class="mb-1">Local teams in Muhaisnah</li>
                                <li class="mb-0">Quick dispatch system</li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Item 3 --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="muhaisnah-why-card no-image h-100 align-items-start wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <div class="w-100">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="muhaisnah-why-icon m-0"><i class="fas fa-clock"></i></div>
                                <h4 class="m-0" style="font-size: 17px; font-weight: 700; color: #111827;">24/7 Emergency Availability</h4>
                            </div>
                            <ul class="text-muted mb-0 ps-3" style="font-size: 14.5px; line-height: 1.6;">
                                <li class="mb-1">Day or night service</li>
                                <li class="mb-1">Weekends & holidays covered</li>
                                <li class="mb-0">Immediate response guaranteed</li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Item 4 --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="muhaisnah-why-card no-image h-100 align-items-start wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                        <div class="w-100">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="muhaisnah-why-icon m-0"><i class="fas fa-file-contract"></i></div>
                                <h4 class="m-0" style="font-size: 17px; font-weight: 700; color: #111827;">Fully Licensed & Insured</h4>
                            </div>
                            <ul class="text-muted mb-0 ps-3" style="font-size: 14.5px; line-height: 1.6;">
                                <li class="mb-1">Professional and certified operators</li>
                                <li class="mb-1">Safe handling of all vehicles</li>
                                <li class="mb-0">Compliance with Dubai regulations</li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Item 5 --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="muhaisnah-why-card no-image h-100 align-items-start wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                        <div class="w-100">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="muhaisnah-why-icon m-0"><i class="fas fa-truck-moving"></i></div>
                                <h4 class="m-0" style="font-size: 17px; font-weight: 700; color: #111827;">Advanced Equipment</h4>
                            </div>
                            <ul class="text-muted mb-0 ps-3" style="font-size: 14.5px; line-height: 1.6;">
                                <li class="mb-1">Flatbed trucks</li>
                                <li class="mb-1">Winches & lifting tools</li>
                                <li class="mb-0">Heavy-duty recovery vehicles</li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Item 6 --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="muhaisnah-why-card no-image h-100 align-items-start wow animate__animated animate__fadeInUp" data-wow-delay=".6s">
                        <div class="w-100">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="muhaisnah-why-icon m-0"><i class="fas fa-shield-alt"></i></div>
                                <h4 class="m-0" style="font-size: 17px; font-weight: 700; color: #111827;">100% Safety Focus</h4>
                            </div>
                            <ul class="text-muted mb-0 ps-3" style="font-size: 14.5px; line-height: 1.6;">
                                <li class="mb-1">Damage-free towing</li>
                                <li class="mb-1">Secure vehicle handling</li>
                                <li class="mb-0">Customer safety priority</li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Item 7 --}}
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="muhaisnah-why-card no-image h-100 align-items-start wow animate__animated animate__fadeInUp" data-wow-delay=".7s">
                        <div class="w-100">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="muhaisnah-why-icon m-0"><i class="fas fa-headset"></i></div>
                                <h4 class="m-0" style="font-size: 17px; font-weight: 700; color: #111827;">Live Support & Updates</h4>
                            </div>
                            <ul class="text-muted mb-0 ps-3" style="font-size: 14.5px; line-height: 1.6;">
                                <li class="mb-1">Track your recovery status</li>
                                <li class="mb-1">Stay informed throughout</li>
                                <li class="mb-0">Transparent communication</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ===== COMPREHENSIVE AREA COVERAGE SECTION (TEXT FOCUS) ===== --}}
    <section class="muhaisnah-scenarios-section py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <span class="muhaisnah-section-tag">Extensive Reach</span>
                    <h2 class="muhaisnah-unique-title mb-3">Areas We Cover in <span>Muhaisnah</span> & Nearby</h2>
                    <p class="muhaisnah-unique-intro mx-auto" style="max-width: 850px;">Our Toretto Recovery units in Muhaisnah are strategically positioned to ensure fast 24/7 response to every vehicle emergency. Whether it’s a breakdown, flat tire, battery issue, or accident, our team is always nearby. We cover:</p>
                </div>
            </div>

            <div class="row justify-content-center">
                {{-- Area 1 --}}
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <div class="bg-white p-4 border rounded shadow-sm h-100 position-relative overflow-hidden d-flex flex-column transition-hover">
                        <div class="position-absolute top-0 start-0 w-100 bg-danger" style="height: 4px;"></div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="text-danger flex-shrink-0 me-3"><i class="fas fa-home fs-2"></i></div>
                            <h4 class="h5 mb-0 fw-bold text-dark">Muhaisnah Neighborhoods</h4>
                        </div>
                        <ul class="text-muted mb-0 ps-3" style="font-size: 0.95rem; line-height: 1.6;">
                            <li class="mb-3"><strong>Muhaisnah 1, 2, 3, 4</strong> – Residential streets, community areas, and parking lots.</li>
                            <li class="mb-3"><strong>Muhaisnah Industrial Area</strong> – For vans, commercial vehicles, and trucks operating in warehouses.</li>
                            <li><strong>Muhaisnah Market Area & Local Shops</strong> – Quick assistance for vehicles stuck near shopping and market zones.</li>
                        </ul>
                    </div>
                </div>

                {{-- Area 2 --}}
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <div class="bg-white p-4 border rounded shadow-sm h-100 position-relative overflow-hidden d-flex flex-column transition-hover">
                        <div class="position-absolute top-0 start-0 w-100 bg-danger" style="height: 4px;"></div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="text-danger flex-shrink-0 me-3"><i class="fas fa-road fs-2"></i></div>
                            <h4 class="h5 mb-0 fw-bold text-dark">Major Roads & Highways</h4>
                        </div>
                        <ul class="text-muted mb-0 ps-3" style="font-size: 0.95rem; line-height: 1.6;">
                            <li class="mb-3"><strong>Airport Free Zone Road (D89)</strong> – Quick response along this busy industrial and commercial artery.</li>
                            <li class="mb-3"><strong>Al Khawaneej Road (D89 Extension)</strong> – Covers residential and light industrial areas along this route.</li>
                            <li class="mb-3"><strong>Sheikh Mohammed Bin Zayed Road (E311)</strong> – Access to vehicles stranded on nearby highway stretches.</li>
                            <li><strong>Salah Al Din Street & Al Twar Road</strong> – Key streets connecting Muhaisnah to Deira, Al Qusais, and Al Warqaa.</li>
                        </ul>
                    </div>
                </div>

                {{-- Area 3 --}}
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <div class="bg-white p-4 border rounded shadow-sm h-100 position-relative overflow-hidden d-flex flex-column transition-hover">
                        <div class="position-absolute top-0 start-0 w-100 bg-danger" style="height: 4px;"></div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="text-danger flex-shrink-0 me-3"><i class="fas fa-map-marked fs-2"></i></div>
                            <h4 class="h5 mb-0 fw-bold text-dark">Nearby Communities & Landmarks</h4>
                        </div>
                        <ul class="text-muted mb-0 ps-3" style="font-size: 0.95rem; line-height: 1.6;">
                            <li class="mb-2"><strong>Al Warqaa 1–3</strong> – Fast service in residential and main streets.</li>
                            <li class="mb-2"><strong>Al Qusais Industrial Area & Street 12/18</strong> – Specialized assistance for heavy-duty recovery.</li>
                            <li class="mb-2"><strong>Al Twar, Al Mizhar & Nad Al Hammar</strong> – Roadside and off-road recovery for cars and commercial vehicles.</li>
                            <li class="mb-2"><strong>Dubai Silicon Oasis & Academic City Access Roads</strong> – For vehicles near educational and tech hubs.</li>
                            <li><strong>Local Petrol Stations, Supermarkets & Shopping Centers</strong> – Recovery services available at commonly frequented spots.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <style>
            .transition-hover:hover {
                transform: translateY(-5px);
                box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
                border-color: rgba(215, 0, 6, 0.2) !important;
                transition: all 0.3s ease;
            }
            .transition-hover {
                transition: all 0.3s ease;
            }
        </style>
    </section>  
    
    {{-- ===== PRICING SECTION ===== --}}
    <section class="muhaisnah-pricing-section py-5" style="background-color: #f8f9fb;">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0 wow animate__animated animate__fadeInLeft">
                    <span class="muhaisnah-section-tag">Pricing</span>
                    <h2 class="mb-3" style="font-size: 36px; font-weight: 800; color: #0f172a;">Affordable & Transparent Pricing</h2>
                    <p class="text-muted mb-4" style="font-size: 17px; line-height: 1.7;">We believe in honest and clear pricing—no hidden charges. 💵</p>
                    
                    <div class="bg-white p-4 rounded shadow-sm border mb-4" style="border-left: 4px solid #d70006 !important;">
                        <h4 class="h5 fw-bold mb-3 border-bottom pb-2">Estimated Pricing:</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex justify-content-between mb-3">
                                <span class="text-secondary"><i class="fas fa-truck-pickup text-danger me-2"></i> Car recovery</span>
                                <span class="fw-bold text-dark">starts from AED ………</span>
                            </li>
                            <li class="d-flex justify-content-between mb-3">
                                <span class="text-secondary"><i class="fas fa-battery-full text-danger me-2"></i> Battery jump-start</span>
                                <span class="fw-bold text-dark">from AED ………</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span class="text-secondary"><i class="fas fa-wrench text-danger me-2"></i> Tire replacement</span>
                                <span class="fw-bold text-dark">from AED ………</span>
                            </li>
                        </ul>
                    </div>

                    <div class="row mb-5">
                        <div class="col-sm-5 mb-4 mb-sm-0">
                            <h5 class="fw-bold fs-6 mb-3 text-dark">Final cost depends on:</h5>
                            <ul class="list-unstyled text-muted" style="font-size: 15px;">
                                <li class="mb-2"><i class="fas fa-map-marker-alt text-danger me-2"></i> Distance</li>
                                <li class="mb-2"><i class="fas fa-car-side text-danger me-2"></i> Vehicle type</li>
                                <li><i class="fas fa-tools text-danger me-2"></i> Service required</li>
                            </ul>
                        </div>
                        <div class="col-sm-7 d-flex flex-column justify-content-center border-start ps-sm-4 border-sm-start-0 ps-0 mt-3 mt-sm-0" style="border-color: #dee2e6 !important;">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-success fs-5 me-3 shadow-sm rounded-circle"></i>
                                <span class="fw-bold text-dark" style="font-size: 15px;">Get a price estimate before dispatch</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-success fs-5 me-3 shadow-sm rounded-circle"></i>
                                <span class="fw-bold text-dark" style="font-size: 15px;">Competitive rates across Dubai</span>
                            </div>
                        </div>
                    </div>
                    
                    <a href="tel:+971526917666" class="theme-btn mb-1 d-inline-flex gap-2 align-items-center">
                        <i class="fas fa-calculator"></i> Get an Exact Quote Now
                    </a>
                </div>
                
                <div class="col-lg-6 wow animate__animated animate__fadeInRight pe-lg-0 ps-lg-5">
                    <div class="position-relative">
                        <div class="position-absolute top-0 end-0 bg-danger rounded-circle" style="width: 100px; height: 100px; opacity: 0.1; transform: translate(30%, -30%);"></div>
                        <div class="position-absolute bottom-0 start-0 bg-danger rounded" style="width: 120px; height: 120px; opacity: 0.1; transform: translate(-20%, 20%); z-index: 0;"></div>
                        <img src="{{ asset('assets/images/flatbed-tow-truck-loading-a-luxury-car-in-muhaisnah-dubai.jpeg') }}" class="img-fluid rounded shadow-lg position-relative w-100" style="object-fit:cover; border: 1px solid #eee; border-radius: 12px; min-height: 480px; max-height: 550px; z-index: 1;" alt="Transparent Pricing Toretto Recovery">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== COMMON SITUATIONS SECTION ===== --}}
    <section class="muhaisnah-situations-section py-5" style="background-color: #ffffff;">
        <div class="container py-4">
            <div class="row align-items-center">
                <!-- Image on the left for alternating layout -->
                <div class="col-lg-5 mb-5 mb-lg-0 wow animate__animated animate__fadeInLeft pe-lg-5">
                    <div class="position-relative">
                        <div class="position-absolute bg-danger rounded-circle" style="width: 80px; height: 80px; opacity: 0.1; transform: translate(-30%, -30%); z-index: 0;"></div>
                        <img src="{{ asset('assets/images/car-recovery-scene-in-muhaisnah.jpeg') }}" class="img-fluid rounded shadow-lg position-relative w-100" style="object-fit:cover; border: 1px solid #eee; border-radius: 16px; min-height: 480px; z-index: 1;" alt="Common Vehicle Emergencies Toretto Recovery">
                    </div>
                </div>
                
                <div class="col-lg-7 wow animate__animated animate__fadeInRight">
                    <span class="muhaisnah-section-tag">Any Emergency</span>
                    <h2 class="mb-3" style="font-size: 34px; font-weight: 800; color: #0f172a;">Common Situations We Handle</h2>
                    <p class="text-muted mb-4" style="font-size: 17px; line-height: 1.7;">We assist customers in real-life emergency scenarios every single day. <br><strong class="text-dark">Whatever the situation—we’ve handled it before.</strong></p>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center p-3 rounded" style="background:#f8f9fb; border-left: 3px solid #d70006;">
                                <i class="fas fa-traffic-light text-danger me-3 fs-5"></i>
                                <span class="fw-bold text-dark" style="font-size: 15px;">Car breakdown in traffic</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center p-3 rounded" style="background:#f8f9fb; border-left: 3px solid #d70006;">
                                <i class="fas fa-battery-empty text-danger me-3 fs-5"></i>
                                <span class="fw-bold text-dark" style="font-size: 15px;">Dead battery at home/office</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center p-3 rounded" style="background:#f8f9fb; border-left: 3px solid #d70006;">
                                <i class="fas fa-car-crash text-danger me-3 fs-5"></i>
                                <span class="fw-bold text-dark" style="font-size: 15px;">Accident recovery</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center p-3 rounded" style="background:#f8f9fb; border-left: 3px solid #d70006;">
                                <i class="fas fa-truck-pickup text-danger me-3 fs-5"></i>
                                <span class="fw-bold text-dark" style="font-size: 15px;">Vehicle stuck in sand</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center p-3 rounded" style="background:#f8f9fb; border-left: 3px solid #d70006;">
                                <i class="fas fa-wrench text-danger me-3 fs-5"></i>
                                <span class="fw-bold text-dark" style="font-size: 15px;">Flat tire on highway</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center p-3 rounded" style="background:#f8f9fb; border-left: 3px solid #d70006;">
                                <i class="fas fa-key text-danger me-3 fs-5"></i>
                                <span class="fw-bold text-dark" style="font-size: 15px;">Locked keys inside car</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center p-3 rounded" style="background:#f8f9fb; border-left: 3px solid #d70006;">
                                <i class="fas fa-parking text-danger me-3 fs-5"></i>
                                <span class="fw-bold text-dark" style="font-size: 15px;">Basement parking recovery</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== HOW IT WORKS SECTION ===== --}}
    <section class="muhaisnah-hiw-section">
        <div class="container">
            <div class="muhaisnah-hiw-header wow animate__animated animate__fadeInUp">
                <span class="muhaisnah-section-tag">Simple Process</span>
                <h2>How to Get Fast Help in Muhaisnah</h2>
                <p>Getting assistance is simple and quick. Keep your exact location, vehicle type, and issue ready when you call.</p>
            </div>

            <div class="muhaisnah-hiw-timeline">
                {{-- Step 1 --}}
                <div class="muhaisnah-hiw-step wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <div class="muhaisnah-hiw-number">1</div>
                    <div class="muhaisnah-hiw-icon-wrap">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="muhaisnah-hiw-content">
                        <h4>Call Us</h4>
                        <p>Provide your location and issue directly to our dispatcher.</p>
                    </div>
                </div>

                {{-- Step 2 --}}
                <div class="muhaisnah-hiw-step wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <div class="muhaisnah-hiw-number">2</div>
                    <div class="muhaisnah-hiw-icon-wrap">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <div class="muhaisnah-hiw-content">
                        <h4>Get Instant Quote</h4>
                        <p>We confirm service cost and estimated arrival time transparently.</p>
                    </div>
                </div>

                {{-- Step 3 --}}
                <div class="muhaisnah-hiw-step wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <div class="muhaisnah-hiw-number">3</div>
                    <div class="muhaisnah-hiw-icon-wrap">
                        <i class="fas fa-truck-fast"></i>
                    </div>
                    <div class="muhaisnah-hiw-content">
                        <h4>Fast Dispatch</h4>
                        <p>Our nearest recovery unit heads to your location in minutes.</p>
                    </div>
                </div>

                {{-- Step 4 --}}
                <div class="muhaisnah-hiw-step wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                    <div class="muhaisnah-hiw-number">4</div>
                    <div class="muhaisnah-hiw-icon-wrap">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="muhaisnah-hiw-content">
                        <h4>Problem Solved</h4>
                        <p>We fix or tow your vehicle safely and get you back securely.</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                <a href="tel:+971526917666" class="theme-btn">
                    <i class="fas fa-phone-alt me-2"></i> Call Now for Immediate Help
                    <i class="fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
        </div>
    </section>

    {{-- ===== FAQ SECTION ===== --}}
    <section class="muhaisnah-faq-section">
        <div class="container">
            <div class="muhaisnah-faq-header wow animate__animated animate__fadeInUp">
                <span class="muhaisnah-section-tag">Common Questions</span>
                <h2>Frequently Asked Questions in <span>Muhaisnah</span></h2>
            </div>

            <div class="muhaisnah-faq-wrap">
                {{-- FAQ 1 --}}
                <div class="muhaisnah-faq-item active wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <button class="muhaisnah-faq-question" type="button">
                        How fast can you reach Muhaisnah?
                        <span class="muhaisnah-faq-toggle"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="muhaisnah-faq-answer">
                        <p>We typically arrive within 30–45 minutes, depending on traffic and location.</p>
                    </div>
                </div>

                {{-- FAQ 2 --}}
                <div class="muhaisnah-faq-item wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <button class="muhaisnah-faq-question" type="button">
                        Do you provide 24/7 car recovery in Muhaisnah?
                        <span class="muhaisnah-faq-toggle"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="muhaisnah-faq-answer">
                        <p>Yes, we operate 24/7 including weekends and holidays.</p>
                    </div>
                </div>

                {{-- FAQ 3 --}}
                <div class="muhaisnah-faq-item wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <button class="muhaisnah-faq-question" type="button">
                        What types of vehicles do you recover?
                        <span class="muhaisnah-faq-toggle"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="muhaisnah-faq-answer">
                        <p>We recover cars, SUVs, vans, motorcycles, buses, and heavy vehicles.</p>
                    </div>
                </div>

                {{-- FAQ 4 --}}
                <div class="muhaisnah-faq-item wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                    <button class="muhaisnah-faq-question" type="button">
                        Do you offer roadside repairs?
                        <span class="muhaisnah-faq-toggle"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="muhaisnah-faq-answer">
                        <p>Yes, we provide minor mechanical repairs, battery jump-starts, and tire services on-site.</p>
                    </div>
                </div>

                {{-- FAQ 5 --}}
                <div class="muhaisnah-faq-item wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                    <button class="muhaisnah-faq-question" type="button">
                        How much does car recovery cost in Muhaisnah?
                        <span class="muhaisnah-faq-toggle"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="muhaisnah-faq-answer">
                        <p>Prices start from AED XXX, depending on service and distance.</p>
                    </div>
                </div>
                
                {{-- FAQ 6 --}}
                <div class="muhaisnah-faq-item wow animate__animated animate__fadeInUp" data-wow-delay=".6s">
                    <button class="muhaisnah-faq-question" type="button">
                        Can you recover vehicles from basements or tight spaces?
                        <span class="muhaisnah-faq-toggle"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="muhaisnah-faq-answer">
                        <p>Yes, we specialize in basement and restricted area recovery.</p>
                    </div>
                </div>

                {{-- FAQ 7 --}}
                <div class="muhaisnah-faq-item wow animate__animated animate__fadeInUp" data-wow-delay=".7s">
                    <button class="muhaisnah-faq-question" type="button">
                        Do you handle accident recovery?
                        <span class="muhaisnah-faq-toggle"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="muhaisnah-faq-answer">
                        <p>Absolutely. We provide safe accident vehicle recovery and transport.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ TOGGLE SCRIPT --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqQuestions = document.querySelectorAll('.muhaisnah-faq-question');
            
            faqQuestions.forEach(question => {
                question.addEventListener('click', () => {
                    const faqItem = question.parentElement;
                    const isActive = faqItem.classList.contains('active');
                    
                    // Close all other items
                    document.querySelectorAll('.muhaisnah-faq-item').forEach(item => {
                        item.classList.remove('active');
                    });
                    
                    // Toggle current item
                    if (!isActive) {
                        faqItem.classList.add('active');
                    }
                });
            });
        });
    </script>

    {{-- ===== FINAL CTA SECTION ===== --}}
    <section class="muhaisnah-cta-section">
        <div class="container">
            <div class="muhaisnah-cta-box wow animate__animated animate__zoomIn">
                <h2>Need Immediate Car Recovery in Muhaisnah?</h2>
                <p>Don’t let a breakdown ruin your day. Whether it's a flat tire, dead battery, or major breakdown, Toretto Recovery is ready to help you—anytime, anywhere.</p>
                
                <h3 class="text-white mt-4 mb-3" style="font-weight: 700; font-size: 24px;">Call Now for Fast 24/7 Vehicle Recovery in Muhaisnah</h3>
                
                <div class="d-flex flex-column align-items-center mb-4">
                    <ul class="text-start text-white list-unstyled d-inline-block" style="font-size: 17px; opacity: 0.95;">
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2 fs-5 align-middle"></i> Reach you within 30–45 minutes</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2 fs-5 align-middle"></i> Safe, reliable & affordable service</li>
                        <li><i class="fas fa-check-circle text-success me-2 fs-5 align-middle"></i> Available anytime, anywhere in Dubai</li>
                    </ul>
                </div>

                <div class="muhaisnah-cta-actions mb-4">
                    <a href="tel:+971526917666" class="theme-btn ja-cta-btn-primary">
                       <i class="fas fa-phone-alt"></i> Call Now
                    </a>
                    <a href="https://wa.me/971526917666" class="theme-btn ja-cta-btn-primary" target="_blank">
                       <i class="fab fa-whatsapp"></i> WhatsApp
                    </a>
                </div>

                <p class="muhaisnah-cta-footer m-0 text-white" style="font-size:16px; opacity: 0.85;">Your safety is our priority—help is just one call away.</p>
            </div>
        </div>
    </section>

@endsection
