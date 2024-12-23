<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostJurusan extends Model
{
    use HasFactory;
    protected $table = 'post_jurusan';

    protected $fillable = [
        'user_id',
        'jurusan_id',
        'kat',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Jurusan
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
