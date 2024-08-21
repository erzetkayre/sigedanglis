<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        };

        $userRole = Auth::user()->role_id;
        switch ($role) {
            case 'owner':
                if ($userRole == 1) {
                    return $next($request);
                }
                break;
            case 'admin':
                if ($userRole == 2) {
                    return $next($request);
                }
                break;
            case 'seller':
                if ($userRole == 3) {
                    return $next($request);
                }
                break;
        }

        switch ($userRole) {
            case 1:
                return redirect()->route('owner.dashboard');
            case 2:
                return redirect()->route('admin.dashboard');
            case 3:
                return redirect()->route('seller.dashboard');
        }

        return redirect()->route('login');
    }
}
