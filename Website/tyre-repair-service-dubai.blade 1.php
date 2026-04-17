@extends('layouts.main')

@section('title')
    24/7 Flat Tyre Repair Service in Dubai | Emergency Tyre Replacement
@endsection

@section('meta_description')
    Got a flat tyre in Dubai? Toretto Recovery offers rapid 24/7 flat tyre repair, mobile tyre fitting, and puncture repair directly at your location. We get you back on the road safely!
@endsection

@section('meta_keywords', 'Flat Tyre Repair Dubai, Mobile Tyre Fitting, Tyre Puncture Repair, 24/7 Tyre Replacement Dubai, Emergency Roadside Assistance')

@section('content')

    <style>
        @media (min-width: 992px) {
            .offset-lg-2 { margin-left: 5.666667%; }
            .col-lg-7 { flex: 0 0 auto; width: 58.33333333%; }
            .col-lg-3 { flex: 0 0 auto; width: 30%; }
            .breadcrumb-menu li a { font-size: 16px; }
            .dp-hero-title { font-size: 60px !important; line-height: 1.25 !important; }
            .dp-hero-subtitle { font-size: 17px !important; }
        }
        @media (max-width: 991px) {
            .dp-hero-title { font-size: 32px !important; line-height: 1.3 !important; }
            .dp-hero-subtitle { font-size: 15px !important; }
        }
        .dp-hero-eyebrow {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(215,0,6,0.2); border: 1px solid rgba(215,0,6,0.4);
            padding: 6px 14px; border-radius: 30px; font-size: 13px; font-weight: 700;
            color: #fff; margin-bottom: 20px; letter-spacing: 1px; text-transform: uppercase;
        }
        .dp-hero-eyebrow i { color: #d70006; }
        .dp-hero-title { color: #fff; font-weight: 800; margin-bottom: 15px; }
        .dp-hero-title span { color: #d70006; }
        .dp-hero-subtitle { color: rgba(255,255,255,0.85); font-weight: 500; line-height: 1.7; margin-top: 15px; margin-bottom: 30px; max-width: 90%; }
    </style>
    <section class="site-breadcrumb contact-section" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset('assets/images/Site-of-the-Breakdown-1024x683.webp') }}') center/cover;">

        <div class="container">
            <div class="row min-vh-75" style="padding: 40px 0;">

                <!-- LEFT TEXT -->
                <div class="col-lg-7 d-flex mb-5 mb-lg-0">
                    <div class="hero-content-wrapper text-start text-white w-100">

                        <!-- Eyebrow Badge -->
                        <div class="dp-hero-eyebrow wow animate__animated animate__fadeInDown">
                            <i class="fas fa-wrench"></i>
                            Toretto Tyre Repair — Dubai
                        </div>

                        <!-- Main Heading -->
                        <h1 class="dp-hero-title wow animate__animated animate__fadeInDown" data-wow-delay=".1s">
                            Flat Tyre Repair Service <br><span>in Dubai</span> — Quick & Reliable
                        </h1>

                        <ul class="breadcrumb-menu wow animate__animated animate__fadeInDown" data-wow-delay=".15s" style="margin-left: 0; padding-left: 0;">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                                <i class="fa fa-angle-double-right"></i>
                            </li>
                            <li class="active">Tyre Repair Service Dubai</li>
                        </ul>

                        <!-- Subtitle -->
                        <h2 class="dp-hero-subtitle wow animate__animated animate__fadeInDown" data-wow-delay=".2s">
                            Don't let a flat tyre slow you down. Our mobile tyre repair service in Dubai is fast, trusted, and available 24/7. We come to your home, office, or roadside location to fix your puncture quickly and get you back on the road safely.
                        </h2>

                        <!-- CTA Section -->
                        <div class="hero-btn mt-4 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                            <a href="{{ route('home') }}" target="_blank" class="theme-btn">
                                Book Now <i class="fas fa-arrow-right-long ms-2"></i>
                            </a>
                            <a href="tel:+971526917666" class="theme-btn theme-btn2">
                                Call Now <i class="fas fa-arrow-right-long ms-2"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <!-- RIGHT FORM (SMALLER) -->
                <div class="col-lg-3 offset-lg-2">
                    <div class="dark-form-card small-form wow animate__animated animate__fadeInRight">

                        <h3 class="form-title">Request services</h3>

                        <form method="POST" action="{{ route('contact.submit') }}">
                            @csrf

                            <div class="form-group">
                                <input type="text" name="name" placeholder="Your name" required>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email address" required>
                            </div>

                            <input type="hidden" name="type" value="Tyre Repair Service Dubai Inquiry">

                            <div class="form-group">
                                <input type="text" name="phone" placeholder="Phone number" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="subject" placeholder="Your location (e.g. Al Quoz)">
                            </div>

                            <div class="form-group">
                                <textarea rows="4" name="message" placeholder="Describe your tyre issue..."></textarea>
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

    {{-- ===== SECTION 1: INTRO (2-column) ===== --}}
    <section class="tyre-intro-section" style="padding: 80px 0; background: #fff;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 wow animate__animated animate__fadeInLeft">
                    <h2 class="tyre-section-title text-uppercase" style="font-size: 30px; font-weight: 800; color: #111; line-height: 1.4;">24 HOUR FLAT TYRE REPAIR SERVICE DUBAI AT <span>YOUR DOORSTEP</span></h2>
                    <p class="tyre-text mt-3 mb-4" style="font-size: 17px; color: #555;">Looking for roadside flat tyre repair service in Dubai? Toretto Recovery offers on-demand flat tyre fix near me services for just about anywhere in Dubai.</p>
                    <ul class="list-unstyled" style="font-size: 17px; color: #333; line-height: 2.2;">
                        <li><i class="fas fa-check mt-1 text-danger me-2"></i> Flat tyre repair near me</li>
                        <li><i class="fas fa-check mt-1 text-danger me-2"></i> Breakdown assistance</li>
                        <li><i class="fas fa-check mt-1 text-danger me-2"></i> Mobile tyre service</li>
                        <li><i class="fas fa-check mt-1 text-danger me-2"></i> Tyre Balancing</li>
                    </ul>
                    <a href="tel:+971526917666" class="theme-btn mt-4">Call Us Now <i class="fas fa-arrow-right-long ms-2"></i></a>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0 wow animate__animated animate__fadeInRight">
                    <!-- Replace with local image containing someone replacing a tyre shown in Screenshot 1 -->
                    <img src="{{ asset('assets/images/technician changing flat tire on sedan-dubai-muhaisnah.jpg') }}" alt="Flat Tyre Repair Service Dubai" class="img-fluid" style="border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                </div>
            </div>
        </div>
    </section>

    {{-- ===== SECTION 2: SERVICES DEEP DIVE ===== --}}
    <section class="tyre-about-section" style="padding: 80px 0; background: #f8f9fb;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0 wow animate__animated animate__fadeInLeft">
                    <!-- Replace with local image of close up tyre shown in Screenshot 1 bottom -->
                    <img src="{{ asset('assets/images/Flat_Tire_Change.jpeg') }}" alt="Flat Tyre Services Dubai" class="img-fluid w-100" style="border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                </div>
                <div class="col-lg-7 ps-lg-5 wow animate__animated animate__fadeInRight">
                    <h2 class="tyre-section-title text-uppercase" style="font-size: 30px; font-weight: 800; color: #111; line-height: 1.4;">FLAT TYRE REPAIR SERVICES AT <span>TORETTO RECOVERY</span></h2>
                    <p class="tyre-text mt-3" style="font-size: 16px; color: #555; line-height: 1.8;">Are you stuck with a flat tyre, and you need an immediate call-out flat tyre repair Dubai service? <span class="text-danger fw-bold">Toretto Recovery</span> will help you with all emergency tyre repair near me in Dubai. Furthermore, we have offered flat tyre service at home, wheel alignment, <span class="text-danger fw-bold">tyre replacement</span>, flat tyre repair near me services, and tyre breakdown services anywhere in Dubai.</p>
                    <p class="tyre-text" style="font-size: 16px; color: #555; line-height: 1.8;">Our 24/7 car puncture repair tyre is helpful to you anytime, anywhere. In addition to this, we have professional mechanics who can help you effectively during your call with our car repair and maintenance service. Toretto Recovery always uses advanced methods and tools in flat tyre repair near me in Dubai.</p>
                    <p class="tyre-text mb-0" style="font-size: 16px; color: #555; line-height: 1.8;">Moreover, at Toretto Recovery, we understand the value of your time as a driver. That’s why we provide our mobile car tyre repair near me and fitment service, designed to make it easy for you to replace and fix your tyre on the spot, wherever you are on the road. Besides, this service not only eliminates the need to visit an auto garage for a car tyre puncture repair in Dubai but also provides a convenient way to have your tyre installed on your vehicle.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== SECTION 3: WHAT CAN YOU EXPECT ===== --}}
    <section class="tyre-expect-section" style="padding: 80px 0; background: #fff;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 pe-lg-5 wow animate__animated animate__fadeInLeft">
                    <h2 class="tyre-section-title text-uppercase" style="font-size: 30px; font-weight: 800; color: #111; line-height: 1.4;">WHAT CAN YOU EXPECT FROM TORETTO RECOVERY MOBILE <span>TYRE SERVICE DUBAI?</span></h2>
                    <p class="tyre-text mt-3 mb-4" style="font-size: 16px; color: #555; line-height: 1.8;">Our mobile tyre service Dubai and fitment changes are a flexible solution. We can replace and install your tyre at your home, office, or any other location in Dubai. Besides, this is to ensure that we cater to your needs no matter where you are.</p>
                    <ul class="list-unstyled" style="font-size: 17px; color: #333; line-height: 2.2;">
                        <li><i class="fas fa-check mt-1 text-danger me-2"></i> Tyre inspection</li>
                        <li><i class="fas fa-check mt-1 text-danger me-2"></i> Fitment of new tyres</li>
                        <li><i class="fas fa-check mt-1 text-danger me-2"></i> Car tyre puncture repair</li>
                        <li><i class="fas fa-check mt-1 text-danger me-2"></i> Wheel balancing</li>
                        <li><i class="fas fa-check mt-1 text-danger me-2"></i> Spare tyre replacement</li>
                        <li><i class="fas fa-check mt-1 text-danger me-2"></i> Wheel protector installation</li>
                        <li><i class="fas fa-check mt-1 text-danger me-2"></i> Tyre pressure</li>
                    </ul>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0 wow animate__animated animate__fadeInRight">
                    <!-- Replace with local image showing mechanic with blue gloves working on wheel (Img 2) -->
                    <img src="{{ asset('assets/images/Roadside-assistance-team-helping-stranded-driver-in-Al-Warqa.jpg') }}" alt="Mobile Tyre Service DUBAI" class="img-fluid w-100" style="border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                </div>
            </div>
        </div>
    </section>

    {{-- ===== SECTION 4: WHAT CAUSES A FLAT TYRE (PATTERN BG) ===== --}}
    <section class="tyre-causes-section" style="padding: 90px 0; background: url('{{ asset('assets/images/pattern-bg.jpg') }}') center/cover; position: relative;">
        <!-- Faded grey overlay to mimic screenshot background -->
        <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: rgba(245, 245, 245, 0.95);"></div>
        <div class="container text-center position-relative z-1 wow animate__animated animate__fadeInUp">
            <h2 class="tyre-section-title text-uppercase" style="font-size: 32px; font-weight: 800; color: #111;">WHAT CAUSES A <span>FLAT TYRE?</span></h2>
            <p class="tyre-text mx-auto mt-4" style="max-width: 900px; font-size: 16px; color: #444; line-height: 1.8;">One of the most frustrating car-related problems is dealing with a flat tyre. While this problem can happen anytime, the most common causes include the valve system getting damaged, getting a puncture, and having over-pumped tyres.</p>
            <p class="tyre-text mx-auto mt-3 mb-0" style="max-width: 900px; font-size: 16px; color: #444; line-height: 1.8;">However, with our efficient and prompt flat tyre repair Dubai service, you can be reassured that you’ll be back on the road in no time. Moreover, at Toretto Recovery, we offer the most efficient and quickest on-demand tyres repair near me at home in Dubai, available 24/7. Our mobile tyre experts will be at your service in under 30 minutes, providing you with a sense of reassurance in any tyre emergency.</p>
        </div>
    </section>

    {{-- ===== SECTION 5: HOW IT WORKS ===== --}}
    <section class="tyre-works-section text-center" style="padding: 80px 0; background: #fff;">
        <div class="container">
            <h2 class="tyre-section-title text-uppercase" style="font-size: 32px; font-weight: 800; color: #111;">HOW IT <span>WORKS</span></h2>
            <p class="tyre-text mx-auto mt-3 mb-5" style="max-width: 850px; font-size: 16px; color: #555;">As the best emergency tyre repair service, Toretto Recovery is here to make flat tyre repair Dubai easy for you with its mobile tyre service Dubai. Here is how we offer our clients premium 24 hour tyre service to fix flat tyre.</p>
            
            <div class="row mt-5 pt-3">
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <div class="text-center px-lg-3">
                        <i class="far fa-edit text-danger" style="font-size: 50px; margin-bottom: 25px;"></i>
                        <h4 style="font-size: 20px; font-weight: 700; color: #111; margin-bottom: 15px;">Choose the Type of Service</h4>
                        <p style="font-size: 15px; color: #555; line-height: 1.7;">Explore our page to find your service, and tell our expert team about the flat tyre service you need.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <div class="text-center px-lg-3">
                        <i class="fas fa-truck-pickup text-danger" style="font-size: 50px; margin-bottom: 25px;"></i>
                        <h4 style="font-size: 20px; font-weight: 700; color: #111; margin-bottom: 15px;">Make A Booking</h4>
                        <p style="font-size: 15px; color: #555; line-height: 1.7;">Book your appointment for any day, time, and location. Our experts will always be there for you and offer you 24 hour tyre repair Dubai solutions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <div class="text-center px-lg-3">
                        <i class="fas fa-car-battery text-danger" style="font-size: 50px; margin-bottom: 25px;"></i>
                        <h4 style="font-size: 20px; font-weight: 700; color: #111; margin-bottom: 15px;">Car Battery Change</h4>
                        <p style="font-size: 15px; color: #555; line-height: 1.7;">Rest assured, our team of highly experienced technicians will quickly address all issues and provide you with a flat tyre fix near me.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== SECTION 6: WHAT IS INCLUDED ===== --}}
    <section class="tyre-included-section text-center" style="padding: 80px 0; background: #fff; border-top: 1px solid #f9f9f9;">
        <div class="container">
            <h2 class="tyre-section-title text-uppercase mx-auto" style="font-size: 30px; font-weight: 800; color: #111; max-width: 900px; line-height: 1.4;">WHAT IS INCLUDED IN OUR ONSITE FLAT TYRE FIX NEAR ME AND <span>REPLACEMENT SERVICES?</span></h2>
            <p class="tyre-text mx-auto mt-4 mb-5" style="max-width: 900px; font-size: 15px; color: #555;">If you are looking for a professional mobile tyre repair service then, Toretto Recovery is the perfect solution for you. Here are the major services that we offer in 24 hour tyre repair Dubai.</p>

            <div class="row mt-5 pt-4">
                <div class="col-lg-3 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <div class="text-center px-2">
                        <i class="fas fa-car-battery text-danger" style="font-size: 45px; margin-bottom: 25px;"></i>
                        <h5 style="font-size: 18px; font-weight: 700; color: #111; margin-bottom: 15px;">Onsite Car Battery Replacement</h5>
                        <p style="font-size: 14px; color: #555; line-height: 1.7;">A perfectly functioning battery is fundamental for the operation of your car. Whenever it fails, your journey will be boring, and you will regularly be stranded.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <div class="text-center px-2">
                        <i class="fas fa-shuttle-van text-danger" style="font-size: 45px; margin-bottom: 25px;"></i>
                        <h5 style="font-size: 18px; font-weight: 700; color: #111; margin-bottom: 15px;">Roadside Assistance</h5>
                        <p style="font-size: 14px; color: #555; line-height: 1.7;">Toretto Recovery offer roadside assistance for mobile car tyre repair in Dubai for prompt rescue. We are open 24 hours, 365 days.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <div class="text-center px-2">
                        <i class="fas fa-dharmachakra text-danger" style="font-size: 45px; margin-bottom: 25px;"></i>
                        <h5 style="font-size: 18px; font-weight: 700; color: #111; margin-bottom: 15px;">Tyre Change at Home</h5>
                        <p style="font-size: 14px; color: #555; line-height: 1.7;">You are busy with everyday power to work, and your tyre blows out! Don't worry; just name it, and we will offer you premium mobile tyre repair services. Call +971 526917666, and we will offer a complete 24 hour tyre service.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                    <div class="text-center px-2">
                        <i class="fas fa-compact-disc text-danger" style="font-size: 45px; margin-bottom: 25px;"></i>
                        <h5 style="font-size: 18px; font-weight: 700; color: #111; margin-bottom: 15px;">Onsite Car Brake Pad Replacement</h5>
                        <p style="font-size: 14px; color: #555; line-height: 1.7;">Onsite brake pad replacements refer to replacing the brake pads of the vehicle at a location of your choice. Whether it's your workplace, home, or any other convenient spot, we adapt to your schedule and location.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== SECTION 7: WHY CHOOSE US & GALLERY ===== --}}
    <section class="tyre-why-choose-section" style="padding: 80px 0; background: #f8f9fb;">
        <div class="container text-center">
            <h2 class="tyre-section-title text-uppercase mx-auto" style="font-size: 30px; font-weight: 800; color: #111; max-width: 900px;">WHY CHOOSE TORETTO RECOVERY FOR YOUR MOBILE FLAT TYRE <span>REPAIR SERVICE?</span></h2>
            <p class="tyre-text mx-auto mt-4 mb-4" style="max-width: 900px; font-size: 16px; color: #555;">We have expert technicians who can help you with 24 hour tyre service. You will also find all the details about our mobile tyre change service.</p>
            
            <ul class="list-unstyled d-inline-block text-start mx-auto mb-5" style="max-width: 900px; font-size: 16px; color: #333; line-height: 2;">
                <li><i class="fas fa-check mt-1 text-danger me-3"></i> Our professional team has years of experience in mobile tyre repair Dubai services so we will offer extra care to your luxury car, and you will get high-quality products for your vehicle.</li>
                <li><i class="fas fa-check mt-1 text-danger me-3"></i> Emergency tyres repair near me and fitting services are provided quickly and fast on the road in Dubai.</li>
                <li><i class="fas fa-check mt-1 text-danger me-3"></i> Lastly, all our customers gets complete satisfaction with our tyres repair near me services and work.</li>
            </ul>

            <h2 class="tyre-section-title text-uppercase mt-5 mb-5" style="font-size: 30px; font-weight: 800; color: #111;">TYRE SERVICES AT YOUR LOCATION, <span>IN DUBAI</span></h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <img src="{{ asset('assets/images/flat-tyre-replacement-dubai.jpg') }}" class="img-fluid w-100" style="border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); height: 350px; object-fit: cover;" alt="Tyre Service Dubai">
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <img src="{{ asset('assets/images/broken-down-car-on-roadside.jpg') }}" class="img-fluid w-100" style="border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); height: 350px; object-fit: cover;" alt="Mobile Tyre Van">
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <img src="{{ asset('assets/images/delivering-car-by-flatbed-tow-truck.jpg') }}" class="img-fluid w-100" style="border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); height: 350px; object-fit: cover;" alt="Mechanic Repairing Tyre">
                </div>
            </div>
        </div>
    </section>

    {{-- ===== SECTION 8: TESTIMONIALS ===== --}}
    <section class="tyre-testimonial-section" style="padding: 80px 0; background: #fff;">
        <div class="container">
            <h2 class="tyre-section-title text-center text-uppercase mb-5" style="font-size: 32px; font-weight: 800; color: #111;">WHAT DO CUSTOMERS <span>SAY?</span></h2>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <div class="testimonial-card" style="background: #111; color: #fff; padding: 30px; border-radius: 12px; height: 100%; border-bottom: 4px solid #d70006;">
                        <h4 style="font-size: 20px; font-weight: 700; margin-bottom: 15px; color: #fff;">Kinza Ali</h4>
                        <div class="stars mb-3" style="color: #ffc107; font-size: 14px;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p style="font-size: 15px; color: #ddd; line-height: 1.7; margin: 0;">Professional staff & reasonable price, highly recommended place.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <div class="testimonial-card" style="background: #111; color: #fff; padding: 30px; border-radius: 12px; height: 100%; border-bottom: 4px solid #d70006;">
                        <h4 style="font-size: 20px; font-weight: 700; margin-bottom: 15px; color: #fff;">Sarfaraz Farook</h4>
                        <div class="stars mb-3" style="color: #ffc107; font-size: 14px;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p style="font-size: 15px; color: #ddd; line-height: 1.7; margin: 0;">Very excellent staff got 3 tyre changes. They offer me affordable services if you are looking for a service centre for a tyre change at a reasonable price.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <div class="testimonial-card" style="background: #111; color: #fff; padding: 30px; border-radius: 12px; height: 100%; border-bottom: 4px solid #d70006;">
                        <h4 style="font-size: 20px; font-weight: 700; margin-bottom: 15px; color: #fff;">Saleem Ahmed</h4>
                        <div class="stars mb-3" style="color: #ffc107; font-size: 14px;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p style="font-size: 15px; color: #ddd; line-height: 1.7; margin: 0;">Our professional team is dedicated to providing perfect work quality at the best price, ensuring you get the best service for your money.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== SECTION 9: FAQs ===== --}}
    <section class="pj-faq-section" style="background:#f8f9fb;">
        <div class="container">
            <div class="pj-section-header text-center">
                <span class="pj-eyebrow" style="color: #d70006;"><i class="fas fa-circle-question"></i> FAQ</span>
                <h2 style="font-size: 32px; font-weight: 800; color: #111;">Frequently Asked Questions — <span>Tyre Repair Service</span></h2>
                <p>Everything you need to know about our flat tyre repair service in Dubai.</p>
            </div>

            <div class="pj-faq-list">

                <!-- FAQ 1 -->
                <div class="pj-faq-item active">
                    <button class="pj-faq-q" aria-expanded="true">
                        <span>Where Can I Find a Reliable Flat Tyre Repair Service in Dubai?</span>
                        <div class="pj-faq-icon"><i class="fas fa-minus"></i></div>
                    </button>
                    <div class="pj-faq-answer">
                        <p>At Toretto Recovery, we assure you the best flat tyre repair service in Dubai. Our professional technicians, equipped with advanced methods, can change your vehicle's tyre at your doorstep, ensuring your convenience and peace of mind.</p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="pj-faq-item">
                    <button class="pj-faq-q" aria-expanded="false">
                        <span>Is Hiring a Flat Tyre Service Necessary If the Tyre Gets Punctured?</span>
                        <div class="pj-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="pj-faq-answer">
                        <p>While it’s possible to change a punctured tyre yourself, it can be a bit challenging, especially if you're doing it for the first time. In such situations, it's easy to rely on an efficient repair service. Toretto Recovery provides the best tyre repair service in Dubai, with expert technicians who can also handle battery replacement and car recovery.</p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="pj-faq-item">
                    <button class="pj-faq-q" aria-expanded="false">
                        <span>Do Toretto Recovery in Dubai Provides All Types of Tyres?</span>
                        <div class="pj-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="pj-faq-answer">
                        <p>Yes, we have a wide range of collections from reliable tyre brands. You can choose your tyre and give us a call. Our support team will help you with the rest. We have a 24/7 customer support team for our clients.</p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="pj-faq-item">
                    <button class="pj-faq-q" aria-expanded="false">
                        <span>What Is the Price for A Mobile Tyre Repair Service in Dubai?</span>
                        <div class="pj-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="pj-faq-answer">
                        <p>The price range for our mobile tyre repair service in Dubai is tailored to your vehicle and the type of tyre that needs to be changed. At Toretto Recovery, we offer affordable services for all vehicles, ensuring that quality car care doesn’t break the bank.</p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="pj-faq-item">
                    <button class="pj-faq-q" aria-expanded="false">
                        <span>Do Toretto Recovery Provide Wheel Alignment Service in Dubai?</span>
                        <div class="pj-faq-icon"><i class="fas fa-plus"></i></div>
                    </button>
                    <div class="pj-faq-answer">
                        <p>Yes, In addition to our flat tyre repair service, we also provide other vehicle services, such as wheel balancing, wheel alignment, car battery change, brake inspection, air filling, home tyre service, brake pad, car oil change, and mobile tyre service.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ===== FINAL CTA ===== --}}
    <section class="tyre-cta wow animate__animated animate__fadeIn" style="padding: 80px 0; background: #d70006; text-align: center;">
        <div class="container">
            <h2 style="font-size: 38px; font-weight: 800; color: #fff; margin-bottom: 20px;">Need a Fast Tyre Repair in Dubai?</h2>
            <p style="font-size: 18px; color: #fff; max-width: 700px; margin: 0 auto 30px; line-height: 1.7;">Don’t stress over a blowout! Toretto Recovery's skilled mobile tyre technicians are just one call away. We operate 24/7 across all of Dubai to provide fast, safe, and professional puncture repairs or tyre replacements right where you are.</p>
            
            <div class="cta-btn-group mt-4" style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
                <a href="tel:+971526917666" class="theme-btn" style="background: #111; border-color: #111; color: #fff;"><i class="fas fa-phone-alt border-0 me-2"></i> Call +971 526917666</a>
                <a href="https://wa.me/971526917666" target="_blank" class="theme-btn theme-btn2" style="background: #fff; color: #111; border-color: #fff;"><i class="fab fa-whatsapp border-0 me-2"></i> Chat on WhatsApp</a>
            </div>
            <p class="mt-4 text-white" style="font-size: 14px; opacity: 0.9;">Arriving in under 30 minutes to get you rolling safely.</p>
        </div>
    </section>

    <link rel="stylesheet"
        href="{{ asset('assets/css/service.css') }}?v={{ filemtime(public_path('assets/css/service.css')) }}">
    <link rel="stylesheet"
        href="{{ asset('assets/css/tyre-service.css') }}?v={{ filemtime(public_path('assets/css/tyre-service.css')) }}">
    <link rel="stylesheet"
        href="{{ asset('assets/css/areas.css') }}?v={{ filemtime(public_path('assets/css/areas.css')) }}">
        
    <script>
        // Dynamic location → map interaction (Used in full templates if you merge the map later)
        document.querySelectorAll('.tw-loc-pin').forEach(pin => {
            pin.addEventListener('click', () => {
                const lat = pin.dataset.lat;
                const lng = pin.dataset.lng;
                // Update active state
                document.querySelectorAll('.tw-loc-pin').forEach(p => p.classList.remove('tw-loc-active'));
                pin.classList.add('tw-loc-active');
                // Update iframe — red pin marker at exact coordinates
                const iframe = document.getElementById('tw-coverage-iframe');
                if(iframe) {
                    iframe.src = `https://maps.google.com/maps?q=${lat},${lng}&t=&z=14&ie=UTF8&iwloc=B&output=embed`;
                }
            });
        });

        // Palm Jumeirah FAQ Accordion JS
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.pj-faq-list .pj-faq-item');

            faqItems.forEach(function(item) {
                const btn = item.querySelector('.pj-faq-q');
                if(!btn) return;
                
                btn.addEventListener('click', function() {
                    const isActive = item.classList.contains('active');

                    // Close all
                    faqItems.forEach(function(el) {
                        el.classList.remove('active');
                        el.querySelector('.pj-faq-q').setAttribute('aria-expanded', 'false');
                        el.querySelector('.pj-faq-icon i').className = 'fas fa-plus';
                    });

                    // Open clicked (if it wasn't already open)
                    if (!isActive) {
                        item.classList.add('active');
                        btn.setAttribute('aria-expanded', 'true');
                        item.querySelector('.pj-faq-icon i').className = 'fas fa-minus';
                    }
                });
            });
        });
    </script>
@endsection
