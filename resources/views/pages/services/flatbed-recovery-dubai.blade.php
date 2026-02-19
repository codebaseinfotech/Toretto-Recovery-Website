@extends('layouts.main')

@section('title')
    24/7 Emergency Damage-Free Flatbed Recovery Dubai | 15-Min Response
@endsection

@section('meta_description')
    Expert flatbed recovery across Dubai. Zero-damage transport for luxury, sports & AWD vehicles. RTA-licensed, 24/7
    available. Average 17-min response.
@endsection

@section('meta_keywords',
    'flatbed recovery dubai, car transport dubai, flatbed towing, luxury car recovery, damage-free
    vehicle transport')

@section('schema')
    @verbatim
        <script type="application/ld+json">
        {
  "@context": "https://schema.org",
  "@type": "AutoRepair",
  "name": "Toretto Recovery - Flatbed Vehicle Recovery Services",
  "image": "https://torettorecovery.ae/images/flatbed-recovery-service.jpg",
  "@id": "https://torettorecovery.ae/flatbed-recovery-dubai",
  "url": "https://torettorecovery.ae/flatbed-recovery-dubai",
  "telephone": "+971 523003423",
  "priceRange": "AED 300 - AED 1500",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "
274 Street - Dubai Investment Park - 2 - Dubai
",
    "addressLocality": "Dubai",
    "addressRegion": "Dubai",
    "postalCode": "00000",
    "addressCountry": "AE"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 25.2048,
    "longitude": 55.2708
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
  "sameAs": [
    "https://www.facebook.com/torettorecovery",
    "https://www.instagram.com/torettorecovery",
    "https://twitter.com/torettorecovery"
  ],
  "areaServed": [
    {
      "@type": "City",
      "name": "Dubai"
    },
    {
      "@type": "City",
      "name": "Sharjah"
    },
    {
      "@type": "City",
      "name": "Abu Dhabi"
    },
    {
      "@type": "State",
      "name": "United Arab Emirates"
    }
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Flatbed Recovery Services",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Emergency Flatbed Recovery",
          "description": "24/7 emergency flatbed vehicle recovery with average 15-20 minute response time"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Luxury Vehicle Flatbed Transport",
          "description": "Specialized flatbed recovery for luxury and sports cars with damage-free guarantee"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "AWD/4WD Vehicle Recovery",
          "description": "Manufacturer-approved flatbed recovery for all-wheel and four-wheel drive vehicles"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Electric Vehicle Transport",
          "description": "EV-specific flatbed recovery following manufacturer protocols"
        }
      }
    ]
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "247"
  }
},{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Flatbed Vehicle Recovery",
  "provider": {
    "@type": "AutoRepair",
    "name": "Toretto Recovery",
    "telephone": "+971 523003423",
    "url": "https://torettorecovery.ae"
  },
  "areaServed": {
    "@type": "City",
    "name": "Dubai",
    "containedIn": {
      "@type": "Country",
      "name": "United Arab Emirates"
    }
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Flatbed Recovery Services",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "24/7 Emergency Flatbed Recovery"
        }
      }
    ]
  },
  "offers": {
    "@type": "Offer",
    "priceRange": "AED 300 - AED 1500",
    "priceCurrency": "AED",
    "availability": "https://schema.org/InStock",
    "availableAtOrFrom": {
      "@type": "Place",
      "name": "Dubai, UAE"
    }
  }
},{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How much does flatbed recovery cost in the UAE?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Pricing typically starts around AED 300-400 for short-distance recovery within central areas, increasing based on distance traveled and vehicle specifications. Premium vehicles requiring specialized handling may include additional fees which we explain upfront. Many insurance policies cover recovery costs."
      }
    },
    {
      "@type": "Question",
      "name": "How long does flatbed recovery take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Response time averages 15-35 minutes depending on your location and current traffic conditions. Loading and securing your vehicle takes 8-12 minutes once we arrive. Total time from call to delivery at a nearby service center is typically 45-60 minutes for breakdowns in central areas."
      }
    },
    {
      "@type": "Question",
      "name": "Can flatbed recovery damage my vehicle?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "When performed correctly by trained specialists, flatbed recovery is the safest transport method available. We've performed thousands of flatbed recoveries without causing damage because we follow correct procedures consistently using proper equipment, soft-strap securing, and manufacturer-specified attachment points."
      }
    },
    {
      "@type": "Question",
      "name": "Do you handle exotic and luxury cars?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely. High-end vehicles are exactly what our flatbed service was designed to protect. We've successfully recovered Ferraris, Lamborghinis, Rolls-Royces, Bentleys, and virtually every luxury marque available. Our operators understand specialized requirements and use soft-strap securing, protective padding, and careful loading procedures."
      }
    },
    {
      "@type": "Question",
      "name": "What if my car is extremely low or modified?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Lowered vehicles are one of the primary reasons flatbed recovery exists. Our hydraulic tilt system creates approach angles as shallow as 8-10 degrees, accommodating vehicles with minimal ground clearance. We've successfully loaded cars sitting less than 80mm off the ground without any contact."
      }
    },
    {
      "@type": "Question",
      "name": "Will insurance cover flatbed recovery costs?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Many comprehensive insurance policies include recovery coverage. Policies for high-value automobiles often require flatbed transport and will deny claims if damage occurs during improper recovery. We work directly with insurance providers, submitting required documentation and coordinating approved service."
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

    <section class="site-breadcrumb contact-section"
        style="background: url('{{ asset('assets/images/flatbed-vehicle-recovery-dubai.png') }}');">

        <div class="container">
            <div class="row align-items-center min-vh-75">

                <!-- LEFT CONTENT -->
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="contact-img text-white">

                        <h1 class="breadcrumb-title">
                            <span>Flatbed Vehicle Recovery Services in Dubai – Safe, Professional Transport 24/7</span>
                        </h1>

                        <ul class="breadcrumb-menu">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                                <i class="fa fa-angle-double-right"></i>
                            </li>
                            <li class="active">Flatbed Vehicle Recovery</li>
                        </ul>

                        <p class="mt-3">
                            Stuck in Dubai traffic or facing a breakdown? Our 24/7 flatbed recovery team gets you back
                            safely to your destination — fast, fully insured, and damage-free.
                        </p>

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

                            <input type="hidden" name="type" value="Vehicle Recovery in Dubai Inquiry">

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

    <section>
        <div class="container">
            <div class="flatbed-intro-content">
                <div>
                    <div class="flatbed-intro-content mt-4">
                        <h1 class="flatbed-lead-text"> When your vehicle can't move, every second matters — and so does
                            how it's handled. </h1>
                        <p> A standard tow truck can cause hidden drivetrain damage, scrape low-clearance bumpers, or
                            void warranties. That's why Dubai drivers choose professional flatbed recovery — where your
                            vehicle stays fully lifted, fully protected, and fully insured from pickup to delivery. </p>
                        <p> At <a href="{{ route('home') }}" class="flatbed-route">Toretto Recovery</a>, we specialize
                            in
                            damage-free flatbed transport across
                            Dubai — for luxury cars, sports vehicles, EVs, AWD/4WD systems, and <a
                                href="{{ route('our-service.ourservice', ['slug' => 'accidental-car-recovery-dubai']) }}"
                                class="flatbed-route">
                                accident recovery
                            </a>
                    </div>
                </div>
                <div class="flatbed-benefits-grid">
                    <div class="flatbed-benefit-item"> <i class="fas fa-shield-alt"></i>
                        <h4>No dragging</h4>
                    </div>
                    <div class="flatbed-benefit-item"> <i class="fas fa-car-crash"></i>
                        <h4>No roadside risks</h4>
                    </div>
                    <div class="flatbed-benefit-item"> <i class="fas fa-tachometer-alt"></i>
                        <h4>No unnecessary mileage</h4>
                    </div>
                </div>
                <p class="flatbed-highlight-text"> Only precision loading, secure transport, and safe delivery — every time.
                </p>
                <ul class="flatbed-features-list">
                    <li><i class="fas fa-check-circle"></i> RTA Licensed & Fully Insured</li>
                    <li><i class="fas fa-check-circle"></i> 24/7<a
                            href="{{ route('our-service.ourservice', ['slug' => 'roadside-assistance-dubai.blade']) }}"
                            class="flatbed-route">Emergency
                            Response Across Dubai</a></li>
                    <li><i class="fas fa-check-circle"></i> Average arrival time in Downtown & Business Bay: 15–20 minutes
                    </li>
                </ul>
            </div>

    </section>

    <!-- WHAT MAKES DIFFERENT SECTION -->
    <section class="flatbed-difference-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/accident-recovery-by-flatbed.jpg') }}"
                                alt="Flatbed Recovery Service Dubai">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="flatbed-section-heading mt-4">What Makes Flatbed Recovery Different</h2>
                    <div class="flatbed-difference-content">
                        <p>
                            Think about how traditional towing works: your vehicle gets hooked up with two wheels lifted off
                            the ground while the other two drag along the pavement. The drivetrain stays partially engaged.
                            Your car tilts at an angle through traffic. Every pothole sends shocks through components that
                            weren't designed for this kind of stress.
                        </p>
                        <p style="font-size: 19px; font-weight: 600; color: #e10600; margin: 25px 0;">
                            Now picture something completely different.
                        </p>
                        <p>
                            A solid steel platform lowers hydraulically to street level, creating a gentle ramp. Your
                            vehicle drives on, gets winched aboard, or rolls into position. Then it sits completely flat and
                            stable—all four wheels resting naturally, exactly as if parked in your garage.
                        <p>
                            During <a href="{{ route('our-service.ourservice', ['slug' => 'towing-service-dubai']) }}"
                                class="text-danger"
                                style="font-size: 19px; font-weight: 600; color: #e10600; margin: 25px 0;">transport across
                                the city</a>, nothing drags. Nothing scrapes. The suspension sits neutral. The drivetrain
                            stays disengaged. Low-clearance components never touch pavement.
                        </p>
                        <p class="flatbed-emphasis-text">
                            This is flatbed recovery, and for anyone who owns a vehicle they actually care about, it's the
                            only method that makes sense.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROBLEMS VS SOLUTIONS TABLE -->
    <section class="flatbed-problems-section">
        <div class="container">
            <h2 class="flatbed-section-heading">Common Problems Drivers Face vs. How We Solve Them</h2>

            <div class="table-responsive">
                <table class="risk-table">
                    <thead>
                        <tr>
                            <th>Your Problem</th>
                            <th>Pain Point You Experience</th>
                            <th>Our Solution</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Breakdown on E11 during peak traffic</strong></td>
                            <td>Stuck in fast-moving lanes with cars passing at 120+ km/h. Fear of secondary accidents.
                                Don't know how long you'll wait exposed to danger.</td>
                            <td>Strategic positioning across the emirate ensures 15-20 minute arrival in central zones.
                                Operators trained in high-speed highway safety protocols. Traffic coordination to create
                                safe work zones.</td>
                        </tr>
                        <tr>
                            <td><strong>Luxury SUV won't start in extreme heat</strong></td>
                            <td>Worried traditional towing will damage AWD system. Concerned about voiding manufacturer
                                warranty. Unsure if recovery operator understands your vehicle's value.</td>
                            <td>All-wheel-drive systems remain completely inactive on flatbed. Zero drivetrain engagement
                                eliminates transmission damage risk. Manufacturer-approved methods protect your warranty.
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Sports car sits too low for standard recovery</strong></td>
                            <td>Front splitter costs AED 8,000+ to replace. Standard ramps create approach angles that
                                guarantee scraping. Previous towing experience left damage you're still upset about.</td>
                            <td>Hydraulic tilt creates 8-10 degree approach angles. Successfully load vehicles with 80mm
                                clearance without contact. Operators trained specifically on exotic and performance
                                automobiles.</td>
                        </tr>
                        <tr>
                            <td><strong>Accident on Umm Suqeim Road, car undriveable</strong></td>
                            <td>Already shaken from collision. Now stressed about getting vehicle moved. Insurance claim
                                process feels overwhelming. Need documentation but don't know what to collect.</td>
                            <td>Comprehensive photo documentation from multiple angles. Complete paperwork for insurance
                                filing. Direct coordination with assessment facilities. Walk you through claims process
                                requirements.</td>
                        </tr>
                        <tr>
                            <td><strong>Classic Mercedes needs transport between storage locations</strong></td>
                            <td>Vehicle hasn't been driven in months. Tires are aged, fluids old. Any scratch destroys value
                                you've spent years building. Can't risk damage from careless handling.</td>
                            <td>Soft-strap securing at proper frame points only. Ultra-clean flatbed deck inspection before
                                loading. Minimal-stress transport treating your classic like the investment it represents.
                                Climate-controlled options for extreme weather protection.</td>
                        </tr>
                        <tr>
                            <td><strong>Electric vehicle battery depleted completely</strong></td>
                            <td>Tesla manual says "flatbed only" but unsure why. Worried about damaging expensive battery
                                systems. Service center is 60km away. Traditional towing might void warranty.</td>
                            <td>EV-specific protocols prevent motor rotation during transport. Battery management systems
                                remain protected. Manufacturer guidelines followed exactly. Warranty protection guaranteed
                                through approved methods.</td>
                        </tr>
                        <tr>
                            <td><strong>Broke down in Jebel Ali industrial area late night</strong></td>
                            <td>It's 2 AM and you're in a remote location. Concerned about safety waiting alone. Worried no
                                one will come at this hour. Don't know if your insurance covers night service.</td>
                            <td>True 24/7 operations, not answering service. Night response identical to daytime standards.
                                Operators equipped with satellite communication for remote areas. Direct insurance
                                coordination to clarify coverage.</td>
                        </tr>
                        <tr>
                            <td><strong>Modified car with custom body kit lowered significantly</strong></td>
                            <td>Spent AED 15,000 on custom aerodynamics. Standard recovery destroyed friend's similar setup.
                                Body shop says repairs take 6 weeks minimum. Can't find recovery service that understands
                                modifications.</td>
                            <td>Pre-coordination to understand specific clearances and modifications. Custom loading
                                procedures for heavily modified vehicles. Experience with show cars, track cars, and custom
                                builds. Additional protective padding for delicate components.</td>
                        </tr>
                        <tr>
                            <td><strong>Overheating on Al Khail Road, coolant everywhere</strong></td>
                            <td>Engine temperature redlined. Smoke coming from hood. Don't know if it's safe to keep
                                running. Afraid of causing permanent engine damage if driven further.</td>
                            <td>Immediate assessment of drivability vs. transport need. On-site coolant provision if minor
                                issue allows driving. Flatbed recovery if engine damage risk exists. Transport directly to
                                your preferred workshop or dealer.</td>
                        </tr>
                        <tr>
                            <td><strong>Purchased vehicle in Abu Dhabi, need it brought home</strong></td>
                            <td>Seller won't let you drive it off the lot. Insurance doesn't activate until tomorrow.
                                Vehicle is pristine and you want it to stay that way. Need reliable inter-emirate transport.
                            </td>
                            <td>Long-distance flatbed transport across all seven emirates. Route planning for safest,
                                smoothest highways. Real-time GPS tracking so you monitor progress. Scheduled pickup
                                coordinating with seller's timing.</td>
                        </tr>
                        <tr>
                            <td><strong>Ran out of fuel on E311, miles from any station
                                </strong>
                            </td>
                            <td>Fuel gauge failed without warning. Nearest station is 8km away. Walking in 45°C heat isn't
                                safe. Concerned about contamination if you carry fuel yourself.
                            </td>
                            <td>Emergency fuel delivery directly to your location. High-octane options for performance
                                engines. Diesel and petrol availability. If you prefer, flatbed to nearest station instead
                                of on-road refueling.
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Transmission failure near Motor City
                                </strong>
                            </td>
                            <td>Grinding noises then complete loss of movement. Car won't shift into any gear. Located in
                                residential area with narrow streets. Worried recovery truck can't navigate tight spaces.
                            </td>
                            <td>Compact flatbed units for residential area access. Operators experienced in tight
                                maneuvering. Transmission failure requires flatbed—no question. Transport to transmission
                                specialist or dealer as you prefer.
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Post-flood water damage, engine won't turn over
                                </strong>
                            </td>
                            <td>Drove through standing water during rare heavy rain. Engine hydrolocked and seized.
                                Concerned about internal damage. Need transport to workshop for teardown inspection.
                            </td>
                            <td>Understanding of water damage recovery requirements. Photos documenting water line on
                                vehicle. No attempt to start which could worsen damage. Insurance documentation supporting
                                flood damage claim.
                            </td>
                        </tr>
                        <tr>
                            <td><strong> <a
                                        href="{{ route('our-service.ourservice', ['slug' => 'desert-pull-out-service-dubai']) }}"
                                        class="text-success"
                                        style="font-size: 16px; font-weight: 600; color: #e10600; margin: 25px 0;">Stuck in
                                        desert near</a> Big Red during weekend safari
                                </strong>
                            </td>
                            <td>Vehicle buried to the axles in soft sand. Located 30km from paved roads. Mobile signal is
                                intermittent. Tried digging but vehicle sinks deeper.
                            </td>
                            <td>Off-road extraction specialists with heavy-duty winches. Sand recovery boards and proper
                                anchoring equipment. Coordinate GPS location despite poor signal. Flatbed recovery once
                                extracted to accessible area.
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Brake failure while driving, managed to stop safely
                                </strong>
                            </td>
                            <td>Brake pedal went to floor with no pressure. Used emergency brake and engine braking to stop.
                                Absolutely cannot drive vehicle. Located on Jumeirah Beach Road in moderate traffic.
                            </td>
                            <td>Understanding of brake system failures and safety protocols. Vehicle cannot be towed with
                                wheels on ground safely. Flatbed ensures no brake operation needed during transport.
                                Priority response for safety-critical mechanical failures.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- WHEN YOU NEED FLATBED SECTION -->
    <section class="flatbed-when-needed-section">
        <!-- Hero Image Section with Split Layout -->
        <h1 class="flatbed-hero-title">When Your Vehicle Needs Flatbed Recovery</h2>
            <div class="flatbed-hero-split">

                <div class="flatbed-hero-image">
                    <img src="{{ asset('assets/images/flatbed-truck-near-me.jpg') }}" alt="Flatbed Recovery Truck Dubai">
                    <div class="flatbed-hero-overlay"></div>
                </div>
                <div class="flatbed-hero-content">
                    <div class="flatbed-scenario-icon">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <h3 class="flatbed-scenario-header">Complete Mechanical Breakdown</h3>
                    <p>
                        Your engine seized on Al Khail Road. The transmission gave out near Dubai Marina. Electrical
                        systems
                        died completely, leaving you without power, lights, or any functionality.
                    </p>
                    <p class="mb-4">
                        When a vehicle won't move under its own power, flatbed recovery turns a complicated problem
                        into
                        a
                        straightforward solution. We load it safely using our winch system and transport it wherever
                        you
                        need—your preferred workshop, the dealer service center, or even your home garage.
                    </p>
                    <p class="flatbed-scenario-highlight">
                        No struggling with dead weight. No additional mechanical stress. Just safe, professional
                        transport
                        from breakdown location to destination.
                    </p>
                </div>
            </div>

            <!-- Scenarios Grid -->
            <div class="container">
                <div class="flatbed-scenarios-wrapper">
                    <div class="flatbed-scenarios-grid">
                        <div class="flatbed-scenario-card">
                            <div class="flatbed-scenario-icon">
                                <i class="fas fa-car-crash"></i>
                            </div>
                            <h3>After Accidents</h3>
                            <p>
                                Vehicle collisions already involve enough stress—dealing with insurance, assessing damage,
                                and
                                managing the aftermath of what might have been a frightening experience.
                            </p>
                            <p>
                                The damaged vehicle needs moving, but traditional towing risks making existing damage worse.
                                Compromised suspension, bent wheels, or structural damage require careful handling that
                                basic
                                recovery services simply don't provide.
                            </p>
                            <p class="flatbed-scenario-highlight">
                                Our flatbed approach means we load your accident-damaged vehicle without adding new
                                scratches,
                                scrapes, or mechanical problems. We photograph everything thoroughly—documentation that
                                proves
                                valuable when filing insurance claims.
                            </p>
                        </div>

                        <div class="flatbed-scenario-card">
                            <div class="flatbed-scenario-icon">
                                <i class="fas fa-cog"></i>
                            </div>
                            <h3>All-Wheel Drive and Four-Wheel Drive Vehicles</h3>
                            <p>
                                This is where traditional towing methods become genuinely risky for owners of AWD and 4WD
                                vehicles—which includes most luxury SUVs sold here.
                            </p>
                            <p>
                                Your Range Rover, Porsche Cayenne, BMW X5, or Mercedes G-Class features sophisticated
                                systems
                                that
                                distribute power across all four wheels. When two wheels get lifted for traditional towing,
                                these
                                systems malfunction.
                            </p>
                            <p class="flatbed-scenario-highlight">
                                The result? Potential damage to transmission components, differentials, and transfer
                                cases—repairs
                                that easily exceed AED 15,000. Flatbed recovery keeps all four wheels off the ground,
                                systems
                                inactive, and warranties intact.
                            </p>
                        </div>

                        <div class="flatbed-scenario-card">
                            <div class="flatbed-scenario-icon">
                                <i class="fas fa-car-side"></i>
                            </div>
                            <h3>Low-Clearance <a class="flatbed-route"
                                    href="{{ route('our-service.ourservice', ['slug' => 'luxury-sports-car-handling-dubai']) }}">Sports
                                    and
                                    Luxury Vehicles</a></h3>
                            <p>
                                Your Lamborghini Huracán sits just 135mm off the ground. The Ferrari 488's front splitter is
                                even
                                lower. Even high-end sedans like the Porsche Panamera or BMW M5 sit considerably lower than
                                standard
                                vehicles.
                            </p>
                            <p>
                                We've seen expensive carbon fiber splitters destroyed during careless loading—AED 8,000
                                components
                                scraped across asphalt because the recovery operator didn't understand approach angles or
                                didn't
                                care enough to be careful.
                            </p>
                            <p class="flatbed-scenario-highlight">
                                Our hydraulic tilt system creates the gentlest possible loading angle. We've successfully
                                loaded
                                vehicles with less than 80mm clearance without a single scratch.
                            </p>
                        </div>

                        <div class="flatbed-scenario-card">
                            <div class="flatbed-scenario-icon">
                                <i class="fas fa-charging-station"></i>
                            </div>
                            <h3>Electric and Hybrid Vehicles</h3>
                            <p>
                                Tesla Model S, Porsche Taycan, Audi e-tron, BMW iX—electric vehicles are becoming
                                increasingly
                                common on roads here, and they have specific recovery requirements that many services don't
                                understand.
                            </p>
                            <p>
                                When EV motors rotate, they generate electrical current. If wheels are forced to turn during
                                traditional towing, motors act as generators, sending current through systems that aren't
                                designed
                                to receive it.
                            </p>
                            <p class="flatbed-scenario-highlight">
                                Tesla explicitly requires flatbed recovery in their service documentation. We follow
                                manufacturer
                                protocols exactly because protecting your warranty matters as much as protecting the vehicle
                                itself.
                            </p>
                        </div>

                        <div class="flatbed-scenario-card">
                            <div class="flatbed-scenario-icon">
                                <i class="fas fa-gem"></i>
                            </div>
                            <h3>Classic and Collector Vehicles</h3>
                            <p>
                                Perhaps you've just acquired a pristine 1980s Mercedes SL at auction. Maybe you're moving
                                your
                                carefully maintained classic Porsche 911 between storage locations.
                            </p>
                            <p>
                                These vehicles have appreciated significantly in value. Their pristine condition is the
                                whole
                                point.
                                Every mark, every scratch affects not just appearance but actual market value.
                            </p>
                            <p class="flatbed-scenario-highlight">
                                Flatbed recovery treats your classic with the respect it deserves. We load carefully,
                                transport
                                safely, and deliver in exactly the same pristine condition you entrusted to us.
                            </p>
                        </div>

                        <div class="flatbed-scenario-card">
                            <div class="flatbed-scenario-icon">
                                <i class="fas fa-gem"></i>
                            </div>
                            <h3>Long-Distance Transport Across the Emirates
                            </h3>
                            <p>
                                Sometimes recovery needs extend beyond local areas. You purchased a vehicle in Abu Dhabi
                                that
                                needs
                                transport here. Your car requires specialized service only available in Sharjah. Or you're
                                relocating and need your vehicle moved to your new emirate.
                            </p>
                            <p>
                                Even if traditional methods might work for short distances, longer journeys multiply every
                                risk.
                                That 5km trip to a nearby garage becomes a 75km journey on highways at speed. Minor risks
                                become
                                significant concerns over extended distances.
                            </p>
                            <p class="flatbed-scenario-highlight">
                                For transport across emirates or extended distances within the metropolitan area, flatbed
                                recovery
                                isn't overcautious—it's simply the smart choice.
                            </p>
                        </div>
                    </div>
                </div>
    </section>

    <!-- COVERAGE AREAS SECTION -->
    <section class="flatbed-coverage-section">
        <div class="container">
            <h2 class="flatbed-section-heading">Coverage Areas and Response Times</h2>

            <div class="flatbed-coverage-grid">
                <div class="flatbed-coverage-item">
                    <div class="flatbed-coverage-icon">📍</div>
                    <h4>Dubai Marina, JBR, and Palm Jumeirah</h4>
                    <p class="flatbed-response-time">15-20 minutes average response</p>
                </div>

                <div class="flatbed-coverage-item">
                    <div class="flatbed-coverage-icon">📍</div>
                    <h4>Downtown Dubai, Business Bay, and DIFC</h4>
                    <p class="flatbed-response-time">15-20 minutes average response</p>
                </div>

                <div class="flatbed-coverage-item">
                    <div class="flatbed-coverage-icon">📍</div>
                    <h4>Jumeirah, Al Wasl, and Al Safa</h4>
                    <p class="flatbed-response-time">18-25 minutes average response</p>
                </div>

                <div class="flatbed-coverage-item">
                    <div class="flatbed-coverage-icon">📍</div>
                    <h4>Motor City, Sports City, and Arabian Ranches</h4>
                    <p class="flatbed-response-time">25-30 minutes average response</p>
                </div>

                <div class="flatbed-coverage-item">
                    <div class="flatbed-coverage-icon">📍</div>
                    <h4>Silicon Oasis, International City, and Academic City</h4>
                    <p class="flatbed-response-time">30-35 minutes average response</p>
                </div>

                <div class="flatbed-coverage-item">
                    <div class="flatbed-coverage-icon">📍</div>
                    <h4>Deira, Bur Dubai, and Al Karama</h4>
                    <p class="flatbed-response-time">20-25 minutes average response</p>
                </div>

                <div class="flatbed-coverage-item">
                    <div class="flatbed-coverage-icon">📍</div>
                    <h4>Jebel Ali, Discovery Gardens, and JVC</h4>
                    <p class="flatbed-response-time">25-35 minutes average response</p>
                </div>

                <div class="flatbed-coverage-item">
                    <div class="flatbed-coverage-icon">📍</div>
                    <h4>Dubai Investment Park and outlying areas</h4>
                    <p class="flatbed-response-time">35-45 minutes average response</p>
                </div>
            </div>

            <p class="flatbed-coverage-note">
                These timeframes represent averages during normal traffic conditions. Major congestion or peak hours may add
                10-15 minutes to any route. We maintain strategic positioning across the metropolitan area specifically to
                minimize response times regardless of where you're located.
            </p>
        </div>
    </section>

    <!-- EQUIPMENT & EXPERTISE SECTION -->
    <section class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/treack.jpg') }}" alt="Flatbed Recovery Equipment">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow animate__animated animate__fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline">Professional Equipment</span>
                            <h2 class="site-title">Equipment and Expertise That <span>Delivers Results</span></h2>
                        </div>

                        <h4 style="color: #e10600; margin-bottom: 15px;">Modern Flatbed Fleet</h4>
                        <p class="mb-2">
                            Our vehicles are purpose-built recovery trucks, not general-purpose vehicles with platforms
                            added as afterthoughts. Recent-model flatbeds feature computer-aided hydraulic systems for
                            precise control, integrated winches for smooth loading, and GPS tracking for transparency.
                        </p>
                        <p class="mb-3">
                            Load capacity ratings exceed what we'll ever need—even the heaviest luxury SUVs stay well within
                            safe operational parameters. Regular maintenance keeps every system functioning reliably because
                            equipment failure isn't acceptable when we're responsible for your vehicle.
                        </p>

                        <h4 style="color: #e10600; margin-bottom: 15px;">Operator Qualifications</h4>
                        <p class="mb-2">
                            Every team member brings minimum five years of vehicle recovery experience. Many operators hold
                            certifications specifically for luxury vehicle handling and have completed training on exotic
                            car transport.
                        </p>
                        <p class="mb-2">
                            Many operators hold certifications specifically for luxury vehicle handling. They've completed
                            training on exotic car transport, understand manufacturer-specific requirements, and know the
                            difference between securing a standard sedan and positioning a limited-production hypercar.
                        </p>
                        <p class="mb-3">
                            RTA licensing, first-aid certification, and safety qualifications are mandatory. Multilingual
                            capabilities (English, Arabic, Hindi, Urdu) ensure clear communication regardless of who needs
                            assistance.
                        </p>

                        <h4 style="color: #e10600; margin-bottom: 15px;" class="mt-2">Insurance and Licensing</h4>
                        <p class="mb-2">
                            Comprehensive liability coverage protects your vehicle throughout the entire recovery process.
                            Full RTA approval for operating commercial recovery vehicles. All official regulatory
                            requirements met and certifications maintained current.
                        </p>
                        <p class="mb-2">
                            Full RTA approval for operating commercial recovery vehicles. All official regulatory
                            requirements met and certifications maintained current.
                        </p>
                        <p class="mb-3">
                            What this means practically: if anything goes wrong due to our actions, you're protected. Our
                            insurance responds immediately.
                        </p>

                        <h4 style="color: #e10600; margin-bottom: 15px;">Transparent Pricing Structure
                        </h4>
                        <p class="mb-2">
                            You know the cost before we begin work. Quotes are based on distance, vehicle type, and any
                            specific requirements.
                        </p>
                        <p class="mb-2">
                            The base rate covers standard flatbed recovery for passenger vehicles. Premium automobiles
                            requiring specialized equipment or additional care receive appropriate pricing—but we explain
                            exactly why and what the difference covers.
                        </p>
                        <p class="mb-3">
                            No surprise fees appear later. The price quoted is the price you pay. Digital payment acceptance
                            makes transactions convenient, and e-receipts arrive immediately.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JOURNEY SECTION -->
    <section class="flatbed-journey-section">
        <div class="container">
            <h2 class="flatbed-section-heading">Your Journey With Us: Step by Step</h2>


            <div class="row align-items-center flatbed-step">
                <div class="col-lg-6">
                    <div class="flatbed-benchmark-box">
                        <h4>Response Time Benchmarks (Average)</h4>
                        <ul>
                            <li>Urban core areas: 15-20 minutes</li>
                            <li>Suburban neighborhoods: 20-30 minutes</li>
                            <li>Desert locations: 45-60 minutes</li>
                            <li>Northern emirates: 60-90 minutes</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-left wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/delivering-car-by-flatbed-tow-truck.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flatbed-journey-steps">
            <div class="flatbed-journey-step">
                <div class="flatbed-step-number">1</div>
                <div class="flatbed-step-content">
                    <h4><a href="{{ route('contact') }}" class="flatbed-route">Contact Us</a></h4>
                    <p>Reach out via our 24/7 hotline, WhatsApp (where you can send your location pin directly), our
                        website booking form, or email. Choose whatever method works best in your situation.</p>
                </div>
            </div>

            <div class="flatbed-journey-step">
                <div class="flatbed-step-number">2</div>
                <div class="flatbed-step-content">
                    <h4>Rapid Assessment</h4>
                    <p>We immediately gather essential information: your exact location, vehicle type, and situation
                        severity. This takes about 60 seconds.</p>
                </div>
            </div>

            <div class="flatbed-journey-step">
                <div class="flatbed-step-number">3</div>
                <div class="flatbed-step-content">
                    <h4>Team Activation</h4>
                    <p>Our dispatcher assigns the nearest qualified team with the appropriate equipment for your
                        specific needs. You receive confirmation immediately.</p>
                </div>
            </div>

            <div class="flatbed-journey-step">
                <div class="flatbed-step-number">4</div>
                <div class="flatbed-step-content">
                    <h4>Live Updates</h4>
                    <p>You'll get SMS notifications with estimated arrival time and updates if anything changes. No
                        wondering, no guessing.</p>
                </div>
            </div>

            <div class="flatbed-journey-step">
                <div class="flatbed-step-number">5</div>
                <div class="flatbed-step-content">
                    <h4>On-Site Evaluation</h4>
                    <p>When we arrive, our operator conducts a professional assessment to confirm the best recovery
                        approach and identify any special considerations.</p>
                </div>
            </div>

            <div class="flatbed-journey-step">
                <div class="flatbed-step-number">6</div>
                <div class="flatbed-step-content">
                    <h4>Safe Recovery</h4>
                    <p>We execute the recovery using methods appropriate to your vehicle and situation. Everything is
                        documented photographically.</p>
                </div>
            </div>

            <div class="flatbed-journey-step">
                <div class="flatbed-step-number">7</div>
                <div class="flatbed-step-content">
                    <h4>Destination Delivery</h4>
                    <p>Whether you need transport to your home, a service center, or a specific garage, we get your
                        vehicle there safely.</p>
                </div>
            </div>

            <div class="flatbed-journey-step">
                <div class="flatbed-step-number">8</div>
                <div class="flatbed-step-content">
                    <h4>Complete Documentation</h4>
                    <p>Before we leave, you receive photos, receipts, and any insurance forms you might need. Everything
                        is handled professionally.</p>
                </div>
            </div>
        </div>


        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="flatbed-faq-section">
        <div class="container">
            <h2 class="flatbed-section-heading">Frequently Asked Questions</h2>

            <div class="flatbed-faq-wrapper">
                <div class="flatbed-faq-item">
                    <button class="flatbed-faq-question">
                        How much does flatbed recovery cost in Dubai?
                    </button>
                    <div class="flatbed-faq-answer">
                        <p>
                            Pricing typically starts around AED 300-400 for short-distance recovery within central areas,
                            increasing based on distance traveled and vehicle specifications. A recovery from Business Bay
                            to Motor City costs less than one from Jumeirah to International City due to distance
                            differences.
                        </p>
                        <p>
                            Premium vehicles requiring specialized handling may include additional fees—we explain these
                            upfront and why they apply. Insurance policies often cover recovery costs, so check your
                            coverage before assuming you'll pay out of pocket.
                        </p>
                        <p>
                            We provide exact quotes before beginning service. No hidden charges, no surprises when you
                            receive the invoice.
                        </p>
                    </div>
                </div>

                <div class="flatbed-faq-item">
                    <button class="flatbed-faq-question">
                        How long does flatbed recovery take?
                    </button>
                    <div class="flatbed-faq-answer">
                        <p>
                            Response time averages 15-35 minutes depending on your location and current traffic conditions.
                            Loading and securing your vehicle takes 8-12 minutes once we arrive. Transport time depends on
                            distance to your destination.
                        </p>
                        <p>
                            Total time from your call to delivery at a nearby service center might be 45-60 minutes for
                            breakdowns in central areas. Longer distances or remote locations require additional time.
                        </p>
                        <p>
                            We provide realistic timeframe estimates when you call and update you if anything changes during
                            response.
                        </p>
                    </div>
                </div>

                <div class="flatbed-faq-item">
                    <button class="flatbed-faq-question">
                        Can flatbed recovery damage my vehicle?
                    </button>
                    <div class="flatbed-faq-answer">
                        <p>
                            When performed correctly by trained professionals, flatbed recovery is the safest transport
                            method available. The risks inherent in traditional methods—scraping, drivetrain damage,
                            improper attachment—are eliminated by design.
                        </p>
                        <p>
                            Could improper flatbed recovery cause damage? If operators used incorrect attachment points,
                            over-tightened securing straps, or loaded carelessly, yes. That's why professional standards and
                            proper training matter.
                        </p>
                        <p>
                            We've performed thousands of flatbed recoveries without causing damage because we follow correct
                            procedures consistently. Our insurance has never paid a recovery-related damage claim—not
                            because we refuse them, but because our methods prevent damage from occurring.
                        </p>
                    </div>
                </div>

                <div class="flatbed-faq-item">
                    <button class="flatbed-faq-question">
                        Do you handle exotic and luxury cars?
                    </button>
                    <div class="flatbed-faq-answer">
                        <p>
                            Absolutely. High-end vehicles are exactly the automobiles our flatbed service was designed to
                            protect.
                        </p>
                        <p>
                            We've successfully recovered Ferraris, Lamborghinis, Rolls-Royces, Bentleys, and virtually every
                            luxury marque sold here. Our operators understand that a Huracán requires different
                            considerations than a Honda, and a Phantom demands different care than a Pajero.
                        </p>
                        <p>
                            Soft-strap securing, proper attachment points, protective padding, and careful loading
                            procedures are standard practice for every vehicle—but especially critical for high-value
                            automobiles where even minor scratches affect value significantly.
                        </p>
                    </div>
                </div>

                <div class="flatbed-faq-item">
                    <button class="flatbed-faq-question">
                        What if my car is extremely low or modified?
                    </button>
                    <div class="flatbed-faq-answer">
                        <p>
                            Lowered vehicles are actually one of the primary reasons flatbed recovery exists as a
                            specialized service.
                        </p>
                        <p>
                            Our hydraulic tilt system creates approach angles as shallow as 8-10 degrees, which accommodates
                            vehicles with minimal ground clearance. We've successfully loaded cars sitting less than 80mm
                            off the ground without any contact.
                        </p>
                        <p>
                            For heavily modified vehicles with custom bodywork, extreme lowering, or unusual dimensions, we
                            coordinate in advance to understand specific requirements.
                        </p>
                    </div>
                </div>

                <div class="flatbed-faq-item">
                    <button class="flatbed-faq-question">
                        Will insurance cover flatbed recovery costs?
                    </button>
                    <div class="flatbed-faq-answer">
                        <p>
                            Many comprehensive insurance policies include recovery coverage, and some specifically cover or
                            require flatbed methods for certain vehicle types.
                        </p>
                        <p>
                            Policies for high-value automobiles often require flatbed transport and will deny claims if
                            damage occurs during improper recovery. The policy language typically references
                            "manufacturer-recommended procedures," and most premium manufacturers recommend or require
                            flatbed recovery.
                        </p>
                        <p>
                            We work directly with insurance providers, submitting required documentation and coordinating
                            approved service. Contact your insurer to confirm your specific coverage, or we can help
                            facilitate that conversation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY TRUST SECTION -->
    <section class="flatbed-trust-section">
        <div class="container">
            <h2 class="flatbed-section-heading">Why Dubai Drivers Trust Toretto Recovery</h2>

            <div class="flatbed-trust-grid">
                <div class="flatbed-trust-card">
                    <div class="flatbed-trust-header">
                        <div class="flatbed-trust-icon"><i class="fas fa-map-marked-alt"></i></div>
                        <h4>Local Expertise Since Day One</h4>
                    </div>

                    <div class="flatbed-trust-points">
                        <div class="flatbed-trust-point">
                            <div class="flatbed-point-content">
                                <span class="flatbed-point-text">Built specifically to serve Dubai drivers with years of
                                    experience on these roads</span>
                            </div>
                            <div class="flatbed-point-icon">
                                <i class="fas fa-road"></i>
                            </div>
                        </div>

                        <div class="flatbed-trust-point">
                            <div class="flatbed-point-content">
                                <span class="flatbed-point-text">Operators know Sheikh Zayed Road traffic patterns change
                                    between 7-9 AM</span>
                            </div>
                            <div class="flatbed-point-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>

                        <div class="flatbed-trust-point">
                            <div class="flatbed-point-content">
                                <span class="flatbed-point-text">Understand Al Khail Road construction and altered access
                                    points</span>
                            </div>
                            <div class="flatbed-point-icon">
                                <i class="fas fa-hard-hat"></i>
                            </div>
                        </div>

                        <div class="flatbed-trust-point">
                            <div class="flatbed-point-content">
                                <span class="flatbed-point-text">Recognize landmarks instantly and navigate alternative
                                    routes efficiently</span>
                            </div>
                            <div class="flatbed-point-icon">
                                <i class="fas fa-location-arrow"></i>
                            </div>
                        </div>

                        <div class="flatbed-trust-point">
                            <div class="flatbed-point-content">
                                <span class="flatbed-point-text">Local knowledge translates to faster response times and
                                    better service</span>
                            </div>
                            <div class="flatbed-point-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flatbed-trust-card">
                    <div class="flatbed-trust-header">
                        <div class="flatbed-trust-icon"><i class="fas fa-truck"></i></div>
                        <h4>Equipment Investment That Matches Modern Vehicles</h4>
                    </div>

                    <div class="flatbed-trust-points">
                        <div class="flatbed-trust-point">
                            <div class="flatbed-point-content">
                                <span class="flatbed-point-text">Modern vehicles are sophisticated, valuable, and sensitive
                                    to improper handling</span>
                            </div>
                            <div class="flatbed-point-icon">
                                <i class="fas fa-car"></i>
                            </div>
                        </div>

                        <div class="flatbed-trust-point">
                            <div class="flatbed-point-content">
                                <span class="flatbed-point-text">Our equipment has evolved to match these changing
                                    needs</span>
                            </div>
                            <div class="flatbed-point-icon">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                        </div>

                        <div class="flatbed-trust-point">
                            <div class="flatbed-point-content">
                                <span class="flatbed-point-text">Investment in latest flatbed technology and systems</span>
                            </div>
                            <div class="flatbed-point-icon">
                                <i class="fas fa-tools"></i>
                            </div>
                        </div>

                        <div class="flatbed-trust-point">
                            <div class="flatbed-point-content">
                                <span class="flatbed-point-text">Meticulous fleet maintenance and regular upgrades</span>
                            </div>
                            <div class="flatbed-point-icon">
                                <i class="fas fa-wrench"></i>
                            </div>
                        </div>

                        <div class="flatbed-trust-point">
                            <div class="flatbed-point-content">
                                <span class="flatbed-point-text">Modern equipment operated professionally for vehicle
                                    protection</span>
                            </div>
                            <div class="flatbed-point-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flatbed-trust-card">
                    <div class="flatbed-trust-header">
                        <div class="flatbed-trust-icon"><i class="fas fa-certificate"></i></div>
                        <h4>Commitment to Professional Standards</h4>
                    </div>

                    <div class="flatbed-trust-points">
                        <div class="flatbed-trust-point">
                            <div class="flatbed-point-content">
                                <span class="flatbed-point-text">RTA approval and full regulatory compliance</span>
                            </div>
                            <div class="flatbed-point-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>

                        <div class="flatbed-trust-point">
                            <div class="flatbed-point-content">
                                <span class="flatbed-point-text">Comprehensive insurance covering all operations</span>
                            </div>
                            <div class="flatbed-point-icon">
                                <i class="fas fa-file-contract"></i>
                            </div>
                        </div>

                        <div class="flatbed-trust-point">
                            <div class="flatbed-point-content">
                                <span class="flatbed-point-text">ISO-certified service protocols and procedures</span>
                            </div>
                            <div class="flatbed-point-icon">
                                <i class="fas fa-award"></i>
                            </div>
                        </div>

                        <div class="flatbed-trust-point">
                            <div class="flatbed-point-content">
                                <span class="flatbed-point-text">Ongoing technical training for all operators</span>
                            </div>
                            <div class="flatbed-point-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                        </div>

                        <div class="flatbed-trust-point">
                            <div class="flatbed-point-content">
                                <span class="flatbed-point-text">Success measured by safe deliveries and customer
                                    satisfaction</span>
                            </div>
                            <div class="flatbed-point-icon">
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA SECTION -->
    <section class="flatbed-final-cta-section">
        <div class="container">
            <div class="flatbed-final-cta-content">
                <h2>Contact Us for Emergency Flatbed Recovery</h2>
                <p class="flatbed-cta-subtitle">24/7 Emergency Hotline Available Now</p>

                <div class="flatbed-cta-promise">
                    <h4>Our Promise to Every Client</h4>
                    <ul>
                        <li>Professional flatbed recovery performed by trained, licensed operators</li>
                        <li>Damage-free transport guaranteed through proper equipment and correct procedures</li>
                        <li>Complete documentation provided for insurance or personal records</li>
                        <li>Transparent pricing with no hidden charges</li>
                        <li>Average response time in central areas: 17 minutes</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <link rel="stylesheet" href="{{ asset('assets/css/service.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flatbed-recovery.css') }}">
    <script>
        document.querySelectorAll('.faqs2-question').forEach(button => {
            button.addEventListener('click', () => {
                const currentItem = button.parentElement;

                document.querySelectorAll('.faqs2-item').forEach(item => {
                    if (item !== currentItem) {
                        item.classList.remove('active');
                    }
                });

                currentItem.classList.toggle('active');
            });
        });
    </script>

    <script>
        function showStep(step) {

            document.querySelectorAll('.step-item').forEach(item => {
                item.classList.remove('active');
            });

            document.querySelectorAll('.step-content').forEach(content => {
                content.classList.remove('active');
            });

            document.querySelector('.step-item:nth-child(' + step + ')')
                .classList.add('active');

            document.getElementById('step-' + step)
                .classList.add('active');
        }
    </script>

    <script>
        // FAQ Accordion
        document.querySelectorAll('.flatbed-faq-question').forEach(button => {
            button.addEventListener('click', () => {
                const currentItem = button.parentElement;
                const isActive = currentItem.classList.contains('active');

                // Close all items
                document.querySelectorAll('.flatbed-faq-item').forEach(item => {
                    item.classList.remove('active');
                });

                // Open clicked item if it wasn't already open
                if (!isActive) {
                    currentItem.classList.add('active');
                }
            });
        });
        ript >

            <
            script >
            function showStep(step) {

                document.querySelectorAll('.step-item').forEach(item => {
                    item.classList.remove('active');
                });

                document.querySelectorAll('.step-content').forEach(content => {
                    content.classList.remove('active');
                });

                document.querySelector('.step-item:nth-child(' + step + ')')
                    .classList.add('active');

                document.getElementById('step-' + step)
                    .classList.add('active');
            }
    </script>

    <script>
        // FAQ Accordion
        document.querySelectorAll('.flatbed-faq-question').forEach(button => {
            button.addEventListener('click', () => {
                const currentItem = button.parentElement;
                const isActive = currentItem.classList.contains('active');

                // Close all items
                document.querySelectorAll('.flatbed-faq-item').forEach(item => {
                    item.classList.remove('active');
                });

                // Open clicked item if it wasn't already open
                if (!isActive) {
                    currentItem.classList.add('active');
                }
            });
        });
    </script>
@endsection
