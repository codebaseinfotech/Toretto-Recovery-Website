<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Support\UaePhoneNumber;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    /**
     * Signup form
     */
    public function showSignup()
    {
        return view('auth.signup');
    }

    /**
     * Register customer
     */
    public function register(Request $request)
    {
        $request->merge([
            'phone' => UaePhoneNumber::normalize($request->phone),
        ]);

        $request->validate([
            'first_name' => 'required|string',
            'email'      => 'nullable|email',
            'phone'      => ['required', 'regex:/^5\d{8}$/'],
        ], [
            'phone.regex' => 'Enter a valid UAE mobile number (9 digits starting with 5).',
        ]);

        try {
            return response()->json([
                'status' => true,
                'message' => 'Form validated successfully',
                'redirect' => route('home'),
            ]);
        } catch (\Exception $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Something went wrong',
                ], 500);
            }

            return back()->withErrors(['register' => 'Something went wrong']);
        }
    }
}
