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
        if (!Session::has('phone')) {
            return redirect()->route('login');
        }

        return view('auth.signup', [
            'phone' => Session::get('phone') // get = Read value
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

        $phone = Session::get('phone');

        if (!$phone) {
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
                return back()->withErrors(['register' => 'Registration failed']);
            }

            $data = $response->json('data');
            Session::put('token', $data['access_token']);

            Session::forget('phone');       //Because:Phone is now stored in session('user.phone')
            return redirect()->route('book.now');
        }
        catch(\Exception $e){
            return back()->withErrors(['register' => 'Something went wrong: ' . $e->getMessage()]);
        }
    }
}
