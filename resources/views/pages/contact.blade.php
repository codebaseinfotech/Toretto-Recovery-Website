@extends('layouts.main')

@section('title', 'Contact')

@section('content')

{{-- SITE BREADCRUMB SECTION --}}
<section class="site-breadcrumb" style="background: url('{{ asset('assets/images/contact-bg.jpg') }}');">
        <div class="container">
            <h2 class="breadcrumb-title">Contact Us</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
</section>

{{-- CONTACT-AREA SECTION --}}
<section class="contact-area">
        <div class="container">
            <div class="contact-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fa-solid fa-map-location-dot"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Registered office </h5>
                                <p>274 Street - Dubai Investment Park - 2 - Dubai</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Call Us</h5>
                                <p>+971 52 225 5021</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Mail Us</h5>
                                <p>support-torettorecovery.ae</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-wrapper">
                <div class="row gy-4">                
                    <div class="col-lg-7 align-self-center">
                        <div class="contact-form">
                            <div class="contact-form-header">
                                <h2>Contact Toretto Recovery</h2>
                                <p>Need immediate car recovery or towing service anywhere in Dubai?
                                    The Toretto Recovery team is available round-the-clock to assist you, whether it’s a breakdown, accident recovery, flat tyre, or emergency roadside help.
                                    Our specialists respond quickly and ensure safe, professional, and hassle-free service.</p>
                            </div>
                            <div id="contact-form" action="" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="name" class="form-control py-2 px-4" placeholder="Your Name" autocomplete="off" name="Name" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" id="Email" class="form-control py-2 px-4" placeholder="Enter Email" autocomplete="off" name="Email" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="phone" class="form-control py-2 px-4" placeholder="Your Phone No" name="Phone" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="Subject" class="form-control py-2 px-4" placeholder="Your Subject" name="Subject" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea rows="5" cols="20" id="Message" class="form-control py-2 px-4" placeholder="Write Your Message" name="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="btnSubmit" class="theme-btn">
                                    <span id="btnText">Send Message</span>
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-5">
                        <div class="contact-img">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3018.4328143821667!2d55.19176099999999!3d24.9841868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f738029535231%3A0xf12954b8856837fb!2sToretto%20Auto%20Services%20LLC%20-%20German%20%26%20American%20Car%20Experts%20in%20DIP%20%7C%20Car%20Repair%20%7C%20Car%20Wash%7C%20Oil%20Change%7C%20Tyre%20Service!5e1!3m2!1sen!2sin!4v1763747469392!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
</section>

@endsection