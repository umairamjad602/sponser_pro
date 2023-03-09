<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string...$guards): Response
    {

        $guards = empty($guards) ? [null] : $guards;
        foreach ($guards as $guard) {
            // if (Auth::guard($guard)->check()) {
            //     return redirect(RouteServiceProvider::HOME);
            // }
            if (Auth::getDefaultDriver() == 'admin' && Auth::guard('admin')->check()) {
                return redirect()->route('admin.login.view');
            } else if (Auth::getDefaultDriver() == 'web' && Auth::guard('web')->check()) {
                return redirect('/home');
            } else {
                return $next($request);
            }
        }
    }
}
