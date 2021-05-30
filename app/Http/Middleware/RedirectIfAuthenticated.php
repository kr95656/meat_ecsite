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
        // デフォルト
        // if (Auth::guard($guard)->check()) {
        //     return redirect(RouteServiceProvider::HOME);
        // }

        // return $next($request);


        // マルチ認証 guardがuserかadminかで分岐させるよう変更
        if (Auth::guard($guard)->check() && $guard === 'customers') {
            return redirect(RouteServiceProvider::HOME);

        } elseif (Auth::guard($guard)->check() && $guard === 'employees') {
            return redirect(RouteServiceProvider::EMPLOYEE_HOME);

        }

        return $next($request);
    }
}
