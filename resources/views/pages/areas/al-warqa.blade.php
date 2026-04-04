@extends('layouts.main')

@section('title', 'Vehicle Recovery Al Warqa Dubai | Toretto Recovery 24/7 Roadside Assistance')

@section('meta_description')
    Need fast and reliable vehicle recovery in Al Warqa, Dubai? Toretto Recovery provides 24/7 roadside assistance, flatbed
    recovery, breakdown help, and accidental car recovery. Trusted, professional, and safe services for all vehicles. Call
    now for immediate support!
@endsection

@section('meta_keywords', 'Vehicle Recovery Al Warqa Dubai, Toretto Recovery, 24/7 Roadside Assistance, Flatbed Recovery, Breakdown Help, Accidental Car Recovery')

@section('head')
    @verbatim
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Toretto Recovery",
  "image": "https://torettorecovery.ae/logo.png",
  "url": "https://torettorecovery.ae/",
  "telephone": "+971526917666",
  "email": "info@torettorecovery.ae",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Al Warqa, Dubai",
    "addressLocality": "Al Warqa",
    "addressRegion": "Dubai",
    "postalCode": "00000",
    "addressCountry": "AE"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 25.1825,
    "longitude": 55.3665
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
    "opens": "00:00",
    "closes": "23:59"
  },
  "sameAs": [
    "https://www.facebook.com/torettorecovery",
    "https://www.instagram.com/torettorecovery",
    "https://www.linkedin.com/company/torettorecovery"
  ],
  "priceRange": "$$",
  "description": "Toretto Recovery provides professional vehicle recovery, flatbed recovery, roadside assistance, and accidental car recovery in Al Warqa, Dubai. Fast, safe, and reliable service 24/7.",
  "areaServed": {
    "@type": "Place",
    "name": "Al Warqa 1, Al Warqa 2, Al Warqa 3, Al Warqa 4, Al Warqa 5, Dubai"
  }
}
</script>
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How quickly can Toretto Recovery reach me in Al Warqa?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our typical response time in Al Warqa is 20–40 minutes, depending on traffic and your exact location."
      }
    },
    {
      "@type": "Question",
      "name": "Do you handle luxury and low-clearance vehicles?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Our flatbed recovery trucks ensure safe, damage-free transport for all types of vehicles, including luxury cars."
      }
    },
    {
      "@type": "Question",
      "name": "Can Toretto Recovery extract cars from tight or basement parking?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely. We specialize in basement and low-clearance parking extractions without causing damage."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide roadside assistance with insurance coverage?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We can guide you on using your insurance roadside assistance coverage and coordinate with your insurer if needed."
      }
    },
    {
      "@type": "Question",
      "name": "What types of emergencies do you cover?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We handle breakdowns, accidents, flat tyres, battery issues, fuel delivery, lockouts, and more."
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
    { "@type": "ListItem", "position": 3, "name": "Vehicle Recovery Al Warqa Dubai", "item": "https://www.torettorecovery.ae/areas/al-warqa" }
  ]
}
</script>
    @endverbatim
@endsection

@section('content')

     {{-- BREADCRUMB --}}
    <section class="site-breadcrumb" style="background:url('{{ asset('assets/images/contact-bg.jpg') }}')">
        <div class="container">
            <h1 class="breadcrumb-title-areas">Al Warqa</h1>
            <ul class="breadcrumb-menu">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                    <i class="fa fa-angle-double-right"></i>
                </li>
                <li>
                    <a href="{{ route('home') }}">Areas We Serve</a>
                    <i class="fa fa-angle-double-right"></i>
                </li>
                <li class="active">Al Warqa</li>
            </ul>
        </div>
    </section>

    {{-- ===== ABOUT / INTRO SECTION ===== --}}
    <section class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class=" wow animate__animated animate__fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <h1 class="breadcrumb-title-areas text-black" style="font-size:32px;">Vehicle Recovery & Roadside Assistance in <span class="text-link">Al Warqa</span></h1>
                            <p class="breadcrumb-desc text-black" style="font-size:18px;margin-top:10px;">
                                Trusted, Fast, and Professional Support from Toretto Recovery
                            </p>
                        </div>
                        <p>Getting stuck on the roadside can be stressful, especially in a busy community like Al Warqa
                            where traffic patterns, school drop‑offs, and residential parking combine to create
                            unpredictable driving conditions. At Toretto Recovery, we understand what drivers in this
                            area experience every day.</p>
                        <p>We help residents and visitors with real solutions when vehicles won't start, get damaged, or
                            are involved in accidents — and we do it with care, transparency, and local expertise.</p>

                        <a href="{{ route('contact') }}" class="theme-btn mt-2">Book Now<i
                                class="fa-solid fa-arrow-right-long"></i></a>
                        <a href="tel:+971526917666" class="theme-btn mt-2"> Call Now<i
                                class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 imagebag">
                    <div class="about-left wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/flatbed-tow-truck-loading-a-disabled-car-on-busy-al-qusais-road-uae.jpeg') }}"
                                alt="Vehicle Recovery in Al Warqa Dubai - Toretto Recovery"
                                style="border-radius:24px;width:100%;object-fit:cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== WHAT MAKES AL WARQA UNIQUE ===== --}}
    <section class="warqa-unique-section">
        <div class="container">
            <div class="row align-items-center">
                {{-- Left: Image --}}
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="warqa-unique-img wow animate__animated animate__fadeInLeft">
                        <img src="{{ asset('assets/images/car-recovery-on-road-qusais.jpg') }}"
                            alt="Al Warqa Dubai driving challenges and vehicle recovery">
                    </div>
                </div>
                {{-- Right: Content --}}
                <div class="col-lg-7">
                    <div class="warqa-unique-content wow animate__animated animate__fadeInRight" data-wow-delay=".2s">
                        <span class="warqa-section-tag">Local Insight</span>
                        <h2 class="warqa-unique-title">What Makes Al Warqa Unique <span>(and Challenging for Drivers)</span></h2>
                        <p class="warqa-unique-intro">Al Warqa is a community that's full of life and activity, but that movement also creates very common vehicle situations:</p>

                        <div class="warqa-challenge-grid">
                            <div class="warqa-challenge-card">
                                <div class="warqa-challenge-icon"><i class="bi bi-clock-fill"></i></div>
                                <div>
                                    <h4>Morning & Afternoon Congestion</h4>
                                    <p>Especially around Al Warqa 2 near schools, intersections fill up quickly and breakdowns can block traffic.</p>
                                </div>
                            </div>

                            <div class="warqa-challenge-card">
                                <div class="warqa-challenge-icon"><i class="bi bi-car-front-fill"></i></div>
                                <div>
                                    <h4>Tight Residential Parking</h4>
                                    <p>Many apartments and villas in Al Warqa 1 and Al Warqa 4 have limited parking space, which increases the chance of minor scrapes or vehicles that won't start.</p>
                                </div>
                            </div>

                            <div class="warqa-challenge-card">
                                <div class="warqa-challenge-icon"><i class="bi bi-cone-striped"></i></div>
                                <div>
                                    <h4>Ongoing Development</h4>
                                    <p>Construction and road work in parts of Al Warqa 4 and 5 can lead to tyre damage or vehicles getting stuck on loose ground.</p>
                                </div>
                            </div>

                            <div class="warqa-challenge-card">
                                <div class="warqa-challenge-icon"><i class="bi bi-signpost-split-fill"></i></div>
                                <div>
                                    <h4>Varied Terrains</h4>
                                    <p>From internal community roads to main thoroughfares and connecting routes, conditions change fast around Al Warqa.</p>
                                </div>
                            </div>
                        </div>

                        <p class="warqa-unique-footer">All these factors mean drivers need not just towing, but <strong>smart, safe vehicle recovery services</strong> that understand the area.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== CORE SERVICES (VISUAL CARDS) ===== --}}
    <section class="warqa-services-section">
        <div class="container">
            <div class="warqa-services-header">
                <h2>How We Help: Our Core Vehicle Recovery Services</h2>
                <p>We offer a range of services that cover nearly every roadside situation you might encounter. Each
                    service is delivered by trained professionals with purpose‑built equipment.</p>
            </div>

            <div class="row">
                {{-- Service 1 --}}
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="warqa-svc-visual-card">
                        <div class="warqa-svc-visual-img">
                            <span class="warqa-svc-icon-float"><i class="bi bi-tools"></i></span>
                            <img src="{{ asset('assets/images/flatbed-tow-truck-assisting-brokendown-car-in-al-qusais.jpeg') }}"
                                alt="Breakdown Recovery Al Warqa Dubai">
                        </div>
                        <div class="warqa-svc-visual-body">
                            <h4>Breakdown Recovery</h4>
                            <p>When your vehicle stops unexpectedly — engine failure, electrical issues, overheating, or
                                similar — we arrive and assess quickly. Our goal is to determine whether the issue can be
                                fixed on the spot or if safe transportation is needed.</p>
                        </div>
                    </div>
                </div>

                {{-- Service 2 --}}
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="warqa-svc-visual-card" style="display: flex; flex-direction: column; justify-content: center; background: linear-gradient(to bottom, #ffffff, #fdf2f2); border-color: rgba(215,0,6,0.1);">
                        <div class="warqa-svc-visual-body pt-4">
                            <div class="d-flex align-items-center mb-3 pb-2 border-bottom">
                                <span style="min-width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, #d70006 0%, #ff7a59 100%); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 22px; box-shadow: 0 8px 16px rgba(215, 0, 6, 0.2); margin-right: 14px;">
                                    <i class="bi bi-truck-front-fill"></i>
                                </span>
                                <h4 class="mb-0" style="color: #d70006;">Flatbed Recovery</h4>
                            </div>
                            <p class="mb-2">For vehicles that need the highest level of safety during transport — such as luxury cars, sports cars, or vehicles with underbody issues — we use flatbed carriers rather than traditional towing. This method prevents additional wear or damage.</p>
                        </div>
                    </div>
                </div>

                {{-- Service 3 --}}
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="warqa-svc-visual-card">
                        <div class="warqa-svc-visual-img">
                            <span class="warqa-svc-icon-float"><i class="bi bi-shield-fill-exclamation"></i></span>
                            <img src="{{ asset('assets/images/professional-vehicle-recovery-scene-in-al-qusais-dubai-modern-flatbed-tow-truck-assisting-a-brokendown-car-on-a-busy-urban-road-visible-uae.jpeg') }}"
                                alt="Accidental Car Recovery in Al Warqa">
                        </div>
                        <div class="warqa-svc-visual-body">
                            <h4>Accidental Car Recovery</h4>
                            <p>If your car has been in a collision, even if it appears superficially fine, returning it to a
                                safe location is important. We use careful lifting and secure transport methods so your
                                vehicle isn’t put at further risk.</p>
                        </div>
                    </div>
                </div>

                {{-- Service 4 --}}
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="warqa-svc-visual-card">
                        <div class="warqa-svc-visual-img">
                            <span class="warqa-svc-icon-float"><i class="bi bi-wrench-adjustable-circle"></i></span>
                            <img src="{{ asset('assets/images/flatbed-tow-truck-loading-a-disabled-car-on-busy-al-qusais-road-uae.jpeg') }}"
                                alt="Roadside Assistance & Minor Fixes">
                        </div>
                        <div class="warqa-svc-visual-body">
                            <h4>Roadside Assistance & Minor Fixes</h4>
                            <p>Many drivers simply need help that doesn’t involve a tow:</p>
                            <ul class="ms-3 mb-0" style="list-style-type:circle;">
                                <li>Jump starts for dead batteries</li>
                                <li>Tyre change or puncture support</li>
                                <li>Fuel delivery if you’ve run out</li>
                                <li>Lockout assistance if keys are locked inside</li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Service 5 --}}
                <div class="col-md-12 col-lg-6 mb-4">
                    <div class="warqa-svc-visual-card">
                        <div class="warqa-svc-visual-img">
                            <span class="warqa-svc-icon-float"><i class="bi bi-building-fill-down"></i></span>
                            <img src="{{ asset('assets/images/vehicle-recovery-on-a-bustling-al-qusais-street-modern-tow-truck-and-broken-car-uae-road.jpeg') }}"
                                alt="Basement & Tight Space Recovery">
                        </div>
                        <div class="warqa-svc-visual-body">
                            <h4>Basement & Tight Space Recovery</h4>
                            <p>Vehicles stuck in underground or low‑clearance parking can require careful planning and
                                specialist equipment. Our team has experience with precisely these situations in Al Warqa’s
                                residential complexes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== REAL STORIES / SCENARIOS ===== --}}
    <section class="warqa-scenarios-section">
        <div class="container">
            <div class="warqa-scenarios-header">
                <span class="warqa-section-tag">Real Stories</span>
                <h2>Real Stories from Around Al Warqa</h2>
                <p>Below are genuine examples of recoveries we conducted, based on real work in the area. These help
                    illustrate not just what we do, but how and why we do it.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="warqa-scenario-card text-only-card pt-4">
                        <div class="warqa-scenario-body">
                            <span class="warqa-scenario-badge position-relative mb-3 d-inline-block" style="top:0;left:0;">Al Warqa 2</span>
                            <h4>School Drop‑Off Breakdown</h4>
                            <p>A driver's car stopped in the middle of a busy school lane. Traffic was building and the
                                risk of fines was high. We arrived in about 25 minutes. Flatbed recovery was used to
                                transport to a workshop.</p>
                            <div class="warqa-scenario-outcome">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Traffic flow restored, driver relieved.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="warqa-scenario-card text-only-card pt-4">
                        <div class="warqa-scenario-body">
                            <span class="warqa-scenario-badge position-relative mb-3 d-inline-block" style="top:0;left:0;">Al Warqa 4</span>
                            <h4>Basement Parking Extraction</h4>
                            <p>A resident's car wouldn't start in a tight underground spot. There was no room for a
                                typical wheel lift approach. Our team used careful manoeuvring and specialist equipment
                                to extract without damage.</p>
                            <div class="warqa-scenario-outcome">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Car delivered safely to the owner's chosen location.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="warqa-scenario-card text-only-card pt-4">
                        <div class="warqa-scenario-body">
                            <span class="warqa-scenario-badge position-relative mb-3 d-inline-block" style="top:0;left:0;">Al Warqa 3</span>
                            <h4>Minor Collision Recovery</h4>
                            <p>Two cars had contact in a narrow residential street. Vehicle A could not be driven
                                further. We arrived with a flatbed truck. Both vehicles were safely loaded and
                                transported to a repair centre.</p>
                            <div class="warqa-scenario-outcome">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Road cleared quickly, owners focused on repair.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== INSURANCE SECTION ===== --}}
    <section class="warqa-insurance-section">
        <div class="container">
            <div class="warqa-insurance-wrap w-100" style="grid-template-columns: 1fr;">
                <div class="warqa-insurance-card border-left-red mx-auto w-100" style="border-radius: 20px;">
                    <div class="text-center mb-4">
                        <h3>Insurance & Recovery — What Drivers in Dubai Should Know</h3>
                        <p>Many drivers in the UAE are surprised to learn that a majority of comprehensive car insurance
                            policies include roadside assistance and towing support at no extra cost.</p>
                    </div>
                    
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <p>Around <strong>78% of comprehensive policies</strong> cover services like towing, battery jump‑starts, tyre help, and basic
                                roadside support — often up to a certain distance.</p>
                            <p>This guidance is helpful because many drivers only think about towing once they're already
                                stressed and stuck. Clarifying coverage ahead of time can make a big difference.</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>What that means for you:</strong></p>
                            <ul class="warqa-insurance-list">
                                <li><i class="bi bi-check-circle-fill"></i> You might already have coverage for a breakdown or
                                    towing.</li>
                                <li><i class="bi bi-check-circle-fill"></i> Calling your insurer first can save you money.</li>
                                <li><i class="bi bi-check-circle-fill"></i> In some cases, insurers will dispatch a recovery
                                    provider on your behalf.</li>
                                <li><i class="bi bi-check-circle-fill"></i> If you select us, we provide clear cost guidance.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== WHY CHOOSE US ===== --}}
    <section class="warqa-why-section">
        <div class="container">
            <div class="warqa-why-header">
                <h2>Why Drivers Choose Toretto Recovery <span>in Al Warqa</span></h2>
                <p>Many recovery services across Dubai provide similar types of help, but what sets our team apart is:
                </p>
            </div>

            <div class="warqa-why-grid">
                <div class="warqa-why-card">
                    <div class="warqa-why-icon"><i class="bi bi-geo-alt-fill"></i></div>
                    <div>
                        <h4>Local Experience</h4>
                        <p>We know traffic patterns around schools, residential clusters, and community peak hours.</p>
                    </div>
                </div>
                <div class="warqa-why-card">
                    <div class="warqa-why-icon"><i class="bi bi-grid-fill"></i></div>
                    <div>
                        <h4>Complete Recovery Solutions</h4>
                        <p>From battery issues to accident recoveries, we handle situations others might not consider.
                        </p>
                    </div>
                </div>
                <div class="warqa-why-card">
                    <div class="warqa-why-icon"><i class="bi bi-shield-check"></i></div>
                    <div>
                        <h4>Professional Care</h4>
                        <p>Vehicles are transported safely, with minimal risk of further damage.</p>
                    </div>
                </div>
                <div class="warqa-why-card">
                    <div class="warqa-why-icon"><i class="bi bi-cash-coin"></i></div>
                    <div>
                        <h4>Transparent Support</h4>
                        <p>We explain options and costs clearly before work begins.</p>
                    </div>
                </div>
                <div class="warqa-why-card">
                    <div class="warqa-why-icon"><i class="bi bi-emoji-smile"></i></div>
                    <div>
                        <h4>Peace of Mind</h4>
                        <p>Whether it's your daily commute or an unexpected breakdown, we're there for you.</p>
                    </div>
                </div>
                <div class="warqa-why-card">
                    <div class="warqa-why-icon"><i class="bi bi-clock-fill"></i></div>
                    <div>
                        <h4>24/7 Availability</h4>
                        <p>Day shift, night shift, holidays — our dispatch is always live. No answering machine.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== SAFETY CHECKLIST ===== --}}
    <section class="warqa-safety-section">
        <div class="container">
            <div class="warqa-safety-box">
                <h3>Quick Safety Checklist for Drivers</h3>
                <p>Before help arrives, you can increase your safety with these simple steps:</p>
                <div class="warqa-safety-pills">
                    <span class="warqa-safety-pill"><i class="bi bi-exclamation-triangle-fill"></i> Turn on all hazard
                        lights</span>
                    <span class="warqa-safety-pill"><i class="bi bi-sign-turn-right-fill"></i> Move off the main road if
                        possible</span>
                    <span class="warqa-safety-pill"><i class="bi bi-cone-striped"></i> Place a warning triangle</span>
                    <span class="warqa-safety-pill"><i class="bi bi-car-front-fill"></i> Stay inside if road is
                        busy</span>
                    <span class="warqa-safety-pill"><i class="bi bi-phone-fill"></i> Keep phone charged &
                        accessible</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== FAQ SECTION ===== --}}
    <section class="warqa-faq-section">
        <div class="container">
            <div class="warqa-faq-header">
                <span class="warqa-section-tag">Help Center</span>
                <h2>Frequently Asked Questions</h2>
                <p>Here are the questions we hear most often from people living and driving in Al Warqa:</p>
            </div>

            <div class="warqa-faq-wrap">

                <div class="warqa-faq-item">
                    <button class="warqa-faq-question">
                        How quickly can you reach me?
                        <span class="warqa-faq-toggle">+</span>
                    </button>
                    <div class="warqa-faq-answer">
                        <p>Response times vary with traffic, but we aim to be on‑site within 20–40 minutes across Al
                            Warqa unless there's unusual congestion.</p>
                    </div>
                </div>

                <div class="warqa-faq-item">
                    <button class="warqa-faq-question">
                        Do you handle luxury cars or low‑clearance vehicles?
                        <span class="warqa-faq-toggle">+</span>
                    </button>
                    <div class="warqa-faq-answer">
                        <p>Yes. Our flatbed trucks are designed to protect vehicles during transport and are ideal for
                            modern, low‑to‑ground cars.</p>
                    </div>
                </div>

                <div class="warqa-faq-item">
                    <button class="warqa-faq-question">
                        What should I do if my car breaks down at night?
                        <span class="warqa-faq-toggle">+</span>
                    </button>
                    <div class="warqa-faq-answer">
                        <p>Safety first: switch on hazard lights, move the vehicle to a safer spot if possible, and call
                            us. We operate 24/7.</p>
                    </div>
                </div>

                <div class="warqa-faq-item">
                    <button class="warqa-faq-question">
                        Can you change my tyre on the roadside?
                        <span class="warqa-faq-toggle">+</span>
                    </button>
                    <div class="warqa-faq-answer">
                        <p>Yes — and if a tyre cannot be safely fixed, we can tow your vehicle to a workshop.</p>
                    </div>
                </div>

                <div class="warqa-faq-item">
                    <button class="warqa-faq-question">
                        What if I have roadside assistance through my insurance?
                        <span class="warqa-faq-toggle">+</span>
                    </button>
                    <div class="warqa-faq-answer">
                        <p>We can help you understand your coverage and coordinate with your insurer so you get the
                            support you're entitled to.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ===== COVERAGE AREAS ===== --}}
    <section class="warqa-coverage-section">
        <div class="container">
            <div class="warqa-coverage-header">
                <span class="warqa-section-tag">Local Coverage</span>
                <h2>Areas We Serve Within Al Warqa</h2>
                <p>We cover all zones of Al Warqa — including:</p>
            </div>

            <div class="warqa-zone-grid">
                <div class="warqa-zone-card">
                    <i class="bi bi-geo-alt-fill"></i>
                    <div>
                        <span class="card-title">Al Warqa 1</span>
                    </div>
                </div>
                <div class="warqa-zone-card">
                    <i class="bi bi-geo-alt-fill"></i>
                    <div>
                        <span class="card-title">Al Warqa 2</span>
                        <span class="card-desc">(near schools &amp; residential clusters)</span>
                    </div>
                </div>
                <div class="warqa-zone-card">
                    <i class="bi bi-geo-alt-fill"></i>
                    <div>
                        <span class="card-title">Al Warqa 3</span>
                        <span class="card-desc">(mixed apartments &amp; villas)</span>
                    </div>
                </div>
                <div class="warqa-zone-card">
                    <i class="bi bi-geo-alt-fill"></i>
                    <div>
                        <span class="card-title">Al Warqa 4</span>
                        <span class="card-desc">(newer developments)</span>
                    </div>
                </div>
                <div class="warqa-zone-card">
                    <i class="bi bi-geo-alt-fill"></i>
                    <div>
                        <span class="card-title">Al Warqa 5</span>
                        <span class="card-desc">(expanding residential)</span>
                    </div>
                </div>
            </div>

            <div class="warqa-nearby-heading">
                <h3>Nearby Communities We Support</h3>
                <p>We also offer support into nearby communities where drivers frequently travel:</p>
            </div>

            <div class="warqa-zone-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px;">
                <div class="warqa-zone-card" style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);">
                    <i class="bi bi-signpost-split-fill"></i>
                    <div>
                        <span class="card-title">Mirdif</span>
                    </div>
                </div>
                <div class="warqa-zone-card" style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);">
                    <i class="bi bi-signpost-split-fill"></i>
                    <div>
                        <span class="card-title">International City</span>
                    </div>
                </div>
                <div class="warqa-zone-card" style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);">
                    <i class="bi bi-signpost-split-fill"></i>
                    <div>
                        <span class="card-title">Ras Al Khor</span>
                    </div>
                </div>
            </div>

            <div class="warqa-nearby-box">
                <p><strong>This wide coverage ensures we can assist you whether you’re heading out of the community or coming home.</strong></p>
            </div>
        </div>
    </section>

    {{-- ===== FINAL CTA ===== --}}
    <section class="warqa-cta-section">
        <div class="container">
            <div class="warqa-cta-box">
                <h2>Ready for Support When You Need It</h2>
                <p>Vehicle troubles don't wait for a convenient time. Whether it's a breakdown, accident, tyre issue, or
                    another roadside situation in Al Warqa, Toretto Recovery is ready with dependable support and real
                    expertise.</p>
                <div class="warqa-cta-actions">
                    <a href="tel:+971526917666" class="theme-btn ja-cta-btn-primary">
                        <i class="bi bi-telephone-fill"></i> CALL NOW
                    </a>
                    <a href="https://wa.me/971526917666" class="theme-btn ja-cta-btn-primary" target="_blank">
                        <i class="bi bi-whatsapp"></i> WHATSAPP NOW
                    </a>
                    <a href="{{ route('contact') }}" class="theme-btn ja-cta-btn-primary">
                        <i class="bi bi-globe"></i> REQUEST ONLINE
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== FAQ TOGGLE SCRIPT ===== --}}
    <script>
        document.querySelectorAll(".warqa-faq-question").forEach(function(btn) {
            btn.addEventListener("click", function() {
                var item = this.closest(".warqa-faq-item");
                var isActive = item.classList.contains("active");

                document.querySelectorAll(".warqa-faq-item").forEach(function(el) {
                    el.classList.remove("active");
                });

                if (!isActive) {
                    item.classList.add("active");
                }
            });
        });
    </script>

    <link rel="stylesheet"
        href="{{ asset('assets/css/al-warqa.css') }}?v={{ filemtime(public_path('assets/css/al-warqa.css')) }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection
