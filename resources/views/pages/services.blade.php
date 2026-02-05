@extends('layouts.main')

@section('title', 'Services | Car Recovery Dubai | 24/7 Towing & Roadside Assistance UAE')

@section('content')

    <section class="site-breadcrumb" style="background: url('{{ asset('assets/images/contact-bg.jpg') }}');">
        <div class="container">
            <h2 class="breadcrumb-title">Services</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </li>
                <li class="active">Services</li>
            </ul>
        </div>
    </section>

    {{-- SERVICES --}}
    <section class="feature-area ft-bg1  py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading text-center">
                        <h2 class="site-title text-black">Car <span>Recovery </span>Services</h2>
                    </div>
                </div>
            </div>
            <div class="feature-wrapper">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="text-center service-item wow fadeInUp">
                            <div class="service-img">
                                <img src="{{ asset('assets/images/1.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Towing Service
                                </h3>
                                <p class="service-text">
                                    Professional 24/7 recovery and towing services across all UAE emirates. Ensuring your vehicle's safety with damage-free transport.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="text-center service-item wow fadeInDown">
                            <div class="service-img">
                                <img src="{{ asset('assets/images/3.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Roadside Assistance

                                </h3>
                                <p class="service-text"> Stay safe while we handle the rest. Our team arrives quickly to resolve minor breakdowns and get you back on your journey./p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="text-center service-item wow fadeInUp">
                            <div class="service-img">
                                <img src="{{ asset('assets/images/2.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Recovery Service</h3>
                                <p class="service-text">
                                    Safe and secure flatbed recovery for luxury, sports, and classic cars. We treat your vehicle with the utmost care.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="text-center service-item wow fadeInUp">
                            <div class="service-img">
                                <img src="{{ asset('assets/images/4.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Flatbed Recovery

                                </h3>
                                <p class="service-text">The safest way to transport luxury and sports cars. Our flatbed trailers ensure 100% damage-free delivery across the UAE.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="text-center service-item wow fadeInDown">
                            <div class="service-img">
                                <img src="{{ asset('assets/images/5.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Accidental Car Recovery

                                </h3>
                                <p class="service-text">
                                    The "Peace of Mind" approach: "In the event of a collision, our team provides stress-free recovery. We work with major insurance providers and workshops across Dubai."
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="text-center service-item wow fadeInUp">
                            <div class="service-img">
                                <img src="{{ asset('assets/images/6.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Luxury & Sports Car Handling

                                </h3>
                                <p class="service-text">The "VVIP" Approach: "Dedicated white-glove service for exotic and supercar transport. We provide specialized loading techniques for low-clearance vehicles." </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="text-center service-item wow fadeInUp">
                            <div class="service-img">
                                <img src="{{ asset('assets/images/6.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Bike/Motorcycle Recovery

                                </h3>
                                <p class="service-text">The "Care-Focused" approach: "We understand how much your bike means to you. Our specialized motorcycle trailers ensure a secure, upright, and scratch-free journey."</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="text-center service-item wow fadeInUp">
                            <div class="service-img">
                                <img src="{{ asset('assets/images/6.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Desert Pull Out Service

                                </h3>
                                <p class="service-text">The "Expertise" Approach: "Don't let a desert adventure turn into a nightmare. Our experienced off-road recovery specialists will get your SUV out of the sand safely and quickly."</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
