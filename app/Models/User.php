<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    // Jika nama tabel kamu menggunakan 'user', pastikan tetap menggunakan ini
    protected $table = 'user'; // atau 'user' jika memang tabel kamu bernama 'user'

    protected $fillable = [
        'username', 'email', 'password', 'roles_id', 'profile_picture',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    // Menambahkan method untuk enkripsi password
    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            // Pastikan password terenkripsi saat membuat user baru
            if ($user->password) {
                $user->password = Hash::make($user->password);
            }
        });

        static::updating(function ($user) {
            // Jika password diubah, pastikan tetap terenkripsi
            if ($user->password) {
                $user->password = Hash::make($user->password);
            }
        });
    }
}
