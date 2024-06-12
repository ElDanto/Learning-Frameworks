<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class NeedTestHeader
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if( !empty( $request->header('X-UserName'))
                    && $request->header('X-UserName') == 'admin' ){
            if(!empty( $request->header('X-Password'))
                    && Hash::check( '123456', $request->header('X-Password') ) ){
                         return $next($request);
            }
        }
        return redirect('/', 401);
    }
}
