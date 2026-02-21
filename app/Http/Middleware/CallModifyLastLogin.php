<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class CallModifyLastLogin
{
    public function handle(Request $request, Closure $next)
    {
        Log::info('CallModifyLastLogin middleware HIT', [
            'path' => $request->path(),
            'has_token' => Session::has('token'),
            'base_url' => config('services.api.base_url'),
        ]);

        $token = Session::get('token');

        if ($token) {
            try {
                $url = rtrim(config('services.api.base_url'), '/') . '/v1/modify-last-login';

                Log::info('Calling modify-last-login', ['url' => $url]);

                $response = Http::withToken($token)
                    ->acceptJson()
                    ->timeout(8)
                    ->post($url, [
                        'role' => 'customer',
                    ]);

                Log::info('modify-last-login response', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);

                if ($response->status() === 401) {
                    Session::forget('token');
                    Session::invalidate();
                    Session::regenerateToken();

                    return redirect()->route('login')
                        ->with('error', 'Session expired. Please login again.');
                }
            } catch (\Throwable $e) {
                // 🔥 THIS was hidden earlier
                Log::error('modify-last-login FAILED', [
                    'error' => $e->getMessage(),
                ]);
            }
        }

        return $next($request);
    }
}