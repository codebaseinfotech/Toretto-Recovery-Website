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
                            <a href="#" style="color: #dc3545; margin-bottom: 12px; text-decoration: underline;" id="useCurrentLocationBtn">Use Current Location</a>
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
                    <div class="row align-items-end">
                        <div class="col-md-8">
                            <div class="form-group mb-0">
                                <label>Promo Code</label>
                                <div class="input-icon">
                                    <i class="fa-solid fa-tag"></i>
                                    <input type="text" name="promo_code" id="promo_code" placeholder="Enter promo code">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
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
</style>
@endpush

@push('map-script')

<script>
const PRICE_API_BASE_URL = "{{ env('API_BASE_URL', '') }}";

const API_BEARER_TOKEN = localStorage.getItem('auth_token') || '';

const DRIVER_ICON_URL = "{{ asset('assets/images/driver-truck.png') }}";
let latestDistanceKm = 0; // updated when distance is calculated
let bookingSuccessToastShown = false;
let currentOriginalPrice = 0; // Store original price
let currentDiscountValue = 0; // Store discount value from promo
let currentPromotionData = null; // Store full promotion data

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
        initAutocomplete();
        return;
    }

    const script = document.createElement('script');
    // Modified callback to handle map initialization after API loads
    script.src = `https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_API') }}&libraries=places,distance_matrix&callback=initMapAndAutocomplete`;
    script.async = true;
    script.defer = true;
    document.head.appendChild(script);
}

let pickupAutocomplete, dropAutocomplete;
let map, pickupMarker, dropMarker, routeLine;
let driverMarkers = [];
let driverIcon;

function initMapAndAutocomplete() {
    initMap();

    initAutocomplete();

    if (locationPermissionGranted) {
        setTimeout(getUserLiveLocation, 500);
    }
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

    if (pickupMarker) map.removeLayer(pickupMarker);

    pickupMarker = L.marker([lat, lng])
        .addTo(map)
        .bindPopup('Pickup: ' + place.name)
        .openPopup();

    // Safely update the input field value
    const pickupElement = document.getElementById('pickup_location');
    if (pickupElement && place.name) {
        pickupElement.value = place.name;
    }

    map.setView([lat, lng], 15);

    if (dropMarker) drawRoute();
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

    if (dropMarker) map.removeLayer(dropMarker);

    dropMarker = L.marker([lat, lng])
        .addTo(map)
        .bindPopup('Drop: ' + place.name)
        .openPopup();

    // Safely update the input field value
    const dropElement = document.getElementById('drop_location');
    if (dropElement && place.name) {
        dropElement.value = place.name;
    }

    map.setView([lat, lng], 15);

    if (pickupMarker) drawRoute();
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
        const response = await fetch(`${PRICE_API_BASE_URL}/v1/customer/price/calculate`, {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'Language': 'en',
                'DeviceType': 'Android',
                'DeviceID': '123456789',
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
            window.location.href = "{{ route('home') }}";
        },
        customClass: {
            popup: 'booking-success-popup',
            title: 'booking-success-title',
            content: 'booking-success-content'
        },
        willOpen: () => {
            // Add event listener for the home button
            setTimeout(() => {
                const openAppBtn = document.getElementById('openAppBtn');

                if (openAppBtn) {
                    openAppBtn.addEventListener('click', () => {
                        // Redirect to home page
                        window.location.href = "{{ route('home') }}";
                        Swal.close();
                    });
                }
            }, 100);
        }
    });
}

function initMap() {
    // Check if map is already initialized to prevent duplicate initialization
    if (map) {
        // If map already exists, just refresh the drivers
        fetchAvailableDrivers();
        return;
    }

    // Initialize the map only if it hasn't been created yet
    map = L.map('map').setView([24.4539, 54.3773], 12); // Center on UAE

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap'
    }).addTo(map);

    driverIcon = L.icon({
        iconUrl: DRIVER_ICON_URL,
        iconSize: [30, 30],
        iconAnchor: [15, 30],
        popupAnchor: [0, -35]
    });

    fetchAvailableDrivers();
}

// Clear existing driver markers from the map
function clearDriverMarkers() {
    if (!driverMarkers || driverMarkers.length === 0) return;
    driverMarkers.forEach(m => {
        if (map && m) {
            map.removeLayer(m);
        }
    });
    driverMarkers = [];
}

// Add driver markers to the map from API data
function addDriverMarkers(drivers) {
    if (!map || !Array.isArray(drivers) || drivers.length === 0) return;

    clearDriverMarkers();

    const bounds = [];

    drivers.forEach(driver => {
        const loc = driver.location || {};
        if (loc.latitude == null || loc.longitude == null) {
            return;
        }

        const lat = parseFloat(loc.latitude);
        const lng = parseFloat(loc.longitude);
        if (isNaN(lat) || isNaN(lng)) {
            return;
        }

        const marker = L.marker([lat, lng], {
            icon: driverIcon || undefined
        }).addTo(map);

        const name = driver.full_name || 'Driver';
        const phone = driver.phone || '';
        const vehicle = driver.vehicle_type || '';
        const updatedAt = loc.updated_at || '';

        marker.bindPopup(
            `<strong>${name}</strong><br>` +
            (vehicle ? `Vehicle: ${vehicle}<br>` : '') +
            (phone ? `Phone: ${phone}<br>` : '') +
            (updatedAt ? `<small>Last update: ${updatedAt}</small>` : '')
        );

        driverMarkers.push(marker);
        bounds.push([lat, lng]);
    });

    // If no pickup/drop selected yet, fit map to drivers
    if (bounds.length > 0 && !pickupMarker && !dropMarker) {
        map.fitBounds(bounds, { padding: [30, 30] });
    }
}

// Fetch available drivers from API and render them on the map
async function fetchAvailableDrivers() {
    try {
        let token = getAuthToken();

        if (!token) {
            token = '121|OE9m3bkYoXiJqipniCktL1g4g0Ors6rpHTdslwh4c659b8888';
        }

        const resp = await fetch(`${PRICE_API_BASE_URL}/v1/customer/available-drivers`, {
            method: 'GET',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'Language': 'en',
                'DeviceType': 'Android',
                'DeviceID': '123456789',
                'Authorization': 'Bearer ' + token
            }
        });

        const data = await resp.json();

        if (!resp.ok || data.status !== true || !Array.isArray(data.data)) {

            return;
        }

        addDriverMarkers(data.data);
    } catch (err) {

    }
}

function drawRoute() {
    if (!pickupMarker || !dropMarker) return;

    const pickupLatLng = pickupMarker.getLatLng();
    const dropLatLng = dropMarker.getLatLng();

    // Use Google Directions API to get road route between points
    const directionsService = new google.maps.DirectionsService();

    directionsService.route(
        {
            origin: { lat: pickupLatLng.lat, lng: pickupLatLng.lng },
            destination: { lat: dropLatLng.lat, lng: dropLatLng.lng },
            travelMode: google.maps.TravelMode.DRIVING
        },
        (response, status) => {
            if (status === google.maps.DirectionsStatus.OK && response.routes.length > 0) {
                const route = response.routes[0];
                const path = route.overview_path || [];

                if (routeLine) {
                    map.removeLayer(routeLine);
                }

                const leafletPath = path.map(p => [p.lat(), p.lng()]);

                routeLine = L.polyline(leafletPath, {
                    color: 'red',
                    weight: 4
                }).addTo(map);

                map.fitBounds(routeLine.getBounds());
            } else {


                // Fallback: straight line if directions fail
                if (routeLine) map.removeLayer(routeLine);
                const latlngs = [
                    [pickupLatLng.lat, pickupLatLng.lng],
                    [dropLatLng.lat, dropLatLng.lng]
                ];
                routeLine = L.polyline(latlngs, {
                    color: 'red',
                    weight: 4
                }).addTo(map);

                map.fitBounds(routeLine.getBounds());
            }

            // After routing, still calculate distance & price using Distance Matrix
            const pickupElement = document.getElementById('pickup_location');
            const dropElement = document.getElementById('drop_location');

            if (!pickupElement || !dropElement) {

                return;
            }

            const pickupAddress = pickupElement.value;
            const dropAddress = dropElement.value;
            calculateDistanceByLatLng();
        }
    );
}

function calculateDistanceByLatLng() {
    if (!pickupMarker || !dropMarker) return;

    const service = new google.maps.DistanceMatrixService();

    service.getDistanceMatrix(
        {
            origins: [{
                lat: pickupMarker.getLatLng().lat,
                lng: pickupMarker.getLatLng().lng
            }],
            destinations: [{
                lat: dropMarker.getLatLng().lat,
                lng: dropMarker.getLatLng().lng
            }],
            travelMode: google.maps.TravelMode.DRIVING,
            unitSystem: google.maps.UnitSystem.METRIC
        },
        (response, status) => {
            if (status !== "OK") {
                showToast("Unable to calculate distance", "error");
                return;
            }

            const element = response.rows[0].elements[0];

            if (element.status === "OK" && element.distance) {
                const distanceKm = element.distance.value / 1000;
                latestDistanceKm = distanceKm;

                const distanceEl = document.getElementById("distance");
                if (distanceEl) {
                    distanceEl.innerText = distanceKm.toFixed(2) + " km";
                }
            } else {
                showToast(
                    "Route not available between selected locations",
                    "error"
                );
            }
        }
    );
}


document.addEventListener('DOMContentLoaded', function () {
    checkLocationPermission();
    initMap();
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
                const promoResp = await fetch(`${PRICE_API_BASE_URL}/v1/customer/promocodes/verify`, {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'Language': 'en',
                        'DeviceType': 'Android',
                        'DeviceID': '123456789',
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

            // Show loader on calculate price button
            if (calculatePriceBtnText && calculatePriceBtnLoader) {
                calculatePriceBtn.disabled = true;
                calculatePriceBtnText.classList.add('d-none');
                calculatePriceBtnLoader.classList.remove('d-none');
            }

            const token = getAuthToken();

            // If no token, redirect to login
            if (!token) {
                // Store the current page data for after login
                const bookingData = {
                    pickup_location: pickupLocation,
                    drop_location: dropLocation,
                    pickup_coords: pickupMarker ? { lat: pickupMarker.getLatLng().lat, lng: pickupMarker.getLatLng().lng } : null,
                    drop_coords: dropMarker ? { lat: dropMarker.getLatLng().lat, lng: dropMarker.getLatLng().lng } : null,
                    distance: latestDistanceKm,
                    timestamp: Date.now()
                };

                localStorage.setItem('pending_booking', JSON.stringify(bookingData));

                // Redirect to login page
                window.location.href = '{{ route("login") }}';
                return;
            }

            // If user is logged in, calculate the price
            const pickupLatLng = pickupMarker.getLatLng(); // Use the coordinates from the selected markers

            try {
                await fetchPriceFromAPI(pickupLatLng.lat, pickupLatLng.lng, latestDistanceKm);
                showToast('Price calculated successfully!', 'success');
            } catch (error) {

                showToast('Failed to calculate price. Please try again.', 'error');
            } finally {
                // Reset button
                if (calculatePriceBtnText && calculatePriceBtnLoader) {
                    calculatePriceBtn.disabled = false;
                    calculatePriceBtnText.classList.remove('d-none');
                    calculatePriceBtnLoader.classList.add('d-none');
                }
            }
        });
    }

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

        // Show loader on booking button
        if (bookingBtn && bookingBtnText && bookingBtnLoader) {
            bookingBtn.disabled = true;
            bookingBtnText.classList.add('d-none');
            bookingBtnLoader.classList.remove('d-none');
        }

        const token = getAuthToken();

        if (!token) {
            // Store the current page data for after login
            const bookingData = {
                pickup_location: pickupLocation,
                drop_location: dropLocation,
                pickup_coords: pickupMarker ? { lat: pickupMarker.getLatLng().lat, lng: pickupMarker.getLatLng().lng } : null,
                drop_coords: dropMarker ? { lat: dropMarker.getLatLng().lat, lng: dropMarker.getLatLng().lng } : null,
                distance: latestDistanceKm,
                timestamp: Date.now()
            };

            localStorage.setItem('pending_booking', JSON.stringify(bookingData));

            // Redirect to login page
            window.location.href = '{{ route("login") }}';
            return;
        }

        const pickupLatLng = pickupMarker.getLatLng();
        const dropLatLng = dropMarker.getLatLng();

        let promotionId = null;

        // Check if promo code was already verified and applied
        const promoInputElement = document.getElementById('promo_code');
        if (promoInputElement && promoInputElement.dataset.promotionId) {
            promotionId = promoInputElement.dataset.promotionId;
        } else if (promoCode) {
            // If not already applied, verify it now
            try {
                const promoResp = await fetch(`${PRICE_API_BASE_URL}/v1/customer/promocodes/verify`, {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'Language': 'en',
                        'DeviceType': 'Android',
                        'DeviceID': '123456789',
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
            pickup_lat: pickupLatLng.lat,
            pickup_lng: pickupLatLng.lng,
            dropoff_address: dropLocation,
            dropoff_lat: dropLatLng.lat,
            dropoff_lng: dropLatLng.lng,
            distance_km: latestDistanceKm
        };

        if (promotionId) {
            bookingPayload.promotion_id = promotionId;
        }

        try {
            const bookingResp = await fetch(`${PRICE_API_BASE_URL}/v1/customer/bookings`, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'Language': 'en',
                    'DeviceType': 'Android',
                    'DeviceID': '123456789',
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

            if (!bookingSuccessToastShown) {
                const successMessage = `Thank you for choosing Toretto Recovery Services.

                Your nearest recovery driver is currently being assigned.

                To receive real-time updates, driver contact details, and live tracking, please continue using our mobile application.

                Track your recovery vehicle in real time

                [Open App / Download App]

                Note: Service updates and driver communication are available only in the mobile app.`;
                showToast(successMessage, 'success');
                bookingSuccessToastShown = true;
            }

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
    });
});

// Add event listener for use current location button
document.getElementById('useCurrentLocationBtn').addEventListener('click', getUserLiveLocation);

// Function to check for and restore pending booking data
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
                    map.removeLayer(pickupMarker);
                }

                pickupMarker = L.marker([
                    bookingData.pickup_coords.lat,
                    bookingData.pickup_coords.lng
                ]).addTo(map).bindPopup("Pickup Location: " + bookingData.pickup_location);

                map.setView([bookingData.pickup_coords.lat, bookingData.pickup_coords.lng], 15);
            }

            if (bookingData.drop_coords && map) {
                if (dropMarker) {
                    map.removeLayer(dropMarker);
                }

                dropMarker = L.marker([
                    bookingData.drop_coords.lat,
                    bookingData.drop_coords.lng
                ]).addTo(map).bindPopup("Drop Location: " + bookingData.drop_location);
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
                        const pickupLatLng = pickupMarker.getLatLng();
                        await fetchPriceFromAPI(pickupLatLng.lat, pickupLatLng.lng, latestDistanceKm);
                    } else {
                        const pickupElement = document.getElementById('pickup_location');
                        const dropElement = document.getElementById('drop_location');

                        if (pickupElement && dropElement && pickupElement.value && dropElement.value) {
                            calculateDistanceByLatLng();

                            setTimeout(async () => {
                                if (latestDistanceKm > 0) {
                                    const pickupLatLng = pickupMarker.getLatLng();
                                    await fetchPriceFromAPI(pickupLatLng.lat, pickupLatLng.lng, latestDistanceKm);
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

            // Remove the pending booking data
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
    if (!navigator.geolocation) {
        return;
    }

    navigator.geolocation.getCurrentPosition(
        (position) => {
            const lat = position.coords.latitude;
            const lng = position.coords.longitude;

            if (!lat || !lng) {
                showToast(
                    "Unable to determine your location. Please enter pickup location manually.",
                    "info"
                );
                return;
            }

            // if (!isLocationInUAE(lat, lng)) {
            //     const pickupElement = document.getElementById('pickup_location');
            //     const dropElement = document.getElementById('drop_location');
            //     if (pickupElement && dropElement && pickupElement.value.trim() === '' && dropElement.value.trim() === '') {
            //         showToast(
            //             "Your current location is outside UAE. Please select pickup location manually.",
            //             "warning"
            //         );
            //     }
            //     return;
            // }

            setPickupFromLatLng(lat, lng);
        },
        (error) => {
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
                    break;
            }
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
                    map.removeLayer(pickupMarker);
                }

                pickupMarker = L.marker([lat, lng])
                    .addTo(map)
                    .bindPopup("Your Current Location")
                    .openPopup();

                map.setView([lat, lng], 15);

                showToast("Pickup location set to your current location", "success");

                if (dropMarker) {
                    drawRoute();
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
