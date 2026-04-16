@extends('layouts.main')

@section('title', 'Book Now | Car Recovery Dubai | 24/7 Towing & Roadside Assistance UAE')

@section('meta_description',
    'Book your car recovery, vehicle towing, or roadside assistance service online with Toretto
    Recovery. 24/7 emergency service across Dubai and the UAE with fast response times.')

@section('content')
    <style>
        .gm-ui-hover-effect {
            background: none;
            display: block;
            border: 0px;
            margin: 0px;
            padding: 0px;
            text-transform: none;
            appearance: none;
            position: relative;
            cursor: pointer;
            user-select: none;
            width: 48px !important;
            height: 21px !important;
        }
    </style>

    {{-- ROUTE SECTION --}}
    <section class="route-section" data-aos="fade-up" data-aos-duration="500">

        <div class="container">
            <div class="row">
                <div class="section-heading text-center" data-aos="fade-up" data-aos-duration="500">
                    <h2 class="section-title">Book Vehicle<span> Pickup & Drop</span></h2>
                    <p>Fast, safe, and reliable vehicle recovery service at your location</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="route-card">
                <!-- Header -->
                <div class="route-header">
                    <div class="route-icon">
                        <img src="{{ asset('assets/images/img4.png') }}" alt="">
                    </div>
                    <h3>Plan Your Route</h3>
                </div>

                <!-- Inputs -->
                <form class="route-form" id="bookingForm">
                    <div class="signup-row">
                        <div class="form-group">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <label>Pickup Location</label>
                                <a href="#"
                                    style="color: #dc3545; margin-bottom: 12px; text-decoration: underline; opacity: 0.6; pointer-events: none;"
                                    id="useCurrentLocationBtn">Use Current Location</a>
                            </div>
                            <div class="input-icon">
                                <i class="fa-solid fa-location-dot"></i>
                                <input type="text" id="pickup_location" name="pickup_location"
                                    placeholder="Enter start location" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Drop-off Location</label>
                            <div class="input-icon">
                                <i class="fa-solid fa-location-crosshairs"></i>
                                <input type="text" id="drop_location" name="drop_location"
                                    placeholder="Enter destination" required>
                            </div>
                        </div>
                    </div>

                    <!-- Calculate Price Button -->
                    <div class="calculate-price-section mb-4 text-center">
                        <button type="button" class="theme-btn" id="calculatePriceBtn">
                            <span class="btn-text">Calculate Price</span>
                            <span class="btn-loader-price d-none">
                                <div class="beat-loader">
                                    <div class="beat"></div>
                                    <div class="beat"></div>
                                    <div class="beat"></div>
                                </div>
                            </span>
                        </button>
                    </div>

                    <!-- Distance and Price Display -->
                    <div class="distance-price-display mb-3 mt-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="distance-box p-3 bg-light rounded">
                                    <h6>Distance</h6>
                                    <p id="distance" class="mb-0">0.00 km</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="minutes-box p-3 bg-light rounded">
                                    <h6>ETA</h6>
                                    <p id="minutes" class="mb-0">0.00 minute</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="price-box p-3 bg-light rounded">
                                    <h6>Price</h6>
                                    <p id="price" class="mb-0">0.00 AED</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div id="map" class="rounded-4 border" style="height: 350px;"></div>

                    <!-- Promo Code Section -->
                    <div class="promo-section mb-3">
                        <div class="row g-2 align-items-end">
                            <div class="col-md-8 col-12">
                                <div class="form-group mb-0">
                                    <label for="promo_code" class="form-label mb-1">Promo Code</label>
                                    <div class="input-icon position-relative">
                                        <i class="fa-solid fa-tag position-absolute"
                                            style="left: 12px; top: 50%; transform: translateY(-50%); color: #6c757d;"></i>
                                        <input type="text" name="promo_code" id="promo_code" class="form-control"
                                            placeholder="Enter promo code">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <button type="button" class="theme-btn w-100" id="applyPromoBtn" data-applied="false">
                                    <span class="btn-text">Apply</span>
                                    <span class="btn-loader-promo d-none">
                                        <div class="beat-loader">
                                            <div class="beat"></div>
                                            <div class="beat"></div>
                                            <div class="beat"></div>
                                        </div>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Price Calculation Section -->
                    <div class="price-calculation-section mb-4 mt-3 p-3 bg-light rounded">
                        <h5 class="mb-3">Price Calculation</h5>

                        <div class="price-item mb-2">
                            <span class="fw-bold">Total Price:</span>
                            <span id="totalPriceDisplay" class="float-end">0.00 AED</span>
                        </div>
                        @if (!empty($settings['show_platform_fee']) && $settings['show_platform_fee'])
                            <div class="price-item mb-2">
                                <span class="fw-bold">Platform Fee:</span>
                                <span id="platform_fee_amount" class="float-end">
                                    {{ !empty($settings['platform_fee_amount']) ?? 0 }} AED
                                </span>
                            </div>
                        @endif

                        @if (!empty($settings['show_tax']) && $settings['show_tax'])
                            <div class="price-item mb-2">
                                <span class="fw-bold">Government tax:</span>
                                <span id="tax_amount" class="float-end">
                                    {{ $settings['tax_amount'] }} AED
                                </span>
                            </div>
                        @endif

                        <div class="price-item mb-2 d-none" id="discountRow">
                            <span class="fw-bold">Discounted Price:</span>
                            <span id="discountAmountDisplay" class="float-end text-danger">0.00 AED</span>
                        </div>

                        <hr class="my-3">

                        <div class="price-item">
                            <span class="fw-bold">Grand Total:</span>
                            <span id="grandTotalDisplay" class="float-end fw-bold">0.00 AED</span>
                        </div>
                    </div>

                    <div class="payment-method-section mb-4 p-3 bg-light rounded">
                        <h5 class="mb-3">Payment Method</h5>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="payment_cod"
                                value="cod" required>
                            <label class="form-check-label d-flex align-items-center gap-2" for="payment_cod">
                                <span class="fw-bold">Cash on Delivery (COD)</span>
                            </label>
                        </div>
                    </div>

                    <!-- SUBMIT -->
                    <div class="form-button">
                        <button type="submit" class="btn-booknow theme-btn" id="bookingSubmitBtn">
                            <span class="btn-text">BOOK NOW</span>
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
                    </div>

                </form>
            </div>
    </section>

    {{-- BOOKING SECTION --}}
    <section class="booking-section">
        <div class="container">
            <div class="grid-box-section">
                <div class="row gy-4">
                    <div class="col-md-4">
                        <div class="grid-info" data-aos="fade-up" data-aos-duration="500">
                            <div class="grid-info-icon">
                                <img src="{{ asset('assets/images/img1.png') }}" alt="">
                            </div>
                            <div class="grid-info-content">
                                <h5>24/7 Service</h5>
                                <p>Anytime assistance, day or night across all locations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="grid-info" data-aos="fade-up" data-aos-duration="500">
                            <div class="grid-info-icon">
                                <img src="{{ asset('assets/images/img2.png') }}" alt="">
                            </div>
                            <div class="grid-info-content">
                                <h5>Fast Pickup</h5>
                                <p>Fast response and immediate pickup from your location</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="grid-info" data-aos="fade-up" data-aos-duration="500">
                            <div class="grid-info-icon">
                                <img src="{{ asset('assets/images/img3.png') }}" alt="">
                            </div>
                            <div class="grid-info-content">
                                <h5>Trusted Recovery Partners</h5>
                                <p>Professional partners for safe and reliable vehicle transport</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Permission Modal -->
    <div class="modal fade" id="locationPermissionModal" tabindex="-1" aria-labelledby="locationPermissionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="locationPermissionModalLabel">Location Permission</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    To provide better service, we need access to your location. Please allow location access.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="theme-btn" id="allowLocationBtn">Allow Access</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Driver Unavailable Modal -->
    <div class="modal fade" id="driverUnavailableModal" tabindex="-1" aria-labelledby="driverUnavailableModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 460px;">
            <div class="modal-content" style="border-radius: 20px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.15); padding: 5px;">
                <div class="modal-header border-0 pb-0" style="padding-top: 15px; position: relative;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; right: 15px; top: 15px;"></button>
                    
                    <h5 class="modal-title w-100 text-center" id="driverUnavailableModalLabel" style="font-weight: 800; font-size: 22px; color: #000; margin-top: 10px;">
                        ⚠️ Sorry! No Drivers Available
                    </h5>
                </div>
                <div class="modal-body text-center pt-2 pb-3">
                    <p style="font-size: 16px; color: #555; margin-bottom: 12px; padding: 0 15px;">
                        We don't have any drivers available in your area for the next 30 minutes.
                    </p>
                    <p style="font-size: 15px; color: #555; margin-bottom: 25px; padding: 0 15px;">
                        If your trip isn't urgent, you can continue booking.<br>
                        For immediate assistance, please contact support.
                    </p>
                    
                    <div class="d-flex flex-column gap-3 px-4">
                        <button type="button" class="btn w-100" style="background-color: #000; color: #fff; padding: 12px 20px; border-radius: 12px; font-weight: 600; font-size: 17px; border: none;" id="continueBookingBtn" data-bs-dismiss="modal">Continue Booking</button>
                        
                        <a href="{{ route('contact') }}" class="btn w-100" style="background-color: #fff; color: #000; padding: 12px 20px; border-radius: 12px; font-weight: 600; font-size: 17px; border: 1px solid #000; text-decoration: none;">Contact Support</a>
                        
                        <button type="button" class="btn w-100" style="background: transparent; color: #ff3b30; padding: 10px; font-weight: 600; font-size: 16px; border: none; outline: none; box-shadow: none;" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('styles')
    <style>
        /* Remove button maintains same styling as apply button */
        #applyPromoBtn[data-applied="true"] {
            /* Same styling as theme-btn, just different text */
        }

        /* Ensure loaders are properly centered */
        .btn-loader-price,
        .btn-loader-promo {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .promo-section {
            margin-bottom: 1rem;
        }

        .promo-section .form-group {
            margin-bottom: 0;
        }

        .promo-section .input-icon {
            position: relative;
        }

        .promo-section input[type="text"] {
            padding-left: 2.5rem;
        }

        @media (max-width: 767.98px) {
            .promo-section .row {
                gap: 0.75rem;
            }

            .promo-section .col-md-8 {
                flex: 0 0 100%;
                max-width: 100%;
                margin-bottom: 0.5rem;
            }

            .promo-section .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .promo-section .theme-btn {
                width: 100% !important;
                min-height: 45px;
            }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .promo-section .col-md-8 {
                flex: 0 0 65%;
                max-width: 65%;
            }

            .promo-section .col-md-4 {
                flex: 0 0 35%;
                max-width: 35%;
                padding-left: 0.75rem;
            }
        }

        /* Simple price calculation styling */
        .price-calculation-section {
            border: 1px solid #dee2e6;
        }

        .price-calculation-section h5 {
            color: #495057;
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 10px;
        }

        .price-item {
            font-size: 16px;
        }

        .price-item .fw-bold {
            color: #333;
        }

        .price-item .float-end {
            color: #007bff;
        }

        .price-item .float-end.fw-bold {
            color: #28a745;
            font-size: 18px;
        }

        .price-item .text-danger {
            color: #dc3545 !important;
        }

        /* Use Current Location button styling */
        #useCurrentLocationBtn {
            transition: opacity 0.3s ease;
        }

        #useCurrentLocationBtn:not([style*="opacity: 1"]) {
            cursor: not-allowed;
        }
    </style>
    <style>
        .dash-car-wrap {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: #fff;
            border: 6px solid #35c759;
            /* online default */
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 3px 10px rgba(0, 0, 0, .25);
            overflow: hidden;
        }

        .dash-car-wrap.busy {
            border-color: #ff3b30;
        }

        .dash-car-wrap.offline {
            border-color: #8e8e93;
        }

        .dash-car-wrap img {
            width: 36px;
            height: 36px;
            object-fit: contain;
            display: block;
        }
    </style>
@endpush

@push('map-script')
    <script>
        const PRICE_API_BASE_URL = "{{ config('services.api.base_url') }}";
        const API_BEARER_TOKEN = localStorage.getItem('auth_token') || '';
        const DRIVER_ICON_URL = "{{ asset('assets/images/driver-truck.png') }}";
        let latestDistanceKm = 0;
        let currentOriginalPrice = 0;
        let currentDiscountValue = 0;
        let currentPromotionData = null;

        let locationPermissionGranted = false;

        let pickupLat = null,
            pickupLng = null;
        let dropLat = null,
            dropLng = null;
        let mapReady = false;

        let pickupAutocomplete, dropAutocomplete;
        let map, pickupMarker, dropMarker, directionsRenderer, directionsService;
        let routePolyline = null;
        let latestRoutePolyline = null;
        /* ------------------ Helpers ------------------ */
        function getAuthToken() {
            const localStorageToken = localStorage.getItem('auth_token');
            if (localStorageToken && localStorageToken !== '') return localStorageToken;
            if (API_BEARER_TOKEN && API_BEARER_TOKEN !== '') return API_BEARER_TOKEN;

            const tokenMeta = document.querySelector('meta[name="api-token"]');
            if (tokenMeta) return tokenMeta.getAttribute('content');

            if (typeof window.userApiToken !== 'undefined') return window.userApiToken;
            return '';
        }

        function isLocationInUAE(lat, lng) {
            const uaeMinLat = 22.4969,
                uaeMaxLat = 26.0555;
            const uaeMinLng = 51.5795,
                uaeMaxLng = 56.3967;
            return (lat >= uaeMinLat && lat <= uaeMaxLat && lng >= uaeMinLng && lng <= uaeMaxLng);
        }

        function showToast(message, type = 'success') {
            if (message.includes('Thank you for choosing Toretto Recovery Services') || message.includes(
                    'Booking created successfully!')) {
                showBookingSuccessPopup();
                return;
            }
            let swalIcon = type === 'error' ? 'error' : type === 'warning' ? 'warning' : type === 'info' ? 'info' :
                'success';
            let color = type === 'error' ? '#dc3545' : type === 'warning' ? '#ffc107' : type === 'info' ? '#17a2b8' :
                '#28a745';

            Swal.fire({
                toast: true,
                icon: swalIcon,
                title: type === 'error' ? 'Booking Error' : 'Status',
                text: message,
                position: 'top-end',
                timer: 5000,
                timerProgressBar: true,
                showConfirmButton: false,
                background: '#fff',
                color: color,
                width: '400px',
                padding: '20px',
            });
        }

        function parseKmFromDistanceText(text) {
            // "46.8 km" -> 46.8
            if (!text) return 0;
            const num = parseFloat(String(text).replace(/[^\d.]/g, ''));
            return Number.isFinite(num) ? num : 0;
        }

        /* ------------------ Google Maps Loader ------------------ */
        function checkLocationPermission() {
            if ('permissions' in navigator) {
                navigator.permissions.query({
                    name: 'geolocation'
                }).then(function(result) {
                    if (result.state === 'granted') {
                        locationPermissionGranted = true;
                    } else if (result.state === 'prompt') {
                        const modalElement = document.getElementById('locationPermissionModal');
                        if (modalElement) {
                            const modal = new bootstrap.Modal(modalElement);
                            modal.show();
                            document.getElementById('allowLocationBtn').addEventListener('click', function() {
                                modal.hide();
                                getUserLiveLocation();
                            });
                        }
                    }
                });
            } else {
                locationPermissionGranted = true;
            }
        }

        function loadGoogleMapsScript() {
            if (window.google && window.google.maps) {
                initMapAndAutocomplete();
                return;
            }

            const script = document.createElement('script');
            script.src =
                `https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.key') }}&libraries=places,routes&callback=initMapAndAutocomplete`;
            script.async = true;
            script.defer = true;
            document.head.appendChild(script);
        }

        window.initMapAndAutocomplete = function() {
            initMap();
            initAutocomplete();

            if (locationPermissionGranted) {
                setTimeout(getUserLiveLocation, 500);
            }

            setTimeout(() => {
                const btn = document.getElementById('useCurrentLocationBtn');
                if (btn) {
                    btn.style.opacity = '1';
                    btn.style.pointerEvents = 'auto';
                }
            }, 800);
        }

        function initMap() {
            const defaultLat = 25.2048; // Dubai
            const defaultLng = 55.2708; // Dubai

            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: defaultLat,
                    lng: defaultLng
                },
                zoom: 11,
                mapId: "DEMO_MAP_ID",
                mapTypeControl: true,
                streetViewControl: false,
                fullscreenControl: true,
                styles: [{
                    featureType: "poi",
                    elementType: "labels",
                    stylers: [{
                        visibility: "off"
                    }]
                }]
            });

            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer({
                map: map,
                suppressMarkers: true,
                polylineOptions: {
                    strokeColor: 'black',
                    strokeWeight: 4
                }
            });

            mapReady = true;

            restorePendingBooking();
            startDashAutoDrivers();
        }
        // function initMap() {

        //     // Dubai center
        //     const dubaiCenter = {
        //         lat: 25.2048,
        //         lng: 55.2708
        //     };

        //     // Dubai bounds restriction
        //     const dubaiBounds = {
        //         north: 25.3875,
        //         south: 24.7433,
        //         west: 54.8970,
        //         east: 55.6510
        //     };

        //     map = new google.maps.Map(document.getElementById('map'), {
        //         zoom: 11,
        //         center: dubaiCenter,
        //         mapTypeControl: true,
        //         streetViewControl: false,
        //         fullscreenControl: true,

        //         restriction: {
        //             latLngBounds: dubaiBounds,
        //             strictBounds: true
        //         }
        //     });

        //     directionsService = new google.maps.DirectionsService();

        //     directionsRenderer = new google.maps.DirectionsRenderer({
        //         map: map,
        //         suppressMarkers: true,
        //         polylineOptions: {
        //             strokeColor: 'black',
        //             strokeWeight: 4
        //         }
        //     });

        //     mapReady = true;

        //     restorePendingBooking();
        //     startDashAutoDrivers();
        // }

        function initAutocomplete() {
            const uaeBounds = new google.maps.LatLngBounds(
                new google.maps.LatLng(22.4969, 51.5795),
                new google.maps.LatLng(26.0555, 56.3967)
            );

            const autocompleteOptions = {
                // IMPORTANT: establishments strict sometimes blocks. Better:
                types: ['establishment'],
                bounds: uaeBounds,
                strictBounds: true,
                componentRestrictions: {
                    country: ['AE']
                }
            };

            const pickupElement = document.getElementById('pickup_location');
            const dropElement = document.getElementById('drop_location');

            if (pickupElement) {
                pickupAutocomplete = new google.maps.places.Autocomplete(pickupElement, autocompleteOptions);
                pickupAutocomplete.addListener('place_changed', onPickupChanged);
            }

            if (dropElement) {
                dropAutocomplete = new google.maps.places.Autocomplete(dropElement, autocompleteOptions);
                dropAutocomplete.addListener('place_changed', onDropChanged);
            }
        }

        function onPickupChanged() {
            const place = pickupAutocomplete.getPlace();
            if (!place.geometry) {
                showToast('Please select a valid location within the UAE.', 'error');
                document.getElementById('pickup_location').value = '';
                pickupLat = pickupLng = null;
                if (pickupMarker) {
                    pickupMarker.setMap(null);
                    pickupMarker = null;
                }
                return;
            }

            const lat = place.geometry.location.lat();
            const lng = place.geometry.location.lng();

            if (!isLocationInUAE(lat, lng)) {
                showToast('Please select a valid location within the UAE.', 'error');
                document.getElementById('pickup_location').value = '';
                return;
            }

            pickupLat = lat;
            pickupLng = lng;

            if (pickupMarker) pickupMarker.setMap(null);
            pickupMarker = new google.maps.Marker({
                position: {
                    lat,
                    lng
                },
                map,
                title: 'Pickup',
                icon: {
                    url: "{{ asset('assets/images/pin.png') }}",
                    scaledSize: new google.maps.Size(30, 30)
                }
            });

            const pickupElement = document.getElementById('pickup_location');
            pickupElement.value = place.formatted_address || place.name || '';

            new google.maps.InfoWindow({
                content: `<div style="max-width:200px;font-size:13px;"><strong>Pickup:</strong><br>${pickupElement.value}</div>`
            }).open(map, pickupMarker);

            map.panTo({
                lat,
                lng
            });
            map.setZoom(15);

            if (dropMarker) setTimeout(drawRoute, 200);
        }

        function onDropChanged() {
            const place = dropAutocomplete.getPlace();
            if (!place.geometry) {
                showToast('Please select a valid location within the UAE.', 'error');
                document.getElementById('drop_location').value = '';
                dropLat = dropLng = null;
                if (dropMarker) {
                    dropMarker.setMap(null);
                    dropMarker = null;
                }
                return;
            }

            const lat = place.geometry.location.lat();
            const lng = place.geometry.location.lng();

            if (!isLocationInUAE(lat, lng)) {
                showToast('Please select a valid location within the UAE.', 'error');
                document.getElementById('drop_location').value = '';
                return;
            }

            dropLat = lat;
            dropLng = lng;

            if (dropMarker) dropMarker.setMap(null);
            dropMarker = new google.maps.Marker({
                position: {
                    lat,
                    lng
                },
                map,
                title: 'Drop',
                icon: {
                    url: "{{ asset('assets/images/pin.png') }}",
                    scaledSize: new google.maps.Size(30, 30)
                }
            });

            const dropElement = document.getElementById('drop_location');
            dropElement.value = place.formatted_address || place.name || '';

            new google.maps.InfoWindow({
                content: `<div style="max-width:200px;font-size:13px;"><strong>Drop:</strong><br>${dropElement.value}</div>`
            }).open(map, dropMarker);

            map.panTo({
                lat,
                lng
            });
            map.setZoom(15);

            if (pickupMarker) setTimeout(drawRoute, 200);
        }

        /* ------------------ Route + Distance + Price ------------------ */
        function drawRoute() {
            console.log("called");

            if (!pickupMarker || !dropMarker || !map) {
                console.log("stopped: pickupMarker/dropMarker/map missing", {
                    pickupMarker,
                    dropMarker,
                    map
                });
                return;
            }

            const pickupPos = pickupMarker.getPosition();
            const dropPos = dropMarker.getPosition();

            if (!pickupPos || !dropPos) {
                console.log("stopped: pickupPos/dropPos missing", {
                    pickupPos,
                    dropPos
                });
                return;
            }

            const origin = pickupPos.lat() + "," + pickupPos.lng();
            const destination = dropPos.lat() + "," + dropPos.lng();

            console.log("origin:", origin);
            console.log("destination:", destination);

            callDistanceApi(origin, destination);
        }

        async function calculateFinalPrice(kms, token, minutes) {
            try {

                const responsePrice = await fetch(`${PRICE_API_BASE_URL}/v1/customer/price/calculate`, {
                    method: 'POST',
                    headers: {
                        'Authorization': 'Bearer ' + token,
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        km: kms,
                        latitude: pickupLat,
                        longitude: pickupLng,
                        drop_latitude: dropLat,
                        drop_longitude: dropLng,
                        minutes: minutes
                    })
                });

                const priceData = await responsePrice.json();

                const price = priceData?.data?.price ?? 0;

                currentOriginalPrice = price || 0;
                updateGrandTotal();

                // Safe get elements
                const platform_fee_amount = document.getElementById("platform_fee_amount");
                const tax_amount = document.getElementById("tax_amount");

                // Safe value extraction
                const platformFee = platform_fee_amount && !isNaN(parseFloat(platform_fee_amount.innerText)) ?
                    parseFloat(platform_fee_amount.innerText) :
                    0;

                const taxAmount = tax_amount && !isNaN(parseFloat(tax_amount.innerText)) ?
                    parseFloat(tax_amount.innerText) :
                    0;

                // Final calculation
                const TotalAmount = platformFee + taxAmount + currentOriginalPrice;

                // Safe update
                const grandTotalEl = document.getElementById('grandTotalDisplay');
                if (grandTotalEl) {
                    grandTotalEl.innerText = TotalAmount + ' AED';
                }

            } catch (error) {
                console.error("calculateFinalPrice() failed:", error);
            }
        }

        async function callDistanceApi(origin, destination) {
            try {
                const token = getAuthToken();

                const responseDistance = await fetch(
                    `${PRICE_API_BASE_URL}/v1/customer/distance?origin=${encodeURIComponent(origin)}&destination=${encodeURIComponent(destination)}&traffic_model=best_guess`
                );

                const data = await responseDistance.json();
                console.log('Distance API full response:', data);

                if (!responseDistance.ok) {
                    showToast(data?.message || "Distance API request failed.", "error");
                    return;
                }

                const result = data?.data;

                if (!data?.status || !result || !result.distance?.text) {
                    console.log('Invalid result:', result);
                    showToast("Unable to calculate route. Try different locations.", "error");
                    return;
                }

                latestRoutePolyline = result.polyline || null;

                const kmText = result.distance?.text || '';
                const minutes = result.duration_in_traffic?.text || result.duration?.text || '';

                let kmsNumber = null;

                if (kmText) {
                    if (kmText.toLowerCase().includes('km')) {
                        kmsNumber = parseFloat(
                            kmText.toLowerCase().replace('km', '').replace(/,/g, '').trim()
                        );
                    } else if (kmText.toLowerCase().includes('m')) {
                        kmsNumber = parseFloat(
                            kmText.toLowerCase().replace('m', '').replace(/,/g, '').trim()
                        ) / 1000;
                    }
                }

                latestDistanceKm = Number.isFinite(kmsNumber) ? kmsNumber : 0;

                console.log('kmText:', kmText);
                console.log('latestDistanceKm:', latestDistanceKm);

                if (latestDistanceKm <= 0) {
                    showToast("Unable to calculate route. Distance not found.", "error");
                    return;
                }

                document.getElementById("distance").innerText = kmText || 'N/A';
                document.getElementById("minutes").innerText = minutes || 'N/A';

                if (routePolyline) {
                    routePolyline.setMap(null);
                    routePolyline = null;
                }

                if (result.polyline && map && google?.maps?.geometry?.encoding) {
                    const path = google.maps.geometry.encoding.decodePath(result.polyline);

                    routePolyline = new google.maps.Polyline({
                        path: path,
                        geodesic: true,
                        strokeColor: "#000000",
                        strokeOpacity: 1,
                        strokeWeight: 4,
                        map: map
                    });

                    const bounds = new google.maps.LatLngBounds();
                    path.forEach(point => bounds.extend(point));
                    map.fitBounds(bounds);
                } else {
                    console.log("Polyline not drawn", {
                        hasPolyline: !!result.polyline,
                        hasMap: !!map,
                        hasGeometry: !!google?.maps?.geometry?.encoding
                    });
                }

                if (token) {
                    await calculateFinalPrice(latestDistanceKm, token, minutes);
                } else {
                    console.log("Skipping price calculation: token missing");
                }

            } catch (e) {
                console.error("Distance API call failed:", e);
                showToast("Something went wrong while calculating route.", "error");
            }
        }

        /* ------------------ Pending Booking Restore (LOGIN FLOW) ------------------ */
        function restorePendingBooking() {

            const token = getAuthToken();
            const pendingBooking = localStorage.getItem('pending_booking');
            if (!token || !pendingBooking || !mapReady) {
                return;
            }

            const data = JSON.parse(pendingBooking);

            if (!data.pickup_lat || !data.pickup_lng || !data.drop_lat || !data.drop_lng) {
                localStorage.removeItem('pending_booking');
                return;
            }

            setPickupManually(
                parseFloat(data.pickup_lat),
                parseFloat(data.pickup_lng),
                data.pickup_location
            );

            setDropManually(
                parseFloat(data.drop_lat),
                parseFloat(data.drop_lng),
                data.drop_location
            );

            setTimeout(() => {
                drawRoute();
            }, 400);

            localStorage.removeItem('pending_booking');
        }

        function setPickupManually(lat, lng, address) {
            pickupLat = lat;
            pickupLng = lng;

            if (pickupMarker) pickupMarker.setMap(null);

            const position = new google.maps.LatLng(lat, lng);
            pickupMarker = new google.maps.Marker({
                position,
                map,
                title: 'Pickup',
                icon: {
                    url: "{{ asset('assets/images/pin.png') }}",
                    scaledSize: new google.maps.Size(30, 30)
                }
            });

            new google.maps.InfoWindow({
                content: `<div style="max-width:200px;font-size:13px;"><strong>Pickup:</strong><br>${address}</div>`
            }).open(map, pickupMarker);

            document.getElementById('pickup_location').value = address || '';

            map.panTo(position);
            map.setZoom(15);
        }

        function setDropManually(lat, lng, address) {
            dropLat = lat;
            dropLng = lng;

            if (dropMarker) dropMarker.setMap(null);

            const position = new google.maps.LatLng(lat, lng);
            dropMarker = new google.maps.Marker({
                position,
                map,
                title: 'Drop',
                icon: {
                    url: "{{ asset('assets/images/pin.png') }}",
                    scaledSize: new google.maps.Size(30, 30)
                }
            });

            new google.maps.InfoWindow({
                content: `<div style="max-width:200px;font-size:13px;"><strong>Drop:</strong><br>${address}</div>`
            }).open(map, dropMarker);

            document.getElementById('drop_location').value = address || '';

            if (pickupMarker) {
                const bounds = new google.maps.LatLngBounds();
                bounds.extend(pickupMarker.getPosition());
                bounds.extend(position);
                map.fitBounds(bounds);
            } else {
                map.panTo(position);
                map.setZoom(15);
            }
        }

        /* ------------------ Current Location ------------------ */
        function getUserLiveLocation() {
            if (!navigator.geolocation) {
                showToast("Geolocation not supported.", "error");
                return;
            }

            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const lat = position.coords.latitude;
                    const lng = position.coords.longitude;

                    if (!map) {
                        showToast("Map is loading. Try again.", "info");
                        return;
                    }

                    if (!isLocationInUAE(lat, lng)) {
                        showToast("Your current location is outside UAE.", "warning");
                        return;
                    }

                    setPickupFromLatLng(lat, lng);
                },
                () => showToast("Unable to fetch location.", "error"), {
                    enableHighAccuracy: true,
                    timeout: 15000,
                    maximumAge: 60000
                }
            );
        }

        function setPickupFromLatLng(lat, lng) {
            const geocoder = new google.maps.Geocoder();
            geocoder.geocode({
                location: {
                    lat,
                    lng
                }
            }, (results, status) => {
                if (status === "OK" && results && results.length > 0) {
                    const address = results[0].formatted_address;
                    setPickupManually(lat, lng, address);
                    showToast("Pickup set to current location", "success");
                    if (dropMarker) setTimeout(drawRoute, 300);
                } else {
                    showToast("Unable to detect address.", "error");
                }
            });
        }

        function showBookingSuccessPopup(isSuccess = true, errorMessage = null) {
            let titleHtml = isSuccess 
                ? '<strong style="font-size: 24px;">Thank You!</strong>' 
                : '<strong style="font-size: 24px; color: #dc3545;">Booking Error</strong>';

            let popupHtml = '';
            
            if (isSuccess) {
                popupHtml = `
                <style>
                    .finding-wrap{
                        display:flex;
                        justify-content:center;
                        margin: 8px 0 18px 0;
                    }
                    .finding{
                        width: 120px;
                        height: 120px;
                        position: relative;
                    }
                    /* Pulsing ring */
                    .pulse-ring{
                        position:absolute;
                        inset: 18px;
                        border-radius: 50%;
                        border: 2px solid rgba(220,53,69,.35);
                        animation: ringPulse 1.4s ease-out infinite;
                    }
                    .pulse-ring:nth-child(2){
                        inset: 28px;
                        animation-delay: .3s;
                        opacity:.8;
                    }
                    @keyframes ringPulse{
                        0%{ transform: scale(.75); opacity:.8; }
                        70%{ transform: scale(1.15); opacity:.15; }
                        100%{ transform: scale(1.2); opacity:0; }
                    }

                    /* Center pin */
                    .pin{
                        position:absolute;
                        left:50%;
                        top:50%;
                        transform: translate(-50%,-58%);
                        width: 26px;
                        height: 26px;
                        background:#dc3545;
                        border-radius: 50% 50% 50% 0;
                        transform: translate(-50%,-58%) rotate(-45deg);
                        box-shadow: 0 10px 20px rgba(220,53,69,.25);
                    }
                    .pin::after{
                        content:'';
                        position:absolute;
                        width:10px;height:10px;
                        background:#fff;
                        border-radius:50%;
                        left:50%;top:50%;
                        transform: translate(-50%,-50%);
                    }

                    /* Orbit path + moving car */
                    .orbit{
                        position:absolute;
                        inset: 6px;
                        border-radius: 50%;
                        border: 2px dashed rgba(0,0,0,.10);
                    }
                    .car-orbit{
                        position:absolute;
                        inset: 6px;
                        border-radius:50%;
                        animation: spin 1.2s linear infinite;
                    }
                    @keyframes spin{
                        from { transform: rotate(0deg); }
                        to { transform: rotate(360deg); }
                    }

                    .car{
                        position:absolute;
                        top: -6px;
                        left: 50%;
                        transform: translateX(-50%);
                        width: 34px;
                        height: 20px;
                        filter: drop-shadow(0 4px 10px rgba(0,0,0,.12));
                    }
                    /* small “signal” dots */
                    .signal{
                        position:absolute;
                        left:50%;
                        top:14px;
                        transform: translateX(-50%);
                        display:flex;
                        gap:6px;
                        opacity:.75;
                    }
                    .signal span{
                        width:6px;height:6px;border-radius:50%;
                        background: rgba(220,53,69,.55);
                        animation: blink 1s ease-in-out infinite;
                    }
                    .signal span:nth-child(2){ animation-delay: .15s; }
                    .signal span:nth-child(3){ animation-delay: .3s; }
                    @keyframes blink{
                        0%, 100%{ transform: translateY(0); opacity:.25; }
                        50%{ transform: translateY(-4px); opacity:1; }
                    }

                    .finding-text{
                        margin-top: 6px;
                        font-size: 16px;
                        color:#666;
                        font-family:'Avenir', sans-serif;
                    }
                </style>

                <div style="text-align: center; max-width: 500px; margin: 0 auto; font-family: 'Avenir', sans-serif;">

                    <!--  Finding Driver Loader -->
                    <div class="finding-wrap">
                        <div class="finding">
                            <div class="pulse-ring"></div>
                            <div class="pulse-ring"></div>

                            <div class="orbit"></div>

                            <div class="car-orbit">
                                <!-- simple SVG car -->
                                <svg class="car" viewBox="0 0 64 36" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 22L20 10C21 8 23 7 25 7H43C45 7 47 8 48 10L54 22" fill="#111"/>
                                    <path d="M10 22H58C60 22 62 24 62 26V30C62 32 60 34 58 34H56" fill="#111"/>
                                    <path d="M8 30V26C8 24 10 22 12 22H14" fill="#111"/>
                                    <path d="M24 10H40" stroke="#fff" stroke-width="2" stroke-linecap="round" opacity=".85"/>
                                    <circle cx="20" cy="34" r="4" fill="#dc3545"/>
                                    <circle cx="50" cy="34" r="4" fill="#dc3545"/>
                                </svg>
                            </div>

                            <div class="pin"></div>

                            <div class="signal">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                    </div>
                    <div class="finding-text"><b>Finding nearest driver…<b></div>

                    <p style="font-size: 16px; margin-bottom: 15px;">
                        Thank you for choosing Toretto Recovery Services.
                    </p>
                    <p style="font-size: 16px; margin-bottom: 15px;">
                        Your nearest recovery driver is currently being assigned.
                    </p>
                    <p style="font-size: 16px; margin-bottom: 15px;">
                        To receive real-time updates, driver contact details, and live tracking, please continue using our mobile application.
                    </p>

                    <p style="font-size: 16px; margin-bottom: 20px; font-weight: bold;">
                        Track your recovery vehicle in real time
                    </p>

                    <div style="margin-bottom: 25px;">
                        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                            <a href="#" target="_blank" style="display: inline-block;">
                                <img src="{{ asset('assets/images/google-play.png') }}" alt="Google Play" style="height: 50px; width: auto;">
                            </a>
                            <a href="#" target="_blank" style="display: inline-block;">
                                <img src="{{ asset('assets/images/app-store.png') }}" alt="App Store" style="height: 50px; width: auto;">
                            </a>
                        </div>
                    </div>

                    <p style="font-size: 14px; margin-top: 20px; color: #666; text-align: center;">
                        <em>Note: Service updates and driver communication are available only in the mobile app.</em>
                    </p>

                    <div style="margin-top: 25px;">
                        <button id="openAppBtn" style="
                            background-color: #dc3545;
                            color: white;
                            border: none;
                            padding: 12px 30px;
                            border-radius: 6px;
                            cursor: pointer;
                            font-size: 16px;
                            font-family: 'Avenir', sans-serif;
                            font-weight: bold;
                            transition: background-color 0.3s;
                            box-shadow: 0 2px 6px rgba(220,53,69,0.3);
                        " onmouseover="this.style.backgroundColor='#c82333'; this.style.boxShadow='0 4px 12px rgba(220,53,69,0.4)';"
                        onmouseout="this.style.backgroundColor='#dc3545'; this.style.boxShadow='0 2px 6px rgba(220,53,69,0.3)';">
                            Go to Home Screen
                        </button>
                    </div>
                </div>`;
            } else {
                let displayMessage = errorMessage ? errorMessage : 'An error occurred during booking. Please try again.';
                popupHtml = `
                <div style="text-align: center; max-width: 500px; margin: 0 auto; font-family: 'Avenir', sans-serif;">
                    <div style="margin: 20px 0;">
                        <svg viewBox="0 0 24 24" width="80" height="80" stroke="#dc3545" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                        </svg>
                    </div>
                    <p style="font-size: 18px; margin-bottom: 25px; color: #333;">
                        ${displayMessage}
                    </p>
                    <div style="margin-top: 25px;">
                        <button style="background-color: #333; color: white; border: none; padding: 12px 30px; border-radius: 6px; cursor: pointer; font-size: 16px; font-family: 'Avenir', sans-serif; font-weight: bold; transition: background-color 0.3s;" onclick="Swal.close()">
                            Close
                        </button>
                    </div>
                </div>`;
            }

            Swal.fire({
                title: titleHtml,
                html: popupHtml,
                showConfirmButton: false,
                showCloseButton: true,
                width: '600px',
                padding: '30px',
                timer: isSuccess ? 30000 : undefined,
                timerProgressBar: isSuccess ? true : false,
                willClose: () => {
                    if (isSuccess) {
                    // Clear the form instead of reloading the page
                    document.getElementById('bookingForm').reset();

                    // Reset all displays
                    document.getElementById('distance').innerText = '0.00 km';
                    document.getElementById('price').innerText = '0.00 AED';
                    document.getElementById('minutes').innerText = '0.00 mins';
                    document.getElementById('totalPriceDisplay').innerText = '0.00 AED';
                    document.getElementById('grandTotalDisplay').innerText = '0.00 AED';

                    // Hide discount section
                    const discountRow = document.getElementById('discountRow');
                    if (discountRow) {
                        discountRow.classList.add('d-none');
                    }

                    // Reset promo code button
                    const applyPromoBtn = document.getElementById('applyPromoBtn');
                    if (applyPromoBtn) {
                        applyPromoBtn.dataset.applied = 'false';

                        const promoBtnText = applyPromoBtn.querySelector('.btn-text');
                        if (promoBtnText) {
                            promoBtnText.textContent = 'Apply';
                        }
                    }

                    // Clear promo code input
                    const promoInput = document.getElementById('promo_code');
                    if (promoInput) {
                        promoInput.value = '';
                        delete promoInput.dataset.promotionId;
                    }

                    // Clear map markers
                    if (pickupMarker) {
                        pickupMarker.setMap(null);
                        pickupMarker = null;
                    }

                    if (dropMarker) {
                        dropMarker.setMap(null);
                        dropMarker = null;
                    }

                    // Clear custom route polyline
                    if (routePolyline) {
                        routePolyline.setMap(null);
                        routePolyline = null;
                    }

                    // Clear directions
                    if (directionsRenderer) {
                        directionsRenderer.setDirections({
                            routes: []
                        });
                    }

                    // Reset lat lng values
                    pickupLat = null;
                    pickupLng = null;
                    dropLat = null;
                    dropLng = null;

                    // Reset route values
                    latestDistanceKm = 0;
                    latestRoutePolyline = null;
                    currentOriginalPrice = 0;
                    currentDiscountValue = 0;
                    currentPromotionData = null;

                    // Reset map position
                    if (map) {
                        map.setCenter({
                            lat: 25.2048,
                            lng: 55.2708
                        });
                        map.setZoom(11);
                    }
                    } // close if (isSuccess)
                },
                customClass: {
                    popup: 'booking-success-popup',
                    title: 'booking-success-title',
                    content: 'booking-success-content'
                },
                willOpen: () => {
                    setTimeout(() => {
                        const openAppBtn = document.getElementById('openAppBtn');

                        if (openAppBtn) {
                            openAppBtn.addEventListener('click', () => {
                                window.location.href = "{{ route('home') }}";
                                Swal.close();
                            });
                        }
                    }, 100);
                }
            });
        }
        /* ------------------ DOM Ready ------------------ */
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const paymentStatus = urlParams.get('payment');
            const stateStatus = urlParams.get('state');
            
            if (paymentStatus === 'success' || stateStatus === 'success') {
                showBookingSuccessPopup();
                window.history.replaceState({}, document.title, window.location.pathname);
            } else if (paymentStatus === 'cancel' || stateStatus === 'cancel' || stateStatus === 'fail' || stateStatus === 'failed') {
                showBookingSuccessPopup(false, 'Payment was cancelled or failed. Please try again.');
                window.history.replaceState({}, document.title, window.location.pathname);
            }

            checkLocationPermission();
            loadGoogleMapsScript();

            // Use current location
            const useCurrentLocationBtn = document.getElementById('useCurrentLocationBtn');
            if (useCurrentLocationBtn) {
                useCurrentLocationBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    if (!map) return showToast('Map is still loading...', 'info');
                    getUserLiveLocation();
                });
            }

            // Calculate Price button
            const calculatePriceBtn = document.getElementById('calculatePriceBtn');
            if (calculatePriceBtn) {
                calculatePriceBtn.addEventListener('click', async function(e) {
                    e.preventDefault();

                    const pickupElement = document.getElementById('pickup_location');
                    const dropElement = document.getElementById('drop_location');

                    if (!pickupElement.value || !dropElement.value) {
                        showToast('Please enter both pickup and drop locations', 'error');
                        return;
                    }

                    if (!pickupMarker || !dropMarker) {
                        showToast('Please select pickup and drop from suggestions.', 'error');
                        return;
                    }

                    const origin = pickupMarker.getPosition().lat() + "," + pickupMarker.getPosition()
                        .lng();
                    const destination = dropMarker.getPosition().lat() + "," + dropMarker.getPosition()
                        .lng();

                    await callDistanceApi(origin, destination);

                    const token = getAuthToken();
                    if (!token) {
                        localStorage.setItem('pending_booking', JSON.stringify({
                            pickup_location: pickupElement.value,
                            drop_location: dropElement.value,
                            pickup_lat: pickupMarker.getPosition().lat(),
                            pickup_lng: pickupMarker.getPosition().lng(),
                            drop_lat: dropMarker.getPosition().lat(),
                            drop_lng: dropMarker.getPosition().lng(),
                            timestamp: Date.now()
                        }));
                        window.location.href = "{{ route('login') }}";
                        return;
                    }
                });
            }

            // Booking Submit
            document.getElementById('bookingForm').addEventListener('submit', async function(e) {
                e.preventDefault();

                const pickupElement = document.getElementById('pickup_location');
                const dropElement = document.getElementById('drop_location');
                const promoElement = document.getElementById('promo_code');

                if (!pickupElement.value || !dropElement.value) {
                    showToast('Please enter both pickup and drop locations', 'error');
                    return;
                }

                if (!pickupMarker || !dropMarker) {
                    showToast('Please select valid pickup and drop locations on the map.', 'error');
                    return;
                }

                const distanceText = document.getElementById('distance')?.innerText || '';
                const distanceValue = parseKmFromDistanceText(distanceText);
                if (distanceValue <= 0) {
                    showToast('Distance could not be calculated. Please click Calculate Price first.',
                        'error');
                    return;
                }

                const token = getAuthToken();
                if (!token) {
                    localStorage.setItem('pending_booking', JSON.stringify({
                        pickup_location: pickupElement.value,
                        drop_location: dropElement.value,
                        pickup_lat: pickupMarker.getPosition().lat(),
                        pickup_lng: pickupMarker.getPosition().lng(),
                        drop_lat: dropMarker.getPosition().lat(),
                        drop_lng: dropMarker.getPosition().lng(),
                        timestamp: Date.now()
                    }));
                    window.location.href = "{{ route('login') }}";
                    return;
                }

                const pickupLatLng = pickupMarker.getPosition();
                const dropLatLng = dropMarker.getPosition();

                let promotionId = null;
                if (promoElement && promoElement.dataset.promotionId) {
                    promotionId = promoElement.dataset.promotionId;
                }

                // DOM values
                const totalPrice = document.getElementById("grandTotalDisplay")?.innerText || "";
                const etaMinutes = document.getElementById("minutes")?.innerText || "";
                const basePrice = document.getElementById("price")?.innerText || "";
                const discountAmountDisplay = document.getElementById("discountAmountDisplay")
                    ?.innerText || "";

                // remove text like "AED" or "mins"
                const cleanTotalPrice = parseFloat(totalPrice.replace(/[^\d.]/g, ""));
                const cleanBasePrice = parseFloat(basePrice.replace(/[^\d.]/g, ""));
                const discountPrice = parseFloat(discountAmountDisplay.replace(/[^\d.]/g, ""));
                const cleanMinutes = convertToMinutes(etaMinutes);

                const bookingPayload = {
                    service_type_id: 1,
                    pickup_address: pickupElement.value,
                    pickup_lat: pickupLatLng.lat(),
                    pickup_lng: pickupLatLng.lng(),
                    dropoff_address: dropElement.value,
                    dropoff_lat: dropLatLng.lat(),
                    dropoff_lng: dropLatLng.lng(),
                    distance_km: distanceValue,
                    platform_fee: parseFloat(platform_fee_amount?.innerText || platform_fee_amount?.textContent || "0") || 0,
                    tax: parseFloat(tax_amount?.innerText || tax_amount?.textContent || "0") || 0,
                    payment_method: "payment_link",
                    booking_type: "immediate",
                    prepayment_amount: cleanTotalPrice,
                    success_url: window.location.origin + "?payment=success",
                    cancel_url: window.location.origin + "?payment=cancel",
                    called_by: "web",
                    // extra values
                    total_price: cleanTotalPrice,
                    price: cleanBasePrice,
                    eta_minutes: cleanMinutes,
                    discountPrice: discountPrice,
                    polyline: latestRoutePolyline
                };

                console.log("Booking Payload:", bookingPayload);

                if (promotionId) bookingPayload.promotion_id = promotionId;

                const triggerTripPrepayment = async (payload) => {
                    const submitBtn = document.querySelector('#bookingForm button[type="submit"]');
                    if (submitBtn) { submitBtn.disabled = true; submitBtn.innerHTML = "Processing..."; }
                    
                    try {
                        const resp = await window.ApiUtils.fetch(
                            `${PRICE_API_BASE_URL}/v1/customer/payments/trip-prepayments?called_by=web`, {

                                method: 'POST',
                                headers: {
                                    'Authorization': 'Bearer ' + token,
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify(payload)
                            }
                        );

                        const resData = await resp.json();
                        
                        if (!resp.ok || resData.status !== true) {
                            showBookingSuccessPopup(false, resData.message || 'Please try again.');
                            if (submitBtn) { submitBtn.disabled = false; submitBtn.innerHTML = "Book Now"; }
                            return;
                        }

                        if (resData.data && resData.data.checkout_url) {
                            window.location.href = resData.data.checkout_url;
                        } else if (resData.data && resData.data.payment_url) {
                            window.location.href = resData.data.payment_url;
                        } else if (resData.data && resData.data.url) {
                            window.location.href = resData.data.url;
                        } else {
                            showToast('Booking created successfully!', 'success');
                            showBookingSuccessPopup();
                            if (submitBtn) { submitBtn.disabled = false; submitBtn.innerHTML = "Book Now"; }
                        }
                    } catch (err) {
                        showBookingSuccessPopup(false, 'Please try again.');
                        if (submitBtn) { submitBtn.disabled = false; submitBtn.innerHTML = "Book Now"; }
                    }
                };

                try {
                    // Check Driver Availability First
                    const availabilityResp = await window.ApiUtils.fetch(
                        `${PRICE_API_BASE_URL}/v1/customer/drivers/availability-status`, {
                            method: 'POST',
                            headers: {
                                'Authorization': 'Bearer ' + token,
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                pickup_lat: pickupLatLng.lat(),
                                pickup_lng: pickupLatLng.lng()
                            })
                        }
                    );

                    let availData = {};
                    try {
                        availData = await availabilityResp.json();
                    } catch (e) {
                        availData = {};
                    }

                    if (!availabilityResp.ok || (availData?.data && availData.data.is_drives_status === false)) {
                        const unavailableModalEl = document.getElementById('driverUnavailableModal');
                        const unavailableModal = new bootstrap.Modal(unavailableModalEl);
                        
                        const continueBtn = document.getElementById('continueBookingBtn');
                        if (continueBtn) {
                            continueBtn.onclick = function() {
                                unavailableModal.hide();
                                setTimeout(() => {
                                    triggerTripPrepayment(bookingPayload);
                                }, 300);
                            };
                        }

                        unavailableModal.show();
                        return;
                    }

                    // Available -> Proceed
                    await triggerTripPrepayment(bookingPayload);
                    
                } catch (err) {
                    showToast('Please try again checking availability.', 'error');
                }
            });
        });

        function convertToMinutes(timeText) {
            if (!timeText) return 0;

            let hours = 0;
            let minutes = 0;

            const hourMatch = timeText.match(/(\d+)\s*h/i);
            const minMatch = timeText.match(/(\d+)\s*m/i);

            if (hourMatch) {
                hours = parseInt(hourMatch[1]);
            }

            if (minMatch) {
                minutes = parseInt(minMatch[1]);
            }

            return (hours * 60) + minutes;
        }

        function setPromoButtonUI(isApplied) {
            const btn = document.getElementById('applyPromoBtn');
            const promoInput = document.getElementById('promo_code');
            if (!btn) return;

            btn.dataset.applied = isApplied ? 'true' : 'false';

            const txt = btn.querySelector('.btn-text');
            if (txt) txt.textContent = isApplied ? 'Remove' : 'Apply';

            if (!isApplied && promoInput) {
                promoInput.value = '';
                delete promoInput.dataset.promotionId;
            }
        }

        // Globals (ensure these exist)
        function setPromoButtonUI(isApplied) {
            const btn = document.getElementById('applyPromoBtn');
            const promoInput = document.getElementById('promo_code');
            if (!btn) return;

            btn.dataset.applied = isApplied ? 'true' : 'false';

            const txt = btn.querySelector('.btn-text');
            if (txt) txt.textContent = isApplied ? 'Remove' : 'Apply';

            if (!isApplied && promoInput) {
                promoInput.value = '';
                delete promoInput.dataset.promotionId;
            }
        }

        function setPromoLoading(isLoading) {
            const btn = document.getElementById('applyPromoBtn');
            if (!btn) return;

            const txt = btn.querySelector('.btn-text');
            const loader = btn.querySelector('.btn-loader-promo');

            if (isLoading) {
                if (txt) txt.classList.add('d-none');
                if (loader) loader.classList.remove('d-none');
                btn.disabled = true;
            } else {
                if (txt) txt.classList.remove('d-none');
                if (loader) loader.classList.add('d-none');
                btn.disabled = false;
            }
        }

        function removePromoCode() {
            const promoInput = document.getElementById('promo_code');
            if (promoInput) delete promoInput.dataset.promotionId;

            currentPromotionData = null;
            currentDiscountValue = 0;

            if (typeof updateGrandTotal === 'function') updateGrandTotal();

            setPromoButtonUI(false);
            showToast('Promo code removed successfully!', 'success');
        }

        async function applyPromoCode(promoCode) {
            const token = getAuthToken();
            if (!token) {
                showToast('Please log in to apply promo codes.', 'error');
                return;
            }

            setPromoLoading(true);

            try {
                const promoResp = await window.fetch(`${PRICE_API_BASE_URL}/v1/customer/promocodes/verify`, {
                    method: 'POST',
                    headers: {
                        'Authorization': 'Bearer ' + token,
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        code: promoCode
                    })
                });

                const raw = await promoResp.text();
                let promoData = {};
                try {
                    promoData = JSON.parse(raw);
                } catch (e) {
                    promoData = {
                        raw
                    };
                }

                console.log('promoResp status:', promoResp.status);
                console.log('promoResp raw:', raw);

                if (!promoResp.ok) {
                    showToast(promoData.message || `Promo API error (${promoResp.status})`, 'error');
                    return;
                }

                if (promoData.status !== true) {
                    showToast(promoData.message || 'Invalid promo code.', 'error');
                    return;
                }

                // Save promo info
                currentPromotionData = promoData.data || null;
                currentDiscountValue = promoData?.data?.discount_value || 0;

                const promoInput = document.getElementById('promo_code');
                if (promoInput && promoData?.data?.id) {
                    promoInput.dataset.promotionId = promoData.data.id;
                }

                if (typeof updateGrandTotal === 'function') updateGrandTotal();

                setPromoButtonUI(true);
                showToast('Promo code applied successfully!', 'success');

            } catch (err) {
                console.error('Promo verify error:', err);
                showToast(err?.message || 'Network error while verifying promo code.', 'error');
            } finally {
                setPromoLoading(false);
            }
        }

        // Click handler (event delegation) — always works
        document.addEventListener('click', function(e) {
            const btn = e.target.closest('#applyPromoBtn');
            if (!btn) return;

            e.preventDefault();
            e.stopPropagation();

            const promoInput = document.getElementById('promo_code');
            const promoCode = (promoInput?.value || '').trim();
            const isApplied = btn.dataset.applied === 'true';

            if (isApplied) {
                removePromoCode();
                return;
            }

            if (!promoCode) {
                showToast('Please enter a promo code.', 'error');
                return;
            }

            applyPromoCode(promoCode);
        }, true);

        function updateGrandTotal() {
            const totalPriceEl = document.getElementById('totalPriceDisplay');
            const grandTotalEl = document.getElementById('grandTotalDisplay');
            const discountRow = document.getElementById('discountRow');
            const discountAmountEl = document.getElementById('discountAmountDisplay');

            if (!grandTotalEl) return;

            // Total (original)
            const original = currentOriginalPrice || 0;

            if (totalPriceEl) totalPriceEl.innerText = original + ' AED';

            let finalPrice = original;
            let discountAmount = 0;

            // Promo present?
            if (currentPromotionData) {
                // detect discount type from different keys
                const dtypeRaw =
                    currentPromotionData.discount_type ??
                    currentPromotionData.type ??
                    currentPromotionData.discountType ??
                    '';

                const dtype = String(dtypeRaw).toLowerCase();

                // discount value parse
                const dval = parseFloat(currentDiscountValue ?? currentPromotionData.discount_value ?? currentPromotionData
                    .value ?? 0) || 0;

                if (dval > 0) {
                    if (dtype === 'percentage' || dtype === 'percent') {
                        discountAmount = (original * dval) / 100;
                    } else {
                        discountAmount = dval; // fixed
                    }

                    // discount cap (optional)
                    if (discountAmount > original) discountAmount = original;

                    finalPrice = original - discountAmount;
                    if (finalPrice < 0) finalPrice = 0;

                    if (discountRow) discountRow.classList.remove('d-none');

                    const platform_fee_amount = document.getElementById("platform_fee_amount");
                    const tax_amount = document.getElementById("tax_amount");

                    // numeric values (handles "AED")
                    const platformFee = parseFloat((platform_fee_amount?.innerText || "0").replace("AED", "").trim()) || 0;
                    const taxAmount = parseFloat((tax_amount?.innerText || "0").replace("AED", "").trim()) || 0;

                    //  TOTAL after discount
                    const TotalAmount = finalPrice + platformFee + taxAmount;

                    if (discountAmountEl) discountAmountEl.innerText = discountAmount + ' AED';

                    // update grand total element (if you have it)
                    const gt = document.getElementById("grandTotalDisplay");
                    if (gt) gt.innerText = TotalAmount + " AED";
                } else {
                    if (discountRow) discountRow.classList.add('d-none');
                }
            } else {
                if (discountRow) discountRow.classList.add('d-none');
            }

            function getAmount(el) {
                return parseFloat(
                    (el?.innerText || "0")
                    .replace(/AED/gi, "") // remove AED (case-insensitive)
                    .replace(/,/g, "") // remove commas
                    .trim()
                ) || 0;
            }
            const platformFee = getAmount(platform_fee_amount);
            const taxAmount = getAmount(tax_amount);

            // TOTAL after discount
            const TotalAmount = finalPrice + platformFee + taxAmount;

            if (grandTotalEl) {
                grandTotalEl.innerText = TotalAmount + ' AED';
            }
        }
        const DASH_MAP_DATA_PATH = "/v1/common/dashboard/map-data";
        const DASH_MAP_DATA_URL = `${PRICE_API_BASE_URL}${DASH_MAP_DATA_PATH}`;
        const DASH_CAR_ICON_URL = `{{ asset('assets/images/ic_truck1.png') }}`;

        let dashMarkers = {}; // {id: google.maps.Marker}
        let dashInfoWindow = null; // one infowindow
        let dashTimer = null;
        let dashStarted = false; // setInterval handle

        async function initDashMarkerLibrary() {
            try {
                if (!window.google || !google.maps || !google.maps.importLibrary) return false;
                const lib = await google.maps.importLibrary("marker");
                DashAdvancedMarkerElement = lib.AdvancedMarkerElement;
                return true;
            } catch (e) {
                console.error("initDashMarkerLibrary error:", e);
                return false;
            }
        }

        function startDashAutoDrivers() {
            try {
                if (dashStarted) return;
                dashStarted = true;

                if (!map || !window.google || !google.maps) {
                    dashStarted = false;
                    setTimeout(startDashAutoDrivers, 500);
                    return;
                }

                if (!dashInfoWindow) dashInfoWindow = new google.maps.InfoWindow();

                // first call
                refreshDrivers();

                // auto refresh each 5 sec
                dashTimer = setInterval(refreshDrivers, 5000);
            } catch (e) {
                dashStarted = false;
                console.error("startDashAutoDrivers error:", e);
            }
        }

        function stopDashAutoDrivers() {
            try {
                if (dashTimer) {
                    clearInterval(dashTimer);
                    dashTimer = null;
                }
                dashStarted = false;
            } catch (e) {
                console.error("stopDashAutoDrivers error:", e);
            }
        }

        async function refreshDrivers() {
            try {
                if (!map) return;
                const resp = await fetch(DASH_MAP_DATA_URL, {
                    method: "GET",
                    headers: {
                        "Accept": "application/json"
                    }
                });

                console.log(" map-data status:", resp.status);
                if (!resp.ok) return;

                const json = await resp.json();
                const drivers = Array.isArray(json) ? json : (json.data || json.drivers || []);

                if (!Array.isArray(drivers)) return;

                updateDriverCarMarkers(drivers);

            } catch (e) {
                console.error("refreshDrivers error:", e);
            }
        }

        function buildCarCardSvg(status, carImageUrl) {

            const ring = status === "busy" ? "#ff3b30" : (status === "offline" ? "#8e8e93" : "#35c759");

            const safeImg = String(carImageUrl || "")
                .replace(/&/g, "&amp;")
                .replace(/"/g, "&quot;");

            const svg = `
<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72">

  <defs>
    <filter id="shadow" x="-20%" y="-20%" width="140%" height="140%">
      <feDropShadow dx="0" dy="3" stdDeviation="3" flood-color="#000" flood-opacity="0.25"/>
    </filter>
  </defs>

  <!-- outer ring -->
  <circle cx="36" cy="36" r="28"
      fill="#ffffff"
      stroke="${ring}"
      stroke-width="6"
      filter="url(#shadow)"/>

  <!-- white center -->
  <circle cx="36" cy="36" r="23" fill="#ffffff"/>

  <!-- truck image -->
  <image
      x="18"
      y="18"
      width="36"
      height="36"
      xlink:href="${safeImg}"
      href="${safeImg}"
      preserveAspectRatio="xMidYMid meet"
  />

</svg>`;

            const encoded = encodeURIComponent(svg.trim())
                .replace(/'/g, "%27")
                .replace(/"/g, "%22");

            return `data:image/svg+xml;charset=UTF-8,${encoded}`;
        }

        function getDriverStatus(d) {
            if (d && d.has_active_job) return "busy";
            if (d && d.is_online) return "online";
            return "offline";
        }

        function getRingColor(status) {
            if (status === "busy") return "#ff3b30"; // red
            if (status === "offline") return "#8e8e93"; // gray
            return "#35c759"; // green
        }

        /*  CREATE/UPDATE markers on map (ONLY cars) */
        function updateDriverCarMarkers(drivers) {
            try {
                if (!map || !window.google || !google.maps) return;

                const activeIds = new Set();

                drivers.forEach((d) => {
                    const id = (d && (d.id ?? d.driver_id)) ?? null;
                    if (id === null) return;

                    if (!d.current_lat || !d.current_lng) return;

                    const lat = parseFloat(d.current_lat);
                    const lng = parseFloat(d.current_lng);
                    if (!Number.isFinite(lat) || !Number.isFinite(lng)) return;

                    activeIds.add(String(id));

                    const status = getDriverStatus(d);
                    // const iconUrl = buildCarCardSvg(status, DASH_CAR_ICON_URL);
                    const iconUrl = DASH_CAR_ICON_URL;

                    const pos = {
                        lat,
                        lng
                    };

                    const title = d.full_name || "Driver";
                    const vehicleText = (d.vehicle_type || "Truck") + " • " + (d.vehicle_number || "N/A");
                    const mobile = d.mobile || "N/A";

                    const infoHtml = `
                <div style="min-width:210px">
                    <div style="font-weight:800;margin-bottom:4px">${escapeHtml(title)}</div>
                    <div style="font-size:12px;color:#666">${escapeHtml(vehicleText)}</div>
                    <div style="font-size:12px;color:#666;margin-top:6px">📞 ${escapeHtml(mobile)}</div>
                </div>
            `;

                    if (dashMarkers[String(id)]) {
                        dashMarkers[String(id)].setPosition(pos);
                        dashMarkers[String(id)].setIcon({
                            url: iconUrl,
                            scaledSize: new google.maps.Size(56, 56),
                            anchor: new google.maps.Point(28, 28),
                        });

                        google.maps.event.clearListeners(dashMarkers[String(id)], "click");
                        dashMarkers[String(id)].addListener("click", () => {
                            dashInfoWindow.setContent(infoHtml);
                            dashInfoWindow.open(map, dashMarkers[String(id)]);
                        });

                    } else {
                        const marker = new google.maps.Marker({
                            map: map,
                            position: pos,
                            title: title,
                            icon: {
                                url: DASH_CAR_ICON_URL,
                                scaledSize: new google.maps.Size(40, 40),
                                anchor: new google.maps.Point(20, 20)
                            }
                        });

                        marker.addListener("click", () => {
                            dashInfoWindow.setContent(infoHtml);
                            dashInfoWindow.open(map, marker);
                        });

                        dashMarkers[String(id)] = marker;
                    }
                });

                // remove cars not present now (ONLY car markers remove)
                Object.keys(dashMarkers).forEach((id) => {
                    if (!activeIds.has(id)) {
                        dashMarkers[id].setMap(null);
                        delete dashMarkers[id];
                    }
                });

            } catch (e) {
                console.error("updateDriverCarMarkers error:", e);
            }
        }

        function escapeHtml(str) {
            return String(str ?? "")
                .replaceAll("&", "&amp;")
                .replaceAll("<", "&lt;")
                .replaceAll(">", "&gt;")
                .replaceAll('"', "&quot;")
                .replaceAll("'", "&#039;");
        }

        /* Auto start after map is ready (no change to your initMap) */
        (function bootAutoDrivers() {
            const tryStart = () => {
                if (mapReady && map) {
                    startDashAutoDrivers();
                    return;
                }
                setTimeout(tryStart, 500);
            };
            tryStart();
        })();
    </script>
@endpush
