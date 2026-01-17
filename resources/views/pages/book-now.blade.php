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
                        <label>Pickup Location</label>
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
                <div class="distance-price-display mb-3">
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
                                <p id="price" class="mb-0">0.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Map -->
                <div id="map" class="rounded-4 border" style="height: 350px;"></div>

                <!-- Promo Code Section -->
                <div class="promo-section mb-4">
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
                            <button type="button" class="theme-btn w-100" id="applyPromoBtn">
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




@endsection


@push('map-script')

<script>
const PRICE_API_BASE_URL = "{{ env('API_BASE_URL', '') }}";

const API_BEARER_TOKEN = localStorage.getItem('auth_token') || '';

const DRIVER_ICON_URL = "{{ asset('assets/images/driver-truck.png') }}";
let latestDistanceKm = 0; // updated when distance is calculated
let bookingSuccessToastShown = false;

function loadGoogleMapsScript() {
    const script = document.createElement('script');
    script.src = `https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_API') }}&libraries=places,distance_matrix&callback=initAutocomplete`;
    script.async = true;
    script.defer = true;
    document.head.appendChild(script);
}

let pickupAutocomplete, dropAutocomplete;
let map, pickupMarker, dropMarker, routeLine;
let driverMarkers = [];
let driverIcon;

function initAutocomplete() {
    pickupAutocomplete = new google.maps.places.Autocomplete(
        document.getElementById('pickup_location'),
        { types: ['geocode'] }
    );
    
    dropAutocomplete = new google.maps.places.Autocomplete(
        document.getElementById('drop_location'),
        { types: ['geocode'] }
    );

    pickupAutocomplete.addListener('place_changed', function() {
        const place = pickupAutocomplete.getPlace();
        if (!place.geometry) {
            console.log("No details available for input: '" + place.name + "'");
            return;
        }
        
        if (map && place.geometry.location) {
            if (pickupMarker) {
                map.removeLayer(pickupMarker);
            }
            
            pickupMarker = L.marker([
                place.geometry.location.lat(),
                place.geometry.location.lng()
            ]).addTo(map).bindPopup("Pickup Location: " + place.formatted_address).openPopup();
            
            // Update the input field with the full formatted address
            document.getElementById('pickup_location').value = place.formatted_address;
            
            map.setView([place.geometry.location.lat(), place.geometry.location.lng()], 15);
            
            if (dropMarker) {
                drawRoute();
            }
        }
    });
    
    dropAutocomplete.addListener('place_changed', function() {
        const place = dropAutocomplete.getPlace();
        if (!place.geometry) {
            console.log("No details available for input: '" + place.name + "'");
            return;
        }
        
        if (map && place.geometry.location) {
            if (dropMarker) {
                map.removeLayer(dropMarker);
            }
            
            dropMarker = L.marker([
                place.geometry.location.lat(),
                place.geometry.location.lng()
            ]).addTo(map).bindPopup("Drop Location: " + place.formatted_address).openPopup();
            
            // Update the input field with the full formatted address
            document.getElementById('drop_location').value = place.formatted_address;
            
            map.setView([place.geometry.location.lat(), place.geometry.location.lng()], 15);
            
            if (pickupMarker) {
                drawRoute();
            }
        }
    });
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
        if (priceEl) {
            priceEl.innerText = '0.00';
        }

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
        
        console.log('API Response:', data);
        
        if(priceEl) {
            const price =
                (data && data.data && data.data.price) ??
                data?.price ??
                data?.data?.amount ??
                data?.amount ??
                data?.data?.total ??
                data?.total;

            if (price !== null && price !== undefined && !isNaN(parseFloat(price))) {
                priceEl.innerText = parseFloat(price).toFixed(2);
            } else {
                priceEl.innerText = '0.00';
                console.warn('Price not found in expected API response format:', data);
            }
        }
    } catch (error) {
        console.error('Error fetching price from API:', error);
        const priceEl = document.getElementById('price');
        if(priceEl) {
            priceEl.innerText = (50 + km * 12).toFixed(2);
        }
    }
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
                <p style="font-size: 14px; margin-top: 25px; color: #666; text-align: center; font-family: 'Avenir', sans-serif;">
                    <em>Note: Service updates and driver communication are available only in the mobile app.</em>
                </p>
                <div style="display: flex; gap: 15px; justify-content: center; margin-top: 25px;">
                    <button id="openAppBtn" style="
                        background-color: white; 
                        color: black; 
                        border: 1px solid #000; 
                        padding: 12px 25px; 
                        border-radius: 6px; 
                        cursor: pointer; 
                        font-size: 16px;
                        font-family: 'Avenir', sans-serif;
                        transition: background-color 0.3s, border-color 0.3s;
                    " onmouseover="this.style.backgroundColor='red'; this.style.borderColor='darkred'; this.style.color='white';" onmouseout="this.style.backgroundColor='white'; this.style.borderColor='#ccc'; this.style.color='black';">
                        Go to Home Screen
                    </button>
                    <button id="downloadAppBtn" style="
                        background-color: red; 
                        color: white; 
                        border: none; 
                        padding: 12px 25px; 
                        border-radius: 6px; 
                        cursor: pointer; 
                        font-size: 16px;
                        font-family: 'Avenir', sans-serif;
                        transition: background-color 0.3s;
                    " onmouseover="this.style.backgroundColor='#cc0000'" onmouseout="this.style.backgroundColor='red'">
                        Download App
                    </button>
                </div>
            </div>
        `,
        showConfirmButton: false,
        showCloseButton: true,
        width: '600px',
        padding: '30px',
        customClass: {
            popup: 'booking-success-popup',
            title: 'booking-success-title',
            content: 'booking-success-content'
        },
        willOpen: () => {
            // Add event listeners for the buttons
            setTimeout(() => {
                const openAppBtn = document.getElementById('openAppBtn');
                const downloadAppBtn = document.getElementById('downloadAppBtn');
                
                if (openAppBtn) {
                    openAppBtn.addEventListener('click', () => {
                        // Redirect to home page
                        window.location.href = '/';
                        Swal.close();
                    });
                }
                
                if (downloadAppBtn) {
                    downloadAppBtn.addEventListener('click', () => {
                        // Replace with your actual app store links
                        window.open('https://play.google.com/store/apps/details?id=com.toretto.recovery', '_blank');
                        Swal.close();
                    });
                }
            }, 100);
        }
    });
}

function initMap() {
    map = L.map('map').setView([52.52, 13.405], 12);
    
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap'
    }).addTo(map);

    // Initialize custom driver icon
    driverIcon = L.icon({
        iconUrl: DRIVER_ICON_URL,
        iconSize: [60, 50],
        iconAnchor: [30, 50],
        popupAnchor: [0, -45]
    });

    // Load available drivers on page load
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

        // For testing: use provided static token if no token from session/meta
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
        console.log('Available drivers response:', data);

        if (!resp.ok || data.status !== true || !Array.isArray(data.data)) {
            console.warn('Unable to load drivers:', data);
            return;
        }

        addDriverMarkers(data.data);
    } catch (err) {
        console.error('Error fetching available drivers:', err);
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
                console.error('Directions request failed:', status);

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
            const pickupAddress = document.getElementById('pickup_location').value;
            const dropAddress = document.getElementById('drop_location').value;
            calculateDistance(pickupAddress, dropAddress);
        }
    );
}

function calculateDistance(pickupAddress, dropAddress) {
    const service = new google.maps.DistanceMatrixService();
    
    service.getDistanceMatrix({
        origins: [pickupAddress],
        destinations: [dropAddress],
        travelMode: 'DRIVING',
        unitSystem: google.maps.UnitSystem.METRIC,
    }, (response, status) => {
        if (status === 'OK') {
            const distanceValue = response.rows[0].elements[0].distance.value; // in meters
            const distanceKm = distanceValue / 1000; // convert to kilometers
            latestDistanceKm = distanceKm;
            
            if(document.getElementById('distance')) {
                document.getElementById('distance').innerText = distanceKm.toFixed(2) + " km";
            }
            
            // Price calculation is now triggered manually by the Calculate Price button
            // Get the pickup location coordinates for later use when Calculate Price is clicked
            // const pickupLatLng = pickupMarker.getLatLng();
            
            // Call the external API to get the price - this will be done when Calculate Price button is clicked
            // fetchPriceFromAPI(pickupLatLng.lat, pickupLatLng.lng, distanceKm);
        } else {
            console.error('Distance matrix service error:', status);
            // Fallback to manual calculation if API fails
            const p1 = pickupMarker.getLatLng();
            const p2 = dropMarker.getLatLng();
            const R = 6371; // Radius of the Earth in kilometers
            const dLat = (p2.lat - p1.lat) * Math.PI / 180;
            const dLon = (p2.lng - p1.lng) * Math.PI / 180;
            const a = 
                Math.sin(dLat/2) * Math.sin(dLat/2) +
                Math.cos(p1.lat * Math.PI / 180) * Math.cos(p2.lat * Math.PI / 180) * 
                Math.sin(dLon/2) * Math.sin(dLon/2);
            const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
            const distanceKm = R * c;
            latestDistanceKm = distanceKm;
            
            if(document.getElementById('distance')) {
                document.getElementById('distance').innerText = distanceKm.toFixed(2) + " km";
            }
            
            // Price calculation is now triggered manually by the Calculate Price button
            // fetchPriceFromAPI(p1.lat, p1.lng, distanceKm);
        }
    });
}

document.addEventListener('DOMContentLoaded', function () {
    initMap();
    loadGoogleMapsScript();

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
            const promoCode = promoInput.value.trim();
            
            if (!promoCode) {
                showPromoMessage('Please enter a promo code.', 'error');
                return;
            }
            
            // Show loader
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
                console.log('Promo verify response:', promoData);

                if (!promoResp.ok || promoData.status !== true) {
                    showPromoMessage(promoData.message || 'Invalid promo code.', 'error');
                } else {
                    showPromoMessage('Promo code applied successfully!', 'success');
                    // Store the promotion ID for use in booking
                    if (promoData.data && promoData.data.id) {
                        document.getElementById('promo_code').dataset.promotionId = promoData.data.id;
                    }
                }
            } catch (err) {
                console.error('Error verifying promo code:', err);
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
    
    // Calculate Price button functionality
    const calculatePriceBtn = document.getElementById('calculatePriceBtn');
    const calculatePriceBtnText = calculatePriceBtn ? calculatePriceBtn.querySelector('.btn-text') : null;
    const calculatePriceBtnLoader = calculatePriceBtn ? calculatePriceBtn.querySelector('.btn-loader-price') : null;
    
    if (calculatePriceBtn) {
        calculatePriceBtn.addEventListener('click', async function() {
            const pickupLocation = document.getElementById('pickup_location').value;
            const dropLocation = document.getElementById('drop_location').value;
            
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
                console.error('Error calculating price:', error);
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
        
        const pickupLocation = document.getElementById('pickup_location').value;
        const dropLocation = document.getElementById('drop_location').value;
        const promoCode = document.getElementById('promo_code').value;
        
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
        console.log('Token:', token);
        if (!token) {
            showToast('Please log in again.', 'error');
            if (bookingBtn && bookingBtnText && bookingBtnLoader) {
                bookingBtn.disabled = false;
                bookingBtnText.classList.remove('d-none');
                bookingBtnLoader.classList.add('d-none');
            }
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
                console.log('Promo verify response:', promoData);

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
                }
            } catch (err) {
                console.error('Error verifying promo code:', err);
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
            console.error('Error creating booking:', err);
            showToast('Please try again.', 'error');
            if (bookingBtn && bookingBtnText && bookingBtnLoader) {
                bookingBtn.disabled = false;
                bookingBtnText.classList.remove('d-none');
                bookingBtnLoader.classList.add('d-none');
            }
        }
    });
});
</script>
@endpush