<?php

namespace App\Http\Middleware;

use App\Traits\globaltrait;
use Tymon\JWTAuth\Facades\JWTAuth;

use Exception;
//use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;


use Closure;

class Checkadminapi
{
    use globaltrait;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = null;
        try {
            $user = JWTAuth::parseToken()->authenticate();
           // return response()->json($user);
        } catch (\Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                return response()->json(['status' => 'Token is Invalid']);
            }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                return response()->json(['status' => 'Token is Expired']);
            }else{
                return response()->json(['status' => 'Authorization Token not found']);
            }
            
            }
       
        

       
        return $next($request);
    }
}
