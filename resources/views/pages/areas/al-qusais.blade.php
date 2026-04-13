@extends('layouts.main')

@section('title', 'Reliable Vehicle Recovery & Roadside Assistance in Al Qusais, Dubai – 24/7 Professional Service')

@section('meta_description')
    Get fast, safe, and professional vehicle recovery in Al Qusais, Dubai. We assist cars, bikes, vans, buses, and commercial vehicles 24/7. Call now for immediate roadside help and towing.
@endsection

@section('meta_keywords', 'Vehicle Recovery Al Qusais, Towing Service Al Qusais, Roadside Assistance Dubai, Flatbed Towing, Motorcycle Recovery, Commercial Vehicle Recovery Al Qusais')

@section('head')
    <link rel="stylesheet" href="{{ asset('assets/css/al-qusais.css') }}">
    
    @verbatim
    <script type="application/ld+json">
   {
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Al Qusais Vehicle Recovery Services",
  "image": "https://yourwebsite.com/logo.png",
  "description": "Fast, safe, and professional vehicle recovery and roadside assistance in Al Qusais, Dubai. We assist cars, motorcycles, vans, buses, and commercial vehicles 24/7.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Al Qusais Industrial Area",
    "addressLocality": "Al Qusais",
    "addressRegion": "Dubai",
    "postalCode": "00000",
    "addressCountry": "AE"
  },
  "telephone": "+971526917666",
  "email": "info@yourwebsite.com",
  "url": "https://yourwebsite.com",
  "openingHours": "Mo,Tu,We,Th,Fr,Sa,Su 00:00-23:59",
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "25.2345",
    "longitude": "55.3567"
  },
  "sameAs": [
    "https://www.facebook.com/yourpage",
    "https://www.instagram.com/yourpage",
    "https://twitter.com/yourpage"
  ],
  "faq": [
    {
      "@type": "Question",
      "name": "How long does it usually take for a recovery team to reach me?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Response time depends on traffic and your exact location, but we aim to reach you as quickly and safely as possible, especially within Al Qusais and its nearby roads."
      }
    },
    {
      "@type": "Question",
      "name": "Can you help if my vehicle won’t start at all?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We provide battery support, jump starts, and, if needed, towing to a service center."
      }
    },
    {
      "@type": "Question",
      "name": "Do you assist large vehicles like buses and commercial vans?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely. We have the equipment and training for light and heavy vehicle recovery."
      }
    },
    {
      "@type": "Question",
      "name": "Is the service available 24/7?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We are available for roadside assistance throughout the day and night to support unexpected breakdowns."
      }
    },
    {
      "@type": "Question",
      "name": "Can I choose where my vehicle is taken?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. You can tell us your preferred workshop or repair center, and we will transport your vehicle there safely."
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
        { "@type": "ListItem", "position": 2, "name": "Areas We Serve", "item": "https://www.torettorecovery.ae/areas-we-serve" },
        { "@type": "ListItem", "position": 3, "name": "Al Qusais Vehicle Recovery", "item": "https://torettorecovery.ae/areas-we-serve/al-qusais" }
      ]
    }
    </script>
    @endverbatim
@endsection

@section('content')

     {{-- BREADCRUMB --}}
    <section class="site-breadcrumb" style="background:url('{{ asset('assets/images/contact-bg.jpg') }}')">
        <div class="container">
            <h1 class="breadcrumb-title-areas">Al Qusais</h1>
            <ul class="breadcrumb-menu">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                    <i class="fa fa-angle-double-right"></i>
                </li>
                <li>
                    <a href="#">Areas We Serve</a>
                    <i class="fa fa-angle-double-right"></i>
                </li>
                <li class="active">Al Qusais</li>
            </ul>
        </div>
    </section>

    {{-- ===== ABOUT / INTRO SECTION ===== --}}
    <section class="qusais-intro-section">
        <div class="container">
            <div class="row align-items-center">
                {{-- Left Side: Image (Moved to Left Side) --}}
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="qusais-intro-image-wrapper wow animate__animated animate__fadeInLeft">
                        <img src="{{ asset('assets/images/Professional-roadside-support-for-cars-in-Al-Warqa-Dubai.jpg') }}" alt="Al Qusais Vehicle Recovery Team" class="qusais-intro-img">
                        <div class="qusais-intro-badge">
                            <div class="badge-icon"><i class="bi bi-shield-check"></i></div>
                            <div class="badge-text">
                                <strong>Safety First</strong>
                                <span>100% Reliable Transport</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right Side: Content --}}
                <div class="col-lg-6">
                    <div class="qusais-intro-content wow animate__animated animate__fadeInRight" data-wow-delay=".25s">
                        <h1 class="qusais-intro-h1">Reliable Vehicle Recovery & Roadside Assistance in Al Qusais</h1>
                        <h2 class="qusais-intro-h2">Safe, Prompt, and Professional Support for Cars, Bikes, Vans, and Larger Vehicles</h2>
                        
                        <div class="qusais-intro-highlight">
                            <p>When a vehicle breaks down, every minute feels long. Whether you’re on Airport Free Zone Road, near Al Qusais Industrial Area, or along Al Nahda Street, dependable assistance can make all the difference. Our recovery and roadside support team specializes in helping motorists in Al Qusais and surrounding areas, offering timely help you can trust.</p>
                            <p>We serve a range of vehicles—cars, motorcycles, vans, buses, and commercial vehicles—with a focus on safety, clear communication, and professional care.</p>
                        </div>
                        
                        <div class="qusais-intro-actions">
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

    {{-- ===== CORE SERVICES (TEXT FOCUS) ===== --}}
    <section class="qusais-services-section">
        <div class="container">
            <div class="qusais-services-header">
                <h2>Our Services in Al Qusais</h2>
                <p>We tailor our services to your needs and to the road conditions you encounter around Al Qusais. Each service is delivered by trained professionals with experience in roadside recovery and vehicle handling.</p>
            </div>

            <div class="row">
                {{-- Service 1 --}}
                <div class="col-md-6 mb-4">
                    <div class="qusais-svc-text-card">
                        <div class="svc-text-header">
                            <div class="svc-text-icon"><i class="fas fa-tools"></i></div>
                            <h3>1. Emergency Roadside Assistance</h3>
                        </div>
                        <div class="svc-text-body">
                            <p class="svc-intro">We respond quickly when you need help most. Our goal is to resolve issues without delay and keep you secure while you wait.</p>
                            
                            <div class="svc-list-block">
                                <strong>Our team can assist with:</strong>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Vehicle breakdown support near Al Qusais</li>
                                    <li><i class="bi bi-check2-all"></i> Minor mechanical fixes on site</li>
                                    <li><i class="bi bi-check2-all"></i> Vehicle safety checks before towing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 2 --}}
                <div class="col-md-6 mb-4">
                    <div class="qusais-svc-text-card">
                        <div class="svc-text-header">
                            <div class="svc-text-icon"><i class="fas fa-truck-loading"></i></div>
                            <h3>2. Local Towing and Transport</h3>
                        </div>
                        <div class="svc-text-body">
                            <p class="svc-intro">Whether your car or van cannot be fixed on site, we can transport it to the workshop of your choice.</p>
                            
                            <div class="svc-list-block">
                                <strong>We provide:</strong>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Flatbed towing for safe transport</li>
                                    <li><i class="bi bi-check2-all"></i> Wheel-lift towing for lighter vehicles</li>
                                    <li><i class="bi bi-check2-all"></i> Secure handling of your vehicle during movement</li>
                                </ul>
                            </div>
                            
                            <div class="svc-highlight-box theme-light">
                                <strong><i class="bi bi-stopwatch text-warning"></i> Route Planning:</strong>
                                <p class="mb-0 mt-1">We understand roads in and around Al Qusais and plan routes that minimize wait and travel time.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 3 --}}
                <div class="col-md-6 mb-4">
                    <div class="qusais-svc-text-card">
                        <div class="svc-text-header">
                            <div class="svc-text-icon"><i class="fas fa-motorcycle"></i></div>
                            <h3>3. Motorcycle and Bike Recovery</h3>
                        </div>
                        <div class="svc-text-body">
                            <p class="svc-intro">We handle two-wheeler recovery with care. This service gives you peace of mind without risking damage to your bike.</p>
                            
                            <div class="svc-list-block">
                                <strong>Our team uses equipment that protects:</strong>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Motorcycle body and frame</li>
                                    <li><i class="bi bi-check2-all"></i> Secure loading and transport</li>
                                    <li><i class="bi bi-check2-all"></i> Transfer to preferred repair center</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 4 --}}
                <div class="col-md-6 mb-4">
                    <div class="qusais-svc-text-card">
                        <div class="svc-text-header">
                            <div class="svc-text-icon"><i class="fas fa-truck-moving"></i></div>
                            <h3>4. Commercial &amp; Heavy Vehicle Assistance</h3>
                        </div>
                        <div class="svc-text-body">
                            <p class="svc-intro">These require specific recovery techniques and equipment, which our trained operators are equipped to use.</p>
                            
                            <div class="svc-list-block">
                                <strong>We support larger vehicles such as:</strong>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Mini buses and buses</li>
                                    <li><i class="bi bi-check2-all"></i> Delivery vans</li>
                                    <li><i class="bi bi-check2-all"></i> Light commercial trucks</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Service 5 & 6 Premium Card --}}
                <div class="col-lg-12 mb-4">
                    <div class="qusais-svc-text-card premium-card">
                        <div class="svc-text-header">
                            <div class="svc-text-icon"><i class="fas fa-bolt"></i></div>
                            <h3>5. Extra Support: Battery &amp; Flat Tires</h3>
                        </div>
                        <div class="svc-text-body">
                            <p class="svc-intro text-center">We handle routine roadside needs efficiently. Our team ensures you are safely back on the road or transported to a suitable support center with minimal disruption.</p>
                            
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="svc-list-block">
                                        <ul>
                                            <li><i class="bi bi-check2-all"></i> <strong>Battery Support</strong> <br><span>Jump starts or battery replacement guidance on site.</span></li>
                                            <li><i class="bi bi-check2-all"></i> <strong>Fuel Delivery</strong> <br><span>Small emergency fuel delivery and advice for longer journeys.</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="svc-list-block">
                                        <ul>
                                            <li><i class="bi bi-check2-all"></i> <strong>Flat Tire Management</strong> <br><span>Tire changing on site and rapid safety checks.</span></li>
                                            <li><i class="bi bi-check2-all"></i> <strong>Tire Shop Connections</strong> <br><span>Recommendations for local tire shops in Al Qusais.</span></li>
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

    {{-- ===== WHY CHOOSE US SECTION ===== --}}
    <section class="qusais-why-section">
        <div class="container">
            <div class="qusais-why-header wow animate__animated animate__fadeInUp">
                <h2>Why Choose Our Recovery Service in <span>Al Qusais</span></h2>
                <p>We combine localized expertise with specialized processes to provide the fastest, safest, and most dependable solutions in the area.</p>
            </div>
            <div class="row">
                {{-- Item 1 --}}
                <div class="col-lg-6 mb-4">
                    <div class="qusais-why-card h-100 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <div class="qusais-why-img">
                            <img src="{{ asset('assets/images/24-7-vehicle-breakdown-assistance-service-in-Al-Warqa.jpg') }}" alt="Local Knowledge Al Qusais">
                        </div>
                        <div class="d-flex align-items-start gap-3 mt-1">
                            <div class="qusais-why-icon"><i class="fas fa-map-marked-alt"></i></div>
                            <div>
                                <h4>Local Knowledge You Can Rely On</h4>
                                <p>Our team regularly operates throughout Al Qusais and neighboring roads, giving us a deep understanding of local traffic patterns, common breakdown spots, and the fastest routes for assistance.</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Item 2 (No Image) --}}
                <div class="col-lg-6 mb-4">
                    <div class="qusais-why-card no-image h-100 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <div class="d-flex align-items-start gap-3">
                            <div class="qusais-why-icon"><i class="fas fa-user-shield"></i></div>
                            <div>
                                <h4>Trained Professionals</h4>
                                <p>Every technician is experienced in roadside service and recovery best practices. Vehicles are handled with care, from motorcycles to buses.</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Item 3 --}}
                <div class="col-lg-6 mb-4">
                    <div class="qusais-why-card h-100 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <div class="qusais-why-img">
                            <img src="{{ asset('assets/images/vehicle-recovery-service-in-Al-Warqa-Dubai-assisting-broken-down-car.jpg') }}" alt="Clear Communication">
                        </div>
                        <div class="d-flex align-items-start gap-3 mt-1">
                            <div class="qusais-why-icon"><i class="fas fa-headset"></i></div>
                            <div>
                                <h4>Clear Communication</h4>
                                <p>We keep you informed at every step—from estimated arrival time to service completion—so you always know what to expect.</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Item 4 --}}
                <div class="col-lg-6 mb-4">
                    <div class="qusais-why-card h-100 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                        <div class="qusais-why-img">
                            <img src="{{ asset('assets/images/Roadside-assistance-team-helping-stranded-driver-in-Al-Warqa.jpg') }}" alt="Safety First Recovery">
                        </div>
                        <div class="d-flex align-items-start gap-3 mt-1">
                            <div class="qusais-why-icon"><i class="fas fa-shield-alt"></i></div>
                            <div>
                                <h4>Safety First</h4>
                                <p>Your safety and the safety of your vehicle are our top priorities. We follow structured processes to protect you, your passengers, and your vehicle during every intervention.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== COMPREHENSIVE AREA COVERAGE SECTION (TEXT FOCUS) ===== --}}
    <section class="qusais-scenarios-section py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <span class="qusais-section-tag">Extensive Reach</span>
                    <h2 class="qusais-unique-title mb-3">Comprehensive Vehicle Recovery Services Across <span>Al Qusais</span> and Surrounding Areas</h2>
                    <p class="qusais-unique-intro mx-auto" style="max-width: 850px;">Our team specializes in providing reliable and professional vehicle recovery and roadside assistance in Al Qusais, and we extend our services to several nearby locations. No matter where you are, whether it’s a busy residential street, industrial area, or a highway corridor, we ensure rapid response, safety, and expert care for all vehicles—cars, motorcycles, vans, buses, and light commercial trucks.</p>
                </div>
            </div>

            <div class="row">
                {{-- Area 1 --}}
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <div class="bg-white p-4 border rounded shadow-sm h-100 position-relative overflow-hidden d-flex flex-column transition-hover">
                        <div class="position-absolute top-0 start-0 w-100 bg-danger" style="height: 4px;"></div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="text-danger flex-shrink-0 me-3"><i class="fas fa-map-marker-alt fs-2"></i></div>
                            <h4 class="h5 mb-0 fw-bold text-dark">1. Al Qusais – Central Area</h4>
                        </div>
                        <p class="text-muted mb-4 pb-2" style="font-size: 0.95rem;">The heart of Al Qusais is a bustling area with a mix of residential, commercial, and light industrial zones. Streets like Al Ittihad Road, Salahuddin Road, and Abu Hail Road often experience heavy traffic during peak hours. Our recovery teams are well-acquainted with these streets, ensuring quick access to stranded vehicles.</p>
                        <div class="mt-auto">
                            <div class="p-3 bg-light rounded mb-3 border-start border-danger border-3">
                                <strong class="d-block text-dark mb-1" style="font-size: 0.85rem;"><i class="fas fa-tools text-success me-1"></i> Core Services:</strong>
                                <span class="text-muted" style="font-size: 0.85rem;">Emergency towing, battery assistance, flat tire repairs, and on-site minor mechanical support.</span>
                            </div>
                            <div class="d-flex align-items-start text-secondary" style="font-size: 0.85rem;">
                                <i class="fas fa-building text-danger mt-1 me-2"></i>
                                <span><strong>Key Landmarks:</strong> Al Qusais Metro Station, Al Qusais Post Office, Al Qusais Park, and local shopping areas.</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Area 2 --}}
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <div class="bg-white p-4 border rounded shadow-sm h-100 position-relative overflow-hidden d-flex flex-column transition-hover">
                        <div class="position-absolute top-0 start-0 w-100 bg-danger" style="height: 4px;"></div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="text-danger flex-shrink-0 me-3"><i class="fas fa-industry fs-2"></i></div>
                            <h4 class="h5 mb-0 fw-bold text-dark">2. Al Qusais Industrial Area</h4>
                        </div>
                        <p class="text-muted mb-4 pb-2" style="font-size: 0.95rem;">Known for warehouses, workshops, and logistics hubs, this area sees a lot of commercial and heavy vehicle activity. Roads such as Street 8, Street 12, and Al Qusais 2nd Industrial Road require experienced recovery teams that can safely handle vans, delivery trucks, and commercial vehicles.</p>
                        <div class="mt-auto">
                            <div class="p-3 bg-light rounded mb-3 border-start border-warning border-3">
                                <strong class="d-block text-dark mb-1" style="font-size: 0.85rem;"><i class="fas fa-shield-alt text-success me-1"></i> Why Choose Us Here:</strong>
                                <span class="text-muted" style="font-size: 0.85rem;">We manage large vehicle pull-outs, off-road extractions within narrow warehouse zones, and safe towing without disrupting operations.</span>
                            </div>
                            <div class="d-flex align-items-start text-secondary" style="font-size: 0.85rem;">
                                <i class="fas fa-building text-danger mt-1 me-2"></i>
                                <span><strong>Local Landmarks:</strong> Dubai Central Fruit & Vegetable Market, Al Qusais Industrial Park, and Auto Service Centers.</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Area 3 --}}
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <div class="bg-white p-4 border rounded shadow-sm h-100 position-relative overflow-hidden d-flex flex-column transition-hover">
                        <div class="position-absolute top-0 start-0 w-100 bg-danger" style="height: 4px;"></div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="text-danger flex-shrink-0 me-3"><i class="fas fa-city fs-2"></i></div>
                            <h4 class="h5 mb-0 fw-bold text-dark">3. Al Nahda</h4>
                        </div>
                        <p class="text-muted mb-4 pb-2" style="font-size: 0.95rem;">Al Nahda is a busy residential and commercial district bridging Dubai and Sharjah, with streets like Al Nahda Road and Al Nahda Street. Due to high traffic and multiple service roads, vehicles often require assistance for battery failure, tire punctures, and minor breakdowns.</p>
                        <div class="mt-auto">
                            <div class="p-3 bg-light rounded mb-3 border-start border-info border-3">
                                <strong class="d-block text-dark mb-1" style="font-size: 0.85rem;"><i class="fas fa-star text-success me-1"></i> Service Highlights:</strong>
                                <span class="text-muted" style="font-size: 0.85rem;">Quick on-site solutions, safe roadside towing, and local knowledge that allows us to navigate traffic efficiently.</span>
                            </div>
                            <div class="d-flex align-items-start text-secondary" style="font-size: 0.85rem;">
                                <i class="fas fa-building text-danger mt-1 me-2"></i>
                                <span><strong>Local Landmarks:</strong> Al Nahda Pond Park, Al Nahda Metro Station, and nearby hospitals and schools.</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Area 4 --}}
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                    <div class="bg-white p-4 border rounded shadow-sm h-100 position-relative overflow-hidden d-flex flex-column transition-hover">
                        <div class="position-absolute top-0 start-0 w-100 bg-danger" style="height: 4px;"></div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="text-danger flex-shrink-0 me-3"><i class="fas fa-graduation-cap fs-2"></i></div>
                            <h4 class="h5 mb-0 fw-bold text-dark">4. Academic City Road</h4>
                        </div>
                        <p class="text-muted mb-4 pb-2" style="font-size: 0.95rem;">This area serves students, faculty, and commuters traveling to universities and institutes. Academic City Road and surrounding streets often have congestion during peak hours. We specialize in safe vehicle recovery without disrupting traffic.</p>
                        <div class="mt-auto">
                            <div class="p-3 bg-light rounded mb-3 border-start border-primary border-3">
                                <strong class="d-block text-dark mb-1" style="font-size: 0.85rem;"><i class="fas fa-car-battery text-success me-1"></i> Service Highlights:</strong>
                                <span class="text-muted" style="font-size: 0.85rem;">Emergency battery boosts, tire services, and reliable safe towing.</span>
                            </div>
                            <div class="d-flex align-items-start text-secondary" style="font-size: 0.85rem;">
                                <i class="fas fa-building text-danger mt-1 me-2"></i>
                                <span><strong>Local Landmarks:</strong> Dubai Academic City, HCT University campuses, and nearby student accommodations.</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Area 5 --}}
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                    <div class="bg-white p-4 border rounded shadow-sm h-100 position-relative overflow-hidden d-flex flex-column transition-hover">
                        <div class="position-absolute top-0 start-0 w-100 bg-danger" style="height: 4px;"></div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="text-danger flex-shrink-0 me-3"><i class="fas fa-plane-departure fs-2"></i></div>
                            <h4 class="h5 mb-0 fw-bold text-dark">5. Airport Road (D89)</h4>
                        </div>
                        <p class="text-muted mb-4 pb-2" style="font-size: 0.95rem;">As a major arterial route connecting Dubai International Airport and Al Qusais, Airport Road is prone to high-speed traffic and frequent congestion. Our team provides fast, safe roadside assistance and towing, especially for cars, SUVs, and commercial vans.</p>
                        <div class="mt-auto">
                            <div class="p-3 bg-light rounded mb-3 border-start border-success border-3">
                                <strong class="d-block text-dark mb-1" style="font-size: 0.85rem;"><i class="fas fa-tachometer-alt text-success me-1"></i> Specialization:</strong>
                                <span class="text-muted" style="font-size: 0.85rem;">Rapid deployment and secure handling on major highway corridors.</span>
                            </div>
                            <div class="d-flex align-items-start text-secondary" style="font-size: 0.85rem;">
                                <i class="fas fa-building text-danger mt-1 me-2"></i>
                                <span><strong>Local Landmarks:</strong> Dubai Airport Free Zone (DAFZA), Emirates Flight Catering, and Al Garhoud Bridge.</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Area 6 --}}
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".6s">
                    <div class="bg-white p-4 border rounded shadow-sm h-100 position-relative overflow-hidden d-flex flex-column transition-hover">
                        <div class="position-absolute top-0 start-0 w-100 bg-danger" style="height: 4px;"></div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="text-danger flex-shrink-0 me-3"><i class="fas fa-laptop-code fs-2"></i></div>
                            <h4 class="h5 mb-0 fw-bold text-dark">6. Dubai Silicon Oasis</h4>
                        </div>
                        <p class="text-muted mb-4 pb-2" style="font-size: 0.95rem;">A mixed residential and business hub, Dubai Silicon Oasis features gated communities, office parks, and narrow internal roads. We are equipped to navigate these localized challenges effortlessly.</p>
                        <div class="mt-auto">
                            <div class="p-3 bg-light rounded mb-3 border-start border-danger border-3">
                                <strong class="d-block text-dark mb-1" style="font-size: 0.85rem;"><i class="fas fa-wrench text-success me-1"></i> Core Services:</strong>
                                <span class="text-muted" style="font-size: 0.85rem;">Minor on-site repairs, vehicle pull-outs from tight areas, and motorcycle/bike recovery.</span>
                            </div>
                            <div class="d-flex align-items-start text-secondary" style="font-size: 0.85rem;">
                                <i class="fas fa-building text-danger mt-1 me-2"></i>
                                <span><strong>Local Landmarks:</strong> Silicon Oasis City Centre, DSO Metro Station, and various tech company offices.</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Area 7 (Centered) --}}
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".7s">
                    <div class="bg-white p-4 border rounded shadow-sm h-100 position-relative overflow-hidden d-flex flex-column transition-hover">
                        <div class="position-absolute top-0 start-0 w-100 bg-danger" style="height: 4px;"></div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="text-danger flex-shrink-0 me-3"><i class="fas fa-home fs-2"></i></div>
                            <h4 class="h5 mb-0 fw-bold text-dark">7. Mirdif</h4>
                        </div>
                        <p class="text-muted mb-4 pb-2" style="font-size: 0.95rem;">Mirdif is a sprawling residential neighborhood with access to main roads like Mirdif Road and Salahuddin Street. We assist residents directly within their communities.</p>
                        <div class="mt-auto">
                            <div class="p-3 bg-light rounded mb-3 border-start border-danger border-3">
                                <strong class="d-block text-dark mb-1" style="font-size: 0.85rem;"><i class="fas fa-car text-success me-1"></i> Full-Service Solutions:</strong>
                                <span class="text-muted" style="font-size: 0.85rem;">Battery support, flat tire changes, and safe towing to trusted nearby garages.</span>
                            </div>
                            <div class="d-flex align-items-start text-secondary" style="font-size: 0.85rem;">
                                <i class="fas fa-building text-danger mt-1 me-2"></i>
                                <span><strong>Local Landmarks:</strong> Mirdif City Centre, Mushrif Park, Uptown Mirdif, and local schools.</span>
                            </div>
                        </div>
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

    {{-- ===== HOW IT WORKS SECTION ===== --}}
    <section class="qusais-hiw-section">
        <div class="container">
            <div class="qusais-hiw-header wow animate__animated animate__fadeInUp">
                <span class="qusais-section-tag">Simple Process</span>
                <h2>How It Works</h2>
                <p>From your first call to getting back on the road—our process is transparent, fast, and designed to keep you safe.</p>
            </div>

            <div class="qusais-hiw-timeline">
                {{-- Step 1 --}}
                <div class="qusais-hiw-step wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <div class="qusais-hiw-number">1</div>
                    <div class="qusais-hiw-icon-wrap">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="qusais-hiw-content">
                        <h4>Contact Us</h4>
                        <p>Call or message our support line with your location and vehicle details.</p>
                    </div>
                </div>

                {{-- Step 2 --}}
                <div class="qusais-hiw-step wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <div class="qusais-hiw-number">2</div>
                    <div class="qusais-hiw-icon-wrap">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="qusais-hiw-content">
                        <h4>Receive an ETA</h4>
                        <p>We share an estimated arrival time based on traffic and distance.</p>
                    </div>
                </div>

                {{-- Step 3 --}}
                <div class="qusais-hiw-step wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <div class="qusais-hiw-number">3</div>
                    <div class="qusais-hiw-icon-wrap">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="qusais-hiw-content">
                        <h4>On‑Site Assessment</h4>
                        <p>Our technician evaluates the issue and discusses the best solution with you.</p>
                    </div>
                </div>

                {{-- Step 4 --}}
                <div class="qusais-hiw-step wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                    <div class="qusais-hiw-number">4</div>
                    <div class="qusais-hiw-icon-wrap">
                        <i class="fas fa-truck-loading"></i>
                    </div>
                    <div class="qusais-hiw-content">
                        <h4>Service or Tow</h4>
                        <p>We provide the needed support on site or tow the vehicle safely if required.</p>
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
    <section class="qusais-faq-section">
        <div class="container">
            <div class="qusais-faq-header wow animate__animated animate__fadeInUp">
                <span class="qusais-section-tag">Common Questions</span>
                <h2>Common Questions from Drivers in <span>Al Qusais</span></h2>
                <p>We're here to help you get back on the road safely. Here are the most common questions we receive.</p>
            </div>

            <div class="qusais-faq-wrap">
                {{-- FAQ 1 --}}
                <div class="qusais-faq-item active wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <button class="qusais-faq-question" type="button">
                        How long does it usually take for a recovery team to reach me?
                        <span class="qusais-faq-toggle"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="qusais-faq-answer">
                        <p>Response time depends on traffic and your exact location, but we aim to reach you as quickly and safely as possible, especially within Al Qusais and its nearby roads.</p>
                    </div>
                </div>

                {{-- FAQ 2 --}}
                <div class="qusais-faq-item wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <button class="qusais-faq-question" type="button">
                        Can you help if my vehicle won’t start at all?
                        <span class="qusais-faq-toggle"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="qusais-faq-answer">
                        <p>Yes. We provide battery support, jump starts, and, if needed, towing to a service center.</p>
                    </div>
                </div>

                {{-- FAQ 3 --}}
                <div class="qusais-faq-item wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <button class="qusais-faq-question" type="button">
                        Do you assist large vehicles like buses and commercial vans?
                        <span class="qusais-faq-toggle"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="qusais-faq-answer">
                        <p>Absolutely. We have the equipment and training for light and heavy vehicle recovery.</p>
                    </div>
                </div>

                {{-- FAQ 4 --}}
                <div class="qusais-faq-item wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                    <button class="qusais-faq-question" type="button">
                        Is the service available 24/7?
                        <span class="qusais-faq-toggle"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="qusais-faq-answer">
                        <p>We are available for roadside assistance throughout the day and night to support unexpected breakdowns.</p>
                    </div>
                </div>

                {{-- FAQ 5 --}}
                <div class="qusais-faq-item wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                    <button class="qusais-faq-question" type="button">
                        Can I choose where my vehicle is taken?
                        <span class="qusais-faq-toggle"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="qusais-faq-answer">
                        <p>Yes. You can tell us your preferred workshop or repair center, and we will transport your vehicle there.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ TOGGLE SCRIPT --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqQuestions = document.querySelectorAll('.qusais-faq-question');
            
            faqQuestions.forEach(question => {
                question.addEventListener('click', () => {
                    const faqItem = question.parentElement;
                    const isActive = faqItem.classList.contains('active');
                    
                    // Close all other items
                    document.querySelectorAll('.qusais-faq-item').forEach(item => {
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
    <section class="qusais-cta-section">
        <div class="container">
            <div class="qusais-cta-box wow animate__animated animate__zoomIn">
                <h2>Ready When You Need Us</h2>
                <p>If you’re experiencing car trouble or need roadside support in Al Qusais, reach out now. We’re here to assist with patience, skill, and local insight.</p>
                
                <div class="qusais-cta-actions">
                    <a href="tel:+971526917666" class="theme-btn ja-cta-btn-primary">
                       Call Now
                    </a>
                    <a href="https://wa.me/971526917666" class="theme-btn ja-cta-btn-primary" target="_blank">
                        WhatsApp
                    </a>
                </div>

                <p class="qusais-cta-footer">Your safety is our priority—we’ll get you moving again quickly.</p>
            </div>
        </div>
    </section>

@endsection
