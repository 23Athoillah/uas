<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostNilai extends Model
{
    use HasFactory;

    protected $table = 'post_nilai';

    function nilai()
    {
        return $this->belongsTo(Nilai::class);
    }   

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
