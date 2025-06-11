<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            switch ($user->role) {
                case 'Admin':
                    return redirect()->intended('/admin/dashboard');
                case 'Petani':
                    return redirect()->intended('/petani/produk');
                case 'Konsumen':
                    return redirect()->intended('/konsumen/dashboard');
                default:
                    Auth::logout();
                    return redirect('/login')->withErrors(['role' => 'Role tidak dikenali.']);
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);
    }
}
