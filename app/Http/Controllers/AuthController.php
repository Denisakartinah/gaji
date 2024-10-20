<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Tampilkan form login
    function login()
    {
        return view('authenticate.login');
    }

    // Proses login
    function loginreq(Request $request)
    {
        // Validasi input
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email wajib diisi',
                'password.required' => 'Password wajib diisi',
            ]
        );

        // Data login
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // Cek kredensial dan autentikasi user
        if (Auth::attempt($infologin)) {
            // Cek peran (role) user setelah login
            if (Auth::user()->role === 'admin') {
                return redirect('admin')->with('success', 'Halo Admin 👋, Anda Berhasil Login');
            } else {
                // Jika bukan admin, logout dan beri pesan error
                Auth::logout();
                return redirect('sesi')->withErrors('Anda tidak memiliki akses sebagai Admin')->withInput();
            }
        } else {
            // Jika login gagal
            return redirect('sesi')->withErrors('Username dan password yang dimasukan tidak sesuai')->withInput();
        }
    }

    // Tampilkan form registrasi
    function register()
    {
        return view('authenticate.register');
    }

    // Proses registrasi
    function registerreq(Request $request)
    {
        // Validasi input
        $request->validate(
            [
                'fullname' => 'required|min:5',
                'email' => 'required|unique:users,email',
                'password' => 'required|min:6',
            ],
            [
                'fullname.required' => 'Full Name wajib diisi.',
                'fullname.min' => 'Full Name minimal 5 karakter.',
                'email.required' => 'Email wajib diisi.',
                'email.unique' => 'Email sudah terdaftar.',
                'password.required' => 'Password wajib diisi.',
                'password.min' => 'Password minimal 6 karakter.',
            ]
        );

        // Data yang akan disimpan ke database
        $inforegister = [
            'name' => $request->fullname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            // Tidak ada gambar dan verify_key
            'role' => 'admin', // Set role menjadi admin saat registrasi
        ];

        // Simpan user ke database
        $user = User::create($inforegister);

        // Login otomatis setelah registrasi
        Auth::login($user);

        return redirect('/sesi')->with('success', 'Registrasi berhasil, Anda sudah login.');
    }

    // Logout
    function logout()
    {
        Auth::logout();
        return redirect('/sesi');
    }
}
