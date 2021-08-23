<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

class isSecretaryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && Auth::user()->role_id == 1 && Auth()->user()->position_id == 4){
            return $next($request);
        }
        else{
            return redirect()->route('login');
        }
    }
}