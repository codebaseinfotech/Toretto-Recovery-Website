<?php

namespace App\Http\Controllers;

use App\Support\UaePhoneNumber;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{
    // Public pages
    public function home()
    {
        $apiUrl = config('services.api.base_url') . '/v1/common/config';
        $response = Http::get($apiUrl);
        $settings = [];
        if ($response->successful()) {
            $settings = $response->json()['data'] ?? [];
        }
        $settings = $settings['general_settings'];
        return view('pages.home', compact('settings'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function privacyPolicy(Request $request)
    {
        $type = $request->get('type', 'customer');
        // customer / individual_driver / company_driver / company_owner

        $apiUrl = config('services.api.base_url') . '/v1/common/legal/privacy';

        $title = 'Privacy Policy';
        $content = null;
        $effectiveDate = null;

        try {
            $response = Http::timeout(10)->acceptJson()->get($apiUrl, [
                'type' => 'privacy_policy',   // or 'terms'
                'role' => $type,
            ]);

            if ($response->ok()) {
                $json = $response->json();
                // dd($json);
                if (isset($json['data'])) {
                    $data = $json['data'];

                    $title = $data['title'] ?? $title;
                    $content = $data['content'] ?? null;
                    $effectiveDate = $data['effective_date'] ?? null;
                }
            }

        } catch (\Throwable $e) {
            \Log::error('Privacy Policy API Error: ' . $e->getMessage());
        }

        return view('pages.privacy_policy', [
            'role' => $type,
            'title' => $title,
            'content' => $content,
            'effective_date' => $effectiveDate,
        ]);
    }
    public function termsAndConditions(Request $request)
    {
        $type = $request->get('type', 'customer');
        // customer / individual_driver / company_driver / company_owner

        $apiUrl = config('services.api.base_url') . '/v1/common/legal/terms';

        $title = 'Privacy Policy';
        $content = null;
        $effectiveDate = null;

        try {
            $response = Http::timeout(10)->acceptJson()->get($apiUrl, [
                'type' => 'privacy_policy',   // or 'terms'
                'role' => $type,
            ]);

            if ($response->ok()) {
                $json = $response->json();
                // dd($json);
                if (isset($json['data'])) {
                    $data = $json['data'];

                    $title = $data['title'] ?? $title;
                    $content = $data['content'] ?? null;
                    $effectiveDate = $data['effective_date'] ?? null;
                }
            }

        } catch (\Throwable $e) {
            \Log::error('Privacy Policy API Error: ' . $e->getMessage());
        }

        return view('pages.terms_and_conditions', [
            'role' => $type,
            'title' => $title,
            'content' => $content,
            'effective_date' => $effectiveDate,
        ]);
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
        $apiUrl = config('services.api.base_url') . '/v1/common/config';

        // API Call
        $response = Http::get($apiUrl);
        $settings = [];
        if ($response->successful()) {
            $settings = $response->json()['data'] ?? [];
        }
        $settings = $settings['general_settings'];

        return view('pages.book-now', compact('settings'));
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
        $apiUrl = config('services.api.base_url') . '/v1/common/blogs-get';
        $response = Http::timeout(5)->get($apiUrl);

        $blogs = $response->successful()
            ? $response->json('data')
            : [];

        return view('pages.blogs', compact('blogs'));
    }

    public function blogsdata($slug)
    {
        $apiUrl = config('services.api.base_url') . '/v1/common/blogs-get/' . $slug;
        $response = Http::timeout(5)->get($apiUrl);

        $blog = $response->successful()
            ? $response->json('data')
            : [];

        abort_if(!$blog, 404);

        return view('pages.blog_details', compact('blog'));
    }

    public function ourService($slug)
    {
        $services = [
            'towing-service-dubai',
            'roadside-assistance-dubai',
            'vehicle-recovery-service-dubai',
            'flatbed-recovery-dubai',
            'accidental-car-recovery-dubai',
            'luxury-sports-car-handling-dubai',
            'bike-motorcycle-recovery-dubai',
            'desert-pull-out-service-dubai',
        ];

        abort_if(!in_array($slug, $services), 404);

        return view('pages.services.' . $slug);
    }

    public function areasShow($slug)
    {
        $areaNames = [
            'dubai-palm-jumeirah' => 'Dubai Palm Jumeirah',
            'dubai-marina' => 'Dubai Marina',
            'dubai-jebel-ali' => 'Dubai Jebel Ali',
            'dubai-deira' => 'Dubai Deira',
            'bur-dubai' => 'Bur Dubai',
            // 'dubai-investments-park' => 'Dubai Investments Park',
            'dip' => 'Dubai DIP',
            'al-warqa' => 'Dubai Al Warqa',
            'mirdif' => 'Dubai Mirdif',
            'al-qusais' => 'Dubai Al Qusais',
            'muhaisnah' => 'Dubai Muhaisnah',
        ];

        abort_if(!array_key_exists($slug, $areaNames), 404);

        // if ($slug === 'dubai-palm-jumeirah') {
        //     $slug = 'dubai-palm-jumeirah';
        // }
        // if ($slug === 'dubai-marina') {
        //     $slug = 'dubai-marina';
        // }
        // if ($slug === 'dubai-jebel-ali') {
        //     $slug = 'dubai-jebel-ali';
        // }

        // if ($slug === 'dubai-deira') {
        //     $slug = 'dubai-deira';
        // }

        return view('pages.areas.' . $slug, [
            'areaName' => $areaNames[$slug] ?? null,
        ]);

        return view('pages.coming_soon');

    }

    public function submitFormContact(Request $request)
    {
        $request->merge([
            'phone' => UaePhoneNumber::normalize($request->phone),
        ]);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'nullable',
            'email' => 'required|email|max:255',
            'phone' => ['required', 'regex:/^5\d{8}$/'],
            'subject' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ], [
            'phone.regex' => 'Enter a valid UAE mobile number (9 digits starting with 5).',
        ]);

        $apiUrl = config('services.api.base_url') . '/v1/common/contact-us';

        try {
            $response = Http::acceptJson()
                ->timeout(10)
                ->post($apiUrl, $validated);

            if ($response->successful()) {
                return back()->with('success', 'Thank you for your message! We will get back to you soon.');
            }

            Log::warning('Contact form API request failed.', [
                'api_url' => $apiUrl,
                'status' => $response->status(),
                'response_body' => substr((string) $response->body(), 0, 1000),
                'type' => $validated['type'] ?? null,
                'email' => $validated['email'] ?? null,
            ]);
        } catch (ConnectionException $e) {
            Log::error('Contact form API connection failed.', [
                'api_url' => $apiUrl,
                'message' => $e->getMessage(),
                'type' => $validated['type'] ?? null,
                'email' => $validated['email'] ?? null,
            ]);
        } catch (\Throwable $e) {
            Log::error('Contact form API request crashed.', [
                'api_url' => $apiUrl,
                'message' => $e->getMessage(),
                'type' => $validated['type'] ?? null,
                'email' => $validated['email'] ?? null,
            ]);
        }

        return back()
            ->withInput()
            ->with('error', 'We could not submit your request right now. Please call +971 52 691 7666 while we fix this.');
    }
}
