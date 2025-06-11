<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|min:6|confirmed',
        ]);

        Akun::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'konsumen',
            'status' => true,
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil, silakan login!');
    }
}
