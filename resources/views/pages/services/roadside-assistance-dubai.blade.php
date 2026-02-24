@extends('layouts.main')

@section('title')
    24/7 Roadside Assistance Dubai | Toretto Recovery – Fast Emergency Help
@endsection

@section('meta_description')
    Stranded on Dubai roads? Toretto Recovery provides 24/7 roadside assistance, including towing, battery jump-start, flat
    tire, fuel delivery, and car lockout services. Fast, reliable, and professional help across Dubai, Sharjah, and nearby
    Emirates.

@endsection

@section('meta_keywords', '24/7 Towing Service in Dubai, Emergency Car Recovery Dubai, Roadside Assistance UAE')

@section('head')
    @verbatim
        <script type="application/ld+json">
                                        {
                                          "@context": "https://schema.org",
                                          "@type": "FAQPage",
                                          "mainEntity": [
                                            {
                                              "@type": "Question",
                                              "name": "How quickly can you reach me in Dubai?",
                                              "acceptedAnswer": {
                                                "@type": "Answer",
                                                "text": "Response times depend on your location and traffic, but most central Dubai calls are answered within 30-45 minutes. We provide accurate ETAs when you call."
                                              }
                                            },
                                            {
                                              "@type": "Question",
                                              "name": "How much does roadside assistance cost in Dubai?",
                                              "acceptedAnswer": {
                                                "@type": "Answer",
                                                "text": "Costs vary by service type and location. Simple services like jump-starts or tire changes start around AED 150, while towing or complex recovery can exceed AED 500. We provide an upfront quote before sending a technician."
                                              }
                                            },
                                            {
                                              "@type": "Question",
                                              "name": "Do you work with insurance companies?",
                                              "acceptedAnswer": {
                                                "@type": "Answer",
                                                "text": "Yes, we work with most major insurance providers in the UAE including AXA, Oman Insurance, RSA, Orient Insurance, and others. If your policy includes roadside coverage, we can often bill directly."
                                              }
                                            },
                                            {
                                              "@type": "Question",
                                              "name": "Can you help with electric vehicles (EVs)?",
                                              "acceptedAnswer": {
                                                "@type": "Answer",
                                                "text": "Yes, all EVs are transported on flatbed trucks to prevent damage. We service Tesla, Nissan Leaf, BMW i-series, Audi e-tron, and other electric models."
                                              }
                                            },
                                            {
                                              "@type": "Question",
                                              "name": "What if my car cannot be fixed on the spot?",
                                              "acceptedAnswer": {
                                                "@type": "Answer",
                                                "text": "If on-site repair isn’t possible, we’ll tow your vehicle to your preferred service center or garage within Dubai/Sharjah at no extra charge. We can also recommend licensed repair centers if needed."
                                              }
                                            },
                                            {
                                              "@type": "Question",
                                              "name": "Do you provide services outside Dubai?",
                                              "acceptedAnswer": {
                                                "@type": "Answer",
                                                "text": "Yes, we cover Sharjah, Ajman, and coordinate services in Abu Dhabi, RAK, Fujairah, and Umm Al Quwain through our partner network."
                                              }
                                            },
                                            {
                                              "@type": "Question",
                                              "name": "Will you operate during bad weather?",
                                              "acceptedAnswer": {
                                                "@type": "Answer",
                                                "text": "Yes, we provide service during sandstorms, rain, and other adverse conditions. During severe weather advisories, response times may be slightly longer, but we always communicate realistic ETAs."
                                              }
                                            },
                                            {
                                              "@type": "Question",
                                              "name": "Can I get a membership or package deal?",
                                              "acceptedAnswer": {
                                                "@type": "Answer",
                                                "text": "Yes, we offer annual membership packages for individuals, families, and corporate fleets. Benefits include unlimited roadside support, priority response, and discounted service rates."
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
    <section class="site-breadcrumb contact-section" style="background: url('{{ asset('assets/images/slider-2.jpg') }}');">

        <div class="container">
            <div class="row align-items-center min-vh-75">

                <!-- LEFT CONTENT -->
                <div class="col-lg-7 d-flex align-items-center justify-content-center">
                    <div class="contact-img text-start text-white">

                        <h1 class="breadcrumb-title wow animate__animated animate__fadeInDown">
                            <span>24/7 Roadside Assistance Dubai</span>
                        </h1>

                        <ul class="breadcrumb-menu">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                                <i class="fa fa-angle-double-right"></i>
                            </li>
                            <li class="active">Roadside Assistance Dubai</li>
                        </ul>

                        <h2 class="mt-3 text-white breadcrumb-subtitle">
                            Breakdown or emergency? We deliver rapid roadside assistance you can trust.
                        </h2>

                        <div class="hero-btn mt-4">
                            <a href="{{ route('book.now') }}" target="_blank" class="theme-btn">
                                Book Now <i class="fas fa-arrow-right-long"></i>
                            </a>
                            <a href="tel:+971523003423" class="theme-btn theme-btn2">
                                Call Now <i class="fas fa-arrow-right-long"></i>
                            </a>
                        </div>

                        <div class="hero-stats mt-3 mb-3">
                            <div class="stats-box">
                                <h4>100%</h4>
                                <p>Job Success Rate</p>
                            </div>

                            <div class="stats-box">
                                <h4>10+ Years</h4>
                                <p>Experience</p>
                            </div>

                            <div class="stats-box">
                                <h4>1000+</h4>
                                <p>Projects Completed</p>
                            </div>
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

                <div class="col-lg-6">
                    <div class="about-right wow animate__animated animate__fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline"><i class="fa-solid fa-car"></i>Welcome to Toretto
                                Recovery</span>
                            <h2 class="site-title">Dubai’s <span> 24/7 Emergency</span> Roadside Assistance</h2>
                        </div>
                        <p class="mb-1">You’re driving to an important meeting, picking up your kids from school, or
                            heading home after a long day. Then it happens—your car won’t start, you get a flat tire, or you
                            run out of fuel on Sheikh Zayed Road during rush hour.</p>
                        <p class="mb-1">Being stranded is stressful. In Dubai’s heat, it can also be dangerous. That’s
                            where Toretto Recovery comes in. We’re a Dubai-based roadside assistance company dedicated to
                            getting drivers back on the road safely and quickly.</p>
                        <p class="mb-1">No complicated apps. No confusing memberships. Just fast, reliable help when you
                            need it most.</p>
                        <a href="{{ route('book.now') }}" target="_blank" class="theme-btn mt-2">Book Now<i
                                class="fa-solid fa-arrow-right-long"></i></a>
                        <a href="tel:+971 523003423" class="theme-btn mt-2"> Call Now<i
                                class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 imagebag">
                    <div class="about-left wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/Roadside_Assistance_01.png') }}" alt="">
                        </div>
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

                        <h1 class="site-title">Over <span>10 Years</span> of Roadside
                            Assistance Expertise in Dubai</h1>

                        <p class="text-gray-p">
                            With over 10 years of industry experience and modern recovery equipment, our skilled and insured
                            technicians provide 24/7 emergency assistance to drivers and car owners stuck on the road.
                        </p>
                        <p>
                            We understand what it’s like to be stranded in traffic with a dead battery or waiting for help
                            in 45-degree heat. That’s why our services are built around what truly matters to you:
                        </p>
                        <div class="mt-2">
                            <a href="{{ route('book.now') }}" target="_blank" class="theme-btn mt-2">Book Now<i
                                    class="fa-solid fa-arrow-right-long"></i></a>
                            <a href="tel:+971 523003423" class="theme-btn mt-2"> Call Now<i
                                    class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                    <p class="text-gray-p">At Toretto Recovery, our mission is simple: to make roadside emergencies as
                        stress-free as possible while keeping you safe and moving.</p>
                </div>
                <div class="col-lg-6 col-img-recover">
                    <div class="recovery-features">

                        <div class="feature-card">
                            <div class="icon">
                                <i class="fa-solid fa-bolt"></i>
                            </div>
                            <div class="content">
                                <h5 class="h5-colors">Fast Response Times</h5>
                                <p>Our teams are strategically positioned across Dubai, Sharjah, and nearby areas, so help
                                    is always nearby.</p>
                            </div>
                        </div>

                        <div class="feature-card">
                            <div class="icon">
                                <i class="fa-solid fa-tag"></i>
                            </div>
                            <div class="content">
                                <h5 class="h5-colors">Clear Pricing</h5>
                                <p>You’ll know the cost upfront before any work begins.</p>
                            </div>
                        </div>

                        <div class="feature-card">
                            <div class="icon">
                                <i class="fa-solid fa-user-shield"></i>
                            </div>
                            <div class="content">
                                <h5 class="h5-colors">Professional Service</h5>
                                <p>All technicians are trained, licensed, and treat your vehicle with care.</p>
                            </div>
                        </div>

                        <div class="feature-card">
                            <div class="icon">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div class="content">
                                <h5 class="h5-colors">Available 24/7</h5>
                                <p>Breakdowns don’t wait for business hours, and neither do we.</p>
                            </div>
                        </div>

                        <div class="feature-card">
                            <div class="icon">
                                <i class="fa-solid fa-car"></i>
                            </div>
                            <div class="content">
                                <h5 class="h5-colors">Help for all vehicles</h5>
                                <p> From compact cars to SUVs, luxury vehicles to motorcycles.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="roadside-alt">
        <div class="container">

            <div class="section-head text-center mb-5">
                <span class="tag">24/7 Roadside Assistance</span>
                <h2>Our Services for <span>Roadside Assistance</span></h2>
                <p>Wherever you are in Dubai, our expert team is ready to help — day or night.</p>
            </div>

            <!-- SERVICE 01 -->
            <div class="service-row">
                <div class="service-num">01</div>

                <div class="service-media">
                    <img src="{{ asset('assets/images/towing-02.png') }}" alt="Towing Service">
                </div>

                <div class="service-text">
                    <h3>
                        <a target="_blank" href="{{ route('our-service.ourservice', 'towing-service-dubai') }}"
                            style="color:#d70006">Emergency Car Towing Dubai </a>
                    </h3>

                    <p>Sometimes your car can't be fixed on the spot. When that happens, we'll safely tow your vehicle to
                        wherever it needs to go—your preferred garage, home, or our secure storage facility.
                    </p>

                    <h4>Our Towing Service Includes:</h4>
                    <ul class="service-list">
                        <li>Flatbed towing for luxury cars, sports cars, and low-clearance vehicles</li>
                        <li>Wheel-lift towing for standard vehicles when appropriate</li>
                        <li>Heavy-duty towing for SUVs and larger vehicles</li>
                        <li>Motorcycle towing with specialized equipment</li>
                        <li>Transport to any location in Dubai, Sharjah, or nearby Emirates</li>
                    </ul>

                    <div class="service-extra">
                        <h4 class="service-subtitle">Coverage Areas</h4>
                        <p>
                            We serve Dubai Marina, Downtown Dubai, Business Bay, Jumeirah, Deira, Bur Dubai, Al Quoz, Jebel
                            Ali, Dubai Investment Park, and all areas across Dubai and Sharjah.
                        </p>

                        <h5 class="service-subtitle-alt">What Sets Us Apart</h5>
                        <p>Your car is secured properly for transport, we handle the paperwork for insurance if needed, and
                            we communicate clearly about where we're taking your vehicle and when you'll arrive.</p>
                    </div>
                </div>
            </div>

            <!-- SERVICE 02 (FIXED LAYOUT) -->
            <div class="service-row">
                <div class="service-num">02</div>

                <div class="service-text-grid">
                    <div>
                        <h3 style="color:#d70006">
                            Dead Battery?<br>
                            Jump-Start & Battery Replacement
                        </h3>
                        <p>A dead battery is one of the most common reasons people call us. Dubai's extreme heat is hard on
                            car batteries—most only last 2-3 years here compared to 4-5 years in cooler climates.</p>
                        <p>Our technicians carry batteries suitable for most car makes and models. If your battery needs
                            replacing, we can often do it on the spot so you don't need a tow.</p>
                    </div>
                    <div>
                        <h4>Battery Services</h4>
                        <ul class="service-list check">
                            <li>Jump-start service to get your car running again</li>
                            <li>Battery testing to check if it needs replacement</li>
                            <li>On-site battery replacement with quality brands</li>
                            <li>Battery terminal cleaning and maintenance</li>
                            <li>Warranty on replacement batteries</li>
                        </ul>
                    </div>
                    <div>
                        <h4>Common Signs Your Battery Is Dying</h4>
                        <ul class="service-list check">
                            <li>Car struggles to start, especially in the morning</li>
                            <li>Dashboard lights dim when you turn the ignition</li>
                            <li>You hear clicking sounds when starting</li>
                            <li>Battery is more than 2 years old</li>
                            <li>Battery warning light appears on your dashboard</li>

                        </ul>
                    </div>
                </div>
            </div>


            <!-- SERVICE 03 -->
            <div class="service-row">
                <div class="service-num">03</div>

                <div class="service-media">
                    <img src="{{ asset('assets/images/Flat_Tire_Change.jpeg') }}" alt="Flat Tire Service">
                </div>

                <div class="service-text">
                    <h3 style="color:#d70006">Flat Tire Change & Repair Service Dubai</h3>
                    <p>Got a flat tire on Emirates Road or in your parking lot? We'll come to you and either change your
                        tire or repair the puncture if it's safe to do so.</p>

                    <h4>Tire Services Include</h4>
                    <ul class="service-list">
                        <li>Emergency tire change using your spare</li>
                        <li>Tire puncture repair for small punctures (when safe)</li>
                        <li>Tire pressure check and inflation</li>
                        <li>Assistance with run-flat tires</li>
                        <li>Help if your spare tire is also flat</li>
                    </ul>

                    <div class="service-extra">
                        <h4 class="service-subtitle">Safety First</h4>
                        <p>Our technicians set up warning triangles, wear reflective vests, and make sure you're in a safe
                            location while we work. On busy highways, we coordinate with Dubai Police when necessary for
                            everyone's safety.</p>
                    </div>

                    <h5 class="service-subheading">When to Call for a Flat Tire:</h5>
                    <ul class="service-list">
                        <li>You feel the steering wheel pull to one side</li>
                        <li>You hear a thumping sound while driving</li>
                        <li>Your tire pressure warning light comes on</li>
                        <li>You see visible damage or a puncture in your tire</li>
                    </ul>
                </div>
            </div>

            <!-- SERVICE 04 -->
            <div class="service-row">
                <div class="service-num">04</div>

                <div class="service-text-grid">
                    <div>
                        <h3 style="color:#d70006">
                            Fuel Delivery Service Across Dubai
                        </h3>
                        <p>
                            Run out of petrol? It happens more often than you'd think, especially when you're rushing or
                            unfamiliar with an area. We'll bring fuel directly to your location.
                        </p>
                    </div>
                    <div>
                        <h4>Fuel Delivery Details:</h4>
                        <ul class="service-list check">
                            <li>Petrol (95 or 98 octane) and diesel available</li>
                            <li>Delivered in clean, sealed containers</li>
                            <li>Service available across Dubai and neighboring Emirates</li>
                            <li>Quick response—usually within 30-45 minutes</li>
                            <li>Fair, transparent pricing</li>
                        </ul>
                    </div>
                    <div class="service-extra">
                        <h4 class="service-subtitle">Pro Tip</h4>
                        <p>Keep an eye on your fuel gauge when driving unfamiliar routes or during sandstorms when
                            visibility makes it hard to spot petrol stations.</p>
                    </div>
                </div>
            </div>

            <!-- SERVICE 05 -->
            <div class="service-row">
                <div class="service-num">05</div>

                <div class="service-text-grid">
                    <div>
                        <h3 style="color:#d70006">Car Lockout Service – Keys Locked Inside?</h3>
                        <p>Locked your keys in the car? Lost your only set? We provide professional lockout services that
                            get you back in your vehicle without breaking windows or damaging locks.</p>
                    </div>
                    <div>
                        <h4>Lockout Services:</h4>
                        <ul class="service-list check">
                            <li>Non-destructive vehicle entry</li>
                            <li>Service for all car makes and models, including luxury brands</li>
                            <li>Help with trunk lockouts</li>
                            <li>Assistance with electronic key systems</li>
                            <li>Emergency key cutting for certain models</li>
                        </ul>
                    </div>
                    <div class="service-extra">
                        <h4 class="service-subtitle">Response Time</h4>
                        <p>We understand being locked out is frustrating, especially if you have somewhere to be. Our teams
                            work quickly while ensuring your vehicle isn't damaged in the process.</p>
                    </div>
                </div>
            </div>

            <!-- SERVICE 06 -->
            <div class="service-row">
                <div class="service-num">06</div>

                <div class="service-media">
                    <img src="{{ asset('assets/images/DesertRecoveryService.jpeg') }}" alt="Lockout">
                </div>

                <div class="service-text">
                    <h3 style="color:#d70006">Desert Recovery Service – Stuck in the Sand?</h3>

                    <p>Dubai's deserts are beautiful but unforgiving. If you've gone off-roading and gotten stuck in the
                        sand, we have the equipment and experience to safely pull you out.</p>

                    <div>
                        <h4>Desert Recovery Equipment:</h4>
                        <ul class="service-list check">
                            <li>Heavy-duty winches for serious situations</li>
                            <li>Sand ladders and recovery boards</li>
                            <li>High-capacity air compressors for tire pressure adjustments</li>
                            <li>4x4 recovery vehicles built for desert conditions</li>
                            <li>Experienced recovery specialists who know the terrain</li>
                        </ul>
                    </div>

                    <div class="service-extra">
                        <h4 class="service-subtitle">Common Desert Recovery Spots</h4>
                        <p> Al Qudra Lakes, Big Red (Al Hamar), Fossil Rock, Lahbab Desert, and surrounding dune areas.
                        </p>

                        <h5 class="service-subtitle-alt">Desert Safety Note:</h5>
                        <p>If you're stuck, don't keep spinning your tires—you'll dig yourself deeper. Call us and wait
                            safely
                            in your vehicle with the AC on until we arrive.
                        </p>
                    </div>
                </div>
            </div>

            <!-- SERVICE 07 -->
            <div class="service-row">
                <div class="service-num">07</div>

                <div class="service-text-grid">
                    <div>
                        <h3 style="color:#d70006">Basement & Underground Parking Recovery</h3>
                        <p>Dead battery in a mall parking basement? Car won't start in your building's underground garage?
                            These tight spaces require specialized equipment and experience.</p>
                    </div>
                    <div>
                        <h4>Basement Recovery Services:</h4>
                        <ul class="service-list check">
                            <li>Low-clearance equipment for tight spaces</li>
                            <li>Jump-start service in underground locations</li>
                            <li>Towing from basement parking when needed</li>
                            <li>Service for mall, hotel, and residential tower parking</li>
                        </ul>
                    </div>
                    <div class="service-extra">
                        <h4 class="service-subtitle">Frequent Service Areas</h4>
                        <p>Dubai Mall, Mall of the Emirates, Dubai Marina residential towers, Business Bay office buildings,
                            major hotel parking areas.</p>
                    </div>
                </div>
            </div>

            <!-- SERVICE 08 -->
            <div class="service-row">
                <div class="service-num">08</div>

                <div class="service-media">
                    <img src="{{ asset('assets/images/AccidentRecovery.jpeg') }}" alt="Lockout">
                </div>

                <div class="service-text">
                    <h3 style="color:#d70006">Accident Recovery & Post-Collision Towing</h3>

                    <p>After an accident, you need help quickly—not just for your vehicle, but with the paperwork and
                        coordination too.</p>

                    <div>
                        <h4>Accident Services Include:</h4>
                        <ul class="service-list check">
                            <li>24/7 response to accident scenes across Dubai</li>
                            <li>Coordination with Dubai Police for documentation</li>
                            <li>Communication with insurance companies</li>
                            <li>Safe towing to approved repair centers</li>
                            <li> Damaged vehicle storage if needed</li>
                            <li>Support with accident paperwork</li>
                        </ul>
                    </div>
                    <div>
                        <h4>What to Do After an Accident:</h4>
                        <ul class="service-list check">
                            <li>Move to a safe location if possible</li>
                            <li>Call Dubai Police (999) if there are injuries or major damage</li>
                            <li>Take photos of vehicle positions and damage</li>
                            <li>Call us for towing and recovery support</li>
                            <li>Don't admit fault—let police and insurance handle determinations</li>
                        </ul>
                    </div>
                    <div class="risk-table-wrap">
                        <h4 class="risk-title">Dubai Vehicle Risk & Roadside Solution</h4>

                        <div class="table-responsive">
                            <table class="risk-table">
                                <thead>
                                    <tr>
                                        <th>Vehicle Type</th>
                                        <th>Common Risk in Dubai</th>
                                        <th>Driver Pain Point</th>
                                        <th>Professional Solution by Toretto Recovery</th>
                                        <th>Location Focus</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td><strong>Sedan / Luxury Cars</strong></td>
                                        <td>Engine overheating in extreme heat</td>
                                        <td>Car breaks down on Sheikh Zayed Road during peak traffic</td>
                                        <td>On-site cooling system check, safe recovery to nearest garage, prevent engine
                                            damage</td>
                                        <td>Sheikh Zayed Rd, Downtown Dubai, Business Bay</td>
                                    </tr>

                                    <tr>
                                        <td><strong>SUV / 4x4</strong></td>
                                        <td>Flat tire on desert roads or highways</td>
                                        <td>Stranded in Al Qudra or outskirts</td>
                                        <td>Mobile tyre change, pressure check, spare fitting, safe tow if needed</td>
                                        <td>Al Qudra, Jebel Ali, Dubai–Al Ain Rd</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Electric Vehicles (EVs)</strong></td>
                                        <td>Battery drained in urban traffic</td>
                                        <td>Car stops near Dubai Marina</td>
                                        <td>EV-safe jump-start or tow, battery health check, charging location guidance</td>
                                        <td>Dubai Marina, JLT, DIFC</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Commercial Vans / Trucks</strong></td>
                                        <td>Heavy load causes clutch or brake failure</td>
                                        <td>Stuck on Dubai–Abu Dhabi highway with goods</td>
                                        <td>Immediate roadside assessment, diagnostics, flatbed recovery</td>
                                        <td>E11 (Dubai–Abu Dhabi Hwy), Industrial Areas</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Motorcycles / Scooters</strong></td>
                                        <td>Battery failure or puncture</td>
                                        <td>Rider stranded near mall or roadside</td>
                                        <td>Quick battery jump-start, tyre repair, motorcycle towing</td>
                                        <td>Sheikh Zayed Rd, Mall Areas</td>
                                    </tr>

                                    <tr>
                                        <td><strong>All Vehicles</strong></td>
                                        <td>Locked keys inside car</td>
                                        <td>Stressful lockout</td>
                                        <td>Non-destructive locksmith entry, ignition assistance</td>
                                        <td>Across Dubai incl. Downtown, Bur Dubai, Deira</td>
                                    </tr>

                                    <tr>
                                        <td><strong>All Vehicles</strong></td>
                                        <td>Ran out of fuel</td>
                                        <td>Stalled in traffic</td>
                                        <td>Emergency fuel delivery (petrol/diesel), safe refueling</td>
                                        <td>Highways, Sheikh Zayed Rd, Al Khail Rd</td>
                                    </tr>

                                    <tr>
                                        <td><strong>All Vehicles</strong></td>
                                        <td>Accidents / Minor collisions</td>
                                        <td>Confusion, insurance concerns</td>
                                        <td>Flatbed towing, vehicle transport, insurance documentation support</td>
                                        <td>Across Dubai major roads & freeways</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="recovery-cta-wrapper">
        <div class="container">
            <div class="row align-items-center">

                <!-- LEFT CONTENT -->
                <div class="col-lg-6">
                    <div class="cta-content">

                        <span class="cta-badge">Trusted 24/7 Roadside Assistance</span>

                        <h2 class="site-title" style="color: #ffffff">
                            Why Choose <span>Toretto Recovery</span><br>
                            for Roadside Help?
                        </h2>

                        <div class="cta-block">
                            <h4>We’re a Local Dubai Company</h4>
                            <p>
                                We’re not a call center in another country. Our team is based right here
                                in Dubai. We know the roads, traffic patterns, and common breakdown zones —
                                so help reaches you faster.
                            </p>
                        </div>

                        <div class="cta-block">
                            <h4>Transparent Pricing — No Hidden Fees</h4>
                            <p>
                                We tell you the price upfront. No surprises, no last-minute charges.
                                Just honest pricing for the service you need.
                            </p>

                            <ul class="cta-list">
                                <li>Location & distance from nearest team</li>
                                <li>Time of service (late-night emergencies)</li>
                                <li>Type of roadside service</li>
                                <li>Vehicle type & special equipment</li>
                            </ul>
                        </div>

                        <div class="cta-block">
                            <h4>Licensed & Insured</h4>
                            <p>
                                Fully compliant with RTA regulations. Licensed by Dubai authorities,
                                insured recovery vehicles, and trained professionals.
                            </p>
                        </div>

                        <div class="cta-block">
                            <h4>We Speak Your Language</h4>
                            <p>
                                English, Arabic, Hindi, Urdu & more — we make sure you clearly
                                understand what’s happening and your options.
                            </p>
                        </div>

                        <div class="cta-block">
                            <h4>Corporate & Fleet Services</h4>
                            <p>
                                Priority response, scheduled maintenance & reporting for fleets
                                to reduce downtime and costs.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="col-lg-6">
                    <div class="cta-image">
                        <img src="{{ asset('assets/images/Roadside Assistance.jpeg') }}"
                            alt="Emergency Roadside Assistance Dubai">
                    </div>
                </div>

            </div>


            <h3 style="color: #d70006">Service Areas We Cover</h3>
            <div class="hero-stats-cover row mt-3 mb-3">
                <div class="stats-box-cover col-3">
                    <h4>Dubai Central</h4>
                    <p>Business Bay, Downtown, DIFC, Dubai Marina, JBR, JLT, Tecom, Jumeirah</p>
                </div>

                <div class="stats-box-cover col-3">
                    <h4>Dubai North</h4>
                    <p>Deira, Bur Dubai, Al Qusais, Al Nahda, Muhaisnah, Mirdif</p>
                </div>

                <div class="stats-box-cover col-3">
                    <h4>Dubai South</h4>
                    <p>DIP, Al Quoz, Jebel Ali, Motor City, Arabian Ranches</p>
                </div>
                <div class="stats-box-cover col-3">
                    <h4>Sharjah & Other Emirates</h4>
                    <p>Sharjah, Ajman, Abu Dhabi (partners), RAK, Fujairah, UAQ</p>
                </div>
            </div>
        </div>
    </section>

    <section class="roadside-safety">
        <div class="container">
            <div class="row align-items-center">

                <!-- LEFT CONTENT -->
                <div class="col-lg-5">
                    <div class="safety-content">

                        <span class="safety-tag">Roadside Safety Guide</span>

                        <h2 class="site-title">When You're Stuck <br> on the Road,<br>
                            <span>Do It Instantly</span>
                        </h2>

                        <!-- STEP 1 -->
                        <div class="safety-step">
                            <h4>1. Stay Calm & Get to Safety</h4>
                            <ul class="check-list">
                                <li>Turn on hazard lights immediately</li>
                                <li>Move to the shoulder or emergency lane if possible</li>
                                <li>Exit carefully and stand away from traffic</li>
                                <li>Place a warning triangle if safe to do so</li>
                            </ul>
                        </div>

                        <!-- STEP 2 -->
                        <div class="safety-step">
                            <h4>2. Call for Help</h4>
                            <ul class="check-list">
                                <li>
                                    Dial our <strong>24/7 Hotline:</strong>
                                    <a href="tel:+971523003423">+971 52 300 3423</a>
                                </li>
                                <li>Share your live location (Google Maps preferred)</li>
                                <li>Explain the issue with your vehicle</li>
                            </ul>
                        </div>

                        <!-- STEP 3 -->
                        <div class="safety-step">
                            <h4>3. While Waiting for Assistance</h4>
                            <ul class="check-list">
                                <li>Stay inside your vehicle on busy highways</li>
                                <li>Use air conditioning or find shade in extreme heat</li>
                                <li>Keep your phone charged for updates</li>
                                <li>Avoid unlicensed roadside helpers</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="col-lg-7">
                    <div class="safety-image">
                        <img src="{{ asset('assets/images/RoadsideSafetyGuide.png') }}"
                            alt="Roadside Safety and Vehicle Recovery">
                    </div>
                </div>

            </div>

            <!-- PREVENTION TIPS -->
            <div class="prevention-area">
                <h3>Tips to Avoid Roadside Breakdowns in Dubai</h3>

                <div class="prevention-grid">

                    <div class="prevention-box">
                        <h5>Regular Vehicle Maintenance</h5>
                        <ul class="dot-list">
                            <li>Service your vehicle as per manufacturer recommendations</li>
                            <li>Check battery health every 18–24 months (Dubai heat reduces lifespan)</li>
                            <li>Inspect tires regularly for wear, cracks, and correct air pressure</li>
                            <li>Do not ignore dashboard warning lights or unusual noises</li>
                        </ul>
                    </div>

                    <div class="prevention-box">
                        <h5>Before Long or Highway Drives</h5>
                        <ul class="dot-list">
                            <li>Check tire pressure, tread depth, and overall condition</li>
                            <li>Ensure you have enough fuel for long routes</li>
                            <li>Confirm spare tire is inflated and tools are present</li>
                            <li>Carry essentials: water, phone charger, and warning triangle</li>
                        </ul>
                    </div>

                    <div class="prevention-box">
                        <h5>During Extreme Summer Heat</h5>
                        <ul class="dot-list">
                            <li>Park in shaded or covered areas whenever possible</li>
                            <li>Monitor coolant and engine temperature frequently</li>
                            <li>Avoid long idle times that can overheat the engine</li>
                            <li>Fix minor issues early before heat makes them worse</li>
                        </ul>
                    </div>

                    <div class="prevention-box">
                        <h5>Desert & Off-Road Driving Safety</h5>
                        <ul class="dot-list">
                            <li>Never go desert driving alone</li>
                            <li>Lower tire pressure for sand driving and re-inflate after</li>
                            <li>Carry recovery tools or know emergency contact numbers</li>
                            <li>Share your route and expected return time with someone</li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="faq-area">
        <div class="container">

            <h2 class="faq-title">Frequently Asked Questions</h2>

            <div class="faq-item">
                <button class="faq-question">
                    How quickly can you reach me?
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>
                        Response times depend on your location and how busy we are, but most calls in central Dubai areas
                        get help within <strong>30–45 minutes</strong>. During peak traffic hours or distant locations,
                        it may take longer. We always give an honest ETA when you call.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How much does roadside assistance cost in Dubai?
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>
                        Pricing depends on service type and distance. Basic services like jump-starts or tire changes
                        usually start around <strong>AED 150</strong>. Towing services can range from
                        <strong>AED 500+</strong>. We always confirm pricing before dispatch.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Do you work with insurance companies?
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>
                        Yes, we work with most major insurance providers in the UAE including AXA, Oman Insurance, RSA,
                        Orient Insurance, and others. If your policy includes roadside assistance coverage, we can often
                        bill your insurance directly. Bring your insurance card and policy details when we arrive.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What payment methods do you accept?
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>
                        We accept cash, credit/debit cards, and bank transfers. For corporate clients, we can set up monthly
                        invoicing.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can you help with electric vehicles (EVs)?
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>
                        Yes. Electric vehicles require special handling—especially during towing—to avoid damaging the
                        electric motor system. We transport all EVs on flatbed trucks. We service Tesla, Nissan Leaf, BMW
                        i-series, Audi e-tron, and other electric models.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What if you can't fix my car on the road?
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>
                        If the problem can't be solved on-site, we'll tow your vehicle to your preferred service center or
                        garage at no extra charge (within reasonable distance in Dubai/Sharjah). If you don't have a
                        preferred garage, we can recommend licensed repair centers.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Do you service Sharjah and other Emirates?
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>
                        Yes. We provide full service in Dubai and Sharjah. We also help drivers in Ajman and can arrange
                        assistance in Abu Dhabi, RAK, Fujairah, and UAQ through our network.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What areas in Dubai do you cover?
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We cover all of Dubai including Dubai Marina, Downtown Dubai, Business Bay, Jumeirah, Deira, Bur
                        Dubai, Al Barsha, Al Quoz, Motor City, Arabian Ranches, Dubai Sports City, JLT, Tecom, Discovery
                        Gardens, JBR, and surrounding areas.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Will you work during bad weather?
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes. We operate during sandstorms, rain, and other weather conditions—these are often when you need
                        help most. During severe weather warnings from authorities, response times may be slightly longer
                        for safety reasons, and we'll communicate realistic arrival times.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What if I'm stuck in the desert far from main roads?
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Desert recovery is a specialty service. We have 4x4 recovery vehicles, winches, and experienced teams
                        familiar with Dubai's desert areas. Call us, share your location, and we'll coordinate a desert
                        rescue.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can I get a membership or package deal?
                    <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes. We offer annual membership packages for individuals and families, as well as corporate fleet
                        packages. Contact us for details on membership benefits and pricing.</p>
                </div>
            </div>

        </div>
    </section>

    <section class="emergency-cta">
        <div class="container">

            <div class="cta-box">

                <div class="cta-text">
                    <h2>Ready to Get Back on the Road?</h2>
                    <p class="cta-sub">
                        Don't let a breakdown ruin your day. Whether you're dealing with a dead battery, flat tire, empty
                        fuel tank, or locked keys, we're here to help.
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

    <link rel="stylesheet"
        href="{{ asset('assets/css/service.css') }}?v={{ filemtime(public_path('assets/css/service.css')) }}">
    <script>
        document.querySelectorAll('.faq-question').forEach(btn => {
            btn.addEventListener('click', () => {
                const item = btn.parentElement;
                item.classList.toggle('active');
            });
        });
    </script>

@endsection
