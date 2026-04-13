@extends('layouts.main')

@section('title', 'Login | Car Recovery Dubai | 24/7 Towing & Roadside Assistance UAE')

@section('meta_description', 'Sign in to your Toretto Recovery account to access 24/7 car recovery, vehicle towing, and emergency roadside assistance services across Dubai and the UAE.')

@section('content')

{{-- LOGIN SECTION --}}
<section class="login-section">
        <div class="container">
            <div class="login-wrapper row" data-aos="fade-up" data-aos-duration="500">
                <div class="col-lg-6 align-content-center">
                    <div class="left-container">
                        <img src="{{ asset('assets/images/login-page.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 align-content-center">
                    <div class="right-container">

                        <div class="section-heading" data-aos="fade-up" data-aos-duration="500">
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

                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your 9-digit mobile number" maxlength="12" inputmode="numeric" autocomplete="tel-national">
                                        <input type="hidden" name="base_url" value="{{ request()->has('x') ? 'x=' . request('x') : '' }}">
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
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection



@push('login-script')
<script>

document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('loginForm');
    if (!form) return;

    const phoneInput = document.getElementById('phone');
    const errorBox = document.getElementById('errorMsg');
    const btn = document.getElementById('submitBtn');
    const btnText = btn.querySelector('.btn-text');
    const btnLoader = btn.querySelector('.btn-loader');

    function normalizePhone(value) {
        let digits = value.replace(/\D/g, '');

        if (digits.startsWith('971')) {
            digits = digits.slice(3);
        }

        if (digits.length > 9 && digits.startsWith('0')) {
            digits = digits.slice(1);
        }

        return digits.slice(0, 9);
    }

    function isValidUaeMobile(value) {
        return /^5\d{8}$/.test(value);
    }

    function setLoading(isLoading) {
        btn.disabled = isLoading;
        btnText.classList.toggle('d-none', isLoading);
        btnLoader.classList.toggle('d-none', !isLoading);
    }

    /* Numeric only */
    phoneInput.addEventListener('input', function () {
        this.value = normalizePhone(this.value);
        this.classList.remove('is-invalid');
        errorBox.innerText = '';
    });

    /* Submit */
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const phone = phoneInput.value.trim();
        const normalizedPhone = normalizePhone(phone);
        const base_url = document.querySelector('input[name="base_url"]').value;

        if (!phone) {
            errorBox.innerText = 'Mobile number is required';
            phoneInput.classList.add('is-invalid');
            return;
        }

        if (!isValidUaeMobile(normalizedPhone)) {
            errorBox.innerText = 'Enter a valid UAE mobile number (9 digits starting with 5)';
            phoneInput.classList.add('is-invalid');
            return;
        }

        setLoading(true);

        window.ApiUtils.fetch(form.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({
                phone: normalizedPhone,
                base_url: base_url,
                _token: document.querySelector('input[name="_token"]').value
            })
        })
        .then(async response => {
            const data = await response.json().catch(() => ({}));

            if (!response.ok || data.status !== true) {
                throw new Error(data.message || 'Failed to send OTP. Please try again.');
            }

            return data;
        })
        .then(data => {
            setLoading(false);

            const verifiedPhone = data?.data?.phone || normalizedPhone;

            localStorage.setItem('phone_for_verification', verifiedPhone);
            localStorage.setItem('otp_resend_available_at', String(Date.now() + 30000));
            showToast(data.message, 'success');

            if (data.redirect) {
                setTimeout(() => {
                    window.location.href = data.redirect;
                }, 1500);
            }
        })
        .catch(error => {
            setLoading(false);

            const message = error.message || 'Network error. Please try again.';
            showToast(message, 'error');
            errorBox.innerText = message;
            phoneInput.classList.add('is-invalid');
        });
    });

    // SweetAlert2 toast notification function
    function showToast(message, type = 'info') {
        // Map our types to SweetAlert2 types
        let swalIcon = type === 'error' ? 'error' : type === 'warning' ? 'warning' : type === 'info' ? 'info' : 'success';

        // Use white background as requested
        let background = '#FFFFFF';
        let color;
        switch(type) {
            case 'error':
                color = '#dc3545'; // Red for error
                break;
            case 'warning':
                color = '#ffc107'; // Yellow for warning
                break;
            case 'info':
                color = '#17a2b8'; // Blue for info
                break;
            default: // success
                color = '#28a745'; // Green for success
        }

        // Customize title based on the page and action
        let toastTitle = message.includes('OTP') ? 'OTP Verification' :
                        message.toLowerCase().includes('success') ? 'Success' :
                        message.toLowerCase().includes('welcome') ? 'Welcome Back' :
                        type === 'error' ? 'Login Error' :
                        type === 'warning' ? 'Attention Required' :
                        type === 'info' ? 'Information' : 'Login Status';

        Swal.fire({
            toast: true,
            icon: swalIcon,
            title: toastTitle,
            text: message,
            animation: true,
            position: 'top-end',
            background: background,
            color: color,
            timer: 5000,
            timerProgressBar: true,
            showConfirmButton: false,
            width: '400px',
            padding: '20px',
            customClass: {
                popup: 'custom-toast-popup',
                title: 'custom-toast-title',
                icon: 'custom-toast-icon',
            },
            didOpen: () => {
                const progressBar = Swal.getTimerProgressBar();
                if(progressBar) {
                    // Set progress bar color based on type
                    switch(type) {
                        case 'error':
                            progressBar.style.backgroundColor = '#dc3545'; // Red for error
                            break;
                        case 'warning':
                            progressBar.style.backgroundColor = '#ffc107'; // Yellow for warning
                            break;
                        case 'info':
                            progressBar.style.backgroundColor = '#17a2b8'; // Blue for info
                            break;
                        default: // success
                            progressBar.style.backgroundColor = '#28a745'; // Green for success
                    }
                }
            }
        });
    }
});

</script>
@endpush
