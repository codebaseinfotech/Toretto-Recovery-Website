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

        Session::put('phone', $phone);

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ])
            ->timeout(30)
            ->connectTimeout(10)
            ->retry(3, 100)
            ->post(
                config('services.api.base_url') . '/v1/customer/login',
                [
                    'phone' => $phone
                ]
            );

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

            if ($response->serverError()) {
                Log::error('Send OTP server error', [
                    'status' => $response->status(),
                    'body' => $response->body()
                ]);
                return back()->withErrors(['phone' => 'Server error. Please try again later.']);
            }

            Session::flash('otp-success', 'OTP sent successfully!');
        
            return response()->json([
                'status'   => true,
                'redirect' => route('otp.form')
            ]);
        } catch (RequestException $e) {
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
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ])
            ->timeout(30)
            ->connectTimeout(10)
            ->retry(3, 100, function ($exception, $request) {
                if ($exception instanceof RequestException) {
                    if (property_exists($exception, 'response') && $exception->response) {
                        $statusCode = $exception->response->status();
                        if ($statusCode >= 400 && $statusCode < 500) {
                            return false;
                        }
                    }
                }
                return true;
            })
            ->post(
                env('API_BASE_URL') . '/v1/customer/verify-otp',
                [
                    'phone'     => $phone,
                    'otp'       => $request->otp,
                    'latitude'  => $request->input('latitude'),
                    'longitude' => $request->input('longitude'),
                ]
            );

            if ($response->failed()) {
                $statusCode = $response->status();
                $responseBody = $response->body();
                
                Log::error('OTP verification API failed', [
                    'status' => $statusCode,
                    'body' => $responseBody,
                    'phone' => $phone,
                    'headers' => $response->headers()
                ]);

                if ($statusCode === 401 || $statusCode === 403) {
                    return back()->withErrors(['otp' => 'Invalid OTP. Please check and try again.']);
                } elseif ($statusCode >= 500) {
                    return back()->withErrors(['otp' => 'Server error. Please try again later.']);
                } else {
                    return back()->withErrors(['otp' => 'Invalid OTP or service unavailable']);
                }
            }

            if ($response->clientError()) {
                Log::warning('OTP verification client error', [
                    'status' => $response->status(),
                    'body' => $response->body()
                ]);
                return back()->withErrors(['otp' => 'Invalid OTP. Please check and try again.']);
            }

            if ($response->serverError()) {
                Log::error('OTP verification server error', [
                    'status' => $response->status(),
                    'body' => $response->body()
                ]);
                return back()->withErrors(['otp' => 'Server error. Please try again later.']);
            }

            $json = $response->json();
            
            if ($json === null) {
                $rawBody = $response->body();
                Log::error('OTP verification API returned null response', [
                    'status' => $response->status(),
                    'body' => $rawBody,
                    'headers' => $response->headers()
                ]);
                return back()->withErrors(['otp' => 'Invalid response from server. Please try again.']);
            }

            if (!isset($json) || empty($json)) {
                Log::warning('OTP verification API returned empty data', [
                    'response' => $json,
                    'status' => $response->status()
                ]);
                
                if (isset($json['message'])) {
                    return back()->withErrors(['otp' => $json['message']]);
                }
                
                return back()->withErrors(['otp' => 'Invalid OTP']);
            }

            $data = $json;

            Session::flash('otp-verify', 'OTP verified successfully!');

            if (($data['is_registered'] ?? false) === false) {
                return redirect()->route('signup.form');
            }

            if (empty($data['access_token'])) {
                Log::warning('OTP verification successful but no access token', [
                    'data' => $data,
                    'is_registered' => $data['is_registered'] ?? null
                ]);
                return back()->withErrors(['otp' => 'Authentication failed. Please try again.']);
            }

            Session::put('token', $data['access_token']);

            Session::forget('phone');
            
            Session::regenerate();
            
            return redirect()->route('book.now');
            
        } catch (RequestException $e) {
            $response = null;
            $statusCode = null;
            $responseBody = null;
            
            try {
                if (property_exists($e, 'response') && $e->response) {
                    $response = $e->response;
                    $statusCode = $response->status();
                    $responseBody = $response->body();
                }
            } catch (\Exception $ex) {
            }
            
            if (isset($response) && $response && $responseBody) {
                $json = json_decode($responseBody, true);
                
                Log::error('OTP verification HTTP exception with response', [
                    'status' => $statusCode,
                    'body' => $responseBody,
                    'parsed_json' => $json
                ]);
                
                $errorMessage = 'Invalid OTP. Please check and try again.';
                if (is_array($json) && isset($json['message'])) {
                    $errorMessage = $json['message'];
                } elseif ($statusCode === 401 || $statusCode === 403) {
                    $errorMessage = 'Invalid OTP. Please check and try again.';
                } elseif ($statusCode >= 500) {
                    $errorMessage = 'Server error. Please try again later.';
                }
                
                return back()->withErrors(['otp' => $errorMessage]);
            }
            
            $exceptionMessage = $e->getMessage();
            if (preg_match('/\{.*"status".*"message".*\}/s', $exceptionMessage, $matches)) {
                $json = json_decode($matches[0], true);
                if (is_array($json) && isset($json['message'])) {
                    Log::warning('OTP verification - extracted message from exception', [
                        'message' => $json['message']
                    ]);
                    return back()->withErrors(['otp' => $json['message']]);
                }
            }
            
            Log::error('OTP verification HTTP exception (no response)', [
                'message' => $exceptionMessage,
                'code' => $e->getCode()
            ]);
            
            if (str_contains(strtolower($exceptionMessage), 'timeout')) {
                return back()->withErrors(['otp' => 'Request timeout. Please check your connection and try again.']);
            } elseif (str_contains($exceptionMessage, 'Connection') || str_contains($exceptionMessage, 'resolve')) {
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
