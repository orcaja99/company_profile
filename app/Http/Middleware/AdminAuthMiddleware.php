<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuthMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('admin')->check()) {
            // Jika sudah login, lanjutkan ke halaman yang diminta
            return $next($request);
        } else {
            // Jika belum login, arahkan ke halaman login admin
            return redirect()->route('admin.login');
        }
    }
}