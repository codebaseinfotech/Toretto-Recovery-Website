@extends('layouts.main')

@section('title')
    24/7 Emergency Vehicle Recovery Dubai – Fast Help Across All Areas | Toretto recovery
@endsection

@section('meta_description')
    Broken down in Downtown Dubai, Marina or Al Barsha? Toretto Recovery provides 24/7 emergency vehicle recovery across
    Dubai with fast response and professional support.
@endsection

@section('meta_keywords', '24/7 Emergency Vehicle Recovery Dubai – Fast Help Across All Areas | Toretto recovery')

@section('head')
    @verbatim
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What should I do immediately after breaking down on a highway?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Activate hazard lights instantly. If mechanical failure allows, carefully navigate to the shoulder—even a narrow one provides crucial safety margin. If safe to exit, leave the automobile on the side away from traffic. Never stand behind your vehicle where approaching drivers might strike you. Call professional help immediately rather than attempting diagnosis in a dangerous environment."
      }
    },
    {
      "@type": "Question",
      "name": "How long does desert extraction typically require?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Assessment determines duration—anywhere from fifteen minutes for a simple stuck situation to two hours for severe entrapment. Factors include: sand depth around your wheels, automobile weight, dune angle, and whether previous recovery attempts caused deeper burial. Our operators provide realistic time estimates upon arrival."
      }
    },
    {
      "@type": "Question",
      "name": "Can you extract my automobile from underground parking with extremely low overhead clearance?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, using specialized compact equipment designed for confined spaces. We coordinate with building management for access, identify proper routes avoiding height restrictions, and guarantee damage-free extraction. These operations require more time than open-air recovery but are completely routine for our experienced team."
      }
    },
    {
      "@type": "Question",
      "name": "What precautions do you take with luxury and exotic automobiles?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Flatbed-only transport eliminates any possibility of undercarriage contact. Soft securing straps protect painted surfaces. Our operators receive specific training on exotic marque handling procedures. We've successfully transported Ferraris, Lamborghinis, Rolls-Royces, McLarens, and rare classics without incident across thousands of operations."
      }
    },
    {
      "@type": "Question",
      "name": "Do you operate during sandstorms or heavy rainfall?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Twenty-four-hour operation continues regardless of weather conditions. During adverse weather, we implement enhanced safety protocols including reduced travel speeds, additional lighting, and extra communication with you about progress. Your emergency doesn't pause for weather—neither do we."
      }
    },
    {
      "@type": "Question",
      "name": "How do I know you're licensed and insured?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our RTA operator credentials are available for verification upon request. Insurance documentation covering liability and automobile damage during transport can be provided. We carry comprehensive coverage specifically because professional operation demands professional protection."
      }
    },
    {
      "@type": "Question",
      "name": "What payment methods do you accept?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Cash, all major credit cards, direct bank transfer, and insurance billing. For corporate clients, we establish monthly invoicing arrangements."
      }
    }
  ]
}
</script>
    @endverbatim
@endsection

@section('content')
    <style>
        /* TABLE */
        .table-wrapper {
            margin-top: 30px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #1a1a1a;
            border-radius: 12px;
            overflow: hidden;
        }

        thead {
            background: #e10600;
        }

        th,
        td {
            padding: 16px;
            text-align: left;
            font-size: 15px;
        }

        th {
            color: #fff;
            font-weight: 600;
        }

        tbody tr {
            border-bottom: 1px solid #2a2a2a;
        }

        tbody tr:hover {
            background: #222;
        }
    </style>
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
                    <div class="contact-img text-white text-start">

                        <h1 class="breadcrumb-title wow animate__animated animate__fadeInDown">
                            <span>Licensed & RTA-Approved Vehicle Recovery in Dubai </span>
                        </h1>

                        <ul class="breadcrumb-menu">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                                <i class="fa fa-angle-double-right"></i>
                            </li>
                            <li class="active">Vehicle Recovery Dubai</li>
                        </ul>

                        <h2 class="mt-3 text-white breadcrumb-subtitle">
                            Stuck on the Road? One Call Away from Safety, Speed & Peace of Mind.
                        </h2>

                        <div class="hero-btn mt-4">
                            <a href="{{ route('book.now') }}" target="_blank" class="theme-btn">
                                Book Now <i class="fas fa-arrow-right-long"></i>
                            </a>
                            <a href="tel:+971523003423" class="theme-btn theme-btn2">
                                Call Now <i class="fas fa-arrow-right-long"></i>
                            </a>
                        </div>

                        <div class="hero-stats mt-3 mb-3 justify-content-start">
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

    <section class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="about-right wow animate__animated animate__fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline">Welcome to Vehicle Recovery</span>
                            <h2 class="site-title"><span> Vehicle Recovery with Expert Handling, Fast Response &
                                    <span>24/7 Emergency Service</span> at Your Location </span> </h2>
                        </div>
                        <p class="mb-1">When your vehicle stops in extreme heat, on fast-moving highways, or in remote
                            areas, waiting is not an option. Our licensed vehicle recovery team in Dubai is dispatched
                            immediately to your exact location—reducing risk, managing the situation safely, and
                            transporting your vehicle where it needs to go.</p>
                        <p class="mt-2 mb-2">Available 24/7, we provide reliable recovery across the Dubai city roads,
                            highways, and desert
                            routes, ensuring professional care for every vehicle, anytime, anywhere in Dubai.</p>
                        <a href="{{ route('book.now') }}" target="_blank" class="theme-btn mt-2">Book Now<i
                                class="fa-solid fa-arrow-right-long"></i></a>
                        <a href="tel:+971 523003423" class="theme-btn mt-2"> Call Now<i
                                class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 imagebag">
                    <div class="about-left wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/broken-car-dubai.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="recovery-section">

        <!-- HERO IMAGE -->
        <div class="recovery-hero">
            <img src="{{ asset('assets/images/side-view-business-man-talking-with-car-service.jpg') }}"
                alt="Emergency Roadside Recovery">
            <div class="hero-overlay">
                <h2>When the <span style="color: #e10600;"> Road Stops </span>You Dead</h2>
            </div>
        </div>

        <!-- CONTENT WRAPPER -->
        <div class="recovery-content">
            <p>
                <b>Picture this: </b> rush hour on Sheikh Zayed Road, your engine light flashes red, and steam pours from
                under the hood. Or perhaps you're returning from a weekend desert adventure, wheels spinning uselessly in
                soft sand at Big Red. Maybe it's 2 AM in a parking structure at Mall of the Emirates, and your battery has
                given up entirely.
            </p>
            <div class="text-block">
                <p>
                    These moments demand more than hope—they require professional intervention.
                </p>
            </div>

            <h3 style="color: #ffffff;"> <a href="{{ route('home') }}" target="_blank">Toretto Recovery</a> responds to your
                emergency with
                precision, arriving with
                the right equipment and expertise to resolve your situation safely. No judgment, no delays, just solutions.
            </h3>

            <h3>Understanding Professional Vehicle Extraction</h3>
            <p>Professional extraction means safely removing your immobilized automobile from wherever it's stranded through
                our <a href="https://torettorecovery.ae/towing-service-dubai" target="_blank">professional towing
                    service</a> and
                transporting it to your chosen destination—whether that's home, your preferred workshop, or secure storage.
            </p>

            <h3>When You Need Expert Help</h3>
            <ul class="bullet-list">
                <li><b>Mechanical failures</b> that leave you unable to drive safely, including engine overheating,
                    transmission problems, or electrical system collapse.</li>
                <li><b>Collision aftermath</b> where your automobile sustained damage making it unsafe or illegal to operate
                    on public roads.</li>
                <li><b>Entrapment scenarios</b> where your wheels are caught in sand, mud, ditches, or embankments beyond
                    self-rescue capability.</li>
                <li><b>Parking structure incidents</b> including low-clearance situations, tight-space immobilization, or
                    underground access complications.</li>
                <li><b>Highway breakdowns</b> on high-speed corridors like E11, E311, E611, or E44 where remaining
                    stationary
                    poses serious safety risks.</li>

            </ul>

            <h3>Why Amateur Attempts Create Bigger Problems</h3>

            <!-- PROFESSIONAL TABLE -->
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Emergency Situation / Pain Point</th>
                            <th>Common Mistake People Make</th>
                            <th>Risks & Damage Caused</th>
                            <th>Toretto Recovery’s Professional Solution</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Engine overheating on highway</td>
                            <td>Driving “just a little further”</td>
                            <td>Engine seizure, warped head, huge repair cost</td>
                            <td>Immediate flatbed recovery preventing engine damage</td>
                        </tr>
                        <tr>
                            <td>Car stuck in desert sand</td>
                            <td>Excessive acceleration</td>
                            <td>Deeper burial, transmission stress</td>
                            <td>Controlled winch extraction with sand assessment</td>
                        </tr>
                        <tr>
                            <td>Accident-damaged vehicle</td>
                            <td>Tow with rope or wrong hooks</td>
                            <td>Frame bending, bumper cracking</td>
                            <td>RTA-approved secure extraction methods</td>
                        </tr>
                        <tr>
                            <td>Dead battery in basement parking</td>
                            <td>Improper jumpstart</td>
                            <td>ECU damage, electrical failure</td>
                            <td>Proper amperage testing & safe jumpstart</td>
                        </tr>
                        <tr>
                            <td>Flat tyre on high-speed road</td>
                            <td>DIY tyre change</td>
                            <td>Risk of collision, personal injury</td>
                            <td>Safe roadside replacement with traffic protection</td>
                        </tr>
                        <tr>
                            <td>Locked keys inside car</td>
                            <td>Force entry</td>
                            <td>Door damage, broken locks</td>
                            <td>Non-damaging professional lockout assistance</td>
                        </tr>
                        <tr>
                            <td>Low-clearance supercar breakdown</td>
                            <td>Wheel-lift towing</td>
                            <td>Underbody scraping, sensor damage</td>
                            <td>Flatbed-only transport with soft straps</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="closing-text">
                Improper towing damages transmissions. Incorrect winching bends frames. Using wrong attachment points cracks
                bumpers. What begins as a $200 professional service becomes a $3,000 repair bill after well-intentioned
                friends cause additional harm.
            </p>
            <h6 style="color: #ffffff;"> Our operators know the difference between helping and hurting your vehicle.
            </h6>
        </div>
    </section>

    <section class="solutions-section">
        <div class="solutions-container">
            <!-- LEFT IMAGE -->
            <div class="solutions-image">
                <img src="{{ asset('assets/images/vehicle-recovery-dubai.jpg') }}" alt="Complete Recovery Solutions">

                <!-- CARD 4 -->
                <div class="solution-card mt-4">
                    <h3>Off-Road Rescue Expertise</h3>
                    <p><b>The desert presents unique challenges requiring specific knowledge:</b></p>
                    <ul>
                        <li><b>Operations throughout Al Qudra Lakes' perimeter</b> , where weekend adventurers frequently
                            underestimate soft sand conditions.</li>
                        <li>Extractions from <b>the Margham dune territory</b> , where slope angles and sand consistency
                            demand experienced assessment.</li>
                        <li>Mountain route assistance along <b>the Hatta highway approaches</b> where wadi crossings and
                            gravel surfaces create traction challenges.</li>
                        <li>Seasonal awareness of how <b> summer heat affects sand firmness</b> and winter moisture changes
                            dune
                            stability.</li>
                    </ul>
                </div>

                <!-- CARD 5 -->
                <div class="solution-card">
                    <h3>Luxury & Exotic Automobile Handling</h3>
                    <p><b>High-value machines demand exceptional care:</b></p>
                    <ul>
                        <li><b>Flatbed-only transport policy</b> for low-clearance supercars, eliminating any risk of
                            undercarriage contact.</li>
                        <li><b>Soft-strap securing systems</b> that protect painted surfaces, carbon fiber components, and
                            custom bodywork.</li>
                        <li><b>Climate-controlled enclosed trailers</b> available for rare classics or museum-quality pieces
                            requiring environmental protection.</li>
                        <li><b>Specialized operator training</b> on proper handling procedures for Ferrari, Lamborghini,
                            Rolls-Royce, McLaren, and other prestigious marques.</li>
                    </ul>
                </div>
            </div>
            <!-- RIGHT CONTENT -->
            <div class="solutions-content">

                <h2>Complete <span style="color: #e10600;">Recovery</span> Solutions</h2>

                <!-- CARD 1 -->
                <div class="solution-card">
                    <h3>Emergency Breakdown Response</h3>
                    <p><b>When mechanical failure strikes, our systematic approach ensures rapid, safe resolution:</b></p>
                    <ul>
                        <li><b>Immediate dispatch</b> to your exact location using GPS coordinates you provide via phone or
                            WhatsApp.</li>
                        <li><b>Comprehensive coverage</b> across the entire road network—from Sheikh Zayed Road's continuous
                            flow
                            to the winding mountain approaches toward Hatta, from the coastal routes along Jumeirah Beach
                            Road to the industrial corridors of Jebel Ali.</li>
                        <li><b>On-site diagnostic assessment</b> to determine whether roadside repair is possible or
                            transport is
                            necessary.</li>
                        <li><b>Safe transport</b> to your preferred workshop, authorized service center, or home address
                            using
                            appropriate equipment for your specific situation.</li>

                    </ul>
                </div>

                <!-- CARD 2 -->
                <div class="solution-card">
                    <h3>Accident Aftermath Extraction</h3>
                    <p><b>Post-collision situations require specialized handling:</b></p>
                    <ul>
                        <li><b>Secure positioning</b> of damaged automobiles to prevent further harm during loading and
                            transport.</li>
                        <li><b>Insurance coordination</b> including documentation photography and proper paperwork for
                            claims processing.</li>
                        <li><b>Damage-prevention protocols</b> ensuring our extraction doesn't compound existing issues.
                        </li>
                        <li><b>Direct delivery</b> to approved repair facilities throughout Al Quoz industrial zones, Ras Al
                            Khor workshop districts, or insurance-designated centers.</li>

                    </ul>
                </div>

                <!-- CARD 3 -->
                <div class="solution-card">
                    <h3>Winch-Out & Specialized Extraction</h3>
                    <p><b>Stuck doesn't mean stranded when you've got professional extraction expertise:</b></p>
                    <ul>
                        <li><b>Desert rescue operations</b> across Al Badayer's red dunes, Fossil Rock territory, and the
                            challenging terrain around Lehbab where sand swallows wheels quickly.</li>
                        <li><b>Underground parking extraction</b> from multi-level structures with tight clearances and
                            limited maneuvering space.</li>
                        <li><b>Ditch and embankment recovery</b> using proper angles, anchor points, and pulling techniques
                            that protect your automobile's structural integrity.</li>
                        <li><b>Specialized equipment deployment</b> including 20,000-pound-capacity winches, industrial sand
                            mats, high-lift jacks, and recovery straps rated for heavy loads.</li>

                    </ul>
                </div>



            </div>
        </div>
    </section>

    <section class="roadside-section" style="background: url('{{ asset('assets/images/towig-service-dubai.jpg') }}');">
        <div class="overlay"></div>

        <div class="container">
            <div class="section-header">
                <h2>Beyond <span style="color: #e10600">Extraction—Complete</span> Roadside Assistance</h2>
                <p>In addition to recovery and towing, we provide fast <a
                        href="https://torettorecovery.ae/roadside-assistance-dubai" target="_blank">roadside assistance in
                        Dubai</a>
                    including battery jumpstarts, fuel delivery, tyre replacement, and lockout support.</p>
            </div>

            <div class="roadside-grid">

                <div class="road-card">
                    <h3>Mobile Battery Solutions</h3>
                    <p><b>Dead batteries stop you cold, especially in extreme heat that accelerates electrical system
                            failure:</b></p>
                    <ul>
                        <li><b>On-site testing</b> to determine whether jumpstarting will succeed or replacement is
                            necessary.</li>
                        <li><b>Professional charging</b> using proper amperage to avoid damaging sensitive electronics in
                            modern automobiles.</li>
                        <li><b>Battery replacement coordination</b> with mobile parts suppliers when resuscitation isn't
                            viable.</li>
                    </ul>
                    <p>Common scenarios we handle: early morning failures in JLT parking structures, post-shopping dead
                        batteries at Ibn Battuta Mall, overnight drainage in Business Bay residential towers.</p>
                </div>

                <div class="road-card">
                    <h3>Emergency Fuel Delivery</h3>
                    <p><b>Running dry happens more than people admit:</b></p>
                    <ul>
                        <li><b>Quick refueling service</b> when you've miscalculated range, particularly on the long E611
                            stretches through Arabian Ranches or the E44 mountain highway where stations are sparse.</li>
                        <li><b>Fuel type verification</b> preventing catastrophic diesel-in-petrol or reverse mix-ups that
                            destroy engines.</li>
                        <li><b>Enough volume</b> to reach the nearest station, typically 5-10 liters depending on your
                            location.</li>
                    </ul>
                </div>

                <div class="road-card">
                    <h3>Flat Tire Assistance</h3>
                    <p><b>Changing tires on high-speed corridors like Al Khail Road is genuinely dangerous:</b></p>
                    <ul>
                        <li><b>Safe roadside replacement</b> using your spare, with proper jack placement and lug nut
                            torque.</li>
                        <li><b>Traffic safety management</b> including reflective barrier placement and hazard light
                            positioning.</li>
                        <li><b>Coordination with tire shops</b> for immediate replacement when spares are unusable or
                            missing.</li>
                    </ul>
                </div>

                <div class="road-card">
                    <h3>Vehicle Lockout Solutions</h3>
                    <p><b>Keys locked inside require professional help:</b></p>
                    <ul>
                        <li><b>Non-damaging entry coordination</b> working with qualified automotive locksmiths we trust.
                        </li>
                        <li><b>Quick response</b> because standing beside your locked automobile in summer heat is genuinely
                            miserable.</li>
                        <li><b>Verification protocols</b> ensuring we're helping the legitimate owner.</li>
                    </ul>
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
                            <h2 class="site-title">Every <span>Corner</span>, Every <span>Route</span>, Every
                                <span>Terrain</span>
                            </h2>
                            <p><b>Our coverage blanket extends across the entire emirate's diverse geography:</b></p>
                        </div>
                        <ul class="toretto-recovery-list">
                            <li><b>Northern commercial zones</b> from Deira's tight streets through the sprawling Dubai
                                Silicon Oasis development.</li>
                            <li><b>Central business districts</b> including DIFC's underground facilities, Downtown
                                Boulevard's surrounding network, and the dense Business Bay corridor.</li>
                            <li><b>Coastal stretches</b> from Jumeirah's villa communities through Marina's high-rise
                                density to Bluewaters Island connection points.</li>
                            <li><b>Southern residential expansions</b> covering Motor City's gated communities, Sports
                                City's athletic facilities, and Arabian Ranches' suburban spread.</li>
                            <li><b>Industrial belts</b> throughout Al Quoz's workshop sectors and the extensive Jebel Ali
                                manufacturing zones.</li>
                            <li><b>Eastern corridor</b> from International City's residential towers to Nad Al Sheba's
                                racing facilities.</li>
                            <li><b>Desert periphery</b> including Al Awir's remote areas, Warsan's developing sectors, and
                                Lehbab's safari zones.</li>
                            <li><b>Mountain routes</b> along the Hatta highway where elevation and curves create unique
                                challenges.</li>
                        </ul>
                        <p class="mb-3">Whether you're on a six-lane highway or a single-track wadi access road, we know
                            how to reach you.</p>
                    </div>
                </div>

                <div class="col-lg-6 imagebag">
                    <div class="about-left wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/car-accident-on-evening-desert-safary.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="why-toretto">
        <div class="container">

            <div class="main-heading">
                <h2>Why Toretto Recovery Delivers <span style="color: #e60000;">Different </span> Results</h2>
            </div>

            <div class="why-wrapper">

                <div class="why-row">
                    <div class="why-number">01</div>
                    <div class="why-content">
                        <h4>Experience That Actually Matters</h4>
                        <p><b>Our operators average 10+ years in professional extraction, with comprehensive knowledge of
                                this emirate's unique demands:</b></p>
                        <p><b>Local road expertise</b>including flash flood response protocols for the rare but intense
                            rainfall events, summer heat vehicle failure patterns, and peak traffic hour navigation
                            strategies.</p>
                        <p><b>Continuous technical training</b> on hybrid and electric automobile systems requiring
                            different handling than conventional combustion engines.</p>
                        <p><b>Real-world problem solving</b> developed through thousands of successful extractions across
                            every conceivable scenario.</p>

                    </div>
                </div>

                <div class="why-row">
                    <div class="why-number">02</div>
                    <div class="why-content">
                        <h4>Equipment Excellence</h4>
                        <p><b>The right tools make the impossible routine:</b></p>
                        <p><b>Heavy-duty extraction trucks</b> with 8-ton lift capacity handling everything from compact
                            sedans to full-size SUVs.</p>
                        <p><b>Flatbed transporters</b> ensuring damage-free movement of exotic automobiles worth hundreds of
                            thousands.</p>
                        <p><b>Desert-equipped 4x4 units</b> capable of reaching stranded vehicles in soft sand conditions.
                        </p>
                        <p><b>Compact units</b> for tight parking structure access where full-size trucks can't navigate.
                        </p>
                        <p><b>Industrial winching systems</b> pulling 20,000 pounds with precise control and multiple anchor
                            point options.</p>
                        <p><b>Complete safety equipment</b> including reflective barriers, emergency lighting, and constant
                            communication systems.</p>
                    </div>
                </div>

                <div class="why-row">
                    <div class="why-number">03</div>
                    <div class="why-content">
                        <h4>Licensing & Insurance Protection</h4>
                        <p><b>Operating legally means operating safely:</b></p>
                        <p><b>RTA-approved credentials</b> for every operator on our team.</p>
                        <p><b>Comprehensive liability coverage</b> protecting you if something goes wrong during extraction
                            or transport.</p>
                        <p><b>Vehicle damage insurance</b> covering your automobile while in our care.</p>
                        <p><b>Claims documentation assistance</b> providing proper paperwork for your insurance company.</p>
                    </div>
                </div>

                <div class="why-row">
                    <div class="why-number">04</div>
                    <div class="why-content">
                        <h4>Response Time You Can Count On</h4>
                        <p><b>Speed matters when you're stranded:</b></p>
                        <p><b>25-35 minute average arrival</b> across metro areas during normal conditions.</p>
                        <p><b>Coordinated desert response</b> using precise location sharing via WhatsApp or GPS
                            coordinates.</p>
                        <p><b>24/7 operation</b> because breakdowns don't respect business hours, weekends, or holidays.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="process-section">
        <div class="main-heading">
            <h2>The Toretto <span style="color: #e60000;">Process—What </span> Actually Happens</h2>
        </div>
        <!-- Step Navigation -->
        <div class="steps-nav">
            <div class="step-item active" onclick="showStep(1)">
                <div class="step-circle">1</div>
                <p>Emergency Call</p>
            </div>

            <div class="step-item" onclick="showStep(2)">
                <div class="step-circle">2</div>
                <p>Dispatch</p>
            </div>

            <div class="step-item" onclick="showStep(3)">
                <div class="step-circle">3</div>
                <p>Assessment</p>
            </div>

            <div class="step-item" onclick="showStep(4)">
                <div class="step-circle">4</div>
                <p>Transparent Pricing</p>
            </div>
            <div class="step-item" onclick="showStep(5)">
                <div class="step-circle">5</div>
                <p>Execution</p>
            </div>
            <div class="step-item" onclick="showStep(6)">
                <div class="step-circle">6</div>
                <p>Delivery</p>
            </div>
        </div>

        <!-- Step Content -->
        <div class="steps-content">

            <!-- STEP 1 -->
            <div class="step-content active" id="step-1">
                <h4>Your Emergency Call</h4>
                <p class="step-subtitle">
                    When you contact us, we immediately gather critical information:
                </p>

                <ul class="modern-list">
                    <li>Your exact location (intersection, landmark, or GPS coordinates)</li>
                    <li>Automobile type and condition</li>
                    <li>Nature of the problem</li>
                    <li>Any safety concerns (traffic, weather, personal situations)</li>
                </ul>
            </div>

            <!-- STEP 2 -->
            <div class="step-content" id="step-2">
                <h4>Immediate Dispatch</h4>
                <p class="step-subtitle">
                    Within minutes:
                </p>

                <ul class="modern-list">
                    <li>Nearest appropriate unit assigned based on your specific needs</li>
                    <li>Operator receives your information and reviews route</li>
                    <li>You receive confirmation with estimated arrival time</li>
                    <li>GPS tracking allows you to monitor our approach</li>
                </ul>
            </div>

            <!-- STEP 3 -->
            <div class="step-content" id="step-3">
                <h4>On-Site Professional Assessment</h4>
                <p class="step-subtitle">
                    Our operator arrives and:
                </p>

                <ul class="modern-list">
                    <li>Evaluates the safest extraction method</li>
                    <li>Identifies any complicating factors</li>
                    <li>Determines proper equipment configuration</li>
                    <li>Explains the process before beginning</li>
                </ul>
            </div>
            <div class="step-content" id="step-4">
                <h4>Transparent Pricing</h4>
                <p class="step-subtitle">
                    Before any work begins:
                </p>

                <ul class="modern-list">
                    <li>Complete quote provided covering all aspects</li>
                    <li>No hidden fees or surprise charges</li>
                    <li>Insurance billing options explained</li>
                    <li>Alternative solutions discussed if applicable</li>
                </ul>
            </div>
            <div class="step-content" id="step-5">
                <h4>Systematic Execution</h4>
                <p class="step-subtitle">
                    With your approval:
                </p>

                <ul class="modern-list">
                    <li>Vehicle secured using appropriate methods for its type</li>
                    <li>Safety protocols followed protecting you, your automobile, and other road users</li>
                    <li>Careful loading minimizing any risk of additional damage</li>
                    <li>Constant communication about what's happening and why</li>
                </ul>
            </div>
            <div class="step-content" id="step-6">
                <h4>Safe Delivery</h4>
                <p class="step-subtitle">
                    Transport to your chosen destination:
                </p>

                <ul class="modern-list">
                    <li>Home address</li>
                    <li>Preferred workshop or authorized service center</li>
                    <li>Secure storage facility</li>
                    <li>Insurance company designated location</li>

                </ul>
            </div>
            <div class="step-content" id="step-7">
                <h4>Complete Documentation</h4>
                <p class="step-subtitle">
                    We ensure you have everything needed:
                </p>

                <ul class="modern-list">
                    <li>Service receipt for your records</li>
                    <li>Insurance claim paperwork if applicable</li>
                    <li>Photos documenting condition before and after</li>
                    <li>Follow-up contact information for any questions</li>
                </ul>
            </div>

        </div>

    </section>

    <section class="real-solutions-section">

        <div class="container">

            <h2 class="section-titles">Real Problems, Real Solutions</h2>

            <!-- Case Item -->
            <div class="case-item">
                <div class="case-dot"></div>
                <div class="case-content">
                    <h4>The Desert Adventure Rescue</h4>

                    <p class="case-situation"><strong>The Situation:</strong> A family in their Toyota Land Cruiser
                        ventured to Big Red for sunset photos. Unfamiliar with proper dune driving, they descended a steep
                        face and buried the front axle in soft evening sand. Temperature dropping, children in the back
                        seat, no cellular signal for online help.</p>

                    <p><strong>Our Response:</strong> The distress call reached us through a passing motorist. We dispatched
                        our desert-equipped 4x4 unit with full extraction gear. Forty-five minutes after notification, our
                        operator arrived on scene.</p>
                    <p><strong>The Solution:</strong> Assessment showed the SUV was genuinely stuck—all four wheels buried
                        past the hubs. Our operator:</p>

                    <ul class="case-list">
                        <li>Deflated tires to manufacturer-specified low-pressure settings</li>
                        <li>Positioned sand mats under all four wheels</li>
                        <li>Used our winch anchored to our own vehicle positioned at the optimal angle</li>
                        <li>Extracted the Land Cruiser in a single smooth pull without any vehicle damage</li>
                    </ul>

                    <p class="case-outcome"><strong>The Outcome:</strong> Family safely returned to their Mirdif residence
                        by 9 PM. Follow-up call the next day confirmed everything remained problem-free. The father later
                        enrolled in our recommended desert driving course.</p>
                </div>
            </div>


            <!-- Case Item -->
            <div class="case-item">
                <div class="case-dot"></div>
                <div class="case-content">
                    <h4>The Supercar Highway Emergency</h4>

                    <p><strong>The Situation:</strong>A Ferrari 488 experienced overheating on Sheikh Zayed Road during
                        evening rush hour. Temperature gauge in the red, dashboard warning lights illuminated, traffic
                        flowing at 120 km/h all around. The driver—wisely—pulled to the narrow shoulder near the Mall of the
                        Emirates exit.</p>
                    <p><strong>Our Response:</strong> Emergency call received at 6:47 PM. Our flatbed unit was already
                        operating in the Marina area, arriving on scene by 7:03 PM—sixteen minutes total response time.</p>
                    <p><strong>The Solution:</strong></p>

                    <ul class="case-list">
                        <li>Operator coordinated with traffic patrol for temporary lane control</li>
                        <li>Flatbed positioned with loading ramp accessible</li>
                        <li>Soft straps secured all four corners without touching painted surfaces</li>
                        <li>Ferrari winched aboard with zero undercarriage contact</li>
                        <li>Transport completed to authorized service center in Al Quoz</li>
                    </ul>

                    <p><strong>The Outcome:</strong> EPost-inspection revealed a failed coolant pump—potentially
                        catastrophic if the owner had attempted to nurse the automobile to a workshop. Our flatbed transport
                        prevented engine damage from overheating. Total additional cost from our intervention: zero.
                        Potential cost if engine had seized from heat: upward of 80,000 dirhams.</p>
                </div>
            </div>


            <!-- Case Item -->
            <div class="case-item">
                <div class="case-dot"></div>
                <div class="case-content">
                    <h4>The Early Morning Commute Crisis</h4>

                    <p><strong>The Situation:</strong> A marketing executive in Jumeirah Lake Towers faced battery failure
                        at 6:30 AM. Her Nissan Altima wouldn't start in the underground parking structure. She had a
                        critical client presentation at 8:00 AM in DIFC—missing it meant losing a major account.</p>
                    <p><strong>Our Response:</strong> Emergency call at 6:33 AM. Our nearest mobile unit was completing a
                        fuel delivery in Marina, arriving at the JLT parking structure at 6:51 AM.</p>
                    <p><strong>The Solution:</strong></p>
                    <ul class="case-list">
                        <li>Battery testing confirmed complete discharge, not internal failure</li>
                        <li>Professional jumpstart using proper amperage</li>
                        <li>Fifteen-minute charge period ensuring stable restart capability</li>
                        <li>Recommendation for replacement provided with trusted workshop contact</li>
                    </ul>

                    <p><strong>The Outcome:</strong> Executive departed parking at 7:08 AM, arrived at her DIFC meeting with
                        twenty minutes to spare, won the account. She later switched to our corporate assistance program for
                        her company's entire fleet.</p>
                </div>
            </div>

        </div>
    </section>

    <section class="service-info">
        <div class="container">
            <h2 class="service-title"><span>Honest Pricing & Real Value</span></h2>
            <p><b>Our rates reflect several straightforward factors:</b></p>
            <p><b>Distance from dispatch point</b> to your location affects fuel cost and operator time commitment.</p>
            <p><b>Automobile type and situation</b> complexity determines equipment requirements—extracting a compact sedan
                from a parking spot differs from winching a full-size SUV from desert sand.</p>
            <p><b>Service timing</b> with modest premium pricing during peak demand periods, though emergencies receive
                immediate response regardless.</p>
            <p><b>Specialized equipment needs</b> such as flatbed transport for exotic automobiles or enclosed trailers for
                classics.</p>
            <p><strong>Our Transparency Promise:</strong></p>
            <ul class="case-list">
                <li style="color: black">Complete quote before service begins</li>
                <li style="color: black">No hidden fees added after completion</li>
                <li style="color: black">Insurance direct billing coordination with major providers</li>
                <li style="color: black">Corporate account programs for fleet managers</li>
                <li style="color: black">Written estimates available via WhatsApp or email</li>
            </ul>
            <a href="{{ route('book.now') }}" target="_blank" class="theme-btn mt-2">Book Now<i
                    class="fa-solid fa-arrow-right-long"></i></a>
        </div>
    </section>

    <section class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 imagebag">
                    <div class="about-left wow animate__animated animate__fadeInLeft">
                        <div class="about-img">
                            <img src="{{ asset('assets/images/broken-car-dubai.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow animate__animated animate__fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <h2 class="site-title"><span> Safety—Our</span> Non-Negotiable Standard</h2>
                        </div>
                        <h3>Every extraction we perform follows strict safety protocols:
                        </h3>
                        <ul class="service-list check">
                            <li><b>Road safety management</b> including proper hazard triangle placement, reflective
                                barriers, and traffic coordination when working on active highways.</li>
                            <li><b>Personal safety</b> for stranded clients, particularly in extreme weather—we provide cool
                                water in summer, warm beverages in winter, and always assess whether you're safer waiting in
                                your automobile or our climate-controlled cab.</li>
                            <li><b>Vehicle damage prevention</b> through proper lift point selection, appropriate strap
                                usage, and careful maneuvering during loading.</li>
                            <li><b>Environmental responsibility</b> including fluid spill containment if your automobile has
                                leaked oil, coolant, or fuel.</li>
                            <li><b>Authority coordination</b> with RTA traffic management when highway lane closures become
                                necessary for safe operation.</li>

                        </ul>
                        <a href="{{ route('book.now') }}" target="_blank" class="theme-btn mt-2">Book Now<i
                                class="fa-solid fa-arrow-right-long"></i></a>
                        <a href="tel:+971 523003423" class="theme-btn mt-2"> Call Now<i
                                class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="faqs2-area">
        <div class="faqs2-container">
            <div class="faqs2-wrapper">

                <!-- LEFT CONTENT -->
                <div class="faqs2-content">
                    <h2>FAQ - Common Situations — Answered</h2>

                    <div class="faqs2-item">
                        <button class="faqs2-question">
                            What should I do immediately after breaking down on a highway?
                        </button>
                        <div class="faqs2-answer">
                            <p>
                                Activate hazard lights instantly. If mechanical failure allows, carefully navigate to the
                                shoulder—even a narrow one provides crucial safety margin. If safe to exit, leave the
                                automobile on the side away from traffic. Never stand behind your vehicle where approaching
                                drivers might strike you. Call professional help immediately rather than attempting
                                diagnosis in a dangerous environment.
                            </p>
                        </div>
                    </div>

                    <div class="faqs2-item">
                        <button class="faqs2-question">
                            How long does desert extraction typically require?
                        </button>
                        <div class="faqs2-answer">
                            <p>
                                Assessment determines duration—anywhere from fifteen minutes for a simple stuck situation to
                                two hours for severe entrapment. Factors include: sand depth around your wheels, automobile
                                weight, dune angle, and whether previous recovery attempts caused deeper burial. Our
                                operators provide realistic time estimates upon arrival.
                            </p>
                        </div>
                    </div>

                    <div class="faqs2-item">
                        <button class="faqs2-question">
                            Can you extract my automobile from underground parking with extremely low overhead clearance?
                        </button>
                        <div class="faqs2-answer">
                            <p>
                                Yes, using specialized compact equipment designed for confined spaces. We coordinate with
                                building management for access, identify proper routes avoiding height restrictions, and
                                guarantee damage-free extraction. These operations require more time than open-air recovery
                                but are completely routine for our experienced team.
                            </p>
                        </div>
                    </div>

                    <div class="faqs2-item">
                        <button class="faqs2-question">
                            What precautions do you take with luxury and exotic automobiles?
                        </button>
                        <div class="faqs2-answer">
                            <p>
                                Flatbed-only transport eliminates any possibility of undercarriage contact. Soft securing
                                straps protect painted surfaces. Our operators receive specific training on exotic marque
                                handling procedures. We've successfully transported Ferraris, Lamborghinis, Rolls-Royces,
                                McLarens, and rare classics without incident across thousands of operations.
                            </p>
                        </div>
                    </div>

                    <div class="faqs2-item">
                        <button class="faqs2-question">
                            Do you operate during sandstorms or heavy rainfall?
                        </button>
                        <div class="faqs2-answer">
                            <p>
                                Twenty-four-hour operation continues regardless of weather conditions. During adverse
                                weather, we implement enhanced safety protocols including reduced travel speeds, additional
                                lighting, and extra communication with you about progress. Your emergency doesn't pause for
                                weather—neither do we.
                            </p>
                        </div>
                    </div>

                    <div class="faqs2-item">
                        <button class="faqs2-question">
                            How do I know you're licensed and insured?
                        </button>
                        <div class="faqs2-answer">
                            <p>
                                Our RTA operator credentials are available for verification upon request. Insurance
                                documentation covering liability and automobile damage during transport can be provided. We
                                carry comprehensive coverage specifically because professional operation demands
                                professional protection.
                            </p>
                        </div>
                    </div>

                    <div class="faqs2-item">
                        <button class="faqs2-question">
                            What payment methods do you accept?
                        </button>
                        <div class="faqs2-answer">
                            <p>
                                Cash, all major credit cards, direct bank transfer, and insurance billing. For corporate
                                clients, we establish monthly invoicing arrangements.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="faqs2-image">
                    <img src="{{ asset('assets/images/broken-down-car-on-roadside.jpg') }}" alt="Roadside Assistance">
                </div>

            </div>
        </div>
    </section>

    <section class="wisdom-area">
        <div class="wisdom-container">
            <h2 class="wisdom-title">Prevention Wisdom—Reducing Future Emergencies</h2>
            <p class="text-aline mb-3" style="color: black;text-align: center;"><b>While we're always ready to help,
                    avoiding breakdowns beats resolving them:</b></p>
            <div class="wisdom-grid">

                <div class="wisdom-card">
                    <h4>Summer preparation</h4>
                    <p>means checking cooling system health before heat peaks. Radiator leaks that barely matter in February
                        become catastrophic in July.</p>
                </div>

                <div class="wisdom-card">
                    <h4>Desert adventure essentials</h4>
                    <p> include proper tire pressure reduction equipment, recovery boards, and realistic assessment of your
                        automobile's capabilities versus terrain difficulty.</p>
                </div>

                <div class="wisdom-card">
                    <h4>Warning sign recognition</h4>
                    <p>like unusual engine sounds, dashboard warning lights, or performance changes that signal imminent
                        problems before they become roadside emergencies.</p>
                </div>

                <div class="wisdom-card">
                    <h4>Emergency kit basics</h4>
                    <p>for your trunk: flashlight, water bottles, phone charger, reflective vest, basic tools. Simple items
                        that dramatically improve your situation while waiting for help.</p>
                </div>

                <div class="wisdom-card">
                    <h4>Maintenance schedules</h4>
                    <p>actually followed prevent the majority of mechanical breakdowns. That oil change you've postponed? It
                        matters more than you think.</p>
                </div>

                <div class="wisdom-card">
                    <h4>Realistic range calculation</h4>
                    <p>especially on routes where fuel stations are sparse. Highway consumption at speed exceeds city
                        driving—plan accordingly.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="about-areas py-120">
        <div class="wisdoam-container">
            <h2 class="wisdaom-title">Our Commitment to This Community</h2>
            <p><b>Beyond emergency response, we actively contribute:</b></p>
            <ul class="sersssvice-list">
                <li><b>Motorsport event support</b> providing trackside extraction for racing series and enthusiast track
                    days.</li>
                <li><b>Classic automobile club partnerships</b> offering specialized handling for vintage and collector
                    machines.</li>
                <li><b>Educational workshops</b> teaching basic maintenance and breakdown prevention to interested groups.
                </li>
                <li><b>Environmental initiatives</b> ensuring proper disposal of fluids from damaged automobiles, preventing
                    contamination.</li>
                <li><b>Youth programs</b> introducing young people to professional automotive trades through internship
                    opportunities.</li>
            </ul>
        </div>
    </section>

    <section class="rapid-help-section">
        <div class="rapid-help-wrapper">

            <div class="rapid-help-content">

                <h2 class="rapid-help-title">Get Help Right Now</h2>

                <p class="rapid-help-description">
                    For non-emergency inquiries, fleet partnerships, or insurance coordination, visit our <a
                        href="{{ route('contact') }}" target="_blank">Contact Page</a> and our team will respond
                    promptly.
                </p>
                <p class="rapid-help-highlight">
                    <strong>Response Promise:</strong> Human answer within 60 seconds.
                    UUnit dispatched within 5 minutes. Help arriving as fast as safely possible.
                </p>

                <p class="rapid-help-footer-text">
                    When your automobile stops, your life doesn't have to. One call brings professional solutions, delivered
                    by people who genuinely know what they're doing.
                </p>
                <p><b>Toretto Recovery—Because getting stuck is temporary. Getting moving is our job.</b></p>
                <p>Serving every road, highway, neighborhood, and trail across the emirate. Licensed operators. Modern
                    equipment. Genuine expertise. 24/7.</p>
            </div>


            <div class="cta-actions header-actions rapid-help-buttons d-flex align-items-center gap-3 mt-5">
                <a href="tel:+971523003423" class="theme-btn">
                    Call Now
                </a>
                <a href="{{ route('contact') }}" target="_blank" class="theme-btn theme-btn2">
                    Get Guidance
                </a>
            </div>
        </div>
    </section>


    <link rel="stylesheet" href="{{ asset('assets/css/service.css') }}">
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
@endsection
