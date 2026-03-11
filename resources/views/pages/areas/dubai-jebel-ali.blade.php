@extends('layouts.main')

@section('title', 'Car Recovery in Jebel Ali | 24/7 Fast Towing & Roadside Assistance')

@section('meta_description')Sometimes cars give up mid-shift or batteries die without warning — it happens all the time
    in Jebel Ali. Our 24/7 local recovery team handles breakdowns, towing, jumpstarts, tyre changes, and accident recovery
    fast and safely. Get back on the road in minutes!
@endsection

@section('meta_keywords',
    'Car Recovery Jebel Ali, Towing Jebel Ali, JAFZA Recovery, Fleet Recovery Dubai, Emergency
    Towing 24/7')

@section('head')
    @verbatim
        <script type="application/ld+json">
        {
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Jebel Ali Car Recovery",
  "image": "https://yourwebsite.com/images/car-recovery-jebel-ali.jpg",
  "@id": "https://yourwebsite.com/car-recovery-jebel-ali",
  "url": "https://yourwebsite.com/car-recovery-jebel-ali",
  "telephone": "+971 523003423",
  "priceRange": "$$",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "274 Street - Dubai Investment Park - 2 - Dubai",
    "addressLocality": "Jebel Ali",
    "addressRegion": "Dubai",
    "postalCode": "XXXXX",
    "addressCountry": "AE"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "24.9857",
    "longitude": "55.0593"
  },
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"
      ],
      "opens": "00:00",
      "closes": "23:59"
    }
  ],
  "sameAs": [
    "https://www.facebook.com/yourpage",
    "https://www.instagram.com/yourpage",
    "https://www.linkedin.com/company/yourpage"
  ],
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How fast can car recovery reach Jebel Ali?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most recovery services arrive within 20–40 minutes depending on traffic and location."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide 24/7 emergency car recovery in Jebel Ali?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, our local team is available day and night for jumpstarts, towing, tyre changes, and accident recovery."
      }
    },
    {
      "@type": "Question",
      "name": "Can fleet vehicles be recovered inside JAFZA?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, our team coordinates access and recovers fleet vehicles safely inside JAFZA and industrial zones."
      }
    },
    {
      "@type": "Question",
      "name": "Is tyre replacement available on the spot in Jebel Ali?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, if the spare tyre is available and the damage allows safe replacement."
      }
    },
    {
      "@type": "Question",
      "name": "Do you handle luxury and sports car recovery in Jebel Ali?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely, we use flatbed towing and specialized equipment to recover luxury and sports cars without damage."
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
            <h1 class="breadcrumb-title-areas">Car Recovery in Dubai Jebel Ali
            </h1>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a><i class="fa fa-angle-double-right"></i></li>
                <li><a href="{{ route('home') }}">Areas We Serve</a><i class="fa fa-angle-double-right"></i></li>
                <li class="active">Jebel Ali</li>
            </ul>
        </div>
    </section>



    {{-- ===================================
    SECTION 1 — HERO
    =================================== --}}
    <section class="ja-hero-section">
        <div class="container">
            <div class="ja-hero-grid">
                <div class="ja-hero-text">
                    <h2> 24/7 <span> Emergency Recovery</span></h2>
                    <p class="ja-hero-tagline">What Really Happens When Your Vehicle Breaks Down</p>
                    <p>If your car stops working in Jebel Ali, panic kicks in fast. It's hot. Trucks keep flying past you.
                        Your phone battery drops. And suddenly, Google searches don't feel helpful anymore.</p>
                    <p>Jebel Ali is not like residential Dubai. It's full of industrial roads, container trucks,
                        long-distance
                        driving, and security-controlled zones. When a breakdown happens here, recovery isn't just about
                        towing — it's about safety, timing, permissions, and experience.</p>
                    <div class="ja-trust-bullets">
                        <span class="ja-trust-item"><i class="fas fa-check-circle"></i> JAFZA & Port Access</span>
                        <span class="ja-trust-item"><i class="fas fa-check-circle"></i> Fleet Recovery</span>
                        <span class="ja-trust-item"><i class="fas fa-check-circle"></i> 20–40 Min Response</span>
                        <span class="ja-trust-item"><i class="fas fa-check-circle"></i> Flatbed Towing</span>
                    </div>
                    <div class="ja-hero-btns">
                        <a href="tel:+971523003423" class="theme-btn ja-btn-primary">
                            <i class="fas fa-phone"></i> Call Now — +971 52 300 3423
                        </a>
                        <a href="{{ route('book.now') }}" target="_blank" class="theme-btn ja-btn-secondary">
                            Book Online <i class="fas fa-arrow-right-long"></i>
                        </a>
                    </div>
                </div>
                <div class="ja-hero-img-wrap">
                    <img src="{{ asset('assets/images/car-recovery-jebel-ali.jpg') }}"
                        alt="Man fixing tyre on vehicle in Jebel Ali" class="ja-hero-img">
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 2 — WHY JEBEL ALI IS DIFFERENT
    =================================== --}}
    <section class="ja-different-section">
        <div class="container">
            <div class="ja-different-grid">
                <div class="ja-different-text">
                    <span class="ja-eyebrow"><i class="fas fa-map-location-dot"></i> Area Insight</span>
                    <h2>Why Car Recovery in <span>Jebel Ali Is Different</span></h2>
                    <p>Jebel Ali is built for business, logistics, and heavy movement. That creates unique
                        problems for vehicles.</p>
                    <div class="ja-diff-points">
                        <div class="ja-diff-item"><i class="fas fa-road"></i> Roads are wider but faster</div>
                        <div class="ja-diff-item"><i class="fas fa-truck"></i> Trucks & trailers dominate traffic</div>
                        <div class="ja-diff-item"><i class="fas fa-clock"></i> Vehicles often idle for hours</div>
                        <div class="ja-diff-item"><i class="fas fa-temperature-high"></i> Heat exposure is extreme</div>
                        <div class="ja-diff-item"><i class="fas fa-lock"></i> Some areas require entry approval</div>
                    </div>
                    <p class="mt-2 text-start">That mix creates breakdowns. A lot of them.</p>
                    <p class="mt-2 text-start">Sometimes you see fleet vans give up halfway through a shift, or a private
                        car refuse to start after a quick lunch break. Batteries just die, right there in the heat, with no
                        warning. Around Jebel Ali, these moments have become part of daily life — and that’s exactly why
                        having a trusted local recovery team on call makes all the difference. Someone who knows the roads,
                        the traffic, and all those tricky industrial corners can get you moving again before the stress even
                        sets in.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 3 — COMMON BREAKDOWNS
    =================================== --}}
    <section class="ja-breakdowns-section">
        <div class="container">
            <div class="ja-bd-header">
                <div class="ja-bd-header-text">
                    <span class="ja-eyebrow light"><i class="fas fa-exclamation-triangle"></i> Common Situations</span>
                    <h2>Common Breakdown & Emergency <span>Situations in Jebel Ali</span></h2>
                </div>
                <div class="ja-bd-header-img">
                    <img src="{{ asset('assets/images/vehicle-recovery-jebel-ali.jpg') }}"
                        alt="Vehicle recovery in Jebel Ali area" class="ja-bd-img">
                </div>
            </div>

            <div class="ja-bd-detail-list">

                {{-- 1. Fleet Vehicle --}}
                <div class="ja-bd-detail-card">
                    <div class="ja-bd-detail-top">
                        <div class="ja-bd-icon"><i class="fas fa-van-shuttle"></i></div>
                        <div>
                            <h3>Fleet Vehicle Breakdown</h3>
                            <span class="ja-bd-tag">Very Common</span>
                        </div>
                    </div>
                    <p>This is one of the biggest issues in the area.</p>
                    <h5>What usually goes wrong:</h5>
                    <ul class="ja-bd-points">
                        <li>Battery drains after long idle time</li>
                        <li>Vans overheat after continuous deliveries</li>
                        <li>Clutch and gearbox issues</li>
                        <li>Tyre damage from heavy loads</li>
                    </ul>
                    <p class="ja-bd-note">Fleet vehicles can't afford long delays. Even one breakdown can affect multiple
                        deliveries, so <strong>fast recovery matters more than cost.</strong></p>
                </div>

                {{-- 2. Sheikh Zayed Road --}}
                <div class="ja-bd-detail-card">
                    <div class="ja-bd-detail-top">
                        <div class="ja-bd-icon"><i class="fas fa-road"></i></div>
                        <div>
                            <h3>Breakdown on Sheikh Zayed Road (Jebel Ali Stretch)</h3>
                            <span class="ja-bd-tag">High Risk</span>
                        </div>
                    </div>
                    <p>This is a high-risk situation.</p>
                    <h5>Typical problems:</h5>
                    <ul class="ja-bd-points">
                        <li>Sudden engine failure</li>
                        <li>Tyre burst at high speed</li>
                        <li>Minor accident during lane change</li>
                    </ul>
                    <h5>What usually happens:</h5>
                    <ul class="ja-bd-points">
                        <li>Vehicle must be moved quickly</li>
                        <li>Flatbed towing is safest</li>
                        <li>Police may need to be informed</li>
                        <li>Driver safety is the first priority</li>
                    </ul>
                </div>

                {{-- 3. Industrial Areas --}}
                <div class="ja-bd-detail-card">
                    <div class="ja-bd-detail-top">
                        <div class="ja-bd-icon"><i class="fas fa-industry"></i></div>
                        <div>
                            <h3>Emergency Breakdown in Industrial Areas</h3>
                        </div>
                    </div>
                    <p>These roads are narrow, poorly lit at night, and filled with trucks.</p>
                    <h5>Common issues:</h5>
                    <ul class="ja-bd-points">
                        <li>Battery failure</li>
                        <li>Overheated engines</li>
                        <li>Brake problems</li>
                        <li>Flat tyres</li>
                    </ul>
                    <p class="ja-bd-note">Most of these cannot be fixed on the spot, especially with heavy vehicles nearby.
                    </p>
                </div>

                {{-- 4. JAFZA / Port --}}
                <div class="ja-bd-detail-card">
                    <div class="ja-bd-detail-top">
                        <div class="ja-bd-icon"><i class="fas fa-anchor"></i></div>
                        <div>
                            <h3>Inside JAFZA or Near Jebel Ali Port</h3>
                            <span class="ja-bd-tag">Experience Required</span>
                        </div>
                    </div>
                    <p>This is where experience really matters.</p>
                    <h5>Challenges:</h5>
                    <ul class="ja-bd-points">
                        <li>Entry permissions</li>
                        <li>Warehouse gate locations</li>
                        <li>Port authority rules</li>
                        <li>Heavy container traffic</li>
                    </ul>
                    <p class="ja-bd-note">Recovery teams must know <strong>exact gate numbers, warehouse names, and access
                            points</strong>, otherwise delays are guaranteed.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 4 — SERVICES
    =================================== --}}
    <section class="ja-svc-section">
        <div class="container">
            <div class="ja-section-header text-center">
                <span class="ja-eyebrow"><i class="fas fa-wrench"></i> Our Services</span>
                <h2>Types of Car Recovery Services <span>Available in Jebel Ali</span></h2>
            </div>

            <div class="ja-svc-detail-grid">

                {{-- 1. Towing --}}
                <div class="ja-svc-detail-card">
                    <div class="ja-svc-detail-top">
                        <div class="ja-svc-icon"><i class="fas fa-truck-ramp-box"></i></div>
                        <h3>Towing & Vehicle Recovery</h3>
                    </div>
                    <p>Used when the car can't move safely.</p>
                    <ul class="ja-svc-points">
                        <li>Flatbed towing for cars, SUVs, luxury vehicles</li>
                        <li>Heavy towing for vans and commercial vehicles</li>
                        <li>Short and long-distance recovery</li>
                    </ul>
                    <p class="ja-svc-note">Flatbeds are always preferred here because of traffic and road conditions.</p>
                </div>

                {{-- 2. Accident --}}
                <div class="ja-svc-detail-card">
                    <div class="ja-svc-detail-top">
                        <div class="ja-svc-icon"><i class="fas fa-car-burst"></i></div>
                        <h3>Accident Recovery</h3>
                    </div>
                    <p>After even a minor accident:</p>
                    <ul class="ja-svc-points">
                        <li>Vehicle needs to be cleared safely</li>
                        <li>Further damage must be avoided</li>
                        <li>Traffic flow must be restored</li>
                    </ul>
                    <p class="ja-svc-note">Professional recovery prevents insurance problems and safety risks.</p>
                </div>

                {{-- 3. Tyre --}}
                <div class="ja-svc-detail-card">
                    <div class="ja-svc-detail-top">
                        <div class="ja-svc-icon"><i class="fas fa-circle-dot"></i></div>
                        <h3>Tyre Replacement & Tyre Issues</h3>
                    </div>
                    <p>Some tyre problems can be fixed on the spot.</p>
                    <ul class="ja-svc-points">
                        <li>Flat tyre with spare → replacement possible</li>
                        <li>Tyre burst or damaged rim → towing required</li>
                    </ul>
                    <p class="ja-svc-note">Industrial roads are tough on tyres, especially overloaded vehicles.</p>
                </div>

                {{-- 4. Battery --}}
                <div class="ja-svc-detail-card">
                    <div class="ja-svc-detail-top">
                        <div class="ja-svc-icon"><i class="fas fa-car-battery"></i></div>
                        <h3>Jumpstart & Battery Boost</h3>
                    </div>
                    <p>Batteries in Jebel Ali have a mind of their own. They fail because of the scorching heat, long hours
                        parked under the sun, or fleet vehicles sitting idle overnight.</p>
                    <p class="ja-svc-note">The good news? Our team usually gets your car back to life in <strong>under 10
                            minutes</strong> — and you're back on the road before you even finish your coffee.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- ===================================
    SECTION 5 — HOW IT WORKS (COMPREHENSIVE)
    =================================== --}}
    <section class="ja-how-section">
        <div class="container">

            {{-- Sub-section 1: Step by Step --}}
            <div class="ja-how-block">
                <div class="ja-section-header text-center">
                    <span class="ja-eyebrow light"><i class="fas fa-list-ol"></i> How It Works</span>
                    <h2>How Recovery <span>Actually Works</span> (Step by Step)</h2>
                    <p>When you call a recovery service in Jebel Ali, here's what normally happens:</p>
                </div>

                <div class="ja-steps">
                    <div class="ja-step">
                        <div class="ja-step-num">01</div>
                        <div class="ja-step-body">
                            <h3><i class="fas fa-location-dot"></i> Share Your Location</h3>
                            <p>You share your exact location — road, gate, warehouse — so we can pinpoint you instantly.</p>
                        </div>
                    </div>
                    <div class="ja-step">
                        <div class="ja-step-num">02</div>
                        <div class="ja-step-body">
                            <h3><i class="fas fa-car"></i> Confirm Vehicle & Issue</h3>
                            <p>Vehicle type and issue are confirmed so we send the right truck and equipment.</p>
                        </div>
                    </div>
                    <div class="ja-step">
                        <div class="ja-step-num">03</div>
                        <div class="ja-step-body">
                            <h3><i class="fas fa-truck-fast"></i> Recovery Unit Dispatched</h3>
                            <p>Nearest recovery unit is dispatched — our drivers know every shortcut in Jebel Ali.</p>
                        </div>
                    </div>
                    <div class="ja-step">
                        <div class="ja-step-num">04</div>
                        <div class="ja-step-body">
                            <h3><i class="fas fa-wrench"></i> On-Spot Repair or Tow</h3>
                            <p>On-spot repair or towing decision is made based on what's safest for your vehicle.</p>
                        </div>
                    </div>
                    <div class="ja-step">
                        <div class="ja-step-num">05</div>
                        <div class="ja-step-body">
                            <h3><i class="fas fa-flag-checkered"></i> Vehicle Moved Safely</h3>
                            <p>Vehicle is moved safely or fixed — clear information = faster help.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Sub-section 2: Response Times --}}
            <div class="ja-how-block ja-how-block-strip">
                <h3 class="ja-how-sub-title"><i class="fas fa-stopwatch"></i> Real Response Time & Distance in Jebel Ali
                </h3>
                <div class="ja-response-strip">
                    <div class="ja-resp-item">
                        <strong>10–20 min</strong>
                        <span>Jumpstart / Tyre Help</span>
                    </div>
                    <div class="ja-resp-item">
                        <strong>20–40 min</strong>
                        <span>Standard Towing</span>
                    </div>
                    <div class="ja-resp-item">
                        <strong>30–60 min</strong>
                        <span>JAFZA / Port Recovery</span>
                    </div>
                    <div class="ja-resp-item">
                        <strong>10–30 km</strong>
                        <span>Typical Towing Distance</span>
                    </div>
                </div>
                <p class="ja-how-footnote">Traffic and access permissions can affect timing.</p>
            </div>

            {{-- Sub-section 3: Safety Tips --}}
            <div class="ja-how-block">
                <h3 class="ja-how-sub-title"><i class="fas fa-shield-halved"></i> Safety Tips During a Breakdown in Jebel
                    Ali</h3>
                <div class="ja-safety-list">
                    <div class="ja-safety-row ja-safety-do">
                        <i class="fas fa-circle-check"></i>
                        <span>Turn on hazard lights immediately</span>
                    </div>
                    <div class="ja-safety-row ja-safety-do">
                        <i class="fas fa-circle-check"></i>
                        <span>Stay inside the vehicle on highways</span>
                    </div>
                    <div class="ja-safety-row ja-safety-do">
                        <i class="fas fa-circle-check"></i>
                        <span>Move away from traffic if possible</span>
                    </div>
                    <div class="ja-safety-row ja-safety-dont">
                        <i class="fas fa-circle-xmark"></i>
                        <span>Never attempt DIY towing</span>
                    </div>
                    <div class="ja-safety-row ja-safety-dont">
                        <i class="fas fa-circle-xmark"></i>
                        <span>Avoid standing near trucks</span>
                    </div>
                </div>
                <p class="ja-how-footnote">Industrial traffic does not slow down easily.</p>
            </div>

            {{-- Sub-section 4: Cost Factors --}}
            <div class="ja-how-block">
                <h3 class="ja-how-sub-title"><i class="fas fa-coins"></i> Cost of Car Recovery in Jebel Ali (What Affects
                    It)</h3>
                <p class="ja-how-intro">Pricing depends on:</p>
                <div class="ja-cost-grid">
                    <div class="ja-cost-item"><i class="fas fa-car-side"></i> Vehicle size</div>
                    <div class="ja-cost-item"><i class="fas fa-gear"></i> Type of service</div>
                    <div class="ja-cost-item"><i class="fas fa-route"></i> Distance</div>
                    <div class="ja-cost-item"><i class="fas fa-clock"></i> Time of day</div>
                    <div class="ja-cost-item"><i class="fas fa-lock"></i> Location access (JAFZA / Port)</div>
                </div>
                <div class="ja-cost-notes">
                    <p><i class="fas fa-check"></i> Jumpstarts and tyre help are usually cheaper.</p>
                    <p><i class="fas fa-check"></i> Towing costs increase with distance and vehicle weight.</p>
                </div>
            </div>

            {{-- Sub-section 5: Prevention --}}
            <div class="ja-how-block">
                <h3 class="ja-how-sub-title"><i class="fas fa-tools"></i> How to Prevent Breakdowns in Jebel Ali</h3>
                <div class="ja-prevent-grid">
                    <div class="ja-prevent-card">
                        <h4><i class="fas fa-van-shuttle"></i> For Fleet & Commercial Vehicles</h4>
                        <ul class="ja-prevent-points">
                            <li>Regular battery checks</li>
                            <li>Cooling system inspection</li>
                            <li>Tyre pressure monitoring</li>
                            <li>Avoid overloading</li>
                        </ul>
                    </div>
                    <div class="ja-prevent-card">
                        <h4><i class="fas fa-car"></i> For Private Cars</h4>
                        <ul class="ja-prevent-points">
                            <li>Heat-resistant batteries</li>
                            <li>Avoid long idle times</li>
                            <li>Check tyres before long drives</li>
                        </ul>
                    </div>
                </div>
                <p class="ja-how-footnote"><strong>Prevention saves time and money.</strong></p>
            </div>

        </div>
    </section>

    {{-- ===================================
    SECTION 6 — COVERAGE AREAS
    =================================== --}}
    <section class="ja-coverage-section">
        <div class="container">
            <div class="ja-section-header text-center">
                <span class="ja-eyebrow"><i class="fas fa-map-marked-alt"></i> Coverage Areas</span>
                <h2>Nearby Areas We Cover <span>Around Jebel Ali</span></h2>
                <p>When it comes to car recovery in Jebel Ali, knowing the roads is half the battle. We don't just show up —
                    we know every corner, gate, and shortcut that can save you precious minutes when your vehicle refuses to
                    cooperate.</p>
            </div>

            <div class="ja-cov-detail-grid">

                <div class="ja-cov-detail-card">
                    <div class="ja-cov-detail-top">
                        <div class="ja-cov-num">01</div>
                        <h4><i class="fas fa-warehouse"></i> Jebel Ali Free Zone (JAFZA)</h4>
                    </div>
                    <p>Busy warehouses, strict access gates, and fleets moving constantly. We navigate the paperwork and the
                        roads so your vehicle gets recovered quickly without unnecessary delays.</p>
                </div>

                <div class="ja-cov-detail-card">
                    <div class="ja-cov-detail-top">
                        <div class="ja-cov-num">02</div>
                        <h4><i class="fas fa-industry"></i> Jebel Ali Industrial Area</h4>
                    </div>
                    <p>Narrow streets, heavy trucks, and poor lighting at night make breakdowns stressful. Our team knows
                        exactly where to go and how to handle both light cars and heavy commercial vehicles safely.</p>
                </div>

                <div class="ja-cov-detail-card">
                    <div class="ja-cov-detail-top">
                        <div class="ja-cov-num">03</div>
                        <h4><i class="fas fa-anchor"></i> Jebel Ali Port</h4>
                    </div>
                    <p>One of the busiest spots in Dubai, with container trucks everywhere. Getting your car out of the port
                        area requires experience, timing, and the right equipment — and that's exactly what we bring.</p>
                </div>

                <div class="ja-cov-detail-card">
                    <div class="ja-cov-detail-top">
                        <div class="ja-cov-num">04</div>
                        <h4><i class="fas fa-building"></i> Dubai Investment Park (DIP)</h4>
                    </div>
                    <p>A mix of residential and industrial roads. Whether it's a private car stuck in a quiet street or a
                        fleet vehicle in a warehouse zone, we get there fast and get you moving.</p>
                </div>

                <div class="ja-cov-detail-card">
                    <div class="ja-cov-detail-top">
                        <div class="ja-cov-num">05</div>
                        <h4><i class="fas fa-city"></i> Dubai South</h4>
                    </div>
                    <p>Expansive roads, long distances, and often little roadside support. Our local knowledge helps us
                        reach you quickly, no matter how remote the location.</p>
                </div>

                <div class="ja-cov-detail-card">
                    <div class="ja-cov-detail-top">
                        <div class="ja-cov-num">06</div>
                        <h4><i class="fas fa-house-chimney"></i> Al Furjan</h4>
                    </div>
                    <p>Residential streets, gated communities, and tricky parking areas. Even if your car is stuck inside a
                        tight corner, we have the experience to recover it without damage.</p>
                </div>

                <div class="ja-cov-detail-card">
                    <div class="ja-cov-detail-top">
                        <div class="ja-cov-num">07</div>
                        <h4><i class="fas fa-tree-city"></i> Discovery Gardens</h4>
                    </div>
                    <p>Busy neighborhoods with tight lanes. Quick, careful recovery is crucial here, and we make sure your
                        vehicle is safe and back on the road in no time.</p>
                </div>

                <div class="ja-cov-detail-card">
                    <div class="ja-cov-detail-top">
                        <div class="ja-cov-num">08</div>
                        <h4><i class="fas fa-globe"></i> Expo City Area</h4>
                    </div>
                    <p>Large-scale developments with ongoing construction and shifting road access. We know how to navigate
                        this safely and efficiently for all types of vehicles.</p>
                </div>

                <div class="ja-cov-detail-card">
                    <div class="ja-cov-detail-top">
                        <div class="ja-cov-num">09</div>
                        <h4><i class="fas fa-road"></i> Sheikh Zayed Road (Jebel Ali side)</h4>
                    </div>
                    <p>Fast-moving traffic, accidents, and sudden breakdowns. Our flatbed and roadside assistance team is
                        trained to handle emergencies safely on these high-speed stretches.</p>
                </div>

            </div>

            <p class="ja-cov-closing">No matter where your car decides to quit on you in or around Jebel Ali, our team
                knows the area inside out. We combine <strong>speed, safety, and local expertise</strong> to make sure
                you're never left stranded.</p>
        </div>
    </section>

    {{-- ===================================
    SECTION 7 — WHY LOCAL EXPERIENCE MATTERS
    =================================== --}}
    <section class="ja-experience-section">
        <div class="container">

            {{-- Sub-section A: When to Call --}}
            <div class="ja-exp-block">
                <div class="ja-exp-call-grid">
                    <div class="ja-exp-call-left">
                        <span class="ja-eyebrow light"><i class="fas fa-phone-volume"></i> When To Call</span>
                        <h2>When You Should Call a <span>Professional Recovery Service</span></h2>
                        <p>Call immediately if:</p>
                        <ul class="ja-exp-call-list">
                            <li><i class="fas fa-circle-exclamation"></i> Vehicle won't restart</li>
                            <li><i class="fas fa-circle-exclamation"></i> Tyre damage is severe</li>
                            <li><i class="fas fa-circle-exclamation"></i> You're involved in an accident</li>
                            <li><i class="fas fa-circle-exclamation"></i> Engine overheats repeatedly</li>
                            <li><i class="fas fa-circle-exclamation"></i> Fleet operations are affected</li>
                        </ul>
                        <p class="ja-exp-call-warn"><i class="fas fa-triangle-exclamation"></i> <strong>Waiting often
                                makes things worse.</strong></p>
                    </div>
                    <div class="ja-exp-call-right">
                        <img src="{{ asset('assets/images/vehicle-recovery-jebel-ali.jpg') }}"
                            alt="Professional recovery service in Jebel Ali" class="ja-exp-call-img">
                    </div>
                </div>
            </div>

            {{-- Sub-section B: Why Local Experience --}}
            <div class="ja-exp-block">
                <div class="ja-section-header text-center">
                    <span class="ja-eyebrow light"><i class="fas fa-star"></i> Local Expertise</span>
                    <h2>Why Local Recovery Experience <span>Matters in Jebel Ali</span></h2>
                </div>

                <div class="ja-exp-content">
                    <p>Our local teams know Jebel Ali like the back of their hand. They understand how industrial traffic
                        flows — when trucks move in waves, which lanes get congested, and how to navigate around busy
                        freight areas without wasting time.</p>

                    <p>They're familiar with security requirements at places like JAFZA and the port, so they can get
                        through gates quickly without unnecessary delays. They also know the best towing methods for
                        different vehicles — whether it's a small car, a fleet van, or a luxury sports car — to make sure
                        nothing gets damaged.</p>

                    <p>Our team identifies safe stopping points along high-speed roads or narrow industrial streets, keeping
                        you and your vehicle out of danger while we work. And thanks to our knowledge of the area, we can
                        manage fast clearance procedures, whether it's moving a broken-down car off Sheikh Zayed Road or
                        coordinating access in warehouse zones.</p>

                    <p class="ja-exp-closing"><strong>All of this local know-how doesn't just get the job done — it saves
                            you time, reduces stress, and prevents unnecessary damage to your vehicle.</strong> In Jebel
                        Ali, that makes a huge difference when things go wrong.</p>
                </div>
            </div>

        </div>
    </section>


    {{-- ===================================
    SECTION 9 — FAQ
    =================================== --}}
    <section class="ja-faq-section">
        <div class="container">

            {{-- Intro CTA block --}}
            <div class="ja-faq-intro">
                <span class="ja-eyebrow light"><i class="fas fa-bolt"></i> Take Action Now</span>
                <h2>Need Immediate Car Recovery <span>in Jebel Ali?</span></h2>
                <p>If your car, van, or fleet vehicle is stuck in Jebel Ali, the safest move is to call a local, experienced
                    recovery team who can respond quickly and handle the situation properly.</p>
                <p>Whether it's a breakdown, accident, tyre issue, or battery failure — getting professional help early
                    makes all the difference.</p>
                <a href="tel:+971545098498" class="theme-btn ja-cta-btn-primary"><i class="fas fa-phone"></i> Call Now —
                    Get Help Fast</a>
            </div>

            {{-- FAQ Accordion --}}
            <div class="ja-faq-block">
                <div class="ja-section-header text-center">
                    <span class="ja-eyebrow light"><i class="fas fa-circle-question"></i> FAQ</span>
                    <h2>Quick Local <span>FAQs</span></h2>
                </div>

                <div class="ja-faq-list">
                    <div class="ja-faq-item active">
                        <button class="ja-faq-q" aria-expanded="true">
                            <span>How fast can recovery reach Jebel Ali?</span>
                            <div class="ja-faq-icon"><i class="fas fa-minus"></i></div>
                        </button>
                        <div class="ja-faq-answer">
                            <p>Usually within 20–40 minutes, depending on traffic and access.</p>
                        </div>
                    </div>
                    <div class="ja-faq-item">
                        <button class="ja-faq-q" aria-expanded="false">
                            <span>Is 24/7 recovery available in Jebel Ali?</span>
                            <div class="ja-faq-icon"><i class="fas fa-plus"></i></div>
                        </button>
                        <div class="ja-faq-answer">
                            <p>Yes, emergency services run day and night.</p>
                        </div>
                    </div>
                    <div class="ja-faq-item">
                        <button class="ja-faq-q" aria-expanded="false">
                            <span>Can fleet vehicles be recovered inside JAFZA?</span>
                            <div class="ja-faq-icon"><i class="fas fa-plus"></i></div>
                        </button>
                        <div class="ja-faq-answer">
                            <p>Yes, with correct location and access details.</p>
                        </div>
                    </div>
                    <div class="ja-faq-item">
                        <button class="ja-faq-q" aria-expanded="false">
                            <span>Is tyre replacement done on site?</span>
                            <div class="ja-faq-icon"><i class="fas fa-plus"></i></div>
                        </button>
                        <div class="ja-faq-answer">
                            <p>If damage allows and a spare is available, yes.</p>
                        </div>
                    </div>
                    <div class="ja-faq-item">
                        <button class="ja-faq-q" aria-expanded="false">
                            <span>Are luxury cars handled safely?</span>
                            <div class="ja-faq-icon"><i class="fas fa-plus"></i></div>
                        </button>
                        <div class="ja-faq-answer">
                            <p>Yes, using flatbed towing to prevent damage.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===================================
    SECTION 10 — CTA
    =================================== --}}
    <section class="ja-cta-section">
        <div class="container">
            <div class="ja-cta-grid">
                <div class="ja-cta-text">
                    <span class="ja-eyebrow light"><i class="fas fa-bolt"></i> Need Immediate Help?</span>
                    <h2>Car Stuck in <span>Jebel Ali?</span></h2>
                    <p>Whether it's a breakdown, accident, tyre issue, or battery failure — getting professional help
                        early makes all the difference.</p>
                </div>
                <div class="ja-cta-right">
                    <a href="tel:+971523003423" class="theme-btn ja-cta-btn-primary">
                        <i class="fas fa-phone"></i> +971 52 300 3423
                    </a>
                </div>
            </div>
            <p class="text-center text-white mt-2">Toretto Recovery — Professional Vehicle Recovery Services, Jebel Ali</p>
        </div>
    </section>

    <link rel="stylesheet"
        href="{{ asset('assets/css/dubai-jebel-ali.css') }}?v={{ filemtime(public_path('assets/css/dubai-jebel-ali.css')) }}">

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.ja-faq-list .ja-faq-item');
            faqItems.forEach(function(item) {
                const btn = item.querySelector('.ja-faq-q');
                btn.addEventListener('click', function() {
                    const isActive = item.classList.contains('active');
                    faqItems.forEach(function(el) {
                        el.classList.remove('active');
                        el.querySelector('.ja-faq-q').setAttribute('aria-expanded',
                        'false');
                        el.querySelector('.ja-faq-icon i').className = 'fas fa-plus';
                    });
                    if (!isActive) {
                        item.classList.add('active');
                        btn.setAttribute('aria-expanded', 'true');
                        item.querySelector('.ja-faq-icon i').className = 'fas fa-minus';
                    }
                });
            });
        });
    </script>

@endsection
