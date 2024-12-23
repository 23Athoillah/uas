<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;
    
    

    protected $table = 'biodata';
    protected $fillable = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'alamat',
        'asal_sekolah',
        'kelas',
        'jurusan',
        'prestasi',
        'user_id',
        'img_user',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
