<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('formlogin'); // Menampilkan view login
    }

    // Menangani proses login
    public function login(Request $request)
    {
        // Validasi input pengguna
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek kredensial login
        if (Auth::attempt($request->only('username', 'password'))) {
            // Jika berhasil, redirect ke halaman dashboard
            return redirect()->intended('/dashboard');
        }

        // Jika login gagal, kembalikan dengan pesan error
        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }
}
