<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EnsureUserRole
{
    public function handle($request, $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $user = Auth::user();

        // Asegúrate de tener acceso al rol y su slug
        $userRole = $user->role ? $user->role->slug : null;

        if (!in_array($userRole, $roles)) {
            return redirect('/dashboard')->with('error', 'Acceso denegado.');
        }

        return $next($request);
    }
}