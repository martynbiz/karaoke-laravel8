<?php

namespace App\Http\Middleware;

use Closure;

/**
 * @see https://medium.com/@neo/handling-xmlhttprequest-options-pre-flight-request-in-laravel-a4c4322051b9
 */
class PreflightResponse
{
    /**
    * Handle an incoming request.
    *
    * @param \Illuminate\Http\Request $request
    * @param \Closure $next
    * @return mixed
    */
    public function handle($request, Closure $next )
    {
        if ($request->getMethod() === "OPTIONS") {
            return response('')
                ->header('Access-Control-Allow-Origin', '*')
                ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
                ->header('Access-Control-Allow-Headers', 'Authorization');
        }

        return $next($request);
     }
 }
