@extends('layouts.main')

@section('title', 'OTP Verification | Car Recovery Dubai | 24/7 Towing & Roadside Assistance UAE')

@section('meta_description', 'Verify your account with OTP to access Toretto Recovery's 24/7 car recovery, vehicle towing, and emergency roadside assistance services across Dubai and the UAE.')

@section('content')

{{-- OTP VERIFY SECTION --}}
<section class="otp-section">
        <div class="container">
            <div class="otp-wrapper row" data-aos="fade-up" data-aos-duration="500">
                <div class="col-lg-6 align-content-center">
                    <div class="left-container">
                        <img src="{{ asset('assets/images/otp-verify.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 align-content-center">
                    <div class="right-container">
                        <div class="section-heading" data-aos="fade-up" data-aos-duration="500">
                            <h2 class="section-title">Verify Your <span> OTP </span></h2>
                            <p>We’ve sent a 6-digit verification code to your registered mobile number</p>
                        </div>

                        <form class="otp-card" id="OtpForm" method="POST" action="{{ route('otp.verify') }}" novalidate>
                            @csrf

                             <div class="otp-inputs">
                                <input type="text" maxlength="1" class="otp-input" id="otp1" inputmode="numeric" pattern="[0-9]*">
                                <input type="text" maxlength="1" class="otp-input" id="otp2" inputmode="numeric" pattern="[0-9]*">
                                <input type="text" maxlength="1" class="otp-input" id="otp3" inputmode="numeric" pattern="[0-9]*">
                                <input type="text" maxlength="1" class="otp-input" id="otp4" inputmode="numeric" pattern="[0-9]*">
                                <input type="text" maxlength="1" class="otp-input" id="otp5" inputmode="numeric" pattern="[0-9]*">
                                <input type="text" maxlength="1" class="otp-input" id="otp6" inputmode="numeric" pattern="[0-9]*">
                                <input type="hidden" name="otp" id="hiddenOtp">
                                {{-- Filled automatically from browser geolocation on page load --}}
                                <input type="hidden" name="latitude" id="latitude">
                                <input type="hidden" name="longitude" id="longitude">
                            </div>

                            <div id="otpError" class="error-message text-danger mt-2 text-center" style="min-height: 24px;"></div>

                            <button type="submit" class="btn-submit theme-btn" id="otpSubmitBtn">
                                <span class="btn-text">VERIFY AND CONTINUE</span>
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

                        <p class="resend-otp-text">
                            Resend OTP in <span id="timer">00:30</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
</section>


@if(session('otp-success'))
<div class="toast-container position-fixed top-0 end-0 p-3 animate__animated animate__fadeInRight" style="z-index: 1055; margin-top:10px;">
    <div id="successToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{ session('otp-success') }}
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

@if ($errors->any())
<div class="toast-container position-fixed top-0 end-0 p-3 animate__animated animate__fadeInRight" style="z-index: 1055; margin-top:10px;">
    <div id="errorToast" class="toast align-items-center text-bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{ $errors->first() }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var toastEl = document.getElementById('errorToast');
    if (toastEl) {
        var toast = new bootstrap.Toast(toastEl);
        toast.show();
    }
});
</script>
@endif


@endsection

@push('otp-script')
<script>
// otp-verify page

document.addEventListener('DOMContentLoaded', function () {

    const otpForm = document.getElementById('OtpForm');
    const inputs = otpForm.querySelectorAll('.otp-input');
    const errorMsg = document.getElementById('otpError');
    const timerEl = document.getElementById('timer');
    const latInput = document.getElementById('latitude');
    const lngInput = document.getElementById('longitude');
    const otpBtn = document.getElementById('otpSubmitBtn');
    const otpBtnText = otpBtn ? otpBtn.querySelector('.btn-text') : null;
    const otpBtnLoader = otpBtn ? otpBtn.querySelector('.btn-loader') : null;
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            position => {
                if (latInput && lngInput) {
                    latInput.value = position.coords.latitude;
                    lngInput.value = position.coords.longitude;
                }
            },
            error => {
                console.warn('Geolocation error:', error);
            },
            {
                enableHighAccuracy: true,
                timeout: 10000,
                maximumAge: 60000
            }
        );
    } else {
        console.warn('Geolocation is not supported by this browser.');
    }

    /* 🔢 Numeric only + auto focus */
    inputs.forEach((input, index) => {

        input.addEventListener('input', () => {
            input.value = input.value.replace(/\D/g, '');

            if (input.value && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
        });

        input.addEventListener('keydown', e => {
            if (e.key === 'Backspace' && !input.value && index > 0) {
                inputs[index - 1].focus();
            }
        });
    });

    /* 🚀 Submit OTP */
    otpForm.addEventListener('submit', function (e) {
        e.preventDefault();

        let otp = '';
        let valid = true;

        inputs.forEach(input => {
            if (!input.value) {
                input.classList.add('is-invalid');
                valid = false;
            } else {
                input.classList.remove('is-invalid');
                otp += input.value;
            }
        });

        if (!valid) {
            if (errorMsg) {
                errorMsg.textContent = 'Please enter the complete OTP';
            }
            return;
        }

        if (errorMsg) {
            errorMsg.textContent = '';
        }
        // Add hidden input if not exists
        if (!document.getElementById('hiddenOtp')) {
            let hiddenOtpInput = document.createElement('input');
            hiddenOtpInput.type = 'hidden';
            hiddenOtpInput.name = 'otp';
            hiddenOtpInput.id = 'hiddenOtp';
            otpForm.appendChild(hiddenOtpInput);
        }

        // Set the combined OTP in hidden input
        document.getElementById('hiddenOtp').value = otp;

        // Show loader on button while submitting
        if (otpBtn && otpBtnText && otpBtnLoader) {
            otpBtn.disabled = true;
            otpBtnText.classList.add('d-none');
            otpBtnLoader.classList.remove('d-none');
        }

        const phoneFromStorage = localStorage.getItem('phone_for_verification') || '';

        // AJAX submit
        window.ApiUtils.fetch(otpForm.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                'X-Requested-With': 'XMLHttpRequest',
                'X-Phone-Verification': phoneFromStorage
            },
            body: JSON.stringify({
                phone: phoneFromStorage,
                otp: otp,
                latitude: latInput ? latInput.value : null,
                longitude: lngInput ? lngInput.value : null,
                _token: document.querySelector('input[name="_token"]').value
            })
        })
        .then(response => response.json())
        .then(data => {
            // Hide loader
            if (otpBtn && otpBtnText && otpBtnLoader) {
                otpBtn.disabled = false;
                otpBtnText.classList.remove('d-none');
                otpBtnLoader.classList.add('d-none');
            }

            if (data.status === true) {
                // Store token and user data in localStorage
                if (data.token) {
                    localStorage.setItem('auth_token', data.token);
                    localStorage.setItem('user_data', JSON.stringify(data.user || {}));
                }

                // Show success toast
                showToast(data.message, 'success');
                console.log(data.message);
                console.log(data.redirect);
                // Redirect
                if (data.redirect) {
                    // Ensure token is stored in localStorage before redirect
                    if (data.token) {
                        localStorage.setItem('auth_token', data.token);
                        localStorage.setItem('user_data', JSON.stringify(data.user || {}));
                    }

                    // Wait for a moment to ensure everything is set, then redirect
                    setTimeout(() => {
                        window.location.href = data.redirect;
                    }, 1500);
                }
            } else {
                // Show error toast
                showToast((data.message || 'Invalid OTP'), 'error');
                if (errorMsg) {
                    errorMsg.textContent = data.message || 'Invalid OTP';
                }

                // Clear OTP fields
                inputs.forEach(input => {
                    input.value = '';
                    input.classList.add('is-invalid');
                });
                inputs[0].focus();
            }
        })
        .catch(error => {
            // Hide loader
            if (otpBtn && otpBtnText && otpBtnLoader) {
                otpBtn.disabled = false;
                otpBtnText.classList.remove('d-none');
                otpBtnLoader.classList.add('d-none');
            }

            showToast('Network error. Please try again.', 'error');
            if (errorMsg) {
                errorMsg.textContent = 'Network error. Please try again.';
            }
        });
    });

    /* ⏱ Resend OTP Timer */
    let time = 30;
    const interval = setInterval(() => {
        time--;

        let sec = time < 10 ? '0' + time : time;
        timerEl.textContent = '00:' + sec;

        if (time <= 0) {
            clearInterval(interval);
            timerEl.textContent = 'Resend OTP';
            timerEl.style.cursor = 'pointer';

            timerEl.addEventListener('click', () => {
                location.reload();
            });
        }
    }, 1000);

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
                        message.toLowerCase().includes('success') ? 'Verification Success' :
                        message.toLowerCase().includes('login') ? 'Login Status' :
                        type === 'error' ? 'Verification Error' :
                        type === 'warning' ? 'Attention Required' :
                        type === 'info' ? 'Information' : 'OTP Status';

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
