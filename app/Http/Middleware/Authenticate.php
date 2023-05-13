<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // if (! $request->expectsJson()) {
        //     return route('login');
        // }

        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticateddd.'], 401);
        }
        if ($request->is('patient') || $request->is('patient/*')) {
            return route('login/patient');
        }
        if ($request->is('doctor') || $request->is('doctor/*')) {
            
            return route('login/doctor');
        }
        if ($request->is('pharmacist') || $request->is('pharmacist/*')) {
            return route('login/pharmacist');
        }
        if ($request->is('radiologist') || $request->is('radiologist/*')) {
            return route('login/radiologist');
        }
        if ($request->is('analytical') || $request->is('analytical/*')) {
            return route('login/analytical');
        }
        return route('notAutherized');
    }
}
