@extends('layouts.main')

@section('title', 'Stuck in Desert? 24/7 Pull Out & Recovery Service – Toretto')

@section('meta_description')
    Stuck in the Dubai desert? Toretto provides professional desert pull out and recovery services 24/7. 10+ years of
    experience, modern winch equipment, confirmed pricing before dispatch. Al Qudra, Lahbab, Margham & beyond. Call now —
    help is on the way.
@endsection

@section('meta_keywords', 'Stuck in Desert? 24/7 Pull Out & Recovery Service – Toretto')
@section('head')
    @verbatim
        <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": ["LocalBusiness","AutomotiveBusiness","FAQPage"],
    "name": "Toretto Desert Recovery Dubai",
    "alternateName": "Toretto Desert Pull Out Service",
    "description": "Professional desert pull out and recovery service in Dubai.
                    10+ years of experience. Winch-assisted extraction, 24/7
                    emergency response. Covering Al Qudra, Lahbab, Margham,
                    Al Badayer and all Dubai desert areas.",
    "url": "https://www.toretto.ae/desert-pull-out-service-dubai/",
    "logo": "https://www.toretto.ae/images/toretto-logo.png",
    "image": [
    "https://www.toretto.ae/images/dubai-desert-pull-out-service-toretto.jpg",
    "https://www.toretto.ae/images/toretto-recovery-team-dubai.jpg"
    ],
    "telephone": "+971 523003423",
    "email": "recovery@toretto.ae",
    "address": {
    "@type": "PostalAddress",
    "streetAddress": "274 Street - Dubai Investment Park - 2 - Dubai",
    "addressLocality": "Dubai",
    "addressRegion": "Dubai",
    "postalCode": "000000",
    "addressCountry": "AE"
    },
    "geo": {
    "@type": "GeoCoordinates",
    "latitude": "25.2048",
    "longitude": "55.2708"
    },
    "areaServed": [
    {"@type": "City", "name": "Dubai"}],
    "mainEntity": []
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
        }
    </style>

    <!-- CONTACT BANNER -->
    <section class="site-breadcrumb contact-section"
        style="background: url('{{ asset('assets/images/Desert-Pull-Out Service.jpeg') }}');">

        <div class="container">
            <div class="row align-items-center min-vh-75">

                <!-- LEFT CONTENT -->
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="hero-content-wrapper text-start text-white">

                        <!-- Eyebrow Badge -->
                        <div class="dp-hero-eyebrow">
                            <i class="fas fa-sun"></i>
                            Toretto Desert Recovery — Dubai
                        </div>

                        <!-- Main Heading -->
                        <h1 class="dp-hero-title wow animate__animated animate__fadeInDown">
                            24/7 Emergency Desert
                            <span>Pull Out Service</span>
                        </h1>

                        <ul class="breadcrumb-menu">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                                <i class="fa fa-angle-double-right"></i>
                            </li>
                            <li class="active">Desert Pull Out Service</li>
                        </ul>

                        <!-- Subtitle -->
                        <h2 class="dp-hero-subtitle text-white">
                            Standed in the Dubai Desert? Help Is Already on Its Way.
                        </h2>

                        <!-- CTA Section -->
                        <div class="hero-btn mt-4">
                            <a href="tel:+971523003423" class="theme-btn">
                                Call Now — Immediate Desert Assistance <i class="fas fa-phone"></i>
                            </a>
                            <a href="https://wa.me/971523003423" class="theme-btn theme-btn2">
                                Send WhatsApp Location <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>

                        <!-- Description -->
                        <p class="dp-hero-desc">
                            There's nothing quite as disorienting as feeling your wheels sink into soft sand while the
                            desert stretches out around you in every direction. Toretto has been getting vehicles out of
                            exactly this situation for over 10 years — hundreds of times, across every desert area in Dubai,
                            in every season, at every hour.
                        </p>

                        <p class="dp-hero-desc mt-3">Toretto has been getting vehicles out of exactly this situation for
                            over 10
                            years. Not just
                            occasionally — hundreds of times, across every desert area in Dubai, in every season, at every
                            hour. When you call us, you're not getting a general roadside team making their best guess.
                            You're getting specialists who know the sand, the dunes, the conditions, and exactly what your
                            vehicle needs to come out safely.
                        </p>

                    </div>
                </div>

                <!-- RIGHT FORM CARD -->
                <div class="col-lg-3 offset-lg-2">
                    <div class="dark-form-card small-form">

                        <h3 class="form-title">Request Desert Recovery</h3>

                        <form method="POST" action="{{ route('contact.submit') }}">
                            @csrf

                            <div class="form-group">
                                <input type="text" name="name" placeholder="Your name" required>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email address" required>
                            </div>

                            <input type="hidden" name="type" value="Desert Pull Out Service Inquiry">

                            <div class="form-group">
                                <input type="text" name="phone" placeholder="Phone number" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="subject" placeholder="Your location / GPS coordinates">
                            </div>

                            <div class="form-group">
                                <textarea rows="4" name="message" placeholder="Describe your situation"></textarea>
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

    <!-- HERO STATS ROW -->
    <section class="dp-stats-section">
        <div class="container">
            <div class="dp-stats-row">
                <div class="dp-stat-box">
                    <span class="dp-stat-num">24/7</span>
                    <span class="dp-stat-label">Always Available</span>
                </div>
                <div class="dp-stat-divider"></div>
                <div class="dp-stat-box">
                    <span class="dp-stat-num">10+</span>
                    <span class="dp-stat-label">Years Desert Recovery</span>
                </div>
                <div class="dp-stat-divider"></div>
                <div class="dp-stat-box">
                    <span class="dp-stat-num">100s</span>
                    <span class="dp-stat-label">Successful Pull Outs</span>
                </div>
                <div class="dp-stat-divider"></div>
                <div class="dp-stat-box">
                    <span class="dp-stat-num">100%</span>
                    <span class="dp-stat-label">Dubai-Based Teams</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 1: WHy IT'S SERIOUS (Light/Sand Theme) -->
    <section class="dp-content-section dp-risks-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Column -->
                <div class="col-lg-6">
                    <div class="dp-section-header">
                        <span class="dp-eyebrow"><i class="fas fa-triangle-exclamation"></i> Serious Risks</span>
                        <h2 class="dp-section-title">
                            Why Getting Stuck in the Dubai Desert Is <br><span>More Serious Than You Think</span>
                        </h2>
                    </div>
                    <div class="dp-text-block">
                        <p>Most people assume getting stuck in the sand is a minor inconvenience — a short wait, a few
                            pushes,
                            and you're back on track. The reality in Dubai's desert is very different, and underestimating
                            it is where things go wrong.</p>
                        <p>The desert doesn't stay still. Wind shifts the sand. Temperatures that feel manageable at 7am are
                            dangerous by 10am. What looks like firm ground near the top of a dune can be completely soft
                            just below the surface, and once a wheel sinks, momentum works against you. Every second of
                            wheelspin digs you deeper.</p>
                    </div>
                </div>
                <!-- Image Column -->
                <div class="col-lg-6" style="padding-right: 2rem; padding-left: 2rem;">
                    <div class="about-left wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/Dubai-Desert.jpeg') }}"
                                alt="Stuck vehicle in Dubai desert sand" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Full Width Risks Grid -->
            <div class="dp-risks-grid-wrap mt-5">
                <h3 class="dp-subsection-title">What Actually Causes Vehicles to Get Stuck in Dubai's Desert</h3>
                <div class="dp-risks-grid">

                    <div class="dp-risk-item">
                        <div class="dp-risk-icon"><i class="fas fa-eye-slash"></i></div>
                        <p><strong>Soft sand patches</strong> that don't look any different from firm ground — until you're
                            in them</p>
                    </div>

                    <div class="dp-risk-item">
                        <div class="dp-risk-icon"><i class="fas fa-gauge-simple-high"></i></div>
                        <p><strong>Tire pressure left at road levels</strong>, which reduces surface grip dramatically in
                            sand</p>
                    </div>

                    <div class="dp-risk-item">
                        <div class="dp-risk-icon"><i class="fas fa-angle-up"></i></div>
                        <p><strong>Wrong approach angles on dunes</strong> that kill forward momentum halfway up</p>
                    </div>

                    <div class="dp-risk-item">
                        <div class="dp-risk-icon"><i class="fas fa-truck-pickup"></i></div>
                        <p><strong>Overconfidence in four-wheel drive</strong> — 4WD helps you go, but it doesn't help you
                            stop or float on soft sand</p>
                    </div>

                    <div class="dp-risk-item">
                        <div class="dp-risk-icon"><i class="fas fa-wind"></i></div>
                        <p><strong>Sand that's been wind-shifted overnight</strong>, changing the entire surface you were
                            driving on</p>
                    </div>

                    <div class="dp-risk-item">
                        <div class="dp-risk-icon"><i class="fas fa-fire-flame-curved"></i></div>
                        <p><strong>Overheating engines</strong> from prolonged low-speed desert work in summer heat</p>
                    </div>

                </div>

                <div class="dp-risk-conclusion-box">
                    <div class="dp-risk-conclusion-icon"><i class="fas fa-hand-paper"></i></div>
                    <div>
                        <h4>The "DIY" Recovery Trap</h4>
                        <p>And then there's the recovery problem. The instinct most people have — floor the accelerator —
                            almost always makes it worse. It buries the vehicle faster, damages the undercarriage, and can
                            overheat the drivetrain. Rocking, digging by hand, or asking bystanders to push rarely works on
                            proper soft sand and often results in vehicle damage or injuries.</p>
                        <p class="dp-highlight">This is exactly why professional desert recovery exists — and why
                            experience
                            is the single most important factor in getting your vehicle out safely.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: PROFESSIONAL METHODS (Dark Theme) -->
    <section class="dp-content-section dp-professional-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Column (Left) -->
                <div class="col-lg-6 order-2 order-lg-1 mt-3" style="padding-right: 2rem;">
                    <div class="about-left wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/professional-desert-pull-out.jpeg') }}"
                                alt="Professional Desert Recovery Dubai" loading="lazy">
                        </div>
                    </div>
                </div>
                <!-- Text Column (Right) -->
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="dp-section-header dp-section-header--dark">
                        <span class="dp-eyebrow-white dp-eyebrow dp-eyebrow--dark"><i class="fas fa-medal"></i>
                            Professional
                            Grade</span>
                        <h2 class="dp-section-title">
                            Professional Desert Pull Out — <br><span>There's a Right Way, and a Costly Way</span>
                        </h2>
                    </div>
                    <div class="dp-text-block dp-text-block--dark">
                        <p>What separates a professional desert pull out from an amateur attempt isn't just equipment — it's
                            judgment. Knowing which angle to apply tension from. Knowing when a direct winch pull works
                            versus when it'll cause bodywork damage. Knowing whether to dig, plate, tow, or anchor first.
                        </p>
                        <p>These aren't things you figure out in the moment. They come from doing this, over and over,
                            across real desert conditions. Toretto's team has built that judgment across more than 10 years
                            of desert recovery work in Dubai. Every method we use is chosen specifically for your vehicle,
                            the sand type you're stuck in, and the situation on the ground.</p>
                    </div>

                    <div class="dp-methods-list">
                        <h3 class="dp-subsection-title dp-subsection-title--dark">How We Actually Get Your Vehicle Out</h3>
                        <ul>
                            <li>
                                <i class="fas fa-check"></i>
                                <span><strong>Sand recovery boards and traction mats</strong> positioned under drive wheels
                                    —
                                    applied correctly so they provide grip rather than just acting as ramps</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span><strong>Controlled winch-assisted extraction</strong> from secure anchor points —
                                    never from bumpers, tow hooks, or chassis points that aren't designed for pull
                                    loads</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span><strong>Tire pressure adjustment</strong> as the first step — often the single biggest
                                    factor in freeing a stuck vehicle</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span><strong>Multi-direction approach</strong> when direct pulls aren't possible, using
                                    snatch blocks and redirected lines</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span><strong>Patient, controlled momentum building</strong> — rather than aggressive
                                    acceleration that worsens the situation</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span><strong>Post-recovery check</strong> to confirm no undercarriage damage, no sand in
                                    air intakes, and full drivetrain function before you drive away</span>
                            </li>
                        </ul>
                    </div>

                    <div class="dp-damage-first-box">
                        <p><i class="fas fa-shield-alt"></i> <strong>Damage-First Thinking:</strong> Every step is
                            calculated. The
                            goal isn't just to move the vehicle — it's to move it without creating a second problem in the
                            process.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: TRUST INDICATORS (Light Theme) -->
    <section class="dp-content-section dp-trust-section">
        <div class="container">
            <div class="dp-section-header">
                <span class="dp-eyebrow"><i class="fas fa-star"></i> Reputation & Reliability</span>
                <h2 class="dp-section-title">
                    Why Dubai Drivers — and Visitors — <br><span>Trust Toretto for Desert Pull Out</span>
                </h2>
            </div>
            <div class="dp-text-block">
                <p>There are plenty of roadside assistance providers in Dubai. Most of them are perfectly capable of
                    handling a battery jump or a flat tyre on the Sheikh Zayed Road. Very few of them have the
                    equipment, the training, or the genuine field experience to handle a vehicle that's buried to
                    its axles in Lahbab's red dunes at 2am.</p>
                <p>Toretto built its reputation specifically in desert recovery. It's not a side offering — it's the
                    core of what we do.</p>
            </div>
            <div class="row align-items-center">
                <!-- Text Column (Left) -->
                <div class="col-lg-6">
                    <div class="dp-trust-list mt-4">
                        <!-- Item 1 -->
                        <div class="dp-trust-item">
                            <div class="dp-trust-icon"><i class="fas fa-calendar-check"></i></div>
                            <div class="dp-trust-text">
                                <strong>10+ years of real desert recovery experience</strong>, not just standard roadside
                                training
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="dp-trust-item">
                            <div class="dp-trust-icon"><i class="fas fa-map-marked-alt"></i></div>
                            <div class="dp-trust-text">
                                <strong>Hundreds of vehicles recovered</strong> across Al Qudra, Lahbab, Margham, Al
                                Badayer, and surrounding areas
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="dp-trust-item">
                            <div class="dp-trust-icon"><i class="fas fa-truck-monster"></i></div>
                            <div class="dp-trust-text">
                                <strong>Modern recovery fleet</strong> with professional winch systems, sand ladders, snatch
                                blocks, and extraction tools
                            </div>
                        </div>
                        <!-- Item 4 -->
                        <div class="dp-trust-item">
                            <div class="dp-trust-icon"><i class="fas fa-user-graduate"></i></div>
                            <div class="dp-trust-text">
                                <strong>Trained specialists</strong> who understand how Dubai's specific sand types and
                                seasonal conditions affect recovery
                            </div>
                        </div>
                        <!-- Item 5 -->
                        <div class="dp-trust-item">
                            <div class="dp-trust-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                            <div class="dp-trust-text">
                                <strong>Clear, confirmed pricing</strong> before any team is dispatched — no surprises when
                                the bill arrives
                            </div>
                        </div>
                        <!-- Item 6 -->
                        <div class="dp-trust-item">
                            <div class="dp-trust-icon"><i class="fas fa-route"></i></div>
                            <div class="dp-trust-text">
                                <strong>Nearest-team dispatch system</strong> so the closest available recovery unit is
                                always en route to you
                            </div>
                        </div>
                        <!-- Item 7 -->
                        <div class="dp-trust-item">
                            <div class="dp-trust-icon"><i class="fas fa-clock"></i></div>
                            <div class="dp-trust-text">
                                <strong>24/7 availability</strong> including weekends, public holidays, and peak summer
                                season
                            </div>
                        </div>
                    </div>
                    <div class="dp-quote-box mt-4">
                        "A single wrong recovery attempt can cause thousands of dirhams in damage to your vehicle.
                        Experience isn't a luxury in desert recovery — it's the difference between a quick pull out and a
                        body shop bill.
                        "
                    </div>
                </div>

                <!-- Image Column (Right) -->
                <div class="col-lg-6 mt-3" style="padding-right: 2rem; padding-left: 2rem;">
                    <div class="about-left wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/dubai-drivers.jpeg') }}"
                                alt="Toretto Recovery Truck in Action" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: VEHICLE TYPES (White Theme - List Layout) -->
    <section class="dp-content-section dp-vehicles-section-white">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <div class="dp-section-header mb-5">
                        <span class="dp-eyebrow">From Compacts to Caravans</span>
                        <h2 class="dp-section-title">
                            Desert Pull Out for Every Vehicle Type <br /> <span>
                                We Don't Turn Anyone Away
                            </span>
                        </h2>
                        <div class="dp-text-block mt-3 mx-auto" style="max-width: 800px;">
                            <p>One of the most common misconceptions about desert recovery is that it only applies to big
                                off-roaders. In reality, some of the most challenging extractions we handle involve sedans
                                and small crossovers — vehicles that have no business being on deep desert terrain, but end
                                up there anyway. Rental car adventures. Family excursions that went further than intended.
                                Wrong turns near desert areas on the city's outskirts.
                            </p>
                            <p>Whatever you're driving, we have the tools and the technique to get it out.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="dp-vehicle-list-wrapper">
                        <h3 class="dp-subsection-title text-center mb-4">Vehicles We Recover</h3>

                        <div class="dp-vehicle-list-grid">
                            <!-- Item 1 -->
                            <div class="dp-vehicle-list-item">
                                <div class="dp-v-icon"><i class="fas fa-car-side"></i></div>
                                <div class="dp-v-content">
                                    <h5>Sedans and hatchbacks</h5>
                                    <p>Including smaller family cars that have drifted onto soft sand near desert edges</p>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="dp-vehicle-list-item">
                                <div class="dp-v-icon"><i class="fas fa-car-alt"></i></div>
                                <div class="dp-v-content">
                                    <h5>Crossovers and compact SUVs</h5>
                                    <p>Typically without four-wheel drive, which makes recovery more technique-dependent</p>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="dp-vehicle-list-item">
                                <div class="dp-v-icon"><i class="fas fa-truck-monster"></i></div>
                                <div class="dp-v-content">
                                    <h5>Full-size SUVs</h5>
                                    <p>Land Cruisers, Patrols, Fortuners, Pajeros in every configuration</p>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="dp-vehicle-list-item">
                                <div class="dp-v-icon"><i class="fas fa-mountain"></i></div>
                                <div class="dp-v-content">
                                    <h5>4x4 off-road vehicles</h5>
                                    <p>Including heavily modified rigs that require careful extraction to avoid equipment
                                        damage</p>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="dp-vehicle-list-item">
                                <div class="dp-v-icon"><i class="fas fa-truck-pickup"></i></div>
                                <div class="dp-v-content">
                                    <h5>Pickup trucks</h5>
                                    <p>Including loaded commercial vehicles stuck during off-road work</p>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="dp-vehicle-list-item">
                                <div class="dp-v-icon"><i class="fas fa-key"></i></div>
                                <div class="dp-v-content">
                                    <h5>Rental cars</h5>
                                    <p>We're experienced with the specific requirements rental agencies place on their
                                        vehicles during recovery</p>
                                </div>
                            </div>

                            <!-- Item 7 -->
                            <div class="dp-vehicle-list-item">
                                <div class="dp-v-icon"><i class="fas fa-gem"></i></div>
                                <div class="dp-v-content">
                                    <h5>Luxury SUVs</h5>
                                    <p>Range Rovers, G-Class, Bentayga, and similar vehicles where protection during
                                        recovery is paramount</p>
                                </div>
                            </div>

                            <!-- Item 8 -->
                            <div class="dp-vehicle-list-item">
                                <div class="dp-v-icon"><i class="fas fa-trailer"></i></div>
                                <div class="dp-v-content">
                                    <h5>Caravans and trailers</h5>
                                    <p>Including tow combinations that require staged extraction</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: SCENARIOS (Timeline Style - No Cards) -->
    <section class="dp-content-section dp-scenarios-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-9 text-center">
                    <div class="dp-section-header">
                        <span class="dp-eyebrow">Expert Analysis</span>
                        <h2 class="dp-section-title">
                            Every Desert Situation Is Different — <br><span>Here's How We Approach Yours</span>
                        </h2>
                        <p class="text-muted mt-3">
                            Desert recovery isn't one job. It's dozens of different scenarios, each with their own
                            challenges.
                            The method that works perfectly on a gradual sand slope can make things significantly
                            worse in a
                            bowl-shaped depression. Experience means recognising the situation and applying the
                            right
                            response.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Left Column Scenarios -->
                <div class="col-lg-6">
                    <div class="dp-timeline-item">
                        <div class="dp-tl-marker"></div>
                        <div class="dp-tl-content">
                            <h3>Vehicle Buried Deep in Soft Sand</h3>
                            <p>This typically happens when traction attempts have compacted the sand on the sides of
                                the
                                tyres, effectively creating a sand berth. We assess the depth, choose appropriate
                                extraction
                                angles, and use controlled board placement and winch tension to lift and slide the
                                vehicle
                                clear — not just drag it sideways.</p>
                        </div>
                    </div>

                    <div class="dp-timeline-item">
                        <div class="dp-tl-marker"></div>
                        <div class="dp-tl-content">
                            <h3>Stuck During Dune Driving</h3>
                            <p>The highest-stress recovery scenario for drivers. Usually occurs on the descent or at
                                the
                                crest of a dune. Our team approaches from a stable position, assesses rollover risk
                                before
                                anything else, and prioritises safety before recovery begins. We've handled this
                                situation
                                more times than we can count.</p>
                        </div>
                    </div>

                    <div class="dp-timeline-item">
                        <div class="dp-tl-marker"></div>
                        <div class="dp-tl-content">
                            <h3>Camping or Picnic Vehicles — Off Track</h3>
                            <p>A very common call — a family sets up camp on a flat section of desert, and when it's
                                time to
                                leave, the vehicle won't move. The sand has had time to settle around the tyres.
                                This is
                                actually one of the easier recoveries when handled correctly, and we're usually
                                on-site
                                quickly for these calls.</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column Scenarios -->
                <div class="col-lg-6">
                    <div class="dp-timeline-item">
                        <div class="dp-tl-marker"></div>
                        <div class="dp-tl-content">
                            <h3>Engine Overheating in the Desert</h3>
                            <p>Not a stuck vehicle — but a vehicle that's going nowhere and shouldn't be driven. We
                                handle
                                the vehicle safely, provide on-site first aid where possible, and arrange towing to
                                a
                                service centre if the overheating has caused mechanical damage.</p>
                        </div>
                    </div>

                    <div class="dp-timeline-item">
                        <div class="dp-tl-marker"></div>
                        <div class="dp-tl-content">
                            <h3>Night-Time Desert Breakdown</h3>
                            <p>Temperatures drop dramatically in the Dubai desert after sunset. Visibility is
                                near-zero away
                                from camps. Our team carries proper lighting equipment and works these calls the
                                same way as
                                daytime — the process doesn't change, we just equip for the conditions.</p>
                        </div>
                    </div>

                    <div class="dp-timeline-item">
                        <div class="dp-tl-marker"></div>
                        <div class="dp-tl-content">
                            <h3>Family and Tourist Emergency Situations</h3>
                            <p>We handle these with particular care. We know that if you're a tourist calling from
                                the
                                desert, you're likely already anxious. Our team speaks clearly, keeps you updated on
                                arrival
                                time, and approaches every family situation with calm, clear communication
                                throughout.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 6: CONDITIONS (Environmental Data - No Cards) -->
    <section class="dp-content-section dp-conditions-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-9">
                    <div class="dp-section-header dp-section-header--dark">
                        <h2 class="dp-section-title">
                            Dubai's Desert Conditions <br><span>Demand More Than Basic Knowledge</span>
                        </h2>
                        <p class="text-white-50 mt-3">
                            The UAE's climate creates recovery challenges that simply don't exist in most other
                            parts of the
                            world. Understanding those conditions — and how they change what works — is part of what
                            10
                            years of Dubai desert experience actually means.
                        </p>
                    </div>
                </div>
            </div>

            <div class="dp-conditions-clean-grid">
                <!-- Summer -->
                <div class="dp-clean-item">
                    <div class="dp-clean-icon text-warning"><i class="fas fa-sun"></i></div>
                    <h4>Summer Heat Recovery</h4>
                    <span class="dp-clean-meta">June to September</span>
                    <p>Surface temps reach 70°C+. We know which methods generate least friction heat and how to
                        protect your
                        vehicle. Safety is our priority in extreme heat.</p>
                </div>

                <!-- Wind -->
                <div class="dp-clean-item">
                    <div class="dp-clean-icon text-light"><i class="fas fa-wind"></i></div>
                    <h4>Wind-Shifted Dune Surfaces</h4>
                    <span class="dp-clean-meta">Year Round</span>
                    <p>We recognise wind-shifted terrain involving deep and unstable sand after storms, adjusting
                        approach routes accordingly.</p>
                </div>

                <!-- Winter -->
                <div class="dp-clean-item">
                    <div class="dp-clean-icon text-info"><i class="fas fa-snowflake"></i></div>
                    <h4>Winter Night Conditions</h4>
                    <span class="dp-clean-meta">November to February</span>
                    <p>Cold sand packs differently. We factor hypothermia risks into our night response times and
                        equipment choices.</p>
                </div>

                <!-- Rain -->
                <div class="dp-clean-item">
                    <div class="dp-clean-icon text-primary"><i class="fas fa-cloud-rain"></i></div>
                    <h4>Seasonal Sand Softness</h4>
                    <span class="dp-clean-meta">Post-Rain Periods</span>
                    <p>Post-rain sand can be deceptively soft. We adapt equipment choices based on ground
                        conditions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 7: COVERAGE AREAS (Location Accordion) -->
    <section class="dp-content-section dp-coverage-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-9 text-center">
                    <div class="dp-section-header">
                        <span class="dp-eyebrow"><i class="fas fa-map-marker-alt mr-1"></i> Coverage Map</span>
                        <h2 class="dp-section-title">
                            Desert Pull Out Coverage <br><span>Across Dubai's Key Desert Areas</span>
                        </h2>
                        <p class="text-muted mt-3">
                            Dubai is surrounded by desert, and the terrain varies significantly between areas. We cover all
                            major desert regions and are familiar with the specific challenges of each location — not just
                            in general terms, but in the actual recovery scenarios we've encountered there repeatedly.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="dp-coverage-list">

                        <!-- Area 1: Al Qudra -->
                        <div class="dp-coverage-item dp-coverage-open">
                            <div class="dp-coverage-head">
                                <div class="dp-coverage-pin"><i class="fas fa-map-pin"></i></div>
                                <h3>Al Qudra Desert</h3>
                                <span class="dp-coverage-toggle"><i class="fas fa-chevron-down"></i></span>
                            </div>
                            <div class="dp-coverage-body">
                                <p>One of Dubai's most popular desert destinations, Al Qudra's cycling tracks and open
                                    desert
                                    areas attract both recreational drivers and hikers. The terrain shifts quickly from
                                    compact track edges to very soft open sand. We receive regular calls from this area and
                                    can navigate the access routes in both directions efficiently.</p>
                            </div>
                        </div>

                        <!-- Area 2: Lahbab -->
                        <div class="dp-coverage-item">
                            <div class="dp-coverage-head">
                                <div class="dp-coverage-pin"><i class="fas fa-map-pin"></i></div>
                                <h3>Lahbab Red Dunes</h3>
                                <span class="dp-coverage-toggle"><i class="fas fa-chevron-down"></i></span>
                            </div>
                            <div class="dp-coverage-body">
                                <p>The iconic red dune region near Lahbab is where most serious dune driving in Dubai
                                    happens — and where most serious recoveries are needed. The steep-sided dunes and deep,
                                    fine-grained red sand create the most technically demanding recovery conditions in the
                                    region. Our team has extensive experience here and knows exactly how the sand behaves in
                                    different seasons.</p>
                            </div>
                        </div>

                        <!-- Area 3: Margham -->
                        <div class="dp-coverage-item">
                            <div class="dp-coverage-head">
                                <div class="dp-coverage-pin"><i class="fas fa-map-pin"></i></div>
                                <h3>Margham Desert</h3>
                                <span class="dp-coverage-toggle"><i class="fas fa-chevron-down"></i></span>
                            </div>
                            <div class="dp-coverage-body">
                                <p>The Margham area sits east of Dubai near the Oman border road and covers a large expanse
                                    of mixed terrain — flat salt flats, soft sand belts, and rocky patches. Calls from
                                    Margham often involve drivers who've gone well off any marked route. We have experience
                                    with the area's specific geography.</p>
                            </div>
                        </div>

                        <!-- Area 4: Al Badayer -->
                        <div class="dp-coverage-item">
                            <div class="dp-coverage-head">
                                <div class="dp-coverage-pin"><i class="fas fa-map-pin"></i></div>
                                <h3>Al Badayer Desert</h3>
                                <span class="dp-coverage-toggle"><i class="fas fa-chevron-down"></i></span>
                            </div>
                            <div class="dp-coverage-body">
                                <p>Located near Sharjah's border with Fujairah, Al Badayer's orange-coloured dunes are a
                                    popular off-road destination. We cover this area along with the surrounding desert zones
                                    between the two emirates.</p>
                            </div>
                        </div>

                        <!-- Area 5: Outskirts -->
                        <div class="dp-coverage-item">
                            <div class="dp-coverage-head">
                                <div class="dp-coverage-pin"><i class="fas fa-map-pin"></i></div>
                                <h3>Dubai Outskirts & Border Desert Areas</h3>
                                <span class="dp-coverage-toggle"><i class="fas fa-chevron-down"></i></span>
                            </div>
                            <div class="dp-coverage-body">
                                <p>Not every desert call comes from a named destination. Many come from vehicles that have
                                    drifted onto soft ground near the city's expanding outskirts, on access roads to desert
                                    developments, or on the desert-adjacent highways heading out of Dubai. We cover these
                                    calls across all directions from the city.</p>
                            </div>
                        </div>

                    </div>

                    <div class="dp-coverage-cta text-center mt-5">
                        <p>If you're not sure whether your location falls within our coverage — just call. Share your
                            location on WhatsApp and we'll confirm immediately.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 8: COMPARISON TABLE -->
    <section class="dp-content-section dp-compare-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-9 text-center">
                    <div class="dp-section-header">
                        <span class="dp-eyebrow">Why Choose Toretto</span>
                        <h2 class="dp-section-title">
                            Experience Makes the Difference — <br><span>See How Toretto Compares</span>
                        </h2>
                        <p class="text-muted mt-3">
                            Before you call the first number that comes up in a search, it's worth knowing what you're
                            actually getting. Desert recovery is one area where the difference between providers is
                            significant — and the consequences of choosing wrong are expensive.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="dp-compare-table-wrap">
                        <table class="dp-compare-table">
                            <thead>
                                <tr>
                                    <th class="dp-ct-feature">Feature</th>
                                    <th class="dp-ct-typical">Typical Providers</th>
                                    <th class="dp-ct-toretto">Toretto <i class="fas fa-star"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="dp-ct-label">Desert Experience</td>
                                    <td class="dp-ct-bad"><i class="fas fa-times-circle"></i> Limited or None</td>
                                    <td class="dp-ct-good"><i class="fas fa-check-circle"></i> 10+ Years – Dubai Deserts
                                    </td>
                                </tr>
                                <tr>
                                    <td class="dp-ct-label">Recovery Equipment</td>
                                    <td class="dp-ct-bad"><i class="fas fa-times-circle"></i> Basic straps & rope</td>
                                    <td class="dp-ct-good"><i class="fas fa-check-circle"></i> Modern winch & extraction
                                        tools</td>
                                </tr>
                                <tr>
                                    <td class="dp-ct-label">Pricing Transparency</td>
                                    <td class="dp-ct-bad"><i class="fas fa-times-circle"></i> Quote after arrival</td>
                                    <td class="dp-ct-good"><i class="fas fa-check-circle"></i> Confirmed before dispatch
                                    </td>
                                </tr>
                                <tr>
                                    <td class="dp-ct-label">Response System</td>
                                    <td class="dp-ct-bad"><i class="fas fa-times-circle"></i> Single location dispatch
                                    </td>
                                    <td class="dp-ct-good"><i class="fas fa-check-circle"></i> Nearest team routed to you
                                    </td>
                                </tr>
                                <tr>
                                    <td class="dp-ct-label">Safety Protocol</td>
                                    <td class="dp-ct-bad"><i class="fas fa-times-circle"></i> Improvised methods</td>
                                    <td class="dp-ct-good"><i class="fas fa-check-circle"></i> Professional recovery
                                        procedures</td>
                                </tr>
                                <tr>
                                    <td class="dp-ct-label">Availability</td>
                                    <td class="dp-ct-bad"><i class="fas fa-times-circle"></i> Daytime / limited</td>
                                    <td class="dp-ct-good"><i class="fas fa-check-circle"></i> 24/7 – day, night, any
                                        season
                                    </td>
                                </tr>
                                <tr>
                                    <td class="dp-ct-label">Vehicle Types Handled</td>
                                    <td class="dp-ct-bad"><i class="fas fa-times-circle"></i> 4x4 only (mostly)</td>
                                    <td class="dp-ct-good"><i class="fas fa-check-circle"></i> All vehicles incl. sedans &
                                        rentals</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="dp-compare-note text-center mt-4">
                        The table above isn't about self-promotion. It's about helping you make an informed decision before
                        you're stuck at midnight 40 kilometres outside the city.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 9: COMPLETE SERVICES LIST (3-Column Categories) -->
    <section class="dp-content-section dp-services-list-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-9 text-center">
                    <div class="dp-section-header">
                        <span class="dp-eyebrow">Full Scope of Service</span>
                        <h2 class="dp-section-title">
                            Complete Desert Recovery and Roadside Support — <br><span>Everything in One Call</span>
                        </h2>
                        <p class="text-muted mt-3">
                            Desert pull out is the core of what Toretto does. But we also understand that getting your
                            vehicle unstuck is sometimes just the beginning of the problem. That's why our desert recovery
                            service extends well beyond the extraction itself.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Column 1: Desert Recovery -->
                <div class="col-lg-4 mb-4">
                    <div class="dp-svc-category">
                        <div class="dp-svc-cat-header">
                            <i class="fas fa-truck-monster"></i>
                            <h3>Desert Recovery Services</h3>
                        </div>
                        <ul class="dp-svc-list">
                            <li><i class="fas fa-caret-right"></i> Emergency desert pull out — full extraction from soft
                                sand, dunes, and off-road terrain</li>
                            <li><i class="fas fa-caret-right"></i> Winch-assisted recovery — for vehicles that require
                                mechanical extraction assistance</li>
                            <li><i class="fas fa-caret-right"></i> Off-road recovery — for vehicles stuck on rocky terrain,
                                gullies, and mixed desert surfaces</li>
                            <li><i class="fas fa-caret-right"></i> Desert-to-road towing — when a vehicle can be freed but
                                can't be driven</li>
                        </ul>
                    </div>
                </div>

                <!-- Column 2: On-Site Assistance -->
                <div class="col-lg-4 mb-4">
                    <div class="dp-svc-category">
                        <div class="dp-svc-cat-header">
                            <i class="fas fa-tools"></i>
                            <h3>On-Site Vehicle Assistance</h3>
                        </div>
                        <ul class="dp-svc-list">
                            <li><i class="fas fa-caret-right"></i> Battery boost — for dead batteries after prolonged
                                headlights or AC use while stuck</li>
                            <li><i class="fas fa-caret-right"></i> Emergency fuel delivery — for vehicles that have run out
                                of fuel on desert routes</li>
                            <li><i class="fas fa-caret-right"></i> Tyre assistance — inflation, puncture checks, and spare
                                tyre fitting</li>
                            <li><i class="fas fa-caret-right"></i> Basic mechanical first aid — for overheating and minor
                                issues that can be resolved on-site</li>
                        </ul>
                    </div>
                </div>

                <!-- Column 3: Transport & Follow-Up -->
                <div class="col-lg-4 mb-4">
                    <div class="dp-svc-category">
                        <div class="dp-svc-cat-header">
                            <i class="fas fa-route"></i>
                            <h3>Transport and Follow-Up</h3>
                        </div>
                        <ul class="dp-svc-list">
                            <li><i class="fas fa-caret-right"></i> Safe transport to a service garage or dealership when
                                on-site repair isn't possible</li>
                            <li><i class="fas fa-caret-right"></i> Advice on the safest desert return route after recovery
                            </li>
                            <li><i class="fas fa-caret-right"></i> Vehicle condition check before you drive away — we won't
                                send you off if something looks wrong</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 10: PROCESS STEPS (Numbered Dark Timeline) -->
    <section class="dp-content-section dp-process-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-9 text-center">
                    <div class="dp-section-header dp-section-header--dark">
                        <span class="dp-eyebrow dp-eyebrow--light">How It Works</span>
                        <h2 class="dp-section-title">
                            What Happens From the <br><span>Moment You Call Toretto</span>
                        </h2>
                        <p class="mt-3" style="color: rgba(255,255,255,0.6);">
                            We keep the process as simple as possible because we know you're dealing with enough already.
                            Here's exactly what to expect:
                        </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="dp-process-steps">

                        <div class="dp-step">
                            <div class="dp-step-num">01</div>
                            <div class="dp-step-content">
                                <h4>Call or WhatsApp — Your Choice</h4>
                                <p>Call us or send a WhatsApp message — whichever is faster for you in the moment. Our line
                                    is staffed around the clock, not just during business hours.</p>
                            </div>
                        </div>

                        <div class="dp-step">
                            <div class="dp-step-num">02</div>
                            <div class="dp-step-content">
                                <h4>Share Your Location</h4>
                                <p>Share your live location using WhatsApp's location sharing, or describe your GPS
                                    coordinates if you have them. If you're not sure where you are, we'll help you figure it
                                    out.</p>
                            </div>
                        </div>

                        <div class="dp-step">
                            <div class="dp-step-num">03</div>
                            <div class="dp-step-content">
                                <h4>We Confirm Arrival Time — A Real Number</h4>
                                <p>We confirm the nearest available team and give you an honest estimated arrival time. No
                                    vague 'we'll be there soon' — a real number based on where our team actually is.</p>
                            </div>
                        </div>

                        <div class="dp-step">
                            <div class="dp-step-num">04</div>
                            <div class="dp-step-content">
                                <h4>Instructions While You Wait</h4>
                                <p>We tell you what to do (and what NOT to do) while you wait. Following our advice during
                                    this window is the single biggest factor in how quickly and cleanly we can extract your
                                    vehicle.</p>
                            </div>
                        </div>

                        <div class="dp-step">
                            <div class="dp-step-num">05</div>
                            <div class="dp-step-content">
                                <h4>Assessment and Clear Communication</h4>
                                <p>Our team arrives, assesses the situation, and walks you through exactly what we're going
                                    to do and why. You're not out of the loop — you're part of the process.</p>
                            </div>
                        </div>

                        <div class="dp-step">
                            <div class="dp-step-num">06</div>
                            <div class="dp-step-content">
                                <h4>Extraction and Vehicle Check</h4>
                                <p>We carry out the extraction using the appropriate method for your specific situation.
                                    Then we run a quick check of your vehicle before clearing the scene.</p>
                            </div>
                        </div>

                        <div class="dp-step">
                            <div class="dp-step-num">07</div>
                            <div class="dp-step-content">
                                <h4>You're Back On the Road</h4>
                                <p>You're back on the road or safely towed — and we follow up to make sure everything is
                                    running normally.</p>
                            </div>
                        </div>

                    </div>
                    <p class="dp-process-note text-center mt-5">
                        That's it. No complicated call centre chains. No being put on hold. One line, one team, one outcome.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 11: FREQUENTLY ASKED QUESTIONS -->
    <section class="dp-content-section dp-faq-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-9 text-center">
                    <div class="dp-section-header">
                        <span class="dp-eyebrow">Got Questions?</span>
                        <h2 class="dp-section-title">
                            Frequently Asked Questions — <br><span>Desert Pull Out Service</span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="dp-faq-list">

                        <div class="dp-faq-item dp-faq-open">
                            <div class="dp-faq-trigger">
                                <span class="dp-faq-num">01</span>
                                <span class="dp-faq-q">How quickly can you reach me in the desert?</span>
                                <i class="fas fa-plus dp-faq-icon"></i>
                            </div>
                            <div class="dp-faq-answer">
                                <p>Response time varies based on your location and current team availability, but for most
                                    major desert areas around Dubai — Al Qudra, Lahbab, Margham — we typically arrive within
                                    30 to 60 minutes. For more remote locations, we'll give you an honest time estimate when
                                    you call. We never over-promise on arrival times because being realistic is safer than
                                    leaving you expecting us sooner than we can be there.</p>
                            </div>
                        </div>

                        <div class="dp-faq-item">
                            <div class="dp-faq-trigger">
                                <span class="dp-faq-num">02</span>
                                <span class="dp-faq-q">Can you recover rental cars?</span>
                                <i class="fas fa-plus dp-faq-icon"></i>
                            </div>
                            <div class="dp-faq-answer">
                                <p>Yes, absolutely. Rental car recovery is something we handle regularly. We know that
                                    rental vehicles often come with specific requirements around how they're handled, and
                                    we're careful about those details throughout the recovery process. We'd recommend
                                    letting your rental company know you've called us — most UAE-based rental providers are
                                    familiar with our service.</p>
                            </div>
                        </div>

                        <div class="dp-faq-item">
                            <div class="dp-faq-trigger">
                                <span class="dp-faq-num">03</span>
                                <span class="dp-faq-q">Is a professional pull out safe for my vehicle?</span>
                                <i class="fas fa-plus dp-faq-icon"></i>
                            </div>
                            <div class="dp-faq-answer">
                                <p>When done correctly, yes — it's significantly safer than any amateur attempt. The risk to
                                    your vehicle almost always comes from incorrect recovery methods: wrong pull angles that
                                    stress the chassis, tow hooks used as anchor points when they're not rated for that
                                    load, or aggressive wheelspin that damages the drivetrain. Our team uses
                                    vehicle-appropriate methods at every step. We've recovered everything from a small
                                    hatchback to a heavily loaded Patrol, and we take the same care with every one.</p>
                            </div>
                        </div>

                        <div class="dp-faq-item">
                            <div class="dp-faq-trigger">
                                <span class="dp-faq-num">04</span>
                                <span class="dp-faq-q">Do you work at night and on weekends?</span>
                                <i class="fas fa-plus dp-faq-icon"></i>
                            </div>
                            <div class="dp-faq-answer">
                                <p>We operate 24 hours a day, 7 days a week, including weekends and UAE public holidays.
                                    Desert emergencies don't follow a schedule and neither do we. Night recovery calls make
                                    up a significant portion of our work — particularly from the camping and overnight dune
                                    driving community.</p>
                            </div>
                        </div>

                        <div class="dp-faq-item">
                            <div class="dp-faq-trigger">
                                <span class="dp-faq-num">05</span>
                                <span class="dp-faq-q">Will you confirm the price before you come?</span>
                                <i class="fas fa-plus dp-faq-icon"></i>
                            </div>
                            <div class="dp-faq-answer">
                                <p>Yes, always. We give you a confirmed quote before any team is dispatched. We don't
                                    believe in arriving and then presenting a price that's different from what you expected.
                                    The price we quote when you call is the price you pay, subject to any on-site
                                    complications that we'd discuss with you openly before proceeding.</p>
                            </div>
                        </div>

                        <div class="dp-faq-item">
                            <div class="dp-faq-trigger">
                                <span class="dp-faq-num">06</span>
                                <span class="dp-faq-q">Which desert areas in Dubai do you cover?</span>
                                <i class="fas fa-plus dp-faq-icon"></i>
                            </div>
                            <div class="dp-faq-answer">
                                <p>We cover Al Qudra Desert, Lahbab Red Dunes, Margham Desert, Al Badayer Desert, and the
                                    various desert areas along Dubai's outskirts and border zones. We also cover the
                                    desert-adjacent areas of Sharjah and along the Dubai–Hatta corridor. If you're not sure
                                    whether your location is in our coverage area, just share your location via WhatsApp and
                                    we'll confirm immediately.</p>
                            </div>
                        </div>

                        <div class="dp-faq-item">
                            <div class="dp-faq-trigger">
                                <span class="dp-faq-num">07</span>
                                <span class="dp-faq-q">What should I do (and avoid) while waiting for you?</span>
                                <i class="fas fa-plus dp-faq-icon"></i>
                            </div>
                            <div class="dp-faq-answer">
                                <p>Stay with your vehicle — do not leave it to look for help on foot. Keep the engine off if
                                    the temperature gauge is high. Turn on your hazard lights if it's dark or visibility is
                                    poor. Drink any water you have in the car, especially in summer. Do not try to reverse
                                    or accelerate repeatedly — it makes extraction significantly harder and risks mechanical
                                    damage. Stay in the shade of your vehicle if it's hot outside. We'll talk you through
                                    everything else when we speak.</p>
                            </div>
                        </div>

                        <div class="dp-faq-item">
                            <div class="dp-faq-trigger">
                                <span class="dp-faq-num">08</span>
                                <span class="dp-faq-q">Can you recover a vehicle that's rolled or partially on its
                                    side?</span>
                                <i class="fas fa-plus dp-faq-icon"></i>
                            </div>
                            <div class="dp-faq-answer">
                                <p>We handle vehicle uprighting and recovery in addition to standard stuck-vehicle
                                    extractions. These situations require a different approach and more specialised
                                    equipment. If this is what you're dealing with, tell us immediately when you call so we
                                    can dispatch the right team with the right setup.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 12: EMERGENCY CTA -->
    <section class="dp-cta-emergency">
        <div class="dp-cta-overlay"></div>
        <div class="container position-relative">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <span class="dp-cta-badge"><i class="fas fa-circle-notch fa-spin mr-2"></i> Available Now —
                        24/7</span>
                    <h2 class="dp-cta-title">Stuck in the Dubai Desert Right Now?</h2>
                    <p class="dp-cta-sub">One call. One experienced team. One safe recovery.</p>
                    <p class="dp-cta-body">
                        Don't wait to see if the situation resolves itself. Desert conditions can deteriorate quickly —
                        heat builds, sand shifts, and a manageable situation can become a serious one. Call Toretto now
                        and let us take it from here.
                    </p>


                    <div class="dp-cta-actions">
                        <a href="tel:+971523003423" class="theme-btn">
                            <i class="fas fa-phone"></i> Call Now — 24/7 Desert Pull Out
                        </a>
                        <a href="https://wa.me/971523003423" class="theme-btn theme-btn2" target="_blank">
                            <i class="fab fa-whatsapp"></i> Send Your Location on WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <link rel="stylesheet"
      href="{{ asset('assets/css/desert-pull-out.css') }}?v={{ filemtime(public_path('assets/css/desert-pull-out.css')) }}">

    <script>
        // Urban Districts Accordion
        const leAccordionItems = document.querySelectorAll('.le-accordion-item');
        leAccordionItems.forEach((item, index) => {
            // Open first item by default
            if (index === 0) item.classList.add('le-open');
            item.querySelector('.le-accordion-head').addEventListener('click', () => {
                const isOpen = item.classList.contains('le-open');
                leAccordionItems.forEach(i => i.classList.remove('le-open'));
                if (!isOpen) item.classList.add('le-open');
            });
        });

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

        // LSC FAQ Section accordion
        document.querySelectorAll('.lsc-faq-question').forEach(btn => {
            btn.addEventListener('click', () => {
                const item = btn.parentElement;
                const isOpen = item.classList.contains('lsc-open');
                // Close all
                document.querySelectorAll('.lsc-faq-item').forEach(i => i.classList.remove('lsc-open'));
                // Toggle current
                if (!isOpen) item.classList.add('lsc-open');
            });
        });
        // Bike & Motorcycle FAQ accordion
        document.querySelectorAll('.bm-faq-trigger').forEach(btn => {
            btn.addEventListener('click', () => {
                const item = btn.parentElement;
                const isOpen = item.classList.contains('bm-faq-active');
                document.querySelectorAll('.bm-faq-item').forEach(i => i.classList.remove('bm-faq-active'));
                if (!isOpen) item.classList.add('bm-faq-active');
            });
        });

        // Desert Coverage Areas Accordion
        document.querySelectorAll('.dp-coverage-head').forEach(head => {
            head.addEventListener('click', () => {
                const item = head.parentElement;
                const isOpen = item.classList.contains('dp-coverage-open');
                document.querySelectorAll('.dp-coverage-item').forEach(i => i.classList.remove(
                    'dp-coverage-open'));
                if (!isOpen) item.classList.add('dp-coverage-open');
            });
        });

        // Desert FAQ Accordion
        document.querySelectorAll('.dp-faq-trigger').forEach(trigger => {
            trigger.addEventListener('click', () => {
                const item = trigger.parentElement;
                const isOpen = item.classList.contains('dp-faq-open');
                document.querySelectorAll('.dp-faq-item').forEach(i => i.classList.remove('dp-faq-open'));
                if (!isOpen) item.classList.add('dp-faq-open');
            });
        });
    </script>
@endsection
