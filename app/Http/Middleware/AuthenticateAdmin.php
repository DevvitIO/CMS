<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class AuthenticateAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $reqGuard = Auth::guard($guard);

        if($reqGuard->guest() || !$reqGuard->user()->is_admin) {
        	return redirect('admin/login');
        }

        return $next($request);
    }
}

