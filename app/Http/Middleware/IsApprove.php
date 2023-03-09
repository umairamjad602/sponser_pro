<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsApprove
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('web')->user()->is_approved == 0) {
            Auth::guard('web')->logout();
            return redirect('/#login')->with('error', "Your account is not approved");
        } else if (Auth::guard('web')->user()->is_approved == 2) {
            Auth::guard('web')->logout();
            return redirect('/#login')->with('error', "Your account is denied");
        } else {
            return $next($request);
        }
    }
}
