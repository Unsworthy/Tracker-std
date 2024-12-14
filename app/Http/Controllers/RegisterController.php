<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // Fungsi untuk menampilkan form registrasi
    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|string|confirmed',
        ]);
    
        // Menambahkan roles_id, misalnya 'roles_id' = 1 untuk Admin
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->roles_id = 3; // Atau sesuaikan dengan logic yang sesuai
        $user->save();
    
        return redirect()->route('login');
    }
    
    
}
