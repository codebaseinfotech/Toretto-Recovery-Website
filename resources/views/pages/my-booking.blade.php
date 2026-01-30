@extends('layouts.main')

@section('title', 'My Bookings | Car Recovery Dubai | 24/7 Towing & Roadside Assistance UAE')

@section('meta_description', 'Manage your car recovery and towing service bookings with Toretto Recovery. Track your 24/7 emergency roadside assistance requests across Dubai and the UAE.')

@section('content')

{{-- MYBOOKING SECTION --}}
<section class="mybooking-section">
  <div class="container">
            <div class="row mybooking-heading">
                <div class="mx-auto">
                    <div class="section-heading text-center wow fade-in-up-20">
                        <h2 class="section-title">My<span> Bookings</span></h2>
                        <p>Track and manage your vehicle pickup and recovery requests</p>
                    </div>
                </div>
            </div>

      <div class="container">

          <!-- TOP BAR -->
          <div class="top-bar d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
            <div class="tabs d-flex gap-2 flex-wrap">
              <button class="tab active btn btn-outline-primary" data-tab="active">Active Bookings</button>
              <button class="tab btn btn-outline-primary" data-tab="completed">Completed</button>
              <button class="tab" data-tab="cancelled">Cancelled</button>
            </div>

            <div class="filter-wrapper">
                <div class="filter" id="filterBtn">
                    All Dates <i class="fa-solid fa-chevron-down"></i>
                </div>

                <ul class="filter-dropdown" id="filterDropdown">
                    <li data-value="all">All Dates</li>
                    <li data-value="today">Today</li>
                    <li data-value="week">This Week</li>
                    <li data-value="month">This Month</li>
                    <li data-value="year">This Year</li>
                </ul>
            </div>
          </div>

          <!-- ACTIVE -->
          <div class="tab-content active" id="active">

            <div class="card">
              <div class="card-header">
                <p class="booking-id">Booking ID <span>#RSA10245</span></p>
                <button class="status assigned">Driver Assigned</button>
              </div>

              <div class="card-body">
                <div class="info">
                  <img src="{{ asset('assets/images/towing-service.png') }}" alt="">
                  <div>
                    <strong>Towing Service</strong>
                    <span><i class="fa-solid fa-location-dot"></i>Ahmedabad → Surat</span>
                  </div>
                </div>

                <div class="info">
                  <img src="{{ asset('assets/images/car-service.png') }}" alt="">
                  <div>
                    <strong>Car</strong>
                    <span><i class="fa-solid fa-location-dot"></i>Ahmedabad → Surat</span>
                  </div>
                </div>

                <div class="last-info">
                  <img src="{{ asset('assets/images/calender.png') }}" alt="">
                  <div>
                    <strong>12 Jan 2026, 10:30 AM<i class="fa-solid fa-chevron-right"></i></strong>
                  </div>
                </div>
              </div>

              <div class="card-footer">
                <button class="btn gray">Booking Status <i class="fa-solid fa-angle-right"></i></button>
                <div class="actions">
                  <button class="btn blue"><img src="{{ asset('assets/images/track-driver.png') }}" alt=""> Track Driver</button>
                  <button class="btn red"><img src="{{ asset('assets/images/cancel-booking.png') }}" alt=""> Cancel Booking</button>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <p class="booking-id">Booking ID <span>#RSA10245</span></p>
                <button class="status onway">On the way</button>
              </div>
              <div class="card-body">
                <div class="info">
                  <img src="{{ asset('assets/images/vehicle-transport.png') }}" alt="">
                  <div>
                    <strong>Vehicle Transport</strong>
                    <span><i class="fa-solid fa-location-dot"></i>Ahmedabad → Surat</span>
                  </div>
                </div>

                <div class="info">
                  <img src="{{ asset('assets/images/bike.png') }}" alt="">
                  <div>
                    <strong>Bike</strong>
                    <span><i class="fa-solid fa-location-dot"></i>Ahmedabad → Surat</span>
                  </div>
                </div>

                <div class="last-info">
                  <img src="{{ asset('assets/images/calender.png') }}" alt="">
                  <div>
                    <strong>18 Jan 2026, 10:30 AM<i class="fa-solid fa-chevron-right"></i></strong>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button class="btn gray">Booking Status <i class="fa-solid fa-angle-right"></i></button>
                <div class="actions">
                  <button class="btn blue"><img src="{{ asset('assets/images/track-driver.png') }}" alt=""> Track Driver</button>
                  <button class="btn red"><img src="{{ asset('assets/images/cancel-booking.png') }}" alt=""> Cancel Booking</button>
                </div>
              </div>
            </div>
          <div class="card">
              <div class="card-header">
                <p class="booking-id">Booking ID <span>#RSA10245</span></p>
                <button class="status completed">Completed</button>
              </div>
        <div class="card-body">
                <div class="info">
                  <img src="{{ asset('assets/images/roadside-repair.png') }}" alt="">
                  <div>
                    <strong>Roadside Repair</strong>
                    <span><i class="fa-solid fa-location-dot"></i>Ahmedabad → Surat</span>
                  </div>
                </div>

                <div class="info">
                  <img src="{{ asset('assets/images/suv.png') }}" alt="">
                  <div>
                    <strong>SUV</strong>
                    <span><i class="fa-solid fa-location-dot"></i>Ahmedabad → Surat</span>
                  </div>
                </div>

                <div class="last-info">
                  <img src="{{ asset('assets/images/calender.png') }}" alt="">
                  <div>
                    <strong>20 Jan 2026, 10:30 AM<i class="fa-solid fa-chevron-right"></i></strong>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <span style="color:#777;"><img src="{{ asset('assets/images/call.png') }}" alt=""> Need help? Call us anytime – 24/7 support</span>
                <div class="actions">
                  <button class="btn blue"><img src="{{ asset('assets/images/view-details.png') }}" alt=""> View Details</button>
                  <button class="btn red"><img src="{{ asset('assets/images/call-support.png') }}" alt=""> Call Support</button>
                </div>
              </div>
            </div>


          </div>

          <!-- COMPLETED -->
          <div class="tab-content" id="completed">
            <div class="card">
              <div class="card-header">
                <p class="booking-id">Booking ID <span>#RSA10245</span></p>
                <button class="status completed">Completed</button>
              </div>
        <div class="card-body">
                <div class="info">
                  <img src="{{ asset('assets/images/towing-service.png') }}" alt="">
                  <div>
                    <strong>Towing Service</strong>
                    <span><i class="fa-solid fa-location-dot"></i>Ahmedabad → Surat</span>
                  </div>
                </div>

                <div class="info">
                  <img src="{{ asset('assets/images/car-service.png') }}" alt="">
                  <div>
                    <strong>Car</strong>
                    <span><i class="fa-solid fa-location-dot"></i>Ahmedabad → Surat</span>
                  </div>
                </div>

                <div class="last-info">
                  <img src="{{ asset('assets/images/calender.png') }}" alt="">
                  <div>
                    <strong>12 Jan 2026, 10:30 AM<i class="fa-solid fa-chevron-right"></i></strong>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <span style="color:#777;"><img src="{{ asset('assets/images/call.png') }}" alt=""> Need help? Call us anytime – 24/7 support</span>
                <div class="actions">
                  <button class="btn blue"><img src="{{ asset('assets/images/view-details.png') }}" alt=""> View Details</button>
                  <button class="btn red"><img src="{{ asset('assets/images/call-support.png') }}" alt=""> Call Support</button>
                </div>
              </div>
            </div>
          </div>

          <!-- CANCELLED -->
          <div class="tab-content" id="cancelled">
            <div class="card">
              <div class="card-header">
                <p class="booking-id">Booking ID <span>#RSA10245</span></p>
                <button class="status red">Cancelled</button>
              </div>
              <div class="card-body">
                <div class="info">
                  <img src="{{ asset('assets/images/towing-service.png') }}" alt="">
                  <div>
                    <strong>Towing Service</strong>
                    <span><i class="fa-solid fa-location-dot"></i>Ahmedabad → Surat</span>
                  </div>
                </div>

                <div class="info">
                  <img src="{{ asset('assets/images/car-service.png') }}" alt="">
                  <div>
                    <strong>Car</strong>
                    <span><i class="fa-solid fa-location-dot"></i>Ahmedabad → Surat</span>
                  </div>
                </div>

                <div class="last-info">
                  <img src="{{ asset('assets/images/calender.png') }}" alt="">
                  <div>
                    <strong>12 Jan 2026, 10:30 AM<i class="fa-solid fa-chevron-right"></i></strong>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button class="btn gray">Booking Status <i class="fa-solid fa-angle-right"></i></button>
                <div class="actions">
                  <button class="btn blue"><img src="{{ asset('assets/images/track-driver.png') }}" alt=""> Track Driver</button>
                  <button class="btn red"><img src="{{ asset('assets/images/cancel-booking.png') }}" alt=""> Cancel Booking</button>
                </div>
              </div>
            </div>
          </div>

      </div>

  </div>
</section>

@endsection

@push('my-booking-script')
<script>
//tab
  document.querySelectorAll('.tab').forEach(tab=>{
  tab.addEventListener('click',()=>{
    document.querySelectorAll('.tab').forEach(t=>t.classList.remove('active'));
    document.querySelectorAll('.tab-content').forEach(c=>c.classList.remove('active'));
    tab.classList.add('active');
    document.getElementById(tab.dataset.tab).classList.add('active');
  });
});
//drop-down
const filterBtn = document.getElementById('filterBtn');
const filterDropdown = document.getElementById('filterDropdown');
filterBtn.addEventListener('click', () => {
    filterDropdown.style.display =
        filterDropdown.style.display === 'block' ? 'none' : 'block';
    filterBtn.classList.toggle('active');
});
filterDropdown.querySelectorAll('li').forEach(item => {
    item.addEventListener('click', () => {
        filterBtn.innerHTML = item.textContent + ' <i class="fa-solid fa-chevron-down"></i>';
        filterDropdown.style.display = 'none';
        filterBtn.classList.remove('active');
    });
});
// close on outside click
document.addEventListener('click', (e) => {
    if (!filterBtn.contains(e.target) && !filterDropdown.contains(e.target)) {
        filterDropdown.style.display = 'none';
        filterBtn.classList.remove('active');
    }
});
</script>
@endpush
