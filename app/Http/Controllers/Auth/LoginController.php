<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    /**
     * login form
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

        $phone = '971' . $request->phone;

        // Store user input temporarily
        Session::put('phone', $phone);

        try {
            // Make API request with timeout, retry, and proper headers
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ])
            ->timeout(30) // 30 seconds request timeout
            ->connectTimeout(10) // 10 seconds connection timeout
            ->retry(3, 100) // Retry 3 times with 100ms delay between retries
            ->post(
                config('services.api.base_url') . '/v1/customer/login',
                [
                    'phone' => $phone
                ]
            );

            // Check if HTTP request failed
            if ($response->failed()) {
                $statusCode = $response->status();
                Log::error('Send OTP API failed', [
                    'status' => $statusCode,
                    'body' => $response->body(),
                    'phone' => $phone
                ]);

                if ($statusCode >= 500) {
                    return back()->withErrors(['phone' => 'Server error. Please try again later.']);
                } else {
                    return back()->withErrors(['phone' => 'Failed to send OTP. Please try again.']);
                }
            }

            // Check for server errors
            if ($response->serverError()) {
                Log::error('Send OTP server error', [
                    'status' => $response->status(),
                    'body' => $response->body()
                ]);
                return back()->withErrors(['phone' => 'Server error. Please try again later.']);
            }

            // Flash a success message for the next page
            Session::flash('otp-success', 'OTP sent successfully!');
        
            return response()->json([
                'status'   => true,
                'redirect' => route('otp.form')
            ]);
        } catch (RequestException $e) {
            // Handle HTTP client exceptions (timeout, connection errors, etc.)
            Log::error('Send OTP HTTP exception', [
                'message' => $e->getMessage(),
                'code' => $e->getCode()
            ]);
            
            if (str_contains(strtolower($e->getMessage()), 'timeout')) {
                return back()->withErrors(['phone' => 'Request timeout. Please check your connection and try again.']);
            } elseif (str_contains($e->getMessage(), 'Connection') || str_contains($e->getMessage(), 'resolve')) {
                return back()->withErrors(['phone' => 'Connection error. Please check your internet connection.']);
            }
            
            return back()->withErrors(['phone' => 'Network error. Please try again.']);
        } catch (\Exception $e) {
            Log::error('Send OTP exception', [
                'message' => $e->getMessage(),
                'code' => $e->getCode(),
                'trace' => $e->getTraceAsString()
            ]);
            return back()->withErrors(['phone' => 'Something went wrong. Please try again.']);
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
            // Make API request with timeout, retry, and proper headers
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ])
            ->timeout(30) // 30 seconds request timeout
            ->connectTimeout(10) // 10 seconds connection timeout
            ->retry(3, 100) // Retry 3 times with 100ms delay between retries
            ->post(
                config('services.api.base_url') . '/v1/customer/verify-otp',
                [
                    'phone'     => $phone,
                    'otp'       => $request->otp,
                    'latitude'  => $request->input('latitude'),
                    'longitude' => $request->input('longitude'),
                ]
            );

            // Check if HTTP request failed (4xx, 5xx status codes)
            if ($response->failed()) {
                $statusCode = $response->status();
                $responseBody = $response->body();
                
                Log::error('OTP verification API failed', [
                    'status' => $statusCode,
                    'body' => $responseBody,
                    'phone' => $phone,
                    'headers' => $response->headers()
                ]);

                // Handle specific error cases
                if ($statusCode === 401 || $statusCode === 403) {
                    return back()->withErrors(['otp' => 'Invalid OTP. Please check and try again.']);
                } elseif ($statusCode >= 500) {
                    return back()->withErrors(['otp' => 'Server error. Please try again later.']);
                } else {
                    return back()->withErrors(['otp' => 'Invalid OTP or service unavailable']);
                }
            }

            // Check for client errors (4xx) that might not be caught by failed()
            if ($response->clientError()) {
                Log::warning('OTP verification client error', [
                    'status' => $response->status(),
                    'body' => $response->body()
                ]);
                return back()->withErrors(['otp' => 'Invalid OTP. Please check and try again.']);
            }

            // Check for server errors (5xx)
            if ($response->serverError()) {
                Log::error('OTP verification server error', [
                    'status' => $response->status(),
                    'body' => $response->body()
                ]);
                return back()->withErrors(['otp' => 'Server error. Please try again later.']);
            }

            // Get JSON response - handle null case
            $json = $response->json();
            
            // Check if response is null or not valid JSON
            if ($json === null) {
                $rawBody = $response->body();
                Log::error('OTP verification API returned null response', [
                    'status' => $response->status(),
                    'body' => $rawBody,
                    'headers' => $response->headers()
                ]);
                return back()->withErrors(['otp' => 'Invalid response from server. Please try again.']);
            }

            // Check if response has expected structure
            if (!isset($json['data']) || empty($json['data'])) {
                Log::warning('OTP verification API returned empty data', [
                    'response' => $json,
                    'status' => $response->status()
                ]);
                
                // Check if there's an error message in the response
                if (isset($json['message'])) {
                    return back()->withErrors(['otp' => $json['message']]);
                }
                
                return back()->withErrors(['otp' => 'Invalid OTP']);
            }

            $data = $json['data'];  // "is_registered" => false ,  "phone" => "971XXXXX"

            // Flash a success message for the next page
            Session::flash('otp-verify', 'OTP verified successfully!');

            // NOT REGISTERED USER
            if (($data['is_registered'] ?? false) === false) {
                return redirect()->route('signup.form');
            }

            // REGISTERED USER → TOKEN REQUIRED
            if (empty($data['access_token'])) {
                Log::warning('OTP verification successful but no access token', [
                    'data' => $data,
                    'is_registered' => $data['is_registered'] ?? null
                ]);
                return back()->withErrors(['otp' => 'Authentication failed. Please try again.']);
            }

            // Store token in session
            Session::put('token', $data['access_token']);

            // LOGIN SUCCESS
            Session::forget('phone');       //Because:Phone is now stored in session('user.phone')
            return redirect()->route('book.now');
            
        } catch (RequestException $e) {
            // Handle HTTP client exceptions (timeout, connection errors, etc.)
            Log::error('OTP verification HTTP exception', [
                'message' => $e->getMessage(),
                'code' => $e->getCode(),
                'trace' => $e->getTraceAsString()
            ]);
            
            if (str_contains(strtolower($e->getMessage()), 'timeout')) {
                return back()->withErrors(['otp' => 'Request timeout. Please check your connection and try again.']);
            } elseif (str_contains($e->getMessage(), 'Connection') || str_contains($e->getMessage(), 'resolve')) {
                return back()->withErrors(['otp' => 'Connection error. Please check your internet connection.']);
            }
            
            return back()->withErrors(['otp' => 'Network error. Please try again.']);
        } catch (\Exception $e) {
            Log::error('OTP verification exception', [
                'message' => $e->getMessage(),
                'code' => $e->getCode(),
                'trace' => $e->getTraceAsString()
            ]);
            return back()->withErrors(['otp' => 'Something went wrong. Please try again.']);
        }
    }
}
