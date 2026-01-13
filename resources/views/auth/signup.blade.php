@extends('layouts.main')

@section('title', 'SignUp')

@section('content')

{{-- SIGNUP SECTION --}}
<section class="signup-section">
        <div class="container">
            <div class="signup-wrapper row wow fade-in-up-20">
                <div class="col-lg-6 align-content-center">
                    <div class="left-container">
                        <img src="{{ asset('assets/images/Mobile login-pana (2) 1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-container">
                        
                        <div class="section-heading wow fade-in-up-20">
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

                                        <input type="text" class="form-control" id="mobile" name="phone" placeholder="Enter your mobile number" maxlength="10" value="{{ preg_replace('/^971/', '', session('phone')) }}" readonly> 
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Email Address (Optional)</label>
                                    <div class="input-icon">
                                        <i class="fa-regular fa-envelope"></i>
                                        <input type="email" id="email" name="email" placeholder="Enter Your Email Address">
                                    </div>
                                </div>
                                

                            <button type="submit" class="btn-submit theme-btn">SIGN UP</button>
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
<div class="toast-container position-fixed top-0 end-0 p-3 wow animate__animated animate__fadeInRight" style="z-index:1055; margin-top:10px;">
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



@push('login-script')
<script>

// sign-up form validation
document.addEventListener('DOMContentLoaded', function () {

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
            form.submit(); // enable backend submit
        }
    });

});

</script>    
@endpush