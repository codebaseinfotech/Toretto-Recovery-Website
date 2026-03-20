<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="api-token" content="{{ session('token') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @php
        $socketHost = app()->environment('production')
            ? config('services.socket.live_url')
            : config('services.socket.dev_url');
        $socketHost = $socketHost ?: config('services.socket.url');
        $socketHost = preg_replace('#/socket/?$#', '', (string) $socketHost);
    @endphp
    <meta name="socket-url" content="{{ $socketHost }}">
    <meta name="socket-force-polling"
        content="{{ config('services.socket.force_polling') ? 'true' : 'false' }}">

    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <title>@yield('title', 'Car Recovery Dubai | 24/7 Towing & Roadside Assistance UAE')</title>
    <meta name="api-base-url" content="{{ config('services.api.base_url') }}">
    <meta name="description" content="@yield('meta_description', 'Reliable 24/7 car recovery, vehicle towing, and emergency roadside assistance across Dubai and the UAE. Fast response, safe transport, affordable rates — call now!')">
    @yield('head')
    <meta property="og:title" content="@yield('title', 'Car Recovery Dubai | 24/7 Towing & Roadside Assistance UAE')">
    <meta property="og:description" content="@yield('meta_description', 'Reliable 24/7 car recovery and towing across Dubai.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="keywords" content="@yield('meta_keywords', 'car recovery Dubai, towing service Dubai, roadside assistance Dubai')">

    <meta name="robots" content="index, follow">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/css/style.css') }}?v={{ filemtime(public_path('assets/css/style.css')) }}">
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
    <style>
        .apply-btn {
            display: inline-block;
            font-size: 14px;
            color: #fff;
            padding: 14px 20px;
            transition: all 0.5s ease;
            text-transform: uppercase;
            position: relative;
            border-radius: 8px;
            font-weight: 600;
            letter-spacing: 1px;
            cursor: pointer;
            text-align: center;
            overflow: hidden;
            border: none;
            background: #000;
            box-shadow: 0 0 40px 5px rgb(0 0 0 / 5%);
            z-index: 1;
            text-decoration: none;
            transform: translateY(0);
        }

        .apply-btn::before {
            position: absolute;
            content: "";
            top: 0px;
            left: 0px;
            right: 0px;
            bottom: 0px;
            transform: scaleY(0);
            z-index: -1;
            background: #d70006;
            transition: 0.5s ease-in-out;
        }

        .apply-btn:hover::before,
        .apply-btn:focus::before,
        .apply-btn:active::before {
            transform: scaleY(1);
        }

        .apply-btn:hover,
        .apply-btn:focus,
        .apply-btn:active {
            color: #fff !important;
            text-decoration: none;
            transform: translateY(-2px) scale(1.02);
        }

        .apply-btn:focus {
            outline: none;
        }
        .header-actions .apply-btn {
            padding: 9px 20px !important;
        }
        @media (max-width: 767px) {
            .apply-btn {
                font-size: 12px !important;
                padding: 14px 10px !important;
            }
        }
    </style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-62X9L82MBP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-62X9L82MBP');
    </script>
    {{-- SEO / SCHEMA GOES HERE HEAD UNDER BAR --}}
    {{-- @yield('schema') --}}
</head>

<body>

    @include('partials.topbar')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
    <script>
        window.DRIVERS_SOCKET_CONFIG = @json([
            'url' => $socketHost,
            'path' => config('services.socket.path'),
            'namespace' => config('services.socket.namespace'),
            'room' => config('services.socket.room'),
            'join_event' => config('services.socket.join_event'),
            'force_polling' => (bool) config('services.socket.force_polling'),
        ]);
    </script>
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
                        resolve({
                            latitude: this.latitude,
                            longitude: this.longitude
                        });
                        return;
                    }

                    navigator.geolocation.getCurrentPosition(
                        (position) => {
                            this.latitude = position.coords.latitude;
                            this.longitude = position.coords.longitude;
                            this.locationPermissionGranted = true;
                            resolve({
                                latitude: this.latitude,
                                longitude: this.longitude
                            });
                        },
                        (error) => {
                            console.warn('Geolocation error:', error);
                            this.latitude = 0;
                            this.longitude = 0;
                            resolve({
                                latitude: 0,
                                longitude: 0
                            });
                        }, {
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
                return {
                    ...baseHeaders,
                    ...additionalHeaders
                };
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
    </script>
    <script>
        (function() {
            function getAuthToken() {
                const tokens = (localStorage.getItem('auth_token') || '').trim();
                return tokens;
            }

            function getApiBaseUrl() {
                const el = document.querySelector('meta[name="api-base-url"]');
                const baseUrl = el ? (el.getAttribute('content') || '').trim() : '';
                return baseUrl;
            }

            async function callModifyLastLogin() {

                const tokens = getAuthToken();
                if (!tokens) {
                    clearAuthStorage();
                    return;
                }

                const baseUrl = (getApiBaseUrl() || '').replace(/\/$/, '');
                if (!baseUrl) {
                    clearAuthStorage();
                    return;
                }

                const apiUrl = `${baseUrl}/v1/modify-last-login`;

                try {
                    const res = await fetch(apiUrl, {
                        method: 'POST',
                        headers: {
                            'Authorization': 'Bearer ' + tokens,
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                        },
                        body: JSON.stringify({
                            role: 'customer'
                        }),
                        cache: 'no-store',
                    });

                    const responseText = await res.text();

                    if (res.status === 401) {
                        clearAuthStorage();
                        window.location.href = "{{ route('logout') }}";
                        return;
                    }
                } catch (e) {
                    console.log('[modify-last-login] error:', error);
                    clearAuthStorage();
                }
            }

            document.addEventListener('DOMContentLoaded', function() {
                callModifyLastLogin();
            });
            /* STORAGE CLEAR FUNCTION */
            function clearAuthStorage() {

                localStorage.removeItem('auth_token');
                localStorage.removeItem('user');
                sessionStorage.clear();

            }
        })();
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const API_URL = "{{ config('services.api.base_url') }}";
            const signinBtn = document.querySelector('.signin-button');

            const logoutNavItem = document.getElementById('logoutItem');
            const logoutDropdownItem = document.getElementById('logoutDropdownItem');
            const logoutLinks = document.querySelectorAll('.ajaxLogout');

            let alreadyLoggingOut = false;
            let sessionInterval = null;

            function getApiToken() {
                return (localStorage.getItem('auth_token') || '').trim();
            }

            function setAuthUI(isLoggedIn) {
                if (logoutNavItem) {
                    logoutNavItem.classList.toggle('d-none', !isLoggedIn);
                }

                if (logoutDropdownItem) {
                    logoutDropdownItem.classList.toggle('d-none', !isLoggedIn);
                }

                if (signinBtn) {
                    signinBtn.classList.toggle('d-none', isLoggedIn);
                }
            }

            function clearSessionInterval() {
                if (sessionInterval) {
                    clearInterval(sessionInterval);
                    sessionInterval = null;
                }
            }

            function logoutUser(redirectTo = "/login") {
                if (alreadyLoggingOut) return;

                alreadyLoggingOut = true;
                clearSessionInterval();

                localStorage.removeItem('auth_token');
                setAuthUI(false);

                if (window.location.pathname !== redirectTo) {
                    window.location.replace(redirectTo);
                }
            }

            async function checkSession() {
                if (document.visibilityState !== 'visible') return;

                const API_TOKEN = getApiToken();

                if (!API_TOKEN || alreadyLoggingOut) return;

                try {
                    const res = await fetch(`${API_URL}/v1/common/check-session`, {
                        method: 'GET',
                        headers: {
                            'Authorization': `Bearer ${API_TOKEN}`,
                            'Accept': 'application/json'
                        }
                    });

                    let data = {};
                    try {
                        data = await res.json();
                    } catch (e) {
                        data = {};
                    }

                    console.log('check-session status:', res.status);
                    console.log('check-session response:', data);

                    if (res.status === 401 && data.message === 'Session expired') {
                        logoutUser('/login');
                        return;
                    }

                    if (res.status === 401 && data.message === 'Unauthenticated') {
                        console.warn('Unauthenticated request. Auto logout skipped.');
                        return;
                    }
                } catch (error) {
                    console.error('Session check error:', error);
                }
            }

            const API_TOKEN = getApiToken();
            setAuthUI(!!API_TOKEN);

            if (API_TOKEN && window.location.pathname !== '/login') {
                setTimeout(() => {
                    checkSession();
                    sessionInterval = setInterval(checkSession, 30000);
                }, 2000);
            }

            document.addEventListener('visibilitychange', function() {
                if (document.visibilityState === 'visible') {
                    checkSession();
                }
            });

            logoutLinks.forEach((btn) => {
                btn.addEventListener('click', async function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    if (alreadyLoggingOut) return;

                    try {
                        await fetch("{{ route('logout.ajax') }}", {
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": document.querySelector(
                                    'meta[name="csrf-token"]')?.getAttribute(
                                    'content') || '',
                                "Accept": "application/json"
                            },
                            credentials: "same-origin"
                        });
                    } catch (err) {
                        console.error("Logout error:", err);
                    }

                    logoutUser('/login');
                });
            });
        });

        function clearAuthStorage() {

            localStorage.removeItem('auth_token');
            localStorage.removeItem('user');
            sessionStorage.clear();

        }
    </script>
</body>

</html>
