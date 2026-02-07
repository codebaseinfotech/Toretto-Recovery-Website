<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::middleware('cache.clear')->group(function () {
    Route::controller(PageController::class)->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/about', 'about')->name('about');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/services', 'services')->name('services');
        Route::get('/blogs', 'blogs')->name('blogs');
        Route::get('/blogs/{slug}', 'blogsdata')->name('blogs.show');
        Route::get('/areas-we-serve/{slug}', 'areasShow')->name('areas.show');
        Route::post('/contact-us', 'submitFormContact')->name('contact.submit');

    });
    Route::controller(PageController::class)->group(function () {
        Route::get('/book-now', 'bookNow')->name('book.now');
        Route::get('/my-booking', 'myBooking')->name('my.booking');
        Route::get('/profile', 'profile')->name('profile');
    });

    Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
    Route::post('/login-otp', [LoginController::class, 'sendOtp'])->name('login.send');

    Route::get('/verify', [LoginController::class, 'showOtp'])->name('otp.form');
    Route::post('/verify-otp', [LoginController::class, 'verifyOtp'])->name('otp.verify');

    Route::get('/signup', [SignupController::class, 'showSignup'])->name('signup.form');
    Route::post('/signup-register', [SignupController::class, 'register'])->name('signup.register');

    Route::get('/logout', function () {
        Session::forget(['token']);
        Session::invalidate();
        Session::regenerateToken();

        return redirect()->route('login');
    })->name('logout');

    Route::post('/logout-ajax', function () {
        Session::forget(['token']);
        Session::invalidate();
        Session::regenerateToken();

        return response()->json([
            'status'  => true,
            'message' => 'Logged out successfully',
        ]);
    })->name('logout.ajax');


    Route::get('/{slug}', [PageController::class, 'ourService'])->name('our-service.ourservice');
});