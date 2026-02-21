@extends('layouts.main')

@section('title', '24/7 Emergency Accidental Car Recovery Dubai | RTA Licensed Service')

@section('meta_description',
    'Expert accident vehicle recovery service in Dubai. RTA approved, 24/7 emergency response,
    modern equipment fleet. Serving all areas with 20-45 min arrival. Get help now.')
@section('head')
    @verbatim
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Accidental Car Recovery Service",
  "provider": {
    "@type": "AutoRepair",
    "name": "Toretto Recovery",
    "image": "https://www.yourdomain.com/logo.jpg",
    "telephone": "+971 523003423",
    "url": "https://www.yourdomain.com/accidental-car-recovery-dubai",
    "priceRange": "$$",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "274 Street - Dubai Investment Park - 2 - Dubai",
      "addressLocality": "Dubai",
      "addressRegion": "Dubai",
      "postalCode": "00000",
      "addressCountry": "AE"
    }
  },
  "areaServed": {
    "@type": "City",
    "name": "Dubai",
    "@id": "https://en.wikipedia.org/wiki/Dubai"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Accidental Car Recovery Services",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Emergency Accident Vehicle Recovery",
          "description": "24/7 emergency response for accident-damaged vehicles across Dubai"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Luxury Vehicle Accident Recovery",
          "description": "Specialized recovery for high-value and exotic vehicles after collisions"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Multi-Vehicle Collision Recovery",
          "description": "Coordinated recovery services for complex multi-car accident scenes"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Off-Road Accident Recovery",
          "description": "Specialized equipment for desert and remote location accident recovery"
        }
      }
    ]
  },
  "availableChannel": {
    "@type": "ServiceChannel",
    "serviceUrl": "https://www.yourdomain.com/accidental-car-recovery-dubai",
    "servicePhone": {
      "@type": "ContactPoint",
      "telephone": "+971-XX-XXX-XXXX",
      "contactType": "Emergency Service",
      "availableLanguage": ["English", "Arabic"],
      "hoursAvailable": {
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
      }
    }
  },
  "slogan": "RTA Licensed 24/7 Emergency Accident Recovery Across Dubai",
  "description": "Professional accidental car recovery service in Dubai with 14 years experience. RTA licensed, modern equipment fleet, luxury vehicle specialists, 24/7 emergency response with 20-45 minute arrival times."
}
</script>
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How quickly can you respond to accident scenes?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our strategically positioned fleet across multiple zones enables 20-45 minute response times for most locations under normal traffic conditions. Emergency situations receive priority dispatch with real-time traffic monitoring to optimize routing."
      }
    },
    {
      "@type": "Question",
      "name": "Are your services available throughout the entire emirate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, our comprehensive coverage extends across all urban areas, highway systems, desert routes, and remote locations. Our 24/7 operations ensure assistance availability regardless of time or location."
      }
    },
    {
      "@type": "Question",
      "name": "What types of vehicles can you recover?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our diverse equipment fleet handles everything from compact sedans to large SUVs, luxury vehicles, exotic sports cars, and commercial vehicles. Specialized equipment ensures appropriate handling for each vehicle category."
      }
    },
    {
      "@type": "Question",
      "name": "Will recovery damage my vehicle further?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Professional recovery using proper equipment and techniques prevents additional damage. Our operators receive continuous training in vehicle-specific handling, and we utilize soft-straps, flatbed transport, and specialized securing methods protecting your automobile throughout the process."
      }
    },
    {
      "@type": "Question",
      "name": "Do you coordinate with insurance companies?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we maintain established relationships with major insurance providers and assist with claim documentation, damage photography, transport reporting, and direct communication with adjusters to streamline your reimbursement process."
      }
    },
    {
      "@type": "Question",
      "name": "What if my accident occurs in a difficult location?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our experienced operators and specialized equipment handle challenging extractions from embankments, sandy terrain, narrow underpasses, confined tunnels, and multi-story parking structures. Fourteen years of experience ensures we've encountered virtually every scenario."
      }
    },
    {
      "@type": "Question",
      "name": "Are there additional charges for night-time or remote recovery?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Pricing varies based on location, time, vehicle type, and scenario complexity. We provide transparent cost estimates before initiating services, ensuring you understand all charges without surprise fees."
      }
    },
    {
      "@type": "Question",
      "name": "What should I do while waiting for recovery?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Activate hazard lights, deploy warning triangles if safe, document the scene with photographs, remain in a safe location away from traffic, and avoid attempting to move severely damaged vehicles. Our operators provide additional guidance when you call."
      }
    },
    {
      "@type": "Question",
      "name": "How do I know you're properly licensed?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We maintain full RTA authorization with continuous compliance verification. Our 14-year operational history demonstrates consistent adherence to regulatory standards and professional certification requirements."
      }
    },
    {
      "@type": "Question",
      "name": "Can you transport my vehicle to any repair facility?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide flexible destination delivery including your residence, preferred independent garages, dealership service centers, or insurance-designated repair facilities based on your specifications and coverage requirements."
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
        style="background: url('{{ asset('assets/images/Accidental Vehicle.jpeg') }}');">

        <div class="container">
            <div class="row align-items-center min-vh-75">

                <!-- LEFT CONTENT -->
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="hero-content-wrapper text-white text-start">

                        <!-- Main Heading -->
                        <h1 class="hero-main-title mb-3 wow animate__animated animate__fadeInDown">
                            24/7 Emergency Accidental Car Recovery Across the Emirate
                        </h1>


                        <ul class="breadcrumb-menu">
                            <li>
                                <a href="{{ route('home') }}" target="_blank">Home</a>
                                <i class="fa fa-angle-double-right"></i>
                            </li>
                            <li class="active">Accidental Car Recovery</li>
                        </ul>

                        <!-- Subtitle -->
                        <h2 class="mt-3 mb-3 text-white breadcrumb-subtitle">
                            Professional Response When It Matters Most
                        </h2>

                        <!-- USP Highlights -->
                        <div class="usp-highlights mb-4">
                            <div class="usp-item">
                                <i class="fa-solid fa-shield-halved"></i>
                                <span>RTA-Licensed 24/7 Support</span>
                            </div>
                            <div class="usp-item">
                                <i class="fa-solid fa-truck-ramp-box"></i>
                                <span>Specialized Flatbed Transport</span>
                            </div>
                            <div class="usp-item">
                                <i class="fa-solid fa-hand-holding-heart"></i>
                                <span>Damage-Free Handling</span>
                            </div>
                        </div>

                        <!-- Checkmark Stats -->
                        <div class="check-stats mb-4">
                            <div class="check-item">
                                <i class="fa-solid fa-circle-check"></i>
                                <span>Licensed & Insured Operators</span>
                            </div>
                            <div class="check-item">
                                <i class="fa-solid fa-circle-check"></i>
                                <span>10-45 Minute Response Time</span>
                            </div>
                            <div class="check-item">
                                <i class="fa-solid fa-circle-check"></i>
                                <span>Modern Fleet with Advanced Equipment</span>
                            </div>
                        </div>

                        <!-- CTA Section -->
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

    <!-- CONTACT TOP BANNER -->
    <section class="recovery-cta-wrapper">
        <div class="container-fluid cta-wrapper p-0">
            <div class=" container wow fadeInUp">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cta-content" style="text-align: center;">
                            <p class="text-gray-p">
                                When collisions occur on bustling thoroughfares, immediate professional assistance becomes
                                essential for motorist safety and legal compliance. Understanding the comprehensive recovery
                                process helps vehicle owners navigate challenging situations with confidence while ensuring
                                their automobiles receive expert care during transport and documentation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- CRITICAL RECOVERY SCENARIOS -->
    <section class="accident-scenarios py-120" style="background: #f8f9fa;">
        <div class="container">
            <div class="site-heading text-center mb-5">
                <h2 class="site-title">Critical Recovery <span>Scenarios</span></h2>
                <p style="max-width: 700px; margin: 0 auto;">Several circumstances necessitate immediate professional
                    intervention to ensure safety and prevent further damage</p>
            </div>

            <!-- Section Image -->
            <div class="ac-scenario-img-wrap mb-5">
                <img src="{{ asset('assets/images/critical-recovery-scenarios.jpg') }}"
                    alt="Professional accident vehicle recovery - tow truck operator securing a damaged car for safe transport"
                    class="ac-scenario-img" loading="lazy">
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="scenario-card"
                        style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); height: 100%;">
                        <div class="d-flex align-items-start mb-3">
                            <div
                                style="min-width: 50px; height: 50px; background: #ffe5e5; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                <i class="fa-solid fa-car-burst" style="color: #d70006; font-size: 22px;"></i>
                            </div>
                            <div>
                                <h4 style="color: #d70006; margin-bottom: 10px;">High-Speed Collisions</h4>
                            </div>
                        </div>
                        <p style="color: #666; line-height: 1.7;">Major arterials experience frequent incidents ranging from
                            minor fender-benders to severe multi-vehicle crashes. Even seemingly minor impacts can
                            compromise critical mechanical systems, rendering vehicles inoperable and creating hazardous
                            conditions for surrounding traffic.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="scenario-card"
                        style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); height: 100%;">
                        <div class="d-flex align-items-start mb-3">
                            <div
                                style="min-width: 50px; height: 50px; background: #ffe5e5; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                <i class="fa-brands fa-searchengin" style="color: #d70006; font-size: 22px;"></i>
                            </div>
                            <div>
                                <h4 style="color: #d70006; margin-bottom: 10px;">Post-Collision Mechanical Compromise</h4>
                            </div>
                        </div>
                        <p style="color: #666; line-height: 1.7;">Impact damage frequently affects engines, transmissions,
                            suspension systems, and steering components. Hidden damage to drivetrain elements makes
                            self-driving attempts dangerous and can exponentially increase repair costs through secondary
                            failures.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="scenario-card"
                        style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); height: 100%;">
                        <div class="d-flex align-items-start mb-3">
                            <div
                                style="min-width: 50px; height: 50px; background: #ffe5e5; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                <i class="fa-solid fa-square-parking" style="color: #d70006; font-size: 22px;"></i>
                            </div>
                            <div>
                                <h4 style="color: #d70006; margin-bottom: 10px;">Confined Space Incidents</h4>
                            </div>
                        </div>
                        <p style="color: #666; line-height: 1.7;">Low-speed impacts in residential complexes or commercial
                            parking facilities often cause alignment damage, broken axles, or fluid leaks that prevent safe
                            operation despite minimal visible exterior damage.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="scenario-card"
                        style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); height: 100%;">
                        <div class="d-flex align-items-start mb-3">
                            <div
                                style="min-width: 50px; height: 50px; background: #ffe5e5; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                <i class="fa-solid fa-road" style="color: #d70006; font-size: 22px;"></i>
                            </div>
                            <div>
                                <h4 style="color: #d70006; margin-bottom: 10px;">Single-Vehicle Scenarios</h4>
                            </div>
                        </div>
                        <p style="color: #666; line-height: 1.7;">Vehicles experiencing control loss due to weather
                            conditions, sudden maneuvers, or road debris may end up immobilized in medians, barriers, or
                            off-road positions requiring specialized extraction techniques.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- WHAT'S INCLUDED SECTION -->
    <section class="whats-included py-120">
        <div class="container">
            <div class="site-heading text-center mb-5">
                <h2 class="site-title">What's Included in Our <span>Accidental Car Recovery Service</span></h2>
                <p style="max-width: 800px; margin: 20px auto 0; color: #666;">Our service is designed for real accident
                    scenarios across Dubai</p>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="included-grid">
                        <div class="included-item">
                            <i class="fa-solid fa-truck-fast"></i>
                            <p>Immediate dispatch for <a class="text-link" target="_blank"
                                    href="{{ route('our-service.ourservice', ['slug' => 'towing-service-dubai']) }}">accident
                                    towing near me</a> requests</p>
                        </div>
                        <div class="included-item">
                            <i class="fa-solid fa-clock"></i>
                            <p>24/7 response for
                                <a class="text-link" href="{{ route('home') }}" target="_blank">
                                    24/7 accident car recovery Dubai
                                </a>
                            </p>
                        </div>
                        <div class="included-item">
                            <i class="fa-solid fa-shield-halved"></i>
                            <p>Safe
                                <a class="text-link" target="_blank"
                                    href="{{ route('our-service.ourservice', ['slug' => 'roadside-assistance-dubai']) }}">accident
                                    roadside assistance and accident recovery Dubai</a>
                            </p>
                        </div>
                        <div class="included-item">
                            <i class="fa-solid fa-truck-ramp-box"></i>
                            <p>
                                <a class="text-link" href="{{ route('home') }}" target="_blank">accident
                                    Flatbed towing
                                </a>
                                for damaged vehicles and recovery after crash
                            </p>
                        </div>
                        <div class="included-item">
                            <i class="fa-solid fa-handshake"></i>
                            <p>Legal coordination with authorities for <a class="text-link">police approved car
                                    recovery</a>
                            </p>
                        </div>
                        <div class="included-item">
                            <i class="fa-solid fa-road"></i>
                            <p>Highway support, including <a class="text-link">highway accident recovery Dubai</a></p>
                        </div>
                        <div class="included-item">
                            <i class="fa-solid fa-gem"></i>
                            <p>High-end handling for <a class="text-link">luxury car accident recovery Dubai</a></p>
                        </div>
                        <div class="included-item">
                            <i class="fa-solid fa-car-burst"></i>
                            <p>Specialist transport for <a class="text-link">sports car towing after accident</a></p>
                        </div>
                        <div class="included-item">
                            <i class="fa-solid fa-file-invoice-dollar"></i>
                            <p>Insurance-friendly process for <a class="text-link">insurance accident towing</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LEGAL COMPLIANCE SECTION -->
    <section class="legal-compliance py-120" style="background: #1a1a1a; color: #fff;">
        <div class="container">
            <div class="site-heading text-center mb-5">
                <p class="content-banner" style="max-width: 800px; margin: 0 auto 0; color: #ccc;">Dubai
                    maintains <span class="text-danger ">strict
                        protocols</span>
                    for accident management to protect motorists, passengers, and other road users. A professional
                    accidental car
                    recovery service provides essential support in three key areas:
                </p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="compliance-block">
                        <div class="compliance-number">1</div>
                        <h4>Mandatory Police Documentation</h4>
                        <ul class="compliance-list">
                            <li>After any collision, whether minor or major, a police report is required</li>
                            <li>Toretto Recovery guides drivers through the process and collects all necessary documentation
                            </li>
                            <li>This prevents fines, disputes, or claim denials</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="compliance-block">
                        <div class="compliance-number">2</div>
                        <h4>Authorized Service Provider Compliance</h4>
                        <ul class="compliance-list">
                            <li>Only RTA-licensed recovery companies are legally allowed to tow accident vehicles</li>
                            <li>Using unauthorized operators can lead to hefty fines and insurance claim issues</li>
                            <li>Our 14+ years of experience means every recovery is fully compliant</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="compliance-block">
                        <div class="compliance-number">3</div>
                        <h4>Scene Safety Protocols</h4>
                        <ul class="compliance-list">
                            <li>Damaged vehicles must not be moved unless there's immediate danger</li>
                            <li>We assess the site and implement traffic management</li>
                            <li>We mitigate hazards like oil spills, debris, or unstable vehicles</li>
                            <li>We document the scene before towing for safety and accountability</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <p style="font-size: 17px; color: #f0f0f0; max-width: 900px; margin: 0 auto;">
                    A licensed accidental car recovery provider in Dubai not only moves your vehicle safely, but also
                    ensures legal compliance, insurance readiness, and scene safety—vital for peace of mind and avoiding
                    penalties.
                </p>
            </div>
        </div>
    </section>

    <!-- RECOVERY METHODOLOGY SECTION -->
    <section class="recovery-methodology py-120" style="background: #f8f9fa;">
        <div class="container">
            <div class="site-heading text-center mb-5">
                <h2 class="site-title">Comprehensive Recovery <span>Methodology</span> – How We Assist as Accidental Car
                    Recovery Providers
                </h2>
                <p style="max-width: 800px; margin: 20px auto 0; color: #666;">At Toretto Recovery, every accidental car
                    recovery Dubai operation follows a systematic, safety-first methodology to ensure your vehicle is
                    handled professionally, safely, and legally.
                </p>
            </div>

            <div class="methodology-timeline">
                <!-- Step 1 -->
                <div class="method-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h4>Scene Assessment</h4>
                        <ul>
                            <li>Our certified technicians evaluate the vehicle’s structural damage, mechanical condition,
                                position, and surrounding hazards.
                            </li>
                            <li>This ensures we select the safest extraction method, determine the right equipment, and
                                anticipate potential complications.
                            </li>
                            <li>Clients searching for car recovery after accident Dubai can trust that every assessment is
                                thorough and documented.</li>
                        </ul>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="method-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h4>Safety Implementation</h4>
                        <ul>
                            <li>We deploy reflective cones, warning triangles, emergency lighting, and traffic management
                                barriers.</li>
                            <li>These measures protect passing motorists, the accident site, and our recovery personnel from
                                secondary collisions.</li>
                            <li>Traffic flow is maintained whenever possible, giving peace of mind to clients needing
                                highway accident recovery Dubai.
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="method-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h4>Extraction Techniques</h4>
                        <div class="extraction-methods">
                            <div class="extraction-card">
                                <h5><i class="fa-solid fa-truck"></i> Flatbed Platform Transport</h5>
                                <ul>
                                    <li>Ideal for luxury cars, severe front-end damage, all-wheel-drive vehicles, and
                                        low-clearance cars.</li>
                                    <li>Prevents drivetrain damage and suspension stress during transport.</li>
                                </ul>
                            </div>
                            <div class="extraction-card">
                                <h5><i class="fa-solid fa-car-side"></i> Wheel-Lift Systems</h5>
                                <ul>
                                    <li>Suitable for minor collisions where the front or rear wheels remain operable.</li>
                                    <li>Offers efficient and cost-effective transport for less-damaged vehicles.</li>
                                </ul>
                            </div>
                            <div class="extraction-card">
                                <h5><i class="fa-solid fa-link"></i> Winch-Assisted Recovery</h5>
                                <ul>
                                    <li>Used for vehicles in ditches, embankments, sandy terrain, or awkward positions.</li>
                                    <li>Ensures safe extraction before loading onto transport platforms, especially for
                                        sports car towing after accident Dubai or off-road incidents.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="method-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h4>Destination Coordination</h4>
                        <p style="margin-bottom: 15px;">Vehicles are delivered according to client preference:</p>
                        <ul>
                            <li>Owner's residence</li>
                            <li>Preferred repair facility</li>
                            <li>Insurance-designated workshops</li>
                            <li>Secure storage facilities</li>
                        </ul>
                        <p style="margin-top: 15px;">This guarantees instant car recovery Dubai meets both convenience and
                            insurance compliance.
                        </p>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="method-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h4>Insurance Documentation</h4>
                        <ul>
                            <li>Our team photographs all damage, records pre-existing conditions, and communicates with
                                insurance adjusters.
                            </li>
                            <li>Detailed transport reports simplify claims and reduce accident recovery cost Dubai disputes.
                            </li>
                            <li>Ensures smooth reimbursement and avoids legal complications for clients.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <div class="alert alert-info"
                    style="background: #d70006; color: #fff; border: none; padding: 20px; border-radius: 10px; max-width: 900px; margin: 0 auto;">
                    <strong><i class="fa-solid fa-circle-check"></i> Summary:</strong> By following this comprehensive
                    recovery methodology, a licensed accidental car recovery provider like Toretto Recovery ensures fast,
                    safe, and fully documented vehicle recovery, meeting Dubai’s legal, safety, and insurance requirements.
                </div>
            </div>
        </div>
    </section>


    <!-- OPERATIONAL CHALLENGES SECTION -->
    <section class="operational-challenges py-120">
        <div class="container">
            <div class="site-heading text-center mb-5">
                <h2 class="site-title">Common Operational <span>Challenges</span> – How Toretto Recovery Helps Clients
                </h2>
                <p style="max-width: 800px; margin: 20px auto 0; color: #666;">At Toretto Recovery, we understand that
                    every
                    accidental car recovery Dubai scenario comes with its own challenges. Our experience, licensing, and RTA
                    approval allow us to provide the best possible assistance in even the most difficult situations:</p>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="challenge-card">
                        <div class="challenge-icon">
                            <i class="fa-solid fa-traffic-light"></i>
                        </div>
                        <h4>Traffic Congestion</h4>
                        <ul>
                            <li>Peak-hour gridlocks on major Dubai roads can delay recovery.
                            </li>
                            <li>Our strategically positioned fleet across key zones ensures fast response, using optimized
                                routing and real-time traffic monitoring to reach clients quickly, even during rush hours.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="challenge-card">
                        <div class="challenge-icon">
                            <i class="fa-solid fa-car-on"></i>
                        </div>
                        <h4>High-Value Vehicle Handling</h4>
                        <ul>
                            <li>Dubai has a high concentration of luxury, exotic, and specialty vehicles.
                            </li>
                            <li>Our operators receive continuous training in soft-strap securing, low-clearance loading, and
                                exotic vehicle handling, preventing scratches, mechanical damage, or system activation.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="challenge-card">
                        <div class="challenge-icon">
                            <i class="fa-solid fa-cloud-rain"></i>
                        </div>
                        <h4>Weather Complications</h4>
                        <ul>
                            <li>Sandstorms reduce visibility and create slippery surfaces, while extreme summer heat can
                                affect hydraulic equipment.
                            </li>
                            <li>Heavy rainfall introduces hydroplaning risks and reduced traction during loading.
                            </li>
                            <li>Toretto Recovery is fully equipped to handle these conditions safely, maintaining fast
                                accident recovery Dubai services without compromising security.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="challenge-card">
                        <div class="challenge-icon">
                            <i class="fa-solid fa-car-burst"></i>
                        </div>
                        <h4>Complex Incident Scenes</h4>
                        <ul>
                            <li>Multi-vehicle collisions demand coordination with emergency services, sequencing of vehicle
                                removal, and sometimes specialized heavy equipment.
                            </li>
                            <li>
                                Our experienced team ensures every vehicle is safely separated, secured, and transported,
                                minimizing risk and delays.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <p style="font-size: 17px; color: #666; max-width: 900px; margin: 0 auto;">
                    <strong>In short:</strong> No matter the challenge—traffic, weather, luxury vehicles, or complex
                    accidents—Toretto Recovery provides fast, safe, and professional accidental car recovery in Dubai,
                    giving clients peace of mind and legal compliance every time.
                </p>
            </div>
        </div>
    </section>

    <!-- COMPREHENSIVE SAFETY & PROFESSIONAL SERVICES SECTION -->
    <section class="safety-professional-services py-120">
        <div class="container">
            <!-- Essential Motorist Safety Guidelines -->
            <div class="safety-subsection mb-5">
                <div class="subsection-header text-center mb-5">
                    <h2 class="site-title">Essential Motorist <span>Safety Guidelines</span></h2>
                    <p style="max-width: 900px; margin: 20px auto 0; color: #666; font-size: 17px;">
                        Following these protocols protects personal safety and legal standing
                    </p>
                </div>
                <div class="step-content">
                    <ul>
                        <li>Maintain emergency contact information including police hotlines and licensed recovery
                            providers;
                            our 24/7 emergency response line connects directly with human operators—never automated
                            systems—ensuring immediate assistance coordination
                        </li>
                        <li>Never attempt relocating severely damaged automobiles; hidden suspension, steering, or brake
                            damage
                            creates catastrophic risks
                        </li>
                        <li>Document incidents thoroughly with photographs from multiple angles showing vehicle positions,
                            damage extent, road conditions, and surrounding environment
                        </li>
                        <li>Deploy hazard lights immediately and position warning triangles at appropriate distances to
                            alert
                            approaching traffic
                        </li>
                        <li>Remain calm, secure personal belongings, exit vehicles safely when possible, and await
                            professional
                            assistance rather than attempting improvised solutions
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Selecting Reliable Professional Services -->
            <div class="professional-services-subsection mb-5">
                <div class="subsection-header text-center mb-5">
                    <h2 class="site-title">Selecting Reliable <span>Professional Services</span></h2>
                    <p style="max-width: 900px; margin: 20px auto 0; color: #666; font-size: 17px;">
                        Critical considerations when choosing recovery providers
                    </p>
                </div>

                <div class="flatbed-coverage-grid">
                    <div class="flatbed-coverage-item">
                        <h4>Regulatory Compliance & Licensing</h4>
                        <p class="flatbed-response-time">Verify full RTA authorization and current certification status.
                            Our 14 years of continuous
                            operation demonstrate unwavering commitment to regulatory compliance and professional
                            standards.</p>
                    </div>

                    <div class="flatbed-coverage-item">
                        <h4>Continuous Availability</h4>
                        <p class="flatbed-response-time">Incidents occur unpredictably across all hours. Our 24/7
                            emergency operations maintain
                            immediate response capabilities throughout the emirate with human-answered hotlines
                            providing instant coordination.</p>
                    </div>

                    <div class="flatbed-coverage-item">
                        <h4>Modern Equipment Fleet</h4>
                        <p class="flatbed-response-time">Comprehensive equipment inventory including the
                            latest-generation flatbed platforms,
                            hydraulic wheel-lift systems, heavy-duty recovery cranes, soft-loading systems for luxury
                            vehicles, and off-road recovery equipment ensures appropriate tools for every scenario.</p>
                    </div>

                    <div class="flatbed-coverage-item">
                        <h4>Insurance Industry Relationships</h4>
                        <p class="flatbed-response-time">Established partnerships with major insurance providers
                            expedite claim processing, reduce
                            administrative burden, and ensure coverage compliance throughout the recovery process.</p>
                    </div>

                    <div class="flatbed-coverage-item">
                        <h4>Rapid Response Capability</h4>
                        <p class="flatbed-response-time">Professional operators target 20-45 minute arrival windows
                            depending on location, traffic
                            conditions, and incident complexity. Our multi-zone fleet positioning optimizes response
                            times across all areas.</p>
                    </div>

                    <div class="flatbed-coverage-item">
                        <h4>Comprehensive Experience</h4>
                        <p class="flatbed-response-time">Our 14-year operational history encompasses thousands of
                            successful recoveries across every
                            imaginable scenario, from routine fender-benders to complex multi-vehicle incidents and
                            challenging environmental extractions.</p>
                    </div>
                </div>
            </div>

            <!-- Comprehensive Service Benefits -->
            <div class="service-benefits-subsection mb-5">
                <div class="subsection-header text-center mb-5">
                    <h2 class="site-title">Comprehensive Service <span>Benefits</span></h2>
                    <p style="max-width: 900px; margin: 20px auto 0; color: #666; font-size: 17px;">
                        <a class="text-link" target="_blank" href="{{ route('home') }}">24/7 Emergency accidental
                            recovery</a> delivers
                        substantial advantages
                    </p>
                </div>

                <div class="benefits-grid">
                    <div class="flatbed-coverage-grid">
                        <div class="flatbed-coverage-item">
                            <div class="flatbed-coverage-icon"> <i class="fa-solid fa-shield-heart"></i></div>
                            <h4>Primary Safety Focus</h4>
                            <p class="flatbed-response-time">Eliminates secondary collision risks while stranded on
                                high-speed roadways, congested
                                intersections, or blind curves where visibility limitations endanger both occupants and
                                passing motorists.</p>
                        </div>

                        <div class="flatbed-coverage-item">
                            <div class="flatbed-coverage-icon"> <i class="fa-solid fa-gavel"></i></div>
                            <h4>Legal Compliance Assurance</h4>
                            <p class="flatbed-response-time">Ensures proper incident documentation, police coordination,
                                and
                                regulatory adherence
                                preventing fines, legal complications, or insurance claim denials.</p>
                        </div>

                        <div class="flatbed-coverage-item">
                            <div class="flatbed-coverage-icon"> <i class="fa-solid fa-car-on"></i></div>
                            <h4>Vehicle Damage Prevention</h4>
                            <p class="flatbed-response-time">Expert handling techniques, appropriate securing methods, and
                                proper loading procedures
                                prevent additional damage during extraction and transport that amateur attempts
                                frequently cause.</p>
                        </div>

                        <div class="flatbed-coverage-item">
                            <div class="flatbed-coverage-icon"> <i class="fa-solid fa-face-smile"></i></div>
                            <h4>Stress Elimination</h4>
                            <p class="flatbed-response-time">Removes physical demands, logistical complexity, and safety
                                concerns associated with
                                disabled vehicle management, allowing focus on personal well-being and administrative
                                requirements.</p>
                        </div>

                        <div class="flatbed-coverage-item">
                            <div class="flatbed-coverage-icon"> <i class="fa-solid fa-house-circle-check"></i></div>
                            <h4>Complete Convenience</h4>
                            <p class="flatbed-response-time">Door-to-door service transports vehicles to specified
                                destinations including residences,
                                preferred repair facilities, or insurance-recommended workshops without owner
                                involvement requirements.</p>
                        </div>

                        <div class="flatbed-coverage-item">
                            <div class="flatbed-coverage-icon"> <i class="fa-solid fa-earth-asia"></i></div>
                            <h4>Universal Coverage</h4>
                            <p class="flatbed-response-time">Recovery capability across all environments from dense urban
                                centers to remote desert
                                highways, including challenging locations requiring specialized equipment or techniques.</p>
                        </div>

                        <div class="flatbed-coverage-item">
                            <div class="flatbed-coverage-icon"> <i class="fa-solid fa-money-bill-transfer"></i></div>
                            <h4>Regulatory Penalty Avoidance</h4>
                            <p class="flatbed-response-time">Prevents substantial fines imposed for unauthorized vehicle
                                abandonment on major
                                thoroughfares or improper incident scene management.</p>
                        </div>

                        <div class="flatbed-coverage-item">
                            <div class="flatbed-coverage-icon"> <i class="fa-solid fa-taxi"></i></div>
                            <h4>Alternative Transportation Coordination</h4>
                            <p class="flatbed-response-time">Assistance arranging taxi services, rental vehicles, or other
                                mobility solutions ensuring
                                continued transportation access during vehicle repairs.</p>
                        </div>

                        <div class="flatbed-coverage-item">
                            <div class="flatbed-coverage-icon"> <i class="fa-solid fa-mountain"></i></div>
                            <h4>Difficult Access Expertise</h4>
                            <p class="flatbed-response-time">Experienced operators successfully extract vehicles from
                                challenging locations including
                                narrow underpasses, confined tunnels, steep embankments, or sandy desert terrain.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Limitations and Constraints -->
            <div class="service-limitations-subsection mb-5"
                style="background: #fff3cd; padding: 40px; border-radius: 15px; border-left: 5px solid #ffc107;">
                <div class="subsection-header text-center mb-4">
                    <h3 style="color: #856404; margin-bottom: 10px;"><i class="fa-solid fa-info-circle"></i> Service
                        Limitations and Constraints</h3>
                    <p style="color: #856404; font-size: 16px; margin: 0;">Transparency regarding potential challenges</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="limitation-item">
                            <h5 style="color: #856404;"><i class="fa-solid fa-clock"></i> Traffic-Induced Delays</h5>
                            <p style="color: #856404; margin: 0;">Despite optimized routing and immediate dispatch, extreme
                                congestion during peak periods may extend arrival times beyond ideal windows, particularly
                                on major arterials experiencing incidents or construction.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <div class="limitation-item">
                            <h5 style="color: #856404;"><i class="fa-solid fa-dollar-sign"></i> Variable Cost Structures
                            </h5>
                            <p style="color: #856404; margin: 0;">Emergency response to remote desert locations,
                                specialized
                                luxury vehicle handling, or complex extraction scenarios may incur premium charges
                                reflecting equipment requirements and operational complexity.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <div class="limitation-item">
                            <h5 style="color: #856404;"><i class="fa-solid fa-cloud-showers-heavy"></i> Weather Impact on
                                Operations</h5>
                            <p style="color: #856404; margin: 0;">Severe sandstorms or heavy rainfall can necessitate
                                delayed recovery for safety reasons, with operations resuming once conditions improve to
                                acceptable risk levels.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <div class="limitation-item">
                            <h5 style="color: #856404;"><i class="fa-solid fa-file-contract"></i> Insurance Coverage
                                Variations</h5>
                            <p style="color: #856404; margin: 0;">Policy terms differ substantially between providers and
                                coverage levels; not all plans reimburse complete recovery expenses, particularly for
                                off-road incidents or non-emergency situations.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Geographic and Environmental Considerations -->
            <div class="geographic-considerations-subsection mb-5">
                <div class="subsection-header text-center mb-5">
                    <h2 class="site-title">Geographic and Environmental <span>Considerations</span></h2>
                    <p style="max-width: 900px; margin: 20px auto 0; color: #666; font-size: 17px;">
                        Different environments present unique operational challenges
                    </p>
                </div>

                <div class="flatbed-coverage-grid">
                    <div class="flatbed-coverage-item">
                        <div class="flatbed-coverage-icon">
                            <i class="fa-solid fa-city"></i>
                        </div>
                        <h4>Dense Urban Areas</h4>
                        <p class="flatbed-response-time">
                            Narrow lanes in Marina, Downtown, and Jumeirah neighborhoods require compact equipment and
                            precise maneuvering. Multi-lane thoroughfares demand sophisticated traffic management and
                            coordination with authorities during peak periods.
                        </p>
                    </div>

                    <div class="flatbed-coverage-item">
                        <div class="flatbed-coverage-icon">
                            <i class="fa-solid fa-road"></i>
                        </div>
                        <h4>High-Speed Highway Systems</h4>
                        <p class="flatbed-response-time">
                            Major arterials feature fast-moving traffic requiring exceptional safety protocols, advanced
                            warning systems, and careful positioning to protect both recovery personnel and passing
                            motorists. Multi-vehicle incidents are statistically more common in these high-speed
                            environments.
                        </p>
                    </div>

                    <div class="flatbed-coverage-item">
                        <div class="flatbed-coverage-icon">
                            <i class="fa-solid fa-hill-rockslide"></i>
                        </div>
                        <h4>Desert and Off-Road Terrain</h4>
                        <p class="flatbed-response-time">
                            Sand, uneven surfaces, and remote locations necessitate specialized equipment including
                            off-road winches, all-terrain recovery vehicles, and operators trained in soft soil
                            conditions. Construction zones and desert routes present unique stabilization challenges.
                        </p>
                    </div>

                    <div class="flatbed-coverage-item">
                        <div class="flatbed-coverage-icon">
                            <i class="fa-solid fa-bridge"></i>
                        </div>
                        <h4>Bridge and Tunnel Infrastructure</h4>
                        <p class="flatbed-response-time">
                            Iconic structures and major underpasses require detailed operational planning, often
                            necessitating coordination with traffic management authorities and temporary lane closures
                            for safe recovery execution.
                        </p>
                    </div>

                    <div class="flatbed-coverage-item">
                        <div class="flatbed-coverage-icon">
                            <i class="fa-solid fa-square-parking"></i>
                        </div>
                        <h4>Parking Facilities</h4>
                        <p class="flatbed-response-time">
                            Tight spaces in multi-story structures and underground car parks demand compact recovery
                            vehicles, careful clearance calculation, and meticulous maneuvering to prevent structural
                            contact or additional vehicle damage.
                        </p>
                    </div>

                </div>

            </div>

            <!-- Specialized Scenario Expertise -->
            <div class="specialized-scenarios-subsection">
                <div class="subsection-header text-center mb-5">
                    <h2 class="site-title">Specialized Scenario <span>Expertise</span></h2>
                    <p style="max-width: 900px; margin: 20px auto 0; color: #666; font-size: 17px;">
                        Our experienced team handles every unique recovery challenge professionally
                    </p>
                </div>

                <div class="flatbed-coverage-grid">
                    <div class="flatbed-coverage-item">
                        <div class="flatbed-coverage-icon">
                            <i class="fa-solid fa-gem"></i>
                        </div>
                        <h4>Multi-Vehicle Collisions</h4>
                        <p class="flatbed-response-time">
                            Complex incidents require police coordination, insurance adjuster communication, systematic
                            vehicle removal sequencing, and often multiple recovery units working in coordinated fashion.
                        </p>
                    </div>

                    <div class="flatbed-coverage-item">
                        <div class="flatbed-coverage-icon">
                            <i class="fa-solid fa-gem"></i>
                        </div>
                        <h4>Luxury and Exotic Automobiles</h4>
                        <p class="flatbed-response-time">
                            High-value vehicles demand extra precautions including soft-strap securing, enclosed
                            transport options, specialist loading techniques, and technicians trained in preventing
                            scratches, mechanical damage, or inadvertent safety system deployment.
                        </p>
                    </div>

                    <div class="flatbed-coverage-item">
                        <div class="flatbed-coverage-icon">
                            <i class="fa-solid fa-moon"></i>
                        </div>
                        <h4>Night-Time Operations</h4>
                        <p class="flatbed-response-time">
                            Darkness necessitates high-visibility equipment setups, powerful LED warning systems,
                            reflective personnel gear, and enhanced communication with traffic authorities to ensure
                            adequate motorist alerting.
                        </p>
                    </div>

                    <div class="flatbed-coverage-item">
                        <div class="flatbed-coverage-icon">
                            <i class="fa-solid fa-route"></i>
                        </div>
                        <h4>Remote Highway Incidents</h4>
                        <p class="flatbed-response-time">
                            Desert highway scenarios may require recovery trucks equipped specifically for sand and
                            uneven terrain challenges, extended-range fuel capacity, and communication equipment for
                            areas with limited cellular coverage.
                        </p>
                    </div>

                    <div class="flatbed-coverage-item">
                        <div class="flatbed-coverage-icon">
                            <i class="fa-solid fa-cloud-rain"></i>
                        </div>
                        <h4>Weather-Related Accidents</h4>
                        <p class="flatbed-response-time">
                            Wet surfaces, reduced visibility, or sandstorm conditions demand enhanced operator skill,
                            modified securing techniques, and sometimes staged recovery with initial stabilization
                            followed by transport once conditions improve.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- MODERN FEATURES SECTION -->
    <section class="modern-features py-120" style="background: #1a1a1a; color: #fff;">
        <div class="container">
            <div class="site-heading text-center mb-5">
                <h2 class="site-title" style="color: #fff;">Modern Convenience <span>Features</span> – How Toretto
                    Recovery
                    Supports Clients
                </h2>
                <p style="max-width: 800px; margin: 20px auto 0; color: #ccc;">As an experienced, licensed, and
                    RTA-approved
                    provider, Toretto Recovery integrates modern technology and customer-focused processes to make
                    accidental car recovery in Dubai as smooth and stress-free as possible.
                </p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-modern-card">
                        <div class="feature-icon-modern">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <h4>Real-Time Location Tracking</h4>
                        <p>Clients can track the recovery vehicle in real time through hotline updates, receiving accurate
                            ETAs and location progress. This transparency reduces anxiety after an accident and supports
                            better on-scene decision-making, especially during emergency recovery or highway incidents.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-modern-card">
                        <div class="feature-icon-modern">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </div>
                        <h4>Flexible Delivery Options</h4>
                        <p>We deliver vehicles exactly where clients need them—home, preferred independent garages,
                            dealership service centers, or insurance-approved workshops. This flexibility ensures recovery
                            aligns with personal preferences, warranty conditions, and insurance coverage requirements.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-modern-card">
                        <div class="feature-icon-modern">
                            <i class="fa-solid fa-dollar-sign"></i>
                        </div>
                        <h4>Transparent Pricing Structure</h4>
                        <p>Clear, upfront pricing includes towing distance, equipment needs, after-hours service, and any
                            special handling. There are no hidden charges, helping clients make confident decisions during
                            stressful situations without fear of surprise costs.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-modern-card">
                        <div class="feature-icon-modern">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <h4>Comprehensive Support</h4>
                        <p>Beyond towing, our team assists with insurance claim navigation, police report requirements,
                            rental vehicle coordination, and repair facility selection—saving clients time and preventing
                            costly mistakes.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-modern-card">
                        <div class="feature-icon-modern">
                            <i class="fa-solid fa-wrench"></i>
                        </div>
                        <h4>Multi-Scenario Capability</h4>
                        <p>Our equipment and expertise handle everything from minor parking-lot accidents to severe highway
                            collisions, mechanical breakdowns, and complex environmental extractions—ensuring one reliable
                            solution for every recovery scenario.
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <p style="font-size: 17px; color: #f0f0f0; max-width: 900px; margin: 0 auto;">
                    <strong>Result:</strong>With these modern convenience features, Toretto Recovery delivers fast,
                    transparent, and fully supported accident recovery—giving clients confidence, clarity, and peace of mind
                    when they need it most.
                </p>
            </div>
        </div>
    </section>

    <section class="why-choose-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="site-title">Why Choose <span>Toretto Recovery</span></h2>
                <p style="max-width: 800px; margin: 20px auto 0; color: #666; font-size: 17px;">
                    Choosing the right accident recovery company Dubai can make a stressful situation easier—or worse.
                    Here's why locals trust us:
                </p>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="trust-factor-card">
                        <div class="trust-icon">
                            <i class="fa-solid fa-check-circle"></i>
                        </div>
                        <div class="trust-content">
                            <h4>10+ years of hands-on recovery experience in Dubai</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="trust-factor-card">
                        <div class="trust-icon">
                            <i class="fa-solid fa-check-circle"></i>
                        </div>
                        <div class="trust-content">
                            <h4>Trained, licensed recovery operators</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="trust-factor-card">
                        <div class="trust-icon">
                            <i class="fa-solid fa-check-circle"></i>
                        </div>
                        <div class="trust-content">
                            <h4>Modern flatbed trucks and safety equipment</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="trust-factor-card">
                        <div class="trust-icon">
                            <i class="fa-solid fa-check-circle"></i>
                        </div>
                        <div class="trust-content">
                            <h4>Proven expertise in fast accident recovery Dubai and instant car recovery Dubai</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="trust-factor-card">
                        <div class="trust-icon">
                            <i class="fa-solid fa-check-circle"></i>
                        </div>
                        <div class="trust-content">
                            <h4>Careful handling for premium vehicles</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="trust-factor-card">
                        <div class="trust-icon">
                            <i class="fa-solid fa-check-circle"></i>
                        </div>
                        <div class="trust-content">
                            <h4>Transparent pricing and honest guidance</h4>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <div class="trust-factor-card trust-factor-featured">
                        <div class="trust-icon">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="trust-content">
                            <h4>Rated by customers as one of the best accident car recovery Dubai providers</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="service-areas-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="site-title">Service Areas We Cover in <span>Dubai</span></h2>
                <p style="max-width: 900px; margin: 20px auto 0; color: #666; font-size: 17px;">
                    At Toretto Recovery, we provide fast and reliable accidental car recovery in Dubai across the entire
                    emirate. Our recovery units are strategically positioned to ensure quick response times, whether you’re
                    involved in an accident on a busy highway, residential street, or commercial district.
                </p>
            </div>

            <h2 style="font-size: 16px;">We proudly serve all major Dubai locations, including:
            </h2>
            <div class="locations-grid">
                <div class="location-badge">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Sheikh Zayed Road</span>
                </div>
                <div class="location-badge">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Dubai Marina</span>
                </div>
                <div class="location-badge">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Business Bay</span>
                </div>
                <div class="location-badge">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Downtown Dubai</span>
                </div>
                <div class="location-badge">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Jumeirah & JBR</span>
                </div>
                <div class="location-badge">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Al Barsha (1, 2 & South)</span>
                </div>
                <div class="location-badge">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Jumeirah Village Circle (JVC)</span>
                </div>
                <div class="location-badge">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Jumeirah Village Triangle (JVT)</span>
                </div>
                <div class="location-badge">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Palm Jumeirah</span>
                </div>
                <div class="location-badge">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Al Quoz (Industrial & Residential)</span>
                </div>
                <div class="location-badge">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Deira & Bur Dubai</span>
                </div>
                <div class="location-badge">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Karama & Oud Metha</span>
                </div>
                <div class="location-badge">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Dubai Investment Park (DIP)</span>
                </div>
                <div class="location-badge">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Dubai Silicon Oasis</span>
                </div>
                <div class="location-badge">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>International City</span>
                </div>
                <div class="location-badge">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Ras Al Khor & Nad Al Sheba</span>
                </div>
            </div>

            <div class="text-center mt-5">
                <p style="max-width: 900px; margin: 0 auto; color: #666; font-size: 16px; line-height: 1.8;">
                    We also cover all surrounding neighborhoods, highways, and service roads across Dubai, ensuring
                    dependable support whenever and wherever an accident occurs.<br><br>
                    Whether you're searching for <strong>accident towing near me</strong>, <strong>emergency accident
                        recovery</strong>, or <strong>24/7 car recovery in Dubai</strong>, Toretto Recovery is always nearby
                    and ready to help.
                </p>
            </div>
        </div>
    </section>


    <section class="faq-section-new py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="site-title">Frequently Asked <span>Questions</span></h2>
            </div>

            <div class="faq-accordion">
                <div class="faq-item">
                    <button class="faq-question-new">
                        <span class="faq-number">01</span>
                        <span class="faq-text">How quickly can you respond to accident scenes?</span>
                        <i class="fa-solid fa-chevron-down faq-arrow"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Our strategically positioned fleet across multiple zones enables 20-45 minute response times for
                            most locations under normal traffic conditions. Emergency situations receive priority dispatch
                            with real-time traffic monitoring to optimize routing.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question-new">
                        <span class="faq-number">02</span>
                        <span class="faq-text">Are your services available throughout the entire emirate?</span>
                        <i class="fa-solid fa-chevron-down faq-arrow"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Yes, our comprehensive coverage extends across all urban areas, highway systems, desert routes,
                            and remote locations. Our 24/7 operations ensure assistance availability regardless of time or
                            location.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question-new">
                        <span class="faq-number">03</span>
                        <span class="faq-text">What types of vehicles can you recover?</span>
                        <i class="fa-solid fa-chevron-down faq-arrow"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Our diverse equipment fleet handles everything from compact sedans to large SUVs, luxury
                            vehicles, exotic sports cars, and commercial vehicles. Specialized equipment ensures appropriate
                            handling for each vehicle category.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question-new">
                        <span class="faq-number">04</span>
                        <span class="faq-text">Will recovery damage my vehicle further?</span>
                        <i class="fa-solid fa-chevron-down faq-arrow"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Professional recovery using proper equipment and techniques prevents additional damage. Our
                            operators receive continuous training in vehicle-specific handling, and we utilize soft-straps,
                            flatbed transport, and specialized securing methods protecting your automobile throughout the
                            process.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question-new">
                        <span class="faq-number">05</span>
                        <span class="faq-text">Do you coordinate with insurance companies?</span>
                        <i class="fa-solid fa-chevron-down faq-arrow"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Yes, we maintain established relationships with major insurance providers and assist with claim
                            documentation, damage photography, transport reporting, and direct communication with adjusters
                            to streamline your reimbursement process.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question-new">
                        <span class="faq-number">06</span>
                        <span class="faq-text">What if my accident occurs in a difficult location?</span>
                        <i class="fa-solid fa-chevron-down faq-arrow"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Our experienced operators and specialized equipment handle challenging extractions from
                            embankments, sandy terrain, narrow underpasses, confined tunnels, and multi-story parking
                            structures. Fourteen years of experience ensures we've encountered virtually every scenario.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question-new">
                        <span class="faq-number">07</span>
                        <span class="faq-text">Are there additional charges for night-time or remote recovery?</span>
                        <i class="fa-solid fa-chevron-down faq-arrow"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Pricing varies based on location, time, vehicle type, and scenario complexity. We provide
                            transparent cost estimates before initiating services, ensuring you understand all charges
                            without surprise fees.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question-new">
                        <span class="faq-number">08</span>
                        <span class="faq-text">What should I do while waiting for recovery?</span>
                        <i class="fa-solid fa-chevron-down faq-arrow"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Activate hazard lights, deploy warning triangles if safe, document the scene with photographs,
                            remain in a safe location away from traffic, and avoid attempting to move severely damaged
                            vehicles. Our operators provide additional guidance when you call.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question-new">
                        <span class="faq-number">09</span>
                        <span class="faq-text">How do I know you're properly licensed?</span>
                        <i class="fa-solid fa-chevron-down faq-arrow"></i>
                    </button>
                    <div class="faq-answer">
                        <p>We maintain full RTA authorization with continuous compliance verification. Our 14-year
                            operational history demonstrates consistent adherence to regulatory standards and professional
                            certification requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question-new">
                        <span class="faq-number">10</span>
                        <span class="faq-text">Can you transport my vehicle to any repair facility?</span>
                        <i class="fa-solid fa-chevron-down faq-arrow"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Yes, we provide flexible destination delivery including your residence, preferred independent
                            garages, dealership service centers, or insurance-designated repair facilities based on your
                            specifications and coverage requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="author-section py-5">
        <div class="container">
            <div class="author-card">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                        <div class="author-image">
                            <div class="author-placeholder">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="author-content">
                            <div class="author-header mb-3">
                                <h3>Ahmed Al-Mansouri</h3>
                                <p class="author-title">Senior Recovery Operations Director</p>
                            </div>

                            <p class="author-bio">
                                With 14 years of dedicated experience in emergency vehicle recovery operations, Ahmed
                                Al-Mansouri has overseen thousands of successful accident recoveries across every
                                environment and scenario imaginable. His comprehensive expertise spans luxury vehicle
                                handling, complex multi-vehicle incident coordination, challenging environmental
                                extractions, and regulatory compliance management.
                            </p>

                            <p class="author-bio">
                                Ahmed's commitment to operational excellence has established industry-leading safety
                                standards and customer satisfaction benchmarks. His hands-on approach ensures every team
                                member receives continuous training in latest recovery techniques, equipment operation, and
                                customer service protocols.
                            </p>

                            <p class="author-bio">
                                Throughout his career, Ahmed has maintained unwavering focus on three core principles:
                                motorist safety, vehicle protection, and professional integrity. His extensive knowledge of
                                emirate roadways, traffic patterns, and environmental challenges enables optimized response
                                strategies that minimize recovery times while maximizing safety outcomes.
                            </p>

                            <div class="author-quote">
                                <div class="quote-icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p>
                                    "Every vehicle owner deserves professional assistance during their most stressful
                                    moments. Our mission extends beyond simple towing—we provide comprehensive support
                                    ensuring legal compliance, insurance coordination, and peace of mind throughout the
                                    entire recovery process. When you need us most, we're already on our way."
                                </p>
                            </div>

                            <p class="author-bio mb-0">
                                Ahmed's leadership has guided our organization through continuous growth while maintaining
                                the personalized service and attention to detail that established our reputation as the
                                emirate's most trusted recovery provider.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <link rel="stylesheet" href="{{ asset('assets/css/accidental-car.css') }}?v={{ filemtime(public_path('assets/css/accidental-car.css')) }}">
    <script>
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
    </script>
@endsection
