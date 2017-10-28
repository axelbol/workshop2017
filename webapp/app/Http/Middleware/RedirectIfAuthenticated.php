<?php

namespace App\Http\Middleware;

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
        switch ($guard) {
            case 'admin':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('admin.dashboard');
                    # code...
                }
                # code...
                break;

            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/home');
                }
                # code...
                break;
        }

        //EMPLOYEE
        switch ($guard) {
            case 'employee':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('employee.dashboard');
                    # code...
                }
                # code...
                break;

            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/home');
                }
                # code...
                break;
        }

        //if (Auth::guard($guard)->check()) {
        //    return redirect('/home');
        //}

        return $next($request);
    }
}
