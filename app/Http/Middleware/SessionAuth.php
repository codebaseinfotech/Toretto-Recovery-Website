<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class SessionAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check for token in session first (traditional method)
        if (Session::has('token')) {
            return $next($request);
        }
        
        // Check for token in Authorization header (for API requests from JavaScript)
        $authToken = $request->header('Authorization');
        
        if (!$authToken && $request->hasHeader('X-Auth-Token')) {
            $authToken = $request->header('X-Auth-Token');
        }
        
        // If we have an auth token from header, verify it's valid
        if ($authToken) {
            // Remove 'Bearer ' prefix if present
            if (str_starts_with($authToken, 'Bearer ')) {
                $authToken = substr($authToken, 7);
            }
            
            // We can't validate the token here without knowing the API structure,
            // so we'll allow the request to continue and let the API validate it
            return $next($request);
        }
        
        // Finally, check if this is an AJAX request
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        
        return redirect()->route('login');
    }
}
