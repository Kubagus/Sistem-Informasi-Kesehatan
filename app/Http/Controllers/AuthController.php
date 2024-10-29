<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirect ke halaman home sesuai role
            return redirect()->intended($this->redirectBasedOnRole());
        }

        // Redirect kembali ke halaman login dengan pesan error
        return redirect()->back()->withErrors(['email' => 'Login failed.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    protected function redirectBasedOnRole()
    {
        $role = Auth::user()->role->name;
        switch ($role) {
            case 'admin':
                return '/admin/home';
            case 'dokter':
                return '/dokter/home';
            case 'perawat':
                return '/perawat/home';
            case 'apoteker':
                return '/apoteker/home';
            default:
                return '/home';
        }
    }
}
