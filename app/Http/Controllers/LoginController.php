<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    // Tampilkan form login
    public function showLogin()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Ambil user yang login
            $user = Auth::user();

            // Arahkan sesuai role
            switch ($user->role) {
                case 'Admin':
                    return redirect()->intended('/admin/dashboard');
                case 'Petani':
                    return redirect()->intended('/petani/produk');
                case 'Konsumen':
                    return redirect()->intended('/konsumen/dashboard');
                default:
                    Auth::logout(); // kalau role tidak dikenal, logout
                    return redirect('/login')->withErrors(['role' => 'Role tidak dikenali.']);
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);
    }
}
