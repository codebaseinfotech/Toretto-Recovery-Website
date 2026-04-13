<!DOCTYPE html>
<html lang="en">

<head>
    <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id=GTM-K8T3NS2S'+dl;
    f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-K8T3NS2S');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="api-token" content="{{ session('token') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @php
        $isProductionEnv = app()->environment(['production', 'prod']);
        $socketHost = $isProductionEnv
            ? config('services.socket.live_url')
            : config('services.socket.dev_url');
        $socketHost = $socketHost ?: config('services.socket.url');
        $socketHost = preg_replace('#/socket/?$#', '', (string) $socketHost);
        $driversSocketConfig = [
            'app_env' => app()->environment(),
            'url' => $socketHost,
        ];
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
    @stack('head')

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
</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K8T3NS2S"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

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


    @yield('content')

    @include('partials.footer')

    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        window.DRIVERS_SOCKET_CONFIG = @json($driversSocketConfig);
    </script>
    @stack('my-booking-script')
    @stack('map-script')
    @stack('signup-script')
    @stack('login-script')
    @stack('otp-script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function normalizeUaePhone(value) {
                let digits = (value || '').replace(/\D/g, '');

                if (digits.startsWith('971')) {
                    digits = digits.slice(3);
                }

                if (digits.length > 9 && digits.startsWith('0')) {
                    digits = digits.slice(1);
                }

                return digits.slice(0, 9);
            }

            function isValidUaePhone(value) {
                return /^5\d{8}$/.test(value);
            }

            const phoneInputs = document.querySelectorAll('form[action*="/contact-us"] input[name="phone"]');
            const handledForms = new WeakSet();

            phoneInputs.forEach((input) => {
                input.type = 'tel';
                input.inputMode = 'numeric';
                input.autocomplete = 'tel-national';
                input.maxLength = 12;

                input.addEventListener('input', function() {
                    this.value = normalizeUaePhone(this.value);
                    this.setCustomValidity('');
                });

                input.addEventListener('blur', function() {
                    this.value = normalizeUaePhone(this.value);
                });

                const form = input.form;
                if (!form || handledForms.has(form)) {
                    return;
                }

                handledForms.add(form);

                form.addEventListener('submit', function(event) {
                    const phoneField = form.querySelector('input[name="phone"]');
                    if (!phoneField) {
                        return;
                    }

                    const normalizedPhone = normalizeUaePhone(phoneField.value);
                    phoneField.value = normalizedPhone;
                    phoneField.setCustomValidity('');

                    if (!isValidUaePhone(normalizedPhone)) {
                        event.preventDefault();
                        phoneField.setCustomValidity(
                            'Enter a valid UAE mobile number (9 digits starting with 5).'
                        );
                        phoneField.reportValidity();
                    }
                });
            });
        });
    </script>
    @if (session('success') || session('error') || $errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const flashMessage = @json(
                    $errors->first() ?: (session('error') ?: session('success'))
                );
                const flashIcon = @json(
                    $errors->any() || session('error') ? 'error' : 'success'
                );

                if (!flashMessage) {
                    return;
                }

                Swal.fire({
                    icon: flashIcon,
                    text: flashMessage,
                    confirmButtonColor: '#d70006'
                });
            });
        </script>
    @endif

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
