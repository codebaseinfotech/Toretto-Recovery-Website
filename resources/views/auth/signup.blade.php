@extends('layouts.main')

@section('title', 'SignUp')

@section('content')

{{-- SIGNUP SECTION --}}
<section class="signup-section">
        <div class="container">
            <div class="signup-wrapper row" data-aos="fade-up" data-aos-duration="500">
                <div class="col-lg-6 align-content-center">
                    <div class="left-container">
                        <img src="{{ asset('assets/images/Mobile login-pana (2) 1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-container">

                        <div class="section-heading" data-aos="fade-up" data-aos-duration="500">
                            <h2 class="section-title"><span>Create</span> Your Account</h2>
                            <p>Sign up to book fast and reliable vehicle pickup & drop services</p>
                        </div>

                        <form class="signup-card" id="signupForm" method="POST" action="{{ route('signup.register') }}" novalidate>
                            @csrf
                                <div class="form-group">
                                    <label>First Name</label>
                                    <div class="input-icon">
                                        <i class="fa-regular fa-user"></i>
                                        <input type="text" id="firstName" name="first_name" placeholder="Enter First name">
                                    </div>
                                    <div class="invalid-feedback d-block"></div>
                                </div>

                                <div class="form-group">
                                    <label>Last Name</label>
                                    <div class="input-icon">
                                        <i class="fa-regular fa-user"></i>
                                        <input type="text" id="lastName" name="last_name" placeholder="Enter Last name">
                                    </div>
                                    <div class="invalid-feedback d-block"></div>
                                </div>


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

                                        <input type="text" class="form-control" id="mobile" name="phone" placeholder="Enter your mobile number" maxlength="10" value="" readonly disabled>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Email Address (Optional)</label>
                                    <div class="input-icon">
                                        <i class="fa-regular fa-envelope"></i>
                                        <input type="email" id="email" name="email" placeholder="Enter Your Email Address">
                                    </div>
                                </div>


                            <button type="submit" class="btn-submit theme-btn" id="signupSubmitBtn">
                                <span class="btn-text">SIGN UP</span>
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
                            Already Have Account? <a href="{{ route('login') }}">Login</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
</section>

@if(session('otp-verify'))
<div class="toast-container position-fixed top-0 end-0 p-3 animate__animated animate__fadeInRight" style="z-index:1055; margin-top:10px;">
    <div id="successToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{ session('otp-verify') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var toastEl = document.getElementById('successToast');
    var toast = new bootstrap.Toast(toastEl);
    toast.show();
});
</script>
@endif


@endsection



@push('signup-script')
<script>
    // Define API base URL globally for use in the signup script
    window.API_BASE_URL = "{{ config('services.api.base_url') }}";
</script>
@endpush

@push('login-script')
<script>

// sign-up form validation
document.addEventListener('DOMContentLoaded', function () {

    // Populate phone number from localStorage if available
    const mobileInput = document.getElementById('mobile');
    if (mobileInput) {
        // First try to get phone from the phone_for_verification stored during login
        let phoneNumber = localStorage.getItem('phone_for_verification') || '';

        // If not found, try from user_data
        if (!phoneNumber) {
            const userData = JSON.parse(localStorage.getItem('user_data') || '{}');
            phoneNumber = userData.phone || '';
        }

        if (phoneNumber) {
            // Remove country code '971' and set the remaining digits
            const displayNumber = phoneNumber.replace(/^971/, '');
            mobileInput.value = displayNumber;
        }
    }

    const form = document.getElementById('signupForm');
    const firstName = document.getElementById('firstName');
    const lastName = document.getElementById('lastName');
    const mobileError = document.getElementById('errorMsg');

    const nameRegex = /^[A-Za-z\s]{2,}$/;

    /* ✅ Helpers */
    function showError(input, message) {
        const errorDiv = input.parentElement.nextElementSibling;
        if (errorDiv) errorDiv.textContent = message;
        input.classList.add('is-invalid');
    }

    function clearError(input) {
        const errorDiv = input.parentElement.nextElementSibling;
        if (errorDiv) errorDiv.textContent = '';
        input.classList.remove('is-invalid');
    }

    /* 🚀 Submit */
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        let valid = true;

        // First Name
        if (!firstName.value.trim()) {
            showError(firstName, 'First name is required');
            valid = false;
        } else if (!nameRegex.test(firstName.value)) {
            showError(firstName, 'Enter a valid first name');
            valid = false;
        } else {
            clearError(firstName);
        }

        // Last Name
        if (!lastName.value.trim()) {
            showError(lastName, 'Last name is required');
            valid = false;
        } else if (!nameRegex.test(lastName.value)) {
            showError(lastName, 'Enter a valid last name');
            valid = false;
        } else {
            clearError(lastName);
        }

        if (valid) {
            // Get phone number from localStorage (as input is disabled)
            let phone = localStorage.getItem('phone_for_verification') || '';

            // Define userData here to make it available in the fetch headers
            let userData = JSON.parse(localStorage.getItem('user_data') || '{}');

            // If not found in phone_for_verification, try user_data
            if (!phone) {
                phone = userData.phone || ('971' + mobileInput.value);
            }

            // Ensure phone has the country code prefix
            if (!phone.startsWith('971')) {
                phone = mobileInput.value;
            }

            // Show loader
            const submitBtn = document.getElementById('signupSubmitBtn');
            const btnText = submitBtn.querySelector('.btn-text');
            const btnLoader = submitBtn.querySelector('.btn-loader');

            if (btnText) btnText.classList.add('d-none');
            if (btnLoader) btnLoader.classList.remove('d-none');
            submitBtn.disabled = true;

            const apiBaseUrl = document.querySelector('meta[name="api-base-url"]')?.getAttribute('content') ||
                              document.querySelector('#api-base-url')?.value ||
                              window.API_BASE_URL ||
                              'https://larareactfreelancer.com/api';

            // Get country code from dial code element
            const countryCodeElement = document.getElementById('dialCode');
            const countryCode = countryCodeElement ? countryCodeElement.textContent.replace('+', '') : '971';

            // Get referral code
            const referralCode = document.getElementById('referralCode')?.value || '';

            window.ApiUtils.fetch(apiBaseUrl + '/v1/customer/register', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({
                    phone: phone,
                    first_name: firstName.value,
                    last_name: lastName.value,
                    email: document.getElementById('email').value,
                    referral_code: "",
                    country_code: countryCode
                })
            })
            .then(response => response.json())
            .then(apiData => {
                if (btnText) btnText.classList.remove('d-none');
                if (btnLoader) btnLoader.classList.add('d-none');
                submitBtn.disabled = false;

                if (apiData.status === true || apiData.data?.access_token) {
                    const token = apiData.data?.access_token || apiData.access_token;

                    // Store token in localStorage
                    if (token) {
                        localStorage.setItem('auth_token', token);

                        const userData = {
                            phone: phone,
                            first_name: firstName.value,
                            last_name: lastName.value,
                            email: document.getElementById('email').value
                        };
                        localStorage.setItem('user_data', JSON.stringify(userData));
                    }

                    // Show success toast
                    showToast('Registration successful!', 'success');

                    setTimeout(() => {
                        window.location.href = '{{ route("book.now") }}';
                    }, 1500);
                } else {
                    const errorMessage = apiData.message || apiData.error || 'Registration failed';
                    showToast(errorMessage, 'error');
                }
            })
            .catch(error => {
                // Hide loader
                if (btnText) btnText.classList.remove('d-none');
                if (btnLoader) btnLoader.classList.add('d-none');
                submitBtn.disabled = false;

                showToast('Network error. Please try again.', 'error');
                console.error('Registration error:', error);
            });
        }
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
        let toastTitle = message.includes('Registration') || message.toLowerCase().includes('register') ? 'Registration Status' :
                        message.toLowerCase().includes('success') ? 'Registration Success' :
                        message.toLowerCase().includes('welcome') ? 'Welcome' :
                        type === 'error' ? 'Registration Error' :
                        type === 'warning' ? 'Attention Required' :
                        type === 'info' ? 'Information' : 'Account Status';

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

</script>
@endpush
