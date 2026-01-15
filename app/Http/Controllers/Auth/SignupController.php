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
        return view('auth.signup');
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
            'phone'     => 'required|string',
        ]);

        try{
            return response()->json([
                'status' => true,
                'message' => 'Form validated successfully',
                'redirect' => route('book.now')
            ]);
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
