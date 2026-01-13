@extends('layouts.main')

@section('title', 'Otp-Verify')

@section('content')

{{-- OTP VERIFY SECTION --}}
<section class="otp-section">
        <div class="container">
            <div class="otp-wrapper row wow fade-in-up-20">
                <div class="col-lg-6 align-content-center">
                    <div class="left-container">
                        <img src="{{ asset('assets/images/otp-verify.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 align-content-center">
                    <div class="right-container">                       
                        <div class="section-heading wow fade-in-up-20">
                            <h2 class="section-title">Verify Your <span> OTP </span></h2>
                            <p>We’ve sent a 6-digit verification code to your registered mobile number</p>
                        </div>

                        <form class="otp-card" id="OtpForm" method="POST" action="{{ route('otp.verify') }}" novalidate>
                            @csrf

                             <div class="otp-inputs">
                                <input type="text" maxlength="1" class="otp-input" id="otp1">
                                <input type="text" maxlength="1" class="otp-input" id="otp2">
                                <input type="text" maxlength="1" class="otp-input" id="otp3">
                                <input type="text" maxlength="1" class="otp-input" id="otp4">
                                <input type="text" maxlength="1" class="otp-input" id="otp5">
                                <input type="text" maxlength="1" class="otp-input" id="otp6">
                                <input type="hidden" name="otp" id="hiddenOtp">
                                {{-- Filled automatically from browser geolocation on page load --}}
                                <input type="hidden" name="latitude" id="latitude">
                                <input type="hidden" name="longitude" id="longitude">
                            </div>

                            @if ($errors->has('otp'))
                                <div class="text-danger text-center">
                                    {{ $errors->first('otp') }}
                                </div>
                            @endif

                            <div class="invalid-feedback d-block text-center" id="otpError"></div>

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
<div class="toast-container position-fixed top-0 end-0 p-3 wow animate__animated animate__fadeInRight" style="z-index: 1055; margin-top:10px;">
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
<div class="toast-container position-fixed top-0 end-0 p-3 wow animate__animated animate__fadeInRight" style="z-index: 1055; margin-top:10px;">
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
            errorMsg.textContent = 'Please enter the complete OTP';
            return;
        }

        errorMsg.textContent = '';
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

        // Now submit the form normally
        otpForm.submit();
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

});
</script>
@endpush