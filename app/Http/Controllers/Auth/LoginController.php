<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

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

        // Add UAE country code
        $phone = '971' . $request->phone;

        // Store phone in session
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
                    'phone' => $phone,
                ]
            );

            if ($response->failed()) {
                Log::error('Send OTP failed', [
                    'status' => $response->status(),
                    'body'   => $response->body(),
                ]);

                return back()->withErrors([
                    'phone' => 'Failed to send OTP. Please try again.',
                ]);
            }

            return response()->json([
                'status'   => true,
                'redirect' => route('otp.form'),
            ]);

        } catch (\Throwable $e) {
            Log::error('Send OTP exception', [
                'message' => $e->getMessage(),
            ]);

            return back()->withErrors([
                'phone' => 'Something went wrong. Please try again.',
            ]);
        }
    }

    /**
     * OTP page
     */
    public function showOtp()
    {
        if (!Session::has('phone')) {
            return redirect()->route('login');
        }

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

        if (!$phone) {
            return redirect()->route('login');
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
                    'phone'     => $phone,
                    'otp'       => $request->otp,
                    'latitude'  => $request->latitude,
                    'longitude' => $request->longitude,
                ]
            );

            if ($response->failed()) {
                Log::error('OTP verification failed', [
                    'status' => $response->status(),
                    'body'   => $response->body(),
                ]);

                return back()->withErrors([
                    'otp' => 'Invalid OTP. Please check and try again.',
                ]);
            }

            $json = $response->json();

            if (!isset($json['status']) || $json['status'] !== true) {
                return back()->withErrors([
                    'otp' => $json['message'] ?? 'OTP verification failed.',
                ]);
            }

            $data = $json['data'] ?? null;

            if (!$data || empty($data['access_token'])) {
                Log::error('Access token missing in response', $json);

                return back()->withErrors([
                    'otp' => 'Authentication failed. Please try again.',
                ]);
            }

            // Save token in session
            Session::put('token', $data['access_token']);

            // Regenerate session for security
            Session::regenerate();

            // Remove phone from session
            Session::forget('phone');

            if (($data['is_registered'] ?? false) === false) {
                return redirect()->route('signup.form');
            }

            return redirect()->route('book.now');

        } catch (\Throwable $e) {
            Log::error('OTP verification exception', [
                'message' => $e->getMessage(),
            ]);

            return back()->withErrors([
                'otp' => 'Something went wrong. Please try again.',
            ]);
        }
    }
}
