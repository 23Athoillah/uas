<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    public function run()
    {
        Jurusan::create([
            'jurusan_name' => 'Teknik Informatika',
            'jurusan_prodi' => 'S1',
            'jurusan_bidstudi' => 'Software Engineering',
        ]);

        Jurusan::create([
            'jurusan_name' => 'Teknik Elektro',
            'jurusan_prodi' => 'S1',
            'jurusan_bidstudi' => 'Elektronika',
        ]);

        // Tambahkan data lainnya sesuai kebutuhan
    }
}
