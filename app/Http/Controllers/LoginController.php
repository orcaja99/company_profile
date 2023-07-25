<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil
            return redirect()->route('dashboard');
        } else {
            // Jika autentikasi gagal
            return back()->withErrors(['email' => 'Email atau password salah']);
        }
    }
}
