<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumni';

    // Daftar kolom yang boleh diisi
    protected $fillable = [
        'user_id',
        'name',
        'year_graduated',
        'major',
        'further_study',
        'job',
    ];

    // Relasi ke tabel user (jika ada foreign key user_id)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
