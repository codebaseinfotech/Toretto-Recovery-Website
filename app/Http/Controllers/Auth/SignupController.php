<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Client\RequestException;

class SignupController extends Controller
{
    /**
     * Signup form
     */
    public function showSignup()
    {
        // Allow access if user has a token (authenticated via OTP)
        // Even if phone is not in session anymore (which is cleared after OTP verification)
        if (!Session::has('token')) {
            return redirect()->route('login');
        }

        // Get phone from session if available, otherwise we'll handle it differently
        $phone = Session::get('phone', '');

        return view('auth.signup', [
            'phone' => $phone
        ]);
    }

    /**
     * Register customer
     */
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name'  => 'required|string',
            'email'      => 'nullable|email',
        ]);

        // Get phone from session or from user data in localStorage
        $phone = Session::get('phone');
        if (!$phone) {
            // Try to get phone from localStorage user data
            $user_data_json = $request->header('X-User-Data');
            if ($user_data_json) {
                $user_data = json_decode($user_data_json, true);
                $phone = $user_data['phone'] ?? null;
            }
        }

        if (!$phone) {
            if ($request->wantsJson()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Phone number not found. Please start the process again.'
                ], 400);
            }
            return redirect()->route('login');
        }

        try{
            $response = Http::post(
                config('services.api.base_url') . '/v1/customer/register',
                [
                    'phone'      => $phone,
                    'first_name' => $request->first_name,
                    'last_name'  => $request->last_name,
                    'email'      => $request->email,
                ]
            );

            if ($response->failed()) {
                if ($request->wantsJson()) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Registration failed'
                    ], $response->status());
                }
                return back()->withErrors(['register' => 'Registration failed']);
            }

            $data = $response->json('data');
            
            // Update session token
            Session::put('token', $data['access_token']);

            Session::forget('phone');       //Because:Phone is now stored in session('user.phone')
            
            // Regenerate session ID for security (prevents session fixation attacks)
            // This also ensures the session is saved before redirect
            Session::regenerate();
            
            if ($request->wantsJson()) {
                return response()->json([
                    'status' => true,
                    'message' => 'Registration successful!',
                    'token' => $data['access_token'],
                    'redirect' => route('book.now')
                ]);
            }
            
            return redirect()->route('book.now');
        }
        catch(\Exception $e){
            if ($request->wantsJson()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Something went wrong: ' . $e->getMessage()
                ], 500);
            }
            return back()->withErrors(['register' => 'Something went wrong: ' . $e->getMessage()]);
        }
    }
}
