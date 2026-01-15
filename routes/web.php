<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\Auth\LoginController;


Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
});

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login-otp', [LoginController::class, 'sendOtp'])->name('login.send');

Route::get('/verify', [LoginController::class, 'showOtp'])->name('otp.form');
Route::post('/verify-otp', [LoginController::class, 'verifyOtp'])->name('otp.verify');

Route::get('/signup', [SignupController::class, 'showSignup'])->name('signup.form');
Route::post('/signup-register', [SignupController::class, 'register'])->name('signup.register');


Route::middleware('session.auth')->controller(PageController::class)->group(function () {
    Route::get('/book-now', 'bookNow')->name('book.now');
    Route::get('/my-booking', 'myBooking')->name('my.booking');
});


Route::get('/logout', function () {
    Session::forget(['token']);
    Session::invalidate();      // destroy session
    Session::regenerateToken(); // prevent CSRF reuse

    return redirect()->route('login');
})->name('logout');

// AJAX logout endpoint
Route::post('/logout-ajax', function () {
    Session::forget(['token']);
    Session::invalidate();
    Session::regenerateToken();
    
    return response()->json([
        'status'  => true,
        'message' => 'Logged out successfully'
    ]);
})->name('logout.ajax');