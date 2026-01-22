<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="api-token" content="{{ session('token') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <title>@yield('title', 'Toretto Recovery')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        .custom-toast-popup {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            font-family: 'Avenir', sans-serif;
            background: white !important;
        }

        .custom-toast-title {
            font-weight: bold;
            font-size: 18px;
            text-align: center;
            margin-bottom: 10px;
        }

        .custom-toast-icon {
            font-size: 20px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

@include('partials.topbar')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const token = localStorage.getItem('auth_token');

        if (token) {
            document.getElementById('admin-header').style.display = 'block';
            document.getElementById('auth-header').style.display = 'none';
        } else {
            document.getElementById('admin-header').style.display = 'none';
            document.getElementById('auth-header').style.display = 'block';
        }
    });
</script>

<div id="admin-header" style="display:none;">
    @include('partials.admin-header')
</div>

<div id="auth-header" style="display:none;">
    @include('partials.auth-header')
</div>


{{-- PAGE CONTENT --}}
@yield('content')

@include('partials.footer')

{{-- JS --}}
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
@stack('my-booking-script')
@stack('map-script')
@stack('signup-script')
@stack('login-script')
@stack('otp-script')

<script>
    AOS.init();

    window.ApiUtils = {
        deviceId: '123456789',
        deviceType: 'Web',
        language: 'en',
        latitude: null,
        longitude: null,
        locationPermissionGranted: false,

        async getCurrentLocation() {
            return new Promise((resolve, reject) => {
                if (!navigator.geolocation) {
                    reject(new Error('Geolocation is not supported by this browser.'));
                    return;
                }

                if (this.latitude !== null && this.longitude !== null) {
                    resolve({ latitude: this.latitude, longitude: this.longitude });
                    return;
                }

                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        this.latitude = position.coords.latitude;
                        this.longitude = position.coords.longitude;
                        this.locationPermissionGranted = true;
                        resolve({ latitude: this.latitude, longitude: this.longitude });
                    },
                    (error) => {
                        console.warn('Geolocation error:', error);
                        this.latitude = 0;
                        this.longitude = 0;
                        resolve({ latitude: 0, longitude: 0 });
                    },
                    {
                        enableHighAccuracy: true,
                        timeout: 10000,
                        maximumAge: 300000
                    }
                );
            });
        },

        // Get common API headers
        async getCommonHeaders(additionalHeaders = {}) {
            // Get location first
            await this.getCurrentLocation();

            const baseHeaders = {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'Language': this.language,
                'DeviceType': this.deviceType,
                'DeviceId': this.deviceId,
                'Latitude': this.latitude.toString(),
                'Longitude': this.longitude.toString()
            };

            // Add authorization if token exists
            const token = localStorage.getItem('auth_token');
            if (token) {
                baseHeaders['Authorization'] = `Bearer ${token}`;
            }

            // Merge additional headers
            return { ...baseHeaders, ...additionalHeaders };
        },

        // Enhanced fetch wrapper
        async fetch(url, options = {}) {
            const headers = await this.getCommonHeaders(options.headers || {});

            return fetch(url, {
                ...options,
                headers: headers
            });
        }
    };

    // Check if user is logged in and hide sign-in button
    document.addEventListener('DOMContentLoaded', function() {
        const token = localStorage.getItem('auth_token');
        const signinButton = document.querySelector('.signin-button');

        if (token && signinButton) {
            // Add class to hide sign-in button
            document.body.classList.add('hide-signin');
        }

        // AJAX Logout
        const logoutLink = document.getElementById('ajaxLogout');
        if (logoutLink) {
            logoutLink.addEventListener('click', function(e) {
                e.preventDefault();

                window.ApiUtils.fetch('{{ route("logout.ajax") }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    })
                })
                .then(response => response.json())
                .then(data => {
                    localStorage.removeItem('auth_token');
                    localStorage.removeItem('user_data');

                    window.location.reload();
                })
                .catch(error => {
                    console.error('Logout error:', error);
                    // Fallback to traditional logout
                    window.location.href = '{{ route("logout") }}';
                });
            });
        }
    });
</script>

</body>
</html>
