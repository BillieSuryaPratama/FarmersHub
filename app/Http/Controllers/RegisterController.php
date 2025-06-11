<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun; // Ganti sesuai model yang kamu pakai

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
            'email' => 'required|email|unique:user,email', // nama tabel = 'user'
            'password' => 'required|min:6|confirmed',
        ]);

        Akun::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password, // tanpa hash
            'role' => 'konsumen',
            'status' => true,
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil, silakan login!');
    }
}
