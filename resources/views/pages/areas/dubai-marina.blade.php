@extends('layouts.main')

@section('title', 'Car Recovery Dubai Marina — 24/7 | Toretto Recovery')

@section('meta_description')
    Stuck in Dubai Marina? Toretto Recovery sends licensed, insured operators to you — 24/7. Breakdown, accident, flat tyre,
    locked out, EV recovery, basement extraction & more.
@endsection

@section('meta_keywords',
    'Car Recovery Dubai Marina, Towing Dubai Marina, Emergency Recovery 24/7, JBR Towing, Marina
    Walk Recovery')

@section('head')
    @verbatim
        <script type="application/ld+json">
        {
  "@context": "https://schema.org",
  "@type": "AutoTowing",
  "@id": "https://torettorecovery.com/car-recovery-dubai-marina#business",
  "name": "Toretto Recovery",
  "url": "https://torettorecovery.com/car-recovery-dubai-marina",
  "logo": "https://torettorecovery.com/logo.png",
  "image": "https://torettorecovery.com/truck.jpg",
  "description": "Professional 24/7 car recovery service in Dubai Marina. Licensed and insured operators providing breakdown recovery, accident towing, EV recovery, basement parking extraction, and luxury vehicle transport.",
  "telephone": " +971 523003423",
  "priceRange": "$$",
  "address": {
    "@type": " 274 Street - Dubai Investment Park - 2 - Dubai",
    "addressLocality": "Dubai Marina",
    "addressRegion": "Dubai",
    "addressCountry": "AE"
  },
  "areaServed": [
    {
      "@type": "Place",
      "name": "Dubai Marina"
    },
    {
      "@type": "Place",
      "name": "Jumeirah Beach Residence"
    },
    {
      "@type": "Place",
      "name": "Sheikh Zayed Road"
    },
    {
      "@type": "Place",
      "name": "Palm Jumeirah"
    },
    {
      "@type": "Place",
      "name": "Dubai Media City"
    },
    {
      "@type": "Place",
      "name": "Al Sufouh"
    }
  ],
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
    "https://www.google.com/maps"
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
      "name": "Do you recover electric vehicles in Dubai Marina?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Electric vehicles must be flatbed-towed. Our trucks and operators are equipped and trained to handle EV recovery safely."
      }
    },
    {
      "@type": "Question",
      "name": "How fast can you reach JBR or Marina Walk?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Typically within 20–35 minutes depending on traffic. We provide a realistic ETA when you call."
      }
    },
    {
      "@type": "Question",
      "name": "Will towing damage my car?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Our operators assess the vehicle first and use the correct recovery method to prevent damage."
      }
    },
    {
      "@type": "Question",
      "name": "Can you recover a car from a basement parking?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Basement and low-clearance parking recovery is one of our most common services in Dubai Marina."
      }
    },
    {
      "@type": "Question",
      "name": "Do you work with insurance companies?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We provide the necessary recovery documentation and assist with insurance requirements where applicable."
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
            <h1 class="breadcrumb-title-areas">Car Recovery Dubai Marina</h1>
            <ul class="breadcrumb-menu">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                    <i class="fa fa-angle-double-right"></i>
                </li>
                <li>
                    <a href="{{ route('home') }}">Areas We Serve</a>
                    <i class="fa fa-angle-double-right"></i>
                </li>
                <li class="active">Dubai Marina</li>
            </ul>
        </div>
    </section>

    {{-- ===================================
    SECTION 1 — HERO
    =================================== --}}
    <section class="dm-hero-section">
        <div class="container">
            <div class="dm-hero-grid">

                <div class="dm-hero-text">
                    <span class="dm-eyebrow"><i class="fas fa-location-dot"></i> Dubai Marina</span>
                    <h2>Stuck in Dubai Marina? <span>We'll Get You Moving — Fast.</span></h2>
                    <p class="dm-hero-tagline">24/7 car recovery for every vehicle, every situation, no drama.</p>

                    <div class="dm-trust-bullets">
                        <div class="dm-trust-item"><i class="fas fa-circle-check"></i> Licensed & Insured Operators</div>
                        <div class="dm-trust-item"><i class="fas fa-circle-check"></i> Modern, RTA-Compliant Tow Trucks
                        </div>
                        <div class="dm-trust-item"><i class="fas fa-circle-check"></i> All Vehicles — All Situations</div>
                        <div class="dm-trust-item"><i class="fas fa-circle-check"></i> Response Time: 30 Minutes or Less
                        </div>
                    </div>

                    <div class="dm-hero-btns">
                        <a href="tel:+971523003423" class="theme-btn dm-btn-primary">
                            <i class="fas fa-phone"></i> Call Now — We Answer Day & Night
                        </a>
                        <a href="{{ route('home') }}" target="_blank" class="theme-btn dm-btn-secondary">
                            Book Online <i class="fas fa-arrow-right-long"></i>
                        </a>
                    </div>
                </div>

                <div class="dm-hero-img-wrap">
                    <img src="{{ asset('assets/images/Get-You-Moving.png') }}" alt="Car recovery service in Dubai Marina"
                        class="dm-hero-img">
                </div>

            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 2 — WHO WE ARE
    =================================== --}}
    <section class="dm-about-section">
        <div class="container">
            <div class="dm-about-grid">
                <div class="dm-about-img-wrap">
                    <img src="{{ asset('assets/images/Situation-That-Leaves.png') }}"
                        alt="Toretto Recovery operator loading vehicle" class="dm-about-img">
                    <div class="dm-about-img-tag">
                        <i class="fas fa-shield-halved"></i>
                        <span>Licensed & Insured</span>
                    </div>
                </div>
                <div class="dm-about-text">
                    <span class="dm-eyebrow"><i class="fas fa-user-shield"></i> Who We Are</span>
                    <h2>Toretto Recovery — <span>Built for Real Driving Problems</span></h2>
                    <p>
                        We're not a call center that passes you to a stranger. Toretto Recovery is a
                        <a class="text-link" href="{{ route('home') }}" target="_blank"> professional vehicle recovery </a>
                        company operated by trained, insured, and licensed technicians who actually
                        show up — with the right equipment for your exact situation.
                    </p>
                    <p>
                        Every operator on our team is certified for <a class="text-link"
                            href="{{ route('our-service.ourservice', ['slug' => 'towing-service-dubai']) }}"
                            target="_blank"> roadside recovery and towing. </a> Every truck we
                        dispatch carries full insurance coverage. When you're stranded in a tight Marina parking
                        basement or broken down on the Sheikh Zayed Road exit leading in, you need someone who's
                        done this a hundred times before. That's us.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 3 — SITUATIONS WE HANDLE
    =================================== --}}
    <section class="dm-situations-section">
        <div class="container">
            <div class="dm-section-header text-center">
                <span class="dm-eyebrow light"><i class="fas fa-exclamation-triangle"></i> Situations We Handle</span>
                <h2>Every Situation That Leaves You Stranded — <span>We Cover All of Them</span></h2>
                <p>Most people only think about recovery after it happens. Here's every scenario where Toretto Recovery
                    steps in:</p>
            </div>

            <div class="dm-sit-grid">

                <div class="dm-sit-card">
                    <div class="dm-sit-icon"><i class="fas fa-engine-warning"></i></div>
                    <h4> Mechanical <a class="text-link"
                            href="{{ route('our-service.ourservice', ['slug' => 'vehicle-recovery-service-dubai']) }}"
                            target="_blank"> Breakdown Recovery </a> </h4>
                    <p>Engine died? Car won't start? Failed alternator, snapped timing belt, or overheated engine — we
                        recover your vehicle safely to your preferred workshop.</p>
                </div>

                <div class="dm-sit-card">
                    <div class="dm-sit-icon"><i class="fas fa-car-battery"></i></div>
                    <h4><a class="text-link"
                            href="{{ route('our-service.ourservice', ['slug' => 'roadside-assistance-dubai']) }}"
                            target="_blank">Battery Failure & Jump Start</a></h4>
                    <p>Dead battery in the Marina Walk multilevel? If a jump start works, we do it on-site. If it's beyond
                        saving, we tow safely.</p>
                </div>

                <div class="dm-sit-card">
                    <div class="dm-sit-icon"><i class="fas fa-gas-pump"></i></div>
                    <h4>Wrong Fuel / Run Out of Fuel</h4>
                    <p>Diesel in a petrol car? Gauge misjudged? We handle misfuelling recovery, engine flush coordination,
                        and emergency fuel delivery.</p>
                </div>

                <div class="dm-sit-card">
                    <div class="dm-sit-icon"><i class="fas fa-key"></i></div>
                    <h4>Lockout — Keys Inside</h4>
                    <p>Locked your keys in the car outside JBR? Our operators carry specialist non-damaging entry tools —
                        back in without a scratch.</p>
                </div>

                <div class="dm-sit-card">
                    <div class="dm-sit-icon"><i class="fas fa-car-burst"></i></div>
                    <h4><a class="text-link"
                            href="{{ route('our-service.ourservice', ['slug' => 'accidental-car-recovery-dubai']) }}"
                            target="_blank">Accident Recovery</a></h4>
                    <p>After a collision, we work quickly to get your vehicle off the road, prevent secondary incidents, and
                        tow it to your preferred body shop.</p>
                </div>

                <div class="dm-sit-card">
                    <div class="dm-sit-icon"><i class="fas fa-cloud-showers-heavy"></i></div>
                    <h4>Flood / Water Damage</h4>
                    <p>Vehicle waterlogged or stuck in a flooded stretch? Don't start the engine. Call us — we recover it
                        with minimal additional damage.</p>
                </div>

                <div class="dm-sit-card">
                    <div class="dm-sit-icon"><i class="fas fa-mound"></i></div>
                    <h4>Stuck in Sand or Soft Ground</h4>
                    <p>Near reclamation areas or construction zones — we carry straps, shackles, and snatch blocks to
                        extract vehicles without drivetrain damage.</p>
                </div>

                <div class="dm-sit-card">
                    <div class="dm-sit-icon"><i class="fas fa-square-parking"></i></div>
                    <h4>Stuck in Parking Basement</h4>
                    <p>Marina's underground car parks are notoriously tight. Our operators are trained for confined-space
                        recovery with low-clearance equipment.</p>
                </div>

                <div class="dm-sit-card">
                    <div class="dm-sit-icon"><i class="fas fa-circle-dot"></i></div>
                    <h4>Tyre Blowout / Flat Tyre</h4>
                    <p>No spare? Spare's also flat? We come to you, assess it, and either fit your spare properly or tow you
                        to the nearest tyre shop safely.</p>
                </div>

                <div class="dm-sit-card">
                    <div class="dm-sit-icon"><i class="fas fa-road-barrier"></i></div>
                    <h4>Suspension / Axle Failure</h4>
                    <p>A pothole or kerb strike that's collapsed your suspension means your car cannot be driven — we <a
                            class="text-link"
                            href="{{ route('our-service.ourservice', ['slug' => 'flatbed-recovery-dubai']) }}"
                            target="_blank">flatbed-tow</a> to avoid further harm.</p>
                </div>

                <div class="dm-sit-card">
                    <div class="dm-sit-icon"><i class="fas fa-car-side"></i></div>
                    <h4>Overturned Vehicle</h4>
                    <p>Vehicles on their side or roof require specialist lifting and rigging — our senior operators are
                        trained and equipped for this.</p>
                </div>

                <div class="dm-sit-card">
                    <div class="dm-sit-icon"><i class="fas fa-plug-circle-bolt"></i></div>
                    <h4>Electric Vehicle Recovery</h4>
                    <p>EVs cannot be towed conventionally — they must be flatbed-transported. Our trucks are equipped and
                        operators trained for EV-specific recovery.</p>
                </div>

                <div class="dm-sit-card">
                    <div class="dm-sit-icon"><i class="fas fa-gauge-high"></i></div>
                    <h4>Supercar & Low-Clearance</h4>
                    <p>Our flatbed trucks and low-angle loading ramps handle supercars and low-profile vehicles without
                        scraping splitters or damaging bodywork.</p>
                </div>

                <div class="dm-sit-card">
                    <div class="dm-sit-icon"><i class="fas fa-van-shuttle"></i></div>
                    <h4>Van, SUV & Heavy Vehicle</h4>
                    <p>Large family SUV? Commercial van? We cover those too — with appropriate-rated trucks and rigging for
                        safe recovery.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 4 — HOW IT WORKS
    =================================== --}}
    <section class="dm-process-section">
        <div class="container">
            <div class="dm-process-top">
                <div class="dm-process-img-wrap">
                    <img src="{{ asset('assets/images/how-it-works-marina.png') }}"
                        alt="Toretto Recovery tow truck loading car at Dubai Marina" class="dm-process-img">
                    <div class="dm-process-img-badge">
                        <i class="fas fa-stopwatch"></i>
                        <div><strong>30 Min</strong><span>Avg. Response</span></div>
                    </div>
                </div>
                <div class="dm-process-intro">
                    <span class="dm-eyebrow"><i class="fas fa-list-ol"></i> How It Works</span>
                    <h2>How It Works</h2>
                    <h3 class="dm-process-subtitle">What Happens When You <span>Call Toretto Recovery</span></h3>
                    <p>From your first call to getting you back on the road — here's our simple, no-hassle process.</p>
                </div>
            </div>

            <div class="dm-steps">
                <div class="dm-step">
                    <div class="dm-step-left">
                        <div class="dm-step-badge"><span>Step</span><strong>01</strong></div>
                        <div class="dm-step-line"></div>
                    </div>
                    <div class="dm-step-content">
                        <div class="dm-step-icon"><i class="fas fa-phone-alt"></i></div>
                        <h3>You Call</h3>
                        <p>Our dispatcher picks up. No automated menus — a real person answers your call immediately.</p>
                    </div>
                </div>
                <div class="dm-step">
                    <div class="dm-step-left">
                        <div class="dm-step-badge"><span>Step</span><strong>02</strong></div>
                        <div class="dm-step-line"></div>
                    </div>
                    <div class="dm-step-content">
                        <div class="dm-step-icon"><i class="fas fa-comment-dots"></i></div>
                        <h3>You Describe</h3>
                        <p>Tell us where you are and what happened. Be as vague or specific as you like — we'll ask the
                            right questions.</p>
                    </div>
                </div>
                <div class="dm-step">
                    <div class="dm-step-left">
                        <div class="dm-step-badge"><span>Step</span><strong>03</strong></div>
                        <div class="dm-step-line"></div>
                    </div>
                    <div class="dm-step-content">
                        <div class="dm-step-icon"><i class="fas fa-truck-fast"></i></div>
                        <h3>We Dispatch</h3>
                        <p>The right truck and operator for your situation heads to you immediately — no waiting, no delays.
                        </p>
                    </div>
                </div>
                <div class="dm-step">
                    <div class="dm-step-left">
                        <div class="dm-step-badge"><span>Step</span><strong>04</strong></div>
                        <div class="dm-step-line"></div>
                    </div>
                    <div class="dm-step-content">
                        <div class="dm-step-icon"><i class="fas fa-location-crosshairs"></i></div>
                        <h3>We Arrive</h3>
                        <p>Typically within 30 minutes across Dubai Marina and surrounding areas including JBR, Marina Walk,
                            Media City, and Palm Jumeirah approaches.</p>
                    </div>
                </div>
                <div class="dm-step">
                    <div class="dm-step-left">
                        <div class="dm-step-badge"><span>Step</span><strong>05</strong></div>
                        <div class="dm-step-line"></div>
                    </div>
                    <div class="dm-step-content">
                        <div class="dm-step-icon"><i class="fas fa-wrench"></i></div>
                        <h3>We Recover</h3>
                        <p>Safely, efficiently, with care for your vehicle and your time. Zero shortcuts, zero secondary
                            damage.</p>
                    </div>
                </div>
                <div class="dm-step dm-step--last">
                    <div class="dm-step-left">
                        <div class="dm-step-badge"><span>Step</span><strong>06</strong></div>
                    </div>
                    <div class="dm-step-content">
                        <div class="dm-step-icon"><i class="fas fa-flag-checkered"></i></div>
                        <h3>You Move On</h3>
                        <p>Whether that's being dropped at a garage, home, or back on the road — you're sorted.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 5 — WHY TORETTO
    =================================== --}}
    <section class="dm-why-section">
        <div class="container">
            <div class="dm-section-header text-center">
                <span class="dm-eyebrow light"><i class="fas fa-star"></i> Why Toretto</span>
                <h2>What Makes Our Service <span>Different — Honestly</span></h2>
            </div>

            <div class="dm-why-grid">
                <div class="dm-why-card">
                    <div class="dm-why-icon"><i class="fas fa-id-badge"></i></div>
                    <h4>Licensed & Insured, Not Just "Available"</h4>
                    <p>Every operator holds a valid UAE towing and recovery licence. Every truck carries commercial
                        liability insurance. This matters if anything goes wrong.</p>
                </div>
                <div class="dm-why-card">
                    <div class="dm-why-icon"><i class="fas fa-toolbox"></i></div>
                    <h4>Proper Equipment for Each Job</h4>
                    <p>Flatbeds for EVs and supercars. Wheel-lift rigs for standard breakdowns. Off-road recovery gear when
                        terrain is involved. Right tool, right job.</p>
                </div>
                <div class="dm-why-card">
                    <div class="dm-why-icon"><i class="fas fa-handshake"></i></div>
                    <h4>We Don't Subcontract</h4>
                    <p>When you call Toretto Recovery, a Toretto operator shows up — not a random third party. Quality stays
                        consistent every time.</p>
                </div>
                <div class="dm-why-card">
                    <div class="dm-why-icon"><i class="fas fa-tag"></i></div>
                    <h4>Transparent Pricing</h4>
                    <p>We quote before we start. No surprise fees for stairs, distance, or "after hours." What we say is
                        what you pay — always.</p>
                </div>
                <div class="dm-why-card">
                    <div class="dm-why-icon"><i class="fas fa-shield-halved"></i></div>
                    <h4>Damage-Aware Recovery</h4>
                    <p>A bad tow can cause thousands in drivetrain damage. Our operators are trained specifically to avoid
                        secondary damage — where inexperienced providers fail.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 6 — WHY MARINA IS TRICKY
    =================================== --}}
    <section class="dm-tricky-section">
        <div class="container">

            {{-- Image banner --}}
            <div class="dm-tricky-banner">
                <img src="{{ asset('assets/images/Tricky-for-Car-Recovery.png') }}"
                    alt="Car recovery challenges in Dubai Marina" class="dm-tricky-banner-img">
                <div class="dm-tricky-banner-overlay">
                    <span class="dm-eyebrow light"><i class="fas fa-map-location-dot"></i> Area Insight</span>
                    <h2>Why Dubai Marina Can Be <span>Tricky for Car Recovery</span></h2>
                </div>
            </div>

            {{-- Intro block --}}
            <div class="dm-tricky-intro">
                <p>If you've driven around Dubai Marina, you already know — it's not the easiest place when a car breaks
                    down.</p>
                <p><strong>The area has:</strong></p>
                <ul class="dm-tricky-list">
                    <li><i class="fas fa-chevron-right"></i> Narrow roads and tight turns</li>
                    <li><i class="fas fa-chevron-right"></i> Steep ramps going down into basement parking</li>
                    <li><i class="fas fa-chevron-right"></i> Heavy traffic, especially during rush hours</li>
                    <li><i class="fas fa-chevron-right"></i> Busy walkways around the Marina and JBR</li>
                    <li><i class="fas fa-chevron-right"></i> A lot of <a class="text-link" target="_blank"
                            href="{{ route('our-service.ourservice', ['slug' => 'luxury-sports-car-handling-dubai']) }}">luxury
                            and sports cars</a> that need extra care</li>
                </ul>
                <p>All of this makes car recovery in the Marina a bit more complicated than in other parts of Dubai.</p>
            </div>

            {{-- Detailed sub-sections --}}
            <div class="dm-tricky-details">

                <div class="dm-tricky-block">
                    <div class="dm-tricky-block-icon"><i class="fas fa-square-parking"></i></div>
                    <div class="dm-tricky-block-content">
                        <h3>Basement Parking & Tight Spaces</h3>
                        <p>Many Marina buildings have underground parking that's tight and low. If your battery dies or your
                            car won't move, getting it out safely takes the right truck and someone who's done it before.
                            One small mistake can scrape bumpers or damage the underside of the car — especially with low
                            cars.</p>
                    </div>
                </div>

                <div class="dm-tricky-block">
                    <div class="dm-tricky-block-icon"><i class="fas fa-traffic-light"></i></div>
                    <div class="dm-tricky-block-content">
                        <h3>Busy Roads & Peak Hours</h3>
                        <p>Marina roads can get crowded fast. A car stopping suddenly on the main road or near a roundabout
                            can cause stress — and risk — for everyone around. That's why quick, careful recovery matters
                            here.</p>
                    </div>
                </div>

                <div class="dm-tricky-block">
                    <div class="dm-tricky-block-icon"><i class="fas fa-person-walking"></i></div>
                    <div class="dm-tricky-block-content">
                        <h3>Pedestrians Around JBR & the Waterfront</h3>
                        <p>Areas near Jumeirah Beach Residence are always busy with people walking, jogging, and tourists.
                            When a car breaks down here, it needs to be moved safely and without causing more trouble.</p>
                    </div>
                </div>

                <div class="dm-tricky-block">
                    <div class="dm-tricky-block-icon"><i class="fas fa-triangle-exclamation"></i></div>
                    <div class="dm-tricky-block-content">
                        <h3>Road Works & Detours</h3>
                        <p>Around places like Al Mamsha, road works and temporary detours are common. Lanes change, space
                            gets tight, and recovery needs someone who knows the area well.</p>
                    </div>
                </div>

                <div class="dm-tricky-block">
                    <div class="dm-tricky-block-icon"><i class="fas fa-gem"></i></div>
                    <div class="dm-tricky-block-content">
                        <h3>Lots of High-Value Cars</h3>
                        <p>Dubai Marina has plenty of luxury cars, sports cars, and EVs. These cars can't just be dragged or
                            lifted any old way. They need flatbeds, slow loading, and careful handling — no shortcuts.</p>
                    </div>
                </div>

            </div>

            {{-- Connecting roads --}}
            <div class="dm-tricky-roads">
                <div class="dm-tricky-roads-left">
                    <h3><i class="fas fa-route"></i> We Also Cover the Roads You Actually Use</h3>
                    <p>Most Marina drivers don't stay inside the Marina all day. We regularly help with breakdowns
                        connecting to:</p>
                </div>
                <div class="dm-tricky-roads-right">
                    <div class="dm-tricky-roads-tags">
                        <span class="dm-cov-tag"><i class="fas fa-road"></i> Sheikh Zayed Road</span>
                        <span class="dm-cov-tag"><i class="fas fa-water"></i> Al Sufouh</span>
                        <span class="dm-cov-tag"><i class="fas fa-umbrella-beach"></i> Palm Jumeirah</span>
                        <span class="dm-cov-tag"><i class="fas fa-building"></i> Dubai Media City</span>
                    </div>
                    <p class="dm-tricky-roads-note">These spots are where issues often happen — merging traffic, busy
                        exits, and nowhere safe to stop.</p>
                </div>
            </div>

            {{-- CTA --}}
            <div class="dm-tricky-cta">
                <h3>Not Sure If You're in Our Area?</h3>
                <p>No problem — just call us. We'll tell you straight away if we can help, usually within 30 seconds. No
                    sales talk, no guessing — just an honest answer when you need it most.</p>
            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 7 — SAFETY ADVICE
    =================================== --}}
    <section class="dm-safety-section">
        <div class="container">
            <div class="dm-section-header text-center">
                <span class="dm-eyebrow light"><i class="fas fa-shield-halved"></i> Quick Safety Advice</span>
                <h2>While You Wait: <span>What To Do (And What Not To)</span></h2>
            </div>

            <div class="dm-safety-grid">
                <div class="dm-safety-item dm-safety-do">
                    <i class="fas fa-circle-check"></i>
                    <p>Stay in your vehicle if you're on a live road. If you must exit, stay behind the barrier.</p>
                </div>
                <div class="dm-safety-item dm-safety-do">
                    <i class="fas fa-circle-check"></i>
                    <p>Hazard lights on immediately — always.</p>
                </div>
                <div class="dm-safety-item dm-safety-dont">
                    <i class="fas fa-circle-xmark"></i>
                    <p>Do not attempt to push a damaged or flooded vehicle — you risk injury and further damage.</p>
                </div>
                <div class="dm-safety-item dm-safety-dont">
                    <i class="fas fa-circle-xmark"></i>
                    <p>Don't start the engine after a flood or suspected misfuel — this is how engines get destroyed.</p>
                </div>
                <div class="dm-safety-item dm-safety-do">
                    <i class="fas fa-circle-check"></i>
                    <p>Move to a safe position in parking situations if the vehicle allows it; if not, wait for us.</p>
                </div>
                <div class="dm-safety-item dm-safety-do">
                    <i class="fas fa-circle-check"></i>
                    <p>Take photos of the situation for your insurance record — we can advise what to capture.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 8 — FAQ
    =================================== --}}
    <section class="dm-faq-section">
        <div class="container">
            <div class="dm-section-header text-center">
                <span class="dm-eyebrow"><i class="fas fa-circle-question"></i> FAQ</span>
                <h2>Questions We Get <span>Asked Most</span></h2>
            </div>

            <div class="dm-faq-list">
                <div class="dm-faq-item active">
                    <button class="dm-faq-q" aria-expanded="true">
                        <span>Do you recover electric vehicles in Dubai Marina?</span>
                        <div class="dm-faq-icon"><i class="fas fa-minus"></i></div>
                    </button>
                    <div class="dm-faq-answer">
                        <p>Yes. EVs must be flatbed-towed — never wheel-lifted or driven. Our trucks and operators handle
                            this correctly with EV-specific recovery protocols.</p>
                    </div>
                </div>
                <div class="dm-faq-item">
                    <button class="dm-faq-q" aria-expanded="false">
                        <span>How fast can you reach JBR or Marina Walk?</span>
                        <div class="dm-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="dm-faq-answer">
                        <p>Typically 20–35 minutes depending on traffic. We give you a real ETA, not a hopeful one — honest
                            answers when you need them most.</p>
                    </div>
                </div>
                <div class="dm-faq-item">
                    <button class="dm-faq-q" aria-expanded="false">
                        <span>Will towing my car damage it?</span>
                        <div class="dm-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="dm-faq-answer">
                        <p>Not with Toretto. Our operators assess the vehicle before attachment and use the correct method
                            for your specific car type — no shortcuts.</p>
                    </div>
                </div>
                <div class="dm-faq-item">
                    <button class="dm-faq-q" aria-expanded="false">
                        <span>Do you work with insurance?</span>
                        <div class="dm-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="dm-faq-answer">
                        <p>Yes. We provide all documentation your insurer needs. If your policy covers recovery, we'll help
                            you navigate the claim process smoothly.</p>
                    </div>
                </div>
                <div class="dm-faq-item">
                    <button class="dm-faq-q" aria-expanded="false">
                        <span>Can you recover a car from a basement car park?</span>
                        <div class="dm-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="dm-faq-answer">
                        <p>Yes — it's one of our most common callouts in this area. We carry the right low-clearance
                            equipment and our operators know Marina basement layouts well.</p>
                    </div>
                </div>
                <div class="dm-faq-item">
                    <button class="dm-faq-q" aria-expanded="false">
                        <span>Do you handle accident scenes?</span>
                        <div class="dm-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="dm-faq-answer">
                        <p>Yes. We coordinate carefully, especially if police are on scene. We're experienced in
                            post-collision recovery and know the full process in Dubai.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 9 — CTA
    =================================== --}}
    <section class="dm-cta-section">
        <div class="container">
            <div class="dm-cta-grid">
                <div class="dm-cta-text">
                    <span class="dm-eyebrow light"><i class="fas fa-bolt"></i> Stranded Right Now?</span>
                    <h2>Don't Wait. Don't Guess. <span>Call Toretto Recovery.</span></h2>
                    <p>Available 24 hours, 7 days a week, 365 days a year.</p>
                    <p>
                        Licensed. Insured. Expert operators. Every vehicle. Every situation.
                    </p>
                </div>
                <div class="dm-cta-right">
                    <a href="tel:+971523003423" class="theme-btn dm-cta-btn-primary">
                        <i class="fas fa-phone"></i> +971 52 300 3423
                    </a>
                </div>
            </div>
            <p class="text-center text-white mt-2">Toretto Recovery — Professional Vehicle Recovery Services, Dubai</p>
        </div>
    </section>

    <link rel="stylesheet"
        href="{{ asset('assets/css/dubai-marina.css') }}?v={{ filemtime(public_path('assets/css/dubai-marina.css')) }}">

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.dm-faq-list .dm-faq-item');
            faqItems.forEach(function(item) {
                const btn = item.querySelector('.dm-faq-q');
                btn.addEventListener('click', function() {
                    const isActive = item.classList.contains('active');
                    faqItems.forEach(function(el) {
                        el.classList.remove('active');
                        el.querySelector('.dm-faq-q').setAttribute('aria-expanded',
                            'false');
                        el.querySelector('.dm-faq-icon i').className = 'fas fa-plus';
                    });
                    if (!isActive) {
                        item.classList.add('active');
                        btn.setAttribute('aria-expanded', 'true');
                        item.querySelector('.dm-faq-icon i').className = 'fas fa-minus';
                    }
                });
            });
        });
    </script>

@endsection
