<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EnsureUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $userRole = Auth::user()->role ? Auth::user()->role->slug : 'usuario';

        if ($userRole !== $role) {
            return redirect('/dashboard')->with('error', 'Acceso denegado');
        }

        return $next($request);
    }
}
