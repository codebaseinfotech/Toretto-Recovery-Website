@extends('layouts.main')

@section('title', 'Book-Now')

@section('content')


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
                            <a href="#" style="color: #dc3545; margin-bottom: 12px; text-decoration: underline; opacity: 0.6; pointer-events: none;" id="useCurrentLocationBtn">Use Current Location</a>
                        </div>
                        <div class="input-icon">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" id="pickup_location" name="pickup_location" placeholder="Enter start location" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Drop Location</label>
                        <div class="input-icon">
                            <i class="fa-solid fa-location-crosshairs"></i>
                            <input type="text" id="drop_location" name="drop_location" placeholder="Enter destination" required>
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
                        <div class="col-md-6">
                            <div class="distance-box p-3 bg-light rounded">
                                <h6>Distance</h6>
                                <p id="distance" class="mb-0">0.00 km</p>
                            </div>
                        </div>
                        <div class="col-md-6">
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
                                    <i class="fa-solid fa-tag position-absolute" style="left: 12px; top: 50%; transform: translateY(-50%); color: #6c757d;"></i>
                                    <input type="text" name="promo_code" id="promo_code" class="form-control" placeholder="Enter promo code">
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
                        <input class="form-check-input" type="radio" name="payment_method" id="payment_cod" value="cod" required>
                        <label class="form-check-label d-flex align-items-center gap-2" for="payment_cod">
                            <span class="fw-bold">Cash on Delivery (COD)</span>
                        </label>
                    </div>
                </div>

                <!-- SERVICE SECTION -->
                {{-- <div class="service2-card">
                    <div class="service2-header">
                        <div class="header-icon">
                            <img src="{{ asset('assets/images/img5.png') }}" alt="">
                        </div>
                        <h3>Select Service Type</h3>
                    </div>
                    <input type="hidden" name="service_type" id="service_type" required>

                    <div class="service2-item" data-value="towing">
                        <div class="service2-icon">
                            <img src="{{ asset('assets/images/service1.png') }}" alt="">
                        </div>
                        <div class="service2-content">
                            <h4>Towing Service</h4>
                            <p>Professional vehicle towing and recovery</p>
                        </div>
                    </div>

                    <div class="service2-item" data-value="transport">
                        <div class="service2-icon">
                            <img src="{{ asset('assets/images/service2.png') }}" alt="">
                        </div>
                        <div class="service2-content">
                            <h4>Vehicle Transport</h4>
                            <p>Safe vehicle pickup and drop service</p>
                        </div>
                    </div>

                    <div class="service2-item" data-value="repair">
                        <div class="service2-icon">
                            <img src="{{ asset('assets/images/service3.png') }}" alt="">
                        </div>
                        <div class="service2-content">
                            <h4>Roadside Repair</h4>
                            <p>On-site minor repair and assistance</p>
                        </div>
                    </div>
                </div> --}}

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
<div class="modal fade" id="locationPermissionModal" tabindex="-1" aria-labelledby="locationPermissionModalLabel" aria-hidden="true">
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
@endpush

@push('map-script')

<script>
const PRICE_API_BASE_URL = "{{ env('API_BASE_URL', '') }}";

const API_BEARER_TOKEN = localStorage.getItem('auth_token') || '';

const DRIVER_ICON_URL = "{{ asset('assets/images/driver-truck.png') }}";
let latestDistanceKm = 0;
let currentOriginalPrice = 0;
let currentDiscountValue = 0;
let currentPromotionData = null;

let locationPermissionGranted = false;

function checkLocationPermission() {
    if ('permissions' in navigator) {
        navigator.permissions.query({name:'geolocation'}).then(function(result) {
            if (result.state === 'granted') {
                locationPermissionGranted = true;
            } else if (result.state === 'prompt') {
                // show modal
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
            // if denied, do nothing
        });
    } else {
        // permissions API not supported, assume granted to keep old behavior
        locationPermissionGranted = true;
    }
}

function loadGoogleMapsScript() {
    // Check if Google Maps API is already loaded
    if (window.google && window.google.maps) {
        // Maps API already loaded, initialize directly
        initMapAndAutocomplete();
        return;
    }

    const script = document.createElement('script');
    // Modified callback to handle map initialization after API loads
    script.src = `https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_API') }}&libraries=places,directions,distance_matrix&callback=initMapAndAutocomplete`;
    script.async = true;
    script.defer = true;
    document.head.appendChild(script);
}

let pickupAutocomplete, dropAutocomplete;
let map, pickupMarker, dropMarker, directionsRenderer;
let directionsService;

function initMapAndAutocomplete() {
    initMap();
    initAutocomplete();

    if (locationPermissionGranted) {
        setTimeout(getUserLiveLocation, 500);
    }

    // Enable the "Use Current Location" button after map is ready
    setTimeout(() => {
        const useCurrentLocationBtn = document.getElementById('useCurrentLocationBtn');
        if (useCurrentLocationBtn) {
            useCurrentLocationBtn.style.opacity = '1';
            useCurrentLocationBtn.style.pointerEvents = 'auto';
            console.log('Use Current Location button enabled');
        }
    }, 1000);
}

function initMap() {
    // Initialize the Google map
    const uaeCenter = { lat: 24.4539, lng: 54.3773 }; // UAE center
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 6,
        center: uaeCenter,
        restriction: {
            latLngBounds: {
                north: 26.0555,
                south: 22.4969,
                west: 51.5795,
                east: 56.3967
            },
            strictBounds: true
        }
    });

    // Initialize directions service and renderer
    directionsService = new google.maps.DirectionsService();
    directionsRenderer = new google.maps.DirectionsRenderer({
        map: map,
        suppressMarkers: true,
        polylineOptions: {
            strokeColor: 'red',
            strokeWeight: 4
        }
    });
}

function initAutocomplete() {
    // 🇦🇪 UAE Boundaries
    const uaeBounds = new google.maps.LatLngBounds(
        new google.maps.LatLng(22.4969, 51.5795),
        new google.maps.LatLng(26.0555, 56.3967)
    );

    const autocompleteOptions = {
        types: ['establishment'],
        bounds: uaeBounds,
        strictBounds: true,
        componentRestrictions: {
            country: ['AE'] // 🇦🇪 UAE only
        }
    };

    // Safely initialize autocompletes with checks
    const pickupElement = document.getElementById('pickup_location');
    const dropElement = document.getElementById('drop_location');

    if (pickupElement) {
        pickupAutocomplete = new google.maps.places.Autocomplete(
            pickupElement,
            autocompleteOptions
        );

        // Add listener with error handling
        pickupAutocomplete.addListener('place_changed', function() {
            try {
                onPickupChanged();
            } catch (error) {
                // Fallback: ensure input value is set properly
                const element = document.getElementById('pickup_location');
                if (element && pickupAutocomplete) {
                    const place = pickupAutocomplete.getPlace();
                    if (place && place.name) {
                        element.value = place.name;
                    }
                }
            }
        });
    }

    if (dropElement) {
        dropAutocomplete = new google.maps.places.Autocomplete(
            dropElement,
            autocompleteOptions
        );

        // Add listener with error handling
        dropAutocomplete.addListener('place_changed', function() {
            try {
                onDropChanged();
            } catch (error) {
                // Fallback: ensure input value is set properly
                const element = document.getElementById('drop_location');
                if (element && dropAutocomplete) {
                    const place = dropAutocomplete.getPlace();
                    if (place && place.name) {
                        element.value = place.name;
                    }
                }
            }
        });
    }
}

function onPickupChanged() {
    const place = pickupAutocomplete.getPlace();

    if (!place.geometry) {
        showToast('Please select a valid location within the UAE.', 'error');
        const pickupElement = document.getElementById('pickup_location');
        if (pickupElement) pickupElement.value = '';
        return;
    }

    const lat = place.geometry.location.lat();
    const lng = place.geometry.location.lng();

    if (!isLocationInUAE(lat, lng)) {
        showToast('Please select a valid location within the UAE.', 'error');
        const pickupElement = document.getElementById('pickup_location');
        if (pickupElement) pickupElement.value = '';
        return;
    }

    // Remove existing pickup marker if present
    if (pickupMarker) {
        pickupMarker.setMap(null);
    }

    // Create new pickup marker
    pickupMarker = new google.maps.Marker({
        position: { lat: lat, lng: lng },
        map: map,
        title: 'Pickup: ' + place.name,
        icon: {
            url: "{{ asset('assets/images/pin.png') }}", // Using a pin icon for pickup
            scaledSize: new google.maps.Size(30, 30)
        }
    });

    // Add info window to the marker
    const pickupInfoWindow = new google.maps.InfoWindow({
        content: 'Pickup: ' + place.name
    });
    pickupInfoWindow.open(map, pickupMarker);

    // Safely update the input field value
    const pickupElement = document.getElementById('pickup_location');
    if (pickupElement && place.name) {
        pickupElement.value = place.name;
    }

    // Pan to the marker location
    map.panTo({ lat: lat, lng: lng });
    map.setZoom(15);

    // Draw route with a small delay to ensure everything is ready
    if (dropMarker) {
        setTimeout(drawRoute, 300);
    }
}

function onDropChanged() {
    const place = dropAutocomplete.getPlace();

    if (!place.geometry) {
        showToast('Please select a valid location within the UAE.', 'error');
        const dropElement = document.getElementById('drop_location');
        if (dropElement) dropElement.value = '';
        return;
    }

    const lat = place.geometry.location.lat();
    const lng = place.geometry.location.lng();

    // Remove existing drop marker if present
    if (dropMarker) {
        dropMarker.setMap(null);
    }

    // Create new drop marker
    dropMarker = new google.maps.Marker({
        position: { lat: lat, lng: lng },
        map: map,
        title: 'Drop: ' + place.name,
        icon: {
            url: "{{ asset('assets/images/pin.png') }}", // Using a pin icon for drop
            scaledSize: new google.maps.Size(30, 30)
        }
    });

    // Add info window to the marker
    const dropInfoWindow = new google.maps.InfoWindow({
        content: 'Drop: ' + place.name
    });
    dropInfoWindow.open(map, dropMarker);

    // Safely update the input field value
    const dropElement = document.getElementById('drop_location');
    if (dropElement && place.name) {
        dropElement.value = place.name;
    }

    // Pan to the marker location
    map.panTo({ lat: lat, lng: lng });
    map.setZoom(15);

    // Draw route with a small delay to ensure everything is ready
    if (pickupMarker) {
        setTimeout(drawRoute, 300);
    }
}

function getAuthToken() {
    const localStorageToken = localStorage.getItem('auth_token');
    if (localStorageToken && localStorageToken !== '') {
        return localStorageToken;
    }

    if (API_BEARER_TOKEN && API_BEARER_TOKEN !== '') {
        return API_BEARER_TOKEN;
    }

    const tokenMeta = document.querySelector('meta[name="api-token"]');
    if (tokenMeta) {
        return tokenMeta.getAttribute('content');
    }

    if (typeof window.userApiToken !== 'undefined') {
        return window.userApiToken;
    }

    return '';
}

async function fetchPriceFromAPI(latitude, longitude, km) {
    try {
        const priceEl = document.getElementById('price');
        const totalPriceEl = document.getElementById('totalPriceDisplay');
        const grandTotalEl = document.getElementById('grandTotalDisplay');

        // Reset displays
        if (priceEl) priceEl.innerText = '0.00';
        if (totalPriceEl) totalPriceEl.innerText = '0.00';
        if (grandTotalEl) grandTotalEl.innerText = '0.00';

        const token = getAuthToken();
        const response = await window.ApiUtils.fetch(`${PRICE_API_BASE_URL}/v1/customer/price/calculate`, {
            method: 'POST',
            headers: {
                'Authorization': 'Bearer ' + token
            },
            body: JSON.stringify({
                latitude: latitude,
                longitude: longitude,
                km: km
            })
        });

        if (!response.ok) {
            throw new Error(`API responded with status ${response.status}`);
        }

        const data = await response.json();



        const price =
            (data && data.data && data.data.price) ??
            data?.price ??
            data?.data?.amount ??
            data?.amount ??
            data?.data?.total ??
            data?.total;

        if (price !== null && price !== undefined && !isNaN(parseFloat(price))) {
            const priceValue = parseFloat(price);
            currentOriginalPrice = priceValue; // Store original price

            // Update all price displays
            if (priceEl) priceEl.innerText = priceValue.toFixed(2) + ' AED';
            updateGrandTotal(); // This will update all displays
        } else {
            if (priceEl) priceEl.innerText = '0.00 AED';
            currentOriginalPrice = 0;
            updateGrandTotal();

        }
    } catch (error) {

        const priceEl = document.getElementById('price');
        const fallbackPrice = (50 + km * 12);
        currentOriginalPrice = fallbackPrice;

        if (priceEl) priceEl.innerText = fallbackPrice.toFixed(2) + ' AED';
        updateGrandTotal();
    }
}

// Helper function to calculate and display price calculation
function updateGrandTotal() {
    const totalPriceEl = document.getElementById('totalPriceDisplay');
    const grandTotalEl = document.getElementById('grandTotalDisplay');
    const discountRow = document.getElementById('discountRow');
    const discountAmountEl = document.getElementById('discountAmountDisplay');

    if (!grandTotalEl) return;

    // Update total price display
    if (totalPriceEl) {
        totalPriceEl.innerText = currentOriginalPrice.toFixed(2) + ' AED';
    }

    let finalPrice = currentOriginalPrice;
    let discountAmount = 0;

    // Apply discount if available
    if (currentPromotionData && currentDiscountValue > 0) {
        // Check if discount is percentage or fixed amount
        if (currentPromotionData.discount_type === 'percentage') {
            discountAmount = (currentOriginalPrice * currentDiscountValue) / 100;
        } else {
            // Fixed amount discount
            discountAmount = currentDiscountValue;
        }

        finalPrice = currentOriginalPrice - discountAmount;

        // Ensure price doesn't go below zero
        if (finalPrice < 0) finalPrice = 0;

        // Show discount row
        if (discountRow) {
            discountRow.classList.remove('d-none');
        }

        // Update discount display
        if (discountAmountEl) {
            discountAmountEl.innerText = discountAmount.toFixed(2) + ' AED';
        }
    } else {
        // Hide discount section if no discount
        if (discountRow) {
            discountRow.classList.add('d-none');
        }
    }

    // Update grand total display
    grandTotalEl.innerText = finalPrice.toFixed(2) + ' AED';
}

function showToast(message, type = 'success') {
    // Special handling for booking success message
    if (message.includes('Thank you for choosing Toretto Recovery Services')) {
        showBookingSuccessPopup();
        return;
    }

    let swalIcon = type === 'error' ? 'error' : type === 'warning' ? 'warning' : type === 'info' ? 'info' : 'success';

    let background = '#FFFFFF';
    let color;
    switch(type) {
        case 'error':
            color = '#dc3545';
            break;
        case 'warning':
            color = '#ffc107';
            break;
        case 'info':
            color = '#17a2b8'; // Blue for info
            break;
        default: // success
            color = '#28a745'; // Green for success
    }

    // Customize title based on the page and action
    let toastTitle = message.toLowerCase().includes('booking') || message.toLowerCase().includes('book') ? 'Booking Status' :
                    message.toLowerCase().includes('promo') || message.toLowerCase().includes('code') ? 'Promo Code' :
                    message.toLowerCase().includes('success') ? 'Booking Success' :
                    type === 'error' ? 'Booking Error' :
                    type === 'warning' ? 'Attention Required' :
                    type === 'info' ? 'Information' : 'Service Status';

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

function showBookingSuccessPopup() {
    Swal.fire({
        title: '<strong style="font-size: 24px;">Thank You!</strong>',
        html: `
            <div style="text-align: center; max-width: 500px; margin: 0 auto; font-family: 'Avenir', sans-serif;">
                <p style="font-size: 16px; margin-bottom: 15px; font-family: 'Avenir', sans-serif;">
                    Thank you for choosing Toretto Recovery Services.
                </p>
                <p style="font-size: 16px; margin-bottom: 15px; font-family: 'Avenir', sans-serif;">
                    Your nearest recovery driver is currently being assigned.
                </p>
                <p style="font-size: 16px; margin-bottom: 15px; font-family: 'Avenir', sans-serif;">
                    To receive real-time updates, driver contact details, and live tracking, please continue using our mobile application.
                </p>
                <p style="font-size: 16px; margin-bottom: 20px; font-weight: bold; font-family: 'Avenir', sans-serif;">
                    Track your recovery vehicle in real time
                </p>
                <div style="margin-bottom: 25px;">
                    <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                        <a href="#" target="_blank" style="display: inline-block;">
                            <img src="{{ asset('assets/images/google-play.png') }}" alt="Google Play" style="height: 50px; width: auto; transition: transform 0.2s;">
                        </a>
                        <a href="#" target="_blank" style="display: inline-block;">
                            <img src="{{ asset('assets/images/app-store.png') }}" alt="App Store" style="height: 50px; width: auto; transition: transform 0.2s;">
                        </a>
                    </div>
                </div>
                <p style="font-size: 14px; margin-top: 20px; color: #666; text-align: center; font-family: 'Avenir', sans-serif;">
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
                    " onmouseover="this.style.backgroundColor='#c82333'; this.style.boxShadow='0 4px 12px rgba(220,53,69,0.4)';" onmouseout="this.style.backgroundColor='#dc3545'; this.style.boxShadow='0 2px 6px rgba(220,53,69,0.3)';">
                        Go to Home Screen
                    </button>
                </div>
            </div>
        `,
        showConfirmButton: false,
        showCloseButton: true,
        width: '600px',
        padding: '30px',
        willClose: () => {
            // Clear the form instead of reloading the page
            document.getElementById('bookingForm').reset();

            // Reset all displays
            document.getElementById('distance').innerText = '0.00 km';
            document.getElementById('price').innerText = '0.00 AED';
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

                // Clear promo code input
                const promoInput = document.getElementById('promo_code');
                if (promoInput) {
                    promoInput.value = '';
                }
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

            // Clear directions
            if (directionsRenderer) {
                directionsRenderer.setDirections({routes: []});
            }

            // Reset price calculation variables
            latestDistanceKm = 0;
            currentOriginalPrice = 0;
            currentDiscountValue = 0;
            currentPromotionData = null;
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

// We're removing the driver functionality since it was causing conflicts
// Adding the missing drawRoute function

function drawRoute() {
    if (!pickupMarker || !dropMarker || !map || !directionsService || !directionsRenderer) {
        console.log("Missing required elements for route drawing:", {
            pickupMarker: !!pickupMarker,
            dropMarker: !!dropMarker,
            map: !!map,
            directionsService: !!directionsService,
            directionsRenderer: !!directionsRenderer
        });
        return;
    }

    // Get positions of markers
    const pickupPos = pickupMarker.getPosition();
    const dropPos = dropMarker.getPosition();

    // Clear any existing route
    directionsRenderer.setDirections({routes: []});

    // Request directions
    directionsService.route(
        {
            origin: pickupPos,
            destination: dropPos,
            travelMode: google.maps.TravelMode.DRIVING
        },
        (response, status) => {
            if (status === google.maps.DirectionsStatus.OK && response.routes.length > 0) {
                // Display the route on the map
                directionsRenderer.setDirections(response);

                // Calculate distance from the route
                let totalDistance = 0;
                for (let i = 0; i < response.routes[0].legs.length; i++) {
                    totalDistance += response.routes[0].legs[i].distance.value;
                }

                // Convert to km and update global variable
                latestDistanceKm = totalDistance / 1000;

                // Update distance display
                const distanceEl = document.getElementById("distance");
                if (distanceEl) {
                    distanceEl.innerText = latestDistanceKm.toFixed(2) + " km";
                }

                map.fitBounds(response.routes[0].bounds);
            } else {
                // Handle error
                showToast("Unable to calculate route between selected locations. Please try different locations.", "error");

                // Show straight line as fallback
                const lineCoordinates = [
                    pickupPos,
                    dropPos
                ];

                const straightLine = new google.maps.Polyline({
                    path: lineCoordinates,
                    geodesic: true,
                    strokeColor: '#FF0000',
                    strokeOpacity: 1.0,
                    strokeWeight: 3
                });

                straightLine.setMap(map);
                map.fitBounds(new google.maps.LatLngBounds(pickupPos, dropPos));
            }
        }
    );
}


document.addEventListener('DOMContentLoaded', function () {
    checkLocationPermission();
    loadGoogleMapsScript();

    // Check for pending booking data after a slight delay to ensure map is ready
    setTimeout(checkPendingBookingData, 1000);

    const bookingBtn = document.getElementById('bookingSubmitBtn');
    const bookingBtnText = bookingBtn ? bookingBtn.querySelector('.btn-text') : null;
    const bookingBtnLoader = bookingBtn ? bookingBtn.querySelector('.btn-loader') : null;

    // Promo code apply button functionality
    const applyPromoBtn = document.getElementById('applyPromoBtn');
    const promoInput = document.getElementById('promo_code');
    const promoMessage = document.getElementById('promoMessage');
    const promoBtnText = applyPromoBtn ? applyPromoBtn.querySelector('.btn-text') : null;
    const promoBtnLoader = applyPromoBtn ? applyPromoBtn.querySelector('.btn-loader-promo') : null;

    if (applyPromoBtn) {
        applyPromoBtn.addEventListener('click', async function() {
            const isApplied = applyPromoBtn.dataset.applied === 'true';
            const promoCode = promoInput.value.trim();

            if (isApplied) {
                removePromoCode();
                return;
            }

            if (!promoCode) {
                showPromoMessage('Please enter a promo code.', 'error');
                return;
            }

            if (promoBtnText && promoBtnLoader) {
                promoBtnText.classList.add('d-none');
                promoBtnLoader.classList.remove('d-none');
                applyPromoBtn.disabled = true;
            }

            const token = getAuthToken();
            if (!token) {
                showPromoMessage('Please log in to apply promo codes.', 'error');
                resetPromoButton();
                return;
            }

            try {
                const promoResp = await window.ApiUtils.fetch(`${PRICE_API_BASE_URL}/v1/customer/promocodes/verify`, {
                    method: 'POST',
                    headers: {
                        'Authorization': 'Bearer ' + token
                    },
                    body: JSON.stringify({ code: promoCode })
                });

                const promoData = await promoResp.json();

                if (!promoResp.ok || promoData.status !== true) {
                    showPromoMessage(promoData.message || 'Invalid promo code.', 'error');
                } else {
                    showPromoMessage('Promo code applied successfully!', 'success');

                    // Store promotion data
                    if (promoData.data) {
                        currentPromotionData = promoData.data;
                        // Extract discount value from the API response
                        currentDiscountValue = promoData.data.discount_value || 0;

                        // Store the promotion ID for use in booking
                        if (promoData.data.id) {
                            document.getElementById('promo_code').dataset.promotionId = promoData.data.id;
                        }

                        // Update grand total with discount
                        updateGrandTotal();
                    }

                    // Change button to Remove state
                    setPromoButtonState(true);
                }
            } catch (err) {
                showPromoMessage('Failed to verify promo code. Please try again.', 'error');
            } finally {
                resetPromoButton();
            }
        });
    }

    function showPromoMessage(message, type) {
        showToast(message, type);
    }

    function resetPromoButton() {
        if (promoBtnText && promoBtnLoader) {
            promoBtnText.classList.remove('d-none');
            promoBtnLoader.classList.add('d-none');
            applyPromoBtn.disabled = false;
        }
    }

    function setPromoButtonState(applied) {
        if (applyPromoBtn && promoBtnText) {
            applyPromoBtn.dataset.applied = applied.toString();
            if (applied) {
                promoBtnText.textContent = 'Remove';
            } else {
                promoBtnText.textContent = 'Apply';
                // Clear the promo input
                if (promoInput) {
                    promoInput.value = '';
                }
            }
        }
    }

    function removePromoCode() {
        // Remove the promotion ID
        const promoInputElement = document.getElementById('promo_code');
        if (promoInputElement) {
            delete promoInputElement.dataset.promotionId;
        }

        // Reset promotion data
        currentPromotionData = null;
        currentDiscountValue = 0;

        // Update grand total (without discount)
        updateGrandTotal();

        // Show success message
        showPromoMessage('Promo code removed successfully!', 'success');

        // Change button back to Apply state
        setPromoButtonState(false);
    }

    // Calculate Price button functionality
    const calculatePriceBtn = document.getElementById('calculatePriceBtn');
    const calculatePriceBtnText = calculatePriceBtn ? calculatePriceBtn.querySelector('.btn-text') : null;
    const calculatePriceBtnLoader = calculatePriceBtn ? calculatePriceBtn.querySelector('.btn-loader-price') : null;

    if (calculatePriceBtn) {
        calculatePriceBtn.addEventListener('click', async function() {
            const pickupElement = document.getElementById('pickup_location');
            const dropElement = document.getElementById('drop_location');

            if (!pickupElement || !dropElement) {
                showToast('Pickup or drop location elements not found', 'error');
                return;
            }

            const pickupLocation = pickupElement.value;
            const dropLocation = dropElement.value;

            if (!pickupLocation || !dropLocation) {
                showToast('Please enter both pickup and drop locations', 'error');
                return;
            }

            if (!pickupMarker || !dropMarker) {
                showToast('Please select valid pickup and drop locations on the map.', 'error');
                return;
            }

            if (latestDistanceKm <= 0) {
                showToast('Distance could not be calculated. Please ensure both locations are valid.', 'error');
                return;
            }

            if (calculatePriceBtnText && calculatePriceBtnLoader) {
                calculatePriceBtn.disabled = true;
                calculatePriceBtnText.classList.add('d-none');
                calculatePriceBtnLoader.classList.remove('d-none');
            }

            const token = getAuthToken();

            if (!token) {
                const bookingData = {
                    pickup_location: pickupLocation,
                    drop_location: dropLocation,
                    pickup_coords: pickupMarker ? { lat: pickupMarker.getPosition().lat(), lng: pickupMarker.getPosition().lng() } : null,
                    drop_coords: dropMarker ? { lat: dropMarker.getPosition().lat(), lng: dropMarker.getPosition().lng() } : null,
                    distance: latestDistanceKm,
                    timestamp: Date.now()
                };

                localStorage.setItem('pending_booking', JSON.stringify(bookingData));

                window.location.href = '{{ route("login") }}';
                return;
            }

            const pickupLatLng = pickupMarker.getPosition();

            try {
                await fetchPriceFromAPI(pickupLatLng.lat(), pickupLatLng.lng(), latestDistanceKm);
                showToast('Price calculated successfully!', 'success');
            } catch (error) {

                showToast('Failed to calculate price. Please try again.', 'error');
            } finally {
                if (calculatePriceBtnText && calculatePriceBtnLoader) {
                    calculatePriceBtn.disabled = false;
                    calculatePriceBtnText.classList.remove('d-none');
                    calculatePriceBtnLoader.classList.add('d-none');
                }
            }
        });
    }

    // Use Current Location button functionality
    const useCurrentLocationBtn = document.getElementById('useCurrentLocationBtn');
    if (useCurrentLocationBtn) {
        useCurrentLocationBtn.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Use Current Location button clicked');

            // Check if map is ready
            if (!map) {
                console.log('Map not ready yet, showing loading message');
                showToast('Map is still loading. Please wait a moment and try again.', 'info');
                return;
            }

            getUserLiveLocation();
        });
    } else {
        console.error('Use Current Location button not found');
    }

    // Booking form submission functionality
    document.getElementById('bookingForm').addEventListener('submit', async function(e) {
        e.preventDefault();

        const pickupElement = document.getElementById('pickup_location');
        const dropElement = document.getElementById('drop_location');
        const promoElement = document.getElementById('promo_code');

        if (!pickupElement || !dropElement) {
            showToast('Pickup or drop location elements not found','error');
            return;
        }

        const pickupLocation = pickupElement.value;
        const dropLocation = dropElement.value;
        const promoCode = promoElement ? promoElement.value : '';

        if (!pickupLocation || !dropLocation) {
            showToast('Please enter both pickup and drop locations','error');
            return;
        }

        if (!pickupMarker || !dropMarker) {
            showToast('Please select valid pickup and drop locations on the map.','error');
            return;
        }

        if (latestDistanceKm <= 0) {
            showToast('Distance could not be calculated. Please ensure both locations are valid.','error');
            return;
        }

        if (bookingBtn && bookingBtnText && bookingBtnLoader) {
            bookingBtn.disabled = true;
            bookingBtnText.classList.add('d-none');
            bookingBtnLoader.classList.remove('d-none');
        }

        const token = getAuthToken();

        if (!token) {
            const bookingData = {
                pickup_location: pickupLocation,
                drop_location: dropLocation,
                pickup_coords: pickupMarker ? { lat: pickupMarker.getPosition().lat(), lng: pickupMarker.getPosition().lng() } : null,
                drop_coords: dropMarker ? { lat: dropMarker.getPosition().lat(), lng: dropMarker.getPosition().lng() } : null,
                distance: latestDistanceKm,
                timestamp: Date.now()
            };

            localStorage.setItem('pending_booking', JSON.stringify(bookingData));

            window.location.href = '{{ route("login") }}';
            return;
        }

        const pickupLatLng = pickupMarker.getPosition();
        const dropLatLng = dropMarker.getPosition();

        let promotionId = null;

        const promoInputElement = document.getElementById('promo_code');
        if (promoInputElement && promoInputElement.dataset.promotionId) {
            promotionId = promoInputElement.dataset.promotionId;
        } else if (promoCode) {
            try {
                const promoResp = await window.ApiUtils.fetch(`${PRICE_API_BASE_URL}/v1/customer/promocodes/verify`, {
                    method: 'POST',
                    headers: {
                        'Authorization': 'Bearer ' + token
                    },
                    body: JSON.stringify({ code: promoCode })
                });

                const promoData = await promoResp.json();

                if (!promoResp.ok || promoData.status !== true) {
                    showToast(promoData.message || 'Invalid promo code.', 'error');
                    if (bookingBtn && bookingBtnText && bookingBtnLoader) {
                        bookingBtn.disabled = false;
                        bookingBtnText.classList.remove('d-none');
                        bookingBtnLoader.classList.add('d-none');
                    }
                    return;
                }

                if (promoData.data && promoData.data.id) {
                    promotionId = promoData.data.id;
                    // Also store discount data for display
                    currentPromotionData = promoData.data;
                    currentDiscountValue = promoData.data.discount_value || 0;
                    updateGrandTotal();
                }
            } catch (err) {
                showToast('Please try again.', 'error');
                if (bookingBtn && bookingBtnText && bookingBtnLoader) {
                    bookingBtn.disabled = false;
                    bookingBtnText.classList.remove('d-none');
                    bookingBtnLoader.classList.add('d-none');
                }
                return;
            }
        }

        // Build booking payload
        const bookingPayload = {
            service_type_id: 1,
            pickup_address: pickupLocation,
            pickup_lat: pickupLatLng.lat(),
            pickup_lng: pickupLatLng.lng(),
            dropoff_address: dropLocation,
            dropoff_lat: dropLatLng.lat(),
            dropoff_lng: dropLatLng.lng(),
            distance_km: latestDistanceKm
        };

        if (promotionId) {
            bookingPayload.promotion_id = promotionId;
        }

        try {
            const bookingResp = await window.ApiUtils.fetch(`${PRICE_API_BASE_URL}/v1/customer/bookings`, {
                method: 'POST',
                headers: {
                    'Authorization': 'Bearer ' + token
                },
                body: JSON.stringify(bookingPayload)
            });

            const bookingData = await bookingResp.json();

            if (!bookingResp.ok || bookingData.status !== true) {
                showToast(bookingData.message || 'Please try again.', 'error');
                if (bookingBtn && bookingBtnText && bookingBtnLoader) {
                    bookingBtn.disabled = false;
                    bookingBtnText.classList.remove('d-none');
                    bookingBtnLoader.classList.add('d-none');
                }
                return;
            }

            const successMessage = `Thank you for choosing Toretto Recovery Services.

            Your nearest recovery driver is currently being assigned.

            To receive real-time updates, driver contact details, and live tracking, please continue using our mobile application.

            Track your recovery vehicle in real time

            [Open App / Download App]

            Note: Service updates and driver communication are available only in the mobile app.`;
            showToast(successMessage, 'success');

            if (bookingBtn && bookingBtnText && bookingBtnLoader) {
                bookingBtn.disabled = false;
                bookingBtnText.classList.remove('d-none');
                bookingBtnLoader.classList.add('d-none');
            }
        } catch (err) {
            showToast('Please try again.', 'error');
            if (bookingBtn && bookingBtnText && bookingBtnLoader) {
                bookingBtn.disabled = false;
                bookingBtnText.classList.remove('d-none');
                bookingBtnLoader.classList.add('d-none');
            }
        }

        if (bookingBtn && bookingBtnText && bookingBtnLoader) {
            bookingBtn.disabled = false;
            bookingBtnText.classList.remove('d-none');
            bookingBtnLoader.classList.add('d-none');
        }
    });
});

function checkPendingBookingData() {
    const pendingBooking = localStorage.getItem('pending_booking');

    if (pendingBooking) {
        try {
            const bookingData = JSON.parse(pendingBooking);

            const oneHour = 60 * 60 * 1000;
            if (Date.now() - bookingData.timestamp > oneHour) {
                localStorage.removeItem('pending_booking');
                return;
            }

            if (bookingData.pickup_location) {
                const pickupElement = document.getElementById('pickup_location');
                if (pickupElement) {
                    setAutocompleteValue(pickupElement, pickupAutocomplete, bookingData.pickup_location);
                }
            }

            if (bookingData.drop_location) {
                const dropElement = document.getElementById('drop_location');
                if (dropElement) {
                    setAutocompleteValue(dropElement, dropAutocomplete, bookingData.drop_location);
                }
            }

            if (bookingData.pickup_coords && map) {
                if (pickupMarker) {
                    pickupMarker.setMap(null);
                }

                pickupMarker = new google.maps.Marker({
                    position: { lat: bookingData.pickup_coords.lat, lng: bookingData.pickup_coords.lng },
                    map: map,
                    title: 'Pickup Location: ' + bookingData.pickup_location,
                    icon: {
                        url: "{{ asset('assets/images/pin.png') }}",
                        scaledSize: new google.maps.Size(30, 30)
                    }
                });

                const pickupInfoWindow = new google.maps.InfoWindow({
                    content: 'Pickup Location: ' + bookingData.pickup_location
                });
                pickupInfoWindow.open(map, pickupMarker);

                map.panTo({ lat: bookingData.pickup_coords.lat, lng: bookingData.pickup_coords.lng });
                map.setZoom(15);
            }

            if (bookingData.drop_coords && map) {
                if (dropMarker) {
                    dropMarker.setMap(null);
                }

                dropMarker = new google.maps.Marker({
                    position: { lat: bookingData.drop_coords.lat, lng: bookingData.drop_coords.lng },
                    map: map,
                    title: 'Drop Location: ' + bookingData.drop_location,
                    icon: {
                        url: "{{ asset('assets/images/pin.png') }}",
                        scaledSize: new google.maps.Size(30, 30)
                    }
                });

                const dropInfoWindow = new google.maps.InfoWindow({
                    content: 'Drop Location: ' + bookingData.drop_location
                });
                dropInfoWindow.open(map, dropMarker);
            }

            if (bookingData.distance) {
                const distanceElement = document.getElementById('distance');
                if (distanceElement) {
                    latestDistanceKm = bookingData.distance;
                    distanceElement.innerText = bookingData.distance.toFixed(2) + " km";
                }
            }

            if (pickupMarker && dropMarker) {
                drawRoute();

                setTimeout(async () => {
                    if (latestDistanceKm > 0) {
                        const pickupLatLng = pickupMarker.getPosition();
                        await fetchPriceFromAPI(pickupLatLng.lat(), pickupLatLng.lng(), latestDistanceKm);
                    } else {
                        const pickupElement = document.getElementById('pickup_location');
                        const dropElement = document.getElementById('drop_location');

                        if (pickupElement && dropElement && pickupElement.value && dropElement.value) {
                            calculateDistanceByLatLng();

                            setTimeout(async () => {
                                if (latestDistanceKm > 0) {
                                    const pickupLatLng = pickupMarker.getPosition();
                                    await fetchPriceFromAPI(pickupLatLng.lat(), pickupLatLng.lng(), latestDistanceKm);
                                }
                            }, 1000);
                        }
                    }
                }, 500);
            } else {
                setTimeout(() => {
                    showToast('Your booking data has been restored!', 'success');
                }, 1000);
            }

            localStorage.removeItem('pending_booking');

        } catch (error) {

            localStorage.removeItem('pending_booking');
        }
    }
}

function setAutocompleteValue(inputElement, autocompleteInstance, value) {
    if (!inputElement || !autocompleteInstance) return;

    inputElement.value = value;

    inputElement.dispatchEvent(new Event('input', { bubbles: true }));
    inputElement.dispatchEvent(new Event('change', { bubbles: true }));
}

function isLocationInUAE(lat, lng) {
    // UAE coordinates boundaries
    const uaeMinLat = 22.4969;
    const uaeMaxLat = 26.0555;
    const uaeMinLng = 51.5795;
    const uaeMaxLng = 56.3967;

    return (lat >= uaeMinLat && lat <= uaeMaxLat &&
            lng >= uaeMinLng && lng <= uaeMaxLng);
}

function getUserLiveLocation() {
    console.log('getUserLiveLocation called');

    if (!navigator.geolocation) {
        console.error('Geolocation is not supported by this browser');
        showToast("Geolocation is not supported by your browser. Please enter pickup location manually.", "error");
        return;
    }

    console.log('Requesting geolocation...');

    navigator.geolocation.getCurrentPosition(
        (position) => {
            console.log('Geolocation success:', position);
            const lat = position.coords.latitude;
            const lng = position.coords.longitude;

            if (!lat || !lng) {
                console.error('Invalid coordinates received');
                showToast(
                    "Unable to determine your location. Please enter pickup location manually.",
                    "info"
                );
                return;
            }

            console.log('Coordinates:', lat, lng);

            // Check if map is initialized
            if (!map) {
                console.error('Map not initialized yet');
                showToast("Map is still loading. Please try again in a moment.", "warning");
                return;
            }

            if (!isLocationInUAE(lat, lng)) {
                console.log('Location is outside UAE');
                const pickupElement = document.getElementById('pickup_location');
                const dropElement = document.getElementById('drop_location');
                if (pickupElement && dropElement && pickupElement.value.trim() === '' && dropElement.value.trim() === '') {
                    showToast(
                        "Your current location is outside UAE. Please select pickup location manually.",
                        "warning"
                    );
                }
                return;
            }

            console.log('Setting pickup location from coordinates');
            setPickupFromLatLng(lat, lng);
        },
        (error) => {
            console.error('Geolocation error:', error);
            let errorMessage = "Unable to fetch your location. Please enter pickup location manually.";

            switch(error.code) {
                case error.PERMISSION_DENIED:
                    errorMessage = "Location access denied. Please enable location services to use this feature.";
                    break;
                case error.POSITION_UNAVAILABLE:
                    errorMessage = "Location information is unavailable. Please try again later.";
                    break;
                case error.TIMEOUT:
                    errorMessage = "The request to get your location timed out. Please try again.";
                    break;
                case error.UNKNOWN_ERROR:
                default:
                    errorMessage = "An unknown error occurred while getting your location.";
                    break;
            }

            showToast(errorMessage, "error");
        },
        {
            enableHighAccuracy: true,
            timeout: 15000,
            maximumAge: 60000
        }
    );
}

function setPickupFromLatLng(lat, lng) {
    const geocoder = new google.maps.Geocoder();

    geocoder.geocode(
        { location: { lat: lat, lng: lng } },
        (results, status) => {
            if (status === "OK" && results && results.length > 0) {
                const address = results[0].formatted_address;

                const pickupInput = document.getElementById("pickup_location");
                if (pickupInput) {
                    pickupInput.value = address;
                }

                if (pickupMarker) {
                    pickupMarker.setMap(null);
                }

                pickupMarker = new google.maps.Marker({
                    position: { lat: lat, lng: lng },
                    map: map,
                    title: "Your Current Location",
                    icon: {
                        url: "{{ asset('assets/images/pin.png') }}",
                        scaledSize: new google.maps.Size(30, 30)
                    }
                });

                const pickupInfoWindow = new google.maps.InfoWindow({
                    content: "Your Current Location"
                });
                pickupInfoWindow.open(map, pickupMarker);

                map.panTo({ lat: lat, lng: lng });
                map.setZoom(15);

                showToast("Pickup location set to your current location", "success");

                if (dropMarker && pickupMarker) {
                    setTimeout(drawRoute, 500);
                }
            } else {
                showToast(
                    "Unable to detect address from your location",
                    "error"
                );
            }
        }
    );
}

</script>
@endpush
