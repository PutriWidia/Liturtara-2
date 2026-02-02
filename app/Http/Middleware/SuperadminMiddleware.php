<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperadminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // kalau belum login
        if (!Auth::check()) {
            return redirect()->route('superadmin.login');
        }

        // kalau login tapi bukan superadmin
        if (Auth::user()->role !== 'superadmin') {
            Auth::logout();
            return redirect()->route('superadmin.login')
                ->with('error', 'Akses khusus superadmin');
        }

        // kalau aman
        return $next($request);
    }
}
