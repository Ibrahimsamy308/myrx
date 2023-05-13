<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // dd($guard);
       
        if ($guard == "patient" && Auth::guard($guard)->check()) {
            
            return redirect('/patient');
        }
        if ($guard == "doctor" && Auth::guard($guard)->check()) {
            
            return redirect('/doctor');
        }
        if ($guard == "pharmacist" && Auth::guard($guard)->check()) {
            return redirect('/pharmacist');
        }
        if ($guard == "radiologist" && Auth::guard($guard)->check()) {
            
            return redirect('/radiologist');
        }
        if ($guard == "analytical" && Auth::guard($guard)->check()) {
            return redirect('/analytical');
        }
        
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }
        return $next($request);
    }
}
