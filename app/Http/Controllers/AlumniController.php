<?php

namespace App\Http\Controllers;

use App\Models\User; // Pakai model User, bukan Alumni
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        // Mengambil data alumni berdasarkan roles_id = 3
        $alumni = User::where('roles_id', 3)->get();
        
        // Mengirim data alumni ke view
        return view('alumni.index', compact('alumni'));
    }

    public function show($id)
    {
        // Mengambil data alumni berdasarkan ID
        $alumni = User::findOrFail($id);

        // Mengirim data alumni ke view untuk ditampilkan
        return view('alumni.show', compact('alumni'));
    }
}
