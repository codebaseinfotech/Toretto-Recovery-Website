@extends('layouts.main')

@section('title', 'Car Recovery in Deira Dubai | Emergency Towing | Toretto Recovery')

@section('meta_description')
    Need car recovery or emergency towing in Deira, Dubai? Toretto Recovery offers 24/7 fast, damage-free vehicle recovery. Call now for an instant quote — no hidden charges.
@endsection

@section('meta_keywords', 'Need car recovery or emergency towing in Deira, Dubai? Toretto Recovery offers 24/7 fast, damage-free vehicle recovery. Call now for an instant quote — no hidden charges.
')

@section('head')
    @verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How quickly can you reach me in Deira?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "In most areas such as Al Rigga, Naif, Port Saeed, and Al Muteena, arrival usually takes between 20 and 35 minutes. Timing may vary depending on traffic and your exact location, but dispatch begins immediately after your call."
      }
    },
    {
      "@type": "Question",
      "name": "Do you recover luxury cars and sports vehicles?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Fully flat, soft-strapped flatbed trucks are used for low-clearance and high-value vehicles. Drivers are trained to handle luxury and sports cars safely, ensuring damage-free recovery."
      }
    },
    {
      "@type": "Question",
      "name": "How much does car recovery cost in Deira?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Costs depend on vehicle type, distance, and the nature of the recovery. A clear price is provided over the phone before dispatch, with no hidden or surprise charges."
      }
    },
    {
      "@type": "Question",
      "name": "What if my car is stuck in a basement parking?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Low-clearance recovery trucks designed for underground parking are available. Vehicles are safely extracted from basement car parks, which is a common request in this area."
      }
    },
    {
      "@type": "Question",
      "name": "Do you offer roadside assistance instead of towing?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Services include flat tyre changes, battery jump-starts, and minor roadside fixes. Towing is only used if the issue cannot be resolved on-site."
      }
    },
    {
      "@type": "Question",
      "name": "Can you tow my car after an accident?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Post-accident recovery is handled carefully, including vehicles with body damage, mechanical failure, or deflated tyres. Transport can be arranged to a garage, dealer, or any preferred location."
      }
    },
    {
      "@type": "Question",
      "name": "Is the service available on weekends and public holidays?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Service operates 24 hours a day, every day of the year, including weekends and public holidays."
      }
    },
    {
      "@type": "Question",
      "name": "Do you cover areas outside Deira?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. While this page focuses on Deira, coverage extends across Dubai, including central districts, industrial zones, and surrounding areas. Availability can be confirmed by phone."
      }
    },
    {
      "@type": "Question",
      "name": "What types of vehicles do you tow?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Supported vehicles include sedans, SUVs, 4x4s, pickup trucks, sports and luxury cars, vans, light commercial vehicles, and motorcycles. The appropriate recovery truck is selected for each vehicle type."
      }
    }
  ]
}
</script>


    @endverbatim
@endsection

@section('content')

    {{-- BREADCRUMB --}}
    <section class="site-breadcrumb" style="background:url('{{ asset('assets/images/contact-bg.jpg') }}')">
        <div class="container">
            <h1 class="breadcrumb-title-areas">Car Recovery in Deira, Dubai</h1>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a><i class="fa fa-angle-double-right"></i></li>
                <li><a href="{{ route('home') }}">Areas We Serve</a><i class="fa fa-angle-double-right"></i></li>
                <li class="active">Deira</li>
            </ul>
        </div>
    </section>

    {{-- ===================================
    SECTION 1 — HERO
    =================================== --}}
    <section class="de-hero-section">
        <div class="container">
            <div class="de-hero-grid">
                <div class="de-hero-text">
                    <span class="de-eyebrow"><i class="fas fa-location-dot"></i> Deira, Dubai</span>
                    <h2>24/7 <span>Emergency Towing Service</span></h2>
                    <p>When your car breaks down on Al Rigga Road or you find yourself stuck in the basement parking of Deira City Centre at midnight, you need help fast — not in an hour. That's exactly what Toretto Recovery is here for.</p>
                    <p>We provide car recovery near you and emergency towing service across Deira and all of Dubai — 24 hours a day, 7 days a week. From the busy lanes near Naif Souq to the waterfront stretch along Baniyas Road, our team reaches you quickly with the right equipment and zero damage to your vehicle.</p>
                    <p>With 6 advanced recovery trucks and trained technicians on the road, we handle everything from a simple battery failure to full <a class="text-link" href="{{ route('home') }}" target="_blank">vehicle recovery after a highway accident</a>. Whether you drive a Corolla or a Lamborghini, we treat every car with equal care and precision.</p>
                    <div class="de-hero-btns">
                        <a href="tel:+971545098498" class="theme-btn de-btn-primary"><i class="fas fa-phone"></i> Call Now</a>
                        <a href="https://wa.me/971545098498" class="theme-btn de-btn-outline" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    </div>
                    <div class="de-hero-badges">
                        <div class="de-badge"><i class="fas fa-clock"></i> 24/7 Available</div>
                        <div class="de-badge"><i class="fas fa-truck-fast"></i> 6 Recovery Trucks</div>
                        <div class="de-badge"><i class="fas fa-shield-halved"></i> Zero Damage</div>
                    </div>
                </div>
                <div class="de-hero-img-wrap">
                    <img src="{{ asset('assets/images/car-recovery-deira-dubai.jpg') }}"
                         alt="Car Recovery in Deira Dubai"
                         class="de-hero-img">
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 2 — WHAT IS CAR RECOVERY
    =================================== --}}
    <section class="de-what-section">
        <div class="container">
            <div class="de-what-grid">
                <div class="de-what-content">
                    <span class="de-eyebrow"><i class="fas fa-circle-info"></i> Understanding Recovery</span>
                    <h2>What is Car Recovery — and Why Does <span>Deira Need It?</span></h2>
                    <p>Car recovery is the process of safely moving a disabled, damaged, or stuck vehicle from one location to another — usually to a garage, dealership, or the owner's preferred destination. It includes services like flatbed towing, winching, off-road sand recovery, and jump-start assistance.</p>
                    <p>Deira is one of Dubai's oldest and most densely trafficked districts. The area blends narrow heritage streets near Gold Souk Metro Station with high-speed connectors like Omar bin al-Khattab Road and the heavy commercial flow around Port Saeed. That mix of old lanes, multi-level parking, and fast arterials creates a constant need for quick, professional vehicle recovery.</p>
                    <p>On top of that, Dubai's summer heat pushes engines and tyres to their limits. Breakdowns spike between June and September, and drivers near Al Mamzar Beach often find themselves stranded in areas where a standard <a class="text-link" href="{{ route('our-service.ourservice', ['slug' => 'roadside-assistance-dubai']) }}" target="_blank">roadside call-out</a> takes forever. That's where a dedicated, fast-response <a   class="text-link"href="{{ route('our-service.ourservice', ['slug' => 'towing-service-dubai']) }}" target="_blank">towing company in Deira</a> makes all the difference.</p>
                </div>
                <div class="de-what-img-wrap">
                    <img src="{{ asset('assets/images/breakdown-recovery-deira-dubai.jpg') }}"
                         alt="Breakdown recovery in Deira Dubai"
                         class="de-what-img">
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 3 — SERVICES INCLUDED
    =================================== --}}
    <section class="de-services-section">
        <div class="container">
            <div class="de-section-header text-center">
                <span class="de-eyebrow light"><i class="fas fa-wrench"></i> Our Services</span>
                <h2>What's Included in Our <span>Car Recovery Service</span></h2>
                <p>Every job we take is handled by a certified technician with the right truck for your vehicle type. </br> Here's what you get when you call Toretto Recovery:</p>
            </div>

            <div class="de-svc-grid">
                <div class="de-svc-card">
                    <div class="de-svc-icon"><i class="fas fa-truck-ramp-box"></i></div>
                    <h4>Flatbed Towing</h4>
                    <p>For all car types — sedans, SUVs, sports cars, luxury vehicles</p>
                </div>
                <div class="de-svc-card">
                    <div class="de-svc-icon"><i class="fas fa-bolt"></i></div>
                    <h4>Emergency Towing</h4>
                    <p>Rapid dispatch from anywhere in Deira — we come to you fast</p>
                </div>
                <div class="de-svc-card">
                    <div class="de-svc-icon"><i class="fas fa-compass"></i></div>
                    <h4>Off-Road & Sand Recovery</h4>
                    <p>Especially useful after weekend desert drives near Ras Al Khor</p>
                </div>
                <div class="de-svc-card">
                    <div class="de-svc-icon"><i class="fas fa-square-parking"></i></div>
                    <h4>Basement Parking Recovery</h4>
                    <p>Low-clearance trucks designed for underground car parks</p>
                </div>
                <div class="de-svc-card">
                    <div class="de-svc-icon"><i class="fas fa-car-burst"></i></div>
                    <h4><a class="text-link" href="{{ route('our-service.ourservice', ['slug' => 'accidental-car-recovery-dubai']) }}" target="_blank">Accident Vehicle Recovery</a></h4>
                    <p>Safe, careful handling for damaged or totalled cars</p>
                </div>
                <div class="de-svc-card">
                    <div class="de-svc-icon"><i class="fas fa-car-battery"></i></div>
                    <h4>Battery Jump-Start</h4>
                    <p>On-the-spot fix so you don't need a tow if the battery is the issue</p>
                </div>
                <div class="de-svc-card">
                    <div class="de-svc-icon"><i class="fas fa-tire"></i></div>
                    <h4>Tyre Change Assistance</h4>
                    <p>Flat tyre help when you're stuck on a busy road</p>
                </div>
                <div class="de-svc-card">
                    <div class="de-svc-icon"><i class="fas fa-link"></i></div>
                    <h4>Winching Service</h4>
                    <p>For cars stuck in sand, mud, or unusual terrain</p>
                </div>
                <div class="de-svc-card">
                    <div class="de-svc-icon"><i class="fas fa-lock-open"></i></div>
                    <h4>Locked Vehicle Assistance</h4>
                    <p>Basic unlock support before referring to a locksmith if needed</p>
                </div>
                <div class="de-svc-card">
                    <div class="de-svc-icon"><i class="fas fa-motorcycle"></i></div>
                    <h4>Motorcycle Recovery</h4>
                    <p>Yes, we handle two-wheelers too</p>
                </div>
                <div class="de-svc-card">
                    <div class="de-svc-icon"><i class="fas fa-van-shuttle"></i></div>
                    <h4>Van and commercial vehicle towin</h4>
                    <p>light commercial fleet covered</p>
                </div>
            </div>

            <p class="de-svc-note">All services use modern flatbed and wheel-lift recovery systems that protect your vehicle's undercarriage, bumpers, and bodywork throughout the move.</p>
        </div>
    </section>

    {{-- ===================================
    SECTION 4 — WHY CHOOSE US
    =================================== --}}
    <section class="de-why-section">
        <div class="container">
            <div class="de-section-header text-center">
                <span class="de-eyebrow"><i class="fas fa-award"></i> Why Us</span>
                <h2>Why Choose <span>Toretto Recovery</span> in Deira?</h2>
                <p>There's no shortage of towing companies that take calls in Deira. </br>
                 But here's what separates us from most:</p>
            </div>

            <div class="de-why-grid">
                <div class="de-why-card">
                    <div class="de-why-img-wrap">
                        <img src="{{ asset('assets/images/flatbed-recovery-dubai.jpg') }}"
                             alt="Fast response recovery in Deira"
                             class="de-why-img">
                    </div>
                    <div class="de-why-content">
                        <h3><i class="fas fa-gauge-high"></i> Speed You Can Count On</h3>
                        <p>We keep trucks stationed across multiple zones so our average response time in areas like Muteena, Salah Al Din, and Al Qusais is significantly faster than typical operators. When you call, we dispatch immediately.</p>
                    </div>
                </div>
                <div class="de-why-card">
                    <div class="de-why-img-wrap">
                        <img src="{{ asset('assets/images/expert-car-recovery-service-near-me.jpg') }}"
                             alt="Fleet of 6 recovery trucks"
                             class="de-why-img">
                    </div>
                    <div class="de-why-content">
                        <h3><i class="fas fa-truck-moving"></i> <a href="https://torettorecovery.ae/flatbed-recovery-dubai" class="text-link" >Fleet of 6 Recovery Trucks</a></h3>
                        <p>Our fleet includes flatbed trucks, wheel-lift vehicles, and low-clearance recovery units — each fitted with safety straps, GPS, and communication tools. We send the right truck for every situation.</p>
                    </div>
                </div>
                <div class="de-why-card">
                    <div class="de-why-img-wrap">
                        <img src="{{ asset('assets/images/luxury-car-towing-by-flatbed-cover.jpg') }}"
                             alt="Luxury car specialist towing"
                             class="de-why-img">
                    </div>
                    <div class="de-why-content">
                        <h3><i class="fas fa-gem"></i> <a href="https://torettorecovery.ae/luxury-sports-car-handling-dubai" class="text-link"> Luxury & Sports Car Specialists</a></h3>
                        <p>Low-riding supercars and luxury sedans need damage-free flatbed towing. Our technicians are trained specifically for high-value vehicles — Ferrari, Rolls-Royce, Porsche, Mercedes — handled with absolute care.</p>
                    </div>
                </div>
            </div>

            <div class="de-why-strip">
                <div class="de-why-pill">
                    <i class="fas fa-tag"></i>
                    <div>
                        <strong>Transparent Pricing — No Surprises</strong>
                        <span>We quote before we arrive. No meter surprises, no add-on charges at the destination. The price you hear on the phone is the price you pay.</span>
                    </div>
                </div>
                <div class="de-why-pill">
                    <i class="fas fa-clock"></i>
                    <div>
                        <strong>24/7 Availability</strong>
                        <span>Breakdowns don't follow business hours. Our lines stay open all day, every day — including weekends, public holidays, and late nights near the Deira Fish Market or the commercial zones of Al Khabaisi.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 5 — TESTIMONIALS
    =================================== --}}
    <section class="de-testimonials-section">
        <div class="container">
            <div class="de-section-header text-center">
                <span class="de-eyebrow light"><i class="fas fa-quote-left"></i> Testimonials</span>
                <h2>What Our <span>Customers Say</span></h2>
            </div>

            <div class="de-testimonial-grid">
                <div class="de-testimonial-card">
                    <div class="de-testimonial-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>"I broke down near Al Rigga metro at 11pm and was honestly expecting a long wait. Toretto showed up in under 25 minutes, handled my BMW perfectly on their flatbed, and the driver was completely professional. Highly recommend."</p>
                    <div class="de-testimonial-author">
                        <strong>Ahmed K.</strong>
                        <span>Al Muteena</span>
                    </div>
                </div>
                <div class="de-testimonial-card">
                    <div class="de-testimonial-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>"Got my car stuck in the basement of a building on Baniyas Road. The team came with a low-clearance truck and got it out without a single scratch. Price was exactly what they quoted over the phone."</p>
                    <div class="de-testimonial-author">
                        <strong>Lina R.</strong>
                        <span>Port Saeed</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 6 — COVERAGE AREAS
    =================================== --}}
    <section class="de-coverage-section">
        <div class="container">
            <div class="de-section-header text-center">
                <span class="de-eyebrow"><i class="fas fa-map-marked-alt"></i> Coverage</span>
                <h2>Areas We Cover in and <span>Around Deira</span></h2>
                <p>Our primary base covers all of Deira and extends across Dubai. If you're stranded anywhere in the areas below, one call gets help moving in your direction.</p>
            </div>

            <div class="de-cov-layout">
                <div class="de-cov-cards">
                    <div class="de-cov-card">
                        <div class="de-cov-num">01</div>
                        <div>
                            <h4>Al Rigga</h4>
                            <p>Including Al Rigga Road and surrounding streets</p>
                        </div>
                    </div>
                    <div class="de-cov-card">
                        <div class="de-cov-num">02</div>
                        <div>
                            <h4>Naif</h4>
                            <p>Old town streets and Naif Souq area</p>
                        </div>
                    </div>
                    <div class="de-cov-card">
                        <div class="de-cov-num">03</div>
                        <div>
                            <h4>Al Muteena</h4>
                            <p>Residential and mixed-use zones</p>
                        </div>
                    </div>
                    <div class="de-cov-card">
                        <div class="de-cov-num">04</div>
                        <div>
                            <h4>Port Saeed</h4>
                            <p>Near the creek and waterfront commercial stretch</p>
                        </div>
                    </div>
                    <div class="de-cov-card">
                        <div class="de-cov-num">05</div>
                        <div>
                            <h4>Al Mamzar</h4>
                            <p>Coastal road and park-adjacent areas</p>
                        </div>
                    </div>
                    <div class="de-cov-card">
                        <div class="de-cov-num">06</div>
                        <div>
                            <h4>Al Ras</h4>
                            <p>Near the Gold Souk and creek crossing</p>
                        </div>
                    </div>
                    <div class="de-cov-card">
                        <div class="de-cov-num">07</div>
                        <div>
                            <h4>Salah Al Din</h4>
                            <p>Main corridor and surrounding blocks</p>
                        </div>
                    </div>
                    <div class="de-cov-card">
                        <div class="de-cov-num">08</div>
                        <div>
                            <h4>Al Khabaisi</h4>
                            <p>Light industrial and residential mix</p>
                        </div>
                    </div>
                    <div class="de-cov-card">
                        <div class="de-cov-num">09</div>
                        <div>
                            <h4>Abu Hail</h4>
                            <p>Near Etisalat and community roads</p>
                        </div>
                    </div>
                    <div class="de-cov-card">
                        <div class="de-cov-num">10</div>
                        <div>
                            <h4>Al Twar</h4>
                            <p>Eastern Deira residential neighbourhoods</p>
                        </div>
                    </div>
                    <div class="de-cov-card">
                        <div class="de-cov-num">11</div>
                        <div>
                            <h4>Al Qusais</h4>
                            <p>Bordering Deira, fast coverage area</p>
                        </div>
                    </div>
                    <div class="de-cov-card">
                        <div class="de-cov-num">12</div>
                        <div>
                            <h4>Hor Al Anz</h4>
                            <p>Accessible via major arterials</p>
                        </div>
                    </div>
                    <div class="de-cov-card">
                        <div class="de-cov-num">13</div>
                        <div>
                            <h4>Mirdif</h4>
                            <p>Eastern coverage zone</p>
                        </div>
                    </div>
                    <div class="de-cov-card">
                        <div class="de-cov-num">14</div>
                        <div>
                            <h4>Festival City</h4>
                            <p>Waterfront and mall approach roads</p>
                        </div>
                    </div>
                    <div class="de-cov-card">
                        <div class="de-cov-num">15</div>
                        <div>
                            <h4>Umm Ramool</h4>
                            <p>Near Dubai Airport free zone roads</p>
                        </div>
                    </div>
                </div>

                <div class="de-cov-img-wrap">
                    <img src="{{ asset('assets/images/expert-car-recovery-service-near-me.jpg') }}"
                         alt="Recovery team covering Deira areas"
                         class="de-cov-img">
                </div>
            </div>

            <p class="de-area-note">We also cover all other Dubai districts — including Downtown, Business Bay, Jumeirah, Al Barsha, Dubai Silicon Oasis, and the entire Sheikh Zayed Road corridor. <strong>No part of Dubai is out of reach.</strong></p>
        </div>
    </section>

 

    {{-- ===================================
    SECTION 7 — FAQ
    =================================== --}}
    <section class="de-faq-section">
        <div class="container">
            <div class="de-section-header text-center">
                <span class="de-eyebrow light"><i class="fas fa-circle-question"></i> FAQ</span>
                <h2>Frequently Asked <span>Questions</span></h2>
            </div>

            <div class="de-faq-list">
                <div class="de-faq-item active">
                    <button class="de-faq-q" aria-expanded="true">
                        <span>How quickly can you reach me in Deira?</span>
                        <div class="de-faq-icon"><i class="fas fa-minus"></i></div>
                    </button>
                    <div class="de-faq-answer">
                        <p>In most parts of Deira — including Al Rigga, Naif, Port Saeed, and Al Muteena — we typically arrive within 20 to 35 minutes. Response time varies slightly based on traffic and exact location, but we dispatch as soon as you call.</p>
                    </div>
                </div>
                <div class="de-faq-item">
                    <button class="de-faq-q" aria-expanded="false">
                        <span>Do you recover luxury cars and sports vehicles?</span>
                        <div class="de-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="de-faq-answer">
                        <p>Yes. We use fully flat, soft-strapped flatbed trucks for low-clearance and high-value vehicles. Our drivers are trained in luxury car handling and we regularly recover vehicles like Ferraris, Lamborghinis, Mercedes, and Range Rovers without any damage.</p>
                    </div>
                </div>
                <div class="de-faq-item">
                    <button class="de-faq-q" aria-expanded="false">
                        <span>How much does car recovery cost in Deira?</span>
                        <div class="de-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="de-faq-answer">
                        <p>Pricing depends on vehicle type, distance, and type of recovery needed. We give you a clear quote over the phone before we arrive. There are no hidden fees or charges added at the end.</p>
                    </div>
                </div>
                <div class="de-faq-item">
                    <button class="de-faq-q" aria-expanded="false">
                        <span>What if my car is stuck in a basement parking?</span>
                        <div class="de-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="de-faq-answer">
                        <p>We have low-clearance recovery trucks built specifically for underground car parks. This is one of the most common requests we get in Deira — particularly in buildings around Baniyas Road, Al Muteena, and Festival City.</p>
                    </div>
                </div>
                <div class="de-faq-item">
                    <button class="de-faq-q" aria-expanded="false">
                        <span>Do you offer roadside assistance — not just towing?</span>
                        <div class="de-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="de-faq-answer">
                        <p>Yes. If the issue is a flat tyre, dead battery, or minor mechanical fault, we offer on-site roadside assistance first. Towing only happens if the car can't be fixed where it is.</p>
                    </div>
                </div>
                <div class="de-faq-item">
                    <button class="de-faq-q" aria-expanded="false">
                        <span>Can you tow my car after an accident?</span>
                        <div class="de-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="de-faq-answer">
                        <p>Absolutely. We handle post-accident vehicle recovery carefully — even for cars with body damage, deflated tyres, or mechanical failure from a collision. We work with most insurance companies and can transport your vehicle to any location you specify.</p>
                    </div>
                </div>
                <div class="de-faq-item">
                    <button class="de-faq-q" aria-expanded="false">
                        <span>Is the service available on weekends and public holidays?</span>
                        <div class="de-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="de-faq-answer">
                        <p>Yes — 24 hours a day, every day of the year. We don't close on Fridays, Saturdays, or public holidays. Breakdowns don't wait, and neither do we.</p>
                    </div>
                </div>
                <div class="de-faq-item">
                    <button class="de-faq-q" aria-expanded="false">
                        <span>Do you cover areas outside Deira in Dubai?</span>
                        <div class="de-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="de-faq-answer">
                        <p>Yes. While Deira is our primary zone, Toretto Recovery operates across all of Dubai — from Jumeirah and Downtown to Al Quoz, Sharjah border areas, and Dubai Investment Park.</p>
                    </div>
                </div>
                <div class="de-faq-item">
                    <button class="de-faq-q" aria-expanded="false">
                        <span>What types of vehicles do you tow?</span>
                        <div class="de-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="de-faq-answer">
                        <p>We recover sedans, SUVs, 4x4s, pickup trucks, sports cars, luxury vehicles, vans, light commercial vehicles, and motorcycles. Our fleet has the right truck for each vehicle type.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 8 — REAL RECOVERY STORY
    =================================== --}}
    <section class="de-story-section">
        <div class="container">
            <div class="de-story-grid">
                <div class="de-story-img-wrap">
                    <img src="{{ asset('assets/images/flatbed-recovery-dubai.jpg') }}"
                         alt="Real recovery story in Deira"
                         class="de-story-img">
                </div>
                <div class="de-story-content">
                    <span class="de-eyebrow light"><i class="fas fa-book-open"></i> Real Recovery Story</span>
                    <h2>Stuck in Salah Al Din at <span>Peak Hours</span></h2>
                    <p>Earlier this year, a driver contacted us after his Toyota Land Cruiser stalled in the middle of Salah Al Din Street during morning rush hour. The vehicle had a complete engine failure and was blocking a lane — creating a traffic backup and a stressful situation for the owner.</p>
                    <p>Our team dispatched a heavy-duty flatbed from a nearby zone and reached the location in under <strong>28 minutes</strong>. The truck operator coordinated with traffic, safely winched the Land Cruiser onto the flatbed, and cleared the scene quickly.</p>
                    <p>The vehicle was delivered to the client's preferred service centre in Al Quoz the same morning. The client left us a <strong>5-star review</strong> and specifically mentioned how calm and professional the driver stayed throughout.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 9 — CTA
    =================================== --}}
    <section class="de-cta-section">
        <div class="container">
            <div class="de-cta-block">
                <span class="de-eyebrow light"><i class="fas fa-bolt"></i> Get Help Now</span>
                <h2>Book Car Recovery in <span>Deira Right Now</span></h2>
                <div class="de-cta-content">
                    <p>Call us now for immediate dispatch. Visit our website at <strong>Toretto Recovery</strong> or request a quote directly. Our team is available <strong>24/7, every day of the year.</strong></p>
                    <p class="de-cta-highlight">Don't wait on the side of the road. Get fast, professional emergency towing in Deira from a team that treats your car the way it deserves to be treated.</p>
                </div>
                <div class="de-cta-btns">
                    <a href="tel:+971545098498" class="theme-btn de-btn-primary"><i class="fas fa-phone"></i> Call For Instant Dispatch</a>
                    <a href="https://wa.me/971545098498" class="theme-btn de-btn-outline" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp Us</a>
                </div>
            </div>
        </div>
    </section>

    <link rel="stylesheet"
        href="{{ asset('assets/css/dubai-deira.css') }}?v={{ filemtime(public_path('assets/css/dubai-deira.css')) }}">

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const faqItems = document.querySelectorAll('.de-faq-list .de-faq-item');
            faqItems.forEach(function (item) {
                const btn = item.querySelector('.de-faq-q');
                btn.addEventListener('click', function () {
                    const isActive = item.classList.contains('active');
                    faqItems.forEach(function (el) {
                        el.classList.remove('active');
                        el.querySelector('.de-faq-q').setAttribute('aria-expanded', 'false');
                        el.querySelector('.de-faq-icon i').className = 'fas fa-plus';
                    });
                    if (!isActive) {
                        item.classList.add('active');
                        btn.setAttribute('aria-expanded', 'true');
                        item.querySelector('.de-faq-icon i').className = 'fas fa-minus';
                    }
                });
            });
        });
    </script>

@endsection