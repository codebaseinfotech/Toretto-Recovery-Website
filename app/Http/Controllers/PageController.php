<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
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

    public function myBooking()
    {
        return view('pages.my-booking');
    }

    public function profile()
    {
        return view('pages.profile');
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

    public function services()
    {
        return view('pages.services');
    }

    public function blogs()
    {
        $apiUrl = config('services.api.base_url').'/v1/common/blogs-get';
        $response = Http::timeout(5)->get($apiUrl);

         $blogs = $response->successful()
        ? $response->json('data')
        : [];
        return view('pages.blogs', compact('blogs'));
    }

    public function blogsdata($slug)
    {
        $apiUrl = config('services.api.base_url').'/v1/common/blogs-get/'.$slug;
        $response = Http::timeout(5)->get($apiUrl);

        $blog = $response->successful()
            ? $response->json('data')
            : [];

        abort_if(! $blog, 404);

        return view('pages.blog_details', compact('blog'));
    }

    public function ourService($slug)
    {
        $services = [
            'towing-service-dubai',
            'roadside-assistance',
            'recovery-service',
            'flatbed-recovery',
            'accidental-car-recovery',
            'luxury-sports-car-handling',
            'bike-motorcycle-recovery',
            'desert-pull-out-service',
        ];

        abort_if(! in_array($slug, $services), 404);

        return view('pages.services.'.$slug);
    }

    public function areasShow($slug)
    {
        $areaNames = [
            'dubai-palm-jumeirah' => 'Dubai Palm Jumeirah',
            'dubai-marina' => 'Dubai Marina',
            'dubai-jebel-ali' => 'Dubai Jebel Ali',
            'dubai-deira' => 'Dubai Deira',
            'bur-dubai' => 'Bur Dubai',
            'dubai-investments-park' => 'Dubai Investments Park',
            'dip' => 'Dubai DIP',
            'al-warqa' => 'Dubai Al Warqa',
            'mirdif' => 'Dubai Mirdif',
            'al-qusais' => 'Dubai Al Qusais',
            'muhaisnah' => 'Dubai Muhaisnah',
        ];

        abort_if(! array_key_exists($slug, $areaNames), 404);

        if ($slug === 'dubai-palm-jumeirah') {
            $slug = 'dubai-palm-jumeirah';

            return view('pages.areas.' . $slug, [
                'areaName' => $areaNames[$slug] ?? null,
            ]);
        }

        return view('pages.coming_soon');

    }

    public function submitFormContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'nullable',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        $apiUrl = config('services.api.base_url').'/v1/common/contact-us';

        $response = Http::timeout(10)
            ->post($apiUrl, $validated);

        if ($response->successful()) {
            return back()->with('success', 'Thank you for your message! We will get back to you soon.');
        }

        return back()->with('error', 'Failed to submit form. Please try again later.');
    }

}