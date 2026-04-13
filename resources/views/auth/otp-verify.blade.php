@extends('layouts.main')

@section('title', 'OTP Verification | Car Recovery Dubai | 24/7 Towing & Roadside Assistance UAE')

@section('meta_description', 'Verify your account with OTP to access Toretto Recovery\'s 24/7 car recovery, vehicle towing, and emergency roadside assistance services across Dubai and the UAE.')

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
                        <p>We've sent a 6-digit verification code to your registered mobile number</p>
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
                            <input type="hidden" name="latitude" id="latitude">
                            <input type="hidden" name="longitude" id="longitude">
                        </div>

                        <input type="hidden" name="base_url" value="{{ request()->has('x') ? 'x=' . request('x') : '' }}">
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

                    <div class="resend-otp-text">
                        <span id="resendOtpCountdown">Resend OTP in <span id="timer">00:30</span></span>
                        <button type="button" id="resendOtpBtn" class="btn btn-link p-0 d-none" style="color: #d70006;">Resend OTP</button>
                    </div>
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
document.addEventListener('DOMContentLoaded', function () {
    const otpForm = document.getElementById('OtpForm');
    if (!otpForm) {
        return;
    }

    const inputs = otpForm.querySelectorAll('.otp-input');
    const errorMsg = document.getElementById('otpError');
    const timerEl = document.getElementById('timer');
    const resendOtpBtn = document.getElementById('resendOtpBtn');
    const resendOtpCountdown = document.getElementById('resendOtpCountdown');
    const latInput = document.getElementById('latitude');
    const lngInput = document.getElementById('longitude');
    const otpBtn = document.getElementById('otpSubmitBtn');
    const otpBtnText = otpBtn ? otpBtn.querySelector('.btn-text') : null;
    const otpBtnLoader = otpBtn ? otpBtn.querySelector('.btn-loader') : null;
    const resendUrl = @json(route('login.send'));
    const resendCooldownSeconds = 30;
    const resendStorageKey = 'otp_resend_available_at';

    let resendInterval = null;

    function formatSeconds(totalSeconds) {
        const safeSeconds = Math.max(0, totalSeconds);
        const minutes = String(Math.floor(safeSeconds / 60)).padStart(2, '0');
        const seconds = String(safeSeconds % 60).padStart(2, '0');

        return `${minutes}:${seconds}`;
    }

    function setOtpButtonLoading(isLoading) {
        if (!otpBtn || !otpBtnText || !otpBtnLoader) {
            return;
        }

        otpBtn.disabled = isLoading;
        otpBtnText.classList.toggle('d-none', isLoading);
        otpBtnLoader.classList.toggle('d-none', !isLoading);
    }

    function toggleResendState(canResend) {
        if (resendOtpCountdown) {
            resendOtpCountdown.classList.toggle('d-none', canResend);
        }

        if (resendOtpBtn) {
            resendOtpBtn.classList.toggle('d-none', !canResend);
            resendOtpBtn.disabled = !canResend;
        }
    }

    function stopResendTimer() {
        if (resendInterval) {
            clearInterval(resendInterval);
            resendInterval = null;
        }
    }

    function startResendTimer(durationInSeconds = resendCooldownSeconds) {
        const availableAt = Date.now() + (durationInSeconds * 1000);
        localStorage.setItem(resendStorageKey, String(availableAt));
        stopResendTimer();
        toggleResendState(false);

        const updateTimer = () => {
            const remainingSeconds = Math.ceil((availableAt - Date.now()) / 1000);

            if (remainingSeconds <= 0) {
                stopResendTimer();
                localStorage.removeItem(resendStorageKey);
                if (timerEl) {
                    timerEl.textContent = formatSeconds(0);
                }
                toggleResendState(true);
                return;
            }

            if (timerEl) {
                timerEl.textContent = formatSeconds(remainingSeconds);
            }
        };

        updateTimer();
        resendInterval = setInterval(updateTimer, 1000);
    }

    function restoreResendTimer() {
        const storedValue = Number(localStorage.getItem(resendStorageKey) || 0);
        const remainingSeconds = Math.ceil((storedValue - Date.now()) / 1000);

        if (remainingSeconds > 0) {
            startResendTimer(remainingSeconds);
            return;
        }

        localStorage.removeItem(resendStorageKey);
        if (timerEl) {
            timerEl.textContent = formatSeconds(resendCooldownSeconds);
        }
        toggleResendState(true);
    }

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

        document.getElementById('hiddenOtp').value = otp;
        setOtpButtonLoading(true);

        const phoneFromStorage = localStorage.getItem('phone_for_verification') || '';
        const csrfToken = document.querySelector('input[name="_token"]');
        const baseUrlInput = document.querySelector('input[name="base_url"]');

        window.ApiUtils.fetch(otpForm.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken ? csrfToken.value : '',
                'X-Requested-With': 'XMLHttpRequest',
                'X-Phone-Verification': phoneFromStorage
            },
            body: JSON.stringify({
                phone: phoneFromStorage,
                otp: otp,
                base_url: baseUrlInput ? baseUrlInput.value : '',
                latitude: latInput ? latInput.value : null,
                longitude: lngInput ? lngInput.value : null,
                _token: csrfToken ? csrfToken.value : ''
            })
        })
        .then(response => response.json())
        .then(data => {
            setOtpButtonLoading(false);

            if (data.status === true) {
                if (data.token) {
                    localStorage.setItem('auth_token', data.token);
                    localStorage.setItem('user_data', JSON.stringify(data.user || {}));
                }

                showToast(data.message, 'success');

                if (data.redirect) {
                    setTimeout(() => {
                        window.location.href = data.redirect;
                    }, 1500);
                }
            } else {
                showToast(data.message || 'Invalid OTP', 'error');

                if (errorMsg) {
                    errorMsg.textContent = data.message || 'Invalid OTP';
                }

                inputs.forEach(input => {
                    input.value = '';
                    input.classList.add('is-invalid');
                });

                if (inputs[0]) {
                    inputs[0].focus();
                }
            }
        })
        .catch(() => {
            setOtpButtonLoading(false);
            showToast('Network error. Please try again.', 'error');

            if (errorMsg) {
                errorMsg.textContent = 'Network error. Please try again.';
            }
        });
    });

    restoreResendTimer();

    if (resendOtpBtn) {
        resendOtpBtn.addEventListener('click', function () {
            const phoneFromStorage = localStorage.getItem('phone_for_verification') || '';
            const baseUrlInput = document.querySelector('input[name="base_url"]');
            const csrfToken = document.querySelector('input[name="_token"]');

            if (!phoneFromStorage) {
                showToast('Phone number not found. Please go back and try again.', 'error');
                return;
            }

            resendOtpBtn.disabled = true;

            window.ApiUtils.fetch(resendUrl, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken ? csrfToken.value : '',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({
                    phone: phoneFromStorage,
                    base_url: baseUrlInput ? baseUrlInput.value : '',
                    _token: csrfToken ? csrfToken.value : ''
                })
            })
            .then(async response => {
                const data = await response.json().catch(() => ({}));

                if (!response.ok || data.status !== true) {
                    throw new Error(data.message || 'Failed to resend OTP. Please try again.');
                }

                return data;
            })
            .then(data => {
                showToast(data.message || 'OTP sent successfully.', 'success');

                inputs.forEach(input => {
                    input.value = '';
                    input.classList.remove('is-invalid');
                });

                if (errorMsg) {
                    errorMsg.textContent = '';
                }

                if (inputs[0]) {
                    inputs[0].focus();
                }

                startResendTimer(resendCooldownSeconds);
            })
            .catch(error => {
                resendOtpBtn.disabled = false;
                toggleResendState(true);
                showToast(error.message || 'Failed to resend OTP. Please try again.', 'error');
            });
        });
    }

    function showToast(message, type = 'info') {
        let swalIcon = type === 'error' ? 'error' : type === 'warning' ? 'warning' : type === 'info' ? 'info' : 'success';
        let background = '#FFFFFF';
        let color;

        switch (type) {
            case 'error':
                color = '#dc3545';
                break;
            case 'warning':
                color = '#ffc107';
                break;
            case 'info':
                color = '#17a2b8';
                break;
            default:
                color = '#28a745';
        }

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
                if (progressBar) {
                    switch (type) {
                        case 'error':
                            progressBar.style.backgroundColor = '#dc3545';
                            break;
                        case 'warning':
                            progressBar.style.backgroundColor = '#ffc107';
                            break;
                        case 'info':
                            progressBar.style.backgroundColor = '#17a2b8';
                            break;
                        default:
                            progressBar.style.backgroundColor = '#28a745';
                    }
                }
            }
        });
    }
});
</script>
@endpush
