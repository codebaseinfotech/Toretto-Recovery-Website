<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
        $today = Carbon::today()->toDateString();

        $blogs = DB::table('blogs')
            ->where(function ($query) use ($today) {

                // DEFAULT no date check
                $query->where('status', 'default')

                    // ACTIVE date check
                    ->orWhere(function ($q) use ($today) {
                        $q->where('status', 'active')
                            ->where(function ($q2) use ($today) {
                                $q2->whereNull('publish_from')
                                    ->orWhere('publish_from', '<=', $today);
                            })
                            ->where(function ($q2) use ($today) {
                                $q2->whereNull('publish_to')
                                    ->orWhere('publish_to', '>=', $today);
                            });
                    });

            })
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.blogs', compact('blogs'));
    }

    public function blogsdata($slug)
    {
        $blog = DB::table('blogs')
            ->where('slug', $slug)
            ->where('status', 'active')
            ->first();

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

        // services/towing-service.blade.php
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
}