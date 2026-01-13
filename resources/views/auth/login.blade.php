@extends('layouts.main')

@section('title', 'Login')

@section('content')

{{-- LOGIN SECTION --}}
<section class="login-section">
        <div class="container">
            <div class="login-wrapper row wow fade-in-up-20">
                <div class="col-lg-6 align-content-center">
                    <div class="left-container">
                        <img src="{{ asset('assets/images/login-page.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 align-content-center">
                    <div class="right-container">
                        
                        <div class="section-heading wow fade-in-up-20">
                            <h2 class="section-title"><span>Welcome </span> Back!</h2>
                            <p>Access your bookings and manage your vehicle recovery services</p>
                        </div>

                        <form class="login-card" id="loginForm" method="POST" action="{{ route('login.send') }}" novalidate>
                            @csrf
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <!-- Country Dropdown -->
                                     <div class="input-group phone-input">
                                        <button class="mobile-btn btn btn-outline-secondary d-flex align-items-center gap-2"
                                                type="button"
                                                id="countryBtn">
                                            <img src="https://flagcdn.com/w20/ae.png" id="flag">
                                            <span id="dialCode">+971</span>
                                        </button>

                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your mobile number" maxlength="10">
                                    </div>
                                    <!-- Validation Message -->
                                    <div class="invalid-feedback d-block" id="errorMsg"></div>
                                </div>
                                

                            <button type="submit" class="btn-submit theme-btn" id="submitBtn">
                                <span class="btn-text">SEND AND CONTINUE</span>
                                    <span class="btn-loader d-none">
                                        <div class="beat-loader">
                                            <div class="beat"></div>
                                            <div class="beat"></div>
                                            <div class="beat"></div>
                                            <div class="beat"></div>
                                            <div class="beat"></div>
                                            <div class="beat"></div>
                                        </div>
                                    </span>
                            </button>
                        </form>

                        <p class="login-text">
                            Don't have an account? <a href="{{ route('signup.form') }}">Create account</a>
                        </p>
                    </div>
                </div>
            </div>    
        </div>
</section>

@endsection



@push('signup-script')
<script>

document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('loginForm');
    if (!form) return;

    const phoneInput = document.getElementById('phone');
    const errorBox = document.getElementById('errorMsg');
    const btn = document.getElementById('submitBtn');
    const btnText = btn.querySelector('.btn-text');
    const btnLoader = btn.querySelector('.btn-loader');

    /* 🔢 Numeric only */
    phoneInput.addEventListener('input', function () {
        this.value = this.value.replace(/\D/g, '');
        this.classList.remove('is-invalid');
        errorBox.innerText = '';
    });

    /* 🚀 Submit */
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const phone = phoneInput.value.trim();

        // Frontend validation
        if (!phone) {
            errorBox.innerText = 'Mobile number is required';
            phoneInput.classList.add('is-invalid');
            return;
        }

        if (phone.length !== 10) {
            errorBox.innerText = 'Enter a valid mobile number';
            phoneInput.classList.add('is-invalid');
            return;
        }

        // Show loader
        btn.disabled = true;
        btnText.classList.add('d-none');
        btnLoader.classList.remove('d-none');

        fetch(form.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: new FormData(form)
        })
        .then(async response => {
            const data = await response.json();

            if (!response.ok) {
                throw data;
            }

            // ✅ Success → redirect
            if (data.redirect) {
                window.location.href = data.redirect;
            }
        })
        .catch(error => {
            // Hide loader
            btn.disabled = false;
            btnText.classList.remove('d-none');
            btnLoader.classList.add('d-none');

            if (error.errors && error.errors.phone) {
                errorBox.innerText = error.errors.phone[0];
            } else {
                errorBox.innerText = error.message || 'Something went wrong';
            }
        });
    });
});

</script>    
@endpush