<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class SavePreviousUrl
{
    public function handle($request, Closure $next)
    {
        // Simpan URL sebelumnya ke dalam session
        if (!$request->is('admin/login')) {
            Session::put('previous_url', $request->fullUrl());
        }

        return $next($request);
    }
}
