@extends('layouts.main')

@section('title', 'My Profile')

@section('content')

{{-- PROFILE SECTION --}}
<section class="signup-section">
    <div class="container">
        <div class="signup-wrapper row" data-aos="fade-up" data-aos-duration="500">
            <div class="col-lg-6 align-content-center">
                <div class="left-container">
                    <img src="{{ asset('assets/images/profile-image.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-container">

                    <div class="section-heading" data-aos="fade-up" data-aos-duration="500">
                        <h2 class="section-title"><span>My</span> Profile</h2>
                        <p>View your account details</p>
                    </div>

                    <div class="signup-card">
                        <div class="form-group">
                            <label>Full Name</label>
                            <div class="input-icon">
                                <i class="fa-regular fa-user"></i>
                                <input type="text" id="fullName" placeholder="Full Name" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Mobile Number</label>
                            <div class="input-group phone-input">
                                <button class="mobile-btn btn btn-outline-secondary d-flex align-items-center gap-2"
                                        type="button" id="countryBtn" disabled>
                                    <img src="https://flagcdn.com/w20/ae.png" id="flag">
                                    <span id="dialCode">+971</span>
                                </button>
                                <input type="text" class="form-control" id="mobile" placeholder="Mobile Number" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Email Address</label>
                            <div class="input-icon">
                                <i class="fa-regular fa-envelope"></i>
                                <input type="email" id="email" placeholder="Email Address" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('signup-script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get user data from localStorage
        const userData = JSON.parse(localStorage.getItem('user_data') || '{}');

        // Populate the fields
        if (userData) {
            // Full name: combine first_name and last_name
            const fullName = (userData.first_name || '') + ' ' + (userData.last_name || '');
            document.getElementById('fullName').value = fullName.trim();

            // Mobile number
            if (userData.phone) {
                // Remove country code '971' and set the remaining digits
                const displayNumber = userData.phone.replace(/^971/, '');
                document.getElementById('mobile').value = displayNumber;
            }

            // Email
            document.getElementById('email').value = userData.email || '';
        }
    });
</script>
@endpush
