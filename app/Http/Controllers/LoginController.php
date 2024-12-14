<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $redirectTo = '/dashboard'; // Rute default setelah login berhasil

    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Fungsi login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            if ($user->roles_id === 1) {
                return redirect()->route('dashboard'); // Admin ke dashboard utama
            } elseif ($user->roles_id === 2) {
                return redirect()->route('staff.dashboard'); // Staff ke dashboard staff
            } else {
                return redirect()->route('student.dashboard'); // Student ke dashboard student
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Fungsi logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
