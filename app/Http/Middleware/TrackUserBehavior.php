<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;

class TrackUserBehavior
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check if the tracking cookie exists
        if (!Cookie::has('user_behavior')) {
            // Set a cookie with a unique identifier for tracking
            $cookie = Cookie::make('user_behavior', uniqid(), 60 * 24 * 30); // 30 days
            Cookie::queue($cookie);
        }

        // Log user behavior
        $userId = Cookie::get('user_behavior');
        $url = $request->fullUrl();
        $timestamp = now();

        Log::info("User {$userId} visited {$url} at {$timestamp}");

        // Continue processing the request
        return $next($request);
    }
}
