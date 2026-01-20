@extends('layouts.main')

@section('title', 'Login')

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

        if (!phone) {
            errorBox.innerText = 'Mobile number is required';
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
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({
                phone: phone,
                _token: document.querySelector('input[name="_token"]').value
            })
        })
        .then(response => response.json())
        .then(data => {
            // Hide loader
            btn.disabled = false;
            btnText.classList.remove('d-none');
            btnLoader.classList.add('d-none');

            if (data.status === true) {
                // Show success toast
                showToast(data.message, 'success');
                
                // Redirect to OTP page
                if (data.redirect) {
                    // Store the phone number in localStorage for OTP verification
                    const phoneWithPrefix = '971' + phoneInput.value.trim();
                    localStorage.setItem('phone_for_verification', phoneWithPrefix);
                    
                    setTimeout(() => {
                        window.location.href = data.redirect;
                    }, 1500);
                }
            } else {
                // Show error toast
                showToast((data.message || 'Something went wrong'), 'error');
                errorBox.innerText = data.message || 'Something went wrong';
                phoneInput.classList.add('is-invalid');
            }
        })
        .catch(error => {
            // Hide loader
            btn.disabled = false;
            btnText.classList.remove('d-none');
            btnLoader.classList.add('d-none');
            
            showToast('Network error. Please try again.', 'error');
            errorBox.innerText = 'Network error. Please try again.';
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