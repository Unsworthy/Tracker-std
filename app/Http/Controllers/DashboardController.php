<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil data alumni berdasarkan user yang login
        $user = Auth::user();

        // Misalnya alumni hanya boleh dilihat oleh alumni yang memiliki relasi dengan user yang login
        $alumni = Alumni::where('user_id', $user->id)->get();
        // dd($alumni); // Debugging

        // Mengirim data alumni ke view dashboard
        return view('dashboard', compact('alumni'));
    }
}
