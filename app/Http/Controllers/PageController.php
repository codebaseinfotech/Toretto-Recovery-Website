<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Public pages
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    // Booking pages (after login)
    public function myBooking()
    {
        return view('pages.my-booking');
    }

    public function bookNow()
    {
        return view('pages.book-now');
    }

    // Auth pages
    public function login()
    {
        return view('auth.login');
    }

    public function signup()
    {
        return view('auth.signup');
    }

    public function otpVerify()
    {
        return view('auth.otp-verify');
    }
}
