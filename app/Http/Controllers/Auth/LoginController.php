<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Login page
     */

    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Send OTP
     */

    public function sendOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required|string',
        ]);

        $phone = $request->phone;

        Session::put('phone', $phone);

        try {
            $response = Http::withHeaders([
                'Accept'       => 'application/json',
                'Content-Type' => 'application/json',
                'Language'     => 'en',
                'DeviceType'   => 'Android',
                'DeviceID'     => '123456789',
            ])->post(
                config('services.api.base_url') . '/v1/customer/login',
                [
                    'phone'        => $phone,
                    'country_code' => '971',
                ]
            );

            if ($response->failed()) {
                return back()->withErrors([
                    'phone' => 'Failed to send OTP. Please try again.',
                ]);
            }

            return response()->json([
                'status'   => true,
                'message'  => 'OTP sent successfully.',
                'data'     => [
                    'phone' => $phone,
                ],
                'redirect' => route('otp.form'),
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'status'  => false,
                'message' => 'Something went wrong. Please try again.',
            ], 500);
        }
    }

    /**
     * OTP page
     */

    public function showOtp()
    {
        return view('auth.otp-verify');
    }

    /**
     * Verify OTP
     */

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp'       => 'required|digits:6',
            'latitude'  => 'nullable',
            'longitude' => 'nullable',
        ]);

        $phone = Session::get('phone');

        if (! $phone) {
            $phone_header = $request->header('X-Phone-Verification');
            if ($phone_header) {
                $phone = $phone_header;
            }
        }

        try {
            $response = Http::withHeaders([
                'Accept'       => 'application/json',
                'Content-Type' => 'application/json',
                'Language'     => 'en',
                'DeviceType'   => 'Android',
                'DeviceID'     => '123456789',
            ])->post(
                config('services.api.base_url') . '/v1/customer/verify-otp',
                [
                    'country_code' => '971',
                    'phone'        => $phone,
                    'otp'          => $request->otp,
                    'latitude'     => $request->latitude,
                    'longitude'    => $request->longitude,
                ]
            );

            if ($response->failed()) {
                return response()->json([
                    'status'  => false,
                    'message' => 'Invalid OTP. Please check and try again.',
                ], $response->status());
            }

            $json = $response->json();

            if (! isset($json['status']) || $json['status'] !== true) {
                return response()->json([
                    'status'  => false,
                    'message' => $json['message'] ?? 'OTP verification failed.',
                ], 400);
            }

            $data = $json['data'] ?? null;

            if (! $data) {
                return response()->json([
                    'status'  => false,
                    'message' => 'Authentication failed. Please try again.',
                ], 400);
            }

            if (isset($data['access_token'])) {
                Session::put('token', $data['access_token']);
            }

            Session::regenerate();

            Session::forget('phone');

            $apiUserData = $data['user'] ?? [];

            $isRegistered = $data['is_registered'];

            // Check for pending booking data
            $pendingBooking = Session::get('pending_booking', []);

            $redirectRoute = $isRegistered ? route('book.now') : route('signup.form');

            // If there's pending booking data, redirect to booking page
            if (! empty($pendingBooking)) {
                $redirectRoute = route('book.now');
                // Clear the pending booking data
                Session::forget('pending_booking');
            }

            return response()->json([
                'status'   => true,
                'message'  => 'Login successful!',
                'token'    => $data['access_token'] ?? null,
                'user'     => [
                    'id'            => $apiUserData['id'] ?? $data['id'] ?? null,
                    'name'          => $apiUserData['name'] ?? $data['name'] ?? null,
                    'first_name'    => $apiUserData['first_name'] ?? null,
                    'last_name'     => $apiUserData['last_name'] ?? null,
                    'email'         => $apiUserData['email'] ?? null,
                    'phone'         => $apiUserData['phone'] ?? $data['phone'] ?? null,
                    'is_registered' => $isRegistered,
                ],
                'redirect' => $redirectRoute,
            ]);

        } catch (\Throwable $e) {
            return response()->json([
                'status'  => false,
                'message' => 'Something went wrong. Please try again.',
            ], 500);
        }

    }
}
