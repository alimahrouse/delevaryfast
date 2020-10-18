<?php

namespace App\Http\Middleware;

use Closure;

class Checkapi
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
        if ($request->api_password!==env('API_PASSWORD','ali12345678')) {
            return response()->json('الرقم السري خطا');
        }
        return $next($request);
    }
}
